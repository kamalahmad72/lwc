<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/html/template_download.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 18 Oct 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Learn Web Coding Home Template Download"; // No markup in title tags.
$webPage->head_meta_keywords = "Learn Web Coding Home, template, download"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "Download the Learn Web Coding Home template."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"HTML\");";
$webPage->body_main_webPageTitle = "Learn Web Coding Home Template Download";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 11 Mar 2018 | Published: 18 Oct 2016 | Status: Active";
$webPage->body_main_toc = include_once "template_download_toc.php";
$webPage->body_main_sections = include_once "template_download_sections.php";
$html = include_once "template.php";
echo $html;
