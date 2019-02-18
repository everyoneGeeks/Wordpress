$(function () {
  "use strict";

  // This Function For Menu Button
  $('#btn-menu').on("click", function(){
    $(this).toggleClass('close-btn');
  });

  // This Function For Show Menu Left
  $('#btn-menu').on("click", function(){
    $('#left-menu').toggleClass('show');
  });



  // Scroll Top Button
  var scrollBtn = $('#scrollBtn');
  $(window).scroll(function () {
    if($(this).scrollTop() >= 800) {
      scrollBtn.show();
    }else {
      scrollBtn.hide();
    }
  });

  // Click On Button To Scroll Top
  scrollBtn.click(function () {
    $("html,body").animate({
      scrollTop: 0
    }, 1000);
  });

  $('#chatBtn').click(function () {
    $('#boxChat').toggle();
  });


  // This Function For MixItUp Plugin
  $('.gallery').mixItUp();

  // This Function For AOS Plugin
  AOS.init();
});
