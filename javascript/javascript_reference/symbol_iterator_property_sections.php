<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/symbol_iterator_property_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/symbol_iterator_property.php.
 * Last reviewed/updated: 11 Jan 2018.
 * Published: 28 Dec 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there is one web browser JavaScript feature support test: a feature implementation test. The implementation test determines if the web browser recognizes the JavaScript <code>[Symbol.iterator]</code> property. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>[Symbol.iterator]</code> property, the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>[Symbol.iterator]</code> property. The web browser does not support the JavaScript <code>[Symbol.iterator]</code> property.</q> If the web browser recognizes the JavaScript <code>[Symbol.iterator]</code> property, the implementation test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>[Symbol.iterator]</code> property. The web browser at least partially/possibly fully supports the JavaScript <code>[Symbol.iterator]</code> property. Positive determination of full web browser support is beyond the scope of this test.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>[Symbol.iterator]</code> Property Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF36+, CH38+, OP25+.</li>
      <li><q><b>Fail</b> (no support):</q> IE11-, SF5.1.7-.</li>
     </ul>

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

     <h2><a id='test'></a>2. <code>[Symbol.iterator]</code> Property Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;[Symbol.iterator]&lt;/code&gt; property. The web browser does not support the JavaScript &lt;code&gt;[Symbol.iterator]&lt;/code&gt; property.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
var stringLiteral = &quot;&quot;; // An iterable.
var arrayLiteral = []; // An iterable.
var typedArray = new Int8Array(); // An iterable.
var set = new Set(); // An iterable.
var map = new Map(); // An iterable.
var functionExpression = function(){}; // Not an iterable.
var objectLiteral = {}; // Not an iterable.
if (stringLiteral[Symbol.iterator] &amp;&amp; arrayLiteral[Symbol.iterator] &amp;&amp; typedArray[Symbol.iterator] &amp;&amp; set[Symbol.iterator] &amp;&amp; map[Symbol.iterator] &amp;&amp; !functionExpression[Symbol.iterator] &amp;&amp; !objectLiteral[Symbol.iterator]){
 var element = document.getElementById(&quot;testId&quot;);
 element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;[Symbol.iterator]&lt;/code&gt; property. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;[Symbol.iterator]&lt;/code&gt; property. Positive determination of full web browser support is beyond the scope of this test.&quot;;
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- Per LWC web browser support testing, TypedArray object supported by IE10+, ED12+, FF4+, SF5.1+, CH9+, OP11.60+ and [Symbol.iterator] property supported by ED12+, FF36+, CH38+, OP25+, no IE11-, SF5.1.7-. Therefore, in web browser support test below, TypedArray object does not skew test result. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>[Symbol.iterator]</code> property. The web browser does not support the JavaScript <code>[Symbol.iterator]</code> property.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var stringLiteral = \"\"; // An iterable.
     var arrayLiteral = []; // An iterable.
     var typedArray = new Int8Array(); // An iterable.
     var set = new Set(); // An iterable.
     var map = new Map(); // An iterable.
     var functionExpression = function(){}; // Not an iterable.
     var objectLiteral = {}; // Not an iterable.
     if (stringLiteral[Symbol.iterator] && arrayLiteral[Symbol.iterator] && typedArray[Symbol.iterator] && set[Symbol.iterator] && map[Symbol.iterator] && !functionExpression[Symbol.iterator] && !objectLiteral[Symbol.iterator]){
      var element = document.getElementById(\"testId\");
      element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>[Symbol.iterator]</code> property. The web browser at least partially/possibly fully supports the JavaScript <code>[Symbol.iterator]</code> property. Positive determination of full web browser support is beyond the scope of this test.\";
     }
     </script>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/javascript/javascript_reference/index.php'>JavaScript Feature Reference (learnwebcoding.com)</a></li>
     </ul>

    </section>";
