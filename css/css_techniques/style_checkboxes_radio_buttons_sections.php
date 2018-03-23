<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_techniques/style_checkboxes_radio_buttons_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/css/css_techniques/style_checkboxes_radio_buttons.php.
 * Last reviewed/updated: 22 Mar 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Checkboxes and radio buttons present style conscious web developers with two primary problems. First, web browsers differ with respect to how they style checkboxes and radio buttons. Second, certain properties of the checkboxes and the radio buttons, themselves, cannot be styled with CSS. As a result, using common CSS styles, it is impossible to style checkboxes and radio buttons identically cross-browser. This has prompted style conscious web developers to develop a clever CSS based technique/workaround for creating checkboxes and radio buttons that are styled identically cross-browser.</p>

     <p>In short, this technique:</p>

     <ol>
      <li>Creates traditional checkboxes/radio buttons using the HTML <code>input</code> element with the <code>type=&quot;checkbox&quot;</code> or <code>type=&quot;radio&quot;</code> attribute. In this example, these checkboxes/radio buttons are referred to as HTML checkboxes/radio buttons.</li>
      <li>Associates a label with the HTML checkboxes/radio buttons using the HTML <code>label</code> element. The label extends the clickable area of the HTML checkbox/radio button to include the HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content.</li>
      <li>Hides the HTML checkboxes/radio buttons using the CSS <code>display:none</code> style. Although hidden, the web browser still keeps track of the state (i.e., the checked or unchecked status) of the HTML checkboxes/radio buttons, and clicks on the HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content still toggles their state.</li>
      <li>Creates checkbox/radio button objects that are styled with CSS to look and behave identically cross-browser. In this example, these checkbox/radio button objects are referred to as CSS checkboxes/radio buttons.</li>
      <li>Detects default checked/pre-checked HTML checkbox/radio buttons, and detects clicks on HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content, using the CSS <code>:checked</code> pseudo-class selector.</li>
      <li>Responds to default checked/pre-checked HTML checkbox/radio buttons, and responds to clicks on the HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content, by styling the CSS checkboxes/radio buttons in some way to indicate their state. The first technique toggles the background color of the CSS checkboxes/radio buttons. The second technique toggles the color of the check mark (&#10003;) and black circle (&#9679;) HTML character numeric entities inside the CSS checkboxes/radio buttons, respectively.</li>
     </ol>

     <p>The most popular methods for creating the CSS checkboxes/radio buttons use image sprites and/or the CSS <code>:before</code> pseudo-element. In this example: 1.) an image sprite is not required; instead, CSS with or without HTML character numeric entities is used; and 2.) the CSS checkboxes/radio buttons can be placed both before and/or after the HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content without requiring any additional CSS code, which is impossible using the CSS <code>:before</code> pseudo-element. Lastly, this example associates the labels with the HTML checkboxes/radio buttons implicitly (i.e., by nesting), not explicitly (i.e., by the <code>id</code> and <code>for</code> attributes), which reduces the amount of HTML code.</p>

     <h3><a id='support'></a>1.1. Web Browser Support</h3>

     <p>Web browser support: IE9+, ED12+, FF4+, SF5+, CH13+, OP11.60+.</p>

     <div class='note normal'>The web browser support for technique 1 toggle background color checkbox/radio button and technique 2 toggle color HTML character numeric entity is the same.</div>

     <h3><a id='try'></a>1.2. How To Try These Examples On Your Computer</h3>

     <p>To try these examples on your computer:</p>

     <ol>
      <li>Download the following source files to the same drive or folder on your computer:
       <ul class='link-list'>
        <li><a href='/css/css_techniques/style_checkboxes_radio_buttons/style_checkboxes_radio_buttons_technique_1.html'><span class='filename'>style_checkboxes_radio_buttons_technique_1.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/style_checkboxes_radio_buttons/style_checkboxes_radio_buttons_technique_1.css'><span class='filename'>style_checkboxes_radio_buttons_technique_1.css</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/style_checkboxes_radio_buttons/style_checkboxes_radio_buttons_technique_2.html'><span class='filename'>style_checkboxes_radio_buttons_technique_2.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/style_checkboxes_radio_buttons/style_checkboxes_radio_buttons_technique_2.css'><span class='filename'>style_checkboxes_radio_buttons_technique_2.css</span> (learnwebcoding.com)</a></li>
       </ul>
      </li>
      <li>Double click the <span class='filename'>.html</span> files.</li>
     </ol>

     <h3><a id='abbreviations'></a>1.3. Abbreviations</h3>

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

     <h2><a id='tech1'></a>2. Technique 1 Toggle Background Color Checkbox/Radio Button</h2>

     <p>Technique 1 toggle background color checkbox/radio button toggles the background color of the CSS checkboxes/radio buttons.</p>

     <h3><a id='tech1Demo'></a>2.1. Technique 1 Toggle Background Color Checkbox/Radio Button Demonstration And CodePen</h3>

     <ul>
      <li>Demonstration: <a href='/css/css_techniques/style_checkboxes_radio_buttons/style_checkboxes_radio_buttons_technique_1.html'>CSS Technique: Style Checkboxes And Radio Buttons Technique 1 Toggle Background Color Checkbox/Radio Button (learnwebcoding.com)</a>.</li>
      <li>CodePen: <a href='https://codepen.io/learnwebcoding/pen/jqQyGX'>CSS Technique: Style Checkboxes And Radio Buttons Technique 1 Toggle Background Color Checkbox/Radio Button (codepen.io/learnwebcoding/)</a>.</li>
     </ul>

     <h3><a id='tech1Html'></a>2.2. Technique 1 Toggle Background Color Checkbox/Radio Button HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/css/css_techniques/style_checkboxes_radio_buttons/style_checkboxes_radio_buttons_technique_1.html'><span class='filename'>style_checkboxes_radio_buttons_technique_1.html</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;CSS Technique: Style Checkboxes And Radio Buttons Technique 1 Toggle Background Color Checkbox/Radio Button&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;style_checkboxes_radio_buttons_technique_1.css&quot; /&gt;
