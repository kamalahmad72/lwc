<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/angularjs_shopping_cart_sections_spa.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/angularjs_shopping_cart_spa.php.
 * Last reviewed/updated: 21 Oct 2018.
 * Published: 24 Jan 2017. 
 * NOTE: On 08 Jul 2018, to add AngularJS 1.7.x support, in angularjs_shopping_cart_spa_sections.php (this file); 1.) change ng-click='addDeliveryMethod() to ng-change='addDeliveryMethod(), and 2.) change ng-click='insertBillingAddressFormValues() to ng-change='insertBillingAddressFormValues(). No other changes (including no changes to angularjs_shopping_cart_spa.js) required. For additional info, see https://docs.angularjs.org/guide/migration#migrating-from-1-6-to-1-7. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Some notes on this example:</p>

     <ul>
      <li>Once this web page is loaded, this example runs entirely on the client (i.e., in the web browser) and no additional data (including web page content and form data) is received from or sent over the Internet.</li>
      <li>The non-minified <a href='/javascripts/lwc/angularjs_shopping_cart_spa.js'>AngularJS and JavaScript code (learnwebcoding.com)</a> is thoroughly commented.</li>
      <li>The whole page views and associated models are:
       <ul>
        <li>Shopping view: provides fake search results items to shop from with Add To Cart buttons.
         <ul>
          <li>JavaScript <code>\$scope.itemsDb</code> array: provides Shopping view fake search results items to shop from data reference.</li>
         </ul>
        <li>Shopping Cart view: provides Line Items Report Form and Delivery Method Form.
         <ul>
          <li>JavaScript <code>\$scope.shoppingCartDb</code> object: stores and provides Shopping Cart view data reference.</li>
          <li>JavaScript <code>\$scope.deliveryMethodsDb</code> array: provides delivery method data reference.</li>
         </ul>
        </li>
        <li>Shipping view: provides Shipping Form.
         <ul>
          <li>JavaScript <code>\$scope.shippingDb</code> object: stores and provides Shipping view data reference.</li>
         </ul>
        </li>
        <li>Billing view: provides Billing Form.
         <ul>
          <li>JavaScript <code>\$scope.billingDb</code> object: stores and provides Billing view data reference.</li>
         </ul>
        </li>
        <li>Review Order view: provides review of shopping cart, shipping, and billing information.
         <ul>
          <li>JavaScript <code>\$scope.shoppingCartDb</code> object: stores and provides Shopping Cart view data reference.</li>
          <li>JavaScript <code>\$scope.shippingDb</code> object: stores and provides Shipping view data reference.</li>
          <li>JavaScript <code>\$scope.billingDb</code> object: stores and provides Billing view data reference.</li>
         </ul>
        </li>
        <li>Order Confirmation view: displays order object JSON string.
         <ul>
          <li>JavaScript <code>\$scope.orderObjectDb</code> object: stores and provides order data reference as a JavaScript object.</li>
         </ul>
        </li>
       </ul>
      </li>
      <li>At the conclusion of this example; 1.) a JavaScript object representing the fake order data is assembled, 2.) the order object is serialized into a JSON string using the AngularJS <code>json</code> filter, and 3.) the order object JSON string is displayed.</li>
      <li>The <a href='https://validator.w3.org/'>W3C Markup Validation Service (validator.w3.org)</a> correctly reports AngularJS directives as invalid HTML attributes. Hence, there is no W3C Valid HTML5 button at the bottom of this web page.</li>
     </ul>

     <h3><a id='webBrowserSupport'></a>1.1. Web Browser Support</h3>

     <p>Web browser support: IE9+, ED12+, FF6+, CH16+, OP11.60+.</p>

     <h3><a id='angularJsSupport'></a>1.2. AngularJS Support</h3>

     <p>AngularJS support: AngularJS 1.5.9+. No Angular 2+. AngularJS 1.5.8- not tested.</p>

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
    <section ng-app='shoppingCartSpaApp'>
     <div ng-controller='shoppingCartSpaCtrl'>

      <h2><a id='shoppingCartSpa'></a>2. AngularJS Shopping Cart Single Page Application</h2>

