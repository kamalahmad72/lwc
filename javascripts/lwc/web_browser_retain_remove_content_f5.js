/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascripts/lwc/web_browser_retain_remove_content_f5.js.
 * Purpose: Programmatically display web page content when; 1.) check checkbox in Introduction section demonstration, and 2.) click Click To Complete The Programmatic Items Below button.
 * Used in: web_browser_retain_remove_content_f5.html.
 * Last reviewed/updated: 28 Nov 2018.
 * Published: 03 Feb 2015.
 * Unobtrusive: 1.) decouple HTML/JavaScript: a.) no register JavaScript event handlers in HTML via HTML attributes (eg, onload and onclick), and b.) no embed JavaScripts in HTML via HTML script element; 2.) as reasonable, decouple CSS/JavaScript. Eg, as reasonable, use JavaScript to change HTML class attribute value assignments (loose coupling), not use JavaScript to change JavaScript style object CSS property value assignments (tight coupling); and 3.) no define JavaScript variables and functions on JavaScript global scope.
 * Web browser support: IE10+, ED12+, FF3.6+, SM2.1+, SF5.1+, CH8+, OP11.50+, which corresponds to classList property support.
 * Object: ProgCompleteFormElementUtil. */

/* -------------------- JAVASCRIPT OBJECT DEFINITIONS -------------------- */

/* ---------- NEW JAVASCRIPT OBJECT DEFINITION ---------- */

var ProgCompleteFormElementUtil = {
 // Method: ProgCompleteFormElementUtil.progCompleteWebPageIntroDemo().
 // Purpose: Handler for ProgCompleteFormElementUtil.demoCheckbox click event. Handler for check (a click event) checkbox in web page Introduction section demonstration. Programmatically display web page text in line below checkbox.
 // Web browser support: IE6+, FF1.5+, SM1+, SF3.1+, CH2+, OP7.50+.
 progCompleteDemo: function(){
  // Get reference to element (li) that innerHTML will be applied to.
  var webPageTextProgDemoInnerHtml = document.getElementById("webPageTextProgDemoInnerHtmlId");
  webPageTextProgDemoInnerHtml.innerHTML = "This is programmatically displayed non-form element text. Upon F5 (Refresh/Reload), it will be removed.";
 },
 // Method: ProgCompleteFormElementUtil.progCompleteProgItems().
 // Purpose: Handler for ProgCompleteFormElementUtil.completeProgItemsBtn click event. Handler for click Click To Complete The Programmatic Items Below button. Programmatically complete form elements and display web page text in web page Test/Results sections.
 progCompleteProgItems: function(){
  // Function: progCompleteTextbox().
  // Purpose: Programmatically enter text into textbox.
  // Web browser support: IE6+, FF1.5+, SM1+, SF3.1+, CH2+, OP7.50+.
  // NOTE: Immediately invoked function.
  (function progCompleteTextbox(){
   // Get reference to element (input) corresponding to textbox.
   var textboxProg = document.getElementById("textboxProgId");
   textboxProg.value = "textbox";
  })();
  // Function: progCompleteTextarea().
  // Purpose: Programmatically enter text into textarea.
  // Web browser support: IE6+, FF1.5+, SM1+, SF3.1+, CH2+, OP7.50+.
  // NOTE: Immediately invoked function.
  (function progCompleteTextarea(){
   // Get reference to element (textarea) corresponding to textarea.
   var textareaProg = document.getElementById("textareaProgId");
   textareaProg.value = "textarea";
  })();
  // Function: progCompleteCheckboxCheck().
  // Purpose: Programmatically check checkbox.
  // Web browser support: IE6+, FF1.5+, SM1+, SF3.1+, CH2+, OP7.50+.
  // NOTE: Immediately invoked function.
  (function progCompleteCheckboxCheck(){
   // Get reference to element (input) corresponding to checkbox.
   var checkboxCheckProg = document.getElementById("checkboxCheckProgId");
   checkboxCheckProg.checked = true;
  })();
  // Function: progCompleteCheckboxUncheck().
  // Purpose: Programmatically uncheck checkbox.
  // Web browser support: IE6+, FF1.5+, SM1+, SF3.1+, CH2+, OP7.50+.
  // NOTE: Immediately invoked function.
  (function progCompleteCheckboxUncheck(){
   // Get reference to element (input) corresponding to checkbox.
   var checkboxUncheckProg = document.getElementById("checkboxUncheckProgId");
   checkboxUncheckProg.checked = false;
  })();
  // Function: progCompleteRadioButton().
  // Purpose: Programmatically check radio button.
  // Web browser support: IE6+, FF1.5+, SM1+, SF3.1+, CH2+, OP7.50+.
  // NOTE: Immediately invoked function.
  (function progCompleteRadioButton(){
   // Get reference to element (input) corresponding to radio button.
   var radioBtnProg = document.getElementById("radioBtnProgId2");
   radioBtnProg.checked = true;
  })();
  // Function: progCompleteSelectbox().
  // Purpose: Programmatically select selectbox option.
  // Web browser support: IE6+, FF1.5+, SM1+, SF3.1+, CH2+, OP7.50+.
  // NOTE: Immediately invoked function.
  (function progCompleteSelectbox(){
   // Get reference to element (select) corresponding to selectbox.
   var selectboxProg = document.getElementById("selectboxProgId");
   selectboxProg.options[1].selected = true;
  })();
  // Function: progCompleteWebPageTextInnerHtml().
  // Purpose: Programmatically display text in web page span element using JavaScript innerHTML property.
  // Web browser support: IE6+, FF1.5+, SM1+, SF3.1+, CH2+, OP7.50+.
  // NOTE: Immediately invoked function.
  (function progCompleteWebPageTextInnerHtml(){
   // Get reference to element (span) that innerHTML will be applied to.
   var webPageTextProgInnerHtml = document.getElementById("webPageTextProgInnerHtmlId");
   webPageTextProgInnerHtml.innerHTML = "Via JavaScript <code>innerHTML</code> Property";
  })();
  // Function: progCompleteWebPageTextClassList().
  // Purpose: Programmatically display text in web page span element using JavaScript classList property.
  // Web browser support: IE10+, FF3.6+, SM2.1+, SF5.1+, CH8+, OP11.50+.
  // NOTE: Immediately invoked function.
  (function progCompleteWebPageTextClassList(){
   // Get reference to element (span) that classList will be applied to.
   var webPageTextProgClassList = document.getElementById("webPageTextProgClassListId");
   webPageTextProgClassList.classList.toggle("display-none");
  })();
 },
 // Get reference to elements in order to register event handlers. Remember elements (including the form element) accept events from child elements (including child elements of the form element) via event bubbling.
 demoCheckbox: document.getElementById("demoCheckboxId2"),
 completeProgItemsBtn: document.getElementById("completeProgItemsBtnId")
};

// Register event handlers. EventUtil is in library_load_in_body.js.
EventUtil.registerEventHandler(ProgCompleteFormElementUtil.demoCheckbox, "click", ProgCompleteFormElementUtil.progCompleteDemo);
EventUtil.registerEventHandler(ProgCompleteFormElementUtil.completeProgItemsBtn, "click", ProgCompleteFormElementUtil.progCompleteProgItems);
