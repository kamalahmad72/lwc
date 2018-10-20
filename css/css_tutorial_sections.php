<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_tutorial_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/css/css_tutorial.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>HTML is the web language in which markup is used to; 1.) add content to a web page, and 2.) impart structural information upon the content. The structural information that markup imparts upon content includes; 1.) a structure type (e.g., heading, paragraph, etc.), and 2.) the demarcation of the starting and ending points for the application of the structure type.</p>

     <p>HTML provides numerous elements for structuring content. The structure type associated with each element is unique and is intended for a specific purpose. A couple examples are listed below:</p>

     <table>
      <caption>HTML Element Examples</caption>
      <thead>
       <tr>
        <th>Element</th>
        <th>Name</th>
        <th>Markup</th>
        <th>Structure Type/Intended Purpose</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td><code>h1</code></td>
        <td>heading 1</td>
        <td><code>&lt;h1&gt;&lt;/h1&gt;</code></td>
        <td>A single line of text as a block, large font, bold, margin top and bottom.</td>
       </tr>
       <tr>
        <td><code>p</code></td>
        <td>paragraph</td>
        <td><code>&lt;p&gt;&lt;/p&gt;</code></td>
        <td>One or more sentences as a block, normal font, margin top and bottom.</td>
       </tr>
       <tr>
        <td><code>table</code></td>
        <td>table</td>
        <td><code>&lt;table&gt;&lt;/table&gt;</code></td>
        <td>Content as a block organized into columns and rows through the use of child elements, <code>th</code>, <code>tr</code>, and <code>td</code>.</td>
       </tr>
       <tr>
        <td><code>ol</code></td>
        <td>ordered list</td>
        <td><code>&lt;ol&gt;&lt;/ol&gt;</code></td>
        <td>Content as a block organized into a numbered (i.e., ordered) list through the use of child element, <code>li</code>.</td>
       </tr>
      </tbody>
     </table>

     <p>In the mid-1990's, a standard for attaching style to content did not exist and HTML was in its infancy. As a result, web pages/sites looked rather similar and unattractive and the future direction of style and HTML were open for discussion.</p>

     <p>Also in the mid-1990's, a fierce competition for dominance in the emerging web browser market developed between Netscape and Microsoft and their respective web browsers, Netscape Navigator and Microsoft Internet Explorer. Known as the web browser war, its most conspicuous and polarizing battle centered around claims alleging Microsoft of monopolistic business practices with respect to bundling/integrating Microsoft Internet Explorer with Microsoft Windows 95 and Windows 98.</p>

     <p>While most were preoccupied picking and defending sides in the impending antitrust lawsuit, another battle in the web browser war drew relatively little attention: Netscape and Microsoft, apparently sensing a void and an opportunity not only to appease the desire of authors and users for style, but to influence the future direction of style and HTML, started creating elements and attributes related to style and releasing versions of their web browsers that supported their own more or less proprietary versions of HTML.</p>

     <p>Those with a nonpartisan interest in the future direction of style and HTML, however, recognized that the <q>silent</q> battle in the web browser war was creating three serious problems: 1.) HTML was morphing into a structure/style combination language; 2.) HTML was splitting into two distinct, web browser-specific languages; and 3.) style, instead of being a positive for authors, was becoming a negative for it had less to do with creating attractive web pages/sites than keeping track of the growing differences between Netscape Navigator and Microsoft Internet Explorer with respect to style.</p>

     <p>Tim Berners-Lee, who invented the WWW in 1989 and wrote the first web browser and web server in 1990, along with others, founded the W3C in 1994. The <cite>W3C</cite>'s mission is, <q><i>To lead the World Wide Web to its full potential by developing protocols and guidelines that ensure long-term growth for the Web.</i></q> With respect to style and HTML, the W3C published the following Recommendations between December 1996 and May 2001:</p>

     <table>
      <caption>W3C CSS And HTML Recommendations Between December 1996 And May 2001</caption>
      <thead>
       <tr>
        <th>Date</th>
        <th>Recommendation</th>
        <th>Significance</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>Dec<br />1996</td>
        <td>CSS1</td>
        <td>The first W3C CSS Recommendation.</td>
       </tr>
       <tr>
        <td>Jan<br />1997</td>
        <td>HTML 3.2</td>
        <td>
         <p>The first W3C HTML Recommendation:</p>
         <ul>
          <li>A major update to Tim Berners-Lee's HTML 2.0 Request For Comment published in November 1995.</li>
          <li>Did not support CSS, but hinted at adding CSS support in future HTML Recommendations.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td>Dec<br />1997</td>
        <td>HTML 4.0</td>
        <td>
         <p>A major update to the HTML 3.2 Recommendation:</p>
         <ul>
          <li>CSS support added.</li>
          <li>Deprecated elements and attributes related to style.</li>
          <li>Included a Transitional DTD and a Strict DTD, which included and excluded, respectively, elements and attributes related to style that the W3C expected to phase out as being replaced by CSS.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td>Apr<br />1998</td>
        <td>HTML 4.0, Revised</td>
        <td>Primarily a document update that corrected errata in the December 1997 HTML 4.0 Recommendation.</td>
       </tr>
       <tr>
        <td>May<br />1998</td>
        <td>CSS2</td>
        <td>A minor update to the CSS1 Recommendation.</td>
       </tr>
       <tr>
        <td>Dec<br />1999</td>
        <td>HTML 4.01</td>
        <td>A minor update to the HTML 4.0 Recommendation.</td>
      </tr>
      <tr>
        <td>Jan<br />2000</td>
        <td>XHTML 1.0</td>
        <td>
         <p>A reformulation of HTML 4 as an XML 1.0 application:</p>
         <ul>
          <li>A major update to the HTML 4.01 Recommendation.</li>
          <li>Like the HTML 4.01 Recommendation, deprecated elements and attributes related to style.</li>
          <li>Like the HTML 4.01 Recommendation, included a Transitional DTD and a Strict DTD, which included and excluded, respectively, elements and attributes related to style that the W3C expected to phase out as being replaced by CSS.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <td>May<br />2001</td>
        <td>XHTML 1.1</td>
        <td>
         <p>A reformulation of XHTML 1.0 Strict using XHTML modules:</p>
         <ul>
          <li>A major update to the XHTML 1.0 Recommendation.</li>
          <li>Obsoleted elements and attributes related to style.</li>
          <li>Eliminated the XHTML 1.0 Recommendation Transitional DTD.</li>
          <li>Included a single DTD similar to the XHTML 1.0 Recommendation Strict DTD, but built on XHTML modules.</li>
         </ul>
        </td>
       </tr>
      </tbody>
     </table>

     <p>Concerning style, the W3C described a new web language, CSS, in which: 1.) style is attached to content; 2.) the attachment of style to content is separate from the attachment of structure to content (i.e., although CSS and HTML act upon the same content, they are distinct web languages); and 3.) the application of style to content cascades.</p>

     <p>Concerning HTML, the W3C Recommendations accomplished the following; 1.) CSS support was added, and 2.) elements and attributes related to style were first deprecated and then obsoleted from HTML as being replaced by CSS.</p>

     <div class='note normal'>
      <ul>
       <li>The W3C does not have the authority to impose the implementation of its Recommendations. The W3C does, however, allow parties interested in the W3C Recommendations to become W3C members, which allows them to contribute to the W3C Recommendations. It is in allowing W3C members to contribute to the W3C Recommendations that the W3C Recommendations acquire their weight.</li>
       <li>A couple of the styles created by Netscape and Microsoft were incorporated into the W3C Recommendations. The others were discarded and became known as nonstandard HTML extensions.</li>
      </ul>
     </div>

     <p>The W3C CSS1 and HTML 4.0 Recommendations provided a solution to the aforementioned problems arising from Netscape's and Microsoft's attempts not only to appease the desire of authors and users for style, but to influence the future direction of style and HTML. For the solution to become a reality, however, not only would authors need to implement the W3C CSS1 and HTML 4.0 Recommendations into their web pages/sites, but web browser vendors would need to implement the W3C CSS1 and HTML 4.0 Recommendations into their web browsers.</p>

     <p>Authors applauded the W3C CSS1 and HTML 4.0 Recommendations; 1.) the distinction between style and structure made sense, 2.) most of the styles authors desired were accounted for, 3.) they were easy to learn and implement, and, 4.) most importantly, being standards, they promised an end to the growing differences between Netscape Navigator and Microsoft Internet Explorer with respect to style.</p>

     <p>At the start of 1998, Microsoft Internet Explorer's support for the W3C CSS1 and HTML 4.0 Recommendations, albeit imperfect and partial, was superior to that of Netscape Navigator. But far more importantly, that Netscape Navigator's and Microsoft Internet Explorer's support for the W3C CSS1 and HTML 4.0 Recommendations differed only served to increase, by at least one order of magnitude, the differences between Netscape Navigator and Microsoft Internet Explorer with respect to style. As a result, authors eager to design cross-browser compatible web pages/sites implementing the W3C Recommendations anxiously awaited the next releases of Netscape Navigator to see if its support for the W3C Recommendations was closing the gap with Microsoft Internet Explorer.</p>

     <p>In February 1998, in apparent acknowledgment that unless something drastic happened Microsoft was going to win the web browser war, Netscape formed the Mozilla Organization. The Mozilla Organization created the Mozilla Project whose goal was to develop community driven, open source, cross-platform software for the WWW, including a standards conforming web browser. Authors and users, particularly those intrigued by an open source alternative to Microsoft's proprietary software, welcomed this news. But when the Mozilla Project announced that their new web browser would have to be developed from scratch, and that, as a result, it would take considerably longer than initially anticipated for the new web browser to be released, all eyes refocused on the next releases of Netscape Navigator.</p>

     <p>In May 1998, the W3C published its second CSS Recommendation, CSS2. Five months later, in October 1998, Netscape released Netscape Navigator 4.5. When it was determined that Netscape Navigator 4.5's support for the dated W3C CSS1 Recommendation was only slightly better than that of Netscape Navigator 4.0, it started to sink in that Netscape Navigator's poor support for the W3C CSS Recommendations was not likely to change.</p>

     <p>In March 1999, Microsoft released Microsoft Internet Explorer 5.0. Microsoft Internet Explorer 5.0's vastly improved support for the W3C CSS Recommendations increased, by at least another level of magnitude, the differences between Netscape Navigator and Microsoft Internet Explorer with respect to style. The headaches this caused authors eager to design cross-browser compatible web pages/sites implementing the W3C Recommendations cannot be overstated: web pages/sites that appeared more or less as expected in Microsoft Internet Explorer 5.0 could very well appear completely discombobulated in Netscape Navigator 4.5. In fact, the gap between Netscape Navigator and Microsoft Internet Explorer with respect to style was now so large that many authors resorted to adding <q>Best Viewed With Web Browser X</q> logos to their web pages and/or using CSS and HTML <q>hacks</q> to trick web browsers into displaying their web pages a particular way. Moreover, and as it became apparent that the antitrust lawsuit against Microsoft was not going to drastically affect Microsoft Internet Explorer's newfound leading position in the web browser market, innumerable authors, including those who were pro-Netscape and/or anti-Microsoft, not only started denouncing Netscape Navigator, but anxiously awaited its market share to drop to low single digits so they could design web pages/sites implementing the W3C Recommendations without having to worry about Netscape Navigator compatibility.</p>

     <p>Numerous factors played a role in Netscape Navigator's defeat to Microsoft Internet Explorer in the web browser war, and, therefore, what role Netscape Navigator's poor support for the W3C Recommendations played in its demise is debatable. One thing, however, is not debatable: the authoring community let it be known that if a web browser vendor wanted good standing with the authoring community, it better keep up with the competition in supporting the W3C Recommendations.</p>

     <p>In December 2000, after over two years of development, the Mozilla Project released their web browser, named Mozilla. As promised, Mozilla's support for the W3C Recommendations was comparable to that of Microsoft Internet Explorer and authors and users finally had a standards conforming Netscape-affiliated alternative to Microsoft Internet Explorer.</p>

     <div class='note normal'>
      <ul>
       <li>Mozilla was never intended as an <q>official</q> product, but simply as a means for distributing and testing the Mozilla Project's new rendering engine, Gecko, as well as other features to be incorporated into the official product, Netscape, which, for various reasons, never gained much popularity. Although Mozilla and Netscape are no longer being developed, the Mozilla Project continues to develop Gecko and to build it into a number of so-called Mozilla-based web browsers. The Mozilla-based web browser currently being developed is Firefox.</li>
<!-- Start same content in template_explained.php. -->
       <li>A common convention for writing style rules places the selector and opening left curly bracket ({) character on the first line, each style on its own line indented by two space ( ) characters (shown) or a tab, and the closing right curly bracket (}) character on the last line:
<!-- Less than 24 lines. -->
<pre>
selector {
  property-one: value-one;
  property-two: value-two;
  property-three: value-three;
}
</pre>
       When the convention above results in too much vertical scrolling, the style rules are written as a single line:
<!-- Greater than or equal to 24 lines, or for or some other reason. -->
<pre>
selector { property-one: value-one; property-two: value-two; property-three: value-three; }
</pre>
<!-- End same content in template_explained.php. -->
       </li>
      </ul>
     </div>

    </section>
    <hr />
    <section>

     <h2><a id='basics'></a>2. Basics</h2>

     <h3><a id='styleRule'></a>2.1. Style Rules</h3>

     <p>A style rule is the basic CSS unit attached to content for the purpose of styling content. A style rule consists of a selector and a declaration block. Syntax:</p>

