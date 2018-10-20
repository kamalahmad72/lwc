<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/tools_print_only.php.
 * Purpose: Web page tools icon dropdown. A variation of /web_server_root_directory/templates/tools.php with the Table Of Contents display options removed, leaving only the Print display options.
 * Used in: sitemap.php, glossary.php, and whats_new.php.
 * Last reviewed/updated: 19 Oct 2018.
 * Published: 21 Sep 2016.
 * NOTE: Copy changes to tools*.php and tools*html.js. */
return
    "<div id='toolsIconDropdownContainerId' class='tools-icon-dropdown-container'>
      <div class='fa fa-cog fa-lg cursor-pointer'></div>
      <div id='toolsIconDropdownId' class='tools-icon-dropdown display-none'>
       <div class='tools-icon-dropdown-header'>Display Web Page For</div>
       <div id='toolsIconDropdownOption4Id' class='tools-icon-dropdown-option'>Screen (F5) <span id='toolsIconDropdownOption4MarkerId' class='fa fa-check'></span></div>
       <div id='toolsIconDropdownOption5Id' class='tools-icon-dropdown-option'>Printing With Images <span id='toolsIconDropdownOption5MarkerId' class='fa fa-check display-none'></span></div>
       <div id='toolsIconDropdownOption6Id' class='tools-icon-dropdown-option'>Printing Without Images <span id='toolsIconDropdownOption6MarkerId' class='fa fa-check display-none'></span></div>
      </div>
     </div>
     <div class='clear-both'></div>";
