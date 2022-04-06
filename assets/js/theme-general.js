/////////////////////////////////////////////
// lazy load
/////////////////////////////////////////////

var lazyLoadInstances = [];
var paperPlaneLazyLoad = new LazyLoad({
  elements_selector: ".lazy",
  class_loading: "lazy-loading",
  class_loaded: "lazy-loaded",
  callback_enter: function(el) {
    var oneLL = new LazyLoad({
      container: el
    });
    lazyLoadInstances.push(oneLL);
    AOS.refreshHard();
  },
  callback_reveal: (el) => {
    if (el.complete && el.naturalWidth !== 0) {
      el.classList.remove('lazy-loading');
      el.classList.add('lazy-loaded');
    }
  }
});

/////////////////////////////////////////////
// AOS
/////////////////////////////////////////////

AOS.init({
  duration: 900,
  once: false,
  mirror: true,
  //offset: 350
});

/////////////////////////////////////////////
// Infinite scroll
/////////////////////////////////////////////
/*
function initInfiniteScroll() {
  if (jQuery(".nav-next a")[0]) {
    jQuery('.grid-infinite').infiniteScroll({
      // options
      path: '.nav-next a',
      append: '.grid-item-infinite',
      status: '#infscr-loading',
      prefill: true,
      loadOnScroll: false,
      history: false,
      button: '.view-more-button-js',
      scrollThreshold: false,
      checkLastPage: true
    });

    jQuery('.grid-infinite').on('append.infiniteScroll', function(event, response, path, items) {
      paperPlaneLazyLoad.update();
      AOS.refreshHard();
    });
    window.setInterval(function() {
      if (jQuery('.infinite-scroll-last').is(":visible")) {
        jQuery('#infscr-loading').fadeOut(300);
      }
    }, 3000);
  }
}
initInfiniteScroll();
*/
/////////////////////////////////////////////
// impaginazione forzata immagini e video in the_content()
/////////////////////////////////////////////

function manipulateContent(e) {
  // Wrappo i video player in una div per dimensionarli responsive
  jQuery('.content-styled iframe').wrap('<div class="video-frame"></div>');
  // Controllo se l'immagine ha la didascalia e se manca la wrappo per allinearla
  if (!jQuery('img.alignnone').closest('.wp-caption').length) {
    jQuery('img.alignnone').wrap('<div class="wp-caption alignnone"></div>');
  }
  if (!jQuery('img.aligncenter').closest('.wp-caption').length) {
    jQuery('img.aligncenter').wrap('<div class="wp-caption aligncenter"></div>');
  }
  if (jQuery('img.alignleft')) {
    jQuery('img.alignleft').wrap('<div class="wp-caption alignleft"></div>');
  }
  if (jQuery('img.alignright')) {
    jQuery('img.alignright').wrap('<div class="wp-caption alignright"></div>');
  }
}
manipulateContent();

/////////////////////////////////////////////
// hamburger
/////////////////////////////////////////////

function hamburgerMenu(e) {
  jQuery('.hambuger-element').toggleClass('open');
  if (jQuery('.hambuger-element').hasClass('open')) {
    jQuery('html, body').css({
      overflow: 'hidden',
    });
    jQuery('#header-overlay').focus();
    jQuery(this).attr('aria-expanded', true);
  } else {
    jQuery('html, body').css({
      overflow: 'visible',
    });
    jQuery('#header').focus();
    jQuery(this).attr('aria-expanded', false);
    jQuery('.scroll-opportunity').scrollTop(0);
  }
  jQuery('#head-overlay').toggleClass('hidden');
  jQuery('#header').toggleClass('overlayed');
  jQuery('.mega-menu-js').addClass('hidden');
  jQuery('.mega-menu-js-trigger').removeClass('current-mega-menu');
}

/////////////////////////////////////////////
// menu scroll effect
/////////////////////////////////////////////

var lastScrollTop = 0;

function scrollDirectionMenu() {
  var st = jQuery(this).scrollTop();
  if ((st > lastScrollTop) && (st > 100)) {
    // downscroll code
    jQuery('#header').addClass('hidden');
    jQuery('.mega-menu-js').addClass('hidden');
    jQuery('.mega-menu-js-trigger').removeClass('current-mega-menu');
  } else {
    // upscroll code
    jQuery('#header').removeClass('hidden');
  }
  lastScrollTop = st;
}

//jQuery(window).scroll(function(event) {
//scrollDirectionMenu();
//});

/////////////////////////////////////////////
// Mega Menus
/////////////////////////////////////////////

