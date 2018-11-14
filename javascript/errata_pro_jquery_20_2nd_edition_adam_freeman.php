<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/errata_pro_jquery_20_2nd_edition_adam_freeman.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 13 Nov 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Errata Pro jQuery 2.0 2nd Edition By Adam Freeman"; // No markup in title tags.
$webPage->head_meta_keywords = "errata, Pro jQuery 2.0 2nd Edition, by Adam Freeman, Apress, ISBN-13: 9781430263883"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A list of errata for Pro jQuery 2.0 2nd Edition by Adam Freeman."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"JavaScript\");";
$webPage->body_main_webPageTitle = "Errata Pro jQuery 2.0 2nd Edition By Adam Freeman";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 13 Nov 2018 | Published: 20 Jan 2014 | Status: Active";
$webPage->body_main_toc = include_once "errata_pro_jquery_20_2nd_edition_adam_freeman_toc.php";
$webPage->body_main_sections = include_once "errata_pro_jquery_20_2nd_edition_adam_freeman_sections.php";
$html = include_once "template.php";
echo $html;