<pre>
selector {
  declaration block
}
</pre>

     <p>A selector is the element(s), and/or class-name(s), and/or pseudo-class(es) to which a style rule applies. A selector is the bridge (i.e., common denominator or link) between a style rule and an HTML document via which style is attached to content.</p>

     <p>A declaration block assigns one or more styles to a selector. A declaration block consists of one or more declarations, each declaration representing a style. Syntax:</p>

<pre>
/* Declaration block with three declarations. */
selector {
  declaration-one;
  declaration-two;
  declaration-three;
}
</pre>

     <p>A declaration is a style. A declaration consists of a property and value pair. Syntax:</p>

<pre>
/* Style rule with three declarations (i.e., styles). */
selector {
  property-one: value-one;
  property-two: value-two;
  property-three: value-three;
}
</pre>

     <p>A property is a characteristic of content defined by CSS. A value is a specific option of a characteristic that can be assigned to a property. For example, the <code>color</code> property is a characteristic of text, and the <code>black</code> value is a specific option of color that can be assigned to a property, such as <code>color</code>. The colon (:) character in the declaration assigns the value to the property, thereby defining a style. The semicolon (;) character designates the end of the declaration (i.e., style), after which another declaration (i.e., style) may follow inside the declaration block. The semicolon (;) character after the last or only declaration in the declaration block is optional.</p>

     <p>A couple style rule examples:</p>

<pre>
/* Style rule with two declarations (i.e., styles). */
h1 {
  font-style: italic;
  text-decoration: underline;
}

/* Optional semicolon (;) character not used after the last/only declaration in the declaration block. */
.red {
  color: #f00
}

/* Optional semicolon (;) character used after the last/only declaration in the declaration block. */
:link {
  color: #000;
}
</pre>

     <p>The selector is often used to refer to a style rule by name. For example:</p>

<pre>
/* Heading one or h1 style rule. */
h1 {
  font-style: italic;
  text-decoration: underline;
}

/* Red, dot red, or .red style rule. */
.red {
  color: #f00;
}

/* Link or :link style rule. */
:link {
  color: #000;
}
</pre>

     <h3><a id='comments'></a>2.2. Comments</h3>

     <p>A CSS comment is text in a style sheet (embedded or external) that is not interpreted by, and, therefore, is ignored by, a user agent. Comments typically serve as a note/reminder (i.e., comment) about the surrounding, interpreted code. CSS comments are preceded by a forward slash and asterisk (/*) characters and followed by an asterisk and forward slash (*/) characters. CSS comments can be single line or multiple line. CSS comments cannot be nested. Syntax:</p>

<pre>
1     /* CSS comment in an embedded style sheet or an external style sheet. */
2
3     selector { declaration block } /* Single line CSS comment at the end of a line (recommended). */
4
5     /* Single line CSS comment at the start of a line (not recommended). */ selector { declaration block }
6
7     /* Single line CSS comment as the entire line. */
8
9     /* Multiple
10     line CSS
11     comment. */
12
13    /*
14    Multiple
15    line CSS
16    comment.
17    */
18
19    /* Multiple line CSS
20     * comment using an
21     * asterisk (*) character
22     * convention. */
23
24    /*
25     * Multiple line CSS
26     * comment using another
27     * asterisk (*) character
28     * convention.
29     */
30
31    /*Multiple line CSS
32        comment
33
34          *  following
35    no apparent
36
37    *
38      convention.
39        /*
</pre>

     <h3><a id='grouping'></a>2.3. Grouping Selectors And Grouping Declarations</h3>

     <p>Grouping selectors and grouping declarations allow multiple style rules to be combined (i.e., grouped) into a single style rule. This reduces style sheet size.</p>

     <p>Selectors with the same declaration block can be grouped into a comma-separated selector. For example:</p>

<pre>
p {
  color: #00f;
}
.blue {
  color: #00f;
}
:hover {
  color: #00f;
}
</pre>

     <p>Is equivalent to:</p>

<pre>
p, .blue, :hover {
  color: #00f;
}
</pre>

     <p>Conversely, declarations with the same selector can be grouped into a semicolon separated declaration block. For example:</p>

<pre>
h2 {
  font-style: italic;
}
h2 {
  text-decoration: underline;
}
</pre>

     <p>Is equivalent to:</p>

<pre>
h2 {
  font-style: italic;
  text-decoration: underline;
}
</pre>

     <h3><a id='validProperties'></a>2.4. Valid Properties, Values, And The Handling Of Invalid Styles</h3>

     <p>The W3C CSS Recommendations define the valid properties for each element and group of related elements. For example, for the <code>h1</code> and <code>p</code> block-level elements, the <code>background-color</code> and <code>color</code> properties are valid, but the <code>vertical-align</code> and <code>empty-cells</code> properties are invalid.</p>

     <p>The W3C CSS Recommendations also define the valid values for each property and group of related properties. For example, for the <code>margin-top</code> and <code>padding-top</code> box model properties, the <code>7px</code> and <code>0.5em</code> values are valid, but the <code>arial</code> and <code>italic</code> values are invalid.</p>

     <p>The W3C CSS Recommendations define a valid style as a declaration with a valid property, value, and syntax, and an invalid style as a declaration with an invalid property, value, or syntax. Moreover, conforming user agents are to respect valid styles and are to ignore invalid styles. In other words, validity occurs at the level of a style, not at the level of a style rule.</p>

     <p>Consider, for example, the following style rules:</p>

<pre>
h1 {
  vertical-align: left; /* First declaration's property is invalid. */
  background-color: #000;
  color: #0f0;
}
h2 {
  font-family: arial;
  background-color: justify; /* Second declaration's value is invalid. */
  color: #0f0;
}
h3 {
  font-family: arial;
  background-color: #000;
  color=&quot;#0f0&quot;; /* Third declaration's syntax is invalid. */
}

 /* All three declarations are invalid. */
h4 {
  vertical-align: left;
  background-color: justify;
  color=&quot;#0f0&quot;;
}
</pre>

     <p>User agents are to interpret the style rules as:</p>

<pre>
h1 {
  background-color: #000;
  color: #0f0;
}
h2 {
  font-family: arial;
  color: #0f0;
}
h3 {
  font-family: arial;
  background-color: #000;
}
h4 {}
</pre>

     <div class='note normal'>Some user agents are designed to treat invalid styles with common errors as if they were valid styles.</div>

     <h3><a id='dom'></a>2.5. The HTML Document Tree And The Inheritance Of Style</h3>

     <p>The HTML document tree is a diagram of the elements that constitute an HTML document. The diagram is similar in shape to a tree in that it has a root and branches. By convention, though, the root is placed at the top of the diagram.</p>

     <p>Suppose, for example, that an HTML document has the following source code:</p>

<pre>
&lt;html&gt;
 &lt;body&gt;
  &lt;h1&gt;Heading 1 With Some Text &lt;em&gt;Emphasized&lt;/em&gt;&lt;/h1&gt;
  &lt;p&gt;Paragraph with some text &lt;b&gt;bold&lt;/b&gt; and &lt;i&gt;italic&lt;/i&gt;.&lt;/p&gt;
 &lt;/body&gt;
&lt;/html&gt;
</pre>

     <p>Its HTML document tree is:</p>

<pre class='ascii-art'>
     Document Tree                Root Of

          html              Entire HTML Document
           |                        ||
           |                       \  /
           |                        \/
          body                   Content
          / \                       ||
         /   \                     \  /
       h1     p                     \/
       |     / \
       |    /   \
      em   b     i
</pre>

     <p>The <code>html</code> element is the root (i.e., origin) of the HTML document, itself. The <code>body</code> element is the root of content.</p>

     <p>An HTML document tree depicts and is frequently used to define the terms, parent, child, sibling, ancestor, descendant, and inheritance.</p>

     <p>A parent is an element in the same branch as, and one level above, another element in the HTML document tree. For example, in the HTML document tree above: 1.) the <code>html</code> element is the parent of the <code>body</code> element; 2.) the <code>body</code> element is the parent of the <code>h1</code> and <code>p</code> elements; 3.) the <code>h1</code> element is the parent of the <code>em</code> element; and 4.) the <code>p</code> element is the parent of the <code>b</code> and <code>i</code> elements. But, for example: 1.) the <code>h1</code> element is not the parent of the <code>b</code> and <code>i</code> elements because the <code>h1</code> element, and the <code>b</code> and <code>i</code> elements, are not in the same branch of the HTML document tree; and 2.) the <code>body</code> element is not the parent of the <code>em</code>, <code>b</code>, and <code>i</code> elements because the <code>body</code> element is more than one level above the <code>em</code>, <code>b</code>, and <code>i</code> elements in the HTML document tree.</p>

     <p>Conversely, a child is an element in the same branch as, and one level below, another element in the HTML document tree. For example, in the HTML document tree above: 1.) the <code>body</code> element is the child of the <code>html</code> element; 2.) the <code>h1</code> and <code>p</code> elements are the children of the <code>body</code> element; 3.) the <code>em</code> element is the child of the <code>h1</code> element; and 4.) the <code>b</code> and <code>i</code> elements are the children of the <code>p</code> element. But, for example: 1.) the <code>b</code> and <code>i</code> elements are not the children of the <code>h1</code> element because the <code>b</code> and <code>i</code> elements, and the <code>h1</code> element, are not in the same branch of the HTML document tree; and 2.) the <code>em</code>, <code>b</code>, and <code>i</code> elements are not the children of the <code>body</code> element because the <code>em</code>, <code>b</code>, and <code>i</code> elements are more than one level below the <code>body</code> element in the HTML document tree.</p>

     <p>Siblings are two or more elements one level below the same element in the HTML document tree. For example, in the HTML document tree above: 1.) the <code>h1</code> and <code>p</code> elements are siblings of the <code>body</code> element; and 2.) the <code>b</code> and <code>i</code> elements are siblings of the <code>p</code> element. But, for example, the <code>em</code> and <code>b</code> elements are not siblings because the <code>em</code> and <code>b</code> elements are more than one level below the same element in the HTML document tree.</p>

     <p>According to the definitions for parent, child, and sibling; 1.) a parent can have one or more children, 2.) a child has only one parent, and 3.) siblings are the children of the same parent. In other words, looking at the source code; 1.) a parent contains (i.e., encloses) one or more children, 2.) a child is contained within a single parent, and 3.) siblings are two or more children contained within the same parent.</p>

     <p>An ancestor is an element in the same branch as, and one or more levels above, another element in the HTML document tree. For example, in the HTML document tree above: 1.) the <code>html</code> element is the ancestor of the <code>body</code>, <code>h1</code>, <code>p</code>, <code>em</code>, <code>b</code>, and <code>i</code> elements; 2.) the <code>body</code> element is the ancestor of the <code>h1</code>, <code>p</code>, <code>em</code>, <code>b</code>, and <code>i</code> elements; 3.) the <code>h1</code> element is the ancestor of the <code>em</code> element; and 4.) the <code>p</code> element is the ancestor of the <code>b</code> and <code>i</code> elements. But, for example, the <code>h1</code> element is not the ancestor of the <code>b</code> and <code>i</code> elements because the <code>h1</code> element, and the <code>b</code> and <code>i</code> elements, are not in the same branch of the HTML document tree.</p>

     <p>Conversely, a descendant is an element in the same branch as, and one or more levels below, another element in the HTML document tree. For example, in the document tree above: 1.) the <code>body</code> element is the descendant of the <code>html</code> element; 2.) the <code>h1</code> and <code>p</code> elements are the descendants of the <code>body</code> and <code>html</code> elements; 3.) the <code>em</code> element is the descendant of the <code>h1</code>, <code>body</code>, and <code>html</code> elements; and 4.) the <code>b</code> and <code>i</code> elements are the descendants of the <code>p</code>, <code>body</code>, and <code>html</code> elements. But, for example, the <code>b</code> and <code>i</code> elements are not the descendants of the <code>h1</code> element because the <code>b</code> and <code>i</code> elements, and the <code>h1</code> element, are not in the same branch of the HTML document tree.</p>

     <p>According to the definitions for ancestor and descendant: 1.) ancestors include an element's parent, its parent's parent, its parent's parent's parent, etc.; and 2.) descendants includes an element's children, its children's children, and its children's children's children, etc.</p>

     <p>One of the most important aspects of CSS is inheritance. Inheritance is the transferring of style from ancestors to descendants and the receiving of style by descendants from ancestors.</p>

     <p>The W3C CSS Recommendations define which properties are inheritable and which are not inheritable. In other words, inheritance occurs at the level of a style, not at the level of a style rule. For the most part, whether or not a style is inheritable follows simple logic. For example, it makes sense that <code>font-family</code>, <code>font-variant</code>, <code>font-style</code>, <code>font-weight</code>, and <code>font-size</code> font property styles are inheritable, but that <code>margin</code>, <code>padding</code>, and <code>border</code> box model property styles are not inheritable. An inheritable style is inherited only if its property is valid for the descendant(s).</p>

     <p>Consider, for example, the following code:</p>

