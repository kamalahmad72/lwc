<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/header_noscript_only.php.
 * Purpose: Web page <header></header> section. A variation of /web_server_root_directory/templates/header.php with LWC navbar removed, LWC Bootstrap navbar removed, and LWC Home breadcrumbs navigation removed, leaving only the <noscript></noscript> section.
 * Used in: Nothing. For possible future use.
 * Last reviewed/updated: 19 Oct 2018.
 * Published: 21 Jun 2016.
 * NOTE: Copy changes to header*.php and header*html.js. */
return
  "<!-- header_noscript_only.php. LWC navbar HTML and LWC Bootstrap navbar HTML removed in header_noscript_only.php. -->
   <noscript class='noscript'>
    <div class='container-fluid'><!-- container-fluid from Bootstrap. -->NOTE: Parts of this web site require JavaScript and are nonfunctional because your web browser does not support JavaScript or has JavaScript support disabled.</div>
   </noscript>
   <!-- header_noscript_only.php. LWC Home breadcrumbs navigation HTML and JavaScript removed in header_noscript_only.php. -->";
