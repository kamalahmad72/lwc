<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_font_size_property_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/css/css_font_size_property.php.
 * Last reviewed/updated: 10 Nov 2017.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>The CSS <code>font-size</code> property is intended for setting the font size of HTML text content. Valid units of absolute (i.e., fixed) length for the CSS <code>font-size</code> property include <code>pt</code> and <code>px</code>. Valid units of relative (i.e., dynamic/changeable) length for the CSS <code>font-size</code> property include <code>em</code> and <code>rem</code>. Valid units of absolute (i.e., fixed) size (not length) for the CSS <code>font-size</code> property include <code>xx-small</code>, <code>x-small</code>, <code>small</code>, <code>medium</code>, <code>large</code>, <code>x-large</code>, and <code>xx-large</code> (<code>xx-small</code> - <code>xx-large</code>).</p>

     <h3><a id='abbreviations'></a>1.1. Abbreviations</h3>

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

     <h2><a id='absoluteLength'></a>2. Units Of Absolute Length: <code>pt</code> And <code>px</code></h2>

     <p>Perhaps in deference to print designers, <code>pt</code>, historically known as a standard unit of absolute length in print design, was included as a valid unit of absolute length for web design. And,  indeed, many early web designers, perhaps familiar with <code>pt</code> from print design, used <code>pt</code> instead of <code>px</code> for absolute length. However, once it became apparent that <code>px</code> is the most logical unit of absolute length for web design, the use of <code>pt</code> fell out of favor. Today in web design, <code>pt</code> is used only in rare/special situations.</p>

     <h3><a id='pt'></a>2.1. <code>pt</code></h3>

     <p><code>pt</code> (short for <b>p</b>oin<b>t</b>) is a unit of absolute length equal to 1/72nd of an inch. <code>pt</code> is supported by at least IE6+, ED12+, FF1.5+, SF3.1+, CH2+, and OP7.50+. The CSS <code>html</code> type selector with the <code>font-size: 12pt</code> style:</p>

<pre>
html {
  font-size: 12pt;
}
</pre>

     <p>Examples of text with <code>font-size: 5pt</code> - <code>24pt</code>:</p>

     <p>
      <span class='fontsize5pt'>$reusableCode->allCharactersString font-size: 5pt</span><br />
      <span class='fontsize6pt'>$reusableCode->allCharactersString font-size: 6pt</span><br />
      <span class='fontsize7pt'>$reusableCode->allCharactersString font-size: 7pt</span><br />
      <span class='fontsize8pt'>$reusableCode->allCharactersString font-size: 8pt</span><br />
      <span class='fontsize9pt'>$reusableCode->allCharactersString font-size: 9pt</span><br />
      <span class='fontsize10pt'>$reusableCode->allCharactersString font-size: 10pt</span><br />
      <span class='fontsize11pt'>$reusableCode->allCharactersString font-size: 11pt</span><br />
      <span class='fontsize12pt'>$reusableCode->allCharactersString font-size: 12pt</span><br />
      <span class='fontsize13pt'>$reusableCode->allCharactersString font-size: 13pt</span><br />
      <span class='fontsize14pt'>$reusableCode->allCharactersString font-size: 14pt</span><br />
      <span class='fontsize15pt'>$reusableCode->allCharactersString font-size: 15pt</span><br />
      <span class='fontsize16pt'>$reusableCode->allCharactersString font-size: 16pt</span><br />
      <span class='fontsize17pt'>$reusableCode->allCharactersString font-size: 17pt</span><br />
      <span class='fontsize18pt'>$reusableCode->allCharactersString font-size: 18pt</span><br />
      <span class='fontsize19pt'>$reusableCode->allCharactersString font-size: 19pt</span><br />
      <span class='fontsize20pt'>$reusableCode->allCharactersString font-size: 20pt</span><br />
      <span class='fontsize21pt'>$reusableCode->allCharactersString font-size: 21pt</span><br />
      <span class='fontsize22pt'>$reusableCode->allCharactersString font-size: 22pt</span><br />
      <span class='fontsize23pt'>$reusableCode->allCharactersString font-size: 23pt</span><br />
      <span class='fontsize24pt'>$reusableCode->allCharactersString font-size: 24pt</span>
     </p>

     <h3><a id='px'></a>2.2. <code>px</code></h3>

     <p>Historically, <code>px</code> (short for <b>p</b>i<b>x</b>el) has been defined as a unit of absolute length equal to 1/96th of an inch. Practically, <code>px</code> is a unit of absolute length equal to the smallest display element (pixel) on the screen of a display device. The former definition assumes that display devices have a pixel density of 96dpi, whereas the latter definition recognizes that display devices have varying pixel densities. <code>px</code> is supported by at least IE6+, ED12+, FF1.5+, SF3.1+, CH2+, and OP7.50+. The CSS <code>html</code> type selector with the <code>font-size: 16px</code> style:</p>

