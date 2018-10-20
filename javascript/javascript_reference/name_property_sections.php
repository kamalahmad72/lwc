<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/name_property_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/name_property.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 17 Nov 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>name</code> property. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>name</code> property, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>name</code> property. The web browser does not support the JavaScript <code>name</code> property.</q></p>

     <p>If the web browser recognizes the JavaScript <code>name</code> property, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>name</code> property includes support for at least one <code>name</code> property capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>name</code> property includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>name</code> property, and supports at least one <code>name</code> property capability. The web browser at least partially/possibly fully supports the JavaScript <code>name</code> property. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>name</code> property does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>name</code> property, but does not support at least one <code>name</code> property capability. The web browser partially supports the JavaScript <code>name</code> property.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>name</code> Property Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> FF53+, CH51+, OP38+.</li>
      <li><q><b>Fail</b> (no support):</q> IE11-, ED16-, SF5.1.7-.</li>
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

     <h2><a id='test'></a>2. <code>name</code> Property Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;name&lt;/code&gt; property. The web browser does not support the JavaScript &lt;code&gt;name&lt;/code&gt; property.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
function functionDeclaration(){}
var functionExpression = function(){};
var functionConstructor = new Function();
function CustomConstructor(){}
var boundFunctionDeclaration = functionDeclaration.bind();
var objectLiteral = {
 traditionalMethod: function(){},
 conciseMethod(){},
 get getterAndSetterFunction(){},
 set getterAndSetterFunction(value){}
};
if (functionDeclaration.name &amp;&amp; functionExpression.name &amp;&amp; functionConstructor.name &amp;&amp; CustomConstructor.name &amp;&amp; boundFunctionDeclaration.name &amp;&amp; objectLiteral.traditionalMethod.name){
 var element = document.getElementById(&quot;testId&quot;);
 if ((functionDeclaration.name === &quot;functionDeclaration&quot;) &amp;&amp; (functionExpression.name === &quot;functionExpression&quot;) &amp;&amp; (functionConstructor.name === &quot;anonymous&quot;) &amp;&amp; (CustomConstructor.name === &quot;CustomConstructor&quot;) &amp;&amp; (boundFunctionDeclaration.name === &quot;bound functionDeclaration&quot;) &amp;&amp; (objectLiteral.traditionalMethod.name === &quot;traditionalMethod&quot;) &amp;&amp; (objectLiteral.conciseMethod.name === &quot;conciseMethod&quot;) &amp;&amp; (Object.getOwnPropertyDescriptor(objectLiteral, &quot;getterAndSetterFunction&quot;).get.name === &quot;get getterAndSetterFunction&quot;) &amp;&amp; (Object.getOwnPropertyDescriptor(objectLiteral, &quot;getterAndSetterFunction&quot;).set.name === &quot;set getterAndSetterFunction&quot;)){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;name&lt;/code&gt; property, and supports at least one &lt;code&gt;name&lt;/code&gt; property capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;name&lt;/code&gt; property. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;name&lt;/code&gt; property, but does not support at least one &lt;code&gt;name&lt;/code&gt; property capability. The web browser partially supports the JavaScript &lt;code&gt;name&lt;/code&gt; property.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- For examples of accessor properties, see defineProperty() method, name property, and object literal accessor property syntax. -->
<!-- Web browser no support error for getOwnPropertyDescriptor() method, bind() method, and concise method syntax, not name property, stops JavaScript execution. -->
<!-- Per MDN, getOwnPropertyDescriptor() method and bind() method added to ES2011 5.1 Edition and concise method syntax and name property added to ES2015 6th Edition. -->
<!-- Per LWC web browser support testing, getOwnPropertyDescriptor() method supported by IE9+, ED12+, FF4+, SF5+, CH5+, OP11.60+, bind() method supported by IE9+, ED12+, FF4+, SF5.1.4+, CH7+, OP11.60+, concise method syntax supported by ED12+, FF34+, CH42+, OP29+, no IE11-, SF5.1.7-, and name property supported by FF53+, CH51+, OP38+, no IE11-, ED16-, SF5.1.7-. Therefore, in web browser support test below, getOwnPropertyDescriptor() method, bind() method, and concise method syntax do not skew test result. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>name</code> property. The web browser does not support the JavaScript <code>name</code> property.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     function functionDeclaration(){}
     var functionExpression = function(){};
     var functionConstructor = new Function();
     function CustomConstructor(){}
     var boundFunctionDeclaration = functionDeclaration.bind();
     var objectLiteral = {
      traditionalMethod: function(){},
      conciseMethod(){},
      get getterAndSetterFunction(){},
      set getterAndSetterFunction(value){}
     };
     if (functionDeclaration.name && functionExpression.name && functionConstructor.name && CustomConstructor.name && boundFunctionDeclaration.name && objectLiteral.traditionalMethod.name){
      var element = document.getElementById(\"testId\");
      if ((functionDeclaration.name === \"functionDeclaration\") && (functionExpression.name === \"functionExpression\") && (functionConstructor.name === \"anonymous\") && (CustomConstructor.name === \"CustomConstructor\") && (boundFunctionDeclaration.name === \"bound functionDeclaration\") && (objectLiteral.traditionalMethod.name === \"traditionalMethod\") && (objectLiteral.conciseMethod.name === \"conciseMethod\") && (Object.getOwnPropertyDescriptor(objectLiteral, \"getterAndSetterFunction\").get.name === \"get getterAndSetterFunction\") && (Object.getOwnPropertyDescriptor(objectLiteral, \"getterAndSetterFunction\").set.name === \"set getterAndSetterFunction\")){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>name</code> property, and supports at least one <code>name</code> property capability. The web browser at least partially/possibly fully supports the JavaScript <code>name</code> property. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>name</code> property, but does not support at least one <code>name</code> property capability. The web browser partially supports the JavaScript <code>name</code> property.\";
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