<!-- PERSISTENT VIEW: SHOPPING CART SUMMARY -->

      <p id='shoppingCartSummaryBtnId'>
       <button type='button' ng-click='goToShoppingCart()' class='btn btn-md shopping-cart-summary-btn'><span class='fa fa-shopping-cart shopping-cart-summary-fa'></span>{{shoppingCartDb.allItemsPrice | currency: '$'}} ({{shoppingCartDb.allItemsQuantity}} items) + {{shoppingCartDb.deliveryMethodPriceEach | currency: '$'}} shipping = {{shoppingCartDb.allItemsAndDeliveryMethodPrice | currency: '$'}} total.</button>
      </p>

<!-- DYNAMIC VIEWS: 1.) SHOPPING -->

      <div ng-show='view===\"shopping\"' class='min-height-100vh'>

       <div class='shopping-navbar'><span class='shopping-navbar-section-active'>1.) SHOPPING</span><img 
src='/images/javascript_shopping_cart/rt_pnt_tri_6x28.gif' alt='Next pointing shopping navbar triangle' class='img-rt-pnt-tri' /><span class='shopping-navbar-section-next'>2.) SHOPPING CART</span><span class='shopping-navbar-section'>3.) CHECKOUT:</span><span class='shopping-navbar-section'>Shipping</span><span class='shopping-navbar-section'>Billing</span><span class='shopping-navbar-section'>Review Order</span><span class='shopping-navbar-section'>Order Confirmation</span></div>

       <p>Fake search result for: <q>4th Generation Intel Core i3 Processors (Desktop) Boxed</q><br />
        Showing 1 - 9 of 9 products.</p>

       <div ng-repeat='itemRecord in itemsDb' class='row'>
        <div class='col-xs-2'>
         <img src='/images/javascript_shopping_cart/{{itemRecord.itemImage}}' alt='{{itemRecord.itemName}}' />
        </div>
        <div class='col-xs-7'>
         <div class='itemName'>{{itemRecord.itemName}}</div>
         <ul class='itemDetail'>
          <li><span>Launch Date:</span> {{itemRecord.itemLaunchDate}}</li>
          <li><span># of Cores:</span> {{itemRecord.itemNumberOfCores}}</li>
          <li><span>Max TDP:</span> {{itemRecord.itemMaxTdp}}</li>
          <li><span>Processor Graphics:</span> {{itemRecord.itemProcessorGraphics}}</li>
          <li><span>Model #:</span> {{itemRecord.itemModelNumber}}</li>
         </ul>
        </div>
        <div class='col-xs-2 text-align-right'>
         <div class='itemPriceEach'>{{itemRecord.itemPriceEach | currency: '$'}}</div>
         <button type='button' ng-click='addItemToCart(itemRecord.itemName)' class='btn btn-sm'>Add<span class='hidden-xs'>&nbsp;To&nbsp;Cart</span>&nbsp;&gt;</button>
        </div>
       </div>

       <p>
        <button type='button' ng-click='goToShoppingCart()' class='btn btn-md'>Shopping Cart &gt;</button>
       </p>

       <p class='endnotes'>Processor images from <a href='http://www.newegg.com'>Newegg (newegg.com)</a>.<br />
        Processor prices per <a href='http://ark.intel.com/products/family/75025/4th-Generation-Intel-Core-i3-Processors/desktop#@Desktop'>4th Generation Intel Core i3 Processors (Desktop) (ark.intel.com)</a> 11 Jun 2015.</p>

      </div><!-- Close ng-show='view===\"shopping\"' -->