<pre>
html {
  font-size: 16px;
}
</pre>

     <p>Examples of text with <code>font-size: 7px</code> - <code>font-size: 32px</code>:</p>

     <p>
      <span class='fontsize7px'>$reusableCode->allCharactersString font-size: 7px</span><br />
      <span class='fontsize8px'>$reusableCode->allCharactersString font-size: 8px</span><br />
      <span class='fontsize9px'>$reusableCode->allCharactersString font-size: 9px</span><br />
      <span class='fontsize10px'>$reusableCode->allCharactersString font-size: 10px</span><br />
      <span class='fontsize11px'>$reusableCode->allCharactersString font-size: 11px</span><br />
      <span class='fontsize12px'>$reusableCode->allCharactersString font-size: 12px</span><br />
      <span class='fontsize13px'>$reusableCode->allCharactersString font-size: 13px</span><br />
      <span class='fontsize14px'>$reusableCode->allCharactersString font-size: 14px</span><br />
      <span class='fontsize15px'>$reusableCode->allCharactersString font-size: 15px</span><br />
      <span class='fontsize16px'>$reusableCode->allCharactersString font-size: 16px</span><br />
      <span class='fontsize17px'>$reusableCode->allCharactersString font-size: 17px</span><br />
      <span class='fontsize18px'>$reusableCode->allCharactersString font-size: 18px</span><br />
      <span class='fontsize19px'>$reusableCode->allCharactersString font-size: 19px</span><br />
      <span class='fontsize20px'>$reusableCode->allCharactersString font-size: 20px</span><br />
      <span class='fontsize21px'>$reusableCode->allCharactersString font-size: 21px</span><br />
      <span class='fontsize22px'>$reusableCode->allCharactersString font-size: 22px</span><br />
      <span class='fontsize23px'>$reusableCode->allCharactersString font-size: 23px</span><br />
      <span class='fontsize24px'>$reusableCode->allCharactersString font-size: 24px</span><br />
      <span class='fontsize25px'>$reusableCode->allCharactersString font-size: 25px</span><br />
      <span class='fontsize26px'>$reusableCode->allCharactersString font-size: 26px</span><br />
      <span class='fontsize27px'>$reusableCode->allCharactersString font-size: 27px</span><br />
      <span class='fontsize28px'>$reusableCode->allCharactersString font-size: 28px</span><br />
      <span class='fontsize29px'>$reusableCode->allCharactersString font-size: 29px</span><br />
      <span class='fontsize30px'>$reusableCode->allCharactersString font-size: 30px</span><br />
      <span class='fontsize31px'>$reusableCode->allCharactersString font-size: 31px</span><br />
      <span class='fontsize32px'>$reusableCode->allCharactersString font-size: 32px</span>
     </p>

    </section>
    <hr />
    <section>

     <h2><a id='relativeLength'></a>3. Units Of Relative Length: <code>em</code> And <code>rem</code></h2>

     <h3><a id='em'></a>3.1. <code>em</code></h3>

     <p><code>em</code> is a unit of relative length equal to the <code>font-size</code> property value inherited by the element on which the <code>em</code> unit is being used. <code>em</code> is supported by at least IE6+, ED12+, FF1.5+, SF3.1+, CH2+, and OP7.50+.</p>

     <p>Consider, for example, the following web page code:</p>

