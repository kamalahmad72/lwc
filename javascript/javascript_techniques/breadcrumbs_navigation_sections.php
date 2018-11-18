<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_techniques/breadcrumbs_navigation_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_techniques/breadcrumbs_navigation.php.
 * Last reviewed/updated: 16 Nov 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this example, breadcrumbs navigation with JavaScript is a technique for dynamically displaying directory landing page hyperlinks up the directory tree to the web site home page. Some notes on this example:</p>

     <ul>
      <li>This example has the following file/directory tree structure:
<pre class='ascii-art'>
web_server_root_directory (root directory of web server) (might be named htdocs, public_html, www, wwwroot, etc.)
   |
   |- - - index2.html (web site home page) (no breadcrumbs)
   |- - - another-web-page-in-web-server-root-directory.html (breadcrumb: Home)
   |- - - subdirectory
             |
             |- - - index.html (subdirectory landing page) (breadcrumb: Home)
             |- - - another-web-page-in-subdirectory.html (breadcrumbs: Home | Subdirectory)
             |- - - subsubdirectory
                       |
                       |- - - index.html (subsubdirectory landing page) (breadcrumbs: Home | Subdirectory)
                       |- - - another-web-page-in-subsubdirectory.html (breadcrumbs: Home | Subdirectory | Subsubdirectory)
