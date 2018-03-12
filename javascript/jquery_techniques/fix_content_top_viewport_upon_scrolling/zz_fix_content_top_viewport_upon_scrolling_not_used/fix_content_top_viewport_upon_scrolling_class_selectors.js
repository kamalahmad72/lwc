$(document).ready(function(){
 $(window).bind("scroll", function() {
  if ($(window).scrollTop() >= (80)){
   $(".header-navbar").addClass("fixed");
  } else {
   $(".header-navbar").removeClass("fixed");
  }
 });
});