<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/misc/glossary.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Learn Web Coding Home - Glossary"; // No markup in title tags.
$webPage->head_meta_keywords = "Learn Web Coding Home, glossary"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "The Learn Web Coding Home glossary."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav();";
$webPage->body_main_webPageTitle = "Glossary";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 08 Sep 2017 | Published: 01 May 2015 | Status: Active";
$webPage->body_main_tools = include_once "tools_print_only.php";
$webPage->body_main_toc = include_once "glossary_toc.php";
$webPage->body_main_sections = include_once "glossary_sections.php";
$html = include_once "template.php";
echo $html;