<pre>
&lt;p&gt;Paragraph with some text &lt;b&gt;bold&lt;/b&gt; and &lt;i&gt;italic&lt;/i&gt;.&lt;/p&gt;
</pre>

     <p>Suppose, for example, that you want the entire paragraph, including the bold and italic text, styled <code>color: red</code>. One way to accomplish this is to assign the <code>color: red</code> style to all three elements, <code>p</code>, <code>b</code>, and <code>i</code>. An easier way to accomplish this is to take advantage of inheritance. Notice in this example that the <code>p</code> element is the parent of the <code>b</code> and <code>i</code> elements. Moreover, the <code>color</code> property is inheritable and is valid for the <code>b</code> and <code>i</code> elements. Therefore, taking advantage of inheritance, the entire paragraph, including the bold and italic text, can be styled <code>color: red</code> simply by assigning the <code>color: red</code> style to the <code>p</code> parent element.</p>

     <h3><a id='important'></a>2.6. <code>!important</code> Styles</h3>

     <p>As described in <a href='#resolving'>the cascade's rules for resolving style conflicts (below)</a>, by default, when style conflicts occur, author styles override user styles. To allow user styles to override author styles, the W3C CSS Recommendations define <code>!important</code> styles. Author styles and user styles can be marked <code>!important</code>. <code>!important</code> styles override normal (i.e., non-<code>!important</code>) styles, and <code>!important</code> user styles override <code>!important</code> author styles.</p>

     <div class='note normal'>
      <ul>
       <li>That author styles can override user styles and, conversely, user styles can override author styles, defines author/user balance.</li>
       <li>In the W3C CSS1 Recommendation, <code>!important</code> author styles override <code>!important</code> user styles. In the W3C CSS2 Recommendation, <code>!important</code> user styles override <code>!important</code> author styles. Since the W3C CSS2 Recommendation supersedes the CSS1 Recommendation, current user agents should support <code>!important</code> user styles overriding <code>!important</code> author styles.</li>
      </ul>
     </div>

     <p>The marking of <code>!important</code> occurs at the level of a style, not at the level of a style rule. To mark a style <code>!important</code>, add <code>!important</code> or <code>! important</code> just inside the style declaration ending semicolon <code>(;)</code>. For example, in the following style rule, the <code>font-family: arial</code>, <code>padding: 0px</code>, and <code>border: 2px red solid</code> styles are marked <code>!important</code>:</p>

<pre>
body {
  font-family: arial !important;
  font-size: 15px;
  padding: 0px ! important;
  background-color: #eee;
  border: 2px #f00 solid !important;
}
</pre>

     <p>A style with a shorthand property marked <code>!important</code> marks all of its subproperties <code>!important</code>.</p>

     <h3><a id='syntax'></a>2.7. Style Rule Syntax And Conventions</h3>

     <div class='note normal'>Instead of remembering the syntax described below, it is recommended that you: 1.) use lowercase letters (a-z) throughout your markup and style sheets; and 2.) use the hyphen (-) character to separate multiple concatenated words for the value assigned to the <code>class</code> attribute, which corresponds to the class-name selector (e.g., <code>class=&quot;word-word-word&quot;</code> and <code>.word-word-word</code>). This convention conforms with valid HTML and valid CSS.</div>

     <ul>
      <li>The order of style rules in a style sheet does not matter except for the order of style rules with pseudo-classes as selectors.
       <div class='note normal'>Due to <a href='#resolving'>the cascade's rules for resolving style conflicts (below)</a>, specifically, if two styles have the same weight and origin, the latter specified wins, it is strongly recommended that style rules with pseudo-classes as selectors are listed in your style sheets in the following order: <code>:link</code> before <code>:visited</code> before <code>:hover</code> before <code>:active</code>, and <code>:focus</code> optional but typically after <code>:hover</code> or <code>:active</code>. If they are listed in a different order, a style assigned to a pseudo-class listed earlier in your style sheets might not be applied to content as expected because it is being overridden by a style assigned to a pseudo-class listed later in your style sheets.</div>
      </li>
      <li>Elements and pseudo-classes are not case-sensitive. For example, <code>body</code> and <code>BODY</code> are equivalent and <code>:link</code> and <code>:LINK</code> are equivalent.</li>
      <li>The value assigned to the <code>class</code> attribute, which corresponds to the class-name selector:
       <ul>
        <li>Are case-sensitive. For example, <code>class='red'</code> and <code>.RED</code> are not equivalent.</li>
        <li>Can contain letters (A-Za-z), digits (0-9), and the underscore (_) and hyphen (-) characters. Spaces and line breaks are not allowed.</li>
        <li>The first character must be a letter (A-Za-z). The first character cannot be a digit (0-9) or the underscore (_) or hyphen (-) characters.</li>
        <li>Use a single word or multiple concatenated words that preferably describe the content, not the style. For example, if keywords are to be styled <code>background-color: yellow</code>, use <code>class=&quot;keyword&quot;</code> and <code>.keyword</code>, not <code>class=&quot;yellow&quot;</code> and <code>.yellow</code>. The reason for describing the content instead of the style is that if you decide to change the style for keywords to, for example, <code>background-color: green</code>, then the value assigned to the <code>class</code> attribute, which corresponds to the class-name selector, would no longer reflect the style, which could be confusing.</li>
       </ul>
      </li>
      <li>Class-names are preceded by a period (.) character.</li>
      <li>Pseudo-classes are preceded by a colon (:) character.</li>
      <li>Properties and values are not case-sensitive. For example, <code>font-family: arial</code> and <code>FONT-FAMILY: ARIAL</code> are equivalent.</li>
      <li>Spaces and line breaks before and after declarations, properties, values, and <code>!important</code> are optional. For example, <code>{font-family:arial!important;font-size:2em}</code> and <code>{ font-family : arial<br />
!important ;<br />
font-size : 2em }</code> are equivalent.</li>
      <li>Declarations are separated by a semicolon (;) character.</li>
      <li>The order of declarations does not matter.</li>
      <li>A semicolon (;) character after a declaration block's last or only declaration is optional. For example, <code>{ font-family: arial }</code> and <code>{ font-family: arial; }</code> are equivalent.</li>
      <li>Properties and values are separated by a colon (:) character.</li>
      <li>A space between <code>!</code> and <code>important</code> is optional. For example, <code>!important</code> and <code>! important</code> are equivalent.</li>
      <li>A common convention for writing style rules places the selector and opening left curly bracket ({) character on the first line, each style on its own line indented by two space ( ) characters (shown) or a tab, and the closing right curly bracket (}) character on the last line:
<pre>
selector {
  property-one: value-one;
  property-two: value-two;
  property-three: value-three;
}
</pre>
      </li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='creating'></a>3. Creating Style Rules And Attaching Styles To Content</h2>

     <p>A style rule is the basic CSS unit attached to content for the purpose of styling content. A style rule consists of a selector and a declaration block. Syntax:</p>

<pre>
selector {
  declaration block
}
</pre>

     <p>A selector is the element(s), and/or class-name(s), and/or pseudo-class(es) to which a style rule applies. A selector is the bridge (i.e., common denominator or link) between a style rule and an HTML document via which style is attached to content.</p>

     <p>A declaration block assigns one or more styles to a selector. A declaration block consists of one or more declarations, each declaration representing a style. Syntax:</p>

<pre>
/* Declaration block with three declarations. */
selector {
  declaration-one;
  declaration-two;
  declaration-three;
}
</pre>

     <p>A declaration is a style. A declaration consists of a property and value pair. Syntax:</p>

<pre>
/* Style rule with three declarations (i.e., styles). */
selector {
  property-one: value-one;
  property-two: value-two;
  property-three: value-three;
}
</pre>

     <p>A property is a characteristic of content defined by CSS. A value is a specific option of a characteristic that can be assigned to a property. For example, the property, <code>color</code>, is a characteristic of text, and the value, <code>black</code>, is a specific option of color that can be assigned to a property, such as <code>color</code>. The colon (:) character in the declaration assigns the value to the property, thereby defining a style. The semicolon (;) character designates the end of the declaration (i.e., style), after which another declaration (i.e., style) may follow inside the declaration block. The semicolon (;) character after the last or only declaration in the declaration block is optional.</p>

     <h3><a id='elements'></a>3.1. Elements As Selectors</h3>

     <p>An element is an HTML structure type attached to content through the use of markup. Elements, including the <code>body</code> element and all of its descendants, can serve as selectors.</p>

     <h4><a id='bodyElement'></a>3.1.1. The <code>Body</code> Element As Selector And Defining A Default Style For A Web Page/Site</h4>

     <p>The <code>body</code> element is the root (i.e., origin) and ancestor of all content. Due to inheritance, the styles attached to the <code>body</code> element that are inheritable and valid for its descendants are inherited by its descendants, and, therefore, define a default style for a web page/site.</p>

     <p>To maximize the benefit of inheritance, the <code>body</code> style rule should be assigned the styles desired for the majority of a web page's/site's content. With the styles for the majority of content accounted for by the <code>body</code> style rule, the only remaining style rules needed are for the minority of content whose styles are to deviate from the web page's/site's default style.</p>

     <p>A style rule with the <code>body</code> element as selector. Syntax:</p>

<pre>
body {
  declaration block
}
</pre>

     <p>Suppose, for example, that you want the majority of a web page's/site's content styled <code>font-family: arial</code>, <code>background-color: lightgrey</code>, <code>color: black</code>, and <code>font-size: 16px</code>. The following style rule provides this:</p>

<pre>
body {
  font-family: arial;
  background-color: lightgrey;
  color: black;
  font-size: 16px;
}
</pre>

     <p>To attach the styles to content, use the <code>body</code> element in markup. Syntax:</p>

<pre>
&lt;body&gt;content&lt;/body&gt;
</pre>

     <p>The styles attached to content:</p>

<pre>
&lt;body&gt;
 body styled via the body style rule.
 &lt;h1&gt;h1 styled via the body style rule.&lt;/h1&gt;
 &lt;p&gt;p styled via the body style rule.&lt;/p&gt;
&lt;/body&gt;
</pre>

     <p>The styles applied to content: <a href='/css/css_tutorial/311_body_as_selector_defining_default_style.html' target='_blank'>3.1.1. The <code>Body</code> Element As Selector And Defining A Default Style For A Web Page/Site (learnwebcoding.com)</a>.</p>

     <h4><a id='otherElements'></a>3.1.2. Elements Other Than The <code>Body</code> Element As Selectors</h4>

     <p>Elements other than the <code>body</code> element not only can inherit styles from the <code>body</code> style rule, but can serve as selectors themselves.</p>

     <p>A style rule with an element other than the <code>body</code> element as selector. Syntax:</p>

<pre>
element {
  declaration block
}
</pre>

     <p>Suppose, for example, that in addition to wanting the majority of a web page's/site's content styled <code>font-family: arial</code>, <code>background-color: lightgrey</code>, <code>color: black</code>, and <code>font-size: 16px</code>, you also want <code>h1</code> headings styled <code>font-style: italic</code> and paragraphs styled <code>margin-left: 20px</code>. The following style rules provide this:</p>

<pre>
body {
  font-family: arial;
  background-color: lightgrey;
  color: black;
  font-size: 16px;
}
h1 {
  font-style: italic;
}
p {
  margin-left: 20px;
}
</pre>

     <p>To attach the styles to content, use the elements in markup. Syntax:</p>

<pre>
&lt;element&gt;content&lt;/element&gt;
</pre>

     <p>The styles attached to content:</p>

<pre>
&lt;body&gt;
 body styled via the body style rule.
 &lt;h1&gt;h1 styled via the body and h1 style rules.&lt;/h1&gt;
 &lt;p&gt;p styled via the body and p style rules.&lt;/p&gt;
&lt;/body&gt;
</pre>

     <p>The styles applied to content: <a href='/css/css_tutorial/312_elements_other_than_body_as_selectors.html' target='_blank'>3.1.2. Elements Other Than The <code>Body</code> Element As Selectors (learnwebcoding.com)</a>.</p>

     <h3><a id='class-names'></a>3.2. Class-Names As Selectors</h3>

     <p>Style rules with elements as selectors bind elements and styles to one another. As a result, using elements as selectors is rather restrictive for styling content in that an element's style is fixed. To provide flexibility for styling content, the W3C HTML 4.0 Recommendation defines the <code>class</code> attribute and the W3C CSS1 Recommendation defines the value assigned to it, class-name, as a selector.</p>

     <p>Class-name is an author declared name that; 1.) is assigned as the value to a <code>class</code> attribute, and 2.) is used as a selector. Style rules with class-names as selectors separate elements and styles from one another by placing an intermediary, the class-name value/selector, between them. As a result, using class-names as selectors provides the following flexibility for styling content; 1.) different instances of the same element (e.g., different instances of the <code>div</code> element) can have a different style attached to it, and, conversely, 2.) a single style can be attached to different instances of different elements.</p>

     <p>A style rule with class-name as selector. Syntax:</p>

<pre>
.class-name {
  declaration block
}
</pre>

     <p>Suppose, for example, that in addition to wanting the majority of a web page's/site's content styled <code>font-family: arial</code>, <code>background-color: lightgrey</code>, <code>color: black</code>, and <code>font-size 16px</code>, <code>h1</code> headings styled <code>font-style: italic</code>, and paragraphs styled <code>margin-left: 20px</code>, you also want some of the <code>h1</code> headings and paragraphs styled <code>color: red</code> or <code>color: blue</code>. The following style rules provide this:</p>

