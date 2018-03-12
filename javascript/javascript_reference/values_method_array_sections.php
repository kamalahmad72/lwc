<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/values_method_array_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/values_method_array.php.
 * Last reviewed/updated: 12 Jan 2018.
 * Published: 12 Jan 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>values()</code> method on arrays. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>values()</code> method on arrays, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>values()</code> method on arrays. The web browser does not support the JavaScript <code>values()</code> method on arrays.</q></p>

     <p>If the web browser recognizes the JavaScript <code>values()</code> method on arrays, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>values()</code> method on arrays includes support for at least one <code>values()</code> method on arrays capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>values()</code> method on arrays includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>values()</code> method on arrays, and supports at least one <code>values()</code> method on arrays capability. The web browser at least partially/possibly fully supports the JavaScript <code>values()</code> method on arrays. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>values()</code> method on arrays does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>values()</code> method on arrays, but does not support at least one <code>values()</code> method on arrays capability. The web browser partially supports the JavaScript <code>values()</code> method on arrays.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>values()</code> Method On Arrays Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+.</li>
      <li><q><b>Fail</b> (no support):</q> IE11-, FF57-, SF5.1.7-, CH63- (except CH38.0.2125.101 - 38.0.2125.104), OP50- (except OP25.0.1614.50 - 25.0.1614.63).</li>
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

     <h2><a id='test'></a>2. <code>values()</code> Method On Arrays Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;values()&lt;/code&gt; method on arrays. The web browser does not support the JavaScript &lt;code&gt;values()&lt;/code&gt; method on arrays.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
