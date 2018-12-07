<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_testing_ground/index.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 06 Dec 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "CSS Testing Ground"; // No markup in title tags.
$webPage->head_meta_keywords = "CSS, coding, examples, demonstrate, testing ground"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A list of CSS coding examples to demonstrate and/or test how CSS works."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"CSS\");";
$webPage->body_main_webPageTitle = "CSS Testing Ground";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 06 Dec 2018 | Published: 27 Jul 2014 | Status: Active";
$webPage->body_main_toc = include_once "index_toc.php";
$webPage->body_main_sections = include_once "index_sections.php";
$html = include_once "template.php";
echo $html;
