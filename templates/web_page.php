<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/web_page.php.
 * Purpose: Web page file. Assign web page specific web page object property values. The property values assigned in this file (web_page.php) override the property values assigned in the web page object definition file (Web_Page.class.php).
 * Used in: No other file.
 * Last reviewed/updated: 25 Sep 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Learn Web Coding Home Template"; // No markup in title tags.
$webPage->head_meta_keywords = "Learn Web Coding Home, template"; // Cap words as if used in sentence. No markup in keywords.
$webPage->head_meta_description = "The Learn Web Coding Home Template."; // Sentence and/or structured data less than 160 char per Google. No markup in description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"HTML\");";
$webPage->body_main_webPageTitle = "Learn Web Coding Home Template";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 25 Sep 2018 | Published: 08 Jan 2014 | Status: Active";
$webPage->body_main_toc = include_once "web_page_toc.php";
$webPage->body_main_sections = include_once "web_page_sections.php";
$html = include_once "template.php";
echo $html;
