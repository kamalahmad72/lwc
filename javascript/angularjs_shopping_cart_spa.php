<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/angularjs_shopping_cart_spa.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 Feb 2018.
 * Published: 24 Jan 2017. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "AngularJS Shopping Cart Single Page Application"; // No markup in title tags.
/* $webPage->head_meta_charset = "UTF-8"; */
/* $webPage->head_meta_author = "Steve Taylor"; */
$webPage->head_meta_keywords = "AngularJS, shopping cart, single page application, spa, form validation, example"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "An AngularJS shopping cart single page application."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
/* $webPage->head_meta_viewport = "width=device-width, initial-scale=1"; */
$webPage->head_link_stylesheets = include_once "stylesheets_angularjs_javascript_shopping_cart_spa.php";
/* $webPage->body_header = include_once "header.php"; */
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"JavaScript\");";
$webPage->body_main_webPageTitle = "AngularJS Shopping Cart Single Page Application";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 15 Feb 2018 | Published: 24 Jan 2017 | Status: Active";
/* $webPage->body_main_webBrowserSupport = "Web browser support: Internet Explorer 10+, Edge 12+, Firefox 6+, Chrome 30+, Opera 17+"; */
/* $webPage->body_main_tools = include_once "tools.php"; */
$webPage->body_main_toc = include_once "angularjs_shopping_cart_spa_toc.php";
/* $webPage->body_main_hrClassAttribute = ""; // Default ""/empty string displays <hr>. To not display <hr>, assign "class='display-none'" string. */
$webPage->body_main_sections = include_once "angularjs_shopping_cart_spa_sections.php";
$webPage->body_footer = include_once "footer_valid_css3_only.php";
$webPage->body_script_javascripts .= "
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js'></script>
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-messages.min.js'></script>
  <script src='/javascripts/lwc/angularjs_shopping_cart_spa.min.js'></script>";
$html = include_once "overall.php";
echo $html;
