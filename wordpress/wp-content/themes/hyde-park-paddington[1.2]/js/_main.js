/* $(document).ready
---------------------------------------- */
$(document).ready(function(){
	
	
	$('body').removeClass('no-js');


    // ----- Hamburger Menu
    // ---------------------------------------------
	$('.hamburger-button').click(function (e) {
		e.preventDefault();
		// console.log('Open the menu...');
		$('#navigation').stop().slideToggle('medium');
		$('#navigation').toggleClass('active');
		$('.logo').toggleClass('active');
		this.toggle = !this.toggle;
        $(".logo").stop().fadeTo(200, this.toggle ? 0.05 : 1);
		$('.hamburger-button').toggleClass('active');
	});


    // ----- Accordion
    // ---------------------------------------------
	$('.dropdown-content').hide();
	$('a.dropdown-link').click(function(e){
		e.preventDefault();
		$(this).next('div.dropdown-content').stop().slideToggle();
		$(this).toggleClass('active');
		/*
		var linkID = $(this).attr('id');
		// console.log('#' + linkID + '-container');
		if ($(this).hasClass('active')) {
		 	$('.dropdown-content').stop().slideUp('fast');
			$(this).removeClass('active');
		} else {
		 	$('.dropdown-content').stop().slideUp('fast');
		 	$(this).next('div.dropdown-content').stop().slideDown('fast', function() {
				$('html,body').animate({ 
					scrollTop: ( $('#' + linkID + '-container').offset().top - 115 )
				}, 500);
			});
		 	$('a.dropdown-link').removeClass('active');
			$(this).addClass('active');
		}
		*/
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
			$(".flexslider").hover(function() {
				$(".flex-direction-nav").stop().fadeIn();
			},
			function() {
				$(".flex-direction-nav").stop().fadeOut();
			});
		},
		slideshowSpeed:5000,
		animationSpeed:500
	});
	
	$('.downloads .download h6').each(function(){
		// console.log($(this).parent().prev().children('h6').html());
		if($(this).parent().prev().children('h6').html() === $(this).html()) {
			// console.log('Same HTML');
			$(this).hide();
		} else {
			// console.log('Different HTML');
			$(this).show();
		}
	});


/* -------------------------------------------- */
});


/* $(window).load
---------------------------------------- */
$(window).load(function() {

/* -------------------------------------------- */
});