/* ==========================================================================
   Dropdown Menus
   ========================================================================== */
  $(".dropdown").hover(
    function () {
      $(this).addClass('open');
    },
    function () {
      $(this).removeClass('open');
    }
  );

/* ==========================================================================
   WOW Scroll Spy
   ========================================================================== */
   var wow = new WOW({
    //disabled for mobile
	    mobile: false
	});
	wow.init();

/* ==========================================================================
   Nivo Lightbox
   ========================================================================== */
   $('.lightbox').nivoLightbox({
    effect: 'fadeScale',
    keyboardNav: true,
    errorMessage: 'The requested content cannot be loaded. Please try again later.'
  });

/* ==========================================================================
   Contact From
   ========================================================================== */

	$('.input').blur(function(){
	    if( $(this).val() ) {
	        $(this).parent('.label-line').addClass('active checked');
	    } else {
		    $(this).parent('.label-line').removeClass('active checked');
	    }
	});

	$('.label-line').click(function(){
		$(this).addClass('active');
		if ($('.label-line').hasClass('checked')){}
		else{
			$('.label-line').removeClass('checked');
		}
	});

/* ==========================================================================
   Back Top Link
   ========================================================================== */
  var offset = 200;
  var duration = 500;
  $(window).scroll(function() {
    if ($(this).scrollTop() > offset) {
      $('.back-to-top').fadeIn(400);
    } else {
      $('.back-to-top').fadeOut(400);
    }
  });
  $('.back-to-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 600);
    return false;
  })

   // Projects Carousel
  $("#post-carousel").owlCarousel({
    navigation : false,
    pagination: true,
    slideSpeed : 400,
    stopOnHover: true,
    autoPlay: 3000,
    items :1,
  });
/* ==========================================================================
   Slick Nav
   ========================================================================== */
    $('.wpb-mobile-menu').slicknav({
      prependTo: '.navbar-header',
      parentTag: 'span',
      allowParentLinks: true,
      duplicate: false,
      label: '',
      closedSymbol: '<i class="fa fa-angle-right"></i>',
      openedSymbol: '<i class="fa fa-angle-down"></i>',
    });
