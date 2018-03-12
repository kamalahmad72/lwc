<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_techniques/reveal_fixed_footer_upon_scrolling_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/css/css_techniques/reveal_fixed_footer_upon_scrolling.php.
 * Last reviewed/updated: 07 Oct 2016.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Revealing a fixed web page footer upon scrolling is a CSS technique for fixing the position of a web page footer to the bottom of the viewport, positioning other web page content in front of the web page footer, and revealing the web page footer upon scrolling down the web page. Two examples of this technique are provided. Both techniques use the new HTML 5 semantic <code>header</code>, <code>main</code>, and <code>footer</code> elements. Technique 1 uses the <code>header</code>, <code>main</code>, and <code>footer</code> type selectors to style the header, main, and footer. Technique 2 nests a classed <code>div</code> element (i.e., a <code>div</code> element with the <code>class</code> attribute) in the <code>header</code>, <code>main</code>, and <code>footer</code> elements, and uses the <code>div</code> element class selectors to style the header, main, and footer. Some notes on these examples:</p>

     <ul>
<!-- Similar language in web_browser_support_new_html5_semantic_elements.html, fix_content_top_viewport_upon_scrolling.html. -->
      <li>Support for the new HTML 5 semantic <code>header</code>, <code>main</code>, and <code>footer</code> elements is different cross-browser. Moreover, the user agent styles for some web browsers style some of these elements as block-level elements (i.e., like <code>div</code> with style <code>display: block</code>), others as inline elements (i.e., like <code>span</code> with style <code>display: inline</code>), and this changes over time.</li>
      <li>IE9+, not IE8-, supports the new HTML 5 semantic <code>header</code>, <code>main</code>, and <code>footer</code> elements. For IE9+ support, use technique 1 <code>header</code>, <code>main</code>, and <code>footer</code> type selectors or technique 2 <code>div</code> class selectors. For IE7+ support, use technique 2 <code>div</code> class selectors.</li>
      <li>When the demonstration web pages are displayed:
       <ul>
        <li>If the viewport height is less than or equal to the height of the header plus the height of the main, the entire footer is hidden. To reveal the footer, scroll down the web page.</li>
        <li>If the viewport height is greater than the height of the header plus the height of the main, and less than the height of the header  plus the height of the main plus the height of the footer, the top of the footer is hidden and the bottom of the footer is visible. To reveal the footer, scroll down the web page.</li>
        <li>If the viewport height is greater than or equal to the height of the header plus the height of the main plus the height of the footer, the entire footer is visible and there is no vertical scrollbar.</li>
       </ul>
      </li>
     </ul>

     <h3><a id='try'></a>1.1. How To Try These Examples On Your Computer</h3>

     <p>To try these examples on your computer:</p>

     <ol>
      <li>Download the following source files to the same drive or folder on your computer:
       <ul class='link-list'>
        <li><a href='/css/css_techniques/reveal_fixed_footer_upon_scrolling/reveal_fixed_footer_upon_scrolling_technique_1.html'><span class='filename'>reveal_fixed_footer_upon_scrolling_technique_1.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/reveal_fixed_footer_upon_scrolling/reveal_fixed_footer_upon_scrolling_technique_1.css'><span class='filename'>reveal_fixed_footer_upon_scrolling_technique_1.css</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/reveal_fixed_footer_upon_scrolling/reveal_fixed_footer_upon_scrolling_technique_2.html'><span class='filename'>reveal_fixed_footer_upon_scrolling_technique_2.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/reveal_fixed_footer_upon_scrolling/reveal_fixed_footer_upon_scrolling_technique_2.css'><span class='filename'>reveal_fixed_footer_upon_scrolling_technique_2.css</span> (learnwebcoding.com)</a></li>
       </ul>
      </li>
      <li>Double click the <span class='filename'>.html</span> files.</li>
     </ol>

     <h3><a id='abbreviations'></a>1.2. Abbreviations</h3>

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

     <h2><a id='tech1'></a>2. Technique 1 <code>header</code>, <code>main</code>, And <code>footer</code> Type Selectors</h2>

     <p>Technique 1 <code>header</code>, <code>main</code>, and <code>footer</code> type selectors: 1.) uses the new HTML 5 semantic <code>header</code>, <code>main</code>, and <code>footer</code> elements; and 2.) uses the <code>header</code>, <code>main</code>, and <code>footer</code> type selectors to style the header, main, and footer. Because the <code>header</code>, <code>main</code>, and <code>footer</code> elements are used, the web browser support and the user agent styles for these elements need to be taken into consideration.</p>

     <h3><a id='tech1Demo'></a>2.1. Technique 1 <code>header</code>, <code>main</code>, And <code>footer</code> Type Selectors Demonstration</h3>

     <p>Demonstration: <a href='/css/css_techniques/reveal_fixed_footer_upon_scrolling/reveal_fixed_footer_upon_scrolling_technique_1.html'>CSS Technique: Reveal Fixed Web Page Footer Upon Scrolling Technique 1 <code>header</code>, <code>main</code>, And <code>footer</code> Type Selectors (learnwebcoding.com)</a>.</p>

     <h3><a id='tech1Support'></a>2.2. Technique 1 <code>header</code>, <code>main</code>, And <code>footer</code> Type Selectors Web Browser Support</h3>

     <p>Web browser support: IE9+, ED12+, FF3+, SF3.1+, CH2+, OP9+.</p>

     <h3><a id='tech1Html'></a>2.3. Technique 1 <code>header</code>, <code>main</code>, And <code>footer</code> Type Selectors HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/css/css_techniques/reveal_fixed_footer_upon_scrolling/reveal_fixed_footer_upon_scrolling_technique_1.html'><span class='filename'>reveal_fixed_footer_upon_scrolling_technique_1.html</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;CSS Technique: Reveal Fixed Web Page Footer Upon Scrolling Technique 1 &lt;code&gt;header&lt;/code&gt;, &lt;code&gt;main&lt;/code&gt;, And &lt;code&gt;footer&lt;/code&gt; Type Selectors&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;reveal_fixed_footer_upon_scrolling_technique_1.css&quot; /&gt;
