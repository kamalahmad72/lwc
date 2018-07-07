<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/misc/whats_new.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 06 Jul 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "What's New"; // No markup in title tags.
$webPage->head_meta_keywords = "Learn Web Coding, what is new, news, updates"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A list of what is new at Learn Web Coding."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav();";
$webPage->body_main_webPageTitle = "What's New";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 06 Jul 2018 | Published: 09 Jan 2014 | Status: Active";
$webPage->body_main_tools = include_once "tools_print_only.php";
$webPage->body_main_toc = include_once "whats_new_toc.php";
$webPage->body_main_sections = include_once "whats_new_sections.php";
$html = include_once "template.php";
echo $html;