<!-- DYNAMIC VIEWS: 2.) SHOPPING CART -->

      <div ng-show='view===\"shoppingCart\"' class='min-height-100vh'>

       <div class='shopping-navbar'><span ng-click='changeViewTo(\"shopping\")' class='shopping-navbar-section-back'>1.) SHOPPING</span><span class='shopping-navbar-section-active'>2.) SHOPPING CART</span><img src='/images/javascript_shopping_cart/rt_pnt_tri_6x28.gif' alt='Next pointing shopping navbar triangle' class='img-rt-pnt-tri' /><span class='shopping-navbar-section-next'>3.) CHECKOUT:</span><span class='shopping-navbar-section'>Shipping</span><span class='shopping-navbar-section'>Billing</span><span class='shopping-navbar-section'>Review Order</span><span class='shopping-navbar-section'>Order Confirmation</span></div>
 
       <div ng-hide='shoppingCartDb.isShoppingCartFull'>

        <p>Your shopping cart is empty. Please continue shopping and select an item to purchase.</p>

        <p>
         <button type='button' ng-click='changeViewTo(\"shopping\")' class='btn btn-md'>&lt; Continue Shopping</button>
        </p>

       </div><!-- Close ng-hide='shoppingCartDb.isShoppingCartFull'. -->

       <div ng-show='shoppingCartDb.isShoppingCartFull'>

        <form name='lineItemsReportForm' novalidate>
         <table class='shopping-cart-forms-table'>
          <tr>
           <th>Remove</th>
           <th>Product</th>
           <th>Quantity</th>
           <th>Price Each</th>
           <th>Item Total</th>
          </tr>
          <tr ng-repeat='itemName in shoppingCartDb.itemNameArray'>
           <td class='text-align-center'><label><input type='checkbox' name='{{itemName}}' id='removeItemCheckbox{{\$index}}Id' ng-model='shoppingCartDb.isRemoveItemCheckboxCheckedArray[\$index]' /><span>&#10003;</span></label></td>
           <td>{{itemName}} <span ng-hide='shoppingCartDb.isLineItemsReportFormValid'><span ng-messages='lineItemsReportForm[\"itemQuantityField\" + \$index].\$error' class='ng-messages'><span ng-message='pattern'><br />Please enter a valid quantity or make the field empty.</span></span></span></td>
           <td class='text-align-center'><input type='text' name='itemQuantityField{{\$index}}' size='2' maxlength='2' ng-model='shoppingCartDb.itemQuantityArrayTemp[\$index]' ng-pattern='regExpDb.quantity' /></td><!-- Temp array. -->
           <td class='text-align-right'>{{shoppingCartDb.itemPriceEachArray[\$index] | currency: '$'}}</td>
           <td class='text-align-right'>{{shoppingCartDb.itemPriceLineArray[\$index] | currency: '$'}}</td>
          </tr>
          <tr>
           <td colspan='4' class='text-align-right'><b>Subtotal:</b></td>
           <td class='shopping-cart-forms-table-total-cell'>{{shoppingCartDb.allItemsPrice | currency: '$'}}</td>
          </tr>
         </table>
        </form>

        <p>
         <button type='button' ng-click='updateShoppingCartQuantities()' class='btn btn-md'>Update Quantities</button>
        </p>

        <table class='shopping-cart-forms-table'>
         <tbody>
          <tr>
           <td class='text-align-right'><b>Shipping:</b></td>
           <td class='shopping-cart-forms-table-total-cell'><span ng-show='deliveryMethodForm.\$valid'>{{shoppingCartDb.deliveryMethodPriceEach | currency: '$'}}</span></td>
          </tr>
          <tr>
           <td id='deliveryMethodFormHeadingId' colspan='2'><b>Delivery Method</b> <span ng-hide='shoppingCartDb.isDeliveryMethodFormValid'><span ng-messages='deliveryMethodForm.shoppingCartDeliveryMethodRadioBtn.\$error' class='ng-messages'><span ng-message='required'>Please select a delivery method.</span></span></span><br />
            <form name='deliveryMethodForm' novalidate>
             <div ng-repeat='deliveryMethodRecord in deliveryMethodsDb'>
              <label><input type='radio' name='shoppingCartDeliveryMethodRadioBtn' id='shoppingCartDeliveryMethodRadioBtn{{\$index}}Id' value='{{deliveryMethodRecord.deliveryMethodName}}' ng-model='shoppingCartDb.deliveryMethod' ng-change='addDeliveryMethod()' required /><span id='shoppingCartDeliveryMethodCssRadioBtn{{\$index}}Id'>&#9679;</span> {{deliveryMethodRecord.deliveryMethodPriceEach | currency: '$'}} - {{deliveryMethodRecord.deliveryMethodName}}</label>
             </div>
            </form>
           </td>
          </tr>
          <tr>
           <td class='text-align-right'><b>Total:</b></td>
           <td class='shopping-cart-forms-table-total-cell'>{{shoppingCartDb.allItemsAndDeliveryMethodPrice | currency: '$'}}</td>
          </tr>
         </tbody>
        </table>

        <p>
         <button type='button' ng-click='changeViewTo(\"shopping\")' class='btn btn-md'>&lt; Continue Shopping</button>
         <button type='button' ng-click='processShoppingCart_checkout()' class='btn btn-md'>Checkout &gt;</button>
        </p>

       </div><!-- Close ng-show='shoppingCartDb.isShoppingCartFull'. -->

      </div><!-- Close ng-show='view===\"shoppingCart\"'. -->

