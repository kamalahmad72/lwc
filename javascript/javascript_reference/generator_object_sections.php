<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/generator_object_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/generator_object.php.
 * Last reviewed/updated: 03 Jan 2018.
 * Published: 01 Jan 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>Generator</code> object. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>Generator</code> object, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>Generator</code> object. The web browser does not support the JavaScript <code>Generator</code> object.</q></p>

     <p>If the web browser recognizes the JavaScript <code>Generator</code> object, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>Generator</code> object includes support for at least one <code>Generator</code> object capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>Generator</code> object includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>Generator</code> object, and supports at least one <code>Generator</code> object capability. The web browser at least partially/possibly fully supports the JavaScript <code>Generator</code> object. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>Generator</code> object does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>Generator</code> object, but does not support at least one <code>Generator</code> object capability. The web browser partially supports the JavaScript <code>Generator</code> object.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>Generator</code> Object Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED13+, FF29+, CH39+, OP26+.</li>
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

     <h2><a id='test'></a>2. <code>Generator</code> Object Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

     <div class='note normal'>For the web browser test source code with additional comments, see <a href='/javascript/javascript_reference/javascript_reference_test_only/generator_object_test_only_with_additional_comments.html'><code>Generator</code> Object Web Browser Support Test With Additional Comments (learnwebcoding.com)</a>.</div>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;Generator&lt;/code&gt; object. The web browser does not support the JavaScript &lt;code&gt;Generator&lt;/code&gt; object.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
