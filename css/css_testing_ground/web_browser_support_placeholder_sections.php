<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_testing_ground/web_browser_support_placeholder_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/css/css_testing_ground/web_browser_support_placeholder.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

<!-- Start same content block 1 in style_textboxes_textareas.php. -->

     <p>Concerning HTML, textboxes use the <code>input</code> element with the <code>type=&quot;text&quot;</code> attribute and textareas use the <code>textarea</code> element. The textbox <code>input</code> element, the textbox <code>input</code> element with the <code>type=&quot;text&quot;</code> attribute, and the textarea <code>textarea</code> element are referred to as the textbox/textarea elements. Concerning CSS, the selectors for textboxes are the <code>input</code> type selector and, with more specificity, the <code>input[type=&quot;text&quot;]</code> attribute selector, and the selector for textareas is the <code>textarea</code> type selector. The textbox <code>input</code> selector, the textbox <code>input[type=&quot;text&quot;]</code> selector, and the textarea <code>textarea</code> selector are referred to as the textbox/textarea selectors.</p>

<!-- End same content block 1 in style_textboxes_textareas.php. -->

<!-- Start same content block 2 in style_textboxes_textareas.php. -->

     <h3><a id='htmlPlaceholderAttribute'></a>1.1. The HTML <code>placeholder</code> Attribute</h3>

     <p>The HTML <code>placeholder</code> attribute is a commonly used optional attribute for textboxes and textareas. The textbox/textarea <code>placeholder</code> attribute value is displayed in the textbox/textarea as temporary placeholder text until, depending upon the web browser, the textbox/textarea receive focus or text is entered into the textbox/textarea.</p>

     <h4><a id='htmlPlaceholderAttributeSupportResultsTable'></a>1.1.1. Web Browser Support For The HTML <code>placeholder</code> Attribute On Textboxes And Textareas</h4>

     <table>
      <caption>Web Browser Support For The HTML <code>placeholder</code> Attribute On Textboxes And Textareas</caption>
      <thead>
       <tr>
        <th>Textbox / Textarea Element</th>
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
        <td>
         <ul>
          <li>Textbox <code>input</code> element.</li>
          <li>Textbox <code>input</code> element with <code>type=&quot;text&quot;</code> attribute.</li>
         </ul>
        </td>
        <td>IE10+</td>
        <td>ED12+</td>
        <td>FF4+</td>
        <td>SF3.1+</td>
        <td>CH2+</td>
        <td>OP11+</td>
       </tr>
       <tr>
        <td>Textarea <code>textarea</code> element</td>
        <td>IE10+</td>
        <td>ED12+</td>
        <td>FF4+</td>
        <td>SF5+</td>
        <td>CH4+</td>
        <td>OP11.50+</td>
       </tr>
      </tbody>
     </table>

<!-- End same content block 2 in style_textboxes_textareas.php. -->

<!-- Start same content block 3 in style_textboxes_textareas.php. -->

     <h3><a id='stylingPlaceholderText'></a>1.2. The CSS Selectors For Styling The Placeholder Text</h3>

     <p>The following CSS selectors can be used to style the placeholder text:</p>

      <ul>
       <li>The previously described textbox/textarea selectors (<code>input</code>, <code>input[type=&quot;text&quot;]</code>, and <code>textarea</code>).</li>
       <li>The textbox <code>input[placeholder]</code> attribute selector and the textarea <code>textarea[placeholder]</code> attribute selector. The textbox <code>input[placeholder]</code> selector and the textarea <code>textarea[placeholder]</code> selector are referred to as the textbox/textarea placeholder attribute selectors. The textbox/textarea placeholder attribute selectors are typically not used to style the placeholder text.</li>
       <li>The web browser vendor prefix pseudo-class selectors (<code>:-ms-input-placeholder</code> and <code>:-moz-placeholder</code>), the web browser vendor prefix pseudo-element selectors (<code>::-ms-input-placeholder</code>, <code>::-moz-placeholder</code>, and <code>::-webkit-input-placeholder</code>), and the W3C proposed web browser vendor independent pseudo-element selector (<code>::placeholder</code>). These selectors are referred to as the CSS <code>*placeholder</code> selectors.</li>
      </ul>

     <p>The styles of the CSS <code>*placeholder</code> selectors override the styles of the textbox/textarea selectors and the textbox/textarea placeholder attribute selectors.</p>

     <h3><a id='cssPlaceholderSelectors'></a>1.3. The CSS <code>*placeholder</code> Selectors</h3>

     <p>The CSS <code>*placeholder</code> selectors can be used to style the placeholder text in the following ways:</p>

     <ul>
      <li>With more specificity, appended to the textbox/textarea selectors. For example, the <code>::-ms-input-placeholder</code> selector appended to the textbox <code>input</code> selector:
