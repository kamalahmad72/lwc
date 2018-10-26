<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_web_browser_detection_update.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 25 Oct 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "JavaScript Web Browser Detection With Link To Download Update"; // No markup in title tags.
$webPage->head_meta_keywords = "javascript, web browser, detection, user-agent, string, value, navigator.userAgent, Internet Explorer, Edge, Firefox, Chrome, Opera, Vivaldi"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A JavaScript that gets the web browser user-agent string, determines the name and version of the web browser from the user-agent string, compares the version of the web browser to the latest known official version, and reports that the web browser is the latest known official version, or provides a link to download the latest known official version."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"JavaScript\");";
$webPage->body_main_webPageTitle = "JavaScript Web Browser Detection With Link To Download Update";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 25 Oct 2018 | Published: 04 Feb 2014 | Status: Active";
$webPage->body_main_toc = include_once "javascript_web_browser_detection_update_toc.php";
$webPage->body_main_sections = include_once "javascript_web_browser_detection_update_sections.php";
 // The javascript_web_browser_detection_update.js file is loaded via script element in javascript_web_browser_detection_update_sections.php. The BrowserDetectionUpdateUtil.browserDetectionUpdate() method is called at the bottom of the javascript_web_browser_detection_update.js file itself.
$html = include_once "template.php";
echo $html;
