var BcrumbsNavUtil = {
 bcrumbsNav: function(){
  var bcrumbsNavElementReference = document.getElementById("bcrumbsNavElement");
  var bcrumbsNavHtmlString = "<a href='/index2.html'>Home</a>";
  if (arguments.length > 0){
   for (var i = 0; i < arguments.length; i = i + 2){
    bcrumbsNavHtmlString += " &rarr; <a href='" + arguments[i] + "index.html'>" + arguments[i + 1] + "</a>";
   }
  }
  bcrumbsNavElementReference.innerHTML = bcrumbsNavHtmlString;
 }
};