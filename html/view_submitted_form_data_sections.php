<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/html/view_submitted_form_data_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/html/view_submitted_form_data.php.
 * Last reviewed/updated: 13 Nov 2018.
 * Published: 12 Nov 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Coming soon.</p>

<!--
     <p>Simple description why this example.</p>

     <p>Simple description how this example does what it does.</p>

     <p>In this example, the web server is a <a href='https://nodejs.org/en/'>Node.js (nodejs.org)</a> web server. Node.js is a runtime environment for JavaScript applications. To run a Node.js application on your computer, Node.js and any This requires installing Node.js and starting the form is submitting to a Node,js web server, represented by the nodejs_web_server.js file. Node.js required, which requires. This requires installing Node.js. No additional npm modules required.</p>
-->

     <h3><a id='browserSupport'></a>1.1. Web Browser Support</h3>

     <p>Web browser support: IE8+, ED12+, FF1.5+, CH2+, OP7.50+. IE6 - 7 not tested.</p>

     <h3><a id='nodejsSupport'></a>1.2. Node.js Support</h3>

     <p>Node.js support: Node.js 8+, 10+, 11+. Node.js 7-, 9 not tested.</p>

     <h3><a id='try'></a>1.3. How To Download And Try On Your Computer</h3>

     <p>To download and try on your computer:</p>

     <ol>
      <li>Install Node.js:
       <ol>
        <li>Download Node.js from <a href='https://nodejs.org/en/download/'>Node.js Downloads (nodejs.org)</a>. The Long Term Support (LTS) version of Node.js is recommended over the Current version of Node.js. For Windows, download the Windows Installer <span class='filename'>(.msi)</span> file.</li>
        <li>Install Node.js. For Windows, double click the downloaded <span class='filename'>.msi</span> file and use the default settings.</li>
        <li>Test the install:
         <ol>
          <li>Open the terminal (Linux)/command prompt (Windows). Alternatively, open the Node.js command prompt created by the Node.js installer.</li>
          <li>Type <kbd>node.exe -v</kbd> and press <kbd>Enter</kbd>.</li>
          <li>If the version of Node.js appears, Node.js is properly installed.</li>
         </ol>
        </li>
       </ol>
      </li>
      <li>Download the following source code zip file to your computer: <a href='/downloads/view_submitted_form_data.zip'><span class='filename'>view_submitted_form_data.zip</span> (learnwebcoding.com)</a> - Released 13 Nov 2018. Size: 6,035 bytes. SHA-256 checksum: 162e163ffa805ef21ab0510026fdb65936a034246bed2526dcd19a4f0a6ebb79.</li>
      <li>Extract the downloaded zip file. In this example, <span class='filename'>view_submitted_form_data.zip</span> is extracted to the <span class='filename'>view_submitted_form_data</span> folder:
       <img src='/images/view_submitted_form_data/view_submitted_form_data_folder_450x263.gif' alt='Contents Extracted Zip File' />
       <div class='note normal'>The location of <span class='filename'>form.html</span> and <span class='filename'>nodejs_web_server.js</span> on your computer does not matter. They do not even need to be located in the same folder. Accordingly, leave them where they are, or move one or both of them to a different location.</div>
      </li>
      <li>Start the Node.js web server:
       <ol>
        <li>Open the terminal/command prompt. Alternatively, open the Node.js command prompt created by the Node.js installer.</li>
        <li>Navigate the terminal/command prompt to the drive/directory containing <span class='filename'>nodejs_web_server.js</span>.</li>
        <li>Type <kbd>node.exe nodejs_web_server.js</kbd> and press <kbd>Enter</kbd>.</li>
        <li>If the <q>Node.js web server listening on http://localhost:8001/.</q> report appears, the Node.js web server is started.</li>
       </ol>
       <div class='note normal'>To stop the Node.js web server, close the terminal/command prompt or press <kbd>Ctrl</kbd>+<kbd>c</kbd>.</div>
      </li>
      <li>Load <span class='filename'>form.html</span> in your web browser. This can be done by double clicking <span class='filename'>form.html</span>, which loads it in the default web browser. Alternatively, copy <span class='filename'>form.html</span> to your local Apache HTTP Server and point your web browser to the URL for <span class='filename'>form.html</span> on your local Apache HTTP Server.</li>
      <li>Interact with the form and click <kbd>Submit</kbd>. The form submits to the Node.js web server at http://localhost:8001/form_submitted and the Node.js web server responds with a web page that displays; 1.) the raw request body form data sent on last submit, 2.) the data sent for each form control on last submit, 3.) each form control loaded with data it sent on last submit.</li>
      <li>Repeat interacting with the form and clicking <kbd>Submit</kbd>.</li>
     </ol>

     <h3><a id='abbreviations'></a>1.4. Abbreviations</h3>

     <ul>
      <li>IE = Internet Explorer.</li>
      <li>ED = Edge = EdgeHTML rendering engine (ED12+) and/or Edge browser (ED20+).</li>
      <li>FF = Firefox.</li>
      <li>CH = Chrome.</li>
      <li>OP = Opera.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>2. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='https://nodejs.org/en/'>Node.js (nodejs.org)</a></li>
      <li><a href='https://nodejs.org/en/download/'>Node.js Downloads (nodejs.org)</a></li>
     </ul>

    </section>";
