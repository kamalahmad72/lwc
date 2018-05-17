<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_font_size_property.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.

/* Instantiate reusable code object required for this web page. */
include_once "Reusable_Code.class.php";
$reusableCode = new Reusable_Code();

include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Introduction To The CSS font-size Property"; // No markup in title tags.
$webPage->head_meta_keywords = "CSS, font-size, font, size, property, web design, pt, point, px, pixel, em, rem, xx-small, x-small, small, medium, large, x-large, xx-large"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "An introduction to the CSS font-size property."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->head_link_stylesheets .= "
  <link rel='stylesheet' type='text/css' media='all' href='/stylesheets/lwc/css_font_size_property.min.css' /><!-- For this web page, be careful using styles/style sheet implementations (eg, <link media=\"print\" />) that might alter font sizes. Hence, the placement of css_font_sizes.css as the last style sheet. -->";
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"CSS\");";
$webPage->body_main_webPageTitle = "Introduction To The CSS <code>font-size</code> Property";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 10 Nov 2017 | Published: 08 Jan 2014 | Status: Active";
$webPage->body_main_toc = include_once "css_font_size_property_toc.php";
$webPage->body_main_sections = include_once "css_font_size_property_sections.php";
$html = include_once "template.php";
echo $html;
