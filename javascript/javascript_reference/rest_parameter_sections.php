<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/rest_parameter_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/rest_parameter.php.
 * Last reviewed/updated: 07 Mar 2018.
 * Published: 23 Nov 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript rest parameter. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript rest parameter, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript rest parameter. The web browser does not support the JavaScript rest parameter.</q></p>

     <p>If the web browser recognizes the JavaScript rest parameter, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript rest parameter includes support for at least one rest parameter capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript rest parameter includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript rest parameter, and supports at least one rest parameter capability. The web browser at least partially/possibly fully supports the JavaScript rest parameter. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript rest parameter does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript rest parameter, but does not support at least one rest parameter capability. The web browser partially supports the JavaScript rest parameter.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. Rest Parameter Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF43+, CH47+, OP34+.</li>
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

     <h2><a id='test'></a>2. Rest Parameter Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript rest parameter. The web browser does not support the JavaScript rest parameter.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
function implementationTest(...implementationTestRestParam){
 if ((implementationTestRestParam[0] === &quot;restParamOne value&quot;) &amp;&amp; (implementationTestRestParam[1] === &quot;restParamTwo value&quot;) &amp;&amp; (implementationTestRestParam[2] === &quot;restParamThree value&quot;)){
  var element = document.getElementById(&quot;testId&quot;);
  function capabilityTest(param, ...capabilityTestRestParam){ // Rest parameter does not contribute to function length property. Rest parameter array has length property. Arguments passed to rest parameter are set on function arguments object.
   if ((capabilityTest.length === 1) &amp;&amp; (capabilityTestRestParam.length === 3) &amp;&amp; (arguments.length === 4)){
    element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript rest parameter, and supports at least one rest parameter capability. The web browser at least partially/possibly fully supports the JavaScript rest parameter. Positive determination of full web browser support is beyond the scope of this test.&quot;;
   } else {
    element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript rest parameter, but does not support at least one rest parameter capability. The web browser partially supports the JavaScript rest parameter.&quot;;
   }
  }
  capabilityTest(&quot;param value&quot;, &quot;restParamOne value&quot;, &quot;restParamTwo value&quot;, &quot;restParamThree value&quot;);
 }
}
implementationTest(&quot;restParamOne value&quot;, &quot;restParamTwo value&quot;, &quot;restParamThree value&quot;);
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- Similar testing scheme parameter default value and rest parameter. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript rest parameter. The web browser does not support the JavaScript rest parameter.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     function implementationTest(...implementationTestRestParam){
      if ((implementationTestRestParam[0] === \"restParamOne value\") && (implementationTestRestParam[1] === \"restParamTwo value\") && (implementationTestRestParam[2] === \"restParamThree value\")){
       var element = document.getElementById(\"testId\");
       function capabilityTest(param, ...capabilityTestRestParam){ // Rest parameter does not contribute to function length property. Rest parameter array has length property. Arguments passed to rest parameter are set on function arguments object.
        if ((capabilityTest.length === 1) && (capabilityTestRestParam.length === 3) && (arguments.length === 4)){
         element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript rest parameter, and supports at least one rest parameter capability. The web browser at least partially/possibly fully supports the JavaScript rest parameter. Positive determination of full web browser support is beyond the scope of this test.\";
        } else {
         element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript rest parameter, but does not support at least one rest parameter capability. The web browser partially supports the JavaScript rest parameter.\";
        }
       }
       capabilityTest(\"param value\", \"restParamOne value\", \"restParamTwo value\", \"restParamThree value\");
      }
     }
     implementationTest(\"restParamOne value\", \"restParamTwo value\", \"restParamThree value\");
     </script>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/javascript/javascript_reference/index.php'>JavaScript Feature Reference (learnwebcoding.com)</a></li>
     </ul>

    </section>";
