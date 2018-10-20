<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/parameter_default_value_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/parameter_default_value.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 21 Nov 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript parameter default value. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript parameter default value, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript parameter default value. The web browser does not support the JavaScript parameter default value.</q></p>

     <p>If the web browser recognizes the JavaScript parameter default value, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript parameter default value includes support for at least one parameter default value capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript parameter default value includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript parameter default value, and supports at least one parameter default value capability. The web browser at least partially/possibly fully supports the JavaScript parameter default value. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript parameter default value does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript parameter default value, but does not support at least one parameter default value capability. The web browser partially supports the JavaScript parameter default value.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. Parameter Default Value Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED14+, FF15+, CH49+, OP36+.</li>
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

     <h2><a id='test'></a>2. Parameter Default Value Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript parameter default value. The web browser does not support the JavaScript parameter default value.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
function implementationTest(param = &quot;default value&quot;){
 implementationTestResult = (param === &quot;default value&quot;) ? true : false;
}
function capabilityTestOne(paramOne, paramTwo = &quot;paramTwo default value&quot;, paramThree = &quot;paramThree default value&quot;, paramFour = &quot;paramFour default value&quot;){
 capabilityTestOneResult = ((paramOne === &quot;paramOne value&quot;) && (paramTwo === null) &amp;&amp; (paramThree === &quot;paramThree default value&quot;) &amp;&amp; (paramFour === &quot;paramFour new value&quot;)) ? true : false;
}
function capabilityTestTwo(paramOne, paramTwo = &quot;paramTwo default value&quot;, paramThree = &quot;paramThree default value&quot;, paramFour = &quot;paramFour default value&quot;){
 capabilityTestTwoResult = ((arguments.length === 3) &amp;&amp; (arguments[0] === paramOne) &amp;&amp; (paramOne === &quot;paramOne value&quot;) &amp;&amp; (arguments[1] === undefined) &amp;&amp; (paramTwo === &quot;paramTwo default value&quot;) &amp;&amp; (paramTwo !== undefined) &amp;&amp; (arguments[2] === &quot;paramThree new value&quot;) &amp;&amp; (paramThree === &quot;paramThree new value&quot;) &amp;&amp; (arguments[3] === undefined) &amp;&amp; (arguments[3] !== paramFour) &amp;&amp; (paramFour === &quot;paramFour default value&quot;)) ? true : false;
}
implementationTest();
capabilityTestOne(&quot;paramOne value&quot;, null, undefined, &quot;paramFour new value&quot;); // &quot;paramValueOne&quot; passed to paramOne demonstrates traditional function argument/parameter behavior. null is valid value and is passed to paramTwo, replacing &quot;paramTwo default value&quot;. undefined means use parameter default value. &quot;paramFour new value&quot; is passed to paramFour, replacing &quot;paramFour default value&quot;.
capabilityTestTwo(&quot;paramOne value&quot;, undefined, &quot;paramThree new value&quot;); // Parameter default values are not set on function arguments object. Note: arguments[3] is undefined, not paramFour. Arguments passed to parameters with default values are set on function arguments object (including undefined when undefined is passed) and are set on function parameter variables (except undefined when undefined is passed).
if (implementationTestResult){
 var element = document.getElementById(&quot;testId&quot;);
 if (capabilityTestOneResult &amp;&amp; capabilityTestTwoResult){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript parameter default value, and supports at least one parameter default value capability. The web browser at least partially/possibly fully supports the JavaScript parameter default value. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript parameter default value, but does not support at least one parameter default value capability. The web browser partially supports the JavaScript parameter default value.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- Similar testing scheme parameter default value and rest parameter. -->
<!-- In this example, nesting functions would greatly reduce readability/maintainability. Therefore, did not nest functions below. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript parameter default value. The web browser does not support the JavaScript parameter default value.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     function implementationTest(param = \"default value\"){
      implementationTestResult = (param === \"default value\") ? true : false;
     }
     function capabilityTestOne(paramOne, paramTwo = \"paramTwo default value\", paramThree = \"paramThree default value\", paramFour = \"paramFour default value\"){
      capabilityTestOneResult = ((paramOne === \"paramOne value\") && (paramTwo === null) && (paramThree === \"paramThree default value\") && (paramFour === \"paramFour new value\")) ? true : false;
     }
     function capabilityTestTwo(paramOne, paramTwo = \"paramTwo default value\", paramThree = \"paramThree default value\", paramFour = \"paramFour default value\"){
      capabilityTestTwoResult = ((arguments.length === 3) && (arguments[0] === paramOne) && (paramOne === \"paramOne value\") && (arguments[1] === undefined) && (paramTwo === \"paramTwo default value\") && (paramTwo !== undefined) && (arguments[2] === \"paramThree new value\") && (paramThree === \"paramThree new value\") && (arguments[3] === undefined) && (arguments[3] !== paramFour) && (paramFour === \"paramFour default value\")) ? true : false;
     }
     implementationTest();
     capabilityTestOne(\"paramOne value\", null, undefined, \"paramFour new value\"); // \"paramValueOne\" passed to paramOne demonstrates traditional function argument/parameter behavior. null is valid value and is passed to paramTwo, replacing \"paramTwo default value\". undefined means use parameter default value. \"paramFour new value\" is passed to paramFour, replacing \"paramFour default value\".
     capabilityTestTwo(\"paramOne value\", undefined, \"paramThree new value\"); // Parameter default values are not set on function arguments object. Note: arguments[3] is undefined, not paramFour. Arguments passed to parameters with default values are set on function arguments object (including undefined when undefined is passed) and are set on function parameter variables (except undefined when undefined is passed).
     if (implementationTestResult){
      var element = document.getElementById(\"testId\");
      if (capabilityTestOneResult && capabilityTestTwoResult){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript parameter default value, and supports at least one parameter default value capability. The web browser at least partially/possibly fully supports the JavaScript parameter default value. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript parameter default value, but does not support at least one parameter default value capability. The web browser partially supports the JavaScript parameter default value.\";
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
