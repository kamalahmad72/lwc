<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/map_object_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/map_object.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 22 Dec 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>Map</code> object. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>Map</code> object, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>Map</code> object. The web browser does not support the JavaScript <code>Map</code> object.</q></p>

     <p>If the web browser recognizes the JavaScript <code>Map</code> object, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>Map</code> object includes support for at least one <code>Map</code> object capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>Map</code> object includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>Map</code> object, and supports at least one <code>Map</code> object capability. The web browser at least partially/possibly fully supports the JavaScript <code>Map</code> object. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>Map</code> object does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>Map</code> object, but does not support at least one <code>Map</code> object capability. The web browser partially supports the JavaScript <code>Map</code> object.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>Map</code> Object Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF19+, CH38+, OP25+.</li>
      <li><q><b>Pass/Fail</b> (partial support):</q> IE11.</li>
      <li><q><b>Fail</b> (no support):</q> IE10-, SF5.1.7-.</li>
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

     <h2><a id='test'></a>2. <code>Map</code> Object Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;Map&lt;/code&gt; object. The web browser does not support the JavaScript &lt;code&gt;Map&lt;/code&gt; object.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
var mapOne = new Map(); // Empty map. Identical to var mapOne = new Map(null);. mapOne is Map(0) {}.
var mapTwo = new Map([[&quot;keyOne&quot;, 1], [&quot;keyTwo&quot;, 2], [&quot;keyThree&quot;, 3], [&quot;keyFour&quot;, 4]]); // mapTwo initialized with an iterable whose items/elements are key-value pairs (ie, an array of key-value pair arrays or a map). mapTwo is Map(4) {&quot;keyOne&quot; =&gt; 1, &quot;keyTwo&quot; =&gt; 2, &quot;keyThree&quot; =&gt; 3, &quot;keyFour&quot; =&gt; 4}. IE11 does not support maps initialized with an iterable. IE11 mistakenly represents maps initialized with an iterable as [object Object] {size: 0}. Hence, IE11 Pass/Fail (partial support).
var mapThree = new Map(mapTwo); // mapThree initialized with a map. mapThree is Map(4) {&quot;keyOne&quot; =&gt; 1, &quot;keyTwo&quot; =&gt; 2, &quot;keyThree&quot; =&gt; 3, &quot;keyFour&quot; =&gt; 4}.
if (window.mapOne){ // Identical to if (mapOne).
 var element = document.getElementById(&quot;testId&quot;);
 mapOne.set(&quot;keyOne&quot;, 1); // Item with key-value pair &quot;keyOne&quot; =&gt; 1 set on mapOne. mapOne is Map(1) {&quot;keyOne&quot; =&gt; 1}.
 mapOne.set(&quot;keyTwo&quot;, 2); // Item with key-value pair &quot;keyTwo&quot; =&gt; 2 set on mapOne. mapOne is Map(2) {&quot;keyOne&quot; =&gt; 1, &quot;keyTwo&quot; =&gt; 2}.
 mapOne.set(&quot;keyThree&quot;, 3); // Item with key-value pair &quot;keyThree&quot; =&gt; 3 set on mapOne. mapOne is Map(3) {&quot;keyOne&quot; =&gt; 1, &quot;keyTwo&quot; =&gt; 2, &quot;keyThree&quot; =&gt; 3}.
 mapOne.set(&quot;keyTwo&quot;, 2); // mapOne has item with key-value pair &quot;keyTwo&quot; =&gt; 2. Not unique. Nothing set. mapOne is Map(3) {&quot;keyOne&quot; =&gt; 1, &quot;keyTwo&quot; =&gt; 2, &quot;keyThree&quot; =&gt; 3}.
 mapOne.set(&quot;keyTwo&quot;, 22); // mapOne has item with key-value pair &quot;keyTwo&quot; =&gt; 2, not &quot;keyTwo&quot; =&gt; 22. key-value pair &quot;keyTwo&quot; =&gt; 2 replaced by &quot;keyTwo&quot; =&gt; 22. mapOne is Map(3) {&quot;keyOne&quot; =&gt; 1, &quot;keyTwo&quot; =&gt; 22, &quot;keyThree&quot; =&gt; 3}.
 var variable = &quot;variable value&quot;;
 var arrayLiteral = [1, 2, 3];
 var objectLiteral = {propertyOne: 1, propertyTwo: 2, propertyThree: 3};
 var functionExpression = function(){return 123;};
 mapOne.set(variable, &quot;variable key value&quot;); // Item with key-value pair variable =&gt; &quot;variable key value&quot; set on mapOne. mapOne is Map(4) {&quot;keyOne&quot; =&gt; 1, &quot;keyTwo&quot; =&gt; 22, &quot;keyThree&quot; =&gt; 3, variable =&gt; &quot;variable key value&quot;}.
 mapOne.set(arrayLiteral, &quot;arrayLiteral key value&quot;); // Item with key-value pair arrayLiteral =&gt; &quot;arrayLiteral key value&quot; set on mapOne. mapOne is Map(5) {&quot;keyOne&quot; =&gt; 1, &quot;keyTwo&quot; =&gt; 22, &quot;keyThree&quot; =&gt; 3, variable =&gt; &quot;variable key value&quot;, arrayLiteral =&gt; &quot;arrayLiteral key value&quot;}.
 mapOne.set(objectLiteral, &quot;objectLiteral key value&quot;); // Item with key-value pair objectLiteral =&gt; &quot;objectLiteral key value&quot; set on mapOne. mapOne is Map(6) {&quot;keyOne&quot; =&gt; 1, &quot;keyTwo&quot; =&gt; 22, &quot;keyThree&quot; =&gt; 3, variable =&gt; &quot;variable key value&quot;, arrayLiteral =&gt; &quot;arrayLiteral key value&quot;, objectLiteral =&gt; &quot;objectLiteral key value&quot;}.
 mapOne.set(functionExpression, &quot;functionExpression key value&quot;); // Item with key-value pair functionExpression =&gt; &quot;functionExpression key value&quot; set on mapOne. mapOne is Map(7) {&quot;keyOne&quot; =&gt; 1, &quot;keyTwo&quot; =&gt; 22, &quot;keyThree&quot; =&gt; 3, variable =&gt; &quot;variable key value&quot;, arrayLiteral =&gt; &quot;arrayLiteral key value&quot;, objectLiteral =&gt; &quot;objectLiteral key value&quot;, functionExpression =&gt; &quot;functionExpression key value&quot;}.
 mapOne.delete(&quot;keyOne&quot;); // Item with key &quot;keyOne&quot; removed from mapOne. mapOne is Map(6) {&quot;keyTwo&quot; =&gt; 22, &quot;keyThree&quot; =&gt; 3, variable =&gt; &quot;variable key value&quot;, arrayLiteral =&gt; &quot;arrayLiteral key value&quot;, objectLiteral =&gt; &quot;objectLiteral key value&quot;, functionExpression =&gt; &quot;functionExpression key value&quot;}.
 mapOne.delete(&quot;keyThree&quot;); // Item with key &quot;keyThree&quot; removed from mapOne. mapOne is Map(5) {&quot;keyTwo&quot; =&gt; 22, variable =&gt; &quot;variable key value&quot;, arrayLiteral =&gt; &quot;arrayLiteral key value&quot;, objectLiteral =&gt; &quot;objectLiteral key value&quot;, functionExpression =&gt; &quot;functionExpression key value&quot;}.
 mapOne.delete(&quot;keyThree&quot;); // mapOne does not have item with key &quot;keyThree&quot;. Nothing removed. mapOne is Map(5) {&quot;keyTwo&quot; =&gt; 22, variable =&gt; &quot;variable key value&quot;, arrayLiteral =&gt; &quot;arrayLiteral key value&quot;, objectLiteral =&gt; &quot;objectLiteral key value&quot;, functionExpression =&gt; &quot;functionExpression key value&quot;}.
 mapOne.delete(arrayLiteral); // Item with key arrayLiteral removed from mapOne. mapOne is Map(4) {&quot;keyTwo&quot; =&gt; 22, variable =&gt; &quot;variable key value&quot;, objectLiteral =&gt; &quot;objectLiteral key value&quot;, functionExpression =&gt; &quot;functionExpression key value&quot;}.
 mapTwo.clear(); // Remove all items from mapTwo. mapTwo is Map(0) {}.
 if ((mapOne.size === 4) &amp;&amp; (mapOne.has(&quot;keyOne&quot;) === false) &amp;&amp; (mapOne.has(&quot;keyTwo&quot;) === true) &amp;&amp; (mapOne.get(&quot;keyTwo&quot;) === 22) &amp;&amp; (mapOne.has(&quot;keyThree&quot;) === false) &amp;&amp; (mapOne.has(variable) === true) &amp;&amp; (mapOne.get(variable) === &quot;variable key value&quot;) &amp;&amp; (mapOne.has(objectLiteral) === true) &amp;&amp; (mapOne.get(objectLiteral) === &quot;objectLiteral key value&quot;) &amp;&amp; (mapOne.has(functionExpression) === true) &amp;&amp; (mapOne.get(functionExpression) === &quot;functionExpression key value&quot;) &amp;&amp; (mapOne.get(&quot;stringKeyThatDoesNotExist&quot;) === undefined) &amp;&amp; (mapTwo.size === 0) &amp;&amp; (mapThree.size === 4)){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;Map&lt;/code&gt; object, and supports at least one &lt;code&gt;Map&lt;/code&gt; object capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;Map&lt;/code&gt; object. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;Map&lt;/code&gt; object, but does not support at least one &lt;code&gt;Map&lt;/code&gt; object capability. The web browser partially supports the JavaScript &lt;code&gt;Map&lt;/code&gt; object.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>Map</code> object. The web browser does not support the JavaScript <code>Map</code> object.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var mapOne = new Map(); // Empty map. Identical to var mapOne = new Map(null);. mapOne is Map(0) {}.
     var mapTwo = new Map([[\"keyOne\", 1], [\"keyTwo\", 2], [\"keyThree\", 3], [\"keyFour\", 4]]); // mapTwo initialized with an iterable whose items/elements are key-value pairs (ie, an array of key-value pair arrays or a map). mapTwo is Map(4) {\"keyOne\" =&gt; 1, \"keyTwo\" =&gt; 2, \"keyThree\" =&gt; 3, \"keyFour\" =&gt; 4}. IE11 does not support maps initialized with an iterable. IE11 mistakenly represents maps initialized with an iterable as [object Object] {size: 0}. Hence, IE11 Pass/Fail (partial support).
     var mapThree = new Map(mapTwo); // mapThree initialized with a map. mapThree is Map(4) {\"keyOne\" =&gt; 1, \"keyTwo\" =&gt; 2, \"keyThree\" =&gt; 3, \"keyFour\" =&gt; 4}.
     if (window.mapOne){ // Identical to if (mapOne).
      var element = document.getElementById(\"testId\");
      mapOne.set(\"keyOne\", 1); // Item with key-value pair \"keyOne\" =&gt; 1 set on mapOne. mapOne is Map(1) {\"keyOne\" =&gt; 1}.
      mapOne.set(\"keyTwo\", 2); // Item with key-value pair \"keyTwo\" =&gt; 2 set on mapOne. mapOne is Map(2) {\"keyOne\" =&gt; 1, \"keyTwo\" =&gt; 2}.
      mapOne.set(\"keyThree\", 3); // Item with key-value pair \"keyThree\" =&gt; 3 set on mapOne. mapOne is Map(3) {\"keyOne\" =&gt; 1, \"keyTwo\" =&gt; 2, \"keyThree\" =&gt; 3}.
      mapOne.set(\"keyTwo\", 2); // mapOne has item with key-value pair \"keyTwo\" =&gt; 2. Not unique. Nothing set. mapOne is Map(3) {\"keyOne\" =&gt; 1, \"keyTwo\" =&gt; 2, \"keyThree\" =&gt; 3}.
      mapOne.set(\"keyTwo\", 22); // mapOne has item with key-value pair \"keyTwo\" =&gt; 2, not \"keyTwo\" =&gt; 22. key-value pair \"keyTwo\" =&gt; 2 replaced by \"keyTwo\" =&gt; 22. mapOne is Map(3) {\"keyOne\" =&gt; 1, \"keyTwo\" =&gt; 22, \"keyThree\" =&gt; 3}.
      var variable = \"variable value\";
      var arrayLiteral = [1, 2, 3];
      var objectLiteral = {propertyOne: 1, propertyTwo: 2, propertyThree: 3};
      var functionExpression = function(){return 123;};
      mapOne.set(variable, \"variable key value\"); // Item with key-value pair variable =&gt; \"variable key value\" set on mapOne. mapOne is Map(4) {\"keyOne\" =&gt; 1, \"keyTwo\" =&gt; 22, \"keyThree\" =&gt; 3, variable =&gt; \"variable key value\"}.
      mapOne.set(arrayLiteral, \"arrayLiteral key value\"); // Item with key-value pair arrayLiteral =&gt; \"arrayLiteral key value\" set on mapOne. mapOne is Map(5) {\"keyOne\" =&gt; 1, \"keyTwo\" =&gt; 22, \"keyThree\" =&gt; 3, variable =&gt; \"variable key value\", arrayLiteral =&gt; \"arrayLiteral key value\"}.
      mapOne.set(objectLiteral, \"objectLiteral key value\"); // Item with key-value pair objectLiteral =&gt; \"objectLiteral key value\" set on mapOne. mapOne is Map(6) {\"keyOne\" =&gt; 1, \"keyTwo\" =&gt; 22, \"keyThree\" =&gt; 3, variable =&gt; \"variable key value\", arrayLiteral =&gt; \"arrayLiteral key value\", objectLiteral =&gt; \"objectLiteral key value\"}.
      mapOne.set(functionExpression, \"functionExpression key value\"); // Item with key-value pair functionExpression =&gt; \"functionExpression key value\" set on mapOne. mapOne is Map(7) {\"keyOne\" =&gt; 1, \"keyTwo\" =&gt; 22, \"keyThree\" =&gt; 3, variable =&gt; \"variable key value\", arrayLiteral =&gt; \"arrayLiteral key value\", objectLiteral =&gt; \"objectLiteral key value\", functionExpression =&gt; \"functionExpression key value\"}.
      mapOne.delete(\"keyOne\"); // Item with key \"keyOne\" removed from mapOne. mapOne is Map(6) {\"keyTwo\" =&gt; 22, \"keyThree\" =&gt; 3, variable =&gt; \"variable key value\", arrayLiteral =&gt; \"arrayLiteral key value\", objectLiteral =&gt; \"objectLiteral key value\", functionExpression =&gt; \"functionExpression key value\"}.
      mapOne.delete(\"keyThree\"); // Item with key \"keyThree\" removed from mapOne. mapOne is Map(5) {\"keyTwo\" =&gt; 22, variable =&gt; \"variable key value\", arrayLiteral =&gt; \"arrayLiteral key value\", objectLiteral =&gt; \"objectLiteral key value\", functionExpression =&gt; \"functionExpression key value\"}.
      mapOne.delete(\"keyThree\"); // mapOne does not have item with key \"keyThree\". Nothing removed. mapOne is Map(5) {\"keyTwo\" =&gt; 22, variable =&gt; \"variable key value\", arrayLiteral =&gt; \"arrayLiteral key value\", objectLiteral =&gt; \"objectLiteral key value\", functionExpression =&gt; \"functionExpression key value\"}.
      mapOne.delete(arrayLiteral); // Item with key arrayLiteral removed from mapOne. mapOne is Map(4) {\"keyTwo\" =&gt; 22, variable =&gt; \"variable key value\", objectLiteral =&gt; \"objectLiteral key value\", functionExpression =&gt; \"functionExpression key value\"}.
      mapTwo.clear(); // Remove all items from mapTwo. mapTwo is Map(0) {}.
      if ((mapOne.size === 4) && (mapOne.has(\"keyOne\") === false) && (mapOne.has(\"keyTwo\") === true) && (mapOne.get(\"keyTwo\") === 22) && (mapOne.has(\"keyThree\") === false) && (mapOne.has(variable) === true) && (mapOne.get(variable) === \"variable key value\") && (mapOne.has(objectLiteral) === true) && (mapOne.get(objectLiteral) === \"objectLiteral key value\") && (mapOne.has(functionExpression) === true) && (mapOne.get(functionExpression) === \"functionExpression key value\") && (mapOne.get(\"stringKeyThatDoesNotExist\") === undefined) && (mapTwo.size === 0) && (mapThree.size === 4)){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>Map</code> object, and supports at least one <code>Map</code> object capability. The web browser at least partially/possibly fully supports the JavaScript <code>Map</code> object. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>Map</code> object, but does not support at least one <code>Map</code> object capability. The web browser partially supports the JavaScript <code>Map</code> object.\";
      }
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
