/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascripts/lwc/javascript_shopping_cart_spa.js.
 * Purpose: Primary JavaScript for JavaScript Shopping Cart Single Page Application (JavaScript Shopping Cart SPA).
 * Used in: javascript_shopping_cart_spa.php.
 * Last reviewed/updated: 10 Mar 2018.
 * Published: 18 Mar 2014.
 * Obtrusive. Add To Cart buttons, Shopping Navbars, and some other buttons register JavaScript event handlers in HTML via HTML onclick attribute.
 * Web browser support: IE11+, ED12+, FF6+, SM2.3+, SF5.1+, CH13+, OP11.50+, VV1+, which corresponds to JavaScript dataset property support (IE11+, ED12+, FF6+, SM2.3+, SF5.1+), CSS checkbox and radio button support (CH13+), and JavaScript classList property support (SF5.1+, OP11.50+). Confirmed 07 Jun 17.
 * Objects: ShoppingCartUtil.
 * NOTE:
 * Requires shopping_library.js.
 * itemsDb added 13 Aug 2015.
 * deliveryMethodsDb added 23 Jan 2017.
 * HTML web page sections (web page section containerIds):
 * 1.) Shopping (id="shoppingContainerId")
 * 2.) Shopping Cart (id="shoppingCartContainerId")
 * 3a.) Checkout: Shipping (Shipping for short) (id="shippingContainerId")
 * 3b.) Checkout: Billing (Billing for short) (id="billingContainerId")
 * 3c.) Checkout: Review Order (Review Order for short) (id="reviewOrderContainerId")
 * 3d.) Checkout: Order Confirmation (Order Confirmation for short) (id="orderConfirmationContainerId")
 * These sections (containerIds) correspond to shopping nav bar near top each section. 2.) Capital letter indicates reference to web page sections. For example, Shopping Cart means Shopping Cart web page section, and shopping cart means the shopping cart itself.
 * ISSUES:
 * 1.) Closed. CH8+ would be supported if checkboxes and radio buttons did not require CH13+. This issue not considered important and, therefore, is closed. */

/* -------------------- JAVASCRIPT OBJECT DEFINITIONS -------------------- */

/* ---------- NEW JAVASCRIPT OBJECT DEFINITION ---------- */