<pre>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
 &lt;head&gt;
  &lt;style type=&quot;text/css&quot;&lt;
   html { font-size: 16px; }
   body { font-size: 0.875em; } /* em = 16px. font-size = 0.875 x 16px = 14px. */
   h1 { font-size: 2em; } /* em = 14px. font-size = 2 x 14px = 28px. */
   p { font-size: 1em; } /* em = 14px. font-size = 1 x 14px = 14px. */
   span { font-size: 1.5em; } /* em = 14px. font-size = 1.5 x 14px = 21px. */
  &lt;/style&gt;
 &lt;/head&gt;
 &lt;body&gt;
  &lt;h1&gt;Heading 1 Text Content Is Styled With <code>font-size: 28px</code>&lt;/h2&gt;
  &lt;p&gt;Paragraph text content is styled with <code>font-size: 14px</code>. &lt;span&gt;Span text content is styled with <code>font-size: 21px</code>.&lt;/span&gt; Paragraph text content is styled with <code>font-size: 14px</code>.&lt;/p&gt;
 &lt;/body&gt;
&lt;/html&gt;
</pre>

     <p>In this example: 1.) <code>em</code> is used on the <code>body</code>, <code>h1</code>, <code>p</code>, and <code>span</code> elements; 2.) <code>body</code> inherits <code>font-size</code> from <code>html</code>; 3.) <code>h1</code> and <code>p</code> inherit <code>font-size</code> from <code>body</code> which inherits <code>font-size</code> from <code>html</code>; and 4.) <code>span</code> inherits <code>font-size</code> from <code>p</code> which inherits <code>font-size</code> from <code>body</code> which inherits <code>font-size</code> from <code>html</code>.</p>

     <p>For <code>body</code>: 1.) the <code>em</code> value is equal to the value of the <code>font-size</code> property on <code>body</code> inherited from <code>html</code>, which is 16px; and 2.) the <code>font-size</code> value is equal to the <code>em</code> scaling factor multiplied by the <code>em</code> value, which is 0.875 x 16px = 14px.</p>

     <p>For <code>h1</code>: 1.) the <code>em</code> value is equal to the value of the <code>font-size</code> property on <code>h1</code> inherited from <code>body</code> inherited from <code>html</code>, which is 14px; and 2.) the <code>font-size</code> value is equal to the <code>em</code> scaling factor multiplied by the <code>em</code> value, which is 2 x 14px = 28px. Hence, the <code>h1</code> element text content is styled with <code>font-size: 28px</code>.</p>

     <p>For <code>p</code>: 1.) the <code>em</code> value is equal to the value of the <code>font-size</code> property on <code>p</code> inherited from <code>body</code> inherited from <code>html</code>, which is 14px; and 2.) the <code>font-size</code> value is equal to the <code>em</code> scaling factor multiplied by the <code>em</code> value, which is 1 x 14px = 14px. Hence, the <code>p</code> element text content is styled with <code>font-size: 14px</code>.</p>

     <p>For <code>span</code>: 1.) the <code>em</code> value is equal to the value of the <code>font-size</code> property on <code>span</code> inherited from <code>p</code> inherited from <code>body</code> inherited from <code>html</code>, which is 14px; and 2.) the <code>font-size</code> value is equal to the <code>em</code> scaling factor multiplied by the <code>em</code> value, which is 1.5 x 14px = 21px. Hence, the <code>span</code> element text content is styled with <code>font-size: 21px</code>.</p>

     <h3><a id='rem'></a>3.2. <code>rem</code></h3>

     <p><code>rem</code> is a unit of relative length equal to the <code>font-size</code> property value on the <code>html</code> element (a.k.a., the root element). <code>rem</code> is supported by IE9+, ED12+, FF3.6+, SF5+, CH3+, and OP11.60+.</p>

     <p>Consider, for example, the following web page code:</p>

