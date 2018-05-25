<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/files_demo/index.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 24 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Learn Web Coding Home - Files Demo Landing Page"; // No markup in title tags.
$webPage->head_meta_keywords = "Learn Web Coding Home, files, demo, landing page"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "The Learn Web Coding Home files demo landing page."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header = include_once "header_demo.php";
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav();";
$webPage->body_main_webPageTitle = "Files Demo";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 24 May 2018 | Published: 08 Jan 2014 | Status: Active";
$webPage->body_main_tools = include_once "tools_demo.php";
$webPage->body_main_toc = include_once "index_toc.php";
$webPage->body_main_sections = include_once "index_sections.php";
$webPage->body_footer = include_once "footer_demo.php";
$html = include_once "template.php";
echo $html;
