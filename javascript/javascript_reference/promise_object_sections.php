<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/promise_object_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/promise_object.php.
 * Last reviewed/updated: 24 Feb 2018.
 * Published: 22 Feb 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>Promise</code> object. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>Promise</code> object, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>Promise</code> object. The web browser does not support the JavaScript <code>Promise</code> object.</q></p>

     <p>If the web browser recognizes the JavaScript <code>Promise</code> object, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>Promise</code> object includes support for at least one <code>Promise</code> object capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>Promise</code> object includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>Promise</code> object, and supports at least one <code>Promise</code> object capability. The web browser at least partially/possibly fully supports the JavaScript <code>Promise</code> object. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>Promise</code> object does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>Promise</code> object, but does not support at least one <code>Promise</code> object capability. The web browser partially supports the JavaScript <code>Promise</code> object.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>Promise</code> Object Web Browser Support</h3>

<!-- FF29 - 31 executes Async 107 - 110 in numeric order, not Async 109 - 110 before Async 107 - 108. In other words, FF29 - 31 executes Execution Order 12 - 13 before Execution Order 10 - 11. NOTE: Async 101 - 110 indicates order of asynchronous operations in web page from top to bottom (Async 101 commented out). Execution Order 01 - 13 indicates order in which Sync 001 - 004 and Async 102 - 110 actually execute. -->

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF32+, CH32+, OP19+.</li>
      <li><q><b>Pass/Fail</b> (partial support):</q> FF29 - 31.</li>
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

     <h2><a id='test'></a>2. <code>Promise</code> Object Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

     <div class='note normal'>For the web browser test source code with additional comments, see <a href='/javascript/javascript_reference/javascript_reference_test_only/promise_object_test_only_with_additional_comments.html'><code>Promise</code> Object Web Browser Support Test With Additional Comments (learnwebcoding.com)</a>.</div>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;Promise&lt;/code&gt; object. The web browser does not support the JavaScript &lt;code&gt;Promise&lt;/code&gt; object.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