7      &lt;/head&gt;
8      &lt;body&gt;
9       &lt;header&gt;
10       &lt;h2&gt;CSS Technique: Reveal Fixed Web Page Footer Upon Scrolling Technique 1 &lt;code&gt;header&lt;/code&gt;, &lt;code&gt;main&lt;/code&gt;, And &lt;code&gt;footer&lt;/code&gt; Type Selectors&lt;/h2&gt;
11       header type selector
12      &lt;/header&gt;
13      &lt;main&gt;main type selector 1&lt;br /&gt;2&lt;br /&gt;3&lt;br /&gt;4&lt;br /&gt;5&lt;br /&gt;6&lt;br /&gt;7&lt;br /&gt;8&lt;br /&gt;9&lt;br /&gt;10&lt;br /&gt;11&lt;br /&gt;12&lt;br /&gt;13&lt;br /&gt;14&lt;br /&gt;15&lt;br /&gt;16&lt;br /&gt;17&lt;br /&gt;18&lt;br /&gt;19&lt;br /&gt;20&lt;br /&gt;21&lt;br /&gt;22&lt;br /&gt;23&lt;br /&gt;24&lt;br /&gt;25&lt;br /&gt;26&lt;br /&gt;27&lt;br /&gt;28&lt;br /&gt;29&lt;br /&gt;30&lt;br /&gt;31&lt;br /&gt;32&lt;br /&gt;33&lt;br /&gt;34&lt;br /&gt;35&lt;br /&gt;36&lt;br /&gt;37&lt;br /&gt;38&lt;br /&gt;39&lt;br /&gt;40&lt;br /&gt;41&lt;br /&gt;42&lt;br /&gt;43&lt;br /&gt;44&lt;br /&gt;45&lt;br /&gt;46&lt;br /&gt;47&lt;br /&gt;48&lt;br /&gt;49&lt;br /&gt;50&lt;/main&gt;
14      &lt;footer&gt;footer type selector 1&lt;br /&gt;2&lt;br /&gt;3&lt;br /&gt;4&lt;br /&gt;5&lt;br /&gt;6&lt;br /&gt;7&lt;br /&gt;8&lt;br /&gt;9&lt;br /&gt;10&lt;br /&gt;11&lt;br /&gt;12&lt;br /&gt;13&lt;br /&gt;14&lt;br /&gt;15&lt;br /&gt;16&lt;br /&gt;17&lt;br /&gt;18&lt;br /&gt;19&lt;br /&gt;20&lt;br /&gt;Test if footer content is interactive: &lt;a href=&quot;http://www.google.com&quot;&gt;Google (google.com)&lt;/a&gt;.&lt;br /&gt;Web browser support: IE9+, ED12+, FF3+, SF3.1+, CH2+, OP9+.&lt;/footer&gt;
15     &lt;/body&gt;
16    &lt;/html&gt;
</pre>

     <p>Technique 1 <code>header</code>, <code>main</code>, and <code>footer</code> type selectors HTML source code notes:</p>

     <ul>
      <li>Lines 9 - 12: The <code>&lt;header&gt;&lt;/header&gt;</code> section.
      <li>Line 13: The <code>&lt;main&gt;&lt;/main&gt;</code> section.</li>
      <li>Line 14: The <code>&lt;footer&gt;&lt;/footer&gt;</code> section.</li>
     </ul>

     <h3><a id='tech1Css'></a>2.4. Technique 1 <code>header</code>, <code>main</code>, And <code>footer</code> Type Selectors CSS Source Code And Notes</h3>

     <p>CSS source code: <a href='/css/css_techniques/reveal_fixed_footer_upon_scrolling/reveal_fixed_footer_upon_scrolling_technique_1.css'><span class='filename'>reveal_fixed_footer_upon_scrolling_technique_1.css</span> (learnwebcoding.com)</a>:</p>

