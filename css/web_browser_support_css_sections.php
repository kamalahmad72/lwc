<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/web_browser_support_css_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/css/web_browser_support_css.php.
 * Last reviewed/updated: 26 Oct 2016.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>The web browser support for a list of CSS selectors, styles, properties, values, and units.</p>

     <h3><a id='abbreviations'></a>1.1. Abbreviations</h3>

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

     <h2><a id='support'></a>2. Web Browser Support For CSS Selectors, Styles, Properties, Values, And Units</h2>

     <table>
      <caption>Web Browser Support For CSS Selectors, Styles, Properties, Values, And Units</caption>
      <thead>
       <tr>
        <th>Selector / Style / Property / Value / Unit</th>
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
        <td><code>background: linear-gradient()</code> style</td>
        <td>IE10+</td>
        <td>ED12+</td>
        <td>FF16+</td>
        <td>Not SF5.1.7-</td>
        <td>CH26+</td>
        <td>OP12.10+</td>
       </tr>
       <tr>
        <td><code>border-radius</code> property</td>
        <td>IE9+</td>
        <td>ED12+</td>
        <td>FF4+</td>
        <td>SF5+</td>
        <td>CH4+</td>
        <td>OP10.50+</td>
       </tr>
       <tr>
        <td><code>box-shadow</code> property</td>
        <td>IE9+</td>
        <td>ED12+</td>
        <td>FF4+</td>
        <td>SF5.1+</td>
        <td>CH10+</td>
        <td>OP10.50+</td>
       </tr>
       <tr>
        <td><code>input[type=&quot;text&quot;]:-moz-placeholder</code> selector</td>
        <td>-</td>
        <td>-</td>
        <td>FF4 - 18</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>input[type=&quot;text&quot;]::-moz-placeholder</code> selector</td>
        <td>-</td>
        <td>-</td>
        <td>FF19+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>input[type=&quot;text&quot;]:-ms-input-placeholder</code> selector</td>
        <td>IE10+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>input[type=&quot;text&quot;]::placeholder</code> selector</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>input[type=&quot;text&quot;]::-webkit-input-placeholder</code> selector</td>
        <td>-</td>
        <td>ED12+</td>
        <td>-</td>
        <td>SF4+</td>
        <td>CH2+</td>
        <td>OP15+</td>
       </tr>
       <tr>
        <td><code>rem</code> unit</td>
        <td>IE9+</td>
        <td>ED12+</td>
        <td>FF3.6+</td>
        <td>SF5+</td>
        <td>CH3+</td>
        <td>OP11.60+</td>
       </tr>
       <tr>
        <td><code>text-shadow</code> property</td>
        <td>IE10+</td>
        <td>ED12+</td>
        <td>FF3.5+</td>
        <td>SF3.1+</td>
        <td>CH2+</td>
        <td>OP10+</td>
       </tr>
       <tr>
        <td><code>textarea:-moz-placeholder</code> selector</td>
        <td>-</td>
        <td>-</td>
        <td>FF4 - 18</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>textarea::-moz-placeholder</code> selector</td>
        <td>-</td>
        <td>-</td>
        <td>FF19+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>textarea:-ms-input-placeholder</code> selector</td>
        <td>IE10+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>textarea::placeholder</code> selector</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>textarea::-webkit-input-placeholder</code> selector</td>
        <td>-</td>
        <td>ED12+</td>
        <td>-</td>
        <td>SF5+</td>
        <td>CH4+</td>
        <td>OP15+</td>
       </tr>
       <tr>
        <td><code>vh</code> unit</td>
        <td>IE9+</td>
        <td>ED12+</td>
        <td>FF19+</td>
        <td>Not SF5.1.7-</td>
        <td>CH19+</td>
        <td>OP15+</td>
       </tr>
       <tr>
        <td><code>vw</code> unit</td>
        <td>IE9+</td>
        <td>ED12+</td>
        <td>FF19+</td>
        <td>Not SF5.1.7-</td>
        <td>CH19+</td>
        <td>OP15+</td>
       </tr>
      </tbody>
     </table>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='https://msdn.microsoft.com/en-us/library/hh772745(v=vs.85).aspx'>:-ms-input-placeholder pseudo-class (msdn.microsoft.com)</a></li>
      <li><a href='https://developer.mozilla.org/en-US/docs/Web/CSS/:-moz-placeholder'>:-moz-placeholder (developer.mozilla.org)</a></li>
      <li><a href='https://developer.mozilla.org/en-US/docs/Web/CSS/::-moz-placeholder'>::-moz-placeholder (developer.mozilla.org)</a></li>
      <li><a href='http://www.w3.org/TR/css-pseudo-4/'>CSS Pseudo-Elements Module Level 4: W3C First Public Working Draft, 15 January 2015 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/CSS2/'>Cascading Style Sheets Level 2 Revision 1 (CSS 2.1) Specification: W3C Recommendation 07 June 2011, Edited In Place 17 December 2014 To Point To New Work (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/css3-selectors/'>Selectors Level 3: W3C Recommendation 29 September 2011 (w3.org)</a></li>
     </ul>

    </section>";
