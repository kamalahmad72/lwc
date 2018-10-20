<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/template.php.
 * Purpose: Web page HTML/PHP template.
 * Used in: Web page files based on /web_server_root_directory/templates/web_page.php except home page.
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
   <script>$webPage->body_header_callBcrumbsNav</script>
  </header>

  <main>
   <div class='container-fluid'><!-- container-fluid from Bootstrap. -->
    <h1>$webPage->body_main_webPageTitle</h1>

    <div class='last-reviewed'>$webPage->body_main_lastReviewed</div>
    <div class='web-browser-support-and-tools-icon-dropdown-container'>
     <div class='web-browser-support'>$webPage->body_main_webBrowserSupport</div>
     $webPage->body_main_tools
    </div>

    <nav id='tocId' class='toc'>
     $webPage->body_main_toc
    </nav>

    <hr $webPage->body_main_hrClassAttribute />
    $webPage->body_main_sections

   </div><!-- Close main section div class='container-fluid'. -->
  </main>

  <footer>
   $webPage->body_footer
  </footer>

  $webPage->body_script_javascripts

 </body>
</html>";
