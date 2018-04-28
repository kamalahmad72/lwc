<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/defineProperty_method_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/defineProperty_method.php.
 * Last reviewed/updated: 28 Apr 2018.
 * Published: 11 Dec 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>defineProperty()</code> method. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>defineProperty()</code> method, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>defineProperty()</code> method. The web browser does not support the JavaScript <code>defineProperty()</code> method.</q></p>

     <p>If the web browser recognizes the JavaScript <code>defineProperty()</code> method, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>defineProperty()</code> method includes support for at least one <code>defineProperty()</code> method capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>defineProperty()</code> method includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>defineProperty()</code> method, and supports at least one <code>defineProperty()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>defineProperty()</code> method. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>defineProperty()</code> method does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>defineProperty()</code> method, but does not support at least one <code>defineProperty()</code> method capability. The web browser partially supports the JavaScript <code>defineProperty()</code> method.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>defineProperty()</code> Method Web Browser Support</h3>

     <p><q><b>Pass</b> (at least partial/possibly full support):</q> IE9+, ED12+, FF4+, SF5+, CH5+, OP11.60+.</p>

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

     <h2><a id='test'></a>2. <code>defineProperty()</code> Method Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;defineProperty()&lt;/code&gt; method. The web browser does not support the JavaScript &lt;code&gt;defineProperty()&lt;/code&gt; method.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
