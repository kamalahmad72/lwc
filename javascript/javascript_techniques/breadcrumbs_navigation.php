<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_techniques/breadcrumbs_navigation.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 16 Nov 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "JavaScript Technique: Breadcrumbs Navigation"; // No markup in title tags.
$webPage->head_meta_keywords = "JavaScript, technique, breadcrumbs, navigation, dynamically generate, directory, landing page, hyperlinks"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A technique using JavaScript to display breadcrumbs navigation."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"JavaScript\", \"\", \"JavaScript Techniques\");";
$webPage->body_main_webPageTitle = "JavaScript Technique: Breadcrumbs Navigation";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 16 Nov 2018 | Published: 17 Sep 2015 | Status: Active";
$webPage->body_main_toc = include_once "breadcrumbs_navigation_toc.php";
$webPage->body_main_sections = include_once "breadcrumbs_navigation_sections.php";
$html = include_once "template.php";
echo $html;
