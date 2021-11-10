<div>
    @push('scripts')
    <script>
        let lat_user = document.getElementById("lat_user").value;
        let long_user = document.getElementById("long_user").value;


        mapboxgl.accessToken = 'pk.eyJ1IjoicmFzaWRreSIsImEiOiJja3ZncnZiemIxdGdyMm9ueXNibjg0cjg1In0.DK7Qo3EufeJPqMUXHAR3cw';
        var map_clinic = new mapboxgl.Map({
            container: 'map_clinic',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [long_user, lat_user],
            zoom: 14
        });

        <?php
        $json_data = json_encode($clinic);
        $data_clin = json_decode($json_data, true);
        $geoJSON = array();
        foreach ($data_clin as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'geometry' => array(
                    'type' => 'Point',
                    'coordinates' => array(
                        $value['long'],
                        $value['lat'],
                    ),
                    "properties" => [
                        "phoneFormatted" => "(202) 234-7336",
                        "phone" => "2022347336",
                        "address" => "1471 P St NW",
                        "city" => "Washington DC",
                        "country" => "United States",
                        "crossStreet" => "at 15th St NW",
                        "postalCode" => "20005",
                        "state" => "D.C."
                    ]
                ),
            );
        }
        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features,
        );

        $final_data = json_encode($new_data, JSON_PRETTY_PRINT);;
        $data_p = json_decode($final_data);
        ?>



        const JSONPoint = <?= json_encode($data_p, JSON_PRETTY_PRINT) ?>;;
        const GeoData = JSON.parse(JSONPoint);
        console.log(GeoData);




        map_clinic.on('load', () => {
            /**
             * This is where your '.addLayer()' used to be, instead
             * add only the source without styling a layer
             */
            map_clinic.addSource('places', {
                'type': 'geojson',
                'data': JSONPoint
            });
            addMarkers();
        });

        function addMarkers() {
            /* For each feature in the GeoJSON object above: */
            for (const marker of JSONPoint.features) {
                /* Create a div element for the marker. */
                const el = document.createElement('div');
                /* Assign a unique `id` to the marker. */
                el.id = `marker-${marker.properties.id}`;
                /* Assign the `marker` class to each marker for styling. */
                el.className = 'marker';

                /**
                 * Create a marker using the div element
                 * defined above and add it to the map.
                 **/
                new mapboxgl.Marker(el, {
                        offset: [0, -23]
                    })
                    .setLngLat(marker.geometry.coordinates)
                    .addTo(map_clinic);

                /**
                 * Listen to the element and when it is clicked, do three things:
                 * 1. Fly to the point
                 * 2. Close all other popups and display popup for clicked store
                 * 3. Highlight listing in sidebar (and remove highlight for all other listings)
                 **/
            }
        }
    </script>
</div>

<!-- // var long = document.getElementById("long_clinic").value;


// var data = document.getElementById("json").value;
// var array = JSON.parse(data);
// // console.log(data);

// array.forEach(function(x, index) {
// long_clinic.value = array[index].long
// let long = array[index].long
// let lat = array[index].lat
// console.log(long, lat);



// var marker = new mapboxgl.Marker()
// .setLngLat([long, lat])
// .addTo(map_clinic);


// }); -->