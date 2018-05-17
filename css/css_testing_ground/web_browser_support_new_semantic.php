<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_testing_ground/web_browser_support_new_semantic.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Web Browser Support For The New HTML5 Semantic Elements: Tests And Results"; // No markup in title tags.
$webPage->head_meta_keywords = "web browser, support, new, HTML5, semantic, element, test"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "Tests to determine web browser support for the new HTML5 semantic elements, and the results."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"CSS\", \"\", \"CSS Testing Ground\");";
$webPage->body_main_webPageTitle = "Web Browser Support For The New HTML5 Semantic Elements: Tests And Results";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 26 Oct 2016 | Published: 28 Oct 2015 | Status: Active";
$webPage->body_main_toc = include_once "web_browser_support_new_semantic_toc.php";
$webPage->body_main_sections = include_once "web_browser_support_new_semantic_sections.php";
$html = include_once "template.php";
echo $html;
