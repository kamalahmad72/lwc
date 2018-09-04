<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/index_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/javascript/index.php.
 * Last reviewed/updated: 04 Sep 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <h3><a id='jsIntroduction'></a>1.1. JavaScript Introduction</h3>

     <ul>
      <li>The web language for adding front-end programming logic to the web browser window and web pages.</li>
      <li>The web language that is object-oriented, interpreted by the web browser, and compatible with the Browser Object Model (BOM) and the Document Object Model (DOM).</li>
      <li>The front-end web browser window and web page behavior (including interactive/dynamic behavior) language.</li>
      <li>Web browser window behaviors include opening new web browser windows and displaying alert, confirm, prompt, find, and print dialogs. Web page behaviors include handling events, validating forms, and changing the content, structure, and style of web pages.</li>
      <li>Language concepts include: variables, strings, numbers, booleans, arrays, operators, statements, functions, arguments, objects, properties, methods, inheritance, and scope.</li>
     </ul>

     <div class='note normal'>JavaScript was initially developed by Netscape. Instead of licensing JavaScript, Microsoft reverse-engineered JavaScript as JScript. Eventually, those interested in the language turned it over to a third party industry standards association, ECMA, for further development. ECMA develops the language as ECMAScript, and Standard ECMA-262 is the official documentation for ECMAScript. JavaScript and JScript are implementations of ECMAScript.</div>

     <h3><a id='bomIntroduction'></a>1.2. BOM Introduction</h3>

     <ul>
      <li><b>B</b>rowser <b>O</b>bject <b>M</b>odel (BOM).</li>
      <li>An application programming interface (API) built into web browsers that allows programs and scripts to interact with the web browser window.</li>
      <li>Defines web browser objects and interfaces that allow programs and scripts to interact with the web browser window.</li>
      <li>Defines a hierarchy of web browser objects whose exposed objects, methods, and properties constitute an interface that allows programs and scripts to access and manipulate the web browser window.</li>
      <li>Root object: the <code>Window</code> object. The BOM <code>Window</code> object represents both the web browser window and the JavaScript <code>Global</code> object; and, therefore, is the link between JavaScript and the web browser window.</li>
     </ul>

     <h3><a id='domIntroduction'></a>1.3. DOM Introduction</h3>

     <ul>
      <li><b>D</b>ocument <b>O</b>bject <b>M</b>odel (DOM).</li>
      <li>An application programming interface (API) built into web browsers that allows programs and scripts to interact with displayed HTML documents (i.e., web pages).</li>
      <li>Defines displayed HTML document structure, objects, and interfaces that allow programs and scripts to interact with web pages.</li>
      <li>Defines displayed HTML documents as a hierarchal, tree-like structure of objects (a.k.a., nodes) whose exposed objects, methods, and properties constitute an interface that allows programs and scripts to access and manipulate the content, structure, and style of web pages.</li> 
      <li>Root object: the <code>Document</code> object. The DOM <code>Document</code> object represents the entire HTML document being displayed in the web browser window; and, therefore, is the link between JavaScript and the web page. The DOM <code>Document</code> object is a property of the BOM <code>Window</code> object. Therefore, the path to the <code>Document</code> object is first to the <code>Window</code> object and then to the <code>Document</code> object, which is <code>window.document</code>.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='original'></a>2. Original Content</h2>

     <h3><a id='jsOriginal'></a>2.1. JavaScript Original Content</h3>

     <ul class='link-list'>
      <li><a href='/javascript/angularjs_shopping_cart_spa.php'>AngularJS Shopping Cart Single Page Application (learnwebcoding.com)</a></li>
      <li><a href='/javascript/javascript_shopping_cart_spa.php'>JavaScript Shopping Cart Single Page Application (learnwebcoding.com)</a></li>
      <li><a href='/javascript/javascript_web_browser_detection_update.php'>JavaScript Web Browser Detection With Link To Download Update (learnwebcoding.com)</a></li>
      <li><a href='/javascript/errata_pro_jquery_20_2nd_edition_adam_freeman.php'>Errata Pro jQuery 2.0 2nd Edition By Adam Freeman (learnwebcoding.com)</a></li>
      <li><a href='/javascript/javascript_techniques/index.php'>JavaScript Techniques (learnwebcoding.com)</a>
       <ul class='link-list'>
        <li><a href='/javascript/javascript_techniques/breadcrumbs_navigation.php'>JavaScript Technique: Breadcrumbs Navigation (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/change_ext_ss.php'>JavaScript Technique: Change Web Page External Style Sheet (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/collapse_expand_all.php'>JavaScript Technique: Collapse Or Expand Multiple Sections Of A Web Page Simultaneously (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/tabbed_web_pages.php'>JavaScript Technique: Tabbed Web Pages (learnwebcoding.com)</a></li>
       </ul>
      </li>
      <li><a href='/javascript/javascript_reference/index.php'>JavaScript Feature Reference (learnwebcoding.com)</a>
       <ul class='link-list'>
        <li><a href='/javascript/javascript_reference/arguments_object.php'>JavaScript Feature Reference: <code>arguments</code> Object Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/array_destructuring_syntax.php'>JavaScript Feature Reference: Array Destructuring Syntax Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/arrow_function_syntax.php'>JavaScript Feature Reference: Arrow Function Syntax Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/bind_method.php'>JavaScript Feature Reference: <code>bind()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/class_syntax.php'>JavaScript Feature Reference: <code>class</code> Syntax Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/classList_property.php'>JavaScript Feature Reference: <code>classList</code> Property Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/className_property.php'>JavaScript Feature Reference: <code>className</code> Property Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/concise_method_syntax.php'>JavaScript Feature Reference: Concise Method Syntax Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/create_method.php'>JavaScript Feature Reference: <code>create()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/dataset_property.php'>JavaScript Feature Reference: <code>dataset</code> Property Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/defineProperty_method.php'>JavaScript Feature Reference: <code>defineProperty()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/endsWith_method.php'>JavaScript Feature Reference: <code>endsWith()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/entries_method_array.php'>JavaScript Feature Reference: <code>entries()</code> Method On Arrays Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/entries_method_map.php'>JavaScript Feature Reference: <code>entries()</code> Method On Maps Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/entries_method_set.php'>JavaScript Feature Reference: <code>entries()</code> Method On Sets Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/find_method.php'>JavaScript Feature Reference: <code>find()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/findIndex_method.php'>JavaScript Feature Reference: <code>findIndex()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/for_of_statement.php'>JavaScript Feature Reference: <code>for...of</code> Statement Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/forEach_method_array.php'>JavaScript Feature Reference: <code>forEach()</code> Method On Arrays Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/forEach_method_map.php'>JavaScript Feature Reference: <code>forEach()</code> Method On Maps Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/forEach_method_set.php'>JavaScript Feature Reference: <code>forEach()</code> Method On Sets Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/generator_function.php'>JavaScript Feature Reference: Generator Function Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/generator_object.php'>JavaScript Feature Reference: <code>Generator</code> Object Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/getAttribute_method.php'>JavaScript Feature Reference: <code>getAttribute()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/getElementById_method.php'>JavaScript Feature Reference: <code>getElementById()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/getElementsByClassName_method.php'>JavaScript Feature Reference: <code>getElementsByClassName()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/getOwnPropertyDescriptor_method.php'>JavaScript Feature Reference: <code>getOwnPropertyDescriptor()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/getPrototypeOf_method.php'>JavaScript Feature Reference: <code>getPrototypeOf()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/hasOwnProperty_method.php'>JavaScript Feature Reference: <code>hasOwnProperty()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/includes_method.php'>JavaScript Feature Reference: <code>includes()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/indexOf_method_array.php'>JavaScript Feature Reference: <code>indexOf()</code> Method On Arrays Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/indexOf_method_string.php'>JavaScript Feature Reference: <code>indexOf()</code> Method On Strings Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/innerHTML_property.php'>JavaScript Feature Reference: <code>innerHTML</code> Property Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/insertAdjacentHTML_method.php'>JavaScript Feature Reference: <code>insertAdjacentHTML()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/instanceof_operator.php'>JavaScript Feature Reference: <code>instanceof</code> Operator Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/isArray_method.php'>JavaScript Feature Reference: <code>isArray()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/isPrototypeOf_method.php'>JavaScript Feature Reference: <code>isPrototypeOf()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/json_object.php'>JavaScript Feature Reference: <code>JSON</code> Object Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/keys_method_array.php'>JavaScript Feature Reference: <code>keys()</code> Method On Arrays Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/keys_method_map.php'>JavaScript Feature Reference: <code>keys()</code> Method On Maps Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/keys_method_set.php'>JavaScript Feature Reference: <code>keys()</code> Method On Sets Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/let_declaration.php'>JavaScript Feature Reference: <code>let</code> Declaration Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/localStorage_object.php'>JavaScript Feature Reference: <code>localStorage</code> Object Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/map_object.php'>JavaScript Feature Reference: <code>Map</code> Object Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/module.php'>JavaScript Feature Reference: Module Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/name_property.php'>JavaScript Feature Reference: <code>name</code> Property Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/new_target_metaproperty.php'>JavaScript Feature Reference: <code>new.target</code> Metaproperty Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/object_destructuring_syntax.php'>JavaScript Feature Reference: Object Destructuring Syntax Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/object_literal_accessor_property_syntax.php'>JavaScript Feature Reference: Object Literal Accessor Property Syntax Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/parameter_default_value.php'>JavaScript Feature Reference: Parameter Default Value Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/promise_object.php'>JavaScript Feature Reference: <code>Promise</code> Object Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/propertyIsEnumerable_method.php'>JavaScript Feature Reference: <code>propertyIsEnumerable()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/querySelectorAll_method.php'>JavaScript Feature Reference: <code>querySelectorAll()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/rest_parameter.php'>JavaScript Feature Reference: Rest Parameter Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/scrollIntoView_method.php'>JavaScript Feature Reference: <code>scrollIntoView()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/set_object.php'>JavaScript Feature Reference: <code>Set</code> Object Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/setPrototypeOf_method.php'>JavaScript Feature Reference: <code>setPrototypeOf()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/setTimeout_method.php'>JavaScript Feature Reference: <code>setTimeout()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/splice_method.php'>JavaScript Feature Reference: <code>splice()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/spread_operator_array_literal.php'>JavaScript Feature Reference: Spread Operator In Array Literals Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/spread_operator_function_call.php'>JavaScript Feature Reference: Spread Operator In Function Calls Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/spread_operator_math_object_method.php'>JavaScript Feature Reference: Spread Operator In <code>Math</code> Object Methods Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/spread_operator_object_literal.php'>JavaScript Feature Reference: Spread Operator In Object Literals Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/startsWith_method.php'>JavaScript Feature Reference: <code>startsWith()</code> Method Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/style_object.php'>JavaScript Feature Reference: <code>style</code> Object Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/symbol_iterator_property.php'>JavaScript Feature Reference: <code>[Symbol.iterator]</code> Property Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/template_literal_syntax.php'>JavaScript Feature Reference: Template Literal Syntax Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/template_tag_syntax.php'>JavaScript Feature Reference: Template Tag Syntax Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/typedArray_object.php'>JavaScript Feature Reference: <code>TypedArray</code> Object Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/values_method_array.php'>JavaScript Feature Reference: <code>values()</code> Method On Arrays Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/values_method_map.php'>JavaScript Feature Reference: <code>values()</code> Method On Maps Web Browser Support Test (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_reference/values_method_set.php'>JavaScript Feature Reference: <code>values()</code> Method On Sets Web Browser Support Test (learnwebcoding.com)</a></li>
       </ul>
      </li>
      <li><a href='/javascript/jquery_techniques/index.php'>jQuery Techniques (learnwebcoding.com)</a>
       <ul class='link-list'>
        <li><a href='/javascript/jquery_techniques/fix_content_top_viewport_upon_scrolling.php'>jQuery Technique: Fix Web Page Content To Top Of Viewport Upon Scrolling (learnwebcoding.com)</a></li>
       </ul>
      </li>
     </ul>

     <h3><a id='bomOriginal'></a>2.2. BOM Original Content</h3>

     <ul class='link-list'>
      <li><a href='/javascript/web_browser_useragent_values.php'>Web Browser User-Agent String Values (learnwebcoding.com)</a></li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='standards'></a>3. Standards</h2>

     <h3><a id='jsStandards'></a>3.1. JavaScript Standards</h3>

     <h4><a id='ecmascript'></a>3.1.1 ECMAScript Standards</h4>

     <div class='note normal'>The edition of ECMAScript skipped from 3rd to 5th.</div>

     <ul class='link-list'>
      <li><a href='http://www.ecma-international.org/publications/files/ECMA-ST-ARCH/ECMA-262,%201st%20edition,%20June%201997.pdf'>Standard ECMA-262 June 1997: ECMAScript: A General Purpose, Cross-Platform Programming Language (.pdf) (ecma-international.org)</a> (ECMA-262 1st edition)</li>
      <li><a href='http://www.ecma-international.org/publications/files/ECMA-ST-ARCH/ECMA-262,%202nd%20edition,%20August%201998.pdf'>Standard ECMA-262 2nd Edition - August 1998: ECMAScript Language Specification (.pdf) (ecma-international.org)</a></li>
      <li><a href='http://www.ecma-international.org/publications/files/ECMA-ST-ARCH/ECMA-262,%203rd%20edition,%20December%201999.pdf'>Standard ECMA-262 3rd Edition - December 1999: ECMAScript Language Specification (.pdf) (ecma-international.org)</a></li>
      <li><a href='http://www.ecma-international.org/publications/files/ECMA-ST-ARCH/ECMA-262%205th%20edition%20December%202009.pdf'>Standard ECMA-262 5th Edition / December 2009: ECMAScript Language Specification (.pdf) (ecma-international.org)</a></li>
      <li><a href='http://www.ecma-international.org/ecma-262/5.1/index.html'>Standard ECMA-262 5.1 Edition / June 2011: ECMAScript Language Specification (ecma-international.org)</a></li>
      <li><a href='http://www.ecma-international.org/publications/files/ECMA-ST-ARCH/ECMA-262%205.1%20edition%20June%202011.pdf'>Standard ECMA-262 5.1 Edition / June 2011: ECMAScript Language Specification (.pdf) (ecma-international.org)</a></li>
      <li><a href='http://www.ecma-international.org/ecma-262/6.0/index.html'>Standard ECMA-262 6th Edition / June 2015: ECMAScript 2015 Language Specification (ecma-international.org)</a></li>
      <li><a href='http://www.ecma-international.org/publications/files/ECMA-ST-ARCH/ECMA-262%206th%20edition%20June%202015.pdf'>Standard ECMA-262 6th Edition / June 2015: ECMAScript 2015 Language Specification (.pdf) (ecma-international.org)</a></li>
      <li><a href='http://www.ecma-international.org/ecma-262/7.0/index.html'>Standard ECMA-262 7th Edition / June 2016: ECMAScript 2016 Language Specification (ecma-international.org)</a></li>
      <li><a href='http://www.ecma-international.org/publications/files/ECMA-ST-ARCH/ECMA-262%207th%20edition%20June%202016.pdf'>Standard ECMA-262 7th Edition / June 2016: ECMAScript 2016 Language Specification (.pdf) (ecma-international.org)</a></li>
      <li><a href='http://www.ecma-international.org/ecma-262/8.0/index.html'>Standard ECMA-262 8th Edition / June 2017: ECMAScript 2017 Language Specification (ecma-international.org)</a></li>
      <li><a href='http://www.ecma-international.org/publications/files/ECMA-ST/Ecma-262.pdf'>Standard ECMA-262 8th Edition / June 2017: ECMAScript 2017 Language Specification (.pdf) (ecma-international.org)</a></li>
     </ul>

     <h4><a id='w3cIdlApi'></a>3.1.2. W3C Web Platform Working Group And WHATWG Web IDL/API Recommendations/Etc.</h4>
<!-- W3C Web Platform Working Group: https://www.w3.org/WebPlatform/WG/. -->
<!-- Web Platform Working Group specifications: https://www.w3.org/WebPlatform/WG/PubStatus and https://www.w3.org/2016/11/webplatform-charter.html. -->
<!-- For Web IDL defined and list of specs that have a normative reference for Web IDL: http://www.w3.org/wiki/Web_IDL. -->
<!-- List from top to bottom by date newest on top to oldest on bottom. -->

     <ul class='link-list'>
      <li><a href='https://www.w3.org/TR/pointerevents2/'>Pointer Events - Level 2: W3C Candidate Recommendation 22 May 2018 (w3.org)</a></li>
      <li><a href='https://www.w3.org/TR/IndexedDB-2/'>Indexed Database API 2.0: W3C Recommendation, 30 January 2018 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/intersection-observer/'>Intersection Observer: W3C First Public Working Draft, 14 September 2017 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/WebIDL-1/'>WebIDL Level 1: W3C Recommendation 15 December 2016 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/clipboard-apis/'>Clipboard API And Events: W3C Working Draft 13 December 2016 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/screen-orientation/'>The Screen Orientation API: W3C Working Draft 31 October 2016 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/webstorage/'>Web Storage (Second Edition): W3C Recommendation 19 April 2016 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/pointerevents/'>Pointer Events: W3C Recommendation 24 February 2015 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/IndexedDB/'>Indexed Database API: W3C Recommendation 08 January 2015 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/progress-events/'>Progress Events: W3C Recommendation 11 February 2014 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/touch-events/'>Touch Events: W3C Recommendation 10 October 2013 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/2013/REC-webstorage-20130730/'>Web Storage: W3C Recommendation 30 July 2013 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/selectors-api/'>Selectors API Level 1: W3C Recommendation 21 February 2013 (w3.org)</a></li>
      <li><a href='https://xhr.spec.whatwg.org/'>XMLHttpRequest: Living Standard (xhr.spec.whatwg.org)</a></li>
     </ul>

     <h3><a id='bomStandards'></a>3.2. BOM Standards</h3>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/html5/webappapis.html'>HTML5: A Vocabulary And Associated APIs For HTML And XHTML: 6 Web Application APIs (w3.org)</a></li>
     </ul>

     <h3><a id='domStandards'></a>3.3. DOM Standards</h3>

     <h4><a id='whatwgDom'></a>3.3.1. WHATWG DOM Specification</h4>

     <ul class='link-list'>
      <li><a href='http://dom.spec.whatwg.org/'>DOM: Living Standard (dom.spec.whatwg.org)</a></li>
     </ul>

     <h4><a id='w3cDomLevel1'></a>3.3.2. W3C DOM Level 1 Recommendation</h4>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/REC-DOM-Level-1/'>Document Object Model (DOM) Level 1 Specification: Version 1.0: W3C Recommendation 1 October, 1998 (w3.org)</a></li>
     </ul>

     <h4><a id='w3cDomLevel2'></a>3.3.3. W3C DOM Level 2 Recommendations</h4>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/DOM-Level-2-HTML/'>Document Object Model (DOM) Level 2 HTML Specification: Version 1.0: W3C Recommendation 09 January 2003 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/DOM-Level-2-Core/'>Document Object Model (DOM) Level 2 Core Specification: Version 1.0: W3C Recommendation 13 November, 2000 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/DOM-Level-2-Events/'>Document Object Model (DOM) Level 2 Events Specification: Version 1.0: W3C Recommendation 13 November, 2000 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/DOM-Level-2-Style/'>Document Object Model (DOM) Level 2 Style Specification: Version 1.0: W3C Recommendation 13 November, 2000 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/DOM-Level-2-Traversal-Range/'>Document Object Model (DOM) Level 2 Traversal And Range Specification: Version 1.0: W3C Recommendation 13 November, 2000 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/DOM-Level-2-Views/'>Document Object Model (DOM) Level 2 Views Specification: Version 1.0: W3C Recommendation 13 November, 2000 (w3.org)</a></li>
     </ul>

     <h4><a id='w3cDomLevel3'></a>3.3.4. W3C DOM Level 3 Recommendations/Etc.</h4>
<!-- W3C DOM Related Working Group: Web Platform Working Group: https://www.w3.org/WebPlatform/WG/. -->
<!-- Web Platform Working Group specifications: https://www.w3.org/WebPlatform/WG/PubStatus and https://www.w3.org/2016/11/webplatform-charter.html. -->
<!-- List from top to bottom; 1.) Recommendations, 2.) Proposed Recommendations, 3.) Candidate Recommendations, 4.) Working Group Notes, 5.) all Working Drafts incl Last Call and First Public, and Editor's Drafts, and 6.) within each list by date newest on top to oldest on bottom. -->

     <h5><a id='w3cDomLevel3r'></a>3.3.4.1. W3C DOM Level 3 Recommendations</h5>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/ElementTraversal/'>Element Traversal Specification: W3C Recommendation 22 December 2008 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/DOM-Level-3-LS/'>Document Object Model (DOM) Level 3 Load and Save Specification: Version 1.0: W3C Recommendation 07 April 2004 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/DOM-Level-3-Core/'>Document Object Model (DOM) Level 3 Core Specification: Version 1.0: W3C Recommendation 07 April 2004 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/DOM-Level-3-Val/'>Document Object Model (DOM) Level 3 Validation Specification: Version 1.0: W3C Recommendation 27 January 2004 (w3.org)</a></li>
     </ul>

     <h5><a id='w3cDomLevel3cr'></a>3.3.4.2. W3C DOM Level 3 Candidate Recommendations</h5>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/uievents-code/'>UI Events KeyboardEvent Code Values: W3C Candidate Recommendation, 01 June 2017 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/uievents-key/'>UI Events KeyboardEvent Key Values: W3C Candidate Recommendation, 01 June 2017 (w3.org)</a></li>
     </ul>

     <h5><a id='w3cDomLevel3wd'></a>3.3.4.3. W3C DOM Level 3 Working Drafts</h5>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/DOM-Parsing/'>DOM Parsing And Serialization: <code>DOMParser</code>, <code>XMLSerializer</code>, <code>innerHTML</code>, And Similar APIs: W3C Working Draft 17 May 2016 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/input-events/'>Input Events: W3C First Public Working Draft 30 August 2016 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/uievents/'>UI Events (Formerly DOM Level 3 Events): W3C Working Draft 28 April 2015 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/mediacapture-fromelement/'>Media Capture From DOM Elements: W3C First Public Working Draft 19 February 2015 (w3.org)</a></li>
     </ul>

     <h4><a id='w3cDomLevel4'></a>3.3.5. W3C DOM Level 4 Recommendation</h4>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/dom/'>W3C DOM4: W3C Recommendation 19 November 2015 (w3.org)</a></li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>4. Resources</h2>

     <ul class='link-list'>
      <li><a href='https://developer.mozilla.org/'>MDN Web Docs (developer.mozilla.org)</a></li>
      <li><a href='http://www.w3schools.com/'>W3Schools.com</a></li>
      <li><a href='http://caniuse.com/'>Can I Use (caniuse.com)</a></li>
      <li><a href='http://www.htmlgoodies.com/'>HTML Goodies (htmlgoodies.com)</a></li>
     </ul>

     <h3><a id='jsResources'></a>4.1. JavaScript Resources</h3>

     <ul class='link-list'>
      <li><a href='https://developer.mozilla.org/en-US/docs/Web/JavaScript'>MDN Web Docs | JavaScript (developer.mozilla.org)</a></li>
      <li><a href='https://msdn.microsoft.com/en-us/library/aa902517.aspx'>MSDN Library | Web Development | JavaScript (msdn.microsoft.com)</a></li>
      <li><a href='https://msdn.microsoft.com/en-us/library/hbxc2t98.aspx'>MSDN Library | JScript (ECMAScript3) (msdn.microsoft.com)</a></li>
     </ul>

     <h3><a id='domResources'></a>4.2. DOM Resources</h3>

     <ul class='link-list'>
      <li><a href='http://domenlightenment.com/'>DOM Enlightenment: Exploring The Relationship Between JavaScript And The Modern HTML DOM (domenlightenment.com)</a> (Cody Lindley) (Free, online, pre-edited/draft version of the O'Reilly book, DOM Enlightenment.) (Published: 2013)</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='miscellaneous'></a>5. Miscellaneous</h2>

     <h3><a id='jsMiscellaneous'></a>5.1. JavaScript Miscellaneous</h3>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/WebPlatform/WG/'>W3C: Web Platform Working Group</a></li>
      <li><a href='http://jquery.com/'>jQuery (jquery.com)</a></li>
     </ul>

     <h3><a id='domMiscellaneous'></a>5.2. DOM Miscellaneous</h3>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/WebPlatform/WG/'>W3C: Web Platform Working Group</a></li>
     </ul>

    </section>";
