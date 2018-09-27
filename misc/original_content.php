<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/misc/original_content.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 26 Sep 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Learn Web Coding Home - Original Content"; // No markup in title tags.
$webPage->head_meta_keywords = "Learn Web Coding Home, original, content"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "The list of original content at Learn Web Coding Home."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"Misc\");";
$webPage->body_main_webPageTitle = "Original Content";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 26 Sep 2018 | Published: 10 Aug 2015 | Status: Active";
$webPage->body_main_toc = include_once "original_content_toc.php";
$webPage->body_main_sections = include_once "original_content_sections.php";
$html = include_once "template.php";
echo $html;
