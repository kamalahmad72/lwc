/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascripts/lwc/header_html.js.
 * Purpose: LWC Home <header></header> Section HTML. Includes; 1.) LWC navbar HTML, 2.) LWC Bootstrap navbar HTML, and 3.) LWC Home breadcrumbs navigation HTML and JavaScript.
 * Used in: 404.shtml and web_browser_retain_remove_content_f5.html. Used in LWC Home web pages based on LWC Home Template (/public_html/html/template_explained.php) that need to be .(s)html files, not .php files. Not used in LWC Home specialty web pages. Not used in LWC Blog/Forums.
 * Last reviewed/updated: 16 May 2018.
 * Published: 08 Jan 2014.
 * Web browser support: IE6+, ED12+, FF1.5+, SM1+, FL1+, SF3.1+, CH2+, OP7.50+, NT9+.
 * Objects: BcrumbsNavUtil.
 * NOTE:
 * This file is a .js file and, therefore, cannot include <noscript></noscript> section HTML.
 * LWC Home <header></header> Section HTML in LWC Blog/Forums (ie, LWC navbar and LWC Bootstrap navbar) is via hard coded HTML in Blog/Forums template files. No <noscript></noscript> section and no LWC Home breadcrumbs navigation in LWC Blog/Forums.
 * Copy changes to header*.php and header*.js. */

/* -------------------- JAVASCRIPT DOCUMENT.WRITE() METHODS -------------------- */

/* ---------- NEW JAVASCRIPT DOCUMENT.WRITE() METHOD ---------- */

/* Method: document.write().
 * Purpose: LWC Home sitewide header; 1.) LWC navbar content, and 2.) LWC Bootstrap navbar content.
 * Used in: web_browser_retain_remove_content_f5.html and 404.shtml. Not used in LWC Blog/Forums. LWC Home sitewide header content components in LWC Blog/Forums (ie, LWC navbar content and LWC Bootstrap navbar content) are via hard coded HTML in template files.
 * Last reviewed/updated: 28 Jul 2017.
 * Published: 08 Jan 2014.
 * Web browser support: IE6+, ED12+, FF1.5+, SM1+, FL1+, SF3.1+, CH2+, OP7.50+, NT9+. */

document.write(
'<nav class="lwc-navbar"><!-- Open LWC navbar HTML. --><!-- NOTE: Loading lwc.css in LWC Blog/Forums causes issues. Therefore, to avoid loading lwc.css in LWC Blog/Forums, place styles for LWC navbar at bottom of bootstrap.css, not in lwc.css. -->' +
 '<div class="container-fluid"><!-- container-fluid from Bootstrap. -->' +
  '<div class="lwc-navbar-content"><a href="https://blog.learnwebcoding.com/">Blog</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="https://forums.learnwebcoding.com/">Forums</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;Ad Free!</div>' +
 '</div>' +
'</nav><!-- Close LWC navbar HTML. -->' +

'<nav class="navbar navbar-inverse navbar-static-top"><!-- Open LWC Bootstrap navbar HTML. --><!-- navbar-static-top aligns navbar-right content flush to right edge and removes border-top. -->' +
 '<div class="container-fluid">' +
  '<div class="navbar-header">' +
   '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">' +
    '<span class="sr-only">Toggle navigation</span>' +
    '<span class="icon-bar"></span>' +
    '<span class="icon-bar"></span>' +
    '<span class="icon-bar"></span>' +
   '</button>' +
   '<a href="/" class="navbar-brand"><span class="hidden-xs hidden-sm">Learn Web Coding Home</span><span class="visible-xs visible-sm">LWC Home</span></a>' +
  '</div>' +
  '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">' +
   '<ul class="nav navbar-nav">' +
    '<li><a href="/html/index.php">HTML</a></li>' +
    '<li><a href="/css/index.php">CSS</a></li>' +
    '<li><a href="/javascript/index.php">JavaScript</a></li>' +
    '<li><a href="/php/index.php">PHP</a></li>' +
    '<li><a href="/misc/index.php">Misc</a></li>' +
   '</ul>' +
   '<ul class="nav navbar-nav navbar-right">' +
    '<li><a href="/misc/original_content.php">Original Content</a></li>' +
    '<li class="dropdown visible-sm visible-md">' +
     '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>' +
     '<ul class="dropdown-menu">' +
      '<li><a href="/misc/glossary.php">Glossary</a></li>' +
      '<li><a href="/misc/whats_new.php">What\'s New</a></li>' +
     '</ul>' +
    '</li>' +
    '<li><a href="/misc/glossary.php" class="hidden-sm hidden-md">Glossary</a></li>' +
    '<li><a href="/misc/whats_new.php" class="hidden-sm hidden-md">What\'s New</a></li>' +
   '</ul>' +
  '</div>' +
 '</div>' +
'</nav><!-- Close LWC Bootstrap navbar HTML. -->' +

'<nav><!-- Open LWC Home breadcrumbs navigation HTML. -->' +
 '<div class="container-fluid"><!-- container-fluid from Bootstrap. -->' +
  '<div id="bcrumbsNavId" class="bcrumbs-nav">&nbsp;</div><!-- Content provided by BcrumbsNavUtil.bcrumbsNav(), which is defined immediately below. -->' +
 '</div>' +
'</nav><!-- Close LWC Home breadcrumbs navigation HTML. -->'
);

