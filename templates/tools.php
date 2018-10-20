<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/tools.php.
 * Purpose: Web page tools icon dropdown.
 * Used in: Web page files based on /web_server_root_directory/templates/web_page.php except home page, sitemap.php, glossary.php, and whats_new.php.
 * Last reviewed/updated: 19 Oct 2018.
 * Published: 04 Jun 2016.
 * NOTE: Copy changes to tools*.php and tools*html.js. */
return
    "<div id='toolsIconDropdownContainerId' class='tools-icon-dropdown-container'>
      <div class='fa fa-cog fa-lg cursor-pointer'></div>
      <div id='toolsIconDropdownId' class='tools-icon-dropdown display-none'>
       <div class='tools-icon-dropdown-header'>Table Of Contents</div>
       <div id='toolsIconDropdownOption1Id' class='tools-icon-dropdown-option'>Show Expanded (F5) <span id='toolsIconDropdownOption1MarkerId' class='fa fa-check'></span></div>
       <div id='toolsIconDropdownOption2Id' class='tools-icon-dropdown-option'>Show Collapsed <span id='toolsIconDropdownOption2MarkerId' class='fa fa-check display-none'></span></div>
       <div id='toolsIconDropdownOption3Id' class='tools-icon-dropdown-option'>Hide <span id='toolsIconDropdownOption3MarkerId' class='fa fa-check display-none'></span></div>
       <div class='tools-icon-dropdown-header'>Display Web Page For</div>
       <div id='toolsIconDropdownOption4Id' class='tools-icon-dropdown-option'>Screen (F5) <span id='toolsIconDropdownOption4MarkerId' class='fa fa-check'></span></div>
       <div id='toolsIconDropdownOption5Id' class='tools-icon-dropdown-option'>Printing With Images <span id='toolsIconDropdownOption5MarkerId' class='fa fa-check display-none'></span></div>
       <div id='toolsIconDropdownOption6Id' class='tools-icon-dropdown-option'>Printing Without Images <span id='toolsIconDropdownOption6MarkerId' class='fa fa-check display-none'></span></div>
      </div>
     </div>
     <div class='clear-both'></div>";
