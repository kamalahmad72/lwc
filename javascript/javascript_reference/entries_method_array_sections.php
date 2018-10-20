<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/entries_method_array_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/entries_method_array.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 12 Jan 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>entries()</code> method on arrays. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>entries()</code> method on arrays, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>entries()</code> method on arrays. The web browser does not support the JavaScript <code>entries()</code> method on arrays.</q></p>

     <p>If the web browser recognizes the JavaScript <code>entries()</code> method on arrays, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>entries()</code> method on arrays includes support for at least one <code>entries()</code> method on arrays capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>entries()</code> method on arrays includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>entries()</code> method on arrays, and supports at least one <code>entries()</code> method on arrays capability. The web browser at least partially/possibly fully supports the JavaScript <code>entries()</code> method on arrays. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>entries()</code> method on arrays does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>entries()</code> method on arrays, but does not support at least one <code>entries()</code> method on arrays capability. The web browser partially supports the JavaScript <code>entries()</code> method on arrays.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>entries()</code> Method On Arrays Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF28+, CH38+, OP25+.</li>
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

     <h2><a id='test'></a>2. <code>entries()</code> Method On Arrays Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;entries()&lt;/code&gt; method on arrays. The web browser does not support the JavaScript &lt;code&gt;entries()&lt;/code&gt; method on arrays.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