<!-- DYNAMIC VIEWS: 3a.) CHECKOUT: SHIPPING -->

      <div ng-show='view===\"shipping\"' class='min-height-100vh'>

       <div class='shopping-navbar'><span ng-click='changeViewTo(\"shopping\")' class='shopping-navbar-section-back'>1.) SHOPPING</span><span ng-click='changeViewTo(\"shoppingCart\")' class='shopping-navbar-section-back'>2.) SHOPPING CART</span><span class='shopping-navbar-section'>3.) CHECKOUT:</span><span class='shopping-navbar-section-active'>Shipping</span><img src='/images/javascript_shopping_cart/rt_pnt_tri_6x28.gif' alt='Next pointing shopping navbar triangle' class='img-rt-pnt-tri' /><span class='shopping-navbar-section-next'>Billing</span><span class='shopping-navbar-section'>Review Order</span><span class='shopping-navbar-section'>Order Confirmation</span></div>

       <p class='subsection-title'>Shipping Information</p>

       <form name='shippingForm' novalidate>

        <p><label>First Name<br />
         <input type='text' name='shippingFirstName' size='40' maxlength='40' ng-model='shippingDb.firstName' ng-pattern='regExpDb.allNameTypesAndCity' required /> <span ng-hide='shippingDb.isShippingFormValid'><span ng-messages='shippingForm.shippingFirstName.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid first name.</span></span></span></label></p>

        <p><label>Last Name<br />
         <input type='text' name='shippingLastName' size='40' maxlength='40' ng-model='shippingDb.lastName' ng-pattern='regExpDb.allNameTypesAndCity' required /> <span ng-hide='shippingDb.isShippingFormValid'><span ng-messages='shippingForm.shippingLastName.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid last name.</span></span></span></label></p>

        <p><label>Address<br />
         <input type='text' name='shippingAddress' size='40' maxlength='80' ng-model='shippingDb.address' ng-pattern='regExpDb.address' required /> <span ng-hide='shippingDb.isShippingFormValid'><span ng-messages='shippingForm.shippingAddress.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid address.</span></span></span></label></p>

        <p><label>Address2 (optional) apartment, suite, floor, etc.<br />
         <input type='text' name='shippingAddress2' size='40' maxlength='80' ng-model='shippingDb.address2' ng-pattern='regExpDb.address2Optional' /> <span ng-hide='shippingDb.isShippingFormValid'><span ng-messages='shippingForm.shippingAddress2.\$error' class='ng-messages'><span ng-message='pattern'>Please enter a valid address2 or make the field empty.</span></span></span></label></p>

        <p><label>City<br />
         <input type='text' name='shippingCity' size='40' maxlength='60' ng-model='shippingDb.city' ng-pattern='regExpDb.allNameTypesAndCity' required /> <span ng-hide='shippingDb.isShippingFormValid'><span ng-messages='shippingForm.shippingCity.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid city.</span></span></span></label></p>

        <p><label>State<br />
         <select name='shippingState' size='1' ng-model='shippingDb.state' ng-pattern='regExpDb.state' ng-options='state for state in fiftyStatesByTwoLettersDb' required></select> <span ng-hide='shippingDb.isShippingFormValid'><span ng-messages='shippingForm.shippingState.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please select a state.</span></span></span></label></p>

        <p><label>Zip Code (format: 12345)<br />
         <input type='text' name='shippingZipCode' size='5' maxlength='5' ng-model='shippingDb.zipCode' ng-pattern='regExpDb.zipCode' required /> <span ng-hide='shippingDb.isShippingFormValid'><span ng-messages='shippingForm.shippingZipCode.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid zip code.</span></span></span></label></p>

        <p><label>Phone Number (format: 1234567890 or 123-456-7890)<br />
         <input type='tel' name='shippingPhoneNumber' size='12' maxlength='12' ng-model='shippingDb.phoneNumber' ng-pattern='regExpDb.phoneNumber' required /> <span ng-hide='shippingDb.isShippingFormValid'><span ng-messages='shippingForm.shippingPhoneNumber.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid phone number.</span></span></span></label></p>

        <p><label>Email Address<br />
         <input type='email' name='shippingEmailAddress' size='40' maxlength='80' ng-model='shippingDb.emailAddress' ng-pattern='regExpDb.emailAddress' required /> <span ng-hide='shippingDb.isShippingFormValid'><span ng-messages='shippingForm.shippingEmailAddress.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid email address.</span></span></span></label></p>

        <p><label>Confirm Email Address<br />
         <input type='email' name='shippingEmailAddressConfirm' size='40' maxlength='80' ng-model='shippingDb.emailAddressConfirm' ng-pattern='shippingDb.emailAddress' required /> <span ng-hide='shippingDb.isShippingFormValid'><span ng-messages='shippingForm.shippingEmailAddressConfirm.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please confirm email address.</span></span></span></label></p>

        <p>
         <button type='button' ng-click='changeViewTo(\"shopping\")' class='btn btn-md'>&lt; Continue Shopping</button>
         <button type='submit' ng-click='processShipping_goToBilling()' class='btn btn-md'>Billing &gt;</button>
        </p>

       </form>

      </div><!-- Close ng-show='view===\"shipping\"'. -->

