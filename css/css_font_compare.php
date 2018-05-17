<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_font_compare.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.

/* Instantiate reusable code object required for this web page. */
include_once "Reusable_Code.class.php";
$reusableCode = new Reusable_Code();

include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Select And Compare CSS font Property Values Side By Side Online"; // No markup in title tags.
$webPage->head_meta_keywords = "select, compare, CSS, font, property, font-family, font-size, font-weight, font-style, side by side, online"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "User selected CSS font property values are applied to strings of text, thereby allowing CSS font property values to be compared side by side online."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"CSS\");";
$webPage->body_main_webPageTitle = "Select And Compare CSS <code>font</code> Property Values Side By Side Online";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 29 Oct 2016 | Published: 23 Jan 2014 | Status: Active";
$webPage->body_main_webBrowserSupport = "Web browser support: Internet Explorer 11+, Edge 12+, Firefox 8+, Chrome 30+, Opera 17+";
$webPage->body_main_toc = include_once "css_font_compare_toc.php";
$webPage->body_main_sections = include_once "css_font_compare_sections.php";
$webPage->body_script_javascripts .= "
  <script src='/javascripts/lwc/css_font_compare.min.js'></script>";
$html = include_once "template.php";
echo $html;
