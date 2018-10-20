<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/Web_Page.class.php.
 * Purpose: Web page object (WPO) definition. Defines a web page type as a WPO. Defines WPO properties and assign sitewide default WPO property values.
 * Used in: Web page files based on /web_server_root_directory/templates/web_page.php.
 * Last reviewed/updated: 19 Oct 2018.
 * Published: 21 Sep 2016. */
class Web_Page {
 public $head_title = "";
 public $head_meta_charset = "UTF-8";
 public $head_meta_author = "Steve Taylor";
 public $head_meta_keywords = "";
 public $head_meta_description = "";
 public $head_meta_viewport = "width=device-width, initial-scale=1";
 public $body_header_callBcrumbsNav = "";
 public $body_main_webPageTitle = "";
 public $body_main_lastReviewed = "";
 public $body_main_webBrowserSupport = "Web browser support: Internet Explorer 10+, Edge 12+, Firefox 6+, Chrome 30+, Opera 17+";
 public $body_main_toc = "";
 public $body_main_hrClassAttribute = ""; // Default ""/empty string displays <hr>. To not display <hr>, assign "class='display-none'" string.
 public $body_main_sections = "";
 function __construct(){ // To simultaneously declare and initialize PHP object properties with non simple constant values, such as those using include_once statement, constructor required.
  $this->head_script_googleAnalytics = include_once "google_analytics.php";
  $this->head_link_stylesheets = include_once "stylesheets.php";
  $this->body_header = include_once "header.php";
  $this->body_main_tools = include_once "tools.php";
  $this->body_footer = include_once "footer.php";
  $this->body_script_javascripts = include_once "javascripts.php";
 }
}
