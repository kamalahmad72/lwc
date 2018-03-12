<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/create_method_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/create_method.php.
 * Last reviewed/updated: 07 Feb 2018.
 * Published: 06 Dec 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>create()</code> method. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>create()</code> method, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>create()</code> method. The web browser does not support the JavaScript <code>create()</code> method.</q></p>

     <p>If the web browser recognizes the JavaScript <code>create()</code> method, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>create()</code> method includes support for at least one <code>create()</code> method capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>create()</code> method includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>create()</code> method, and supports at least one <code>create()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>create()</code> method. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>create()</code> method does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>create()</code> method, but does not support at least one <code>create()</code> method capability. The web browser partially supports the JavaScript <code>create()</code> method.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>create()</code> Method Web Browser Support</h3>

     <p><q><b>Pass</b> (at least partial/possibly full support):</q> IE9+, ED12+, FF4+, SF5+, CH5+, OP11.60+.</p>

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

     <h2><a id='test'></a>2. <code>create()</code> Method Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;script&gt;
if (Object.create){
 var objectViaObjectConstructor = new Object();
 function CustomConstructor(){}
 var objectViaCustomConstructor = new CustomConstructor();
 var objectLiteral = {};
 objectLiteral.propertyOne = &quot;objectLiteral propertyOne value&quot;, // Inherited by objectThreeViaObjectCreate below.
 objectLiteral.propertyTwo = &quot;objectLiteral propertyTwo value&quot;, // Inherited by objectThreeViaObjectCreate below.
 objectLiteral.propertyThree = [1, 2, 3] // Inherited by objectThreeViaObjectCreate below.
 var objectOneViaObjectCreate = Object.create(objectViaObjectConstructor);
 var objectTwoViaObjectCreate = Object.create(objectViaCustomConstructor);
 var objectThreeViaObjectCreate = Object.create(objectLiteral);
 objectThreeViaObjectCreate.propertyTwo = &quot;objectThreeViaObjectCreate propertyTwo value&quot; // Primitive value shadows (aka, masks/overrides).
 objectThreeViaObjectCreate.propertyThree.push(4); // Reference value shared.
 objectLiteral.propertyThree.push(5); // Reference value shared.
 if ((typeof objectOneViaObjectCreate === &quot;object&quot;) &amp;&amp; objectOneViaObjectCreate instanceof Object &amp;&amp; objectViaObjectConstructor.isPrototypeOf(objectOneViaObjectCreate) &amp;&amp; (typeof objectTwoViaObjectCreate === &quot;object&quot;) &amp;&amp; objectTwoViaObjectCreate instanceof Object &amp;&amp; objectViaCustomConstructor.isPrototypeOf(objectTwoViaObjectCreate) &amp;&amp; (typeof objectThreeViaObjectCreate === &quot;object&quot;) &amp;&amp; objectThreeViaObjectCreate instanceof Object &amp;&amp; objectLiteral.isPrototypeOf(objectThreeViaObjectCreate) &amp;&amp; (objectThreeViaObjectCreate.propertyOne === &quot;objectLiteral propertyOne value&quot;) &amp;&amp; (objectLiteral.propertyTwo === &quot;objectLiteral propertyTwo value&quot;) &amp;&amp; (objectThreeViaObjectCreate.propertyTwo === &quot;objectThreeViaObjectCreate propertyTwo value&quot;) &amp;&amp; (objectLiteral.propertyThree.length === 5) &amp;&amp; (objectThreeViaObjectCreate.propertyThree.length === 5)){
  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;create()&lt;/code&gt; method, and supports at least one &lt;code&gt;create()&lt;/code&gt; method capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;create()&lt;/code&gt; method. Positive determination of full web browser support is beyond the scope of this test.&lt;/p&gt;&quot;);
 } else {
  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;create()&lt;/code&gt; method, but does not support at least one &lt;code&gt;create()&lt;/code&gt; method capability. The web browser partially supports the JavaScript &lt;code&gt;create()&lt;/code&gt; method.&lt;/p&gt;&quot;);
 }
} else {
 document.write(&quot;&lt;p&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;create()&lt;/code&gt; method. The web browser does not support the JavaScript &lt;code&gt;create()&lt;/code&gt; method.&lt;/p&gt;&quot;);
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <script>
     if (Object.create){
      var objectViaObjectConstructor = new Object();
      function CustomConstructor(){}
      var objectViaCustomConstructor = new CustomConstructor();
      var objectLiteral = {};
      objectLiteral.propertyOne = \"objectLiteral propertyOne value\", // Inherited by objectThreeViaObjectCreate below.
      objectLiteral.propertyTwo = \"objectLiteral propertyTwo value\", // Inherited by objectThreeViaObjectCreate below.
      objectLiteral.propertyThree = [1, 2, 3] // Inherited by objectThreeViaObjectCreate below.
      var objectOneViaObjectCreate = Object.create(objectViaObjectConstructor);
      var objectTwoViaObjectCreate = Object.create(objectViaCustomConstructor);
      var objectThreeViaObjectCreate = Object.create(objectLiteral);
      objectThreeViaObjectCreate.propertyTwo = \"objectThreeViaObjectCreate propertyTwo value\" // Primitive value shadows (aka, masks/overrides).
      objectThreeViaObjectCreate.propertyThree.push(4); // Reference value shared.
      objectLiteral.propertyThree.push(5); // Reference value shared.
      if ((typeof objectOneViaObjectCreate === \"object\") && objectOneViaObjectCreate instanceof Object && objectViaObjectConstructor.isPrototypeOf(objectOneViaObjectCreate) && (typeof objectTwoViaObjectCreate === \"object\") && objectTwoViaObjectCreate instanceof Object && objectViaCustomConstructor.isPrototypeOf(objectTwoViaObjectCreate) && (typeof objectThreeViaObjectCreate === \"object\") && objectThreeViaObjectCreate instanceof Object && objectLiteral.isPrototypeOf(objectThreeViaObjectCreate) && (objectThreeViaObjectCreate.propertyOne === \"objectLiteral propertyOne value\") && (objectLiteral.propertyTwo === \"objectLiteral propertyTwo value\") && (objectThreeViaObjectCreate.propertyTwo === \"objectThreeViaObjectCreate propertyTwo value\") && (objectLiteral.propertyThree.length === 5) && (objectThreeViaObjectCreate.propertyThree.length === 5)){
       document.write(\"<p><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>create()</code> method, and supports at least one <code>create()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>create()</code> method. Positive determination of full web browser support is beyond the scope of this test.</p>\");
      } else {
       document.write(\"<p><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>create()</code> method, but does not support at least one <code>create()</code> method capability. The web browser partially supports the JavaScript <code>create()</code> method.</p>\");
      }
     } else {
      document.write(\"<p><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>create()</code> method. The web browser does not support the JavaScript <code>create()</code> method.</p>\");
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
