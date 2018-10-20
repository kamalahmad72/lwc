<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/template_tag_syntax_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/template_tag_syntax.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 02 Nov 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript template tag syntax. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript template tag syntax, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript template tag syntax. The web browser does not support the JavaScript template tag syntax.</q></p>

     <p>If the web browser recognizes the JavaScript template tag syntax, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript template tag syntax includes support for at least one template tag syntax capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript template tag syntax includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript template tag syntax, and supports at least one template tag syntax capability. The web browser at least partially/possibly fully supports the JavaScript template tag syntax. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript template tag syntax does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript template tag syntax, but does not support at least one template tag syntax capability. The web browser partially supports the JavaScript template tag syntax.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. Template Tag Syntax Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF34+, CH41+, OP28+.</li>
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

     <h2><a id='test'></a>2. Template Tag Syntax Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript template tag syntax. The web browser does not support the JavaScript template tag syntax.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
function implementationTestTemplateTagName(dummyTemplateLiteralStringLiterals){
 var element = document.getElementById(&quot;testId&quot;),
  substitutionOne = &quot;def&quot;,
  numberLiteralOne = 1,
  numberLiteralTwo = 2,
  substitutionTwo = numberLiteralOne + numberLiteralTwo,
  substitutionThree = &quot;mno&quot;;
 function capabilityTestTemplateTagName(templateLiteralStringLiterals, templateLiteralSubstitutionOne, templateLiteralSubstitutionTwo, templateLiteralSubstitutionThree){
  return templateLiteralStringLiterals[0] + templateLiteralSubstitutionOne + templateLiteralStringLiterals[1] + templateLiteralSubstitutionTwo + templateLiteralStringLiterals[2] + templateLiteralSubstitutionThree + templateLiteralStringLiterals[3];
 }
 var templateTagStringOutput = capabilityTestTemplateTagName`abc &dollar;{substitutionOne} ghi &dollar;{substitutionTwo} jkl &dollar;{substitutionThree} pqr`;
 if ((typeof templateTagStringOutput === &quot;string&quot;) &amp;&amp; (templateTagStringOutput === &quot;abc def ghi 3 jkl mno pqr&quot;)){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript template tag syntax, and supports at least one template tag syntax capability. The web browser at least partially/possibly fully supports the JavaScript template tag syntax. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript template tag syntax, but does not support at least one template tag syntax capability. The web browser partially supports the JavaScript template tag syntax.&quot;;
 }
}
implementationTestTemplateTagName`dummy template literal`;
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript template tag syntax. The web browser does not support the JavaScript template tag syntax.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     function implementationTestTemplateTagName(dummyTemplateLiteralStringLiterals){
      var element = document.getElementById(\"testId\"),
       substitutionOne = \"def\",
       numberLiteralOne = 1,
       numberLiteralTwo = 2,
       substitutionTwo = numberLiteralOne + numberLiteralTwo,
       substitutionThree = \"mno\";
      function capabilityTestTemplateTagName(templateLiteralStringLiterals, templateLiteralSubstitutionOne, templateLiteralSubstitutionTwo, templateLiteralSubstitutionThree){
       return templateLiteralStringLiterals[0] + templateLiteralSubstitutionOne + templateLiteralStringLiterals[1] + templateLiteralSubstitutionTwo + templateLiteralStringLiterals[2] + templateLiteralSubstitutionThree + templateLiteralStringLiterals[3];
      }
      var templateTagStringOutput = capabilityTestTemplateTagName`abc \${substitutionOne} ghi \${substitutionTwo} jkl \${substitutionThree} pqr`;
      if ((typeof templateTagStringOutput === \"string\") && (templateTagStringOutput === \"abc def ghi 3 jkl mno pqr\")){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript template tag syntax, and supports at least one template tag syntax capability. The web browser at least partially/possibly fully supports the JavaScript template tag syntax. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript template tag syntax, but does not support at least one template tag syntax capability. The web browser partially supports the JavaScript template tag syntax.\";
      }
     }
     implementationTestTemplateTagName`dummy template literal`;
     </script>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/javascript/javascript_reference/index.php'>JavaScript Feature Reference (learnwebcoding.com)</a></li>
     </ul>

    </section>";
