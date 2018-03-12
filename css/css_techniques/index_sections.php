<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_techniques/index_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/css/css_techniques/index.php.
 * Last reviewed/updated: 04 Oct 2016.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>A list of CSS techniques with their purpose, the significant selectors, styles, properties, and values used, and web browser support.</p>

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

     <h2><a id='techniques'></a>2. CSS Techniques</h2>

     <table>
      <caption>CSS Techniques</caption>
      <thead>
       <tr>
        <th>Technique</th>
        <th>Purpose</th>
        <th>Significant Selectors / Styles / Properties / Values Used</th>
        <th>Web Browser Support</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td><a href='/css/css_techniques/style_textboxes_textareas.php'>CSS Technique: Style Textboxes And Textareas (learnwebcoding.com)</a></td>
        <td>
         <ul>
          <li>Styles textboxes and textareas identically cross-browser.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li><code>input[type=&quot;text&quot;]</code>, <code>textarea</code>, <code>:-ms-input-placeholder</code>, <code>:-moz-placeholder</code>, <code>::-moz-placeholder</code>, <code>::-webkit-input-placeholder</code> selectors. <code>border-radius</code>, <code>opacity</code> properties.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>IE8+, ED12+, FF1.5+, SF3.1+, CH2+, OP9+. Support everything except possibly the older web browsers not supporting; 1.) the CSS <code>border-radius</code> property, 2.) the HTML <code>placeholder</code> attribute, and 3.) the CSS <code>*placeholder</code> selectors.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><a href='/css/css_techniques/style_selectboxes.php'>CSS Technique: Style Selectboxes (learnwebcoding.com)</a></td>
        <td>
         <ul>
          <li>Styles selectboxes nearly identically cross-browser.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>Technique 1: <code>select</code> selector. <code>overflow: hidden</code>, <code>background: url(&quot;dn_pnt_tri_8x4.gif&quot;) no-repeat 95%</code>, <code>width: 125%</code> styles. <code>border-radius</code> property.</li>
          <li>Technique 2: <code>select</code>, <code>::-ms-expand</code> selectors. <code>display: none</code>, <code>-moz-appearance: none</code>, <code>-webkit-appearance: none</code>, <code>appearance: none</code>, <code>background: url(&quot;dn_pnt_tri_8x4.gif&quot;) no-repeat 95%</code>, <code>padding: 4px 25px 4px 6px</code> styles. <code>border-radius</code> property.</li>
          <li>Technique 3: <code>select</code> selector. <code>border-radius</code> property.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>Technique 1: IE8+, ED12+, FF3+, SF4+, CH28+, OP15+.</li>
          <li>Technique 2: IE10+, ED12+, FF35+, SF3.1+, CH2+, OP15+.</li>
          <li>Technique 3: IE8+, ED12+, FF1.5+, SF4+, CH2+, OP10+.</li>
          <li>Techniques 1, 2, and 3: Support everything except possibly the older web browsers not supporting the CSS <code>border-radius</code> property.<br /></li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><a href='/css/css_techniques/style_checkboxes_radio_buttons.php'>CSS Technique: Style Checkboxes And Radio Buttons (learnwebcoding.com)</a></td>
        <td>
         <ul>
          <li>Styles checkboxes and radio buttons identically cross-browser.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>Technique 1: <code>background-color: #000</code> style.</li>
          <li>Technique 2: <code>color: transparent</code>, <code>color: inherit</code> styles.</li>
          <li>Techniques 1 and 2: <code>input[type=&quot;checkbox&quot;]</code>, <code>input[type=&quot;radio&quot;]</code>, <code>label input[type=&quot;checkbox&quot;] ~ span</code>, <code>label input[type=&quot;radio&quot;] ~ span</code>, <code>label input[type=&quot;checkbox&quot;]:checked ~ span</code>, <code>label input[type=&quot;radio&quot;]:checked ~ span</code> selectors.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>Techniques 1 and 2: IE9+, ED12+, FF4+, SF5+, CH13+, OP11.60+.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><a href='/css/css_techniques/reveal_fixed_footer_upon_scrolling.php'>CSS Technique: Reveal Fixed Web Page Footer Upon Scrolling (learnwebcoding.com)</a></td>
        <td>
         <ul>
          <li>Fixes footer to bottom of viewport.</li>
          <li>Positions main in front of footer.</li>
          <li>Reveals footer upon scrolling down web page.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>Technique 1: <code>header</code>, <code>main</code>, <code>footer</code> type selectors.</li>
          <li>Technique 2: <code>div</code> element class selectors.</li>
          <li>Techniques 1 and 2: <code>position: relative</code>, <code>z-index: 1</code>, <code>position: fixed</code>, <code>bottom: 0</code>, <code>left: 0</code>, <code>right: 0</code> styles.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>Technique 1: IE9+, ED12+, FF3+, SF3.1+, CH2+, OP9+.</li>
          <li>Technique 2: IE7+, ED12+, FF3+, SF3.1+, CH2+, OP9+.</li>
         </ul>
        </td>
       </tr>
      <tbody>
     </table>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/css/css_techniques/style_textboxes_textareas.php'>CSS Technique: Style Textboxes And Textareas (learnwebcoding.com)</a></li>
      <li><a href='/css/css_techniques/style_selectboxes.php'>CSS Technique: Style Selectboxes (learnwebcoding.com)</a></li>
      <li><a href='/css/css_techniques/style_checkboxes_radio_buttons.php'>CSS Technique: Style Checkboxes And Radio Buttons (learnwebcoding.com)</a></li>
      <li><a href='/css/css_techniques/reveal_fixed_footer_upon_scrolling.php'>CSS Technique: Reveal Fixed Web Page Footer Upon Scrolling (learnwebcoding.com)</a></li>
     </ul>

    </section>";
