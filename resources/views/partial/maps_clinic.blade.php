<div>
    @push('scripts')
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoicmFzaWRreSIsImEiOiJja3ZncnZiemIxdGdyMm9ueXNibjg0cjg1In0.DK7Qo3EufeJPqMUXHAR3cw';

        var long = document.getElementById("long_clinic").value;
        var lat = document.getElementById("lat_clinic").value;


        var map_clinic = new mapboxgl.Map({
            container: 'map_clinic',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [long, lat],
            zoom: 14
        });

        // looping long lat dari db clinic buat disini
        var marker = new mapboxgl.Marker()
            .setLngLat([long, lat])
            .addTo(map_clinic);
    </script>
</div>