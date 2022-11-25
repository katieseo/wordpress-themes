jQuery(document).ready(function ($) {
  // toggle navbar
  $(".header-nav--toggle").on("click", function () {
    var menu = $(this).siblings(".menu");

    $(this).toggleClass("opened");
    menu.slideToggle();
  });
});