var executionOrder = &quot;&quot;;
var unsettledPromiseViaPromiseConstructor = new Promise(function(resolve, reject){ // Executor function did not call resolve() or reject() function; therefore, promise is in unsettled - pending state. [[PromiseState]]: &quot;pending&quot;. [[PromiseValue]]: undefined.
 executionOrder += &quot;Sync 001: Executing unsettledPromiseViaPromiseConstructor executor function. &quot;; // Executor function executed synchronously.
// Insert asynchronous operation that returns boolean value.
// if (value){ // Determine if asynchronous operation completed successfully.
//  resolve(&quot;Async 001: &quot;); // Asynchronous operation completed successfully. Call resolve() function.
// } else {
//  reject(&quot;Async 001: &quot;); // Asynchronous operation completed unsuccessfully. Call reject() function.
// }
});
unsettledPromiseViaPromiseConstructor.then(function(value){ // Executor function resolve() function argument (typically a value) is passed to fulfillment handler value parameter. Executor function did not call resolve() function; therefore, fulfillment handler not triggered.
 executionOrder += value + &quot;Executing unsettledPromiseViaPromiseConstructor fulfillment handler. &quot;; // Not executed.
});
unsettledPromiseViaPromiseConstructor.catch(function(reason){ // Executor function reject() function argument (typically an error object or value) is passed to rejection handler reason parameter. Executor function did not call reject() function; therefore, rejection handler not triggered.
 executionOrder += reason + &quot;Executing unsettledPromiseViaPromiseConstructor rejection handler. &quot;; // Not executed.
});
var fulfilledPromiseViaPromiseConstructor = new Promise(function(resolve, reject){ // Executor function called resolve() function; therefore, promise is in settled - fulfilled state. [[PromiseState]]: &quot;fulfilled&quot;. [[PromiseValue]]: &quot;Async 102: &quot;.
 executionOrder += &quot;Sync 002: Executing fulfilledPromiseViaPromiseConstructor executor function. &quot;; // Executor function executed synchronously.
 resolve(&quot;Async 102: &quot;);
});
fulfilledPromiseViaPromiseConstructor.then(function(value){ // Executor function called resolve() function; therefore, fulfillment handler triggered.
 executionOrder += value + &quot;Executing fulfilledPromiseViaPromiseConstructor fulfillment handler. &quot;; // Fulfillment handler executed asynchronously. NOTE: Async 102 executed after Sync 004 below.
});
fulfilledPromiseViaPromiseConstructor.catch(function(reason){ // Executor function did not call reject() function; therefore, rejection handler not triggered.
 executionOrder += reason + &quot;Executing fulfilledPromiseViaPromiseConstructor rejection handler. &quot;; // Not executed.
});
var rejectedPromiseViaPromiseConstructor = new Promise(function(resolve, reject){ // Executor function called reject() function; therefore, promise is in settled - rejected state. [[PromiseState]]: &quot;rejected&quot;. [[PromiseValue]]: &quot;Async 103: &quot;.
 executionOrder += &quot;Sync 003: Executing rejectedPromiseViaPromiseConstructor executor function. &quot;; // Executor function executed synchronously. NOTE: Sync 003 executed before Async 102 above.
 reject(&quot;Async 103: &quot;);
});
rejectedPromiseViaPromiseConstructor.then(function(value){ // Executor function did not call resolve() function; therefore, fulfillment handler not triggered. Uncaught exception.
 executionOrder += value + &quot;Executing rejectedPromiseViaPromiseConstructor fulfillment handler. &quot;; // Not executed.
});
rejectedPromiseViaPromiseConstructor.catch(function(reason){ // Executor function called reject() function; therefore, rejection handler triggered.
 executionOrder += reason + &quot;Executing rejectedPromiseViaPromiseConstructor rejection handler. &quot;; // Rejection handler executed asynchronously.
});
var rejectedPromiseViaErrorThrownInExecutorFunction = new Promise(function(resolve, reject){ // Error thrown in executor function; therefore, promise is in settled - rejected state. [[PromiseState]]: &quot;rejected&quot;. [[PromiseValue]]: &quot;Async 104: &quot;.
 executionOrder += &quot;Sync 004: Executing rejectedPromiseViaErrorThrownInExecutorFunction executor function. &quot;; // Executor function executed synchronously.
 throw new Error(&quot;Async 104: &quot;);
});
rejectedPromiseViaErrorThrownInExecutorFunction.then(function(value){ // Error thrown in executor function; therefore, fulfillment handler not triggered.
 executionOrder += value + &quot;Executing rejectedPromiseViaErrorThrownInExecutorFunction fulfillment handler. &quot;; // Not executed.
});
rejectedPromiseViaErrorThrownInExecutorFunction.catch(function(reason){ // Error thrown in executor function; therefore, rejection handler triggered.
 executionOrder += reason.message + &quot;Executing rejectedPromiseViaErrorThrownInExecutorFunction rejection handler. &quot;; // Rejection handler executed asynchronously.
});
var fulfilledPromiseViaPromiseResolveMethod = Promise.resolve(&quot;Async 105: &quot;); // Promise.resolve() method returns a promise in settled - fulfilled (never in settled - rejected) state. [[PromiseState]]: &quot;fulfilled&quot;. [[PromiseValue]]: &quot;Async 105: &quot;.
fulfilledPromiseViaPromiseResolveMethod.then(function(value){ // Promise.resolve() method triggers fulfillment handler. Promise.resolve() method argument (typically a value) is passed to fulfillment handler value parameter.
 executionOrder += value + &quot;Executing fulfilledPromiseViaPromiseResolveMethod fulfillment handler. &quot;; // Fulfillment handler executed asynchronously.
});
var rejectedPromiseViaPromiseRejectMethod = Promise.reject(&quot;Async 106: &quot;); // Promise.reject() method returns a promise in settled - rejected (never in settled - fulfilled) state. [[PromiseState]]: &quot;rejected&quot;. [[PromiseValue]]: &quot;Async 106: &quot;.
rejectedPromiseViaPromiseRejectMethod.catch(function(reason){ // Promise.reject() method triggers rejection handler. Promise.reject() method argument (typically an error object or value) is passed to rejection handler reason parameter.
 executionOrder += reason + &quot;Executing rejectedPromiseViaPromiseRejectMethod rejection handler. &quot;; // Rejection handler executed asynchronously.
});
var thenableResolveOne = { // A thenable is an object with a then() method that accepts resolve function and reject function arguments.
 then: function(resolve, reject){
  resolve(&quot;Async 107: &quot;);
 }
};
var fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve = Promise.resolve(thenableResolveOne); // Promise.resolve() method passed a non-promise thenable returns a promise in the state specified by the non-promise thenable, not per the Promise.resolve() method. [[PromiseState]]: &quot;fulfilled&quot;. [[PromiseValue]]: &quot;Async 107: &quot;.
fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve.then(function(value){ // Promise.resolve() method passed a non-promise thenable that calls resolve() function triggers fulfillment handler. Thenable resolve() function argument (typically a value) is passed to fulfillment handler value parameter.
 executionOrder += value + &quot;Executing fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve fulfillment handler. &quot;; // Fulfillment handler executed asynchronously. NOTE: Async 107 executed after Async 110 below.
});
fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve.catch(function(reason){ // Promise.resolve() method passed a non-promise thenable that calls resolve() function does not trigger rejection handler.
 executionOrder += reason + &quot;Executing fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve rejection handler. &quot;; // Not executed.
});
var thenableRejectOne = {
 then: function(resolve, reject){
  reject(&quot;Async 108: &quot;);
 }
};
var rejectedPromiseViaPromiseResolveMethodPassedThenableReject = Promise.resolve(thenableRejectOne); // Promise.resolve() method passed a non-promise thenable returns a promise in the state specified by the non-promise thenable, not per the Promise.resolve() method. [[PromiseState]]: &quot;rejected&quot;. [[PromiseValue]]: &quot;Async 108: &quot;.
rejectedPromiseViaPromiseResolveMethodPassedThenableReject.then(function(value){ // Promise.resolve() method passed a non-promise thenable that calls reject() function does not trigger fulfillment handler. Uncaught exception.
 executionOrder += value + &quot;Executing rejectedPromiseViaPromiseResolveMethodPassedThenableReject fulfillment handler. &quot;; // Not executed.
});
rejectedPromiseViaPromiseResolveMethodPassedThenableReject.catch(function(reason){ // Promise.resolve() method passed a non-promise thenable that calls reject() function triggers rejection handler. Thenable reject() function argument (typically an error object or value) is passed to rejection handler reason parameter.
 executionOrder += reason + &quot;Executing rejectedPromiseViaPromiseResolveMethodPassedThenableReject rejection handler. &quot;; // Rejection handler executed asynchronously.
}).then(function(value){
 // Web browser support feature implementation test and feature capability test if conditionals.
 if (window.Promise &amp;&amp; window.unsettledPromiseViaPromiseConstructor &amp;&amp; window.fulfilledPromiseViaPromiseConstructor &amp;&amp; window.rejectedPromiseViaPromiseConstructor &amp;&amp; window.rejectedPromiseViaErrorThrownInExecutorFunction &amp;&amp; window.fulfilledPromiseViaPromiseResolveMethod &amp;&amp; window.rejectedPromiseViaPromiseRejectMethod &amp;&amp; window.fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve &amp;&amp; window.rejectedPromiseViaPromiseResolveMethodPassedThenableReject &amp;&amp; window.rejectedPromiseViaPromiseRejectMethodPassedThenableResolve &amp;&amp; window.rejectedPromiseViaPromiseRejectMethodPassedThenableReject){ // Identical to if (Promise &amp;&amp; unsettledPromiseViaPromiseConstructor &amp;&amp; fulfilledPromiseViaPromiseConstructor &amp;&amp; rejectedPromiseViaPromiseConstructor &amp;&amp; rejectedPromiseViaErrorThrownInExecutorFunction &amp;&amp; fulfilledPromiseViaPromiseResolveMethod &amp;&amp; rejectedPromiseViaPromiseRejectMethod &amp;&amp; fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve &amp;&amp; rejectedPromiseViaPromiseResolveMethodPassedThenableReject &amp;&amp; rejectedPromiseViaPromiseRejectMethodPassedThenableResolve &amp;&amp; rejectedPromiseViaPromiseRejectMethodPassedThenableReject).
  var element = document.getElementById(&quot;testId&quot;);
  if ((typeof unsettledPromiseViaPromiseConstructor === &quot;object&quot;) &amp;&amp; unsettledPromiseViaPromiseConstructor instanceof Object &amp;&amp; unsettledPromiseViaPromiseConstructor instanceof Promise &amp;&amp; Object.prototype.isPrototypeOf(unsettledPromiseViaPromiseConstructor) &amp;&amp; Promise.prototype.isPrototypeOf(unsettledPromiseViaPromiseConstructor) &amp;&amp; (typeof unsettledPromiseViaPromiseConstructor.then === &quot;function&quot;) &amp;&amp; (typeof unsettledPromiseViaPromiseConstructor.catch === &quot;function&quot;) &amp;&amp; Promise.prototype.isPrototypeOf(fulfilledPromiseViaPromiseConstructor) &amp;&amp; Promise.prototype.isPrototypeOf(rejectedPromiseViaPromiseConstructor) &amp;&amp; Promise.prototype.isPrototypeOf(rejectedPromiseViaErrorThrownInExecutorFunction) &amp;&amp; Promise.prototype.isPrototypeOf(fulfilledPromiseViaPromiseResolveMethod) &amp;&amp; Promise.prototype.isPrototypeOf(rejectedPromiseViaPromiseRejectMethod) &amp;&amp; Promise.prototype.isPrototypeOf(fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve) &amp;&amp; Promise.prototype.isPrototypeOf(rejectedPromiseViaPromiseResolveMethodPassedThenableReject) &amp;&amp; Promise.prototype.isPrototypeOf(rejectedPromiseViaPromiseRejectMethodPassedThenableResolve) &amp;&amp; Promise.prototype.isPrototypeOf(rejectedPromiseViaPromiseRejectMethodPassedThenableReject) &amp;&amp; (executionOrder === &quot;Sync 001: Executing unsettledPromiseViaPromiseConstructor executor function. Sync 002: Executing fulfilledPromiseViaPromiseConstructor executor function. Sync 003: Executing rejectedPromiseViaPromiseConstructor executor function. Sync 004: Executing rejectedPromiseViaErrorThrownInExecutorFunction executor function. Async 102: Executing fulfilledPromiseViaPromiseConstructor fulfillment handler. Async 103: Executing rejectedPromiseViaPromiseConstructor rejection handler. Async 104: Executing rejectedPromiseViaErrorThrownInExecutorFunction rejection handler. Async 105: Executing fulfilledPromiseViaPromiseResolveMethod fulfillment handler. Async 106: Executing rejectedPromiseViaPromiseRejectMethod rejection handler. Async 109: Executing rejectedPromiseViaPromiseRejectMethodPassedThenableResolve rejection handler. Async 110: Executing rejectedPromiseViaPromiseRejectMethodPassedThenableReject rejection handler. Async 107: Executing fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve fulfillment handler. Async 108: Executing rejectedPromiseViaPromiseResolveMethodPassedThenableReject rejection handler. &quot;)){ // Omit (typeof identifier === &quot;object&quot;), identifier instanceof Object, identifier instanceof Promise, and Object.prototype.isPrototypeOf(identifier) for all promises except first to reduce amount of code and because they all return true.
   element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;Promise&lt;/code&gt; object, and supports at least one &lt;code&gt;Promise&lt;/code&gt; object capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;Promise&lt;/code&gt; object. Positive determination of full web browser support is beyond the scope of this test.&quot;;
  } else {
   element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;Promise&lt;/code&gt; object, but does not support at least one &lt;code&gt;Promise&lt;/code&gt; object capability. The web browser partially supports the JavaScript &lt;code&gt;Promise&lt;/code&gt; object.&quot;;
  }
 }
});
var thenableResolveTwo = {
 then: function(resolve, reject){
  resolve(&quot;This thenable, not this value, passed to rejection handler.&quot;);
 },
 value: &quot;Async 109: &quot;
};
var rejectedPromiseViaPromiseRejectMethodPassedThenableResolve = Promise.reject(thenableResolveTwo); // Promise.reject() method passed a non-promise thenable returns a promise in settled - rejected (never in settled - fulfilled) state. [[PromiseState]]: &quot;rejected&quot;. [[PromiseValue]]: Object.
rejectedPromiseViaPromiseRejectMethodPassedThenableResolve.catch(function(reason){ // Promise.reject() method passed a non-promise thenable triggers rejection handler. The thenable is passed to rejection handler reason parameter.
 executionOrder += reason.value + &quot;Executing rejectedPromiseViaPromiseRejectMethodPassedThenableResolve rejection handler. &quot;; // Rejection handler executed asynchronously. NOTE: Async 109 executed before Async 107 above.
});
var thenableRejectTwo = {
 then: function(resolve, reject){
  reject(&quot;This thenable, not this value, passed to rejection handler.&quot;);
 },
 value: &quot;Async 110: &quot;
};
var rejectedPromiseViaPromiseRejectMethodPassedThenableReject = Promise.reject(thenableRejectTwo); // Promise.resolve() method passed a non-promise thenable returns a promise in settled - rejected (never in settled - fulfilled) state. [[PromiseState]]: &quot;rejected&quot;. [[PromiseValue]]: Object.
rejectedPromiseViaPromiseRejectMethodPassedThenableReject.catch(function(reason){ // Promise.reject() method passed a non-promise thenable triggers rejection handler. The thenable is passed to rejection handler reason parameter.
 executionOrder += reason.value + &quot;Executing rejectedPromiseViaPromiseRejectMethodPassedThenableReject rejection handler. &quot;; // Rejection handler executed asynchronously.
});
// For web browser support feature implementation test and feature capability test if conditionals, see chained promise rejectedPromiseViaPromiseResolveMethodPassedThenableReject.catch().then above.
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>Promise</code> object. The web browser does not support the JavaScript <code>Promise</code> object.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var executionOrder = \"\";
     var unsettledPromiseViaPromiseConstructor = new Promise(function(resolve, reject){ // Executor function did not call resolve() or reject() function; therefore, promise is in unsettled - pending state. [[PromiseState]]: \"pending\". [[PromiseValue]]: undefined.
      executionOrder += \"Sync 001: Executing unsettledPromiseViaPromiseConstructor executor function. \"; // Executor function executed synchronously.
     // Insert asynchronous operation that returns boolean value.
     // if (value){ // Determine if asynchronous operation completed successfully.
     //  resolve(\"Async 001: \"); // Asynchronous operation completed successfully. Call resolve() function.
     // } else {
     //  reject(\"Async 001: \"); // Asynchronous operation completed unsuccessfully. Call reject() function.
     // }
     });
     unsettledPromiseViaPromiseConstructor.then(function(value){ // Executor function resolve() function argument (typically a value) is passed to fulfillment handler value parameter. Executor function did not call resolve() function; therefore, fulfillment handler not triggered.
      executionOrder += value + \"Executing unsettledPromiseViaPromiseConstructor fulfillment handler. \"; // Not executed.
     });
     unsettledPromiseViaPromiseConstructor.catch(function(reason){ // Executor function reject() function argument (typically an error object or value) is passed to rejection handler reason parameter. Executor function did not call reject() function; therefore, rejection handler not triggered.
      executionOrder += reason + \"Executing unsettledPromiseViaPromiseConstructor rejection handler. \"; // Not executed.
     });
     var fulfilledPromiseViaPromiseConstructor = new Promise(function(resolve, reject){ // Executor function called resolve() function; therefore, promise is in settled - fulfilled state. [[PromiseState]]: \"fulfilled\". [[PromiseValue]]: \"Async 102: \".
      executionOrder += \"Sync 002: Executing fulfilledPromiseViaPromiseConstructor executor function. \"; // Executor function executed synchronously.
      resolve(\"Async 102: \");
     });
     fulfilledPromiseViaPromiseConstructor.then(function(value){ // Executor function called resolve() function; therefore, fulfillment handler triggered.
      executionOrder += value + \"Executing fulfilledPromiseViaPromiseConstructor fulfillment handler. \"; // Fulfillment handler executed asynchronously. NOTE: Async 102 executed after Sync 004 below.
     });
     fulfilledPromiseViaPromiseConstructor.catch(function(reason){ // Executor function did not call reject() function; therefore, rejection handler not triggered.
      executionOrder += reason + \"Executing fulfilledPromiseViaPromiseConstructor rejection handler. \"; // Not executed.
     });
     var rejectedPromiseViaPromiseConstructor = new Promise(function(resolve, reject){ // Executor function called reject() function; therefore, promise is in settled - rejected state. [[PromiseState]]: \"rejected\". [[PromiseValue]]: \"Async 103: \".
      executionOrder += \"Sync 003: Executing rejectedPromiseViaPromiseConstructor executor function. \"; // Executor function executed synchronously. NOTE: Sync 003 executed before Async 102 above.
      reject(\"Async 103: \");
     });
     rejectedPromiseViaPromiseConstructor.then(function(value){ // Executor function did not call resolve() function; therefore, fulfillment handler not triggered. Uncaught exception.
      executionOrder += value + \"Executing rejectedPromiseViaPromiseConstructor fulfillment handler. \"; // Not executed.
     });
     rejectedPromiseViaPromiseConstructor.catch(function(reason){ // Executor function called reject() function; therefore, rejection handler triggered.
      executionOrder += reason + \"Executing rejectedPromiseViaPromiseConstructor rejection handler. \"; // Rejection handler executed asynchronously.
     });
     var rejectedPromiseViaErrorThrownInExecutorFunction = new Promise(function(resolve, reject){ // Error thrown in executor function; therefore, promise is in settled - rejected state. [[PromiseState]]: \"rejected\". [[PromiseValue]]: \"Async 104: \".
      executionOrder += \"Sync 004: Executing rejectedPromiseViaErrorThrownInExecutorFunction executor function. \"; // Executor function executed synchronously.
      throw new Error(\"Async 104: \");
     });
     rejectedPromiseViaErrorThrownInExecutorFunction.then(function(value){ // Error thrown in executor function; therefore, fulfillment handler not triggered.
      executionOrder += value + \"Executing rejectedPromiseViaErrorThrownInExecutorFunction fulfillment handler. \"; // Not executed.
     });
     rejectedPromiseViaErrorThrownInExecutorFunction.catch(function(reason){ // Error thrown in executor function; therefore, rejection handler triggered.
      executionOrder += reason.message + \"Executing rejectedPromiseViaErrorThrownInExecutorFunction rejection handler. \"; // Rejection handler executed asynchronously.
     });
     var fulfilledPromiseViaPromiseResolveMethod = Promise.resolve(\"Async 105: \"); // Promise.resolve() method returns a promise in settled - fulfilled (never in settled - rejected) state. [[PromiseState]]: \"fulfilled\". [[PromiseValue]]: \"Async 105: \".
     fulfilledPromiseViaPromiseResolveMethod.then(function(value){ // Promise.resolve() method triggers fulfillment handler. Promise.resolve() method argument (typically a value) is passed to fulfillment handler value parameter.
      executionOrder += value + \"Executing fulfilledPromiseViaPromiseResolveMethod fulfillment handler. \"; // Fulfillment handler executed asynchronously.
     });
     var rejectedPromiseViaPromiseRejectMethod = Promise.reject(\"Async 106: \"); // Promise.reject() method returns a promise in settled - rejected (never in settled - fulfilled) state. [[PromiseState]]: \"rejected\". [[PromiseValue]]: \"Async 106: \".
     rejectedPromiseViaPromiseRejectMethod.catch(function(reason){ // Promise.reject() method triggers rejection handler. Promise.reject() method argument (typically an error object or value) is passed to rejection handler reason parameter.
      executionOrder += reason + \"Executing rejectedPromiseViaPromiseRejectMethod rejection handler. \"; // Rejection handler executed asynchronously.
     });
     var thenableResolveOne = { // A thenable is an object with a then() method that accepts resolve function and reject function arguments.
      then: function(resolve, reject){
       resolve(\"Async 107: \");
      }
     };
     var fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve = Promise.resolve(thenableResolveOne); // Promise.resolve() method passed a non-promise thenable returns a promise in the state specified by the non-promise thenable, not per the Promise.resolve() method. [[PromiseState]]: \"fulfilled\". [[PromiseValue]]: \"Async 107: \".
     fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve.then(function(value){ // Promise.resolve() method passed a non-promise thenable that calls resolve() function triggers fulfillment handler. Thenable resolve() function argument (typically a value) is passed to fulfillment handler value parameter.
      executionOrder += value + \"Executing fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve fulfillment handler. \"; // Fulfillment handler executed asynchronously. NOTE: Async 107 executed after Async 110 below.
     });
     fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve.catch(function(reason){ // Promise.resolve() method passed a non-promise thenable that calls resolve() function does not trigger rejection handler.
      executionOrder += reason + \"Executing fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve rejection handler. \"; // Not executed.
     });
     var thenableRejectOne = {
      then: function(resolve, reject){
       reject(\"Async 108: \");
      }
     };
     var rejectedPromiseViaPromiseResolveMethodPassedThenableReject = Promise.resolve(thenableRejectOne); // Promise.resolve() method passed a non-promise thenable returns a promise in the state specified by the non-promise thenable, not per the Promise.resolve() method. [[PromiseState]]: \"rejected\". [[PromiseValue]]: \"Async 108: \".
     rejectedPromiseViaPromiseResolveMethodPassedThenableReject.then(function(value){ // Promise.resolve() method passed a non-promise thenable that calls reject() function does not trigger fulfillment handler. Uncaught exception.
      executionOrder += value + \"Executing rejectedPromiseViaPromiseResolveMethodPassedThenableReject fulfillment handler. \"; // Not executed.
     });
     rejectedPromiseViaPromiseResolveMethodPassedThenableReject.catch(function(reason){ // Promise.resolve() method passed a non-promise thenable that calls reject() function triggers rejection handler. Thenable reject() function argument (typically an error object or value) is passed to rejection handler reason parameter.
      executionOrder += reason + \"Executing rejectedPromiseViaPromiseResolveMethodPassedThenableReject rejection handler. \"; // Rejection handler executed asynchronously.
     }).then(function(value){
      // Web browser support feature implementation test and feature capability test if conditionals.
      if (window.Promise && window.unsettledPromiseViaPromiseConstructor && window.fulfilledPromiseViaPromiseConstructor && window.rejectedPromiseViaPromiseConstructor && window.rejectedPromiseViaErrorThrownInExecutorFunction && window.fulfilledPromiseViaPromiseResolveMethod && window.rejectedPromiseViaPromiseRejectMethod && window.fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve && window.rejectedPromiseViaPromiseResolveMethodPassedThenableReject && window.rejectedPromiseViaPromiseRejectMethodPassedThenableResolve && window.rejectedPromiseViaPromiseRejectMethodPassedThenableReject){ // Identical to if (Promise && unsettledPromiseViaPromiseConstructor && fulfilledPromiseViaPromiseConstructor && rejectedPromiseViaPromiseConstructor && rejectedPromiseViaErrorThrownInExecutorFunction && fulfilledPromiseViaPromiseResolveMethod && rejectedPromiseViaPromiseRejectMethod && fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve && rejectedPromiseViaPromiseResolveMethodPassedThenableReject && rejectedPromiseViaPromiseRejectMethodPassedThenableResolve && rejectedPromiseViaPromiseRejectMethodPassedThenableReject).
       var element = document.getElementById(\"testId\");
       if ((typeof unsettledPromiseViaPromiseConstructor === \"object\") && unsettledPromiseViaPromiseConstructor instanceof Object && unsettledPromiseViaPromiseConstructor instanceof Promise && Object.prototype.isPrototypeOf(unsettledPromiseViaPromiseConstructor) && Promise.prototype.isPrototypeOf(unsettledPromiseViaPromiseConstructor) && (typeof unsettledPromiseViaPromiseConstructor.then === \"function\") && (typeof unsettledPromiseViaPromiseConstructor.catch === \"function\") && Promise.prototype.isPrototypeOf(fulfilledPromiseViaPromiseConstructor) && Promise.prototype.isPrototypeOf(rejectedPromiseViaPromiseConstructor) && Promise.prototype.isPrototypeOf(rejectedPromiseViaErrorThrownInExecutorFunction) && Promise.prototype.isPrototypeOf(fulfilledPromiseViaPromiseResolveMethod) && Promise.prototype.isPrototypeOf(rejectedPromiseViaPromiseRejectMethod) && Promise.prototype.isPrototypeOf(fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve) && Promise.prototype.isPrototypeOf(rejectedPromiseViaPromiseResolveMethodPassedThenableReject) && Promise.prototype.isPrototypeOf(rejectedPromiseViaPromiseRejectMethodPassedThenableResolve) && Promise.prototype.isPrototypeOf(rejectedPromiseViaPromiseRejectMethodPassedThenableReject) && (executionOrder === \"Sync 001: Executing unsettledPromiseViaPromiseConstructor executor function. Sync 002: Executing fulfilledPromiseViaPromiseConstructor executor function. Sync 003: Executing rejectedPromiseViaPromiseConstructor executor function. Sync 004: Executing rejectedPromiseViaErrorThrownInExecutorFunction executor function. Async 102: Executing fulfilledPromiseViaPromiseConstructor fulfillment handler. Async 103: Executing rejectedPromiseViaPromiseConstructor rejection handler. Async 104: Executing rejectedPromiseViaErrorThrownInExecutorFunction rejection handler. Async 105: Executing fulfilledPromiseViaPromiseResolveMethod fulfillment handler. Async 106: Executing rejectedPromiseViaPromiseRejectMethod rejection handler. Async 109: Executing rejectedPromiseViaPromiseRejectMethodPassedThenableResolve rejection handler. Async 110: Executing rejectedPromiseViaPromiseRejectMethodPassedThenableReject rejection handler. Async 107: Executing fulfilledPromiseViaPromiseResolveMethodPassedThenableResolve fulfillment handler. Async 108: Executing rejectedPromiseViaPromiseResolveMethodPassedThenableReject rejection handler. \")){ // Omit (typeof identifier === \"object\"), identifier instanceof Object, identifier instanceof Promise, and Object.prototype.isPrototypeOf(identifier) for all promises except first to reduce amount of code and because they all return true.
        element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>Promise</code> object, and supports at least one <code>Promise</code> object capability. The web browser at least partially/possibly fully supports the JavaScript <code>Promise</code> object. Positive determination of full web browser support is beyond the scope of this test.\";
       } else {
        element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>Promise</code> object, but does not support at least one <code>Promise</code> object capability. The web browser partially supports the JavaScript <code>Promise</code> object.\";
       }
      }
     });
     var thenableResolveTwo = {
      then: function(resolve, reject){
       resolve(\"This thenable, not this value, passed to rejection handler.\");
      },
      value: \"Async 109: \"
     };
     var rejectedPromiseViaPromiseRejectMethodPassedThenableResolve = Promise.reject(thenableResolveTwo); // Promise.reject() method passed a non-promise thenable returns a promise in settled - rejected (never in settled - fulfilled) state. [[PromiseState]]: \"rejected\". [[PromiseValue]]: Object.
     rejectedPromiseViaPromiseRejectMethodPassedThenableResolve.catch(function(reason){ // Promise.reject() method passed a non-promise thenable triggers rejection handler. The thenable is passed to rejection handler reason parameter.
      executionOrder += reason.value + \"Executing rejectedPromiseViaPromiseRejectMethodPassedThenableResolve rejection handler. \"; // Rejection handler executed asynchronously. NOTE: Async 109 executed before Async 107 above.
     });
     var thenableRejectTwo = {
      then: function(resolve, reject){
       reject(\"This thenable, not this value, passed to rejection handler.\");
      },
      value: \"Async 110: \"
     };
     var rejectedPromiseViaPromiseRejectMethodPassedThenableReject = Promise.reject(thenableRejectTwo); // Promise.resolve() method passed a non-promise thenable returns a promise in settled - rejected (never in settled - fulfilled) state. [[PromiseState]]: \"rejected\". [[PromiseValue]]: Object.
     rejectedPromiseViaPromiseRejectMethodPassedThenableReject.catch(function(reason){ // Promise.reject() method passed a non-promise thenable triggers rejection handler. The thenable is passed to rejection handler reason parameter.
      executionOrder += reason.value + \"Executing rejectedPromiseViaPromiseRejectMethodPassedThenableReject rejection handler. \"; // Rejection handler executed asynchronously.
     });
     // For web browser support feature implementation test and feature capability test if conditionals, see chained promise rejectedPromiseViaPromiseResolveMethodPassedThenableReject.catch().then above.
     </script>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/javascript/javascript_reference/index.php'>JavaScript Feature Reference (learnwebcoding.com)</a></li>
     </ul>

    </section>";
