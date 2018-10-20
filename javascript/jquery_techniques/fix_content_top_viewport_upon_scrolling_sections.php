<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/jquery_techniques/fix_content_top_viewport_upon_scrolling_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/jquery_techniques/fix_content_top_viewport_upon_scrolling.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Fixing web page content to the top of the viewport upon scrolling with jQuery is a technique for dynamically fixing/unfixing content to the top of the viewport upon scrolling down/up the web page. When initially scrolling down the web page, all of the content moves up the viewport in unison as normal. However, when the content to be fixed to the top of the viewport reaches the top of the viewport, it is removed from the normal flow of content, it is fixed to the top of the viewport, and it remains fixed to the top of the viewport as scrolling down continues. Then, when scrolling up the web page, the reverse occurs and the fixed content is returned to the normal flow of content. Dynamically fixing/unfixing content to the top of the viewport upon scrolling down/up the web page requires:</p>

     <ul>
      <li>Getting the number of pixels that are being scrolled off the top of the viewport. Cross web browser, this is not straight forward using JavaScript. Therefore, the jQuery <code>$(window).scrollTop()</code> method is used.</li>
      <li>Setting the number of pixels from the top of the web page to the top of the content to be fixed. This is simple CSS.</li>
      <li>Setting the height of the content to be fixed. This is simple CSS.</li>
     </ul>

     <p>Some notes on this example:</p>

     <ul>
<!-- Similar language in web_browser_support_new_html5_semantic_elements.html, reveal_fixed_footer_upon_scrolling.html. -->
      <li>The new HTML 5 semantic <code>header</code>, <code>main</code>, <code>footer</code>, and <code>nav</code> elements are used. Support for these elements is different cross-browser. Moreover, the user agent styles for some web browsers style some of these elements as block-level elements (i.e., like <code>div</code> with style <code>display: block</code>), others as inline elements (i.e., like <code>span</code> with style <code>display: inline</code>), and this changes over time.</li>
      <li>The <code>header</code> element encloses (i.e., wraps) two subsections:
       <ul>
        <li>The <code>&lt;div class=&quot;header-not-nav&quot;&gt;&lt;/div&gt;</code> section (a.k.a., header-not-nav). The header-not-nav content always scrolls with the web page. This content could be, for example, the web site logo/title/social media links/etc.</li>
        <li>The <code>&lt;nav&gt;&lt;/nav&gt;</code> section (a.k.a., nav). The nav content becomes fixed/unfixed to the top of the viewport upon scrolling down/up the web page. This content could be, for example, the web site navigation bar/etc.</li>
       </ul>
      </li>
      <li>The normal flow of content is; 1.) header-not-nav, 2.) nav, 3.) main, 4.) footer. When the nav is fixed to the top of the viewport, the normal flow of content becomes; 1.) header-not-nav, 2.) main, 3.) footer.</li>
      <li>When the demonstration web page is displayed:
       <ul>
        <li>If the viewport height is less than or equal to the height of the main plus footer (the lesser the better), the vertical scrollbar appears and it will be able to scroll down far enough to demonstrate the technique.</li>
        <li>If the viewport height is greater than the height of the main plus footer, and less than the height of the header plus main plus footer, the vertical scrollbar appears but it will not be able to scroll down far enough to demonstrate the technique.</li>
        <li>If the viewport height is greater than or equal to the height of the header plus main plus footer, there is no vertical scrollbar.</li>
       </ul>
      </li>
     </ul>

     <h3><a id='demo'></a>1.1. Demonstration</h3>

     <p>Demonstration: <a href='/javascript/jquery_techniques/fix_content_top_viewport_upon_scrolling/fix_content_top_viewport_upon_scrolling.html'>jQuery Technique: Fix Web Page Content To Top Of Viewport Upon Scrolling (learnwebcoding.com)</a></p>

     <h3><a id='webBrowserSupport'></a>1.2. Web Browser Support</h3>

     <p>Web browser support: IE9+, ED12+, FF4+, SF5+, CH5+, OP11.60+.</p>

     <h3><a id='jquerySupport'></a>1.3. jQuery Support</h3>

     <p>jQuery support: jQuery Core 1.7+, 2+, 3+.</p>

     <h3><a id='try'></a>1.4. How To Try This Example On Your Computer</h3>

     <p>To try this example on your computer:</p>

     <ol>
      <li>Download the following source files to the same drive or folder on your computer:
       <ul class='link-list'>
        <li><a href='/javascript/jquery_techniques/fix_content_top_viewport_upon_scrolling/fix_content_top_viewport_upon_scrolling.html'><span class='filename'>fix_content_top_viewport_upon_scrolling.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/javascript/jquery_techniques/fix_content_top_viewport_upon_scrolling/fix_content_top_viewport_upon_scrolling.css'><span class='filename'>fix_content_top_viewport_upon_scrolling.css</span> (learnwebcoding.com)</a></li>
        <li><a href='/javascript/jquery_techniques/fix_content_top_viewport_upon_scrolling/fix_content_top_viewport_upon_scrolling.js'><span class='filename'>fix_content_top_viewport_upon_scrolling.js</span> (learnwebcoding.com)</a></li>
       </ul>
      </li>
      <li>Double click the <span class='filename'>.html</span> file.</li>
     </ol>

     <h3><a id='abbreviations'></a>1.5. Abbreviations</h3>

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

     <h2><a id='technique'></a>2. Fix Web Page Content To The Top Of The Viewport Upon Scrolling</h2>

     <h3><a id='html'></a>2.1. HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/javascript/jquery_techniques/fix_content_top_viewport_upon_scrolling/fix_content_top_viewport_upon_scrolling.html'><span class='filename'>fix_content_top_viewport_upon_scrolling.html</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;jQuery Technique: Fix Web Page Content To Top Of Viewport Upon Scrolling Demonstration/HTML Source Code&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;fix_content_top_viewport_upon_scrolling.css&quot; /&gt;
