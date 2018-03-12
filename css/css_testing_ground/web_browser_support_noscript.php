<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_testing_ground/web_browser_support_noscript.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 27 Jul 2017.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Web Browser Support For The HTML noscript Element As A CSS Type Selector And As A Classed Element: Tests And Results"; // No markup in title tags.
/* $webPage->head_meta_charset = "UTF-8"; */
/* $webPage->head_meta_author = "Steve Taylor"; */
$webPage->head_meta_keywords = "web browser, support, HTML, noscript, element, CSS, type selector, classed element, class selector, test"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "Tests to determine web browser support for the HTML noscript element as a CSS type selector and as a classed element, and the results."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
/* $webPage->head_meta_viewport = "width=device-width, initial-scale=1"; */
/* $webPage->head_link_stylesheets = include_once "stylesheets.php"; */
/* $webPage->body_header = include_once "header.php"; */
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"CSS\", \"\", \"CSS Testing Ground\");";
$webPage->body_main_webPageTitle = "Web Browser Support For The HTML <code>noscript</code> Element As A CSS Type Selector And As A Classed Element: Tests And Results";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 17 Jun 2016 | Published: 16 Jun 2016 | Status: Active";
/* $webPage->body_main_webBrowserSupport = "Web browser support: Internet Explorer 10+, Edge 12+, Firefox 6+, Chrome 30+, Opera 17+"; */
/* $webPage->body_main_tools = include_once "tools.php"; */
$webPage->body_main_toc = include_once "web_browser_support_noscript_toc.php";
/* $webPage->body_main_hrClassAttribute = ""; // Default ""/empty string displays <hr>. To not display <hr>, assign "class='display-none'" string. */
$webPage->body_main_sections = include_once "web_browser_support_noscript_sections.php";
/* $webPage->body_footer = include_once "footer.php"; */
/* $webPage->body_script_javascripts = include_once "javascripts.php"; */
$html = include_once "overall.php";
echo $html;
