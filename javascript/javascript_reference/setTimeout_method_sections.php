<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/setTimeout_method_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/setTimeout_method.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 10 May 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>setTimeout()</code> method. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>setTimeout()</code> method, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>setTimeout()</code> method. The web browser does not support the JavaScript <code>setTimeout()</code> method.</q></p>

     <p>If the web browser recognizes the JavaScript <code>setTimeout()</code> method, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>setTimeout()</code> method includes support for at least one <code>setTimeout()</code> method capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>setTimeout()</code> method includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>setTimeout()</code> method, and supports at least one <code>setTimeout()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>setTimeout()</code> method. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>setTimeout()</code> method does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>setTimeout()</code> method, but does not support at least one <code>setTimeout()</code> method capability. The web browser partially supports the JavaScript <code>setTimeout()</code> method.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run manually in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>setTimeout()</code> Method Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> IE10+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.</li>
      <li><q><b>Pass/Fail</b> (partial support):</q> IE6 - 9.</li>
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

     <h2><a id='test'></a>2. <code>setTimeout()</code> Method Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p&gt;To run the web browser support test, click the button. The test output and result will appear below: &lt;button type='button' id='buttonId' class='btn-sm'&gt;Run Web Browser Support Test&lt;/button&gt;.&lt;/p&gt;

&lt;ul id='executionOrderReportId'&gt;&lt;/ul&gt;

&lt;p id='testId'&gt;&lt;/p&gt;&lt;!-- Typically used to hard code Fail test result when web browser no support error stops JavaScript execution, which precludes using document.write to show Fail test result. In this web page, although web browser no support does not produce error that stops JavaScript execution, cannot use document.write to show any (including Pass, Pass/Fail, and Fail) test result. Therefore, use JavaScript innerHTML property to show all test result. --&gt;