if (Object.defineProperty){
 var element = document.getElementById(&quot;testId&quot;);
 function CustomConstructor(){
  this.propertyOne = &quot;propertyOne value&quot;; // Data property. Here, property writable, enumerable, and configurable attributes default to boolean true.
  this.propertyFour = &quot;propertyFour value as propertyThree getter function return value&quot;;
  this.propertyFive = &quot;propertyFive value appended by propertyThree setter function&quot;;
 }
 var objectViaCustomConstructor = new CustomConstructor();
 Object.defineProperty(objectViaCustomConstructor, &quot;propertyOne&quot;, { // Change objectViaCustomConstructor.propertyOne value attribute value. IE8 error: Object doesn't support this action.
  value: &quot;new propertyOne value&quot;
 });
 Object.defineProperty(objectViaCustomConstructor, &quot;propertyTwo&quot;, { // Create objectViaCustomConstructor.propertyTwo data property. Here, property writable, enumerable, and configurable attributes default to boolean false.
  value: &quot;propertyTwo value&quot;
 });
 Object.defineProperty(objectViaCustomConstructor, &quot;propertyThree&quot;, { // Create objectViaCustomConstructor.propertyThree accessor property. Here, property enumerable and configurable attributes default to boolean false.
  get: function(){
   return this.propertyFour;
  },
  set: function(value){
   this.propertyFive += value;
  }
 });
 objectViaCustomConstructor.propertyThree = &quot; passed value&quot;; // &quot;propertyFive value appended by propertyThree setter function passed value&quot;.
 var objectLiteral = {
  propertyOne: &quot;propertyOne value&quot;, // Data property. Here, property writable, enumerable, and configurable attributes default to boolean true.
  propertyFour: &quot;propertyFour value as propertyThree getter function return value&quot;,
  propertyFive: &quot;propertyFive value appended by propertyThree setter function&quot;
 };
 Object.defineProperty(objectLiteral, &quot;propertyOne&quot;, { // Change objectLiteral.propertyOne value attribute value.
  value: &quot;new propertyOne value&quot;
 });
 Object.defineProperty(objectLiteral, &quot;propertyTwo&quot;, { // Create objectLiteral.propertyTwo data property. Here, property writable, enumerable, and configurable attributes default to boolean false.
  value: &quot;propertyTwo value&quot;
 });
 Object.defineProperty(objectLiteral, &quot;propertyThree&quot;, { // Create objectLiteral.propertyThree accessor property. Here, property enumerable and configurable attributes default to boolean false.
  get: function(){
   return this.propertyFour;
  },
  set: function(value){
   this.propertyFive += value;
  }
 });
 objectLiteral.propertyThree = &quot; passed value&quot;; // &quot;propertyFive value appended by propertyThree setter function passed value&quot;.
 var objectViaCustomConstructorPropertyOneDescriptor = Object.getOwnPropertyDescriptor(objectViaCustomConstructor, &quot;propertyOne&quot;);
 var objectViaCustomConstructorPropertyTwoDescriptor = Object.getOwnPropertyDescriptor(objectViaCustomConstructor, &quot;propertyTwo&quot;);
 var objectViaCustomConstructorPropertyThreeDescriptor = Object.getOwnPropertyDescriptor(objectViaCustomConstructor, &quot;propertyThree&quot;);
 var objectLiteralPropertyOneDescriptor = Object.getOwnPropertyDescriptor(objectLiteral, &quot;propertyOne&quot;);
 var objectLiteralPropertyTwoDescriptor = Object.getOwnPropertyDescriptor(objectLiteral, &quot;propertyTwo&quot;);
 var objectLiteralPropertyThreeDescriptor = Object.getOwnPropertyDescriptor(objectLiteral, &quot;propertyThree&quot;);
 if ((objectViaCustomConstructor.propertyOne === &quot;new propertyOne value&quot;) &amp;&amp; (objectViaCustomConstructor.propertyTwo === &quot;propertyTwo value&quot;) &amp;&amp; (objectViaCustomConstructor.propertyThree === &quot;propertyFour value as propertyThree getter function return value&quot;) &amp;&amp; (objectViaCustomConstructor.propertyFive === &quot;propertyFive value appended by propertyThree setter function passed value&quot;) &amp;&amp; objectViaCustomConstructorPropertyOneDescriptor.writable &amp;&amp; !objectViaCustomConstructorPropertyTwoDescriptor.enumerable &amp;&amp; !objectViaCustomConstructorPropertyThreeDescriptor.configurable &amp;&amp; (objectLiteral.propertyOne === &quot;new propertyOne value&quot;) &amp;&amp; (objectLiteral.propertyTwo === &quot;propertyTwo value&quot;) &amp;&amp; (objectLiteral.propertyThree === &quot;propertyFour value as propertyThree getter function return value&quot;) &amp;&amp; (objectLiteral.propertyFive === &quot;propertyFive value appended by propertyThree setter function passed value&quot;) &amp;&amp; objectLiteralPropertyOneDescriptor.writable &amp;&amp; !objectLiteralPropertyTwoDescriptor.enumerable &amp;&amp; !objectLiteralPropertyThreeDescriptor.configurable){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;defineProperty()&lt;/code&gt; method, and supports at least one &lt;code&gt;defineProperty()&lt;/code&gt; method capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;defineProperty()&lt;/code&gt; method. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;defineProperty()&lt;/code&gt; method, but does not support at least one &lt;code&gt;defineProperty()&lt;/code&gt; method capability. The web browser partially supports the JavaScript &lt;code&gt;defineProperty()&lt;/code&gt; method.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- Web browser no support error for getOwnPropertyDescriptor() method and defineProperty() method stops JavaScript execution. -->
<!-- Per LWC web browser support testing, defineProperty() method and getOwnPropertyDescriptor() method supported by IE9+, ED12+, FF4+, SF5+, CH5+, OP11.60+. Therefore, in web browser support test below, getOwnPropertyDescriptor() method does not skew test result. -->
<!-- For examples of accessor properties, see defineProperty() method, name property, and object literal accessor property syntax. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>defineProperty()</code> method. The web browser does not support the JavaScript <code>defineProperty()</code> method.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     if (Object.defineProperty){
      var element = document.getElementById(\"testId\");
      function CustomConstructor(){
       this.propertyOne = \"propertyOne value\"; // Data property. Here, property writable, enumerable, and configurable attributes default to boolean true.
       this.propertyFour = \"propertyFour value as propertyThree getter function return value\";
       this.propertyFive = \"propertyFive value appended by propertyThree setter function\";
      }
      var objectViaCustomConstructor = new CustomConstructor();
      Object.defineProperty(objectViaCustomConstructor, \"propertyOne\", { // Change objectViaCustomConstructor.propertyOne value attribute value. IE8 error: Object doesn't support this action.
       value: \"new propertyOne value\"
      });
      Object.defineProperty(objectViaCustomConstructor, \"propertyTwo\", { // Create objectViaCustomConstructor.propertyTwo data property. Here, property writable, enumerable, and configurable attributes default to boolean false.
       value: \"propertyTwo value\"
      });
      Object.defineProperty(objectViaCustomConstructor, \"propertyThree\", { // Create objectViaCustomConstructor.propertyThree accessor property. Here, property enumerable and configurable attributes default to boolean false.
       get: function(){
        return this.propertyFour;
       },
       set: function(value){
        this.propertyFive += value;
       }
      });
      objectViaCustomConstructor.propertyThree = \" passed value\"; // \"propertyFive value appended by propertyThree setter function passed value\".
      var objectLiteral = {
       propertyOne: \"propertyOne value\", // Data property. Here, property writable, enumerable, and configurable attributes default to boolean true.
       propertyFour: \"propertyFour value as propertyThree getter function return value\",
       propertyFive: \"propertyFive value appended by propertyThree setter function\"
      };
      Object.defineProperty(objectLiteral, \"propertyOne\", { // Change objectLiteral.propertyOne value attribute value.
       value: \"new propertyOne value\"
      });
      Object.defineProperty(objectLiteral, \"propertyTwo\", { // Create objectLiteral.propertyTwo data property. Here, property writable, enumerable, and configurable attributes default to boolean false.
       value: \"propertyTwo value\"
      });
      Object.defineProperty(objectLiteral, \"propertyThree\", { // Create objectLiteral.propertyThree accessor property. Here, property enumerable and configurable attributes default to boolean false.
       get: function(){
        return this.propertyFour;
       },
       set: function(value){
        this.propertyFive += value;
       }
      });
      objectLiteral.propertyThree = \" passed value\"; // \"propertyFive value appended by propertyThree setter function passed value\".
      var objectViaCustomConstructorPropertyOneDescriptor = Object.getOwnPropertyDescriptor(objectViaCustomConstructor, \"propertyOne\");
      var objectViaCustomConstructorPropertyTwoDescriptor = Object.getOwnPropertyDescriptor(objectViaCustomConstructor, \"propertyTwo\");
      var objectViaCustomConstructorPropertyThreeDescriptor = Object.getOwnPropertyDescriptor(objectViaCustomConstructor, \"propertyThree\");
      var objectLiteralPropertyOneDescriptor = Object.getOwnPropertyDescriptor(objectLiteral, \"propertyOne\");
      var objectLiteralPropertyTwoDescriptor = Object.getOwnPropertyDescriptor(objectLiteral, \"propertyTwo\");
      var objectLiteralPropertyThreeDescriptor = Object.getOwnPropertyDescriptor(objectLiteral, \"propertyThree\");
      if ((objectViaCustomConstructor.propertyOne === \"new propertyOne value\") && (objectViaCustomConstructor.propertyTwo === \"propertyTwo value\") && (objectViaCustomConstructor.propertyThree === \"propertyFour value as propertyThree getter function return value\") && (objectViaCustomConstructor.propertyFive === \"propertyFive value appended by propertyThree setter function passed value\") && objectViaCustomConstructorPropertyOneDescriptor.writable && !objectViaCustomConstructorPropertyTwoDescriptor.enumerable && !objectViaCustomConstructorPropertyThreeDescriptor.configurable && (objectLiteral.propertyOne === \"new propertyOne value\") && (objectLiteral.propertyTwo === \"propertyTwo value\") && (objectLiteral.propertyThree === \"propertyFour value as propertyThree getter function return value\") && (objectLiteral.propertyFive === \"propertyFive value appended by propertyThree setter function passed value\") && objectLiteralPropertyOneDescriptor.writable && !objectLiteralPropertyTwoDescriptor.enumerable && !objectLiteralPropertyThreeDescriptor.configurable){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>defineProperty()</code> method, and supports at least one <code>defineProperty()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>defineProperty()</code> method. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>defineProperty()</code> method, but does not support at least one <code>defineProperty()</code> method capability. The web browser partially supports the JavaScript <code>defineProperty()</code> method.\";
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
