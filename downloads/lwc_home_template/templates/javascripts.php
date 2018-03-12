<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/javascripts.php.
 * Purpose: Web page JavaScripts code file.
 * Used in: Web page files based on /web_server_root_directory/templates/web_page.php except home page.
 * Last reviewed/updated: 10 Feb 2018.
 * Published: 25 Sep 2016.
 * NOTE:
 * library_load_in_body.js not required for home page and loading library_load_in_body.js in home page throws JavaScript console error (FF57: TypeError: element is null). Starting 13 Dec 2017, to eliminate home page JavaScript console error, use javascripts_home_page.php for home page.
 * Copy changes to javascript*.php, 404.shtml, and web_browser_retain_remove_content_f5.html. */
return
 "<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <script src='/javascripts/bootstrap/bootstrap.min.js'></script>
  <script src='/javascripts/lwc/library_load_in_body.min.js'></script>";
