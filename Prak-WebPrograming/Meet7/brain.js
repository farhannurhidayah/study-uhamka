function home() {
    $(document).ready(function(){
        $('#utama').load("konten.html");

    });
}
function oop() {
    $(document).ready(function(){
        $('#utama').load("audio.html");

    });
}
function Web() {
    $(document).ready(function(){
        $('#utama').load("SoftwareNumerik.html");

    });
}
function Tbo() {
    $(document).ready(function(){
        $('#utama').load("Pemograman_Web.html");

    });
}




$(document).ready(function(){

    $("#anime").click(function(){
        $("#foto").slideToggle(2000);
    });

    $("#footer").mouseenter(function(){
    
    $("#bawah").animate({fontSize: '2em'}, "fast");
    $("#foto").animate({opacity: '0.5'}, "fast");
         });

    $("#footer").mouseleave(function() {
    $("#bawah").animate({fontSize: '32px'}, "fast" );
    $("#foto").animate({opacity: '1'}, "fast"); 
    
    });

    });