</pre>
      </li>
      <li>The Home breadcrumb is a hyperlink to the web site home page. The Home breadcrumb is hard coded into the <code>BcrumbsNavUtil.bcrumbsNav()</code> method. Therefore, to display the Home breadcrumb, call the <code>BcrumbsNavUtil.bcrumbsNav()</code> method with no arguments.</li>
      <li>The path for the Home breadcrumb is <span class='filename'>/index2.html</span>, which is a root relative path.
       <div class='note important'>
        <ul>
         <li>Using a hard coded root relative path for the Home breadcrumb greatly simplifies this example, but requires that it is demonstrated on a web server. An alternative that can be demonstrated without a web server is possible, but would require; 1.) editing the HTML documents to pass an additional argument that specifies the relative path to the web site home page, and 2.) editing the <code>BcrumbsNavUtil.bcrumbsNav()</code> method to process this additional argument into the Home breadcrumb.</li>
         <li>To avoid overwriting the Learn Web Coding home page, the web site home page for the breadcrumbs navigation demonstration is <span class='filename'>index2.html</span>, not <span class='filename'>index.html</span>. If your web site home page is not <span class='filename'>index2.html</span>, and/or if you want to change the name of the Home breadcrumb, edit the <code>BcrumbsNavUtil.bcrumbsNav()</code> method per your requirements.</li>
        </ul>
       </div>
      </li>
      <li>Subsequent breadcrumbs are hyperlinks to directory landing pages up the directory tree to the web site home page. For each subsequent breadcrumb after the Home breadcrumb, call the <code>BcrumbsNavUtil.bcrumbsNav()</code> method with two arguments in the following order:
       <ol>
        <li>The relative path from the current web page to the directory landing web page as a string, without the directory landing page filename, which is assumed to be <span class='filename'>index.html</span> and, therefore, is hard coded into the <code>BcrumbsNavUtil.bcrumbsNav()</code> method. For example, <code>&quot;&quot;</code>, not <code>&quot;index.html&quot;</code>, and <code>&quot;../&quot;</code>, not <code>&quot;../index.html&quot;</code>.</li>
        <li>The name of the directory landing web page as a string. This becomes the name of the breadcrumb. For example, <code>&quot;Subdirectory&quot;</code>.</li>
       </ol>
       In other words:
       <ul>
        <li>To display the Home breadcrumb with one subsequent breadcrumb, call the <code>BcrumbsNavUtil.bcrumbsNav()</code> method with two arguments.</li>
        <li>To display the Home breadcrumb with two subsequent breadcrumbs, call the <code>BcrumbsNavUtil.bcrumbsNav()</code> method with four arguments.</li>
        <li>To display the Home breadcrumb with three subsequent breadcrumbs, call the <code>BcrumbsNavUtil.bcrumbsNav()</code> method with six arguments.</li>
        <li>Syntax to display the Home breadcrumb with three subsequent breadcrumbs: <code>BcrumbsNavUtil.bcrumbsNav(&quot;relativePathToDirectoryLandingPage1&quot;, &quot;nameDirectoryLandingPage1&quot;, &quot;relativePathToDirectoryLandingPage2&quot;, &quot;nameDirectoryLandingPage2&quot;, &quot;relativePathToDirectoryLandingPage3&quot;, &quot;nameDirectoryLandingPage3&quot;)</code>.</li>
        <li>For example, to generate the breadcrumbs for the <span class='filename'>another-web-page-in-subsubdirectory.php</span> web page in the file/directory tree above, the call to <code>BcrumbsNavUtil.bcrumbsNav()</code> is <code>BcrumbsNavUtil.bcrumbsNav (&quot;../&quot;, &quot;Subdirectory&quot;, &quot;&quot;, &quot;Subsubdirectory&quot;)</code>.</li>
       </ul>
      </li>
      <li>To not display the LWC Home breadcrumbs navigation, comment out or remove the call to the <code>BcrumbsNavUtil.bcrumbsNav()</code> method.</li>
      <li>The loading of an HTML document, not the clicking a hyperlink/breadcrumb, calls the <code>BcrumbsNavUtil.bcrumbsNav()</code> method.</li>
      <li>An HTML element's child node(s) are exposed on the DOM to the JavaScript <code>innerHTML</code> property. The JavaScript <code>innerHTML</code> property gets/sets the element's child nodes from/on the DOM. Specifically, assigning the JavaScript <code>innerHTML</code> property to a JavaScript variable gets the element's child nodes (as an HTML string) from the DOM, and assigning a value (an HTML string) to the JavaScript <code>innerHTML</code> property sets the HTML as the element's child node(s) on the DOM.</li>
      <li>The <code>BcrumbsNavUtil.bcrumbsNav()</code> method generates a breadcrumbs navigation HTML string and assigns it to the JavaScript <code>innerHTML</code> property of the HTML element with the <code>id=&quot;bcrumbsNavElement&quot;</code> attribute. This inserts the breadcrumbs navigation HTML on the DOM and displays the breadcrumbs navigation.</li>
      <li>The HTML element with the <code>id=&quot;bcrumbsNavElement&quot;</code> attribute is located in an external <span class='filename'>.js</span> JavaScript file, not in the <span class='filename'>.html</span> HTML documents. Placing sitewide content in a single location, such as in an external <span class='filename'>.js</span> JavaScript file, facilitates coding, particularly code editing, and is well suited for sitewide header, navigational, and/or footer content. The breadcrumbs navigation can be considered both sitewide header and navigational content. Additional sitewide header and navigational content, such as the web site name/logo and a search box can be added to the external <span class='filename'>.js</span> JavaScript file.</li>
     </ul>

     <h3><a id='demo'></a>1.1. Demonstration</h3>

     <p>Demonstration: <a href='/index2.html'>JavaScript Technique: Breadcrumbs Navigation (learnwebcoding.com)</a>.</p>

     <h3><a id='support'></a>1.2. Web Browser Support</h3>

     <p>Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.</p>

     <h3><a id='try'></a>1.3. How To Try This Example On Your Web Server</h3>

     <p>To try this example on your web server:</p>

     <ol>
      <li>Download the following source code zip file to your computer: <a href='/downloads/breadcrumbs_navigation.zip'><span class='filename'>breadcrumbs_navigation.zip</span> (learnwebcoding.com)</a> - Released: 10 Mar 2018. Size: 5,258 bytes. SHA-256 checksum: 934b702ef3587de7329159da0dbb51c7ffaa133914a1e286cbb8388f50518a8c.</li>
      <li>Extract the downloaded zip file. In this example, <span class='filename'>breadcrumbs_navigation.zip</span> is extracted to the <span class='filename'>breadcrumbs_navigation</span> folder:
       <img src='/images/breadcrumbs_navigation/breadcrumbs_navigation_folder_615x395.gif' alt='The contents of the extracted zip file.' />
      </li>
      <li>Copy the contents of the <span class='filename'>breadcrumbs_navigation</span> folder, not the <span class='filename'>breadcrumbs_navigation</span> folder itself, to the root directory of the your server.</li>
      <li>Point your web browser to the <span class='filename'>index2.html</span> file in the root directory of your web server.
       <div class='note important'>To avoid possibly overwriting an existing <span class='filename'>index.html</span> file in the root directory of your web server, the web site home page for the breadcrumbs navigation demonstration is <span class='filename'>index2.html</span>, not <span class='filename'>index.html</span>.</div>
      </li>
      <li>The demonstration home page appears. Click one of the hyperlinks.</li>
      <li>The breadcrumbs navigation appears in the header section of the web page.</li>
     </ol>

     <h3><a id='abbreviations'></a>1.4. Abbreviations</h3>

     <ul>
      <li>IE = Internet Explorer.</li>
      <li>ED = Edge = EdgeHTML rendering engine (ED12+) and/or Edge browser (ED20+).</li>
      <li>FF = Firefox.</li>
      <li>SF = Safari.</li>
      <li>CH = Chrome.</li>
      <li>OP = Opera.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='technique'></a>2. Breadcrumbs Navigation</h2>

     <h3><a id='html'></a>2.1. HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/index2.html'><span class='filename'>index2.htm</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;Home&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;/breadcrumbs_navigation.css&quot; /&gt;
