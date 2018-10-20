<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_techniques/change_ext_ss_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_techniques/change_ext_ss.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Changing a web page external style sheet with JavaScript is a technique for dynamically changing the style of a web page. Some notes on this example:</p>

     <ul>
      <li>The HTML document specifies a default external style sheet. To not specify a default external style sheet, and to keep things as simple as possible, change HTML source code line 6 to <code>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; id=&quot;linkElement&quot; /&gt;</code>. Notice that the <code>href</code> attribute, which specifies the path/URI to an external style sheet file, has been removed. Because of this, the first time an external style sheet is selected, instead of it replacing an external style sheet, it is added as the external style sheet. After this initial difference, all subsequent external style sheet selections work exactly the same as if the original HTML source code was used the entire time.</li>
      <li>The HTML document default external style sheet is also one of the external style sheet choices. This allows the web page to return to the default/initial styles after selecting a different external style sheet. To not have the HTML document default external style sheet as one of the external style sheet choices, in HTML source code line 11, either remove the code for the first interactive object, or edit the code for the first interactive object to pass the path of a different external style sheet.</li>
      <li>There are two external style sheet choices. To add external style sheet choices, create the external style sheets, and, in HTML source code line 11, create an interactive object for each external style sheet.</li>
      <li>The HTML <code>link</code> element <code>href</code> attribute, and the JavaScript <code>HTMLLinkElement</code> object <code>href</code> property, indicate the path/URI to an external style sheet file. The HTML <code>link</code> element <code>href</code> attribute is exposed on the DOM as the JavaScript <code>HTMLLinkElement</code> object <code>href</code> property. The JavaScript <code>HTMLLinkElement</code> object <code>href</code> property gets/sets the HTML <code>link</code> element <code>href</code> attribute value from/on the DOM. Specifically, assigning the JavaScript <code>HTMLLinkElement</code> object <code>href</code> property to a JavaScript variable gets the HTML <code>link</code> element <code>href</code> attribute value from the DOM, and assigning a value to the JavaScript <code>HTMLLinkElement</code> object <code>href</code> property sets the HTML <code>link</code> element <code>href</code> attribute value on the DOM.</li>
      <li>In JavaScript source code line 4, the <code>pathToExtSS</code> value is assigned to the <code>linkElementReference.href</code> property, which sets the <code>pathToExtSS</code> value as the path/URI to the external style sheet. This changes the web page external style sheet to the external style sheet located at the <code>pathToExtSS</code> value. When this occurs, the web browser automatically and immediately applies the styles of the new external style sheet, not the styles of the old external style sheet, to the web page. In other words, the styles of the old external style sheet are not removed, not overwritten, nor are they merged. Instead, the web page is re-rendered from scratch using only the new external style sheet, not the old external style sheet.</li>
     </ul>

     <h3><a id='demo'></a>1.1. Demonstration</h3>

     <p>Demonstration: <a href='/javascript/javascript_techniques/change_ext_ss/change_ext_ss.html'>JavaScript Technique: Change Web Page External Style Sheet (learnwebcoding.com)</a>.</p>

     <h3><a id='support'></a>1.2. Web Browser Support</h3>

     <p>Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.</p>

     <h3><a id='try'></a>1.3. How To Try This Example On Your Computer</h3>

     <p>To try this example on your computer:</p>

     <ol>
      <li>Download the following source files to the same drive or folder on your computer:
       <ul class='link-list'>
        <li><a href='/javascript/javascript_techniques/change_ext_ss/change_ext_ss.html'><span class='filename'>change_ext_ss.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/change_ext_ss/change_ext_ss_1.css'><span class='filename'>change_ext_ss_1.css</span> (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/change_ext_ss/change_ext_ss_2.css'><span class='filename'>change_ext_ss_2.css</span> (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/change_ext_ss/change_ext_ss.js'><span class='filename'>change_ext_ss.js</span> (learnwebcoding.com)</a></li>
       </ul>
      </li>
      <li>Double click the <span class='filename'>.html</span> file.</li>
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

     <h2><a id='technique'></a>2. Change Web Page External Style Sheet</h2>

     <h3><a id='html'></a>2.1. HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/javascript/javascript_techniques/change_ext_ss/change_ext_ss.html'><span class='filename'>change_ext_ss.html</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;JavaScript Technique: Change Web Page External Style Sheet&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;change_ext_ss_1.css&quot; id=&quot;linkElement&quot; /&gt;
7       &lt;script src=&quot;change_ext_ss.js&quot;&gt;&lt;/script&gt;
8      &lt;/head&gt;
9      &lt;body&gt;
10      &lt;h2&gt;JavaScript Technique: Change Web Page External Style Sheet&lt;/h2&gt;
11      &lt;p&gt;&lt;span onclick=&quot;ChangeExtSSUtil.changeExtSS('change_ext_ss_1.css')&quot; class=&quot;interactive-object&quot;&gt;Use External Style Sheet One (default)&lt;/span&gt; | &lt;span onclick=&quot;ChangeExtSSUtil.changeExtSS('change_ext_ss_2.css')&quot; class=&quot;interactive-object&quot;&gt;Use External Style Sheet Two&lt;/span&gt;&lt;/p&gt;
12      &lt;p&gt;Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.&lt;/p&gt;
13     &lt;/body&gt;
14    &lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>Line 6: The <code>link</code> element <code>href</code> attribute specifies the path/URI to an external style sheet file. Specifically, the value assigned to the <code>link</code> element <code>href</code> attribute is the path/URI to an external style sheet file. In this example, the <code>link</code> element <code>href</code> attribute is assigned the <code>change_ext_ss_1.css</code> value. This makes <span class='filename'>change_ext_ss_1.css</span> the default external style sheet for the HTML document.</li>
      <li>Line 6: An element <code>id</code> attribute specifies a selector that serves as a unique identifier for the element. Specifically, the value assigned to the element <code>id</code> attribute is the element unique identifier. In this example, the <code>link</code> element <code>id</code> attribute is assigned the <code>linkElement</code> value. Therefore, <code>linkElement</code> is the <code>link</code> element unique identifier.</li>
      <li>Line 11: Creates two interactive objects that look and behave like hyperlinks, but are styled text.
       <div class='note normal'>Hyperlinks can be used instead of interactive objects. However, when not navigating to a different path/URI upon the click event (as in this example), using interactive objects instead of hyperlinks avoids, among other things, unnecessarily triggering the web browser window status bar, which keeps the web browser window interface clean.</div>
      </li>
      <li>Line 11: The <code>span</code> element <code>onclick</code> attribute assigns/registers an event handler for the <code>span</code> element <code>click</code> event. Specifically, the value assigned to the <code>span</code> element <code>onclick</code> attribute is the event handler for the <code>span</code> element <code>click</code> event. In this example, for both interactive objects, the <code>span</code> element <code>onclick</code> attribute is assigned the <code>ChangeExtSSUtil.changeExtSS()</code> value. Therefore, for both interactive objects, the <code>ChangeExtSSUtil.changeExtSS()</code> method is the event handler for the <code>span</code> element <code>click</code> event.</li>
      <li>Line 11: Clicking either interactive object calls the <code>ChangeExtSSUtil.changeExtSS()</code> method and passes it a value. The value passed into the <code>ChangeExtSSUtil.changeExtSS()</code> method specifies the path/URI to an external style sheet file. If the External Style Sheet One (default) interactive object is clicked, the <code>change_ext_ss_1.css</code> value is passed. If the External Style Sheet Two interactive object is clicked, the <code>change_ext_ss_2.css</code> value is passed.</li>
     </ul>

     <h3><a id='css'></a>2.2. CSS Source Code And Notes</h3>

     <p>CSS source code: <a href='/javascript/javascript_techniques/change_ext_ss/change_ext_ss_1.css'><span class='filename'>change_ext_ss_1.css</span> (learnwebcoding.com)</a>:</p>

<pre>
1     body {
2       font-size: 16px;
3       background-color: #ddd;
4     }
5     .interactive-object {
6       text-decoration: underline;
7     }
8     .interactive-object:visited {
9       color: #999;
10    }
11    .interactive-object:hover {
12      color: #999;
13      cursor: pointer;
14    }
</pre>

     <p>CSS source code: <a href='/javascript/javascript_techniques/change_ext_ss/change_ext_ss_2.css'><span class='filename'>change_ext_ss_2.css</span> (learnwebcoding.com)</a>:</p>

<pre>
1     body {
2       font-size: 20px;
3       color: #00f;
4     }
5     .interactive-object {
6       text-decoration: underline;
7     }
8     .interactive-object:visited {
9       color: #999;
10    }
11    .interactive-object:hover {
12      color: #999;
13      cursor: pointer;
14    }
15    p {
16      font-style: italic;
17    }
</pre>

     <p>CSS source code notes:</p>

     <ul>
      <li>Lines 5 - 14 both <span class='filename'>.css</span> files: Styles the interactive objects.</li>
      <li>Lines 1 - 4 both <span class='filename'>.css</span> files and lines 15 - 17 <span class='filename'>change_ext_ss_2.css</span>: Demonstrates that when a web page external style sheet is changed, the web page is re-rendered from scratch using only the new external style sheet, not the old external style sheet.</li>
     </ul>

     <h3><a id='javascript'></a>2.3. JavaScript Source Code And Notes</h3>

     <p>JavaScript source code: <a href='/javascript/javascript_techniques/change_ext_ss/change_ext_ss.js'><span class='filename'>change_ext_ss.js</span> (learnwebcoding.com)</a>:</p>

<pre>
1    var ChangeExtSSUtil = {
2     changeExtSS: function(pathToExtSS){
3      var linkElementReference = document.getElementById(&quot;linkElement&quot;);
4      linkElementReference.href = pathToExtSS;
5     }
6    };
</pre>

     <p>JavaScript source code notes:</p>

     <ul>
      <li>Line 1: Defines <code>ChangeExtSSUtil</code> as an object literal.</li>
      <li>Line 2: Defines the <code>changeExtSS()</code> function as a method of the <code>ChangeExtSSUtil</code> object.</li>
      <li>Line 2: Defines <code>pathToExtSS</code> as an argument of the <code>ChangeExtSSUtil.changeExtSS()</code> method. The value passed into the <code>ChangeExtSSUtil.changeExtSS()</code> method is assigned to <code>pathToExtSS</code>. <code>pathToExtSS</code> is a local variable.</li>
      <li>Line 3: Gets a reference to the element with the <code>id=&quot;linkElement&quot;</code> attribute, and assigns the reference (in this example, an <code>HTMLLinkElement</code> object) to <code>linkElementReference</code>. <code>linkElementReference</code> is a local variable.</li>
      <li>Line 4: Assigns the <code>pathToExtSS</code> value to the <code>linkElementReference.href</code> property, which sets the <code>pathToExtSS</code> value as the path/URI to the external style sheet. This changes the web page existing external style sheet to the external style sheet located at the <code>pathToExtSS</code> value.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/javascript/javascript_techniques/index.php'>JavaScript Techniques (learnwebcoding.com)</a></li>
     </ul>

    </section>";