7       &lt;script src=&quot;https://code.jquery.com/jquery-1.7.0.js&quot;&gt;&lt;/script&gt;
8       &lt;script src=&quot;fix_content_top_viewport_upon_scrolling.js&quot;&gt;&lt;/script&gt;
9      &lt;/head&gt;
10     &lt;body&gt;
11      &lt;header&gt;
12       &lt;div class=&quot;header-not-nav&quot;&gt;
13        &lt;h2&gt;jQuery Technique: Fix Web Page Content To Top Of Viewport Upon Scrolling Demonstration/HTML Source Code&lt;/h2&gt;
14        &lt;h4&gt;This example uses jQuery and requires an Internet connection.&lt;/h4&gt;
15        .header-not-nav
16       &lt;/div&gt;
17       &lt;nav&gt;
18        &lt;h4&gt;Becomes fixed to top of viewport upon scrolling down.&lt;/h4&gt;
19        nav&lt;/div&gt;
20       &lt;/nav&gt;
21      &lt;/header&gt;
22      &lt;main&gt;main 1&lt;br /&gt;2&lt;br /&gt;3&lt;br /&gt;4&lt;br /&gt;5&lt;br /&gt;6&lt;br /&gt;7&lt;br /&gt;8&lt;br /&gt;9&lt;br /&gt;10&lt;br /&gt;11&lt;br /&gt;12&lt;br /&gt;13&lt;br /&gt;14&lt;br /&gt;15&lt;br /&gt;16&lt;br /&gt;17&lt;br /&gt;18&lt;br /&gt;19&lt;br /&gt;20&lt;br /&gt;21&lt;br /&gt;22&lt;br /&gt;23&lt;br /&gt;24&lt;br /&gt;25&lt;br /&gt;26&lt;br /&gt;27&lt;br /&gt;28&lt;br /&gt;29&lt;br /&gt;30&lt;br /&gt;31&lt;br /&gt;32&lt;br /&gt;33&lt;br /&gt;34&lt;br /&gt;35&lt;br /&gt;36&lt;br /&gt;37&lt;br /&gt;38&lt;br /&gt;39&lt;br /&gt;40&lt;br /&gt;41&lt;br /&gt;42&lt;br /&gt;43&lt;br /&gt;44&lt;br /&gt;45&lt;br /&gt;46&lt;br /&gt;47&lt;br /&gt;48&lt;br /&gt;49&lt;br /&gt;50&lt;/main&gt;
23      &lt;footer&gt;footer 1&lt;br /&gt;2&lt;br /&gt;3&lt;br /&gt;4&lt;br /&gt;5&lt;br /&gt;6&lt;br /&gt;7&lt;br /&gt;8&lt;br /&gt;9&lt;br /&gt;10&lt;br /&gt;11&lt;br /&gt;12&lt;br /&gt;13&lt;br /&gt;14&lt;br /&gt;15&lt;br /&gt;16&lt;br /&gt;17&lt;br /&gt;18&lt;br /&gt;19&lt;br /&gt;20&lt;br /&gt;Web browser support: IE9+, ED12+, FF4+, SF5+, CH5+, OP11.60+.&lt;br /&gt;jQuery support: jQuery Core 1.7+, 2+, 3+.&lt;/footer&gt;
24     &lt;/body&gt;
25    &lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>Lines 11 - 21: The <code>&lt;header&gt;&lt;/header&gt;</code> section. The <code>&lt;header&gt;</code> element wraps the content from the top of the web page to the bottom of the content to be fixed. Has two subsections:
       <ul>
        <li>Lines 12 - 16: The <code>&lt;div class=&quot;header-not-nav&quot;&gt;&lt;/div&gt;</code> section. The content of this header subsection always scrolls with the web page.</li>
        <li>Lines 17 - 20: The <code>&lt;nav&gt;&lt;/nav&gt;</code> section. The content of this header subsection becomes fixed/unfixed to the top of the viewport upon scrolling down/up the web page.</li>
       </ul>
      </li>
      <li>Line 22: The <code>&lt;main&gt;&lt;/main&gt;</code> section.</li>
      <li>Line 23: The <code>&lt;footer&gt;&lt;/footer&gt;</code> section.</li>
     </ul>

     <h3><a id='css'></a>2.2. CSS Source Code And Notes</h3>

     <p>CSS source code: <a href='/javascript/jquery_techniques/fix_content_top_viewport_upon_scrolling/fix_content_top_viewport_upon_scrolling.css'><span class='filename'>fix_content_top_viewport_upon_scrolling.css</span> (learnwebcoding.com)</a>:</p>

