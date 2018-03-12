<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/style_object.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 21 Nov 2017.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "JavaScript Feature Reference: style Object Web Browser Support Test"; // No markup in title tags.
/* $webPage->head_meta_charset = "UTF-8"; */
/* $webPage->head_meta_author = "Steve Taylor"; */
$webPage->head_meta_keywords = "JavaScript, style object, web browser support, test"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A JavaScript that tests and reports if the web browser supports the JavaScript style object."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
/* $webPage->head_meta_viewport = "width=device-width, initial-scale=1"; */
/* $webPage->head_link_stylesheets = include_once "stylesheets.php"; */
/* $webPage->body_header = include_once "header.php"; */
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"JavaScript\", \"\", \"JavaScript Feature Reference\");";
$webPage->body_main_webPageTitle = "JavaScript Feature Reference: <code>style</code> Object Web Browser Support Test";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 21 Nov 2017 | Published: 26 Apr 2014 | Status: Active";
/* $webPage->body_main_webBrowserSupport = "Web browser support: Internet Explorer 10+, Edge 12+, Firefox 6+, Chrome 30+, Opera 17+"; */
/* $webPage->body_main_tools = include_once "tools.php"; */
$webPage->body_main_toc = include_once "style_object_toc.php";
/* $webPage->body_main_hrClassAttribute = ""; // Default ""/empty string displays <hr>. To not display <hr>, assign "class='display-none'" string. */
$webPage->body_main_sections = include_once "style_object_sections.php";
/* $webPage->body_footer = include_once "footer.php"; */
/* $webPage->body_script_javascripts = include_once "javascripts.php"; */
$html = include_once "overall.php";
echo $html;
