<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/javascripts.php.
 * Purpose: Web page JavaScripts.
 * Used in: Web page files based on /web_server_root_directory/templates/web_page.php except home page.
 * Last reviewed/updated: 19 Oct 2018.
 * Published: 25 Sep 2016.
 * NOTE:
 * Loading /javascripts/lwc/library_load_in_body.min.js is not required for home page and throws JavaScript console error (FF57: TypeError: element is null). Therefore, to eliminate home page JavaScript console error, starting 13 Dec 2017 use /web_server_root_directory/templates/javascripts_home_page.php for home page.
 * Copy changes to javascript*.php, 404.shtml, and web_browser_retain_remove_content_f5.html. */
return
 "<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <script src='/javascripts/bootstrap/bootstrap.min.js'></script>
  <script src='/javascripts/lwc/library_load_in_body.min.js'></script>";
