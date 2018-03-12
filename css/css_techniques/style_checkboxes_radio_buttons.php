<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_techniques/style_checkboxes_radio_buttons.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 08 Mar 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "CSS Technique: Style Checkboxes And Radio Buttons"; // No markup in title tags.
/* $webPage->head_meta_charset = "UTF-8"; */
/* $webPage->head_meta_author = "Steve Taylor"; */
$webPage->head_meta_keywords = "CSS, technique, style, checkboxes, radio buttons"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "Two techniques using CSS to style checkboxes and radio buttons."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
/* $webPage->head_meta_viewport = "width=device-width, initial-scale=1"; */
/* $webPage->head_link_stylesheets = include_once "stylesheets.php"; */
/* $webPage->body_header = include_once "header.php"; */
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"CSS\", \"\", \"CSS Techniques\");";
$webPage->body_main_webPageTitle = "CSS Technique: Style Checkboxes And Radio Buttons";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 08 Mar 2018 | Published: 20 Jul 2015 | Status: Active";
/* $webPage->body_main_webBrowserSupport = "Web browser support: Internet Explorer 10+, Edge 12+, Firefox 6+, Chrome 30+, Opera 17+"; */
/* $webPage->body_main_tools = include_once "tools.php"; */
$webPage->body_main_toc = include_once "style_checkboxes_radio_buttons_toc.php";
/* $webPage->body_main_hrClassAttribute = ""; // Default ""/empty string displays <hr>. To not display <hr>, assign "class='display-none'" string. */
$webPage->body_main_sections = include_once "style_checkboxes_radio_buttons_sections.php";
/* $webPage->body_footer = include_once "footer.php"; */
/* $webPage->body_script_javascripts = include_once "javascripts.php"; */
$html = include_once "overall.php";
echo $html;