<pre>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
 &lt;head&gt;
  &lt;style type=&quot;text/css&quot;&gt;
   html { font-size: 16px; }
   body { font-size: 0.875rem; } /* rem = 16px. font-size = 0.875 x 16px = 14px. */
   h1 { font-size: 2rem; } /* rem = 16px. font-size = 2 x 16px = 32px. */
   p { font-size: 1rem; } /* rem = 16px. font-size = 1 x 16px = 16px. */
   span { font-size: 1.5rem; } /* rem = 16px. font-size = 1.5 x 16px = 24px. */
  &lt;/style&gt;
 &lt;/head&gt;
 &lt;body&gt;
  &lt;h1&gt;Heading 1 Text Content Is Styled With <code>font-size: 32px</code>&lt;/h2&gt;
  &lt;p&gt;Paragraph text content is styled with <code>font-size: 16px</code>. &lt;span&gt;Span text content is styled with <code>font-size: 24px</code>.&lt;/span&gt; Paragraph text content is styled with <code>font-size: 16px</code>.&lt;/p&gt;
 &lt;/body&gt;
&lt;/html&gt;
</pre>

     <p>In this example: 1.) <code>rem</code> is used on the <code>body</code>, <code>h1</code>, <code>p</code>, and <code>span</code> elements; 2.) unlike <code>em</code>, where the <code>em</code> value is dependent on <code>font-size</code> inheritance, for <code>rem</code>, the <code>rem</code> value is independent of <code>font-size</code> inheritance. Instead, for <code>rem</code>, the <code>rem</code> value is gotten from the <code>font-size</code> property value on the <code>html</code> element.</p>

     <p>For <code>body</code>: 1.) the <code>rem</code> value is equal to the value of the <code>font-size</code> property on <code>html</code>, which is 16px; and 2.) the <code>font-size</code> value is equal to the <code>rem</code> scaling factor multiplied by the <code>rem</code> value, which is 0.875 x 16px = 14px.</p>

     <p>For <code>h1</code>: 1.) the <code>rem</code> value is equal to the value of the <code>font-size</code> property on <code>html</code>, which is 16px; and 2.) the <code>font-size</code> value is equal to the <code>rem</code> scaling factor multiplied by the <code>rem</code> value, which is 2 x 16px = 32px. Hence, the <code>h1</code> element text content is styled with <code>font-size: 32px</code>.</p>

     <p>For <code>p</code>: 1.) the <code>rem</code> value is equal to the value of the <code>font-size</code> property on <code>html</code>, which is 16px; and 2.) the <code>font-size</code> value is equal to the <code>rem</code> scaling factor multiplied by the <code>rem</code> value, which is 1 x 16px = 16px. Hence, the <code>p</code> element text content is styled with <code>font-size: 16px</code>.</p>

     <p>For <code>span</code>: 1.) the <code>rem</code> value is equal to the value of the <code>font-size</code> property on <code>html</code>, which is 16px; and 2.) the <code>font-size</code> value is equal to the <code>rem</code> scaling factor multiplied by the <code>rem</code> value, which is 1.5 x 16px = 24px. Hence, the <code>span</code> element text content is styled with <code>font-size: 24px</code>.</p>

     <h3><a id='benefitOfRelativeLengths'></a>3.3. On The Benefit Of Relative Lengths Over Absolute Lengths</h3>

     <p>Relative lengths are well suited for scaling and changing the <code>font-size</code> value of multiple elements in unison with a minimum of code editing. But first, consider, for example, the following style rules:</p>

<pre>
html { font-size: 16px; }
h1 { font-size: 32px; }
h2 { font-size: 24px; }
h3 { font-size: 19px; }
h4 { font-size: 16px; }
h5 { font-size: 14px; }
h6 { font-size: 10px; }
</pre>

     <p>To increase the <code>font-size</code> of the <code>h1</code> through <code>h6</code> elements above by, for example, 25%, a total of six edits (one to each of the <code>h1</code> through <code>h6</code> style rules) is required. This is because the <code>h1</code> through <code>h6</code> style rules use absolute lengths.</p>

     <p>Now, consider, for example, the following style rules:</p>