<pre>
input::-moz-placeholder {
  opacity: 0.54;
}
</pre>
      </li>
      <li>With less specificity, as standalone selectors. For example, the <code>::-webkit-input-placeholder</code> selector as a standalone selector:
<pre>
::-webkit-input-placeholder {
  color: rgb(169,169,169);
}
</pre>
       <div class='note normal'>The <code>*placeholder</code> selectors as standalone selectors are equivalent to the <code>*placeholder</code> selectors appended to the universal <code>*</code> selector. For example, the <code>::-webkit-input-placeholder</code> selector is equivalent to the <code>*::-webkit-input-placeholder</code> selector.</div>
      </li>
     </ul>

     <h4><a id='cssPlaceholderSelectorsSupportResultsTable'></a>1.3.1. Web Browser Support For The CSS <code>*placeholder</code> Selectors On Textboxes And Textareas</h4>

     <table>
      <caption>Web Browser Support For The CSS <code>*placeholder</code> Selectors On Textboxes And Textareas</caption>
      <thead>
       <tr>
        <th>How Used (Appended To / As Standalone)</th>
        <th>CSS <code>*placeholder</code> Selector</th>
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
        <td rowspan='6'>
         <ul>
          <li>Appended to textbox <code>input</code> selector.</li>
          <li>Appended to textbox <code>input[type=&quot;text&quot;]</code> selector.</li>
          <li>Standalone on textbox <code>input</code> element.</li>
          <li>Standalone on textbox <code>input</code> element with <code>type=&quot;text&quot;</code> attribute.</li>
         </ul>
        </td>
        <td><code>:-ms-input-placeholder</code></td>
        <td>IE10+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>::-ms-input-placeholder</code></td>
        <td>-</td>
        <td>ED12+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>:-moz-placeholder</code></td>
        <td>-</td>
        <td>-</td>
        <td>FF4 - 18</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>::-moz-placeholder</code></td>
        <td>-</td>
        <td>-</td>
        <td>FF19+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>::-webkit-input-placeholder</code></td>
        <td>-</td>
        <td>ED12+</td>
        <td>-</td>
        <td>SF4+</td>
        <td>CH2+</td>
        <td>OP15+</td>
       </tr>
       <tr>
        <td><code>::placeholder</code></td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td rowspan='6'>
         <ul>
          <li>Appended to textarea <code>textarea</code> selector.</li>
          <li>Standalone on textarea <code>textarea</code> element.</li>
         </ul>
        </td>
        <td><code>:-ms-input-placeholder</code></td>
        <td>IE10+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>::-ms-input-placeholder</code></td>
        <td>-</td>
        <td>ED12+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>:-moz-placeholder</code></td>
        <td>-</td>
        <td>-</td>
        <td>FF4 - 18</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>::-moz-placeholder</code></td>
        <td>-</td>
        <td>-</td>
        <td>FF19+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>::-webkit-input-placeholder</code></td>
        <td>-</td>
        <td>ED12+</td>
        <td>-</td>
        <td>SF5+</td>
        <td>CH4+</td>
        <td>OP15+</td>
       </tr>
       <tr>
        <td><code>::placeholder</code></td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
      </tbody>
     </table>

