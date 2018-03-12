<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/typedArray_object_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/typedArray_object.php.
 * Last reviewed/updated: 05 Jan 2018.
 * Published: 01 Jan 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>TypedArray</code> object. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>TypedArray</code> object, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>TypedArray</code> object. The web browser does not support the JavaScript <code>TypedArray</code> object.</q></p>

     <p>If the web browser recognizes the JavaScript <code>TypedArray</code> object, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>TypedArray</code> object includes support for at least one <code>TypedArray</code> object capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>TypedArray</code> object includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>TypedArray</code> object, and supports at least one <code>TypedArray</code> object capability. The web browser at least partially/possibly fully supports the JavaScript <code>TypedArray</code> object. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>TypedArray</code> object does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>TypedArray</code> object, but does not support at least one <code>TypedArray</code> object capability. The web browser partially supports the JavaScript <code>TypedArray</code> object.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>TypedArray</code> Object Web Browser Support</h3>

     <p><q><b>Pass</b> (at least partial/possibly full support):</q> IE10+, ED12+, FF4+, SF5.1+, CH9+, OP11.60+.</p>

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

     <h2><a id='test'></a>2. <code>TypedArray</code> Object Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;TypedArray&lt;/code&gt; object. The web browser does not support the JavaScript &lt;code&gt;TypedArray&lt;/code&gt; object.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
