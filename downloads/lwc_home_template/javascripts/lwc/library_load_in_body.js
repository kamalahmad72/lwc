/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascripts/lwc/library_load_in_body.js.
 * Purpose: Central location for LWC Home sitewide JavaScripts that can be loaded near end of <body></body>.
 * Used in: All LWC Home web pages except specialty web pages.
 * Last reviewed/updated: 16 May 2018.
 * Published: 19 May 2014.
 * Unobtrusive: 1.) decouple HTML/JavaScript: a.) no register JavaScript event handlers in HTML via HTML attributes (eg, onload and onclick), and b.) no embed JavaScripts in HTML via HTML script element; 2.) as reasonable, decouple CSS/JavaScript. Eg, as reasonable, use JavaScript to change HTML class attribute value assignments (loose coupling), not use JavaScript to change JavaScript style object CSS property value assignments (tight coupling); and 3.) no define JavaScript variables and functions on JavaScript global scope.
 * Web browser support: IE10+, ED12+, FF3.6+, SM2.1+, SF5.1+, CH8+, OP11.50+, which corresponds to classList property support.
 * Objects: EventUtil and ToolsIconDropdownUtil. */

/* -------------------- JAVASCRIPT OBJECT DEFINITIONS -------------------- */

/* ---------- NEW JAVASCRIPT OBJECT DEFINITION ---------- */

/* Object: EventUtil.
 * Purpose: Register event handlers cross browser. Prevent event default behavior cross browser.
 * Used in: library_load_in_body.js (this file below), web_browser_retain_remove_content_f5.js, css_font_compare.js, and javascript_shopping_cart_spa.js. Unobtrusive.
 * Last reviewed/updated: 21 Jul 2017.
 * Published: 24 Jan 2014.
 * Web browser support: IE6+, ED12+, FF1.5+, SM1+, FL1+, SF3.1+, CH2+ OP7.50+ (likely), NT9+.
 * NOTE:
 * Required by ClickDropdownUtil and ToolsIconDropdownUtil below. Therefore, must be placed/loaded before ClickDropdownUtil and ToolsIconDropdownUtil.
 * Effect of registering event handler in JavaScript with EventUtil.registerEventHandler() over in HTML with HTML attributes is that it disassociates JavaScript from HTML, which means can edit event handler object/method name without having to also edit HTML attribute. */

var EventUtil = {
 // Method: EventUtil.registerEventHandler().
 // Purpose: Register event handlers cross browser.
 registerEventHandler: function(element, type, handler){
  if (element.addEventListener){ // For browsers implementing DOM level 2 addEventListener() for registering (aka, assigning/attaching) event handler. Support: IE 9+, FF1.5+, SM1+ FL1+, SF3.1+, CH2+ OP7.50+, NT9.
   element.addEventListener(type, handler, false);
  } else if (element.attachEvent){ // For browsers implementing proprietary attachEvent() for registering (aka, assigning/attaching) event handler. Support: IE8-.
   element.attachEvent("on" + type, handler);
  } else {
   alert("There was a problem processing the request. Error report - File: library_load_in_body.js. Object: EventUtil. Method: registerEventHandler(). Line: 36. Issue: Your web browser, or element, does not support the methods for registering an event handler to an element.");
  }
 },
 // Method: EventUtil.preventEventDefaultBehavior().
 // Purpose: Prevent event default behavior cross browser.
 preventEventDefaultBehavior: function(event){
  if (event.preventDefault){ // For browsers implementing DOM level 0/2 preventDefault() for preventing event default behavior. Support: IE9+, FF1.5+, SM1+ FL1+, SF3.1+, CH2+ OP???, NT9.
   event.preventDefault();
  } else {
   event.returnValue = false; // For browsers implementing proprietary returnValue() for preventing event default behavior. Support: IE8-, OP???.
  }
 }
};

/* ---------- NEW JAVASCRIPT OBJECT DEFINITION ---------- */