7      &lt;/head&gt;
8      &lt;body&gt;
9       &lt;h2&gt;CSS Technique: Style Checkboxes And Radio Buttons Technique 1 Toggle Background Color Checkbox/Radio Button&lt;/h2&gt;
10      &lt;p&gt;
11       &lt;label&gt;&lt;input type=&quot;checkbox&quot; name=&quot;unique to indicate checkbox1, if checked, when form submitted&quot; /&gt;&lt;span&gt;&lt;/span&gt; Checkbox&lt;/label&gt;&lt;br /&gt;
12       &lt;label&gt;&lt;input type=&quot;checkbox&quot; name=&quot;unique to indicate checkbox2, if checked, when form submitted&quot; checked=&quot;checked&quot; /&gt;&lt;span&gt;&lt;/span&gt; Checkbox default checked/pre-checked&lt;/label&gt;&lt;br /&gt;
13       &lt;label&gt;&lt;input type=&quot;checkbox&quot; name=&quot;unique to indicate checkbox3, if checked, when form submitted&quot; /&gt;Checkbox &lt;span&gt;&lt;/span&gt;&lt;/label&gt;
14      &lt;/p&gt;
15      &lt;p&gt;
16       &lt;label&gt;&lt;input type=&quot;radio&quot; name=&quot;creates radio button group and indicates radio button group1 when form submitted&quot; value=&quot;unique to indicate value1, if checked, when form submitted&quot; /&gt;&lt;span&gt;&lt;/span&gt; Radio button&lt;/label&gt;&lt;br /&gt;
17       &lt;label&gt;&lt;input type=&quot;radio&quot; name=&quot;creates radio button group and indicates radio button group1 when form submitted&quot; value=&quot;unique to indicate value2, if checked, when form submitted&quot; checked=&quot;checked&quot; /&gt;&lt;span&gt;&lt;/span&gt; Radio button default checked/pre-checked&lt;/label&gt;&lt;br /&gt;
18       &lt;label&gt;&lt;input type=&quot;radio&quot; name=&quot;creates radio button group and indicates radio button group1 when form submitted&quot; value=&quot;unique to indicate value3, if checked, when form submitted&quot; /&gt;Radio button &lt;span&gt;&lt;/span&gt;&lt;/label&gt;
19      &lt;/p&gt;
20      &lt;p&gt;Web browser support: IE9+, ED12+, FF4+, SF5+, CH13+, OP11.60+.&lt;/p&gt;
21     &lt;/body&gt;
22    &lt;/html&gt;
</pre>

     <p>Technique 1 toggle background color checkbox/radio button HTML source code notes:</p>

     <ul>
      <li>Checkboxes use the <code>input</code> element with the <code>type=&quot;checkbox&quot;</code> attribute, and the <code>label</code> and <code>span</code> elements. The checkbox HTML is nested in <code>&lt;label&gt;&lt;/label&gt;</code> tags. The label extends the clickable area of the checkbox to include the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. The <code>input</code> element with the <code>type=&quot;checkbox&quot;</code> attribute is referred to as an HTML checkbox. The <code>&lt;span&gt;&lt;/span&gt;</code> code is styled with CSS to become what is referred to as a CSS checkbox. To place the CSS checkbox before and/or after the <code>&lt;label&gt;&lt;/label&gt;</code> tag content, nest <code>&lt;span&gt;&lt;/span&gt;</code> in <code>&lt;label&gt;&lt;/label&gt;</code> before and/or after the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. Nesting <code>&lt;span&gt;&lt;/span&gt;</code> in <code>&lt;label&gt;&lt;/label&gt;</code> includes the CSS checkbox as part of the clickable <code>&lt;label&gt;&lt;/label&gt;</code> tag content. If the checkbox data is to be sent when a form is submitted, use the <code>name</code> attribute with or without the <code>value</code> attribute. To default check/pre-check a checkbox, use the <code>checked=&quot;checked&quot;</code> attribute.</li>
      <li>Radio buttons use the <code>input</code> element with the <code>type=&quot;radio&quot;</code> and <code>name</code> attributes, and the <code>label</code> and <code>span</code> elements. Radio buttons with the same <code>name</code> attribute value form a radio button group. The radio button HTML is nested in <code>&lt;label&gt;&lt;/label&gt;</code> tags. The label extends the clickable area of the radio button to include the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. The <code>input</code> element with the <code>type=&quot;radio&quot;</code> attribute is referred to as an HTML radio button. The <code>&lt;span&gt;&lt;/span&gt;</code> code is styled with CSS to become what is referred to as a CSS radio button. To place the CSS radio button before and/or after the <code>&lt;label&gt;&lt;/label&gt;</code> tag content, nest <code>&lt;span&gt;&lt;/span&gt;</code> in <code>&lt;label&gt;&lt;/label&gt;</code> before and/or after the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. Nesting <code>&lt;span&gt;&lt;/span&gt;</code> in <code>&lt;label&gt;&lt;/label&gt;</code> includes the CSS radio button as part of the clickable <code>&lt;label&gt;&lt;/label&gt;</code> tag content. If the radio button group data is to be sent when a form is submitted, use the <code>value</code> attribute. To default check/pre-check a radio button, use the <code>checked=&quot;checked&quot;</code> attribute.</li>
     </ul>

     <h3><a id='tech1Css'></a>2.3. Technique 1 Toggle Background Color Checkbox/Radio Button CSS Source Code And Notes</h3>

