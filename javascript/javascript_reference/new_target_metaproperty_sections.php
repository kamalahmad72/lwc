<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/new_target_metaproperty_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/new_target_metaproperty.php.
 * Last reviewed/updated: 01 Jan 2018.
 * Published: 14 Nov 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>new.target</code> metaproperty. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>new.target</code> metaproperty, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>new.target</code> metaproperty. The web browser does not support the JavaScript <code>new.target</code> metaproperty.</q></p>

     <p>If the web browser recognizes the JavaScript <code>new.target</code> metaproperty, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>new.target</code> metaproperty includes support for at least one <code>new.target</code> metaproperty capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>new.target</code> metaproperty includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>new.target</code> metaproperty, and supports at least one <code>new.target</code> metaproperty capability. The web browser at least partially/possibly fully supports the JavaScript <code>new.target</code> metaproperty. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>new.target</code> metaproperty does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>new.target</code> metaproperty, but does not support at least one <code>new.target</code> metaproperty capability. The web browser partially supports the JavaScript <code>new.target</code> metaproperty.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>new.target</code> Metaproperty Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED13+, FF41+, CH46+, OP33+.</li>
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

     <h2><a id='test'></a>2. <code>new.target</code> Metaproperty Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;new.target&lt;/code&gt; metaproperty. The web browser does not support the JavaScript &lt;code&gt;new.target&lt;/code&gt; metaproperty.&lt;/p&gt;&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;

&lt;script&gt;
var callWithoutNewFallsThroughToElse = false;
function Test(){
 if (new.target){ // Call with new enters if.
  var element = document.getElementById(&quot;testId&quot;);
  if ((callWithoutNewFallsThroughToElse === true) &amp;&amp; (new.target !== undefined) &amp;&amp; (new.target === Test)){
   element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;new.target&lt;/code&gt; metaproperty, and supports at least one &lt;code&gt;new.target&lt;/code&gt; metaproperty capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;new.target&lt;/code&gt; metaproperty. Positive determination of full web browser support is beyond the scope of this test.&quot;;
  } else {
   element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;new.target&lt;/code&gt; metaproperty, but does not support at least one &lt;code&gt;new.target&lt;/code&gt; metaproperty capability. The web browser partially supports the JavaScript &lt;code&gt;new.target&lt;/code&gt; metaproperty.&quot;;
  }
 } else { // Call without new falls through to else.
  callWithoutNewFallsThroughToElse = true;
 }
}
var callWithoutNew = Test();
var callWithNew = new Test();
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>new.target</code> metaproperty. The web browser does not support the JavaScript <code>new.target</code> metaproperty.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var callWithoutNewFallsThroughToElse = false;
     function Test(){
      if (new.target){ // Call with new enters if.
       var element = document.getElementById(\"testId\");
       if ((callWithoutNewFallsThroughToElse === true) && (new.target !== undefined) && (new.target === Test)){
        element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>new.target</code> metaproperty, and supports at least one <code>new.target</code> metaproperty capability. The web browser at least partially/possibly fully supports the JavaScript <code>new.target</code> metaproperty. Positive determination of full web browser support is beyond the scope of this test.\";
       } else {
        element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>new.target</code> metaproperty, but does not support at least one <code>new.target</code> metaproperty capability. The web browser partially supports the JavaScript <code>new.target</code> metaproperty.\";
       }
      } else { // Call without new falls through to else.
       callWithoutNewFallsThroughToElse = true;
      }
     }
     var callWithoutNew = Test();
     var callWithNew = new Test();
     </script>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/javascript/javascript_reference/index.php'>JavaScript Feature Reference (learnwebcoding.com)</a></li>
     </ul>

    </section>";