<pre>
html { font-size: 16px; }
h1 { font-size: 2em; }
h2 { font-size: 1.5em; }
h3 { font-size: 1.2em; }
h4 { font-size: 1em; }
h5 { font-size: 0.89em; }
h6 { font-size: 0.6em; }
</pre>

     <p>To increase the <code>font-size</code> of the <code>h1</code> through <code>h6</code> element above by, for example, 25%, a total of only one edit (to the <code>html</code> style rule) is required. This is because <code>h1</code> through <code>h6</code> inherit <code>font-size</code> from <code>html</code> and the <code>h1</code> through <code>h6</code> style rules use relative lengths.</p>

     <p>Lastly, consider, for example, the following style rules:</p>

<pre>
html { font-size: 16px; }
h1 { font-size: 2rem; }
h2 { font-size: 1.5rem; }
h3 { font-size: 1.2rem; }
h4 { font-size: 1rem; }
h5 { font-size: 0.89rem; }
h6 { font-size: 0.6rem; }
</pre>

     <p>To increase the <code>font-size</code> of the <code>h1</code> through <code>h6</code> elements above by, for example, 25%, a total of only one edit (to the <code>html</code> style rule) is required. This is because <code>h1</code> through <code>h6</code> get <code>font-size</code> from <code>html</code> and the <code>h1</code> through <code>h6</code> style rules use relative lengths.</p>

    </section>
    <hr />
    <section>

     <h2><a id='absoluteSize'></a>4. Units Of Absolute Size: <code>xx-small</code> - <code>xx-large</code></h2>

     <p><code>xx-small</code>, <code>x-small</code>, <code>small</code>, <code>medium</code>, <code>large</code>, <code>x-large</code>, and <code>xx-large</code> (<code>xx-small</code> - <code>xx-large</code>) are units of absolute size which correspond to the obsoleted HTML <code>font</code> element <code>size</code> attribute <code>1</code> - <code>7</code> values. The relationship between the CSS <code>font-size</code> property <code>xx-small</code> - <code>xx-large</code> values and the obsoleted HTML <code>font</code> element <code>size</code> attribute <code>1</code> - <code>7</code> values is hard coded into the user agent typically as follows:</p>

     <table>
      <caption>User Agent Typical Relationship Between The CSS <code>font-size</code> Property <code>xx-small</code> - <code>xx-large</code> Values And The Obsoleted HTML <code>font</code> Element <code>size</code> Attribute <code>1</code> - <code>7</code> Values</caption>
      <thead>
       <tr>
        <th>CSS <code>font-size</code> Property Value</th>
        <th>HTML <code>font</code> Element <code>size</code> Attribute Value</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td><code>xx-small</code></td>
        <td><code>1</code></td>
       </tr>
       <tr>
        <td><code>x-small</code></td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>small</code></td>
        <td><code>2</code></td>
       </tr>
       <tr>
        <td><code>medium</code> <a id='1_return'></a><a href='#1'>(1)</a></td>
        <td><code>3</code></td>
       </tr>
       <tr>
        <td><code>large</code></td>
        <td><code>4</code></td>
       </tr>
       <tr>
        <td><code>x-large</code></td>
        <td><code>5</code></td>
       </tr>
       <tr>
        <td><code>xx-large</code></td>
        <td><code>6</code></td>
       </tr>
       <tr>
        <td>-</td>
        <td><code>7</code></td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='2'>
         <a id='1'></a><a href='#1_return'>(1)</a> W3C recommended initial value.
        </td>
       </tr>
      </tfoot>
     </table>

     <p>Today, <code>xx-small</code> - <code>xx-large</code> are used only in rare/special situations. <code>xx-small</code> - <code>xx-large</code> are supported by at least IE6+, ED12+, FF1.5+, SF3.1+, CH2+, and OP7.50+. The CSS <code>html</code> type selector with the <code>font-size; medium</code> style:</p>

