/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';
import 'lity';
import Flickity from 'flickity';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { SplitText } from "gsap/SplitText";
import { Draggable } from "gsap/Draggable";
import { InertiaPlugin } from "gsap/InertiaPlugin";

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, SplitText, Draggable, InertiaPlugin);

$(document).ready(() => {
  // console.log('Hello world');

  $('input[type=radio]').addClass('form-radio');

  $(document).bind('gform_post_render', function() {
    $('input[type=radio]').addClass('form-radio');
    if(window.matchMedia("(min-width: 768px)")) {
      $("#field_1_4, #field_1_7").wrapAll('<div class="form-group" />');
    }
  })

  $('.process-carousel #slide-1').addClass('active');

if($('#block_5f2abc83dd46a').length) {
  var flkty = new Flickity( '#block_5f2abc83dd46a .hero-slider', {
    // options
    cellAlign: 'center',
    contain: true,
    prevNextButtons: false,
  });
}

// Draggable.create(".process-carousel", {
//   throwProps: true,
//   bounds: '.carousel-container'
// });


if($('.work-carousel').length) {
  var flkty = new Flickity( '.work-carousel', {
    // options
    cellAlign: 'center',
    contain: true,
    prevNextButtons: false,
    freeScroll: true,
    pageDots: false,
  });
}

if($('.quote-carousel').length) {
  var flkty = new Flickity( '.quote-carousel', {
    // options
    cellAlign: 'center',
    contain: true,
    prevNextButtons: false,
    pageDots: true,
  });
}

$(window).smartresize(function(e){
  flkty.resize();
});


// $(".operate-carousel .flickity-button").wrapAll('<div class="flickity-buttons" />');
// $(".operate-carousel .flickity-buttons, .operate-carousel .flickity-page-dots").wrapAll('<div class="flickity-controls" />');
// $(".study-carousel .flickity-button, .study-carousel .flickity-page-dots").wrapAll('<div class="flickity-controls" />');

if(window.matchMedia("(min-width: 768px)")) {
  $("#field_1_4, #field_1_7").wrapAll('<div class="form-group" />');
}


$('#gform_1 :input').change(function() {
  let filled = true;
  $('#gform_1 .gfield_contains_required :input').each(function(i, e) {
    if(!$(e).val()) filled = false;
    // console.log($(e).val());
    if(e.type === 'radio') {
      if($('input[name="input_7"]').is(':checked')) {
        filled = true;
      }
    }
  })


  if(filled) {
    $('#gform_submit_button_1').css('border-color', '#D6A95B');
  }
  else {
    $('#gform_submit_button_1').css('border-color', '#cccccc');
  }
});


// const slides = document.querySelectorAll('.process-carousel .slide');
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

if($('.process-carousel').length) {
  var drag = new Flickity( '.process-carousel', {
    // options
    cellAlign: 'left',
    contain: false,
    prevNextButtons: false,
    freeScroll: true,
    pageDots: false,
  });

  update();

}

function update() {

  const slides = document.querySelectorAll('.process-carousel .slide');

  var sW = gsap.getProperty(slides[0], "width");

  var circle = sW * slides.length - innerWidth;
  if(window.matchMedia("(min-width: 768px)").matches) {
    circle = sW * 4 - 64;
    //console.log('true')
  }

if(window.matchMedia("(min-width: 1024px)").matches) {
  circle = sW * 4 - 96;
  //console.log('true')
}
  drag.on( 'scroll', function( progress ) {
    progress = Math.max( 0, Math.min( 1, progress ) );
    //console.log(progress);
  
    gsap.fromTo('.process-carousel #slide-1 #circle', {x: 0, scale: 1}, {
      x: circle,
      scale: .5,
      ease: "linear",
      paused: true,
    }).progress(progress);
  });
}

$(window).smartresize(function(e){
  drag.resize();
  update();
});



// if(!allRequired){
//   console.log(allRequired);
// }


gsap.config({
  nullTargetWarn: false,
});

//Hero Animations

gsap.fromTo("#hero-text", {
  autoAlpha: 0,
}, {
  autoAlpha: 1,
  duration: 3,
  delay: 0.5,
});

gsap.fromTo('#mission h3', {
    y: 10,
    autoAlpha: 0,
    duration: 2
  }, {
    scrollTrigger: {
      trigger: '#mission',
      start: "top 60%",
      markers: true,
    },
    autoAlpha: 1,
    y: 0,
    duration: 1.5,
});

gsap.fromTo('#block_5f2d728a4bd57 .content-container', {
  y: 10,
  autoAlpha: 0,
  duration: 2
}, {
  scrollTrigger: {
    trigger: '#block_5f2d728a4bd57',
    start: "top 60%",
    markers: true,
  },
  autoAlpha: 1,
  y: 0,
  duration: 1.5,
});

gsap.fromTo('#block_5f2d73144bd58 .content-container', {
  y: 10,
  autoAlpha: 0,
  duration: 2
}, {
  scrollTrigger: {
    trigger: '#block_5f2d73144bd58',
    start: "top 60%",
    markers: true,
  },
  autoAlpha: 1,
  y: 0,
  duration: 1.5,
});

gsap.fromTo(".quote-icon", {
  rotation: 0
  }, {
  rotation: 360,
  duration: 60,
  repeat: -1,
  ease: "none",
})

gsap.fromTo('#block_5f2ec379fc13a .container', {
  y: 10,
  autoAlpha: 0,
  duration: 2
}, {
  scrollTrigger: {
    trigger: '#block_5f2ec379fc13a',
    start: "top 60%",
    markers: true,
  },
  autoAlpha: 1,
  y: 0,
  duration: 1.5,
});

gsap.fromTo('#path #path-text', {
  y: 10,
  autoAlpha: 0,
  duration: 2
}, {
  scrollTrigger: {
    trigger: '#path',
    start: "top 60%",
    markers: true,
  },
  autoAlpha: 1,
  y: 0,
  duration: 1.5,
});


//End Document Ready
});

Flickity.prototype._createResizeClass = function() {
  this.element.classList.add('flickity-resize');
};

Flickity.createMethods.push('_createResizeClass');

var resize = Flickity.prototype.resize;
Flickity.prototype.resize = function() {
  this.element.classList.remove('flickity-resize');
  resize.call( this );
  this.element.classList.add('flickity-resize');
};

function mqlWatch(mediaQuery, layoutChangedCallback) {
  var mql = window.matchMedia(mediaQuery);
  mql.addListener(function (e) { return layoutChangedCallback(e.matches); });
  layoutChangedCallback(mql.matches);
}



(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');