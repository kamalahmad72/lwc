<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_testing_ground/do_olol_olul_ulol_ulul_style_all_levels_various_list_nesting_combinations.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Do the ol ol, ol ul, ul ol, ul ul Descendant Selectors Style All Levels Of Various List Nesting Combinations?"; // No markup in title tags.
$webPage->head_meta_keywords = "ol ol, ol ul, ul ol, ul ul, descendant selectors, style, various, list, nesting combinations, test"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A test to determine if the ol ol, ol ul, ul ol, ul ul descendant selectors style all levels of various list nesting combinations."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"CSS\", \"\", \"CSS Testing Ground\");";
$webPage->body_main_webPageTitle = "Do the <code>ol ol, ol ul, ul ol, ul ul</code> Descendant Selectors Style All Levels Of Various List Nesting Combinations?";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 20 Jun 2016 | Published: 20 Jun 2016 | Status: Active";
$webPage->body_main_toc = include_once "do_olol_olul_ulol_ulul_style_all_levels_various_list_nesting_combinations_toc.php";
$webPage->body_main_sections = include_once "do_olol_olul_ulol_ulul_style_all_levels_various_list_nesting_combinations_sections.php";
$html = include_once "template.php";
echo $html;
