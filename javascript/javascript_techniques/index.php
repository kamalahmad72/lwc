<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_techniques/index.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "JavaScript Techniques"; // No markup in title tags.
$webPage->head_meta_keywords = "JavaScript, techniques, property, method, object, web browser support"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A list of JavaScript techniques with their purpose, the significant properties, methods, and objects used, and web browser support."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"JavaScript\");";
$webPage->body_main_webPageTitle = "JavaScript Techniques";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 03 Jun 2016 | Published: 20 Apr 2014 | Status: Active";
$webPage->body_main_toc = include_once "index_toc.php";
$webPage->body_main_sections = include_once "index_sections.php";
$html = include_once "template.php";
echo $html;
