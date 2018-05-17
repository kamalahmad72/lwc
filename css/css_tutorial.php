<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_tutorial.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "CSS Tutorial"; // No markup in title tags.
$webPage->head_meta_keywords = "css, tutorial, style rule, style sheet, user agent styles, user agent default styles, author styles, user styles, cascade"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A CSS tutorial including CSS history and basic to advanced coding examples. 1. Introduction |  2. CSS Basics | 3. Creating Style Rules And Attaching Styles To Content | 4. Style Sheets | 5. User Agent Styles, Author Styles, And User Styles | 6. The Cascade | 7. Resources And Additional Information."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"CSS\");";
$webPage->body_main_webPageTitle = "CSS Tutorial";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 13 Aug 2017 | Published: 08 Jan 2014 | Status: Active";
$webPage->body_main_toc = include_once "css_tutorial_toc.php";
$webPage->body_main_sections = include_once "css_tutorial_sections.php";
$html = include_once "template.php";
echo $html;
