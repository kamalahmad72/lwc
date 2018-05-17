/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascripts/lwc/support_tools_no_toc_html.js.
 * Purpose: LWC Home Web Browser Support HTML and LWC Home Tools Icon Dropdown HTML with Table Of Contents display options HTML removed.
 * Used in: 404.shtml. Used in LWC Home web pages based on LWC Home Template (/public_html/html/template_explained.php) that need to be .(s)html files, not .php files. Not used in LWC Home specialty web pages. Not used in LWC Blog/Forums.
 * Last reviewed/updated: 16 May 2018.
 * Published: 09 Aug 2016.
 * Web browser support: IE6+, ED12+, FF1.5+, SM1+, FL1+, SF3.1+, CH2+, OP7.50+, NT9+.
 * NOTE: Copy changes to tools*.php and support_tools*.js. */

document.write(
'<div class="web-browser-support-and-tools-icon-dropdown-container">' +
 '<div class="web-browser-support">Web browser support: Internet Explorer 10+, Edge 12+, Firefox 6+, Chrome 30+, Opera 17+</div>' +
 '<div id="toolsIconDropdownContainerId" class="tools-icon-dropdown-container">' +
  '<div class="fa fa-cog fa-lg cursor-pointer"></div>' +
  '<div id="toolsIconDropdownId" class="tools-icon-dropdown display-none">' +
   '<div class="tools-icon-dropdown-header">Display Web Page For</div>' +
   '<div id="toolsIconDropdownOption4Id" class="tools-icon-dropdown-option">Screen (F5) <span id="toolsIconDropdownOption4MarkerId" class="fa fa-check"></span></div>' +
   '<div id="toolsIconDropdownOption5Id" class="tools-icon-dropdown-option">Printing With Images <span id="toolsIconDropdownOption5MarkerId" class="fa fa-check display-none"></span></div>' +
   '<div id="toolsIconDropdownOption6Id" class="tools-icon-dropdown-option">Printing Without Images <span id="toolsIconDropdownOption6MarkerId" class="fa fa-check display-none"></span></div>' +
  '</div>' +
 '</div>' +
 '<div class="clear-both"></div>' +
'</div>'
);