<!--
vertical-align worse values (IE11, FF47, CH51):
1.) baseline: Low. Apparently cannot position checkbox/radio button vertically up with margin-bottom.
2.) sub: Lower than baseline. Apparently cannot position checkbox/radio button vertically up with margin-bottom.
3.) super: High. Apparently cannot position checkbox/radio button vertically down with margin-top. 
vertical-align better values (IE11, FF47, CH51):
1.) top: with margin-top: 3px. Identical to bottom below. Use this or bottom.
2.) text-top: FF47 1px higher than IE11 and CH51.
3.) middle: with margin-bottom 4px. FF47 1px lower than IE11 and CH51.
4.) bottom: with margin-bottom: 5px. Identical to top above. Use this or top.
5.) text-bottom: with margin-bottom: 2px. CH51 1px higher than IE11 and FF47.
If remove body { line-height: 1.5 } style rule, vertical-align: top is the best.
-->

     <p>CSS source code: <a href='/css/css_techniques/style_checkboxes_radio_buttons/style_checkboxes_radio_buttons_technique_1.css'><span class='filename'>style_checkboxes_radio_buttons_technique_1.css</span> (learnwebcoding.com)</a>:</p>

<pre>
1     body {
2       line-height: 1.5;
3     }
4     input[type=&quot;checkbox&quot;], input[type=&quot;radio&quot;] {
5       display: none;
6     }
7     label input[type=&quot;checkbox&quot;] ~ span, label input[type=&quot;radio&quot;] ~ span {
8       display: inline-block;
9       width: 12px;
10      height: 12px;
11      vertical-align: top;
12      border: 2px solid #999;
13      box-sizing: content-box;
14      -moz-box-sizing: content-box;
15      margin-top: 3px;
16    }
17    label input[type=&quot;checkbox&quot;] ~ span {
18      border-radius: 2px;
19    }
20    label input[type=&quot;radio&quot;] ~ span {
21      border-radius: 12px;
22    }
23    label input[type=&quot;checkbox&quot;]:checked ~ span, label input[type=&quot;radio&quot;]:checked ~ span {
24      background-color: #000;
25    }
26    label:hover input[type=&quot;checkbox&quot;] ~ span, label:hover input[type=&quot;radio&quot;] ~ span {
27      border-color: #666;
28    }
</pre>

     <p>Technique 1 toggle background color checkbox/radio button CSS source code notes:</p>

     <ul>
      <li>Lines 1 - 3: Styles the example with the commonly used <code>line-height: 1.5</code> style. The checkboxes/radio buttons inherit this style.</li>
      <li>Lines 4 - 6: Hides the checkboxes/radio buttons that use the HTML <code>input</code> element with the <code>type=&quot;checkbox&quot;</code> or <code>type=&quot;radio&quot;</code> attribute. In this example, these checkboxes/radio buttons are referred to as HTML checkboxes/radio buttons. Hides the HTML checkboxes/radio buttons.
       <div class='note normal'>To display both the HTML checkboxes/radio buttons and the CSS checkboxes/radio buttons, delete or comment out line 5.</div>
      </li>
      <li>Line 7: Selects <code>span</code> elements that are preceded by general sibling <code>input</code> elements with the <code>type=&quot;checkbox&quot;</code> or <code>type=&quot;radio&quot;</code>attribute that are descendants of <code>label</code> elements. In other words, selects the <code>span</code> elements that follow HTML checkboxes/radio buttons nested in <code>label</code> elements. In this example, the selected <code>span</code> elements are styled with CSS to become what are referred to as CSS checkboxes/radio buttons. Selects the CSS checkbox/radio button objects.
       <div class='note normal'>Using the general sibling selector (<code>~</code>) instead of the more commonly used adjacent sibling selector (<code>+</code>) allows markup (i.e., tags) to be included in the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. It also changes the web browser support from CH4+ and OP10.50+ to CH13+ and OP11.60+.</div>
      </li>
      <li>Lines 7 - 16: Styles the CSS checkbox/radio button objects into generic CSS checkbox/radio button objects. By default, the generic CSS checkbox/radio button objects are in the unchecked state.</li>
      <li>Line 13: Overrides <code>box-sizing: border-box</code>; that is, if it is present/inherited. The W3C recommended initial style and the typical user agent style is <code>box-sizing: content-box</code>. Accordingly, this example is designed for <code>box-sizing: content-box</code>. <code>box-sizing: content-box</code> places padding and border outside the content box, which draws the CSS checkbox/radio buttons in the intended expanded state. Increasingly, however, and particularly in environments where a grid system is being used, the user agent style is being overridden by <code>box-sizing: border-box</code>, typically as <code>* { box-sizing: border-box }</code>. <code>box-sizing: border-box</code> places padding and border inside the content box, which draws the CSS checkbox/radio buttons in an unintended collapsed state. If <code>box-sizing: border-box</code> is not inherited, then can likely delete this line, but keeping it does no harm. In other words, depending on your environment, this line might not be required.</li>
      <li>Line 14: Overrides <code>-moz-box-sizing: border-box</code>; that is, if it is present/inherited. The oldest supported versions of FF support the web browser vendor prefix <code>-moz-box-sizing</code> style property, not the W3C recommended web browser vendor independent <code>box-sizing</code> CSS property. In other words, similar to line 13 above, but for the oldest supported versions of FF.</li>
      <li>Line 15: Vertically aligns the checkboxes/radio buttons with the <code>&lt;label&gt;&lt;/label&gt;</code> tag content.
       <div class='note normal'>The vertical alignment of the checkboxes/radio buttons with the <code>&lt;label&gt;&lt;/label&gt;</code> tag content is dependent upon many variables, including any inherited <code>font-size</code>, <code>line-height</code>, and <code>font-family</code> property values. For example, in some cases changing line 11 <code>vertical-align: top</code> to <code>vertical-align: middle</code> and line 15 <code>margin-top</code> to <code>margin-bottom</code> might work better cross-browser. Therefore, depending upon your code, it might be worth trying various line 11 <code>vertical-align</code> property values with various line 15 <code>margin-bottom</code> or <code>margin-top</code> property values in order achieve the most satisfactory cross-browser alignment.</div>
      </li>
      <li>Lines 17 - 19: Styles the generic CSS checkbox/radio button objects into CSS checkboxes.</li>
      <li>Lines 20 - 22: Styles the generic CSS checkbox/radio button objects into CSS radio buttons.</li>
      <li>Line 23: Detects default checked/pre-checked HTML checkbox/radio buttons. Although the HTML checkboxes/radio buttons are hidden by CSS source code lines 4  - 6, the web browser still keeps track of the state of the HTML checkboxes/radio buttons. Default checked/pre-checked checkboxes use the <code>input</code> element with the <code>type=&quot;checkbox&quot;</code> and <code>checked=&quot;checked&quot;</code> attributes. When the web page loads, <code>input[type=&quot;checkbox&quot;]:checked</code> detects default checked/pre-checked checkboxes on the DOM. Default checked/pre-checked radio buttons use the <code>input</code> element with the <code>type=&quot;radio&quot;</code> and <code>checked=&quot;checked&quot;</code> attributes. When the web page loads, <code>input[type=&quot;radio&quot;]:checked</code> detects default checked/pre-checked radio buttons on the DOM.</li>
      <li>Line 23: Detects clicks on the HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content. Although the HTML checkboxes/radio buttons are hidden by CSS source code lines 4 - 6, the web browser still keeps track of the state of the HTML checkboxes/radio buttons, and clicks on the HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content still toggles their state. Nesting the CSS checkbox/radio button <code>&lt;span&gt;&lt;/span&gt;</code> HTML code in the HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tags includes the CSS checkboxes/radio buttons as part of the clickable HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content.
       <div class='note normal'>Technically, the CSS checkboxes/radio buttons are never actually clicked, nor is there any mechanism directly associated with the CSS checkboxes/radio buttons to detect or respond to clicks. Instead, everything happens on, and through, the <code>&lt;label&gt;&lt;/label&gt;</code> tag content associated with the hidden HTML checkboxes/radio buttons. The CSS source code reflects this.</div>
      </li>
      <li>Lines 23 - 25: Responds to default checked/pre-checked HTML checkbox/radio buttons, and responds to clicks on the HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content, by applying the <code>background-color: #000</code> style to the CSS checkbox/radio button. This changes the CSS checkbox/radio button background color to black, which indicates that the CSS checkbox/radio button is in the checked state.
       <div class='note normal'>When an HTML checkbox/radio button is changed from the checked to the unchecked state, the web browser removes the checked flag from the CSS checkbox/radio button object on the DOM, which removes the <code>background-color: #000</code> style. This reverts the CSS checkbox/radio button to the default style, which indicates that the CSS checkbox/radio button is in the unchecked state.</div>
      </li>
      <li>Lines 26 - 28: Optional. Styles the CSS checkboxes/radio buttons with a hover style.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='tech2'></a>3. Technique 2 Toggle Color HTML Character Entity</h2>

     <p>Technique 2 toggle color HTML character entity toggles the color of the check mark (&#10003;) and black circle (&#9679;) HTML character numeric entities inside the CSS checkboxes/radio buttons, respectively.</p>

     <h3><a id='tech2Demo'></a>3.1. Technique 2 Toggle Color HTML Character Entity Demonstration And CodePen</h3>

     <ul>
      <li>Demonstration: <a href='/css/css_techniques/style_checkboxes_radio_buttons/style_checkboxes_radio_buttons_technique_2.html'>CSS Technique: Style Checkboxes And Radio Buttons Technique 2 Toggle Color HTML Character Entity (learnwebcoding.com)</a>.</li>
      <li>CodePen: <a href='https://codepen.io/learnwebcoding/pen/wGQgPX'>CSS Technique: Style Checkboxes And Radio Buttons Technique 2 Toggle Color HTML Character Entity (codepen.io/learnwebcoding/)</a>.</li>
     </ul>

     <h3><a id='tech2Html'></a>3.2. Technique 2 Toggle Color HTML Character Entity HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/css/css_techniques/style_checkboxes_radio_buttons/style_checkboxes_radio_buttons_technique_2.html'><span class='filename'>style_checkboxes_radio_buttons_technique_2.html</span> (learnwebcoding.com)</a>:</p>

<pre>
1     &lt;!DOCTYPE html&gt;
2     &lt;html lang=&quot;en&quot;&gt;
3      &lt;head&gt;
4       &lt;title&gt;CSS Technique: Style Checkboxes And Radio Buttons Technique 2 Toggle Color HTML Character Entity&lt;/title&gt;
5       &lt;meta charset=&quot;UTF-8&quot; /&gt;
6       &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;style_checkboxes_radio_buttons_technique_2.css&quot; /&gt;
7      &lt;/head&gt;
8      &lt;body&gt;
9       &lt;h2&gt;CSS Technique: Style Checkboxes And Radio Buttons Technique 2 Toggle Color HTML Character Entity&lt;/h2&gt;
10      &lt;p&gt;
11       &lt;label&gt;&lt;input type=&quot;checkbox&quot; name=&quot;unique to indicate checkbox1, if checked, when form submitted&quot; /&gt;&lt;span&gt;&amp;#10003;&lt;/span&gt; Checkbox&lt;/label&gt;&lt;br /&gt;
12       &lt;label&gt;&lt;input type=&quot;checkbox&quot; name=&quot;unique to indicate checkbox2, if checked, when form submitted&quot; checked=&quot;checked&quot; /&gt;&lt;span&gt;&amp;#10003;&lt;/span&gt; Checkbox default checked/pre-checked&lt;/label&gt;&lt;br /&gt;
13       &lt;label&gt;&lt;input type=&quot;checkbox&quot; name=&quot;unique to indicate checkbox3, if checked, when form submitted&quot; /&gt;Checkbox &lt;span&gt;&amp;#10003;&lt;/span&gt;&lt;/label&gt;
14      &lt;/p&gt;
15      &lt;p&gt;
16       &lt;label&gt;&lt;input type=&quot;radio&quot; name=&quot;creates radio button group and indicates radio button group1 when form submitted&quot; value=&quot;unique to indicate value1, if checked, when form submitted&quot; /&gt;&lt;span&gt;&amp;#9679;&lt;/span&gt; Radio button&lt;/label&gt;&lt;br /&gt;
17       &lt;label&gt;&lt;input type=&quot;radio&quot; name=&quot;creates radio button group and indicates radio button group1 when form submitted&quot; value=&quot;unique to indicate value2, if checked, when form submitted&quot; checked=&quot;checked&quot; /&gt;&lt;span&gt;&amp;#9679;&lt;/span&gt; Radio button default checked/pre-checked&lt;/label&gt;&lt;br /&gt;
18       &lt;label&gt;&lt;input type=&quot;radio&quot; name=&quot;creates radio button group and indicates radio button group1 when form submitted&quot; value=&quot;unique to indicate value3, if checked, when form submitted&quot; /&gt;Radio button &lt;span&gt;&amp;#9679;&lt;/span&gt;&lt;/label&gt;
19      &lt;/p&gt;
20      &lt;p&gt;Web browser support: IE9+, ED12+, FF4+, SF5+, CH13+, OP11.60+.&lt;/p&gt;
21     &lt;/body&gt;
22    &lt;/html&gt;
</pre>

     <p>Technique 2 toggle color HTML character entity HTML source code notes:</p>

     <ul>
      <li>Checkboxes use the <code>input</code> element with the <code>type=&quot;checkbox&quot;</code> attribute, the <code>label</code> element, and <code>&lt;span&gt;&lt;/span&gt;</code> tags containing the HTML character numeric entity (&amp;#10003;) for the check mark (&#10003;) character. The checkbox HTML is nested in <code>&lt;label&gt;&lt;/label&gt;</code> tags. The label extends the clickable area of the checkbox to include the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. The <code>input</code> element with the <code>type=&quot;checkbox&quot;</code> attribute is referred to as an HTML checkbox. The <code>&lt;span&gt;&amp;#10003;&lt;/span&gt;</code> code is styled with CSS to become what is referred to as a CSS checkbox. To place the CSS checkbox before and/or after the <code>&lt;label&gt;&lt;/label&gt;</code> tag content, nest <code>&lt;span&gt;&amp;#10003;&lt;/span&gt;</code> in <code>&lt;label&gt;&lt;/label&gt;</code> before and/or after the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. Nesting <code>&lt;span&gt;&amp;#10003;&lt;/span&gt;</code> in <code>&lt;label&gt;&lt;/label&gt;</code> includes the CSS checkbox as part of the clickable <code>&lt;label&gt;&lt;/label&gt;</code> tag content. If the checkbox data is to be sent when a form is submitted, use the <code>name</code> attribute with or without the <code>value</code> attribute. To default check/pre-check a checkbox, use the <code>checked=&quot;checked&quot;</code> attribute.</li>
      <li>Radio buttons use the <code>input</code> element with the <code>type=&quot;radio&quot;</code> and <code>name</code> attributes, the <code>label</code> element, and <code>&lt;span&gt;&lt;/span&gt;</code> tags containing the HTML character numeric entity (&amp;#9679;) for the black circle (&#9679;) character. Radio buttons with the same <code>name</code> attribute value form a radio button group. The radio button HTML is nested in <code>&lt;label&gt;&lt;/label&gt;</code> tags. The label extends the clickable area of the radio button to include the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. The <code>input</code> element with the <code>type=&quot;radio&quot;</code> attribute is referred to as an HTML radio button. The <code>&lt;span&gt;&amp;#9679;&lt;/span&gt;</code> code is styled with CSS to become what is referred to as a CSS radio button. To place the CSS radio button before and/or after the <code>&lt;label&gt;&lt;/label&gt;</code> tag content, nest <code>&lt;span&gt;&amp;#9679;&lt;/span&gt;</code> in <code>&lt;label&gt;&lt;/label&gt;</code> before and/or after the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. Nesting <code>&lt;span&gt;&amp;#9679;&lt;/span&gt;</code> in <code>&lt;label&gt;&lt;/label&gt;</code> includes the CSS radio button as part of the clickable <code>&lt;label&gt;&lt;/label&gt;</code> tag content. If the radio button group data is to be sent when a form is submitted, use the <code>value</code> attribute. To default check/pre-check a radio button, use the <code>checked=&quot;checked&quot;</code> attribute.
       <div class='note normal'>The black circle (&#9679;) character should probably be named the filled circle character because its color can be changed with the CSS <code>color</code> property as shown (<span style='color:blue'>&#9679;</span>).</div>
      </li>
     </ul>

     <h3><a id='tech2Css'></a>3.3. Technique 2 Toggle Color HTML Character Entity CSS Source Code And Notes</h3>

<!--
vertical-align worse values (IE11, FF47, CH51):
1.) baseline: Low. Apparently cannot position checkbox/radio button vertically up with margin-bottom.
2.) sub: Lower than baseline. Apparently cannot position checkbox/radio button vertically up with margin-bottom.
3.) super: High. Apparently cannot position checkbox/radio button vertically down with margin-top. 
vertical-align better values (IE11, FF47, CH51):
1.) top: with margin-top: 3px. Identical to bottom below. Use this or bottom.
2.) text-top: FF47 1px higher than IE11 and CH51.
3.) middle: with margin-bottom 4px. FF47 1px lower than IE11 and CH51.
4.) bottom: with margin-bottom: 5px. Identical to top above. Use this or top.
5.) text-bottom: with margin-bottom: 2px. CH51 1px higher than IE11 and FF47.
If remove body { line-height: 1.5 } style rule, vertical-align: top is the best.
-->

     <p>CSS source code: <a href='/css/css_techniques/style_checkboxes_radio_buttons/style_checkboxes_radio_buttons_technique_2.css'><span class='filename'>style_checkboxes_radio_buttons_technique_2.css</span> (learnwebcoding.com)</a>:</p>

