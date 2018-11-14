<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/html/view_submitted_form_data.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 13 Nov 2018.
 * Published: 12 Nov 2018. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "View Submitted Form Data"; // No markup in title tags.
$webPage->head_meta_keywords = "view, submit, form, data, Node.js web server, download"; // Cap words as if used in sentence. No markup in keywords.
$webPage->head_meta_description = "View submitted form data. Download the form and Node.js web server to view submitted form data."; // Sentence and/or structured data less than 160 char per Google. No markup in description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"HTML\");";
$webPage->body_main_webPageTitle = "View Submitted Form Data";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 13 Nov 2018 | Published: 12 Nov 2018 | Status: Active";
$webPage->body_main_toc = include_once "view_submitted_form_data_toc.php";
$webPage->body_main_sections = include_once "view_submitted_form_data_sections.php";
$html = include_once "template.php";
echo $html;
