	var animData = {
		wrapper: document.querySelector('#preloader'),
		animType: 'svg',
		loop: true,
		prerender: true,
		autoplay: true,
		path: 'LEGO_loader.json'
	};
	var anim = bodymovin.loadAnimation(animData);
anim.setSpeed(3.4);

$(document).ready(function($) {
    var Body = $('body');
    Body.addClass('preloader-site');
});
$(window).load(function() {
    $('.preloader-wrapper').delay(5000).fadeOut();
    $('body').removeClass('preloader-site');
});
