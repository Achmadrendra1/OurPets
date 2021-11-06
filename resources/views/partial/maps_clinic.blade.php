<div>
    @push('scripts')
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoicmFzaWRreSIsImEiOiJja3ZncnZiemIxdGdyMm9ueXNibjg0cjg1In0.DK7Qo3EufeJPqMUXHAR3cw';

        var map_clinic = new mapboxgl.Map({
            container: 'map_clinic',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [106.73858120477016, -6.209391837461502],
            zoom: 14
        });

        // var long = document.getElementById("long_edit").value;
        // var lat = document.getElementById("lat_edit").value;

        // looping long lat dari db clinic buat disini
        var marker = new mapboxgl.Marker()
            .setLngLat([106.73858120477016, -6.209391837461502])
            .addTo(map_clinic);
    </script>
</div>