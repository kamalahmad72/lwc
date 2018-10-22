<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/html/template_explained_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/html/template_explained.php.
 * Last reviewed/updated: 21 Oct 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

<!-- Start same content in template_download.php. -->

     <p>Learn Web Coding (LWC) consists of <a href='http://www.learnwebcoding.com/'>LWC Home (learnwebcoding.com)</a>, <a href='http://blog.learnwebcoding.com/'>LWC Blog (blog.learnwebcoding.com)</a>, and <a href='http://forums.learnwebcoding.com/'>LWC Forums (forums.learnwebcoding.com)</a>. LWC Home, LWC Blog, and LWC Forums (LWC Home/Blog/Forums) are treated as three distinct web sites with the LWC Home home page serving as the LWC home page.</p>

     <p>With the exception of specialty web pages, the <a href='/html/web_page.php'>LWC Home Template (learnwebcoding.com)</a> is the starting point for every web page at LWC Home. The LWC Home Template is mobile first, responsive, and passes the <a href='https://search.google.com/search-console/mobile-friendly'>Google Mobile-Friendly Test (search.google.com)</a>. The LWC Home Template consists of an original object-oriented PHP template system for creating a flexible and easy to maintain web site and web pages, original HTML and CSS conventions for consistently structuring and styling web page content, original object-oriented JavaScripts for breadcrumbs navigation and tools icon dropdown, a modified Bootstrap grid system and navbar, CSS compiled from Sass, valid HTML5, and valid CSS Level 3.</p>

<!-- End same content in template_download.php. -->

     <p>This web page explains and demonstrates the LWC Home Template.</p>

     <div class='note normal'>
      <ul>
       <li>To download the LWC Home Template, see <a href=''><s>Learn Web Coding Home Template Download (learnwebcoding.com)</s></a>.</li>
<!-- Start same content in css_tutorial.php. -->
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
<!-- End same content in css_tutorial.php. -->
       </li>
      </ul>
     </div>

     <h3><a id='goals'></a>1.1. LWC Home Template Goals</h3>

     <ul>
<!-- Start similar content in PHP_Template_System_Readme.txt. -->
      <li>Goal: To develop a PHP template system for creating a flexible and easy to maintain web site and web pages. This results in a web site whose content is easy to change, a web site whose content is easy to rearrange, and a web site that can accept any number of web page types.<br />
       Accomplished: The PHP template system: 1.) Allows the definition of a web page type as a web page object (WPO) in a single file, with the WPO properties representing HTML markup and attributes, and the WPO property values representing HTML attribute values and content; 2.) Allows the assignment of sitewide default WPO property values in a single file; 3.) Allows the overriding of sitewide default WPO property values with web page specific WPO property values in a single file; 4.) Allows the placement of sitewide blocks of code in separate files; 5.) Allows that some WPO properties and that some sitewide blocks of code might not be used in all web pages; 6.) Allows the creation of a web page HTML/PHP template in a single file, with HTML from <code>&lt;html&gt;</code> to <code>&lt;/html&gt;</code>, and PHP that inserts WPO property values into the HTML; 7.) Allows the definition of multiple different web page types as WPOs each in a separate file; 8.) Allows the placement of multiple different sitewide blocks of code, and the creation of multiple different variations of the sitewide blocks of code, each in a separate file; and 9.) Allows the creation of multiple different web page HTML/PHP templates each in a separate file.</li>
<!-- End similar content in PHP_Template_System_Readme.txt. -->
      <li>Goal: To be responsive. This results in web pages that are functional on devices with various viewport dimensions, including devices with small viewport dimensions such as mobile phones, and devices with large viewport dimensions such as desktop computers with widescreen monitors. In particular, this results in web pages onto which the viewport width can be substantially decreased before inducing horizontal scrolling.<br />
       Accomplished: The LWC Home Template uses fluid design techniques (LWC code) and media queries (Bootstrap code) to automatically adjust the scale/layout of content as the viewport width changes. Because of this, in web pages based on the LWC Home Template, the only content that induces horizontal scrolling is; 1.) a long uninterrupted string of characters whose width exceeds the viewport width, and 2.) a row of table cells whose minimum content width (because of uninterrupted strings of characters) exceeds the viewport width.</li>
      <li>Goal: To use the new HTML5 semantic elements where appropriate. This improves the readability/interpretability of the HTML code.<br />
       Accomplished: The LWC Home Template uses the new HTML5 semantic <code>header</code>, <code>footer</code>, <code>main</code>, <code>nav</code> and <code>section</code> elements where appropriate.</li>
      <li>Goal: To minimize the use of the HTML <code>class</code> attribute. This improved the semantics of the HTML code and results in HTML code that is much lighter, faster, and easier to write.<br />
       Accomplished: Instead of using CSS class selectors, the LWC Home Template uses CSS type selectors, descendant selectors, and child selectors where reasonable. As a result, if the LWC Home Template is being used as intended and the only thing being added to the LWC Home Template is content, then the only time the HTML <code>class</code> attribute needs to be used is for <a href='#notes'>notes (below)</a>, <a href='#listHyperlinks'>list hyperlinks (below)</a>, <a href='#formButtons'>buttons (below)</a>, and applying a <code>box-shadow</code> to <a href='#images'>images (below)</a>.</li>
      <li>Goal: To use the Compass CSS authoring framework and the Sass CSS extension language. This makes it easier to generate and maintain the CSS code.<br />
       Accomplished: Compass/Sass was used to create the <a href='/stylesheets/lwc/lwc.scss'><span class='filename'>lwc.scss</span> (learnwebcoding.com)</a> Sass file and to compile it into the style sheet <a href='/stylesheets/lwc/lwc.css'><span class='filename'>lwc.css</span> (learnwebcoding.com)</a> file, which is the style sheet for the LWC HTML code, not the Bootstrap HTML code, in the LWC Home Template.</li>
      <li>Goal: To be valid HTML5 and valid CSS Level 3. This demonstrates that the HTML and CSS code are well formed and error free.<br />
       Accomplished: The LWC Home Template is valid HTML5 per the <a href='https://validator.w3.org/'>W3C Markup Validation Service (validator.w3.org)</a> and valid CSS Level 3 per the <a href='http://jigsaw.w3.org/css-validator/'>W3C CSS Validation Service (jigsaw.w3.org)</a>. To confirm click the W3C Valid HTML5 button and the W3C Valid CSS button near the bottom of this web page.
       <div class='note normal'>In order for the LWC Home Template to validate as CSS Level 3, Bootstrap was customized and then the Bootstrap style sheet had to be edited, and the Font Awesome style sheet had to be edited. For additional information, see <a href='#customizingBootstrapStyleSheet'>customizing Bootstrap and then editing the Bootstrap style sheet (below)</a> and <a href='#editingFontAwesome'>editing the font awesome style sheet (below)</a>.</div>
      </li>
      <li>Goal: To score 100 out of 100 on the Google Mobile Website Speed Testing Tool Mobile Friendliness test. This demonstrates that the web page is well suited for devices with small viewport dimensions such as mobile phones.<br />
       Accomplished: The LWC Home Template scores 100 out of 100 on the Google Mobile Website Speed Testing Tool Mobile Friendliness test. To confirm, go to the <a href='https://testmysite.thinkwithgoogle.com/'>Google Mobile Website Speed Testing Tool (testmysite.thinkwithgoogle.com)</a>, copy and paste the <a href='/html/web_page.php'>LWC Home Template (learnwebcoding.com)</a> URI, and click Test Now. The Google Mobile Website Speed Testing Tool runs three tests; Mobile Friendliness test, Mobile Speed test, and Desktop Speed test. After the tests are run, the results are displayed.</li>
     </ul>

     <h3><a id='browserSupport'></a>1.2. Web Browser Support</h3>

     <p>Web browser support: IE10+, ED12+, FF6+, CH30+, OP17+.</p>

     <h3><a id='phpSupport'></a>1.3. PHP Support</h3>

     <p>PHP support: PHP 5.6.8+ and PHP 7+. PHP 5.6.7- not tested.</p>

     <h3><a id='abbreviations'></a>1.4. Abbreviations</h3>

     <p>The Abbreviations subsection is always the last subsection of section 1. Introduction, including; 1.) if there are other subsections in section 1. Introduction, and 2.) if the abbreviations are used prior to the Abbreviation subsection.</p>

     <ul>
      <li>Learn Web Coding Home = LWC Home = <a href='http://www.learnwebcoding.com/'>www.learnwebcoding.com</a>.</li>
      <li>Learn Web Coding Blog = LWC Blog = <a href='http://blog.learnwebcoding.com/'>blog.learnwebcoding.com</a>.</li>
      <li>Learn Web Coding Forums = LWC Forums = <a href='http://forums.learnwebcoding.com/'>forums.learnwebcoding.com</a>.</li>
      <li>Learn Web Coding = LWC = LWC Home/Blog/Forums = *.learnwebcoding.com.</li>
      <li>IE = Internet Explorer.</li>
      <li>ED = Edge = EdgeHTML rendering engine (ED12+) and/or Edge browser (ED20+).</li>
      <li>FF = Firefox.</li>
      <li>CH = Chrome.</li>
      <li>OP = Opera.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='bootstrap'></a>2. Bootstrap Usage</h2>

     <p><a href='http://getbootstrap.com/'>Bootstrap (getbootstrap.com)</a> is a responsive/mobile first HTML, CSS, and JS framework. The LWC Home Template uses three Bootstrap components, all of which are used sitewide at LWC Home/Blog/Forums:</p>

     <ul>
      <li>The <a href='http://getbootstrap.com/css/#grid'>Bootstrap grid system (getbootstrap.com)</a> for LWC content.</li>
      <li>The <a href='http://getbootstrap.com/components/#navbar'>Bootstrap navbar (getbootstrap.com)</a> for the <a href='#lwcBootstrapNavbar'>LWC Bootstrap navbar (below)</a>.</li>
      <li>The <a href='http://getbootstrap.com/css/#responsive-utilities'>Bootstrap responsive utilities (getbootstrap.com)</a> for the <a href='#lwcBootstrapNavbar'>LWC Bootstrap navbar (below)</a>.</li>
     </ul>

     <h3><a id='customizingBootstrapStyleSheet'></a>2.1. Customizing Bootstrap And Then Editing The Bootstrap Style Sheet</h3>

     <p>Bootstrap styles can interfere with author styles, which leaves four options; 1.) use the Bootstrap styles, 2.) eliminate the Bootstrap styles, 3.) supplement/override the Bootstrap styles, or 4.) some combination of 1 through 3.</p>

     <p>The Bootstrap v3.3.7 non-minified style sheet packaged with bootstrap-3.3.7-dist.zip is <a href='/stylesheets/bootstrap/v337_dist/bootstrap.css'><span class='filename'>bootstrap.css</span> (learnwebcoding.com)</a>, which is 146,010 bytes, 6,758 lines, and has <a href='/stylesheets/bootstrap/v337_dist/bootstrap_distribution_css_validation_test.html'>25 errors and 125 
warnings (learnwebcoding.com)</a> per the <a href='http://jigsaw.w3.org/css-validator/'>W3C CSS Validation Service (jigsaw.w3.org)</a>. <a href='http://getbootstrap.com/customize/'>Customize Bootstrap (getbootstrap.com)</a> allows you to create a Bootstrap implementation that incorporates only the Bootstrap components that you select. This lightens Bootstrap and can eliminate some troublesome/invalid Bootstrap styles. To lighten Bootstrap and to eliminate some troublesome/invalid Bootstrap styles, Bootstrap was customized with the following components selected:</p>

     <ol>
      <li>Less files:
       <ol>
        <li>Click the Less files <kbd>Toggle all</kbd> button to uncheck all components.</li>
        <li>Under Common CSS, check:
         <ol>
          <li><kbd>Grid system</kbd>.</li>
          <li><kbd>Forms</kbd> (auto checked by Navbar).</li>
          <li><kbd>Responsive utilities</kbd> (required for the Navbar show/hide content to work).</li>
         </ol>
        </li>
        <li>Under Components, check:
         <ol>
          <li><kbd>Navs</kbd> (auto checked by Navbar).</li>
          <li><kbd>Navbar</kbd>.</li>
         </ol>
        </li>
        <li>Under JavaScript components, check:
         <ol>
          <li><kbd>Component animations (for JS) (includes Collapse)</kbd> (required for the Navbar icon-bar button to work).</li>
          <li><kbd>Dropdown</kbd> (required for the Navbar More dropdown to work).</li>
         </ol>
        </li>
       </ol>
      </li>
      <li>jQuery plugins:
       <ol>
        <li>Click the jQuery plugins <kbd>Toggle all</kbd> button to uncheck all components.</li>
        <li>Under Linked to components, check:
         <ol>
          <li><kbd>Dropdowns</kbd> (required for the Navbar More dropdown to work).</li>
         </ol>
        </li>
        <li>Under Magic, check:
         <ol>
          <li><kbd>Collapse</kbd> (required for the Navbar icon-bar button to work).</li>
         </ol>
        </li>
       </ol>
      </li>
      <li>Scroll to the bottom of the web page and click <kbd>Compile and Download</kbd>.</li>
     </ol>

     <p>The customized Bootstrap <a href='/stylesheets/bootstrap/v337_cust/bootstrap.css'><span class='filename'>bootstrap.css</span> (learnwebcoding.com)</a> was 52,350 bytes, 2,652 lines, and had <a href='/stylesheets/bootstrap/v337_cust/customized_bootstrap_css_validation_test.html'>12 errors and 59 warnings (learnwebcoding.com)</a> per the W3C CSS Validation Service. To further lighten Bootstrap and to further eliminate some troublesome/invalid Bootstrap styles, <span class='filename'>bootstrap.css</span> was manually edited to remove the known unnecessary Bootstrap style rules, not to change any Bootstrap style rules. The manually edited <a href='/stylesheets/bootstrap/v337_cust_then_edit_01/bootstrap.css'><span class='filename'>bootstrap.css (learnwebcoding.com)</span></a> was 34,982 bytes, 1,703 lines, and had <a href='/stylesheets/bootstrap/v337_cust_then_edit_01/customized_bootstrap_then_edited_01_css_validation_test.html'>6 errors and 20 warnings (learnwebcoding.com)</a> per the W3C CSS Validation Service. Then <span class='filename'>bootstrap.css</span> was manually edited a second time to determine if the lines reported in the errors could be commented out without any apparent adverse affect. The lines were commented without any apparent adverse affect and the final non-minified <a href='/stylesheets/bootstrap/v337_cust_then_edit_02/bootstrap.css'><span class='filename'>bootstrap.css</span> (learnwebcoding.com)</a> is 35,501 bytes, 1,706 lines, and is <a href='/stylesheets/bootstrap/v337_cust_then_edit_02/customized_bootstrap_then_edited_02_css_validation_test.html'>valid CSS Level 3 with 20 warnings (learnwebcoding.com)</a> per the W3C CSS Validation Service. As a result of customizing Bootstrap and then manually editing, the Bootstrap style sheet was reduced in size by over 75%, is valid CSS Level 3 (with warnings) per the W3C CSS Validation Service, and only 14 style rules <!-- Excluding the LWC navbar styles. -->were required to supplement/override the remaining troublesome Bootstrap styles.</p>

     <h3><a id='customizingBootstrapJavaScript'></a>2.2. Customizing Bootstrap And The Bootstrap JavaScript</h3>

     <p>The Bootstrap v3.3.7 non-minified JavaScript packaged with bootstrap-3.3.7-dist.zip is <a href='/javascripts/bootstrap/v337_dist/bootstrap.js'><span class='filename'>bootstrap.js</span> (learnwebcoding.com)</a>, which is 69,707 bytes and 2,378 lines. The customized Bootstrap <a href='/javascripts/bootstrap/v337_cust/bootstrap.js'><span class='filename'>bootstrap.js</span> (learnwebcoding.com)</a> was 11,558 bytes and 400 lines. As a result of customizing Bootstrap, the Bootstrap JavaScript was reduced in size by over 80%.</p>

    </section>
    <hr />
    <section>

     <h2><a id='fontAwesome'></a>3. Font Awesome Usage</h2>

     <p><a href='http://fontawesome.io/'>Font Awesome (fontawesome.io)</a> is a free set of scalable vector icons that are added to web pages using the HTML <code>class</code> attribute, not the HTML <code>img</code> element. The LWC Home Template uses two Font Awesome icons in the <a href='#lwcHomeToolsIconDropdown'>LWC Home tools icon dropdown (below)</a>; 1.) the cog (a.k.a., tools) (<span class='fa fa-cog'></span>) icon, and 2.) the check (<span class='fa fa-check'></span>) icon. One of the LWC Home tools icon dropdown options is Display Web Page For Printing Without Images. When Display Web Page For Printing Without Images is selected, images on the web page are hidden by applying the CSS <code>display: none</code> style to HTML <code>img</code> elements. If Display Web Page For Printing Without Images is selected and the tools and check icon were images using the HTML <code>img</code> element, allowances would have to be made to stop the tools and check icon images, but not the other images on the web page, from being hidden, which is avoided by using the Font Awesome icons.</p>

     <div class='note normal'>
      <ul>
       <li>The <a href='/index.php'>LWC home page (learnwebcoding.com)</a> uses the Font Awesome pencil-square-o (<span class='fa fa-pencil-square-o'></span>), check-square-o (<span class='fa fa-check-square-o'></span>), and book (<span class='fa fa-book'></span>) icons and the <a href='/javascript/javascript_shopping_cart_spa.php'>JavaScript Shopping Cart Single Page Application (learnwebcoding.com)</a> and <a href='/javascript/angularjs_shopping_cart_spa.php'>AngularJS Shopping Cart Single Page Application (learnwebcoding.com)</a> use the Font Awesome shopping-cart (<span class='fa fa-shopping-cart'></span>) icon. Although these four icons are not used in the LWC Home Template, they are included in <a href='#editingFontAwesome'>editing the font awesome style sheet (below)</a>.</li>
       <li>Bootstrap includes a free <a href='http://getbootstrap.com/components/#glyphicons'>Glyphicons (getbootstrap.com)</a> component that is similar to Font Awesome and would be easier to use because of the existing <a href='#bootstrap'>Bootstrap usage (above)</a>. Font Awesome, however, provides twice as many icons for free and I prefer the Font Awesome icons.</li>
      </ul>
     </div>

     <h3><a id='editingFontAwesome'></a>3.1. Editing The Font Awesome Style Sheet</h3>

     <p>The non-minified Font Awesome style sheet packaged with <span class='filename'>font-awesome-4.7.0.zip</span> is <a href='/stylesheets/fontawesome/v470_dist/font-awesome.css'><span class='filename'>font-awesome.css</span> (learnwebcoding.com)</a>, which is 37,414 bytes, 2,338 lines, and has <a href='/stylesheets/fontawesome/v470_dist/fontawesome_distribution_css_validation_test.html'>2 errors and 21 warnings (learnwebcoding.com)</a> per the <a href='http://jigsaw.w3.org/css-validator/'>W3C CSS Validation Service (jigsaw.w3.org)</a>. Font Awesome v4.7.0 includes 675 icons and LWC Home uses six of them. That is a lot of overhead. To lighten Font Awesome and to eliminate some invalid Font Awesome styles, <span class='filename'>font-awesome.css</span> was manually edited to remove the known unnecessary Font Awesome style rules, not to change any Font Awesome style rules. The manually edited <a href='/stylesheets/fontawesome/v470_edit_01/font-awesome.css'><span class='filename'>font-awesome.css</span> (learnwebcoding.com)</a> was 2,367 bytes, 56 lines, and had <a href='/stylesheets/fontawesome/v470_edit_01/fontawesome_edited_01_css_validation_test.html'>1 error and 2 warnings (learnwebcoding.com)</a> per the W3C CSS Validation Service. Then <span class='filename'>font-awesome.css</span> was manually edited a second time to determine if the line reported in the error could be commented out without any apparent adverse affect. The line was commented without any apparent adverse affect and the final non-minified <a href='/stylesheets/fontawesome/v470_edit_02/font-awesome.css'><span class='filename'>font-awesome.css</span> (learnwebcoding.com)</a> is 2,470 bytes, 57 lines, and is <a href='/stylesheets/fontawesome/v470_edit_02/fontawesome_edited_02_css_validation_test.html'>valid CSS Level 3 with 2 warnings (learnwebcoding.com)</a> per the W3C CSS Validation Service. As a result of manually editing, the Font Awesome style sheet was reduced in size by over 90% and is valid CSS Level 3 (with warnings) per the W3C CSS Validation Service.</p>

    </section>
    <hr />
    <section>

     <h2><a id='phpTemplate'></a>4. PHP Template System</h2>

     <p>The LWC Home Template includes a PHP template system for creating an easy to maintain and flexible web site. The PHP template system:</p>

     <ul>
      <li>Allows the definition of a web page type as a web page object (WPO) in a single file, with the WPO properties representing HTML markup and attributes, and the WPO property values representing HTML attribute values and content (<span class='filename'>Web_Page.class.php</span>).</li>
      <li>Allows the assignment of sitewide default WPO property values in a single file (<span class='filename'>Web_Page.class.php</span>).</li>
      <li>Allows the overriding of sitewide default WPO property values with web page specific WPO property values in a single file (<span class='filename'>web_page.php</span>).</li>
      <li>Allows the placement of sitewide blocks of code in separate files (e.g., <span class='filename'>google_analytics.php</span>, <span class='filename'>stylesheets.php</span>, <span class='filename'>header.php</span>, <span class='filename'>tools.php</span>, <span class='filename'>footer.php</span>, and <span class='filename'>javascripts.php</span>).</li>
      <li>Allows that some WPO properties and that some sitewide blocks of code might not be used in all web pages (<span class='filename'>web_page.php</span>).</li>
      <li>Allows the creation of a web page HTML/PHP template in a single file, with HTML from <code>&lt;html&gt;</code> to <code>&lt;/html&gt;</code>, and PHP that inserts WPO property values into the HTML (<span class='filename'>template.php</span>).</li>
      <li>Allows the definition of multiple different web page types as WPOs each in a separate file (<span class='filename'>Web_Page*.class.php</span>).</li>
      <li>Allows the placement of multiple different sitewide blocks of code, and the creation of multiple different variations of the sitewide blocks of code, each in a separate file (<span class='filename'>myblockofcode*.php</span>, <span class='filename'>google_analytics*.php</span>, <span class='filename'>stylesheets*.php</span>, <span class='filename'>header*.php</span>, <span class='filename'>tools*.php</span>, <span class='filename'>footer*.php</span>, and <span class='filename'>javascripts*.php</span>).</li>
      <li>Allows the creation of multiple different web page HTML/PHP templates each in a separate file (<span class='filename'>template*.php</span>).</li>
     </ul>

     <h3><a id='phpTemplateFileDescription'></a>4.1. PHP Template System File Description</h3>

     <p>The minimum files for the PHP template system:</p>

     <ul>
      <li><span class='filename'>footer.php</span>: Web page <a href='#footerSection'><code>&lt;footer&gt;&lt;/footer&gt;</code> section (below)</a>.</li>
      <li><span class='filename'>google_analytics.php</span>: Web page Google Analytics code.
      <li><span class='filename'>header.php</span>: Web page <a href='#headerSection'><code>&lt;header&gt;&lt;/header&gt;</code> section (below)</a>.</li>
      <li><span class='filename'>javascripts.php</span>: Web page JavaScripts.</li>
      <li><span class='filename'>stylesheets.php</span>: Web page style sheets.</li>
      <li><span class='filename'>template.php</span>: Web page HTML/PHP template.</li>
      <li><span class='filename'>tools.php</span>: Web page <a href='#lwcHomeToolsIconDropdown'>LWC Home tools icon dropdown (below)</a>.</li>
      <li><span class='filename'>Web_Page.class.php</span>: Web page object (WPO) definition.</li>
      <li><span class='filename'>web_page.php</span>: Web page file.</li>
      <li><span class='filename'>web_page_sections.php</span>: Web page <a href='#sections'><code>&lt;section&gt;&lt;/section&gt;</code> sections (below)</a>.</li>
      <li><span class='filename'>web_page_toc.php</span>: Web page <a href='#toc'>table of contents (below)</a>.</li>
     </ul>

     <h3><a id='phpTemplateHowWorks'></a>4.2. How The PHP Template System Works</h3>

     <p>In brief, <span class='filename'>web_page.php</span>; 1.) merges a web page object (WPO) definition (<span class='filename'>Web_Page.class.php</span>) with a web page HTML/PHP template (<span class='filename'>template.php</span>), and 2.) outputs a web page (<span class='filename'>web_page.php</span>). More specifically:</p>

     <ul>
      <li><span class='filename'>Web_Page.class.php</span>: Defines a web page type as a WPO. Defines WPO properties and assigns sitewide default WPO property values. <code>include_once</code> <span class='filename'>google_analytics.php</span>, <span class='filename'>stylesheets.php</span>, <span class='filename'>header.php</span>, <span class='filename'>tools.php</span>, <span class='filename'>footer.php</span>, and <span class='filename'>javascripts.php</span>. Similar to MVC model.</li>
      <li><span class='filename'>web_page.php</span>: <code>include_once</code> <span class='filename'>Web_Page.class.php</span> and instantiates the WPO. Overrides sitewide default WPO property values with web page specific WPO property values. <code>include_once</code> <span class='filename'>web_page_toc.php</span> and <span class='filename'>web_page_sections.php</span>. <code>include_once</code> <span class='filename'>template.php</span>. Outputs the web page, which has filename <span class='filename'>web_page.php</span>. Similar to MVC controller.</li>
      <li><span class='filename'>template.php</span>: Web page HTML/PHP template. Provides HTML from <code>&lt;html&gt;</code> to <code>&lt;/html&gt;</code>. PHP inserts the WPO property values into the HTML. Similar to MVC view.</li>
     </ul>

<pre class='ascii-art'>
+--------------------+
|                    |
|                    | - Defines a web page type as a WPO.
|                    | - Defines WPO properties and assigns
|                    |   sitewide default WPO property values.
| Web_Page.class.php | - include_once google_analytics.php,
|                    |   stylesheets.php, header.php, tools.php,
|                    |   footer.php, and javascripts.php.
|                    | ----------------------&gt;---------------------+
|                    |                                             |
+--------------------+                                             |
                                                                   |
+--------------------+                                            \|/
|                    |                                             |
|                    | - include_once Web_Page.class.php and       |
|                    |   instantiates the WPO. &lt;-------------------+
|                    | - Overrides sitewide default WPO
|   web_page.php     |   property values with web page specific
|    (web page)      |   WPO property values.
|                    | - include_once web_page_toc.php and
|                    |   web_page_sections.php.
|                    | - include_once template.php. &lt;--------------+
|                    | - Outputs the web page.                     |
|                    |                                             |
+--------------------+                                            /|\
                                                                   |
+--------------------+                                             |
|                    |                                             |
|                    | ----------------------&gt;---------------------+
|                    | - Web page HTML/PHP template.
|   template.php     | - Provides HTML from &lt;html&gt; to &lt;/html&gt;.
|                    | - PHP inserts the WPO property values into
|                    |   the HTML.
|                    |
+--------------------+
</pre>

     <div class='note normal'>For additional information on the PHP template system, see <a href='/templates/PHP_Template_System_Readme.txt'>PHP_Template_System_Readme.txt (learnwebcoding.com)</a>.</div>

    </section>
    <hr />
    <section>

     <h2><a id='structure'></a>5. Semantic HTML Structure, Content Type Reference, And The <code>html</code> And <code>body</code> Style Rules</h2>

     <p>The LWC Home Template is an HTML5 document that uses the new HTML5 semantic <code>header</code>, <code>main</code>, <code>footer</code>, <code>nav</code>, and <code>section</code> elements. The content types enclosed by the tags are indicated:</p>

<pre>
&lt;!DOCTYPE html&gt;
&lt;html lang='en'&gt;
 &lt;head&gt;Assets loaded in the head section&lt;/head&gt;
 &lt;body&gt;

  <b>&lt;header&gt;</b>
   <b>&lt;nav&gt;</b>LWC navbar<b>&lt;/nav&gt;</b>
   <b>&lt;nav&gt;</b>LWC Bootstrap navbar<b>&lt;/nav&gt;</b>
   <b>&lt;nav&gt;</b>LWC Home breadcrumbs navigation<b>&lt;/nav&gt;</b>
  <b>&lt;/header&gt;</b>

  <b>&lt;main&gt;</b>
   &lt;h1&gt;Web page title&lt;/h1&gt;
   Last reviewed/updated | Published | Status
   Web browser support and LWC Home tools icon dropdown
   <b>&lt;nav&gt;</b>Table of contents<b>&lt;/nav&gt;</b>
   <b>&lt;section&gt;</b>First web page section per the table of contents<b>&lt;/section&gt;</b>
   <b>&lt;section&gt;</b>Second web page section per the table of contents<b>&lt;/section&gt;</b>
   <b>&lt;section&gt;</b>Third web page section per the table of contents<b>&lt;/section&gt;</b>
  <b>&lt;/main&gt;</b>

  <b>&lt;footer&gt;</b>
   LWC logo as hyperlink to the LWC home page
   W3C Valid HTML5 and Valid CSS Level 3 buttons
  <b>&lt;/footer&gt;</b>

  Assets loaded in the body section
 &lt;/body&gt;
&lt;/html&gt;
</pre>

     <p>The <code>html</code> and <code>body</code> type selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 18 Jun 2016. -->
<pre>
html {
  overflow-y: scroll;
}
body {
  font-family: arial, tahoma, sans-serif;
  font-size: 14px;
  background-color: #fff;
  color: #000;
  margin: 0;
  padding: 0;
}
</pre>

    </section>
    <hr />
    <section>

     <h2><a id='assets'></a>6. Assets Loaded In The <code>&lt;head&gt;&lt;/head&gt;</code> and <code>&lt;body&gt;&lt;/body&gt;</code> Sections</h2>

     <p>The Font Awesome implementation requires loading the Font Awesome style sheet <span class='filename'>font-awesome.min.css</span> file. The Bootstrap implementation requires the <code>&lt;meta name='viewport' content='width=device-width, initial-scale=1' /&gt;</code> tag and loading the Bootstrap style sheet <span class='filename'>bootstrap.min.css</span> file, the jQuery JavaScript <span class='filename'>jquery-3.3.1.min.js</span> file, and the Bootstrap JavaScript <span class='filename'>bootstrap.min.js</span> file. The LWC code requires loading the LWC Home sitewide main style sheet <span class='filename'>lwc.min.css</span> file, the LWC Home sitewide dynamically changeable <a href='#lwcHomeToolsIconDropdown'>LWC Home tools icon dropdown (below)</a> style sheet <span class='filename'>print_default.min.css</span> file, and the LWC Home sitewide JavaScript <span class='filename'>library_load_in_body.min.js</span> file. The style sheets are loaded in the <code>&lt;head&gt;&lt;/head&gt;</code> section. So that the LWC Home styles may override the Bootstrap styles, the LWC Home style sheets are placed/loaded after the Bootstrap style sheet. The JavaScripts are not required for the rendering of the web page and, therefore, to speed up the initial rendering of the web page, are placed/loaded at the end of the <code>&lt;body&gt;&lt;/body&gt;</code> section:</p>

<pre>
&lt;!DOCTYPE html&gt;
&lt;html lang='en'&gt;
 &lt;head&gt;
  &lt;title&gt;Learn Web Coding Home Template&lt;/title&gt;&lt;!-- No markup in title tags. --&gt;
  &lt;meta charset='UTF-8' /&gt;
  &lt;meta name='Author' content='Steve Taylor' /&gt;
  &lt;meta name='Keywords' content='Learn Web Coding Home, web page, template, cap words as if used in sentence' /&gt;&lt;!-- Cap words as if used in sentence. No markup in Keywords. --&gt;
  &lt;meta name='Description' content='The Learn Web Coding Home Template.' /&gt;&lt;!-- Sentence and/or structured data less than 160 char per Google. No markup in Description. --&gt;
  <b>&lt;meta name='viewport' content='width=device-width, initial-scale=1' /&gt;
  &lt;link rel='stylesheet' type='text/css' media='all' href='/stylesheets/fontawesome/font-awesome.min.css' /&gt;
  &lt;link rel='stylesheet' type='text/css' media='all' href='/stylesheets/bootstrap/bootstrap.min.css' /&gt;
  &lt;link rel='stylesheet' type='text/css' media='all' href='/stylesheets/lwc/lwc.min.css' /&gt;
  &lt;link rel='stylesheet' type='text/css' media='all' href='/stylesheets/lwc/print_default.min.css' id='changeableExtSSLinkElementId' /&gt;</b>
 &lt;/head&gt;
 &lt;body&gt;
  ...
  <b>&lt;script src='https://code.jquery.com/jquery-3.3.1.min.js'&gt;&lt;/script&gt;
  &lt;script src='/javascripts/bootstrap/bootstrap.min.js'&gt;&lt;/script&gt;
  &lt;script src='/javascripts/lwc/library_load_in_body.min.js'&gt;&lt;/script&gt;</b>
 &lt;/body&gt;
&lt;/html&gt;
</pre>

    </section>
    <hr />
    <section>

     <h2><a id='headerSection'></a>7. <code>&lt;header&gt;&lt;/header&gt;</code> Section</h2>

     <p>The <code>&lt;header&gt;&lt;/header&gt;</code> section (a.k.a., header) is located at the top of the web page and consists of four sections:</p>

     <ul>
      <li><a href='#lwcNavbar'>LWC navbar (below)</a>.</li>
      <li><a href='#lwcBootstrapNavbar'>LWC Bootstrap navbar (below)</a>.</li>
      <li><a href='#noscriptSection'><code>&lt;noscript&gt;&lt;/noscript&gt;</code> section (below)</a>.</li>
      <li><a href='#lwcHomeBreadcrumbsNavigation'>LWC Home breadcrumbs navigation (below)</a>.</li>
     </ul>

     <p>The header uses the <code>header</code> element with the <code>id='headerId'</code> attribute:</p>

