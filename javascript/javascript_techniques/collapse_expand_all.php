<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_techniques/collapse_expand_all.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "JavaScript Technique: Collapse Or Expand Multiple Sections Of A Web Page Simultaneously"; // No markup in title tags.
$webPage->head_meta_keywords = "JavaScript, technique, collapse, hide, expand, display, multiple sections, web page, simultaneously, dynamically change, displayed content"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A technique using JavaScript to collapse or expand multiple sections of a web page simultaneously."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"JavaScript\", \"\", \"JavaScript Techniques\");";
$webPage->body_main_webPageTitle = "JavaScript Technique: Collapse Or Expand Multiple Sections Of A Web Page Simultaneously";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 02 May 2016 | Published: 26 Apr 2014 | Status: Active";
$webPage->body_main_toc = include_once "collapse_expand_all_toc.php";
$webPage->body_main_sections = include_once "collapse_expand_all_sections.php";
$html = include_once "template.php";
echo $html;
