<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/google_analytics.php.
 * Purpose: Web page style sheets code file.
 * Used in: Web page files based on /web_server_root_directory/templates/web_page.php.
 * Last reviewed/updated: 15 May 2018.
 * Published: 15 May 2018. */
return
 "<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src='https://www.googletagmanager.com/gtag/js?id=UA-53108923-2'></script>
  <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'UA-53108923-2');
  </script>";