<pre>
1     * {
2       line-height: 1.15;
3       text-align: center;
4       margin: 0;
5     }
6     header, main, footer {
7       display: block;
8     }
9     header {
10      height: 150px;
11      background-color: #fcc;
12    }
13    main {
14      position: relative;
15      z-index: 1;
16      background-color: #cfc;
17      margin-bottom: 430px;
18    }
19    footer {
20      position: fixed;
21      bottom: 0;
22      left: 0;
23      right: 0;
24      height: 430px;
25      background-color: #ccf;
26    }
</pre>

     <p>Technique 1 <code>header</code>, <code>main</code>, and <code>footer</code> type selectors CSS source code notes:</p>

     <ul>
      <li>Lines 1 - 8: A CSS reset/normalize for this example. In particular, line 2 <code>line-height: 1.15</code> works well with line 24 <code>height: 430px</code>. Also, lines 6 - 8 force web browsers to style the <code>header</code>, <code>main</code>, and <code>footer</code> elements as block-level elements.</li>
      <li>Lines 9 - 12: Styles the header.</li>
      <li>Lines 13 - 18: Styles the main.
       <div class='note normal'>
        <ul>
         <li>As an alternative, lines 14 and 15 can be deleted from the <code>main</code> style rule and <code>z-index: -1</code> can be added to the <code>footer</code> style rule. However, this changes web browser support from FF3+ to FF4+.</li>
         <li>As an alternative, lines 14 and 15 can be moved to a <code>body</code> style rule and <code>z-index: -1</code> can be added to the <code>footer</code> style rule. Web browser support not determined.</li>
        </ul>
       </div>
      </li>
      <li>Line 14: Defines the main as a positioned element.</li>
      <li>Line 15: Defines the main as positioned in front of (i.e., closer to the user compared to) any other positioned web page elements.
       <div class='note normal'>The <code>z-index</code> property only applies to positioned elements (i.e., elements with the <code>position</code> property assigned any value other than <code>static</code>).</div>
      </li>
      <li>Line 16: Required. The user agent styles for most web browsers style the <code>main</code> element with <code>background-color: transparent</code>, which allows the footer to show through the main. Assigns a <code>background-color</code> other than <code>transparent</code> to the <code>main</code> element, which stops the footer from showing through the main.</li>
      <li>Lines 17 and 24: The <code>main</code> style rule <code>margin-bottom</code> property <code>430px</code> value is identical to the <code>footer</code> style rule <code>height</code> property <code>430px</code> value. When these two values are identical, the vertical scrolling down stops at the exact pixel where the entire footer is revealed.</li>
      <li>Lines 19 - 26: Styles the footer.
       <div class='note normal'>There is no need to explicitly position the footer behind the main.</div>
      </li>
      <li>Line 20: Defines the footer as a positioned element. Removes the footer box from the normal flow of content and fixes its position according to any specified <code>top</code>, <code>right</code>, <code>bottom</code>, and <code>left</code> properties.</li>
      <li>Lines 21 - 23: The <code>bottom: 0</code> style pins the footer box to the bottom of the viewport. The <code>left: 0</code> and <code>right: 0</code> styles stretch the footer box horizontally to fill the entire width of the viewport.
       <div class='note normal'>
        <ul>
         <li>The <code>top</code>, <code>right</code>, <code>bottom</code>, and <code>left</code> properties only apply to positioned elements (i.e., elements with the <code>position</code> property assigned any value other than <code>static</code>).</li>
         <li>To fill the entire width of the viewport, <code>left: 0</code> and <code>right: 0</code> can be replaced with <code>width: 100%</code>.</li>
        </ul>
       </div>
      </li>
     </ul>
 
    </section>
    <hr />
    <section>

     <h2><a id='tech2'></a>3. Technique 2 Nested <code>div</code> Element Class Selectors</h2>

     <p>Technique 2 nested <code>div</code> element class selectors: 1.) uses the new HTML 5 semantic <code>header</code>, <code>main</code>, and <code>footer</code> elements; 2.) nests a classed <code>div</code> element (i.e., a <code>div</code> element with the <code>class</code> attribute) in the <code>header</code>, <code>main</code>, and <code>footer</code> elements; and 3.) uses the <code>div</code> element class selectors to style the header, main, and footer. Because the class selectors select <code>div</code> elements, because the selected <code>div</code> elements are nested in the <code>header</code>, <code>main</code>, and <code>footer</code> elements, and because the user agent styles for all web browsers style the <code>div</code> element as a block-level element, the web browser support and the user agent styles for the <code>header</code>, <code>main</code>, and <code>footer</code> elements do not need to be taken into consideration.</p>

     <h3><a id='tech2Demo'></a>3.1. Technique 2 Nested <code>div</code> Element Class Selectors Demonstration</h3>

     <p>Demonstration: <a href='/css/css_techniques/reveal_fixed_footer_upon_scrolling/reveal_fixed_footer_upon_scrolling_technique_2.html'>CSS Technique: Reveal Fixed Web Page Footer Upon Scrolling Technique 2 Nested <code>div</code> Element Class Selectors (learnwebcoding.com)</a>.</p>

     <h3><a id='tech2Support'></a>3.2. Technique 2 Nested <code>div</code> Element Class Selectors Web Browser Support</h3>

     <p>Web browser support: IE7+, ED12+, FF3+, SF3.1+, CH2+, OP9+.</p>

     <h3><a id='tech2Html'></a>3.3. Technique 2 Nested <code>div</code> Element Class Selectors HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/css/css_techniques/reveal_fixed_footer_upon_scrolling/reveal_fixed_footer_upon_scrolling_technique_2.html'><span class='filename'>reveal_fixed_footer_upon_scrolling_technique_2.html</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;CSS Technique: Reveal Fixed Web Page Footer Upon Scrolling Technique 2 Nested &lt;code&gt;div&lt;/code&gt; Element Class Selectors&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;reveal_fixed_footer_upon_scrolling_technique_2.css&quot; /&gt;
