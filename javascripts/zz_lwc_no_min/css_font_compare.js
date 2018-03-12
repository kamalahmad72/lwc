/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascripts/lwc/css_font_compare.js.
 * Purpose: Change web page content when; 1.) select CSS font property value, 2.) click Reset button, and 3.) click Add Another To Compare button.
 * Used in: css_font_compare.php.
 * Last reviewed/updated: 10 Mar 2018.
 * Published: 23 Jan 2014.
 * Unobtrusive: 1.) decouple HTML/JavaScript: a.) no register JavaScript event handlers in HTML via HTML attributes (eg, onload and onclick), and b.) no embed JavaScripts in HTML via HTML script element; 2.) as reasonable, decouple CSS/JavaScript. Eg, as reasonable, use JavaScript to change HTML class attribute value assignments (loose coupling), not use JavaScript to change JavaScript style object CSS property value assignments (tight coupling); and 3.) no define JavaScript variables and functions on JavaScript global scope. In this file, use of JavaScript style object is deemed reasonable. Instead, in future, perhaps decouple the HTML from within this file.
 * Web browser support: IE11+, ED12+, FF8+, SM2.5+, SF5.1+, CH7+, OP11.10+, which corresponds to dataset property support (IE11+, SF5.1+, CH7+, OP11.10+) and insertAdjacentHTML() method support (FF8+, SM2.5+).
 * Objects: CssFontCompareUtil. */

/* -------------------- JAVASCRIPT OBJECT DEFINITIONS -------------------- */

/* ---------- NEW JAVASCRIPT OBJECT DEFINITION ---------- */

