<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/php/simple_mysql_admin.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 12 Nov 2018.
 * Published: 14 May 2017. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Simple MySQL Admin"; // No markup in title tags.
$webPage->head_meta_keywords = "Simple MySQL Admin, simple, MySQL, MariaDB, admin, download"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "Simple MySQL Admin home page. Download Simple MySQL Admin."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"PHP\");";
$webPage->body_main_webPageTitle = "Simple MySQL Admin";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 12 Nov 2018 | Published: 14 May 2017 | Status: Active";
$webPage->body_main_toc = include_once "simple_mysql_admin_toc.php";
$webPage->body_main_sections = include_once "simple_mysql_admin_sections.php";
$html = include_once "template.php";
echo $html;