<pre>
body {
  font-family: arial;
  background-color: lightgrey;
  color: black;
  font-size: 16px;
}
h1 {
  font-style: italic;
}
p {
  margin-left: 20px;
}
.red {
  color: red;
}
.blue {
  color: blue;
}
</pre>

     <p>To attach the styles to content, use the <code>h1</code> and <code>p</code> elements with the <code>class</code> attribute assigned the class-name in markup. Syntax:</p>

<pre>
&lt;element class=&quot;class-name&quot;&gt;content&lt;/element&gt;
</pre>

     <p>An element with the <code>class</code> attribute assigned a class-name in markup is known as a classed element. All of the descendants of the <code>body</code> element can be classed.</p>

     <p>The styles attached to content:</p>

<pre>
&lt;body&gt;
 body styled via the body style rule.
 &lt;h1&gt;h1 styled via the body and h1 style rules.&lt;/h1&gt;
 &lt;p&gt;p styled via the body and p style rules.&lt;/p&gt;
 &lt;h1 class=&quot;red&quot;&gt;h1 styled via the body, h1, and .red style rules.&lt;/h1&gt;
 &lt;p class=&quot;red&quot;&gt;p styled via the body, p, and .red style rules.&lt;/p&gt;
 &lt;h1 class=&quot;blue&quot;&gt;h1 styled via the body, h1, and .blue style rules.&lt;/h1&gt;
 &lt;p class=&quot;blue&quot;&gt;p styled via the body, p, and .blue style rules.&lt;/p&gt;
&lt;/body&gt;
</pre>

     <p>The styles applied to content: <a href='/css/css_tutorial/32_classnames_as_selectors.html' target='_blank'>3.2. Class-Names As Selectors (learnwebcoding.com)</a>.</p>

     <p>Suppose, for example, that you want text styled with all possible combinations of <code>background-color: yellow</code>, <code>margin-left: 20px</code>, and <code>border: 1px solid black</code>. There are two ways to accomplish this.</p>

     <p>The first is to create a style rule for each possible combination of styles. The following style rules, seven total, provide this:</p>

<pre>
.background-color { background-color: yellow; }
.background-color-margin-left { background-color: yellow; margin-left: 20px; }
.background-color-border { background-color: yellow; border: 1px solid black; }
.background-color-margin-left-border { background-color: yellow; margin-left: 20px; border: 1px solid black; }
.margin-left { margin-left: 20px; }
.margin-left-border { margin-left: 20px; border: 1px solid black; }
.border { border: 1px solid black; }
</pre>

     <p>The styles attached to content:</p>

<pre>
&lt;p class=&quot;background-color&quot;&gt;p styled via the .background-color style rule.&lt;/p&gt;
&lt;p class=&quot;background-color-margin-left&quot;&gt;p styled via the .background-color-margin-left style rule.&lt;/p&gt;
&lt;p class=&quot;background-color-border&quot;&gt;p styled via the .background-color-border style rule.&lt;/p&gt;
&lt;p class=&quot;background-color-margin-left-border&quot;&gt;p styled via the .background-color-margin-left-border style rule.&lt;/p&gt;
&lt;p class=&quot;margin-left&quot;&gt;p styled via the .margin-left style rule.&lt;/p&gt;
&lt;p class=&quot;margin-left-border&quot;&gt;p styled via the .margin-left-border style rule.&lt;/p&gt;
&lt;p class=&quot;border&quot;&gt;p styled via the .border style rule.&lt;/p&gt;
</pre>

     <p>The styles applied to content: <a href='/css/css_tutorial/32_classnames_representing_multiple_styles_as_selectors.html' target='_blank'>3.2. Class-Names Representing Multiple Styles As Selectors (learnwebcoding.com)</a>.</p>

     <p>The second is to take advantage that the <code>class</code> attribute can be assigned multiple space separated class-names in markup. Syntax:</p>

<pre>
&lt;element class=&quot;class-name-one class-name-two class-name-three&quot;&gt;content&lt;/element&gt;
</pre>

     <p>When the <code>class</code> attribute is assigned multiple class-names, all of the styles associated with all of the assigned class-names are applied to the content. Taking advantage of this, instead of creating a style rule for each possible combination of styles, it is only necessary to create a style rule for each individual style. The following style rules, only three total, provide this:</p>

<pre>
.background-color {
  background-color: yellow;
}
.margin-left {
  margin-left: 20px;
}
.border {
  border: 1px solid black;
}
</pre>

     <p>The styles attached to content:</p>

<pre>
&lt;p class=&quot;background-color&quot;&gt;p styled via the .background-color style rule.&lt;/p&gt;
&lt;p class=&quot;background-color margin-left&quot;&gt;p styled via the .background-color and .margin-left style rules.&lt;/p&gt;
&lt;p class=&quot;background-color border&quot;&gt;p styled via the .background-color and .border style rules.&lt;/p&gt;
&lt;p class=&quot;background-color margin-left border&quot;&gt;p styled via the .background-color, .margin-left, and .border style rules.&lt;/p&gt;
&lt;p class=&quot;margin-left&quot;&gt;p styled via the .margin-left style rule.&lt;/p&gt;
&lt;p class=&quot;margin-left border&quot;&gt;p styled via the .margin-left and .border style rules.&lt;/p&gt;
&lt;p class=&quot;border&quot;&gt;p styled via the .border style rule.&lt;/p&gt;
</pre>

     <p>The styles applied to content: <a href='/css/css_tutorial/32_classnames_representing_single_styles_as_selectors.html' target='_blank'>3.2. Class-Names Representing Single Styles As Selectors (learnwebcoding.com)</a>.</p>

     <h4><a id='generic'></a>3.2.1. Classing The Generic Inline <code>Span</code> Element And The Generic Block-Level <code>Div</code> Element</h4>

     <p>The W3C HTML Recommendations define two generic elements; 1.) a generic inline element, <code>span</code>, and 2.) a generic block-level element, <code>div</code>. Generic, in this context, means stripped of all style except that required to define the <code>span</code> element as an inline element and the <code>div</code> element as a block-level element. In other words, the <code>span</code> element is a minimally structured inline element, and the <code>div</code> element is a minimally structured block-level element.</p>

     <p>Being blank canvases, so to speak, the <code>span</code> and <code>div</code> elements are well suited for styling content when removing the structural information from a structured (i.e., nongeneric) element is counterproductive or cannot be accomplished to satisfaction.</p>

     <p>Suppose, for example, that you want keywords styled <code>background-color: yellow</code>. The following style rule provides this:</p>

<pre>
.keyword {
  background-color: yellow;
}
</pre>

     <p>Classing the generic inline <code>span</code> element is well suited for styling keywords. To class the <code>span</code> element, use the <code>span</code> element with the <code>class</code> attribute assigned the class-name in markup. The style attached to content:</p>

<pre>
&lt;p&gt;The keyword in this sentence is &lt;span class=&quot;keyword&quot;&gt;me&lt;/span&gt; styled via the .keyword style rule.&lt;/p&gt;
</pre>

     <p>The style applied to content: <a href='/css/css_tutorial/321_classing_generic_inline_span_element.html' target='_blank'>3.2.1. Classing The Generic Inline <code>Span</code> Element (learnwebcoding.com)</a>.</p>

     <p>Suppose, for example, that you want to create a tableless three column web page layout. The following style rules provide this (<code>background-color</code> and <code>height</code> added solely for aesthetics):</p>

<pre>
.sidebar-left {
  float: left;
  width: 20%;
  background-color: #fcc;
  height: 500px;
}
.main {
  float: left;
  width: 60%;
  background-color: #cfc;
  height: 500px;
}
.sidebar-right {
  float: left;
  width: 20%;
  background-color: #ccf;
  height: 500px;
}
</pre>

     <p>Classing the generic block-level <code>div</code> element is well suited for creating a tableless multicolumn web page layout. To class the <code>div</code> element, use the <code>div</code> element with the <code>class</code> attribute assigned the class-name in markup. The styles attached to content:</p>

<pre>
&lt;div class=&quot;sidebar-left&quot;&gt;Left sidebar styled via the .sidebar-left style rule.&lt;/div&gt;
&lt;div class=&quot;main&quot;&gt;Main section styled via the .main style rule.&lt;/div&gt;
&lt;div class=&quot;sidebar-right&quot;&gt;Right sidebar styled via the .sidebar-right style rule.&lt;/div&gt;
</pre>

     <p>The styles applied to content: <a href='/css/css_tutorial/321_classing_generic_block_level_div_element.html' target='_blank'>3.2.1. Classing The Generic Block-Level <code>Div</code> Element (learnwebcoding.com)</a>.</p>

     <div class='note important'>Web design using structured (i.e., nongeneric) elements is known as designing by structure. Web design using classed generic <code>span</code> and <code>div</code> elements is known as designing by style. Despite the flexibility and control that designing by style provides, it is strongly recommended that authors design by structure; 1.) it ensures that your web pages are structurally presentable 
in user agents that do not support style or have support for style disabled, and 2.) user styles are practical only if the structured elements are present and can be used as selectors.</div>

     <h3><a id='pseudo'></a>3.3. Pseudo-Classes As Selectors</h3>

     <p>The W3C CSS Recommendations define a mechanism for attaching style to content based on the content's state with respect to user interaction with the content. This mechanism, reminiscent of the <code>class</code> attribute, but HTML independent, uses selectors known as pseudo-classes. The W3C CSS2 Recommendation divides pseudo-classes into two types; 1.) link pseudo-classes, and 2.) dynamic pseudo-classes.</p>

     <p>The W3C CSS2 Recommendation defines two link pseudo-classes. The link pseudo-classes attach style to links based on the link's state with respect to user interaction with the links as follows:</p>

     <table>
      <caption>Link Pseudo-Classes</caption>
      <thead>
       <tr>
        <th>Link Pseudo-Class</th>
        <th>Link State</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td><code>:link</code></td>
        <td>Unvisited.</td>
       </tr>
       <tr>
        <td><code>:visited</code></td>
        <td>Visited.</td>
       </tr>
      </tbody>
     </table>

     <p>The W3C CSS2 Recommendation defines three dynamic pseudo-classes. The dynamic pseudo-classes attach style to content (which, by default, includes links) based on the content's state with respect to user interaction with the content as follows:</p>

     <table>
      <caption>Dynamic Pseudo-Classes</caption>
      <thead>
       <tr>
        <th>Dynamic Pseudo-Class</th>
        <th>Content State</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td><code>:hover</code></td>
        <td>With the mouse cursor placed over it.</td>
       </tr>
       <tr>
        <td><code>:focus</code></td>
        <td>Ready to accept input.</td>
       </tr>
       <tr>
        <td><code>:active</code></td>
        <td>Between the mouse down click and the mouse up click.</td>
       </tr>
      </tbody>
     </table>

     <p>Style rules with pseudo-classes as selectors. Syntax:</p>

<pre>
:link {
  declaration block
}
:visited {
  declaration block
}
:hover {
  declaration block
}
:focus {
  declaration block
}
:active {
  declaration block
}
</pre>

     <p>Which, because user agents attach the pseudo-classes to links by default, are equivalent to:</p>

<pre>
a:link {
  declaration block
}
a:visited {
  declaration block
}
a:hover {
  declaration block
}
a:focus {
  declaration block
}
a:active {
  declaration block
}
</pre>
	
     <p>To assign a style to all links regardless their state, either assign the style to each pseudo-class, or assign the style to the <code>a</code> element.</p>

     <p>Suppose, for example, that you want all links styled <code>font-style: italic</code>, unvisited links styled <code>text-decoration: underline</code>, visited links styled <code>color: silver</code> and <code>text-decoration: underline</code>, hover links styled <code>color: silver</code> and <code>text-decoration: none</code>, and active links styled <code>color: lime</code> and <code>text-decoration: none</code>. The following style rules provide this:</p>

<pre>
a {
  font-style: italic;
}
a:link {
  text-decoration: underline;
}
a:visited {
  color: silver;
  text-decoration: underline;
}
a:hover {
  color: silver;
  text-decoration: none;
}
a:active {
  color: lime;
  text-decoration: none;
}
</pre>

     <div class='note normal'>Due to <a href='#resolving'>the cascade's rules for resolving style conflicts (below)</a>, specifically, if two styles have the same weight and origin, the latter specified wins, it is strongly recommended that style rules with pseudo-classes as selectors are listed in your style sheets in the following order: <code>:link</code> before <code>:visited</code> before <code>:hover</code> before <code>:active</code>, and <code>:focus</code> optional but typically after <code>:hover</code> or <code>:active</code>. If they are listed in a different order, a style assigned to a pseudo-class listed earlier in your style sheets might not be applied to content as expected because it is being overridden by a style assigned to a pseudo-class listed later in your style sheets.</div>

     <p>To attach the styles to content, use the <code>a</code> element with the <code>href</code> attribute assigned the <code>URI</code> value in markup. Syntax:</p>

<pre>
&lt;a href=&quot;URI&quot;&gt;Link text.&lt;/a&gt;
</pre>

     <div class='note normal'>The pseudo-classes are HTML independent and, therefore, do not appear in markup.</div>

     <p>The styles attached to content:</p>

