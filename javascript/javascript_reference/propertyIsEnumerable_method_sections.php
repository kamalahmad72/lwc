<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/propertyIsEnumerable_method_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/propertyIsEnumerable_method.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 07 Feb 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>propertyIsEnumerable()</code> method. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>propertyIsEnumerable()</code> method, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>propertyIsEnumerable()</code> method. The web browser does not support the JavaScript <code>propertyIsEnumerable()</code> method.</q></p>

     <p>If the web browser recognizes the JavaScript <code>propertyIsEnumerable()</code> method, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>propertyIsEnumerable()</code> method includes support for at least one <code>propertyIsEnumerable()</code> method capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>propertyIsEnumerable()</code> method includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>propertyIsEnumerable()</code> method, and supports at least one <code>propertyIsEnumerable()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>propertyIsEnumerable()</code> method. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>propertyIsEnumerable()</code> method does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>propertyIsEnumerable()</code> method, but does not support at least one <code>propertyIsEnumerable()</code> method capability. The web browser partially supports the JavaScript <code>propertyIsEnumerable()</code> method.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>propertyIsEnumerable()</code> Method Web Browser Support</h3>

     <p><q><b>Pass</b> (at least partial/possibly full support):</q> IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.</p>

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

     <h2><a id='test'></a>2. <code>propertyIsEnumerable()</code> Method Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;script&gt;
