function home() {
    $(document).ready(function () {
        $("#utama").load("konten.html");
    });
}
function about() {
    $(document).ready(function () {
        $("#utama").load("{{ asset('/html/about.html/') }}");
    });
}
function katalog() {
    $(document).ready(function () {
        $("#utama").load("SoftwareNumerik.html");
    });
}
function kontak() {
    $(document).ready(function () {
        $("#utama").load("Pemograman_Web.html");
    });
}
