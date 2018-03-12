<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/scrollIntoView_method_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/scrollIntoView_method.php.
 * Last reviewed/updated: 04 Dec 2017.
 * Published: 20 Oct 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. The implementation test is run automatically. The capability test is run manually.</p>

     <p>The implementation test determines if the web browser recognizes the JavaScript <code>scrollIntoView()</code> method. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>scrollIntoView()</code> method, the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>scrollIntoView()</code> method. The web browser does not support the JavaScript <code>scrollIntoView()</code> method.</q> If the web browser recognizes the JavaScript <code>scrollIntoView()</code> method, the implementation test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>scrollIntoView()</code> method. The web browser at least partially/possibly fully supports the JavaScript <code>scrollIntoView()</code> method. Positive determination of full web browser support is beyond the scope of this test.</q></p>

     <p>The capability test determines if the web browser's implementation of the JavaScript <code>scrollIntoView()</code> method includes support for at least one <code>scrollIntoView()</code> method capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. Unlike the implementation test, the capability test is run manually and does not automatically generate a web browser support test result.</p>

     <p>The web browser support implementation test source code is shown in Section 2.1.1. The web browser support implementation test source code is run in Section 2.1.2, which shows the web browser support implementation test result. The web browser support capability test source code is shown in Section 2.2.1. The web browser support capability test source code is manually run in Section 2.2.2.</p>

     <h3><a id='support'></a>1.1. <code>scrollIntoView()</code> Method Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP9+.</li>
      <li><q><b>Pass/Fail</b> (partial support):</q> OP8 - 8.54.</li>
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

     <h2><a id='test'></a>2. <code>scrollIntoView()</code> Method Web Browser Support Tests</h2>

     <h3><a id='implementationTest'></a>2.1. Web Browser Support Implementation Test</h3>

     <h4><a id='implementationTestSource'></a>2.1.1. Web Browser Support Implementation Test Source Code</h4>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
&lt;p id='testId'&gt;&lt;/p&gt;

