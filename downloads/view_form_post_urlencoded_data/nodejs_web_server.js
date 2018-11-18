/* -------------------- INTRODUCTION -------------------- */

/* File: nodejs_web_server.js.
 * Purpose: Node.js web server for form_post_urlencoded.html form submission. The form_post_urlencoded.html form element attributes are: method='post' enctype='application/x-www-form-urlencoded' action='http://localhost:8001/form_post_urlencoded_submitted.
 * Used in: No other file.
 * Last reviewed/updated: 18 Nov 2018.
 * Published: 12 Nov 2018.
 * Web browser support: IE8+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+. IE6 - 7 not tested.
 * Node.js support: Node.js 8+, 10+, 11+. Node 7-, 9 not tested. */

const http = require('http'); // Native Node.js module.
const querystring = require('querystring'); // Native Node.js module.
const port = 8001; // Number. Apparently required, including 80. 
const hostname = 'localhost'; // String. Eg, '127.0.0.1'. CH2 requires hostname = '127.0.0.1', not hostname = 'localhost'.
const server = http.createServer((request, response) => { // Alternatively, no assignment and use chaining: http.createServer((request, response) => {}).listen();
 var requestBody = "";
 request.on("error", err => {
  console.error(err); // Output error to terminal/command prompt.
 }).on("data", chunk => {
  requestBody += chunk; // textbox=&textboxWithPreenteredText=textbox+pre-entered+text&textarea=&textareaWithPreenteredText=textarea+pre-entered+text&selectbox=selectbox+option+one&selectboxWithOptionThreePreselected=selectbox+option+three+pre-selected&selectboxWithMultipleAttributeOptionOneTwoPreselected=selectbox+option+one+pre-selected&selectboxWithMultipleAttributeOptionOneTwoPreselected=selectbox+option+two+pre-selected&checkboxPrechecked=on&checkboxWithValueAttributePrechecked=valueAttributeValue&radioButtonGroupPrechecked=radioButtonTwoPrechecked (default). // String.
 }).on("end", () => { // Handle request end event, which is emitted at end of request. NOTE: http.clientRequest object has end() method.
  // console.log("request.method: " + request.method); // For http://localhost:8001/ request, request.method = "GET". For submit form request, request.method = "POST".
  // console.log("request.url: " + request.url); // For http://localhost:8001/ request, request.url = "/". For submit form request, request.url = "/form_post_urlencoded_submitted".
  if (request.method === "GET"){ // Determine if request method is GET.
   if (request.url === "/"){ // Request method is GET. Determine if request URL is root. Applies to http://localhost:8001/ request.
    response.statusCode = 200; // Request URL is root.
    response.setHeader("Content-Type", "text/html"); // 'text/html' outputs HTML to web browser. 'text/plain' outputs text to web browser.
    return response.end(`Node.js web server listening on http://${hostname}:${port}/. Nothing to do here. Load form_post_urlencoded.html in your web browser, interact with the form, and click Submit.`);
   }
   if (request.url === "/favicon.ico"){ // Request method is GET. Determine if request URL is for favicon. Applies to http://localhost:8001/ request and submit form request. Upon form submit, web browser performs two requests: 1.) POST request to resource specified by form action attribute, which is request.url = "/form_post_urlencoded_submitted"; and 2.) GET request for favicon.ico, which is request.url = "/favicon.ico". At end of both requests the request end event fires.
    response.statusCode = 200; // Request URL is for favicon.
    response.setHeader("Content-Type", "image/x-icon");
    return response.end(); // No favicon image data is sent.
   }
  }
  if (request.method === "POST"){ // Determine if request method is POST.
   if (request.url === "/form_post_urlencoded_submitted"){ // Request method is POST. Determine if request URL is "/form_post_urlencoded_submitted". Applies to form submit request. Upon form submit, web browser performs two requests: 1.) POST request to resource specified by form action attribute, which is request.url = "/form_post_urlencoded_submitted"; and 2.) GET request for favicon.ico, which is request.url = "/favicon.ico". At end of both requests the request end event fires. The POST request sends the form data string to the request.on() method data event callback function, which accepts the incoming data stream, assembles the chunks into the form data string, and assigns the form data string to the requestBody variable.
    var requestBodyObject = querystring.parse(requestBody); // Request URL is "/form_post_urlencoded_submitted". Form control name attribute values are set as requestBodyObject property names. Form control user input values are set as requestBodyObject property values. requestBodyObject property values do not include requestBody replaced/escaped characters (ie, in requestBody, user input space, &, =, and + characters are replaced/escaped by +, %26, %3D, and %2B, respectively). However, the querystring.parse() method reverts the replaced/escaped characters to the original user input characters.
    var textbox = requestBodyObject.textbox; // textbox control. // "" (default). // "aa".
    var textboxWithPreenteredText = requestBodyObject.textboxWithPreenteredText; // textboxWithPreenteredText control. // "textbox pre-entered text" (default). // "".
    var textarea = requestBodyObject.textarea; // textarea control. // "" (default). // "aa".
    var textareaWithPreenteredText = requestBodyObject.textareaWithPreenteredText; // textareaWithPreenteredText control. // "textarea pre-entered text" (default). // "".
    var requestBodyArray = requestBody.split("&", 6); // requestBodyArray elements are; 1.) controlNameAttributeValue=controlUserInputValue pairs, and 2.) controlUserInputValues include requestBody replaced/escaped characters (ie, in requestBody, user input space, &, =, and + characters are replaced/escaped by +, %26, %3D, and %2B, respectively).
    // requestBodyArray[0]; // textbox control. // "textbox=" (default). // "textbox=aa".
    // requestBodyArray[1]; // textboxWithPreenteredText control. // "textboxWithPreenteredText=textbox+pre-entered+text" (default). // "textboxWithPreenteredText=".
    // requestBodyArray[2]; // textarea control. // "textarea=" (default). // "textarea=aa".
    // requestBodyArray[3]; // textareaWithPreenteredText control. // "textareaWithPreenteredText=textarea+pre-entered+text" (default). // "textareaWithPreenteredText=".
    // requestBodyArray[4]; // selectbox control. // "selectbox=selectbox+option+one" (default).
    // requestBodyArray[5]; // selectboxWithOptionThreePreselected control. // "selectboxWithOptionThreePreselected=selectbox+option+three+pre-selected" (default).
    var indexOfSelectboxWithMultipleAttributeOptionOneTwoPreselected = requestBody.indexOf("selectboxWithMultipleAttributeOptionOneTwoPreselected"); // Determine start position of user input data submitted for selectboxWithMultipleAttributeOptionOneTwoPreselected control.
    var indexOfCheckbox = requestBody.indexOf("&checkbox"); // Determine end position of user input data submitted for selectboxWithMultipleAttributeOptionOneTwoPreselected control for when one or more of the three checkboxes are checked.
    var indexOfRadioButtonGroup = requestBody.indexOf("&radioButtonGroup"); // Determine end position of user input data submitted for selectboxWithMultipleAttributeOptionOneTwoPreselected control for when none of the three checkboxes are checked.
    requestBodyArray[6] = requestBody.slice(indexOfSelectboxWithMultipleAttributeOptionOneTwoPreselected, (indexOfCheckbox !== -1) ? indexOfCheckbox : indexOfRadioButtonGroup); // selectboxWithMultipleAttributeOptionOneTwoPreselected control. // Determine if none of the three checkboxes are checked. Get user input data submitted for selectboxWithMultipleAttributeOptionOneTwoPreselected control and set on requestBodyArray[6]. // "selectboxWithMultipleAttributeOptionOneTwoPreselected=selectbox+option+one+pre-selected&selectboxWithMultipleAttributeOptionOneTwoPreselected=selectbox+option+two+pre-selected" (default).
    requestBodyArray[7] = requestBody.indexOf("&checkbox=on&") !== -1 ? "checkbox=on" : ""; // checkbox control. // Determine if checkbox control is checked. If checked, set "checkbox=on" on requestBodyArray[7]. If not checked, set "" on requestBodyArray[7]. // "" (default). // "checkbox=on".
    requestBodyArray[8] = requestBody.indexOf("&checkboxPrechecked=on&") !== -1 ? "checkboxPrechecked=on" : ""; // checkboxPrechecked control. // Determine if checkboxPrechecked control is checked. If checked, set "checkboxPrechecked=on" on requestBodyArray[8]. If not checked, set "" on requestBodyArray[8]. // "checkboxPrechecked=on" (default). // "".
    requestBodyArray[9] = requestBody.indexOf("&checkboxWithValueAttributePrechecked=valueAttributeValue&") !== -1 ? "checkboxWithValueAttributePrechecked=valueAttributeValue" : ""; // checkboxWithValueAttributePrechecked control. // Determine if checkboxWithValueAttributePrechecked control is checked. If checked, set "checkboxWithValueAttributePrechecked=valueAttributeValue" on requestBodyArray[9]. If not checked, set "" on requestBodyArray[9]. // "checkboxWithValueAttributePrechecked=valueAttributeValue" (default). // "".
    if (requestBody.indexOf("&radioButtonGroup=radioButtonOne&") !== -1){ // radioButtonGroup control. // Determine if radioButtonGroup control radioButtonOne is checked.
     requestBodyArray[10] = "radioButtonGroup=radioButtonOne"; // radioButtonGroup control radioButtonOne is checked. Set "radioButtonGroup=radioButtonOne" on requestBodyArray[10].
    } else if (requestBody.indexOf("&radioButtonGroup=radioButtonTwo&") !== -1){ // Determine if radioButtonGroup control radioButtonTwo is checked.
     requestBodyArray[10] = "radioButtonGroup=radioButtonTwo"; // radioButtonGroup control radioButtonOne is checked. Set "radioButtonGroup=radioButtonTwo" on requestBodyArray[10].
    } else { // No radioButtonGroup control radio button is checked.
     requestBodyArray[10] = ""; // Set "" on requestBodyArray[10].
    } // "" (default). // "radioButtonGroup=radioButtonOne".
    requestBodyArray[11] = requestBody.indexOf("&radioButtonGroupPrechecked=radioButtonOne") !== -1 ? "radioButtonGroupPrechecked=radioButtonOne" : "radioButtonGroupPrechecked=radioButtonTwoPrechecked"; // radioButtonGroupPrechecked control. // Determine if radioButtonGroupPrechecked control radioButtonOne is checked. If checked, set "radioButtonGroupPrechecked=radioButtonOne" on requestBodyArray[11]. If not checked, set "radioButtonGroupPrechecked=radioButtonTwoPrechecked" on requestBodyArray[11]. // "radioButtonGroupPrechecked=radioButtonTwoPrechecked" (default).
    response.on('error', err => {
     console.error(err); // Output error to terminal/command prompt.
    });
    response.statusCode = 200;
    response.setHeader("Content-Type", "text/html"); // 'text/html' outputs HTML to web browser. 'text/plain' outputs text to web browser.
    // response.write/end(`template literal syntax`) allows; 1.) to insert ${JavaScript expressions} without having to break out of and back into "HTML" mode, and 2.) to format HTML code using indenting and new lines as would normally do in an .html/.php file. This in contrast to response.write("string literal syntax") which; 1.) to insert JavaScript expression requires break out of and back into "HTML" mode, and 2.) to format HTML code using new lines requires break string character (\) (not recommended) or each line be a response.write("") statement, as in:
    // 1 response.write("<tag>line one\ 
    // 2 and two HTML content</tag>");
    // 3 response.write("<tag>line three HTML content</tag>");
    // 4 response.write("<tag>line four HTML content</tag>");
    return response.end(`
<!DOCTYPE html>
<html lang='en'>
 <head>
  <title>Node.js Web Server Response With Submitted Form Data</title>
  <meta charset='UTF-8' />
  <style>
   th, td { line-height: 1.75; }
   caption, th, td { padding: 0.5em; }
   table { border-collapse: collapse; box-sizing: border-box; margin: 1em 0; }
   table, caption, th, td { border: 1px solid #d7d7d7; }
   caption { font-weight: bold; background-color: #efefef; border-bottom: 0; }
  </style>
 </head>
 <body>

  <h1>Node.js Web Server Response With Submitted Form Data</h1>

  <p>Interact with form and click Submit.</p>

  <form method='post' enctype='application/x-www-form-urlencoded' action='http://localhost:8001/form_post_urlencoded_submitted'><!-- Upon form submit, web browser address bar points to resource specified by action attribute. -->

   <p><button type='submit' class='btn-md'>Submit</button></p>

   <table width='100%'>
    <caption>Form Data String Sent In Body Of HTTP POST Request On Last Submit</caption>
    <tbody>
     <tr>
      <td>${requestBody}</td>
     </tr>
    </tbody>
   </table>

   <table>
    <caption>Textboxes</caption>
    <thead>
     <tr>
      <th>Control Loaded With Data From Last Submit</th>
      <th>Control Data From Last Submit</th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <td><label>Textbox: <input type='text' name='textbox' size='30' maxlength='30' value='${textbox}' /></label></td>
      <td>${requestBodyArray[0]}</td>
     </tr>
     <tr>
      <td><label>Textbox with pre-entered text: <input type='text' name='textboxWithPreenteredText' size='30' maxlength='30' value='${textboxWithPreenteredText}' /></label></td>
      <td>${requestBodyArray[1]}</td>
     </tr>
    </tbody>
   </table>

   <table>
    <caption>Textareas</caption>
    <thead>
     <tr>
      <th>Control Loaded With Data From Last Submit</th>
      <th>Control Data From Last Submit</th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <td><label>Textarea: <textarea name='textarea' cols='30' rows='2'>${textarea}</textarea></label></td>
      <td>${requestBodyArray[2]}</td>
     </tr>
     <tr>
      <td><label>Textarea with pre-entered text: <textarea name='textareaWithPreenteredText' cols='30' rows='2'>${textareaWithPreenteredText}</textarea></label></td>
      <td>${requestBodyArray[3]}</td>
     </tr>
    </tbody>
   </table>

   <table>
    <caption>Selectboxes (Dropdowns)</caption>
    <thead>
     <tr>
      <th>Control Loaded With Data From Last Submit</th>
      <th>Control Data From Last Submit</th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <td>
       <label>Selectbox: 
        <select name='selectbox'>
         <option ${requestBodyArray[4].indexOf("selectbox=selectbox+option+one") !== -1 ? "selected='selected'" : ""}>selectbox option one</option>
         <option ${requestBodyArray[4].indexOf("selectbox=selectbox+option+two") !== -1 ? "selected='selected'" : ""}>selectbox option two</option>
         <option ${requestBodyArray[4].indexOf("selectbox=selectbox+option+three") !== -1 ? "selected='selected'" : ""}>selectbox option three</option>
        </select>
       </label>
      </td>
      <td>${requestBodyArray[4]}</td>
     </tr>
     <tr>
      <td>
       <label>Selectbox with option three pre-selected: 
        <select name='selectboxWithOptionThreePreselected'>
         <option ${requestBodyArray[5].indexOf("selectboxWithOptionThreePreselected=selectbox+option+one") !== -1 ? "selected='selected'" : ""}>selectbox option one</option>
         <option ${requestBodyArray[5].indexOf("selectboxWithOptionThreePreselected=selectbox+option+two") !== -1 ? "selected='selected'" : ""}>selectbox option two</option>
         <option ${requestBodyArray[5].indexOf("selectboxWithOptionThreePreselected=selectbox+option+three+pre-selected") !== -1 ? "selected='selected'" : ""}>selectbox option three pre-selected</option>
        </select>
       </label>
      </td>
      <td>${requestBodyArray[5]}</td>
     </tr>
     <tr>
      <td>
       <label>Selectbox with <code>multiple</code> attribute and option one and two pre-selected: 
        <select name='selectboxWithMultipleAttributeOptionOneTwoPreselected' multiple='multiple'>
         <option ${requestBodyArray[6].indexOf("selectboxWithMultipleAttributeOptionOneTwoPreselected=selectbox+option+one+pre-selected") !== -1 ? "selected='selected'" : ""}>selectbox option one pre-selected</option>
         <option ${requestBodyArray[6].indexOf("selectboxWithMultipleAttributeOptionOneTwoPreselected=selectbox+option+two+pre-selected") !== -1 ? "selected='selected'" : ""}>selectbox option two pre-selected</option>
         <option ${requestBodyArray[6].indexOf("selectboxWithMultipleAttributeOptionOneTwoPreselected=selectbox+option+three") !== -1 ? "selected='selected'" : ""}>selectbox option three</option>
        </select>
       </label>
      </td>
      <td>${requestBodyArray[6]}</td>
     </tr>
    </tbody>
   </table>

   <table>
    <caption>Checkboxes</caption>
    <thead>
     <tr>
      <th>Control Loaded With Data From Last Submit</th>
      <th>Control Data From Last Submit <a id='1_checkboxes_return'></a><a href='#1_checkboxes'>(1)</a></th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <td>
       <label><input type='checkbox' name='checkbox' ${requestBodyArray[7] !== "" ? "checked='checked'" : ""} /> Checkbox</label>
      </td>
      <td>${requestBodyArray[7]}</td>
     </tr>
     <tr>
      <td>
       <label><input type='checkbox' name='checkboxPrechecked' ${requestBodyArray[8] !== "" ? "checked='checked'" : ""} /> Checkbox pre-checked</label>
      </td>
      <td>${requestBodyArray[8]}</td>
     </tr>
     <tr>
      <td>
       <label><input type='checkbox' name='checkboxWithValueAttributePrechecked' ${requestBodyArray[9] !== "" ? "checked='checked'" : ""} value='valueAttributeValue' /> Checkbox with <code>value</code> attribute and pre-checked</label>
      </td>
      <td>${requestBodyArray[9]}</td>
     </tr>
    </tbody>
    <tfoot>
     <tr>
      <td colspan='2'><a id='1_checkboxes'></a><a href='#1_checkboxes_return'>(1)</a> For checkbox, data is submitted only if the checkbox is checked. For example, for a checkbox with <code>name='nameAttributeValue'</code> attribute: 1.) if the checkbox is unchecked, nothing is submitted and the JavaScript <code>nameAttributeValue</code> property is <code>undefined</code>; and 2.) if the checkbox is checked, <code>nameAttributeValue=on</code> is submitted if the <code>value</code> attribute is not used, or <code>nameAttributeValue=valueAttributeValue</code> is submitted if the <code>value</code> attribute is used.</td>
     </tr>
    </tfoot>
   </table>

   <table>
    <caption>Radio Buttons</caption>
    <thead>
     <tr>
      <th>Control Loaded With Data From Last Submit</th>
      <th>Control Data From Last Submit <a id='1_radioButtons_return'></a><a href='#1_radioButtons'>(1)</a></th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <td>
       <label><input type='radio' name='radioButtonGroup' value='radioButtonOne' ${requestBodyArray[10].indexOf("radioButtonOne") !== -1 ? "checked='checked'" : ""} /> Radio button one</label><br />
       <label><input type='radio' name='radioButtonGroup' value='radioButtonTwo' ${requestBodyArray[10].indexOf("radioButtonTwo") !== -1 ? "checked='checked'" : ""} /> Radio button two</label>
      </td>
      <td>${requestBodyArray[10]}</td>
     </tr>
     <tr>
      <td>
       <label><input type='radio' name='radioButtonGroupPrechecked' value='radioButtonOne' ${requestBodyArray[11].indexOf("radioButtonOne") !== -1 ? "checked='checked'" : ""} /> Radio button one</label><br />
       <label><input type='radio' name='radioButtonGroupPrechecked' value='radioButtonTwoPrechecked' ${requestBodyArray[11].indexOf("radioButtonTwoPrechecked") !== -1 ? "checked='checked'" : ""} /> Radio button two pre-checked</label>
      </td>
      <td>${requestBodyArray[11]}</td>
     </tr>
    </tbody>
    <tfoot>
     <tr>
      <td colspan='2'><a id='1_radioButtons'></a><a href='#1_radioButtons_return'>(1)</a> For radio buttons, data is submitted only if a radio button is checked and it corresponds only to the checked radio button. For example, for radio buttons with <code>name='nameAttributeValue'</code> attribute: 1.) if the radio buttons are unchecked, nothing is submitted and the JavaScript <code>nameAttributeValue</code> property is <code>undefined</code>; and 2.) if a radio button is checked, <code>nameAttributeValue=valueAttributeValue</code> is submitted, where <code>valueAttributeValue</code> is from the <code>value</code> attribute of the checked radio button.</td>
     </tr>
    </tfoot>
   </table>
   <p><button type='submit' class='btn-md'>Submit</button></p>
  </form>
 </body>
</html>`);
   }
  }
 });
});
server.listen(port, hostname, () => { // Apparently port required, including 80.
 console.log(`Node.js web server listening on http://${hostname}:${port}/.`); // Output to terminal/command prompt.
});