<!-- End same content block 3 in style_textboxes_textareas.php. -->

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

     <h2><a id='placeholderAttributeSupportTestsResults'></a>2. Web Browser Support For The HTML <code>placeholder</code> Attribute On Textboxes And Textareas: Tests And Results</h2>

     <ul class='link-list'>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/placeholder_attribute_on_input_and_textarea_elements.html'>Web Browser Support For The HTML <code>placeholder</code> Attribute On The Textbox <code>input</code> And Textarea <code>textarea</code> Elements: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/placeholder_attribute_on_input_element_with_type_text_attribute.html'>Web Browser Support For The HTML <code>placeholder</code> Attribute On The Textbox <code>input</code> Element With The <code>type=&quot;text&quot;</code> Attribute: Test And Results (learnwebcoding.com)</a>.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='msPseudoClassSupportTestsResults'></a>3. Web Browser Support For The CSS <code>:-ms-input-placeholder</code> Selector On Textboxes And Textareas: Tests And Results</h2>

     <ul class='link-list'>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/ms_input_placeholder_pseudo_class_appended_to_input_and_textarea_selectors.html'>Web Browser Support For The CSS <code>:-ms-input-placeholder</code> Selector Appended To The Textbox <code>input</code> And Textarea <code>textarea</code> Selectors: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/ms_input_placeholder_pseudo_class_appended_to_input_type_text_selector.html'>Web Browser Support For The CSS <code>:-ms-input-placeholder</code> Selector Appended To The Textbox <code>input[type=&quot;text&quot;]</code> Selector: Test And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/ms_input_placeholder_pseudo_class_standalone_on_input_and_textarea_elements.html'>Web Browser Support For The CSS <code>:-ms-input-placeholder</code> Selector As A Standalone Selector On The Textbox <code>input</code> And Textarea <code>textarea</code> Elements: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/ms_input_placeholder_pseudo_class_standalone_on_input_element_with_type_text_attribute.html'>Web Browser Support For The CSS <code>:-ms-input-placeholder</code> Selector As A Standalone Selector On The Textbox <code>input</code> Element With The <code>type=&quot;text&quot;</code> Attribute: Test And Results (learnwebcoding.com)</a>.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='msPseudoElementSupportTestsResults'></a>4. Web Browser Support For The CSS <code>::-ms-input-placeholder</code> Selector On Textboxes And Textareas: Tests And Results</h2>

     <ul class='link-list'>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/ms_input_placeholder_pseudo_element_appended_to_input_and_textarea_selectors.html'>Web Browser Support For The CSS <code>::-ms-input-placeholder</code> Selector Appended To The Textbox <code>input</code> And Textarea <code>textarea</code> Selectors: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/ms_input_placeholder_pseudo_element_appended_to_input_type_text_selector.html'>Web Browser Support For The CSS <code>::-ms-input-placeholder</code> Selector Appended To The Textbox <code>input[type=&quot;text&quot;]</code> Selector: Test And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/ms_input_placeholder_pseudo_element_standalone_on_input_and_textarea_elements.html'>Web Browser Support For The CSS <code>::-ms-input-placeholder</code> Selector As A Standalone Selector On The Textbox <code>input</code> And Textarea <code>textarea</code> Elements: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/ms_input_placeholder_pseudo_element_standalone_on_input_element_with_type_text_attribute.html'>Web Browser Support For The CSS <code>::-ms-input-placeholder</code> Selector As A Standalone Selector On The Textbox <code>input</code> Element With The <code>type=&quot;text&quot;</code> Attribute: Test And Results (learnwebcoding.com)</a>.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='mozPseudoClassSupportTestsResults'></a>5. Web Browser Support For The CSS <code>:-moz-placeholder</code> Selector On Textboxes And Textareas: Tests And Results</h2>

     <ul class='link-list'>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/moz_placeholder_pseudo_class_appended_to_input_and_textarea_selectors.html'>Web Browser Support For The CSS <code>:-moz-placeholder</code> Selector Appended To The Textbox <code>input</code> And Textarea <code>textarea</code> Selectors: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/moz_placeholder_pseudo_class_appended_to_input_type_text_selector.html'>Web Browser Support For The CSS <code>:-moz-placeholder</code> Selector Appended To The Textbox <code>input[type=&quot;text&quot;]</code> Selector: Test And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/moz_placeholder_pseudo_class_standalone_on_input_and_textarea_elements.html'>Web Browser Support For The CSS <code>:-moz-placeholder</code> Selector As A Standalone Selector On The Textbox <code>input</code> And Textarea <code>textarea</code> Elements: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/moz_placeholder_pseudo_class_standalone_on_input_element_with_type_text_attribute.html'>Web Browser Support For The CSS <code>:-moz-placeholder</code> Selector As A Standalone Selector On The Textbox <code>input</code> Element With The <code>type=&quot;text&quot;</code> Attribute: Test And Results (learnwebcoding.com)</a>.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='mozPseudoElementSupportTestsResults'></a>6. Web Browser Support For The CSS <code>::-moz-placeholder</code> Selector On Textboxes And Textareas: Tests And Results</h2>

     <ul class='link-list'>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/moz_placeholder_pseudo_element_appended_to_input_and_textarea_selectors.html'>Web Browser Support For The CSS <code>::-moz-placeholder</code> Selector Appended To The Textbox <code>input</code> And Textarea <code>textarea</code> Selectors: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/moz_placeholder_pseudo_element_appended_to_input_type_text_selector.html'>Web Browser Support For The CSS <code>::-moz-placeholder</code> Selector Appended To The Textbox <code>input[type=&quot;text&quot;]</code> Selector: Test And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/moz_placeholder_pseudo_element_standalone_on_input_and_textarea_elements.html'>Web Browser Support For The CSS <code>::-moz-placeholder</code> Selector As A Standalone Selector On The Textbox <code>input</code> And Textarea <code>textarea</code> Elements: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/moz_placeholder_pseudo_element_standalone_on_input_element_with_type_text_attribute.html'>Web Browser Support For The CSS <code>::-moz-placeholder</code> Selector As A Standalone Selector On The Textbox <code>input</code> Element With The <code>type=&quot;text&quot;</code> Attribute: Test And Results (learnwebcoding.com)</a>.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='webkitSupportTestsResults'></a>7. Web Browser Support For The CSS <code>::-webkit-input-placeholder</code> Selector On Textboxes And Textareas: Tests And Results</h2>

     <ul class='link-list'>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/webkit_input_placeholder_appended_to_input_and_textarea_selectors.html'>Web Browser Support For The CSS <code>::-webkit-input-placeholder</code> Selector Appended To The Textbox <code>input</code> And Textarea <code>textarea</code> Selectors: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/webkit_input_placeholder_appended_to_input_type_text_selector.html'>Web Browser Support For The CSS <code>::-webkit-input-placeholder</code> Selector Appended To The Textbox <code>input[type=&quot;text&quot;]</code> Selector: Test And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/webkit_input_placeholder_standalone_on_input_and_textarea_elements.html'>Web Browser Support For The CSS <code>::-webkit-input-placeholder</code> Selector As A Standalone Selector On The Textbox <code>input</code> And Textarea <code>textarea</code> Elements: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/webkit_input_placeholder_standalone_on_input_element_with_type_text_attribute.html'>Web Browser Support For The CSS <code>::-webkit-input-placeholder</code> Selector As A Standalone Selector On The Textbox <code>input</code> Element With The <code>type=&quot;text&quot;</code> Attribute: Test And Results (learnwebcoding.com)</a>.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='placeholderSupportTestsResults'></a>8. Web Browser Support For The CSS <code>::placeholder</code> Selector On Textboxes And Textareas: Tests And Results</h2>

     <ul class='link-list'>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/placeholder_appended_to_input_and_textarea_selectors.html'>Web Browser Support For The CSS <code>::placeholder</code> Selector Appended To The Textbox <code>input</code> And Textarea <code>textarea</code> Selectors: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/placeholder_appended_to_input_type_text_selector.html'>Web Browser Support For The CSS <code>::placeholder</code> Selector Appended To The Textbox <code>input[type=&quot;text&quot;]</code> Selector: Test And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/placeholder_standalone_on_input_and_textarea_elements.html'>Web Browser Support For The CSS <code>::placeholder</code> Selector As A Standalone Selector On The Textbox <code>input</code> And Textarea <code>textarea</code> Elements: Tests And Results (learnwebcoding.com)</a>.</li>
      <li><a href='/css/css_testing_ground/web_browser_support_placeholder/placeholder_standalone_on_input_element_with_type_text_attribute.html'>Web Browser Support For The CSS <code>::placeholder</code> Selector As A Standalone Selector On The Textbox <code>input</code> Element With The <code>type=&quot;text&quot;</code> Attribute: Test And Results (learnwebcoding.com)</a>.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>9. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='https://msdn.microsoft.com/en-us/library/hh772745(v=vs.85).aspx'>:-ms-input-placeholder pseudo-class (msdn.microsoft.com)</a></li>
      <li><a href='https://developer.mozilla.org/en-US/docs/Web/CSS/:-moz-placeholder'>:-moz-placeholder (developer.mozilla.org)</a></li>
      <li><a href='https://developer.mozilla.org/en-US/docs/Web/CSS/::-moz-placeholder'>::-moz-placeholder (developer.mozilla.org)</a></li>
      <li><a href='http://www.w3.org/TR/css-pseudo-4/'>CSS Pseudo-Elements Module Level 4: W3C Working Draft, 7 June 2016 (w3.org)</a></li>
      <li><a href='/css/css_testing_ground/index.php'>CSS Testing Ground (learnwebcoding.com)</a></li>
     </ul>

    </section>";
