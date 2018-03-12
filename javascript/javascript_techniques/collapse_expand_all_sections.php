<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_techniques/collapse_expand_all_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_techniques/collapse_expand_all.php.
 * Last reviewed/updated: 04 Dec 2017.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Collapsing/expanding multiple sections of a web page simultaneously with JavaScript is a technique for dynamically changing the displayed content of a web page. Some notes on this example:</p>

     <ul>
      <li>The web page sections are displayed by default. To not display the web page sections by default, change the HTML source code lines 13, 19, and 25 to <code>&lt;div style=&quot;display:none&quot; class=&quot;sectionSelector&quot;&gt;</code>.</li>
      <li>The HTML element <code>style</code> attribute is exposed on the DOM as the JavaScript <code>style</code> object. The JavaScript <code>style</code> object gets/sets the HTML element <code>style</code> attribute value from/on the DOM. Specifically, assigning the JavaScript <code>style</code> object to a JavaScript variable gets the HTML element <code>style</code> attribute value from the DOM, and assigning a value to the JavaScript <code>style</code> object sets the HTML element <code>style</code> attribute value on the DOM.</li>
     </ul>

     <h3><a id='demo'></a>1.1. Demonstration</h3>

     <p>Demonstration: <a href='/javascript/javascript_techniques/collapse_expand_all/collapse_expand_all.html'>JavaScript Technique: Collapse Or Expand Multiple Sections Of A Web Page Simultaneously (learnwebcoding.com)</a>.</p>

     <h3><a id='support'></a>1.2. Web Browser Support</h3>

     <p>Web browser support: IE8+, ED12+, FF3.5+, SF3.1+, CH2+, OP10+.</p>

     <h3><a id='try'></a>1.3. How To Try This Example On Your Computer</h3>

     <p>To try this example on your computer:</p>

     <ol>
      <li>Download the following source files to the same drive or folder on your computer:
       <ul class='link-list'>
        <li><a href='/javascript/javascript_techniques/collapse_expand_all/collapse_expand_all.html'><span class='filename'>collapse_expand_all.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/collapse_expand_all/collapse_expand_all.css'><span class='filename'>collapse_expand_all.css</span> (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/collapse_expand_all/collapse_expand_all.js'><span class='filename'>collapse_expand_all.js</span> (learnwebcoding.com)</a></li>
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

     <h2><a id='technique'></a>2. Collapse Or Expand Multiple Sections Of A Web Page Simultaneously</h2>

     <h3><a id='html'></a>2.1. HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/javascript/javascript_techniques/collapse_expand_all/collapse_expand_all.html'><span class='filename'>collapse_expand_all.html</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;JavaScript Technique: Collapse Or Expand Multiple Sections Of A Web Page Simultaneously&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;collapse_expand_all.css&quot; /&gt;
7       &lt;script src=&quot;collapse_expand_all.js&quot;&gt;&lt;/script&gt;
8      &lt;/head&gt;
9      &lt;body&gt;
10      &lt;h2&gt;JavaScript Technique: Collapse Or Expand Multiple Sections Of A Web Page Simultaneously&lt;/h2&gt;
11      &lt;p&gt;&lt;span class=&quot;interactive-object&quot; onclick=&quot;CollapseExpandAllUtil.collapseExpandAll('expandAll')&quot;&gt;Expand All (default)&lt;/span&gt; | &lt;span class=&quot;interactive-object&quot; onclick=&quot;CollapseExpandAllUtil.collapseExpandAll('collapseAll')&quot;&gt;Collapse All&lt;/span&gt;&lt;/p&gt;
12      &lt;p&gt;Optional Section 1 Title&lt;/p&gt;
13      &lt;div class=&quot;sectionSelector&quot;&gt;
14       &lt;p&gt;Section 1 content.&lt;br /&gt;
15       Section 1 content.&lt;br /&gt;
16       Section 1 content.&lt;/p&gt;
17      &lt;/div&gt;
18      &lt;p&gt;Optional Section 2 Title&lt;/p&gt;
19      &lt;div class=&quot;sectionSelector&quot;&gt;
20       &lt;p&gt;Section 2 content.&lt;br /&gt;
21       Section 2 content.&lt;br /&gt;
22       Section 2 content.&lt;/p&gt;
23      &lt;/div&gt;
24      &lt;p&gt;Optional Section 3 Title&lt;/p&gt;
25      &lt;div class=&quot;sectionSelector&quot;&gt;
26       &lt;p&gt;Section 3 content.&lt;br /&gt;
27       Section 3 content.&lt;br /&gt;
28       Section 3 content.&lt;/p&gt;
29      &lt;/div&gt;
30      &lt;p&gt;Web browser support: IE8+, ED12+, FF3.5+, SF3.1+, CH2+, OP10+.&lt;/p&gt;
31     &lt;/body&gt;
32    &lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>Line 11: Creates two interactive objects that look and behave like hyperlinks, but are styled text.
       <div class='note normal'>Hyperlinks can be used instead of interactive objects. However, when not navigating to a different path/URI upon the click event (as in this example), using interactive objects instead of hyperlinks avoids, among other things, unnecessarily triggering the web browser window status bar, which keeps the web browser window interface clean.</div>
      </li>
      <li>Line 11: The <code>span</code> element <code>onclick</code> attribute assigns/registers an event handler for the <code>span</code> element <code>click</code> event. Specifically, the value assigned to the <code>span</code> element <code>onclick</code> attribute is the event handler for the <code>span</code> element <code>click</code> event. In this example, for both interactive objects, the <code>span</code> element <code>onclick</code> attribute is assigned the <code>CollapseExpandAllUtil.collapseExpandAll()</code> value. Therefore, for both interactive objects, the <code>CollapseExpandAllUtil.collapseExpandAll()</code> method is the event handler for the <code>span</code> element <code>click</code> event.</li>
      <li>Line 11: Clicking either interactive object calls the <code>CollapseExpandAllUtil.collapseExpandAll()</code> method and passes it a value. The value passed into the <code>CollapseExpandAllUtil.collapseExpandAll()</code> method indicates which interactive object was clicked/the action to perform. If the Collapse all interactive object is clicked, the <code>&quot;collapseAll&quot;</code> string value is passed. If the Expand all interactive object is clicked, the <code>&quot;expandAll&quot;</code> string value is passed.</li>
      <li>Lines 13, 19, and 25: An element <code>class</code> attribute specifies a selector that serves as an identifier for the element. Specifically, the value assigned to the element <code>class</code> attribute is the element identifier. In this example, the <code>div</code> element <code>class</code> attribute is assigned the <code>sectionSelector</code> value. Therefore, <code>sectionSelector</code> is the <code>div</code> element identifier.</li>
     </ul>

     <h3><a id='css'></a>2.2. CSS Source Code And Notes</h3>

     <p>CSS source code: <a href='/javascript/javascript_techniques/collapse_expand_all/collapse_expand_all.css'><span class='filename'>collapse_expand_all.css</span> (learnwebcoding.com)</a>:</p>

