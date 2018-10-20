<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/header.php.
 * Purpose: Web page <header></header> section. Replace the <header></header> section code below with your <header></header> section code, coded per LWC Home Template Explained (https://www.learnwebcoding.com/html/template_explained.php).
 * Used in: Web page files based on /web_server_root_directory/templates/web_page.php.
 * Last reviewed/updated: 19 Oct 2018.
 * Published: 04 Jun 2016.
 * Objects: BcrumbsNavUtil.
 * NOTE:
 * Web page <header></header> section in LWC Blog/Forums (ie, LWC navbar and LWC Bootstrap navbar) is via hard coded HTML in Blog/Forums template files. No <noscript></noscript> section and no LWC Home breadcrumbs navigation in LWC Blog/Forums.
 * Copy changes to header*.php and header*html.js. */
return
  "<nav class='lwc-navbar'><!-- Open LWC navbar HTML. --><!-- NOTE: Loading lwc.css in LWC Blog/Forums causes issues. Therefore, to avoid loading lwc.css in LWC Blog/Forums, place styles for LWC navbar at bottom of bootstrap.css, not in lwc.css. -->
    <div class='container-fluid'><!-- container-fluid from Bootstrap. -->
     <div class='lwc-navbar-content'><a href='https://blog.learnwebcoding.com/'>Blog</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href='https://forums.learnwebcoding.com/'>Forums</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;Ad Free!</div>
    </div><!-- Close LWC navbar HTML div class='container-fluid'. -->
   </nav><!-- Close LWC navbar HTML. -->

   <nav class='navbar navbar-inverse navbar-static-top'><!-- Open LWC Bootstrap navbar HTML. --><!-- navbar-static-top aligns navbar-right content flush to right edge and removes border-top. -->
    <div class='container-fluid'><!-- container-fluid from Bootstrap. -->
     <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
       <span class='sr-only'>Toggle navigation</span>
       <span class='icon-bar'></span>
       <span class='icon-bar'></span>
       <span class='icon-bar'></span>
      </button>
      <a href='/' class='navbar-brand'><span class='hidden-xs hidden-sm'>Learn Web Coding Home</span><span class='visible-xs visible-sm'>LWC Home</span></a>
     </div>
     <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav'>
       <li><a href='/html/index.php'>HTML</a></li>
       <li><a href=''><s>CSS</s></a></li>
       <li><a href=''><s>JavaScript</s></a></li>
       <li><a href=''><s>PHP</s></a></li>
       <li><a href='/files_demo/index.php'>Files Demo</a></li>
      </ul>
      <ul class='nav navbar-nav navbar-right'>
       <li><a href=''><s>Original Content</s></a></li>
       <li class='dropdown visible-sm visible-md'>
        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>More <span class='caret'></span></a>
        <ul class='dropdown-menu'>
         <li><a href=''><s>Glossary</s></a></li>
         <li><a href=''><s>What's New</s></a></li>
        </ul>
       </li>
       <li><a href='' class='hidden-sm hidden-md'><s>Glossary</s></a></li>
       <li><a href='' class='hidden-sm hidden-md'><s>What's New</s></a></li>
      </ul>
     </div>
    </div><!-- Close LWC Bootstrap navbar HTML div class='container-fluid'. -->
   </nav><!-- Close LWC Bootstrap navbar HTML. -->

   <noscript class='noscript'>
    <div class='container-fluid'><!-- container-fluid from Bootstrap. -->
     NOTE: Parts of this web site require JavaScript and are nonfunctional because your web browser does not support JavaScript or has JavaScript support disabled.
    </div><!-- Close noscript section div class='container-fluid'. -->
   </noscript>

   <nav><!-- Open LWC Home breadcrumbs navigation HTML. -->
    <div class='container-fluid'><!-- container-fluid from Bootstrap. -->
     <div id='bcrumbsNavId' class='bcrumbs-nav'>&nbsp;</div><!-- Content provided by BcrumbsNavUtil.bcrumbsNav(), which is defined immediately below. -->
    </div><!-- Close LWC Home breadcrumbs navigation HTML div class='container-fluid'. -->
   </nav><!-- Close LWC Home breadcrumbs navigation HTML. -->

   <script>/* Open LWC Home breadcrumbs navigation JavaScript. */
    var BcrumbsNavUtil = {
     bcrumbsNav: function(){
      var bcrumbsNav = document.getElementById(\"bcrumbsNavId\");
      var bcrumbsNavHtmlString = \"<a href='/index.php'>Home</a>\";
      if (arguments.length > 0){
       for (var i = 0; i < arguments.length; i = i + 2){
        bcrumbsNavHtmlString += \" &rarr; <a href='\" + arguments[i] + \"index.php'>\" + arguments[i + 1] + \"</a>\";
       }
      }
      bcrumbsNav.innerHTML = bcrumbsNavHtmlString;
     }
    };
   </script><!-- Close LWC Home breadcrumbs navigation JavaScript. -->";