// Call typed array constructor with new to instantiate typed arrays. Constructor returns a TypedArray object which inherits prototype from Object, not Array (window.TypedArray property does not exist).
var typedArrayOne = new Int8Array(); // Instantiate typedArrayOne with zero 8-bit elements. typedArrayOne has zero elements (length === 0). Each element is 8 bits. 8 bits = 1 byte. One 8-bit element requires one byte. Zero 8-bit elements require zero bytes (byteLength === 0).
var typedArrayTwo = new Int8Array(2); // Instantiate typedArrayTwo with two 8-bit elements. typedArrayTwo has two elements (length === 2). Each element is 8 bits. 8 bits = 1 byte. One 8-bit element requires one byte. Two 8-bit elements require two bytes (byteLength === 2).
var typedArrayThree = new Int16Array(2); // Instantiate typedArrayThree with two 16-bit elements. typedArrayThree has two elements (length === 2). Each element is 16 bits. 8 bits = 1 byte. One 16-bit element requires two bytes. Two 16-bit elements require four bytes (byteLength === 4).
var typedArrayFour = new Int8Array(3); // Instantiate typedArrayFour with three 8-bit elements holding no values.
typedArrayFour[0] = 10; // Assign typedArrayFour element index 0 value 10.
typedArrayFour[1] = 20; // Assign typedArrayFour element 1 index value 20.
typedArrayFour[2] = typedArrayFour[0] + typedArrayFour[1]; // Assign typedArrayFour element index 2 value typedArrayFour[0] plus typedArrayFour[1] (ie, 10 + 20).
var typedArrayFive = new Int8Array([11,22,33]); // Instantiate typedArrayFive with three 8-bit elements holding values 11, 22, and 33 from passed array.
var typedArraySix = new Int8Array(typedArrayFive); // Instantiate typedArraySix with 8-bit elements holding values from passed typed array.
if (window.typedArrayOne){ // Identical to if (typedArrayOne).
 var element = document.getElementById(&quot;testId&quot;);
 if ((typeof typedArrayOne === &quot;object&quot;) &amp;&amp; typedArrayOne instanceof Object &amp;&amp; !(typedArrayOne instanceof Array) &amp;&amp; Object.prototype.isPrototypeOf(typedArrayOne) &amp;&amp; !Array.prototype.isPrototypeOf(typedArrayOne) &amp;&amp; !Array.isArray(typedArrayOne) &amp;&amp; (typedArrayOne.length === 0) &amp;&amp; (typedArrayOne.byteLength === 0) &amp;&amp; (typedArrayTwo.length === 2) &amp;&amp; (typedArrayTwo.byteLength === 2) &amp;&amp; (typedArrayThree.length === 2) &amp;&amp; (typedArrayThree.byteLength === 4) &amp;&amp; (typedArrayFour.length === 3) &amp;&amp; (typedArrayFour[0] === 10) &amp;&amp; (typedArrayFour[2] === 30) &amp;&amp; (typedArrayFive.length === 3) &amp;&amp; (typedArrayFive[0] === 11) &amp;&amp; (typedArrayFive[2] === 33) &amp;&amp; (typedArraySix.length === 3) &amp;&amp; (typedArraySix[0] === 11) &amp;&amp; (typedArraySix[2] === 33)){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;TypedArray&lt;/code&gt; object, and supports at least one &lt;code&gt;TypedArray&lt;/code&gt; object capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;TypedArray&lt;/code&gt; object. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;TypedArray&lt;/code&gt; object, but does not support at least one &lt;code&gt;TypedArray&lt;/code&gt; object capability. The web browser partially supports the JavaScript &lt;code&gt;TypedArray&lt;/code&gt; object.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- TypedArray object web browser support test results mentioned in [Symbol.iterator] property. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>TypedArray</code> object. The web browser does not support the JavaScript <code>TypedArray</code> object.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     // Call typed array constructor with new to instantiate typed arrays. Constructor returns a TypedArray object which inherits prototype from Object, not Array (window.TypedArray property does not exist).
     var typedArrayOne = new Int8Array(); // Instantiate typedArrayOne with zero 8-bit elements. typedArrayOne has zero elements (length === 0). Each element is 8 bits. 8 bits = 1 byte. One 8-bit element requires one byte. Zero 8-bit elements require zero bytes (byteLength === 0).
     var typedArrayTwo = new Int8Array(2); // Instantiate typedArrayTwo with two 8-bit elements. typedArrayTwo has two elements (length === 2). Each element is 8 bits. 8 bits = 1 byte. One 8-bit element requires one byte. Two 8-bit elements require two bytes (byteLength === 2).
     var typedArrayThree = new Int16Array(2); // Instantiate typedArrayThree with two 16-bit elements. typedArrayThree has two elements (length === 2). Each element is 16 bits. 8 bits = 1 byte. One 16-bit element requires two bytes. Two 16-bit elements require four bytes (byteLength === 4).
     var typedArrayFour = new Int8Array(3); // Instantiate typedArrayFour with three 8-bit elements holding no values.
     typedArrayFour[0] = 10; // Assign typedArrayFour element index 0 value 10.
     typedArrayFour[1] = 20; // Assign typedArrayFour element 1 index value 20.
     typedArrayFour[2] = typedArrayFour[0] + typedArrayFour[1]; // Assign typedArrayFour element index 2 value typedArrayFour[0] plus typedArrayFour[1] (ie, 10 + 20).
     var typedArrayFive = new Int8Array([11,22,33]); // Instantiate typedArrayFive with three 8-bit elements holding values 11, 22, and 33 from passed array.
     var typedArraySix = new Int8Array(typedArrayFive); // Instantiate typedArraySix with 8-bit elements holding values from passed typed array.
     if (window.typedArrayOne){ // Identical to if (typedArrayOne).
      var element = document.getElementById(\"testId\");
      if ((typeof typedArrayOne === \"object\") && typedArrayOne instanceof Object && !(typedArrayOne instanceof Array) && Object.prototype.isPrototypeOf(typedArrayOne) && !Array.prototype.isPrototypeOf(typedArrayOne) && !Array.isArray(typedArrayOne) && (typedArrayOne.length === 0) && (typedArrayOne.byteLength === 0) && (typedArrayTwo.length === 2) && (typedArrayTwo.byteLength === 2) && (typedArrayThree.length === 2) && (typedArrayThree.byteLength === 4) && (typedArrayFour.length === 3) && (typedArrayFour[0] === 10) && (typedArrayFour[2] === 30) && (typedArrayFive.length === 3) && (typedArrayFive[0] === 11) && (typedArrayFive[2] === 33) && (typedArraySix.length === 3) && (typedArraySix[0] === 11) && (typedArraySix[2] === 33)){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>TypedArray</code> object, and supports at least one <code>TypedArray</code> object capability. The web browser at least partially/possibly fully supports the JavaScript <code>TypedArray</code> object. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>TypedArray</code> object, but does not support at least one <code>TypedArray</code> object capability. The web browser partially supports the JavaScript <code>TypedArray</code> object.\";
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
