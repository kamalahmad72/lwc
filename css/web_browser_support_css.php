<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/web_browser_support_css.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Web Browser Support For CSS Selectors, Styles, Properties, Values, And Units"; // No markup in title tags.
$webPage->head_meta_keywords = "web browser, support, CSS, selector, style, property, value, unit, Internet Explorer, Edge, Firefox, Safari, Chrome, Opera"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "The web browser support for a list of CSS selectors, styles, properties, values, and units."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"CSS\");";
$webPage->body_main_webPageTitle = "Web Browser Support For CSS Selectors, Styles, Properties, Values, And Units";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 26 Oct 2016 | Published: 30 May 2015 | Status: Active";
$webPage->body_main_toc = include_once "web_browser_support_css_toc.php";
$webPage->body_main_sections = include_once "web_browser_support_css_sections.php";
$html = include_once "template.php";
echo $html;