var arrayViaArrayConstructor = new Array();
arrayViaArrayConstructor[0] = &quot;a&quot;;
arrayViaArrayConstructor[1] = &quot;b&quot;;
arrayViaArrayConstructor[2] = &quot;c&quot;;
var arrayLiteral = [&quot;d&quot;, &quot;e&quot;, &quot;f&quot;];
// Get references to array built-in array iterator object called by values() method. NOTE: values() method can be considered a generator function. Call values() generator functions. Each call returns a Generator object which inherits prototype from Object (window.Generator property does not exist) and is an iterator. Generator object has next() method property. Called by values(), array iterator object next() method return object value property is set to array element value.
var arrayViaArrayConstructorIteratorValues = arrayViaArrayConstructor.values();
var arrayLiteralIteratorValues = arrayLiteral.values();
var arrayViaArrayConstructorIteratorValuesNextValues = [];
var arrayLiteralIteratorValuesNextValues = [];
for (var i = 0; i &lt; arrayViaArrayConstructor.length; i++){ // Identical to for (var value of arrayViaArrayConstructor.values()){console.log(value);}. 1.) &quot;a&quot;, 2.) &quot;b&quot;, 3.) &quot;c&quot;.
 arrayViaArrayConstructorIteratorValuesNextValues[i] = arrayViaArrayConstructorIteratorValues.next().value;
}
for (var i = 0; i &lt; arrayLiteral.length; i++){ // Identical to for (var value of arrayLiteral.values()){console.log(value);}. 1.) &quot;d&quot;, 2.) &quot;e&quot;, 3.) &quot;f&quot;.
 arrayLiteralIteratorValuesNextValues[i] = arrayLiteralIteratorValues.next().value;
}
if (arrayViaArrayConstructor.keys &amp;&amp; arrayLiteral.keys){
 var element = document.getElementById(&quot;testId&quot;);
 if ((typeof arrayViaArrayConstructorIteratorValues === &quot;object&quot;) &amp;&amp; arrayViaArrayConstructorIteratorValues instanceof Object &amp;&amp; Object.prototype.isPrototypeOf(arrayViaArrayConstructorIteratorValues) &amp;&amp; (typeof arrayViaArrayConstructorIteratorValuesNextValues[0] === &quot;string&quot;) &amp;&amp; (arrayViaArrayConstructorIteratorValuesNextValues[0] === &quot;a&quot;) &amp;&amp; (arrayViaArrayConstructorIteratorValuesNextValues[1] === &quot;b&quot;) &amp;&amp; (arrayViaArrayConstructorIteratorValuesNextValues[2] === &quot;c&quot;) &amp;&amp; (typeof arrayLiteralIteratorValues === &quot;object&quot;) &amp;&amp; arrayLiteralIteratorValues instanceof Object &amp;&amp; Object.prototype.isPrototypeOf(arrayLiteralIteratorValues) &amp;&amp; (typeof arrayLiteralIteratorValuesNextValues[0] === &quot;string&quot;) &amp;&amp; (arrayLiteralIteratorValuesNextValues[0] === &quot;d&quot;) &amp;&amp; (arrayLiteralIteratorValuesNextValues[1] === &quot;e&quot;) &amp;&amp; (arrayLiteralIteratorValuesNextValues[2] === &quot;f&quot;)){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;values()&lt;/code&gt; method on arrays, and supports at least one &lt;code&gt;values()&lt;/code&gt; method on arrays capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;values()&lt;/code&gt; method on arrays. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;values()&lt;/code&gt; method on arrays, but does not support at least one &lt;code&gt;values()&lt;/code&gt; method on arrays capability. The web browser partially supports the JavaScript &lt;code&gt;values()&lt;/code&gt; method on arrays.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- Similar test code in Generator object, entries() method on arrays, keys() method on arrays, and values() method on arrays. -->
<!-- Use for statement/loop instead of ECMAScript 2015 for...of statement/loop to avoid for...of statement/loop possibly skewing test result. -->
<!-- Per LWC web browser support testing, values() method on arrays supported by ED12+, no IE11-, FF57-, SF5.1.7-, CH63- (except CH38.0.2125.101 - 38.0.2125.104), OP50- (except OP25.0.1614.50 - 25.0.1614.63) and [Symbol.iterator] property supported by ED12+, FF36+, CH38+, OP25+, no IE11-, SF5.1.7-. Therefore, in web browser support test below, did not test if (arrayIteratorValues[Symbol.iterator]) for consistency with entries() method on arrays and keys() method on arrays web browser support tests. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>values()</code> method on arrays. The web browser does not support the JavaScript <code>values()</code> method on arrays.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var arrayViaArrayConstructor = new Array();
     arrayViaArrayConstructor[0] = \"a\";
     arrayViaArrayConstructor[1] = \"b\";
     arrayViaArrayConstructor[2] = \"c\";
     var arrayLiteral = [\"d\", \"e\", \"f\"];
     // Get references to array built-in array iterator object called by values() method. NOTE: values() method can be considered a generator function. Call values() generator functions. Each call returns a Generator object which inherits prototype from Object (window.Generator property does not exist) and is an iterator. Generator object has next() method property. Called by values(), array iterator object next() method return object value property is set to array element value.
     var arrayViaArrayConstructorIteratorValues = arrayViaArrayConstructor.values();
     var arrayLiteralIteratorValues = arrayLiteral.values();
     var arrayViaArrayConstructorIteratorValuesNextValues = [];
     var arrayLiteralIteratorValuesNextValues = [];
     for (var i = 0; i < arrayViaArrayConstructor.length; i++){ // Identical to for (var value of arrayViaArrayConstructor.values()){console.log(value);}. 1.) \"a\", 2.) \"b\", 3.) \"c\".
      arrayViaArrayConstructorIteratorValuesNextValues[i] = arrayViaArrayConstructorIteratorValues.next().value;
     }
     for (var i = 0; i < arrayLiteral.length; i++){ // Identical to for (var value of arrayLiteral.values()){console.log(value);}. 1.) \"d\", 2.) \"e\", 3.) \"f\".
      arrayLiteralIteratorValuesNextValues[i] = arrayLiteralIteratorValues.next().value;
     }
     if (arrayViaArrayConstructor.keys && arrayLiteral.keys){
      var element = document.getElementById(\"testId\");
      if ((typeof arrayViaArrayConstructorIteratorValues === \"object\") && arrayViaArrayConstructorIteratorValues instanceof Object && Object.prototype.isPrototypeOf(arrayViaArrayConstructorIteratorValues) && (typeof arrayViaArrayConstructorIteratorValuesNextValues[0] === \"string\") && (arrayViaArrayConstructorIteratorValuesNextValues[0] === \"a\") && (arrayViaArrayConstructorIteratorValuesNextValues[1] === \"b\") && (arrayViaArrayConstructorIteratorValuesNextValues[2] === \"c\") && (typeof arrayLiteralIteratorValues === \"object\") && arrayLiteralIteratorValues instanceof Object && Object.prototype.isPrototypeOf(arrayLiteralIteratorValues) && (typeof arrayLiteralIteratorValuesNextValues[0] === \"string\") && (arrayLiteralIteratorValuesNextValues[0] === \"d\") && (arrayLiteralIteratorValuesNextValues[1] === \"e\") && (arrayLiteralIteratorValuesNextValues[2] === \"f\")){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>values()</code> method on arrays, and supports at least one <code>values()</code> method on arrays capability. The web browser at least partially/possibly fully supports the JavaScript <code>values()</code> method on arrays. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>values()</code> method on arrays, but does not support at least one <code>values()</code> method on arrays capability. The web browser partially supports the JavaScript <code>values()</code> method on arrays.\";
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
