<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_techniques/style_selectboxes.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "CSS Technique: Style Selectboxes"; // No markup in title tags.
$webPage->head_meta_keywords = "CSS, technique, style, selectboxes, dropdowns"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "Three techniques using CSS to style selectboxes."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"CSS\", \"\", \"CSS Techniques\");";
$webPage->body_main_webPageTitle = "CSS Technique: Style Selectboxes";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 11 Jun 2017 | Published: 29 Jul 2015 | Status: Active";
$webPage->body_main_toc = include_once "style_selectboxes_toc.php";
$webPage->body_main_sections = include_once "style_selectboxes_sections.php";
$html = include_once "template.php";
echo $html;
