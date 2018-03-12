<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/innerHTML_property_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/innerHTML_property.php.
 * Last reviewed/updated: 04 Dec 2017.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>innerHTML</code> property. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>innerHTML</code> property, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>innerHTML</code> property. The web browser does not support the JavaScript <code>innerHTML</code> property.</q></p>

     <p>If the web browser recognizes the JavaScript <code>innerHTML</code> property, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>innerHTML</code> property includes support for at least one <code>innerHTML</code> property capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>innerHTML</code> property includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>innerHTML</code> property, and supports at least one <code>innerHTML</code> property capability. The web browser at least partially/possibly fully supports the JavaScript <code>innerHTML</code> property. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>innerHTML</code> property does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>innerHTML</code> property, but does not support at least one <code>innerHTML</code> property capability. The web browser partially supports the JavaScript <code>innerHTML</code> property.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>innerHTML</code> Property Web Browser Support</h3>

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

     <h2><a id='test'></a>2. <code>innerHTML</code> Property Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;Content required to avoid false negative. The JavaScript &lt;code&gt;innerHTML&lt;/code&gt; property on an element node without a child node (i.e., on an empty element/an element without content, for example &lt;code&gt;&amp;lt;div&amp;gt;&amp;lt;/div&amp;gt;&lt;/code&gt;) returns an empty string (i.e., &lt;code&gt;&amp;quot;&amp;quot;&lt;/code&gt;). Because the JavaScript &lt;code&gt;Boolean()&lt;/code&gt; casting function evaluates an empty string to &lt;code&gt;false&lt;/code&gt;, a conditional involving the JavaScript &lt;code&gt;innerHTML&lt;/code&gt; property on an empty element evaluates to &lt;code&gt;false&lt;/code&gt;, which could be mistakenly interpreted as the web browser not supporting the JavaScript &lt;code&gt;innerHTML&lt;/code&gt; property.&lt;/p&gt;

&lt;p id='testIdTwo'&gt;&lt;/p&gt;

&lt;script&gt;
var element = document.getElementById(&quot;testId&quot;);
var elementTwo = document.getElementById(&quot;testIdTwo&quot;);
if (element.innerHTML){
 elementTwo.innerHTML = &quot;If the web browser supports the JavaScript &lt;code&gt;innerHTML&lt;/code&gt; property set/write mode capability, this HTML code becomes the &lt;code&gt;elementTwo&lt;/code&gt; child node on the DOM, which changes &lt;code&gt;elementTwo&lt;/code&gt; from an element node without a child node to an element node with this HTML code as the child node, which changes the evaluation of &lt;code&gt;if (elementTwo.innerHTML)&lt;/code&gt; from &lt;code&gt;false&lt;/code&gt; to &lt;code&gt;true&lt;/code&gt;.&quot;;
 if (elementTwo.innerHTML){
  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;innerHTML&lt;/code&gt; property, and supports at least one &lt;code&gt;innerHTML&lt;/code&gt; property capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;innerHTML&lt;/code&gt; property. Positive determination of full web browser support is beyond the scope of this test.&lt;/p&gt;&quot;);
 } else {
  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;innerHTML&lt;/code&gt; property, but does not support at least one &lt;code&gt;innerHTML&lt;/code&gt; property capability. The web browser partially supports the JavaScript &lt;code&gt;innerHTML&lt;/code&gt; property.&lt;/p&gt;&quot;);
 }
} else {
 document.write(&quot;&lt;p&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;innerHTML&lt;/code&gt; property. The web browser does not support the JavaScript &lt;code&gt;innerHTML&lt;/code&gt; property.&lt;/p&gt;&quot;);
}
&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'>Content required to avoid false negative. The JavaScript <code>innerHTML</code> property on an element node without a child node (i.e., on an empty element/an element without content, for example <code>&lt;div&gt;&lt;/div&gt;</code>) returns an empty string (i.e., <code>&quot;&quot;</code>). Because the JavaScript <code>Boolean()</code> casting function evaluates an empty string to <code>false</code>, a conditional involving the JavaScript <code>innerHTML</code> property on an empty element evaluates to <code>false</code>, which could be mistakenly interpreted as the web browser not supporting the JavaScript <code>innerHTML</code> property.</p>

     <p id='testIdTwo'></p>

     <script>
     var element = document.getElementById(\"testId\");
     var elementTwo = document.getElementById(\"testIdTwo\");
     if (element.innerHTML){
      elementTwo.innerHTML = \"If the web browser supports the JavaScript <code>innerHTML</code> property set/write mode capability, this HTML code becomes the <code>elementTwo</code> child node on the DOM, which changes <code>elementTwo</code> from an element node without a child node to an element node with this HTML code as the child node, which changes the evaluation of <code>if (elementTwo.innerHTML)</code> from <code>false</code> to <code>true</code>.\";
      if (elementTwo.innerHTML){
       document.write(\"<p><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>innerHTML</code> property, and supports at least one <code>innerHTML</code> property capability. The web browser at least partially/possibly fully supports the JavaScript <code>innerHTML</code> property. Positive determination of full web browser support is beyond the scope of this test.</p>\");
      } else {
       document.write(\"<p><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>innerHTML</code> property, but does not support at least one <code>innerHTML</code> property capability. The web browser partially supports the JavaScript <code>innerHTML</code> property.</p>\");
      }
     } else {
      document.write(\"<p><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>innerHTML</code> property. The web browser does not support the JavaScript <code>innerHTML</code> property.</p>\");
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