var ShoppingCartUtil = {
 // ---------- ITEMS TO SHOP FROM DATABASE ----------
 itemsDb: [
  {
   itemPriKey: 1,
   itemName: "Intel Core i3-4130 Processor (3MB Cache, 3.40GHz) Haswell LGA1150 22nm Boxed",
   itemPriceEach: 117.00
  },
  {
   itemPriKey: 2,
   itemName: "Intel Core i3-4150 Processor (3MB Cache, 3.50GHz) Haswell LGA1150 22nm Boxed",
   itemPriceEach: 117.00
  },
  {
   itemPriKey: 3,
   itemName: "Intel Core i3-4160 Processor (3MB Cache, 3.60GHz) Haswell LGA1150 22nm Boxed",
   itemPriceEach: 117.00
  },
  {
   itemPriKey: 4,
   itemName: "Intel Core i3-4170 Processor (3MB Cache, 3.70GHz) Haswell LGA1150 22nm Boxed",
   itemPriceEach: 117.00
  },
  {
   itemPriKey: 5,
   itemName: "Intel Core i3-4330 Processor (4MB Cache, 3.50GHz) Haswell LGA1150 22nm Boxed",
   itemPriceEach: 147.00
  },
  {
   itemPriKey: 6,
   itemName: "Intel Core i3-4340 Processor (4MB Cache, 3.60GHz) Haswell LGA1150 22nm Boxed",
   itemPriceEach: 157.00
  },
  {
   itemPriKey: 7,
   itemName: "Intel Core i3-4350 Processor (4MB Cache, 3.60GHz) Haswell LGA1150 22nm Boxed",
   itemPriceEach: 147.00
  },
  {
   itemPriKey: 8,
   itemName: "Intel Core i3-4360 Processor (4MB Cache, 3.70GHz) Haswell LGA1150 22nm Boxed",
   itemPriceEach: 147.00
  },
  {
   itemPriKey: 9,
   itemName: "Intel Core i3-4370 Processor (4MB Cache, 3.80GHz) Haswell LGA1150 22nm Boxed",
   itemPriceEach: 147.00
  }
 ],
 // ---------- DELIVERY METHODS DATABASE ----------
 deliveryMethodsDb: [
  {
   deliveryMethodPriKey: 1,
   deliveryMethodName: "Free Super Saver (4 - 7 Business Days)",
   deliveryMethodPriceEach: 0.00
  },
  {
   deliveryMethodPriKey: 2,
   deliveryMethodName: "3 Business Days",
   deliveryMethodPriceEach: 5.99
  },
  {
   deliveryMethodPriKey: 3,
   deliveryMethodName: "2 Business Days",
   deliveryMethodPriceEach: 19.99
  },
  {
   deliveryMethodPriKey: 4,
   deliveryMethodName: "Next Business Day",
   deliveryMethodPriceEach: 29.99
  }
 ],
 // ---------- METHODS USED IN MULTIPLE SECTIONS ----------
 // Get reference to elements for ShoppingCartUtil.navTo().
 shoppingContainer: document.getElementById("shoppingContainerId"),
 shoppingCartContainer: document.getElementById("shoppingCartContainerId"),
 shippingContainer: document.getElementById("shippingContainerId"),
 billingContainer: document.getElementById("billingContainerId"),
 reviewOrderContainer: document.getElementById("reviewOrderContainerId"),
 orderConfirmationContainer: document.getElementById("orderConfirmationContainerId"),
 shoppingCartSummaryScrollIntoViewTarget: document.getElementById("shoppingCartSummaryScrollIntoViewTargetId"),
 // Method: ShoppingCartUtil.navTo().
 // Purpose: Handler/called by; 1.) Shopping Cart Summary button, 2.) shopping nav bar, 3.) various "Go To XYZ"/"Return To XYZ" buttons, 4.) (edit) hyperlinks in Review Order. Display/hide sections to provide navigation from one section to another.
 navTo: function(sectionToDisplay){
  var sectionArray = ["Shopping", "Shopping Cart", "Shipping", "Billing", "Review Order", "Order Confirmation"];
  var containerArray = [ShoppingCartUtil.shoppingContainer, ShoppingCartUtil.shoppingCartContainer, ShoppingCartUtil.shippingContainer, ShoppingCartUtil.billingContainer, ShoppingCartUtil.reviewOrderContainer, ShoppingCartUtil.orderConfirmationContainer];
  var sectionToDisplayIndex = sectionArray.indexOf(sectionToDisplay);
  var containerArrayLength = containerArray.length;
  var containerToDisplayIndex = sectionToDisplayIndex;
  for (var i = 0; i < containerArrayLength; i++){
   var container = containerArray[i];
   if (i === containerToDisplayIndex){
    container.classList.remove("display-none");
   } else {
    container.classList.add("display-none");
   }
  }
  // Position ShoppingCartUtil.shoppingCartSummaryScrollIntoViewTarget to top of viewport.
  ShoppingCartUtil.shoppingCartSummaryScrollIntoViewTarget.scrollIntoView(true);
 },
 // ---------- PROPERTIES FIRST USED IN SHOPPING AND SHOPPING CART ----------
 itemNameArray: [],
 itemPriceEachArray: [],
 itemQuantityArray: [],
 allItemsQuantity: 0,
 allItemsPrice: 0,
 allItemsPriceAsStringCurrency: "0.00",
 deliveryMethod: "",
 deliveryMethodPriceEach: 0,
 deliveryMethodPriceEachAsStringCurrency: "0.00",
 allItemsAndDeliveryMethodPrice: 0,
 allItemsAndDeliveryMethodPriceAsStringCurrency: "0.00",
 // ---------- METHODS USED IN SHOPPING ANG SHOPPING CART ----------
 // Method: ShoppingCartUtil.updateShoppingCartSummary().
 // Purpose: Handler for windows load event, which is load the web page. Called by ShoppingCartUtil.addItemToCart(), which is handler for Add To Cart button click event, which is click Add To Cart button in Shopping. Called by ShoppingCartUtil.updateShoppingCartQuantities(), which is: 1.) handler for ShoppingCartUtil.shoppingCartUpdateQuantitiesBtn click event, which is click Update Quantities button in Shopping Cart; 2.) called by ShoppingCartUtil.processShoppingCart_checkout(), which is handler for ShoppingCartUtil.processShoppingCart_checkoutBtn click event, which is click Checkout button in Shopping Cart. Called by ShoppingCartUtil.shoppingCartAddDeliveryMethod(), which is handler for ShoppingCartUtil.shoppingCartAddDeliveryMethodRadioBtn change event, which is check a Delivery Method radio button in Shopping Cart. From item arrays, get/calculate/generate/set values on properties required by Shopping Cart Summary, Shopping Cart, and Review Order. Generate and write Shopping Cart Summary. Write allItemsAndDeliveryMethodPriceAsStringCurrency in Shopping Cart and Review Order.
 // NOTE: Shopping Cart Summary is located top right above shopping nav bar throughout app and displays: Shopping Cart: $0.00 (0 items) + $0.00 shipping = $0.00 total. DOM object representing shopping cart summary is shoppingCartSummary, which is nested in DOM interactive object shoppingCartSummaryBtn.
 updateShoppingCartSummary: function(){
  // Because of use of +=, reset property values each time before run updateShoppingCartSummary().
  ShoppingCartUtil.allItemsQuantity = 0;
  ShoppingCartUtil.allItemsPrice = 0;
  // From item arrays, get/calculate/generate/set values on properties as required by Shopping Cart Summary, Shopping Cart, and Review Order.
  // Get reference to number of different items (not number of items) selected.
  var itemArrayLength = ShoppingCartUtil.itemNameArray.length;
  for (var i = 0; i < itemArrayLength; i++){
   var itemPriceEach = ShoppingCartUtil.itemPriceEachArray[i]; // number.
   var itemQuantity = ShoppingCartUtil.itemQuantityArray[i]; // number.
   var itemPriceLine = itemPriceEach * itemQuantity; // number.
   ShoppingCartUtil.allItemsQuantity += itemQuantity; // number.
   ShoppingCartUtil.allItemsPrice += itemPriceLine; // number.
  }
  // For number literals where decimal places as cents (.00) could be dropped, convert number to string with two decimal places added as if representing currency. ConvertNumberToStringCurrencyUtil.convertNumberToStringCurrency() in shopping_library.js.
  ShoppingCartUtil.allItemsPriceAsStringCurrency = ConvertNumberToStringCurrencyUtil.convertNumberToStringCurrency(ShoppingCartUtil.allItemsPrice);
  ShoppingCartUtil.deliveryMethodPriceEachAsStringCurrency = ConvertNumberToStringCurrencyUtil.convertNumberToStringCurrency(ShoppingCartUtil.deliveryMethodPriceEach); // NOTE: this for possible future use as current Delivery Method prices end in cents 99, not cents 00.
  ShoppingCartUtil.allItemsAndDeliveryMethodPrice = (ShoppingCartUtil.allItemsPrice + ShoppingCartUtil.deliveryMethodPriceEach);
  ShoppingCartUtil.allItemsAndDeliveryMethodPriceAsStringCurrency = ConvertNumberToStringCurrencyUtil.convertNumberToStringCurrency(ShoppingCartUtil.allItemsAndDeliveryMethodPrice);
  // Generate and write shoppingCartSummary.
  var shoppingCartSummary = document.getElementById("shoppingCartSummaryId");
  shoppingCartSummary.innerHTML = "<span class='fa fa-shopping-cart shopping-cart-summary-fa'></span>$" + ShoppingCartUtil.allItemsPriceAsStringCurrency + " (" + ShoppingCartUtil.allItemsQuantity + " items) + $" + ShoppingCartUtil.deliveryMethodPriceEachAsStringCurrency + " shipping = $" + ShoppingCartUtil.allItemsAndDeliveryMethodPriceAsStringCurrency + " total."; // NOTE: does not indicate if no shipping selected or free shipping selected.
  // Write allItemsAndDeliveryMethodPriceAsStringCurrency in Shopping Cart and Review Order.
  var shoppingCartGrandTotalCell = document.getElementById("shoppingCartGrandTotalCellId");
  shoppingCartGrandTotalCell.innerHTML = "$" + ShoppingCartUtil.allItemsAndDeliveryMethodPriceAsStringCurrency;
  var reviewOrderGrandTotalContainer = document.getElementById("reviewOrderGrandTotalContainerId");
  reviewOrderGrandTotalContainer.innerHTML = "$" + ShoppingCartUtil.allItemsAndDeliveryMethodPriceAsStringCurrency + ".";
 },
 // Method: ShoppingCartUtil.isShoppingCartFull().
 // Purpose: Called by ShoppingCartUtil.displayShoppingCartEmptyOrFull(). Return whether or not shopping cart is full (ie, has an item been selected?). If an item has been selected, then shopping cart is full and return boolean true. If an item has not been selected, then shopping cart is empty (ie, not full) and return boolean false.
 isShoppingCartFull: function(){
  // Get reference to number of different items (not number of items) selected.
  var itemArrayLength = ShoppingCartUtil.itemNameArray.length;
  if (itemArrayLength === 0){
   return false; // Shopping cart empty (ie, no item selected). Return boolean false.
  } else {
   return true; // Shopping cart full (ie, item selected). Return boolean true.
  }
 },
 // Method: ShoppingCartUtil.displayShoppingCartEmptyOrFull().
 // Purpose: Called by ShoppingCartUtil.addItemToCart(), which is handler for Add To Cart button click event, which is click Add To Cart button in Shopping. Called by ShoppingCartUtil.goToShoppingCart(), which is: 1.) handler for ShoppingCartUtil.shoppingCartSummaryBtn click event, which is click Shopping Cart Summary button; and 2.) handler for ShoppingCartUtil.shoppingGoToShoppingCartBtn click event, which is click Shopping Cart button in Shopping. Called by ShoppingCartUtil.updateShoppingCartQuantities(), which is: 1.) handler for ShoppingCartUtil.shoppingCartUpdateQuantitiesBtn click event, which is click Update Quantities button in Shopping Cart; and 2.) called by ShoppingCartUtil.processShoppingCart_checkout(), which is handler for ShoppingCartUtil.processShoppingCart_checkoutBtn click event, which is click Checkout button in Shopping Cart. Run ShoppingCartUtil.isShoppingCartFull(). If shopping cart empty (ie, no item selected), display shoppingCartEmptyReportContainer and hide shoppingCartFullReportContainer. If shopping cart full (ie, item selected), hide shoppingCartEmptyReportContainer and display shoppingCartFullReportContainer. Return answers question: is shopping cart full? (ie, has an item been selected?). Return used by and ShoppingCartUtil.processShoppingCart_checkout(), not ShoppingCartUtil.goToShoppingCart().
 // NOTE: does not run ShoppingCartUtil.navTo("Shopping Cart").
 displayShoppingCartEmptyOrFull: function(){
  // Get reference to element corresponding to shoppingCartEmptyReportContainer and shoppingCartFullReportContainer.
  var shoppingCartEmptyReportContainer = document.getElementById("shoppingCartEmptyReportContainerId");
  var shoppingCartFullReportContainer = document.getElementById("shoppingCartFullReportContainerId");
  // Run ShoppingCartUtil.isShoppingCartFull().
  var isShoppingCartFullResult = ShoppingCartUtil.isShoppingCartFull();
  if (isShoppingCartFullResult === false){
   // Shopping cart empty (ie, no item selected).
   // Display shoppingCartEmptyReportContainer and hide shoppingCartFullReportContainer.
   shoppingCartEmptyReportContainer.classList.remove("display-none");
   shoppingCartFullReportContainer.classList.add("display-none");
  } else {
   // Shopping cart full (ie, item selected).
   // Hide shoppingCartEmptyReportContainer and display shoppingCartFullReportContainer.
   shoppingCartEmptyReportContainer.classList.add("display-none");
   shoppingCartFullReportContainer.classList.remove("display-none");
  }
 },
 // Method: ShoppingCartUtil.writeLineItemReports().
 // Purpose: Called by ShoppingCartUtil.addItemToCart(), which is handler for Add To Cart button click event, which is click Add To Cart button in Shopping. Called by ShoppingCartUtil.updateShoppingCartQuantities(), which is: 1.) handler for ShoppingCartUtil.shoppingCartUpdateQuantitiesBtn click event, which is click Update Quantities button in Shopping Cart; and 2.) called by ShoppingCartUtil.processShoppingCart_checkout(), which is handler for ShoppingCartUtil.processShoppingCart_checkoutBtn click event, which is click Checkout button in Shopping Cart. From item arrays, get/calculate/generate/set values on variables/properties as required by shoppingCartLineItemsReport and reviewOrderLineItemsReport that have not already been set on properties in ShoppingCartUtil.updateShoppingCartSummary(). Generate and write shoppingCartLineItemsReport in Shopping Cart. Generate and write reviewOrderLineItemsReport in Review Order.
 // NOTE: 1.) ShoppingCartUtil.writeLineItemReports() does not determine/care if shopping cart is full/empty. 2.) ShoppingCartUtil.updateShoppingCartSummary() sets values on allItemsQuantity and allItemsPriceAsStringCurrency properties.
 writeLineItemReports: function(){
  var itemName = "";
  var itemPriceEach = 0;
  var itemQuantity = 0;
  var itemPriceLine = 0;
  var itemPriceEachAsStringCurrency = "0.00";
  var itemPriceLineAsStringCurrency = "0.00";
  var shoppingCartLineItems = ""; // Variable to hold shopping cart report line items. Note: assigning value resets it each time  writeLineItemReports is run.
  var reviewOrderLineItems = ""; // Variable to hold review order report line items. Note: assigning value resets it each time  writeLineItemReports is run.
  // From item arrays, get/calculate/generate/set values on variables/properties as required by shoppingCartLineItemsReport and reviewOrderLineItemsReport that are not already set on properties in ShoppingCartUtil.updateShoppingCartSummary().
  // Get reference to number of different items (not number of items) selected.
  var itemArrayLength = ShoppingCartUtil.itemNameArray.length;
  for (var i = 0; i < itemArrayLength; i++){
   itemName = ShoppingCartUtil.itemNameArray[i];
   itemPriceEach = ShoppingCartUtil.itemPriceEachArray[i]; // number.
   itemQuantity = ShoppingCartUtil.itemQuantityArray[i]; // number.
   itemPriceLine = itemPriceEach * itemQuantity; // number.
   // For number literals where decimal places as cents (.00) could be dropped, convert number to string with two decimal places added as if representing currency. ConvertNumberToStringCurrencyUtil.convertNumberToStringCurrency() in shopping_library.js.
   itemPriceEachAsStringCurrency = ConvertNumberToStringCurrencyUtil.convertNumberToStringCurrency(itemPriceEach);
   itemPriceLineAsStringCurrency = ConvertNumberToStringCurrencyUtil.convertNumberToStringCurrency(itemPriceLine);
   // Generate shoppingCartLineItemsReport line items.
   shoppingCartLineItems += "<tr>" +
    "<td class='text-align-center'><label><input type='checkbox' value='" + itemName + "' name='" + itemName + "' id='removeItemCheckboxId" + i + "' data-validationtype='doNotValidateMe' /><span>&#10003;</span></label></td>" +
    "<td>" + itemName + "</td>" +
    "<td class='text-align-center'><input type='text' size='2' maxlength='2' value='" + itemQuantity + "' name='" + itemName + "' id='itemQuantityFieldId" + i + "' data-shoppingitempriceeach='" + itemPriceEachAsStringCurrency + "' data-validationtype='inputText_quantityOptional' /></td>" +
    "<td class='text-align-right'>" + "$" + itemPriceEachAsStringCurrency + "</td>" +
    "<td class='text-align-right'>" + "$" + itemPriceLineAsStringCurrency + "</td>" +
   "</tr>";
   // Generate reviewOrderLineItemsReport line items.
   reviewOrderLineItems += itemName + ". $" + itemPriceEachAsStringCurrency + "/each. Quantity: " + itemQuantity + ". Item Total: $" + itemPriceLineAsStringCurrency + " (" + itemQuantity + " items).<br />";
   // Generate and write shoppingCartLineItemsReport.
   // Get reference to element corresponding to shoppingCartLineItemsReportFormContainer.
   var shoppingCartLineItemsReportFormContainer = document.getElementById("shoppingCartLineItemsReportFormContainerId");
   shoppingCartLineItemsReportFormContainer.innerHTML = "<table class='shopping-cart-forms-table'>" +
    "<tr name='shoppingCartItemsFormTable' id='shoppingCartItemsFormTableId'>" +
     "<th>Remove</th>" +
     "<th>Product</th>" +
     "<th>Quantity</th>" +
     "<th>Price Each</th>" +
     "<th>Item Total</th>" +
    "</tr>" +
    shoppingCartLineItems +
    "<tr>" +
     "<td colspan='4' class='text-align-right'><b>Subtotal:</b></td>" +
     "<td name='shoppingCartSubtotalCell' id='shoppingCartSubtotalCellId' class='shopping-cart-forms-table-total-cell'> $" + ShoppingCartUtil.allItemsPriceAsStringCurrency + "</td>" +
    "</tr>" +
   "</table>";
   // Generate and write reviewOrderLineItemsReport.
   // Get reference to element corresponding to reviewOrderLineItemsReportContainer.
   var reviewOrderLineItemsReportContainer = document.getElementById("reviewOrderLineItemsReportContainerId");
   reviewOrderLineItemsReportContainer.innerHTML = reviewOrderLineItems + "Subtotal: $" + ShoppingCartUtil.allItemsPriceAsStringCurrency + " (" + ShoppingCartUtil.allItemsQuantity + " items).";
  }
 },
 // ---------- METHODS USED IN SHOPPING ----------
 // Method: ShoppingCartUtil.addItemToCart().
 // Purpose: Handler for Add To Cart button click event, which is click Add To Cart button in Shopping. Push selected item to item arrays. Run ShoppingCartUtil.updateShoppingCartSummary(). Run ShoppingCartUtil.writeLineItemReports(). Run ShoppingCartUtil.displayShoppingCartEmptyOrFull(). Run ShoppingCartUtil.navTo("Shopping Cart").
 // NOTE: Item arrays serve as selected items database with itemName in itemNameArray serving as unique key. If item not previously selected, then itemName is not in itemNameArray, and, therefore, push itemName into itemNamesArray, push itemPriceEach into itemPriceEachArray, and push item quantity 1 into itemQuantityArray. If item previously selected, then itemName is in itemNameArray, and, therefore, increment item quantity value by 1 in itemQuantityArray.
 addItemToCart: function(itemName){
  var itemsDbIndex = 0;
  // Use itemName on itemsDb to determine item index in itemsDb.
  for (var i = 0; i < ShoppingCartUtil.itemsDb.length; i++){
   // Determine if itemsDb array object i has an itemName property with itemName value.
   if (ShoppingCartUtil.itemsDb[i].itemName === itemName){
    // itemsDb array object i has an itemName property with itemName value.
    itemsDbIndex = i;
   }
  }
  // Use itemsDbIndex on itemsDb to get item price each.
  var itemPriceEach = ShoppingCartUtil.itemsDb[itemsDbIndex].itemPriceEach;
  // Use itemName on itemNameArray to determine if item previously selected.
  if (ShoppingCartUtil.itemNameArray.indexOf(itemName) === -1){
   // Item not previously selected. Push item values into the item arrays.
   ShoppingCartUtil.itemNameArray.push(itemName);
   ShoppingCartUtil.itemPriceEachArray.push(itemPriceEach);
   ShoppingCartUtil.itemQuantityArray.push(1);
  } else {
   // Item previously selected. Increment item quantity value by 1 in itemQuantityArray.
   // Use itemName on itemNameArray to determine item index in item arrays.
   var itemIndex = ShoppingCartUtil.itemNameArray.indexOf(itemName);
   // Use itemIndex on itemQuantityArrays to get item current quantity.
   var itemQuantity = ShoppingCartUtil.itemQuantityArray[itemIndex]; // number.
   // Increment item quantity value by 1 and set on itemQuantityArray.
   itemQuantity += 1;
   ShoppingCartUtil.itemQuantityArray[itemIndex] = itemQuantity;
  }
  // Run ShoppingCartUtil.updateShoppingCartSummary().
  ShoppingCartUtil.updateShoppingCartSummary();
  // Run ShoppingCartUtil.displayShoppingCartEmptyOrFull().
  ShoppingCartUtil.displayShoppingCartEmptyOrFull();
  // Run ShoppingCartUtil.writeLineItemReports().
  ShoppingCartUtil.writeLineItemReports();
  // Run ShoppingCartUtil.navTo("Shopping Cart").
  ShoppingCartUtil.navTo("Shopping Cart");
 },
 // Method: ShoppingCartUtil.goToShoppingCart().
 // Purpose: Handler for ShoppingCartUtil.shoppingCartSummaryBtn click event, which is click Shopping Cart Summary button. Handler for ShoppingCartUtil.shoppingGoToShoppingCartBtn click event, which is click Shopping Cart button in Shopping. Run ShoppingCartUtil.displayShoppingCartEmptyOrFull(). Run ShoppingCartUtil.navTo("Shopping Cart").
 goToShoppingCart: function(){
  // Run ShoppingCartUtil.displayShoppingCartEmptyOrFull().
  ShoppingCartUtil.displayShoppingCartEmptyOrFull();
  // Run ShoppingCartUtil.navTo("Shopping Cart").
  ShoppingCartUtil.navTo("Shopping Cart");
 },
 // ---------- METHODS USED IN SHOPPING CART ----------
 // Method: ShoppingCartUtil.updateShoppingCartQuantities().
 // Purpose: Handler for ShoppingCartUtil.shoppingCartUpdateQuantitiesBtn click event, which is click Update Quantities button in Shopping Cart. Called by ShoppingCartUtil.processShoppingCart_checkout(), which is handler for ShoppingCartUtil.processShoppingCart_checkoutBtn click event, which is click Checkout button in Shopping Cart. Validate shoppingCartLineItemsReport quantity fields. If validation complete successfully, continue. If remove item checkbox is checked, or item quantity field is changed to zero, remove item from item arrays. Otherwise, regardless if quantity fields were changed or not, set quantity values on corresponding items in itemQuantityArray. Run ShoppingCartUtil.updateShoppingCartSummary(). Run ShoppingCartUtil.displayShoppingCartEmptyOrFull(). Run is ShoppingCartUtil.isShoppingCartFull(). If ShoppingCartUtil.isShoppingCartFull() return false, shopping cart empty (ie, no item selected). ShoppingCartUtil.displayShoppingCartEmptyOrFull() displays proper alert if shopping cart empty and there is nothing to do. If ShoppingCartUtil.isShoppingCartFull() return true, shopping cart full (ie, item selected). Run ShoppingCartUtil.writeLineItemReports().
 // NOTE: Workaround for splice() method causing item array index to change. Before first splice, item elementId# and item array[index#] are same value. For example, before first splice, item elementId0 corresponds to item array[0]. After first splice, however, item elementId# is one greater than item array[index#]. For example, after splicing elementId0 from item arrays, item elementId1 occupies item array[0], not array[1]. And after second splice, item elementId# is two greater than its corresponding item array[index#], etc. Therefore, for all splices, regardless if first or nth, use item array[index#], not item elementId + for loop var i, as splice method first argument. In other words, yes use i++ and item elementById + for loop var i to iterate to next array item, but do not use for loop var i as splice method first argument. Instead, on element corresponding to remove item checkbox and/or item quantity field, assign itemName (which exists in itemNamesArray and as serves as item arrays database unique key) as HTML attribute value. Then use getElementById + for loop var i to get reference to the element, use elementReference.attribute to get itemName, use indexof(itemName) on itemNameArray to get item array[index#], and use item array[index#], not for loop var i, as splice method first argument.
 updateShoppingCartQuantities: function(){
  // Get reference to form containing shoppingCartLineItemsReport. shoppingCartLineItemsReport includes remove checkboxes (do not validate) and item quantity fields (validate).
  var formToValidate = document.getElementById("shoppingCartLineItemsReportFormContainerId"); // Alternate: var formToValidate = document.forms["shoppingCartLineItemsReportFormContainerId"];
  // Send shoppingCartLineItemsReportForm to ValidateFormElementsUtil.validateFormElements() in shopping_library.js for validation.
  var formValidatationResult = ValidateFormElementsUtil.validateFormElements(formToValidate);
  // If shoppingCartLineItemsReportForm validates, continue.
  if (formValidatationResult){
   var itemArrayLength = ShoppingCartUtil.itemNameArray.length;
   for (var i = 0; i < itemArrayLength; i++){
    // Get reference to element corresponding to each item's remove item checkbox.
    var itemReferenceByRemoveItemCheckbox = document.getElementById("removeItemCheckboxId" + i);
    // Determine if checkbox is checked from itemReferenceByRemoveItemCheckbox.
    var isRemoveItemCheckboxChecked = itemReferenceByRemoveItemCheckbox.checked; // To uncheck, use itemReferenceByRemoveItemCheckbox.checked = false.
    // Get reference to element corresponding to each item's quantity field.
    var itemReferenceByItemQuantityField = document.getElementById("itemQuantityFieldId" + i);
    // Get itemQuantity from itemReferenceByItemQuantityField.
    var itemQuantity = itemReferenceByItemQuantityField.value; // string. If field is empty, empty string "".
    // Convert itemQuantity string of numbers to equivalent number type. Converts empty string "" to number 0. Note: this correctly handles if quantity field is blank/empty.
    itemQuantity = Number(itemQuantity);
    // If remove item checkbox is checked, or item quantity field is changed to zero, remove item from item arrays.
    // Get itemName from reference to element corresponding to remove item checkbox (itemReferenceByRemoveItemCheckbox) or item quantity field (itemReferenceByItemQuantityField).
    var itemName = itemReferenceByRemoveItemCheckbox.name; // Alternates: itemReferenceByRemoveItemCheckbox.value, itemReferenceByItemQuantityField.name.
    // Use indexof(itemName) on itemNameArray to get item array[index#].
    var itemArrayIndex = ShoppingCartUtil.itemNameArray.indexOf(itemName);
    if ((itemQuantity === 0) || (isRemoveItemCheckboxChecked === true)){
     // Use itemArrayIndex, not for loop var i, as splice method first argument.
     ShoppingCartUtil.itemNameArray.splice(itemArrayIndex,1);
     ShoppingCartUtil.itemPriceEachArray.splice(itemArrayIndex,1);
     ShoppingCartUtil.itemQuantityArray.splice(itemArrayIndex,1);
    // Otherwise, regardless if quantity field was changed, set quantity value on corresponding item in itemQuantityArray.
    } else {
     // Set shoppingItemQnt on shoppingItemQuantitiesArray.
     // Similar to splice, and in case of a splice, use itemArrayIndex, not for loop var i, here.
     ShoppingCartUtil.itemQuantityArray[itemArrayIndex] = itemQuantity;
    }
   }
   // Run ShoppingCartUtil.updateShoppingCartSummary().
   ShoppingCartUtil.updateShoppingCartSummary();
   // Run ShoppingCartUtil.displayShoppingCartEmptyOrFull().
   ShoppingCartUtil.displayShoppingCartEmptyOrFull();
   // Run is ShoppingCartUtil.isShoppingCartFull(). If ShoppingCartUtil.isShoppingCartFull() return true, shopping cart full (ie, item selected). Run ShoppingCartUtil.writeLineItemReports().
   var isShoppingCartFullResult = ShoppingCartUtil.isShoppingCartFull();
   if (isShoppingCartFullResult){
    ShoppingCartUtil.writeLineItemReports();
    return true; // To ShoppingCartUtil.processShoppingCart_checkout().
   } else {
    return false; // To ShoppingCartUtil.processShoppingCart_checkout().
   }
  }
  else {
   return false; // To ShoppingCartUtil.processShoppingCart_checkout().
  }
 },
 // Method: ShoppingCartUtil.shoppingCartAddDeliveryMethod().
 // Purpose: Handler for ShoppingCartUtil.shoppingCartAddDeliveryMethodRadioBtn change event, which is check a Delivery Method radio button in Shopping Cart. Get and set value on properties. Run updateShoppingCartSummary(). Display deliveryMethodPriceEachAsStringCurrency in Shopping Cart. Display deliveryMethod in Review Order.
 // NOTE: updateShoppingCartSummary() displays allItemsAndDeliveryMethodPriceAsStringCurrency in Shopping Cart and in Review Order section.
 shoppingCartAddDeliveryMethod: function(event){
  var deliveryMethodDbIndex = 0;
  // In case Delivery Method radio buttons are highlighted, remove highlight.
  for (var i = 1; i <= 4; i++){
   // Get reference to the 4 delivery method radio buttons.
   var deliveryMethodItem = document.getElementById("shoppingCartDeliveryMethodCssRadioBtn" + i + "Id");
   deliveryMethodItem.classList.remove("highlight-invalid-from-element");
  }
  // Get and set values on properties.
  var deliveryMethod = event.target; // [object HTMLInputElement]
  ShoppingCartUtil.deliveryMethod = deliveryMethod.value;
  // Use deliveryMethod on deliveryMethodsDb to determine delivery method index in deliveryMethodsDb.
  for (var i = 0; i < ShoppingCartUtil.deliveryMethodsDb.length; i++){
   // Determine if deliveryMethodsDb array object i has a deliveryMethodName property with deliveryMethod value.
   if (ShoppingCartUtil.deliveryMethodsDb[i].deliveryMethodName === ShoppingCartUtil.deliveryMethod){
    // deliveryMethodsDb array object i has a deliveryMethod property with deliveryMethod value.
    deliveryMethodDbIndex = i;
   }
  }
  // Use deliveryMethodDbIndex on deliveryMethodsDb to get delivery method price each.
  ShoppingCartUtil.deliveryMethodPriceEach = ShoppingCartUtil.deliveryMethodsDb[deliveryMethodDbIndex].deliveryMethodPriceEach;
  // For number literals where decimal places for cents (.00) could be dropped, convert number to string with two decimal places added as if representing currency. ConvertNumberToStringCurrencyUtil.convertNumberToStringCurrency() in /public_html/javascripts/lwc/shopping_library.js.
  ShoppingCartUtil.deliveryMethodPriceEachAsStringCurrency = ConvertNumberToStringCurrencyUtil.convertNumberToStringCurrency(ShoppingCartUtil.deliveryMethodPriceEach);
  // Run updateShoppingCartSummary().
  ShoppingCartUtil.updateShoppingCartSummary();
  // Display deliveryMethodPriceEachAsStringCurrency in Shopping Cart.
  var shoppingCartShippingPriceCell = document.getElementById("shoppingCartShippingPriceCellId");
  shoppingCartShippingPriceCell.innerHTML = "$" + ShoppingCartUtil.deliveryMethodPriceEachAsStringCurrency;
  // Display deliveryMethod in Review Order section.
  var reviewOrderDeliveryMethodReportContainer = document.getElementById("reviewOrderDeliveryMethodReportContainerId");
  reviewOrderDeliveryMethodReportContainer.innerHTML = ShoppingCartUtil.deliveryMethod + ".<br />" + 
   "Shipping: $" + ShoppingCartUtil.deliveryMethodPriceEachAsStringCurrency + ".";
 },
 // Method: ShoppingCartUtil.processShoppingCart_checkout().
 // Purpose: Handler for ShoppingCartUtil.processShoppingCart_checkoutBtn click event, which is click Checkout button in Shopping Cart. Run ShoppingCartUtil.updateShoppingCartQuantities(). If ShoppingCartUtil.updateShoppingCartQuantities() return false, either form validation failed or shopping cart empty (ie, no item selected). Either way, do not check if Delivery Method selected, and do nothing. If ShoppingCartUtil.updateShoppingCartQuantities() return true, shopping cart full (ie, item selected). Check if Delivery Method selected. If delivery method not selected, alert user. If delivery method selected, run navTo("Shipping").
 // NOTE: shoppingCartAddDeliveryMethod() sets value on deliveryMethod property.
 processShoppingCart_checkout: function(){
  // Run ShoppingCartUtil.updateShoppingCartQuantities().
  var updateShoppingCartQuantitiesResult = ShoppingCartUtil.updateShoppingCartQuantities();
  // If ShoppingCartUtil.updateShoppingCartQuantities() return true, validation passed and shopping cart full (ie, item selected). Check if Delivery Method selected.
  if (updateShoppingCartQuantitiesResult){
   // If delivery method not selected, alert user.
   if (ShoppingCartUtil.deliveryMethod === ""){
    alert("Please select a delivery method.");
    // Highlight delivery methods. Does not appear in all web browsers.
    for (var i = 1; i <= 4; i++){
     // Get reference to the 4 delivery method radio buttons.
     var deliveryMethodItem = document.getElementById("shoppingCartDeliveryMethodCssRadioBtn" + i + "Id");
     deliveryMethodItem.classList.add("highlight-invalid-from-element");
    }
    // Get reference to delivery method heading.
    deliveryMethodHeading = document.getElementById("shoppingCartAddDeliveryMethodRadioBtnId");
    // Position delivery method heading to top of viewport.
    deliveryMethodHeading.scrollIntoView(true);
   // If delivery method selected, run navTo("Shipping").
   } else if (ShoppingCartUtil.shoppingDeliveryMethod !== ""){
    // Run navTo("Shipping").
    ShoppingCartUtil.navTo("Shipping");
   }
  }
//   else {
//    alert("Nothing to do. This else reached because either form validation failed or shopping cart empty (ie, no item selected). Because ValidateFormElementsUtil.validateFormElements() in shopping_library.js generates proper alert for form validation failed, and because ShoppingCartUtil.displayShoppingCartEmptyOrFull() displays proper alert if shopping cart empty (ie, no item selected), there is nothing to do here; hence, this else commented out.");
//   }
 },
 // ---------- PROPERTIES FIRST USED IN SHIPPING ----------
 shippingFirstName: "",
 shippingLastName: "",
 shippingFullName: "",
 shippingAddress: "",
 shippingAddress2: "",
 shippingCity: "",
 shippingState: "",
 shippingStateIndex: "", // IMPORTANT NOTE: requires using the same State select option form element throughout.
 shippingZipCode: "",
 shippingPhoneNumber: "",
 shippingEmailAddress: "",
 shippingEmailAddressConfirm: "",
 // ---------- METHODS USED IN SHIPPING ----------
 // Method: processShipping_goToBilling().
 // Purpose: Handler for Billing button. Send shippingForm to ValidateFormElementsUtil.validateFormElements() in /public_html/javascripts/lwc/shopping_library.js for validation. If shippingForm validates, set shippingForm values on shipping properties. Generate and display reviewOrderShippingInformationReport in Review Order Section. Run navTo("Billing"). In billingContainer is billingCreditCardForm with Cardholder Name field. Auto insert initial value into Cardholder Name field from either shipping properties or billing properties. Generate and display shippingInformationReport in Billing Section for user to decide if to use shipping information as billing information.
 processShipping_goToBilling: function(event){
  // Get reference to shippingForm.
  var formToValidate = document.getElementById("shippingFormId"); // Alternate: var formToValidate = document.forms["shippingFormId"];
  // Send shippingForm to ValidateFormElementsUtil.validateFormElements() in /public_html/javascripts/lwc/shopping_library.js for data validation.
  var formValidatationResult = ValidateFormElementsUtil.validateFormElements(formToValidate);
  // If shippingForm validates, continue.
  if (formValidatationResult){
  // Set shippingForm values on shipping properties.
   var shippingFirstName = document.getElementById("shippingFirstNameId");
   ShoppingCartUtil.shippingFirstName = shippingFirstName.value;
   var shippingLastName = document.getElementById("shippingLastNameId");
   ShoppingCartUtil.shippingLastName = shippingLastName.value;
   ShoppingCartUtil.shippingFullName = ShoppingCartUtil.shippingFirstName + " " + ShoppingCartUtil.shippingLastName;
   var shippingAddress = document.getElementById("shippingAddressId");
   ShoppingCartUtil.shippingAddress = shippingAddress.value;
   var shippingAddress2 = document.getElementById("shippingAddress2Id");
   ShoppingCartUtil.shippingAddress2 = shippingAddress2.value;
   var shippingCity = document.getElementById("shippingCityId");
   ShoppingCartUtil.shippingCity = shippingCity.value;
   var shippingState = document.getElementById("shippingStateId");
   ShoppingCartUtil.shippingState = shippingState.value;
   ShoppingCartUtil.shippingStateIndex = shippingState.selectedIndex;
   var shippingZipCode = document.getElementById("shippingZipCodeId");
   ShoppingCartUtil.shippingZipCode = shippingZipCode.value;
   var shippingPhoneNumber = document.getElementById("shippingPhoneNumberId");
   ShoppingCartUtil.shippingPhoneNumber = shippingPhoneNumber.value;
   var shippingEmailAddress = document.getElementById("shippingEmailAddressId");
   ShoppingCartUtil.shippingEmailAddress = shippingEmailAddress.value;
   var shippingEmailAddressConfirm = document.getElementById("shippingEmailAddressConfirmId");
   ShoppingCartUtil.shippingEmailAddressConfirm = shippingEmailAddressConfirm.value;
   // Generate and display reviewOrderShippingInformationReport in Review Order section.
   var reviewOrderShippingInformationReportContainer = document.getElementById("reviewOrderShippingInformationReportContainerId");
   if (ShoppingCartUtil.shippingAddress2 === ""){
    reviewOrderShippingInformationReportContainer.innerHTML = ShoppingCartUtil.shippingFullName + "<br />" +
    ShoppingCartUtil.shippingAddress + "<br />" +
    ShoppingCartUtil.shippingCity + ", " + ShoppingCartUtil.shippingState + " " + ShoppingCartUtil.shippingZipCode + "<br />" +
    ShoppingCartUtil.shippingPhoneNumber + "<br />" +
    ShoppingCartUtil.shippingEmailAddress;
   } else if (ShoppingCartUtil.shippingAddress2 !== ""){
    reviewOrderShippingInformationReportContainer.innerHTML = ShoppingCartUtil.shippingFullName + "<br />" +
    ShoppingCartUtil.shippingAddress + "<br />" +
    ShoppingCartUtil.shippingAddress2 + "<br />" +
    ShoppingCartUtil.shippingCity + ", " + ShoppingCartUtil.shippingState + " " + ShoppingCartUtil.shippingZipCode + "<br />" +
    ShoppingCartUtil.shippingPhoneNumber + "<br />" +
    ShoppingCartUtil.shippingEmailAddress;
   }
   // Run navTo("Billing").
   ShoppingCartUtil.navTo("Billing");
   // Auto insert initial value into Cardholder Name field from either shipping properties or billing properties.
   // If billingCreditCardholderName === "", get value to insert into Cardholder Name field from shipping properties shippingFullName.
   var billingCreditCardholderName = document.getElementById("billingCreditCardholderNameId");
   if (ShoppingCartUtil.billingCreditCardholderName === ""){
    billingCreditCardholderName.value = ShoppingCartUtil.shippingFullName;
   // If billingCreditCardholderName === !", get value to insert into Cardholder Name field from billing properties billingCreditCardholderName.
   } else if (ShoppingCartUtil.billingCreditCardholderName !== ""){
    billingCreditCardholderName.value = ShoppingCartUtil.billingCreditCardholderName;
   }
   // Generate and display shippingInformationReport in Billing Section for user to decide if to use shipping information as billing information.
   var shippingInformationReport = document.getElementById("shippingInformationReportContainerId");
   if (ShoppingCartUtil.shippingAddress2 === ""){
    shippingInformationReport.innerHTML = ShoppingCartUtil.shippingAddress + "<br />" +
    ShoppingCartUtil.shippingCity + ", " + ShoppingCartUtil.shippingState + " " + ShoppingCartUtil.shippingZipCode + "<br />" +
    ShoppingCartUtil.shippingPhoneNumber;
   } else if (ShoppingCartUtil.shippingAddress2 !== ""){
    shippingInformationReport.innerHTML = ShoppingCartUtil.shippingAddress + "<br />" +
    ShoppingCartUtil.shippingAddress2 + "<br />" +
    ShoppingCartUtil.shippingCity + ", " + ShoppingCartUtil.shippingState + " " + ShoppingCartUtil.shippingZipCode + "<br />" +
    ShoppingCartUtil.shippingPhoneNumber;
   }
  }
//   else {
//    alert("Nothing to do. This else reached because form validation failed. Because ValidateFormElementsUtil.validateFormElements() in /public_html/javascripts/lwc/shopping_library.js generates proper alerts for form validation failed, there is nothing to do here; hence, this else commented out.");
//   }
  // Prevent event default behavior. If button is input type="submit" and is nested in form (not outside of form), regardless if event handler is attached to the submit button submit event or click event, when press submit button the default behavior is to apparently reload the web page, which clears the user entered data, which, is not desired. So, for now, prevent this default behavior with EventUtil.preventEventDefaultBehavior(event) in /public_html/javascripts/lwc/library_load_in_body.js.
  EventUtil.preventEventDefaultBehavior(event);
 },
 // ---------- BILLING SPECIAL NOTES ----------
 // Corresponds to: billingContainer.
 // Purpose: Enter billing credit card information in billingCreditCardForm. Validate billingCreditCardForm data. Set billingCreditCardForm values on billing properties. Allow user to use shipping information as billing information, or to enter billing information that is different from shipping information into billingInformationForm. If indicate to use billing information that is different from shipping information, validate billingInformationForm data. Set either shipping properties or billingInformationForm data on billing properties. Generate and display reviewOrderBillingInformationReport in Review Order section. Hide Billing Section and display Review Order Section. Allow user to return and change billing information.
 // NOTE: Modeled after Newegg.com checkout as guest.
 // NOTE: On billingEditShippingInfoToBillingInfo(), which is handler for checkbox labeled - Billing Address Same as the shipping address:  The billingInformationForm allows user to edit shipping information to billing information. To facilitate shopping, it is assumed that shipping information is used as billing information. Therefore, by default, billingInformationForm is hidden. To display billingInformationForm, uncheck the checkbox labeled - Billing Address Same as the shipping address. Unchecking the checkbox; 1.) displays billingInformationForm, 2.) gets initial values and inserts them into billingInformationForm. The initial values inserted into billingInformationForm are gotten from either shipping properties or billing properties. There is only one time the values inserted into billingInformationForm are gotten from shipping properties, not billing properties: user, on first visit to Billing Section, unchecks the checkbox to display billingInformationForm before clicking the Review Order button. Here, the values to insert into billingInformationForm must be gotten from shipping properties because, as of yet, no values have been set on billing properties except their default values, which are empty string "". After click the Review Order button, every time uncheck the checkbox to display billingInformationForm, the values inserted into billingInformationForm data are gotten from billing properties, not shipping properties. Checking the checkbox to hide billingInformationForm never sets any values on billing properties. Unchecking the checkbox to display billingInformationForm always gets values from either shipping properties or billing properties according to aforementioned rules. In other words, if billingInformationForm values are edited and then the checkbox is checked to hide billingInformationForm, the edits are lost. In sum, unchecking the checkbox labeled - Billing Address Same as the shipping address displays billingInformationForm, gets values and inserts them into billingInformationForm, and, therefore, needs a flag to determine if get values to insert into billingInformationFormfrom from shipping properties or billing properties. Flag can be if any of the billing properties (eg, billingAddress) have, or do not have, default values. If billingAddress === "", which is the default and indicates that no values have been set on billing properties except default values, then get values to insert into billingInformationForm from shipping properties. If billingAddress !== "", which is not the default and indicates that values have been set on billing properties, then get values to insert into billingInformationForm from billing properties. By default, billingInformationForm is not displayed and shippingInformationReport is displayed. Since the display of billingInformationForm and shippingInformationReport are toggled in the same manner at the same time, the toggling switches between displaying either billingInformationForm or shippingInformationReport, not neither nor both. (NOTE: billingEditShippingInfoToBillingInfo() is toggle display and get, not set.)
 // NOTE: On processBilling_goToReviewOrder(), which is handler for Review Order button: If billingInformationForm is not displayed and click Review Order button, set shipping properties on billing properties. If billingInformationForm is displayed and click Review Order button, set billingInformationForm values (regardless where they were gotten from (ie, from shipping properties or billing properties) and regardless if they were edited) on billing properties. In other words, every time click Review Order button, data is set on billing properties, and, therefore, need flag to determine if set shipping properties or billingInformationForm values on billing properties. Flag can be if the checkbox labeled - Billing Address Same as the shipping address is checked/unchecked, which can be determined by monitoring element id="billingInformationFormContainerId" class="display-none" with classList.contains("display-none") and assigning value (boolean) to var billingInformationFormContainerDisplayNone. If billingInformationFormContainerDisplayNone === true, billingInformationForm is not currently displayed and, therefore, set shipping properties on billing properties. billingInformationFormContainerDisplayNone === false, billingInformationForm is currently displayed and, therefore, set billingInformationForm values on billing properties. (NOTE: processBilling_goToReviewOrder() is set, not get.) */
 // ---------- PROPERTIES FIRST USED IN BILLING ----------
 billingCreditCardholderName: "",
 billingCreditCardNumber: "",
 billingCreditCardExpirationMonth: "",
 billingCreditCardExpirationYear: "",
 billingCreditCardSecurityCode: "",
 billingAddress: "",
 billingAddress2: "",
 billingCity: "",
 billingState: "",
 billingStateIndex: "", // IMPORTANT NOTE: requires using the same State select option form element throughout.
 billingZipCode: "",
 billingPhoneNumber: "",
 // ---------- METHODS USED IN BILLING ----------
 // Method: billingEditShippingInfoToBillingInfo().
 // Purpose: Handler for checkbox labeled - Billing Address Same as the shipping address. Toggle display shippingInformationReport and  billingInformationForm. If checkbox is checked, display shippingInformationReport and hide billingInformationForm. If checkbox is unchecked, hide shippingInformationReport and display billingInformationForm. When billingInformationForm is displayed, auto insert initial values into billingInformationForm from either shipping properties or billing properties. If billingAddress === "", get values to insert into billingInformationForm from shipping properties. If billingAddress !== "", get values to insert into billingInformationForm from billing properties.
 billingEditShippingInfoToBillingInfo: function(event){
  // Get reference to element that displays billingInformationForm, and element that displays shippingInformationReport.
  var billingInformationFormContainer = document.getElementById("billingInformationFormContainerId");
  var shippingInformationReportContainer = document.getElementById("shippingInformationReportContainerId");
  // Determine if billingInformationForm is currently displayed.
  var billingInformationFormContainerDisplayNone = billingInformationFormContainer.classList.contains("display-none");
  // If billingInformationFormContainerDisplayNone === true, then billingInformationForm is not currently displayed, but it is about to be displayed because the checkbox labeled - Billing Address Same as the shipping address has just been unchecked, which paths to here.
  if (billingInformationFormContainerDisplayNone === true){
   // Auto insert initial values into billingInformationForm from either shipping properties or billing properties.
   // If billingAddress === "", get values to insert into billingInformationForm from shipping properties.
   if (ShoppingCartUtil.billingAddress === ""){
    billingInformationFormContainer.innerHTML = "<form id='billingInformationFormId' novalidate>" +
    "<p><label>Address<br />" +
    "<input type='text' size='40' maxlength='80' value='" + ShoppingCartUtil.shippingAddress + "' name='billingAddress' id='billingAddressId' data-validationtype='inputText_address' /></label></p>" +
    "<p><label>Address2 (optional) apartment, suite, floor, etc.<br />" +
    "<input type='text' size='40' maxlength='80' value='" + ShoppingCartUtil.shippingAddress2 + "' name='billingAddress2' id='billingAddress2Id' data-validationtype='inputText_address2Optional' /></label></p>" +
    "<p><label>City<br />" +
    "<input type='text' size='40' maxlength='60' value='" + ShoppingCartUtil.shippingCity + "' name='billingCity' id='billingCityId' data-validationtype='inputText_city' /></label></p>" +
    "<p>" +
     "<label>State<br />" +
      "<select size='1' name='billingState' id='billingStateId' data-validationtype='selectOption_state'>" +
       "<option value='' label=' '> </option>" +
       "<option value='--'>--</option>" +
       "<option value='AL'>AL</option>" +
       "<option value='AK'>AK</option>" +
       "<option value='AZ'>AZ</option>" +
       "<option value='AR'>AR</option>" +
       "<option value='CA'>CA</option>" +
       "<option value='CO'>CO</option>" +
       "<option value='CT'>CT</option>" +
       "<option value='DE'>DE</option>" +
       "<option value='DC'>DC</option>" +
       "<option value='FL'>FL</option>" +
       "<option value='GA'>GA</option>" +
       "<option value='HI'>HI</option>" +
       "<option value='ID'>ID</option>" +
       "<option value='IL'>IL</option>" +
       "<option value='IN'>IN</option>" +
       "<option value='IA'>IA</option>" +
       "<option value='KS'>KS</option>" +
       "<option value='KY'>KY</option>" +
       "<option value='LA'>LA</option>" +
       "<option value='ME'>ME</option>" +
       "<option value='MD'>MD</option>" +
       "<option value='MA'>MA</option>" +
       "<option value='MI'>MI</option>" +
       "<option value='MN'>MN</option>" +
       "<option value='MS'>MS</option>" +
       "<option value='MO'>MO</option>" +
       "<option value='MT'>MT</option>" +
       "<option value='NE'>NE</option>" +
       "<option value='NV'>NV</option>" +
       "<option value='NH'>NH</option>" +
       "<option value='NJ'>NJ</option>" +
       "<option value='NM'>NM</option>" +
       "<option value='NY'>NY</option>" +
       "<option value='NC'>NC</option>" +
       "<option value='ND'>ND</option>" +
       "<option value='OH'>OH</option>" +
       "<option value='OK'>OK</option>" +
       "<option value='OR'>OR</option>" +
       "<option value='PA'>PA</option>" +
       "<option value='RI'>RI</option>" +
       "<option value='SC'>SC</option>" +
       "<option value='SD'>SD</option>" +
       "<option value='TN'>TN</option>" +
       "<option value='TX'>TX</option>" +
       "<option value='UT'>UT</option>" +
       "<option value='VT'>VT</option>" +
       "<option value='VA'>VA</option>" +
       "<option value='WA'>WA</option>" +
       "<option value='WV'>WV</option>" +
       "<option value='WI'>WI</option>" +
       "<option value='WY'>WY</option>" +
      "</select>" +
     "</label>" +
    "</p>" +
    "<p><label>Zip Code (format: 12345)<br />" +
    "<input type='text' size='5' maxlength='5' value='" + ShoppingCartUtil.shippingZipCode + "' name='billingZipCode' id='billingZipCodeId' data-validationtype='inputText_zipCode' /></label></p>" +
    "<p><label>Phone Number (format: 1234567890 or 123-456-7890)<br />" +
    "<input type='tel' size='12' maxlength='12' value='" + ShoppingCartUtil.shippingPhoneNumber + "' name='billingPhoneNumber' id='billingPhoneNumberId' data-validationtype='inputTel_phoneNumber' /></label></p>" +
    "</form>";
    // Manually set value billingState from shippingStateIndex.
    var billingState = document.getElementById("billingStateId");
    billingState.options[ShoppingCartUtil.shippingStateIndex].selected = true;
   // If billingAddress !== "", get values to insert into billingInformationForm from billing properties.
   } else if (ShoppingCartUtil.billingAddress !== ""){
    billingInformationFormContainer.innerHTML = "<form id='billingInformationFormId' novalidate>" +
    "<p><label>Address<br />" +
    "<input type='text' size='40' maxlength='80' value='" + ShoppingCartUtil.billingAddress + "' name='billingAddress' id='billingAddressId' data-validationtype='inputText_address' /></label></p>" +
    "<p><label>Address2 (optional) apartment, suite, floor, etc.<br />" +
    "<input type='text' size='40' maxlength='80' value='" + ShoppingCartUtil.billingAddress2 + "' name='billingAddress2' id='billingAddress2Id' data-validationtype='inputText_address2Optional' /></label></p>" +
    "<p><label>City<br />" +
    "<input type='text' size='40' maxlength='60' value='" + ShoppingCartUtil.billingCity + "' name='billingCity' id='billingCityId' data-validationtype='inputText_city' /></label></p>" +
    "<p>" +
     "<label>State<br />" +
      "<select size='1' name='billingState' id='billingStateId' data-validationtype='selectOption_state'>" +
       "<option value='' label=' '> </option>" +
       "<option value='--'>--</option>" +
       "<option value='AL'>AL</option>" +
       "<option value='AK'>AK</option>" +
       "<option value='AZ'>AZ</option>" +
       "<option value='AR'>AR</option>" +
       "<option value='CA'>CA</option>" +
       "<option value='CO'>CO</option>" +
       "<option value='CT'>CT</option>" +
       "<option value='DE'>DE</option>" +
       "<option value='DC'>DC</option>" +
       "<option value='FL'>FL</option>" +
       "<option value='GA'>GA</option>" +
       "<option value='HI'>HI</option>" +
       "<option value='ID'>ID</option>" +
       "<option value='IL'>IL</option>" +
       "<option value='IN'>IN</option>" +
       "<option value='IA'>IA</option>" +
       "<option value='KS'>KS</option>" +
       "<option value='KY'>KY</option>" +
       "<option value='LA'>LA</option>" +
       "<option value='ME'>ME</option>" +
       "<option value='MD'>MD</option>" +
       "<option value='MA'>MA</option>" +
       "<option value='MI'>MI</option>" +
       "<option value='MN'>MN</option>" +
       "<option value='MS'>MS</option>" +
       "<option value='MO'>MO</option>" +
       "<option value='MT'>MT</option>" +
       "<option value='NE'>NE</option>" +
       "<option value='NV'>NV</option>" +
       "<option value='NH'>NH</option>" +
       "<option value='NJ'>NJ</option>" +
       "<option value='NM'>NM</option>" +
       "<option value='NY'>NY</option>" +
       "<option value='NC'>NC</option>" +
       "<option value='ND'>ND</option>" +
       "<option value='OH'>OH</option>" +
       "<option value='OK'>OK</option>" +
       "<option value='OR'>OR</option>" +
       "<option value='PA'>PA</option>" +
       "<option value='RI'>RI</option>" +
       "<option value='SC'>SC</option>" +
       "<option value='SD'>SD</option>" +
       "<option value='TN'>TN</option>" +
       "<option value='TX'>TX</option>" +
       "<option value='UT'>UT</option>" +
       "<option value='VT'>VT</option>" +
       "<option value='VA'>VA</option>" +
       "<option value='WA'>WA</option>" +
       "<option value='WV'>WV</option>" +
       "<option value='WI'>WI</option>" +
       "<option value='WY'>WY</option>" +
      "</select>" +
     "</label>" +
    "</p>" +
    "<p><label>Zip Code (format: 12345)<br />" +
    "<input type='text' size='5' maxlength='5' value='" + ShoppingCartUtil.billingZipCode + "' name='billingZipCode' id='billingZipCodeId' data-validationtype='inputText_zipCode' /></label></p>" +
    "<p><label>Phone Number (format: 1234567890 or 123-456-7890)<br />" +
    "<input type='tel' size='12' maxlength='12' value='" + ShoppingCartUtil.billingPhoneNumber + "' name='billingPhoneNumber' id='billingPhoneNumberId' data-validationtype='inputTel_phoneNumber' /></label></p>" +
    "</form>";
    // Manually set value billingState from billingStateIndex.
    var billingState = document.getElementById("billingStateId");
    billingState.options[ShoppingCartUtil.billingStateIndex].selected = true;
   }
  }
//   else {
//    alert("Nothing to do. This else reached because billingInformationFormContainerDisplayNone === false, which means billingInformationForm is currently displayed, but it is about to be not displayed because the checkbox labeled - Billing Address Same as the shipping address has just been checked, which paths to here. Because simply need to toggle display of billingInformationForm and shippingInformationReport, which is best placed outside if else conditional, there is nothing to do here; hence, this else commented out.");
//   }
  // Toggle display of billingInformationForm and shippingInformationReport.
  billingInformationFormContainer.classList.toggle("display-none");
  shippingInformationReportContainer.classList.toggle("display-none");
 },
 // Method: processBilling_goToReviewOrderFinish().
 // Purpose: Called by processBilling_goToReviewOrder(), which is handler for Review Order button. Generate and display reviewOrderBillingInformationReport in Review Order Section. Run navTo("Review Order").
 processBilling_goToReviewOrderFinish: function(event){ // Hide Billing Section and display Review Order Section, and generate reviewOrderBillingInformationReport.
  // Generate and display reviewOrderBillingInformationReport in Review Order Section.
  var reviewOrderBillingInformationReportContainer = document.getElementById("reviewOrderBillingInformationReportContainerId");
  var creditCardNumberHidden = HideCreditCardNumberUtil.hideCreditCardNumber(ShoppingCartUtil.billingCreditCardNumber); // Convert credit card number to credit card number hidden. HideCreditCardNumberUtil.hideCreditCardNumber() in /public_html/javascripts/lwc/shopping_library.js.
  if (ShoppingCartUtil.billingAddress2 === ""){
   reviewOrderBillingInformationReportContainer.innerHTML = ShoppingCartUtil.billingCreditCardholderName + "<br />" +
   ShoppingCartUtil.billingAddress + "<br />" +
   ShoppingCartUtil.billingCity + ", " + ShoppingCartUtil.billingState + " " + ShoppingCartUtil.billingZipCode + "<br />" +
   ShoppingCartUtil.billingPhoneNumber + "<br />" +
   "Credit Card Number: " + creditCardNumberHidden + "<br />" +
   "Exp: " + ShoppingCartUtil.billingCreditCardExpirationMonth + "/" + ShoppingCartUtil.billingCreditCardExpirationYear;
  } else if (ShoppingCartUtil.billingAddress2 !== ""){
   reviewOrderBillingInformationReportContainer.innerHTML = ShoppingCartUtil.billingCreditCardholderName + "<br />" +
   ShoppingCartUtil.billingAddress + "<br />" +
   ShoppingCartUtil.billingAddress2 + "<br />" +
   ShoppingCartUtil.billingCity + ", " + ShoppingCartUtil.billingState + " " + ShoppingCartUtil.billingZipCode + "<br />" +
   ShoppingCartUtil.billingPhoneNumber + "<br />" +
   "Credit Card Number: " + creditCardNumberHidden + "<br />" +
   "Exp: " + ShoppingCartUtil.billingCreditCardExpirationMonth + "/" + ShoppingCartUtil.billingCreditCardExpirationYear;
  }
  // Run navTo("Review Order").
  ShoppingCartUtil.navTo("Review Order");
 },
 // Method: processBilling_goToReviewOrder().
 // Purpose: Handler for Review Order button. Send billingCreditCardForm to ValidateFormElementsUtil.validateFormElements() in /public_html/javascripts/lwc/shopping_library.js for validation. If billingCreditCardForm validates, set billingCreditCardForm values on billing properties, and continue. If billingInformationForm is not currently displayed, set shipping properties on billing properties. If billingInformationForm is currently displayed, send billingInformationForm to ValidateFormElementsUtil.validateFormElements() in /public_html/javascripts/lwc/shopping_library.js for validation. If billingInformationForm validates, set billingInformationForm values on billing properties. Regardless if set shipping properties or billingInformationForm values on billing properties, run processBilling_goToReviewOrderFinish().
 processBilling_goToReviewOrder: function(event){
  // Get reference to billingCreditCardForm.
  var formToValidate = document.getElementById("billingCreditCardFormId"); // Alternate: var formToValidate = document.forms["billingCreditCardFormId"];
  // Send billingCreditCardForm to ValidateFormElementsUtil.validateFormElements() in /public_html/javascripts/lwc/shopping_library.js for data validation.
  var formValidatationResult = ValidateFormElementsUtil.validateFormElements(formToValidate);
  // If billingCreditCardForm validates, continue.
  if (formValidatationResult){
  // Set billingCreditCardForm values on billing properties.
   var billingCreditCardholderName = document.getElementById("billingCreditCardholderNameId");
   ShoppingCartUtil.billingCreditCardholderName = billingCreditCardholderName.value;
   var billingCreditCardNumber = document.getElementById("billingCreditCardNumberId");
   ShoppingCartUtil.billingCreditCardNumber = billingCreditCardNumber.value;
   var billingCreditCardExpirationMonth = document.getElementById("billingCreditCardExpirationMonthId");
   ShoppingCartUtil.billingCreditCardExpirationMonth = billingCreditCardExpirationMonth.value;
   var billingCreditCardExpirationYear = document.getElementById("billingCreditCardExpirationYearId");
   ShoppingCartUtil.billingCreditCardExpirationYear = billingCreditCardExpirationYear.value;
   var billingCreditCardSecurityCode = document.getElementById("billingCreditCardSecurityCodeId");
   ShoppingCartUtil.billingCreditCardSecurityCode = billingCreditCardSecurityCode.value;
   // Get reference to element that displays billingInformationForm.
   var billingInformationFormContainer = document.getElementById("billingInformationFormContainerId");
   // Determine if billingInformationForm is currently displayed.
   var billingInformationFormContainerDisplayNone = billingInformationFormContainer.classList.contains("display-none");
   // Set either billingInformationForm values or shipping properties on billing properties.
   // If billingInformationFormContainerDisplayNone === true, then billingInformationForm is not currently displayed, continue.
   if (billingInformationFormContainerDisplayNone === true){
    // Set shipping properties on billing properties.
    ShoppingCartUtil.billingAddress = ShoppingCartUtil.shippingAddress;
    ShoppingCartUtil.billingAddress2 = ShoppingCartUtil.shippingAddress2;
    ShoppingCartUtil.billingCity = ShoppingCartUtil.shippingCity;
    ShoppingCartUtil.billingState = ShoppingCartUtil.shippingState;
    ShoppingCartUtil.billingStateIndex = ShoppingCartUtil.shippingStateIndex;
    ShoppingCartUtil.billingZipCode = ShoppingCartUtil.shippingZipCode;
    ShoppingCartUtil.billingPhoneNumber = ShoppingCartUtil.shippingPhoneNumber;
    // Run processBilling_goToReviewOrderFinish().
    ShoppingCartUtil.processBilling_goToReviewOrderFinish();
   // If billingInformationFormContainerDisplayNone === false, then billingInformationForm is currently displayed, continue.
   } else if (billingInformationFormContainerDisplayNone === false){
    // Get reference to billingInformationForm.
    var formToValidate = document.getElementById("billingInformationFormId"); // Alternate: var formToValidate = document.forms["billingInformationFormId"];
    // Send billingInformationForm to ValidateFormElementsUtil.validateFormElements() in /public_html/javascripts/lwc/shopping_library.js for data validation.
    var formValidatationResult = ValidateFormElementsUtil.validateFormElements(formToValidate);
    // If billingInformationForm validates, continue.
    if (formValidatationResult){
     // Set billingInformationForm values on billing properties.
     var billingAddress = document.getElementById("billingAddressId");
     ShoppingCartUtil.billingAddress = billingAddress.value;
     var billingAddress2 = document.getElementById("billingAddress2Id");
     ShoppingCartUtil.billingAddress2 = billingAddress2.value;
     var billingCity = document.getElementById("billingCityId");
     ShoppingCartUtil.billingCity = billingCity.value;
     var billingState = document.getElementById("billingStateId");
     ShoppingCartUtil.billingState = billingState.value;
     ShoppingCartUtil.billingStateIndex = billingState.selectedIndex;
     var billingZipCode = document.getElementById("billingZipCodeId");
     ShoppingCartUtil.billingZipCode = billingZipCode.value;
     var billingPhoneNumber = document.getElementById("billingPhoneNumberId");
     ShoppingCartUtil.billingPhoneNumber = billingPhoneNumber.value;
     // Run processBilling_goToReviewOrderFinish().
     ShoppingCartUtil.processBilling_goToReviewOrderFinish();
    }
//     else {
//      alert("Nothing to do. This else reached because form validation failed. Because ValidateFormElementsUtil.validateFormElements() in /public_html/javascripts/lwc/shopping_library.js generates proper alerts for form validation failed, there is nothing to do here; hence, this else commented out.");
//     }
   }
  }
//   else {
//    alert("Nothing to do. This else reached because form validation failed. Because ValidateFormElementsUtil.validateFormElements() in /public_html/javascripts/lwc/shopping_library.js generates proper alerts for form validation failed, there is nothing to do here; hence, this else commented out.");
//   }
 },
 // ---------- METHODS USED IN REVIEW ORDER ----------
 // Method: placeFakeOrder().
 // Purpose: Handler for Place Fake Order/Order Confirmation button. Run createOrderObject(). Run navTo("Order Confirmation").
 placeFakeOrder: function(event){
  // Run createOrderObject().
  ShoppingCartUtil.createOrderObject();
  // Run navTo("Order Confirmation").
  ShoppingCartUtil.navTo("Order Confirmation");
 },
 // ---------- PROPERTIES FIRST USED IN ORDER CONFIRMATION ----------
 orderObject: {},
 orderObjectAsJsonString: "",
 // ---------- METHODS USED IN ORDER CONFIRMATION ----------
 // Method: createOrderObject().
 // Purpose: Create a JavaScript object literal representing the order. Run serializeToJsonString(). Generate and display orderConfirmationReport.
 createOrderObject: function(){
  // Begin assigning properties and values on orderObject that represent the order data.
  // Define allItemsQuantity property on orderObject.
  ShoppingCartUtil.orderObject.allItemsQuantity = ShoppingCartUtil.allItemsQuantity;
  // Define allItemsPriceAsStringCurrency (i.e, Subtotal) property on orderObject.
  ShoppingCartUtil.orderObject.allItemsPrice = "$" + ShoppingCartUtil.allItemsPriceAsStringCurrency;
  // Define deliveryMethod property on orderObject.
  ShoppingCartUtil.orderObject.deliveryMethod = ShoppingCartUtil.deliveryMethod;
  // Define deliveryMethodPriceEachAsStringCurrency property on orderObject.
  ShoppingCartUtil.orderObject.deliveryMethodPriceEach = "$" + ShoppingCartUtil.deliveryMethodPriceEachAsStringCurrency;
  // Define allItemsAndDeliveryMethodPriceAsStringCurrency (ie, Total) property on orderObject.
  ShoppingCartUtil.orderObject.allItemsAndDeliveryMethodPrice = "$" + ShoppingCartUtil.allItemsAndDeliveryMethodPriceAsStringCurrency;
  // Define an items property on orderObject as an array.
  ShoppingCartUtil.orderObject.items = [];
  // Determine number of different items, not number or items, selected for purchase. In other words, determine number of line items.
  var itemArrayLength = ShoppingCartUtil.itemNameArray.length;
  // For each different item selected for purchase (ie, for each line item), assign itemName, itemPriceEach, itemQuantity, itemPriceLine properties and values on the item array. In other words, define the item array on orderObject as an array of object literals with each object literal representing a different item selected for purchase (ie, line item).
  for (var i = 0; i < itemArrayLength; i++){
   // Define the orderObject.items array as an array of object literals.
   ShoppingCartUtil.orderObject.items[i] = {};
   ShoppingCartUtil.orderObject.items[i].itemName = ShoppingCartUtil.itemNameArray[i];
   ShoppingCartUtil.orderObject.items[i].itemQuantity = ShoppingCartUtil.itemQuantityArray[i]; // number.
   var itemPriceEach = ShoppingCartUtil.itemPriceEachArray[i]; // number.
   ShoppingCartUtil.orderObject.items[i].itemPriceEach = "$" + ConvertNumberToStringCurrencyUtil.convertNumberToStringCurrency(itemPriceEach); // string.
   var itemPriceLine = itemPriceEach * ShoppingCartUtil.orderObject.items[i].itemQuantity; // number.
   ShoppingCartUtil.orderObject.items[i].itemPriceLine = "$" + ConvertNumberToStringCurrencyUtil.convertNumberToStringCurrency(itemPriceLine); // string.
  }
  // Define a shippingInformation property on orderObject as an object literal.
  ShoppingCartUtil.orderObject.shippingInformation = {};
  // Assign properties and values on orderObject.shippingInformation that represent the shipping information data.
  ShoppingCartUtil.orderObject.shippingInformation.fullName = ShoppingCartUtil.shippingFullName;
  ShoppingCartUtil.orderObject.shippingInformation.address = ShoppingCartUtil.shippingAddress;
  ShoppingCartUtil.orderObject.shippingInformation.address2 = ShoppingCartUtil.shippingAddress2;
  ShoppingCartUtil.orderObject.shippingInformation.city = ShoppingCartUtil.shippingCity;
  ShoppingCartUtil.orderObject.shippingInformation.state = ShoppingCartUtil.shippingState;
  ShoppingCartUtil.orderObject.shippingInformation.zipCode = ShoppingCartUtil.shippingZipCode;
  ShoppingCartUtil.orderObject.shippingInformation.phoneNumber = ShoppingCartUtil.shippingPhoneNumber;
  ShoppingCartUtil.orderObject.shippingInformation.emailAddress = ShoppingCartUtil.shippingEmailAddress;
  // Define a billingInformation property on orderObject as an object literal.
  ShoppingCartUtil.orderObject.billingInformation = {};
  // Assign properties and values on orderObject.billingInformation that represent the billing information data.
  ShoppingCartUtil.orderObject.billingInformation.creditCardholderName = ShoppingCartUtil.billingCreditCardholderName;
  ShoppingCartUtil.orderObject.billingInformation.creditCardNumber = ShoppingCartUtil.billingCreditCardNumber;
  ShoppingCartUtil.orderObject.billingInformation.creditCardExpirationMonth = ShoppingCartUtil.billingCreditCardExpirationMonth;
  ShoppingCartUtil.orderObject.billingInformation.creditCardExpirationYear = ShoppingCartUtil.billingCreditCardExpirationYear;
  ShoppingCartUtil.orderObject.billingInformation.creditCardSecurityCode = ShoppingCartUtil.billingCreditCardSecurityCode;
  ShoppingCartUtil.orderObject.billingInformation.address = ShoppingCartUtil.billingAddress;
  ShoppingCartUtil.orderObject.billingInformation.address2 = ShoppingCartUtil.billingAddress2;
  ShoppingCartUtil.orderObject.billingInformation.city = ShoppingCartUtil.billingCity;
  ShoppingCartUtil.orderObject.billingInformation.state = ShoppingCartUtil.billingState;
  ShoppingCartUtil.orderObject.billingInformation.zipCode = ShoppingCartUtil.billingZipCode;
  ShoppingCartUtil.orderObject.billingInformation.phoneNumber = ShoppingCartUtil.billingPhoneNumber;
  // Run serializeToJsonString().
  ShoppingCartUtil.serializeToJsonString();
  // Generate and display orderConfirmationReport.
  var orderConfirmationReport = document.getElementById("orderConfirmationReportContainerId");
  orderConfirmationReport.innerHTML = "This is the end of the JavaScript Shopping Cart Single Page Application. The fake order data has been assembled into a JavaScript object that has been serialized into the following JSON string using the JavaScript <code>JSON.stringify()</code> method. If this was a real order, the JSON string could be transmitted over the Internet for server-side processing:</p>" +
  "<pre>" + ShoppingCartUtil.orderObjectAsJsonString + "</pre>";
 },
 // Method: serializeToJsonString().
 // Purpose: Serialize the JavaScript object literal representing the order data into a JSON string.
 serializeToJsonString: function(){
  ShoppingCartUtil.orderObjectAsJsonString = JSON.stringify(ShoppingCartUtil.orderObject, null, 1);
 },
 // ---------- MISCELLANEOUS METHODS ----------
 // Method: resolveF5RefreshReloadIssues().
 // Purpose: Registered to window load event. Resolve issue: IE, FF, and SM retain manually and programmatically entered form element content, but remove programmatically displayed non-form element content upon F5 (Refresh/Reload). Therefore, the state of manually and programmatically entered form element content can fall out of sync with the state of programmatically displayed non-form element content. For more on this see http://www.learnwebcoding.com/html/html_testing_ground/web_browser_retain_remove_content_f5.html. This issue arises in two places: 1.) After checking a delivery method radio button, if user presses F5 (Refresh/Reload), the checked delivery method remains checked, but JavaScript reports no delivery method selected (ie, ShoppingCartUtil.deliveryMethod === "") and the Shipping price cell is empty. Resolve by unchecking all delivery method radio buttons upon F5 (Refresh/Reload); 2.) After unchecking the Billing Address Same as the shipping address checkbox, if user presses F5 (Refresh/Reload), the checkbox remains unchecked, but the billingInformationFormContainer is removed/hidden, the shippingInformationReportContainer is displayed, and any entered billing information is removed and replaced by shipping information. Resolve by checking the Billing Address Same as the shipping address checkbox upon F5 (Refresh/Reload).
 resolveF5RefreshReloadIssues: function(){
  // Resolve delivery method radio button checked issue.
  for (var i = 1; i <= 4; i++){
   // Get reference to the 4 delivery method radio buttons.
   var deliveryMethodItem = document.getElementById("shoppingCartDeliveryMethodRadioBtn" + i + "Id");
   deliveryMethodItem.checked = false; // To check, use deliveryMethodItem.checked, not deliveryMethodItem.checked = true.
  }
  // Resolve Billing Address Same as the shipping address checkbox unchecked issue.
  // Get reference to Billing Address Same as the shipping address checkbox.
  var billingEditShippingInfoToBillingInfoCheckbox = document.getElementById("billingEditShippingInfoToBillingInfoCheckboxId");
  billingEditShippingInfoToBillingInfoCheckbox.checked = true;
 },
 // Get reference to elements in order to register event handlers. Remember elements (including the form element) accept events from child elements (including child elements of the form element) via event bubbling.
 window: window,
 shoppingCartSummaryBtn: document.getElementById("shoppingCartSummaryBtnId"),
 shoppingGoToShoppingCartBtn: document.getElementById("shoppingGoToShoppingCartBtnId"),
 shoppingCartUpdateQuantitiesBtn: document.getElementById("shoppingCartUpdateQuantitiesBtnId"),
 shoppingCartAddDeliveryMethodRadioBtn: document.getElementById("shoppingCartAddDeliveryMethodRadioBtnId"),
 processShoppingCart_checkoutBtn: document.getElementById("processShoppingCart_checkoutBtnId"),
 shippingForm: document.getElementById("shippingFormId"),
 billingEditShippingInfoToBillingInfoCheckbox: document.getElementById("billingEditShippingInfoToBillingInfoCheckboxId"),
 processBilling_goToReviewOrderBtn: document.getElementById("processBilling_goToReviewOrderBtnId"),
 placeFakeOrderBtn: document.getElementById("placeFakeOrderBtnId")
};

