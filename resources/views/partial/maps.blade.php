<div>
    @push('scripts')
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoicmFzaWRreSIsImEiOiJja3ZncnZiemIxdGdyMm9ueXNibjg0cjg1In0.DK7Qo3EufeJPqMUXHAR3cw';


        var map_add = new mapboxgl.Map({
            container: 'map_add',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [106.73858120477016, -6.209391837461502],
            zoom: 14
        });

        var marker = new mapboxgl.Marker({
                draggable: true
            })
            .setLngLat([106.73858120477016, -6.209391837461502])
            .addTo(map_add);

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

        marker.on('dragend', onDragEnd);

        var long = document.getElementById("long_edit").value;
        var lat = document.getElementById("lat_edit").value;

        const map_edit = new mapboxgl.Map({
            container: 'map_edit',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [long, lat],
            zoom: 14
        });

        var marker_edit = new mapboxgl.Marker()
            .setLngLat([long, lat])
            .addTo(map_edit);
    </script>
</div>