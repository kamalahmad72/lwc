<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/footer.php.
 * Purpose: Web page <footer></footer> section. Contains: 1.) LWC logo as link, 2.) W3C Valid HTML5 button, and 3.) W3C Valid CSS Level 3 button.
 * Used in: Web page files based on /web_server_root_directory/templates/web_page.php.
 * Last reviewed/updated: 19 Oct 2018.
 * Published: 04 Jun 2016.
 * NOTE: Copy changes to footer*.php and footer*html.js. */
return
  "<div class='container-fluid'><!-- container-fluid from Bootstrap. -->
    <div><a href='https://www.learnwebcoding.com/' class='link-lwc-logo'>Learn Web Coding</a></div>
    <div><a href='https://validator.w3.org/check?uri=referer'><img src='/images/HTML5_Logo_48.gif' alt='Valid HTML5' /></a>&nbsp;<a href='https://jigsaw.w3.org/css-validator/check?uri=referer&amp;profile=css3'><img src='/images/valid-css.gif' alt='Valid CSS Level 3' /></a></div>
   </div><!-- Close footer section div class='container-fluid'. -->";
