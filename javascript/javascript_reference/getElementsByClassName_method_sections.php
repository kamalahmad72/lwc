<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/getElementsByClassName_method_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/getElementsByClassName_method.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 31 Jul 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>getElementsByClassName()</code> method. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>getElementsByClassName()</code> method, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>getElementsByClassName()</code> method. The web browser does not support the JavaScript <code>getElementsByClassName()</code> method.</q></p>

     <p>If the web browser recognizes the JavaScript <code>getElementsByClassName()</code> method, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>getElementsByClassName()</code> method includes support for at least one <code>getElementsByClassName()</code> method capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>getElementsByClassName()</code> method includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>getElementsByClassName()</code> method, and supports at least one <code>getElementsByClassName()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>getElementsByClassName()</code> method. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>getElementsByClassName()</code> method does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>getElementsByClassName()</code> method, but does not support at least one <code>getElementsByClassName()</code> method capability. The web browser partially supports the JavaScript <code>getElementsByClassName()</code> method.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>getElementsByClassName()</code> Method Web Browser Support</h3>

     <p><q><b>Pass</b> (at least partial/possibly full support):</q> IE9+, ED12+, FF3+, SF3.1+, CH2+, OP9.50+.</p>

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

     <h2><a id='test'></a>2. <code>getElementsByClassName()</code> Method Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p&gt;&lt;span class='test-class'&gt;&lt;/span&gt;&lt;span class='test-class'&gt;&lt;/span&gt;&lt;span class='test-class'&gt;&lt;/span&gt;&lt;/p&gt;

&lt;script&gt;
if (document.getElementsByClassName){
 var elements = document.getElementsByClassName(&quot;test-class&quot;);
 if (elements.length === 3){
  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;getElementsByClassName()&lt;/code&gt; method, and supports at least one &lt;code&gt;getElementsByClassName()&lt;/code&gt; method capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;getElementsByClassName()&lt;/code&gt; method. Positive determination of full web browser support is beyond the scope of this test.&lt;/p&gt;&quot;);
 } else {
  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;getElementsByClassName()&lt;/code&gt; method, but does not support at least one &lt;code&gt;getElementsByClassName()&lt;/code&gt; method capability. The web browser partially supports the JavaScript &lt;code&gt;getElementsByClassName()&lt;/code&gt; method.&lt;/p&gt;&quot;);
 }
} else {
 document.write(&quot;&lt;p&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;getElementsByClassName()&lt;/code&gt; method. The web browser does not support the JavaScript &lt;code&gt;getElementsByClassName()&lt;/code&gt; method.&lt;/p&gt;&quot;);
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p><span class='test-class'></span><span class='test-class'></span><span class='test-class'></span></p>

     <script>
     if (document.getElementsByClassName){
      var elements = document.getElementsByClassName(\"test-class\");
      if (elements.length === 3){
       document.write(\"<p><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>getElementsByClassName()</code> method, and supports at least one <code>getElementsByClassName()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>getElementsByClassName()</code> method. Positive determination of full web browser support is beyond the scope of this test.</p>\");
      } else {
       document.write(\"<p><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>getElementsByClassName()</code> method, but does not support at least one <code>getElementsByClassName()</code> method capability. The web browser partially supports the JavaScript <code>getElementsByClassName()</code> method.</p>\");
      }
     } else {
      document.write(\"<p><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>getElementsByClassName()</code> method. The web browser does not support the JavaScript <code>getElementsByClassName()</code> method.</p>\");
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