/* Object: ToolIconDropdownUtil.
 * Purpose: Show/hide LWC Home tools icon dropdown and change display of web page per selected option.
 * Used in: All LWC Home web pages except specialty web pages. Unobtrusive.
 * Last reviewed/updated: 26 Jul 2017.
 * Published: 24 Jan 2014.
 * Web browser support: IE10+, ED12+, FF3.6+, SM2.1+, SF5.1+, CH8+, OP11.50+, which corresponds to classList property support.
 * NOTE:
 * Requires EventUtil above. Therefore, must be placed/loaded after EventUtil.
 * ToolIconDropdownUtil.showHideToolsIconDropdown can be written to use one or two event handlers. If register one element to one handler, register click on window.document to the handler. Here, click on document, and click on tools icon dropdown elements via event bubbling, trigger the handler. Assign HTML id='toolsIcon*' attribute to all tools icon dropdown elements. Get reference to event.target.id. Use eventTargetIdReference.indexOf("toolsIcon") to determine if click was on a tools icon dropdown element (!== -1) or otherwise (=== -1). If register two elements to two event handlers, register click on tools icon dropdown container element to one handler and click on window.document to the other handler. Here, it is the registration of clicks on two elements each to its own handler that allows the determination if click was on a tools icon dropdown element or otherwise. Below, register click on two elements to one handler. Here, register click on tools icon dropdown container element and click on window.document to the same handler. Get reference to tools icon dropdown container element (and/or window.document) and get reference to event.currentTarget. Compare the reference to tools icon dropdown container element (and/or window.document) to the reference to event.currentTarget to determine if click was on a tools icon dropdown element or otherwise.
 * In order for click on footer style margin-bottom to trigger event handler, register event handler to window.document, not document.body. */

