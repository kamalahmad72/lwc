<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/instanceof_operator_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/instanceof_operator.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 24 Jan 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there is one web browser JavaScript feature support test: a feature implementation test. The implementation test determines if the web browser recognizes the JavaScript <code>instanceof</code> operator. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>instanceof</code> operator, the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>instanceof</code> operator. The web browser does not support the JavaScript <code>instanceof</code> operator.</q> If the web browser recognizes the JavaScript <code>instanceof</code> operator, the implementation test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>instanceof</code> operator. The web browser at least partially/possibly fully supports the JavaScript <code>instanceof</code> operator. Positive determination of full web browser support is beyond the scope of this test.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>instanceof</code> Operator Web Browser Support</h3>

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

     <h2><a id='test'></a>2. <code>instanceof</code> Operator Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;script&gt;
var booleanLiteral = true,
 booleanViaBooleanConstructor = new Boolean(false),
 numberLiteral = 1,
 numberViaNumberConstructor = new Number(2),
 stringLiteral = &quot;abc&quot;,
 stringViaStringConstructor = new String(&quot;def&quot;),
 nullLiteral = null,
 undefinedLiteral = undefined,
 undefinedVariable;
function functionDeclaration(){}
var functionExpression = function(){},
 functionViaFunctionConstructor = new Function(),
 arrayLiteral = [],
 arrayViaArrayConstructor = new Array(),
 objectLiteral = {},
 objectViaObjectConstructor = new Object();
function CustomConstructor(){}
var objectViaCustomConstructor = new CustomConstructor();
// In IE11, FF59, and CH66, window.instanceof === undefined. In IE8-, FF3 - 3.6.6, and OP8.54-, window instanceof Object === false. In IE9+, FF1.5 - 2.0.0.20, FF3.6.7+, SF3.1+, CH2+, and OP9+, window instanceof Object === true.
if (!(booleanLiteral instanceof Boolean) &amp;&amp; !(booleanLiteral instanceof Object) &amp;&amp; booleanViaBooleanConstructor instanceof Boolean &amp;&amp; booleanViaBooleanConstructor instanceof Object &amp;&amp; !(numberLiteral instanceof Number) &amp;&amp; !(numberLiteral instanceof Object) &amp;&amp; numberViaNumberConstructor instanceof Number &amp;&amp; numberViaNumberConstructor instanceof Object &amp;&amp; !(stringLiteral instanceof String) &amp;&amp; !(stringLiteral instanceof Object) &amp;&amp; stringViaStringConstructor instanceof String &amp;&amp; stringViaStringConstructor instanceof Object &amp;&amp; !(nullLiteral instanceof Object) &amp;&amp; !(undefinedLiteral instanceof Object) &amp;&amp; !(undefinedVariable instanceof Object) &amp;&amp; functionDeclaration instanceof Function &amp;&amp; functionDeclaration instanceof Object &amp;&amp; functionExpression instanceof Function &amp;&amp; functionExpression instanceof Object &amp;&amp; functionViaFunctionConstructor instanceof Function &amp;&amp; functionViaFunctionConstructor instanceof Object &amp;&amp; arrayLiteral instanceof Array &amp;&amp; arrayLiteral instanceof Object &amp;&amp; arrayViaArrayConstructor instanceof Array &amp;&amp; arrayViaArrayConstructor instanceof Object &amp;&amp; objectLiteral instanceof Object &amp;&amp; objectViaObjectConstructor instanceof Object &amp;&amp; objectViaCustomConstructor instanceof Object){
 document.write(&quot;&lt;p&gt;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;instanceof&lt;/code&gt; operator. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;instanceof&lt;/code&gt; operator. Positive determination of full web browser support is beyond the scope of this test.&lt;/p&gt;&quot;);
} else {
 document.write(&quot;&lt;p&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;instanceof&lt;/code&gt; operator. The web browser does not support the JavaScript &lt;code&gt;instanceof&lt;/code&gt; operator.&lt;/p&gt;&quot;);
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <script>
     var booleanLiteral = true,
      booleanViaBooleanConstructor = new Boolean(false),
      numberLiteral = 1,
      numberViaNumberConstructor = new Number(2),
      stringLiteral = \"abc\",
      stringViaStringConstructor = new String(\"def\"),
      nullLiteral = null,
      undefinedLiteral = undefined,
      undefinedVariable;
     function functionDeclaration(){}
     var functionExpression = function(){},
      functionViaFunctionConstructor = new Function(),
      arrayLiteral = [],
      arrayViaArrayConstructor = new Array(),
      objectLiteral = {},
      objectViaObjectConstructor = new Object();
     function CustomConstructor(){}
     var objectViaCustomConstructor = new CustomConstructor();
     // In IE11, FF59, and CH66, window.instanceof === undefined. In IE8-, FF3 - 3.6.6, and OP8.54-, window instanceof Object === false. In IE9+, FF1.5 - 2.0.0.20, FF3.6.7+, SF3.1+, CH2+, and OP9+, window instanceof Object === true.
     if (!(booleanLiteral instanceof Boolean) && !(booleanLiteral instanceof Object) && booleanViaBooleanConstructor instanceof Boolean && booleanViaBooleanConstructor instanceof Object && !(numberLiteral instanceof Number) && !(numberLiteral instanceof Object) && numberViaNumberConstructor instanceof Number && numberViaNumberConstructor instanceof Object && !(stringLiteral instanceof String) && !(stringLiteral instanceof Object) && stringViaStringConstructor instanceof String && stringViaStringConstructor instanceof Object && !(nullLiteral instanceof Object) && !(undefinedLiteral instanceof Object) && !(undefinedVariable instanceof Object) && functionDeclaration instanceof Function && functionDeclaration instanceof Object && functionExpression instanceof Function && functionExpression instanceof Object && functionViaFunctionConstructor instanceof Function && functionViaFunctionConstructor instanceof Object && arrayLiteral instanceof Array && arrayLiteral instanceof Object && arrayViaArrayConstructor instanceof Array && arrayViaArrayConstructor instanceof Object && objectLiteral instanceof Object && objectViaObjectConstructor instanceof Object && objectViaCustomConstructor instanceof Object){
      document.write(\"<p><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>instanceof</code> operator. The web browser at least partially/possibly fully supports the JavaScript <code>instanceof</code> operator. Positive determination of full web browser support is beyond the scope of this test.</p>\");
     } else {
      document.write(\"<p><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>instanceof</code> operator. The web browser does not support the JavaScript <code>instanceof</code> operator.</p>\");
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
