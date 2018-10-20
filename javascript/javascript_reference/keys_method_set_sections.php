<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/keys_method_set_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/keys_method_set.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 12 Jan 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>keys()</code> method on sets. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>keys()</code> method on sets, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>keys()</code> method on sets. The web browser does not support the JavaScript <code>keys()</code> method on sets.</q></p>

     <p>If the web browser recognizes the JavaScript <code>keys()</code> method on sets, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>keys()</code> method on sets includes support for at least one <code>keys()</code> method on sets capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>keys()</code> method on sets includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>keys()</code> method on sets, and supports at least one <code>keys()</code> method on sets capability. The web browser at least partially/possibly fully supports the JavaScript <code>keys()</code> method on sets. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>keys()</code> method on sets does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>keys()</code> method on sets, but does not support at least one <code>keys()</code> method on sets capability. The web browser partially supports the JavaScript <code>keys()</code> method on sets.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>keys()</code> Method On Sets Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF27+, CH38+, OP25+.</li>
      <li><q><b>Pass/Fail</b> (partial support):</q> FF24 - 26.</li>
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

     <h2><a id='test'></a>2. <code>keys()</code> Method On Sets Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;keys()&lt;/code&gt; method on sets. The web browser does not support the JavaScript &lt;code&gt;keys()&lt;/code&gt; method on sets.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
var testSet = new Set(); // IE11 does not support sets initialized with an iterable. Hence, use Set constructor and add() method.
testSet.add(&quot;a&quot;);
testSet.add(&quot;b&quot;);
testSet.add(&quot;c&quot;); // testSet is {&quot;a&quot;, &quot;b&quot;, &quot;c&quot;}.
var testSetIteratorKeys = testSet.keys(); // Get reference to set built-in set iterator object called by keys() method. NOTE: keys() method can be considered a generator function. Call keys() generator function. Call returns a Generator object which inherits prototype from Object (window.Generator property does not exist) and is an iterator. Generator object has next() method property. Called by keys(), set iterator object next() method return object value property is set to set element value.
var testSetIteratorKeysNextValues = [];
for (var i = 0; i &lt; testSet.size; i++){ // Identical to for (var key of testSet.keys()){console.log(key);}. 1.) &quot;a&quot;, 2.) &quot;b&quot;, 3.) &quot;c&quot;.
 testSetIteratorKeysNextValues[i] = testSetIteratorKeys.next().value;
}
if (testSet.keys){
 var element = document.getElementById(&quot;testId&quot;);
 if ((typeof testSetIteratorKeys === &quot;object&quot;) &amp;&amp; testSetIteratorKeys instanceof Object &amp;&amp; Object.prototype.isPrototypeOf(testSetIteratorKeys) &amp;&amp; (typeof testSetIteratorKeysNextValues[0] === &quot;string&quot;) &amp;&amp; (testSetIteratorKeysNextValues[0] === &quot;a&quot;) &amp;&amp; (testSetIteratorKeysNextValues[1] === &quot;b&quot;) &amp;&amp; (testSetIteratorKeysNextValues[2] === &quot;c&quot;)){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;keys()&lt;/code&gt; method on sets, and supports at least one &lt;code&gt;keys()&lt;/code&gt; method on sets capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;keys()&lt;/code&gt; method on sets. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;keys()&lt;/code&gt; method on sets, but does not support at least one &lt;code&gt;keys()&lt;/code&gt; method on sets capability. The web browser partially supports the JavaScript &lt;code&gt;keys()&lt;/code&gt; method on sets.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- Similar test code in Generator object, entries() method on sets, keys() method on sets, and values() method on sets. -->
<!-- Use for statement/loop instead of ECMAScript 2015 for...of statement/loop to avoid for...of statement/loop possibly skewing test result. -->
<!-- Per LWC web browser support testing, keys() method on sets supported by ED12+, FF27+, CH38+, OP25+, partial FF24 - 26, no IE11-, SF5.1.7- and [Symbol.iterator] property supported by ED12+, FF36+, CH38+, OP25+, no IE11-, SF5.1.7-. Therefore, in web browser support test below, did not test if (setIteratorKeys[Symbol.iterator]) to avoid skewing test result to newer version FF. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>keys()</code> method on sets. The web browser does not support the JavaScript <code>keys()</code> method on sets.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var testSet = new Set(); // IE11 does not support sets initialized with an iterable. Hence, use Set constructor and add() method.
     testSet.add(\"a\");
     testSet.add(\"b\");
     testSet.add(\"c\"); // testSet is {\"a\", \"b\", \"c\"}.
     var testSetIteratorKeys = testSet.keys(); // Get reference to set built-in set iterator object called by keys() method. NOTE: keys() method can be considered a generator function. Call keys() generator function. Call returns a Generator object which inherits prototype from Object (window.Generator property does not exist) and is an iterator. Generator object has next() method property. Called by keys(), set iterator object next() method return object value property is set to set element value.
     var testSetIteratorKeysNextValues = [];
     for (var i = 0; i < testSet.size; i++){ // Identical to for (var key of testSet.keys()){console.log(key);}. 1.) \"a\", 2.) \"b\", 3.) \"c\".
      testSetIteratorKeysNextValues[i] = testSetIteratorKeys.next().value;
     }
     if (testSet.keys){
      var element = document.getElementById(\"testId\");
      if ((typeof testSetIteratorKeys === \"object\") && testSetIteratorKeys instanceof Object && Object.prototype.isPrototypeOf(testSetIteratorKeys) && (typeof testSetIteratorKeysNextValues[0] === \"string\") && (testSetIteratorKeysNextValues[0] === \"a\") && (testSetIteratorKeysNextValues[1] === \"b\") && (testSetIteratorKeysNextValues[2] === \"c\")){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>keys()</code> method on sets, and supports at least one <code>keys()</code> method on sets capability. The web browser at least partially/possibly fully supports the JavaScript <code>keys()</code> method on sets. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>keys()</code> method on sets, but does not support at least one <code>keys()</code> method on sets capability. The web browser partially supports the JavaScript <code>keys()</code> method on sets.\";
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
