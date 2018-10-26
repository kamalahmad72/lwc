<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/bom/web_browser_useragent_values.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 25 Oct 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Web Browser User-Agent String Values"; // No markup in title tags.
$webPage->head_meta_keywords = "web browser, user-agent, useragent, string, value, Internet Explorer, Edge, Firefox, Chrome, Opera, Vivaldi, Safari, SeaMonkey, Flock, Netscape, Mozilla, Netscape Navigator"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A list of the web browser user-agent string values for Internet Explorer 5+ for Windows, Firefox 0.8+ for Windows, Chrome 2+ for Windows, Opera 5+ for Windows, Vivaldi 1+ for Windows, Safari 3.1+ for Windows, SeaMonkey 1+ for Windows, Flock 1+ for Windows, Netscape 6+ for Windows, Mozilla 0.6+ for Windows, and Netscape Navigator 4+ for Windows."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"JavaScript\");";
$webPage->body_main_webPageTitle = "Web Browser User-Agent String Values";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 25 Oct 2018 | Published: 08 Jan 2014 | Status: Active";
$webPage->body_main_toc = include_once "web_browser_useragent_values_toc.php";
$webPage->body_main_sections = include_once "web_browser_useragent_values_sections.php";
$html = include_once "template.php";
echo $html;
