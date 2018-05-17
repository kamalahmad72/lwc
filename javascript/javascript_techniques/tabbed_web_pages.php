<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_techniques/tabbed_web_pages.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "JavaScript Technique: Tabbed Web Pages"; // No markup in title tags.
$webPage->head_meta_keywords = "JavaScript, technique, display, highlight, web page, tab, provide tab HTML, dynamically change, tab style"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A technique using JavaScript to display and highlight web page tabs."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"JavaScript\", \"\", \"JavaScript Techniques\");";
$webPage->body_main_webPageTitle = "JavaScript Technique: Tabbed Web Pages";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 25 May 2016 | Published: 21 Aug 2014 | Status: Active";
$webPage->body_main_toc = include_once "tabbed_web_pages_toc.php";
$webPage->body_main_sections = include_once "tabbed_web_pages_sections.php";
$html = include_once "template.php";
echo $html;