<pre>
html {
  font-size: medium;
}
</pre>

     <p>Examples of text with <code>font-size: xx-small</code> - <code>xx-large</code>:</p>

     <p>
      <span class='fontsizexxsmall'>$reusableCode->allCharactersString font-size: xx-small</span><br />
      <span class='fontsizexsmall'>$reusableCode->allCharactersString font-size: x-small</span><br />
      <span class='fontsizesmall'>$reusableCode->allCharactersString font-size: small</span><br />
      <span class='fontsizemedium'>$reusableCode->allCharactersString font-size: medium</span><br />
      <span class='fontsizelarge'>$reusableCode->allCharactersString font-size: large</span><br />
      <span class='fontsizexlarge'>$reusableCode->allCharactersString font-size: x-large</span><br />
      <span class='fontsizexxlarge'>$reusableCode->allCharactersString font-size: xx-large</span>
     </p>

    </section>
    <hr />
    <section>

     <h2><a id='ptPxXxsmallSimilaritiesAndComparison'></a>5. <code>pt</code>, <code>px</code>, And <code>xx-small</code> - <code>xx-large</code>: Similarities And Side-By-Side Comparison</h2>

     <h3><a id='ptPxXxsmallSimilarities'></a>5.1. <code>pt</code>, <code>px</code>, And <code>xx-small</code> - <code>xx-large</code>: Similarities</h3>

     <p>Since <code>pt</code> is 1/72nd of an inch and <code>px</code> is 1/96th of an inch, <code>1pt</code> equals <code>1.33px</code>, and <code>1px</code> equals <code>0.75pt</code>. In other words, <code>3pt</code> equals <code>4px</code> and there as a 4/3 ratio between <code>px</code> and <code>pt</code>. And this is true regardless the pixel density of the display device.</p>

     <p>Similarities between <code>pt</code>, <code>px</code>, and <code>xx-small</code> - <code>xx-large</code>:</p>

     <ul>
      <li><code>6pt</code> and <code>8px</code> are rendered the same size in all web browsers.</li>
      <li><code>9pt</code> and <code>12px</code> are rendered the same size in all web browsers.</li>
      <li><code>10pt</code> and <code>small</code> are rendered typically the same size in all web browsers.</li>
      <li><code>12pt</code> and <code>16px</code> are rendered the same size and <code>medium</code> is typically rendered the same size in all web browsers.</li>
      <li><code>18px</code> and <code>large</code> are typically rendered the same size in all web browsers.</li>
      <li><code>15pt</code> and <code>20px</code> are rendered the same size in all web browsers.</li>
      <li><code>18pt</code> and <code>24px</code> are rendered the same size and <code>x-large</code> is typically rendered the same size in all web browsers.</li>
      <li><code>21pt</code> and <code>28px</code> are rendered the same size in all web browsers.</li>
      <li><code>24pt</code> and <code>32px</code> are rendered the same size and <code>xx-large</code> is typically the rendered same size in all web browsers.</li>
     </ul>

     <h3><a id='ptPxXxsmallComparison'></a>5.2. <code>pt</code>, <code>px</code>, And <code>xx-small</code> - <code>xx-large</code>: Side-By-Side Comparison</h3>

     <p>
      <span class='fontsize6pt'>$reusableCode->allCharactersString font-size: 6pt</span><br />
      <span class='fontsize8px'>$reusableCode->allCharactersString font-size: 8px</span><br />
      <span class='fontsizexxsmall'>$reusableCode->allCharactersString font-size: xx-small</span><br />
      <span class='fontsize9px'>$reusableCode->allCharactersString font-size: 9px</span><br />
      <span class='fontsize7pt'>$reusableCode->allCharactersString font-size: 7pt</span><br />
      <span class='fontsize10px'>$reusableCode->allCharactersString font-size: 10px</span><br />
      <span class='fontsizexsmall'>$reusableCode->allCharactersString font-size: x-small</span><br />
      <span class='fontsize8pt'>$reusableCode->allCharactersString font-size: 8pt</span><br />
      <span class='fontsize11px'>$reusableCode->allCharactersString font-size: 11px</span><br />
      <span class='fontsize9pt'>$reusableCode->allCharactersString font-size: 9pt</span><br />
      <span class='fontsize12px'>$reusableCode->allCharactersString font-size: 12px</span><br />
      <span class='fontsize13px'>$reusableCode->allCharactersString font-size: 13px</span><br />
      <span class='fontsizesmall'>$reusableCode->allCharactersString font-size: small</span><br />
      <span class='fontsize10pt'>$reusableCode->allCharactersString font-size: 10pt</span><br />
      <span class='fontsize14px'>$reusableCode->allCharactersString font-size: 14px</span><br />
      <span class='fontsize11pt'>$reusableCode->allCharactersString font-size: 11pt</span><br />
      <span class='fontsize15px'>$reusableCode->allCharactersString font-size: 15px</span><br />
      <span class='fontsize12pt'>$reusableCode->allCharactersString font-size: 12pt</span><br />
      <span class='fontsize16px'>$reusableCode->allCharactersString font-size: 16px</span><br />
      <span class='fontsizemedium'>$reusableCode->allCharactersString font-size: medium</span><br />
      <span class='fontsize17px'>$reusableCode->allCharactersString font-size: 17px</span><br />
      <span class='fontsize13pt'>$reusableCode->allCharactersString font-size: 13pt</span><br />
      <span class='fontsize18px'>$reusableCode->allCharactersString font-size: 18px</span><br />
      <span class='fontsizelarge'>$reusableCode->allCharactersString font-size: large</span><br />
      <span class='fontsize14pt'>$reusableCode->allCharactersString font-size: 14pt</span><br />
      <span class='fontsize19px'>$reusableCode->allCharactersString font-size: 19px</span><br />
      <span class='fontsize15pt'>$reusableCode->allCharactersString font-size: 15pt</span><br />
      <span class='fontsize20px'>$reusableCode->allCharactersString font-size: 20px</span><br />
      <span class='fontsize21px'>$reusableCode->allCharactersString font-size: 21px</span><br />
      <span class='fontsize16pt'>$reusableCode->allCharactersString font-size: 16pt</span><br />
      <span class='fontsize22px'>$reusableCode->allCharactersString font-size: 22px</span><br />
      <span class='fontsize17pt'>$reusableCode->allCharactersString font-size: 17pt</span><br />
      <span class='fontsize23px'>$reusableCode->allCharactersString font-size: 23px</span><br />
      <span class='fontsize18pt'>$reusableCode->allCharactersString font-size: 18pt</span><br />
      <span class='fontsize24px'>$reusableCode->allCharactersString font-size: 24px</span><br />
      <span class='fontsizexlarge'>$reusableCode->allCharactersString font-size: x-large</span><br />
      <span class='fontsize25px'>$reusableCode->allCharactersString font-size: 25px</span><br />
      <span class='fontsize19pt'>$reusableCode->allCharactersString font-size: 19pt</span><br />
      <span class='fontsize26px'>$reusableCode->allCharactersString font-size: 26px</span><br />
      <span class='fontsize20pt'>$reusableCode->allCharactersString font-size: 20pt</span><br />
      <span class='fontsize27px'>$reusableCode->allCharactersString font-size: 27px</span><br />
      <span class='fontsize21pt'>$reusableCode->allCharactersString font-size: 21pt</span><br />
      <span class='fontsize28px'>$reusableCode->allCharactersString font-size: 28px</span><br />
      <span class='fontsize29px'>$reusableCode->allCharactersString font-size: 29px</span><br />
      <span class='fontsize22pt'>$reusableCode->allCharactersString font-size: 22pt</span><br />
      <span class='fontsize30px'>$reusableCode->allCharactersString font-size: 30px</span><br />
      <span class='fontsize23pt'>$reusableCode->allCharactersString font-size: 23pt</span><br />
      <span class='fontsize31px'>$reusableCode->allCharactersString font-size: 31px</span><br />
      <span class='fontsize24pt'>$reusableCode->allCharactersString font-size: 24pt</span><br />
      <span class='fontsize32px'>$reusableCode->allCharactersString font-size: 32px</span><br />
      <span class='fontsizexxlarge'>$reusableCode->allCharactersString font-size: xx-large</span>
     </p>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>6. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/CSS2/'>Cascading Style Sheets Level 2 Revision 1 (CSS 2.1) Specification: W3C Recommendation 07 June 2011, Edited In Place 12 April 2016 To Point To New Work (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/css-fonts-3/'>CSS Fonts Module Level 3: W3C Candidate Recommendation 3 October 2013 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/css-values-3/'>CSS Values And Units Module Level 3: W3C Candidate Recommendation, 29 September 2016 (w3.org)</a></li>
     </ul>

    </section>";