7       &lt;script src=&quot;/breadcrumbs_navigation_javascript.js&quot;&gt;&lt;/script&gt;
8      &lt;/head&gt;
9      &lt;body&gt;
10      &lt;header&gt;
11       &lt;script src=&quot;/breadcrumbs_navigation_header_html.js&quot;&gt;&lt;/script&gt;
12       &lt;!-- &lt;script&gt;BcrumbsNavUtil.bcrumbsNav();&lt;/script&gt; --&gt;
13      &lt;/header&gt;
14      &lt;h3&gt;Home&lt;/h3&gt;
15      &lt;p&gt;&lt;a href=&quot;/another-web-page-in-web-server-root-directory.html&quot;&gt;Another Web Page In Web Server Root Directory&lt;/a&gt;&lt;/p&gt;
16      &lt;p&gt;&lt;a href=&quot;/subdirectory/index.html&quot;&gt;Subdirectory&lt;/a&gt;&lt;/p&gt;
17      &lt;p&gt;Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.&lt;/p&gt;
18     &lt;/body&gt;
19    &lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>The web site home page (<span class='filename'>/index2.html</span>).</li>
      <li>Line 11: Loads the <span class='filename'>breadcrumbs_navigation_header_html.js</span> Javascript file, which provides the header HTML on the DOM. The header HTML is an <code>h2</code> heading and the element into which the JavaScript <code>innerHTML</code> property inserts the breadcrumbs navigation HTML on the DOM.</li>
      <li>Line 12: Breadcrumbs navigation is not applicable to the web site home page. Therefore, comment out (shown) or remove the call to the  <code>BcrumbsNavUtil.bcrumbsNav()</code> method.</li>
     </ul>

     <p>HTML source code: <a href='/another-web-page-in-web-server-root-directory.html'><span class='filename'>another-web-page-in-web-server-root-directory.html</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;Another Web Page In Web Server Root Directory&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;/breadcrumbs_navigation.css&quot; /&gt;
