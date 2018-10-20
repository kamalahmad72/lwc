<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/object_literal_accessor_property_syntax_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/object_literal_accessor_property_syntax.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 16 Dec 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript object literal accessor property syntax. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript object literal accessor property syntax, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript object literal accessor property syntax. The web browser does not support the JavaScript object literal accessor property syntax.</q></p>

     <p>If the web browser recognizes the JavaScript object literal accessor property syntax, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript object literal accessor property syntax includes support for at least one object literal accessor property syntax capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript object literal accessor property syntax includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript object literal accessor property syntax, and supports at least one object literal accessor property syntax capability. The web browser at least partially/possibly fully supports the JavaScript object literal accessor property syntax. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript object literal accessor property syntax does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript object literal accessor property syntax, but does not support at least one object literal accessor property syntax capability. The web browser partially supports the JavaScript object literal accessor property syntax.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. Object Literal Accessor Property Syntax Web Browser Support</h3>

     <p><q><b>Pass</b> (at least partial/possibly full support):</q> IE9+, ED12+, FF1.5+, SF3.1+, CH2+, OP9.50+.</p>

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

     <h2><a id='test'></a>2. Object Literal Accessor Property Syntax Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript object literal accessor property syntax. The web browser does not support the JavaScript object literal accessor property syntax.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
var objectLiteral = {
 propertyOne: &quot;propertyOne value&quot;, // Data property.
 propertyTwo: &quot;propertyTwo value&quot;, // Data property.
 get getterAndSetterFunction(){ // Accessor property. Getter function. IE8 error: Expected ':'.
  return this.propertyOne;
 },
 set getterAndSetterFunction(value){ // Accessor property. Setter function.
  this.propertyTwo += &quot; with &quot; + value;
 }
};
// console.log(objectLiteral.getterAndSetterFunction); // &quot;propertyOne value&quot;. Read from accessor property triggers getter. Return value set on accessor property.
objectLiteral.getterAndSetterFunction = &quot;passed value&quot;; // Write to accessor property triggers setter. Assigned value passed as argument to setter function.
if (objectLiteral.getterAndSetterFunction){
 var element = document.getElementById(&quot;testId&quot;);
 if ((objectLiteral.getterAndSetterFunction === &quot;propertyOne value&quot;) &amp;&amp; (objectLiteral.propertyTwo === &quot;propertyTwo value with passed value&quot;)){
  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript object literal accessor property syntax, and supports at least one object literal accessor property syntax capability. The web browser at least partially/possibly fully supports the JavaScript object literal accessor property syntax. Positive determination of full web browser support is beyond the scope of this test.&quot;;
 } else {
  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript object literal accessor property syntax, but does not support at least one object literal accessor property syntax capability. The web browser partially supports the JavaScript object literal accessor property syntax.&quot;;
 }
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- For examples of accessor properties, see defineProperty() method, name property, and object literal accessor property syntax. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript object literal accessor property syntax. The web browser does not support the JavaScript object literal accessor property syntax.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var objectLiteral = {
      propertyOne: \"propertyOne value\", // Data property.
      propertyTwo: \"propertyTwo value\", // Data property.
      get getterAndSetterFunction(){ // Accessor property. Getter function. IE8 error: Expected ':'.
       return this.propertyOne;
      },
      set getterAndSetterFunction(value){ // Accessor property. Setter function.
       this.propertyTwo += \" with \" + value;
      }
     };
     // console.log(objectLiteral.getterAndSetterFunction); // \"propertyOne value\". Read from accessor property triggers getter. Return value set on accessor property.
     objectLiteral.getterAndSetterFunction = \"passed value\"; // Write to accessor property triggers setter. Assigned value passed as argument to setter function.
     if (objectLiteral.getterAndSetterFunction){
      var element = document.getElementById(\"testId\");
      if ((objectLiteral.getterAndSetterFunction === \"propertyOne value\") && (objectLiteral.propertyTwo === \"propertyTwo value with passed value\")){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript object literal accessor property syntax, and supports at least one object literal accessor property syntax capability. The web browser at least partially/possibly fully supports the JavaScript object literal accessor property syntax. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript object literal accessor property syntax, but does not support at least one object literal accessor property syntax capability. The web browser partially supports the JavaScript object literal accessor property syntax.\";
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