<pre>
&lt;a href=&quot;dummy_web_document01.html&quot;&gt;Link 1 styled via the a, a:link, a:visited, a:hover, and a:active style rules.&lt;/a&gt;
&lt;a href=&quot;dummy_web_document02.html&quot;&gt;Link 2 styled via the a, a:link, a:visited, a:hover, and a:active style rules.&lt;/a&gt;
&lt;a href=&quot;dummy_web_document03.html&quot;&gt;Link 3 styled via the a, a:link, a:visited, a:hover, and a:active style rules.&lt;/a&gt;
</pre>

     <p>The styles applied to content: <a href='/css/css_tutorial/33_pseudo_classes_as_selectors.html' target='_blank'>3.3. Pseudo-Classes As Selectors (learnwebcoding.com)</a>.</p>

     <p>As described in <a href='#class-names'>class-names as selectors (above)</a>, all of the descendants of the <code>body</code> element can be classed. This includes links styled with the pseudo-classes.</p>

     <p>Suppose, for example, that in addition to wanting all links styled <code>font-style: italic</code>, unvisited links styled <code>text-decoration: underline</code>, visited links styled <code>color: silver</code> and <code>text-decoration: underline</code>, hover links styled <code>color: silver</code> and <code>text-decoration: none</code>, and active links styled <code>color: lime</code> and <code>text-decoration: none</code>, you also want the unvisited links styled <code>color: black</code>, <code>color: red</code>, or <code>color: blue</code>. The following style rules provide this:</p>

<pre>
a { font-style: italic; }
a:link { text-decoration: underline; }
a:visited { color: silver; text-decoration: underline; }
a:hover { color: silver; text-decoration: none; }
a:active { color: lime; text-decoration: none; }
.black { color: black; }
.red { color: red; }
.blue { color: blue; }
</pre>

     <p>To attach the styles to content, use the <code>a</code> element with; 1.) the <code>href</code> attribute assigned the <code>URI</code> value in markup, and 2.) the <code>class</code> attribute assigned the class-name in markup. Syntax:</p>

<pre>
&lt;a href=&quot;URI&quot; class=&quot;class-name&quot;&gt;Link text.&lt;/a&gt;
</pre>

     <p>The styles attached to content:</p>

<pre>
&lt;a href=&quot;dummy_web_document04.html&quot; class=&quot;black&quot;&gt;Link 4 styled via the a, a:link, a:visited, a:hover, a:active, and .black style rules.&lt;/a&gt;
&lt;a href=&quot;dummy_web_document05.html&quot; class=&quot;black&quot;&gt;Link 5 styled via the a, a:link, a:visited, a:hover, a:active, and .black style rules.&lt;/a&gt;
&lt;a href=&quot;dummy_web_document06.html&quot; class=&quot;black&quot;&gt;Link 6 styled via the a, a:link, a:visited, a:hover, a:active, and .black style rules.&lt;/a&gt;
&lt;a href=&quot;dummy_web_document07.html&quot; class=&quot;red&quot;&gt;Link 7 styled via the a, a:link, a:visited, a:hover, a:active, and .red style rules.&lt;/a&gt;
&lt;a href=&quot;dummy_web_document08.html&quot; class=&quot;red&quot;&gt;Link 8 styled via the a, a:link, a:visited, a:hover, a:active, and .red style rules.&lt;/a&gt;
&lt;a href=&quot;dummy_web_document09.html&quot; class=&quot;red&quot;&gt;Link 9 styled via the a, a:link, a:visited, a:hover, a:active, and .red style rules.&lt;/a&gt;
&lt;a href=&quot;dummy_web_document10.html&quot; class=&quot;blue&quot;&gt;Link 10 styled via the a, a:link, a:visited, a:hover, a:active, and .blue style rules.&lt;/a&gt;
&lt;a href=&quot;dummy_web_document11.html&quot; class=&quot;blue&quot;&gt;Link 11 styled via the a, a:link, a:visited, a:hover, a:active, and .blue style rules.&lt;/a&gt;
&lt;a href=&quot;dummy_web_document12.html&quot; class=&quot;blue&quot;&gt;Link 12 styled via the a, a:link, a:visited, a:hover, a:active, and .blue style rules.&lt;/a&gt;
</pre>

     <p>The styles applied to content: <a href='/css/css_tutorial/33_pseudo_classes_and_classnames_as_selectors.html' target='_blank'>3.3. Pseudo-Classes And Class-Names As Selectors (learnwebcoding.com)</a>.</p>

    <h3><a id='inline'></a>3.4. Inline Styles</h3>

     <p>An inline style is a style attached to content via the <code>style</code> attribute assigned a value whose syntax mimics that of a declaration block, minus the braces.</p>

     <p>An inline style. Syntax:</p>

<pre>
&lt;element style=&quot;property: value&quot;&gt;content&lt;/element&gt;
</pre>

     <div class='note important'>Inline styles are placed in markup, which is the least efficient way to style content. Therefore, it is strongly recommended that you do not use inline styles.</div>

     <p>Suppose, for example, that you want a paragraph styled <code>text-align: center</code>, <code>font-size: 50px</code>, and <code>margin-top: 100px</code>. The following inline style accomplishes this:</p>

<pre>
&lt;p style=&quot;text-align: center; font-size: 50px; margin-top: 100px&quot;&gt;p styled via an inline style.&lt;/p&gt;
</pre>

     <p>The styles applied to content: <a href='/css/css_tutorial/34_inline_style.html' target='_blank'>3.4. Inline Styles (learnwebcoding.com)</a>.</p>

    </section>
    <hr />
    <section>

     <h2><a id='styleSheets'></a>4. Style Sheets</h2> 

     <p>A style sheet is a collection of style rules. The W3C HTML and CSS Recommendations define three types of style sheets; 1.) embedded style sheets, 2.) external style sheets, and 3.) imported style sheets. All three types of style sheets can simultaneously style content.</p>
 
     <h3><a id='embedded'></a>4.1. Embedded Style Sheets</h3>

     <p>An embedded style sheet is a collection of style rules located inside (i.e., embedded within) an HTML document. Specifically, an embedded style sheet is one or more style rules inside <code>&lt;style type=&quot;text/css&quot;&gt;&lt;/style&gt;</code> tags placed in the <code>&lt;head&gt;&lt;/head&gt;</code> section of an HTML document. Syntax:</p>

<pre>
&lt;html&gt;
 &lt;head&gt;
  &lt;title&gt;&lt;/title&gt;
  &lt;style type=&quot;text/css&quot;&gt;
  ...list style rules here...
  &lt;/style&gt;
 &lt;/head&gt;
 &lt;body&gt;
  ...content here...
 &lt;/body&gt;
&lt;/html&gt;
</pre>

     <p>The styles of an embedded style sheet are available to style, and are only available to style, the content of the HTML document in which the embedded style sheet is located.</p>

     <h3><a id='external'></a>4.2. External Style Sheets</h3>

     <p>An external style sheet is collection of style rules located outside (i.e., external to) an HTML document. Specifically, an external style sheet is one or more style rules in a text file having a <span class='filename'>.css</span> file extension.</p>

     <p>For the styles of an external style sheet to style content, the external style sheet must be associated with (i.e., linked to) an HTML document. To link an external style sheet to an HTML document, add the line, <code>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;anyFileName.css&quot; /&gt;</code>, where the value assigned to the <code>href</code> attribute is an absolute or relative path to an external style sheet, <span class='filename'>anyFileName.css</span>, to the <code>&lt;head&gt;&lt;/head&gt;</code> section of an HTML document as follows:</p>

<pre>
&lt;html&gt;
 &lt;head&gt;
  &lt;title&gt;&lt;/title&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;anyFileName.css&quot; /&gt;
 &lt;/head&gt;
 &lt;body&gt;
  ...content here...
 &lt;/body&gt;
&lt;/html&gt;
</pre>

     <p>An external style sheet can be linked to multiple HTML documents, including those of an entire web site. To link an external style sheet to multiple HTML documents, add the line, <code>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;anyFileName.css&quot; /&gt;</code>, where the value assigned to the <code>href</code> attribute is an absolute or relative path to an external style sheet, <span class='filename'>anyFileName.css</span>, to the <code>&lt;head&gt;&lt;/head&gt;</code> section of each HTML document.</p>

     <p>Conversely, multiple external style sheets can be linked to an HTML document. To link multiple external style sheets to an HTML document, add the line, <code>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;anyFileName.css&quot; /&gt;</code>, where the value assigned to the <code>href</code> attribute is an absolute or relative path to an external style sheet, <span class='filename'>anyFileName.css</span>, to the <code>&lt;head&gt;&lt;/head&gt;</code> section of an HTML document for each external style sheet to be linked. In the following example, three external style sheets, <span class='filename'>anyFileNameOne.css</span>, <span class='filename'>anyFileNameTwo.css</span>, and <span class='filename'>anyFileNameThree.css</span>, are linked to an HTML document:</p>

<pre>
&lt;html&gt;
 &lt;head&gt;
  &lt;title&gt;&lt;/title&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;anyFileNameOne.css&quot; /&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;anyFileNameTwo.css&quot; /&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;anyFileNameThree.css&quot; /&gt;
 &lt;/head&gt;
 &lt;body&gt;
  ...content here...
 &lt;/body&gt;
&lt;/html&gt;
</pre>

     <div class='note normal'>The ability to link multiple external style sheets to an HTML document provides modularity (i.e., authors, instead of needing to create a single large style sheet encompassing an entire web page/site, can think of their web pages/sites as consisting of sections (i.e., modules) each getting its own module-specific style sheet).</div>

     <p>The styles of an external style sheet are available to style the content of each HTML document to which the external style sheet is linked.</p>

     <h3><a id='advantage'></a>4.3. The Advantage Of External Style Sheets Over Embedded Style Sheets</h3>

     <p>Suppose, for example, that your web site has 50 web pages and you want the majority of the web site's content styled <code>font-family: arial</code>. A <code>body</code> style rule assigned the <code>font-family: arial</code> style provides this.</p>

     <p>Implementing this style sitewide with embedded style sheets involves creating an embedded style sheet containing the <code>body</code> style rule, and then pasting the embedded style sheet into the <code>&lt;head&gt;&lt;/head&gt;</code> section of each of the web site's 50 web pages. Implementing this style sitewide with external style sheets involves creating an external style sheet, <span class='filename'>anyFileName.css</span>, containing the <code>body</code> style rule, and than pasting the line, <code>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;anyFileName.css&quot; /&gt;</code>, where the value assigned to the <code>href</code> attribute is an absolute or relative path to the external style sheet, <span class='filename'>anyFileName.css</span>, into the <code>&lt;head&gt;&lt;/head&gt;</code> section of each of the web site's 50 web pages. Hence, the amount of work required to implement the style sitewide with external style sheets or embedded style sheets is roughly the same.</p>

     <p>But what if you decide to change the majority of the web site's content from <code>font-family: arial</code> to <code>font-family: verdana</code>? With embedded style sheets, because styles are embedded within each web page, this change would involve editing each of the web site's 50 web pages. With external style sheets, because styles are centrally located in a single file, this change would involve editing just one file, the external style sheet, <span class='filename'>anyFileName.css</span>. Hence, the advantage of external style sheets over embedded style sheets: editing styles sitewide is much easier with external style sheets than embedded style sheets.</p>

     <h3><a id='imported'></a>4.4. Imported Style Sheets</h3>

     <p>An imported style sheet is an external style sheet inserted (i.e., imported) into an embedded style sheet, external style sheet, or imported style sheet. Only external style sheets can be imported. The W3C CSS Recommendations define an <code>@import</code> statement that: 1.) indicates an absolute or relative path to the external style sheet, <span class='filename'>anyFileName.css</span>, to be imported; and 2.) indicates where the imported style sheet is to be inserted, which is in the place of the <code>@import</code> statement, itself. Syntax:</p>

<pre>
@import &quot;anyFileName.css&quot;;
</pre>

     <p>Which is equivalent to:</p>

<pre>
@import url(&quot;anyFileName.css&quot;);
</pre>

     <p>Multiple external style sheets can be imported into a style sheet. To import multiple external style sheets into a style sheet, create an <code>@import</code> statement for each external style sheet to be imported.</p>

     <p>The <code>@import</code> statements function only if they are listed at the top of a style sheet. In other words, user agents are to respect <code>@import</code> statements listed at the top of a style sheet and are to ignore <code>@import</code> statements listed in a style sheet after a style rule. Consider, for example, the five <code>@import</code> statements in the following embedded style sheet:</p>

<pre>
&lt;html&gt;
 &lt;head&gt;
  &lt;title&gt;&lt;/title&gt;
  &lt;style type=&quot;text/css&quot;&gt;
  @import &quot;anyFileNameOne.css&quot;; /* Functions. */
  @import &quot;anyFileNameTwo.css&quot;; /* Functions. */
  body {
    font-family: arial;
    background-color: #fff;
    color: #000;
    font-size: 15px;
  }
  h1 {
    text-decoration: underline;
  }
  @import &quot;anyFileNameThree.css&quot;; /* Ignored. */
  p {
    margin-left: 20px;
  }
  .red {
    color: #f00;
  }
  @import &quot;anyFileNameFour.css&quot;; /* Ignored. */
  @import &quot;anyFileNameFive.css&quot;; /* Ignored. */
  .blue {
    color: #00f;
  }
  &lt;/style&gt;
 &lt;/head&gt;
 &lt;body&gt;
  ...content here...
 &lt;/body&gt;