/* -------------------- JAVASCRIPT OBJECT DEFINITIONS -------------------- */

/* ---------- NEW JAVASCRIPT OBJECT DEFINITION ---------- */

/* Object: BcrumbsNavUtil.
 * Purpose: LWC Home sitewide header LWC Home breadcrumbs navigation content.
 * Used in: web_browser_retain_remove_content_f5.html and 404.shtml. Not used in LWC Blog/Forums. No LWC Home breadcrumbs navigation in LWC Blog/Forums.
 * Last reviewed/updated: 30 Jul 2016.
 * Published: 25 May 2014.
 * Web browser support: IE6+, ED12+, FF1.5+, SM1+, FL1+, SF3.1+, CH2+, OP7.50+, NT9+.
 * NOTE: Target element for innerHTML property is provided above. Called immediately after lwc_header_html.js is loaded, not in <head></head> (target element not loaded), and not near end of <body></body> tag (delays appearance of bcrumbs nav). For no bcrumbs nav, comment out call to BcrumbsNavUtil.bcrumbsNav(). BcrumbsNavUtil assumes: 1.) want bcrumb to web site home page named Home, and is located at /index.php, which is root relative path; 2.) have and want bcrumbs to directory landing pages, and they are index.php; and 3.) the bcrumbs are to the web site home page and directory landing pages, not to other web pages. Bcrumb to web site home page (Home) is hard coded into JavaScript; therefore, HTML does not need to pass any arguments for Home bcrumb. For each bcrumb after Home, HTML needs to pass two arguments in this order; 1.) relative path to directory landing web page as a string without index.php (for example, "", not "index.php", and "../",  not "../index.php"), and 2.) name of directory landing web page as a string. Therefore, for Home bcrumb pass 0 arguments, for Home + 1 bcrumb pass 2 arguments, for Home + 2 bcrumbs pass 4 arguments, for Home + 3 bcrumbs pass 6 arguments, etc. Directory landing web pages do not include bcrumb to self, and, therefore, contain one less bcrumb than the other web pages located in that same directory. Each iteration of for loop processes the next two arguments into one bcrumb. */

var BcrumbsNavUtil = {
 bcrumbsNav: function(){
  var bcrumbsNav = document.getElementById("bcrumbsNavId");
  var bcrumbsNavHtmlString = "<a href='/index.php'>Home</a>";
  if (arguments.length > 0){
   for (var i = 0; i < arguments.length; i = i + 2){
    bcrumbsNavHtmlString += " &rarr; <a href='" + arguments[i] + "index.php'>" + arguments[i + 1] + "</a>";
   }
  }
  bcrumbsNav.innerHTML = bcrumbsNavHtmlString;
 }
};