7       &lt;script src=&quot;/breadcrumbs_navigation_javascript.js&quot;&gt;&lt;/script&gt;
8      &lt;/head&gt;
9      &lt;body&gt;
10      &lt;header&gt;
11       &lt;script src=&quot;/breadcrumbs_navigation_header_html.js&quot;&gt;&lt;/script&gt;
12       &lt;script&gt;BcrumbsNavUtil.bcrumbsNav();&lt;/script&gt;
13      &lt;/header&gt;
14      &lt;h3&gt;Another Web Page In Web Server Root Directory&lt;/h3&gt;
15      &lt;p&gt;Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.&lt;/p&gt;
16     &lt;/body&gt;
17    &lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>Another web page in the web server root directory (<span class='filename'>/another-web-page-in-web-server-root-directory.html</span>).</li>
      <li>Line 11: Loads the <span class='filename'>breadcrumbs_navigation_header_html.js</span> Javascript file, which provides the header HTML on the DOM. The header HTML is an <code>h2</code> heading and the element into which the JavaScript <code>innerHTML</code> property inserts the breadcrumbs navigation HTML on the DOM.</li>
      <li>Line 12: Calls the <code>BcrumbsNavUtil.bcrumbsNav()</code> method. Another web page in the web server root directory needs to display breadcrumbs navigation to the web site home page. Since the Home breadcrumb is hard coded into the <code>BcrumbsNavUtil.bcrumbsNav()</code> method, the <code>BcrumbsNavUtil.bcrumbsNav()</code> method is called with no arguments.</li>
     </ul>

     <p>HTML source code: <a href='/subdirectory/index.html'><span class='filename'>/subdirectory/index.html</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;Subdirectory&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;/breadcrumbs_navigation.css&quot; /&gt;
7       &lt;script src=&quot;/breadcrumbs_navigation_javascript.js&quot;&gt;&lt;/script&gt;
8      &lt;/head&gt;
9      &lt;body&gt;
10      &lt;header&gt;
11       &lt;script src=&quot;/breadcrumbs_navigation_header_html.js&quot;&gt;&lt;/script&gt;
12       &lt;script&gt;BcrumbsNavUtil.bcrumbsNav();&lt;/script&gt;
13      &lt;/header&gt;
14      &lt;h3&gt;Subdirectory&lt;/h3&gt;
15      &lt;p&gt;&lt;a href=&quot;/subdirectory/another-web-page-in-subdirectory.html&quot;&gt;Another Web Page In Subdirectory&lt;/a&gt;&lt;/p&gt;
16      &lt;p&gt;&lt;a href=&quot;/subdirectory/subsubdirectory/index.html&quot;&gt;Subsubdirectory&lt;/a&gt;&lt;/p&gt;
17      &lt;p&gt;Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.&lt;/p&gt;
18     &lt;/body&gt;
19    &lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>The subdirectory landing page (<span class='filename'>/subdirectory/index.html</span>).</li>
      <li>Line 11: Loads the <span class='filename'>breadcrumbs_navigation_header_html.js</span> Javascript file, which provides the header HTML on the DOM. The header HTML is an <code>h2</code> heading and the element into which the JavaScript <code>innerHTML</code> property inserts the breadcrumbs navigation HTML on the DOM.</li>
      <li>Line 12: Calls the <code>BcrumbsNavUtil.bcrumbsNav()</code> method. Subdirectory landing page needs to display breadcrumbs navigation to the web site home page. Since the Home breadcrumb is hard coded into the <code>BcrumbsNavUtil.bcrumbsNav()</code> method, the <code>BcrumbsNavUtil.bcrumbsNav()</code> method is called with no arguments.</li>
     </ul>

     <p>HTML source code: <a href='/subdirectory/another-web-page-in-subdirectory.html'><span class='filename'>/subdirectory/another-web-page-in-subdirectory.html</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;Another Web Page In Subdirectory&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;/breadcrumbs_navigation.css&quot; /&gt;
