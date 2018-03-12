<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/object_destructuring_syntax_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/object_destructuring_syntax.php.
 * Last reviewed/updated: 06 Mar 2018.
 * Published: 29 Jan 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there is one web browser JavaScript feature support test: a feature implementation test. The implementation test determines if the web browser recognizes the JavaScript object destructuring syntax. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript object destructuring syntax, the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript object destructuring syntax. The web browser does not support the JavaScript object destructuring syntax.</q> If the web browser recognizes the JavaScript object destructuring syntax, the implementation test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript object destructuring syntax. The web browser at least partially/possibly fully supports the JavaScript object destructuring syntax. Positive determination of full web browser support is beyond the scope of this test.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. Object Destructuring Syntax Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED14+, FF47+, CH49+, OP36+.</li>
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

     <h2><a id='test'></a>2. Object Destructuring Syntax Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'>&lt;b>Fail&lt;/b> (no support): The web browser does not recognize the JavaScript object destructuring syntax. The web browser does not support the JavaScript object destructuring syntax.&lt;/p>&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

&lt;script>
var objectLiteralOne = {propertyOne: 1, propertyTwo: 2};
var {propertyOne, propertyTwo} = objectLiteralOne; // Object literal variable as initializer.
var objectLiteralTwo = {propertyThree: 3, propertyFour: 4, propertyFive: null, propertySix: undefined};
var {propertyThree, propertyFour = &quot;propertyFour default value not used&quot;, propertyFive = &quot;propertyFive default value not used&quot;, propertySix = &quot;propertySix default value used&quot;, propertySeven = &quot;propertySeven default value used&quot;, propertyEight} = objectLiteralTwo; // Assign default value. Default value is used when initializer property value is undefined or initializer property does not exist.
var {propertyNine, propertyTen} = {propertyNine: 9, propertyTen: 10}; // Object literal as initializer.
({propertyEleven, propertyTwelve} = {propertyEleven: 11, propertyTwelve: 12}); // No var keyword. Place destructuring assignment statement inside ().
var objectLiteralThree = {propertyThirteen: 13, propertyFourteen: 14};
var {propertyThirteen: propertyX, propertyFourteen: propertyY} = objectLiteralThree; // Assign to variable with different name.
if ((propertyOne === 1) &amp;&amp; (propertyTwo === 2) &amp;&amp; (propertyThree === 3) &amp;&amp; (propertyFour === 4) &amp;&amp; (propertyFive === null) &amp;&amp; (propertySix === &quot;propertySix default value used&quot;) &amp;&amp; (propertySeven === &quot;propertySeven default value used&quot;) &amp;&amp; (propertyEight === undefined) &amp;&amp; (propertyNine === 9) &amp;&amp; (propertyTen === 10) &amp;&amp; (propertyEleven === 11) &amp;&amp; (propertyTwelve === 12) &amp;&amp; (propertyX === 13) &amp;&amp; (propertyY === 14)){
 var element = document.getElementById(&quot;testId&quot;);
 element.innerHTML = &quot;&lt;b>Pass&lt;/b> (at least partial/possibly full support): The web browser recognizes the JavaScript object destructuring syntax. The web browser at least partially/possibly fully supports the JavaScript object destructuring syntax. Positive determination of full web browser support is beyond the scope of this test.&quot;;
}
&lt;/script>
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript object destructuring syntax. The web browser does not support the JavaScript object destructuring syntax.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var objectLiteralOne = {propertyOne: 1, propertyTwo: 2};
     var {propertyOne, propertyTwo} = objectLiteralOne; // Object literal variable as initializer.
     var objectLiteralTwo = {propertyThree: 3, propertyFour: 4, propertyFive: null, propertySix: undefined};
     var {propertyThree, propertyFour = \"propertyFour default value not used\", propertyFive = \"propertyFive default value not used\", propertySix = \"propertySix default value used\", propertySeven = \"propertySeven default value used\", propertyEight} = objectLiteralTwo; // Assign default value. Default value is used when initializer property value is undefined or initializer property does not exist.
     var {propertyNine, propertyTen} = {propertyNine: 9, propertyTen: 10}; // Object literal as initializer.
     ({propertyEleven, propertyTwelve} = {propertyEleven: 11, propertyTwelve: 12}); // No var keyword. Place destructuring assignment statement inside ().
     var objectLiteralThree = {propertyThirteen: 13, propertyFourteen: 14};
     var {propertyThirteen: propertyX, propertyFourteen: propertyY} = objectLiteralThree; // Assign to variable with different name.
     if ((propertyOne === 1) && (propertyTwo === 2) && (propertyThree === 3) && (propertyFour === 4) && (propertyFive === null) && (propertySix === \"propertySix default value used\") && (propertySeven === \"propertySeven default value used\") && (propertyEight === undefined) && (propertyNine === 9) && (propertyTen === 10) && (propertyEleven === 11) && (propertyTwelve === 12) && (propertyX === 13) && (propertyY === 14)){
      var element = document.getElementById(\"testId\");
      element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript object destructuring syntax. The web browser at least partially/possibly fully supports the JavaScript object destructuring syntax. Positive determination of full web browser support is beyond the scope of this test.\";
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
