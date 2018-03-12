<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/arrow_function_syntax_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/arrow_function_syntax.php.
 * Last reviewed/updated: 26 Jan 2018.
 * Published: 18 Nov 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there is one web browser JavaScript feature support test: a feature implementation test. The implementation test determines if the web browser recognizes the JavaScript arrow function syntax. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript arrow function syntax, the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript arrow function syntax. The web browser does not support the JavaScript arrow function syntax.</q> If the web browser recognizes the JavaScript arrow function syntax, the implementation test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript arrow function syntax. The web browser at least partially/possibly fully supports the JavaScript arrow function syntax. Positive determination of full web browser support is beyond the scope of this test.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. Arrow Function Syntax Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF22+, CH45+, OP32+.</li>
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

     <h2><a id='test'></a>2. Arrow Function Syntax Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript arrow function syntax. The web browser does not support the JavaScript arrow function syntax.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
var arrowFunctionOne = () =&gt; 1;
var callArrowFunctionOne = arrowFunctionOne();
var arrowFunctionTwo = param =&gt; param;
var callArrowFunctionTwo = arrowFunctionTwo(2);
var arrowFunctionThree = (param) =&gt; param;
var callArrowFunctionThree = arrowFunctionThree(3);
var arrowFunctionFour = (paramOne, paramTwo) =&gt; paramOne + paramTwo;
var callArrowFunctionFour = arrowFunctionFour(1, 3);
var arrowFunctionFive = (paramOne, paramTwo) =&gt; {
 return paramOne + paramTwo;
};
var callArrowFunctionFive = arrowFunctionFive(1, 4);
var arrowFunctionSix = () =&gt; ({keyOne: &quot;keyOne value&quot;, keyTwo: &quot;keyTwo value&quot;}); // Return object literal.
var callArrowFunctionSix = arrowFunctionSix();
if ((typeof arrowFunctionOne === &quot;function&quot;) &amp;&amp; arrowFunctionOne instanceof Function &amp;&amp; (typeof arrowFunctionTwo === &quot;function&quot;) &amp;&amp; arrowFunctionTwo instanceof Function &amp;&amp; (typeof arrowFunctionThree === &quot;function&quot;) &amp;&amp; arrowFunctionThree instanceof Function &amp;&amp; (typeof arrowFunctionFour === &quot;function&quot;) &amp;&amp; arrowFunctionFour instanceof Function &amp;&amp; (typeof arrowFunctionFive === &quot;function&quot;) &amp;&amp; arrowFunctionFive instanceof Function &amp;&amp; (typeof arrowFunctionSix === &quot;function&quot;) &amp;&amp; arrowFunctionSix instanceof Function &amp;&amp; (callArrowFunctionOne === 1) &amp;&amp; (callArrowFunctionTwo === 2) &amp;&amp; (callArrowFunctionThree === 3) &amp;&amp; (callArrowFunctionFour === 4) &amp;&amp; (callArrowFunctionFive === 5) &amp;&amp; (typeof callArrowFunctionSix === &quot;object&quot;) &amp;&amp; callArrowFunctionSix instanceof Object &amp;&amp; (callArrowFunctionSix.keyOne === &quot;keyOne value&quot;)){
 var element = document.getElementById(&quot;testId&quot;);
 element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript arrow function syntax. The web browser at least partially/possibly fully supports the JavaScript arrow function syntax. Positive determination of full web browser support is beyond the scope of this test.&quot;;
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript arrow function syntax. The web browser does not support the JavaScript arrow function syntax.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var arrowFunctionOne = () => 1;
     var callArrowFunctionOne = arrowFunctionOne();
     var arrowFunctionTwo = param => param;
     var callArrowFunctionTwo = arrowFunctionTwo(2);
     var arrowFunctionThree = (param) => param;
     var callArrowFunctionThree = arrowFunctionThree(3);
     var arrowFunctionFour = (paramOne, paramTwo) => paramOne + paramTwo;
     var callArrowFunctionFour = arrowFunctionFour(1, 3);
     var arrowFunctionFive = (paramOne, paramTwo) => {
      return paramOne + paramTwo;
     };
     var callArrowFunctionFive = arrowFunctionFive(1, 4);
     var arrowFunctionSix = () => ({keyOne: \"keyOne value\", keyTwo: \"keyTwo value\"}); // Return object literal.
     var callArrowFunctionSix = arrowFunctionSix();
     if ((typeof arrowFunctionOne === \"function\") && arrowFunctionOne instanceof Function && (typeof arrowFunctionTwo === \"function\") && arrowFunctionTwo instanceof Function && (typeof arrowFunctionThree === \"function\") && arrowFunctionThree instanceof Function && (typeof arrowFunctionFour === \"function\") && arrowFunctionFour instanceof Function && (typeof arrowFunctionFive === \"function\") && arrowFunctionFive instanceof Function && (typeof arrowFunctionSix === \"function\") && arrowFunctionSix instanceof Function && (callArrowFunctionOne === 1) && (callArrowFunctionTwo === 2) && (callArrowFunctionThree === 3) && (callArrowFunctionFour === 4) && (callArrowFunctionFive === 5) && (typeof callArrowFunctionSix === \"object\") && callArrowFunctionSix instanceof Object && (callArrowFunctionSix.keyOne === \"keyOne value\")){
      var element = document.getElementById(\"testId\");
      element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript arrow function syntax. The web browser at least partially/possibly fully supports the JavaScript arrow function syntax. Positive determination of full web browser support is beyond the scope of this test.\";
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
