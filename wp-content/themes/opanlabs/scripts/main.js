"use strict";

$(document).ready(function () {

  
  
  // $('.dropdown-menu .dropdown-item a').removeClass("dropdown-toggle");

  $('.slider-service').slick({
    autoplay: true,
    slidesToShow: 1,
    arrows: true,
    dots: true,
    responsive: [{
      breakpoint: 992,
      settings: {
        arrows: false,
        centerPadding: '40px'
      }
    }, {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerPadding: '20px'
      }
    }, {
      breakpoint: 640,
      settings: {
        arrows: false,
        centerPadding: '0'
      }
    }]
  });
  $('.slider-testi').slick({
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    adaptiveHeight: true,
    responsive: [{
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '40px',
        adaptiveHeight: true
      }
    }]
  });
  $('.slider-team').slick({
    // autoplay:true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    adaptiveHeight: true,
    responsive: [{
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '30px',
        adaptiveHeight: true
      }
    }]
  });

  

  $(document).on('click', '.testi-more', function () {
    $(this).prev('.testi-text').toggleClass('collapsed');
    $(this).text($(this).text() == 'Show Less' ? 'Show More' : 'Show Less');
  });

  function includeHTML() {
    var z, i, elmnt, file, xhttp;
    /* Loop through a collection of all HTML elements: */

    z = document.getElementsByTagName('*');

    for (i = 0; i < z.length; i++) {
      elmnt = z[i];
      /*search for elements with a certain atrribute:*/

      file = elmnt.getAttribute('w3-include-html');

      if (file) {
        /* Make an HTTP request using the attribute value as the file name: */
        xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function () {
          if (this.readyState == 4) {
            if (this.status == 200) {
              elmnt.innerHTML = this.responseText;
            }

            if (this.status == 404) {
              elmnt.innerHTML = 'Page not found.';
            }
            /* Remove the attribute, and call this function once more: */


            elmnt.removeAttribute('w3-include-html');
            includeHTML();
          }
        };

        xhttp.open('GET', file, true);
        xhttp.send();
        /* Exit the function: */

        return;
      }
    }
  }

  includeHTML();
});