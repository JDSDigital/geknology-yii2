(function ($) {

	$.fn.SameHeight = function () {

		diffBoxAndContent = 0;

		this.run = function () {
			// Boxes
			var bhs = this.map(function () {
				return $(this).height();
			}).get();
			var mbh = Math.max.apply(null, bhs);

			// Contents
			var chs = this.children().map(function () {
				return $(this).height();
			}).get();
			var mch = Math.max.apply(null, chs);

			diffBoxAndContent = mbh - mch;
			this.height(mbh);
		};

		this.update = function () {
			var chs = this.children().map(function () {
				return $(this).height();
			}).get();
			var mch = Math.max.apply(null, chs);
			var newHeight = mch + diffBoxAndContent;
			this.height(newHeight);
		};

		this.run();
		my = this;
		var resize = function () {
			my.update();
		};
		$(window).resize(resize);

		return this;
	};
})(jQuery);

// initialization of slider revolution
var tpj = jQuery,
        revapi24;

tpj(document).ready(function () {
  if (tpj("#rev_slider_24_1").revolution == undefined) {
    revslider_showDoubleJqueryError("#rev_slider_24_1");
  } else {
    revapi24 = tpj("#rev_slider_24_1").show().revolution({
      sliderType: "standard",
      jsFileLocation: "../../assets/vendor/revolution-slider/revolution/js/",
      sliderLayout: "fullscreen",
      dottedOverlay: "none",
      delay: 9000,
      navigation: {
        keyboardNavigation: "off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation: "off",
        mouseScrollReverse: "default",
        onHoverStop: "off",
        bullets: {
          enable: true,
          hide_onmobile: false,
          style: "bullet-bar",
          hide_onleave: false,
          direction: "horizontal",
          h_align: "center",
          v_align: "bottom",
          h_offset: 0,
          v_offset: 50,
          space: 5,
          tmp: ''
        }
      },
      responsiveLevels: [1240, 1024, 778, 480],
      visibilityLevels: [1240, 1024, 778, 480],
      gridwidth: [1240, 1024, 778, 480],
      gridheight: [868, 768, 960, 720],
      lazyType: "none",
      shadow: 0,
      spinner: "off",
      stopLoop: "off",
      stopAfterLoops: -1,
      stopAtSlide: -1,
      shuffle: "off",
      autoHeight: "off",
      fullScreenAutoWidth: "off",
      fullScreenAlignForce: "off",
      fullScreenOffsetContainer: "",
      fullScreenOffset: "60px",
      hideThumbsOnMobile: "off",
      hideSliderAtLimit: 0,
      hideCaptionAtLimit: 0,
      hideAllCaptionAtLilmit: 0,
      debugMode: false,
      fallbacks: {
        simplifyAll: "off",
        nextSlideOnWindowFocus: "off",
        disableFocusListener: false
      }
    });
  }

  if (revapi24) revapi24.revSliderSlicey();
});

$(document).on('ready', function () {

    // initialization of text animation (typing)
    /*$(".u-text-animation.u-text-animation--typing").typed({
      strings: [
        "profesionales",
        "creativos",
        "geknology"
      ],
      typeSpeed: 60,
      loop: false,
      backDelay: 1500
    });*/

});

$(window).on('load', function () {

	// initialization of carousel
	$.HSCore.components.HSCarousel.init('.js-carousel');

	$('#carouselCus1').slick('setOption', 'responsive', [{
		breakpoint: 768,
		settings: {
			slidesToShow: 1
		}
	}], true);

  $('.services-container').SameHeight();
  $('.services-prices').SameHeight();

  // initialization of header
  $.HSCore.components.HSHeader.init($('#js-header'));
  $.HSCore.helpers.HSHamburgers.init('.hamburger');

  // initialization of header height offset
  $.HSCore.helpers.HSHeightCalc.init();

  // initialization of go to section
  // $.HSCore.components.HSGoTo.init('.js-go-to');

  // initialization of HSScrollNav
  $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
    duration: 700,
    easing: 'easeOutExpo'
  });
  $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
    duration: 700,
    easing: 'easeOutExpo'
  });

	// initialization of HSMegaMenu component
	$('.js-mega-menu').HSMegaMenu({
		event: 'hover',
		pageContainer: $('.container'),
		breakpoint: 991
	});

	$('#btn-submit').on('click', function(e) {
		let fields = ['name', 'email', 'phone', 'body', 'verifycode'];
		let names = ['Nombre', 'Correo', 'Teléfono', 'Mensaje', 'Código de verificación'];

		for (let i = 0; i < fields.length; i++) {
			if ($('#contactform-'+fields[i]).val() == '') {
				console.log(fields[i]);
				swal('Error', names[i]+' no puede estar vacío.', 'error');
				return false;
			}
		}
		
		return true;
	});

});