7      &lt;/head&gt;
8      &lt;body&gt;
9       &lt;header&gt;
10       &lt;div class=&quot;div-in-header-class-selector&quot;&gt;
11        &lt;h2&gt;CSS Technique: Reveal Fixed Web Page Footer Upon Scrolling Technique 2 Nested &lt;code&gt;div&lt;/code&gt; Element Class Selectors&lt;/h2&gt;
12        .div-in-header-class-selector
13       &lt;/div&gt;
14      &lt;/header&gt;
15      &lt;main&gt;
16       &lt;div class=&quot;div-in-main-class-selector&quot;&gt;.div-in-main-class-selector 1&lt;br /&gt;2&lt;br /&gt;3&lt;br /&gt;4&lt;br /&gt;5&lt;br /&gt;6&lt;br /&gt;7&lt;br /&gt;8&lt;br /&gt;9&lt;br /&gt;10&lt;br /&gt;11&lt;br /&gt;12&lt;br /&gt;13&lt;br /&gt;14&lt;br /&gt;15&lt;br /&gt;16&lt;br /&gt;17&lt;br /&gt;18&lt;br /&gt;19&lt;br /&gt;20&lt;br /&gt;21&lt;br /&gt;22&lt;br /&gt;23&lt;br /&gt;24&lt;br /&gt;25&lt;br /&gt;26&lt;br /&gt;27&lt;br /&gt;28&lt;br /&gt;29&lt;br /&gt;30&lt;br /&gt;31&lt;br /&gt;32&lt;br /&gt;33&lt;br /&gt;34&lt;br /&gt;35&lt;br /&gt;36&lt;br /&gt;37&lt;br /&gt;38&lt;br /&gt;39&lt;br /&gt;40&lt;br /&gt;41&lt;br /&gt;42&lt;br /&gt;43&lt;br /&gt;44&lt;br /&gt;45&lt;br /&gt;46&lt;br /&gt;47&lt;br /&gt;48&lt;br /&gt;49&lt;br /&gt;50&lt;/div&gt;
17      &lt;/main&gt;
18      &lt;footer&gt;
19       &lt;div class=&quot;div-in-footer-class-selector&quot;&gt;.div-in-footer-class-selector 1&lt;br /&gt;2&lt;br /&gt;3&lt;br /&gt;4&lt;br /&gt;5&lt;br /&gt;6&lt;br /&gt;7&lt;br /&gt;8&lt;br /&gt;9&lt;br /&gt;10&lt;br /&gt;11&lt;br /&gt;12&lt;br /&gt;13&lt;br /&gt;14&lt;br /&gt;15&lt;br /&gt;16&lt;br /&gt;17&lt;br /&gt;18&lt;br /&gt;19&lt;br /&gt;20&lt;br /&gt;Test if footer content is interactive: &lt;a href=&quot;http://www.google.com&quot;&gt;Google (google.com)&lt;/a&gt;.&lt;br /&gt;Web browser support: IE7+, ED12+, FF3+, SF3.1+, CH2+, OP9+.&lt;/div&gt;
20      &lt;/footer&gt;
21     &lt;/body&gt;
22    &lt;/html&gt;
</pre>

     <p>Technique 2 nested <code>div</code> element class selectors HTML source code notes:</p>

     <ul>
      <li>Lines 9 - 14: The <code>&lt;header&gt;&lt;/header&gt;</code> section.</li>
      <li>Lines 10: The classed <code>div</code> element nested in the <code>header</code> element.</li>
      <li>Lines 15 - 17: The <code>&lt;main&gt;&lt;/main&gt;</code> section.</li>
      <li>Line 16: The classed <code>div</code> element nested in the <code>main</code> element.</li>
      <li>Lines 18 - 20: The <code>&lt;footer&gt;&lt;/footer&gt;</code> section.</li>
      <li>Line 19: The classed <code>div</code> element nested in the <code>footer</code> element.</li>
     </ul>

     <h3><a id='tech2Css'></a>3.4. Technique 2 Nested <code>div</code> Element Class Selectors CSS Source Code And Notes</h3>

     <p>CSS source code: <a href='/css/css_techniques/reveal_fixed_footer_upon_scrolling/reveal_fixed_footer_upon_scrolling_technique_2.css'><span class='filename'>reveal_fixed_footer_upon_scrolling_technique_2.css</span> (learnwebcoding.com)</a>:</p>