&lt;/html&gt;
</pre>

     <p>The first and second <code>@import</code> statements above are listed at the top of the style sheet and, therefore, function. The third, fourth, and fifth <code>@import</code> statements above are listed after a style rule (the <code>body</code> style rule) and, therefore, are ignored.</p>

     <p>An imported style sheet can have one or more external style sheets imported into it, which can have one or more external style sheets imported into it, which can have one or more external style sheets imported into it, etc.</p>

    </section>
    <hr />
    <section>

     <h2><a id='userAgentAuthorUser'></a>5. User Agent Styles, Author Styles, And User Styles</h2> 

     <p>The W3C CSS Recommendations define three sources of style; 1.) user agents, 2.) authors, and 3.) users. All three sources of style can simultaneously style content.</p>

     <h3><a id='userAgentStyles'></a>5.1. User Agent Styles</h3>

     <p>Few, including those who consider themselves CSS and/or HTML experts, realize that user agents have a style sheet built into them whose styles: 1.) define and provide the structure types associated with HTML elements; 2.) are merged with author styles, if present, and user styles, if present, in styling content; and 3.) in the absence of author styles and user styles, are the only (i.e., default) styles applied to content; hence, the term, user agent default styles, which is frequently shortened to user agent styles.</p>

     <p>Of all the valid properties for a given element, user agent styles use only those required to impart a basic structure type upon an element. In this respect, it can be said that HTML is a web language in which a minimum of styles, defined and provided by user agents, crudely layout (i.e., structure) content, and CSS is a web language in which additional styles, defined and provided by authors and users, refine the layout/presentation (i.e., style) of content.</p>

     <p>The W3C CSS2 Recommendation includes a <a href='http://www.w3.org/TR/CSS2/sample.html'>default style sheet for HTML 4 (w3.org)</a> that user agent vendors are encouraged to implement. User agent vendors, however, are free to create their own user agent styles. For example, the user agent styles of Opera 6 - 8 appear to include an ~8 pixel padding assigned to its <code>body</code> style rule, and the user agent styles of Internet Explorer 5 - 7 appear to include an ~5 pixel padding top assigned to its list style types disc, circle, square, and none. User agents whose user agent styles differ significantly from the norm, however, have a negative impact on cross-browser compatibility and are denounced by authors and users. Accordingly, the differences between user agent styles have gradually decreased over time.</p>

     <p>Besides acquiring user agent styles from their built-in style sheet, most user agents acquire additional user agent styles from their Options/Preferences. These additional user agent styles, which users can change, typically include fonts and colors for the <code>body</code> element and the link pseudo-classes. For example, in Firefox 30, click <kbd>Menu | Options | Content</kbd>. The Fonts &amp; Colors fieldset appears:</p>

     <img src='/images/css_tutorial/firefox_30_user_agent_default_styles_arrow_534x488.gif' alt='Firefox 30 Fonts &amp; Colors Fieldset' />

     <div class='note normal'>In some user agents, the Options/Preferences related to style behave as if editing the user agent styles. In other user agents, the Options/Preferences related to style behave as if instantiating user styles with the nondefault styles selected marked <code>!important</code>. Lastly, in some user agents, the Options/Preferences related to style include a setting that appears to toggle whether the Options/Preferences related to style behave as if editing the user agent styles, or as if instantiating user styles with the nondefault styles selected marked <code>!important</code>. Further discussion of this topic is beyond the scope of this page.</div>

     <h3><a id='authorStyles'></a>5.2. Author Styles</h3>

     <p>Author styles are styles written by an author. As illustrated below, author styles include embedded style sheets, external style sheets, imported styles sheets, and inline styles:</p>

<pre class='ascii-art'>
       Embedded   External   Imported
       Style      Style      Style       Inline
       Sheets     Sheets     Sheets      Styles
              \       \         /       /
                 \     \       /     /
                    \   \     /   /
                       \ \   / /
                          \ /
                           |
                           |
                           |
                     Author Styles
</pre>

     <h3><a id='userStyles'></a>5.3. User Styles</h3>

     <p>User styles are styles written by a user. As illustrated below, user styles include external style sheets and imported style sheets:</p>

<pre class='ascii-art'>
                External         Imported
                Style            Style
                Sheets           Sheets
                      \         /
                        \     /
                          \ /
                           |
                           |
                           |
                      User Styles
</pre>

     <p>User styles allow users, particularly those with accessibility requirements, to style content. User styles require a user agent whose Options/Preferences allow the user to link their own external style sheet to content. For example, in Opera 12.17, click <kbd>Menu | Settings | Preferences | Advanced | Content | Style Options</kbd>. The My style sheet field appears:</p>

     <img src='/images/css_tutorial/opera_1217_my_style_sheet_arrow_374x319.gif' alt='Opera 12.17 My Style Sheet Field' />

    </section>
    <hr />
    <section>

     <h2><a id='theCascade'></a>6. The Cascade</h2>

     <p>The most important but least understood aspect of CSS is the cascade. The cascade is a component of a user agent. In short, for each web page, the cascade: 1.) processes author styles, if present, into an author styles list, and user styles, if present, into a user styles list; 2.) merges the user agent styles, author styles list, if present, and user style list, if present; 3.) resolves style conflicts; and 4.) creates a master style sheet whose styles the user agent's rendering engine applies to content in the web browser window.</p>

     <p>The cascade also: 1.) allows user agent styles, author styles, and user styles to simultaneously style content; 2.) allows author styles and user styles to be partial styles (i.e., author styles and user styles need only assign the styles to add to, or change from, the user agents styles); 3.) provides modularity (i.e., authors, instead of needing to create a single large style sheet encompassing an entire web page/site, can think of their web pages/sites as consisting of sections (i.e., modules) each getting its own module-specific style sheet); and 4.) provides author/user balance (i.e., a mechanism for author styles to override user styles and, conversely, for user styles to override author styles).</p>

     <p>The W3C CSS Recommendations define the cascade. User agent vendors, however, are free to create their own version of the cascade. User agents whose version of the cascade differs significantly from the norm, however, have a negative impact on cross-browser compatibility and are denounced by authors and users. Accordingly, the differences between user agent versions of the cascade have gradually decreased over time.</p>

     <p>Perhaps some of the misunderstandings about the cascade comes from the W3C's own language. Consider, for example, the following two sentences describing one of the cascade's rules for resolving style conflicts, where <q>reader</q> means user, and <q>UA's default values</q> and <q>the default style sheet</q> mean user agent styles:</p>

     <p><q><i>Sort by origin: the author's style sheets override the reader's style sheet which override the UA's default values.</i></q> - <cite>W3C CSS1 Recommendation</cite>.</p>

     <p><q><i>The primary sort of the declarations is by weight and origin: for normal declarations, author style sheets override user style sheets which override the default style sheet.</i></q> - <cite>W3C CSS2 Recommendation</cite>.</p>

     <p>The problem with the W3C language above is that the cascade performs overriding at the level of a style, not at the level of a style sheet as the W3C language above suggests. In fact, if the cascade performed overriding at the level of a style sheet, as the W3C language above suggests, then author styles and user style would cancel out the user agent styles that define and provide the structure types associated with HTML elements, and, as a result, author styles and user styles could not be partial styles for they would need to include the user agent styles they just cancelled out.</p>

     <p>Similarly, consider the following two sentences describing another one of the cascade's rules for resolving style conflicts, where <q>rules</q> means style rules:</p>

     <p><q><i>Sort by order specified: if two rules have the same weight, the latter specified wins.</i></q> - <cite>W3C CSS1 Recommendation</cite>.</p>

     <p><q><i>Finally, sort by order specified: if two rules have the same weight, origin and specificity, the latter specified wins.</i></q> - <cite>W3C CSS2 Recommendation</cite>.</p>

     <p>The problem with the W3C language above is that the cascade picks winners at the level of a style, not at the level of a style rule as the W3C language above suggests. In fact, if the cascade picked winners at the level of a style rule, as the W3C language above suggests, then author styles and user styles would cancel out the user agent styles that define and provide the structure types associated with HTML elements, and, as a result, author styles and user styles could not be partial styles for they would need to include the user agent styles they just cancelled out.</p>

     <p>Besides the misunderstandings about the cascade that might arise from the W3C's own language, many who consider themselves CSS experts spread misconceptions about the cascade. The most common misconception about the cascade is that the styles of embedded style sheets, being <q>closer to content,</q> necessarily override the styles of external style sheets, which are <q>further from content.</q></p>

     <p>The cascade is not that difficult to understand. It is unfortunate, though, the poor language and misconceptions that have been associated with it. So, before starting, it is strongly recommended that you disabuse yourself of any preconceived notions about the cascade so that a clear understanding can be built unencumbered from scratch.</p>

     <h3><a id='overviewCascade'></a>6.1. Overview Of The Cascade</h3>

     <p>The following diagrams provide an overview of the cascade. For each web page, the cascade: 1.) processes author styles, if present, into an author styles list, and user styles, if present, into a user styles list; 2.) merges the user agent styles, author styles list, if present, and user style list, if present; 3.) resolves style conflicts; and 4.) creates a master style sheet.</p>

     <div class='note normal'>
      <ul>
       <li><q>Author styles list</q> and <q>user styles list</q> are not W3C terms/concepts. I created these terms/concepts to facilitate an explanation and understanding of the cascade.</li>
       <li>For information on:
        <ul>
         <li>user agent styles, see <a href='#userAgentStyles'>user agent styles (above)</a>.</li>
         <li>author styles, see <a href='#authorStyles'>author styles (above)</a>.</li>
         <li>user styles, see <a href='#userStyles'>user styles (above)</a>.</li>
        </ul>
       </li>
      </ul>
     </div>

     <h4><a id='authorPresUserPres'></a>6.1.1. The Cascade By Diagram: Author Styles Present And User Styles Present</h4>

<pre class='ascii-art'>
                      Author      User
                      Styles      Styles
                        |           |
                        |           |
                        |           |
        User          Author      User
        Agent         Styles      Styles
        Styles        List        List
               \        |        /
                 \      |      /
                   \    |    /
                     \  |  /
                       \|/
              Resolve Style Conflicts
                        |
                        |
                        |
                Master Style Sheet
</pre>

     <h4><a id='authorPresUserAbs'></a>6.1.2. The Cascade By Diagram: Author Styles Present And User Styles Absent</h4>

<pre class='ascii-art'>
                              Author
                              Styles
                                |
                                |
                                |
            User              Author
            Agent             Styles
            Styles            List
                   \         /
                     \     /
                       \ /
              Resolve Style Conflicts
                        |
                        |
                        |
                Master Style Sheet
</pre>

     <h4><a id='authorAbsUserPres'></a>6.1.3. The Cascade By Diagram: Author Styles Absent And User Styles Present</h4>

<pre class='ascii-art'>
                              User
                              Styles
                                |
                                |
                                |
            User              User
            Agent             Styles
            Styles            List
                   \         /
                     \     /
                       \ /
              Resolve Style Conflicts
                        |
                        |
                        |
                Master Style Sheet
</pre>

     <h4><a id='authorAbsUserAbs'></a>6.1.4. The Cascade By Diagram: Author Styles Absent And User Styles Absent</h4>

<pre class='ascii-art'>
                      User
                      Agent
                      Styles
                        |
                        |
                        |
                Master Style Sheet
</pre>

     <h3><a id='processing'></a>6.2. The Cascade Processing Author Styles Into An Author Styles List And User Styles Into A User Styles List</h3>

     <p>For each web page, the cascade processes author styles, if present, into an author styles list, and user styles, if present, into a user styles list. As described in <a href='#resolving'>the cascade's rules for resolving style conflicts (below)</a>, the order of the styles in the author styles list and user styles list plays a role in how the cascade resolves style conflicts. Therefore, it is important to understand how the cascade processes author styles into an author styles list and user styles into a user styles list.</p>

     <p>For the cascade processing author styles into an author styles list, think of the cascade as creating a giant embedded style sheet for each web page, replacing any links to external style sheets with the external style sheets, themselves, and replacing any <code>@import</code> statements with the external style sheets to be imported, themselves. For the cascade processing user styles into a user styles list, think of the cascade as creating a giant external style sheet, replacing any <code>@import</code> statements with the external style sheets to be imported, themselves.</p>

     <p>Suppose, for example, that a web page has the following source code:</p>

     <div class='note normal'>For this example, using actual style rules is superfluous and could be confusing. Therefore, generic style rule names (e.g., style rule a) are used instead of actual style rules.</div>

<pre>
&lt;html&gt;
 &lt;head&gt;
  &lt;title&gt;&lt;/title&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;extOne.css&quot; /&gt;
  &lt;style type=&quot;text/css&quot;&gt;
   @import &quot;impTwo.css&quot;;
   style rule k
   style rule l
   style rule m
  &lt;/style&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;extTwo.css&quot; /&gt;
 &lt;/head&gt;
 &lt;body&gt;
  ...content here...
 &lt;/body&gt;
&lt;/html&gt;
</pre>

     <p>And suppose that the external style sheets, <span class='filename'>extOne.css</span> and <span class='filename'>extTwo.css</span>, and imported style sheets, <span class='filename'>impOne.css</span>, <span class='filename'>impTwo.css</span>, and <span class='filename'>impThree.css</span>, are:</p>

     <p><span class='filename'>extOne.css</span>:</p>

<pre>
@import &quot;impOne.css&quot;;
style rule d
style rule e
</pre>

     <p><span class='filename'>extTwo.css</span>:</p>