function* generatorFunctionOne(){
 yield 1; // First call to next() returns Object {value: 1, done: false}.
 yield 2; // Second call to next() returns Object {value: 2, done: false}.
 yield 3; // Third call to next() returns Object {value: 3, done: false}. Subsequent calls to next() return Object {value: undefined, done: true}.
}
function* generatorFunctionTwo(param){
 yield param; // First call to next() returns Object {value: 1, done: false}. param = 1 throughout.
 yield param + 1; // Second call to next() returns Object {value: 2, done: false}. param = 1 throughout.
 yield param + 2; // Third call to next() returns Object {value: 3, done: false}. Subsequent calls to next() return Object {value: undefined, done: true}. param = 1 throughout.
}
function* generatorFunctionThree(param){
 yield param++; // param = 1. First call to next() returns Object {value: 1, done: false}. Then post increment param to 2.
 yield param++; // param = 2 from line above. Second call to next() returns Object {value: 2, done: false}. Then post increment param to 3.
 yield param++; // param = 3 from line above. Third call to next() returns Object {value: 3, done: false}. Then post increment param to 4. Subsequent calls to next() return Object {value: undefined, done: true}.
}
function* generatorFunctionFour(){
 yield 1; // First call to next() returns Object {value: 1, done: false}.
 return 2; // Second call to next() returns Object {value: 2, done: true}. Subsequent calls to next() return Object {value: undefined, done: true}.
 yield 3; // Unreachable code after return statement.
}
// Call generator functions. Each call returns a Generator object which inherits prototype from Object (window.Generator property does not exist) and is an iterator. Generator object has next() method property.
var generatorObjectOne = generatorFunctionOne();
var generatorObjectTwo = generatorFunctionTwo(1);
var generatorObjectThree = generatorFunctionThree(1);
var generatorObjectFour = generatorFunctionFour();
// For generatorObjectOne capability tests.
var generatorObjectOneFirstNext = generatorObjectOne.next(); // Object {value: 1, done: false}.
var generatorObjectOneFirstNextValue = generatorObjectOneFirstNext.value; // 1.
var generatorObjectOneFirstNextDone = generatorObjectOneFirstNext.done; // false.
var generatorObjectOneSecondNextValue = generatorObjectOne.next().value; // 2.
var generatorObjectOneThirdNext = generatorObjectOne.next(); // Object {value: 3, done: false}.
var generatorObjectOneThirdNextValue = generatorObjectOneThirdNext.value; // 3.
var generatorObjectOneThirdNextDone = generatorObjectOneThirdNext.done; // false.
var generatorObjectOneSubsequentNext = generatorObjectOne.next(); // Object {value: undefined, done: true}.
var generatorObjectOneSubsequentNextValue = generatorObjectOneSubsequentNext.value; // undefined.
var generatorObjectOneSubsequentNextDone = generatorObjectOneSubsequentNext.done; // true.
// For generatorObjectFour capability tests.
var generatorObjectFourFirstNext = generatorObjectFour.next(); // Object {value: 1, done: false}.
var generatorObjectFourFirstNextValue = generatorObjectFourFirstNext.value; // 1.
var generatorObjectFourFirstNextDone = generatorObjectFourFirstNext.done; // false.
var generatorObjectFourSecondNext = generatorObjectFour.next(); // Object {value: 2, done: true}.
var generatorObjectFourSecondNextValue = generatorObjectFourSecondNext.value; // 2.
var generatorObjectFourSecondNextDone = generatorObjectFourSecondNext.done; // true.
var generatorObjectFourSubsequentNext = generatorObjectFour.next(); // Object {value: undefined, done: true}.
var generatorObjectFourSubsequentNextValue = generatorObjectFourSubsequentNext.value; // undefined.
var generatorObjectFourSubsequentNextDone = generatorObjectFourSubsequentNext.done; // true.
if (window.generatorObjectOne){ // Identical to if (generatorObjectOne).
 var element = document.getElementById(&quot;testId&quot;);
 if ((typeof generatorObjectOne === &quot;object&quot;) &amp;&amp; generatorObjectOne instanceof Object &amp;&amp; Object.prototype.isPrototypeOf(generatorObjectOne) &amp;&amp; generatorObjectOne[Symbol.iterator] &amp;&amp; (typeof generatorObjectOneFirstNext === &quot;object&quot;) &amp;&amp; (generatorObjectOneFirstNextValue === 1) &amp;&amp; (generatorObjectOneFirstNextDone === false) &amp;&amp; (generatorObjectOneSecondNextValue === 2) &amp;&amp; (generatorObjectOneThirdNextValue === 3) &amp;&amp; (generatorObjectOneThirdNextDone === false) &amp;&amp; (typeof generatorObjectOneSubsequentNext === &quot;object&quot;) &amp;&amp; (generatorObjectOneSubsequentNextValue === undefined) &amp;&amp; (generatorObjectOneSubsequentNextDone === true) &amp;&amp; (generatorObjectTwo.next().value === 1) &amp;&amp; (generatorObjectTwo.next().value === 2) &amp;&amp; (generatorObjectTwo.next().value === 3) &amp;&amp; (generatorObjectThree.next().value === 1) &amp;&amp; (generatorObjectThree.next().value === 2) &amp;&amp; (generatorObjectThree.next().value === 3) &amp;&amp; (generatorObjectThree.next().value === undefined) &amp;&amp; (generatorObjectThree.next().value === undefined) &amp;&amp; (generatorObjectFourFirstNextValue === 1) &amp;&amp; (generatorObjectFourFirstNextDone === false) &amp;&amp; (generatorObjectFourSecondNextValue === 2) &amp;&amp; (generatorObjectFourSecondNextDone === true) &amp;&amp; (generatorObjectFourSubsequentNextValue === undefined) &amp;&amp; (generatorObjectFourSubsequentNextDone === true)){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;Generator&lt;/code&gt; object, and supports at least one &lt;code&gt;Generator&lt;/code&gt; object capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;Generator&lt;/code&gt; object. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;Generator&lt;/code&gt; object, but does not support at least one &lt;code&gt;Generator&lt;/code&gt; object capability. The web browser partially supports the JavaScript &lt;code&gt;Generator&lt;/code&gt; object.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>Generator</code> object. The web browser does not support the JavaScript <code>Generator</code> object.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     function* generatorFunctionOne(){
      yield 1; // First call to next() returns Object {value: 1, done: false}.
      yield 2; // Second call to next() returns Object {value: 2, done: false}.
      yield 3; // Third call to next() returns Object {value: 3, done: false}. Subsequent calls to next() return Object {value: undefined, done: true}.
     }
     function* generatorFunctionTwo(param){
      yield param; // First call to next() returns Object {value: 1, done: false}. param = 1 throughout.
      yield param + 1; // Second call to next() returns Object {value: 2, done: false}. param = 1 throughout.
      yield param + 2; // Third call to next() returns Object {value: 3, done: false}. Subsequent calls to next() return Object {value: undefined, done: true}. param = 1 throughout.
     }
     function* generatorFunctionThree(param){
      yield param++; // param = 1. First call to next() returns Object {value: 1, done: false}. Then post increment param to 2.
      yield param++; // param = 2 from line above. Second call to next() returns Object {value: 2, done: false}. Then post increment param to 3.
      yield param++; // param = 3 from line above. Third call to next() returns Object {value: 3, done: false}. Then post increment param to 4. Subsequent calls to next() return Object {value: undefined, done: true}.
     }
     function* generatorFunctionFour(){
      yield 1; // First call to next() returns Object {value: 1, done: false}.
      return 2; // Second call to next() returns Object {value: 2, done: true}. Subsequent calls to next() return Object {value: undefined, done: true}.
      yield 3; // Unreachable code after return statement.
     }
     // Call generator functions. Each call returns a Generator object which inherits prototype from Object (window.Generator property does not exist) and is an iterator. Generator object has next() method property.
     var generatorObjectOne = generatorFunctionOne();
     var generatorObjectTwo = generatorFunctionTwo(1);
     var generatorObjectThree = generatorFunctionThree(1);
     var generatorObjectFour = generatorFunctionFour();
     // For generatorObjectOne capability tests.
     var generatorObjectOneFirstNext = generatorObjectOne.next(); // Object {value: 1, done: false}.
     var generatorObjectOneFirstNextValue = generatorObjectOneFirstNext.value; // 1.
     var generatorObjectOneFirstNextDone = generatorObjectOneFirstNext.done; // false.
     var generatorObjectOneSecondNextValue = generatorObjectOne.next().value; // 2.
     var generatorObjectOneThirdNext = generatorObjectOne.next(); // Object {value: 3, done: false}.
     var generatorObjectOneThirdNextValue = generatorObjectOneThirdNext.value; // 3.
     var generatorObjectOneThirdNextDone = generatorObjectOneThirdNext.done; // false.
     var generatorObjectOneSubsequentNext = generatorObjectOne.next(); // Object {value: undefined, done: true}.
     var generatorObjectOneSubsequentNextValue = generatorObjectOneSubsequentNext.value; // undefined.
     var generatorObjectOneSubsequentNextDone = generatorObjectOneSubsequentNext.done; // true.
     // For generatorObjectFour capability tests.
     var generatorObjectFourFirstNext = generatorObjectFour.next(); // Object {value: 1, done: false}.
     var generatorObjectFourFirstNextValue = generatorObjectFourFirstNext.value; // 1.
     var generatorObjectFourFirstNextDone = generatorObjectFourFirstNext.done; // false.
     var generatorObjectFourSecondNext = generatorObjectFour.next(); // Object {value: 2, done: true}.
     var generatorObjectFourSecondNextValue = generatorObjectFourSecondNext.value; // 2.
     var generatorObjectFourSecondNextDone = generatorObjectFourSecondNext.done; // true.
     var generatorObjectFourSubsequentNext = generatorObjectFour.next(); // Object {value: undefined, done: true}.
     var generatorObjectFourSubsequentNextValue = generatorObjectFourSubsequentNext.value; // undefined.
     var generatorObjectFourSubsequentNextDone = generatorObjectFourSubsequentNext.done; // true.
     if (window.generatorObjectOne){ // Identical to if (generatorObjectOne).
      var element = document.getElementById(\"testId\");
      if ((typeof generatorObjectOne === \"object\") && generatorObjectOne instanceof Object && Object.prototype.isPrototypeOf(generatorObjectOne) && generatorObjectOne[Symbol.iterator] && (typeof generatorObjectOneFirstNext === \"object\") && (generatorObjectOneFirstNextValue === 1) && (generatorObjectOneFirstNextDone === false) && (generatorObjectOneSecondNextValue === 2) && (generatorObjectOneThirdNextValue === 3) && (generatorObjectOneThirdNextDone === false) && (typeof generatorObjectOneSubsequentNext === \"object\") && (generatorObjectOneSubsequentNextValue === undefined) && (generatorObjectOneSubsequentNextDone === true) && (generatorObjectTwo.next().value === 1) && (generatorObjectTwo.next().value === 2) && (generatorObjectTwo.next().value === 3) && (generatorObjectThree.next().value === 1) && (generatorObjectThree.next().value === 2) && (generatorObjectThree.next().value === 3) && (generatorObjectThree.next().value === undefined) && (generatorObjectThree.next().value === undefined) && (generatorObjectFourFirstNextValue === 1) && (generatorObjectFourFirstNextDone === false) && (generatorObjectFourSecondNextValue === 2) && (generatorObjectFourSecondNextDone === true) && (generatorObjectFourSubsequentNextValue === undefined) && (generatorObjectFourSubsequentNextDone === true)){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>Generator</code> object, and supports at least one <code>Generator</code> object capability. The web browser at least partially/possibly fully supports the JavaScript <code>Generator</code> object. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>Generator</code> object, but does not support at least one <code>Generator</code> object capability. The web browser partially supports the JavaScript <code>Generator</code> object.\";
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
