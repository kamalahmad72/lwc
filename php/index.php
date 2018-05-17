<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/php/index.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 10 May 2017. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Learn Web Coding Home - PHP Landing Page"; // No markup in title tags.
$webPage->head_meta_keywords = "Learn Web Coding Home, PHP, landing page"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "The Learn Web Coding Home PHP landing page."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav();";
$webPage->body_main_webPageTitle = "PHP";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 06 Jul 2017 | Published: 10 May 2017 | Status: Active";
$webPage->body_main_toc = include_once "index_toc.php";
$webPage->body_main_sections = include_once "index_sections.php";
$html = include_once "template.php";
echo $html;
