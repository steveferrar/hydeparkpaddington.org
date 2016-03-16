/* $(document).ready
---------------------------------------- */
$(document).ready(function(){
	
	
	$('body').removeClass('no-js');


    // ----- Hamburger Menu
    // ---------------------------------------------
	$('.hamburger-open').click(function (e) {
		e.preventDefault();
		// console.log('Open the menu...');
		$('#navigation').stop().slideDown('medium');
		$('#navigation').addClass('active');
		$('.hamburger-open').addClass('active');
	});

	$('.hamburger-close').click(function (e) {
		e.preventDefault();
		// console.log('Close the menu...');
		$('#navigation').stop().slideUp('medium');
		$('#navigation').removeClass('active');
		$('.hamburger-open').removeClass('active');
	});


    // ----- Accordion
    // ---------------------------------------------
	$('.dropdown-content').hide();
	$('a.dropdown-link').click(function(e){
		e.preventDefault();
		if ($(this).hasClass('active')) {
		 	$('.dropdown-content').stop().slideUp('fast');
			$(this).removeClass('active');
		} else {
		 	$('.dropdown-content').stop().slideUp('fast');
		 	$(this).next('div.dropdown-content').stop().slideDown('fast');
		 	$('a.dropdown-link').removeClass('active');
			$(this).addClass('active');
		}
	});


    // ----- nivoLightbox
    // ---------------------------------------------
	$('a.lightbox').nivoLightbox();


    // ----- FlexSlider
    // ---------------------------------------------
	$('.flexslider').flexslider({
		animation: 'fade', 
		controlNav: false,
		directionNav: true,
		keyboard: true,
		start: function(){
			 $('.flexImages').show();
			 $('.flex-direction-nav').show();
		}
	});


/* -------------------------------------------- */
});


/* $(window).load
---------------------------------------- */
$(window).load(function() {

/* -------------------------------------------- */
});