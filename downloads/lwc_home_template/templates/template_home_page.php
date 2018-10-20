<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/template_home_page.php.
 * Purpose: Web page HTML/PHP template. A variation of /web_server_root_directory/templates/template.php with a different web page layout.
 * Used in: Home page index.php.
 * Last reviewed/updated: 19 Oct 2018.
 * Published: 21 Sep 2016. */
return
"<!DOCTYPE html>
<html lang='en'>
 <head>
  $webPage->head_script_googleAnalytics
  <title>$webPage->head_title</title><!-- No markup in title tags. -->
  <meta charset='$webPage->head_meta_charset' />
  <meta name='Author' content='$webPage->head_meta_author' />
  <meta name='Keywords' content='$webPage->head_meta_keywords' /><!-- Cap words as if used in sentence. No markup in Keywords. -->
  <meta name='Description' content='$webPage->head_meta_description' /><!-- Sentence and/or structured data less than 160 char per Google. No markup in Description. -->
  <meta name='viewport' content='$webPage->head_meta_viewport' />
  $webPage->head_link_stylesheets
 </head>
 <body>

  <header>
   $webPage->body_header
  </header>

  <main>
   $webPage->body_main_sections
  </main>

  <footer>
   <div class='container-fluid'><!-- container-fluid from Bootstrap. -->
    <div class='home-page-footer'>
     <a href='https://validator.w3.org/check?uri=referer'><img src='/images/HTML5_Logo_48.gif' alt='Valid HTML5' /></a>&nbsp;<a href='https://jigsaw.w3.org/css-validator/check?uri=referer&amp;profile=css3'><img src='/images/valid-css.gif' alt='Valid CSS Level 3' /></a><br />
     Last reviewed/updated: 19 Oct 2018<br />
     Web browser support: Internet Explorer 10+, Edge 12+, Firefox 6+, Chrome 30+, Opera 17+<br />
     <a href='https://github.com/learnwebcoding/'>On GitHub</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='mailto:admin@learnwebcoding.com'>Contact</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=''><s>Site Map</s></a>
    </div>
   </div><!-- Close footer section div class='container-fluid'. -->
  </footer>

  $webPage->body_script_javascripts

 </body>
</html>";