// Register event handlers. EventUtil is in library_load_in_body.js.
EventUtil.registerEventHandler(ShoppingCartUtil.window, "load", ShoppingCartUtil.updateShoppingCartSummary);
EventUtil.registerEventHandler(ShoppingCartUtil.shoppingCartSummaryBtn, "click", ShoppingCartUtil.goToShoppingCart);
EventUtil.registerEventHandler(ShoppingCartUtil.shoppingGoToShoppingCartBtn, "click", ShoppingCartUtil.goToShoppingCart);
EventUtil.registerEventHandler(ShoppingCartUtil.shoppingCartUpdateQuantitiesBtn, "click", ShoppingCartUtil.updateShoppingCartQuantities);
EventUtil.registerEventHandler(ShoppingCartUtil.shoppingCartAddDeliveryMethodRadioBtn, "change", ShoppingCartUtil.shoppingCartAddDeliveryMethod); // If use click, then click anywhere within element boundary triggers handler.
EventUtil.registerEventHandler(ShoppingCartUtil.processShoppingCart_checkoutBtn, "click", ShoppingCartUtil.processShoppingCart_checkout);
EventUtil.registerEventHandler(ShoppingCartUtil.shippingForm, "submit", ShoppingCartUtil.processShipping_goToBilling);
EventUtil.registerEventHandler(ShoppingCartUtil.billingEditShippingInfoToBillingInfoCheckbox, "click", ShoppingCartUtil.billingEditShippingInfoToBillingInfo);
EventUtil.registerEventHandler(ShoppingCartUtil.processBilling_goToReviewOrderBtn, "click", ShoppingCartUtil.processBilling_goToReviewOrder);
EventUtil.registerEventHandler(ShoppingCartUtil.placeFakeOrderBtn, "click", ShoppingCartUtil.placeFakeOrder);
EventUtil.registerEventHandler(ShoppingCartUtil.window, "load", ShoppingCartUtil.resolveF5RefreshReloadIssues); // Per Professional JavaScript For Web Developers 3rd Ed p453: According to DOM Level 2 Events, the load event is supposed to fire on document, not on window. However, load is implemented on window in all browsers for backward compatibility.