<pre>
style rule n
style rule o
style rule p
</pre>

     <p><span class='filename'>impOne.css</span>:</p>

<pre>
style rule a
style rule b
style rule c
</pre>

     <p><span class='filename'>impTwo.css</span>:</p>

<pre>
@import &quot;impThree.css&quot;;
style rule i
style rule j
</pre>

     <p><span class='filename'>impThree.css</span>:</p>

<pre>
style rule f
style rule g
style rule h
</pre>

     <p>To process the author styles into an author styles list, parse the web page's source code and replace the links to the external style sheets with the external style sheets, themselves, and replace the <code>@import</code> statements with the external style sheets to be imported, themselves, as shown below:</p>

<pre class='ascii-art'>
&lt;html&gt;
 &lt;head&gt;
  &lt;title&gt;&lt;/title&gt;
                                                                                      /style rule a
                                                               /@import &quot;impOne.css&quot;;( style rule b
                                                              /                       \style rule c
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;extOne.css&quot; /&gt;(  style rule d
                                                              \ style rule e
  &lt;style type=&quot;text/css&quot;&gt;
                                                   /style rule f
                          /@import &quot;impThree.css&quot;;( style rule g
                         /                         \style rule h
   @import &quot;impTwo.css&quot;;(  style rule i
                         \ style rule j
   style rule k
   style rule l
   style rule m
  &lt;/style&gt;
                                                              /style rule n
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;extTwo.css&quot; /&gt;( style rule o
                                                              \style rule p
 &lt;/head&gt;
 &lt;body&gt;
  ...content here...
 &lt;/body&gt;
&lt;/html&gt;
</pre>

     <p>Extracting the author styles line by line from top to bottom, the author styles list is:</p>

<pre>
style rule a
style rule b
style rule c
style rule d
style rule e
style rule f
style rule g
style rule h
style rule i
style rule j
style rule k
style rule l
style rule m
style rule n
style rule o
style rule p
</pre>

     <div class='note normal'>In this example, the embedded style sheet is preceded by an external style sheet and is followed by an external style sheet. Therefore, in this example's author styles list, the style rules of the embedded style sheet are listed between the style rules of the preceding and following external style sheets.</div>

     <h3><a id='merging'></a>6.3. The Cascade Merging The User Agent Styles, Author Styles List, User Styles List, And The Definition Of A Style Conflict</h3>

     <p>For each web page, the cascade merges (i.e., combines) the user agent styles, author styles list, if present, and user styles list, if present. That the cascade merges the user agent styles, author styles list, if present, and user styles list, if present: 1.) allows user agent styles, author styles, and user styles to simultaneously style content; and 2.) allows author styles and user styles to be partial styles (i.e., author styles and user styles need only assign the styles to add to, or change from, the user agent styles).</p>

     <p>When merging the user agent styles, author styles list, if present, and user styles list, if present, the cascade also checks for and resolves style conflicts. A style conflict is two or more styles attached to content in the same web page having the same selector, the same property, but different values. In other words, style conflicts occur at the level of a style, not at the level of a style rule or style sheet. Style conflicts can occur: 1.) between the user agent styles, and/or author styles list, and/or user styles list; and 2.) within the author styles list and/or user styles list. Style conflicts can cause styles to not be applied to content as expected. Therefore, it is important to clearly understand the definition of a style conflict.</p>

     <h4><a id='differentSelectors'></a>6.3.1. Styles With The Same Property, The Same Value, But Different Selectors: No Style Conflict</h4>

     <p>Consider, for example, the following style rules:</p>

<pre>
h1 {
  font-family: arial;
  margin-left: 1em;
}
h2 {
  font-family: arial;
  margin-left: 1em;
}
</pre>

     <p>There are four styles above; 2 x <code>font-family; arial</code>, and 2 x <code>margin-left: 1em</code>. The two <code>font-family; arial</code> styles have the same property, the same value, but different selectors. The two <code>margin-left: 1em</code> styles have the same property, the same value, but different selectors. Styles with the same property, the same value, but different selectors do not have a style conflict.</p>

     <h4><a id='differentProperties'></a>6.3.2. Styles With The Same Selector, But Different Properties: No Style Conflict</h4>

     <p>Consider, for example, the following style rules:</p>

<pre>
body {
  font-family: &quot;times new roman&quot;;
  font-size: 16px;
}
body {
  background-color: #fff;
}
body {
  color: #000;
}
</pre>

     <p>There are four styles above; 1.) <code>font-family: &quot;times new roman&quot;</code>, 2.) <code>font-size: 16px</code>, 3.) <code>background-color: #fff</code>, and 4.) <code>color: #000</code>. The styles have the same selector, but different properties. Styles with the same selector, but different properties do not have a style conflict. Moreover, their declarations can be grouped into a semicolon separated declaration block as follows:</p>

<pre>
body {
  font-family: &quot;times new roman&quot;;
  font-size: 16px;
  background-color: #fff;
  color: #000;
}
</pre>

     <h4><a id='same'></a>6.3.3. Styles With The Same Selector, The Same Property, And The Same Value: No Style Conflict</h4>

     <p>Consider, for example, the following style rules:</p>

<pre>
a:visited {
  background-color: transparent;
  color: #000;
}
a:visited {
  background-color: transparent;
  color: #000;
}
</pre>

     <p>There are four styles above; 2 x <code>background-color: transparent</code>, and 2 x <code>color: #000</code>. The two <code>background-color: transparent</code> styles have the same selector, the same property, and the same value. The <code>two color: #000</code> styles have the same selector, the same property, and the same value. Styles with the same selector, the same property, and the same value do not have a style conflict. Rather, the styles are in duplicate and their declarations can be grouped into a semicolon separated declaration block, eliminating the duplicate styles, as follows:</p>

<pre>
a:visited {
  background-color: transparent;
  color: #000;
}
</pre>

     <h4><a id='differentValues'></a>6.3.4. Styles With The Same Selector, The Same Property, But Different Values: Style Conflict</h4>

     <p>Consider, for example, the following style rules:</p>

<pre>
.special {
  font-family: tahoma;
  color: #000;
  font-size: 26px;
  border: 1px #000 solid;
}
.special {
  font-family: verdana;
  color: #000;
  border-width: 2px;
}
.special {
  font-family: consolas;
  font-size: 2em;
  border-color: #00f;
}
.special {
  font-family: courier;
  color: #fff;
  font-size: 2em;
  border-style: dotted;
}
</pre>

     <p>There are sixteen styles above; 4 x <code>font-family</code>, 3 x <code>color</code>, 3 x <code>font-size</code>, 2 x <code>border-width</code>, 2 x <code>border-color</code>, and 2 x <code>border-style</code>. The four <code>font-family</code> styles have the same selector, the same property, but four different values. The three <code>color</code> styles have the same selector, the same property, but two different values. The three <code>font-size</code> styles have the same selector, the same property, but two different values. The two <code>border-width</code> styles have the same selector, the same property, but two different values. The two <code>border-color</code> styles have the same selector, the same property, but two different values. The two <code>border-style</code> styles have the same selector, the same property, but two different values. Styles with the same selector, the same property, but different values (regardless how many different values) have a style conflict. Moreover, until the cascade resolves the style conflicts, the <code>.special</code> style rule is essentially as follows:</p>

<pre>
.special {
  font-family: ???;
  color: ???;
  font-size: ???;
  border: ??? ??? ???;
}
</pre>

     <h3><a id='resolving'></a>6.4. The Cascade's Rules For Resolving Style Conflicts</h3>

     <p>The cascade resolves style conflicts. To resolve a style conflict is to assign a style, from those attached to content in the same web page having the same selector, the same property, but different values, to a selector. In other words, just as style conflicts occur at the level of a style, not at the level of a style rule or style sheet, style conflicts are resolved at the level of a style, not at the level of a style rule or style sheet. The styles that the cascade assigns to selectors to resolve style conflicts are said to override (i.e., to overwrite, to suppress, to prevail over, to win over) the styles not assigned.</p>

     <p>The W3C CSS2 Recommendation defines the following rules for the cascade to resolve style conflicts:</p>

     <div class='note normal'>Line-through text (i.e., <s>line-through text</s>) below designates aspects of the cascade's rules for resolving style conflicts that do not pertain to this web page and are beyond the scope of this page.</div>

     <ol>
      <li><q><i>Find all declarations that apply to the element and property in question<s>, for the target media type</s>. Declarations apply if the associated selector matches the element in question.</i></q> - <cite>W3C CSS2 Recommendation</cite>.<br />
      Translation: Process author styles, if present, into an author styles list, and user styles, if present, into a user styles list. Then merge the user agent styles, author styles list, if present, and user styles list, if present, and find the style conflicts.</li>
      <li><q><i>The primary sort of the declarations is by weight and origin: for normal declarations, author style sheets override user style sheets which override the default style sheet. For '!important' declarations, user style sheets override author style sheets which override the default style sheet. '!important' declaration override normal declarations. An imported style sheet has the same origin as the style sheet that imported it.</i></q> - <cite>W3C CSS2 Recommendation</cite>.<br />
      Translation: First try to resolve style conflicts based on the weight and origin of the conflicting styles, where weight means whether a style is marked <code>!important</code> or is normal (i.e., non-<code>!important</code>), and origin means whether a style is a user agent style, author style, or user style. For normal styles, author styles override user styles which override user agent styles. For <code>!important</code> styles, user styles override author styles which override user agent styles. Regardless of origin, <code>!important</code> styles override normal styles. The origin of the styles of an imported style sheet is the same as the origin of the style sheet with the <code>@import</code> statement.
       <div class='note normal'>That author styles can override user styles and, conversely, user styles can override author styles, defines author/user balance. The combination of marking styles <code>!important</code>, and the cascade's rule for resolving style conflicts based on the weight of the conflicting styles, provides the mechanism for author/user balance.</div>
      </li>
      <li><s><q><i>The secondary sort is by specificity of selector: more specific selectors will override more general ones. Pseudo-elements and pseudo-classes are counted as normal elements and classes, respectively.</i></q> - <cite>W3C CSS2 Recommendation</cite>.</s></li>
      <li><q><i>Finally, sort by order specified: if two rules have the same weight, origin <s>and specificity</s>, the latter specified wins. Rules in imported style sheets are considered to be before any rules in the style sheet itself.</i></q> - <cite>W3C CSS2 Recommendation</cite>.<br />
      Translation: If conflicting styles have the same weight and origin, and, therefore, cannot be resolved by rule 2 above, then the styles listed later in the author styles list override the styles listed earlier in the author styles list, and the styles listed later in the user styles list override the styles listed earlier in the user styles list. Reflecting that <code>@import</code> statements function only if they are listed at the top of a style sheet, and that <code>@import</code> statements indicate where the imported style sheets are to be inserted, which is in the place of the <code>@import</code> statements, themselves, the styles of an imported style sheet are listed earlier than the styles of the style sheet with the <code>@import</code> statement.</li>
     </ol>

     <h3><a id='cascadeInAction'></a>6.5. The Firefox 30 Cascade In Action</h3>

     <p>For the Firefox 30 cascade in action example that follows: 1.) the user agent is Firefox 30; 2.) author styles are present and include an embedded style sheet and an external style sheet, but user styles are absent; and 3.) the selectors are limited to the <code>body</code>, <code>h1</code>, <code>p</code>, and <code>a</code> elements, the <code>:link</code>, <code>:visited</code>, and <code>:hover</code> pseudo-classes, and a couple class-names.</p>

     <h4><a id='ffUserAgent'></a>6.5.1. Approximating The Firefox 30 User Agent Styles</h4>

     <p>The Firefox 30 user agent styles appear to be based on the Firefox built-in style sheet <a href='http://hg.mozilla.org/mozilla-central/file/83c9853e1364/layout/style/html.css'><span class='filename'>html.css</span> (hg.mozilla.org)</a> file. Therefore, for the selectors in this example, the user agent styles from the Firefox 30 built in style sheet are:</p>

<pre>
body {
  display: block;
  margin: 8px;
}
h1 {
  display: block;
  font-size: 2em;
  font-weight: bold;
  margin: 0.67em 0;
}
p {
  display: block;
  margin: 1em 0;
}
</pre>

     <div class='note normal'>To access the Firefox built-in style sheet <span class='filename'>html.css</span> file, enter <kbd>resource://gre-resources/html.css</kbd> into the Firefox address bar and press <kbd>Enter</kbd>.</div>

     <p>Like most user agents, Firefox 30 acquires additional user agent styles from its Options/Preferences. In Firefox 30, click <kbd>Menu | Options | Content</kbd>. The Fonts &amp; Colors fieldset appears: For the selectors in this example, the user agent styles from the Firefox 30 Options are:</p>

<pre>
body {
  font-family: &quot;times new roman&quot;;
  font-size: 16px;
  background-color: #fff;
  color: #000;
}
a {
  text-decoration: underline;
}
:link {
  color: #00e;
}
:visited {
  color: #551a8b;
}
</pre>

     <p>Merging the user agent styles from the Firefox 30 built-in style sheet and from the Firefox 30 Options results in the following approximation of the Firefox 30 user agent styles for the selectors in this example:</p>