<pre>
1    .interactive-object {
2      text-decoration: underline;
3    }
4    .interactive-object:hover {
5      color: #999;
6      cursor: pointer;
7    }
</pre>

     <p>CSS source code notes:</p>

     <ul>
      <li>Styles the interactive objects.</li>
      <li>Not involved in dynamically changing the displayed content of the web page.</li>
     </ul>

     <h3><a id='javascript'></a>2.3. JavaScript Source Code And Notes</h3>

     <p>JavaScript source code: <a href='/javascript/javascript_techniques/collapse_expand_all/collapse_expand_all.js'><span class='filename'>collapse_expand_all.js</span> (learnwebcoding.com)</a>:</p>

<pre>
1     var CollapseExpandAllUtil = {
2      collapseExpandAll: function(actionToPerform){
3       var allSectionsReference = document.querySelectorAll(&quot;.sectionSelector&quot;);
4       var len = allSectionsReference.length;
5       for (var i = 0; i &lt; len; i++){
6        var sectionReference = allSectionsReference[i];
7        switch (actionToPerform){
8         case &quot;collapseAll&quot;:
9          sectionReference.style.display = &quot;none&quot;;
10         break;
11        case &quot;expandAll&quot;:
12         sectionReference.style.display = &quot;block&quot;;
13         break;
14       }
15      }
16     }
17    };
</pre>

     <p>JavaScript source code notes:</p>

     <ul>
      <li>Line 1: Defines <code>CollapseExpandAllUtil</code> as an object literal.</li>
      <li>Line 2: Defines the <code>collapseExpandAll()</code> function as a method of the <code>CollapseExpandAllUtil</code> object.</li>
      <li>Line 2: Defines <code>actionToPerform</code> as an argument of the <code>CollapseExpandAllUtil.collapseExpandAll()</code> method. The value passed into the <code>CollapseExpandAllUtil.collapseExpandAll()</code> method is assigned to <code>actionToPerform</code>. <code>actionToPerform</code> is a local variable.</li>
      <li>Line 3: Gets a reference to all elements with the <code>class=&quot;sectionSelector&quot;</code> attribute, and assigns the reference (a static <code>NodeList</code> object) to <code>allSectionsReference</code>. <code>allSectionsReference</code> is a local variable.</li>
      <li>Line 4: Gets the number of nodes in the <code>allSectionsReference</code> NodeList, and assigns the number to <code>len</code>. <code>len</code> is a local variable.</li>
      <li>Lines 5 and 6: Iterates over each node reference in the <code>allSectionsReference</code> NodeList, and assigns each node reference (in this example, an <code>HTMLDivElement</code> object) to <code>sectionReference</code>. <code>sectionReference</code> is a local variable.</li>
      <li>Lines 7 - 13: Evaluates <code>actionToPerform</code> and compares it to each case value. If <code>actionToPerform</code> is identically equal to the string value <code>&quot;collapseAll&quot;</code>, execute lines 9 and 10. If <code>actionToPerform</code> is identically equal to the string value <code>&quot;expandAll&quot;</code>, execute lines 12 and 13.</li>
      <li>Line 9: Assigns <code>display = &quot;none&quot;</code> to the JavaScript <code>sectionReference.style</code> object, which sets <code>style=&quot;display:none&quot;</code> on the DOM for each HTML element with the <code>class=&quot;sectionSelector&quot;</code> attribute. This constitutes a CSS inline style and collapses/does not display the content of each HTML element with the <code>class=&quot;sectionSelector&quot;</code> attribute.</li>
      <li>Line 12: Assigns <code>display = &quot;block&quot;</code> to the JavaScript <code>sectionReference.style</code> object, which sets <code>style=&quot;display:block&quot;</code> on the DOM for each HTML element with the <code>class=&quot;sectionSelector&quot;</code> attribute. This constitutes a CSS inline style and expands/displays the content of each HTML element with the <code>class=&quot;sectionSelector&quot;</code> attribute.</li>
      <li>Lines 10 and 13: Causes the JavaScript execution to exit the <code>switch</code> statement. In this example, the JavaScript execution then proceeds with either another iteration of the <code>for</code> loop, or, upon finishing the <code>for</code> loop, exits the <code>CollapseExpandAllUtil.collapseExpandAll()</code> method.</li>
     </ul>
 
    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/javascript/javascript_techniques/index.php'>JavaScript Techniques (learnwebcoding.com)</a></li>
     </ul>

    </section>";