<pre>
1     body {
2       line-height: 1.5;
3     }
4     input[type=&quot;checkbox&quot;], input[type=&quot;radio&quot;] {
5       display: none;
6     }
7     label input[type=&quot;checkbox&quot;] ~ span, label input[type=&quot;radio&quot;] ~ span {
8       display: inline-block;
9       width: 12px;
10      height: 12px;
11      vertical-align: top;
12      font-size: 12px;
13      font-weight: bold;
14      line-height: 12px;
15      color: transparent;
16      text-align: center;
17      border: 2px solid #999;
18      box-sizing: content-box;
19      -moz-box-sizing: content-box;
20      margin-top: 3px;
21    }
22    label input[type=&quot;checkbox&quot;] ~ span {
23      border-radius: 2px;
24    }
25    label input[type=&quot;radio&quot;] ~ span {
26      border-radius: 12px;
27    }
28    label input[type=&quot;checkbox&quot;]:checked ~ span, label input[type=&quot;radio&quot;]:checked ~ span {
29      color: inherit;
30    }
31    label:hover input[type=&quot;checkbox&quot;] ~ span, label:hover input[type=&quot;radio&quot;] ~ span {
32      border-color: #666;
33      cursor: default;
34    }
</pre>

     <p>Technique 2 toggle color HTML character entity CSS source code notes:</p>

     <ul>
      <li>Lines 1 - 3: Styles the example with the commonly used <code>line-height: 1.5</code> style. The checkboxes/radio buttons inherit this style.</li>
      <li>Lines 4 - 6: Hides the checkboxes/radio buttons that use the HTML <code>input</code> element with the <code>type=&quot;checkbox&quot;</code> or <code>type=&quot;radio&quot;</code> attribute. In this example, these checkboxes/radio buttons are referred to as HTML checkboxes/radio buttons. Hides the HTML checkboxes/radio buttons.
       <div class='note normal'>To display both the HTML checkboxes/radio buttons and the CSS checkboxes/radio buttons, delete or comment out line 5.</div>
      </li>
      <li>Line 7: Selects <code>span</code> elements that are preceded by general sibling <code>input</code> elements with the <code>type=&quot;checkbox&quot;</code> or <code>type=&quot;radio&quot;</code>attribute that are descendants of <code>label</code> elements. In other words, selects the <code>span</code> elements that follow HTML checkboxes/radio buttons nested in <code>label</code> elements. In this example, the selected <code>span</code> elements are styled with CSS to become what are referred to as CSS checkboxes/radio buttons. Selects the CSS checkbox/radio button objects.
       <div class='note normal'>Using the general sibling selector (<code>~</code>) instead of the more commonly used adjacent sibling selector (<code>+</code>) allows markup (i.e., tags) to be included in the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. It also changes the web browser support from CH4+ and OP10.50+ to CH13+ and OP11.60+.</div>
      </li>
      <li>Lines 7 - 20: Styles the CSS checkbox/radio button objects into generic CSS checkbox/radio button objects. By default, the generic CSS checkbox/radio button objects are in the unchecked state.</li>
      <li>Lines 9 - 10: Sets the width and height of the CSS checkbox/radio button.</li>
      <li>Line 12: Sets the size of the CSS checkbox check mark character and the CSS radio button black circle character. It is recommended that the line 12 <code>font-size</code> property value is the same as the line 9 <code>width</code> property value and the line 10 <code>height</code> property value, but it is not required.</li>
      <li>Line 14: Sets the vertical position of the check mark character in the CSS checkbox and the black circle character in the CSS radio button. It is recommended that the line 14 <code>line-height</code> property value is the same as the line 9 <code>width</code> property value, the line 10 <code>height</code> property value, and the line 12 <code>font-size</code> property value, but it is not required.</li>
      <li>Line 15: The HTML code for the CSS checkbox/radio button object is either <code>&lt;span&gt;&amp;#10003;&lt;/span&gt;</code>, which contains the HTML character numeric entity for the check mark (&#10003;) character, or <code>&lt;span&gt;&amp;#9679;&lt;/span&gt;</code>, which contains the HTML character numeric entity for the black circle (&#9679;) character. Applies the <code>color: transparent</code> style to the CSS checkbox/radio button check mark/black circle characters. This makes the check mark/black circle characters invisible, which indicates that, by default, the generic CSS checkbox/radio button objects are in the unchecked state.</li>
      <li>Line 18: Overrides <code>box-sizing: border-box</code>; that is, if it is present/inherited. The W3C recommended initial style and the typical user agent style is <code>box-sizing: content-box</code>. Accordingly, this example is designed for <code>box-sizing: content-box</code>. <code>box-sizing: content-box</code> places padding and border outside the content box, which draws the CSS checkbox/radio buttons in the intended expanded state. Increasingly, however, and particularly in environments where a grid system is being used, the user agent style is being overridden by <code>box-sizing: border-box</code>, typically as <code>* { box-sizing: border-box }</code>. <code>box-sizing: border-box</code> places padding and border inside the content box, which draws the CSS checkbox/radio buttons in an unintended collapsed state. If <code>box-sizing: border-box</code> is not inherited, then can likely delete this line, but keeping it does no harm. In other words, depending on your environment, this line might not be required.</li>
      <li>Line 19: Overrides <code>-moz-box-sizing: border-box</code>; that is, if it is present/inherited. The oldest supported versions of FF support the web browser vendor prefix <code>-moz-box-sizing</code> style property, not the W3C recommended web browser vendor independent <code>box-sizing</code> CSS property. In other words, similar to line 18 above, but for the oldest supported versions of FF.</li>
      <li>Line 20: Vertically aligns the checkboxes/radio buttons with the <code>&lt;label&gt;&lt;/label&gt;</code> tag content.
       <div class='note normal'>The vertical alignment of the checkboxes/radio buttons with the <code>&lt;label&gt;&lt;/label&gt;</code> tag content is dependent upon many variables, including any inherited <code>font-size</code>, <code>line-height</code>, and <code>font-family</code> property values. For example, in some cases changing line 11 <code>vertical-align: top</code> to <code>vertical-align: middle</code> and line 20 <code>margin-top</code> to <code>margin-bottom</code> might work better cross-browser. Therefore, depending upon your code, it might be worth trying various line 11 <code>vertical-align</code> property values with various line 20 <code>margin-bottom</code> or <code>margin-top</code> property values in order achieve the most satisfactory cross-browser alignment.</div>
      </li>
      <li>Lines 22 - 24: Styles the generic CSS checkbox/radio button objects into CSS checkboxes.</li>
      <li>Lines 25 - 27: Styles the generic CSS checkbox/radio button objects into CSS radio buttons.</li>
      <li>Line 28: Detects default checked/pre-checked HTML checkbox/radio buttons. Although the HTML checkboxes/radio buttons are hidden by CSS source code lines 4  - 6, the web browser still keeps track of the state of the HTML checkboxes/radio buttons. Default checked/pre-checked checkboxes use the <code>input</code> element with the <code>type=&quot;checkbox&quot;</code> and <code>checked=&quot;checked&quot;</code> attributes. When the web page loads, <code>input[type=&quot;checkbox&quot;]:checked</code> detects default checked/pre-checked checkboxes on the DOM. Default checked/pre-checked radio buttons use the <code>input</code> element with the <code>type=&quot;radio&quot;</code> and <code>checked=&quot;checked&quot;</code> attributes. When the web page loads, <code>input[type=&quot;radio&quot;]:checked</code> detects default checked/pre-checked radio buttons on the DOM.</li>
      <li>Line 28: Detects clicks on the HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content. Although the HTML checkboxes/radio buttons are hidden by CSS source code lines 4 - 6, the web browser still keeps track of the state of the HTML checkboxes/radio buttons, and clicks on the HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content still toggles their state. Nesting the CSS checkbox <code>&lt;span&gt;&amp;#10003;&lt;/span&gt;</code> HTML code and the CSS radio button <code>&lt;span&gt;&amp;#9679;&lt;/span&gt;</code> HTML code in the HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tags includes the CSS checkboxes/radio buttons as part of the clickable HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content.
       <div class='note normal'>Technically, the CSS checkboxes/radio buttons are never actually clicked, nor is there any mechanism directly associated with the CSS checkboxes/radio buttons to detect or respond to clicks. Instead, everything happens on, and through, the <code>&lt;label&gt;&lt;/label&gt;</code> tag content associated with the hidden HTML checkboxes/radio buttons. The CSS source code reflects this.</div>
      </li>
      <li>Lines 28 - 30: Responds to default checked/pre-checked HTML checkbox/radio buttons, and responds to clicks on the HTML checkbox/radio button <code>&lt;label&gt;&lt;/label&gt;</code> tag content, by applying the <code>color: inherit</code> style to the CSS checkbox/radio button check mark/black circle characters. This makes the check mark/black circle characters visible, which indicates that the CSS checkbox/radio button is in the checked state.
       <div class='note normal'>When an HTML checkbox/radio button is changed from the checked to the unchecked state, the web browser removes the checked flag from the CSS checkbox/radio button object on the DOM, which removes the <code>color: inherit</code> style. This reverts the check mark/black circle character to the default style, which indicates that the CSS checkbox/radio button is in the unchecked state.</div>
      </li>
      <li>Lines 31 - 34: Optional. Styles the CSS checkboxes/radio buttons with hover styles.</li>
      <li>Line 33: Prevents the IE11 and ED12+ cursor from changing into the text shape on hover over the CSS checkboxes/radio buttons, themselves.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>4. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/CSS2/'>Cascading Style Sheets Level 2 Revision 1 (CSS 2.1) Specification: W3C Recommendation 07 June 2011, Edited In Place 12 April 2016 To Point To New Work (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/css3-selectors/'>Selectors Level 3: W3C Recommendation 29 September 2011 (w3.org)</a></li>
      <li><a href='/css/css_techniques/index.php'>CSS Techniques (learnwebcoding.com)</a></li>
     </ul>

    </section>";
