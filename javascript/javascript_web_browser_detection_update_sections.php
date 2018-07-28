<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_web_browser_detection_update_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_web_browser_detection_update.php.
 * Last reviewed/updated: 27 Jul 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>This web page automatically runs the JavaScript Web Browser Detection With Link To Download Update script and displays its report in Section 2 below. For the supported web browsers, the JavaScript: 1.) gets the web browser user-agent string; 2.) from the user-agent string, determines if the web browser is IE, ED, FF, CH, OP, or VI; 3.) if the web browser is IE or ED, from the user-agent string, determines the version of Windows; 4.) from the user-agent string, determines the web browser version; 5.) compares the web browser version to the latest known version of the web browser; and 6.) generates and writes a report to the web page, including; a.) the web browser name and version, b.) whether or not the web browser is the latest known official version, and c.) if it is not the latest known official version, provides a link to download the web browser. For the unsupported web browsers, the JavaScript writes to the web page, <q>Most likely the web browser is not supported by the JavaScript.</q></p>

     <p>The JavaScript supports:</p>

     <ul>
      <li>IE6+ for Windows XP.</li>
      <li>IE7+ for Windows Vista.</li>
      <li>IE8+ for Windows 7.</li>
      <li>IE10+ for Windows 8.</li>
      <li>IE11+ for Windows 8.1.</li>
      <li>ED12+ and IE11+ for Windows 10.</li>
      <li>FF0.8+ for Windows.</li>
      <li>CH2+ for Windows.</li>
      <li>OP5+ for Windows.</li>
      <li>VV1+ for Windows.</li>
     </ul>

     <p>The JavaScript does not support:</p>

     <ul>
      <li>SF for Windows.</li>
      <li>SM for Windows.</li>
     </ul>

     <h3><a id='caveats'></a>1.1. Caveats</h3>

     <p>The JavaScript has the following caveats:</p>

     <ul>
      <li>Because FF16+ major releases (e.g., FF61) and point releases (e.g., FF61.0.1) have identical user-agent string values, it does not accurately detect/report on the latest FF point releases.</li>
      <li>Because the OP5 - 12.17 user-agent string value can be changed to mimic the user-agent string value of other web browsers, it does not accurately detect/report on OP9 - 12.17 (Mask As Internet Explorer) and OP10.50 - 12.17 (Mask As Firefox).</li><!-- E.g., OP12.17 64-bit (Mask As Internet Explorer) is reported as 'The web browser is Internet Explorer 9.0 for Windows 7' and OP12.17 64-bit (Mask As Firefox) is reported as 'The web browser is Firefox 4.0'. -->
      <li>Because beta, release candidate, and other non-official versions of web browsers are risky to use, and because they often have the same user-agent string value as the official versions, it does not detect/report on beta, release candidate, and other non-official versions of the supported web browsers.</li>
      <li>It requires a web browser that supports JavaScript and has JavaScript support enabled.</li>
      <li>It requires updating when a new version of the supported web browsers is released. If the script is not updated for the latest versions of the supported web browsers, it does not accurately detect/report if the web browser is the latest known version.</li>
     </ul>

     <h3><a id='abbreviations'></a>1.2. Abbreviations</h3>

     <ul>
      <li>IE = Internet Explorer.</li>
      <li>ED = Edge = EdgeHTML rendering engine (ED12+) and/or Edge browser (ED20+).</li>
      <li>FF = Firefox.</li>
      <li>CH = Chrome.</li>
      <li>OP = Opera.</li>
      <li>SF = Safari.</li>
      <li>SM = SeaMonkey.</li>
      <li>VV = Vivaldi.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='detection'></a>2. JavaScript Web Browser Detection With Link To Download Update</h2>

     <script src='/javascripts/lwc/javascript_web_browser_detection_update.min.js'></script><!-- Load javascript_web_browser_detection_update.min.js here because it outputs here via the JavaScript document.write() method. -->

    </section>";
