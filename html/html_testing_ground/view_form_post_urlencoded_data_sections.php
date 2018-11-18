<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/html/view_form_post_urlencoded_data_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/html/view_form_post_urlencoded_data.php.
 * Last reviewed/updated: 18 Nov 2018.
 * Published: 12 Nov 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this example, a form with textbox, textarea, selectbox (a.k.a., dropdown), checkbox, and radio button controls, and <code>method='post'</code> and <code>enctype='application/x-www-form-urlencoded'</code> attributes is submitted. When the form is submitted, for each control, the <code>name</code> attribute value and the user input value is concatenated as a string separated by an equals sign (=) character:</p>

<pre>
controlName<b>=</b>controlUserInput // Control name=value pair string.
</pre>

     <p>And because the form contains multiple controls, each control name=value pair is concatenated as a string separated by an ampersand (&amp;) character:</p>

<pre>
controlOneName=controlOneUserInput<b>&amp;</b>controlTwoName=controlTwoUserInput // Form data string.
</pre>

     <div class='note normal'>If the form used the <code>enctype='multipart/form-data'</code> attribute, the resultant form data string would be very different and not so conveniently organized. Hence, the <code>enctype='application/x-www-form-urlencoded'</code> attribute is recommended to POST forms that submit textboxes, textareas, etc. The <code>enctype='multipart/form-data'</code> attribute is recommended to POST forms that submit files.</div>

     <p>The form data string is sent in the body of the HTTP POST request to the resource specified by the form <code>action</code> attribute. In this example, the <code>action</code> attribute is <code>action='http://localhost:8001/form_post_urlencoded_submitted'</code>, where <code>http://localhost:8001/</code> is a <a href='https://nodejs.org/en/'>Node.js (nodejs.org)</a> web server, and <code>/form_post_urlencoded_submitted</code> is a Node.js route.</p>

     <p>This example is designed to be downloaded and run on your computer. Node.js is a runtime environment/API for JavaScript applications. To run a Node.js application on your computer, Node.js and any <a href='https://www.npmjs.com/'>npm (npmjs.com)</a> packages containing modules that the Node.js application requires must be installed. In this example, the Node.js web server uses only native Node.js modules (i.e., modules included/bundled with Node.js) and, therefore, there is no need to install any npm packages.</p>

     <p>This example consists of two files: 1.) <span class='filename'>form_post_urlencoded.html</span>, the form; and 2.) <span class='filename'>nodejs_web_server.js</span>, the Node.js web server. To run this example, first the Node.js web server is started. The Node.js web server listens on http://localhost:8001/. Then the form is loaded in your browser and submitted. When the form is submitted, the form data string is sent in the body of the HTTP POST request to the Node.js web server <code>request.on()</code> method <code>data</code> event callback function, which accepts the incoming data stream, assembles the chunks into the form data string, and assigns the form data string to the <code>requestBody</code> variable. When the HTTP POST request ends, the Node.js web server <code>request.on()</code> method <code>end</code> event callback function is called. In the callback, the <code>/form_post_urlencoded_submitted</code> route processes the form data string, extracts or determines the user input for each control, and responds with a web page that displays the submitted form data.</p>

     <div class='note normal'>Not all web hosts support hosting Node.js applications. In the future, if the hosting requirements are met, this example might be redesigned to run online.</div>

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
      <li>Download the following source code zip file to your computer: <a href='/downloads/view_form_post_urlencoded_data.zip'><span class='filename'>view_form_post_urlencoded_data.zip</span> (learnwebcoding.com)</a> - Released 18 Nov 2018. Size: 6,253 bytes. SHA-256 checksum: ce6245af4477651aab4363ce595542e01d346ee8202601a7bc4f2d0c4bde6f87.</li>
      <li>Extract the downloaded zip file. In this example, <span class='filename'>view_form_post_urlencoded_data.zip</span> is extracted to the <span class='filename'>view_form_post_urlencoded_data</span> folder:
       <img src='/images/view_form_post_urlencoded_data/view_form_post_urlencoded_data_folder_600x350.gif' alt='The contents of the extracted zip file.' />
       <div class='note normal'>The location of <span class='filename'>form_post_urlencoded.html</span> and <span class='filename'>nodejs_web_server.js</span> on your computer does not matter. They do not even need to be located in the same folder. Accordingly, leave them where they are, or move one or both of them to a different location.</div>
      </li>
      <li>Start the Node.js web server:
       <ol>
        <li>Open the terminal/command prompt. Alternatively, open the Node.js command prompt created by the Node.js installer.</li>
        <li>Navigate the terminal/command prompt to the drive/directory containing <span class='filename'>nodejs_web_server.js</span>.</li>
        <li>Type <kbd>node.exe nodejs_web_server.js</kbd> and press <kbd>Enter</kbd>.</li>
        <li>If the <q>Node.js web server listening on http://localhost:8001/.</q> report appears, the Node.js web server is started:
         <img src='/images/view_form_post_urlencoded_data/nodejs_web_server_started_677x162.gif' alt='The Node.js web server started at the command prompt.' class='box-shadow' />
        </li>
       </ol>
       <div class='note normal'>To stop the Node.js web server, close the terminal/command prompt or press <kbd>Ctrl</kbd>+<kbd>c</kbd>.</div>
      </li>
      <li>Load <span class='filename'>form_post_urlencoded.html</span> in your web browser. This can be done by double clicking the <span class='filename'>form_post_urlencoded.html</span> file, which loads it in the default web browser. Alternatively, copy <span class='filename'>form_post_urlencoded.html</span> to your local HTTP Server and point your web browser to the URL for <span class='filename'>form_post_urlencoded.html</span> on your local HTTP Server.</li>
      <li>Interact with the form and click <kbd>Submit</kbd>. The form is submitted to http://localhost:8001/form_post_urlencoded_submitted and the Node.js web server responds with a web page that displays the submitted form data:
       <img src='/images/view_form_post_urlencoded_data/form_submitted_1024x767.gif' alt='The Node.js web server response is a web page that displays the submitted form data.' class='box-shadow' />
      </li>
      <li>Repeat interacting with the form and clicking <kbd>Submit</kbd>. Each time, the form is submitted to http://localhost:8001/form_post_urlencoded_submitted and the Node.js web server responds with a web page that displays the submitted form data.</li>
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
      <li><a href='https://www.w3.org/TR/html401/interact/forms.html'>HTML 4.01 Specification: W3C Recommendation 24 December 1999: 17 Forms (w3.org)</a></li>
      <li><a href='https://www.w3.org/TR/html52/sec-forms.html#sec-forms'>HTML 5.2: W3C Recommendation, 14 December 2017: 4.10. Forms (w3.org)</a></li>
      <li><a href='https://nodejs.org/en/'>Node.js (nodejs.org)</a></li>
      <li><a href='https://nodejs.org/en/download/'>Node.js Downloads (nodejs.org)</a></li>
      <li><a href='https://www.npmjs.com/'>npm (npmjs.com)</a></li>
     </ul>

    </section>";
