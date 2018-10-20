<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/how_to_override_unwanted_css_styles_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/css/how_to_override_unwanted_css_styles.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>One technique for editing existing CSS styles is to edit the CSS source files directly. Another technique for editing existing CSS styles is to leave the CSS source files alone/intact, and to load additional CSS files, after the CSS source files, that override the existing CSS styles. The latter technique requires knowing how to override unwanted CSS styles.</p>

    </section>
    <hr />
    <section>

     <h2><a id='override'></a>2. How To Override Unwanted CSS Styles</h2>

     <table>
      <caption>How To Override Unwanted CSS Styles</caption>
      <thead>
       <tr>
        <th>Unwanted CSS Style Property</th>
        <th>Override Unwanted CSS Style Property With Value</th>
        <th>Note</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td><code>background-color</code></td>
        <td><code>transparent</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>border</code></td>
        <td><code>0</code></td>
        <td>
         <ul>
          <li>No border.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>border-color</code></td>
        <td><code>currentColor</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
          <li><code>currentColor</code> is computed value of <code>color</code> property.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>border-radius</code></td>
        <td><code>0</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>border-style</code></td>
        <td><code>none</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
          <li>No border. Sets <code>border-width: 0</code>.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>border-width</code></td>
        <td><code>medium</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>border-width</code></td>
        <td><code>0</code></td>
        <td>
         <ul>
          <li>No border.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>box-shadow</code></td>
        <td><code>none</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>box-sizing</code></td>
        <td><code>content-box</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>font-size</code></td>
        <td><code>medium</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>font-style</code></td>
        <td><code>normal</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>font-weight</code></td>
        <td><code>normal</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>line-height</code></td>
        <td><code>normal</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>margin</code></td>
        <td><code>0</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
<!--
min-height: 0 (works for overriding in IE11, FF3805, and CH43)
min-height: auto (works for overriding in IE11 and FF3805, not CH43)
min-height: initial (works for overriding in FF3805 and CH43, not IE11)
min-height: none (does not work for overriding in IE11, FF3805, and CH43)
min-height: unset (works for overriding in FF3805 and CH43, not IE11)
-->
       <tr>
        <td><code>min-height</code></td>
        <td><code>0</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>min-width</code></td>
        <td><code>0</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>outline</code></td>
        <td><code>0</code></td>
        <td>
         <ul>
          <li>No outline.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>outline-color</code></td>
        <td><code>invert</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>outline-style</code></td>
        <td><code>none</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
          <li>No outline. Sets <code>outline-width: 0</code>.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>outline-width</code></td>
        <td><code>medium</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>outline-width</code></td>
        <td><code>0</code></td>
        <td>
         <ul>
          <li>No outline.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>padding</code></td>
        <td><code>0</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td><code>vertical-align</code></td>
        <td><code>baseline</code></td>
        <td>
         <ul>
          <li>W3C recommended initial value.</li>
         </ul>
        </td>
       </tr>
      </tbody>
     </table>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/CSS2/'>Cascading Style Sheets Level 2 Revision 1 (CSS 2.1) Specification: W3C Recommendation 07 June 2011, Edited In Place 12 April 2016 To Point To New Work (w3.org)</a> (Includes <code>min-height</code>, <code>min-width</code>, <code>line-height</code>, <code>margin</code>, <code>padding</code>, and <code>vertical-align</code>.)</li>
      <li><a href='http://www.w3.org/TR/css-ui-3/'>CSS Basic User Interface Module Level 3 (CSS3 UI): W3C Candidate Recommendation, 7 July 2015 (w3.org)</a> (Includes <code>box-sizing</code>, <code>outline</code>, <code>outline-width</code>, <code>outline-style</code>, <code>outline-color</code>, <code>outline-offset</code>, <code>resize</code>, <code>text-overflow</code>, and <code>cursor</code>.)</li>
      <li><a href='http://www.w3.org/TR/css3-background/'>CSS Backgrounds And Borders Module Level 3: W3C Candidate Recommendation 9 September 2014 (w3.org)</a> (Includes <code>background-color</code>, <code>background-image</code>, <code>background-repeat</code>, <code>background-attachment</code>, <code>background-position</code>, <code>background-clip</code>, <code>background-origin</code>, <code>background-size</code>, <code>background</code>, <code>border-color</code>, <code>border-style</code>, <code>border-width</code>, <code>border</code>, <code>border-radius</code>, <code>border-image</code>, and <code>box-shadow</code>.)</li>
      <li><a href='http://www.w3.org/TR/css-fonts-3/'>CSS Fonts Module Level 3: W3C Candidate Recommendation 3 October 2013 (w3.org)</a> (Includes <code>font-family</code>, <code>font-weight</code>, <code>font-stretch</code>, <code>font-style</code>, <code>font-size</code>, <code>font-size-adjust</code>, <code>font</code>, and <code>font-synthesis</code>.)</li>
     </ul>

    </section>";
