<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_testing_ground/web_browser_support_noscript_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/css/css_testing_ground/web_browser_support_noscript.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>The HTML <code>noscript</code> element content is displayed in the web browser when the web browser does not support JavaScript or has JavaScript support disabled. Applying CSS styles to this content is often desired. Support for the HTML <code>noscript</code> element as a CSS type selector and as a classed element differs cross-browser.</p>

<!-- NOTE:
1.) In IE8 with JavaScript enabled, the background-color, border, padding, and margin are shown without the content.
2.) In ED12 (Windows 10 Original Release Build 10240) to disable/enable JavaScript: Close ED | Cortana | Edit group policy | Local Group Policy Editor opens | User Configuration (not Computer Configuration) | Administrative Templates | Windows Components | Microsoft Edge | Right click Allow you to run scripts, like JavaScript and select Edit | Select Enabled/Disabled | OK | If ED is open, close/reopen ED for setting to take effect. NOTE: The Allow you to run scripts, like JavaScript setting is available via Computer Configuration and User Configuration. However, apparently editing the setting in Computer Configuration may require restart for it to be inherited by/applied to User Configuration. Regardless, best to leave the setting in Computer Configuration at the default, which is Not configured, and to edit the setting via User Configuration. The default setting, Not configured, corresponds to Enabled. If ED is open, close/reopen ED for edit to take effect. Not necessary to close/reopen Local Group Policy Editor after editing setting.
3.) In ED13 (Windows 10 Version 1511 Build 10586): a.) User Configuration | Administrative Templates | Windows Components | Microsoft Edge does not exist; b.) Computer Configuration | Administrative Templates | Windows Components | Microsoft Edge exists, but the Allow you to run scripts, like JavaScript setting does not exist.
-->

     <h3><a id='cssTypeSelector'></a>1.1. CSS Type Selector</h3>

     <p>A CSS type selector is an HTML element specified as the selector in a CSS style rule. CSS type selectors allow CSS styles to be applied to content based on the HTML element type.</p>

     <h4><a id='cssTypeSelectorSupportResultsTable'></a>1.1.1. Web Browser Support For The HTML <code>noscript</code> Element As A CSS Type Selector</h4>

     <table>
      <caption>Web Browser Support For The HTML <code>noscript</code> Element As A CSS Type Selector</caption>
      <thead>
       <tr>
        <th>IE Support</th>
        <th>ED Support <a id='1_supportCssTypeSelector_return'></a><a href='#1_supportCssTypeSelector'>(1)</a></th>
        <th>FF Support</th>
        <th>SF Support</th>
        <th>CH Support <a id='2_supportCssTypeSelector_return'></a><a href='#2_supportCssTypeSelector'>(2)</a></th>
        <th>OP Support</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>-</td>
        <td>-</td>
        <td>FF1.5+</td>
        <td>SF3.1+</td>
        <td>CH5+</td>
        <td>OP15+</td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='6'>
         <a id='1_supportCssTypeSelector'></a><a href='#1_supportCssTypeSelector_return'>(1)</a> Apparently it is not possible to disable JavaScript on ED13. Therefore, ED13 not tested.<br />
         <a id='2_supportCssTypeSelector'></a><a href='#2_supportCssTypeSelector_return'>(2)</a> Apparently it is not possible to disable JavaScript on CH4-. Therefore, CH4- not tested.
        </td>
       </tr>
      </tfoot>
     </table>

     <h3><a id='classedElement'></a>1.2. Classed Element</h3>

     <p>A classed element is an HTML element with the <code>class=&quot;class-name&quot;</code> attribute. Classed elements allow CSS styles to be applied to content based on the value of <code>class-name</code>.</p>

     <h4><a id='classedElementSupportResultsTable'></a>1.2.1. Web Browser Support For The HTML <code>noscript</code> Element As A Classed Element</h4>

     <table>
      <caption>Web Browser Support For The HTML <code>noscript</code> Element As A Classed Element</caption>
      <thead>
       <tr>
        <th>IE Support</th>
        <th>ED Support <a id='1_supportClassedElement_return'></a><a href='#1_supportClassedElement'>(1)</a></th>
        <th>FF Support</th>
        <th>SF Support</th>
        <th>CH Support <a id='2_supportClassedElement_return'></a><a href='#2_supportClassedElement'>(2)</a></th>
        <th>OP Support</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>IE6+</td>
        <td>ED12</td>
        <td>FF1.5+</td>
        <td>SF3.1+</td>
        <td>CH5+</td>
        <td>OP15+</td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='6'>
         <a id='1_supportClassedElement'></a><a href='#1_supportClassedElement_return'>(1)</a> Apparently it is not possible to disable JavaScript on ED13. Therefore, ED13 not tested.<br />
         <a id='2_supportClassedElement'></a><a href='#2_supportClassedElement_return'>(2)</a> Apparently it is not possible to disable JavaScript on CH4-. Therefore, CH4- not tested.
        </td>
       </tr>
      </tfoot>
     </table>

     <h3><a id='abbreviations'></a>1.3. Abbreviations</h3>

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

     <h2><a id='cssTypeSelectorSupportTestsResults'></a>2. Web Browser Support For The HTML <code>noscript</code> Element As A CSS Type Selector: Tests And Results</h2>

     <ul class='link-list'>
      <li><a href='/css/css_testing_ground/web_browser_support_noscript/web_browser_support_noscript_as_css_type_selector.html'>Web Browser Support For The HTML <code>noscript</code> Element As A CSS Type Selector: Tests And Results (learnwebcoding.com)</a>.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='classedElementSupportTestsResults'></a>3. Web Browser Support For The HTML <code>noscript</code> Element As A Classed Element: Tests And Results</h2>

     <ul class='link-list'>
      <li><a href='/css/css_testing_ground/web_browser_support_noscript/web_browser_support_noscript_as_classed_element.html'>Web Browser Support For The HTML <code>noscript</code> Element As A Classed Element: Tests And Results (learnwebcoding.com)</a>.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>4. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/css/css_testing_ground/index.php'>CSS Testing Ground (learnwebcoding.com)</a></li>
     </ul>

    </section>";