<pre>
1     * {
2       line-height: 1.15;
3       text-align: center;
4       margin: 0;
5     }
6     .div-in-header-class-selector {
7       height: 150px;
8       background-color: #fcc;
9     }
10    .div-in-main-class-selector {
11      position: relative;
12      z-index: 1;
13      background-color: #cfc;
14      margin-bottom: 430px;
15    }
16    .div-in-footer-class-selector {
17      position: fixed;
18      bottom: 0;
19      left: 0;
20      right: 0;
21      height: 430px;
22      background-color: #ccf;
23    }
</pre>

     <p>Technique 2 nested <code>div</code> element class selectors CSS source code notes:</p>

     <ul>
      <li>Lines 1 - 5: A CSS reset/normalize for this example. In particular, line 2 <code>line-height: 1.15</code> works well with line 21 <code>height: 430px</code>.</li>
      <li>Lines 6 - 9: Styles the header.</li>
      <li>Lines 10 - 15: Styles the main.
       <div class='note normal'>
        <ul>
         <li>As an alternative, lines 11 and 12 can be deleted from the <code>main</code> style rule and <code>z-index: -1</code> can be added to the <code>footer</code> style rule. However, this changes web browser support from IE7+ to IE8+ and from FF3+ to FF4+.</li>
         <li>As an alternative, lines 11 and 12 can be moved to a <code>body</code> style rule and <code>z-index: -1</code> can be added to the <code>footer</code> style rule. Web browser support not determined.</li>
        </ul>
       </div>
      </li>
      <li>Line 11: Defines the main as a positioned element.</li>
      <li>Line 12: Defines the main as positioned in front of (i.e., closer to the user compared to) any other positioned web page elements.
       <div class='note normal'>The <code>z-index</code> property only applies to positioned elements (i.e., elements with the <code>position</code> property assigned any value other than <code>static</code>).</div>
      </li>
      <li>Line 13: Required. The user agent styles for most web browsers style the <code>main</code> element with <code>background-color: transparent</code>, which allows the footer to show through the main. Assigns a <code>background-color</code> other than <code>transparent</code> to the <code>main</code> element, which stops the footer from showing through the main.</li>
      <li>Lines 14 and 21: The <code>.div-in-main-class-selector</code> style rule <code>margin-bottom</code> property <code>430px</code> value is identical to the <code>.div-in-footer-class-selector</code> style rule <code>height</code> property <code>430px</code>value. When these two values are identical, the vertical scrolling down stops at the exact pixel where the entire footer is revealed.</li>
      <li>Lines 16 - 23: Styles the footer.
       <div class='note normal'>There is no need to explicitly position the footer behind the main.</div>
      </li>
      <li>Line 17: Defines the footer as a positioned element. Removes the footer box from the normal flow of content and fixes its position according to any specified <code>top</code>, <code>right</code>, <code>bottom</code>, and <code>left</code> properties.</li>
      <li>Lines 18 - 20: The <code>bottom: 0</code> style pins the footer box to the bottom of the viewport. The <code>left: 0</code> and <code>right: 0</code> styles stretch the footer box horizontally to fill the entire width of the viewport.
       <div class='note normal'>
        <ul>
         <li>The <code>top</code>, <code>right</code>, <code>bottom</code>, and <code>left</code> properties only apply to positioned elements (i.e., elements with the <code>position</code> property assigned any value other than <code>static</code>).</li>
         <li>To fill the entire width of the viewport, <code>left: 0</code> and <code>right: 0</code> can be replaced with <code>width: 100%</code>.</li>
        </ul>
       </div>
      </li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>4. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='http://meyerweb.com/eric/tools/css/reset/'>Reset CSS (meyerweb.com)</a></li>
      <li><a href='http://necolas.github.io/normalize.css/'>normalize.css (necolas.github.io)</a></li>
      <li><a href='http://www.w3.org/TR/CSS2/'>Cascading Style Sheets Level 2 Revision 1 (CSS 2.1) Specification: W3C Recommendation 07 June 2011, Edited In Place 12 April 2016 To Point To New Work (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/css3-positioning/'>CSS Positioned Layout Module Level 3: W3C Working Draft 03 February 2015 (w3.org)</a></li>
      <li><a href='/css/css_techniques/index.php'>CSS Techniques (learnwebcoding.com)</a></li>
     </ul>

    </section>";
