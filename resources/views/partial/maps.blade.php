<div>
    @push('scripts')
    <script>
        var long = document.getElementById("long_edit").value;
        var lat = document.getElementById("lat_edit").value;

        mapboxgl.accessToken = 'pk.eyJ1IjoicmFzaWRreSIsImEiOiJja3ZncnZiemIxdGdyMm9ueXNibjg0cjg1In0.DK7Qo3EufeJPqMUXHAR3cw';
        var map_edit = new mapboxgl.Map({
            container: 'map_edit',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [long, lat],
            zoom: 14
        });

        var map_add = new mapboxgl.Map({
            container: 'map_add',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [106.73858120477016, -6.209391837461502, 106],
            zoom: 14
        });

        var marker = new mapboxgl.Marker({
                draggable: true
            })
            .setLngLat([long, lat])
            .addTo(map_add);

        var marker_edit= new mapboxgl.Marker()
            .setLngLat([long, lat])
            .addTo(map_edit);

        function onDragEnd() {
            const lngLat = marker.getLngLat();
            var long = lngLat.lng;
            var lat = lngLat.lat;

            function GetData() {
                document.getElementById("long").value = long;
                document.getElementById("lat").value = lat;
            };
            GetData();
        }

        marker.on('dragend', onDragEnd)

        // map.addControl(
        //     new MapboxGeocoder({
        //         accessToken: mapboxgl.accessToken,
        //         mapboxgl: mapboxgl
        //     })
        // );
    </script>
</div>