(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/scripts/app"],{

/***/ "./resources/assets/scripts/app.js":
/*!*****************************************!*\
  !*** ./resources/assets/scripts/app.js ***!
  \*****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! alpinejs */ "./node_modules/alpinejs/dist/alpine.js");
/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(alpinejs__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var lity__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! lity */ "./node_modules/lity/dist/lity.js");
/* harmony import */ var lity__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(lity__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var flickity__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! flickity */ "./node_modules/flickity/js/index.js");
/* harmony import */ var flickity__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(flickity__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! gsap */ "./node_modules/gsap/index.js");
/* harmony import */ var gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! gsap/ScrollTrigger */ "./node_modules/gsap/ScrollTrigger.js");
/* harmony import */ var gsap_ScrollToPlugin__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! gsap/ScrollToPlugin */ "./node_modules/gsap/ScrollToPlugin.js");
/* harmony import */ var gsap_SplitText__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! gsap/SplitText */ "./node_modules/gsap/SplitText.js");
/* harmony import */ var gsap_Draggable__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! gsap/Draggable */ "./node_modules/gsap/Draggable.js");
/* harmony import */ var gsap_InertiaPlugin__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! gsap/InertiaPlugin */ "./node_modules/gsap/InertiaPlugin.js");
/**
 * External Dependencies
 */










gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].registerPlugin(gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_5__["ScrollTrigger"], gsap_ScrollToPlugin__WEBPACK_IMPORTED_MODULE_6__["ScrollToPlugin"], gsap_SplitText__WEBPACK_IMPORTED_MODULE_7__["SplitText"], gsap_Draggable__WEBPACK_IMPORTED_MODULE_8__["Draggable"], gsap_InertiaPlugin__WEBPACK_IMPORTED_MODULE_9__["InertiaPlugin"]);
$(document).ready(function () {
  // console.log('Hello world');
  $('input[type=radio]').addClass('form-radio');
  $(document).bind('gform_post_render', function () {
    $('input[type=radio]').addClass('form-radio');

    if (window.matchMedia("(min-width: 768px)")) {
      $("#field_1_4, #field_1_7").wrapAll('<div class="form-group" />');
    }
  });
  $('.process-carousel #slide-1').addClass('active');

  if ($('#block_5f2abc83dd46a').length) {
    var flkty = new flickity__WEBPACK_IMPORTED_MODULE_3___default.a('#block_5f2abc83dd46a .hero-slider', {
      // options
      cellAlign: 'center',
      contain: true,
      prevNextButtons: false
    });
  } // Draggable.create(".process-carousel", {
  //   throwProps: true,
  //   bounds: '.carousel-container'
  // });


  if ($('.work-carousel').length) {
    var flkty = new flickity__WEBPACK_IMPORTED_MODULE_3___default.a('.work-carousel', {
      // options
      cellAlign: 'center',
      contain: true,
      prevNextButtons: false,
      freeScroll: true,
      pageDots: false
    });
  }

  if ($('.quote-carousel').length) {
    var flkty = new flickity__WEBPACK_IMPORTED_MODULE_3___default.a('.quote-carousel', {
      // options
      cellAlign: 'center',
      contain: true,
      prevNextButtons: false,
      pageDots: true
    });
  }

  $(window).smartresize(function (e) {
    flkty.resize();
  }); // $(".operate-carousel .flickity-button").wrapAll('<div class="flickity-buttons" />');
  // $(".operate-carousel .flickity-buttons, .operate-carousel .flickity-page-dots").wrapAll('<div class="flickity-controls" />');
  // $(".study-carousel .flickity-button, .study-carousel .flickity-page-dots").wrapAll('<div class="flickity-controls" />');

  if (window.matchMedia("(min-width: 768px)")) {
    $("#field_1_4, #field_1_7").wrapAll('<div class="form-group" />');
  }

  $('#gform_1 :input').change(function () {
    var filled = true;
    $('#gform_1 .gfield_contains_required :input').each(function (i, e) {
      if (!$(e).val()) filled = false; // console.log($(e).val());

      if (e.type === 'radio') {
        if ($('input[name="input_7"]').is(':checked')) {
          filled = true;
        }
      }
    });

    if (filled) {
      $('#gform_submit_button_1').css('border-color', '#D6A95B');
    } else {
      $('#gform_submit_button_1').css('border-color', '#cccccc');
    }
  }); // const slides = document.querySelectorAll('.process-carousel .slide');
  // const handler = document.querySelector(".process-carousel");
  // const distObj = { x: 0, maxY: 0, offset: 0 };
  // let tl;
  // let st;
  // let start;
  // function update() {
  //   // Update values as needed
  //   var sW = gsap.getProperty(slides[0], "width");
  //   distObj.x = sW * slides.length - innerWidth;
  //   if(window.matchMedia("(min-width: 768px)").matches) {
  //     distObj.x = sW * slides.length - innerWidth + (sW * 1/5);
  //     //console.log('true')
  //   }
  //   if(window.matchMedia("(min-width: 1280px)").matches) {
  //     distObj.x = sW * slides.length - innerWidth + (sW * 1/2);
  //     //console.log('true')
  //   }
  //   var circle = sW * slides.length - innerWidth;
  //   if(window.matchMedia("(min-width: 768px)").matches) {
  //     circle = sW * 4 - 64;
  //     //console.log('true')
  //   }
  //   if(window.matchMedia("(min-width: 1024px)").matches) {
  //     circle = sW * 4 - 96;
  //     //console.log('true')
  //   }
  //   console.log(innerWidth/8)
  //   distObj.maxY = distObj.x;
  //   distObj.offset = document.querySelector('.carousel-container').getBoundingClientRect().top - innerHeight * 0.05;
  //   // Kill off old things but keep the old progress
  //   let progress = 0;
  //   if(tl) {
  //     progress = tl.progress();
  //     //console.log(progress)
  //     st.kill();
  //     //drag.applyBounds({minX: -distObj.x, maxX: 0});
  //   }
  //   tl = gsap.timeline().progress(progress);
  //   // Create or recreate the tween and scroll trigger
  //   tl.fromTo(handler, {x: 0}, {
  //     x: -distObj.x,
  //     ease: "linear",
  //     overwrite: "auto"
  //   }, 0);
  //   tl.fromTo('.process-carousel #slide-1 #circle', {x: 0, scale: 1}, {
  //     x: circle,
  //     scale: .5,
  //     ease: "linear",
  //   }, 0);
  //   start = "top 5%";
  //   if(window.matchMedia("(min-width: 768px)").matches) {
  //     start = "top 15%";
  //   }
  //   if(window.matchMedia("(min-width: 1024px)").matches) {
  //     start = "top 10%";
  //   }
  //   st = ScrollTrigger.create({
  //     animation: tl,
  //     trigger: '.carousel-container',
  //     start: start,
  //     end: `+=${distObj.x}px`,
  //     scrub: 0.5,
  //     pin: true,
  //     markers: true,
  //   });
  // }
  // update();
  // ScrollTrigger.addEventListener("refreshInit", update);
  // var drag = Draggable.create(handler, {
  //   type: "x",
  //   bounds: {minX: 0, maxX: distObj.x},
  //   throwProps: true,
  //   onDrag: function() {
  //     // this.x gets the current x position of whats being dragged
  //     // distObj.x is the total (end) distance
  //     // progress will always be between 0 and 1
  //     const progress = -this.x / distObj.x;
  //     tl.progress(progress);
  //     st.scroll(progress * distObj.maxY + distObj.offset);
  //   }
  // })[0];

  if ($('.process-carousel').length) {
    var drag = new flickity__WEBPACK_IMPORTED_MODULE_3___default.a('.process-carousel', {
      // options
      cellAlign: 'left',
      contain: false,
      prevNextButtons: false,
      freeScroll: true,
      pageDots: false
    });
    update();
  }

  function update() {
    var slides = document.querySelectorAll('.process-carousel .slide');
    var sW = gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].getProperty(slides[0], "width");
    var circle = sW * slides.length - innerWidth;

    if (window.matchMedia("(min-width: 768px)").matches) {
      circle = sW * 4 - 64; //console.log('true')
    }

    if (window.matchMedia("(min-width: 1024px)").matches) {
      circle = sW * 4 - 96; //console.log('true')
    }

    drag.on('scroll', function (progress) {
      progress = Math.max(0, Math.min(1, progress)); //console.log(progress);

      gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].fromTo('.process-carousel #slide-1 #circle', {
        x: 0,
        scale: 1
      }, {
        x: circle,
        scale: .5,
        ease: "linear",
        paused: true
      }).progress(progress);
    });
  }

  $(window).smartresize(function (e) {
    drag.resize();
    update();
  }); // if(!allRequired){
  //   console.log(allRequired);
  // }

  gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].config({
    nullTargetWarn: false
  }); //Hero Animations

  gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].fromTo("#hero-text", {
    autoAlpha: 0
  }, {
    autoAlpha: 1,
    duration: 3,
    delay: 0.5
  });
  gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].fromTo('#mission h3', {
    y: 10,
    autoAlpha: 0,
    duration: 2
  }, {
    scrollTrigger: {
      trigger: '#mission',
      start: "top 60%",
      markers: true
    },
    autoAlpha: 1,
    y: 0,
    duration: 1.5
  });
  gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].fromTo('#block_5f2d728a4bd57 .content-container', {
    y: 10,
    autoAlpha: 0,
    duration: 2
  }, {
    scrollTrigger: {
      trigger: '#block_5f2d728a4bd57',
      start: "top 60%",
      markers: true
    },
    autoAlpha: 1,
    y: 0,
    duration: 1.5
  });
  gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].fromTo('#block_5f2d73144bd58 .content-container', {
    y: 10,
    autoAlpha: 0,
    duration: 2
  }, {
    scrollTrigger: {
      trigger: '#block_5f2d73144bd58',
      start: "top 60%",
      markers: true
    },
    autoAlpha: 1,
    y: 0,
    duration: 1.5
  });
  gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].fromTo(".quote-icon", {
    rotation: 0
  }, {
    rotation: 360,
    duration: 60,
    repeat: -1,
    ease: "none"
  });
  gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].fromTo('#block_5f2ec379fc13a .container', {
    y: 10,
    autoAlpha: 0,
    duration: 2
  }, {
    scrollTrigger: {
      trigger: '#block_5f2ec379fc13a',
      start: "top 60%",
      markers: true
    },
    autoAlpha: 1,
    y: 0,
    duration: 1.5
  });
  gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].fromTo('#path #path-text', {
    y: 10,
    autoAlpha: 0,
    duration: 2
  }, {
    scrollTrigger: {
      trigger: '#path',
      start: "top 60%",
      markers: true
    },
    autoAlpha: 1,
    y: 0,
    duration: 1.5
  }); //End Document Ready
});

