var loadFile = function (event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function () {
        URL.revokeObjectURL(output.src) // free memory
    }
};

$(function () {
    var url = document.location.toString();
    if (url.match('#')) {
        console.log(url.split('#')[1]);
        $('a[href="#' + url.split('#')[1] + '"]').parent().addClass('active');
        $('#' + url.split('#')[1]).addClass('active in')
    }
    $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
    });
});

document.addEventListener("touchstart", function () {}, true)