if (jQuery('.mega-menu-js')[0]) {
  jQuery('.header-menu-js > .menu-item > a').not('.mega-menu-js-trigger').hover(function(e) {
    jQuery('.mega-menu-js').addClass('hidden');
    jQuery('.mega-menu-js-trigger').removeClass('current-mega-menu');
  });

  jQuery('.mega-menu-js-trigger').click(function(e) {
    var megamenu_open_id = jQuery(this).data('megamenu-open-id');

    if (jQuery(this).hasClass('current-mega-menu')) {
      jQuery(this).removeClass('current-mega-menu');
      jQuery(megamenu_open_id).addClass('hidden');
    } else {
      jQuery('.mega-menu-js').addClass('hidden');
      jQuery('.mega-menu-js-trigger').removeClass('current-mega-menu');
      jQuery(this).addClass('current-mega-menu');
      jQuery(megamenu_open_id).removeClass('hidden');
    }

    e.preventDefault();
  });

  jQuery('.mega-menu-js-trigger').click(function(e) {
    e.preventDefault();
  });

  jQuery('.mega-menu-js').mouseleave(function(e) {
    jQuery(this).addClass('hidden');
    jQuery('.mega-menu-js-trigger').removeClass('current-mega-menu');
    e.preventDefault();
  });
}

/////////////////////////////////////////////
// sub menu mobile
/////////////////////////////////////////////

jQuery('.overlay-menu-mobile-js > .menu-item-has-children > a').each(function(i, el) {
  jQuery(this).append('<span class="menu-icon-toggle menu-icon-closed"></span>');
});

jQuery('.overlay-menu-mobile-js > .menu-item-has-children > a').click(function(e) {
  //alert('sdfsdf');
  if (jQuery(this).find('span').hasClass('menu-icon-closed')) {
    jQuery(this).find('span').removeClass('menu-icon-closed').addClass('menu-icon-open');
  } else {
    jQuery(this).find('span').removeClass('menu-icon-open').addClass('menu-icon-closed');
  }
  jQuery(this).parent().find('.sub-menu').slideToggle(150);
  e.preventDefault();
});

/////////////////////////////////////////////
// slick slideshow
/////////////////////////////////////////////

jQuery('.features-mobile-slider-js, .logos-slideshow-extended-js, .logos-slideshow-compact-js, .feature-image-slider-js, .slide-case-study-js, .slide-comunicato-stampa-js, .slide-foto-js').on('init reInit', function(event, slick, currentSlide, nextSlide) {
  AOS.refresh();
});
jQuery('.logos-slideshow-compact-js').slick({
  speed: 9000,
  autoplay: true,
  autoplaySpeed: 0,
  cssEase: 'linear',
  lazyLoad: 'progressive',
  dots: false,
  focusOnSelect: true,
  draggable: true,
  infinite: true,
  accessibility: true,
  adaptiveHeight: false,
  slidesToShow: 4,
  slidesToScroll: 4,
  arrows: false,
  pauseOnHover: true,
  pauseOnFocus: true,
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  }]
});

jQuery('.logos-slideshow-extended-js').slick({
  speed: 14000,
  autoplay: true,
  autoplaySpeed: 0,
  cssEase: 'linear',
  lazyLoad: 'progressive',
  dots: false,
  focusOnSelect: true,
  draggable: true,
  infinite: true,
  accessibility: true,
  adaptiveHeight: false,
  slidesToShow: 8,
  slidesToScroll: 8,
  arrows: false,
  pauseOnHover: true,
  pauseOnFocus: true,
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  }]
});

jQuery('.feature-image-slider-js').slick({
  lazyLoad: 'progressive',
  dots: false,
  focusOnSelect: true,
  draggable: true,
  infinite: false,
  fade: true,
  accessibility: true,
  adaptiveHeight: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
});

jQuery('.features-mobile-slider-js').slick({
  lazyLoad: 'progressive',
  dots: true,
  focusOnSelect: true,
  draggable: true,
  infinite: true,
  variableWidth: true,
  accessibility: true,
  adaptiveHeight: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
});



jQuery('.slide-case-study-js, .slide-comunicato-stampa-js, .slide-foto-js').slick({
  lazyLoad: 'progressive',
  dots: true,
  focusOnSelect: true,
  draggable: true,
  infinite: false,
  accessibility: true,
  adaptiveHeight: false,
  variableWidth: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  responsive: [{
    breakpoint: 1024,
    settings: {
      variableWidth: false,
      verticalSwiping: false
    }
  }]
});

/////////////////////////////////////////////
// Numbers counter
/////////////////////////////////////////////

function numbers_counter() {
  if (jQuery('.count')[0]) {
    var win_height = (jQuery(window).height() / 1.2);
    var scrollTop = jQuery(window).scrollTop();
    jQuery('.count').each(function(i, el) {
      data_number = jQuery(this).data('data-bar-number');
      elementOffset = jQuery(this).offset().top,
        distance = (elementOffset - scrollTop);
      if (distance < win_height) {
        jQuery(this).prop('Counter', 0).animate({
          Counter: jQuery(this).attr('data-bar-number')
        }, {
          duration: 2000,
          easing: 'swing',
          step: function(now) {
            jQuery(this).text(Math.ceil(now));
          }

        });
      }

    });
  }
}
numbers_counter();

