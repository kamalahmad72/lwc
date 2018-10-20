<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/html/template_download_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/html/template_download.php.
 * Last reviewed/updated: 19 Oct 2018.
 * Published: 18 Oct 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

<!-- Start same content in template_explained.php. -->

     <p>Learn Web Coding (LWC) consists of <a href='http://www.learnwebcoding.com/'>LWC Home (learnwebcoding.com)</a>, <a href='http://blog.learnwebcoding.com/'>LWC Blog (blog.learnwebcoding.com)</a>, and <a href='http://forums.learnwebcoding.com/'>LWC Forums (forums.learnwebcoding.com)</a>. LWC Home, LWC Blog, and LWC Forums (LWC Home/Blog/Forums) are treated as three distinct web sites with the LWC Home home page serving as the LWC home page.</p>

     <p>With the exception of specialty web pages, the <a href='/html/web_page.php'>LWC Home Template (learnwebcoding.com)</a> is the starting point for every web page at LWC Home. The LWC Home Template is mobile first, responsive, and passes the <a href='https://search.google.com/search-console/mobile-friendly'>Google Mobile-Friendly Test (search.google.com)</a>. The LWC Home Template consists of an original object-oriented PHP template system for creating a flexible and easy to maintain web site and web pages, original HTML and CSS conventions for consistently structuring and styling web page content, original object-oriented JavaScripts for breadcrumbs navigation and tools icon dropdown, a modified Bootstrap grid system and navbar, CSS compiled from Sass, valid HTML5, and valid CSS Level 3.</p>

<!-- End same content in template_explained.php. -->

     <div class='note normal'>For an explanation of the LWC Home Template, see <a href='/html/template_explained.php'>Learn Web Coding Home Template Explained (learnwebcoding.com)</a>.</div>

     <h3><a id='browserSupport'></a>1.1. Web Browser Support</h3>

     <p>Web browser support: IE10+, ED12+, FF6+, CH30+, OP17+.</p>

     <h3><a id='phpSupport'></a>1.2. PHP Support</h3>

     <p>PHP support: PHP 5.6.8+ and PHP 7+. PHP 5.6.7- not tested.</p>

     <h3><a id='try'></a>1.3. How To Download And Try On Your Web Server</h3>

     <p>To download and try on your web server:</p>

     <ol>
      <li>Download the following source code zip file to your computer:
       <ul class='link-list'>
        <li><a href='/downloads/lwc_home_template.zip'><span class='filename'>lwc_home_template.zip</span> (learnwebcoding.com)</a> - Released: 19 Oct 2018. Size: 848,882 bytes. SHA-256 checksum: a4e80a4b8ba38323465d03017e4baf270fc3fb158f1fd3bd00274e2b6cbeecd9.</li>
       </ul>
      </li>
      <li>Extract the downloaded zip file. In this example, <span class='filename'>lwc_home_template.zip</span> is extracted to the <span class='filename'>lwc_home_template</span> folder:
       <img src='/images/lwc_home_template/lwc_home_template_folder_450x344.gif' alt='Contents Extracted LWC Home Template Folder' />
      </li>
      <li>Copy the contents of the <span class='filename'>lwc_home_template</span> folder, not the <span class='filename'>lwc_home_template</span> folder itself, to the root of the web server.</li>
      <li>The LWC Home Template includes a PHP template system for creating an easy to maintain and flexible web site. The PHP template system uses pathless <code>include_once</code> statements. For the pathless <code>include_once</code> statements to work, the PHP interpretor must be instructed of the path to the PHP template system <span class='filename'>templates</span> directory on the web server. This requires editing the <code>include_path</code> directive of the PHP initialization <span class='filename'>php.ini</span> file. Otherwise, change the PHP template system <code>include_once</code> statements to absolute paths.<br /><br />

       The following instructs the PHP interpretor of the path to the PHP template system <span class='filename'>templates</span> directory for a default installation of XAMPP 5.6.30 on Windows with the LWC Home Template copied to the root of the XAMPP Apache HTTP Server per the above. In this setup, the root of the web server (i.e., the XAMPP Apache HTTP Server) is <span class='filename'>C:\\xampp\\htdocs\</span>, and the PHP template system <span class='filename'>templates</span> directory is <span class='filename'>C:\\xampp\\htdocs\\templates\\</span>. If necessary, modify as appropriate for your setup. For additional information, see <a href='https://www.apachefriends.org/'>Apache Friends (apachefriends.org)</a>, <a href='http://php.net/manual/en/function.include.php'>PHP documentation | include (php.net)</a>, and <a href='http://php.net/manual/en/ini.core.php#ini.include-path'>PHP documentation | Description of core php.ini directives - include_path string (php.net)</a>.

       <ol>
        <li>Copy and paste the <span class='filename'>php.ini</span> file in place as <span class='filename'>php.ini.bak</span>. For a default installation of XAMPP 5.6.30, the <span class='filename'>php.ini</span> file is located at <span class='filename'>C:\\xampp\\php\\php.ini</span>.</li>
        <li>Open the <span class='filename'>php.ini</span> file in a text editor.</li>
        <li>Go to the Paths and Directories section. Change the following line:<br />
         <code>include_path=C:\\xampp\\php\\PEAR</code><br />
         To:<br />
         <code>include_path=&quot;C:\\xampp\\php\\PEAR;C:\\xampp\\htdocs\\templates&quot;</code>
         <div class='note normal'>
          <p>Notice:</p>
          <ul>
           <li>The <code>include_path</code> directive is not commented out.</li>
           <li>The <code>include_path</code> directive value is now correctly enclosed in quotation mark (&quot;) characters.</li>
           <li>The following are appended to the end of the existing value; 1.) a semicolon (;) character, and 2.) the path to the PHP template system <span class='filename'>templates</span> directory on the web server.</li>
          </ul>
         </div>
        </li>
        <li>Save the <span class='filename'>php.ini</span> file.</li>
        <li>If the web server is started, stop and restart the web server.</li>
        <li>If it becomes necessary to undo the changes, delete the <span class='filename'>php.ini</span> file and rename the <span class='filename'>php.ini.bak</span> file to <span class='filename'>php.ini</span>. If the web server is started, stop and restart the web server.</li>
       </ol>
      </li>      
      <li>Point your web browser to the <span class='filename'>index.php</span> file on the root of the web server.</li>
      <li>The LWC Home Template home page appears.</li>
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
      <li><a href='/html/web_page.php'>Learn Web Coding Home Template (learnwebcoding.com)</a></li>
      <li><a href='/html/template_explained.php'>Learn Web Coding Home Template Explained (learnwebcoding.com)</a></li>
      <li><a href='https://search.google.com/search-console/mobile-friendly'>Google Mobile-Friendly Test (search.google.com)</a></li>
      <li><a href='https://testmysite.thinkwithgoogle.com/'>Google Mobile Website Speed Testing Tool (testmysite.thinkwithgoogle.com)</a></li>
      <li><a href='https://developers.google.com/speed/pagespeed/insights/'>Google Developers PageSpeed Insights (developers.google.com)</a></li>
      <li><a href='https://www.apachefriends.org/'>Apache Friends (apachefriends.org)</a></li>
      <li><a href='http://php.net/manual/en/function.include.php'>PHP documentation | include (php.net)</a></li>
      <li><a href='http://php.net/manual/en/ini.core.php#ini.include-path'>PHP documentation | Description of core php.ini directives - include_path string (php.net)</a></li>
     </ul>

    </section>";
