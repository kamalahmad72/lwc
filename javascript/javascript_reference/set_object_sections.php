<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/set_object_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/set_object.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 19 Dec 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>Set</code> object. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>Set</code> object, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>Set</code> object. The web browser does not support the JavaScript <code>Set</code> object.</q></p>

     <p>If the web browser recognizes the JavaScript <code>Set</code> object, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>Set</code> object includes support for at least one <code>Set</code> object capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>Set</code> object includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>Set</code> object, and supports at least one <code>Set</code> object capability. The web browser at least partially/possibly fully supports the JavaScript <code>Set</code> object. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>Set</code> object does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>Set</code> object, but does not support at least one <code>Set</code> object capability. The web browser partially supports the JavaScript <code>Set</code> object.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>Set</code> Object Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF19+, CH39+, OP26+.</li>
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

     <h2><a id='test'></a>2. <code>Set</code> Object Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;Set&lt;/code&gt; object. The web browser does not support the JavaScript &lt;code&gt;Set&lt;/code&gt; object.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
var setOne = new Set(); // Empty set. Identical to var setOne = new Set(null);. setOne is Set(0) {}.
var setTwo = new Set([1, 2, 3, 4]); // setTwo initialized with an array. setTwo is Set(4) {1, 2, 3, 4}. IE11 does not support sets initialized with an iterable. IE11 mistakenly reports sets initialized with an iterable as [object Object] {size: 0}. Hence, IE11 Pass/Fail (partial support).
var arrayLiteralOne = [1, 2, 3, 4];
var arrayLiteralTwo = [1, 2, 3, 1, 2, 4];
var string = &quot;123124&quot;;
var setThree = new Set(arrayLiteralOne); // setThree initialized with an array. setThree is Set(4) {1, 2, 3, 4}.
var setFour = new Set(arrayLiteralTwo); // setFour initialized with an array. Only unique values added. setFour is Set(4) {1, 2, 3, 4}.
var setFive = new Set(string); // setFive initialized with a string. Only unique values added. setFive is Set(4) {&quot;1&quot;, &quot;2&quot;, &quot;3&quot;, &quot;4&quot;}.
var setSix = new Set(setTwo); // setSix initialized with a set. setSix is Set(4) {1, 2, 3, 4}.
if (window.setOne){ // Identical to if (setOne).
 var element = document.getElementById(&quot;testId&quot;);
 setOne.add(1); // Item with value 1 added to setOne. setOne is Set(1) {1}.
 setOne.add(2); // Item with value 2 added to setOne. setOne is Set(2) {1, 2}.
 setOne.add(3); // Item with value 3 added to setOne. setOne is Set(3) {1, 2, 3}.
 setOne.add(3); // setOne has item with value 3. Not unique. Nothing added. setOne is Set(3) {1, 2, 3}.
 setOne.add(&quot;3&quot;); // String, not Number. Unique. Item with value &quot;3&quot; added to setOne. setOne is Set(4) {1, 2, 3, &quot;3&quot;}.
 var arrayLiteral = [1, 2, 3];
 var objectLiteral = {propertyOne: 1, propertyTwo: 2, propertyThree: 3};
 setOne.add(arrayLiteral); // Item with value arrayLiteral added to setOne. setOne is Set(5) {1, 2, 3, &quot;3&quot;, arrayLiteral}.
 setOne.add(objectLiteral); // Item with value objectLiteral added to setOne. setOne is Set(6) {1, 2, 3, &quot;3&quot;, arrayLiteral, objectLiteral}.
 setOne.delete(1); // Item with value 1 removed from setOne. setOne is Set(5) {2, 3, &quot;3&quot;, arrayLiteral, objectLiteral}.
 setOne.delete(3); // Item with value 3 removed from setOne. setOne is Set(4) {2, &quot;3&quot;, arrayLiteral, objectLiteral}.
 setOne.delete(3); // setOne does not have item with value 3. Nothing removed. setOne is Set(4) {2, &quot;3&quot;, arrayLiteral, objectLiteral}.
 setOne.delete(arrayLiteral); // Item with value arrayLiteral removed from setOne. setOne is Set(3) {2, &quot;3&quot;, objectLiteral}.
 setTwo.clear(); // Remove all items from setTwo. setTwo is Set(0) {}.
 if ((setOne.size === 3) &amp;&amp; (setOne.has(1) === false) &amp;&amp; (setOne.has(2) === true) &amp;&amp; (setOne.has(3) === false) &amp;&amp; (setOne.has(&quot;3&quot;) === true) &amp;&amp; (setOne.has(arrayLiteral) === false) &amp;&amp; (setOne.has(objectLiteral) === true) &amp;&amp; (setTwo.size === 0) &amp;&amp; (setThree.size === 4) &amp;&amp; (setFour.size === 4) &amp;&amp; (setFive.size === 4) &amp;&amp; (setSix.size === 4)){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;Set&lt;/code&gt; object, and supports at least one &lt;code&gt;Set&lt;/code&gt; object capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;Set&lt;/code&gt; object. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;Set&lt;/code&gt; object, but does not support at least one &lt;code&gt;Set&lt;/code&gt; object capability. The web browser partially supports the JavaScript &lt;code&gt;Set&lt;/code&gt; object.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>Set</code> object. The web browser does not support the JavaScript <code>Set</code> object.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var setOne = new Set(); // Empty set. Identical to var setOne = new Set(null);. setOne is Set(0) {}.
     var setTwo = new Set([1, 2, 3, 4]); // setTwo initialized with an array. setTwo is Set(4) {1, 2, 3, 4}. IE11 does not support sets initialized with an iterable. IE11 mistakenly reports sets initialized with an iterable as [object Object] {size: 0}. Hence, IE11 Pass/Fail (partial support).
     var arrayLiteralOne = [1, 2, 3, 4];
     var arrayLiteralTwo = [1, 2, 3, 1, 2, 4];
     var string = \"123124\";
     var setThree = new Set(arrayLiteralOne); // setThree initialized with an array. setThree is Set(4) {1, 2, 3, 4}.
     var setFour = new Set(arrayLiteralTwo); // setFour initialized with an array. Only unique values added. setFour is Set(4) {1, 2, 3, 4}.
     var setFive = new Set(string); // setFive initialized with a string. Only unique values added. setFive is Set(4) {\"1\", \"2\", \"3\", \"4\"}.
     var setSix = new Set(setTwo); // setSix initialized with a set. setSix is Set(4) {1, 2, 3, 4}.
     if (window.setOne){ // Identical to if (setOne).
      var element = document.getElementById(\"testId\");
      setOne.add(1); // Item with value 1 added to setOne. setOne is Set(1) {1}.
      setOne.add(2); // Item with value 2 added to setOne. setOne is Set(2) {1, 2}.
      setOne.add(3); // Item with value 3 added to setOne. setOne is Set(3) {1, 2, 3}.
      setOne.add(3); // setOne has item with value 3. Not unique. Nothing added. setOne is Set(3) {1, 2, 3}.
      setOne.add(\"3\"); // String, not Number. Unique. Item with value \"3\" added to setOne. setOne is Set(4) {1, 2, 3, \"3\"}.
      var arrayLiteral = [1, 2, 3];
      var objectLiteral = {propertyOne: 1, propertyTwo: 2, propertyThree: 3};
      setOne.add(arrayLiteral); // Item with value arrayLiteral added to setOne. setOne is Set(5) {1, 2, 3, \"3\", arrayLiteral}.
      setOne.add(objectLiteral); // Item with value objectLiteral added to setOne. setOne is Set(6) {1, 2, 3, \"3\", arrayLiteral, objectLiteral}.
      setOne.delete(1); // Item with value 1 removed from setOne. setOne is Set(5) {2, 3, \"3\", arrayLiteral, objectLiteral}.
      setOne.delete(3); // Item with value 3 removed from setOne. setOne is Set(4) {2, \"3\", arrayLiteral, objectLiteral}.
      setOne.delete(3); // setOne does not have item with value 3. Nothing removed. setOne is Set(4) {2, \"3\", arrayLiteral, objectLiteral}.
      setOne.delete(arrayLiteral); // Item with value arrayLiteral removed from setOne. setOne is Set(3) {2, \"3\", objectLiteral}.
      setTwo.clear(); // Remove all items from setTwo. setTwo is Set(0) {}.
      if ((setOne.size === 3) && (setOne.has(1) === false) && (setOne.has(2) === true) && (setOne.has(3) === false) && (setOne.has(\"3\") === true) && (setOne.has(arrayLiteral) === false) && (setOne.has(objectLiteral) === true) && (setTwo.size === 0) && (setThree.size === 4) && (setFour.size === 4) && (setFive.size === 4) && (setSix.size === 4)){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>Set</code> object, and supports at least one <code>Set</code> object capability. The web browser at least partially/possibly fully supports the JavaScript <code>Set</code> object. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>Set</code> object, but does not support at least one <code>Set</code> object capability. The web browser partially supports the JavaScript <code>Set</code> object.\";
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