&lt;script&gt;
var element = document.getElementById(&quot;testId&quot;);
if (element.scrollIntoView){
 document.write(&quot;&lt;p&gt;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;scrollIntoView()&lt;/code&gt; method. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;scrollIntoView()&lt;/code&gt; method. Positive determination of full web browser support is beyond the scope of this test.&lt;/p&gt;&quot;);
} else {
 document.write(&quot;&lt;p&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;scrollIntoView()&lt;/code&gt; method. The web browser does not support the JavaScript &lt;code&gt;scrollIntoView()&lt;/code&gt; method.&lt;/p&gt;&quot;);
}
&lt;/script&gt;
</pre>

     <h4><a id='implementationTestResult'></a>2.1.2. Web Browser Support Implementation Test Result</h4>

     <p id='testId'></p>

     <script>
     var element = document.getElementById(\"testId\");
     if (element.scrollIntoView){
      document.write(\"<p><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>scrollIntoView()</code> method. The web browser at least partially/possibly fully supports the JavaScript <code>scrollIntoView()</code> method. Positive determination of full web browser support is beyond the scope of this test.</p>\");
     } else {
      document.write(\"<p><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>scrollIntoView()</code> method. The web browser does not support the JavaScript <code>scrollIntoView()</code> method.</p>\");
     }
     </script>

     <h3><a id='capabilityTest'></a>2.2. Web Browser Support Capability Test</h3>

     <h4><a id='capabilityTestSource'></a>2.2.1. Web Browser Support Capability Test Source Code</h4>

<pre>
&lt;p&gt;To manually run the web browser support capability test, click the buttons below:&lt;/p&gt;

&lt;ul&gt;
 &lt;li&gt;When click &lt;kbd&gt;test scrollIntoView() support&lt;/kbd&gt;, if the web browser supports the JavaScript &lt;code&gt;scrollIntoView()&lt;/code&gt; method, the &lt;a href='#testScrollIntoViewTargetId'&gt;target element text (below)&lt;/a&gt; is scrolled to the top of the viewport: &lt;input type='button' id='testNoArgumentId' value='test scrollIntoView() support' /&gt;.&lt;/li&gt;
 &lt;li&gt;When click &lt;kbd&gt;test scrollIntoView(true) support&lt;/kbd&gt;, if the web browser supports the JavaScript &lt;code&gt;scrollIntoView(true)&lt;/code&gt; method, the target element text is scrolled to the top of the viewport: &lt;input type='button' id='testTrueArgumentId' value='test scrollIntoView(true) support' /&gt;.&lt;/li&gt;
 &lt;li&gt;When click &lt;kbd&gt;test scrollIntoView(false) support&lt;/kbd&gt;, if the web browser supports the JavaScript &lt;code&gt;scrollIntoView(false)&lt;/code&gt; method, the target element text is scrolled to the bottom of the viewport: &lt;input type='button' id='testFalseArgumentId' value='test scrollIntoView(false) support' /&gt;.&lt;/li&gt;
 &lt;li&gt;When click any of the buttons above, if the web browser does not support the tested JavaScript &lt;kbd&gt;scrollIntoView() method capability, nothing happens and the target element text is not scrolled into the viewport.&lt;/li&gt;
&lt;/ul&gt;

&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;

&lt;p id='testScrollIntoViewTargetId'&gt;target element text&lt;/p&gt;

&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;

&lt;script&gt;
var elementNoArgument = document.getElementById(&quot;testNoArgumentId&quot;);
var elementTrueArgument = document.getElementById(&quot;testTrueArgumentId&quot;);
var elementFalseArgument = document.getElementById(&quot;testFalseArgumentId&quot;);
var elementScrollIntoViewTarget = document.getElementById(&quot;testScrollIntoViewTargetId&quot;);
elementNoArgument.onclick = function(){
 elementScrollIntoViewTarget.scrollIntoView();
}
elementTrueArgument.onclick = function(){
 elementScrollIntoViewTarget.scrollIntoView(true);
}
elementFalseArgument.onclick = function(){
 elementScrollIntoViewTarget.scrollIntoView(false);
}
&lt;/script&gt;
</pre>

     <h4><a id='manuallyRunCapabilityTest'></a>2.2.2. Manually Run The Web Browser Support Capability Test</h4>

     <p>To manually run the web browser support capability test, click the buttons below:</p>

     <ul>
      <li>When click <kbd>test scrollIntoView() support</kbd>, if the web browser supports the JavaScript <code>scrollIntoView()</code> method, the <a href='#testScrollIntoViewTargetId'>target element text (below)</a> is scrolled to the top of the viewport: <input type='button' id='testNoArgumentId' value='test scrollIntoView() support' />.</li>
      <li>When click <kbd>test scrollIntoView(true) support</kbd>, if the web browser supports the JavaScript <code>scrollIntoView(true)</code> method, the target element text is scrolled to the top of the viewport: <input type='button' id='testTrueArgumentId' value='test scrollIntoView(true) support' />.</li>
      <li>When click <kbd>test scrollIntoView(false) support</kbd>, if the web browser supports the JavaScript <code>scrollIntoView(false)</code> method, the target element text is scrolled to the bottom of the viewport: <input type='button' id='testFalseArgumentId' value='test scrollIntoView(false) support' />.</li>
      <li>When click any of the buttons above, if the web browser does not support the tested JavaScript <code>scrollIntoView()</code> method capability, nothing happens and the target element text is not scrolled into the viewport.</li>
     </ul>

     <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

     <p id='testScrollIntoViewTargetId'>target element text</p>

     <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

     <script>
     var elementNoArgument = document.getElementById(\"testNoArgumentId\");
     var elementTrueArgument = document.getElementById(\"testTrueArgumentId\");
     var elementFalseArgument = document.getElementById(\"testFalseArgumentId\");
     var elementScrollIntoViewTarget = document.getElementById(\"testScrollIntoViewTargetId\");
     elementNoArgument.onclick = function(){
      elementScrollIntoViewTarget.scrollIntoView();
     }
     elementTrueArgument.onclick = function(){
      elementScrollIntoViewTarget.scrollIntoView(true);
     }
     elementFalseArgument.onclick = function(){
      elementScrollIntoViewTarget.scrollIntoView(false);
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