/////////////////////////////////////////////
// expandables
/////////////////////////////////////////////

jQuery('.expander').click(function(e) {
  if (jQuery(this).hasClass('exp-close')) {
    jQuery(this).addClass('exp-open').removeClass('exp-close').attr('aria-expanded', false).focus();
    jQuery(this).find('.exp-arrow').addClass('exp-plus').removeClass('exp-minus');
    jQuery(this).parent().next('.expandable-content').slideUp(150);
  } else {
    jQuery(this).addClass('exp-close').removeClass('exp-open').attr('aria-expanded', true);
    jQuery(this).find('.exp-arrow').removeClass('exp-plus').addClass('exp-minus');
    jQuery(this).parent().next('.expandable-content').slideDown(150).focus();
  }
  e.preventDefault();
});

/////////////////////////////////////////////
// features
/////////////////////////////////////////////

jQuery('.feature-activator-js').click(function(e) {
  jQuery('.feature-text-js').slideUp(300);
  jQuery('.feature-block-js').removeClass('active-feature');
  jQuery('.activator-status').text("+");
  var feature_number = jQuery(this).data('feature-number');
  var feature_number_slider = feature_number - 1;
  jQuery(this).parent('.feature-block-js').addClass('active-feature');
  jQuery(this).next('.feature-text-js').slideDown(300);
  jQuery('.feature-image-slider-js').slick('slickGoTo', feature_number_slider);
  var isVisible = jQuery(this).parent('.feature-block-js').hasClass('active-feature');
  if (isVisible) {
    jQuery(this).find('.activator-status').text("");
  } else {
    jQuery(this).find('.activator-status').text("+");
  }
  e.preventDefault();
});

/////////////////////////////////////////////
// features mobile
/////////////////////////////////////////////

jQuery('.feature-activator-mobile-js').click(function(e) {
  //jQuery('.feature-text').slideUp(300);
  //jQuery('.feature-texts').removeClass('active-feature');
  var feature_number = jQuery(this).data('feature-mobile-number');
  jQuery('.feature-texts-js-' + feature_number).toggleClass('active');
  jQuery('.feature-content-js-' + feature_number).slideToggle(300);
  var isVisible = jQuery('.feature-texts-js-' + feature_number).hasClass('active');
  if (isVisible) {
    jQuery('.activator-status-js-' + feature_number).text("-");
  } else {
    jQuery('.activator-status-js-' + feature_number).text("+");
  }

  e.preventDefault();
});

/////////////////////////////////////////////
// Modals
/////////////////////////////////////////////

if (jQuery('.paperplane-modal')[0]) {
  jQuery('.modal-close-js').click(function(e) {
    var modal_close_id = jQuery(this).data('modal-close-id');
    jQuery(modal_close_id).addClass('hidden');
    jQuery('html, body').css({
      overflow: 'visible',
    });
    e.preventDefault();
  });
  jQuery('.modal-open-js').click(function(e) {
    var modal_open_id = jQuery(this).data('modal-open-id');
    jQuery(modal_open_id).removeClass('hidden');
    jQuery('html, body').css({
      overflow: 'hidden',
    });
    e.preventDefault();
  });
}

/////////////////////////////////////////////
// Clear ovarlay scroll when resizing desktop - mobile if desktop has no overlay menu
/////////////////////////////////////////////

function clear_overlay_scroll() {
  var clear_overlay_scroll_window_width = jQuery(window).width();
  if (!jQuery('#head-overlay').hasClass('hidden')) {
    if (clear_overlay_scroll_window_width > 1023) {
      jQuery('html, body').css({
        overflow: 'visible',
      });
    } else {
      jQuery('html, body').css({
        overflow: 'hidden',
      });
    }
  }
}

/////////////////////////////////////////////
// Window scroll / resize events
/////////////////////////////////////////////
//let scrollRef = 0;
jQuery(window).scroll(function() {
  numbers_counter();
  //scrollRef <= 10 ? scrollRef++ : AOS.refresh();
});

//jQuery(window).resize(function() {
//});

/////////////////////////////////////////////
// Viewport units / contenuti fullscreen mobile sottraendo barre di navigazione dei browser
/////////////////////////////////////////////

// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);
// We listen to the resize event
window.addEventListener('resize', () => {
  // We execute the same script as before
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});

/////////////////////////////////////////////
// hide editor section front end labels
/////////////////////////////////////////////

jQuery('.click-hide').click(function(e) {
  jQuery(this).next('.hide-me').toggleClass('hidden-label');
  var isVisible = jQuery(this).next('.hide-me').hasClass('hidden-label');
  jQuery(this).text(isVisible ? "+" : "-");
  e.preventDefault();
});