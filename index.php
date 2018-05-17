<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/index.php.
 * Purpose: Web page file. LWC home page. A variation of /web_server_root_directory/templates/web_page.php.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Learn Web Coding - The Resource For Learning Web Coding"; // No markup in title tags.
$webPage->head_meta_keywords = "Learn Web Coding, home page"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "The Learn Web Coding home page."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_main_sections = include_once "index_sections.php";
$webPage->body_script_javascripts = include_once "javascripts_home_page.php";
$html = include_once "template_home_page.php";
echo $html;
