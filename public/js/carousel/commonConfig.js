$(document).ready(function () {
  $('.homeCarousel').slick({
      dots: true,
      nav: false,
      infinite: true,
      speed: 400,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true
  });
});
/**
 * Common Home page carousel
 */
$(document).ready(function () {
    $('.slickCarousel').slick({
        dots: false,
        nav: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        prevArrow: '<button class="arrow-prev slick-arrow" aria-label="Previous" type="button" aria-disabled="false" style=""><i class="fa fa-arrow-left"></i></button>',
        nextArrow: '<button class="arrow-next slick-arrow" aria-label="Previous" type="button" aria-disabled="false" style=""><i class="fa fa-arrow-right"></i></button>',
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 575,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });
});

/**
 * Leadership carousel
 */
$(document).ready(function () {
    $('.leadership').slick({
        dots: false,
        nav: true,
        autoplay: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed: 1500,
        prevArrow: '<button class="arrow-prev slick-arrow" aria-label="Previous" type="button" aria-disabled="false" style=""><i class="fa fa-arrow-left"></i></button>',
        nextArrow: '<button class="arrow-next slick-arrow" aria-label="Previous" type="button" aria-disabled="false" style=""><i class="fa fa-arrow-right"></i></button>',
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 575,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });
});

/** 
 * New Testimnonial Video  Slider
 */
$(document).ready(function () {
  $('.testimonialVideo').slick({
      dots: true,
      nav: false,
      autoplay: false,
      infinite: true,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplaySpeed: 1500,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
  });
});

/**
 * Partner Carousel
 */
$(document).ready(function () {
    $('.partnerCarousel').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1500,
        dots: false,
        nav: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1100,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 834,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 575,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          }
        ]
    });
});
/** Festival Carousel **/
$(document).ready(function () {
  $('.festivalCarousel').slick({
      dots: false,
      nav: true,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      prevArrow: '<button class="arrow-prev slick-arrow" aria-label="Previous" type="button" aria-disabled="false" style=""><i class="fa fa-arrow-left"></i></button>',
      nextArrow: '<button class="arrow-next slick-arrow" aria-label="Previous" type="button" aria-disabled="false" style=""><i class="fa fa-arrow-right"></i></button>',
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
  });
});

/**
 * Sports & Cultural page carousel
 */
$(document).ready(function () {
  $('.sportsCulturalCarousel').slick({
      dots: false,
      nav: true,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      prevArrow: '<button class="arrow-prev slick-arrow" aria-label="Previous" type="button" aria-disabled="false" style=""><i class="fa fa-arrow-left"></i></button>',
      nextArrow: '<button class="arrow-next slick-arrow" aria-label="Previous" type="button" aria-disabled="false" style=""><i class="fa fa-arrow-right"></i></button>',
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
  });
});

$(document).ready(function () {
    $('.pagesNav').slick({
      infinite: false,
      autoplay: false,
      autoplaySpeed: 1500,
      dots: false,
      nav: true,
      slidesToShow: 8,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 834,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1
          }
        }
      ]
  });
});

/**
 * Gallery Carousel js
 * @param {*} element 
 */
var swiper = new Swiper( '.swiper-container.two', {
  pagination: '.swiper-pagination',
  paginationClickable: true,
  slidesPerView: 2,
  effect: 'coverflow',
  loop: true,
  autoplay: 1000,
  speed: 1500,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflow: {
      rotate: 0,
      stretch: 80,
      depth: 80,
      modifier: 1.5,
      slideShadows : false
  }
} );
  
/** Testimonial Js Code */
  jQuery(document).ready(function ($) {
      var feedbackSlider = $(".feedback-slider");
      feedbackSlider.owlCarousel({
          items: 1,
          nav: true,
          dots: true,
          autoplay: true,
          loop: true,
          mouseDrag: true,
          touchDrag: true,
          navText: [
              "<i class='fa fa-long-arrow-left'></i>",
              "<i class='fa fa-long-arrow-right'></i>"
          ],
          responsive: {
              767: {
                  nav: true,
                  dots: false
              }
          }
      });

      feedbackSlider.on("translate.owl.carousel", function () {
          $(".feedback-slider-item h3")
              .removeClass("animated fadeIn")
              .css("opacity", "0");
          $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating")
              .removeClass("animated zoomIn")
              .css("opacity", "0");
      });

      feedbackSlider.on("translated.owl.carousel", function () {
          $(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
          $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating")
              .addClass("animated zoomIn")
              .css("opacity", "1");
      });
      feedbackSlider.on("changed.owl.carousel", function (property) {
          var current = property.item.index;
          var prevThumb = $(property.target)
              .find(".owl-item")
              .eq(current)
              .prev()
              .find("img")
              .attr("src");
          var nextThumb = $(property.target)
              .find(".owl-item")
              .eq(current)
              .next()
              .find("img")
              .attr("src");
          var prevRating = $(property.target)
              .find(".owl-item")
              .eq(current)
              .prev()
              .find("span")
              .attr("data-rating");
          var nextRating = $(property.target)
              .find(".owl-item")
              .eq(current)
              .next()
              .find("span")
              .attr("data-rating");
          $(".thumb-prev").find("img").attr("src", prevThumb);
          $(".thumb-next").find("img").attr("src", nextThumb);
          $(".thumb-prev")
              .find("span")
              .next()
              .html(prevRating + '<i class="fa fa-star"></i>');
          $(".thumb-next")
              .find("span")
              .next()
              .html(nextRating + '<i class="fa fa-star"></i>');
      });
      $(".thumb-next").on("click", function () {
          feedbackSlider.trigger("next.owl.carousel", [300]);
          return false;
      });
      $(".thumb-prev").on("click", function () {
          feedbackSlider.trigger("prev.owl.carousel", [300]);
          return false;
      });
  });
/** Testimonial Js Code End */


/** Video Play/Paause **/
  function playAboutVid() {
    var video = document.getElementById('video');
    if (video.paused) {
      video.play();
    } else { 
      video.pause();
    }
  }
/** Video Play/Paause End **/

/** Scroll after clicking on Tabs **/
$(document).on("click", ".nav-link", function () {
  var totalWidth = window.matchMedia("(max-width: 574px)");
  if(totalWidth) {
    window.scrollTo(0, 0);  
  } else {
    window.scrollTo(0, 600);
  }
});
/** Scroll after clicking on Tabs End **/