var ToolsIconDropdownUtil = {
 // Method: ToolsIconDropdownUtil.showHideToolsIconDropdown().
 // Purpose: Handler for ToolsIconDropdownUtil.toolsIconDropdownContainer click event. Tools icon dropdown container element contains tools icon and tools icon dropdown. Handler for click tools icon and click tools icon dropdown. Show/hide tools icon dropdown. If tools icon dropdown is not shown and click tools icon, show tools icon dropdown. If tools icon dropdown is shown and click tools icon or tools icon dropdown, hide tools icon dropdown. Handler for ToolsIconDropdownUtil.document click event. Handler for click somewhere on document other than the tools icon dropdown container. Regardless if tools icon dropdown is shown/hidden, if click somewhere on the document other than the tools icon or the tools icon dropdown, hide tools icon dropdown.
 showHideToolsIconDropdown: function(event){
  // Tools icon dropdown container property defined below to register event handler.
  ToolsIconDropdownUtil.toolsIconDropdownContainer;
  // Tools icon dropdown property defined below to register event handler.
  ToolsIconDropdownUtil.toolsIconDropdown;
  // Get reference to the element to which the currently triggered event handler is registered.
  var eventCurrentTarget = event.currentTarget;
  // If clicked tool icon dropdown container element, toggle display of tool icon dropdown.
  if(eventCurrentTarget === ToolsIconDropdownUtil.toolsIconDropdownContainer){
   if (ToolsIconDropdownUtil.toolsIconDropdown.classList.contains("display-none")){
    ToolsIconDropdownUtil.toolsIconDropdown.classList.remove("display-none");
   } else {
    ToolsIconDropdownUtil.toolsIconDropdown.classList.add("display-none");
   }
   // Stop event bubbling. Prevent click event from bubbling up DOM tree to trigger event handler registered for clicks on window.document, which would undo the action of the event handler registered for clicks on the tools icon dropdown container element.
   event.stopPropagation();
  // Else, clicked somewhere on the document other than the tool icon dropdown container element. Regardless if tool icon dropdown is shown/hidden, hide tools icon dropdown.
  } else {
   ToolsIconDropdownUtil.toolsIconDropdown.classList.add("display-none");
  }
 },
 // Method: ToolsIconDropdownUtil.changeDisplayOfWebPage().
 // Purpose: Handler for ToolsIconDropdownUtil.toolsIconDropdown click event. Handler for click a tools icon dropdown option. For tools icon dropdown options 1 - 3, expand, collapse, or hide table of contents (toc) and show/hide markers. For tools icon dropdown options 4 - 6, show/hide header element content, change an external style sheet, and show/hide markers.
 changeDisplayOfWebPage: function(event){
  // Get reference to id attribute value for clicked tools icon dropdown element. Only dropdown elements representing dropdown options have an id attribute, and the syntax is id='toolsIconDropdownOption#Id', where # represents the options position 1 - 6 from top to bottom in the dropdown.
  var eventTargetId = event.target.id;
  // Get reference to attribute value character at string position 23. This indicates the selected/clicked dropdown option.
  var selectedOption = eventTargetId.charAt(23);
  // For tools icon dropdown options 1 - 3, expand, collapse, or hide toc and show/hide markers. For option 1 (Table Of Contents Show Expanded (F5)), show toc, expand toc, and show option 1 marker and hide option 2 and 3 markers. For option 2 (Table Of Contents Show Collapsed), show toc, collapse toc, and show option 2 marker and hide option 1 and 3 markers. For option 3 (Table Of Contents Hide), hide toc and show option 3 marker and hide option 1 and 2 markers. Show/hide toc uses HTML id='tocId' attribute. Expand/Collapse toc uses HTML subsections class='toc-sub1sec', subsubsections class='toc-sub2sec', and subsubsubsections class='toc-sub3sec' attributes. Show/hide markers use HTML id='toolsIconDropdownOption#MarkerId', where # is 1 - 3 of 1 - 6.
  if ((selectedOption === "1") || (selectedOption === "2") || (selectedOption === "3")){
   // Show toc expanded, show toc collapsed, or hide toc.
   // Get reference to toc.
   var toc = document.getElementById("tocId");
   // Get reference to toc subsections and subsubsections.
   var allTocSubsections = document.querySelectorAll(".toc-sub1sec, .toc-sub2sec, .toc-sub3sec");
   var len = allTocSubsections.length;
   // 1 is Table Of Contents Show Expanded (F5). 2 is Table Of Contents Show Collapsed.
   if ((selectedOption === "1") || (selectedOption === "2")){
    // Show toc.
    toc.classList.remove("display-none");
    if (selectedOption === "1"){
     // Show expanded.
     for (var i = 0; i < len; i++){
      var tocSubsection = allTocSubsections[i];
      tocSubsection.classList.remove("display-none");
     }
    } else if (selectedOption === "2"){
     // Show collapsed.
     for (var i = 0; i < len; i++){
      var tocSubsection = allTocSubsections[i];
      tocSubsection.classList.add("display-none");
     }
    }
   // 3 is Table Of Contents Hide.
   } else if (selectedOption === "3"){
    // Hide toc. When hide toc, there is no need to capture the collapsed/expanded state of the toc because showing the toc includes selecting collapsed/expanded.
    toc.classList.add("display-none");
   }
   // Show/hide markers. Show selected option marker and hide unselected option markers.
   for (var i = 1; i <= 3; i++){
    // Because selectedOption is a string, not a number, use ==, not ===.
    if (i == selectedOption){
     // Get reference to selected option marker.
     var selectedOptionMarker = document.getElementById("toolsIconDropdownOption" + i + "MarkerId");
     // Show selected option marker.
     selectedOptionMarker.classList.remove("display-none");
    } else {
     // Get reference to unselected option markers, one for each iteration of loop.
     var unselectedOptionMarker = document.getElementById("toolsIconDropdownOption" + i + "MarkerId");
     // Hide unselected option markers.
     unselectedOptionMarker.classList.add("display-none");
    }
   }
  // For tools icon dropdown options 4 - 6, show/hide header element content, change an external style sheet, and show/hide markers. For option 4 (Print Default(F5)), show header element content, change external style sheet to print_default.css, and show option 4 marker and hide option 5 and 6 markers. For option 5 (Print Friendly With Images), hide header element content, change external style sheet to print_with_images.css, and show option 5 marker and hide option 4 and 6 markers. For option 6 (Print Friendly With Images), hide header element content, change external style sheet to print_without_images.css, and show option 6 marker and hide option 4 and 5 markers. Show/hide header uses HTML header element. Change external style sheet uses HTML id='changeableExtSSLinkElementId' attribute. Show/hide markers use id='toolsIconDropdownOption#MarkerId' attribute, where # is 4 - 6 of 1 - 6.
  } else if ((selectedOption === "4") || (selectedOption === "5") || (selectedOption === "6")){
   // Show/hide header element content and change an external style sheet.
   // Get reference to header element content.
   var header = document.getElementsByTagName("header");
   // Get reference to external style sheet.
   var changeableExtSSLinkElement = document.getElementById("changeableExtSSLinkElementId");
   // 4 is Print Default (F5).
   if (selectedOption === "4"){
    // Show header element content.
    header[0].classList.remove("display-none");
    // Change an external style sheet.
    changeableExtSSLinkElement.href = "/stylesheets/lwc/print_default.css";
   // 5 is Print Friendly With Images. 6 is Print Friendly Without Images.
   } else if ((selectedOption === "5") || (selectedOption === "6")){
    // Hide header element content.
    header[0].classList.add("display-none");
    if (selectedOption === "5"){
     // Change an external style sheet.
     changeableExtSSLinkElement.href = "/stylesheets/lwc/print_with_images.css";
    } else if (selectedOption === "6"){
     // Change an external style sheet.
     changeableExtSSLinkElement.href = "/stylesheets/lwc/print_without_images.css";
    }
   }
   // Show/hide markers. Show selected option marker and hide unselected option markers.
   for (var i = 4; i <= 6; i++){
    // Because selectedOption is a string, not a number, use ==, not ===.
    if (i == selectedOption){
     // Get reference to selected option marker.
     var selectedOptionMarker = document.getElementById("toolsIconDropdownOption" + i + "MarkerId");
     // Show selected option marker.
     selectedOptionMarker.classList.remove("display-none");
    } else {
     // Get reference to unselected option markers, one for each iteration of loop.
     var unselectedOptionMarker = document.getElementById("toolsIconDropdownOption" + i + "MarkerId");
     // Hide unselected option markers.
     unselectedOptionMarker.classList.add("display-none");
    }
   }
  } else {
   // Fall through for selectedOption value not 1 - 6. Do nothing/ignore clicks on dropdown headers and on any margins outside options 1 - 6, all of which do not have an HTML id attribute.
  }
 },
 // Get reference to elements in order to register event handlers. Remember elements (including the form element) accept events from child elements (including child elements of the form element) via event bubbling.
 toolsIconDropdownContainer: document.getElementById("toolsIconDropdownContainerId"),
 toolsIconDropdown: document.getElementById("toolsIconDropdownId"),
 // Get reference to document object (which is a property of window object) in order to register event handlers. Remember document object accepts events from child elements (including child elements of the form element) via event bubbling.
 document: window.document
};

// Register event handlers for ToolsIconDropdownUtil. EventUtil is in library_load_in_body.js above.
EventUtil.registerEventHandler(ToolsIconDropdownUtil.toolsIconDropdownContainer, "click", ToolsIconDropdownUtil.showHideToolsIconDropdown);
EventUtil.registerEventHandler(ToolsIconDropdownUtil.document, "click", ToolsIconDropdownUtil.showHideToolsIconDropdown);
EventUtil.registerEventHandler(ToolsIconDropdownUtil.toolsIconDropdown, "click", ToolsIconDropdownUtil.changeDisplayOfWebPage);