&lt;script&gt;
var executionOrderReportTest = &quot;&quot;; // For JavaScript innerHTML property, many web browsers substitute their own line break code for author line break code. For example, IE11, FF59, and CH66 substitute &lt;br&gt; for author &lt;br /&gt;, and OP7.50 substitutes &lt;BR/&gt; for author &lt;br /&gt; and &lt;br&gt;. In other words, JavaScript innerHTML property write is unpredictable/unreliable. Therefore, to test execution order, generate execution order report test string without author line breaks. Must be placed outside scope of setTimeout5000ms; otherwise, setTimeout(&quot;string to execute as JavaScript&quot;) line throws error: ReferenceError: executionOrderReportTest is not defined.
var executionOrderReportElement = document.getElementById(&quot;executionOrderReportId&quot;); // Must be placed outside scope of setTimeout5000ms; otherwise, setTimeout(&quot;string to execute as JavaScript&quot;) line throws error: ReferenceError: executionOrderReportElement is not defined.
supportTest = function(){
 var element = document.getElementById(&quot;testId&quot;); // Normally placed inside implementation test. However, to clear capability test result if user presses run test button multiple times (see line below), must place outside implementation test.
 element.innerHTML = &quot;&quot;; // Clear capability test result if user presses run test button multiple times.
 var anonymousFunctionThisValue = null;
 var functionIdentifierThisValue = null;
 var executionOrderString = &quot;Execution Order 01: Sync 01: Executing code at top of &lt;code&gt;capabilityTest()&lt;/code&gt; function.&quot;;
 executionOrderReportTest = executionOrderString + &quot; &quot;;
 executionOrderReportElement.innerHTML = &quot;&lt;li&gt;&quot; + executionOrderString + &quot;&lt;/li&gt;&quot;;
 // setTimeout1000ms.
 setTimeout(function(){ // setTimeout() method using anonymous function syntax.
  var executionOrderString = &quot;Execution Order 04: Async 02: Executing setTimeout1000ms callback function. Executed after setTimeout0ms callback function even though setTimeout1000ms appears in code before setTimeout0ms.&quot;;
  executionOrderReportTest += executionOrderString + &quot; &quot;;
  executionOrderReportElement.innerHTML += &quot;&lt;li&gt;&quot; + executionOrderString + &quot;&lt;/li&gt;&quot;;
  anonymousFunctionThisValue = this; // window.
 }, 1000);
 // setTimeout0ms.
 setTimeout(function(){
  var executionOrderString = &quot;Execution Order 03: Async 01: Executing setTimeout0ms callback function. Executed before setTimeout1000ms callback function even though setTimeout0ms appears in code after setTimeout1000ms.&quot;;
  executionOrderReportTest += executionOrderString + &quot; &quot;;
  executionOrderReportElement.innerHTML += &quot;&lt;li&gt;&quot; + executionOrderString + &quot;&lt;/li&gt;&quot;;
 }, 0); // Identical to }). If time not specified, default is 0.
 // setTimeout2000ms.
 setTimeout(function(){
  var executionOrderString = &quot;Execution Order 05: Async 03: Executing setTimeout2000ms callback function. Time counted from when &lt;code&gt;setTimeout()&lt;/code&gt; method code parsed, not from when previous &lt;code&gt;setTimeout()&lt;/code&gt; method callback function code executed. Therefore, setTimeout2000ms callback function placed in job queue 1000ms, not 2000ms, after setTimeout1000ms callback function placed in job queue.&quot;;
  executionOrderReportTest += executionOrderString + &quot; &quot;;
  executionOrderReportElement.innerHTML += &quot;&lt;li&gt;&quot; + executionOrderString + &quot;&lt;/li&gt;&quot;;
 }, 2000);
 // setTimeout3000ms.
 var functionIdentifier = function(){
  var executionOrderString = &quot;Execution Order 06: Async 04: Executing setTimeout3000ms callback function. Time counted from when &lt;code&gt;setTimeout()&lt;/code&gt; method code parsed, not from when previous &lt;code&gt;setTimeout()&lt;/code&gt; method callback function code executed. Therefore, setTimeout3000ms callback function placed in job queue 1000ms, not 3000ms, after setTimeout2000ms callback function placed in job queue.&quot;;
  executionOrderReportTest += executionOrderString + &quot; &quot;;
  executionOrderReportElement.innerHTML += &quot;&lt;li&gt;&quot; + executionOrderString + &quot;&lt;/li&gt;&quot;;
  functionIdentifierThisValue = this; // window.
 };
 setTimeout(functionIdentifier, 3000); // setTimeout() method using function identifier syntax. Function identifier can be via function declaration, function expression (shown), or arrow function. NOTE: function reference (functionIdentifier) is passed, not function call(functionIdentifier()).
 // setTimeout4000ms.
 var setTimeoutFunctionWithParams = function(syncAsynExecuting, note){
  var executionOrderString = &quot;Execution Order 07: &quot; + syncAsynExecuting + note;
  executionOrderReportTest += executionOrderString + &quot; &quot;;
  executionOrderReportElement.innerHTML += &quot;&lt;li&gt;&quot; + executionOrderString + &quot;&lt;/li&gt;&quot;;
 }
 setTimeout(setTimeoutFunctionWithParams, 4000, &quot;Async 05: Executing setTimeout4000ms callback function. &quot;, &quot;Time counted from when &lt;code&gt;setTimeout()&lt;/code&gt; method code parsed, not from when previous &lt;code&gt;setTimeout()&lt;/code&gt; method callback function code executed. Therefore, setTimeout4000ms callback function placed in job queue 1000ms, not 4000ms, after setTimeout3000ms callback function placed in job queue.&quot;); // setTimeout() method using named function with parameters syntax. IE9- mistakenly output Execution Order 07: undefined undefined but correctly return timeoutID.
 // setTimeout5000ms.
 setTimeout(&quot;var executionOrderString = 'Execution Order 08: Async 06: Executing setTimeout5000ms callback function. Time counted from when &lt;code&gt;setTimeout()&lt;/code&gt; method code parsed, not from when previous &lt;code&gt;setTimeout()&lt;/code&gt; method callback function code executed. Therefore, setTimeout5000ms callback function placed in job queue 1000ms, not 5000ms, after setTimeout4000ms callback function placed in job queue.';executionOrderReportTest += executionOrderString + ' ';executionOrderReportElement.innerHTML += '&lt;li&gt;' + executionOrderString + '&lt;/li&gt;';&quot;, 5000); // setTimeout() method using code string syntax. Like eval() method, setTimeout() method interprets string argument as JavaScript code, which is a security risk. AVOID.
 // setTimeout6000ms.
 var timeoutID = setTimeout(function(){ // setTimeout() method returns timeout ID, which identifies the setTimeout() method timer.
  var executionOrderString = &quot;Execution Order 09: Async 07: Executing setTimeout6000ms callback function, which is cancelled by clearTimeout() method.&quot;;
  executionOrderReportTest += executionOrderString + &quot; &quot;;
  executionOrderReportElement.innerHTML += &quot;&lt;li&gt;&quot; + executionOrderString + &quot;&lt;/li&gt;&quot;;
 }, 6000);
 clearTimeout(timeoutID); // To cancel setTimeout() method, call clearTimeout() with timeout ID anytime before the timer's timeout elapses.
 // setTimeout7000ms.
 setTimeout(function(){
  var executionOrderString = &quot;Execution Order 10: Async 08: Executing setTimeout7000ms callback function. Time counted from when &lt;code&gt;setTimeout()&lt;/code&gt; method code parsed, not from when previous &lt;code&gt;setTimeout()&lt;/code&gt; method cancelled. (NOTE: Execution Order 09: Async 07: setTimeout6000ms cancelled by &lt;code&gt;clearTimeout()&lt;/code&gt; method.) Therefore, setTimeout7000ms callback function placed in job queue 2000ms, not 7000ms, after setTimeout5000ms callback function placed in job queue.&quot;;
  executionOrderReportTest += executionOrderString + &quot; &quot;;
  executionOrderReportElement.innerHTML += &quot;&lt;li&gt;&quot; + executionOrderString + &quot;&lt;/li&gt;&quot;;
  if (window.setTimeout){ // Implementation test.
   if ((anonymousFunctionThisValue === window) &amp;&amp; (functionIdentifierThisValue === window) &amp;&amp; (executionOrderReportTest === &quot;Execution Order 01: Sync 01: Executing code at top of &lt;code&gt;capabilityTest()&lt;/code&gt; function. Execution Order 02: Sync 02: Executing code at bottom of &lt;code&gt;capabilityTest()&lt;/code&gt; function. The &lt;code&gt;setTimeout()&lt;/code&gt; method code is located between the Sync 01 and Sync 02 code. The &lt;code&gt;setTimeout()&lt;/code&gt; method code is parsed synchronously as normal. The &lt;code&gt;setTimeout()&lt;/code&gt; method callback function code is executed asynchronously as demonstrated below. (NOTE: Execution Order 09: Async 07: setTimeout6000ms cancelled by &lt;code&gt;clearTimeout()&lt;/code&gt; method.) Execution Order 03: Async 01: Executing setTimeout0ms callback function. Executed before setTimeout1000ms callback function even though setTimeout0ms appears in code after setTimeout1000ms. Execution Order 04: Async 02: Executing setTimeout1000ms callback function. Executed after setTimeout0ms callback function even though setTimeout1000ms appears in code before setTimeout0ms. Execution Order 05: Async 03: Executing setTimeout2000ms callback function. Time counted from when &lt;code&gt;setTimeout()&lt;/code&gt; method code parsed, not from when previous &lt;code&gt;setTimeout()&lt;/code&gt; method callback function code executed. Therefore, setTimeout2000ms callback function placed in job queue 1000ms, not 2000ms, after setTimeout1000ms callback function placed in job queue. Execution Order 06: Async 04: Executing setTimeout3000ms callback function. Time counted from when &lt;code&gt;setTimeout()&lt;/code&gt; method code parsed, not from when previous &lt;code&gt;setTimeout()&lt;/code&gt; method callback function code executed. Therefore, setTimeout3000ms callback function placed in job queue 1000ms, not 3000ms, after setTimeout2000ms callback function placed in job queue. Execution Order 07: Async 05: Executing setTimeout4000ms callback function. Time counted from when &lt;code&gt;setTimeout()&lt;/code&gt; method code parsed, not from when previous &lt;code&gt;setTimeout()&lt;/code&gt; method callback function code executed. Therefore, setTimeout4000ms callback function placed in job queue 1000ms, not 4000ms, after setTimeout3000ms callback function placed in job queue. Execution Order 08: Async 06: Executing setTimeout5000ms callback function. Time counted from when &lt;code&gt;setTimeout()&lt;/code&gt; method code parsed, not from when previous &lt;code&gt;setTimeout()&lt;/code&gt; method callback function code executed. Therefore, setTimeout5000ms callback function placed in job queue 1000ms, not 5000ms, after setTimeout4000ms callback function placed in job queue. Execution Order 10: Async 08: Executing setTimeout7000ms callback function. Time counted from when &lt;code&gt;setTimeout()&lt;/code&gt; method code parsed, not from when previous &lt;code&gt;setTimeout()&lt;/code&gt; method cancelled. (NOTE: Execution Order 09: Async 07: setTimeout6000ms cancelled by &lt;code&gt;clearTimeout()&lt;/code&gt; method.) Therefore, setTimeout7000ms callback function placed in job queue 2000ms, not 7000ms, after setTimeout5000ms callback function placed in job queue. &quot;)){ // Capability test.
    element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;setTimeout()&lt;/code&gt; method, and supports at least one &lt;code&gt;setTimeout()&lt;/code&gt; method capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;setTimeout()&lt;/code&gt; method. Positive determination of full web browser support is beyond the scope of this test.&quot;;
   } else {
    element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;setTimeout()&lt;/code&gt; method, but does not support at least one &lt;code&gt;setTimeout()&lt;/code&gt; method capability. The web browser partially supports the JavaScript &lt;code&gt;setTimeout()&lt;/code&gt; method.&quot;;
   }
  } else {
   element.innerHTML = &quot;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;setTimeout()&lt;/code&gt; method. The web browser does not support the JavaScript &lt;code&gt;setTimeout()&lt;/code&gt; method.&quot;;
  }
 }, 7000);
 var executionOrderString = &quot;Execution Order 02: Sync 02: Executing code at bottom of &lt;code&gt;capabilityTest()&lt;/code&gt; function. The &lt;code&gt;setTimeout()&lt;/code&gt; method code is located between the Sync 01 and Sync 02 code. The &lt;code&gt;setTimeout()&lt;/code&gt; method code is parsed synchronously as normal. The &lt;code&gt;setTimeout()&lt;/code&gt; method callback function code is executed asynchronously as demonstrated below. (NOTE: Execution Order 09: Async 07: setTimeout6000ms cancelled by &lt;code&gt;clearTimeout()&lt;/code&gt; method.)&quot;;
 executionOrderReportTest += executionOrderString + &quot; &quot;;
 executionOrderReportElement.innerHTML += &quot;&lt;li&gt;&quot; + executionOrderString + &quot;&lt;/li&gt;&quot;;
}
// Register event handlers.
var buttonElement = document.getElementById(&quot;buttonId&quot;);
buttonElement.onclick = supportTest;
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Manually Run The Web Browser Support Test And Show The Web Browser Support Test Result</h3>

     <p>To run the web browser support test, click the button. The test output and result will appear below: <button type='button' id='buttonId' class='btn-sm'>Run Web Browser Support Test</button>.</p>

     <ul id='executionOrderReportId'></ul>

     <p id='testId'></p><!-- Typically used to hard code Fail test result when web browser no support error stops JavaScript execution, which precludes using document.write to show Fail test result. In this web page, although web browser no support does not produce error that stops JavaScript execution, cannot use document.write to show any (including Pass, Pass/Fail, and Fail) test result. Therefore, use JavaScript innerHTML property to show all test result. -->

     <script>
     var executionOrderReportTest = \"\"; // For JavaScript innerHTML property, many web browsers substitute their own line break code for author line break code. For example, IE11, FF59, and CH66 substitute <br> for author <br />, and OP7.50 substitutes <BR/> for author <br /> and <br>. In other words, JavaScript innerHTML property write is unpredictable/unreliable. Therefore, to test execution order, generate execution order report test string without author line breaks. Must be placed outside scope of setTimeout5000ms; otherwise, setTimeout(\"string to execute as JavaScript\") line throws error: ReferenceError: executionOrderReportTest is not defined.
     var executionOrderReportElement = document.getElementById(\"executionOrderReportId\"); // Must be placed outside scope of setTimeout5000ms; otherwise, setTimeout(\"string to execute as JavaScript\") line throws error: ReferenceError: executionOrderReportElement is not defined.
     supportTest = function(){
      var element = document.getElementById(\"testId\"); // Normally placed inside implementation test. However, to clear capability test result if user presses run test button multiple times (see line below), must place outside implementation test.
      element.innerHTML = \"\"; // Clear capability test result if user presses run test button multiple times.
      var anonymousFunctionThisValue = null;
      var functionIdentifierThisValue = null;
      var executionOrderString = \"Execution Order 01: Sync 01: Executing code at top of <code>capabilityTest()</code> function.\";
      executionOrderReportTest = executionOrderString + \" \";
      executionOrderReportElement.innerHTML = \"<li>\" + executionOrderString + \"</li>\";
      // setTimeout1000ms.
      setTimeout(function(){ // setTimeout() method using anonymous function syntax.
       var executionOrderString = \"Execution Order 04: Async 02: Executing setTimeout1000ms callback function. Executed after setTimeout0ms callback function even though setTimeout1000ms appears in code before setTimeout0ms.\";
       executionOrderReportTest += executionOrderString + \" \";
       executionOrderReportElement.innerHTML += \"<li>\" + executionOrderString + \"</li>\";
       anonymousFunctionThisValue = this; // window.
      }, 1000);
      // setTimeout0ms.
      setTimeout(function(){
       var executionOrderString = \"Execution Order 03: Async 01: Executing setTimeout0ms callback function. Executed before setTimeout1000ms callback function even though setTimeout0ms appears in code after setTimeout1000ms.\";
       executionOrderReportTest += executionOrderString + \" \";
       executionOrderReportElement.innerHTML += \"<li>\" + executionOrderString + \"</li>\";
      }, 0); // Identical to }). If time not specified, default is 0.
      // setTimeout2000ms.
      setTimeout(function(){
       var executionOrderString = \"Execution Order 05: Async 03: Executing setTimeout2000ms callback function. Time counted from when <code>setTimeout()</code> method code parsed, not from when previous <code>setTimeout()</code> method callback function code executed. Therefore, setTimeout2000ms callback function placed in job queue 1000ms, not 2000ms, after setTimeout1000ms callback function placed in job queue.\";
       executionOrderReportTest += executionOrderString + \" \";
       executionOrderReportElement.innerHTML += \"<li>\" + executionOrderString + \"</li>\";
      }, 2000);
      // setTimeout3000ms.
      var functionIdentifier = function(){
       var executionOrderString = \"Execution Order 06: Async 04: Executing setTimeout3000ms callback function. Time counted from when <code>setTimeout()</code> method code parsed, not from when previous <code>setTimeout()</code> method callback function code executed. Therefore, setTimeout3000ms callback function placed in job queue 1000ms, not 3000ms, after setTimeout2000ms callback function placed in job queue.\";
       executionOrderReportTest += executionOrderString + \" \";
       executionOrderReportElement.innerHTML += \"<li>\" + executionOrderString + \"</li>\";
       functionIdentifierThisValue = this; // window.
      };
      setTimeout(functionIdentifier, 3000); // setTimeout() method using function identifier syntax. Function identifier can be via function declaration, function expression (shown), or arrow function. NOTE: function reference (functionIdentifier) is passed, not function call(functionIdentifier()).
      // setTimeout4000ms.
      var setTimeoutFunctionWithParams = function(syncAsynExecuting, note){
       var executionOrderString = \"Execution Order 07: \" + syncAsynExecuting + note;
       executionOrderReportTest += executionOrderString + \" \";
       executionOrderReportElement.innerHTML += \"<li>\" + executionOrderString + \"</li>\";
      }
      setTimeout(setTimeoutFunctionWithParams, 4000, \"Async 05: Executing setTimeout4000ms callback function. \", \"Time counted from when <code>setTimeout()</code> method code parsed, not from when previous <code>setTimeout()</code> method callback function code executed. Therefore, setTimeout4000ms callback function placed in job queue 1000ms, not 4000ms, after setTimeout3000ms callback function placed in job queue.\"); // setTimeout() method using named function with parameters syntax. IE9- mistakenly output Execution Order 07: undefined undefined but correctly return timeoutID.
      // setTimeout5000ms.
      setTimeout(\"var executionOrderString = 'Execution Order 08: Async 06: Executing setTimeout5000ms callback function. Time counted from when <code>setTimeout()</code> method code parsed, not from when previous <code>setTimeout()</code> method callback function code executed. Therefore, setTimeout5000ms callback function placed in job queue 1000ms, not 5000ms, after setTimeout4000ms callback function placed in job queue.';executionOrderReportTest += executionOrderString + ' ';executionOrderReportElement.innerHTML += '<li>' + executionOrderString + '</li>';\", 5000); // setTimeout() method using code string syntax. Like eval() method, setTimeout() method interprets string argument as JavaScript code, which is a security risk. AVOID.
      // setTimeout6000ms.
      var timeoutID = setTimeout(function(){ // setTimeout() method returns timeout ID, which identifies the setTimeout() method timer.
       var executionOrderString = \"Execution Order 09: Async 07: Executing setTimeout6000ms callback function, which is cancelled by clearTimeout() method.\";
       executionOrderReportTest += executionOrderString + \" \";
       executionOrderReportElement.innerHTML += \"<li>\" + executionOrderString + \"</li>\";
      }, 6000);
      clearTimeout(timeoutID); // To cancel setTimeout() method, call clearTimeout() with timeout ID anytime before the timer's timeout elapses.
      // setTimeout7000ms.
      setTimeout(function(){
       var executionOrderString = \"Execution Order 10: Async 08: Executing setTimeout7000ms callback function. Time counted from when <code>setTimeout()</code> method code parsed, not from when previous <code>setTimeout()</code> method cancelled. (NOTE: Execution Order 09: Async 07: setTimeout6000ms cancelled by <code>clearTimeout()</code> method.) Therefore, setTimeout7000ms callback function placed in job queue 2000ms, not 7000ms, after setTimeout5000ms callback function placed in job queue.\";
       executionOrderReportTest += executionOrderString + \" \";
       executionOrderReportElement.innerHTML += \"<li>\" + executionOrderString + \"</li>\";
       if (window.setTimeout){ // Implementation test.
        if ((anonymousFunctionThisValue === window) && (functionIdentifierThisValue === window) && (executionOrderReportTest === \"Execution Order 01: Sync 01: Executing code at top of <code>capabilityTest()</code> function. Execution Order 02: Sync 02: Executing code at bottom of <code>capabilityTest()</code> function. The <code>setTimeout()</code> method code is located between the Sync 01 and Sync 02 code. The <code>setTimeout()</code> method code is parsed synchronously as normal. The <code>setTimeout()</code> method callback function code is executed asynchronously as demonstrated below. (NOTE: Execution Order 09: Async 07: setTimeout6000ms cancelled by <code>clearTimeout()</code> method.) Execution Order 03: Async 01: Executing setTimeout0ms callback function. Executed before setTimeout1000ms callback function even though setTimeout0ms appears in code after setTimeout1000ms. Execution Order 04: Async 02: Executing setTimeout1000ms callback function. Executed after setTimeout0ms callback function even though setTimeout1000ms appears in code before setTimeout0ms. Execution Order 05: Async 03: Executing setTimeout2000ms callback function. Time counted from when <code>setTimeout()</code> method code parsed, not from when previous <code>setTimeout()</code> method callback function code executed. Therefore, setTimeout2000ms callback function placed in job queue 1000ms, not 2000ms, after setTimeout1000ms callback function placed in job queue. Execution Order 06: Async 04: Executing setTimeout3000ms callback function. Time counted from when <code>setTimeout()</code> method code parsed, not from when previous <code>setTimeout()</code> method callback function code executed. Therefore, setTimeout3000ms callback function placed in job queue 1000ms, not 3000ms, after setTimeout2000ms callback function placed in job queue. Execution Order 07: Async 05: Executing setTimeout4000ms callback function. Time counted from when <code>setTimeout()</code> method code parsed, not from when previous <code>setTimeout()</code> method callback function code executed. Therefore, setTimeout4000ms callback function placed in job queue 1000ms, not 4000ms, after setTimeout3000ms callback function placed in job queue. Execution Order 08: Async 06: Executing setTimeout5000ms callback function. Time counted from when <code>setTimeout()</code> method code parsed, not from when previous <code>setTimeout()</code> method callback function code executed. Therefore, setTimeout5000ms callback function placed in job queue 1000ms, not 5000ms, after setTimeout4000ms callback function placed in job queue. Execution Order 10: Async 08: Executing setTimeout7000ms callback function. Time counted from when <code>setTimeout()</code> method code parsed, not from when previous <code>setTimeout()</code> method cancelled. (NOTE: Execution Order 09: Async 07: setTimeout6000ms cancelled by <code>clearTimeout()</code> method.) Therefore, setTimeout7000ms callback function placed in job queue 2000ms, not 7000ms, after setTimeout5000ms callback function placed in job queue. \")){ // Capability test.
         element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>setTimeout()</code> method, and supports at least one <code>setTimeout()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>setTimeout()</code> method. Positive determination of full web browser support is beyond the scope of this test.\";
        } else {
         element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>setTimeout()</code> method, but does not support at least one <code>setTimeout()</code> method capability. The web browser partially supports the JavaScript <code>setTimeout()</code> method.\";
        }
       } else {
        element.innerHTML = \"<b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>setTimeout()</code> method. The web browser does not support the JavaScript <code>setTimeout()</code> method.\";
       }
      }, 7000);
      var executionOrderString = \"Execution Order 02: Sync 02: Executing code at bottom of <code>capabilityTest()</code> function. The <code>setTimeout()</code> method code is located between the Sync 01 and Sync 02 code. The <code>setTimeout()</code> method code is parsed synchronously as normal. The <code>setTimeout()</code> method callback function code is executed asynchronously as demonstrated below. (NOTE: Execution Order 09: Async 07: setTimeout6000ms cancelled by <code>clearTimeout()</code> method.)\";
      executionOrderReportTest += executionOrderString + \" \";
      executionOrderReportElement.innerHTML += \"<li>\" + executionOrderString + \"</li>\";
     }
     // Register event handlers.
     var buttonElement = document.getElementById(\"buttonId\");
     buttonElement.onclick = supportTest;
     </script>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/javascript/javascript_reference/index.php'>JavaScript Feature Reference (learnwebcoding.com)</a></li>
     </ul>

    </section>";