flickity__WEBPACK_IMPORTED_MODULE_3___default.a.prototype._createResizeClass = function () {
  this.element.classList.add('flickity-resize');
};

flickity__WEBPACK_IMPORTED_MODULE_3___default.a.createMethods.push('_createResizeClass');
var resize = flickity__WEBPACK_IMPORTED_MODULE_3___default.a.prototype.resize;

flickity__WEBPACK_IMPORTED_MODULE_3___default.a.prototype.resize = function () {
  this.element.classList.remove('flickity-resize');
  resize.call(this);
  this.element.classList.add('flickity-resize');
};

function mqlWatch(mediaQuery, layoutChangedCallback) {
  var mql = window.matchMedia(mediaQuery);
  mql.addListener(function (e) {
    return layoutChangedCallback(e.matches);
  });
  layoutChangedCallback(mql.matches);
}

(function ($, sr) {
  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function debounce(func, threshold, execAsap) {
    var timeout;
    return function debounced() {
      var obj = this,
          args = arguments;

      function delayed() {
        if (!execAsap) func.apply(obj, args);
        timeout = null;
      }

      ;
      if (timeout) clearTimeout(timeout);else if (execAsap) func.apply(obj, args);
      timeout = setTimeout(delayed, threshold || 100);
    };
  }; // smartresize 


  jQuery.fn[sr] = function (fn) {
    return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
  };
})(jQuery, 'smartresize');
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))

/***/ }),

/***/ "./resources/assets/styles/app.css":
/*!*****************************************!*\
  !*** ./resources/assets/styles/app.css ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*********************************************************************************!*\
  !*** multi ./resources/assets/scripts/app.js ./resources/assets/styles/app.css ***!
  \*********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/edward/Desktop/wordpress/settled/wp-content/themes/settled/resources/assets/scripts/app.js */"./resources/assets/scripts/app.js");
module.exports = __webpack_require__(/*! /Users/edward/Desktop/wordpress/settled/wp-content/themes/settled/resources/assets/styles/app.css */"./resources/assets/styles/app.css");


/***/ }),

/***/ "jquery":
/*!**********************************!*\
  !*** external {"this":"jQuery"} ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["jQuery"]; }());

/***/ })

},[[0,"/scripts/manifest","/scripts/vendor"]]]);
//# sourceMappingURL=app.js.map