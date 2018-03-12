/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascripts/lwc/shopping_library.js.
 * Purpose: Central location for LWC Home sitewide JavaScripts that can be used in shopping apps.
 * Used in: javascript_shopping_cart_spa.js.
 * Last reviewed/updated: 10 Mar 2018.
 * Published: 12 Jun 2014.
 * Unobtrusive: 1.) decouple HTML/JavaScript: a.) no register JavaScript event handlers in HTML via HTML attributes (eg, onload and onclick), and b.) no embed JavaScripts in HTML via HTML script element; 2.) As reasonable, decouple CSS/JavaScript. Eg, as reasonable, use JavaScript to change HTML class attribute value assignments (loose coupling), not use JavaScript to change JavaScript style object CSS property value assignments (tight coupling); and 3.) no define JavaScript variables and functions on JavaScript global scope.
 * Web browser support: See individual objects below.
 * Objects: ConvertNumberToStringCurrencyUtil, HideCreditCardNumberUtil, and ValidateFormElementsUtil.
 * NOTE: Required by shopping_library.js. */

/* -------------------- JAVASCRIPT OBJECT DEFINITIONS -------------------- */

/* ---------- NEW JAVASCRIPT OBJECT DEFINITION ---------- */

/* Object: ConvertNumberToStringCurrencyUtil.
 * Purpose: Returns integer number literals converted to strings with two decimal places as if representing currency.
 * Used in: javascript_shopping_cart.js. Unobtrusive.
 * Last reviewed/updated: 21 Jul 2017.
 * Published: 18 Mar 2014.
 * Web browser support: Not tested but likely IE6+, ED12+, FF1.5+, SM1+, FL1+, SF3.1+, CH2+ OP7.50+, NT9+. */

var ConvertNumberToStringCurrencyUtil = {
 convertNumberToStringCurrency: function(numberToConvert){
  numberToStringCurrency = numberToConvert.toFixed(2);
  return numberToStringCurrency;
 }
};

/* ---------- NEW JAVASCRIPT OBJECT DEFINITION ---------- */

/* Object: HideCreditCardNumberUtil.
 * Purpose: Returns credit card number (which is a string, not a number) with all but last 4 characters replaced by asterisks (*).
 * Used in: javascript_shopping_cart.js. Unobtrusive.
 * Last reviewed/updated: 21 Jul 2017.
 * Published: 18 Mar 2014.
 * Web browser support: Not tested but likely IE6+, ED12+, FF1.5+, SM1+, FL1+, SF3.1+, CH2+ OP7.50+, NT9+. */

var HideCreditCardNumberUtil = {
 hideCreditCardNumber: function(creditCardNumber){
  var creditCardNumberLength = creditCardNumber.length;
  switch (creditCardNumberLength){
   case 16:
    var creditCardNumberHidden = creditCardNumber.replace(/^\d{12}/, "************");
    break;
   case 19:
    var creditCardNumberHidden = creditCardNumber.replace(/^\d{4} \d{4} \d{4} /, "**** **** **** ");
    break;
   default:
    alert("There was a problem processing the request. Error report - File: shopping_library.js. Object: HideCreditCardNumberUtil. Method: hideCreditCardNumber(). Line: 51. Issue: creditCardNumberLength value not matched by switch cases.");
  }
 return creditCardNumberHidden;
 }
};

/* -------------------- NEW JAVASCRIPT OBJECT DEFINITION -------------------- */

/* Object: ValidateFormElementsUtil.
 * Purpose: Validates elements of a passed in form.
 * Used in: javascript_shopping_cart_spa.js. Unobtrusive.
 * Last reviewed/updated: 26 Jul 2017.
 * Published: 18 Mar 2014.
 * Web browser support: IE11+, ED12+, FF6+, SM2.3+, SF5.1+, CH7+, OP11.50+, which corresponds to dataset property support (IE11+, ED12+, FF6+, SM2.3+, SF5.1+, CH7+) and JavaScript classList property support (SF5.1+, OP11.50+). 

 */