7       &lt;script src=&quot;/breadcrumbs_navigation_javascript.js&quot;&gt;&lt;/script&gt;
8      &lt;/head&gt;
9      &lt;body&gt;
10      &lt;header&gt;
11       &lt;script src=&quot;/breadcrumbs_navigation_header_html.js&quot;&gt;&lt;/script&gt;
12       &lt;script&gt;BcrumbsNavUtil.bcrumbsNav(&quot;&quot;, &quot;Subdirectory&quot;);&lt;/script&gt;
13      &lt;/header&gt;
14      &lt;h3&gt;Another Web Page In Subdirectory&lt;/h3&gt;
15      &lt;p&gt;Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.&lt;/p&gt;
16     &lt;/body&gt;
17    &lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>Another web page in subdirectory (<span class='filename'>/subdirectory/another-web-page-in-subdirectory.html</span>).</li>
      <li>Line 11: Loads the <span class='filename'>breadcrumbs_navigation_header_html.js</span> Javascript file, which provides the header HTML on the DOM. The header HTML is an <code>h2</code> heading and the element into which the JavaScript <code>innerHTML</code> property inserts the breadcrumbs navigation HTML on the DOM.</li>
      <li>Line 12: Calls the <code>BcrumbsNavUtil.bcrumbsNav()</code> method. Another web page in subdirectory needs to display breadcrumbs navigation to the web site home page and the subdirectory landing page. Since the Home breadcrumb is hard coded into the <code>BcrumbsNavUtil.bcrumbsNav()</code> method, the <code>BcrumbsNavUtil.bcrumbsNav()</code> method is called with the two arguments for the Subdirectory breadcrumb; 1.) the relative path to the subdirectory landing page without the filename (<code>&quot;&quot;</code>), and 2.) the name of the subdirectory landing page (<code>&quot;Subdirectory&quot;</code>).</li>
     </ul>

     <p>HTML source code: <a href='/subdirectory/subsubdirectory/index.html'><span class='filename'>/subdirectory/subsubdirectory/index.html</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;Subsubdirectory&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;/breadcrumbs_navigation.css&quot; /&gt;
7       &lt;script src=&quot;/breadcrumbs_navigation_javascript.js&quot;&gt;&lt;/script&gt;
8      &lt;/head&gt;
9      &lt;body&gt;
10      &lt;header&gt;
11       &lt;script src=&quot;/breadcrumbs_navigation_header_html.js&quot;&gt;&lt;/script&gt;
12       &lt;script&gt;BcrumbsNavUtil.bcrumbsNav(&quot;../&quot;, &quot;Subdirectory Landing Page&quot;);&lt;/script&gt;
13      &lt;/header&gt;
14      &lt;h3&gt;Subsubdirectory&lt;/h3&gt;
15      &lt;p&gt;&lt;a href=&quot;/subdirectory/subsubdirectory/another-web-page-in-subsubdirectory.html&quot;&gt;Another Web Page In Subsubdirectory&lt;/a&gt;&lt;/p&gt;
16      &lt;p&gt;Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.&lt;/p&gt;
17     &lt;/body&gt;
18    &lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>The subsubdirectory landing page (<span class='filename'>/subdirectory/subsubdirectory/index.html</span>).</li>
      <li>Line 11: Loads the <span class='filename'>breadcrumbs_navigation_header_html.js</span> Javascript file, which provides the header HTML on the DOM. The header HTML is an <code>h2</code> heading and the element into which the JavaScript <code>innerHTML</code> property inserts the breadcrumbs navigation HTML on the DOM.</li>
      <li>Line 12: Calls the <code>BcrumbsNavUtil.bcrumbsNav()</code> method. Subsubdirectory landing page needs to display breadcrumbs navigation to the web site home page and the subdirectory landing page. Since the Home breadcrumb is hard coded into the <code>BcrumbsNavUtil.bcrumbsNav()</code> method, the <code>BcrumbsNavUtil.bcrumbsNav()</code> method is called with the two arguments for the Subdirectory breadcrumb; 1.) the relative path to the subdirectory landing page without the filename (<code>&quot;../&quot;</code>), and 2.) the name of the subdirectory landing page (<code>&quot;Subdirectory&quot;</code>).</li>
     </ul>

     <p>HTML source code: <a href='/subdirectory/subsubdirectory/another-web-page-in-subsubdirectory.html'><span class='filename'>/subdirectory/subsubdirectory/another-web-page-in-subsubdirectory.html</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;Another Web Page In Subsubdirectory&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;/breadcrumbs_navigation.css&quot; /&gt;
