<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/array_destructuring_syntax_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/array_destructuring_syntax.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 29 Jan 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there is one web browser JavaScript feature support test: a feature implementation test. The implementation test determines if the web browser recognizes the JavaScript array destructuring syntax. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript array destructuring syntax, the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript array destructuring syntax. The web browser does not support the JavaScript array destructuring syntax.</q> If the web browser recognizes the JavaScript array destructuring syntax, the implementation test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript array destructuring syntax. The web browser at least partially/possibly fully supports the JavaScript array destructuring syntax. Positive determination of full web browser support is beyond the scope of this test.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. Array Destructuring Syntax Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED14+, FF38+, CH49+, OP36+.</li>
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

     <h2><a id='test'></a>2. Array Destructuring Syntax Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript array destructuring syntax. The web browser does not support the JavaScript array destructuring syntax.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
var arrayLiteralOne = [1, 2];
var [variableOne, variableTwo] = arrayLiteralOne; // Array literal variable as initializer.
var arrayLiteralTwo = [3, 4, null, undefined];
var [variableThree, variableFour = &quot;variableFour default value not used&quot;, variableFive = &quot;variableFive default value not used&quot;, variableSix = &quot;variableSix default value used&quot;, variableSeven = &quot;variableSeven default value used&quot;, variableEight] = arrayLiteralTwo; // Assign default value. Default value is used when initializer value is undefined or initializer value does not exist.
var [variableNine, variableTen] = [9, 10]; // Array literal as initializer.
[variableEleven, variableTwelve] = [11, 12]; // No var keyword. Do not place destructuring assignment statement inside ().
arrayLiteralThree = [9, 13, 5, 7, 14, 15, 16];
var [ , variableThirteen, , , variableFourteen] = arrayLiteralThree; // Ignore values. Empty placeholders not required to ignore any trailing initializer values.
var variableX = 1,
 variableY = 2;
[variableX, variableY] = [variableY, variableX]; // Swap values.
var arrayLiteralFour = [1, 2, 3, 4];
var [...clonedArray] = arrayLiteralFour; // Clone array to clonedArray array variable.
var [variableZ, ...restArray] = arrayLiteralFour; // Assign remaining array elements to restArray array variable.
if ((variableOne === 1) &amp;&amp; (variableTwo === 2) &amp;&amp; (variableThree === 3) &amp;&amp; (variableFour === 4) &amp;&amp; (variableFive === null) &amp;&amp; (variableSix === &quot;variableSix default value used&quot;) &amp;&amp; (variableSeven === &quot;variableSeven default value used&quot;) &amp;&amp; (variableEight === undefined) &amp;&amp; (variableNine === 9) &amp;&amp; (variableTen === 10) &amp;&amp; (variableEleven === 11) &amp;&amp; (variableTwelve === 12) &amp;&amp; (variableThirteen === 13) &amp;&amp; (variableFourteen === 14) &amp;&amp; (variableX === 2) &amp;&amp; (variableY === 1) &amp;&amp; clonedArray instanceof Array &amp;&amp; Array.isArray(clonedArray) &amp;&amp; (clonedArray.length === 4) &amp;&amp; (clonedArray[0] === 1) &amp;&amp; restArray instanceof Array &amp;&amp; Array.isArray(restArray) &amp;&amp; (restArray.length === 3) &amp;&amp; restArray[0] === 2){
 var element = document.getElementById(&quot;testId&quot;);
 element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript array destructuring syntax. The web browser at least partially/possibly fully supports the JavaScript array destructuring syntax. Positive determination of full web browser support is beyond the scope of this test.&quot;;
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- Per LWC web browser support testing, instanceof operator supported by IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+, isArray() method supported by IE9+, ED12+, FF4+, SF5+, CH4+, OP10.50+, and array destructuring syntax supported by ED14+, FF38+, CH49+, OP36+, no IE11-, SF5.1.7-. Therefore, in web browser support test below, instanceof operator and isArray() method do not skew test result. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript array destructuring syntax. The web browser does not support the JavaScript array destructuring syntax.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var arrayLiteralOne = [1, 2];
     var [variableOne, variableTwo] = arrayLiteralOne; // Array literal variable as initializer.
     var arrayLiteralTwo = [3, 4, null, undefined];
     var [variableThree, variableFour = \"variableFour default value not used\", variableFive = \"variableFive default value not used\", variableSix = \"variableSix default value used\", variableSeven = \"variableSeven default value used\", variableEight] = arrayLiteralTwo; // Assign default value. Default value is used when initializer value is undefined or initializer value does not exist.
     var [variableNine, variableTen] = [9, 10]; // Array literal as initializer.
     [variableEleven, variableTwelve] = [11, 12]; // No var keyword. Do not place destructuring assignment statement inside ().
     arrayLiteralThree = [9, 13, 5, 7, 14, 15, 16];
     var [ , variableThirteen, , , variableFourteen] = arrayLiteralThree; // Ignore values. Empty placeholders not required to ignore any trailing initializer values.
     var variableX = 1,
      variableY = 2;
     [variableX, variableY] = [variableY, variableX]; // Swap values.
     var arrayLiteralFour = [1, 2, 3, 4];
     var [...clonedArray] = arrayLiteralFour; // Clone array to clonedArray array variable.
     var [variableZ, ...restArray] = arrayLiteralFour; // Assign remaining array elements to restArray array variable.
     if ((variableOne === 1) && (variableTwo === 2) && (variableThree === 3) && (variableFour === 4) && (variableFive === null) && (variableSix === \"variableSix default value used\") && (variableSeven === \"variableSeven default value used\") && (variableEight === undefined) && (variableNine === 9) && (variableTen === 10) && (variableEleven === 11) && (variableTwelve === 12) && (variableThirteen === 13) && (variableFourteen === 14) && (variableX === 2) && (variableY === 1) && clonedArray instanceof Array && Array.isArray(clonedArray) && (clonedArray.length === 4) && (clonedArray[0] === 1) && restArray instanceof Array && Array.isArray(restArray) && (restArray.length === 3) && restArray[0] === 2){
      var element = document.getElementById(\"testId\");
      element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript array destructuring syntax. The web browser at least partially/possibly fully supports the JavaScript array destructuring syntax. Positive determination of full web browser support is beyond the scope of this test.\";
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