<pre>
&lt;body&gt;

 <b>&lt;header&gt;</b>
  &lt;nav class='lwc-navbar'&gt;&lt;!-- Open LWC navbar HTML. --&gt;
   ...
  &lt;/nav&gt;&lt;!-- Close LWC navbar HTML. --&gt;

  &lt;nav class='navbar navbar-inverse navbar-static-top'&gt;&lt;!-- Open LWC Bootstrap navbar HTML. --&gt;
   ...
  &lt;/nav&gt;&lt;!-- Close LWC Bootstrap navbar HTML. --&gt;

  &lt;noscript class='noscript'&gt;
   ...
  &lt;/noscript&gt;

  &lt;nav&gt;&lt;!-- Open LWC Home breadcrumbs navigation HTML. --&gt;
   ...
  &lt;/nav&gt;&lt;!-- Close LWC Home breadcrumbs navigation HTML. --&gt;

  &lt;script&gt;/* Open LWC Home breadcrumbs navigation JavaScript. */
   ...
  &lt;/script&gt;&lt;!-- Close LWC Home breadcrumbs navigation JavaScript. --&gt;
  &lt;script&gt;BcrumbsNavUtil.bcrumbsNav(&quot;&quot;, &quot;HTML&quot;);&lt;/script&gt;
 <b>&lt;/header&gt;</b>

 &lt;main&gt;
</pre>

     <p>The <code>#headerId</code> ID selector is not assigned author styles. The <code>header</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 18 Jun 2016. -->
<pre>
header { display: block; }
</pre>

     <p>For an example of the header, go to the top of this web page.</p>

     <h3><a id='lwcNavbar'></a>7.1. LWC Navbar</h3>

     <p>The LWC navbar: 1.) is located at the top of the web page; 2.) has a blue background and provides hyperlinks to LWC Home, LWC Blog, and LWC Forums; and 3.) is used at LWC Home/Blog/Forums.</p>

     <p>The LWC navbar uses the <code>nav</code> element with the <code>class='lwc-navbar'</code> attribute, the <code>div</code> element with the <code>class='container-fluid'</code> or <code>class='lwc-navbar-content'</code> attribute, and the <code>a</code> element with the <code>href</code> attribute:</p>

<pre>
&lt;header&gt;
 <b>&lt;nav class='lwc-navbar'&gt;&lt;!-- Open LWC navbar HTML. --&gt;&lt;!-- NOTE: Loading lwc.css in LWC Blog/Forums causes issues. Therefore, to avoid loading lwc.css in LWC Blog/Forums, place styles for LWC navbar at bottom of bootstrap.css, not in lwc.css. --&gt;
  &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;
   &lt;div class='lwc-navbar-content'&gt;&lt;a href='http://blog.learnwebcoding.com/'&gt;Blog&lt;/a&gt;&amp;nbsp;&amp;nbsp;&amp;bull;&amp;nbsp;&amp;nbsp;&lt;a href='http://forums.learnwebcoding.com/'&gt;Forums&lt;/a&gt;&amp;nbsp;&amp;nbsp;&amp;bull;&amp;nbsp;&amp;nbsp;Ad Free!&lt;/div&gt;
  &lt;/div&gt;&lt;!-- Close LWC navbar HTML div class='container-fluid'. --&gt;
 &lt;/nav&gt;&lt;!-- Close LWC navbar HTML. --&gt;</b>

 &lt;nav class='navbar navbar-inverse navbar-static-top'&gt;&lt;!-- Open LWC Bootstrap navbar HTML. --&gt;
  ...
 &lt;/nav&gt;&lt;!-- Close LWC Bootstrap navbar HTML. --&gt;

 &lt;noscript class='noscript'&gt;
  ...
 &lt;/noscript&gt;

 &lt;nav&gt;&lt;!-- Open LWC Home breadcrumbs navigation HTML. --&gt;
  ...
 &lt;/nav&gt;&lt;!-- Close LWC Home breadcrumbs navigation HTML. --&gt;

 &lt;script&gt;/* Open LWC Home breadcrumbs navigation JavaScript. */
  ...
 &lt;/script&gt;&lt;!-- Close LWC Home breadcrumbs navigation JavaScript. --&gt;
 &lt;script&gt;BcrumbsNavUtil.bcrumbsNav(&quot;&quot;, &quot;HTML&quot;);&lt;/script&gt;
&lt;/header&gt;
</pre>

<!-- List selectors in following order: 1.) type, descendant, child, class, attribute, pseudo-class, and/or pseudo-element selectors not assigned author styles, 2.) type, descendant, child, class, attribute, pseudo-class, and/or pseudo-element selectors assigned author styles. -->

     <p>The <code>nav</code> and <code>div</code> type selectors are not assigned author styles. The <code>a</code> type selector, the <code>.lwc-navbar a</code> descendant selector, the <code>.lwc-navbar</code>, <code>.container-fluid</code>, and <code>.lwc-navbar-content</code> class selectors, and the <code>a:hover</code>, <code>a:focus</code>, <code>.lwc-navbar a:hover</code>, and <code>.lwc-navbar a:focus</code> pseudo-class selectors are assigned author styles. The Bootstrap <code>.container-fluid</code> class selector styles are defined in the Bootstrap style sheet <a href='/stylesheets/bootstrap/bootstrap.css'><span class='filename'>bootstrap.css (learnwebcoding)</span></a> file and are too numerous to show. The author style rules that supplement/override Bootstrap styles are indicated:</p>