<pre>
1     * {
2       text-align: center;
3       margin: 0;
4     }
5     main {
6       display: block;
7     }
8     header {
9      height: 150px;
10    }
11    .header-not-nav {
12      height: 100px;
13      background-color: #fcc;
14    }
15    nav {
16      height: 50px;
17      background-color: #000;
18      color: #fff;
19    }
20    .fixed {
21      position: fixed;
22      top: 0;
23      left: 0;
24      right: 0;
25    }
26    main {
27      background-color: #cfc;
28    }
29    footer {
30      background-color: #ccf;
31    }
</pre>

     <p>CSS source code notes:</p>

     <ul>
      <li>Lines 1 - 7: A CSS reset/normalize for this example. In particular, lines 5 - 7 force web browsers to style the <code>main</code> element as a block-element, which is identical to the user agent styles for the <code>header</code>, <code>nav</code>, and <code>footer</code> elements in the supported web browsers (i.e., IE9+, ED12+, FF4+, SF5+, CH5+, OP11.60+).</li>
      <li>Lines 8 - 10: Styles the header. The header encloses (i.e., wraps) two subsections: 1.) header-not-nav, which always scrolls with the web page; and 2.) nav, which becomes fixed/unfixed to the top of the viewport upon scrolling down/up the web page.</li>
      <li>Lines 9: Sets the height of the header. Required. Stops the nav from obscuring the top of the main when the nav is fixed to the top of the viewport.
       <div class='note normal'>When the nav reaches the top of the viewport, it is removed from the normal flow of content, it is fixed to the top of the viewport, and the main becomes the next content in the flow of content after the header-not-nav. Because when the nav reaches the top of the viewport it is fixed in place to the top of the viewport, it obscures the top 50 pixels (the height of the nav) of the next content in the flow of content after the header-not-nav, which is the main. Explicitly setting the height of the header stops the nav from obscuring the top of the main when the nav is fixed to the top of the viewport.</div>
      </li>
      <li>Lines 11 - 14: Styles the header-not-nav.</li>
      <li>Line 12: Sets the height of the header-not-nav. Required. In this example, the height of the header-not-nav corresponds to the number of pixels from the top of the web page to the top of the content to be fixed.</li>
      <li>Lines 15 - 19: Styles the nav.</li>
      <li>Line 16: Sets the height of the nav. Required. In this example, the height of the nav corresponds to the height of the content to be fixed.</li>
      <li>Lines 20 - 25: Removes a box from the normal flow of content and fixes its position according to the <code>top: 0</code>, <code>left: 0</code>, and <code>right: 0 </code> styles. The <code>bottom: 0</code> style pins the box to the bottom of the viewport. The <code>left: 0</code> and <code>right: 0</code> styles stretch the box horizontally to fill the entire width of the viewport.
       <div class='note normal'>
        <ul>
         <li>To fill the entire width of the viewport, <code>left: 0</code> and <code>right: 0</code> can be replaced with <code>width: 100%</code>.</li>
         <li>To fix the position of content, there is no need to use the <code>z-index</code> property.</li>
        </ul>
       </div>
      </li>
      <li>Lines 26 - 28: Styles the main.</li>
      <li>Lines 29 - 31: Styles the footer.</li>
     </ul>

     <h3><a id='jquery'></a>2.3. jQuery Source Code And Notes</h3>

     <p>jQuery source code: <a href='/javascript/jquery_techniques/fix_content_top_viewport_upon_scrolling/fix_content_top_viewport_upon_scrolling.js'><span class='filename'>fix_content_top_viewport_upon_scrolling.js</span> (learnwebcoding.com)</a>:</p>

