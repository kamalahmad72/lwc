<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/class_syntax.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 07 Feb 2018. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "JavaScript Feature Reference: class Syntax Web Browser Support Test"; // No markup in title tags.
$webPage->head_meta_keywords = "JavaScript, class, syntax, web browser support, test"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A JavaScript that tests and reports if the web browser supports the JavaScript class syntax."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"JavaScript\", \"\", \"JavaScript Feature Reference\");";
$webPage->body_main_webPageTitle = "JavaScript Feature Reference: <code>class</code> Syntax Web Browser Support Test";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 07 Feb 2018 | Published: 07 Feb 2018 | Status: Active";
$webPage->body_main_toc = include_once "class_syntax_toc.php";
$webPage->body_main_sections = include_once "class_syntax_sections.php";
$html = include_once "template.php";
echo $html;
