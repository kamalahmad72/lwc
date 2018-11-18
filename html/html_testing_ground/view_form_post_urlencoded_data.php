<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/html/view_form_post_urlencoded_data.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 17 Nov 2018.
 * Published: 12 Nov 2018. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "View Form method='post' enctype='application/x-www-form-urlencoded' Data"; // No markup in title tags.
$webPage->head_meta_keywords = "view, submit, form, method=post, enctype=application/x-www-form-urlencoded, data, Node.js web server, download"; // Cap words as if used in sentence. No markup in keywords.
$webPage->head_meta_description = "A form with method=\"post\" enctype=\"application/x-www-form-urlencoded\" attributes and a Node.js web server that responds with the submitted form data."; // Sentence and/or structured data less than 160 char per Google. No markup in description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"HTML\", \"\", \"HTML Testing Ground\");";
$webPage->body_main_webPageTitle = "View Form <code>method='post' enctype='application/x-www-form-urlencoded'</code> Data";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 17 Nov 2018 | Published: 12 Nov 2018 | Status: Active";
$webPage->body_main_toc = include_once "view_form_post_urlencoded_data_toc.php";
$webPage->body_main_sections = include_once "view_form_post_urlencoded_data_sections.php";
$html = include_once "template.php";
echo $html;
