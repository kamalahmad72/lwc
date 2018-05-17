<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_techniques/change_ext_ss.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "JavaScript Technique: Change Web Page External Style Sheet"; // No markup in title tags.
$webPage->head_meta_keywords = "JavaScript, technique, change, web page, external style sheet, dynamically change, web page style"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A technique using JavaScript to change a web page external style sheet."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"JavaScript\", \"\", \"JavaScript Techniques\");";
$webPage->body_main_webPageTitle = "JavaScript Technique: Change Web Page External Style Sheet";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 02 May 2016 | Published: 20 Apr 2014 | Status: Active";
$webPage->body_main_toc = include_once "change_ext_ss_toc.php";
$webPage->body_main_sections = include_once "change_ext_ss_sections.php";
$html = include_once "template.php";
echo $html;