var arrayViaArrayConstructor = new Array();
arrayViaArrayConstructor[0] = &quot;a&quot;;
arrayViaArrayConstructor[1] = &quot;b&quot;;
arrayViaArrayConstructor[2] = &quot;c&quot;;
var arrayLiteral = [&quot;d&quot;, &quot;e&quot;, &quot;f&quot;];
// Get references to array built-in array iterator object called by entries() method. NOTE: entries() method can be considered a generator function. Call entries() generator functions. Each call returns a Generator object which inherits prototype from Object (window.Generator property does not exist) and is an iterator. Generator object has next() method property. Called by entries(), array iterator object next() method return object value property is set to two element array with first element set to array element numeric index and second element set to array element value.
var arrayViaArrayConstructorIteratorEntries = arrayViaArrayConstructor.entries();
var arrayLiteralIteratorEntries = arrayLiteral.entries();
var arrayViaArrayConstructorIteratorEntriesNextValues = [];
var arrayLiteralIteratorEntriesNextValues = [];
for (var i = 0; i &lt; arrayViaArrayConstructor.length; i++){ // Identical to for (var entry of arrayViaArrayConstructor.entries()){console.log(entry);}. 1.) [0, &quot;a&quot;], 2.) [1, &quot;b&quot;], 3.) [2, &quot;c&quot;].
 arrayViaArrayConstructorIteratorEntriesNextValues[i] = arrayViaArrayConstructorIteratorEntries.next().value;
}
for (var i = 0; i &lt; arrayLiteral.length; i++){ // Identical to for (var entry of arrayLiteral.entries()){console.log(entry);}. 1.) [0, &quot;d&quot;], 2.) [1, &quot;e&quot;], 3.) [2, &quot;f&quot;].
 arrayLiteralIteratorEntriesNextValues[i] = arrayLiteralIteratorEntries.next().value;
}
if (arrayViaArrayConstructor.entries &amp;&amp; arrayLiteral.entries){
 var element = document.getElementById(&quot;testId&quot;);
 if ((typeof arrayViaArrayConstructorIteratorEntries === &quot;object&quot;) &amp;&amp; arrayViaArrayConstructorIteratorEntries instanceof Object &amp;&amp; Object.prototype.isPrototypeOf(arrayViaArrayConstructorIteratorEntries) &amp;&amp; Array.isArray(arrayViaArrayConstructorIteratorEntriesNextValues[0]) &amp;&amp; (arrayViaArrayConstructorIteratorEntriesNextValues[0][0] === 0) &amp;&amp; (arrayViaArrayConstructorIteratorEntriesNextValues[0][1] === &quot;a&quot;) &amp;&amp; (arrayViaArrayConstructorIteratorEntriesNextValues[1][0] === 1) &amp;&amp; (arrayViaArrayConstructorIteratorEntriesNextValues[1][1] === &quot;b&quot;) &amp;&amp; (arrayViaArrayConstructorIteratorEntriesNextValues[2][0] === 2) &amp;&amp; (arrayViaArrayConstructorIteratorEntriesNextValues[2][1] === &quot;c&quot;) &amp;&amp; (typeof arrayLiteralIteratorEntries === &quot;object&quot;) &amp;&amp; arrayLiteralIteratorEntries instanceof Object &amp;&amp; Object.prototype.isPrototypeOf(arrayLiteralIteratorEntries) &amp;&amp; Array.isArray(arrayLiteralIteratorEntriesNextValues[0]) &amp;&amp; (arrayLiteralIteratorEntriesNextValues[0][0] === 0) &amp;&amp; (arrayLiteralIteratorEntriesNextValues[0][1] === &quot;d&quot;) &amp;&amp; (arrayLiteralIteratorEntriesNextValues[1][0] === 1) &amp;&amp; (arrayLiteralIteratorEntriesNextValues[1][1] === &quot;e&quot;) &amp;&amp; (arrayLiteralIteratorEntriesNextValues[2][0] === 2) &amp;&amp; (arrayLiteralIteratorEntriesNextValues[2][1] === &quot;f&quot;)){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;entries()&lt;/code&gt; method on arrays, and supports at least one &lt;code&gt;entries()&lt;/code&gt; method on arrays capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;entries()&lt;/code&gt; method on arrays. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;entries()&lt;/code&gt; method on arrays, but does not support at least one &lt;code&gt;entries()&lt;/code&gt; method on arrays capability. The web browser partially supports the JavaScript &lt;code&gt;entries()&lt;/code&gt; method on arrays.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- Similar test code in Generator object, entries() method on arrays, keys() method on arrays, and values() method on arrays. -->
<!-- Use for statement/loop instead of ECMAScript 2015 for...of statement/loop to avoid for...of statement/loop possibly skewing test result. -->
<!-- Per LWC web browser support testing, entries() method on arrays supported by ED12+, FF28+, CH38+, OP25+, no IE11-, SF5.1.7- and [Symbol.iterator] property supported by ED12+, FF36+, CH38+, OP25+, no IE11-, SF5.1.7-. Therefore, in web browser support test below, did not test if (arrayIteratorEntries[Symbol.iterator]) to avoid skewing test result to newer version FF. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>entries()</code> method on arrays. The web browser does not support the JavaScript <code>entries()</code> method on arrays.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var arrayViaArrayConstructor = new Array();
     arrayViaArrayConstructor[0] = \"a\";
     arrayViaArrayConstructor[1] = \"b\";
     arrayViaArrayConstructor[2] = \"c\";
     var arrayLiteral = [\"d\", \"e\", \"f\"];
     // Get references to array built-in array iterator object called by entries() method. NOTE: entries() method can be considered a generator function. Call entries() generator functions. Each call returns a Generator object which inherits prototype from Object (window.Generator property does not exist) and is an iterator. Generator object has next() method property. Called by entries(), array iterator object next() method return object value property is set to two element array with first element set to array element numeric index and second element set to array element value.
     var arrayViaArrayConstructorIteratorEntries = arrayViaArrayConstructor.entries();
     var arrayLiteralIteratorEntries = arrayLiteral.entries();
     var arrayViaArrayConstructorIteratorEntriesNextValues = [];
     var arrayLiteralIteratorEntriesNextValues = [];
     for (var i = 0; i < arrayViaArrayConstructor.length; i++){ // Identical to for (var entry of arrayViaArrayConstructor.entries()){console.log(entry);}. 1.) [0, \"a\"], 2.) [1, \"b\"], 3.) [2, \"c\"].
      arrayViaArrayConstructorIteratorEntriesNextValues[i] = arrayViaArrayConstructorIteratorEntries.next().value;
     }
     for (var i = 0; i < arrayLiteral.length; i++){ // Identical to for (var entry of arrayLiteral.entries()){console.log(entry);}. 1.) [0, \"d\"], 2.) [1, \"e\"], 3.) [2, \"f\"].
      arrayLiteralIteratorEntriesNextValues[i] = arrayLiteralIteratorEntries.next().value;
     }
     if (arrayViaArrayConstructor.entries && arrayLiteral.entries){
      var element = document.getElementById(\"testId\");
      if ((typeof arrayViaArrayConstructorIteratorEntries === \"object\") && arrayViaArrayConstructorIteratorEntries instanceof Object && Object.prototype.isPrototypeOf(arrayViaArrayConstructorIteratorEntries) && Array.isArray(arrayViaArrayConstructorIteratorEntriesNextValues[0]) && (arrayViaArrayConstructorIteratorEntriesNextValues[0][0] === 0) && (arrayViaArrayConstructorIteratorEntriesNextValues[0][1] === \"a\") && (arrayViaArrayConstructorIteratorEntriesNextValues[1][0] === 1) && (arrayViaArrayConstructorIteratorEntriesNextValues[1][1] === \"b\") && (arrayViaArrayConstructorIteratorEntriesNextValues[2][0] === 2) && (arrayViaArrayConstructorIteratorEntriesNextValues[2][1] === \"c\") && (typeof arrayLiteralIteratorEntries === \"object\") && arrayLiteralIteratorEntries instanceof Object && Object.prototype.isPrototypeOf(arrayLiteralIteratorEntries) && Array.isArray(arrayLiteralIteratorEntriesNextValues[0]) && (arrayLiteralIteratorEntriesNextValues[0][0] === 0) && (arrayLiteralIteratorEntriesNextValues[0][1] === \"d\") && (arrayLiteralIteratorEntriesNextValues[1][0] === 1) && (arrayLiteralIteratorEntriesNextValues[1][1] === \"e\") && (arrayLiteralIteratorEntriesNextValues[2][0] === 2) && (arrayLiteralIteratorEntriesNextValues[2][1] === \"f\")){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>entries()</code> method on arrays, and supports at least one <code>entries()</code> method on arrays capability. The web browser at least partially/possibly fully supports the JavaScript <code>entries()</code> method on arrays. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>entries()</code> method on arrays, but does not support at least one <code>entries()</code> method on arrays capability. The web browser partially supports the JavaScript <code>entries()</code> method on arrays.\";
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