<!-- DYNAMIC VIEWS: 3b.) CHECKOUT: BILLING -->

      <div ng-show='view===\"billing\"' class='min-height-100vh'>

       <div class='shopping-navbar'><span ng-click='changeViewTo(\"shopping\")' class='shopping-navbar-section-back'>1.) SHOPPING</span><span ng-click='changeViewTo(\"shoppingCart\")' class='shopping-navbar-section-back'>2.) SHOPPING CART</span><span class='shopping-navbar-section'>3.) CHECKOUT:</span><span ng-click='changeViewTo(\"shipping\")' class='shopping-navbar-section-back'>Shipping</span><span class='shopping-navbar-section-active'>Billing</span><img src='/images/javascript_shopping_cart/rt_pnt_tri_6x28.gif' alt='Next pointing shopping navbar triangle' class='img-rt-pnt-tri' /><span class='shopping-navbar-section-next'>Review Order</span><span class='shopping-navbar-section'>Order Confirmation</span></div>

       <p class='subsection-title'>Billing Information</p>

       <form name='creditCardForm' novalidate>

        <p><label>Cardholder Name (exactly as shown on card)<br /><!-- Temp property. -->
         <input type='text' name='billingCreditCardholderName' size='40' maxlength='85' ng-model='billingDb.creditCardholderNameTemp' ng-pattern='regExpDb.allNameTypesAndCity' required /> <span ng-hide='billingDb.isCreditCardFormValid'><span ng-messages='creditCardForm.billingCreditCardholderName.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid cardholder name.</span></span></span></label></p>

        <p><label>Card Number (format: 1234567890123456 or 1234 5678 9012 3456)<br />
         <input type='text' name='billingCreditCardNumber' size='19' maxlength='19' ng-model='billingDb.creditCardNumber' ng-pattern='regExpDb.creditCardNumber' required /> <span ng-hide='billingDb.isCreditCardFormValid'><span ng-messages='creditCardForm.billingCreditCardNumber.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid card number.</span></span></span></label></p>

        <p><label>Expiration Month<br />
         <select name='billingCreditCardExpirationMonth' size='1' ng-model='billingDb.creditCardExpirationMonth' ng-pattern='regExpDb.creditCardExpirationMonth' ng-options='month for month in monthsByTwoNumbersDb' required></select> <span ng-hide='billingDb.isCreditCardFormValid'><span ng-messages='creditCardForm.billingCreditCardExpirationMonth.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please select an expiration month.</span></span></span></label></p>

        <p><label>Expiration Year<br />
         <select name='billingCreditCardExpirationYear' size='1' ng-model='billingDb.creditCardExpirationYear' ng-pattern='regExpDb.creditCardExpirationYear' ng-options='year for year in creditCardExpirationYearsDb' required></select> <span ng-hide='billingDb.isCreditCardFormValid'><span ng-messages='creditCardForm.billingCreditCardExpirationYear.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please select an expiration year.</span></span></span></label></p>

        <p><label>Security Code<br />
         <input type='text' name='billingCreditCardSecurityCode' size='3' maxlength='3' ng-model='billingDb.creditCardSecurityCode' ng-pattern='regExpDb.creditCardSecurityCode' required /> <span ng-hide='billingDb.isCreditCardFormValid'><span ng-messages='creditCardForm.billingCreditCardSecurityCode.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid security code.</span></span></span></label></p>

       </form>

       <p class='subsection-title'>Billing Address</p>

       <p><label><input type='checkbox' ng-model='billingDb.isBillingAddressSameAsTheShippingAddressCheckboxChecked' ng-change='insertBillingAddressFormValues()' /><span>&#10003;</span> Same as the shipping address:</label></p>

       <div ng-hide='billingDb.isBillingAddressSameAsTheShippingAddressCheckboxChecked'>

        <form name='billingAddressForm' novalidate>

         <p><label>Address<br /><!-- Temp property. -->
          <input type='text' name='billingAddress' size='40' maxlength='80' ng-model='billingDb.addressTemp' ng-pattern='regExpDb.address' required /> <span ng-hide='billingDb.isBillingAddressFormValid'><span ng-messages='billingAddressForm.billingAddress.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid address.</span></span></span></label></p>

         <p><label>Address2 (optional) apartment, suite, floor, etc.<br /><!-- Temp property. -->
          <input type='text' name='billingAddress2' size='40' maxlength='80' ng-model='billingDb.address2Temp' ng-pattern='regExpDb.address2Optional' /> <span ng-hide='billingDb.isBillingAddressFormValid'><span ng-messages='billingAddressForm.billingAddress2.\$error' class='ng-messages'><span ng-message='pattern'>Please enter a valid address2 or make the field empty.</span></span></span></label></p>

         <p><label>City<br /><!-- Temp property. -->
          <input type='text' name='billingCity' size='40' maxlength='60' ng-model='billingDb.cityTemp' ng-pattern='regExpDb.allNameTypesAndCity' required /> <span ng-hide='billingDb.isBillingAddressFormValid'><span ng-messages='billingAddressForm.billingCity.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid city.</span></span></span></label></p>

         <p><label>State<br /><!-- Temp property. -->
          <select name='billingState' size='1' ng-model='billingDb.stateTemp' ng-pattern='regExpDb.state' ng-options='state for state in fiftyStatesByTwoLettersDb' required></select> <span ng-hide='billingDb.isBillingAddressFormValid'><span ng-messages='billingAddressForm.billingState.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please select a state.</span></span></span></label></p>

         <p><label>Zip Code (format: 12345)<br />
          <input type='text' name='billingZipCode' size='5' maxlength='5' ng-model='billingDb.zipCodeTemp' ng-pattern='regExpDb.zipCode' required /> <span ng-hide='billingDb.isBillingAddressFormValid'><span ng-messages='billingAddressForm.billingZipCode.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid zip code.</span></span></span></label></p>

         <p><label>Phone Number (format: 1234567890 or 123-456-7890)<br /><!-- Temp property. -->
          <input type='tel' name='billingPhoneNumber' size='12' maxlength='12' ng-model='billingDb.phoneNumberTemp' ng-pattern='regExpDb.phoneNumber' required /> <span ng-hide='billingDb.isBillingAddressFormValid'><span ng-messages='billingAddressForm.billingPhoneNumber.\$error' class='ng-messages'><span ng-message='required'>Required.</span><span ng-message='pattern'>Please enter a valid phone number.</span></span></span></label></p>

        </form>

       </div><!-- Close ng-hide='billingDb.isBillingAddressSameAsTheShippingAddressCheckboxChecked'. -->

       <p ng-show='billingDb.isBillingAddressSameAsTheShippingAddressCheckboxChecked'>
        {{shippingDb.address}}<br />
        <span ng-if='shippingDb.address2 !== \"\"'>{{shippingDb.address2}}<br /></span>
        {{shippingDb.city}}, {{shippingDb.state}} {{shippingDb.zipCode}}<br />
        {{shippingDb.phoneNumber}}
       </p>

       <p>
        <button type='button' ng-click='changeViewTo(\"shopping\")' class='btn btn-md'>&lt; Continue Shopping</button>
        <button type='button' ng-click='processBilling_goToReviewOrder()' class='btn btn-md'>Review Order &gt;</button>
       </p>

      </div><!-- Close ng-show='view===\"billing\"'. -->

