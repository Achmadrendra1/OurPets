<div>
    @push('scripts')
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoicmFzaWRreSIsImEiOiJja3ZncnZiemIxdGdyMm9ueXNibjg0cjg1In0.DK7Qo3EufeJPqMUXHAR3cw';

        // var long = document.getElementById("long_clinic").value;
        var lat = document.getElementById("lat_clinic").value;
        let long_clinic = document.querySelector('#long_clinic');

        var data = document.getElementById("json").value;
        var array = JSON.parse(data);
        // console.log(data);

        array.forEach(function(x, index) {
            long_clinic.value = array[index].long
            let long = array[index].long
            let lat = array[index].lat
            console.log(long, lat);

            var map_clinic = new mapboxgl.Map({
                container: 'map_clinic',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [array[index].long, array[index].lat],
                zoom: 14
            });

            var marker = new mapboxgl.Marker()
                .setLngLat([long, lat])
                .addTo(map_clinic);


        });
    </script>
</div>