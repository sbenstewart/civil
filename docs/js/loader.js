	var animData = {
		wrapper: document.querySelector('#preloader'),
		animType: 'svg',
		loop: true,
		prerender: true,
		autoplay: true,
		path: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/35984/LEGO_loader.json'
	};
	var anim = bodymovin.loadAnimation(animData);
anim.setSpeed(3.4);

$(document).ready(function($) {
    var Body = $('body');
    Body.addClass('preloader-site');
});
$(window).load(function() {
    $('.preloader-wrapper').fadeOut();
    $('body').removeClass('preloader-site');
});