7       &lt;script src=&quot;/breadcrumbs_navigation_javascript.js&quot;&gt;&lt;/script&gt;
8      &lt;/head&gt;
9      &lt;body&gt;
10      &lt;header&gt;
11       &lt;script src=&quot;/breadcrumbs_navigation_header_html.js&quot;&gt;&lt;/script&gt;
12       &lt;script&gt;BcrumbsNavUtil.bcrumbsNav(&quot;../&quot;, &quot;Subdirectory&quot;, &quot;&quot;, &quot;Subsubdirectory&quot;);&lt;/script&gt;
13      &lt;/header&gt;
14      &lt;h3&gt;Another Web Page In Subsubdirectory&lt;/h3&gt;
15      &lt;p&gt;Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.&lt;/p&gt;
16     &lt;/body&gt;
17    &lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>Another web page in subsubdirectory (<span class='filename'>/subdirectory/subsubdirectory/another-web-page-in-subdirectory-subdirectory.html</span>).</li>
      <li>Line 11: Loads the <span class='filename'>breadcrumbs_navigation_header_html.js</span> Javascript file, which provides the header HTML on the DOM. The header HTML is an <code>h2</code> heading and the element into which the JavaScript <code>innerHTML</code> property inserts the breadcrumbs navigation HTML on the DOM.</li>
      <li>Line 12: Calls the <code>BcrumbsNavUtil.bcrumbsNav()</code> method. Another web page in subsubdirectory landing page needs to display breadcrumbs navigation to the web site home page, the subdirectory landing page, and the subsubdirectory landing page. Since the Home breadcrumb is hard coded into the <code>BcrumbsNavUtil.bcrumbsNav()</code> method, the <code>BcrumbsNavUtil.bcrumbsNav()</code> method is called with the two arguments for the Subdirectory breadcrumb followed by the two arguments for the Subsubdirectory breadcrumb; 1.) the relative path to the subdirectory landing page without the filename (<code>&quot;../&quot;</code>), 2.) the name of the subdirectory landing page (<code>&quot;Subdirectory&quot;</code>), 3.) the relative path to the subsubdirectory landing page without the filename (<code>&quot;&quot;</code>), and 4.) the name of the subsubdirectory landing page (<code>&quot;Subsubdirectory&quot;</code>).</li>
     </ul>

     <h3><a id='css'></a>2.2. CSS Source Code And Notes</h3>

     <p>CSS source code: <a href='/breadcrumbs_navigation.css'><span class='filename'>breadcrumbs_navigation.css</span> (learnwebcoding.com)</a>:</p>

<pre>
1     body {
2       margin: 0;
3       padding: 0;
4     }
5     header {
6       background-color: #ddd;
7       padding: 10px 0;
8     }
9     h2 {
10      margin: 0 0 10px;
11    }
</pre>

     <p>CSS source code notes:</p>

     <ul>
      <li>Not involved in dynamically displaying the breadcrumbs navigation.</li>
     </ul>

     <h3><a id='javascript'></a>2.3. JavaScript Source Code And Notes</h3>

     <p>JavaScript source code: <a href='/breadcrumbs_navigation_javascript.js'><span class='filename'>breadcrumbs_navigation_javascript.js</span> (learnwebcoding.com)</a>:</p>

