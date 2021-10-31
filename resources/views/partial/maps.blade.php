<div>
    @push('scripts')
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWNobWFkcmVuZHJhMSIsImEiOiJja3VqdXlwZnkzMXh5MnZuemY0dXlxajd3In0.UI_gQ4TAo_CwXdZVduEIxQ';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [106.73858120477016, -6.209391837461502, 106],
            zoom: 14
        });

        mapboxgl.accessToken = 'pk.eyJ1IjoiYWNobWFkcmVuZHJhMSIsImEiOiJja3VqdXlwZnkzMXh5MnZuemY0dXlxajd3In0.UI_gQ4TAo_CwXdZVduEIxQ';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [106.73858120477016, -6.209391837461502, 106],
            zoom: 14
        });

        // map.addControl(
        //     new MapboxGeocoder({
        //         accessToken: mapboxgl.accessToken,
        //         mapboxgl: mapboxgl
        //     })
        // );

        const marker = new mapboxgl.Marker({
                draggable: true
            })
            .setLngLat([106.73858120477016, -6.209391837461502, 106])
            .addTo(map);

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
    </script>
</div>