<!-- DYNAMIC VIEWS: 3c.) CHECKOUT: REVIEW ORDER -->

      <div ng-show='view===\"reviewOrder\"' class='min-height-100vh'>

       <div class='shopping-navbar'><span ng-click='changeViewTo(\"shopping\")' class='shopping-navbar-section-back'>1.) SHOPPING</span><span ng-click='changeViewTo(\"shoppingCart\")' class='shopping-navbar-section-back'>2.) SHOPPING CART</span><span class='shopping-navbar-section'>3.) CHECKOUT:</span><span ng-click='changeViewTo(\"shipping\")' class='shopping-navbar-section-back'>Shipping</span><span ng-click='changeViewTo(\"billing\")' class='shopping-navbar-section-back'>Billing</span><span class='shopping-navbar-section-active'>Review Order</span><img src='/images/javascript_shopping_cart/rt_pnt_tri_6x28.gif' alt='Next pointing shopping navbar triangle' class='img-rt-pnt-tri' /><span class='shopping-navbar-section-next'>Order Confirmation</span></div>

       <p class='subsection-title'>Shopping Cart&nbsp;&nbsp;<button type='button' ng-click='changeViewTo(\"shoppingCart\")' class='btn-xs'>Edit</button></p>

       <p>Products:<br />
        <span ng-hide='shoppingCartDb.isShoppingCartFull'>Your shopping cart is empty. Please continue shopping and select an item to purchase.</span>
        <span ng-show='shoppingCartDb.isShoppingCartFull'>
         <span ng-repeat='itemName in shoppingCartDb.itemNameArray'>{{itemName}}. {{shoppingCartDb.itemPriceEachArray[\$index] | currency: '$'}}/each. Quantity: {{shoppingCartDb.itemQuantityArray[\$index]}}. Item Total: {{shoppingCartDb.itemPriceLineArray[\$index] | currency: '$'}} ({{shoppingCartDb.itemQuantityArray[\$index]}} items).<br /></span>
         Subtotal: {{shoppingCartDb.allItemsPrice | currency: '$'}} ({{shoppingCartDb.allItemsQuantity}} items).
        </span>
       </p>

       <p>Delivery Method:<br />
        <span ng-hide='deliveryMethodForm.\$valid'>There is no delivery method. Please return to the shopping cart and select a delivery method.</span>
        <span ng-show='deliveryMethodForm.\$valid'>{{shoppingCartDb.deliveryMethod}}.<br />
         Shipping: {{shoppingCartDb.deliveryMethodPriceEach | currency: '$'}}.</span>
       </p>

       <p>Total:<br />
        {{shoppingCartDb.allItemsAndDeliveryMethodPrice | currency: '$'}}.</p>

       <p class='subsection-title'>Shipping Information&nbsp;&nbsp;<button type='button' ng-click='changeViewTo(\"shipping\")' class='btn-xs'>Edit</button></p>

       <p>
        {{shippingDb.fullName}}<br />
        {{shippingDb.address}}<br />
        <span ng-if='shippingDb.address2 !== \"\"'>{{shippingDb.address2}}<br /></span>
        {{shippingDb.city}}, {{shippingDb.state}} {{shippingDb.zipCode}}<br />
        {{shippingDb.phoneNumber}}<br />
        {{shippingDb.emailAddress}}
       </p>

       <p class='subsection-title'>Billing Information&nbsp;&nbsp;<button type='button' ng-click='changeViewTo(\"billing\")' class='btn-xs'>Edit</button></p>

       <p>
        {{billingDb.creditCardholderName}}<br />
        {{billingDb.address}}<br />
        <span ng-if='billingDb.address2 !== \"\"'>{{billingDb.address2}}<br /></span>
        {{billingDb.city}}, {{billingDb.state}} {{billingDb.zipCode}}<br />
        {{billingDb.phoneNumber}}<br />
        Credit Card Number: {{billingDb.creditCardNumberHidden}}<br />
        Exp: {{billingDb.creditCardExpirationMonth}}/{{billingDb.creditCardExpirationYear}}
       </p>

       <p>
        <button type='button' ng-click='changeViewTo(\"shopping\")' class='btn btn-md'>&lt; Continue Shopping</button>
        <button type='button' ng-click='placeFakeOrder()' class='btn btn-md'>Place Fake Order/Order Confirmation &gt;</button>
       </p>

      </div><!-- Close ng-show='view===\"reviewOrder\"'. -->

