<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/bind_method_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/bind_method.php.
 * Last reviewed/updated: 26 Jan 2018.
 * Published: 14 Dec 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>bind()</code> method. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>bind()</code> method, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>bind()</code> method. The web browser does not support the JavaScript <code>bind()</code> method.</q></p>

     <p>If the web browser recognizes the JavaScript <code>bind()</code> method, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>bind()</code> method includes support for at least one <code>bind()</code> method capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>bind()</code> method includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>bind()</code> method, and supports at least one <code>bind()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>bind()</code> method. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>bind()</code> method does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>bind()</code> method, but does not support at least one <code>bind()</code> method capability. The web browser partially supports the JavaScript <code>bind()</code> method.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>bind()</code> Method Web Browser Support</h3>

     <p><q><b>Pass</b> (at least partial/possibly full support):</q> IE9+, ED12+, FF4+, SF5.1.4+, CH7+, OP11.60+.</p>

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

     <h2><a id='test'></a>2. <code>bind()</code> Method Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;bind()&lt;/code&gt; method. The web browser does not support the JavaScript &lt;code&gt;bind()&lt;/code&gt; method.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
propertyOne = &quot;window object propertyOne value&quot;; // Identical to window.propertyOne = &quot;window object propertyOne value&quot;;.
var objectLiteral = {
 propertyOne: &quot;objectLiteral propertyOne value&quot;
}
function functionDeclaration(){
 return &quot;Function declaration return &quot; + this.propertyOne + &quot;.&quot;;
}
var functionExpression = function(){
 return &quot;Function expression return &quot; + this.propertyOne + &quot;.&quot;;
};
function functionDeclarationWithParam(param){
 return &quot;Function declaration with param return &quot; + this.propertyOne + &quot; with &quot; + param + &quot;.&quot;;
}
var functionExpressionWithParam = function(param){
 return &quot;Function expression with param return &quot; + this.propertyOne + &quot; with &quot; + param + &quot;.&quot;;
};
var callFunctionDeclaration = functionDeclaration(); // &quot;Function declaration return window object propertyOne value.&quot; For comparison. Not part of test.
var callFunctionExpression = functionExpression(); // &quot;Function expression return window object propertyOne value.&quot; For comparison. Not part of test.
var boundFunctionDeclaration = functionDeclaration.bind(objectLiteral);
var callBoundFunctionDeclaration = boundFunctionDeclaration(); // &quot;Function declaration return objectLiteral propertyOne value.&quot;
var boundFunctionExpression = functionExpression.bind(objectLiteral);
var callBoundFunctionExpression = boundFunctionExpression(); // &quot;Function expression return objectLiteral propertyOne value.&quot;
var boundFunctionDeclarationWithParamOne = functionDeclarationWithParam.bind(objectLiteral);
var callBoundFunctionDeclarationWithParamOne = boundFunctionDeclarationWithParamOne(&quot;passed value&quot;); // &quot;Function declaration with param return objectLiteral propertyOne value with passed value.&quot;
var boundFunctionDeclarationWithParamTwo = functionDeclarationWithParam.bind(objectLiteral, &quot;passed value&quot;); // Bind param to &quot;passed value&quot;. Therefore, can call bound function without argument (see next line).
var callBoundFunctionDeclarationWithParamTwo = boundFunctionDeclarationWithParamTwo(); // &quot;Function declaration with param return objectLiteral propertyOne value with passed value.&quot;
var boundFunctionExpressionWithParamOne = functionExpressionWithParam.bind(objectLiteral);
var callBoundFunctionExpressionWithParamOne = boundFunctionExpressionWithParamOne(&quot;passed value&quot;); // &quot;Function expression with param return objectLiteral propertyOne value with passed value.&quot;
var boundFunctionExpressionWithParamTwo = functionExpressionWithParam.bind(objectLiteral, &quot;passed value&quot;); // Bind param to &quot;passed value&quot;. Therefore, can call bound function without argument (see next line).
var callBoundFunctionExpressionWithParamTwo = boundFunctionExpressionWithParamTwo(); // &quot;Function expression with param return objectLiteral propertyOne value with passed value.&quot;
function returnArray(){
 return Array.prototype.slice.call(arguments);
}
var callReturnArray = returnArray(1, 2, 3); // Array [1, 2, 3]. For comparison. Not part of test.
var boundReturnArray = returnArray.bind(null, 10, 11, 12); // Bind arguments object to passed values. Therefore, can call bound function without arguments (see next line).
var callBoundReturnArrayOne = boundReturnArray(); // Array [10, 11, 12].
var callBoundReturnArrayTwo = boundReturnArray(13, 14, 15); // Array [10, 11, 12, 13, 14, 15]. Arguments to bound function added to arguments object after those specified in bind() method statement.
if ((functionDeclaration.bind) &amp;&amp; (functionExpression.bind)){
 var element = document.getElementById(&quot;testId&quot;);
 if ((typeof boundFunctionDeclaration === &quot;function&quot;) &amp;&amp; boundFunctionDeclaration instanceof Function &amp;&amp; (typeof boundFunctionExpression === &quot;function&quot;) &amp;&amp; boundFunctionExpression instanceof Function &amp;&amp; (callBoundFunctionDeclaration === &quot;Function declaration return objectLiteral propertyOne value.&quot;) &amp;&amp; (callBoundFunctionExpression === &quot;Function expression return objectLiteral propertyOne value.&quot;) &amp;&amp; (callBoundFunctionDeclarationWithParamOne === &quot;Function declaration with param return objectLiteral propertyOne value with passed value.&quot;) &amp;&amp; (callBoundFunctionDeclarationWithParamTwo === &quot;Function declaration with param return objectLiteral propertyOne value with passed value.&quot;) &amp;&amp; (callBoundFunctionExpressionWithParamOne === &quot;Function expression with param return objectLiteral propertyOne value with passed value.&quot;) &amp;&amp; (callBoundFunctionExpressionWithParamTwo === &quot;Function expression with param return objectLiteral propertyOne value with passed value.&quot;) &amp;&amp; (callBoundReturnArrayOne.toString() === &quot;10,11,12&quot;) &amp;&amp; (callBoundReturnArrayTwo.toString() === &quot;10,11,12,13,14,15&quot;)){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;bind()&lt;/code&gt; method, and supports at least one &lt;code&gt;bind()&lt;/code&gt; method capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;bind()&lt;/code&gt; method. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;bind()&lt;/code&gt; method, but does not support at least one &lt;code&gt;bind()&lt;/code&gt; method capability. The web browser partially supports the JavaScript &lt;code&gt;bind()&lt;/code&gt; method.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>bind()</code> method. The web browser does not support the JavaScript <code>bind()</code> method.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     propertyOne = \"window object propertyOne value\"; // Identical to window.propertyOne = \"window object propertyOne value\";.
     var objectLiteral = {
      propertyOne: \"objectLiteral propertyOne value\"
     }
     function functionDeclaration(){
      return \"Function declaration return \" + this.propertyOne + \".\";
     }
     var functionExpression = function(){
      return \"Function expression return \" + this.propertyOne + \".\";
     };
     function functionDeclarationWithParam(param){
      return \"Function declaration with param return \" + this.propertyOne + \" with \" + param + \".\";
     }
     var functionExpressionWithParam = function(param){
      return \"Function expression with param return \" + this.propertyOne + \" with \" + param + \".\";
     };
     var callFunctionDeclaration = functionDeclaration(); // \"Function declaration return window object propertyOne value.\" For comparison. Not part of test.
     var callFunctionExpression = functionExpression(); // \"Function expression return window object propertyOne value.\" For comparison. Not part of test.
     var boundFunctionDeclaration = functionDeclaration.bind(objectLiteral);
     var callBoundFunctionDeclaration = boundFunctionDeclaration(); // \"Function declaration return objectLiteral propertyOne value.\"
     var boundFunctionExpression = functionExpression.bind(objectLiteral);
     var callBoundFunctionExpression = boundFunctionExpression(); // \"Function expression return objectLiteral propertyOne value.\"
     var boundFunctionDeclarationWithParamOne = functionDeclarationWithParam.bind(objectLiteral);
     var callBoundFunctionDeclarationWithParamOne = boundFunctionDeclarationWithParamOne(\"passed value\"); // \"Function declaration with param return objectLiteral propertyOne value with passed value.\"
     var boundFunctionDeclarationWithParamTwo = functionDeclarationWithParam.bind(objectLiteral, \"passed value\"); // Bind param to \"passed value\". Therefore, can call bound function without argument (see next line).
     var callBoundFunctionDeclarationWithParamTwo = boundFunctionDeclarationWithParamTwo(); // \"Function declaration with param return objectLiteral propertyOne value with passed value.\"
     var boundFunctionExpressionWithParamOne = functionExpressionWithParam.bind(objectLiteral);
     var callBoundFunctionExpressionWithParamOne = boundFunctionExpressionWithParamOne(\"passed value\"); // \"Function expression with param return objectLiteral propertyOne value with passed value.\"
     var boundFunctionExpressionWithParamTwo = functionExpressionWithParam.bind(objectLiteral, \"passed value\"); // Bind param to \"passed value\". Therefore, can call bound function without argument (see next line).
     var callBoundFunctionExpressionWithParamTwo = boundFunctionExpressionWithParamTwo(); // \"Function expression with param return objectLiteral propertyOne value with passed value.\"
     function returnArray(){
      return Array.prototype.slice.call(arguments);
     }
     var callReturnArray = returnArray(1, 2, 3); // Array [1, 2, 3]. For comparison. Not part of test.
     var boundReturnArray = returnArray.bind(null, 10, 11, 12); // Bind arguments object to passed values. Therefore, can call bound function without arguments (see next line).
     var callBoundReturnArrayOne = boundReturnArray(); // Array [10, 11, 12].
     var callBoundReturnArrayTwo = boundReturnArray(13, 14, 15); // Array [10, 11, 12, 13, 14, 15]. Arguments to bound function added to arguments object after those specified in bind() method statement.
     if ((functionDeclaration.bind) && (functionExpression.bind)){
      var element = document.getElementById(\"testId\");
      if ((typeof boundFunctionDeclaration === \"function\") && boundFunctionDeclaration instanceof Function && (typeof boundFunctionExpression === \"function\") && boundFunctionExpression instanceof Function && (callBoundFunctionDeclaration === \"Function declaration return objectLiteral propertyOne value.\") && (callBoundFunctionExpression === \"Function expression return objectLiteral propertyOne value.\") && (callBoundFunctionDeclarationWithParamOne === \"Function declaration with param return objectLiteral propertyOne value with passed value.\") && (callBoundFunctionDeclarationWithParamTwo === \"Function declaration with param return objectLiteral propertyOne value with passed value.\") && (callBoundFunctionExpressionWithParamOne === \"Function expression with param return objectLiteral propertyOne value with passed value.\") && (callBoundFunctionExpressionWithParamTwo === \"Function expression with param return objectLiteral propertyOne value with passed value.\") && (callBoundReturnArrayOne.toString() === \"10,11,12\") && (callBoundReturnArrayTwo.toString() === \"10,11,12,13,14,15\")){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>bind()</code> method, and supports at least one <code>bind()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>bind()</code> method. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>bind()</code> method, but does not support at least one <code>bind()</code> method capability. The web browser partially supports the JavaScript <code>bind()</code> method.\";
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