<pre>
1    $(document).ready(function(){
2     $(window).on(&quot;scroll&quot;, function(){
3      if ($(window).scrollTop() &gt;= 100){
4       $(&quot;nav&quot;).addClass(&quot;fixed&quot;);
5      } else {
6       $(&quot;nav&quot;).removeClass(&quot;fixed&quot;);
7      }
8     });
9    });
</pre>

     <p>jQuery source code notes:</p>

     <ul>
      <li>Line 1: Runs an anonymous function when the web browser has fully generated the DOM (i.e., when the DOM is ready for monitoring/manipulation).</li>
      <li>Line 2: Attaches an event handler (in this example, an anonymous function) to the scroll event on the <code>window</code> object.</li>
      <li>Lines 3 - 7: Compares the number of pixels that are being scrolled off the top of the viewport to the number of pixels from the top of the web page to the top of the content to be fixed, and, depending upon the result of the comparison, either maintains or changes the style of the nav.</li>
      <li>Line 3: The <code>$(window).scrollTop()</code> method gets the number of pixels that are being scrolled off the top of the viewport.</li>
      <li>Line 3: The <code>100</code> value is the number of pixels from the top of the web page to the top of the content to be fixed.</li>
      <li>Line 3: The <code>($(window).scrollTop() &gt;= 100)</code> expression compares the number of pixels that are being scrolled off the top of the viewport (varies with scrolling) to the number of pixels from the top of the web page to the top of the content to be fixed (100). In this example, if the number of pixels that are being scrolled off the top of the viewport is greater than or equal to 100, then the expression evaluates to the boolean <code>true</code> value. If the number of pixels that are being scrolled off the top of the viewport is not greater than or equal to 100, then the expression evaluates to the boolean <code>false</code> value.</li>
      <li>Line 4. Executes each time the line 3 expression evaluates to the boolean <code>true</code> value. Where the <code>class</code> attribute does not exist on <code>nav</code> elements on the DOM, adds the <code>class=&quot;fixed&quot;</code> attribute to those <code>nav</code> elements on the DOM. Where the <code>class</code> attribute exists on <code>nav</code> elements on the DOM without the <code>fixed</code> value, adds the <code>fixed</code> value to the <code>class</code> attribute for those <code>nav</code> elements on the DOM. Where the <code>class</code> attribute exists on <code>nav</code> elements on the DOM with the <code>fixed</code> value, does nothing.</li>
      <li>Line 6. Executes each time the line 3 expression evaluates to the boolean <code>false</code> value. Where the <code>class</code> attribute does not exist on <code>nav</code> elements on the DOM, does nothing. Where the <code>class</code> attribute exists on <code>nav</code> elements on the DOM without the <code>fixed</code> value, does nothing. Where the <code>class</code> attribute exists on <code>nav</code> elements on the DOM with the <code>fixed</code> value, removes the <code>fixed</code> value from the <code>class</code> attribute for those <code>nav</code> elements on the DOM.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='http://meyerweb.com/eric/tools/css/reset/'>Reset CSS (meyerweb.com)</a></li>
      <li><a href='http://necolas.github.io/normalize.css/'>normalize.css (necolas.github.io)</a></li>
      <li><a href='http://jquery.com/'>jQuery (jquery.com)</a></li>
      <li><a href='http://api.jquery.com/'>jQuery API (api.jquery.com)</a></li>
      <li><a href='http://www.w3.org/TR/CSS2/'>Cascading Style Sheets Level 2 Revision 1 (CSS 2.1) Specification: W3C Recommendation 07 June 2011, Edited In Place 17 December 2014 To Point To New Work (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/css3-positioning/'>CSS Positioned Layout Module Level 3: W3C Working Draft 03 February 2015 (w3.org)</a></li>
      <li><a href='/javascript/jquery_techniques/index.php'>jQuery Techniques (learnwebcoding.com)</a></li>
     </ul>

    </section>";