if (Object.propertyIsEnumerable){
 function CustomConstructor(){
  this.ownPropertyOne = &quot;value&quot;; // By default, author-defined own property is enumerable.
  this.ownPropertyTwo = function(){}; // By default, author-defined own property is enumerable.
 }
 CustomConstructor.prototype.prototypePropertyOne = &quot;value&quot;; // By default, author-defined prototype property is not enumerable; however, is enumerated by for...in loop.
 CustomConstructor.prototype.prototypePropertyTwo = function(){}; // By default, author-defined prototype property is not enumerable; however, is enumerated by for...in loop.
 var objectViaCustomConstructor = new CustomConstructor();
 objectViaCustomConstructor.ownPropertyThree = &quot;value&quot;; // By default, author-defined own property is enumerable.
 objectViaCustomConstructor.ownPropertyFour = function(){}; // By default, author-defined own property is enumerable.
 var objectLiteral = {
  ownPropertyOne: &quot;value&quot;, // By default, author-defined own property is enumerable.
  ownPropertyTwo: function(){} // By default, author-defined own property is enumerable.
 }
 objectLiteral.ownPropertyThree = &quot;value&quot;; // By default, author-defined own property is enumerable.
 objectLiteral.ownPropertyFour = function(){}; // By default, author-defined own property is enumerable.
 if (objectViaCustomConstructor.propertyIsEnumerable(&quot;ownPropertyOne&quot;) &amp;&amp; objectViaCustomConstructor.propertyIsEnumerable(&quot;ownPropertyTwo&quot;) &amp;&amp; !objectViaCustomConstructor.propertyIsEnumerable(&quot;prototypePropertyOne&quot;) &amp;&amp; !objectViaCustomConstructor.propertyIsEnumerable(&quot;prototypePropertyTwo&quot;) &amp;&amp; objectViaCustomConstructor.propertyIsEnumerable(&quot;ownPropertyThree&quot;) &amp;&amp; objectViaCustomConstructor.propertyIsEnumerable(&quot;ownPropertyFour&quot;) &amp;&amp; !objectViaCustomConstructor.propertyIsEnumerable(&quot;propertyDoesNotExist&quot;) &amp;&amp; !objectViaCustomConstructor.propertyIsEnumerable(&quot;constructor&quot;) &amp;&amp; !objectViaCustomConstructor.propertyIsEnumerable(&quot;hasOwnProperty&quot;) &amp;&amp; !objectViaCustomConstructor.propertyIsEnumerable(&quot;isPrototypeOf&quot;) &amp;&amp; !objectViaCustomConstructor.propertyIsEnumerable(&quot;propertyIsEnumerable&quot;) &amp;&amp; !objectViaCustomConstructor.propertyIsEnumerable(&quot;toLocaleString&quot;) &amp;&amp; !objectViaCustomConstructor.propertyIsEnumerable(&quot;toString&quot;) &amp;&amp; !objectViaCustomConstructor.propertyIsEnumerable(&quot;valueOf&quot;) &amp;&amp; objectLiteral.propertyIsEnumerable(&quot;ownPropertyOne&quot;) &amp;&amp; objectLiteral.propertyIsEnumerable(&quot;ownPropertyTwo&quot;) &amp;&amp; objectLiteral.propertyIsEnumerable(&quot;ownPropertyThree&quot;) &amp;&amp; objectLiteral.propertyIsEnumerable(&quot;ownPropertyFour&quot;) &amp;&amp; !objectLiteral.propertyIsEnumerable(&quot;propertyDoesNotExist&quot;) &amp;&amp; !objectLiteral.propertyIsEnumerable(&quot;constructor&quot;) &amp;&amp; !objectLiteral.propertyIsEnumerable(&quot;hasOwnProperty&quot;) &amp;&amp; !objectLiteral.propertyIsEnumerable(&quot;isPrototypeOf&quot;) &amp;&amp; !objectLiteral.propertyIsEnumerable(&quot;propertyIsEnumerable&quot;) &amp;&amp; !objectLiteral.propertyIsEnumerable(&quot;toLocaleString&quot;) &amp;&amp; !objectLiteral.propertyIsEnumerable(&quot;toString&quot;) &amp;&amp; !objectLiteral.propertyIsEnumerable(&quot;valueOf&quot;)){
  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;propertyIsEnumerable()&lt;/code&gt; method, and supports at least one &lt;code&gt;propertyIsEnumerable()&lt;/code&gt; method capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;propertyIsEnumerable()&lt;/code&gt; method. Positive determination of full web browser support is beyond the scope of this test.&lt;/p&gt;&quot;);
 } else {
  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;propertyIsEnumerable()&lt;/code&gt; method, but does not support at least one &lt;code&gt;propertyIsEnumerable()&lt;/code&gt; method capability. The web browser partially supports the JavaScript &lt;code&gt;propertyIsEnumerable()&lt;/code&gt; method.&lt;/p&gt;&quot;);
 }
} else {
 document.write(&quot;&lt;p&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;propertyIsEnumerable()&lt;/code&gt; method. The web browser does not support the JavaScript &lt;code&gt;propertyIsEnumerable()&lt;/code&gt; method.&lt;/p&gt;&quot;);
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <script>
     if (Object.propertyIsEnumerable){
      function CustomConstructor(){
       this.ownPropertyOne = \"value\"; // By default, author-defined own property is enumerable.
       this.ownPropertyTwo = function(){}; // By default, author-defined own property is enumerable.
      }
      CustomConstructor.prototype.prototypePropertyOne = \"value\"; // By default, author-defined prototype property is not enumerable; however, is enumerated by for...in loop.
      CustomConstructor.prototype.prototypePropertyTwo = function(){}; // By default, author-defined prototype property is not enumerable; however, is enumerated by for...in loop.
      var objectViaCustomConstructor = new CustomConstructor();
      objectViaCustomConstructor.ownPropertyThree = \"value\"; // By default, author-defined own property is enumerable.
      objectViaCustomConstructor.ownPropertyFour = function(){}; // By default, author-defined own property is enumerable.
      var objectLiteral = {
       ownPropertyOne: \"value\", // By default, author-defined own property is enumerable.
       ownPropertyTwo: function(){} // By default, author-defined own property is enumerable.
      }
      objectLiteral.ownPropertyThree = \"value\"; // By default, author-defined own property is enumerable.
      objectLiteral.ownPropertyFour = function(){}; // By default, author-defined own property is enumerable.
      if (objectViaCustomConstructor.propertyIsEnumerable(\"ownPropertyOne\") && objectViaCustomConstructor.propertyIsEnumerable(\"ownPropertyTwo\") && !objectViaCustomConstructor.propertyIsEnumerable(\"prototypePropertyOne\") && !objectViaCustomConstructor.propertyIsEnumerable(\"prototypePropertyTwo\") && objectViaCustomConstructor.propertyIsEnumerable(\"ownPropertyThree\") && objectViaCustomConstructor.propertyIsEnumerable(\"ownPropertyFour\") && !objectViaCustomConstructor.propertyIsEnumerable(\"propertyDoesNotExist\") && !objectViaCustomConstructor.propertyIsEnumerable(\"constructor\") && !objectViaCustomConstructor.propertyIsEnumerable(\"hasOwnProperty\") && !objectViaCustomConstructor.propertyIsEnumerable(\"isPrototypeOf\") && !objectViaCustomConstructor.propertyIsEnumerable(\"propertyIsEnumerable\") && !objectViaCustomConstructor.propertyIsEnumerable(\"toLocaleString\") && !objectViaCustomConstructor.propertyIsEnumerable(\"toString\") && !objectViaCustomConstructor.propertyIsEnumerable(\"valueOf\") && objectLiteral.propertyIsEnumerable(\"ownPropertyOne\") && objectLiteral.propertyIsEnumerable(\"ownPropertyTwo\") && objectLiteral.propertyIsEnumerable(\"ownPropertyThree\") && objectLiteral.propertyIsEnumerable(\"ownPropertyFour\") && !objectLiteral.propertyIsEnumerable(\"propertyDoesNotExist\") && !objectLiteral.propertyIsEnumerable(\"constructor\") && !objectLiteral.propertyIsEnumerable(\"hasOwnProperty\") && !objectLiteral.propertyIsEnumerable(\"isPrototypeOf\") && !objectLiteral.propertyIsEnumerable(\"propertyIsEnumerable\") && !objectLiteral.propertyIsEnumerable(\"toLocaleString\") && !objectLiteral.propertyIsEnumerable(\"toString\") && !objectLiteral.propertyIsEnumerable(\"valueOf\")){
       document.write(\"<p><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>propertyIsEnumerable()</code> method, and supports at least one <code>propertyIsEnumerable()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>propertyIsEnumerable()</code> method. Positive determination of full web browser support is beyond the scope of this test.</p>\");
      } else {
       document.write(\"<p><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>propertyIsEnumerable()</code> method, but does not support at least one <code>propertyIsEnumerable()</code> method capability. The web browser partially supports the JavaScript <code>propertyIsEnumerable()</code> method.</p>\");
      }
     } else {
      document.write(\"<p><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>propertyIsEnumerable()</code> method. The web browser does not support the JavaScript <code>propertyIsEnumerable()</code> method.</p>\");
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
