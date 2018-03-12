$(document).ready(function(){
 $(window).on("scroll", function(){
  if ($(window).scrollTop() >= 100){
   $("nav").addClass("fixed");
  } else {
   $("nav").removeClass("fixed");
  }
 });
});