<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/indexOf_method_string_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/indexOf_method_string.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 27 Oct 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>indexOf()</code> method on strings. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>indexOf()</code> method on strings, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>indexOf()</code> method on strings. The web browser does not support the JavaScript <code>indexOf()</code> method on strings.</q></p>

     <p>If the web browser recognizes the JavaScript <code>indexOf()</code> method on strings, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>indexOf()</code> method on strings includes support for at least one <code>indexOf()</code> method on strings capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>indexOf()</code> method on strings includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>indexOf()</code> method on strings, and supports at least one <code>indexOf()</code> method on strings capability. The web browser at least partially/possibly fully supports the JavaScript <code>indexOf()</code> method on strings. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>indexOf()</code> method on strings does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>indexOf()</code> method on strings, but does not support at least one <code>indexOf()</code> method on strings capability. The web browser partially supports the JavaScript <code>indexOf()</code> method on strings.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>indexOf()</code> Method On Strings Web Browser Support</h3>

     <p><q><b>Pass</b> (at least partial/possibly full support):</q> IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.</p>

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

     <h2><a id='test'></a>2. <code>indexOf()</code> Method On Strings Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;script&gt;
var string = &quot;abc def ghi&quot;;
if (string.indexOf){
 if (string.indexOf(&quot;def&quot;) === 4){
  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;indexOf()&lt;/code&gt; method on strings, and supports at least one &lt;code&gt;indexOf()&lt;/code&gt; method on strings capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;indexOf()&lt;/code&gt; method on strings. Positive determination of full web browser support is beyond the scope of this test.&lt;/p&gt;&quot;);
 } else {
  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;indexOf()&lt;/code&gt; method on strings, but does not support at least one &lt;code&gt;indexOf()&lt;/code&gt; method on strings capability. The web browser partially supports the JavaScript &lt;code&gt;indexOf()&lt;/code&gt; method on strings.&lt;/p&gt;&quot;);
 }
} else {
 document.write(&quot;&lt;p&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;indexOf()&lt;/code&gt; method on strings. The web browser does not support the JavaScript &lt;code&gt;indexOf()&lt;/code&gt; method on strings.&lt;/p&gt;&quot;);
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <script>
     var string = \"abc def ghi\";
     if (string.indexOf){
      if (string.indexOf(\"def\") === 4){
       document.write(\"<p><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>indexOf()</code> method on strings, and supports at least one <code>indexOf()</code> method on strings capability. The web browser at least partially/possibly fully supports the JavaScript <code>indexOf()</code> method on strings. Positive determination of full web browser support is beyond the scope of this test.</p>\");
      } else {
       document.write(\"<p><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>indexOf()</code> method on strings, but does not support at least one <code>indexOf()</code> method on strings capability. The web browser partially supports the JavaScript <code>indexOf()</code> method on strings.</p>\");
      }
     } else {
      document.write(\"<p><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>indexOf()</code> method on strings. The web browser does not support the JavaScript <code>indexOf()</code> method on strings.</p>\");
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