<pre>
body { display: block; margin: 8px; font-family: &quot;times new roman&quot;; font-size: 16px; background-color: #fff; color: #000; }
h1 { display: block; font-size: 2em; font-weight: bold; margin: 0.67em 0; }
p { display: block; margin: 1em 0; }
a { text-decoration: underline; }
:link { color: #00e; }
:visited { color: #551a8b; }
</pre>

     <div class='note normal'>For additional information on user agent styles, see <a href='#userAgentStyles'>user agent styles (above)</a>.</div>

     <h4><a id='ffProcessing'></a>6.5.2. The Firefox 30 Cascade Processing Author Styles Into An Author Styles List</h4>

     <p>For each web page, the cascade processes author styles, if present, into an author styles list, and user styles, if present, into a user styles list. In this example, author styles are present and include an embedded style sheet and an external style sheet, but user styles are absent. Therefore, in this example, the Firefox 30 cascade processes author styles into an author styles list, but no user styles list is generated.</p>

     <p>Suppose that the source code for the web page in this example is as follows:</p>

<pre>
&lt;html&gt;
 &lt;head&gt;
  &lt;title&gt;&lt;/title&gt;
  &lt;style type=&quot;text/css&quot;&gt;
   body { font-family: arial, verdana, &quot;times new roman&quot;; font-size: 12px; background-color: #eee; }
   h1 { text-decoration: underline; }
   p { margin-left: 1em; }
   a { font-style: italic; background-color: #fff; text-decoration: underline; }
   a:link { color: red; }
   a:visited { color: grey; }
   .special { font-size: 12px; font-family: &quot;times new roman&quot;; border: 2px #0000ff solid; padding: 0px 6px; margin-right: 10%; }
  &lt;/style&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;cascade_in_action_external_style_sheet.css&quot; /&gt;
 &lt;/head&gt;
 &lt;body&gt;
  &lt;div class=&quot;special&quot;&gt;div .special&lt;/div&gt;
  &lt;h1&gt;Heading 1&lt;/h1&gt;
  &lt;p&gt;paragraph&lt;/p&gt;
  &lt;a href=&quot;cascade_in_action_dummy_web_document1.html&quot;&gt;Link 1&lt;/a&gt;&lt;br /&gt;
  &lt;a href=&quot;cascade_in_action_dummy_web_document2.html&quot;&gt;Link 2&lt;/a&gt;&lt;br /&gt;
  &lt;a href=&quot;cascade_in_action_dummy_web_document3.html&quot;&gt;Link 3&lt;/a&gt;&lt;br /&gt;
  &lt;h1&gt;Heading 1&lt;/h1&gt;
  &lt;p&gt;paragraph&lt;/p&gt;
  &lt;p class=&quot;special&quot;&gt;paragraph .special&lt;/p&gt;
  &lt;p class=&quot;green&quot;&gt;paragraph .green&lt;/p&gt;
 &lt;/body&gt;
&lt;/html&gt;
</pre>

     <p>And suppose that the external style sheet in this example, <span class='filename'>cascade_in_action_external_style_sheet.css</span>, is:</p>

<pre>
body { font-family: tahoma, &quot;myriad web&quot;; font-size: 20px; }
h1 { font-style: italic; }
a { background-color: transparent; }
a:hover { color: maroon; }
.special { font-size: 14px; background-color: #fff; padding-top: 6px; padding-bottom: 6px; }
.green { color: #008000; }
</pre>

     <p>The Firefox 30 cascade processes the author styles in this example (i.e., the embedded style sheet and external style sheet above) into the following author styles list:</p>

<pre>
body { font-family: arial, verdana, &quot;times new roman&quot;; font-size: 12px; background-color: #eee; }
h1 { text-decoration: underline; }
p { margin-left: 1em; }
a { font-style: italic; background-color: #fff; text-decoration: underline; }
a:link { color: red; }
a:visited { color: grey; }
.special { font-size: 12px; font-family: &quot;times new roman&quot;; border: 2px #0000ff solid; padding: 0px 6px; margin-right: 10%; }
body { font-family: tahoma, &quot;myriad web&quot;; font-size: 20px; }
h1 { font-style: italic; }
a { background-color: transparent; }
a:hover { color: maroon; }
.special { font-size: 14px; background-color: #fff; padding-top: 6px; padding-bottom: 6px; }
.green { color: #008000; }
</pre>

     <div class='note normal'>For additional information on the cascade processing author styles into an author styles list, see <a href='#processing'>the cascade processing author styles into an author styles list and user styles into a user styles list (above)</a>.</div>

     <h4><a id='ffMerging'></a>6.5.3. The Firefox 30 Cascade Merging The Firefox 30 User Agent Styles, Author Styles List, And Resolving Style Conflicts</h4>

     <p>For each web page, the cascade merges the user agent styles, author styles list, if present, and user styles list, if present, and resolves style conflicts. In this example, an author styles list is present, but a user styles list is absent. Therefore, in this example, the Firefox 30 cascade merges the Firefox 30 user agent styles, author styles list, and resolves style conflicts as follows:</p>

     <p>
     Firefox 30 user agent: <code>body { display: block; margin: 8px; font-family: &quot;times new roman&quot;; font-size: 16px; background-color: #fff; color: #000; }</code><br />
     Author former: <code>body { font-family: arial, verdana, &quot;times new roman&quot;; font-size: 12px; background-color: #eee; }</code><br />
     Author latter: <code>body { font-family: tahoma, &quot;myriad web&quot;; font-size: 20px; }</code><br />
     Merged/resolved: <code>body { font-family: tahoma, &quot;myriad web&quot;; font-size: 20px; background-color: #eee; display: block; margin: 8px; color: #000; }</code>
     </p>

     <p>
     Firefox 30 user agent: <code>h1 { display: block; font-size: 2em; font-weight: bold; margin: 0.67em 0; }</code><br />
     Author former: <code>h1 { text-decoration: underline; }</code><br />
     Author latter: <code>h1 { font-style: italic; }</code><br />
     Merged/resolved: <code>h1 { font-style: italic; text-decoration: underline; display: block; font-size: 2em; font-weight: bold; margin: 0.67em 0; }</code>
     </p>

     <p>
     Firefox 30 user agent: <code>p { display: block; margin: 1em 0; }</code><br />
     Author: <code>p { margin-left: 1em; }</code><br />
     Merged/resolved: <code>p { margin: 1em 0em 1em 1em; display: block; }</code>
     </p>

     <p>
     Firefox 30 user agent: <code>a { text-decoration: underline; }</code><br />
     Author former: <code>a { font-style: italic; background-color: #fff; text-decoration: underline; }</code><br />
     Author latter: <code>a { background-color: transparent; }</code><br />
     Merged/resolved: <code>a { background-color: transparent; font-style: italic; text-decoration: underline; }</code>
     </p>

     <p>
     Firefox 30 user agent: <code>:link { color: #00e; }</code><br />
     Author: <code>a:link { color: red; }</code><br />
     Merged/resolved: <code>a:link { color: red; }</code>
     </p>

     <p>
     Firefox 30 user agent: <code>:visited { color: #551a8b; }</code><br />
     Author: <code>a:visited { color: grey; }</code><br />
     Merged/resolved: <code>a:visited { color: grey; }</code>
     </p>

     <p>
     Firefox 30 user agent: <code>.special</code> does not exist.<br />
     Author former: <code>.special { font-size: 12px; font-family: &quot;times new roman&quot;; border: 2px #00f solid; padding: 0px 6px; margin-right: 10%; }</code><br />
     Author latter: <code>.special { font-size: 14px; background-color: #fff; padding-top: 6px; padding-bottom: 6px; }</code><br />
     Merged/resolved: <code>.special { font-size: 14px; background-color: #fff; padding: 6px; font-family: &quot;times new roman&quot;; border: 2px #00f solid; margin-right: 10%; }</code>
     </p>

     <p>
     Firefox 30 user agent: <code>:hover</code> does not exist.<br />
     Author: <code>a:hover { color: maroon; }</code><br />
     Merged/resolved: <code>a:hover { color: maroon; }</code>
     </p>

     <p>
     Firefox 30 user agent: <code>.green</code> does not exist.<br />
     Author: <code>.green { color: #008000; }</code><br />
     Merged/resolved: <code>.green { color: #008000; }</code>
     </p>

     <div class='note normal'>
      <p>For additional information on:</p>
      <ul>
       <li>the cascade merging the user agent styles, author styles list, user styles list, and the definition of a style conflict, see <a href='#merging'>the cascade merging the user agent styles, author styles list, user styles list, and the definition of a style conflict (above)</a>.</li>
       <li>the cascade's rules for resolving style conflicts, see <a href='#resolving'>the cascade's rules for resolving style conflicts (above)</a>.</li>
      </ul>
     </div>

     <h4><a id='ffMaster'></a>6.5.4. The Firefox 30 Cascade Creating The Master Style Sheet</h4>

     <p>For each web page, the cascade creates a master style sheet whose styles the user agent's rendering engine applies to content in the web browser window. In this example, the Firefox 30 cascade creates the following master style sheet:</p>

<pre>
body { font-family: tahoma, &quot;myriad web&quot;; font-size: 20px; background-color: #eee; display: block; margin: 8px; color: #000; }
h1 { font-style: italic; text-decoration: underline; display: block; font-size: 2em; font-weight: bold; margin: 0.67em 0; }
p { margin: 1em 0em 1em 1em; display: block; }
a { background-color: transparent; font-style: italic; text-decoration: underline; }
a:link { color: red; }
a:visited { color: grey; }
.special { font-size: 14px; background-color: #fff; padding: 6px; font-family: &quot;times new roman&quot;; border: 2px #0000ff solid; margin-right: 10%; }
a:hover { color: maroon; }
.green { color: #008000; }
</pre>

     <div class='note normal'>As described in <a href='#syntax'>style rule syntax and conventions (above)</a>, the order of style rules in a style sheet does not matter except for the order of style rules with pseudo-classes as selectors. In the master style sheet, the order of the style rules with pseudo-classes as selectors is the same as their order in the author styles list and/or user styles list.</div>

     <h4><a id='ffApplying'></a>6.5.5. The Firefox 30 Rendering Engine Applying The Styles Of The Master Style Sheet To Content: Proof That This Is The Way CSS Works</h4>

     <p>For each web page, the cascade passes the master style sheet to the user agent's rendering engine, which applies the styles to the web page's content in the web browser window. In this example, the Firefox 30 cascade passes the master style sheet to the Firefox 30 rendering engine, which applies the styles to the web page's content in the Firefox 30 web browser window.</p>

     <p>If this web page's understanding of CSS, as represented by this example's master style sheet, is correct, particularly: 1.) that user agents have a style sheet built into them whose styles; a.) define and provide the structure types associated with HTML elements, and b.) are merged with author styles and user styles in styling content; 2.) that style conflicts occur at, and are resolved at, the level of a style; and 3.) that the styles of an external style sheet can override the styles of an embedded style sheet, then the following two web pages should appear identical in Firefox 30; 1.) <a href='/css/css_tutorial/655_cascade_in_action_page_styled_via_original_style_sheets.html' target='_blank'>6.5.5. Web Page Styled Via The Original Embedded Style Sheet And External Style Sheet (learnwebcoding.com)</a>, and 2.) <a href='/css/css_tutorial/655_cascade_in_action_page_styled_via_master_style_sheet.html' target='_blank'>6.5.5. Web Page Styled Via The Firefox 30 Cascade In Action Master Style Sheet (learnwebcoding.com)</a>.</p>

     <div class='note important'>Since the user agent in this example is Firefox 30, and, therefore, the master style sheet includes the Firefox 30 user agent styles, the appearance of the two web pages above should only be compared in Firefox 30, or in a Mozilla-based web browsers whose version of the cascade and the Gecko rendering engine is identical to that of Firefox 30. In other words, if the appearance of the two web pages above are compared in, for example, Microsoft Internet Explorer, the differences in their appearance reflects the differences between the Firefox 30 and Microsoft Internet Explorer user agent styles, not on this web page's understanding of CSS.</div>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>7. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/CSS1/'>Cascading Style Sheets, Level 1: W3C Recommendation 17 Dec 1996, Revised 11 Apr 2008 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/CSS2/'>Cascading Style Sheets Level 2 Revision 1 (CSS 2.1) Specification: W3C Recommendation 07 June 2011, Edited In Place 12 April 2016 To Point To New Work (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/CSS1/#appendix-a'>Sample Style Sheet For HTML 2.0 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/CSS2/sample.html'>Default Style Sheet For HTML 4.0 (w3.org)</a></li>
      <li><a href='http://jigsaw.w3.org/css-validator/'>W3C CSS Validation Service: Check Cascading Style Sheets (CSS) And (X)HTML Documents With Style Sheets (jigsaw.w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/REC-html32'>HTML 3.2 Reference Specification: W3C Recommendation 14-Jan-1997 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/REC-html40-971218/'>HTML 4.0 Specification: W3C Recommendation 18-Dec-1997 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/1998/REC-html40-19980424/'>HTML 4.0 Specification: W3C Recommendation, Revised On 24-Apr-1998 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/html401/'>HTML 4.01 Specification: W3C Recommendation 24 December 1999 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/2002/REC-xhtml1-20020801/'>XHTML 1.0 The Extensible HyperText Markup Language (Second Edition): A Reformulation Of HTML 4 In XML 1.0: W3C Recommendation 26 January 2000, Revised 1 August 2002 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/2001/REC-xhtml11-20010531/'>XHTML 1.1 - Module-Based XHTML: W3C Recommendation 31 May 2001 (w3.org)</a></li>
     </ul>

    </section>";
