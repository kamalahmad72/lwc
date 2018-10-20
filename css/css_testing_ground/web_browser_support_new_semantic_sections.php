<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_testing_ground/web_browser_support_new_semantic_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/css/css_testing_ground/web_browser_support_new_semantic.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

<!-- Similar language in reveal_fixed_footer_upon_scrolling.html, fix_content_top_viewport_upon_scrolling.html. -->

     <p>The new HTML5 semantic elements include the <code>header</code>, <code>main</code>, <code>footer</code>, <code>nav</code>, <code>section</code>, <code>article</code>, and <code>aside</code> elements. Support for these elements is different cross-browser. Moreover, the user agent styles for some web browsers style some of these elements as block-level elements (i.e., like <code>div</code> with style <code>display: block</code>), others as inline elements (i.e., like <code>span</code> with style <code>display: inline</code>), and this changes over time.</p>

     <h3><a id='supportResultsTable'></a>1.1. Web Browser Support For The New HTML5 Semantic Elements</h3>

     <table>
      <caption>Web Browser Support For The New HTML5 Semantic Elements</caption>
      <thead>
       <tr>
        <th>Element</th>
        <th>Support Type</th>
        <th>IE Support</th>
        <th>ED Support</th>
        <th>FF Support</th>
        <th>SF Support</th>
        <th>CH Support</th>
        <th>OP Support</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td rowspan='3'><code>header</code>,<br />
         <code>footer</code>,<br />
         <code>section</code>,<br />
         <code>article</code>,<br />
         <code>aside</code></td>
        <td>As Block-Level Element</td>
        <td>IE9+</td>
        <td>ED12+</td>
        <td>FF4+</td>
        <td>SF5+</td>
        <td>CH5+</td>
        <td>OP11.10+</td>
       </tr>
       <tr>
        <td>As Inline Element</td>
        <td>-</td>
        <td>-</td>
        <td>FF1.5 - 3.6.28</td>
        <td>SF3.1 - 4.0.5</td>
        <td>CH2 - 4</td>
        <td>OP8 - 11.01</td>
       </tr>
       <tr>
        <td>No Support</td>
        <td>IE6 - 8</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>OP7.50 - 7.54u2</td>
       </tr>
       <tr>
        <td rowspan='3'><code>main</code></td>
        <td>As Block-Level Element</td>
        <td>-</td>
        <td>ED12+</td>
        <td>FF21+</td>
        <td>SF?</td>
        <td>CH26+</td>
        <td>OP15+</td>
       </tr>
       <tr>
        <td>As Inline Element</td>
        <td>IE9+</td>
        <td>-</td>
        <td>FF1.5 - 20</td>
        <td>SF3.1 - 5.1.7</td>
        <td>CH2 - 25</td>
        <td>OP8 - 12.17</td>
       </tr>
       <tr>
        <td>No Support</td>
        <td>IE6 - 8</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>OP7.50 - 7.54u2</td>
       </tr>
       <tr>
        <td rowspan='3'><code>nav</code></td>
        <td>As Block-Level Element</td>
        <td>IE9+</td>
        <td>ED12+</td>
        <td>FF4+</td>
        <td>SF5+</td>
        <td>CH4+</td>
        <td>OP11.10+</td>
       </tr>
       <tr>
        <td>As Inline Element</td>
        <td>-</td>
        <td>-</td>
        <td>FF1.5 - 3.6.28</td>
        <td>SF3.1 - 4.0.5</td>
        <td>CH2 - 3</td>
        <td>OP8 - 11.01</td>
       </tr>
       <tr>
        <td>No Support</td>
        <td>IE6 - 8</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>OP7.50 - 7.54u2</td>
       </tr>
      </tbody>
     </table>

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

     <h2><a id='supportTestsResults'></a>2. Web Browser Support For The New HTML5 Semantic Elements: Tests And Results</h2>

     <ul class='link-list'>
      <li><a href='/css/css_testing_ground/web_browser_support_new_semantic/web_browser_support_new_semantic.html'>Web Browser Support For The New HTML5 Semantic Elements: Tests And Results (learnwebcoding.com)</a>.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/html5/'>HTML5: A Vocabulary And Associated APIs For HTML And XHTML: W3C Recommendation 28 October 2014 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/html5-diff/'>HTML5 Differences From HTML4: W3C Working Group Note 9 December 2014 (w3.org)</a></li>
      <li><a href='/css/css_testing_ground/index.php'>CSS Testing Ground (learnwebcoding.com)</a></li>
     </ul>

    </section>";