<pre>
1     var BcrumbsNavUtil = {
2      bcrumbsNav: function(){
3       var bcrumbsNavElementReference = document.getElementById(\"bcrumbsNavElement\");
4       var bcrumbsNavHtmlString = \"&lt;a href='/index2.html'&gt;Home&lt;/a&gt;\";
5       if (arguments.length &gt; 0){
6        for (var i = 0; i &lt; arguments.length; i = i + 2){
7         bcrumbsNavHtmlString += \" &amp;rarr; &lt;a href='\" + arguments[i] + \"index.html'&gt;\" + arguments[i + 1] + \"&lt;/a&gt;\";
8        }
9       }
10      bcrumbsNavElementReference.innerHTML = bcrumbsNavHtmlString;
11     }
12    };
</pre>

     <p>JavaScript source code notes:</p>

     <ul>
      <li>Line 1: Defines <code>BcrumbsNavUtil</code> as an object literal.</li>
      <li>Line 2: Defines the <code>bcrumbsNav()</code> function as a method of the <code>BcrumbsNavUtil</code> object.</li>
      <li>Line 3: Gets a reference to the element with the <code>id=&quot;bcrumbsNavElement&quot;</code> attribute, and assigns the reference to <code>bcrumbsNavElementReference</code>. <code>bcrumbsNavElementReference</code> is a local variable.</li>
      <li>Line 4: Initializes the <code>bcrumbsNavHtmlString</code> variable with a hard coded HTML string for the Home breadcrumb. The path for the Home breadcrumb is <span class='filename'>/index2.html</span>, which is a root relative path.
       <div class='note important'>
        <ul>
         <li>Using a hard coded root relative path for the Home breadcrumb greatly simplifies this example, but requires that it is demonstrated on a web server. An alternative that could be demonstrated without a web server is possible, but would require; 1.) editing the HTML documents to pass an additional argument that specifies the relative path to the web site home page, and 2.) editing lines 4 - 9 to process this additional argument into the Home breadcrumb.</li>
         <li>To avoid overwriting the Learn Web Coding home page, the web site home page for the breadcrumbs navigation demonstration is <span class='filename'>index2.html</span>, not <span class='filename'>index.html</span>. If your web site home page is not <span class='filename'>index2.html</span>, and/or if you want to change the name of the Home breadcrumb, edit line 4 per your requirements.</li>
        </ul>
       </div>
      </li>
      <li>Line 5: Determines if the call to <code>BcrumbsNavUtil.bcrumbsNav()</code> included arguments. If yes, run the <code>for</code> loop. If no, go to line 10.</li>
      <li>Lines 6 - 8: The built-in JavaScript <code>arguments</code> object stores all of the arguments passed into a function. The <code>arguments</code> object is similar to an array in that zero based bracket notation is used to get the argument values. For example, <code>arguments[0]</code> gets the value of the first argument passed into a function. Each iteration of the <code>for</code> loop processes the next two arguments passed into the <code>BcrumbsNavUtil.bcrumbsNav()</code> method into an HTML string for one breadcrumb, which is appended to the end of the <code>bcrumbsNavHtmlString</code> variable.</li>
      <li>Line 10: Assigns the <code>bcrumbsNavHtmlString</code> variable to the JavaScript <code>innerHTML</code> property of the HTML element with the <code>id=&quot;bcrumbsNavElement&quot;</code> attribute. This inserts the <code>bcrumbsNavHtmlString</code> variable value as the child node of <code>&lt;div id=&quot;bcrumbsNavElement&quot;&gt;&lt;/div&gt;</code> on the DOM, which displays the breadcrumbs navigation.</li>
     </ul>

     <p>JavaScript source code: <a href='/breadcrumbs_navigation_header_html.js'><span class='filename'>breadcrumbs_navigation_header_html.js</span> (learnwebcoding.com)</a>:</p>

<pre>
1    document.write(
2     '&lt;h2&gt;JavaScript Technique: Breadcrumbs Navigation&lt;/h2&gt;' +
3     '&lt;div&gt;&lt;b&gt;Breadcrumbs navigation:&lt;/b&gt; &lt;span id=&quot;bcrumbsNavElement&quot;&gt;Not applicable to web site home page. To start displaying breadcrumbs navigation, click a hyperlink below.&lt;/span&gt;&lt;/div&gt;'
4    );
</pre>

    <p>JavaScript source code notes:</p>

     <ul>
      <li>Line 1: Uses the JavaScript <code>document.write()</code> method to provide the header HTML on the DOM. The header HTML is an <code>h2</code> heading (line 2) and the element into which the JavaScript <code>innerHTML</code> property inserts the breadcrumbs navigation HTML on the DOM (line 3).</li>
      <li>Line 3: An element <code>id</code> attribute specifies a selector that serves as a unique identifier for the element. Specifically, the value assigned to the element <code>id</code> attribute is the element unique identifier. In this example, the <code>span</code> element <code>id</code> attribute is assigned the <code>bcrumbsNavElement</code> value. Therefore, <code>bcrumbsNavElement</code> is the <code>span</code> element unique identifier.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/javascript/javascript_techniques/index.php'>JavaScript Techniques (learnwebcoding.com)</a></li>
     </ul>

    </section>";