<!-- Unless groupings dictate, or there is some other compelling reason, present styles in order in which they appear in style sheet. -->
<!-- Last reviewed/updated: 12 Aug 2016. -->
<pre>
a { <s>color: #005a9c;</s> text-decoration: none; } /* From normal hyperlinks below. */
a:hover { <s>color: #000; text-decoration: underline;</s> } /* From normal hyperlinks below. */
a:focus { <s>outline: thin dotted invert;</s> } /* From normal hyperlinks below. */
.lwc-navbar { font-size: 14px; background-color: #005a9c; color: #ccc; text-align: right; padding: 4px 0; }
.lwc-navbar-content { font-size: 0.8em; }
.lwc-navbar a { color: #ccc; }
.lwc-navbar a:hover { color: #fff; text-decoration: none; }
.lwc-navbar a:focus { outline: 0; }
/* Supplement/override Bootstrap styles. */
.container-fluid { max-width: 1170px; } /* Content. */
</pre>

     <p>For an example of the LWC navbar, go to the top of this web page.</p>

     <h3><a id='lwcBootstrapNavbar'></a>7.2. LWC Bootstrap Navbar</h3>

     <p>The LWC Bootstrap navbar: 1.) is located near the top of the web page below the <a href='#lwcNavbar'>LWC navbar (above)</a>; 2.) has a black background and provides hyperlinks to HTML, CSS, JavaScript, PHP, etc; 3.) requires JavaScript; and 4.) is used at LWC Home and, with the right subsection removed, at LWC Blog/Forums.</p>

     <p>The LWC Bootstrap navbar uses the <a href='http://getbootstrap.com/components/#navbar'>Bootstrap navbar (getbootstrap.com)</a> HTML and the <a href='http://getbootstrap.com/css/#responsive-utilities'>Bootstrap responsive utilities (getbootstrap.com)</a> HTML:</p>

<pre>
&lt;header'&gt;
 &lt;nav class='lwc-navbar'&gt;&lt;!-- Open LWC navbar HTML. --&gt;
  ...
 &lt;/nav&gt;&lt;!-- Close LWC navbar HTML. --&gt;

 <b>&lt;nav class='navbar navbar-inverse navbar-static-top'&gt;&lt;!-- Open LWC Bootstrap navbar HTML. --&gt;&lt;!-- navbar-static-top aligns navbar-right content flush to right edge and removes border-top. --&gt;
  &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;
   &lt;div class='navbar-header'&gt;
    &lt;button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'&gt;
     &lt;span class='sr-only'&gt;Toggle navigation&lt;/span&gt;
     &lt;span class='icon-bar'&gt;&lt;/span&gt;
     &lt;span class='icon-bar'&gt;&lt;/span&gt;
     &lt;span class='icon-bar'&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;a href='http://www.learnwebcoding.com/' class='navbar-brand'&gt;&lt;span class='hidden-xs hidden-sm'&gt;Learn Web Coding Home&lt;/span&gt;&lt;span class='visible-xs visible-sm'&gt;LWC Home&lt;/span&gt;&lt;/a&gt;
   &lt;/div&gt;
   &lt;div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'&gt;
    &lt;ul class='nav navbar-nav'&gt;
     &lt;li&gt;&lt;a href='/html/index.php'&gt;HTML&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href='/css/index.php'&gt;CSS&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href='/javascript/index.php'&gt;JavaScript&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href='/php/index.php'&gt;PHP&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href='/misc/index.php'&gt;Misc&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul class='nav navbar-nav navbar-right'&gt;
     &lt;li&gt;&lt;a href='/misc/original_content.php'&gt;Original Content&lt;/a&gt;&lt;/li&gt;
     &lt;li class='dropdown visible-sm visible-md'&gt;
      &lt;a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'&gt;More &lt;span class='caret'&gt;&lt;/span&gt;&lt;/a&gt;
      &lt;ul class='dropdown-menu'&gt;
       &lt;li&gt;&lt;a href='/misc/glossary.php'&gt;Glossary&lt;/a&gt;&lt;/li&gt;
       &lt;li&gt;&lt;a href='/misc/whats_new.php'&gt;What's New&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a href='/misc/glossary.php' class='hidden-sm hidden-md'&gt;Glossary&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href='/misc/whats_new.php' class='hidden-sm hidden-md'&gt;What's New&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
   &lt;/div&gt;
  &lt;/div&gt;&lt;!-- Close LWC Bootstrap navbar HTML div class='container-fluid'. --&gt;
 &lt;/nav&gt;&lt;!-- Close LWC Bootstrap navbar HTML. --&gt;</b>

 &lt;noscript class='noscript'&gt;
  ...
 &lt;/noscript&gt;

 &lt;nav&gt;&lt;!-- Open LWC Home breadcrumbs navigation HTML. --&gt;
  ...
 &lt;/nav&gt;&lt;!-- Close LWC Home breadcrumbs navigation HTML. --&gt;

 &lt;script&gt;/* Open LWC Home breadcrumbs navigation JavaScript. */
  ...
 &lt;/script&gt;&lt;!-- Close LWC Home breadcrumbs navigation JavaScript. --&gt;
 &lt;script&gt;BcrumbsNavUtil.bcrumbsNav(&quot;&quot;, &quot;HTML&quot;);&lt;/script&gt;
&lt;/header&gt;
</pre>

     <p>The LWC Bootstrap navbar styles are defined in the Bootstrap style sheet <a href='/stylesheets/bootstrap/bootstrap.css'><span class='filename'>bootstrap.css (learnwebcoding)</span></a> file and are too numerous to show. The author style rules that supplement/override Bootstrap styles are indicated:</p>

<!-- Last reviewed/updated: 18 Jun 2016. -->
<pre>
/* Supplement/override Bootstrap styles. */
.container-fluid { max-width: 1170px; } /* Content. */
.dropdown-menu { min-width: 0; border: 0; padding: 0; } /* Bootstrap navbar More dropdown. */
.dropdown-menu > li > a { line-height: 20px; background-color: #000; color: #fff; padding: 10px 15px; } /* Bootstrap navbar More dropdown hyperlinks. */
.dropdown-menu > li > a:hover { background-color: #333; color: #fff; } /* Bootstrap navbar More dropdown hyperlinks. */
.dropdown-menu > li > a:focus { outline: 0; } /* Bootstrap navbar More dropdown hyperlinks. */
.navbar { min-height: 0; border: 0; margin-bottom: 0; } /* Bootstrap navbar. */
.navbar-brand { font-family: &quot;courier new&quot;, courier, monospace; font-size: 1.5em; font-weight: bold; } /* LWC logo in Bootstrap navbar. */
.navbar-inverse { background-color: #000; } /* Bootstrap navbar. */
.navbar-inverse .navbar-brand { color: #fff; } /* LWC logo in Bootstrap navbar. */
.navbar-inverse .navbar-brand:focus { outline: 0; } /* LWC logo in Bootstrap navbar. */
.navbar-inverse .navbar-nav > li > a { color: #fff; } /* Bootstrap navbar hyperlinks. */
.navbar-inverse .navbar-nav > li > a:hover { background-color: #333; } /* Bootstrap navbar hyperlinks. */
.navbar-inverse .navbar-nav > li > a:focus { outline: 0; } /* Bootstrap navbar hyperlinks. */
.navbar-inverse .navbar-nav > .open > a:hover { background-color: #333; } /* Bootstrap navbar More dropdown. More itself, not the dropdown. */
</pre>

     <p>For an example of the LWC Bootstrap navbar, go to the top of this web page.</p>

     <h3><a id='noscriptSection'></a>7.3. <code>&lt;noscript&gt;&lt;/noscript&gt;</code> Section</h3>

     <p>If the web browser does not support JavaScript or has JavaScript support disabled, the <code>&lt;noscript&gt;&lt;/noscript&gt;</code> section is displayed near the top of the web page below the LWC Bootstrap navbar in the place of the <a href='#lwcHomeBreadcrumbsNavigation'>LWC Home breadcrumbs navigation (below)</a>. The <code>&lt;noscript&gt;&lt;/noscript&gt;</code> section reports that parts of this web site require JavaScript and are nonfunctional. The <code>&lt;noscript&gt;&lt;/noscript&gt;</code> section is used at LWC Home, not LWC Blog/Forums.</p>

     <p>The <code>&lt;noscript&gt;&lt;/noscript&gt;</code> section uses the <code>noscript</code> element with the <code>class='noscript'</code> attribute and the <code>div</code> element with the <code>class='container-fluid'</code> attribute:</p>

<pre>
&lt;header'&gt;
 &lt;nav class='lwc-navbar'&gt;&lt;!-- Open LWC navbar HTML. --&gt;
  ...
 &lt;/nav&gt;&lt;!-- Close LWC navbar HTML. --&gt;

 &lt;nav class='navbar navbar-inverse navbar-static-top'&gt;&lt;!-- Open LWC Bootstrap navbar HTML. --&gt;
  ...
 &lt;/nav&gt;&lt;!-- Close LWC Bootstrap navbar HTML. --&gt;

 <b>&lt;noscript class='noscript'&gt;
  &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;
   NOTE: Parts of this web site require JavaScript and are nonfunctional because your web browser does not support JavaScript or has JavaScript support disabled.
  &lt;/div&gt;&lt;!-- Close noscript section div class='container-fluid'. --&gt;
 &lt;/noscript&gt;</b>

 &lt;nav&gt;&lt;!-- Open LWC Home breadcrumbs navigation HTML. --&gt;
  ...
 &lt;/nav&gt;&lt;!-- Close LWC Home breadcrumbs navigation HTML. --&gt;

 &lt;script&gt;/* Open LWC Home breadcrumbs navigation JavaScript. */
  ...
 &lt;/script&gt;&lt;!-- Close LWC Home breadcrumbs navigation JavaScript. --&gt;
 &lt;script&gt;BcrumbsNavUtil.bcrumbsNav(&quot;&quot;, &quot;HTML&quot;);&lt;/script&gt;
&lt;/header&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>noscript</code> type selector and the <code>.noscript</code> and <code>.container-fluid</code> class selector are assigned author styles. The Bootstrap <code>.container-fluid</code> class selector styles are defined in the Bootstrap style sheet <a href='/stylesheets/bootstrap/bootstrap.css'><span class='filename'>bootstrap.css (learnwebcoding)</span></a> file and are too numerous to show. The author style rules that supplement/override Bootstrap styles are indicated:</p>

<!-- Last reviewed/updated: 12 Aug 2016. -->
<pre>
noscript { display: block; }
.noscript { color: #c41e3a; } /* IE6+ no support noscript type selector for styling content. Hence, class selector. */
/* Supplement/override Bootstrap styles. */
.container-fluid { max-width: 1170px; } /* Content. */
</pre>

     <p>For an example of the <code>&lt;noscript&gt;&lt;/noscript&gt;</code> section content, disable JavaScript in the web browser, reload this web page, and then go to the top of this web page.</p>

     <h3><a id='lwcHomeBreadcrumbsNavigation'></a>7.4. LWC Home Breadcrumbs Navigation</h3>

     <p>The LWC Home breadcrumbs navigation: 1.) is located near the top of the web page below the <a href='#lwcBootstrapNavbar'>LWC Bootstrap navbar (above)</a>; 2.) has a white background and provides hyperlinks to directory landing pages up the directory tree to the web site home page; 3.) requires JavaScript; 4.) is used at LWC Home, not LWC Blog/Forums; and 5.) consists of three sections:</p>

     <ul>
      <li>LWC Home breadcrumbs navigation HTML. The LWC Home breadcrumbs navigation HTML provides the target element for the JavaScript <code>innerHTML</code> property.</li>
      <li>LWC Home breadcrumbs navigation JavaScript. The LWC Home breadcrumbs navigation JavaScript is the <code>BcrumbsNavUtil.bcrumbsNav()</code> method.</li>
      <li>Call to the <code>BcrumbsNavUtil.bcrumbsNav()</code> method. The call to the <code>BcrumbsNavUtil.bcrumbsNav()</code> method causes the <code>BcrumbsNavUtil.bcrumbsNav()</code> method to execute.</li>
     </ul>

     <p>The LWC Home breadcrumbs navigation uses the <code>nav</code> element, the <code>div</code> element with the <code>class='container-fluid'</code> or <code>id='bcrumbsNavId'</code> and <code>class='bcrumbs-nav'</code> attributes, and the <code>script</code> element with the <code>type='text/javascript'</code> attribute:</p>

<pre>
&lt;header&gt;
 &lt;nav class='lwc-navbar'&gt;&lt;!-- Open LWC navbar HTML. --&gt;
  ...
 &lt;/nav&gt;&lt;!-- Close LWC navbar HTML. --&gt;

 &lt;nav class='navbar navbar-inverse navbar-static-top'&gt;&lt;!-- Open LWC Bootstrap navbar HTML. --&gt;
  ...
 &lt;/nav&gt;&lt;!-- Close LWC Bootstrap navbar HTML. --&gt;

 &lt;noscript class='noscript'&gt;
  ...
 &lt;/noscript&gt;

 <b>&lt;nav&gt;&lt;!-- Open LWC Home breadcrumbs navigation HTML. --&gt;
  &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;
   &lt;div id='bcrumbsNavId' class='bcrumbs-nav'&gt;&amp;nbsp;&lt;/div&gt;&lt;!-- Content provided by BcrumbsNavUtil.bcrumbsNav(), which is defined immediately below. --&gt;
  &lt;/div&gt;&lt;!-- Close LWC Home breadcrumbs navigation HTML div class='container-fluid'. --&gt;
 &lt;/nav&gt;&lt;!-- Close LWC Home breadcrumbs navigation HTML. --&gt;

 &lt;script&gt;/* Open LWC Home breadcrumbs navigation JavaScript. */
  var BcrumbsNavUtil = {
   bcrumbsNav: function(){
    var bcrumbsNav = document.getElementById(&quot;bcrumbsNavId&quot;);
    var bcrumbsNavHtmlString = &quot;&lt;a href='/index.php'&gt;Home&lt;/a&gt;&quot;;
    if (arguments.length &gt; 0){
     for (var i = 0; i &lt; arguments.length; i = i + 2){
      bcrumbsNavHtmlString += &quot; &amp;rarr; &lt;a href='&quot; + arguments[i] + &quot;index.php'&gt;&quot; + arguments[i + 1] + &quot;&lt;/a&gt;&quot;;
     }
    }
    bcrumbsNav.innerHTML = bcrumbsNavHtmlString;
   }
  };
 &lt;/script&gt;&lt;!-- Close LWC Home breadcrumbs navigation JavaScript. --&gt;
 &lt;script&gt;BcrumbsNavUtil.bcrumbsNav(&quot;&quot;, &quot;HTML&quot;);&lt;/script&gt;</b>
&lt;/header&gt;
</pre>

     <p>The <code>BcrumbsNavUtil.bcrumbsNav()</code> method generates a breadcrumbs navigation HTML string and assigns it to the JavaScript <code>innerHTML</code> property of the HTML element with the <code>id='bcrumbsNavId'</code> attribute, which inserts the breadcrumbs navigation HTML string on the DOM and displays the breadcrumbs navigation:</p>

<pre>
&lt;header&gt;
 &lt;nav class='lwc-navbar'&gt;&lt;!-- Open LWC navbar HTML. --&gt;
  ...
 &lt;/nav&gt;&lt;!-- Close LWC navbar HTML. --&gt;

 &lt;nav class='navbar navbar-inverse navbar-static-top'&gt;&lt;!-- Open LWC Bootstrap navbar HTML. --&gt;
  ...
 &lt;/nav&gt;&lt;!-- Close LWC Bootstrap navbar HTML. --&gt;

 &lt;noscript class='noscript'&gt;
  ...
 &lt;/noscript&gt;

 &lt;nav&gt;&lt;!-- Open LWC Home breadcrumbs navigation HTML. --&gt;
  &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;
   &lt;div <b>id='bcrumbsNavId'</b> class='bcrumbs-nav'&gt;<b>&lt;a href='/index.html'&gt;Home&lt;/a&gt; &amp;rarr; &lt;a href='index.html'&gt;HTML&lt;/a&gt;</b>&lt;/div&gt;
  &lt;/div&gt;
 &lt;/nav&gt;&lt;!-- Close LWC Home breadcrumbs navigation HTML. --&gt;

 &lt;script&gt;/* Open LWC Home breadcrumbs navigation JavaScript. */
  var BcrumbsNavUtil = {
   bcrumbsNav: function(){
    var bcrumbsNav = document.getElementById(&quot;bcrumbsNavId&quot;);
    var bcrumbsNavHtmlString = &quot;&lt;a href='/index.php'&gt;Home&lt;/a&gt;&quot;;
    if (arguments.length &gt; 0){
     for (var i = 0; i &lt; arguments.length; i = i + 2){
      bcrumbsNavHtmlString += &quot; &amp;rarr; &lt;a href='&quot; + arguments[i] + &quot;index.php'&gt;&quot; + arguments[i + 1] + &quot;&lt;/a&gt;&quot;;
     }
    }
    bcrumbsNav.innerHTML = bcrumbsNavHtmlString;
   }
  };
 &lt;/script&gt;&lt;!-- Close LWC Home breadcrumbs navigation JavaScript. --&gt;
 &lt;script&gt;BcrumbsNavUtil.bcrumbsNav(&quot;&quot;, &quot;HTML&quot;);&lt;/script&gt;
&lt;/header&gt;
</pre>

     <p>The <code>nav</code> and <code>div</code> type selectors and the <code>#bcrumbsNavId</code> ID selector are not assigned author styles. The <code>a</code> type selector, the <code>.bcrumbs-nav a</code> descendant selector, the <code>.container-fluid</code> and <code>.bcrumbs-nav</code> class selectors, and the <code>a:hover</code>, <code>a:focus</code>, <code>.bcrumbs-nav a:hover</code>, and <code>.bcrumbs-nav a:focus</code> pseudo-class selectors are assigned author styles. The Bootstrap <code>.container-fluid</code> class selector styles are defined in the Bootstrap style sheet <a href='/stylesheets/bootstrap/bootstrap.css'><span class='filename'>bootstrap.css (learnwebcoding)</span></a> file and are too numerous to show. The author style rules that supplement/override Bootstrap styles are indicated:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
a { <s>color: #005a9c;</s> text-decoration: none; } /* From normal hyperlinks below. */
a:hover { <s>color: #000; text-decoration: underline;</s> } /* From normal hyperlinks below. */
a:focus { <s>outline: thin dotted invert;</s> } /* From normal hyperlinks below. */
.bcrumbs-nav { font-size: 0.9em; color: #888; margin-top: 9px; }
.bcrumbs-nav a { color: #888; }
.bcrumbs-nav a:hover { color: #000; text-decoration: none; }
.bcrumbs-nav a:focus { outline: 0; }
/* Supplement/override Bootstrap styles. */
.container-fluid { max-width: 1170px; } /* Content. */
</pre>

     <p>Some notes on the LWC Home breadcrumbs navigation:</p>

     <ul>
      <li>LWC Home breadcrumbs navigation is intended for, but does not require, the following file/directory tree structure:
<pre class='ascii-art'>
web_server_root_directory (root directory of web server) (might be named htdocs, public_html, www, wwwroot, etc.)
   |
   |- - - index.php (web site home page) (no breadcrumbs)
   |- - - another-web-page-in-web-server-root-directory.php (breadcrumb: Home)
   |- - - subdirectory
             |
             |- - - index.php (subdirectory landing page) (breadcrumb: Home)
             |- - - another-web-page-in-subdirectory.php (breadcrumbs: Home | Subdirectory)
             |- - - subsubdirectory
                       |
                       |- - - index.php (subsubdirectory landing page) (breadcrumbs: Home | Subdirectory)
                       |- - - another-web-page-in-subsubdirectory.php (breadcrumbs: Home | Subdirectory | Subsubdirectory)
</pre>
      </li>
      <li>The Home breadcrumb is a hyperlink to the web site home page. The Home breadcrumb is hard coded into the <code>BcrumbsNavUtil.bcrumbsNav()</code> method. Therefore, to display the Home breadcrumb, call the <code>BcrumbsNavUtil.bcrumbsNav()</code> method with no arguments.</li>
      <li>The path for the Home breadcrumb is <span class='filename'>/index.php</span>, which is a root relative path.</li>
      <li>Subsequent breadcrumbs are hyperlinks to directory landing pages up the directory tree to the web site home page. For each subsequent breadcrumb after the Home breadcrumb, call the <code>BcrumbsNavUtil.bcrumbsNav()</code> method with two arguments in the following order:
       <ol>
        <li>The relative path from the current web page to the directory landing web page as a string, without the directory landing page filename, which is assumed to be <span class='filename'>index.php</span> and, therefore, is hard coded into the <code>BcrumbsNavUtil.bcrumbsNav()</code> method. For example, <code>&quot;&quot;</code>, not <code>&quot;index.php&quot;</code>, and <code>&quot;../&quot;</code>, not <code>&quot;../index.php&quot;</code>.</li>
        <li>The name of the directory landing web page as a string. This becomes the name of the breadcrumb. For example, <code>&quot;Subdirectory&quot;</code>.</li>
       </ol>
       In other words:
       <ul>
        <li>To display the Home breadcrumb with one subsequent breadcrumb, call the <code>BcrumbsNavUtil.bcrumbsNav()</code> method with two arguments.</li>
        <li>To display the Home breadcrumb with two subsequent breadcrumbs, call the <code>BcrumbsNavUtil.bcrumbsNav()</code> method with four arguments.</li>
        <li>To display the Home breadcrumb with three subsequent breadcrumbs, call the <code>BcrumbsNavUtil.bcrumbsNav()</code> method with six arguments.</li>
        <li>Syntax to display the Home breadcrumb with three subsequent breadcrumbs: <code>BcrumbsNavUtil.bcrumbsNav(&quot;relativePathToDirectoryLandingPage1&quot;, &quot;nameDirectoryLandingPage1&quot;, &quot;relativePathToDirectoryLandingPage2&quot;, &quot;nameDirectoryLandingPage2&quot;, &quot;relativePathToDirectoryLandingPage3&quot;, &quot;nameDirectoryLandingPage3&quot;)</code>.</li>
        <li>For example, to generate the breadcrumbs for the <span class='filename'>another-web-page-in-subsubdirectory.php</span> web page in the file/directory tree above, the call to <code>BcrumbsNavUtil.bcrumbsNav()</code> is <code>BcrumbsNavUtil.bcrumbsNav (&quot;../&quot;, &quot;Subdirectory&quot;, &quot;&quot;, &quot;Subsubdirectory&quot;)</code>.</li>
       </ul>
      </li>
      <li>To not display the LWC Home breadcrumbs navigation, comment out or remove the call to the <code>BcrumbsNavUtil.bcrumbsNav()</code> method.</li>
     </ul>

     <p>The <code>BcrumbsNavUtil.bcrumbsNav()</code> method source code:</p>

<pre>
1     var BcrumbsNavUtil = {
2      bcrumbsNav: function(){
3       var bcrumbsNav = document.getElementById(&quot;bcrumbsNavId&quot;);
4       var bcrumbsNavHtmlString = &quot;&lt;a href='/index.php'&gt;Home&lt;/a&gt;&quot;;
5       if (arguments.length &gt; 0){
6        for (var i = 0; i &lt; arguments.length; i = i + 2){
7         bcrumbsNavHtmlString += &quot; &amp;rarr; &lt;a href='&quot; + arguments[i] + &quot;index.php'&gt;&quot; + arguments[i + 1] + &quot;&lt;/a&gt;&quot;;
8        }
9       }
10      bcrumbsNav.innerHTML = bcrumbsNavHtmlString;
11     }
12    };
</pre>

     <p><code>BcrumbsNavUtil.bcrumbsNav()</code> method source code notes:</p>

     <ul>
      <li>Line 1: Defines <code>BcrumbsNavUtil</code> as an object literal.</li>
      <li>Line 2: Defines the <code>bcrumbsNav()</code> function as a method of the <code>BcrumbsNavUtil</code> object.</li>
      <li>Line 3: Gets a reference to the element with the <code>id='bcrumbsNavId'</code> attribute, and assigns the reference to <code>bcrumbsNav</code>. <code>bcrumbsNav</code> is a local variable.</li>
      <li>Line 4: Initializes the <code>bcrumbsNavHtmlString</code> variable with a hard coded HTML string for the Home breadcrumb. The path for the Home breadcrumb is <span class='filename'>/index.php</span>, which is a root relative path.</li>
      <li>Line 5: Determines if the call to <code>BcrumbsNavUtil.bcrumbsNav()</code> included arguments. If yes, run the <code>for</code> loop. If no, go to line 10.</li>
      <li>Lines 6 - 8: The built-in JavaScript <code>arguments</code> object stores all of the arguments passed into a function. The <code>arguments</code> object is similar to an array in that zero based bracket notation is used to get the argument values. For example, <code>arguments[0]</code> gets the value of the first argument passed into a function. Each iteration of the <code>for</code> loop processes the next two arguments passed into the <code>BcrumbsNavUtil.bcrumbsNav()</code> method into an HTML string for one breadcrumb, which is appended to the end of the <code>bcrumbsNavHtmlString</code> variable.</li>
      <li>Line 10: Assigns the <code>bcrumbsNavHtmlString</code> variable to the JavaScript <code>innerHTML</code> property of the HTML element with the <code>id='bcrumbsNavId'</code> attribute. This inserts the <code>bcrumbsNavHtmlString</code> variable value as the child node of <code>&lt;div id='bcrumbsNavId'&gt;&lt;/div&gt;</code> on the DOM, which displays the breadcrumbs navigation.</li>
     </ul>

     <p>For an example of the LWC Home breadcrumbs navigation, go to the top of this web page.</p>

    </section>
    <hr />
    <section>

     <h2><a id='mainSection'></a>8. <code>&lt;main&gt;&lt;/main&gt;</code> Section</h2>

     <p>The <code>&lt;main&gt;&lt;/main&gt;</code> section (a.k.a., main) is located between the <a href='#headerSection'><code>&lt;header&gt;&lt;/header&gt;</code> section (above)</a> and the <a href='#footerSection'><code>&lt;footer&gt;&lt;/footer&gt;</code> section (below)</a> and consists of five sections:</p>

     <ul>
      <li><a href='#webPageTitle'>Web page title (below) </a>.</li>
      <li><a href='#lastReviewed'>Last reviewed/updated, published, and status information (below) </a>.</li>
      <li><a href='#webBrowserSupportAndLwcHomeToolsIconDropdown'>Web browser and LWC Home tools icon dropdown (below) </a>.</li>
      <li><a href='#toc'>Table of contents (below) </a>.</li>
      <li><a href='#sections'>Sections (below) </a>.</li>
     </ul>

     <p>The main uses the <code>main</code> element and the <code>div</code> element with the <code>class='container-fluid'</code> attribute:</p>

<pre>
&lt;/header&gt;

<b>&lt;main&gt;
 &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;</b>
  &lt;h1&gt;...&lt;/h1&gt;

  &lt;div class='lastReviewed'&gt;...&lt;/div&gt;
  &lt;div class='web-browser-support-and-tools-icon-dropdown-container'&gt;...&lt;/div&gt;

  &lt;nav id='tocId' class='toc'&gt;...&lt;/nav&gt;

  &lt;hr /&gt;
  &lt;section&gt;...&lt;/section&gt;
  &lt;hr /&gt;
  &lt;section&gt;...&lt;/section&gt;

 <b>&lt;/div&gt;&lt;!-- Close main section div class='container-fluid'. --&gt;
&lt;/main&gt;</b>

&lt;footer&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>main</code> type selector and the <code>.container-fluid</code> class selector are assigned author styles. The Bootstrap <code>.container-fluid</code> class selector styles are defined in the Bootstrap style sheet <a href='/stylesheets/bootstrap/bootstrap.css'><span class='filename'>bootstrap.css (learnwebcoding)</span></a> file and are too numerous to show. The author style rules that supplement/override Bootstrap styles are indicated:</p>

<!-- Last reviewed/updated: 07 Oct 2016. -->
<pre>
main { display: block; }
/* Supplement/override Bootstrap styles. */
.container-fluid { max-width: 1170px; } /* Content. */
</pre>

     <p>For an example of the main, scroll up and down this web page between the header and the footer. This content is an example of the main.</p>

     <h3><a id='webPageTitle'></a>8.1. Web Page Title</h3>

     <p>The web page title is located near the top of the web page below the <a href='#lwcHomeBreadcrumbsNavigation'>LWC Home breadcrumbs navigation (above)</a>.</p>

     <p>The web page title uses the <code>h1</code> element:</p>

<pre>
&lt;main&gt;
 &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;
  <b>&lt;h1&gt;Web Page Title&lt;/h1&gt;</b>

  &lt;div class='lastReviewed'&gt;...&lt;/div&gt;
  &lt;div class='web-browser-support-and-tools-icon-dropdown-container'&gt;...&lt;/div&gt;

  &lt;nav id='tocId' class='toc'&gt;...&lt;/nav&gt;

  &lt;hr /&gt;
  &lt;section&gt;...&lt;/section&gt;
  &lt;hr /&gt;
  &lt;section&gt;...&lt;/section&gt;

 &lt;/div&gt;&lt;!-- Close main section div class='container-fluid'. --&gt;
&lt;/main&gt;
</pre>

     <p>The <code>h1</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 18 Jun 2016. -->
<pre>
h1 {
  font-size: 2.4em;
  font-weight: normal;
  color: #005a9c;
  margin: 14px 0;
}
</pre>

     <p>For an example of a web page title, go to the top of this web page.</p>

     <h3><a id='lastReviewed'></a>8.2. Last Reviewed/Updated, Published, And Status Information</h3>

     <p>The last reviewed/updated, published, and status information is located near the top of the web page below the <a href='#webPageTitle'>web page title (above)</a>.</p>

     <p>The last reviewed/updated, published, and status information uses the <code>div</code> element with the <code>class='last-reviewed'</code> attribute:</p>

<pre>
&lt;main&gt;
 &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;
  &lt;h1&gt;...&lt;/h1&gt;

  <b>&lt;div class='lastReviewed'&gt;Last reviewed/updated: 07 Oct 2016 | Published: 08 Jan 2014 | Status: Active&lt;/div&gt;</b>
  &lt;div class='web-browser-support-and-tools-icon-dropdown-container'&gt;...&lt;/div&gt;

  &lt;nav id='tocId' class='toc'&gt;...&lt;/nav&gt;

  &lt;hr /&gt;
  &lt;section&gt;...&lt;/section&gt;
  &lt;hr /&gt;
  &lt;section&gt;...&lt;/section&gt;

 &lt;/div&gt;&lt;!-- Close main section div class='container-fluid'. --&gt;
&lt;/main&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>.lastReviewed</code> class selector is assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
.last-reviewed {
  font-size: 0.9em;
  color: #888;
}
</pre>

     <p>Example of the last reviewed/updated, published, status information:</p>

     <div class='last-reviewed'>Last reviewed/updated: 08 Oct 2016 | Published: 08 Jan 2014 | Status: Active</div>

     <h3><a id='webBrowserSupportAndLwcHomeToolsIconDropdown'></a>8.3. Web Browser Support And LWC Home Tools Icon Dropdown</h3>

     <p>The web browser support and LWC Home tools icon dropdown is located near the top of the web page below the <a href='#lastReviewed'>last reviewed/updated, published, and status information (above)</a> and consists of two sections:</p>

     <ul>
      <li><a href='#webBrowserSupport'>Web browser support (below)</a>.</li>
      <li><a href='#lwcHomeToolsIconDropdown'>LWC Home tools icon dropdown (below)</a></li>
     </ul>

     <p>The web browser support and LWC Home tools icon dropdown use the <code>div</code> element with the <code>class='web-browser-support-and-tools-icon-dropdown-container'</code> attribute.</p>

<pre>
&lt;main&gt;
 &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;
  &lt;h1&gt;...&lt;/h1&gt;

  &lt;div class='lastReviewed'&gt;...&lt;/div&gt;
  <b>&lt;div class='web-browser-support-and-tools-icon-dropdown-container'&gt;</b>
   &lt;div class='web-browser-support'&gt;...&lt;/div&gt;
   &lt;div id='toolsIconDropdownContainerId' class='tools-icon-dropdown-container'&gt;...&lt;/div&gt;
   &lt;div class='clear-both'&gt;&lt;/div&gt;
  <b>&lt;/div&gt;</b>

  &lt;nav id='tocId' class='toc'&gt;...&lt;/nav&gt;

  &lt;hr /&gt;
  &lt;section&gt;...&lt;/section&gt;
  &lt;hr /&gt;
  &lt;section&gt;...&lt;/section&gt;

 &lt;/div&gt;&lt;!-- Close main section div class='container-fluid'. --&gt;
&lt;/main&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>.web-browser-support-and-tools-icon-dropdown-container</code> class selector is assigned author styles:</p>

<!-- Last reviewed/updated: 10 Aug 2016. -->
<pre>
.web-browser-support-and-tools-icon-dropdown-container {
  margin: 2px 0 21px;
}
</pre>

     <h4><a id='webBrowserSupport'></a>8.3.1. Web Browser Support</h4>

     <p>The web browser support provides a list of web browsers that the web page supports.</p>

     <p>The web browser support uses the <code>div</code> element with the <code>class='web-browser-support'</code> attribute.</p>

<pre>
&lt;div class='web-browser-support-and-tools-icon-dropdown-container'&gt;
 <b>&lt;div class='web-browser-support'&gt;Web browser support: Internet Explorer 10+, Edge 12+, Firefox 6+, Chrome 30+, Opera 17+&lt;/div&gt;</b>
 &lt;div id='toolsIconDropdownContainerId' class='tools-icon-dropdown-container'&gt;...&lt;/div&gt;
 &lt;div class='clear-both'&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>.web-browser-support</code> class selector is assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
.web-browser-support {
  float: left;
  font-size: 0.9em;
  color: #888;
  margin-right: 20px;
  padding-top: 2px;
}
</pre>

     <p>Example of the web browser support:</p>

     <div class='web-browser-support-and-tools-icon-dropdown-container'>
      <div class='web-browser-support'>Web browser support: Internet Explorer 10+, Edge 12+, Firefox 6+, Chrome 30+, Opera 17+</div>
      <div class='clear-both'></div>
     </div>

     <h4><a id='lwcHomeToolsIconDropdown'></a>8.3.2. LWC Home Tools Icon Dropdown</h4>

     <p>The LWC Home tools icon dropdown uses a clickable <a href='http://fontawesome.io/'>Font Awesome (fontawesome.io)</a> cog (a.k.a., tools) (<span class='fa fa-cog'></span>) icon to display a dropdown from which the user can select to: 1.) display the table of contents expanded, collapsed, or hidden; and 2.) display the web page for screen, printing with images, or printing without images.</p>

     <p>The LWC Home tools icon dropdown uses the <code>div</code> element with the <code>id='toolsIconDropdownContainerId'</code> and <code>class='tools-icon-dropdown-container'</code>, <code>class='fa fa-cog fa-lg cursor-pointer'</code>, <code>id='toolsIconDropdownId'</code> and <code>class='tools-icon-dropdown display-none'</code>, <code>class='tools-icon-dropdown-header'</code>, and <code>id='toolsIconDropdownOption#Id'</code> and <code>class='tools-icon-dropdown-option'</code> attributes, and the <code>span</code> element with the <code>id='toolsIconDropdownOption#MarkerId'</code> attribute and the <code>class='fa fa-check'</code> attribute with or without <code>display-none</code>:</p>

<pre>
&lt;div class='web-browser-support-and-tools-icon-dropdown-container'&gt;
 &lt;div class='web-browser-support'&gt;...&lt;/div&gt;
 <b>&lt;div id='toolsIconDropdownContainerId' class='tools-icon-dropdown-container'&gt;
  &lt;div class='fa fa-cog fa-lg cursor-pointer'&gt;&lt;/div&gt;
  &lt;div id='toolsIconDropdownId' class='tools-icon-dropdown display-none'&gt;
   &lt;div class='tools-icon-dropdown-header'&gt;Table Of Contents&lt;/div&gt;
   &lt;div id='toolsIconDropdownOption1Id' class='tools-icon-dropdown-option'&gt;Show Expanded (F5) &lt;span id='toolsIconDropdownOption1MarkerId' class='fa fa-check'&gt;&lt;/span&gt;&lt;/div&gt;
   &lt;div id='toolsIconDropdownOption2Id' class='tools-icon-dropdown-option'&gt;Show Collapsed &lt;span id='toolsIconDropdownOption2MarkerId' class='fa fa-check display-none'&gt;&lt;/span&gt;&lt;/div&gt;
   &lt;div id='toolsIconDropdownOption3Id' class='tools-icon-dropdown-option'&gt;Hide &lt;span id='toolsIconDropdownOption3MarkerId' class='fa fa-check display-none'&gt;&lt;/span&gt;&lt;/div&gt;
   &lt;div class='tools-icon-dropdown-header'&gt;Display Web Page For&lt;/div&gt;
   &lt;div id='toolsIconDropdownOption4Id' class='tools-icon-dropdown-option'&gt;Screen (F5) &lt;span id='toolsIconDropdownOption4MarkerId' class='fa fa-check'&gt;&lt;/span&gt;&lt;/div&gt;
   &lt;div id='toolsIconDropdownOption5Id' class='tools-icon-dropdown-option'&gt;Printing With Images &lt;span id='toolsIconDropdownOption5MarkerId' class='fa fa-check display-none'&gt;&lt;/span&gt;&lt;/div&gt;
   &lt;div id='toolsIconDropdownOption6Id' class='tools-icon-dropdown-option'&gt;Printing Without Images &lt;span id='toolsIconDropdownOption6MarkerId' class='fa fa-check display-none'&gt;&lt;/span&gt;&lt;/div&gt;
  &lt;/div&gt;
 &lt;/div&gt;</b>
 &lt;div class='clear-both'&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>

     <p>Clicking the Font Awesome tools icon displays the LWC Home tools icon dropdown. The LWC Home tools icon dropdown has six options under two headings:</p>

     <ul>
      <li>Table Of Contents
       <ul>
        <li>Show Expanded (F5) <span class='fa fa-check'></span></li>
        <li>Show Collapsed</li>
        <li>Hide</li>
       </ul>
      </li>
      <li>Display Web Page For
       <ul>
        <li>Screen (F5) <span class='fa fa-check'></span></li>
        <li>Printing With Images</li>
        <li>Printing Without Images</li>
       </ul>
      </li>
     </ul>

     <p>For the <code>id='toolsIconDropdownOption#Id'</code> and <code>id='toolsIconDropdownOption#MarkerId'</code> attributes, replace the number (#) character with the option's position (1 - 6 from top to bottom, excluding dropdown headings) in the LWC Home tools icon dropdown. The Font Awesome check (<span class='fa fa-check'></span>) icon markers indicate the currently displayed versions of the web page. By default, the Table Of Contents Show Expanded (F5) and Display Web Page For Screen (F5) versions are displayed. To indicate this, the <code>span</code> elements corresponding to the Show Expanded (F5) option and the Screen (F5) option do not include the <code>class='display-none'</code> attribute, which allows their check icon markers to be shown, and the <code>span</code> elements corresponding to the other options include the <code>class='display-none'</code> attribute, which causes their check icon markers to be hidden.</p>

     <p>The <code>div</code> and <code>span</code> type selectors and the <code>#toolsIconDropdownContainerId</code>, <code>#toolsIconDropdownId</code>, <code>#toolsIconDropdownOption#Id</code>, and <code>#toolsIconDropdownOption#MarkerId</code> ID selectors are not assigned author styles. The <code>.tools-icon-dropdown-container</code>, <code>.cursor-pointer</code>, <code>.tools-icon-dropdown</code>, <code>.tools-icon-dropdown-header</code>, <code>.tools-icon-dropdown-option</code>, and <code>.display-none</code> class selectors and the <code>.tools-icon-dropdown &gt; div:first-child</code>, <code>.tools-icon-dropdown &gt; div:last-child</code>, and <code>.tools-icon-dropdown-option:hover</code> pseudo-class selectors are assigned author styles. The <code>.fa</code>, <code>.fa-cog</code>, <code>.fa-lg</code>, and <code>.fa-check</code> class selectors are Font Awesome class selectors and are not shown:</p>

<!-- Last reviewed/updated: 27 Jul 2017. -->
<pre>
.tools-icon-dropdown-container { display: inline-block; position: relative; margin-top: 0.5em; }
.tools-icon-dropdown { position: absolute; background-color: #fff; white-space: nowrap; border: 1px solid #c2c2c2; border-radius: 3px; box-shadow: 0 1px 6px 3px #c2c2c2; list-style-type: none; margin-top: 6px; padding-left: 0px; }
.tools-icon-dropdown-header { font-weight: bold; padding: 4px 12px 4px 9px; }
.tools-icon-dropdown-option { cursor: pointer; padding: 4px 12px 4px 18px; }
.tools-icon-dropdown-option:hover { background-color: #f2f2f2; }
.tools-icon-dropdown &gt; div:first-child { padding-top: 8px; }
.tools-icon-dropdown &gt; div:last-child { padding-bottom: 8px; }
.cursor-pointer { cursor: pointer; }
.display-none { display: none; }
@media (min-width: 816px) { .tools-icon-dropdown-container { margin-top: 0; } .web-browser-support, .tools-icon-dropdown-container { float: left; } .tools-icon-dropdown { border: 1px solid #d7d7d7; box-shadow: 0 1px 6px 0 #ccc; margin-top: 3px; } }
</pre>

     <p>If the viewport width is greater than or equal to 816 pixels, the LWC Home tools icon dropdown appears on the same line as the web browser support after the web browser support. If the viewport width is less than 816 pixels, the LWC Home tools icon dropdown appears on a new line underneath the web browser support. Changing the location of the LWC Home tools icon dropdown in the web page ensures that the dropdown remains visible as the viewport width decreases.</p>

     <p>The LWC Home tools icon dropdown uses two LWC Home JavaScript objects. These objects are defined in the LWC Home sitewide JavaScript <a href='/javascripts/lwc/library_load_in_body.js'><span class='filename'>library_load_in_body.js (learnwebcoding.com)</span></a> file, which is loaded into the web browser in the <a href='#assets'><code>&lt;body&gt;&lt;/body&gt;</code> section (above)</a>:</p>

     <ul>
      <li><code>EventUtil</code> object:
       <ul>
        <li>Method: <code>EventUtil.registerEventHandler()</code>. Purpose: to register event handlers cross browser.</li>
       </ul>
      </li>
      <li><code>ToolsIconDropdownUtil</code> object:
       <ul>
        <li>Method: <code>ToolsIconDropdownUtil.showHideToolsIconDropdown()</code>. Purpose: To show/hide the LWC Home tools icon dropdown.</li>
        <li>Method: <code>ToolsIconDropdownUtil.changeDisplayOfWebPage()</code>. Purpose: To change the display of the web page per the selected option. For options 1 - 3, expand, collapse, or hide the <a href='#toc'>table of contents (below)</a> and show/hide the option check icon markers. For options 4 - 6, show/hide the <a href='#headerSection'><code>&lt;header&gt;&lt;/header&gt;</code> section (above)</a> content, change an external style sheet, and show/hide the option check icon markers.</li>
       </ul>
      </li>
     </ul>

     <p>Selecting the Display Web Page For options 4 - 6 triggers the <code>ToolsIconDropdownUtil.changeDisplayOfWebPage()</code> method to change the display of the web page for screen or printing. The <code>ToolsIconDropdownUtil.changeDisplayOfWebPage()</code> method accomplishes this by showing/hiding the <code>&lt;header&gt;&lt;/header&gt;</code> section content and by setting an external style sheet file on the JavaScript <code>href</code> property of the <code>link</code> element with the <code>id='changeableExtSSLinkElementId'</code> attribute. So that the styles of this dynamically changeable external style sheet may supplement/override the styles of the LWC Home sitewide main style sheet, the changeable external style sheet is placed/loaded after the LWC Home sitewide main style sheet:</p>

<pre>
&lt;head&gt;
 &lt;title&gt;Learn Web Coding Home Template&lt;/title&gt;&lt;!-- No markup in title tags. --&gt;
 &lt;meta charset='UTF-8' /&gt;
 &lt;meta name='Author' content='Steve Taylor' /&gt;
 &lt;meta name='Keywords' content='Learn Web Coding Home, web page, template, cap words as if used in sentence' /&gt;&lt;!-- Cap words as if used in sentence. No markup in Keywords. --&gt;
 &lt;meta name='Description' content='The Learn Web Coding Home Template.' /&gt;&lt;!-- Sentence and/or structured data less than 160 char per Google. No markup in Description. --&gt;
 &lt;meta name='viewport' content='width=device-width, initial-scale=1' /&gt;
 &lt;link rel='stylesheet' type='text/css' media='all' href='/stylesheets/fontawesome/font-awesome.min.css' /&gt;
 &lt;link rel='stylesheet' type='text/css' media='all' href='/stylesheets/bootstrap/bootstrap.min.css' /&gt;
 <b>&lt;link rel='stylesheet' type='text/css' media='all' href='/stylesheets/lwc/lwc.min.css' /&gt;
 &lt;link rel='stylesheet' type='text/css' media='all' href='/stylesheets/lwc/print_default.min.css' id='changeableExtSSLinkElementId' /&gt;</b>
&lt;/head&gt;
</pre>

     <p>The effect of selecting the LWC Home tools icon dropdown Display Web Page For options on the <code>&lt;header&gt;&lt;/header&gt;</code> section content and the changeable external style sheet:</p>

     <table>
      <caption>The Effect Of Selecting The LWC Home Tools Icon Dropdown Display Web Page For Options On The <code>&lt;header&gt;&lt;/header&gt;</code> Section Content And The Changeable External Style Sheet</caption>
      <thead>
       <tr>
        <th>Display Web Page For Option</th>
        <th><code>&lt;header&gt;&lt;/header&gt;</code> Section Content</th>
        <th>Sets Changeable External Style Sheet To</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>Screen (F5)</td>
        <td>Shown</td>
        <td><span class='filename'>print_default.min.css</span></td>
       </tr>
       <tr>
        <td>Printing With Images</td>
        <td>Hidden</td>
        <td><span class='filename'>print_with_images.min.css</span></td>
       </tr>
       <tr>
        <td>Printing Without Images</td>
        <td>Hidden</td>
        <td><span class='filename'>print_without_images.min.css</span></td>
       </tr>
     </table>

     <p>If the Display Web Page For Screen (F5) option is selected, <code>ToolsIconDropdownUtil.changeDisplayOfWebPage()</code> sets the changeable external style sheet to <span class='filename'>print_default.min.css</span>, which is a dummy style sheet that contains no styles and, therefore, does not supplement/override any of the LWC Home sitewide main style sheet styles.</p>

     <div class='note normal'>Using a dummy style sheet, as opposed to an empty <code>href=''</code> attribute, allows the LWC Home Template to be valid CSS Level 3 per the W3C CSS Validation Service.</div>

     <p>If the Display Web Page For Printing With Images option is selected, <code>ToolsIconDropdownUtil.changeDisplayOfWebPage()</code> sets the changeable external style sheet to <span class='filename'>print_with_images.min.css</span>, which stops content from exceeding the width of the page and reduces black ink usage:</p>

<!-- Last reviewed/updated: 18 Jun 2016. -->
<pre>
/* Supplement/Override Bootstrap Styles (/stylesheets/bootstrap/bootstrap.css) */
.container-fluid { max-width: 100%; }
/* Supplement/Override LWC Home Main Style Sheet Styles (/stylesheets/lwc/lwc.css) */
body { color: #333; }
pre, caption, .note, code { background-color: #fff; }
.note code, .note pre { background-color: #fff; }
.toc a { color: #333; }
.link-list &gt; li &gt; a { color: #333; }
</pre>

     <p>If the Display Web Page For Printing Without Images option is selected, <code>ToolsIconDropdownUtil.changeDisplayOfWebPage()</code> sets the changeable external style sheet to <span class='filename'>print_without_images.min.css</span>, which stops content from exceeding the width of the page, reduces black ink usage, and stops images from being shown and printed:</p>

<!-- Last reviewed/updated: 18 Jun 2016. -->
<pre>
/* Supplement/Override Bootstrap Styles (/stylesheets/bootstrap/bootstrap.css) */
.container-fluid { max-width: 100%; }
/* Supplement/Override LWC Home Styles (/stylesheets/lwc/lwc.css) */
body { color: #333; }
pre, caption, .note, code { background-color: #fff; }
.note code, .note pre { background-color: #fff; }
.toc a { color: #333; }
.link-list &gt; li &gt; a { color: #333; }
img, footer img, .img-rt-pnt-tri { display: none; }
</pre>

     <p>For an example of the LWC Home tools icon dropdown, go to the top of this web page and click the tools (<span class='fa fa-cog'></span>) icon.</p>

     <h3><a id='toc'></a>8.4. Table Of Contents</h3>

<!--
<div class='note normal'>The table of contents is adapted from the table of content in	<a href='http://www.w3.org/TR/2014/CR-css3-background-20140909/'>CSS Backgrounds And Borders Module Level 3: W3C Candidate Recommendation 9 September 2014 (w3.org)</a>.</div>
-->

     <p>The table of contents is located near the top of the web page below the <a href='#webBrowserSupportAndLwcHomeToolsIconDropdown'>web browser support and LWC Home tools icon dropdown (above)</a> and lists, and links to, <a href='#sections'>sections (below)</a>. There are three levels of section titles. Correspondingly, there are three levels of table of contents section titles:</p>

     <ul>
      <li>Table of contents <em>section</em> titles.</li>
      <li>Table of contents <em>subsection</em> titles.</li>
      <li>Table of contents <em>subsubsection</em> titles.</li>
      <li>Table of contents <em>subsubsubsection</em> titles.</li>
     </ul>

     <p>The table of contents uses the <code>nav</code> element with the <code>id='tocId'</code> and <code>class='toc'</code> attributes:</p>

<pre>
&lt;main&gt;
 &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;
  &lt;h1&gt;...&lt;/h1&gt;

  &lt;div class='lastReviewed'&gt;...&lt;/div&gt;
  &lt;div class='web-browser-support-and-tools-icon-dropdown-container'&gt;...&lt;/div&gt;

  <b>&lt;nav id='tocId' class='toc'&gt;</b>
   &lt;div class='toc-sec'&gt;&lt;div class='toc-num'&gt;99.&lt;/div&gt;&lt;div class='toc-sec-title'&gt;&lt;a href='#sectionTitle'&gt;Section Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
   &lt;div class='toc-sub1sec'&gt;&lt;div class='toc-num'&gt;99.1.&lt;/div&gt;&lt;div class='toc-sub1sec-title'&gt;&lt;a href='#subsectionTitle'&gt;Subsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
   &lt;div class='toc-sub2sec'&gt;&lt;div class='toc-num'&gt;99.1.1.&lt;/div&gt;&lt;div class='toc-sub2sec-title'&gt;&lt;a href='#subsubsectionTitle'&gt;Subsubsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
   &lt;div class='toc-sub3sec'&gt;&lt;div class='toc-num'&gt;99.1.1.1.&lt;/div&gt;&lt;div class='toc-sub3sec-title'&gt;&lt;a href='#subsubsubsectionTitle'&gt;Subsubsubsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
  <b>&lt;/nav&gt;</b>

  &lt;hr /&gt;
  &lt;section&gt;...&lt;/section&gt;
  &lt;hr /&gt;
  &lt;section&gt;...&lt;/section&gt;

 &lt;/div&gt;&lt;!-- Close main section div class='container-fluid'. --&gt;
&lt;/main&gt;
</pre>

     <p>The <code>nav</code> type selector, the <code>#tocId</code> ID selector, and the <code>.toc</code> class selector are not assigned author styles.</p>

     <h4><a id='tocSectionTitles'></a>8.4.1. Table Of Contents Section Titles</h4>

     <p>The table of contents section titles use the <code>div</code> element with the <code>class='toc-sec'</code>, <code>class='toc-num'</code>, or <code>class='toc-sec-title'</code> attribute and the <code>a</code> element with the <code>href</code> attribute:</p>

<pre>
&lt;nav id='tocId' class='toc'&gt;
 <b>&lt;div class='toc-sec'&gt;&lt;div class='toc-num'&gt;99.&lt;/div&gt;&lt;div class='toc-sec-title'&gt;&lt;a href='#sectionTitle'&gt;Section Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;</b>
 &lt;div class='toc-sub1sec'&gt;&lt;div class='toc-num'&gt;99.1.&lt;/div&gt;&lt;div class='toc-sub1sec-title'&gt;&lt;a href='#subsectionTitle'&gt;Subsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
 &lt;div class='toc-sub2sec'&gt;&lt;div class='toc-num'&gt;99.1.1.&lt;/div&gt;&lt;div class='toc-sub2sec-title'&gt;&lt;a href='#subsubsectionTitle'&gt;Subsubsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
 &lt;div class='toc-sub3sec'&gt;&lt;div class='toc-num'&gt;99.1.1.1.&lt;/div&gt;&lt;div class='toc-sub3sec-title'&gt;&lt;a href='#subsubsubsectionTitle'&gt;Subsubsubsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
&lt;/nav&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>a</code> type selector, the <code>.toc a</code> descendant selector, the <code>.toc &gt; div</code> child selector, the <code>.toc-sec</code>, <code>.toc-num</code>, and <code>.toc-sec-title</code> class selectors, and the <code>a:hover</code> pseudo-class selector are assigned author styles:</p>

<!-- Last reviewed/updated: 28 Jan 2017. -->
<pre>
a { <s>color: #005a9c;</s> text-decoration: none; } /* From normal hyperlinks below. */
a:hover { <s>color: #000;</s> text-decoration: underline; } /* From normal hyperlinks below. */
a:focus { <s>outline: thin dotted invert;</s> } /* From normal hyperlinks below. */ /* Focus does not work on intra-page hyperlinks; hence, strike-through. */
.toc a { color: #000; }
.toc-sec { font-weight: bold; line-height: 1.75; }
.toc-num { float: left; }
.toc-sec-title { margin-left: 5em; }
.toc &gt; div { clear: both; }
</pre>

     <p>Example of a table of contents section title:</p>

     <nav id='tocIdUnique1' class='toc'>
      <div class='toc-sec'><div class='toc-num'>99.</div><div class='toc-sec-title'><a href='#sectionTitle'>Section Title First Letter Each Word Cap</a></div></div>
     </nav>

     <h4><a id='tocSubsectionTitles'></a>8.4.2. Table Of Contents Subsection Titles</h4>

     <p>The table of contents subsection titles use the <code>div</code> element with the <code>class='toc-sub1sec'</code>, <code>class='toc-num'</code>, or <code>class='toc-sub1sec-title'</code> attribute and the <code>a</code> element with the <code>href</code> attribute:</p>

<pre>
&lt;nav id='tocId' class='toc'&gt;
 &lt;div class='toc-sec'&gt;&lt;div class='toc-num'&gt;99.&lt;/div&gt;&lt;div class='toc-sec-title'&gt;&lt;a href='#sectionTitle'&gt;Section Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
 <b>&lt;div class='toc-sub1sec'&gt;&lt;div class='toc-num'&gt;99.1.&lt;/div&gt;&lt;div class='toc-sub1sec-title'&gt;&lt;a href='#subsectionTitle'&gt;Subsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;</b>
 &lt;div class='toc-sub2sec'&gt;&lt;div class='toc-num'&gt;99.1.1.&lt;/div&gt;&lt;div class='toc-sub2sec-title'&gt;&lt;a href='#subsubsectionTitle'&gt;Subsubsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
 &lt;div class='toc-sub3sec'&gt;&lt;div class='toc-num'&gt;99.1.1.1.&lt;/div&gt;&lt;div class='toc-sub3sec-title'&gt;&lt;a href='#subsubsubsectionTitle'&gt;Subsubsubsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
&lt;/nav&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>a</code> type selector, the <code>.toc a</code> descendant selector, the <code>.toc &gt; div</code> child selector, the <code>.toc-sub1sec</code>, <code>.toc-num</code>, and <code>.toc-sub1sec-title</code> class selectors, and the <code>a:hover</code> pseudo-class selector are assigned author styles:</p>

<!-- Last reviewed/updated: 28 Jan 2017. -->
<pre>
a { <s>color: #005a9c;</s> text-decoration: none; } /* From normal hyperlinks below. */
a:hover { <s>color: #000;</s> text-decoration: underline; } /* From normal hyperlinks below. */
a:focus { <s>outline: thin dotted invert;</s> } /* From normal hyperlinks below. */ /* Focus does not work on intra-page hyperlinks; hence, strike-through. */
.toc a { color: #000; }
.toc-sub1sec { line-height: 1.75; }
.toc-num { float: left; }
.toc-sub1sec-title { margin-left: 5.75em; }
.toc &gt; div { clear: both; }
</pre>

     <p>Example of a table of contents subsection title:</p>

     <nav id='tocIdUnique2' class='toc'>
      <div class='toc-sub1sec'><div class='toc-num'>99.1.</div><div class='toc-sub1sec-title'><a href='#subsectionTitle'>Subsection Title First Letter Each Word Cap</a></div></div>
     </nav>

     <h4><a id='tocSubsubsectionTitles'></a>8.4.3. Table Of Contents Subsubsection Titles</h4>

     <p>Table of contents subsubsection titles use the <code>div</code> element with the <code>class='toc-sub2sec'</code>, <code>class='toc-num'</code>, or <code>class='toc-sub2sec-title'</code> attribute and the <code>a</code> element with the <code>href</code> attribute:</p>

<pre>
&lt;nav id='tocId' class='toc'&gt;
 &lt;div class='toc-sec'&gt;&lt;div class='toc-num'&gt;99.&lt;/div&gt;&lt;div class='toc-sec-title'&gt;&lt;a href='#sectionTitle'&gt;Section Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
 &lt;div class='toc-sub1sec'&gt;&lt;div class='toc-num'&gt;99.1.&lt;/div&gt;&lt;div class='toc-sub1sec-title'&gt;&lt;a href='#subsectionTitle'&gt;Subsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
 <b>&lt;div class='toc-sub2sec'&gt;&lt;div class='toc-num'&gt;99.1.1.&lt;/div&gt;&lt;div class='toc-sub2sec-title'&gt;&lt;a href='#subsubsectionTitle'&gt;Subsubsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;</b>
 &lt;div class='toc-sub3sec'&gt;&lt;div class='toc-num'&gt;99.1.1.1.&lt;/div&gt;&lt;div class='toc-sub3sec-title'&gt;&lt;a href='#subsubsubsectionTitle'&gt;Subsubsubsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
&lt;/nav&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>a</code> type selector, the <code>.toc a</code> descendant selector, the <code>.toc &gt; div</code> child selector, the <code>.toc-sub2sec</code>, <code>.toc-num</code>, and <code>.toc-sub2sec-title</code> class selectors, and the <code>a:hover</code> pseudo-class selector are assigned author styles:</p>

<!-- Last reviewed/updated: 28 Jan 2017. -->
<pre>
a { <s>color: #005a9c;</s> text-decoration: none; } /* From normal hyperlinks below. */
a:hover { <s>color: #000;</s> text-decoration: underline; } /* From normal hyperlinks below. */
a:focus { <s>outline: thin dotted invert;</s> } /* From normal hyperlinks below. */ /* Focus does not work on intra-page hyperlinks; hence, strike-through. */
.toc a { color: #000; }
.toc-sub2sec { line-height: 1.75; }
.toc-num { float: left; }
.toc-sub2sec-title { margin-left: 6.5em; }
.toc &gt; div { clear: both; }
</pre>

     <p>Example of a table of contents subsubsection title:</p>

     <div id='tocIdUnique3' class='toc'>
      <div class='toc-sub2sec'><div class='toc-num'>99.1.1.</div><div class='toc-sub2sec-title'><a href='#subsubsectionTitle'>Subsubsection Title First Letter Each Word Cap</a></div></div>
     </div>

     <h4><a id='tocSubsubsubsectionTitles'></a>8.4.4. Table Of Contents Subsubsubsection Titles</h4>

     <p>Table of contents subsubsubsection titles use the <code>div</code> element with the <code>class='toc-sub3sec'</code>, <code>class='toc-num'</code>, or <code>class='toc-sub3sec-title'</code> attribute and the <code>a</code> element with the <code>href</code> attribute:</p>

<pre>
&lt;nav id='tocId' class='toc'&gt;
 &lt;div class='toc-sec'&gt;&lt;div class='toc-num'&gt;99.&lt;/div&gt;&lt;div class='toc-sec-title'&gt;&lt;a href='#sectionTitle'&gt;Section Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
 &lt;div class='toc-sub1sec'&gt;&lt;div class='toc-num'&gt;99.1.&lt;/div&gt;&lt;div class='toc-sub1sec-title'&gt;&lt;a href='#subsectionTitle'&gt;Subsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
 &lt;div class='toc-sub2sec'&gt;&lt;div class='toc-num'&gt;99.1.1.&lt;/div&gt;&lt;div class='toc-sub2sec-title'&gt;&lt;a href='#subsubsectionTitle'&gt;Subsubsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;
 <b>&lt;div class='toc-sub3sec'&gt;&lt;div class='toc-num'&gt;99.1.1.1.&lt;/div&gt;&lt;div class='toc-sub3sec-title'&gt;&lt;a href='#subsubsubsectionTitle'&gt;Subsubsubsection Title&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;</b>
&lt;/nav&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>a</code> type selector, the <code>.toc a</code> descendant selector, the <code>.toc &gt; div</code> child selector, the <code>.toc-sub3sec</code>, <code>.toc-num</code>, and <code>.toc-sub3sec-title</code> class selectors, and the <code>a:hover</code> pseudo-class selector are assigned author styles:</p>

<!-- Last reviewed/updated: 28 Jan 2017. -->
<pre>
a { <s>color: #005a9c;</s> text-decoration: none; } /* From normal hyperlinks below. */
a:hover { <s>color: #000;</s> text-decoration: underline; } /* From normal hyperlinks below. */
a:focus { <s>outline: thin dotted invert;</s> } /* From normal hyperlinks below. */ /* Focus does not work on intra-page hyperlinks; hence, strike-through. */
.toc a { color: #000; }
.toc-sub3sec { line-height: 1.75; }
.toc-num { float: left; }
.toc-sub3sec-title { margin-left: 7.25em; }
.toc &gt; div { clear: both; }
</pre>

     <p>Example of a table of contents subsubsubsection title:</p>

     <div id='tocIdUnique4' class='toc'>
      <div class='toc-sub3sec'><div class='toc-num'>99.1.1.1.</div><div class='toc-sub3sec-title'><a href='#subsubsubsectionTitle'>Subsubsubsection Title First Letter Each Word Cap</a></div></div>
     </div>

     <h3><a id='sections'></a>8.5. <code>&lt;section&gt;&lt;/section&gt;</code> Sections</h3>

     <p>One or more <code>&lt;section&gt;&lt;/section&gt;</code> sections typically constitute the majority of the web page content and are located between the <a href='#toc'>table of contents (above)</a> and the <a href='#footerSection'><code>&lt;footer&gt;&lt;/footer&gt;</code> section (below)</a>. There are three levels of section titles:</p>

     <ul>
      <li><em>Section</em> titles.</li>
      <li><em>Subsection</em> titles.</li>
      <li><em>Subsubsection</em> titles.</li>
      <li><em>Subsubsubsection</em> titles.</li>
     </ul>

     <p>A section consists of a section title and all of its subsection titles and subsubsection titles. Sections use the <code>section</code> element. Each section is preceded by an <code>&lt;hr /&gt;</code> tag. There is no <code>&lt;hr /&gt;</code> tag after the last closing <code>&lt;/section&gt;</code> tag:</p>

<pre>
&lt;main&gt;
 &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;
  &lt;h1&gt;...&lt;/h1&gt;

  &lt;div class='lastReviewed'&gt;...&lt;/div&gt;
  &lt;div class='web-browser-support-and-tools-icon-dropdown-container'&gt;...&lt;/div&gt;

  &lt;nav id='tocId' class='toc'&gt;...&lt;/nav&gt;

  <b>&lt;hr /&gt;
  &lt;section&gt;</b>

   &lt;h2&gt;&lt;a id='sectionTitle'&gt;&lt;/a&gt;99. Section Title&lt;/h2&gt;
   &lt;p&gt;Content.&lt;/p&gt;
   &lt;h3&gt;&lt;a id='subsectionTitle'&gt;&lt;/a&gt;99.1. Subsection Title&lt;/h3&gt;
   &lt;p&gt;Content.&lt;/p&gt;
   &lt;h4&gt;&lt;a id='subsubsectionTitle'&gt;&lt;/a&gt;99.1.1. Subsubsection Title&lt;/h4&gt;
   &lt;p&gt;Content.&lt;/p&gt;
   &lt;h5&gt;&lt;a id='subsubsubsectionTitle'&gt;&lt;/a&gt;99.1.1.1. Subsubsubsection Title&lt;/h5&gt;
   &lt;p&gt;Content.&lt;/p&gt;

  <b>&lt;/section&gt;
  &lt;hr /&gt;
  &lt;section&gt;</b>

   &lt;h2&gt;&lt;a id='sectionTitle'&gt;&lt;/a&gt;100. Section Title&lt;/h2&gt;
   &lt;p&gt;Content.&lt;/p&gt;
   &lt;h3&gt;&lt;a id='subsectionTitle'&gt;&lt;/a&gt;100.1. Subsection Title&lt;/h3&gt;
   &lt;p&gt;Content.&lt;/p&gt;
   &lt;h4&gt;&lt;a id='subsubsectionTitle'&gt;&lt;/a&gt;100.1.1. Subsubsection Title&lt;/h4&gt;
   &lt;p&gt;Content.&lt;/p&gt;
   &lt;h5&gt;&lt;a id='subsubsubsectionTitle'&gt;&lt;/a&gt;100.1.1.1. Subsubsubsection Title&lt;/h5&gt;
   &lt;p&gt;Content.&lt;/p&gt;

  <b>&lt;/section&gt;</b>

 &lt;/div&gt;&lt;!-- Close main section div class='container-fluid'. --&gt;
&lt;/main&gt;
</pre>

     <h4><a id='sectionTitles'></a>8.5.1. Section Titles</h4>

     <p>Section titles use the <code>h2</code> element and the <code>a</code> element with the <code>id='sectionTitle'</code> attribute. The <code>&lt;a id='sectionTitle'&gt;&lt;/a&gt;</code> tag has no content:</p>

<pre>
&lt;h2&gt;&lt;a id='sectionTitle'&gt;&lt;/a&gt;99. Section Title&lt;/h2&gt;
</pre>

     <p>The <code>h2</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 19 Jun 2016. -->
<pre>
h2 {
  font-size: 1.8em;
  font-weight: normal;
  color: #005a9c;
  margin: 28px 0 14px;
}
</pre>

     <p>Example of a section title:</p>

     <h2><a id='sectionTitle'></a>99. Section Title First Letter Each Word Cap</h2>

     <h4><a id='subsectionTitles'></a>8.5.2. Subsection Titles</h4>

     <p>Subsection titles use the <code>h3</code> element and the <code>a</code> element with the <code>id='subsectionTitle'</code> attribute. The <code>&lt;a id='subsectionTitle'&gt;&lt;/a&gt;</code> tag has no content:</p>

<pre>
&lt;h3&gt;&lt;a id='subsectionTitle'&gt;&lt;/a&gt;99.1. Subsection Title&lt;/h3&gt;
</pre>

     <p>The <code>h3</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 19 Jun 2016. -->
<pre>
h3 {
  font-size: 1.5em;
  font-weight: normal;
  color: #005a9c;
  margin: 21px 0 14px;
}
</pre>

     <p>Example of a subsection title:</p>

     <h3><a id='subsectionTitle'></a>99.1. Subsection Title First Letter Each Word Cap</h3>

     <h4><a id='subsubsectionTitles'></a>8.5.3. Subsubsection Titles</h4>

     <p>Subsubsection titles use the <code>h4</code> element and the <code>a</code> element with the <code>id='subsubsectionTitle'</code> attribute. The <code>&lt;a id='subsubsectionTitle'&gt;&lt;/a&gt;</code> tag has no content:</p>

<pre>
&lt;h4&gt;&lt;a id='subsubsectionTitle'&gt;&lt;/a&gt;99.1.1. Subsubsection Title&lt;/h4&gt;
</pre>

     <p>The <code>h4</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 28 Jan 2017. -->
<pre>
h4 {
  font-size: 1.2em;
  font-weight: normal;
  color: #005a9c;
  margin: 21px 0 14px;
}
</pre>

     <p>Example of a subsubsection title:</p>

     <h4><a id='subsubsectionTitle'></a>99.1.1. Subsubsection Title First Letter Each Word Cap</h4>

     <h4><a id='subsubsubsectionTitles'></a>8.5.4. Subsubsubsection Titles</h4>

     <p>Subsubsubsection titles use the <code>h5</code> element and the <code>a</code> element with the <code>id='subsubsubsectionTitle'</code> attribute. The <code>&lt;a id='subsubsubsectionTitle'&gt;&lt;/a&gt;</code> tag has no content:</p>

<pre>
&lt;h5&gt;&lt;a id='subsubsubsectionTitle'&gt;&lt;/a&gt;99.1.1. Subsubsubsection Title&lt;/h5&gt;
</pre>

     <p>The <code>h5</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 28 Jan 2017. -->
<pre>
h5 {
  font-size: 1.1em;
  font-weight: normal;
  color: #005a9c;
  margin: 21px 0 14px;
}
</pre>

     <p>Example of a subsubsubsection title:</p>

     <h5><a id='subsubsubsectionTitle'></a>99.1.1.1. Subsubsubsection Title First Letter Each Word Cap</h5>

    </section>
    <hr />
    <section>

     <h2><a id='footerSection'></a>9. <code>&lt;footer&gt;&lt;/footer&gt;</code> Section</h2>

     <p>The <code>&lt;footer&gt;&lt;/footer&gt;</code> section (a.k.a., footer) is located at the bottom of the web page and consists of two sections:</p>

     <ul>
      <li>LWC logo. The LWC logo is a hyperlink to the LWC home page.</li>
      <li>W3C Valid HTML5 and Valid CSS Level 3 buttons. The W3C Valid HTML5 and Valid CSS Level 3 buttons are for validating the web page HTML and CSS code, respectively. To validate, click the buttons.</li>
     </ul>

     <p>The footer uses the <code>footer</code> element and the <code>div</code> element with the <code>class='container-fluid'</code> attribute:</p>

<pre>
 &lt;/main&gt;

 <b>&lt;footer&gt;
  &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;</b>
  ...
  <b>&lt;/div&gt;&lt;!-- Close footer section div class='container-fluid'. --&gt;
 &lt;/footer&gt;</b>

 Assets loaded in the body section
&lt;/body&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>footer</code> type selector and the <code>.container-fluid</code> class selector are assigned author styles. The Bootstrap <code>.container-fluid</code> class selector styles are defined in the Bootstrap style sheet <a href='/stylesheets/bootstrap/bootstrap.css'><span class='filename'>bootstrap.css (learnwebcoding)</span></a> file and are too numerous to show. The author style rules that supplement/override Bootstrap styles are indicated:</p>

<!-- Last reviewed/updated: 18 Jun 2016. -->
<pre>
footer { display: block; margin: 1em 0; }
/* Supplement/override Bootstrap styles. */
.container-fluid { max-width: 1170px; } /* Content. */
</pre>

     <p>The LWC logo uses the <code>div</code> element and the <code>a</code> element with the <code>href</code> and <code>class='link-lwc-logo'</code>attributes. The W3C Valid HTML5 and Valid CSS Level 3 buttons use the <code>div</code> element, the <code>a</code> element with the <code>href</code> attribute, and the <code>img</code> element with the <code>src</code> and <code>alt</code> attributes:</p>

<pre>
&lt;footer&gt;
 &lt;div class='container-fluid'&gt;&lt;!-- container-fluid from Bootstrap. --&gt;
  <b>&lt;div&gt;&lt;a href='http://www.learnwebcoding.com/' class='link-lwc-logo'&gt;Learn Web Coding&lt;/a&gt;&lt;/div&gt;
  &lt;div&gt;&lt;a href='https://validator.w3.org/check?uri=referer'&gt;&lt;img src='/images/HTML5_Logo_48.gif' alt='Valid HTML5' /&gt;&lt;/a&gt;&nbsp;&lt;a href='http://jigsaw.w3.org/css-validator/check?uri=referer&amp;profile=css3'&gt;&lt;img src='/images/valid-css.gif' alt='Valid CSS Level 3' /&gt;&lt;/a&gt;&lt;/div&gt;</b>
 &lt;/div&gt;&lt;!-- Close footer section div class='container-fluid'. --&gt;
&lt;/footer&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>a</code> type selector, the <code>footer a</code> and <code>footer img</code> descendant selectors, the <code>.link-lwc-logo</code> class selector, and the <code>a:hover</code>, <code>a:focus</code>, <code>footer a:focus</code>, <code>.link-lwc-logo:hover</code>, and <code>.link-lwc-logo:focus</code> pseudo-class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
a { <s>color: #005a9c;</s> text-decoration: none; } /* From normal hyperlinks below. */
a:hover { color: #000; <s>text-decoration: underline;</s> } /* From normal hyperlinks below. */
a:focus { <s>outline: thin dotted invert;</s> } /* From normal hyperlinks below. */
footer a { <s>color: #888;</s> }
footer a:focus { <s>outline: 0;</s> }
.link-lwc-logo { font-family: &quot;courier new&quot;, courier, monospace; font-size: 1.5em; font-weight: bold; color: #000; }
.link-lwc-logo:hover { text-decoration: none; }
.link-lwc-logo:focus { outline: 0; }
footer img { display: inline; }
</pre>

     <p>For an example of the footer, go to the bottom of this web page.</p>

    </section>
    <hr />
    <section>

     <h2><a id='paragraphs'></a>10. Paragraphs</h2>

     <p>Paragraphs use the <code>p</code> element:</p>

<pre>
&lt;p&gt;Paragraph.&lt;/p&gt;
</pre>

     <p>The <code>p</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 19 Jun 2016. -->
<pre>
p {
  line-height: 1.75;
  margin: 1em 0;
}
</pre>

     <p>Examples of paragraphs:</p>

     <p>Paragraph.</p>

     <p>Paragraph.</p>

    </section>
    <hr />
    <section>

     <h2><a id='lists'></a>11. Lists</h2>

     <p>Lists use the <code>ol</code>, <code>ul</code>, and <code>li</code> elements:</p>

<pre>
&lt;ol&gt;
 &lt;li&gt;Ordered list | list item.&lt;/li&gt;
 &lt;li&gt;List item.&lt;/li&gt;
&lt;/ol&gt;
</pre>

<pre>
&lt;ul&gt;
 &lt;li&gt;Unordered list | list item.&lt;/li&gt;
 &lt;li&gt;List item.&lt;/li&gt;
&lt;/ul&gt;
</pre>

     <p>The <code>ol</code>, <code>ul</code>, and <code>li</code> type selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 19 Jun 2016. -->
<pre>
li {
  line-height: 1.75;
}
ol, ul {
  margin: 1em 0;
}
ul {
  list-style-type: disc;
}
</pre>

     <p>Examples of lists:</p>

     <ol>
      <li>Ordered list is for list items that occur in order.</li>
      <li>List item first letter first word cap end with period.</li>
     </ol>

     <ul>
      <li>Unordered list is for list items that do not occur in order.</li>
      <li>List item first letter first word cap end with period.</li>
     </ul>

     <ol>
      <li>Ordered list is for list items that occur in order.</li>
      <li>List item first letter first word cap end with period.</li>
     </ol>

     <ul>
      <li>Unordered list is for list items that do not occur in order.</li>
      <li>List item first letter first word cap end with period.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='listsWithIntroductoryText'></a>12. Lists With Introductory Text</h2>

     <p>Lists with introductory text are lists preceded by introductory text for the list.</p>

     <p>Lists use the <code>ol</code>, <code>ul</code>, and <code>li</code> elements. The introductory text for the list uses the <code>p</code> element and ends with a period (.) or colon (:):</p>

<pre>
&lt;p&gt;Paragraph.&lt;/p&gt;
&lt;ol&gt;
 &lt;li&gt;Ordered list | list item.&lt;/li&gt;
 &lt;li&gt;List item.&lt;/li&gt;
&lt;/ol&gt;
</pre>

<pre>
&lt;p&gt;Paragraph:&lt;/p&gt;
&lt;ul&gt;
 &lt;li&gt;Unordered list | list item.&lt;/li&gt;
 &lt;li&gt;List item.&lt;/li&gt;
&lt;/ul&gt;
</pre>

     <p>The <code>p</code>, <code>ol</code>, <code>ul</code>, and <code>li</code> type selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 19 Jun 2016. -->
<pre>
p, li {
  line-height: 1.75;
}
p, ol, ul {
  margin: 1em 0;
}
ul {
  list-style-type: disc;
}
</pre>

     <p>Examples of lists with introductory text:</p>

     <p>Paragraph ending with a <em>period</em> as introductory text for an ordered list.</p>

     <ol>
      <li>Ordered list is for list items that occur in order.</li>
      <li>List item first letter first word cap end with period.</li>
     </ol>

     <p>Paragraph ending with a <em>colon</em> as introductory text for an ordered list:</p>

     <ol>
      <li>Ordered list is for list items that occur in order.</li>
      <li>List item first letter first word cap end with period.</li>
     </ol>

     <p>Paragraph ending with a <em>period</em> as introductory text for an unordered list.</p>

     <ul>
      <li>Unordered list is for list items that do not occur in order.</li>
      <li>List item first letter first word cap end with period.</li>
     </ul>

     <p>Paragraph ending with a <em>colon</em> as introductory text for an unordered list:</p>

     <ul>
      <li>unordered list is for list items that do not occur in order.</li>
      <li>list item, if completing sentence started by introductory text, first letter first word no cap end with period. Otherwise, first letter first word cap end with period.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='listsInLists'></a>13. Lists In Lists</h2>

     <p>Lists in lists are lists nested in lists.</p>

     <p>Lists, and the lists nested in the lists, use the <code>ol</code>, <code>ul</code>, and <code>li</code> elements. The list nested in the list is placed in <code>&lt;li&gt;&lt;/li&gt;</code> tags, typically after the content and before the closing <code>&lt;/li&gt;</code> tag:</p>

<pre>
&lt;ol&gt;
 &lt;li&gt;Ordered list | list item.&lt;/li&gt;
 &lt;li&gt;List item.
  &lt;ul&gt;
   &lt;li&gt;Unordered list | list item.&lt;/li&gt;
   &lt;li&gt;List item.&lt;/li&gt;
  &lt;/ul&gt;
 &lt;/li&gt;
 &lt;li&gt;List item.&lt;/li&gt;
&lt;/ol&gt;
</pre>

<pre>
&lt;ul&gt;
 &lt;li&gt;Unordered list | list item.&lt;/li&gt;
 &lt;li&gt;List item.
  &lt;ol&gt;
   &lt;li&gt;Ordered list | list item.&lt;/li&gt;
   &lt;li&gt;List item.&lt;/li&gt;
  &lt;/ol&gt;
 &lt;/li&gt;
 &lt;li&gt;List item.&lt;/li&gt;
&lt;/ul&gt;
</pre>

     <p>The <code>ol</code>, <code>ul</code>, and <code>li</code> type selectors and the <code>ol ol</code>, <code>ol ul</code>, <code>ul ol</code>, and <code>ul ul</code> descendant selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 20 Jun 2016. -->
<pre>
li {
  line-height: 1.75;
}
ol, ul {
  margin: 1em 0;
}
ol ol, ol ul, ul ol, ul ul {
  margin: 0.5em 0;
}
ul {
  list-style-type: disc;
}
</pre>

     <p>Examples of lists in lists:</p>

     <ol>
      <li>Ordered list is for list items that occur in order.
       <ol>
        <li>Ordered list is for list items that occur in order.</li>
        <li>List item first letter first word cap end with period.</li>
       </ol>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ol>

     <ol>
      <li>Ordered list is for list items that occur in order.
       <ul>
        <li>Unordered list is for list items that do not occur in order.</li>
        <li>List item first letter first word cap end with period.</li>
       </ul>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ol>

     <ul>
      <li>Unordered list is for list items that do not occur in order.
       <ul>
        <li>Unordered list is for list items that do not occur in order.</li>
        <li>List item first letter first word cap end with period.</li>
       </ul>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ul>

     <ul>
      <li>Unordered list is for list items that do not occur in order.
       <ol>
        <li>Ordered list is for list items that occur in order.</li>
        <li>List item first letter first word cap end with period.</li>
       </ol>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ul>

     <ol>
      <li>Ordered list is for list items that occur in order.
       <ol>
        <li>Ordered list is for list items that occur in order.
         <ol>
          <li>Ordered list is for list items that occur in order.
           <ol>
            <li>Ordered list is for list items that occur in order.
             <ol>
              <li>Ordered list is for list items that occur in order.</li>
              <li>List item first letter first word cap end with period.</li>
             </ol>
            </li>
            <li>List item first letter first word cap end with period.</li>
           </ol>
          </li>
          <li>List item first letter first word cap end with period.</li>
         </ol>
        </li>
        <li>List item first letter first word cap end with period.</li>
       </ol>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ol>

     <ol>
      <li>Ordered list is for list items that occur in order.
       <ul>
        <li>Unordered list is for list items that do not occur in order.
         <ol>
          <li>Ordered list is for list items that occur in order.
           <ul>
            <li>Unordered list is for list items that do not occur in order.
             <ol>
              <li>Ordered list is for list items that occur in order.</li>
              <li>List item first letter first word cap end with period.</li>
             </ol>
            </li>
            <li>List item first letter first word cap end with period.</li>
           </ul>
          </li>
          <li>List item first letter first word cap end with period.</li>
         </ol>
        </li>
        <li>List item first letter first word cap end with period.</li>
       </ul>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ol>

     <ul>
      <li>Unordered list is for list items that do not occur in order.
       <ul>
        <li>Unordered list is for list items that do not occur in order.
         <ul>
          <li>Unordered list is for list items that do not occur in order.
           <ul>
            <li>Unordered list is for list items that do not occur in order.
             <ul>
              <li>Unordered list is for list items that do not occur in order.</li>
              <li>List item first letter first word cap end with period.</li>
             </ul>
            </li>
            <li>List item first letter first word cap end with period.</li>
           </ul>
          </li>
          <li>List item first letter first word cap end with period.</li>
         </ul>
        </li>
        <li>List item first letter first word cap end with period.</li>
       </ul>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ul>

     <ul>
      <li>Unordered list is for list items that do not occur in order.
       <ol>
        <li>Ordered list is for list items that occur in order.
         <ul>
          <li>Unordered list is for list items that do not occur in order.
           <ol>
            <li>Ordered list is for list items that occur in order.
             <ul>
              <li>Unordered list is for list items that do not occur in order.</li>
              <li>List item first letter first word cap end with period.</li>
             </ul>
            </li>
            <li>List item first letter first word cap end with period.</li>
           </ol>
          </li>
          <li>List item first letter first word cap end with period.</li>
         </ul>
        </li>
        <li>List item first letter first word cap end with period.</li>
       </ol>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='listsWithIntroductoryTextInLists'></a>14. Lists With Introductory Text In Lists</h2>

     <p>Lists with introductory text in lists are <a href='#listsWithIntroductoryText'>lists with introductory text (above)</a> nested in <a href='#lists'>lists (above)</a>. Lists with introductory text are lists preceded by introductory text for the list.</p>

     <p>Lists, and the lists nested in the lists, use the <code>ol</code>, <code>ul</code>, and <code>li</code> elements. The list with introductory text nested in the list is placed in <code>&lt;li&gt;&lt;/li&gt;</code> tags, typically after the content and before the closing <code>&lt;/li&gt;</code> tag. The introductory text for the list nested in the list uses the <code>li</code> element and ends with a period (.) or colon (:):</p>

<pre>
&lt;ol&gt;
 &lt;li&gt;Ordered list | list item.&lt;/li&gt;
 &lt;li&gt;List item.
  &lt;ul&gt;
   &lt;li&gt;Unordered list | list item.&lt;/li&gt;
   &lt;li&gt;List item.&lt;/li&gt;
  &lt;/ul&gt;
 &lt;/li&gt;
 &lt;li&gt;List item.&lt;/li&gt;
&lt;/ol&gt;
</pre>

<pre>
&lt;ul&gt;
 &lt;li&gt;Unordered list | list item.&lt;/li&gt;
 &lt;li&gt;List item:
  &lt;ol&gt;
   &lt;li&gt;Ordered list | list item.&lt;/li&gt;
   &lt;li&gt;List item.&lt;/li&gt;
  &lt;/ol&gt;
 &lt;/li&gt;
 &lt;li&gt;List item.&lt;/li&gt;
&lt;/ul&gt;
</pre>

     <p>The <code>ol</code>, <code>ul</code>, and <code>li</code> type selectors and the <code>ol ol</code>, <code>ol ul</code>, <code>ul ol</code>, and <code>ul ul</code> descendant selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 20 Jun 2016. -->
<pre>
li {
  line-height: 1.75;
}
ol, ul {
  margin: 1em 0;
}
ol ol, ol ul, ul ol, ul ul {
  margin: 0.5em 0;
}
ul {
  list-style-type: disc;
}
</pre>

     <p>Examples of lists with introductory text in lists:</p>

     <ol>
      <li>Ordered list is for list items that occur in order.</li>
      <li>List item ending with a <em>period</em> as introductory text for an ordered list.
       <ol>
        <li>Ordered list is for list items that occur in order.</li>
        <li>List item first letter first word cap end with period.</li>
       </ol>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ol>

     <ol>
      <li>Ordered list is for list items that occur in order.</li>
      <li>List item ending with a <em>colon</em> as introductory text for an ordered list:
       <ol>
        <li>Ordered list is for list items that occur in order.</li>
        <li>List item first letter first word cap end with period.</li>
       </ol>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ol>

     <ul>
      <li>Unordered list is for list items that do not occur in order.</li>
      <li>List item ending with a <em>period</em> as introductory text for an unordered list.
       <ul>
        <li>Unordered list is for list items that do not occur in order.</li>
        <li>List item first letter first word cap end with period.</li>
       </ul>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ul>

     <ul>
      <li>Unordered list is for list items that do not occur in order.</li>
      <li>List item ending with a <em>colon</em> as introductory text for an unordered list:
       <ul>
        <li>unordered list is for list items that do not occur in order.</li>
        <li>list item, if completing sentence started by introductory text, first letter first word no cap end with period. Otherwise, first letter first word cap end with period.</li>
       </ul>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='notes'></a>15. Notes</h2>

     <p>Notes are text separated and demarcated from the normal flow of content. There are two types of notes; 1.) normal notes (tips/asides/etc.), and 2.) important notes (cautions/warnings/etc.).</p>

     <p>Normal notes use the <code>div</code> element with the <code>class='note normal'</code> attribute. Important notes use the <code>div</code> element with the <code>class='note important'</code> attribute:</p>

<pre>
&lt;div class='note normal'&gt;Normal note.&lt;/div&gt;
</pre>

<pre>
&lt;div class='note important'&gt;Important note.&lt;/div&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>.note</code>, <code>.normal</code>, and <code>.important</code> class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 20 Jun 2016. -->
<pre>
.note {
  line-height: 1.75;
  background-color: #efefef;
  border: 1px solid #efefef;
  border-left-width: 5px;
  border-radius: 3px;
  margin: 1em 0;
  padding: 0.5em;
}
.normal {
  border-left-color: #8ccbf2;
}
.important {
  border-left-color: #e05252;
}
</pre>

     <p>Examples of normal notes and important notes:</p>

     <div class='note normal'>Normal note.</div>

     <div class='note important'>Important note.</div>

    </section>
    <hr />
    <section>

     <h2><a id='listsInNotes'></a>16. Lists In Notes</h2>

     <p>Lists in notes are <a href='lists'>lists (above)</a> nested in <a href='#notes'>notes (above)</a>. Notes are text separated and demarcated from the normal flow of content. There are two types of notes; 1.) normal notes (tips/asides/etc.), and 2.) important notes (cautions/warnings/etc.).</p>

     <p>Normal notes use the <code>div</code> element with the <code>class='note normal'</code> attribute. Important notes use the <code>div</code> element with the <code>class='note important'</code> attribute. Lists use the <code>ol</code>, <code>ul</code>, and <code>li</code> elements:</p>

<pre>
&lt;div class='note normal'&gt;
 &lt;ol&gt;
  &lt;li&gt;Ordered list | list item.&lt;/li&gt;
  &lt;li&gt;List item.&lt;/li&gt;
 &lt;/ol&gt;
&lt;/div&gt;
</pre>

<pre>
&lt;div class='note important'&gt;
 &lt;ul&gt;
  &lt;li&gt;Unordered list | list item.&lt;/li&gt;
  &lt;li&gt;List item.&lt;/li&gt;
 &lt;/ul&gt;
&lt;/div&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>ol</code>, <code>ul</code>, and <code>li</code> type selectors, the <code>.note &gt; ol</code>, <code>.note &gt; ul</code>, <code>.note &gt; ol:first-child</code> and <code>.note &gt; ul:first-child</code> child selectors, and the <code>.note</code>, <code>.normal</code>, and <code>.important</code> class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 20 Jun 2016. -->
<pre>
li, .note { line-height: 1.75; }
ol, ul, .note { margin: 1em 0; }
.note &gt; ol, .note &gt; ul { margin: 0; }
.note &gt; ol:first-child, .note &gt; ul:first-child { padding-left: 20px; }
.note { background-color: #efefef; border: 1px solid #efefef; border-left-width: 5px; border-radius: 3px; padding: 0.5em; }
.normal { border-left-color: #8ccbf2; }
.important { border-left-color: #e05252; }
ul { list-style-type: disc; }
</pre>

     <p>Examples of lists in notes:</p>

     <div class='note normal'>
      <ol>
       <li>Ordered list is for list items that occur in order.</li>
       <li>List item first letter first word cap end with period.</li>
      </ol>
     </div>

     <div class='note normal'>
      <ul>
       <li>Unordered list is for list items that do not occur in order.</li>
       <li>List item first letter first word cap end with period.</li>
      </ul>
     </div>

     <div class='note important'>
      <ol>
       <li>Ordered list is for list items that occur in order.</li>
       <li>List item first letter first word cap end with period.</li>
      </ol>
     </div>

     <div class='note important'>
      <ul>
       <li>Unordered list is for list items that do not occur in order.</li>
       <li>List item first letter first word cap end with period.</li>
      </ul>
     </div>

    </section>
    <hr />
    <section>

     <h2><a id='listsWithIntroductoryTextInNotes'></a>17. Lists With Introductory Text In Notes</h2>

     <p>Lists with introductory text in notes are <a href='#listsWithIntroductoryText'>lists with introductory text (above)</a> nested in <a href='#notes'>notes (above)</a>. Notes are text separated and demarcated from the normal flow of content. There are two types of notes; 1.) normal notes (tips/asides/etc.), and 2.) important notes (cautions/warnings/etc.). Lists with introductory text are lists preceded by introductory text for the list.</p>

     <p>Normal notes use the <code>div</code> element with the <code>class='note normal'</code> attribute. Important notes use the <code>div</code> element with the <code>class='note important'</code> attribute. Lists use the <code>ol</code>, <code>ul</code>, and <code>li</code> elements. The introductory text for the list uses the <code>p</code> element and ends with a period (.) or colon (:):</p>

<pre>
&lt;div class='note normal'&gt;
 &lt;p&gt;Paragraph.&lt;/p&gt;
 &lt;ol&gt;
  &lt;li&gt;Ordered list | list item.&lt;/li&gt;
  &lt;li&gt;List item.&lt;/li&gt;
 &lt;/ol&gt;
 &lt;/div&gt;
</pre>

<pre>
&lt;div class='note important'&gt;
 &lt;p&gt;Paragraph:&lt;/p&gt;
 &lt;ul&gt;
  &lt;li&gt;Unordered list | list item.&lt;/li&gt;
  &lt;li&gt;List item.&lt;/li&gt;
 &lt;/ul&gt;
&lt;/div&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>p</code>, <code>ol</code>, <code>ul</code>, and <code>li</code> type selectors, the <code>.note &gt; p</code>, <code>.note &gt; ol</code>, and <code>.note &gt; ul</code> child selectors, and the <code>.note</code>, <code>.normal</code>, and <code>.important</code> class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 20 Jun 2016. -->
<pre>
p, li, .note { line-height: 1.75; }
p, ol, ul, .note { margin: 1em 0; }
.note &gt; p { margin-top: 0; }
.note &gt; ol, .note &gt; ul { margin: 0; }
.note { background-color: #efefef; border: 1px solid #efefef; border-left-width: 5px; border-radius: 3px; padding: 0.5em; }
.normal { border-left-color: #8ccbf2; }
.important { border-left-color: #e05252; }
ul { list-style-type: disc; }
</pre>

     <p>Examples of lists with introductory text in notes:</p>

     <div class='note normal'>
      <p>Paragraph ending with a <em>period</em> as introductory text for an ordered list.</p>
      <ol>
       <li>Ordered list is for list items that occur in order.</li>
       <li>List item first letter first word cap end with period.</li>
      </ol>
     </div>

     <div class='note normal'>
      <p>Paragraph ending with a <em>colon</em> as introductory text for an ordered list:</p>
      <ol>
       <li>Ordered list is for list items that occur in order.</li>
       <li>List item first letter first word cap end with period.</li>
      </ol>
     </div>

     <div class='note important'>
      <p>Paragraph ending with a <em>period</em> as introductory text for an unordered list.</p>
      <ul>
       <li>Unordered list is for list items that do not occur in order.</li>
       <li>List item first letter first word cap end with period.</li>
      </ul>
     </div>

     <div class='note important'>
      <p>Paragraph ending with a <em>colon</em> as introductory text for an unordered list:</p>
      <ul>
       <li>unordered list is for list items that do not occur in order.</li>
       <li>list item, if completing sentence started by introductory text, first letter first word no cap end with period. Otherwise, first letter first word cap end with period.</li>
      </ul>
     </div>

    </section>
    <hr />
    <section>

     <h2><a id='listsInListsInNotes'></a>18. Lists In Lists In Notes</h2>

     <p>Lists in lists in notes are <a href='#listsInLists'>lists in lists (above)</a> nested in <a href='#notes'>notes (above)</a>. Notes are text separated and demarcated from the normal flow of content. There are two types of notes; 1.) normal notes (tips/asides/etc.), and 2.) important notes (cautions/warnings/etc.). Lists in lists are lists nested in lists.</p>

     <p>Normal notes use the <code>div</code> element with the <code>class='note normal'</code> attribute. Important notes use the <code>div</code> element with the <code>class='note important'</code> attribute. Lists, and the lists nested in the lists, use the <code>ol</code>, <code>ul</code>, and <code>li</code> elements. The list nested in the list is placed in <code>&lt;li&gt;&lt;/li&gt;</code> tags, typically after the content and before the closing <code>&lt;/li&gt;</code> tag:</p>

<pre>
&lt;div class='note normal'&gt;
 &lt;ol&gt;
  &lt;li&gt;Ordered list | list item.&lt;/li&gt;
  &lt;li&gt;List item.
   &lt;ul&gt;
    &lt;li&gt;Unordered list | list item.&lt;/li&gt;
    &lt;li&gt;List item.&lt;/li&gt;
   &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;List item.&lt;/li&gt;
 &lt;/ol&gt;
&lt;/div&gt;
</pre>

<pre>
&lt;div class='note important'&gt;
 &lt;ul&gt;
  &lt;li&gt;Unordered list | list item.&lt;/li&gt;
  &lt;li&gt;List item.
   &lt;ol&gt;
    &lt;li&gt;Ordered list | list item.&lt;/li&gt;
    &lt;li&gt;List item.&lt;/li&gt;
   &lt;/ol&gt;
  &lt;/li&gt;
  &lt;li&gt;List item.&lt;/li&gt;
 &lt;/ul&gt;
&lt;/div&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>ol</code>, <code>ul</code>, and <code>li</code> type selectors, the <code>ol ol</code>, <code>ol ul</code>, <code>ul ol</code>, and <code>ul ul</code> descendant selectors, the <code>.note &gt; ol</code>, <code>.note &gt; ul</code>, <code>.note &gt; ol:first-child</code>, <code>.note &gt; ul:first-child</code>, <code>li:last-child &gt; ol</code>, and <code>li:last-child &gt; ul</code> child selectors, and the <code>.note</code>, <code>.normal</code>, and <code>.important</code> class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 20 Jun 2016. -->
<pre>
li, .note { line-height: 1.75; }
ol, ul, .note { margin: 1em 0; }
ol ol, ol ul, ul ol, ul ul { margin: 0.5em 0; }
.note &gt; ol, .note &gt; ul { margin: 0; }
.note &gt; ol:first-child, .note &gt; ul:first-child { padding-left: 20px; }
li:last-child &gt; ol, li:last-child &gt; ul { margin-bottom: 0; }
.note { background-color: #efefef; border: 1px solid #efefef; border-left-width: 5px; border-radius: 3px; padding: 0.5em; }
.normal { border-left-color: #8ccbf2; }
.important { border-left-color: #e05252; }
ul { list-style-type: disc; }
</pre>

     <p>Examples of lists in lists in notes:</p>

     <div class='note normal'>
      <ol>
       <li>Ordered list is for list items that occur in order.
        <ol>
         <li>Ordered list is for list items that occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ol>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ol>
     </div>

     <div class='note normal'>
      <ol>
       <li>Ordered list is for list items that occur in order.
        <ul>
         <li>Unordered list is for list items that do not occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ul>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ol>
     </div>

     <div class='note normal'>
      <ul>
       <li>Unordered list is for list items that do not occur in order.
        <ul>
         <li>Unordered list is for list items that do not occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ul>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ul>
     </div>

     <div class='note normal'>
      <ul>
       <li>Unordered list is for list items that do not occur in order.
        <ol>
         <li>Ordered list is for list items that occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ol>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ul>
     </div>

     <div class='note important'>
      <ol>
       <li>Ordered list is for list items that occur in order.
        <ol>
         <li>Ordered list is for list items that occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ol>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ol>
     </div>

     <div class='note important'>
      <ol>
       <li>Ordered list is for list items that occur in order.
        <ul>
         <li>Unordered list is for list items that do not occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ul>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ol>
     </div>

     <div class='note important'>
      <ul>
       <li>Unordered list is for list items that do not occur in order.
        <ul>
         <li>Unordered list is for list items that do not occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ul>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ul>
     </div>

     <div class='note important'>
      <ul>
       <li>Unordered list is for list items that do not occur in order.
        <ol>
         <li>Ordered list is for list items that occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ol>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ul>
     </div>

     <div class='note normal'>
      <ol>
       <li>Ordered list is for list items that occur in order.
        <ol>
         <li>Ordered list is for list items that occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ol>
       </li>
      </ol>
     </div>

     <div class='note important'>
      <ul>
       <li>Unordered list is for list items that do not occur in order.
        <ul>
         <li>Unordered list is for list items that do not occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ul>
       </li>
      </ul>
     </div>

    </section>
    <hr />
    <section>

     <h2><a id='listsWithIntroductoryTextInListsInNotes'></a>19. Lists With Introductory Text In Lists In Notes</h2>

     <p>Lists with introductory text in lists in notes are <a href='#listsWithIntroductoryTextInLists'>lists with introductory text in lists (above)</a> nested in <a href='#notes'>notes (above)</a>. Notes are text separated and demarcated from the normal flow of content. There are two types of notes; 1.) normal notes (tips/asides/etc.), and 2.) important notes (cautions/warnings/etc.). Lists with introductory text in lists are lists with introductory text nested in lists. Lists with introductory text are lists preceded by introductory text for the list.</p>

     <p>Normal notes use the <code>div</code> element with the <code>class='note normal'</code> attribute. Important notes use the <code>div</code> element with the <code>class='note important'</code> attribute. Lists, and the lists nested in the lists, use the <code>ol</code>, <code>ul</code>, and <code>li</code> elements. The list with introductory text nested in the list is placed in <code>&lt;li&gt;&lt;/li&gt;</code> tags, typically after the content and before the closing <code>&lt;/li&gt;</code> tag. The introductory text for the list nested in the list uses the <code>li</code> element and ends with a period (.) or colon (:):</p>

<pre>
&lt;div class='note normal'&gt;
 &lt;ol&gt;
  &lt;li&gt;Ordered list | list item.&lt;/li&gt;
  &lt;li&gt;List item.
   &lt;ul&gt;
    &lt;li&gt;Unordered list | list item.&lt;/li&gt;
    &lt;li&gt;List item.&lt;/li&gt;
   &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;List item.&lt;/li&gt;
 &lt;/ol&gt;
&lt;/div&gt;
</pre>

<pre>
&lt;div class='note important'&gt;
 &lt;ul&gt;
  &lt;li&gt;Unordered list | list item.&lt;/li&gt;
  &lt;li&gt;List item:
   &lt;ol&gt;
    &lt;li&gt;Ordered list | list item.&lt;/li&gt;
    &lt;li&gt;List item.&lt;/li&gt;
   &lt;/ol&gt;
  &lt;/li&gt;
  &lt;li&gt;List item.&lt;/li&gt;
 &lt;/ul&gt;
&lt;/div&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>ol</code>, <code>ul</code>, and <code>li</code> type selectors, the <code>ol ol</code>, <code>ol ul</code>, <code>ul ol</code>, and <code>ul ul</code> descendant selectors, the <code>.note &gt; ol</code>, <code>.note &gt; ul</code>, <code>.note &gt; ol:first-child</code>, <code>.note &gt; ul:first-child</code>, <code>li:last-child &gt; ol</code>, and <code>li:last-child &gt; ul</code> child selectors, and the <code>.note</code>, <code>.normal</code>, and <code>.important</code> class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 20 Jun 2016. -->
<pre>
li, .note { line-height: 1.75; }
ol, ul, .note { margin: 1em 0; }
ol ol, ol ul, ul ol, ul ul { margin: 0.5em 0; }
.note &gt; ol, .note &gt; ul { margin: 0; }
.note &gt; ol:first-child, .note &gt; ul:first-child { padding-left: 20px; }
li:last-child &gt; ol, li:last-child &gt; ul { margin-bottom: 0; }
.note { background-color: #efefef; border: 1px solid #efefef; border-left-width: 5px; border-radius: 3px; padding: 0.5em; }
.normal { border-left-color: #8ccbf2; }
.important { border-left-color: #e05252; }
ul { list-style-type: disc; }
</pre>

     <p>Examples of lists with introductory text in lists in notes:</p>

     <div class='note normal'>
      <ol>
       <li>Ordered list is for list items that occur in order.</li>
       <li>List item ending with a <em>period</em> as introductory text for an ordered list.
        <ol>
         <li>Ordered list is for list items that occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ol>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ol>
     </div>

     <div class='note normal'>
      <ol>
       <li>Ordered list is for list items that occur in order.</li>
       <li>List item ending with a <em>colon</em> as introductory text for an ordered list:
        <ol>
         <li>Ordered list is for list items that occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ol>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ol>
     </div>

     <div class='note normal'>
      <ul>
       <li>Unordered list is for list items that do not occur in order.</li>
       <li>List item ending with a <em>period</em> as introductory text for an unordered list.
        <ul>
         <li>Unordered list is for list items that do not occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ul>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ul>
     </div>

     <div class='note normal'>
      <ul>
       <li>Unordered list is for list items that do not occur in order.</li>
       <li>List item ending with a <em>colon</em> as introductory text for an unordered list:
        <ul>
         <li>unordered list is for list items that do not occur in order.</li>
         <li>list item, if completing sentence started by introductory text, first letter first word no cap end with period. Otherwise, first letter first word cap end with period.</li>
        </ul>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ul>
     </div>

     <div class='note important'>
      <ol>
       <li>Ordered list is for list items that occur in order.</li>
       <li>List item ending with a <em>period</em> as introductory text for an ordered list.
        <ol>
         <li>Ordered list is for list items that occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ol>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ol>
     </div>

     <div class='note important'>
      <ol>
       <li>Ordered list is for list items that occur in order.</li>
       <li>List item ending with a <em>colon</em> as introductory text for an ordered list:
        <ol>
         <li>Ordered list is for list items that occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ol>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ol>
     </div>

     <div class='note important'>
      <ul>
       <li>Unordered list is for list items that do not occur in order.</li>
       <li>List item ending with a <em>period</em> as introductory text for an unordered list.
        <ul>
         <li>Unordered list is for list items that do not occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ul>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ul>
     </div>

     <div class='note important'>
      <ul>
       <li>Unordered list is for list items that do not occur in order.</li>
       <li>List item ending with a <em>colon</em> as introductory text for an unordered list:
        <ul>
         <li>unordered list is for list items that do not occur in order.</li>
         <li>list item, if completing sentence started by introductory text, first letter first word no cap end with period. Otherwise, first letter first word cap end with period.</li>
        </ul>
       </li>
       <li>List item first letter first word cap end with period.</li>
      </ul>
     </div>

     <div class='note normal'>
      <ol>
       <li>Ordered list is for list items that occur in order.</li>
       <li>List item ending with a <em>period</em> as introductory text for an ordered list.
        <ol>
         <li>Ordered list is for list items that occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ol>
       </li>
      </ol>
     </div>

     <div class='note important'>
      <ul>
       <li>Unordered list is for list items that do not occur in order.</li>
       <li>List item ending with a <em>period</em> as introductory text for an unordered list.
        <ul>
         <li>Unordered list is for list items that do not occur in order.</li>
         <li>List item first letter first word cap end with period.</li>
        </ul>
       </li>
      </ul>
     </div>

    </section>
    <hr />
    <section>

     <h2><a id='notesInLists'></a>20. Notes In Lists</h2>

     <p>Notes in lists are <a href='#notes'>notes (above)</a> nested in <a href='#lists'>lists (above)</a>. Notes are text separated and demarcated from the normal flow of content. There are two types of notes; 1.) normal notes (tips/asides/etc.), and 2.) important notes (cautions/warnings/etc.).</p>

     <p>Lists use the <code>ol</code>, <code>ul</code>, and <code>li</code> elements. Normal notes use the <code>div</code> element with the <code>class='note normal'</code> attribute. Important notes use the <code>div</code> element with the <code>class='note important'</code> attribute. The note is placed in <code>&lt;li&gt;&lt;/li&gt;</code> tags, typically after the content and before the closing <code>&lt;/li&gt;</code> tag:</p>

<pre>
&lt;ol&gt;
 &lt;li&gt;Ordered list | list item.&lt;/li&gt;
 &lt;li&gt;List item.
  &lt;div class='note normal'&gt;Note normal.&lt;/div&gt;
 &lt;/li&gt;
 &lt;li&gt;List item.&lt;/li&gt;
&lt;/ol&gt;
</pre>

<pre>
&lt;ul&gt;
 &lt;li&gt;Unordered list | list item.&lt;/li&gt;
 &lt;li&gt;List item.
  &lt;div class='note important'&gt;Note important.&lt;/div&gt;
 &lt;/li&gt;
 &lt;li&gt;List item.&lt;/li&gt;
&lt;/ul&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>ol</code>, <code>ul</code>, and <code>li</code> type selectors, the <code>ol .note</code> and <code>ul .note</code> descendant selectors, and the <code>.note</code>, <code>.normal</code>, and <code>.important</code> class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 20 Jun 2016. -->
<pre>
li, .note { line-height: 1.75; }
ol, ul, .note { margin: 1em 0; }
ol .note, ul .note { margin: 0.5em 0; }
.note { background-color: #efefef; border: 1px solid #efefef; border-left-width: 5px; border-radius: 3px; padding: 0.5em; }
.normal { border-left-color: #8ccbf2; }
.important { border-left-color: #e05252; }
ul { list-style-type: disc; }
</pre>

     <p>Examples of notes in lists:</p>

     <ol>
      <li>Ordered list is for list items that occur in order.</li>
      <li>List item first letter first word cap end with period.
       <div class='note normal'>Normal note in an ordered list.</div>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ol>

     <ul>
      <li>Unordered list is for list items that do not occur in order.</li>
      <li>List item first letter first word cap end with period.
       <div class='note normal'>Normal note in an unordered list.</div>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ul>

     <ol>
      <li>Ordered list is for list items that occur in order.</li>
      <li>List item first letter first word cap end with period.
       <div class='note important'>Important note in an ordered list.</div>
      </li>
     <li>List item first letter first word cap end with period.</li>
     </ol>

     <ul>
      <li>Unordered list is for list items that do not occur in order.</li>
      <li>List item first letter first word cap end with period.
       <div class='note important'>Important note in an unordered list.</div>
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='tables'></a>21. Tables</h2>

     <p>Tables use the <code>table</code>, <code>caption</code> (optional), <code>thead</code> (optional), <code>tbody</code>, <code>tfoot</code> (optional), <code>tr</code>, <code>th</code> (optional), and <code>td</code> elements:</p>

<pre>
&lt;table&gt;
 &lt;caption&gt;Table | Caption&lt;/caption&gt;
 &lt;thead&gt;
  &lt;tr&gt;
   &lt;th&gt;Table Head | Table Row | Table Header Cell&lt;/th&gt;
   &lt;th&gt;Table Header Cell&lt;/th&gt;
  &lt;/tr&gt;
 &lt;/thead&gt;
 &lt;tbody&gt;
  &lt;tr&gt;
   &lt;td&gt;Table body | table row | table cell.&lt;/td&gt;
   &lt;td&gt;Table cell.&lt;/td&gt;
  &lt;/tr&gt;
 &lt;/tbody&gt;
 &lt;tfoot&gt;
  &lt;tr&gt;
   &lt;td colspan='2'&gt;Table foot | table row | table cell.&lt;/td&gt;
  &lt;/tr&gt;
 &lt;/tfoot&gt;
&lt;/table&gt;
</pre>

     <p>The <code>thead</code>, <code>tbody</code>, <code>tfoot</code> and <code>tr</code> type selectors are not assigned author styles. The <code>table</code>, <code>caption</code>, <code>th</code>, and <code>td</code> type selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 20 Jun 2016. -->
<pre>
th, td {
  line-height: 1.75;
}
caption, th, td {
  padding: 0.5em;
}
table {
  border-collapse: collapse;
  box-sizing: border-box;
  margin: 1em 0;
}
table, caption, th, td {
  border: 1px solid #d7d7d7;
}
caption {
  font-weight: bold;
  background-color: #efefef;
  border-bottom: 0;
}
</pre>

     <p>Examples of tables:</p>

     <table>
      <caption>Optional Table Caption First Letter Each Word Cap</caption>
      <thead>
       <tr>
        <th>Optional Table Header Cell First Letter Each Word Cap</th>
        <th>Optional Table Header Cell First Letter Each Word Cap</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>Table body cell first letter first word typically cap.</td>
        <td></td>
       </tr>
       <tr>
        <td>If table body cell text is a sentence, end with period.</td>
        <td>If table body cell text is not a sentence, end without period.</td>
       </tr>
       <tr>
        <td>Tables and table cells typically not assigned a width.</td>
        <td>If assign a width, whenever possible use %, not fixed. Fixed widths can induce horizontal scrollbar.</td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='2'>Optional table foot cell that spans all columns.</td>
       </tr>
      </tfoot>
     </table>

     <table>
      <caption>Optional Table Caption First Letter Each Word Cap</caption>
      <thead>
       <tr>
        <th>Optional Table Header Cell First Letter Each Word Cap</th>
        <th>Optional Table Header Cell First Letter Each Word Cap</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>Table body cell first letter first word typically cap.</td>
        <td></td>
       </tr>
       <tr>
        <td>If table body cell text is a sentence, end with period.</td>
        <td>If table body cell text is not a sentence, end without period.</td>
       </tr>
       <tr>
        <td>Tables and table cells typically not assigned a width.</td>
        <td>If assign a width, whenever possible use %, not fixed. Fixed widths can induce horizontal scrollbar.</td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='2'>Optional table foot cell that spans all columns.</td>
       </tr>
      </tfoot>
     </table>

    </section>
    <hr />
    <section>

     <h2><a id='listsInTables'></a>22. Lists In Tables</h2>

     <p>Lists in tables are <a href='#lists'>lists (above)</a> nested in <a href='#tables'>tables (above)</a>.</p>

     <p>Tables use the <code>table</code>, <code>caption</code> (optional), <code>thead</code> (optional), <code>tbody</code>, <code>tfoot</code> (optional), <code>tr</code>, <code>th</code> (optional), and <code>td</code> elements. Lists use the <code>ol</code>, <code>ul</code>, and <code>li</code> elements. The list is placed in <code>&lt;td&gt;&lt;/td&gt;</code> tags, which means lists are nested in the <code>&lt;tbody&gt;&lt;/tbody&gt;</code> and <code>&lt;tfoot&gt;&lt;/tfoot&gt;</code> sections, not the <code>&lt;thead&gt;&lt;/thead&gt;</code> section, of a table:</p>

<pre>
&lt;table&gt;
 &lt;caption&gt;Table | Caption&lt;/caption&gt;
 &lt;thead&gt;
  &lt;tr&gt;
   &lt;th&gt;Table Head | Table Row | Table Header Cell&lt;/th&gt;
   &lt;th&gt;Table Header Cell&lt;/th&gt;
  &lt;/tr&gt;
 &lt;/thead&gt;
 &lt;tbody&gt;
  &lt;tr&gt;
   &lt;td&gt;
    &lt;ol&gt;
     &lt;li&gt;Table body | table row | table cell | ordered list | list item.&lt;/li&gt;
     &lt;li&gt;List item.&lt;/li&gt;
    &lt;/ol&gt;
   &lt;/td&gt;
   &lt;td&gt;Table cell.&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
   &lt;td&gt;
    &lt;ul&gt;
     &lt;li&gt;Table cell | unordered list | list item.&lt;/li&gt;
     &lt;li&gt;List item.&lt;/li&gt;
    &lt;/ul&gt;
   &lt;/td&gt;
   &lt;td&gt;Table cell.&lt;/td&gt;
  &lt;/tr&gt;
 &lt;/tbody&gt;
 &lt;tfoot&gt;
  &lt;tr&gt;
   &lt;td colspan='2'&gt;
    &lt;ul&gt;
     &lt;li&gt;Table foot | table row | table cell | unordered list | list item.&lt;/li&gt;
     &lt;li&gt;List item.&lt;/li&gt;
    &lt;/ul&gt;
   &lt;/td&gt;
  &lt;/tr&gt;
 &lt;/tfoot&gt;
&lt;/table&gt;
</pre>

     <p>The <code>thead</code>, <code>tbody</code>, <code>tfoot</code>, and <code>tr</code> type selectors are not assigned author styles. The <code>table</code>, <code>caption</code>, <code>th</code>, <code>td</code>, <code>ol</code>, <code>ul</code>, and <code>li</code> type selectors and the <code>td &gt; ol</code>, <code>td &gt; ul</code>, <code>td &gt; ol:first-child</code>, and <code>td &gt; ul:first-child</code> child selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 21 Jun 2016. -->
<pre>
li, th, td { line-height: 1.75; }
ol, ul, table { margin: 1em 0; }
td &gt; ol, td &gt; ul { margin: 0; }
td &gt; ol:first-child, td &gt; ul:first-child { padding-left: 20px; }
caption, th, td { padding: 0.5em; }
table { border-collapse: collapse; box-sizing: border-box; }
table, caption, th, td { border: 1px solid #d7d7d7; }
caption { font-weight: bold; background-color: #efefef; border-bottom: 0; }
ul { list-style-type: disc; }
</pre>

     <p>Examples of lists in tables:</p>

     <table>
      <caption>Optional Table Caption First Letter Each Word Cap</caption>
      <thead>
       <tr>
        <th>Optional Table Header Cell First Letter Each Word Cap</th>
        <th>Optional Table Header Cell First Letter Each Word Cap</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>
         <ol>
          <li>Table body cell ordered list is for list items that occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ol>
        </td>
        <td>
         <ul>
          <li>Table body cell unordered list is for list items that do not occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ul>
        </td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='2'>
         <ol>
          <li>Table foot cell ordered list is for list items that occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ol>
       </td>
       </tr>
      </tfoot>
     </table>

     <table>
      <caption>Optional Table Caption First Letter Each Word Cap</caption>
      <thead>
       <tr>
        <th>Optional Table Header Cell First Letter Each Word Cap</th>
        <th>Optional Table Header Cell First Letter Each Word Cap</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>
         <ul>
          <li>Table body cell unordered list is for list items that do not occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ul>
        </td>
        <td>
         <ol>
          <li>Table body cell ordered list is for list items that occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ol>
        </td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='2'>
         <ul>
          <li>Table foot cell unordered list is for list items that do not occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ul>
       </td>
       </tr>
      </tfoot>
     </table>

    </section>
    <hr />
    <section>

     <h2><a id='listsWithIntroductoryTextInTables'></a>23. Lists With Introductory Text In Tables</h2>

     <p>Lists with introductory text in tables are <a href='#listsWithIntroductoryText'>lists with introductory text (above)</a> nested in <a href='#tables'>tables (above)</a>. Lists with introductory text are lists preceded by introductory text for the list.</p>

     <p>Tables use the <code>table</code>, <code>caption</code> (optional), <code>thead</code> (optional), <code>tbody</code>, <code>tfoot</code> (optional), <code>tr</code>, <code>th</code> (optional), and <code>td</code> elements. Lists use the <code>ol</code>, <code>ul</code>, and <code>li</code> elements. The list with introductory text is placed in <code>&lt;td&gt;&lt;/td&gt;</code> tags, which means lists with introductory text are nested in the <code>&lt;tbody&gt;&lt;/tbody&gt;</code> and <code>&lt;tfoot&gt;&lt;/tfoot&gt;</code> sections, not the <code>&lt;thead&gt;&lt;/thead&gt;</code> section of a table. The introductory text for the list uses the <code>p</code> element and ends with a period (.) or colon (:):</p>

<pre>
&lt;table&gt;
 &lt;caption&gt;Table | Caption&lt;/caption&gt;
 &lt;thead&gt;
  &lt;tr&gt;
   &lt;th&gt;Table Head | Table Row | Table Header Cell&lt;/th&gt;
   &lt;th&gt;Table Header Cell&lt;/th&gt;
  &lt;/tr&gt;
 &lt;/thead&gt;
 &lt;tbody&gt;
  &lt;tr&gt;
   &lt;td&gt;
    &lt;p&gt;Table body | table row | table cell | paragraph.&lt;/p&gt;
    &lt;ol&gt;
     &lt;li&gt;Ordered list | list item.&lt;/li&gt;
     &lt;li&gt;List item.&lt;/li&gt;
    &lt;/ol&gt;
   &lt;/td&gt;
   &lt;td&gt;Table cell.&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
   &lt;td&gt;
    &lt;p&gt;Table cell | paragraph:&lt;/p&gt;
    &lt;ul&gt;
     &lt;li&gt;Unordered list | list item.&lt;/li&gt;
     &lt;li&gt;List item.&lt;/li&gt;
    &lt;/ul&gt;
   &lt;/td&gt;
   &lt;td&gt;Table cell.&lt;/td&gt;
  &lt;/tr&gt;
 &lt;/tbody&gt;
 &lt;tfoot&gt;
  &lt;tr&gt;
   &lt;td colspan='2'&gt;
    &lt;p&gt;Table foot | table row | table cell | paragraph:&lt;/p&gt;
    &lt;ul&gt;
     &lt;li&gt;Unordered list | list item.&lt;/li&gt;
     &lt;li&gt;List item.&lt;/li&gt;
    &lt;/ul&gt;
   &lt;/td&gt;
  &lt;/tr&gt;
 &lt;/tfoot&gt;
&lt;/table&gt;
</pre>

     <p>The <code>thead</code>, <code>tbody</code>, <code>tfoot</code>, and <code>tr</code> type selectors are not assigned author styles. The <code>table</code>, <code>caption</code>, <code>th</code>, <code>td</code>, <code>p</code>, <code>ol</code>, <code>ul</code>, and <code>li</code> type selectors and the <code>td &gt; p</code>, <code>td &gt; ol</code>, and <code>td &gt; ul</code> child selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 21 Jun 2016. -->
<pre>
p, li, th, td { line-height: 1.75; }
p, ol, ul, table { margin: 1em 0; }
td &gt; p { margin-top: 0; }
td &gt; ol, td &gt; ul { margin: 0; }
caption, th, td { padding: 0.5em; }
table { border-collapse: collapse; box-sizing: border-box; }
table, caption, th, td { border: 1px solid #d7d7d7; }
caption { font-weight: bold; background-color: #efefef; border-bottom: 0; }
ul { list-style-type: disc; }
</pre>

     <p>Examples of lists with introductory text in tables:</p>

     <table>
      <caption>Optional Table Caption First Letter Each Word Cap</caption>
      <thead>
       <tr>
        <th>Optional Table Header Cell First Letter Each Word Cap</th>
        <th>Optional Table Header Cell First Letter Each Word Cap</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>
         <p>Table body cell paragraph ending with a <em>period</em> as introductory text for an ordered list.</p>
         <ol>
          <li>Ordered list is for list items that occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ol>
        </td>
        <td>
         <p>Table body cell paragraph ending with a <em>colon</em> as introductory text for an ordered list:</p>
         <ol>
          <li>Ordered list is for list items that occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ol>
        </td>
       </tr>
       <tr>
        <td>
         <p>Table body cell paragraph ending with a <em>period</em> as introductory text for an unordered list.</p>
         <ul>
          <li>Unordered list is for list items that do not occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ul>
        </td>
        <td>
         <p>Table body cell paragraph ending with a <em>colon</em> as introductory text for an unordered list:</p>
         <ul>
          <li>Unordered list is for list items that do not occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ul>
        </td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='2'>
         <p>Table foot cell paragraph ending with a <em>period</em> as introductory text for an ordered list.</p>
         <ul>
          <li>Ordered list is for list items that occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ul>
       </td>
       </tr>
      </tfoot>
     </table>

     <table>
      <caption>Optional Table Caption First Letter Each Word Cap</caption>
      <thead>
       <tr>
        <th>Optional Table Header Cell First Letter Each Word Cap</th>
        <th>Optional Table Header Cell First Letter Each Word Cap</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>
         <p>Table body cell paragraph ending with a <em>period</em> as introductory text for an ordered list.</p>
         <ol>
          <li>Ordered list is for list items that occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ol>
        </td>
        <td>
         <p>Table body cell paragraph ending with a <em>colon</em> as introductory text for an ordered list:</p>
         <ol>
          <li>Ordered list is for list items that occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ol>
        </td>
       </tr>
       <tr>
        <td>
         <p>Table body cell paragraph ending with a <em>period</em> as introductory text for an unordered list.</p>
         <ul>
          <li>Unordered list is for list items that do not occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ul>
        </td>
        <td>
         <p>Table body cell paragraph ending with a <em>colon</em> as introductory text for an unordered list:</p>
         <ul>
          <li>Unordered list is for list items that do not occur in order.</li>
          <li>List item first letter first word cap end with period.</li>
         </ul>
        </td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='2'>
         <p>Table foot cell paragraph ending with a <em>colon</em> as introductory text for an unordered list:</p>
         <ul>
          <li>unordered list is for list items that do not occur in order.</li>
          <li>list item, if completing sentence started by introductory text, first letter first word no cap end with period. Otherwise, first letter first word cap end with period.</li>
         </ul>
       </td>
       </tr>
      </tfoot>
     </table>

    </section>
    <hr />
    <section>

     <h2><a id='hyperlinks'></a>24. Hyperlinks</h2>

     <p>There are two types of hyperlinks; 1.) normal hyperlinks, and 2.) list hyperlinks.</p>

     <h3><a id='normalHyperlinks'></a>24.1. Normal Hyperlinks</h3>

     <p>Normal hyperlinks are hyperlinks in normal content, which is content in paragraphs, lists, notes, tables, etc.</p>

     <p>Normal hyperlinks use the <code>a</code> element with the <code>href</code> attribute:</p>

<pre>
&lt;a href='abc.html'&gt;normal hyperlink (domain.com)&lt;/a&gt;
</pre>

     <p>The <code>a</code> type selector and the <code>a:hover</code> and <code>a:focus</code> pseudo-class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 21 Jun 2016. -->
<pre>
a {
  color: #005a9c;
  text-decoration: none;
}
a:hover {
  color: #000;
  text-decoration: underline;
}
a:focus {
  outline: thin dotted invert;
}
</pre>

     <p>Examples of normal hyperlinks:</p>

     <p><a href='/html/template_explained/nhlink01.html'>Normal hyperlink (learnwebcoding.com)</a> in a paragraph. <a href='/html/template_explained/nhlink02.html'>Normal hyperlink (learnwebcoding.com)</a> in a paragraph.</p>

     <ul>
      <li><a href='/html/template_explained/nhlink03.html'>Normal hyperlink (learnwebcoding.com)</a> in a list.</li>
      <li><a href='/html/template_explained/nhlink04.html'>Normal hyperlink (learnwebcoding.com)</a> in a list.</li>
     </ul>

     <div class='note normal'><a href='/html/template_explained/nhlink05.html'>Normal hyperlink (learnwebcoding.com)</a> in a normal note. <a href='/html/template_explained/nhlink06.html'>Normal hyperlink (learnwebcoding.com)</a> in a normal note.</div>

     <table>
      <tbody>
       <tr>
        <td><a href='/html/template_explained/nhlink07.html'>Normal hyperlink (learnwebcoding.com)</a> in a table cell.</td>
        <td><a href='/html/template_explained/nhlink08.html'>Normal hyperlink (learnwebcoding.com)</a> in a table cell.</td>
       </tr>
      </tbody>
     </table>

     <h3><a id='listHyperlinks'></a>24.2. List Hyperlinks</h3>

     <p>List hyperlinks are hyperlinks in a list of one or more hyperlinks where most of the list items are hyperlinks.</p>

     <p>List hyperlinks use the <code>ul</code> element with the <code>class='link-list'</code> attribute, the <code>li</code> element, and the <code>a</code> element with the <code>href</code> attribute:</p>

<pre>
&lt;ul class='link-list'&gt;
 &lt;li&gt;&lt;a href='abc.html'&gt;List Hyperlink (domain.com)&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>

<pre>
&lt;ul class='link-list'&gt;
 &lt;li&gt;&lt;a href='abc.html'&gt;List Hyperlink (domain.com)&lt;/a&gt;
  &lt;ul class='link-list'&gt;
   &lt;li&gt;&lt;a href='def.html'&gt;List Hyperlink (domain.com)&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
 &lt;/li&gt;
&lt;/ul&gt;
</pre>

     <p>The <code>.link-list</code> class selector is not assigned author styles. The <code>ul</code> and <code>li</code> type selectors, the <code>.link-list &gt; li &gt; a</code> child selector, and the <code>a:focus</code>, <code>.link-list &gt; li &gt; a:visited</code>, and <code>.link-list &gt; li &gt; a:hover</code> pseudo-class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
li { line-height: 1.75; }
ul { list-style-type: disc; margin: 1em 0; }
a { <s>color: #005a9c; text-decoration: none;</s> } /* From normal hyperlinks above. */
a:hover { <s>color: #000; text-decoration: underline;</s> } /* From normal hyperlinks above. */
a:focus { outline: thin dotted invert; } /* From normal hyperlinks above. */
.link-list &gt; li &gt; a { color: #000; text-decoration: underline; }
.link-list &gt; li &gt; a:visited { color: #888; }
.link-list &gt; li &gt; a:hover { color: #888; text-decoration: none; }
</pre>

     <p>Examples of list hyperlinks:</p>

     <ul class='link-list'>
      <li><a href='/html/template_explained/lhlink01.html'>List Hyperlink In A List Of One Or More Hyperlinks Where Most Of The List Items Are Hyperlinks (learnwebcoding.com)</a></li>
      <li><a href='/html/template_explained/lhlink02.html'>List Hyperlink Content Is Title Of Linked Web Page Or List Item First Letter Each Word Cap End Without Period (learnwebcoding.com)</a>
       <ul class='link-list'>
        <li><a href='/html/template_explained/lhlink03.html'>List Hyperlink (learnwebcoding.com)</a></li>
        <li><a href='/html/template_explained/lhlink04.html'>List Hyperlink (learnwebcoding.com)</a></li>
       </ul>
      </li>
      <li><a href='/html/template_explained/lhlink05.html'>List Hyperlink (learnwebcoding.com)</a></li>
      <li>List item
       <ul class='link-list'>
        <li>List item</li>
        <li><a href='/html/template_explained/lhlink06.html'>List Hyperlink (learnwebcoding.com)</a></li>
       </ul>
      </li>
      <li><a href='/html/template_explained/lhlink07.html'>List Hyperlink (learnwebcoding.com)</a></li>
      <li><a href='/html/template_explained/lhlink08.html'>List Hyperlink (learnwebcoding.com)</a></li>
     </ul>

     <h3><a id='tableEndnoteHyperlinks'></a>24.3. Table Endnote Hyperlinks</h3>

     <p>Table endnotes are text separated and demarcated from the normal flow of table content. Table endnotes are notes (tips/asides/cautions/warnings/etc.) on table content. The table content provides a <a href='#normalHyperlinks'>normal hyperlink (above)</a> to the table endnote. The table endnote provides a return <a href='#normalHyperlinks'>normal hyperlink (above)</a> to the table content. These hyperlinks are table endnote hyperlinks. Table endnotes are placed in a table foot cell that spans all columns.</p>

     <p>Tables use the <code>table</code>, <code>caption</code> (optional), <code>thead</code> (optional), <code>tbody</code>, <code>tfoot</code> (optional), <code>tr</code>, <code>th</code> (optional), and <code>td</code> elements. Normal hyperlinks use the <code>a</code> element with the <code>href</code> attribute.</p>

     <p>If the web page has only one table with table endnote hyperlinks:</p>

<pre>
&lt;table&gt;
 &lt;caption&gt;Table | Caption | If The Web Page Has Only One Table With Table Endnote Hyperlinks &lt;a id='1_return'&gt;&lt;/a&gt;&lt;a href='#1'&gt;(1)&lt;/a&gt;&lt;/caption&gt;
 &lt;thead&gt;
  &lt;tr&gt;
   &lt;th&gt;Table Head | Table Row | Table Header Cell &lt;a id='2_return'&gt;&lt;/a&gt;&lt;a href='#2'&gt;(2)&lt;/a&gt;&lt;/th&gt;
   &lt;th&gt;Table Header Cell&lt;/th&gt;
  &lt;/tr&gt;
 &lt;/thead&gt;
 &lt;tbody&gt;
  &lt;tr&gt;
   &lt;td&gt;Table body | table row | table cell &lt;a id='3_return'&gt;&lt;/a&gt;&lt;a href='#3'&gt;(3)&lt;/a&gt;.&lt;/td&gt;
   &lt;td&gt;Table cell.&lt;/td&gt;
  &lt;/tr&gt;
 &lt;/tbody&gt;
 &lt;tfoot&gt;
  &lt;tr&gt;
   &lt;td colspan='2'&gt;
    &lt;a id='1'&gt;&lt;/a&gt;&lt;a href='#1_return'&gt;(1)&lt;/a&gt; Table foot | table row | table cell. Table caption endnote.&lt;br /&gt;
    &lt;a id='2'&gt;&lt;/a&gt;&lt;a href='#2_return'&gt;(2)&lt;/a&gt; Table header cell endnote.&lt;br /&gt;
    &lt;a id='3'&gt;&lt;/a&gt;&lt;a href='#3_return'&gt;(3)&lt;/a&gt; Table body cell endnote.
   &lt;/td&gt;
  &lt;/tr&gt;
 &lt;/tfoot&gt;
&lt;/table&gt;
</pre>

     <p>If the web page has multiple tables with table endnote hyperlinks:</p>

<pre>
&lt;table&gt;
 &lt;caption&gt;Table | Caption | If The Web Page Has Multiple Tables With Table Endnote Hyperlinks &lt;a id='1_tableTitle_return'&gt;&lt;/a&gt;&lt;a href='#1_tableTitle'&gt;(1)&lt;/a&gt;&lt;/caption&gt;
 &lt;thead&gt;
  &lt;tr&gt;
   &lt;th&gt;Table Head | Table Row | Table Header Cell &lt;a id='2_tableTitle_return'&gt;&lt;/a&gt;&lt;a href='#2_tableTitle'&gt;(2)&lt;/a&gt;&lt;/th&gt;
   &lt;th&gt;Table Header Cell&lt;/th&gt;
  &lt;/tr&gt;
 &lt;/thead&gt;
 &lt;tbody&gt;
  &lt;tr&gt;
   &lt;td&gt;Table body | table row | table cell &lt;a id='3_tableTitle_return'&gt;&lt;/a&gt;&lt;a href='#3_tableTitle'&gt;(3)&lt;/a&gt;.&lt;/td&gt;
   &lt;td&gt;Table cell.&lt;/td&gt;
  &lt;/tr&gt;
 &lt;/tbody&gt;
 &lt;tfoot&gt;
  &lt;tr&gt;
   &lt;td colspan='2'&gt;
    &lt;a id='1_tableTitle'&gt;&lt;/a&gt;&lt;a href='#1_tableTitle_return'&gt;(1)&lt;/a&gt; Table foot | table row | table cell. Table caption endnote.&lt;br /&gt;
    &lt;a id='2_tableTitle'&gt;&lt;/a&gt;&lt;a href='#2_tableTitle_return'&gt;(2)&lt;/a&gt; Table header cell endnote.&lt;br /&gt;
    &lt;a id='3_tableTitle'&gt;&lt;/a&gt;&lt;a href='#3_tableTitle_return'&gt;(3)&lt;/a&gt; Table body cell endnote.
   &lt;/td&gt;
  &lt;/tr&gt;
 &lt;/tfoot&gt;
&lt;/table&gt;
</pre>

     <p>The <code>thead</code>, <code>tbody</code>, <code>tfoot</code> and <code>tr</code> type selectors are not assigned author styles. The <code>table</code>, <code>caption</code>, <code>th</code>, <code>td</code>, and <code>a</code> type selectors and the <code>a:hover</code> and <code>a:focus</code> pseudo-class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 21 Jun 2016. -->
<pre>
th, td { line-height: 1.75; }
caption, th, td { padding: 0.5em; }
table { border-collapse: collapse; box-sizing: border-box; margin: 1em 0; }
table, caption, th, td { border: 1px solid #d7d7d7; }
caption { font-weight: bold; background-color: #efefef; border-bottom: 0; }
a { color: #005a9c; text-decoration: none; } /* From normal hyperlinks above. */
a:hover { color: #000; text-decoration: underline; } /* From normal hyperlinks above. */
a:focus { outline: thin dotted invert; } /* From normal hyperlinks above. */
</pre>

     <p>Example of table endnote hyperlinks if the web page has only one table with table endnote hyperlinks:</p>

     <table>
      <caption>Optional Table Caption If The Web Page Has Only One Table With Table Endnote Hyperlinks <a id='1_return'></a><a href='#1'>(1)</a></caption>
      <thead>
       <tr>
        <th>Optional Table Header Cell <a id='2_return'></a><a href='#2'>(2)</a></th>
        <th>Optional Table Header Cell</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>Table body cell <a id='3_return'></a><a href='#3'>(3)</a>.</td>
        <td>Table body cell.</td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='2'>
         <a id='1'></a><a href='#1_return'>(1)</a> Table foot cell that spans all columns. Table caption endnote.<br />
         <a id='2'></a><a href='#2_return'>(2)</a> Table header cell endnote.<br />
         <a id='3'></a><a href='#3_return'>(3)</a> Table body cell endnote.
        </td>
       </tr>
      </tfoot>
     </table>

     <p>Example of table endnote hyperlinks if the web page has multiple tables with table endnote hyperlinks:</p>

     <table>
      <caption>Optional Table Caption If The Web Page Has Multiple Tables With Table Endnote Hyperlinks <a id='1_tableTitle_return'></a><a href='#1_tableTitle'>(1)</a></caption>
      <thead>
       <tr>
        <th>Optional Table Header Cell <a id='2_tableTitle_return'></a><a href='#2_tableTitle'>(2)</a></th>
        <th>Optional Table Header Cell</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>Table body cell <a id='3_tableTitle_return'></a><a href='#3_tableTitle'>(3)</a>.</td>
        <td>Table body cell.</td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='2'>
         <a id='1_tableTitle'></a><a href='#1_tableTitle_return'>(1)</a> Table foot cell that spans all columns. Table caption endnote.<br />
         <a id='2_tableTitle'></a><a href='#2_tableTitle_return'>(2)</a> Table header cell endnote.<br />
         <a id='3_tableTitle'></a><a href='#3_tableTitle_return'>(3)</a> Table body cell endnote.
        </td>
       </tr>
      </tfoot>
     </table>

    </section>
    <hr />
    <section>

     <h2><a id='formControls'></a>25. Form Controls</h2>

     <p>Form controls, also known as form elements, are interactive objects typically found in forms (i.e., in <code>&lt;form&gt;&lt;/form&gt;</code> tags).</p>

     <h3><a id='formButtons'></a>25.1. Buttons</h3>

     <h4><a id='formButtonsBootstrapColors'></a>25.1.1. Bootstrap Button Colors</h4>

     <p>For those interested in adding color to the buttons below, the following are the Bootstrap v3.3.6+ button style rules for the <code>color</code>, <code>background-color</code>, and <code>border-color</code> properties in the default, hover, and active states. For an example of the Bootstrap buttons, see <a href='http://getbootstrap.com/css/#buttons-options'>Bootstrap buttons options (getbootstrap.com)</a>:

     <table>
      <caption>Bootstrap 3.3.6+ Button Style Rules For The <code>color</code>, <code>background-color</code>, and <code>border-color</code> Properties In The Default, Hover, And Active States</caption>
      <thead>
       <tr>
        <th>Button Type (color)</th>
        <th>Default State</th>
        <th>Hover State <a id='1_bootstrapButtonColors_return'></a><a href='#1_bootstrapButtonColors'>(1)</a></th>
        <th>Active State</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>Default (white)</td>
        <td>
<pre>
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
</pre>
        </td>
        <td>
<pre>
.btn-default:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
</pre>
        </td>
        <td>
<pre>
.btn-default:active {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
</pre>
        </td>
       </tr>
       <tr>
        <td>Primary (blue)</td>
        <td>
<pre>
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
</pre>
        </td>
        <td>
<pre>
.btn-primary:hover {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
</pre>
        </td>
        <td>
<pre>
.btn-primary:active {
  color: #fff;
  background-color: #204d74;
  border-color: #122b40;
}
</pre>
        </td>
       </tr>
       <tr>
        <td>Success (green)</td>
        <td>
<pre>
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
</pre>
        </td>
        <td>
<pre>
.btn-success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
</pre>
        </td>
        <td>
<pre>
.btn-success:active {
  color: #fff;
  background-color: #398439;
  border-color: #255625;
}
</pre>
        </td>
       </tr>
       <tr>
        <td>Info (light blue)</td>
        <td>
<pre>
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
</pre>
        </td>
        <td>
<pre>
.btn-info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
</pre>
        </td>
        <td>
<pre>
.btn-info:active {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85;
}
</pre>
        </td>
       </tr>
       <tr>
        <td>Warning (orange)</td>
        <td>
<pre>
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
</pre>
        </td>
        <td>
<pre>
.btn-warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
</pre>
        </td>
        <td>
<pre>
.btn-warning:active {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
</pre>
        </td>
       </tr>
       <tr>
        <td>Danger (red)</td>
        <td>
<pre>
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
</pre>
        </td>
        <td>
<pre>
.btn-danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
</pre>
        </td>
        <td>
<pre>
.btn-danger:active {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19;
}
</pre>
        </td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='4'>
         <a id='1_bootstrapButtonColors'></a><a href='#1_bootstrapButtonColors_return'>(1)</a> The Bootstrap 3.3.6+ button focus state <code>background-color</code> is identical to the hover state <code>background-color</code>.
        </td>
       </tr>
      </tfoot>
     </table>

<!-- All buttons (ie, 25.1.2 - 25.1.5) web browser support: IE8+*, FF1.5+*, No SF5.1.7-, CH30+, OP17+, VV1+. * means support everything except IE8 and FF3.6- not supporting CSS border-radius property. -->

     <h4><a id='formButtonsUsingInputElement'></a>25.1.2. Buttons Using The <code>input</code> Element</h4>

     <p>Buttons using the <code>input</code> element use the <code>input</code> element with the <code>type='button'</code>, <code>type='reset'</code>, or <code>type='submit'</code> attribute and the <code>class</code> attribute with the <code>btn-xs</code>, <code>btn-sm</code>, <code>btn-md</code>, <code>btn-lg</code>, or <code>btn-xl</code> value:</p>

<pre>
&lt;p&gt;&lt;input type='button' value='input type button' class='btn-md' /&gt;&lt;/p&gt;
&lt;p&gt;&lt;input type='reset' value='input type reset' class='btn-md' /&gt;&lt;/p&gt;
&lt;p&gt;&lt;input type='submit' value='input type submit' class='btn-md' /&gt;&lt;/p&gt;
</pre>

     <p>The <code>input</code> type selector is not assigned author styles. The <code>.btn-xs</code>, <code>.btn-sm</code>, <code>.btn-md</code>, <code>.btn-lg</code>, and <code>.btn-xl</code> class selectors, the <code>input[type=&quot;button&quot;]</code>, <code>input[type=&quot;reset&quot;]</code>, and <code>input[type=&quot;submit&quot;]</code> attribute selectors, and the <code>input[type=&quot;button&quot;]:hover</code>, <code>input[type=&quot;reset&quot;]:hover</code>, <code>input[type=&quot;submit&quot;]:hover</code>, <code>input[type=&quot;button&quot;]:active</code>, <code>input[type=&quot;reset&quot;]:active</code>, <code>input[type=&quot;submit&quot;]:active</code>, <code>input[type=&quot;button&quot;]:focus</code>, <code>input[type=&quot;reset&quot;]:focus</code>, and <code>input[type=&quot;submit&quot;]:focus</code> pseudo-class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
input[type=&quot;button&quot;], input[type=&quot;reset&quot;], input[type=&quot;submit&quot;] { background-color: #fff; color: #000; border: 2px solid #999; border-radius: 9px; }
input[type=&quot;button&quot;]:hover, input[type=&quot;reset&quot;]:hover, input[type=&quot;submit&quot;]:hover { background-color: #efefef; border-color: #666; cursor: pointer; }
input[type=&quot;button&quot;]:focus, input[type=&quot;reset&quot;]:focus, input[type=&quot;submit&quot;]:focus { background-color: #efefef; outline: 0; border-color: #666; }
input[type=&quot;button&quot;]:active, input[type=&quot;reset&quot;]:active, input[type=&quot;submit&quot;]:active { background-color: #d7d7d7; border-color: #333; cursor: pointer; }
.btn-xs { font-size: 0.7em; padding: 4px 8px; }
.btn-sm { font-size: 0.85em; padding: 5px 10px; }
.btn-md { font-size: 1.0em; padding: 6px 12px; }
.btn-lg { font-size: 1.15em; padding: 7px 14px; }
.btn-xl { font-size: 1.3em; padding: 8px 16px; }
</pre>

     <div class='note normal'>
      <p>When buttons using the <code>input</code> element are in the active state:</p>
      <ul>
       <li>IE11 moves the button text down and right 1px.</li>
       <li>FF39 and CH43 do not move the button text.</li>
      </ul>
     </div>

     <p>Examples of buttons using the <code>input</code> element:</p>

     <p>With the <code>type='button'</code> attribute: <input type='button' value='btn-xs' class='btn-xs' /> <input type='button' value='btn-sm' class='btn-sm' /> <input type='button' value='btn-md' class='btn-md' /> <input type='button' value='btn-lg' class='btn-lg' /> <input type='button' value='btn-xl' class='btn-xl' /></p>

     <p>With the <code>type='reset'</code> attribute: <input type='reset' value='btn-xs' class='btn-xs' /> <input type='reset' value='btn-sm' class='btn-sm' /> <input type='reset' value='btn-md' class='btn-md' /> <input type='reset' value='btn-lg' class='btn-lg' /> <input type='reset' value='btn-xl' class='btn-xl' /></p>

     <p>With the <code>type='submit'</code> attribute: <input type='submit' value='btn-xs' class='btn-xs' /> <input type='submit' value='btn-sm' class='btn-sm' /> <input type='submit' value='btn-md' class='btn-md' /> <input type='submit' value='btn-lg' class='btn-lg' /> <input type='submit' value='btn-xl' class='btn-xl' /></p>

     <h4><a id='formButtonsUsingButtonElement'></a>25.1.3. Buttons Using The <code>button</code> Element</h4>

     <p>Buttons using the <code>button</code> element use the <code>button</code> element with or without the <code>type='button'</code>, <code>type='reset'</code>, or <code>type='submit'</code> attribute and they use the <code>class</code> attribute with the <code>btn-xs</code>, <code>btn-sm</code>, <code>btn-md</code>, <code>btn-lg</code>, or <code>btn-xl</code> value:</p>

     <div class='note normal'>If the <code>button</code> element is used without the <code>type</code> attribute, the <a href='http://www.w3.org/TR/html5/'>HTML5: A Vocabulary And Associated APIs For HTML And XHTML: W3C Recommendation 28 October 2014 (w3.org)</a> recommends that user agents treat the button as a submit button.</div>

<pre>
&lt;p&gt;&lt;button class='btn-md'&gt;button submit&lt;/button&gt;&lt;/p&gt;
&lt;p&gt;&lt;button type='button' class='btn-md'&gt;button type button&lt;/button&gt;&lt;/p&gt;
&lt;p&gt;&lt;button type='reset' class='btn-md'&gt;button type reset&lt;/button&gt;&lt;/p&gt;
&lt;p&gt;&lt;button type='submit' class='btn-md'&gt;button type submit&lt;/button&gt;&lt;/p&gt;
</pre>

     <p>The <code>button</code> type selector, the <code>.btn-xs</code>, <code>.btn-sm</code>, <code>.btn-md</code>, <code>.btn-lg</code>, and <code>.btn-xl</code> class selectors, and the <code>button:hover</code>, <code>button:active</code>, and <code>button:focus</code> pseudo-class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
button { background-color: #fff; color: #000; border: 2px solid #999; border-radius: 9px; }
button:hover { background-color: #efefef; border-color: #666; cursor: pointer; }
button:focus { background-color: #efefef; outline: 0; border-color: #666; }
button:active { background-color: #d7d7d7; border-color: #333; cursor: pointer; }
.btn-xs { font-size: 0.7em; padding: 4px 8px; }
.btn-sm { font-size: 0.85em; padding: 5px 10px; }
.btn-md { font-size: 1.0em; padding: 6px 12px; }
.btn-lg { font-size: 1.15em; padding: 7px 14px; }
.btn-xl { font-size: 1.3em; padding: 8px 16px; }
</pre>

     <div class='note normal'>
      <p>When buttons using the <code>button</code> element are in the active state:</p>
      <ul>
       <li>IE11 moves the button text down and right 1px.</li>
       <li>FF39 and CH43 do not move the button text.</li>
      </ul>
     </div>

     <p>Examples of buttons using the <code>button</code> element:</p>

     <p>Without the <code>type</code> attribute: <button class='btn-xs'>btn-xs</button> <button class='btn-sm'>btn-sm</button> <button class='btn-md'>btn-md</button> <button class='btn-lg'>btn-lg</button> <button class='btn-xl'>btn-xl</button></p>

     <p>With the <code>type='button'</code> attribute: <button type='button' class='btn-xs'>btn-xs</button> <button type='button' class='btn-sm'>btn-sm</button> <button type='button' class='btn-md'>btn-md</button> <button type='button' class='btn-lg'>btn-lg</button> <button type='button' class='btn-xl'>btn-xl</button></p>

     <p>With the <code>type='reset'</code> attribute: <button type='reset' class='btn-xs'>btn-xs</button> <button type='reset' class='btn-sm'>btn-sm</button> <button type='reset' class='btn-md'>btn-md</button> <button type='reset' class='btn-lg'>btn-lg</button> <button type='reset' class='btn-xl'>btn-xl</button></p>

     <p>With the <code>type='submit'</code> attribute: <button type='submit' class='btn-xs'>btn-xs</button> <button type='submit' class='btn-sm'>btn-sm</button> <button type='submit' class='btn-md'>btn-md</button> <button type='submit' class='btn-lg'>btn-lg</button> <button type='submit' class='btn-xl'>btn-xl</button></p>

     <h4><a id='formButtonsUsingAElement'></a>25.1.4. Buttons Using The <code>a</code> Element</h4>

     <p>Buttons using the <code>a</code> element use the <code>a</code> element with or without the <code>href</code> attribute and they use the <code>class</code> attribute with the <code>btn btn-xs</code>, <code>btn btn-sm</code>, <code>btn btn-md</code>, <code>btn btn-lg</code>, or <code>btn btn-xl</code> value. If the <code>href</code> attribute is used, the button also functions as a hyperlink:</p>

<pre>
&lt;p&gt;&lt;a class='btn btn-md'&gt;button&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href='abc.html' class='btn btn-md'&gt;hyperlink button&lt;/a&gt;&lt;/p&gt;
</pre>

     <p>The <code>a</code> type selector, the <code>.btn</code>, <code>.btn-xs</code>, <code>.btn-sm</code>, <code>.btn-md</code>, <code>.btn-lg</code>, and <code>.btn-xl</code> class selectors, and the <code>a:hover</code>, <code>a:focus</code>, <code>.btn:hover</code>, <code>btn:active</code>, and <code>btn:focus</code> pseudo-class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
a { <s>color: #005a9c;</s> text-decoration: none; } /* From normal hyperlinks above. */
a:hover { color: #000; <s>text-decoration: underline;</s> } /* From normal hyperlinks above. */
a:focus { <s>outline: thin dotted invert;</s> } /* From normal hyperlinks above. */
.btn { background-color: #fff; color: #000; border: 2px solid #999; border-radius: 9px; }
.btn:hover { background-color: #efefef; border-color: #666; cursor: pointer; }
.btn:hover { text-decoration: none; } /* For the a element. */
.btn:focus { background-color: #efefef; outline: 0; border-color: #666; } /* For the a element with the href attribute. */
.btn:active { background-color: #d7d7d7; border-color: #333; cursor: pointer; }
.btn-xs { font-size: 0.7em; padding: 4px 8px; }
.btn-sm { font-size: 0.85em; padding: 5px 10px; }
.btn-md { font-size: 1.0em; padding: 6px 12px; }
.btn-lg { font-size: 1.15em; padding: 7px 14px; }
.btn-xl { font-size: 1.3em; padding: 8px 16px; }
</pre>

     <div class='note normal'>Focus exists on objects using the <code>a</code> element with, not without, the <code>href</code> attribute. Therefore, when creating buttons using the <code>a</code> element without the <code>href</code> attribute, the <code>.btn</code> class selector needs to consider overriding styles assigned to the <code>a</code> type selector and the <code>a:hover</code> and <code>a:active</code> pseudo-class selectors, not the <code>a:focus</code> pseudo-class selector. When creating buttons using the <code>a</code> element with the <code>href</code> attribute, the <code>.btn</code> class selector needs to consider overriding styles assigned to the <code>a</code> type selector and the <code>a:hover</code>, <code>a:active</code>, and <code>a:focus</code> pseudo-class selectors.</div>

     <p>Examples of buttons using the <code>a</code> element:</p>

     <p>Without the <code>href</code> attribute: <a class='btn btn-xs'>btn-xs</a> <a class='btn btn-sm'>btn-sm</a> <a class='btn btn-md'>btn-md</a> <a class='btn btn-lg'>btn-lg</a> <a class='btn btn-xl'>btn-xl</a></p>

     <p>With the <code>href</code> attribute: <a href='/html/template_explained/bhlink01.html' class='btn btn-xs'>btn-xs</a> <a href='/html/template_explained/bhlink02.html' class='btn btn-sm'>btn-sm</a> <a href='/html/template_explained/bhlink03.html' class='btn btn-md'>btn-md</a> <a href='/html/template_explained/bhlink04.html' class='btn btn-lg'>btn-lg</a> <a href='/html/template_explained/bhlink05.html' class='btn btn-xl'>btn-xl</a></p>

     <h4><a id='formButtonsUsingOtherElements'></a>25.1.5. Buttons Using An Element Other Than The <code>input</code>, <code>button</code>, Or <code>a</code> Elements</h4>

     <p>Buttons using the <code>input</code> or <code>button</code> elements do not behave consistently cross-browser. For example, web browsers differ in how they style the corners and the <code>:hover</code>, <code>:active</code>, and <code>:focus</code> pseudo-class selectors. For consistent button style cross-browser, create buttons using an element other than the <code>input</code> or <code>button</code> elements. For an example using the <code>a</code> element, see <a href='#buttonsUsingAElement'>buttons using the <code>a</code> element (above)</a>. However, when creating buttons using the <code>a</code> element, you might have to override styles assigned to the <code>a</code> type selector and the <code>a:hover</code>, <code>a:active</code>, and <code>a:focus</code> pseudo-class selectors. To avoid this, and if the button does not need to function as a hyperlink, it is recommended to use an element other than the <code>a</code> element. In this example, the buttons use the <code>span</code> element.</p>

     <p>Buttons using the <code>span</code> element use the <code>span</code> element with the <code>class</code> attribute with the <code>btn btn-xs</code>, <code>btn btn-sm</code>, <code>btn btn-md</code>, <code>btn btn-lg</code>, or <code>btn btn-xl</code> value:</p>

<pre>
&lt;p&gt;&lt;span class='btn btn-md'&gt;button&lt;/span&gt;&lt;/p&gt;
</pre>

     <p>The <code>span</code> type selector is not assigned author styles. The <code>.btn</code>, <code>.btn-xs</code>, <code>.btn-sm</code>, <code>.btn-md</code>, <code>.btn-lg</code>, and <code>.btn-xl</code> class selectors and the <code>.btn:hover</code> and <code>btn:active</code> pseudo-class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
.btn { background-color: #fff; color: #000; border: 2px solid #999; border-radius: 9px; }
.btn:hover { background-color: #efefef; border-color: #666; cursor: pointer; }
.btn:active { background-color: #d7d7d7; border-color: #333; cursor: pointer; }
.btn-xs { font-size: 0.7em; padding: 4px 8px; }
.btn-sm { font-size: 0.85em; padding: 5px 10px; }
.btn-md { font-size: 1.0em; padding: 6px 12px; }
.btn-lg { font-size: 1.15em; padding: 7px 14px; }
.btn-xl { font-size: 1.3em; padding: 8px 16px; }
</pre>

     <div class='note normal'>Focus (i.e., <code>:focus</code>) exists on objects using the <code>input</code>, <code>button</code>, and <code>select</code> elements and on objects using the <code>a</code> element with the <code>href</code> attribute. Focus does not exist on objects using the <code>a</code> element without the <code>href</code> attribute, nor on objects using other elements, including with the <code>href</code> attribute.</div>

     <p>Examples of buttons using the <code>span</code> element:</p>

     <p><span class='btn btn-xs'>btn-xs</span> <span class='btn btn-sm'>btn-sm</span> <span class='btn btn-md'>btn-md</span> <span class='btn btn-lg'>btn-lg</span> <span class='btn btn-xl'>btn-xl</span></p>

     <h3><a id='formTextboxes'></a>25.2. Textboxes</h3>

     <p>Textboxes use the <code>input</code> element with the <code>type='text'</code> attribute. The <code>label</code> element is a commonly used optional element and the <code>size</code>, <code>maxlength</code>, and <code>placeholder</code> attributes are commonly used optional attributes. If the textbox data is to be sent when a form is submitted, use the <code>name</code> attribute and assign it a unique value. To specify default/pre-entered text (i.e., a default value), use the <code>value</code> attribute and assign it the default/pre-entered text:</p>

<pre>
&lt;p&gt;Textbox without label: &lt;input type='text' name='unique to indicate textbox1 when form submitted' size='30' maxlength='30' /&gt;&lt;/p&gt;
&lt;p&gt;&lt;label&gt;Textbox with label: &lt;input type='text' name='unique to indicate textbox2 when form submitted' size='30' maxlength='30' /&gt;&lt;/label&gt;&lt;/p&gt;
&lt;p&gt;&lt;label&gt;Textbox with label and placeholder text: &lt;input type='text' name='unique to indicate textbox3 when form submitted' size='30' maxlength='30' placeholder='placeholder text' /&gt;&lt;/label&gt;&lt;/p&gt;
&lt;p&gt;&lt;label&gt;Textbox with label and default/pre-entered text: &lt;input type='text' name='unique to indicate textbox4 when form submitted' size='30' maxlength='30' value='default/pre-entered text' /&gt;&lt;/label&gt;&lt;/p&gt;
&lt;p&gt;&lt;label&gt;&lt;input type='text' name='unique to indicate textbox5 when form submitted' size='30' maxlength='30' /&gt; Textbox with label.&lt;/label&gt;&lt;/p&gt;
</pre>

     <p>The <code>input</code> and <code>label</code> type selectors are not assigned author styles. The <code>input[type=&quot;text&quot;]</code> attribute selector, the <code>input[type=&quot;text&quot;]:hover</code>, <code>input[type=&quot;text&quot;]:focus</code>, <code>input[type=&quot;text&quot;]:-ms-input-placeholder</code>, and <code>input[type=&quot;text&quot;]:-moz-placeholder</code> pseudo-class selectors, and the <code>input[type=&quot;text&quot;]::-moz-placeholder</code> and <code>input[type=&quot;text&quot;]::-webkit-input-placeholder</code> pseudo-element selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
input[type=&quot;text&quot;] { font-family: arial, tahoma, sans-serif; font-size: 13.33px; background-color: #fff; color: #000; border: 2px solid #999; border-radius: 3px; padding: 4px 6px; }
input[type=&quot;text&quot;]:hover { border-color: #666; }
input[type=&quot;text&quot;]:focus { outline: 0; border-color: #666; }
input[type=&quot;text&quot;]:-ms-input-placeholder { color: #888; }
input[type=&quot;text&quot;]:-moz-placeholder { color: #888; }
input[type=&quot;text&quot;]::-moz-placeholder { color: #888; opacity: 1; }
input[type=&quot;text&quot;]::-webkit-input-placeholder { color: #888; }
</pre>

     <p>Examples of textboxes:</p>

     <p>Textbox without label: <input type='text' name='unique to indicate textbox1 when form submitted' size='30' maxlength='30' /></p>

     <p><label>Textbox with label: <input type='text' name='unique to indicate textbox2 when form submitted' size='30' maxlength='30' /></label></p>

     <p><label>Textbox with label and placeholder text: <input type='text' name='unique to indicate textbox3 when form submitted' size='30' maxlength='30' placeholder='placeholder text' /></label></p>

     <p><label>Textbox with label and default/pre-entered text: <input type='text' name='unique to indicate textbox4 when form submitted' size='30' maxlength='30' value='default/pre-entered text' /></label></p>

     <p><label><input type='text' name='unique to indicate textbox5 when form submitted' size='30' maxlength='30' /> Textbox with label.</label></p>

     <h3><a id='formTextareas'></a>25.3. Textareas</h3>

     <p>Textareas use the <code>textarea</code> element. The <code>label</code> element is a commonly used optional element and the <code>cols</code>, <code>rows</code>, and <code>placeholder</code> attributes are commonly used optional attributes. If the textarea data is to be sent when a form is submitted, use the <code>name</code> attribute and assign it a unique value. To specify default/pre-entered text (i.e., a default value), place the default/pre-entered text between the opening and closing <code>&lt;textarea&gt;&lt;/textarea&gt;</code> tags:</p>

<pre>
&lt;p&gt;Textarea without label: &lt;textarea name='unique to indicate textarea1 when form submitted' cols='30' rows='2'&gt;&lt;/textarea&gt;&lt;/p&gt;
&lt;p&gt;&lt;label&gt;Textarea with label: &lt;textarea name='unique to indicate textarea2 when form submitted' cols='30' rows='2'&gt;&lt;/textarea&gt;&lt;/label&gt;&lt;/p&gt;
&lt;p&gt;&lt;label&gt;Textarea with label and placeholder text: &lt;textarea name='unique to indicate textarea3 when form submitted' cols='30' rows='2' placeholder='placeholder text'&gt;&lt;/textarea&gt;&lt;/label&gt;&lt;/p&gt;
&lt;p&gt;&lt;label&gt;Textarea with label and default/pre-entered text: &lt;textarea name='unique to indicate textarea4 when form submitted' cols='30' rows='2'&gt;default/pre-entered text&lt;/textarea&gt;&lt;/label&gt;&lt;/p&gt;
&lt;p&gt;&lt;label&gt;&lt;textarea name='unique to indicate textarea5 when form submitted' cols='30' rows='2'&gt;&lt;/textarea&gt; Textarea with label.&lt;/label&gt;&lt;/p&gt;
</pre>

     <p>The <code>label</code> type selector is not assigned author styles. The <code>textarea</code> type selector, the <code>textarea:hover</code>, <code>textarea:focus</code>, <code>textarea:-ms-input-placeholder</code>, and <code>textarea:-moz-placeholder</code> pseudo-class selectors, and the  <code>textarea::-moz-placeholder</code> and <code>textarea::-webkit-input-placeholder</code> pseudo-element selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
textarea { vertical-align: middle; font-family: arial, tahoma, sans-serif; font-size: 13.33px; background-color: #fff; color: #000; border: 2px solid #999; border-radius: 3px; padding: 4px 6px; }
textarea:hover { border-color: #666; }
textarea:focus { outline: 0; border-color: #666; }
textarea:-ms-input-placeholder { color: #888; }
textarea:-moz-placeholder { color: #888; }
textarea::-moz-placeholder { color: #888; opacity: 1; }
textarea::-webkit-input-placeholder { color: #888; }
</pre>

     <p>Examples of textareas:</p>

     <p>Textarea without label: <textarea name='unique to indicate textarea1 when form submitted' cols='30' rows='2'></textarea></p>

     <p><label>Textarea with label: <textarea name='unique to indicate textarea2 when form submitted' cols='30' rows='2'></textarea></label></p>

     <p><label>Textarea with label and placeholder text: <textarea name='unique to indicate textarea3 when form submitted' cols='30' rows='2' placeholder='placeholder text'></textarea></label></p>

     <p><label>Textarea with label and default/pre-entered text: <textarea name='unique to indicate textarea4 when form submitted' cols='30' rows='2'>default/pre-entered text</textarea></label></p>

     <p><label><textarea name='unique to indicate textarea5 when form submitted' cols='30' rows='2'></textarea> Textarea with label.</label></p>

     <h3><a id='formSelectboxes'></a>25.4. Selectboxes (Dropdowns)</h3>

     <p>Selectboxes (a.k.a., dropdowns) use the <code>select</code> and <code>option</code> elements. The <code>label</code> element is a commonly used optional element. Only the data of the selected option(s), not the data of the unselected option(s), is including when a form is submitted. If the selectbox data is to be sent when a form is submitted, use the <code>select</code> element with the <code>name</code> attribute, assign the <code>name</code> attribute a unique value, and use the <code>option</code> element with or without the <code>value</code> attribute. The <code>value</code> attribute can be used to send data other than that which appears on the screen as the <code>&lt;option&gt;&lt;/option&gt;</code> tag content. If the <code>name</code>attribute is used without the <code>value</code> attribute, then the <code>&lt;option&gt;&lt;/option&gt;</code> tag content is sent, and, therefore, assign the <code>&lt;option&gt;&lt;/option&gt;</code> tag content a unique string of text. If the <code>name</code> attribute is used with the <code>value</code> attribute, the <code>value</code> attribute value is sent, and, therefore, assign the <code>value</code> attribute a unique value. To increase the number of options visible in the selectbox, use the <code>select</code> element with the <code>size</code> attribute and assign it a number value greater than one. If the <code>size</code> attribute is absent, user agents are to default to <code>size='1'</code>. To allow multiple options to be selected, use the <code>select</code> element with the <code>multiple='multiple'</code> attribute. To create an empty/blank option, use <code>&lt;option label='&nbsp;'&gt; &lt;/option&gt;</code> (note the two spaces). To default select/pre-select an option, use the <code>option</code> element with the <code>selected='selected'</code> attribute:</p>

<pre>
&lt;p&gt;
 Selectbox without label:
 &lt;select name='unique to indicate selectbox1 when form submitted'&gt;
  &lt;option&gt;option one&lt;/option&gt;
  &lt;option&gt;option two&lt;/option&gt;
  &lt;option&gt;option three&lt;/option&gt;
 &lt;/select&gt;
&lt;/p&gt;
&lt;p&gt;
 &lt;label&gt;Selectbox with label:
  &lt;select name='unique to indicate selectbox2 when form submitted'&gt;
   &lt;option&gt;option one&lt;/option&gt;
   &lt;option&gt;option two&lt;/option&gt;
   &lt;option&gt;option three&lt;/option&gt;
  &lt;/select&gt;
 &lt;/label&gt;
&lt;/p&gt;
&lt;p&gt;
 &lt;label&gt;Selectbox with label and option three default selected/pre-selected:
  &lt;select name='unique to indicate selectbox3 when form submitted'&gt;
   &lt;option&gt;option one&lt;/option&gt;
   &lt;option&gt;option two&lt;/option&gt;
   &lt;option selected='selected'&gt;option three&lt;/option&gt;
  &lt;/select&gt;
 &lt;/label&gt;
&lt;/p&gt;
&lt;p&gt;
 &lt;label&gt;
  &lt;select name='unique to indicate selectbox4 when form submitted'&gt;
   &lt;option&gt;option one&lt;/option&gt;
   &lt;option&gt;option two&lt;/option&gt;
   &lt;option&gt;option three&lt;/option&gt;
  &lt;/select&gt;
 Selectbox with label.&lt;/label&gt;
&lt;/p&gt;
</pre>

     <p>The <code>label</code> type selector is not assigned author styles. The <code>select</code> type selector and the <code>select:hover</code> and <code>select:focus</code> pseudo-class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
select {
  background-color: #fff;
  color: #000;
  border: 2px solid #999;
  border-radius: 3px;
  padding: 4px 6px;
}
select:hover {
  border-color: #666;
}
select:focus {
  outline: 0;
  border-color: #666;
}
</pre>

     <p>Examples of selectboxes:</p>

     <p>
      Selectbox without label:
      <select name='unique to indicate selectbox1 when form submitted'>
       <option>option one</option>
       <option>option two</option>
       <option>option three</option>
      </select>
     </p>
     <p>
      <label>Selectbox with label:
       <select name='unique to indicate selectbox2 when form submitted'>
        <option>option one</option>
        <option>option two</option>
        <option>option three</option>
       </select>
      </label>
     </p>
     <p>
      <label>Selectbox with label and option three default selected/pre-selected:
       <select name='unique to indicate selectbox3 when form submitted'>
        <option>option one</option>
        <option>option two</option>
        <option selected='selected'>option three</option>
       </select>
      </label>
     </p>
     <p>
      <label>
       <select name='unique to indicate selectbox4 when form submitted'>
        <option>option one</option>
        <option>option two</option>
        <option>option three</option>
       </select>
      Selectbox with label.</label>
     </p>

     <h3><a id='formCheckboxes'></a>25.5. Checkboxes</h3>

     <p>Checkboxes use the <code>input</code> element with the <code>type='checkbox'</code> attribute, the <code>label</code> element, and <code>&lt;span&gt;&lt;/span&gt;</code> tags containing the HTML character numeric entity (&amp;#10003;) for the check mark (&#10003;) character. The checkbox HTML is nested in <code>&lt;label&gt;&lt;/label&gt;</code> tags. The label extends the clickable area of the checkbox to include the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. To place the checkbox before and/or after the <code>&lt;label&gt;&lt;/label&gt;</code> tag content, nest <code>&lt;span&gt;&amp;#10003;&lt;/span&gt;</code> in <code>&lt;label&gt;&lt;/label&gt;</code> before and/or after the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. Nesting <code>&lt;span&gt;&amp;#10003;&lt;/span&gt;</code> in <code>&lt;label&gt;&lt;/label&gt;</code> includes the checkbox as part of the clickable <code>&lt;label&gt;&lt;/label&gt;</code> tag content. Only the data of checked checkboxes, not the data of unchecked checkboxes, is including when a form is submitted. If the checkbox data is to be sent when a form is submitted, use the <code>name</code> attribute with or without the <code>value</code> attribute. If the <code>name</code> attribute is used without the <code>value</code> attribute, assign the <code>name</code> attribute a unique value. If the <code>name</code> attribute is used with the <code>value</code> attribute, assign the <code>name</code> and <code>value</code> attributes a unique pair of values. In other words, if the <code>name</code> attribute is used without the <code>value</code> attribute, then each <code>name</code> attribute value must be unique. And if the <code>name</code> attribute is used with the <code>value</code> attribute, then multiple checkboxes can have the same <code>name</code> attribute value, but each <code>name</code> and <code>value</code> pair of attribute values must be unique, which means checkboxes with the same <code>name</code> attribute value must have unique <code>value</code> attribute values. To default check/pre-check a checkbox, use the <code>checked='checked'</code> attribute:</p>

<pre>
&lt;p&gt;
 &lt;label&gt;&lt;input type='checkbox' name='unique to indicate checkbox1, if checked, when form submitted' /&gt;&lt;span&gt;&amp;#10003;&lt;/span&gt; Checkbox&lt;/label&gt;&lt;br /&gt;
 &lt;label&gt;&lt;input type='checkbox' name='unique to indicate checkbox2, if checked, when form submitted' checked='checked' /&gt;&lt;span&gt;&amp;#10003;&lt;/span&gt; Checkbox default checked/pre-checked&lt;/label&gt;&lt;br /&gt;
 &lt;label&gt;&lt;input type='checkbox' name='unique to indicate checkbox3, if checked, when form submitted' /&gt;Checkbox &lt;span&gt;&amp;#10003;&lt;/span&gt;&lt;/label&gt;
&lt;/p&gt;
</pre>

<pre>
&lt;p&gt;Select spices without the &lt;code&gt;value&lt;/code&gt; attribute:&lt;br /&gt;
 &lt;label&gt;&lt;input type='checkbox' name='salt' /&gt;&lt;span&gt;&amp;#10003;&lt;/span&gt; Salt (if checked, sends salt=on)&lt;/label&gt;&lt;br /&gt;
 &lt;label&gt;&lt;input type='checkbox' name='pepper' /&gt;&lt;span&gt;&amp;#10003;&lt;/span&gt; Pepper (if checked, sends pepper=on)&lt;/label&gt;
&lt;/p&gt;
</pre>

<pre>
&lt;p&gt;Select spices with the &lt;code&gt;value&lt;/code&gt; attribute:&lt;br /&gt;
 &lt;label&gt;&lt;input type='checkbox' name='spice' value='salt' /&gt;&lt;span&gt;&amp;#10003;&lt;/span&gt; Salt (if checked, sends spice=salt)&lt;/label&gt;&lt;br /&gt;
 &lt;label&gt;&lt;input type='checkbox' name='spice' value='pepper' /&gt;&lt;span&gt;&amp;#10003;&lt;/span&gt; Pepper (if checked, sends spice=pepper)&lt;/label&gt;
&lt;/p&gt;
</pre>

     <p>The <code>input</code>, <code>label</code>, and <code>span</code> type selectors are not assigned author styles. The <code>input[type=&quot;checkbox&quot;]</code> attribute selector, the <code>label input[type=&quot;checkbox&quot;] ~ span</code> descendant/general sibling selector, and the <code>label input[type=&quot;checkbox&quot;]:checked ~ span</code> and <code>label:hover input[type=&quot;checkbox&quot;] ~ span</code> pseudo-class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
input[type=&quot;checkbox&quot;] { display: none; }
label input[type=&quot;checkbox&quot;] ~ span { display: inline-block; width: 12px; height: 12px; vertical-align: middle; font-size: 12px; font-weight: bold; line-height: 12px; color: transparent; text-align: center; border: 2px solid #999; border-radius: 2px; box-sizing: content-box; -moz-box-sizing: content-box; margin-bottom: 3px; }
label input[type=&quot;checkbox&quot;]:checked ~ span { color: inherit; }
label:hover input[type=&quot;checkbox&quot;] ~ span { border-color: #666; cursor: default; }
</pre>

     <p>Examples of checkboxes:</p>

     <p>
      <label><input type='checkbox' name='unique to indicate checkbox1, if checked, when form submitted' /><span>&#10003;</span> Checkbox</label><br />
      <label><input type='checkbox' name='unique to indicate checkbox2, if checked, when form submitted' checked='checked' /><span>&#10003;</span> Checkbox default checked/pre-checked</label><br />
      <label><input type='checkbox' name='unique to indicate checkbox3, if checked, when form submitted' />Checkbox <span>&#10003;</span></label>
     </p>

     <h3><a id='formRadioButtons'></a>25.6. Radio Buttons</h3>

     <p>Radio buttons use the <code>input</code> element with the <code>type='radio'</code> and <code>name</code> attributes, the <code>label</code> element, and <code>&lt;span&gt;&lt;/span&gt;</code> tags containing the HTML character numeric entity (&amp;#9679;) for the black circle (&#9679;) character. Radio buttons with the same <code>name</code> attribute value form a radio button group. The radio button HTML is nested in <code>&lt;label&gt;&lt;/label&gt;</code> tags. The label extends the clickable area of the radio button to include the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. To place the radio button before and/or after the <code>&lt;label&gt;&lt;/label&gt;</code> tag content, nest <code>&lt;span&gt;&amp;#9679;&lt;/span&gt;</code> in <code>&lt;label&gt;&lt;/label&gt;</code> before and/or after the <code>&lt;label&gt;&lt;/label&gt;</code> tag content. Nesting <code>&lt;span&gt;&amp;#9679;&lt;/span&gt;</code> in <code>&lt;label&gt;&lt;/label&gt;</code> includes the radio button as part of the clickable <code>&lt;label&gt;&lt;/label&gt;</code> tag content. Only the data of the checked radio button, not the data of the unchecked radio buttons, is including when a form is submitted. If the radio button group data is to be sent when a form is submitted, use the <code>value</code> attribute and assign the <code>name</code> and <code>value</code> attributes a unique pair of values. In other words, multiple radio buttons can have the same <code>name</code> attribute value, but each <code>name</code> and <code>value</code> pair of attribute values must be unique, which means radio buttons with the same <code>name</code> attribute value must have unique <code>value</code> attribute values. To default check/pre-check a radio button, use the <code>checked='checked'</code> attribute:</p>

      <div class='note normal'>The black circle (&#9679;) character should probably be named the filled circle character because its color can be styled with the CSS <code>color</code> property as shown (<span style='color:blue'>&#9679;</span>).</div>

<pre>
&lt;p&gt;
 &lt;label&gt;&lt;input type='radio' name='creates radio button group and indicates radio button group1 when form submitted' value='unique to indicate value1, if checked, when form submitted' /&gt;&lt;span&gt;&amp;#9679;&lt;/span&gt; Radio button&lt;/label&gt;&lt;br /&gt;
 &lt;label&gt;&lt;input type='radio' name='creates radio button group and indicates radio button group1 when form submitted' value='unique to indicate value2, if checked, when form submitted' checked='checked' /&gt;&lt;span&gt;&amp;#9679;&lt;/span&gt; Radio button default checked/pre-checked&lt;/label&gt;&lt;br /&gt;
 &lt;label&gt;&lt;input type='radio' name='creates radio button group and indicates radio button group1 when form submitted' value='unique to indicate value3, if checked, when form submitted' /&gt;Radio button &lt;span&gt;&amp;#9679;&lt;/span&gt;&lt;/label&gt;
&lt;/p&gt;
</pre>

<pre>
&lt;p&gt;Select credit card:&lt;br /&gt;
 &lt;label&gt;&lt;input type='radio' name='creditcard' value='mastercard' /&gt;&lt;span&gt;&amp;#9679;&lt;/span&gt; Master Card (if checked, sends creditcard=mastercard)&lt;/label&gt;&lt;br /&gt;
 &lt;label&gt;&lt;input type='radio' name='creditcard' value='visa' /&gt;&lt;span&gt;&amp;#9679;&lt;/span&gt; Visa (if checked, sends creditcard=visa)&lt;/label&gt;
&lt;/p&gt;
</pre>

     <p>The <code>input</code>, <code>label</code>, and <code>span</code> type selectors are not assigned author styles. The <code>input[type=&quot;radio&quot;]</code> attribute selector, the <code>label input[type=&quot;radio&quot;] ~ span</code> descendant/general sibling selector, and the <code>label input[type=&quot;radio&quot;]:checked ~ span</code> and <code>label:hover input[type=&quot;radio&quot;] ~ span</code> pseudo-class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 11 Jun 2017. -->
<pre>
input[type=&quot;radio&quot;] { display: none; }
label input[type=&quot;radio&quot;] ~ span { display: inline-block; width: 12px; height: 12px; vertical-align: middle; font-size: 12px; font-weight: bold; line-height: 12px; color: transparent; text-align: center; border: 2px solid #999; border-radius: 12px; box-sizing: content-box; -moz-box-sizing: content-box; margin-bottom: 3px; }
label input[type=&quot;radio&quot;]:checked ~ span { color: inherit; }
label:hover input[type=&quot;radio&quot;] ~ span { border-color: #666; cursor: default; }
</pre>

     <p>Example of a radio button group:</p>

     <p>
      <label><input type='radio' name='creates radio button group and indicates radio button group1 when form submitted' value='unique to indicate value1, if checked, when form submitted' /><span>&#9679;</span> Radio button</label><br />
      <label><input type='radio' name='creates radio button group and indicates radio button group1 when form submitted' value='unique to indicate value2, if checked, when form submitted' checked='checked' /><span>&#9679;</span> Radio button default checked/pre-checked</label><br />
      <label><input type='radio' name='creates radio button group and indicates radio button group1 when form submitted' value='unique to indicate value3, if checked, when form submitted' />Radio button <span>&#9679;</span></label>
     </p>

    </section>
    <hr />
    <section>

     <h2><a id='images'></a>26. Images</h2>

     <p>Images use the <code>img</code> element with the <code>src</code> and <code>alt</code> attributes. If the image is suitable for the CSS <code>box-shadow</code> property, use the <code>class='box-shadow'</code> attribute. Images are placed in either; 1.) the baseline content level (i.e., sibling to paragraphs, lists, notes, tables, etc.) or 2.) <code>&lt;li&gt;&lt;/li&gt;</code> tags, typically after the content and before the closing <code>&lt;/li&gt;</code> tag. The introductory text for the image ends with a colon (:):</p>

<pre>
&lt;p&gt;Paragraph:&lt;/p&gt;
&lt;img src='image.ext' alt='Why include image and/or what is image purpose.' /&gt;
&lt;p&gt;Paragraph:&lt;/p&gt;
&lt;img src='image.ext' alt='Why include image and/or what is image purpose.' class='box-shadow' /&gt;
&lt;p&gt;Paragraph.&lt;/p&gt;
</pre>

<pre>
&lt;ol&gt;
 &lt;li&gt;Ordered list | list item.&lt;/li&gt;
 &lt;li&gt;List item:
  &lt;img src='image.ext' alt='Why include image and/or what is image purpose.' /&gt;
 &lt;/li&gt;
 &lt;li&gt;List item:
  &lt;img src='image.ext' alt='Why include image and/or what is image purpose.' class='box-shadow' /&gt;
 &lt;/li&gt;
 &lt;li&gt;List item.&lt;/li&gt;
&lt;/ol&gt;
</pre>

     <p>The <code>img</code> type selector and the <code>.box-shadow</code> class selector are assigned author styles:</p>

<!-- Last reviewed/updated: 23 Jun 2016. -->
<pre>
img {
  display: block;
  max-width: 100%;
  border: 0;
  margin: 1em 0;
}
.box-shadow {
  box-shadow: 0 1px 6px 0 #ccc;
}
</pre>

     <p>Examples of images:</p>

     <p>Paragraph ending with a <em>colon</em> as introductory text for an image <em>without</em> the <code>class='box-shadow'</code> attribute:</p>

     <img src='/images/HTML5_Logo_48.gif' alt='Why include image and/or what is image purpose. If sentence, end with period. If not sentence, end without period.' />

     <p>Paragraph ending with a <em>colon</em> as introductory text for an image <em>with</em> the <code>class='box-shadow'</code> attribute:</p>

     <img src='/images/HTML5_Logo_48.gif' alt='An example image with box-shadow.' class='box-shadow' />

     <p>Paragraph.</p>

     <ol>
      <li>Ordered list is for list items that occur in order.</li>
      <li>List item ending with a <em>colon</em> as introductory text for an image <em>without</em> the <code>class='box-shadow'</code> attribute:
       <img src='/images/HTML5_Logo_48.gif' alt='Why Insert Image First Letter Each Word Cap End Without Period' />
      </li>
     </ol>

     <p>Paragraph.</p>

     <ul>
      <li>Unordered list is for list items that do not occur in order.</li>
      <li>List item ending with a <em>colon</em> as introductory text for an image <em>with</em> the <code>class='box-shadow'</code> attribute:
       <img src='/images/HTML5_Logo_48.gif' alt='Why Insert Image First Letter Each Word Cap End Without Period' class='box-shadow' />
      </li>
     </ul>

     <p>Paragraph.</p>

     <ol>
      <li>Ordered list is for list items that occur in order.</li>
      <li>List item ending with a <em>colon</em> as introductory text for an image <em>without</em> the <code>class='box-shadow'</code> attribute:
       <img src='/images/HTML5_Logo_48.gif' alt='Why Insert Image First Letter Each Word Cap End Without Period' />
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ol>

     <ul>
      <li>Unordered list is for list items that do not occur in order.</li>
      <li>List item ending with a <em>colon</em> as introductory text for an image <em>with</em> the <code>class='box-shadow'</code> attribute:
       <img src='/images/HTML5_Logo_48.gif' alt='Why Insert Image First Letter Each Word Cap End Without Period' class='box-shadow' />
      </li>
      <li>List item first letter first word cap end with period.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='textConventions'></a>27. Text Conventions</h2>

     <h3><a id='code'></a>27.1. Code</h3>

     <p>Code includes web language keywords, identifiers, literals, operators, source code text, source code comments, etc.</p>

     <h4><a id='codeInSentences'></a>27.1.1. Code In Sentences</h4>

     <p>Code in sentences is snippets of code in sentences.</p>

     <p>Code in sentences uses the <code>code</code> element:</p>

<pre>
&lt;p&gt;Sentence with a &lt;code&gt;snippet of code&lt;/code&gt; in the sentence.&lt;/p&gt;
</pre>

     <p>In order for the code in the <code>&lt;code&gt;&lt;/code&gt;</code> tags to be presented as code, it is necessary to replace/escape the quotation mark (&quot;), ampersand (&amp;), less-than sign (&lt;), and greater-than sign (&gt;) characters with their named entities per <a href='#htmlCharacterNamedEntity'>HTML character named entity usage (below)</a>:</p>

<pre>
&lt;p&gt;Sentence with multiple snippets of code including the &lt;code&gt;input&lt;/code&gt; element, the &lt;code&gt;type='radio'&lt;/code&gt; attribute, the &lt;code&gt;&amp;lt;span&amp;gt;&amp;lt;/span&amp;gt;&lt;/code&gt; tags, and the HTML character numeric entity (&amp;amp;#9679;) for the black circle (&amp;#9679;) character. Sentence with multiple snippets of code including the &lt;code&gt;input&lt;/code&gt; type selector, the &lt;code&gt;input[type=&amp;quot;radio&amp;quot;]&lt;/code&gt; attribute selector, and the &lt;code&gt;font-size: 16px&lt;/code&gt; style without the trailing semicolon (;) character to avoid possible consecutive punctuation characters with text content punctuation.&lt;/p&gt;
</pre>

     <p>The <code>code</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 12 Nov 2017. -->
<pre>
code {
  font-family: &quot;courier new&quot;, courier, monospace;
  line-height: normal;
  background-color: #efefef;
  border-radius: 3px;
  margin: 1em 0;
  padding: 1px 4px 0;
}
</pre>

     <p>Examples of sentences with code:</p>

     <p>Sentence with multiple snippets of code including the <code>input</code> element, the <code>type='radio'</code> attribute, the <code>&lt;span&gt;&lt;/span&gt;</code> tags, and the HTML character numeric entity (&amp;#9679;) for the black circle (&#9679;) character. Sentence with multiple snippets of code including the <code>input</code> type selector, the <code>input[type=&quot;radio&quot;]</code> attribute selector, and the <code>font-size: 16px</code> style without the trailing semicolon (;) character to avoid possible consecutive punctuation characters with text content punctuation.</p>

     <h4><a id='codeInSentencesInNotes'></a>27.1.2. Code In Sentences In Notes</h4>

     <p>Code in sentences in notes are <a href='#codeInSentences'>code in sentences (above)</a> in <a href='#notes'>notes (above)</a>. Notes are text separated and demarcated from the normal flow of content. There are two types of notes; 1.) normal notes (tips/asides/etc.), and 2.) important notes (cautions/warnings/etc.). Code in sentences is snippets of code in sentences.</p>

     <p>Normal notes use the <code>div</code> element with the <code>class='note normal'</code> attribute. Important notes use the <code>div</code> element with the <code>class='note important'</code> attribute. Code in sentences uses the <code>code</code> element:</p>

<pre>
&lt;div class='note normal'&gt;Sentence in a normal note with a &lt;code&gt;snippet of code&lt;/code&gt; in the sentence.&lt;/div&gt;
</pre>

<pre>
&lt;div class='note important'&gt;Sentence in an important note with a &lt;code&gt;snippet of code&lt;/code&gt; in the sentence.&lt;/div&gt;
</pre>

     <p>In order for the code in the <code>&lt;code&gt;&lt;/code&gt;</code> tags to be presented as code, it is necessary to replace/escape the quotation mark (&quot;), ampersand (&amp;), less-than sign (&lt;), and greater-than sign (&gt;) characters with their named entities per <a href='#htmlCharacterNamedEntity'>HTML character named entity usage (below)</a>:</p>

<pre>
&lt;div class='note normal'&gt;Sentence in a normal note with multiple snippets of code including the &lt;code&gt;input&lt;/code&gt; element, the &lt;code&gt;type='radio'&lt;/code&gt; attribute, the &lt;code&gt;&amp;lt;span&amp;gt;&amp;lt;/span&amp;gt;&lt;/code&gt; tags, and the HTML character numeric entity (&amp;amp;#9679;) for the black circle (&amp;#9679;) character.&lt;/div&gt;
</pre>

<pre>
&lt;div class='note important'&gt;Sentence in an important note with multiple snippets of code including the &lt;code&gt;input&lt;/code&gt; type selector, the &lt;code&gt;input[type=&amp;quot;radio&amp;quot;]&lt;/code&gt; attribute selector, and the &lt;code&gt;font-size: 16px&lt;/code&gt; style without the trailing semicolon (;) character to avoid possible consecutive punctuation characters with text content punctuation.&lt;/div&gt;
</pre>

     <p>The <code>div</code> type selector is not assigned author styles. The <code>code</code> type selector, the <code>.note code</code> descendant selector, and the <code>.note</code>, <code>.normal</code>, and <code>.important</code> class selectors are assigned author styles:</p>

<!-- Last reviewed/updated: 12 Nov 2017. -->
<pre>
code { font-family: &quot;courier new&quot;, courier, monospace; line-height: normal; <s>background-color: #efefef;</s> border-radius: 3px; margin: 1em 0; padding: 1px 4px 0; }
.note { <s>line-height: 1.75;</s> background-color: #efefef; border: 1px solid #efefef; border-left-width: 5px; border-radius: 3px; margin: 1em 0; padding: 0.5em; }
.normal { border-left-color: #8ccbf2; }
.important { border-left-color: #e05252; }
.note code { background-color: #d7d7d7; }
</pre>

     <p>Examples of code in sentences in notes:</p>

     <div class='note normal'>Sentence in a normal note with multiple snippets of code including the <code>input</code> element, the <code>type='radio'</code> attribute, the <code>&lt;span&gt;&lt;/span&gt;</code> tags, and the HTML character numeric entity (&amp;#9679;) for the black circle (&#9679;) character.</div>

     <div class='note important'>Sentence in an important note with multiple snippets of code including the <code>input</code> type selector, the <code>input[type=&quot;radio&quot;]</code> attribute selector, and the <code>font-size: 16px</code> style without the trailing semicolon (;) character to avoid possible consecutive punctuation characters with text content punctuation.</div>

     <h4><a id='codeInWebPageTitle'></a>27.1.3. Code In Web Page Title</h4>

     <p>Code in web page title is snippets of code in the <a href='#webPageTitle'>web page title (above)</a>. The web page title is located near the top of the web page below the <a href='#lwcHomeBreadcrumbsNavigation'>LWC Home breadcrumbs navigation (above)</a>.</p>

     <p>The web page title uses the <code>h1</code> element. Code in web page title uses the <code>code</code> element:</p>

<pre>
&lt;h1&gt;Web Page Title With A &lt;code&gt;snippet of code&lt;/code&gt; In The Web Page Title&lt;/h1&gt;
</pre>

     <p>In order for the code in the <code>&lt;code&gt;&lt;/code&gt;</code> tags to be presented as code, it is necessary to replace/escape the quotation mark (&quot;), ampersand (&amp;), less-than sign (&lt;), and greater-than sign (&gt;) characters with their named entities per <a href='#htmlCharacterNamedEntity'>HTML character named entity usage (below)</a>. For an example of HTML character named entity usage, see <a href='#codeInSentences'>code in sentences (above)</a>.</p>

     <p>The <code>h1</code> and <code>code</code> type selectors and the <code>h1 code</code> descendant selector are assigned author styles:</p>

<!-- Last reviewed/updated: 12 Nov 2017. -->
<pre>
h1 {
  font-size: 2.4em;
  font-weight: normal;
  color: #005a9c;
  <s>margin: 14px 0;</s> /* Applied to web page title, not to code in web page title; hence, strike-through. */
}
code {
  font-family: &quot;courier new&quot;, courier, monospace;
  <s>line-height: normal;</s>
  background-color: #efefef;
  border-radius: 3px;
  margin: 1em 0;
  padding: 1px 4px 0;
}
h1 code {
  line-height: 1;
}
</pre>

     <p>For an example of code in a web page title, go to the top of <a href='/css/css_font_size_property.php'>Introduction To The CSS <code>font-size</code> Property (learnwebcoding.com)</a>.</p>

     <h4><a id='linesAndBlocksOfCode'></a>27.1.4. Lines And Blocks Of Code</h4>

     <p>Lines and blocks of code uses the <code>pre</code> element:</p>

<pre>
&lt;pre&gt;
line of code
&lt;/pre&gt;
</pre>

<pre>
&lt;pre&gt;
block
of
code
&lt;/pre&gt;
</pre>

     <p>For a block of code with line numbers, use a minimum of four spaces between the line number and the code:</p>

<pre>
&lt;pre&gt;
1    block         /* Four spaces between the line number and the code. */
2    of
3    code          /* Four spaces between the line number and the code. */
&lt;/pre&gt;
</pre>

<pre>
&lt;pre&gt;
1     block        /* Five spaces between the line number and the code. */
2     of
3     code
4     with
5     minimum
6     four
7     spaces
8     between
9     line         /* Five spaces between the line number and the code. */
10    number       /* Four spaces between the line number and the code. */
11    and
12    code         /* Four spaces between the line number and the code. */
&lt;/pre&gt;
</pre>

     <p>To draw attention to a snippet, line, or sub-block of code within a line or block of code, use the <code>b</code> element:</p>

<pre>
&lt;pre&gt;
boring
boring &lt;b&gt;attention&lt;/b&gt; boring
boring
&lt;b&gt;attention&lt;/b&gt;
boring
&lt;b&gt;attention
attention&lt;/b&gt;
boring
&lt;/pre&gt;
</pre>

     <p> If there are line numbers, do not include the line number within the <code>b</code> element:</p>

<pre>
&lt;pre&gt;
1    boring
2    boring &lt;b&gt;attention&lt;/b&gt; boring
3    boring
4    &lt;b&gt;attention&lt;/b&gt;
5    boring
6    &lt;b&gt;attention&lt;/b&gt;
7    &lt;b&gt;attention&lt;/b&gt;
8    boring
&lt;/pre&gt;
</pre>

     <p>In order for the code in the <code>&lt;pre&gt;&lt;/pre&gt;</code> tags to be presented as code, it is necessary to replace/escape the quotation mark (&quot;), ampersand (&amp;), less-than sign (&lt;), and greater-than sign (&gt;) characters with their named entities per <a href='#htmlCharacterNamedEntity'>HTML character named entity usage (below)</a>:</p>

<pre>
&lt;pre&gt;
if (arguments.length &amp;gt; 0){
 for (var i = 0; i &amp;lt; arguments.length; i = i + 2){
  bcrumbsNavHtmlString += &amp;quot; &amp;amp;rarr; &amp;lt;a href='&amp;quot; + arguments[i] + &amp;quot;index.html'&amp;gt;&amp;quot; + arguments[i + 1] + &amp;quot;&amp;lt;/a&amp;gt;&amp;quot;;
 }
}
&lt;/pre&gt;
</pre>

     <p>The <code>b</code> type selector is not assigned author styles. The <code>pre</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 24 Jun 2016. -->
<pre>
pre {
  line-height: 1.5;
  font-family: &quot;courier new&quot;, courier, monospace;
  background-color: #efefef;
  white-space: pre-wrap;
  word-wrap: break-word;
  overflow-wrap: break-word;
  border: 1px solid #efefef;
  border-left-width: 5px;
  border-radius: 3px;
  border-left-color: #aaa;
  margin: 1em 0;
  padding: 0.5em;
}
</pre>

     <p>Examples of lines and blocks of code:</p>

<pre>
if (arguments.length &gt; 0){
 for (var i = 0; i &lt; arguments.length; i = i + 2){
  bcrumbsNavHtmlString += &quot; &amp;rarr; &lt;a href='&quot; + arguments[i] + &quot;index.html'&gt;&quot; + arguments[i + 1] + &quot;&lt;/a&gt;&quot;;
 }
}
</pre>

<pre>
var <b>BcrumbsNavUtil</b> = {
 bcrumbsNav: function(){
  <b>var bcrumbsNavElementReference = document.getElementById(&quot;bcrumbsNavElement&quot;);</b>
  var bcrumbsNavHtmlString = &quot;&lt;a href='/index2.html'&gt;Web Site Home Page&lt;/a&gt;&quot;;
  <b>if (arguments.length &gt; 0){
   for (var i = 0; i &lt; arguments.length; i = i + 2){
    bcrumbsNavHtmlString += &quot; &amp;rarr; &lt;a href='&quot; + arguments[i] + &quot;index.html'&gt;&quot; + arguments[i + 1] + &quot;&lt;/a&gt;&quot;;
   }
  }</b>
  bcrumbsNavElementReference.innerHTML = bcrumbsNavHtmlString;
 }
};
</pre>

<pre>
1     var <b>BcrumbsNavUtil</b> = {
2      bcrumbsNav: function(){
3       <b>var bcrumbsNavElementReference = document.getElementById(&quot;bcrumbsNavElement&quot;);</b>
4       var bcrumbsNavHtmlString = &quot;&lt;a href='/index2.html'&gt;Web Site Home Page&lt;/a&gt;&quot;;
5       <b>if (arguments.length &gt; 0){</b>
6        <b>for (var i = 0; i &lt; arguments.length; i = i + 2){</b>
7         <b>bcrumbsNavHtmlString += &quot; &amp;rarr; &lt;a href='&quot; + arguments[i] + &quot;index.html'&gt;&quot; + arguments[i + 1] + &quot;&lt;/a&gt;&quot;;</b>
8        <b>}</b>
9       <b>}</b>
10      bcrumbsNavElementReference.innerHTML = bcrumbsNavHtmlString;
11     }
12    };
</pre>

     <h4><a id='overriddenCode'></a>27.1.5. Overridden Code</h4>

     <p>Overridden code denotes code that is overridden by overriding code.</p>

     <p>Overridden code uses the <code>s</code> element:</p>

<pre>
&lt;pre&gt;
code &lt;s&gt;overridden code&lt;/s&gt; overriding code
&lt;/pre&gt;
</pre>

<!-- Last reviewed/updated: 11 Aug 2016. -->
     <p>The <code>s</code> type selector is not assigned author styles.</p>

     <p>Examples of overridden code:</p>

<pre>
a { <s>color: #005a9c;</s> text-decoration: none; }
a:hover { <s>color: #000; text-decoration: underline;</s> }
a:focus { <s>outline: thin dotted invert;</s> }
a { color: #ccc; }
a:hover { color: #fff; text-decoration: none; }
a:focus { outline: 0; }
</pre>

     <h4><a id='htmlCharacterNamedEntity'></a>27.1.6. HTML Character Named Entity Usage</h4>

     <p>Some characters have a special purpose/meaning in HTML and, therefore, in certain contexts, should be replaced (a.k.a., escaped) with their named or numeric entity. In HTML, the following characters are to be replaced with their named or numeric entities as specified:</p>

     <table>
      <caption>HTML Character Named Entity Usage</caption>
      <thead>
       <tr>
        <th>Character</th>
        <th>Named Entity</th>
        <th>Numeric Entity</th>
        <th>Character Special Purpose/Meaning In HTML</th>
        <th>Replace Character With Named Entity</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>quotation mark (&quot;) <a id='1_htmlCharacterNamedEntity_return'></a><a href='#1_htmlCharacterNamedEntity'>(1)</a></td>
        <td><code>&amp;quot;</code></td>
        <td><code>&amp;#34;</code></td><!-- U+0022 -->
        <td>To denote the start/end of an HTML element attribute value.</td>
        <td>Always, except when being used to denote the start/end of an HTML element attribute value.</td>
       </tr>
       <tr>
        <td>ampersand (&amp;)</td>
        <td><code>&amp;amp;</code></td>
        <td><code>&amp;#38;</code></td><!-- U+0026 -->
        <td>To denote the start of an HTML character named or numeric entity.</td>
        <td>Always, except when being used to denote the start of an HTML character named or numeric entity.</td>
       </tr>
<!--
       <tr>
        <td>apostrophe (&apos;) <a id='2_htmlCharacterNamedEntity_return'></a><a href='#2_htmlCharacterNamedEntity'>(2)</a></td>
        <td><code>&amp;apos;</code></td>
        <td><code>&amp;#39;</code></td>U+0027
        <td>To denote the start/end of an HTML element attribute value.</td>
        <td>Always, except when being used to denote the start/end of an HTML element attribute value.</td>
       </tr>
-->
       <tr>
        <td>less-than sign (&lt;)</td>
        <td><code>&amp;lt;</code></td>
        <td><code>&amp;#60;</code></td><!-- U+003C -->
        <td>To denote the start of an HTML tag.</td>
        <td>Always, except when being used to denote the start of an HTML tag.</td>
       </tr>
       <tr>
        <td>greater-than sign (&gt;)</td>
        <td><code>&amp;gt;</code></td>
        <td><code>&amp;#62;</code></td><!-- U+003E -->
        <td>To denote the end of an HTML tag.</td>
        <td>Always, except when being used to denote the end of an HTML tag.</td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='5'>
         <a id='1_htmlCharacterNamedEntity'></a><a href='#1_htmlCharacterNamedEntity_return'>(1)</a> Quotation mark is also known as double quotation mark.
<!--
         <a id='2_htmlCharacterNamedEntity'></a><a href='#2_htmlCharacterNamedEntity_return'>(2)</a> Apostrophe is also known as single quotation mark.
-->
        </td>
       </tr>
      </tfoot>
     </table>

     <h3><a id='userInput'></a>27.2. User Input</h3>

     <p>All user input types use the <code>kbd</code> element. Use the <code>kbd</code> element on user inputs to perform, or on user inputs that were performed, not on user inputs mentioned casually, nor on user inputs not to perform. For example:</p>

     <ul>
      <li>Enter is a key on the keyboard.</li>
      <li>Press <kbd>Enter</kbd>.</li>
      <li>In the Abc password field, enter the password or check No password. In this example, <kbd>abc_psswrd</kbd> was entered.</li>
      <li>In the Xyz password field, enter the password or check No password. In this example, <kbd>No password</kbd> was checked.</li>
     </ul>

     <h4><a id='objectsToClick'></a>27.2.1. Objects To Click</h4>

     <p>Objects to click include buttons, tabs, etc. Objects are clicked. In general, use the button/tab name, not the word <q>button/tab.</q> For example, click <kbd>OK</kbd> and <kbd>General</kbd>, not click the <kbd>OK</kbd> button and the <kbd>General</kbd> tab. Multiple objects to click in succession are separated by a vertical line (|) character. In general, do not include tabs that are selected by default. Use the same spelling and capitalization as the button/tab name.</p>

     <p>Objects to click use the <code>kbd</code> element. The vertical line (|) character is included in the <code>&lt;kbd&gt;&lt;/kbd&gt;</code> tags. There is one space character before and after the vertical line (|) character:</p>

<pre>
&lt;p&gt;&lt;kbd&gt;object&lt;/kbd&gt;&lt;/p&gt;
</pre>

<pre>
&lt;p&gt;&lt;kbd&gt;object1 | object2 | object3&lt;/kbd&gt;&lt;/p&gt;
</pre>

     <p>The <code>kbd</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 25 Jun 2016. -->
<pre>
kbd {
  font-family: arial, tahoma, sans-serif;
  font-weight: bold;
}
</pre>

     <p>Examples of objects to click:</p>

     <p>Click <b>OK</b>.</p>

     <p>Click <b>Start | Control Panel | Internet Options | Advanced | Reset | Reset</b>.</p>

     <p>Either accept the default and click <b>Next</b>, or click <b>New</b>, create one or more drives, select a drive for the installation of Windows 8.1, and click <b>Next</b>.</p>

     <h4><a id='keyboardKeysToPress'></a>27.2.2. Keyboard Keys To Press</h4>

     <p>Keyboard keys are pressed. In general, use the keyboard key name, not the word <q>key.</q> For example, press <kbd>Enter</kbd>, not press the <kbd>Enter</kbd> key. Multiple keyboard keys to press simultaneously are separated by a plus sign (+) character. Use the same spelling and capitalization as the keyboard key.</p>

     <p>Keyboard keys to press use the <code>kbd</code> element. The plus sign (+) character is not included in the <code>&lt;kbd&gt;&lt;/kbd&gt;</code> tags. There is no space character before or after the plus sign (+) character:</p>

<pre>
&lt;p&gt;&lt;kbd&gt;key&lt;/kbd&gt;&lt;/p&gt;
</pre>

<pre>
&lt;p&gt;&lt;kbd&gt;key&lt;/kbd&gt;+&lt;kbd&gt;key&lt;/kbd&gt;&lt;/p&gt;
</pre>

     <p>The <code>kbd</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 25 Jun 2016. -->
<pre>
kbd {
  font-family: arial, tahoma, sans-serif;
  font-weight: bold;
}
</pre>

     <p>Examples of keyboard keys to press:</p>

     <p>Press <kbd>Enter</kbd>.</p>

     <p>Press <kbd>Ctrl</kbd>+<kbd>Alt</kbd>+<kbd>Del</kbd>.</p>

     <h4><a id='textToEnterOrType'></a>27.2.3. Text To Enter Or Type</h4>

     <p>Text is entered or typed. In general, text is entered into forms and typed at the terminal/command prompt.</p>

     <p>Text to enter or type uses the <code>kbd</code> element:</p>

<pre>
&lt;p&gt;&lt;kbd&gt;text to enter or type&lt;/kbd&gt;&lt;/p&gt;
</pre>

     <p>The <code>kbd</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 25 Jun 2016. -->
<pre>
kbd {
  font-family: arial, tahoma, sans-serif;
  font-weight: bold;
}
</pre>

     <p>Examples of text to enter or type:</p>

     <p>In the username field, enter <kbd>yourUsername</kbd>.</p>

     <p>Type <kbd>fdisk /mbr</kbd> and press <kbd>Enter</kbd>.</p>

     <h4><a id='fieldsets'></a>27.2.4. Fieldsets</h4>

     <p>In the Abc fieldset. Go to the Abc fieldset. Use the same spelling and capitalization as the fieldset name.</p>

     <p>Fieldsets do not use an HTML element:</p>

<pre>
&lt;p&gt;the Abc fieldset&lt;/p&gt;
</pre>

<!-- Last reviewed/updated: 25 Jun 2016. -->
     <p>Fieldsets are not assigned author styles.</p>

     <p>Examples of fieldsets:</p>

     <p>In the Database fieldset.</p>

     <p>Go to the Database fieldset.</p>

     <h4><a id='textboxesAndTextareas'></a>27.2.5. Textboxes And Textareas (Fields)</h4>

     <p>Textboxes and textareas are referred to as fields. Text is entered into fields. In the Abc field, enter <kbd>text</kbd>. In general, use <q>field,</q> not <q>textbox</q> or <q>textarea.</q> For example, in the Abc field, not in the Abc textbox, not in the Abc textarea. Use the same spelling and capitalization as the field name.</p>

     <p>Fields do not use an HTML element. As described in <a href='#textToEnterOrType'>text to enter or type (above)</a>, the text entered into a field uses the <code>kbd</code> element:</p>

<pre>
&lt;p&gt;In the Abc field, enter &lt;kbd&gt;text&lt;/kbd&gt;.&lt;/p&gt;
</pre>

<!-- Last reviewed/updated: 25 Jun 2016. -->
     <p>Fields are not assigned author styles.</p>

     <p>Examples of fields:</p>

     <p>In the Profile field, enter <kbd>profile1</kbd>.</p>

     <p>In the Profile field, enter a profile name. In this example, <kbd>profile1</kbd> was entered.</p>

     <p>In the Profile field, use the default (profile) or enter a different profile name. In this example, <kbd>profile</kbd> was entered.</p>

     <p>In the Profile field, use the default (profile) or enter a different profile name. In this example, <kbd>profile1</kbd> was entered.</p>

     <p>In the Xyz field, enter a password. In this example, the field was <kbd>empty/blank</kbd>.</p>
 
     <h4><a id='selectboxes'></a>27.2.6. Selectboxes (Dropdowns)</h4>

     <p>Selectboxes are also known as dropdowns. Dropdown options are selected. In the Abc dropdown, select <kbd>option name</kbd>. In general, use <q>dropdown,</q> not <q>selectbox.</q> For example, in the Abc dropdown, not in the Abc selectbox. Use the same spelling and capitalization as the selectbox name and the option name.</p>

     <p>Selectbox names do not use an HTML element. The selected option uses the <code>kbd</code> element:</p>

<pre>
&lt;p&gt;In the Abc selectbox, select &lt;kbd&gt;option name&lt;/kbd&gt;.&lt;/p&gt;
&lt;p&gt;In the Abc dropdown, select &lt;kbd&gt;option name&lt;/kbd&gt;.&lt;/p&gt;
</pre>

     <p>The <code>kbd</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 25 Jun 2016. -->
<pre>
kbd {
  font-family: arial, tahoma, sans-serif;
  font-weight: bold;
}
</pre>

     <p>Examples of selectboxes:</p>

     <p>In the Year dropdown, select <kbd>2016</kbd>.</p>

     <p>In the Year dropdown, select a year. In this example, <kbd>2016</kbd> was selected.</p>

     <p>In the Year dropdown, select the default (2016) or select a different year. In this example, <kbd>2016</kbd> was selected.</p>

     <h4><a id='checkboxes'></a>27.2.7. Checkboxes</h4>

     <p>Checkboxes are checked or unchecked, not selected or unselected. Use the same spelling and capitalization as the checkbox name.</p>

     <p>The checked and unchecked checkboxes use the <code>kbd</code> element:</p>

<pre>
&lt;p&gt;Check &lt;kbd&gt;checkbox name&lt;/kbd&gt;.&lt;/p&gt;
</pre>

<pre>
&lt;p&gt;Uncheck &lt;kbd&gt;checkbox name&lt;/kbd&gt;.&lt;/p&gt;
</pre>

     <p>The <code>kbd</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 25 Jun 2016. -->
<pre>
kbd {
  font-family: arial, tahoma, sans-serif;
  font-weight: bold;
}
</pre>

     <p>Examples of checkboxes:</p>

     <p>Under Server, check <b>Apache</b> and <b>MySQL</b>. Under Program Languages, uncheck <b>phpMyAdmin</b>.</p>

     <p>Under Server, check/uncheck the servers. In this example, <b>Apache</b> and <b>MySQL</b> were checked. Under Program Languages, check/uncheck the program languages. In this example, <b>phpMyAdmin</b> was unchecked.</p>

     <p>Under Server, check the defaults (Apache and MySQL) or check/uncheck different servers. In this example, <b>Apache</b> and <b>MySQL</b> were checked. Under Program Languages, uncheck the default (phpMyAdmin) or check/uncheck different program languages. In this example, <b>phpMyAdmin</b> was unchecked.</p>

     <h4><a id='radioButtonGroups'></a>27.2.8. Radio Button Groups</h4>

     <p>A radio button group consists of one or more radio buttons. Radio buttons are checked, not selected. Use the same spelling capitalization as the radio button group name and the radio button name.</p>

     <p>Radio button group names do not use an HTML element. The checked radio button uses the <code>kbd</code> element:</p>

<pre>
&lt;p&gt;In the Abc radio button group, check &lt;kbd&gt;radio button name&lt;/kbd&gt;.&lt;/p&gt;
</pre>

     <p>The <code>kbd</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 25 Jun 2016. -->
<pre>
kbd {
  font-family: arial, tahoma, sans-serif;
  font-weight: bold;
}
</pre>

     <p>Examples of radio button groups:</p>

     <p>In the Delivery Method radio button group, check <kbd>Next Business Day</kbd>.</p>

     <p>In the Delivery Method radio button group, check a delivery method. In this example, <kbd>Next Business Day</kbd> was checked.</p>

     <p>In the Delivery Method radio button group, check the default (Next Business Day) or check a different delivery method. In this example, <kbd>Next Business Day</kbd> was checked.</p>

     <h3><a id='emailAddressesAndUris'></a>27.3. Email Addresses And URIs</h3>

     <h4><a id='emailAddressesAsHyperlinks'></a>27.3.1. Email Addresses As Hyperlinks</h4>

     <p>Email addresses as hyperlinks open the computer's default email client and insert the recipient's email address into the email client's To field.</p>

     <p>Email addresses as hyperlinks are treated as <a href='#hyperlinks'>hyperlinks (above)</a>. In other words, email addresses as hyperlinks are treated either as <a href='#normalHyperlinks'>normal hyperlinks (above)</a> or as <a href='#listHyperlinks'>list hyperlinks (above)</a>. The only difference between URIs as hyperlinks and email addresses as hyperlinks is that with email addresses as hyperlinks the <code>&lt;a&gt;</code> element <code>href</code> attribute value is the recipient's email address prepended with <code>mailto:</code>, not a URI.</p>

     <div class='note normal'>For URIs as hyperlinks, see <a href='#hyperlinks'>hyperlinks (above)</a>.</div>

     <p>Email addresses as hyperlinks: normal hyperlinks:</p>

<pre>
&lt;p&gt;&lt;a href='mailto:user@company.com'&gt;email address&lt;/a&gt;&lt;/p&gt;
</pre>

     <p>Email addresses as hyperlinks: list hyperlinks:</p>

<pre>
&lt;ul class='link-list'&gt;
 &lt;li&gt;&lt;a href='mailto:user@company.com'&gt;Email Address&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>

     <p>Examples of email addresses as hyperlinks: normal hyperlinks:</p>

     <p>An email address as hyperlink (normal hyperlink) is <a href='mailto:user@company.com'>email address</a>.</p>

     <p>An email address as hyperlink (normal hyperlink) is <a href='mailto:user@company.com'>contact</a>.</p>

     <p>An email address as hyperlink (normal hyperlink) is <a href='mailto:user@company.com'>user@company.com</a>.</p>

     <p>Examples of email addresses as hyperlinks: list hyperlinks:</p>

     <ul class='link-list'>
      <li><a href='mailto:user@company.com'>Email Address</a></li>
      <li><a href='mailto:user@company.com'>Contact</a></li>
      <li><a href='mailto:user@company.com'>user@company.com</a></li>
     </ul>

     <h4><a id='emailAddressesAndUrisAsText'></a>27.3.2. Email Addresses And URIs As Text</h4>

     <p>Email addresses and URIs as text do not use an HTML element:</p>

<pre>
&lt;p&gt;An email address as text is user@company.com.&lt;/p&gt;
</pre>

<pre>
&lt;p&gt;A URI as text is http://www.learnwebcoding.com/.&lt;/p&gt;
</pre>

<!-- Last reviewed/updated: 25 Jun 2016. -->
     <p>Email addresses and URIs as text are not assigned author styles.</p>

     <p>Examples of email addresses and URIs as text:</p>

     <p>An email address as text is user@company.com.</p>

     <p>A URI as text is http://www.learnwebcoding.com/.</p>

     <h3><a id='filenames'></a>27.4. Filenames, Folder Names, File System Paths, And Terminal/Command Prompt Output</h3>

     <p>Filenames, folder names, file system paths, and terminal/command prompt output use the <code>span</code> element with the <code>class='filename'</code> attribute:</p>

<pre>
&lt;span class='filename'&gt;filename.ext&lt;/span&gt;
</pre>

     <p>The <code>span</code> type selector is not assigned author styles. The <code>.filename</code> class selector is assigned author styles:</p>

<!-- Last reviewed/updated: 25 Jun 2016. -->
<pre>
.filename {
  font-family: &quot;courier new&quot;, courier, monospace;
}
</pre>

     <p>Examples of filenames, folder names, file system paths, and terminal/command prompt output:</p>

     <p>The Bootstrap implementation requires loading the Bootstrap style sheet <span class='filename'>bootstrap.min.css</span> file, the jQuery JavaScript <span class='filename'>jquery-3.3.1.min.js</span> file, and the Bootstrap JavaScript <span class='filename'>bootstrap.min.js</span> file.</p>

     <p>The <span class='filename'>wscript.exe</span> file is located in the <span class='filename'>System32</span> folder. Therefore, the file system path to the <span class='filename'>wscript.exe</span> file is <span class='filename'>C:\Windows\System32\wscript.exe</span>.</p>

     <p>The command prompt at <span class='filename'>A:\></span> appears.</p>

     <h4><a id='filenamesAsHyperlinks'></a>27.4.1. Filenames As Hyperlinks</h4>

     <p>Filenames as hyperlinks either open the file in the web browser, or prompt the user to open or save the file.</p>

     <p>Filenames as hyperlinks are treated as <a href='#hyperlinks'>hyperlinks (above)</a>. In other words, filenames as hyperlinks are treated either as <a href='#normalHyperlinks'>normal hyperlinks (above)</a> or as <a href='#listHyperlinks'>list hyperlinks (above)</a>. The only difference between URIs as hyperlinks and filenames as hyperlinks is that with filenames as hyperlinks the <code>&lt;a&gt;</code> element <code>href</code> attribute value is the path to a file, not to a web page.</p>

     <div class='note normal'>For URIs as hyperlinks, see <a href='#hyperlinks'>hyperlinks (above)</a>.</div>

     <p>Filenames as hyperlinks: normal hyperlinks:</p>

<pre>
&lt;p&gt;&lt;a href='/rootrelativepath/filename.ext'&gt;&lt;span class='filename'&gt;filename.ext&lt;/span&gt; (domain.com)&lt;/a&gt;&lt;/p&gt;
</pre>

     <p>Filenames as hyperlinks: list hyperlinks:</p>

<pre>
&lt;ul class='link-list'&gt;
 &lt;li&gt;&lt;a href='/rootrelativepath/filename.ext'&gt;&lt;span class='filename'&gt;filename.ext&lt;/span&gt; (domain.com)&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>

     <p>Examples of filenames as hyperlinks: normal hyperlinks:</p>

     <p>A filename as hyperlink (normal hyperlink) is <a href='/html/template_explained/filename.ext'><span class='filename'>filename.ext</span> (learnwebcoding.com)</a>.</p>

     <p>A filename as hyperlink (normal hyperlink) is <a href='/html/template_explained/filename.txt'><span class='filename'>filename.txt</span> (learnwebcoding.com)</a>.</p>

     <p>Examples of filenames as hyperlinks: list hyperlinks:</p>

     <ul class='link-list'>
      <li><a href='/javascript/javascript_techniques/collapse_expand_all/collapse_expand_all.html'><span class='filename'>collapse_expand_all.html</span> (learnwebcoding.com)</a></li>
      <li><a href='/javascript/javascript_techniques/collapse_expand_all/collapse_expand_all.css'><span class='filename'>collapse_expand_all.css</span> (learnwebcoding.com)</a></li>
      <li><a href='/javascript/javascript_techniques/collapse_expand_all/collapse_expand_all.js'><span class='filename'>collapse_expand_all.js</span> (learnwebcoding.com)</a></li>
     </ul>

     <h3><a id='databaseNames'></a>27.5. Database Names, Table Names, Column Names, Field Data, And User Accounts</h3>

     <p>Database names, table names, column names, field data, and user accounts use the <code>span</code> element with the <code>class='filename'</code> attribute:</p>

<pre>
&lt;span class='filename'&gt;database_name&lt;/span&gt;
</pre>

     <p>The <code>span</code> type selector is not assigned author styles. The <code>.filename</code> class selector is assigned author styles:</p>

<!-- Last reviewed/updated: 25 Jun 2016. -->
<pre>
.filename {
  font-family: &quot;courier new&quot;, courier, monospace;
}
</pre>

     <p>Examples of database names, table names, column names, field data, and user accounts:</p>

     <p>Update database server support. Primary changes: 1.) add support for MySQL 5.7 stores MySQL user account password in <span class='filename'>mysql.user</span> table <span class='filename'>authentication_string</span> column, not <span class='filename'>password</span> column (in MySQL 5.7, <span class='filename'>mysql.user</span> table <span class='filename'>password</span> column does not exit); 2.) add support for MySQL 5.7 <span class='filename'>'mysql.session'@'localhost'</span> and <span class='filename'>'mysql.sys'@'localhost'</span> reserved user accounts, and MariaDB 10.0 - 10.2 <span class='filename'>'root'@'computername-pc'</span> reserved user account; 3.) add support for MySQL 5.7 <span class='filename'>sys</span> reserved database; and 4.) change MySQL to store Simple MySQL Admin | User Accounts | create user account | host name/IP address field empty/blank in <span class='filename'>mysql.user</span> table <span class='filename'>host</span> column as any host name (<span class='filename'>'%'</span> string), not empty string (<span class='filename'>''</span>), and change Simple MySQL Admin | User Accounts | create user account reports to display host name/IP address field empty/blank as any host name (<span class='filename'>'%'</span> string), not empty string (<span class='filename'>''</span>).</p>

     <h3><a id='dialogTitles'></a>27.6. Dialog Titles And Web Page Titles</h3>

     <p>In a dialog, the dialog title appears in the dialog title bar, and the dialog text appears in the body of the dialog. In general, use <q>dialog</q>, not <q>dialog box.</q> For example, the Setup dialog appears, not the Setup dialog box appears. Always use the dialog title. The dialog text is optional. The dialog title and the dialog text are separated by a colon (:) character. Use the same spelling, capitalization, and punctuation, including any ending punctuation, as the dialog title and the dialog text.</p>

     <p>In a web page, the web page title typically appears in at least two place; 1.) in the <code>&lt;head&gt;&lt;/head&gt;</code> section <code>&lt;title&gt;&lt;/title&gt;</code> tags, and 2.) in the <code>&lt;body&gt;&lt;/body&gt;</code> section <code>&lt;h1&gt;&lt;/h1&gt;</code> tags as discussed in <a href='#webPageTitle'>web page title (above)</a>. Traditionally, the <code>&lt;head&gt;&lt;/head&gt;</code> section <code>&lt;title&gt;&lt;/title&gt;</code> tag content is displayed in the web browser title bar, and the <code>&lt;body&gt;&lt;/body&gt;</code> section <code>&lt;h1&gt;&lt;/h1&gt;</code> tag content is the first prominent text near the top of the web page. In general, use the <code>&lt;title&gt;&lt;/title&gt;</code> tag content or the <code>&lt;h1&gt;&lt;/h1&gt;</code> tag content, which ever is present and most descriptive of the web page. If the web page is a tabbed web page, use the tab title, the <code>&lt;title&gt;&lt;/title&gt;</code> tag content, or the <code>&lt;h1&gt;&lt;/h1&gt;</code> tag content, which ever is most descriptive of the web page. Use the same spelling, capitalization. and punctuation, including any ending punctuation, as the tab title, the <code>&lt;title&gt;&lt;/title&gt;</code> tag content, or the <code>&lt;title&gt;&lt;/title&gt;</code> tag content.</p>

     <p>Dialog titles and web page titles use the <code>b</code> element. For dialog titles with dialog text, there is no space character before, and there is one space character after, the colon (:) character:</p>

<pre>
&lt;p&gt;&lt;b&gt;Dialog Title&lt;/b&gt;&lt;/p&gt;
</pre>

<pre>
&lt;p&gt;&lt;b&gt;Dialog Title: Dialog text.&lt;/b&gt;&lt;/p&gt;
</pre>

<pre>
&lt;p&gt;&lt;b&gt;Web Page Title Using Title Tag Content&lt;/b&gt;&lt;/p&gt;
</pre>

<pre>
&lt;p&gt;&lt;b&gt;Web Page Title Using H1 Tag Content&lt;/b&gt;&lt;/p&gt;
</pre>

<pre>
&lt;p&gt;&lt;b&gt;Web Page Title Using Tab Title&lt;/b&gt;&lt;/p&gt;
</pre>

<!-- Last reviewed/updated: 25 Jun 2016. -->
     <p>The <code>b</code> type selector is not assigned author styles.</p>

     <p>Examples of dialog titles and web page titles:</p>

     <p>The <b>Windows Setup</b> dialog appears.</p>

     <p>The <b>Windows Setup: Which type of installation do you want?</b> dialog appears.</p>

     <p>The <b>Learn Web Coding Home Template</b> web page appears</p>

     <p>The <b>Security</b> web page appears.</p>

     <p>The <b>General</b> tab is selected.</p>

     <h3><a id='computerReports'></a>27.7. Computer Error, Success, And Failure Reports</h3>

     <p>Computer error, success, and failure reports are text that report the error, success, or failure status a computer related action. Use the same spelling, capitalization, and punctuation, including any ending punctuation, as the report text.</p>

     <p>Computer error, success, and failure reports use the <code>q</code> element:</p>

<pre>
&lt;p&gt;&lt;q&gt;Computer report text.&lt;q&gt;&lt;/p&gt;
</pre>

<!-- Last reviewed/updated: 25 Jun 2016. -->
     <p>The <code>q</code> type selector is not assigned author styles.</p>

     <p>Examples of computer error, success, and failure reports:</p>

     <p>The <q>Please enter a value less than or equal to 0.</q> validation error message appears.</p>

     <p>The <q>Information: Configuration updated successfully.</q> report appears.</p>

     <p>If the <q>Ready on port 80</q> report appears, Node.js is properly installed and <span class='filename'>nodetest.js</span> is running and listening on port 80.</p>

     <p>The W3C CSS Validation Service throws a warning: <q><code>:-ms-input-placeholder</code> is an unknown vendor extended pseudo-class.</q></p>

     <h3><a id='emphasizedText'></a>27.8. Emphasized Text</h3>

     <p>Emphasized text is text of importance that stands out compared to the surrounding text.</p>

     <p>Emphasized text uses the <code>em</code> element:</p>

<pre>
&lt;p&gt;&lt;em&gt;Emphasized text.&lt;/em&gt;&lt;/p&gt;
</pre>

<!-- Last reviewed/updated: 25 Jun 2016. -->
     <p>The <code>em</code> type selector is not assigned author styles.</p>

     <p>Examples of emphasized text:</p>

     <p>Paragraph ending with a <em>period</em> as introductory text for an ordered list.</p>

     <p>Paragraph ending with a <em>colon</em> as introductory text for an ordered list:</p>

     <h3><a id='quotedText'></a>27.9. Quoted Text</h3>

     <h4><a id='quotedWords'></a>27.9.1. Quoted Words</h4>

     <p>Quoted words are one or more words in quotes. The quotes can indicate that the words are a quote, that they are to be taken literally, or that they are being used in a special way, such as when a person makes quote marks in the air with their fingers when speaking.</p>

     <p>Quoted words uses the <code>q</code> element:</p>

<pre>
&lt;p&gt;&lt;q&gt;Quoted words.&lt;/q&gt;&lt;/p&gt;
</pre>

<!-- Last reviewed/updated: 25 Jun 2016. -->
     <p>The <code>q</code> type selector is not assigned author styles:</p>

     <p>Examples of quoted words:</p>

     <p>The <q>silent</q> battle in the web browser war.</p>

     <p>Consider, for example, the following two sentences describing one of the Cascade's rules for resolving style conflicts, where <q>reader</q> means user, and <q>UA's default values</q> and <q>the default style sheet</q> mean user agent styles:</p>

     <p>If left empty/blank, <q>default</q> is automatically assigned.</p>

     <p> The phpBB board database name, prefixed with <q>qi_</q>.</p>

     <h4><a id='quotedTextWithSource'></a>27.9.2. Quoted Text With Source</h4>

     <p>Quoted text with source is quoted text with the source of the quote. If the quoted text with source is presented as a block, the source may follow the quoted text and may be separated from the quoted text by a hyphen (-) character.</p>

     <p>The quoted text uses the <code>q</code> and <code>i</code> elements and the source uses the <code>cite</code> element. The hyphen (-) character is not included in the <code>&lt;q&gt;&lt;i&gt;&lt;/i&gt;&lt;/q&gt;</code> or <code>&lt;cite&gt;&lt;/cite&gt;</code> tags. There is a single space character before and after the hyphen (-) character:</p>

<pre>
&lt;p&gt;The &lt;cite&gt;Source&lt;/cite&gt; said, &lt;q&gt;&lt;i&gt;Quoted text.&lt;/i&gt;&lt;/q&gt;&lt;/p&gt;
</pre>

<pre>
&lt;p&gt;&lt;q&gt;&lt;i&gt;Quoted text.&lt;/i&gt;&lt;/q&gt; - &lt;cite&gt;Source&lt;/cite&gt;.&lt;/p&gt;
</pre>

     <p>The <code>q</code> and <code>i</code> type selectors are not assigned author styles. The <code>cite</code> type selector is assigned author styles:</p>

<!-- Last reviewed/updated: 25 Jun 2016. -->
<pre>
cite {
  font-style: normal;
}
</pre>

     <p>Examples of quoted text:</p>

     <p>The <cite>W3C</cite>'s mission is, <q><i>To lead the World Wide Web to its full potential by developing protocols and guidelines that ensure long-term growth for the Web.</i></q></p>

     <p><q><i>Sort by origin: the author's style sheets override the reader's style sheet which override the UA's default values.</i></q> - <cite>W3C CSS1 Recommendation</cite>.</p>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>28. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/html/web_page.php'>Learn Web Coding Home Template (learnwebcoding.com)</a></li>
      <li><a href=''><s>Learn Web Coding Home Template Download (learnwebcoding.com)</s></a></li>
      <li><a href='https://search.google.com/test/mobile-friendly'>Google Mobile-Friendly Test (search.google.com)</a></li>
      <li><a href='https://testmysite.thinkwithgoogle.com/'>Google Mobile Website Speed Testing Tool (testmysite.thinkwithgoogle.com)</a></li>
      <li><a href='https://developers.google.com/speed/pagespeed/insights/'>Google Developers PageSpeed Insights (developers.google.com)</a></li>
      <li><a href='http://getbootstrap.com/'>Bootstrap (getbootstrap.com)</a></li>
      <li><a href='http://fontawesome.io/'>Font Awesome (fontawesome.io)</a></li>
      <li><a href='http://jquery.com/'>jQuery (jquery.com)</a></li>
      <li><a href='https://validator.w3.org/'>W3C Markup Validation Service (validator.w3.org)</a></li>
      <li><a href='https://html5.validator.nu/'>WHATWG Validator.nu (X)HTML5 Validator (html5.validator.nu)</a></li>
      <li><a href='http://jigsaw.w3.org/css-validator/'>W3C CSS Validation Service (jigsaw.w3.org)</a></li>
      <li><a href='https://developers.google.com/speed/pagespeed/insights/'>Google Developers PageSpeed Insights (developers.google.com)</a></li>
      <li><a href='http://www.w3.org/TR/html5/'>HTML5: A Vocabulary And Associated APIs For HTML And XHTML: W3C Recommendation 28 October 2014</a></li>
      <li><a href=''>Page Title First Letter Each Word Capital End Without Period (domain.com)</a></li>
      <li><a href=''>Page Title First Letter Each Word Capital End Without Period (.pdf) (.doc) (video) (domain.com)</a></li>
      <li><a href=''>microATX First Letter Each Word Unless Convention Is Not Capital microATX (domain.com)</a></li>
      <li><a href=''>Some Organization Name (SON) (domain.com)</a> (Post list hyperlink parentheses order shown here.) (Jim Taylor) (Formerly Web Site Name) (Formerly at domain.com) (Mandrakesoft plus Conectiva) (Formerly Caldera) (Windows XP/Vista/7/8/8.1) (Windows/Mac OS X/Linux) (Includes a forum) (Data: Apr11) (Published: 14Feb12) (Infineon and Kingston) (The Webmaster) (Link description unless it is large and/or better suited in a note, which should rarely be the case.) (Thanks name) (End without period unless a sentence, sentence fragment, or ending without period seems odd/wrong.)
       <div class='note normal'>
        <p>Use note in list hyperlink for:</p>
        <ul>
         <li>Instructions for the linked web page/site.</li>
         <li>Information from the linked web page/site.</li>
         <li>Anything else about the linked web page/site better suited in a note than in post list hyperlink parentheses, which should rarely be the case. For notable exceptions see Network Resources, Anti-Malware Resources, and Memory Resources.</li>
         <li>End without period unless a sentence, sentence fragment, or ending without period seems odd/wrong.</li>
        </ul>
       </div>
      </li>
      <li><a href='http://support.microsoft.com/kb/923737'>Microsoft Knowledge Base Article Title (923737) (support.microsoft.com)</a></li>
     </ul>

    </section>";