<!-- DYNAMIC VIEWS: 3d.) CHECKOUT: ORDER CONFIRMATION -->

      <div ng-show='view===\"orderConfirmation\"' class='min-height-100vh'>

       <div class='shopping-navbar'><span ng-click='changeViewTo(\"shopping\")' class='shopping-navbar-section-back'>1.) SHOPPING</span><span ng-click='changeViewTo(\"shoppingCart\")' class='shopping-navbar-section-back'>2.) SHOPPING CART</span><span class='shopping-navbar-section'>3.) CHECKOUT:</span><span ng-click='changeViewTo(\"shipping\")' class='shopping-navbar-section-back'>Shipping</span><span ng-click='changeViewTo(\"billing\")' class='shopping-navbar-section-back'>Billing</span><span ng-click='changeViewTo(\"reviewOrder\")' class='shopping-navbar-section-back'>Review Order</span><span class='shopping-navbar-section-active'>Order Confirmation</span></div>

       <p>This is the end of the AngularJS Shopping Cart Single Page Application. The fake order data has been assembled into a JavaScript object that has been serialized into the following JSON string using the AngularJS <code>json</code> filter. If this was a real order, the JSON string could be transmitted over the Internet for server-side processing:</p>

       <pre>{{orderObjectAsJsonString}}</pre>

       <p>
        <button type='button' ng-click='changeViewTo(\"shopping\")' class='btn btn-md'>&lt; Continue Shopping</button>
       </p>

      </div><!-- Close ng-show='view===\"orderConfirmation\"'. -->

     </div><!-- Close ng-controller='shoppingCartSpaCtrl'. -->
    </section><!-- Close ng-app='shoppingCartSpaApp'. -->";