var ValidateFormElementsUtil = {
 // Method: ValidateFormElementsUtil.unhighlightValidFormElement().
 // Purpose: Unhighlight valid form element regardless if highlighted. Called by ValidateFormElementsUtil.validateFormElements() below.
 unhighlightValidFormElement: function(formElement){
  formElement.classList.remove("highlight-invalid-from-element");
 },
 // Method: ValidateFormElementsUtil.highlightInvalidFormElement().
 // Purpose: Highlight and place focus on invalid form element. Called by ValidateFormElementsUtil.validateFormElements() below.
 highlightInvalidFormElement: function(formElement){
  formElement.classList.add("highlight-invalid-from-element");
  formElement.focus();
  // Scroll form element parent node into view. This positions form element label/name into view. A convenience. Otherwise, user might have to scroll up to see label/name of invalid form element.
  formElement.parentNode.scrollIntoView(true);
 },
 // Method: ValidateFormElementsUtil.validateFormElements() below.
 // Purpose: Validate form. Main ValidateFormElementsUtil method.
 validateFormElements: function(form){
  // Define regular expression test patterns.
  var regExpAllNameTypesAndCity = /[a-zA-Z]+/, // a-zA-Z repeated 1 or more times. Name types include first name, last name, full name, credit cardholder name.
   regExpAddress = /[a-zA-Z0-9]+/, // a-zA-Z0-9 repeated 1 or more times.
   regExpAddress2Optional = /[a-zA-Z0-9]*/, // a-zA-Z0-9 repeated 0 or more times. 0 times means empty is valid; therefore, optional.
   regExpTextarea = /[a-zA-Z0-9]+/, // a-zA-Z0-9 repeated 1 or more times.
   regExpTextareaOptional = /[a-zA-Z0-9]*/, // a-zA-Z0-9 repeated 0 or more times. 0 times means empty is valid; therefore, optional.
   regExpQuantity = /^[0-9]+$/, // Digit repeated 1 or more times.
   regExpQuantityOptional = /^[0-9 ]*$/, // Digit and/or space repeated 0 or more times. 0 times means empty is valid; therefore, optional.
   regExpState = /^[a-zA-Z]{2}$/, // a-zA-Z 2 consecutive.
   regExpZipCode = /^\d{5}$/, // digit 5 consecutive.
   regExpPhoneNumber = /^\d{10}$|^\d{3}-\d{3}-\d{4}$/, // digit 10 consecutive or digit 3 consecutive + dash + digit 3 consecutive + dash + digit 4 consecutive.
   regExpCreditCardNumber = /^\d{16}$|^\d{4} \d{4} \d{4} \d{4}$/, // digit 16 consecutive or digit 4 consecutive + space + digit 4 consecutive + space + digit 4 consecutive + space + digit 4 consecutive.
   regExpCreditCardExpirationMonth = /^\d{2}$/, // digit 2 consecutive.
   regExpCreditCardExpirationYear = /^\d{4}$/, // digit 4 consecutive.
   regExpCreditCardSecurityCode = /^\d{3}$/, // digit 3 consecutive.
   regExpEmailAddress = /^\S+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/, // non-whitespace repeated 1 or more times + at + a-zA-Z0-9 repeated 1 or more times + dot + a-zA-Z0-9 repeated 1 or more times. Meant to mirror IE11 input type="email" requirement.
   regExpInvalidCharacters = /[`~!@$%^*_=+()\\/[\]{}<>;:|"?]/; // List of invalid characters with escaped (\) backlash and closing square bracket. Implied valid non-letter/digit characters are .,'&#- and space.
  var formId = form.id;
  var formLength = form.length;
  // If want all submit buttons nested inside of forms, since submit button is counted as a form element, to avoid validating the button, either use formLength - 1 or some other mechanism, such as assigning HTML attribute data-validationtype="doNotValidateMe" and using JS to programmatically not validate the button as done below. However, if want some submit buttons outside of forms, cannot use formLength - 1 because the last form element, not a button, will not get validated.
  for (var i = 0; i < (formLength); i++){
   var formElement = form.elements[i];
   var formElementValue = formElement.value;
   var formElementValidationType = formElement.dataset.validationtype;
   // Start validating form elements.
   if ((formElementValidationType === "inputText_firstName") || (formElementValidationType === "inputText_lastName") || (formElementValidationType === "inputText_fullName") || (formElementValidationType === "inputText_creditCardholderName") || (formElementValidationType === "inputText_city")){
    if ((regExpAllNameTypesAndCity.test(formElementValue)) && (!regExpInvalidCharacters.test(formElementValue))){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     switch (formElementValidationType){
      case "inputText_firstName":
       alert("Please enter a valid first name.");
       break;
      case "inputText_lastName":
       alert("Please enter a valid last name.");
       break;
      case "inputText_fullName":
       alert("Please enter a valid full name.");
       break;
      case "inputText_creditCardholderName":
       alert("Please enter a valid cardholder name.");
       break;
      case "inputText_city":
       alert("Please enter a valid city.");
       break;
      default:
       alert("There was a problem processing the request. Error report - File: shopping_library.js. Object: ValidateFormElementsUtil. Method: validateFormElements(). Line: 130. Issue: formElementValidationType value not matched by switch cases.");
     }
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "inputText_address"){
    if ((regExpAddress.test(formElementValue)) && (!regExpInvalidCharacters.test(formElementValue))){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please enter a valid address.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "inputText_address2Optional"){
    if ((regExpAddress2Optional.test(formElementValue)) && (!regExpInvalidCharacters.test(formElementValue))){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please enter a valid address2 or make the field empty.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "textarea"){
    if ((regExpTextarea.test(formElementValue)) && (!regExpInvalidCharacters.test(formElementValue))){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please enter only valid characters. Valid characters are letters (A-Z and a-z), digits (0-9), space, and .,'&#-.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "textarea_optional"){
    if ((regExpTextareaOptional.test(formElementValue)) && (!regExpInvalidCharacters.test(formElementValue))){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please enter only valid characters or make the field empty. Valid characters are letters (A-Z and a-z), digits (0-9), space, and .,'&#-.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "inputText_quantity"){
    if (regExpQuantity.test(formElementValue)){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please enter a valid quantity.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "inputText_quantityOptional"){
    if (regExpQuantityOptional.test(formElementValue)){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please enter a valid quantity or make the field empty.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "selectOption_state"){
    if (regExpState.test(formElementValue)){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please select a state.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "inputText_zipCode"){
    if (regExpZipCode.test(formElementValue)){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please enter a valid zip code.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "inputTel_phoneNumber"){
    if (regExpPhoneNumber.test(formElementValue)){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please enter a valid phone number.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "inputText_creditCardNumber"){
    if (regExpCreditCardNumber.test(formElementValue)){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please enter a valid card number.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "selectOption_creditCardExpirationMonth"){
    if (regExpCreditCardExpirationMonth.test(formElementValue)){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please select an expiration month.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "selectOption_creditCardExpirationYear"){
    if (regExpCreditCardExpirationYear.test(formElementValue)){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please select an expiration year.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "inputText_creditCardSecurityCode"){
    if (regExpCreditCardSecurityCode.test(formElementValue)){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please enter a valid security code.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "inputEmail_emailAddress"){
    if (regExpEmailAddress.test(formElementValue)){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please enter a valid email address.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "inputEmail_emailAddressConfirm"){
    var shippingEmailAddress = document.getElementById("shippingEmailAddressId");
    shippingEmailAddress = shippingEmailAddress.value;
    if (shippingEmailAddress === formElementValue){
     ValidateFormElementsUtil.unhighlightValidFormElement(formElement);
    } else {
     alert("Please confirm email address.");
     ValidateFormElementsUtil.highlightInvalidFormElement(formElement);
     return false;
    }
   } else if (formElementValidationType === "doNotValidateMe"){
    // Yes, do nothing.
   } else {
    alert("There was a problem processing the request. Error report - File: shopping_library.js. Object: ValidateFormElementsUtil. Method: validateFormElements(). Line: 260. Issue: formElementValidationType value not matched by if else if conditionals.");
   }
  }
 return true;
 }
};
