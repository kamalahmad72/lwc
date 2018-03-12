<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/generator_function_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/generator_function.php.
 * Last reviewed/updated: 01 Jan 2018.
 * Published: 01 Jan 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript generator function. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript generator function, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript generator function. The web browser does not support the JavaScript generator function.</q></p>

     <p>If the web browser recognizes the JavaScript generator function, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript generator function includes support for at least one generator function capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript generator function includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript generator function, and supports at least one generator function capability. The web browser at least partially/possibly fully supports the JavaScript generator function. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript generator function does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript generator function, but does not support at least one generator function capability. The web browser partially supports the JavaScript generator function.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. Generator Function Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED13+, FF36+, CH39+, OP26+.</li>
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

     <h2><a id='test'></a>2. Generator Function Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript generator function. The web browser does not support the JavaScript generator function.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
function* generatorFunctionDeclaration(){} // Generator function using function declaration syntax.
var generatorFunctionExpression = function*(param){}; // Generator function using function expression syntax.
objectLiteral = {
 generatorFunctionMethod: function*(param){} // Generator function using object method syntax.
};
// Call generator functions. Each call returns a Generator object which inherits prototype from Object and is an iterator.
var generatorObjectOne = generatorFunctionDeclaration();
var generatorObjectTwo = generatorFunctionExpression();
var generatorObjectThree = objectLiteral.generatorFunctionMethod();
if ((window.generatorObjectOne) &amp;&amp; (window.generatorObjectTwo) &amp;&amp; (window.generatorObjectThree)){
 var element = document.getElementById(&quot;testId&quot;);
 if ((typeof generatorObjectOne === &quot;object&quot;) &amp;&amp; Object.prototype.isPrototypeOf(generatorObjectOne) &amp;&amp; generatorObjectOne[Symbol.iterator] &amp;&amp; (typeof generatorObjectTwo === &quot;object&quot;) &amp;&amp; Object.prototype.isPrototypeOf(generatorObjectTwo) &amp;&amp; generatorObjectTwo[Symbol.iterator] &amp;&amp; (typeof generatorObjectThree === &quot;object&quot;) &amp;&amp; Object.prototype.isPrototypeOf(generatorObjectThree) &amp;&amp; generatorObjectThree[Symbol.iterator]){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript generator function, and supports at least one generator function capability. The web browser at least partially/possibly fully supports the JavaScript generator function. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript generator function, but does not support at least one generator function capability. The web browser partially supports the JavaScript generator function.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <!-- Calling generator function does not execute generator function body. Instead, calling generator function returns Generator object. Calling Generator object next() method executes generator function body. However, calling Generator object next() method is best suited for Generator object web browser support test, not generator function web browser support test. Therefore, since cannot nest generator function web browser support tests in generator function, only reasonable implementation test to determine if web browser recognizes the JavaScript generator function is to call generator function and see if Generator object return value exists as a window property. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript generator function. The web browser does not support the JavaScript generator function.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     function* generatorFunctionDeclaration(){} // Generator function using function declaration syntax.
     var generatorFunctionExpression = function*(param){}; // Generator function using function expression syntax.
     objectLiteral = {
      generatorFunctionMethod: function*(param){} // Generator function using object method syntax.
     };
     // Call generator functions. Each call returns a Generator object which inherits prototype from Object and is an iterator.
     var generatorObjectOne = generatorFunctionDeclaration();
     var generatorObjectTwo = generatorFunctionExpression();
     var generatorObjectThree = objectLiteral.generatorFunctionMethod();
     if ((window.generatorObjectOne) && (window.generatorObjectTwo) && (window.generatorObjectThree)){
      var element = document.getElementById(\"testId\");
      if ((typeof generatorObjectOne === \"object\") && Object.prototype.isPrototypeOf(generatorObjectOne) && generatorObjectOne[Symbol.iterator] && (typeof generatorObjectTwo === \"object\") && Object.prototype.isPrototypeOf(generatorObjectTwo) && generatorObjectTwo[Symbol.iterator] && (typeof generatorObjectThree === \"object\") && Object.prototype.isPrototypeOf(generatorObjectThree) && generatorObjectThree[Symbol.iterator]){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript generator function, and supports at least one generator function capability. The web browser at least partially/possibly fully supports the JavaScript generator function. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript generator function, but does not support at least one generator function capability. The web browser partially supports the JavaScript generator function.\";
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