var CssFontCompareUtil = {
 // Method: CssFontCompareUtil.displayFont().
 // Purpose: Handler for CssFontCompareUtil.form change event. Handler for select CSS font property value in form. When select CSS font property value in form, get CSS font property value and set it on comparison string of text.
 displayFont: function(event){
  // Get reference to changed selection box id.
  var changedSelectionBoxId = event.target.id; // Gets fontProperty_Id#.
  // Split fontProperty_Id# into fontProperty and #.
  var splitter = changedSelectionBoxId.indexOf("_");
  var changedFontProperty = changedSelectionBoxId.substring(0, splitter); // Gets fontProperty.
  var changedNum = changedSelectionBoxId.slice(splitter + 3); // Gets #.
  // For changed fontFamily value, fontWeight value, and fontStyle value, get the selected value.
  if ((changedFontProperty === "fontFamily") || (changedFontProperty === "fontWeight") || (changedFontProperty === "fontStyle")){
   // Get reference to changed selection box.
   var changedSelectionBox = event.target; // = [object HTMLSelectElement]
   // From changed selection box, get selected option.
   var selectedOption = changedSelectionBox.options[changedSelectionBox.selectedIndex];
   // From selected option, get selected value.
   var selectedValue = selectedOption.value;
   var selectedProperty = changedFontProperty;
  // The fontSize value comes from the concatenation of two separate form element values, the fontSizeAbs value and the fontSizePxPt value.  Therefore, a slightly different technique is required to get the fontSize value. For changed fontSizeAbs value OR fontSizePxPt value, get current fontSizeAbs value AND fontSizePxP value, and concatenate.
  } else if ((changedFontProperty === "fontSizeAbs") || (changedFontProperty === "fontSizePxPt")){
   // Get reference to both fontSize-related selection boxes.
   var fontSizeAbsSelectionBox = document.getElementById("fontSizeAbs_Id" + changedNum);
   var fontSizePxPtSelectionBox = document.getElementById("fontSizePxPt_Id" + changedNum);
   // From both fontSize-related selection boxes, get currently selected options.
   var fontSizeAbsSelectedOption = fontSizeAbsSelectionBox.options[fontSizeAbsSelectionBox.selectedIndex];
   var fontSizePxPtSelectedOption = fontSizePxPtSelectionBox.options[fontSizePxPtSelectionBox.selectedIndex];
   // From selected options, get selected values and concatenate.
   var selectedValue = fontSizeAbsSelectedOption.value + fontSizePxPtSelectedOption.value;
   var selectedProperty = "fontSize";
  }
  // Set user selected web font properties value on comparison string of text.
  var string = document.getElementById("stringId" + changedNum);
  switch (selectedProperty){
   case "fontFamily":
    string.style.fontFamily = selectedValue;
    break;
   case "fontSize":
    string.style.fontSize = selectedValue;
    break;
   case "fontWeight":
    string.style.fontWeight = selectedValue;
    break;
   case "fontStyle":
    string.style.fontStyle = selectedValue;
    break;
   default:
    alert("There was a problem processing the request. Error report - File: css_font_compare.js. Object: CssFontCompareUtil. Method: displayFont(). Line: 63. Issue: selectedProperty value not matched by switch cases.");
  }
 },
 // Method: CssFontCompareUtil.reset().
 // Purpose: Handler for CssFontCompareUtil.resetBtn click event. Handler for click Reset button. When click form Reset button, reset comparison strings of text to default.
 // NOTE: 1.) IE, FF, and SM retain manually and programmatically entered web page form element content upon F5 (Refresh/Reload), thereby not returning web page form element content to defaults upon F5 (Refresh/Reload). SF, CH, and OP remove manually and programmatically entered web page form element content upon F5 (Refresh/Reload), thereby returning web page form element content to defaults upon F5 (Refresh/Reload). All of the aforementioned web browsers remove programmatically displayed web page non-form element content upon F5 (Refresh/Reload), thereby returning programmatically displayed web page non-form element content to defaults upon F5 (Refresh/Reload). For more on this see web_browser_retain_remove_content_f5.html. In other words, in IE, FF, and SM, F5 (Refresh/Reload) returns the comparison strings of text to default, not the web page form element content to defaults. Therefore, to return the web page form element content to defaults, use form reset button, not F5 (Refresh/Reload). 2.) Form reset button (ie, reset button nested inside <form></form>) default behavior is to reset web page form element content to defaults, not to reset comparison strings of text to default. Therefore, need a way to reset comparison strings of text to default when user clicks form reset button. The CssFontCompareUtil.reset() method resets comparison strings of text to default when user clicks form reset button.
 reset: function(){
  // Get reference to element used with HTML attribute data-abcxyz/JavaScript property dataset.abcxyz as Add Another counter.
  var addAnotherBtn = document.getElementById("addAnotherBtnId");
  // Get Add Another counter value. addanothercountdata value is incremented at end of FontForWebCompareUtil.addAnother(). Therefore, current number of displayed compare items is one less than addanothercountdata value.
  var count = (addAnotherBtn.dataset.addanothercounter - 1);
  for (var i = 1; i <= count; i++){
   var string = document.getElementById("stringId" + i);
   string.style.fontFamily = "arial";
   string.style.fontSize = "14px";
   string.style.fontWeight = "normal";
   string.style.fontStyle = "normal";
  }
 },
 // Method: CssFontCompareUtil.addAnother().
 // Purpose: Handler for CssFontCompareUtil.addAnotherBtn click event. Handler for click Add Another To Compare button. When click Add Another To Compare button, insert another set of CSS font property value form elements and another comparison string of text after existing ones.
 addAnother: function(){
  // Get reference to elements used with insertAdjacentHTML("beforeend", ).
  var form = document.getElementById("formId");
  var compare = document.getElementById("compareId");
  // Get reference to element used with HTML attribute data-abcxyz/JavaScript property dataset.abcxyz as Add Another counter.
  var addAnotherBtn = document.getElementById("addAnotherBtnId");
  // Get Add Another counter value.
  var n = addAnotherBtn.dataset.addanothercounter;
  // HTML to be inserted when click Add Another To Compare button.
  var insertFormItem = "<div id='selectFontId" + n + "' class=''>" +
  n + ".) font-family: " +
  "<select size='1' id='fontFamily_Id" + n + "'>" +
   "<option value=\"'adobe minion web'\">adobe minion web</option>" +
   "<option value='arial' selected>arial (sans-serif)</option>" +
   "<option value=\"'book antiqua'\">book antiqua (serif)</option>" +
   "<option value='calibri'>calibri</option>" +
   "<option value='cambria'>cambria</option>" +
   "<option value='candara'>candara</option>" +
   "<option value=\"'comic sans ms'\">comic sans ms (fantasy)</option>" +
   "<option value='consolas'>consolas (monospace)</option>" +
   "<option value='constantia'>constantia (serif)</option>" +
   "<option value='courier'>courier (monospace)</option>" +
   "<option value=\"'courier new'\">courier new (monospace)</option>" +
   "<option value='cursive'>cursive (generic)</option>" +
   "<option value='ebrima'>ebrima</option>" +
   "<option value='euphemia'>euphemia</option>" +
   "<option value='fantasy'>fantasy (generic)</option>" +
   "<option value=\"'franklin gothic medium'\">franklin gothic medium</option>" +
   "<option value='garamond'>garamond (serif)</option>" +
   "<option value='gautami'>gautami</option>" +
   "<option value='geneva'>geneva</option>" +
   "<option value='georgia'>georgia (serif)</option>" +
   "<option value='helvetica'>helvetica (sans-serif)</option>" +
   "<option value='impact'>impact</option>" +
   "<option value='latha'>latha</option>" +
   "<option value=\"'lithos pro regular'\">lithos pro regular</option>" +
   "<option value=\"'lucida console'\">lucida console (monospace)</option>" +
   "<option value=\"'lucida sans unicode'\">lucida sans unicode (sans-serif)&nbsp;</option>" +
   "<option value=\"'microsoft sans serif'\">microsoft sans serif</option>" +
   "<option value=\"'minion pro'\">minion pro</option>" +
   "<option value=\"'minion web'\">minion web (serif)</option>" +
   "<option value='modern'>modern</option>" +
   "<option value='monospace'>monospace (generic)</option>" +
   "<option value=\"'ms sans serif'\">ms sans serif</option>" +
   "<option value=\"'ms serif'\">ms serif (serif)</option>" +
   "<option value=\"'myriad web'\">myriad web</option>" +
   "<option value=\"'myriad web pro'\">myriad web pro</option>" +
   "<option value=\"'nueva std'\">nueva std</option>" +
   "<option value='palatino'>palatino (serif)</option>" +
   "<option value=\"'palatino linotype'\">palatino linotype (serif)</option>" +
   "<option value='roman'>roman</option>" +
   "<option value='sans-serif'>sans-serif (generic)</option>" +
   "<option value='script'>script</option>" +
   "<option value=\"'segoe print'\">segoe print</option>" +
   "<option value=\"'segoe script'\">segoe script</option>" +
   "<option value=\"'segoe ui'\">segoe ui</option>" +
   "<option value='serif'>serif (generic)</option>" +
   "<option value='sylfaen'>sylfaen</option>" +
   "<option value='symbol'>symbol</option>" +
   "<option value='system'>system</option>" +
   "<option value='tahoma'>tahoma (sans-serif)</option>" +
   "<option value=\"'tekton pro'\">tekton pro</option>" +
   "<option value='terminal'>terminal</option>" +
   "<option value='times'>times (serif)</option>" +
   "<option value=\"'times new roman'\">times new roman (serif)</option>" +
   "<option value=\"'trajan pro'\">trajan pro</option>" +
   "<option value=\"'trebuchet ms'\">trebuchet ms (sans-serif)</option>" +
   "<option value='tunga'>tunga</option>" +
   "<option value='verdana'>verdana (sans-serif)</option>" +
   "<option value='webdings'>webdings</option>" +
  "</select>&nbsp;&nbsp; " +
  "font-size: " +
  "<select size='1' id='fontSizeAbs_Id" + n + "'>" +
   "<option value='1'>1</option>" +
   "<option value='2'>2</option>" +
   "<option value='3'>3</option>" +
   "<option value='4'>4</option>" +
   "<option value='5'>5</option>" +
   "<option value='6'>6</option>" +
   "<option value='7'>7</option>" +
   "<option value='8'>8</option>" +
   "<option value='9'>9</option>" +
   "<option value='10'>10</option>" +
   "<option value='11'>11</option>" +
   "<option value='12'>12</option>" +
   "<option value='13'>13</option>" +
   "<option value='14' selected>14</option>" +
   "<option value='15'>15</option>" +
   "<option value='16'>16</option>" +
   "<option value='17'>17</option>" +
   "<option value='18'>18</option>" +
   "<option value='19'>19</option>" +
   "<option value='20'>20</option>" +
   "<option value='21'>21</option>" +
   "<option value='22'>22</option>" +
   "<option value='23'>23</option>" +
   "<option value='24'>24</option>" +
   "<option value='25'>25</option>" +
   "<option value='26'>26</option>" +
   "<option value='27'>27</option>" +
   "<option value='28'>28</option>" +
   "<option value='29'>29</option>" +
   "<option value='30'>30&nbsp;</option>" +
   "<option value='31'>31</option>" +
   "<option value='32'>32</option>" +
  "</select>&nbsp;&nbsp; " +
  "px or pt: " +
  "<select size='1' id='fontSizePxPt_Id" + n + "'>" +
   "<option value='px' selected>px&nbsp;</option>" +
   "<option value='pt'>pt</option>" +
   "</select>&nbsp;&nbsp; " +
   "font-weight: " +
  "<select size='1' id='fontWeight_Id" + n + "'>" +
   "<option value='normal' selected>normal (400)</option>" +
   "<option value='bold'>bold (700)</option>" +
   "<option value='100'>100 (thin)</option>" +
   "<option value='200'>200 (extra/ultra light)</option>" +
   "<option value='300'>300 (light)</option>" +
   "<option value='400'>400 (normal)</option>" +
   "<option value='500'>500 (medium)</option>" +
   "<option value='600'>600 (semi/demi bold)&nbsp;</option>" +
   "<option value='700'>700 (bold)</option>" +
   "<option value='800'>800 (extra/ultra bold)</option>" +
   "<option value='900'>900 (black/heavy)</option>" +
  "</select>&nbsp;&nbsp; " +
  "font-style: " +
  "<select size='1' id='fontStyle_Id" + n + "'>" +
   "<option value='normal' selected>normal&nbsp;</option>" +
   "<option value='italic'>italic</option>" +
  "</select>" +
  "</div>";
  var insertCompareItem = "<span id='compareFontId" + n + "' class='line-height-normal'>" + n + ".) <span id='stringId" + n + "'>The quick brown fox jumps over the lazy dog THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG 1234567890 `~!@#$%^&amp;*-_=+()\\/[]{}&lt;&gt;;:'|&quot;,.?</span><br /></span>";
  form.insertAdjacentHTML("beforeend", insertFormItem);
  compare.insertAdjacentHTML("beforeend", insertCompareItem);
  var incrementAddAnotherCounter = ++n;
  addAnotherBtn.dataset.addanothercounter = incrementAddAnotherCounter;
 },
 // Get reference to elements in order to register event handlers. Remember elements (including the form element) accept events from child elements (including child elements of the form element) via event bubbling.
 form: document.getElementById("formId"),
 resetBtn: document.getElementById("resetBtnId"),
 addAnotherBtn: document.getElementById("addAnotherBtnId")
};

// Register event handlers. EventUtil is in library_load_in_body.js.
EventUtil.registerEventHandler(CssFontCompareUtil.form, "change", CssFontCompareUtil.displayFont);
EventUtil.registerEventHandler(CssFontCompareUtil.resetBtn, "click", CssFontCompareUtil.reset);
EventUtil.registerEventHandler(CssFontCompareUtil.addAnotherBtn, "click", CssFontCompareUtil.addAnother);
