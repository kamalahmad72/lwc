<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/bom/versions_ie_ed_windows.php.
 * Purpose: Web page file. 
 * Used in: No other file.
 * Last reviewed/updated: 04 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Versions Of Internet Explorer And Edge Included With And Supported By Windows 98/ME/2000/XP/Vista/7/8/8.1/10"; // No markup in title tags.
/* $webPage->head_meta_charset = "UTF-8"; */
/* $webPage->head_meta_author = "Steve Taylor"; */
$webPage->head_meta_keywords = "Internet Explorer, Edge, version, included, bundled, supported, Windows 98, Windows ME, Windows 2000, Windows XP, Windows Vista, Windows 7, Windows 8, Windows 8.1, Windows 10"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A list of the versions of Internet Explorer and Edge included with and supported by Windows 98/ME/2000/XP/Vista/7/8/8.1, including Windows 2000/XP/Vista/7/8/8.1/10 at various Service Pack/Update/Version levels."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
/* $webPage->head_meta_viewport = "width=device-width, initial-scale=1"; */
/* $webPage->head_link_stylesheets = include_once "stylesheets.php"; */
/* $webPage->body_header = include_once "header.php"; */
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"Misc\");";
$webPage->body_main_webPageTitle = "Versions Of Internet Explorer And Edge Included With And Supported By Windows 98/ME/2000/XP/Vista/7/8/8.1/10";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 04 May 2018 | Published: 18 Jan 2014 | Status: Active";
/* $webPage->body_main_webBrowserSupport = "Web browser support: Internet Explorer 10+, Edge 12+, Firefox 6+, Chrome 30+, Opera 17+"; */
/* $webPage->body_main_tools = include_once "tools.php"; */
$webPage->body_main_toc = include_once "versions_ie_ed_windows_toc.php";
/* $webPage->body_main_hrClassAttribute = ""; // Default ""/empty string displays <hr>. To not display <hr>, assign "class='display-none'" string. */
$webPage->body_main_sections = include_once "versions_ie_ed_windows_sections.php";
/* $webPage->body_footer = include_once "footer.php"; */
/* $webPage->body_script_javascripts = include_once "javascripts.php"; */
$html = include_once "overall.php";
echo $html;
