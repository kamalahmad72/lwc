<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/how_to_override_unwanted_css_styles.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "How To Override Unwanted CSS Styles"; // No markup in title tags.
$webPage->head_meta_keywords = "override, cancel, unwanted, CSS, styles"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A list of CSS style properties and the value to use to override an unwanted CSS style using that property."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"CSS\");";
$webPage->body_main_webPageTitle = "How To Override Unwanted CSS Styles";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 05 Aug 2016 | Published: 05 Jul 2015 | Status: Active";
$webPage->body_main_toc = include_once "how_to_override_unwanted_css_styles_toc.php";
$webPage->body_main_sections = include_once "how_to_override_unwanted_css_styles_sections.php";
$html = include_once "template.php";
echo $html;
