$(document).ready(function($) {
    var Body = $('body');
    Body.addClass('preloader-site');
});
$(window).on('load',function() {
    
    $('.preloader-wrapper').delay(800).fadeOut(800);
    $('body').removeClass('preloader-site');
    var scene = $('#scene').get(0);
    var parallaxInstance = new Parallax(scene);
});