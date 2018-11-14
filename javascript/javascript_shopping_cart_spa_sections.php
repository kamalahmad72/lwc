<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_shopping_cart_sections_spa.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_shopping_cart_spa.php.
 * Last reviewed/updated: 13 Nov 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Some notes on this example:</p>

     <ul>
      <li>Once this web page is loaded, this example runs entirely on the client (i.e., in the web browser) and no additional data (including web page content and form data) is received from or sent over the Internet.</li>
      <li>The non-minified <a href='/javascripts/lwc/javascript_shopping_cart_spa.js'>JavaScript code (learnwebcoding.com)</a> is thoroughly commented.</li>
      <li>Representing <q>backend</q> databases are the hard coded: 1.) JavaScript <code>ShoppingCartUtil.itemsDb</code> array, which represents the items to shop from; and 2.) JavaScript <code>ShoppingCartUtil.deliveryMethodsDb</code> array, which represents the delivery methods to select from.</li>
      <li>Representing <q>frontend</q> databases are the dynamic: 1.) JavaScript <code>itemNameArray[]</code> array, which represents the name of each item selected for purchase; 2.) JavaScript <code>itemQuantityArray[]</code> array, which represents the quantity of each item selected for purchase; and 3.) JavaScript <code>itemPriceEachArray[]</code> array, which represents the price of each item selected for purchase. These JavaScript arrays serve as a dynamic frontend database with <code>itemName</code> in <code>itemNameArray[]</code> serving as the unique key.</li>
      <li>At the conclusion of this example; 1.) a JavaScript object representing the fake order data is assembled, 2.) the order object is serialized into a JSON string using the JavaScript <code>JSON.stringify()</code> method, and 3.) the order object JSON string is displayed.</li>
      <li>The relatively high Internet Explorer version requirement (IE11+) is because the HTML <code>data-*</code> attribute and the corresponding JavaScript <code>dataset.*</code> property are used and IE was more than two years behind the other major web browsers in supporting them. Although this example uses the HTML <code>data-*</code> attribute and the corresponding JavaScript <code>dataset.*</code> property, there is no requirement to use them and this example could be recoded to support earlier versions of IE.</li>
     </ul>

     <h3><a id='webBrowserSupport'></a>1.1. Web Browser Support</h3>

     <p>Web browser support: IE11+, ED12+, FF6+, SF5.1+, CH13+, OP11.50+.</p>

     <h3><a id='abbreviations'></a>1.2. Abbreviations</h3>

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

     <h2><a id='shoppingCartSpa'></a>2. JavaScript Shopping Cart Single Page Application</h2>

<!-- SHOPPING CART SUMMARY -->

     <p id='shoppingCartSummaryScrollIntoViewTargetId'>
      <button type='button' id='shoppingCartSummaryBtnId' class='btn btn-md shopping-cart-summary-btn'><span id='shoppingCartSummaryId'>ShoppingCartUtil.updateShoppingCartSummary() has experienced an error.</span></button>
     </p>

<!-- 1.) SHOPPING -->

     <div id='shoppingContainerId' class='min-height-100vh'>

      <div class='shopping-navbar'><span class='shopping-navbar-section-active'>1.) SHOPPING</span><img 
src='/images/javascript_shopping_cart_spa/rt_pnt_tri_6x28.gif' alt='Next pointing shopping navbar triangle' class='img-rt-pnt-tri' /><span class='shopping-navbar-section-next'>2.) SHOPPING CART</span><span class='shopping-navbar-section'>3.) CHECKOUT:</span><span class='shopping-navbar-section'>Shipping</span><span class='shopping-navbar-section'>Billing</span><span class='shopping-navbar-section'>Review Order</span><span class='shopping-navbar-section'>Order Confirmation</span></div>

      <p>Fake search result for: <q>4th Generation Intel Core i3 Processors (Desktop) Boxed</q><br />
      Showing 1 - 9 of 9 products.</p>

      <div class='row'>
       <div class='col-xs-2'>
        <img src='/images/javascript_shopping_cart_spa/i3-4130_19-116-946-TS_125x135.jpg' alt='Intel Core i3-4130 Processor (3MB Cache, 3.40GHz) Haswell LGA1150 22nm Boxed' />
       </div>
       <div class='col-xs-7'>
        <div class='itemName'>Intel Core i3-4130 Processor (3MB Cache, 3.40GHz) Haswell LGA1150 22nm Boxed</div>
        <ul class='itemDetail'>
         <li><span>Launch Date:</span> Q3'13</li>
         <li><span># of Cores:</span> 2</li>
         <li><span>Max TDP:</span> 54W</li>
         <li><span>Processor Graphics:</span> Intel HD Graphics 4400</li>
         <li><span>Model #:</span> BX80646I34130</li>
        </ul>
       </div>
       <div class='col-xs-2 text-align-right'>
        <div class='itemPriceEach'>$117.00</div>
        <button onclick='ShoppingCartUtil.addItemToCart(\"Intel Core i3-4130 Processor (3MB Cache, 3.40GHz) Haswell LGA1150 22nm Boxed\")' class='btn btn-sm'>Add<span class='hidden-xs'>&nbsp;To&nbsp;Cart</span>&nbsp;&gt;</button>
       </div>
      </div>
      <div class='row'>
       <div class='col-xs-2'>
        <img src='/images/javascript_shopping_cart_spa/i3-4150_19-116-995-TS_125x135.jpg' alt='Intel Core i3-4150 Processor (3MB Cache, 3.50GHz) Haswell LGA1150 22nm Boxed' />
       </div>
       <div class='col-xs-7'>
        <div class='itemName'>Intel Core i3-4150 Processor (3MB Cache, 3.50GHz) Haswell LGA1150 22nm Boxed</div>
        <ul class='itemDetail'>
         <li><span>Launch Date:</span> Q2'14</li>
         <li><span># of Cores:</span> 2</li>
         <li><span>Max TDP:</span> 54W</li>
         <li><span>Processor Graphics:</span> Intel HD Graphics 4400</li>
         <li><span>Model #:</span> BX80646I34150</li>
        </ul>
       </div>
       <div class='col-xs-2 text-align-right'>
        <div class='itemPriceEach'>$117.00</div>
        <button onclick='ShoppingCartUtil.addItemToCart(\"Intel Core i3-4150 Processor (3MB Cache, 3.50GHz) Haswell LGA1150 22nm Boxed\")' class='btn btn-sm'>Add<span class='hidden-xs'>&nbsp;To&nbsp;Cart</span>&nbsp;&gt;</button>
       </div>
      </div>
      <div class='row'>
       <div class='col-xs-2'>
        <img src='/images/javascript_shopping_cart_spa/i3-4160_19-117-447-01_125x135.jpg' alt='Intel Core i3-4160 Processor (3MB Cache, 3.60GHz) Haswell LGA1150 22nm Boxed' />
       </div>
       <div class='col-xs-7'>
        <div class='itemName'>Intel Core i3-4160 Processor (3MB Cache, 3.60GHz) Haswell LGA1150 22nm Boxed</div>
        <ul class='itemDetail'>
         <li><span>Launch Date:</span> Q3'14</li>
         <li><span># of Cores:</span> 2</li>
         <li><span>Max TDP:</span> 54W</li>
         <li><span>Processor Graphics:</span> Intel HD Graphics 4400</li>
         <li><span>Model #:</span> BX80646I34160</li>
        </ul>
       </div>
       <div class='col-xs-2 text-align-right'>
        <div class='itemPriceEach'>$117.00</div>
        <button onclick='ShoppingCartUtil.addItemToCart(\"Intel Core i3-4160 Processor (3MB Cache, 3.60GHz) Haswell LGA1150 22nm Boxed\")' class='btn btn-sm'>Add<span class='hidden-xs'>&nbsp;To&nbsp;Cart</span>&nbsp;&gt;</button>
       </div>
      </div>
      <div class='row'>
       <div class='col-xs-2'>
        <img src='/images/javascript_shopping_cart_spa/i3-4170_19-117-543-02_125x135.jpg' alt='Intel Core i3-4170 Processor (3MB Cache, 3.70GHz) Haswell LGA1150 22nm Boxed' />
       </div>
       <div class='col-xs-7'>
        <div class='itemName'>Intel Core i3-4170 Processor (3MB Cache, 3.70GHz) Haswell LGA1150 22nm Boxed</div>
        <ul class='itemDetail'>
         <li><span>Launch Date:</span> Q1'15</li>
         <li><span># of Cores:</span> 2</li>
         <li><span>Max TDP:</span> 54W</li>
         <li><span>Processor Graphics:</span> Intel HD Graphics 4400</li>
         <li><span>Model #:</span> BX80646I34170</li>
        </ul>
       </div>
       <div class='col-xs-2 text-align-right'>
        <div class='itemPriceEach'>$117.00</div>
        <button onclick='ShoppingCartUtil.addItemToCart(\"Intel Core i3-4170 Processor (3MB Cache, 3.70GHz) Haswell LGA1150 22nm Boxed\")' class='btn btn-sm'>Add<span class='hidden-xs'>&nbsp;To&nbsp;Cart</span>&nbsp;&gt;</button>
       </div>
      </div>
      <div class='row'>
       <div class='col-xs-2'>
        <img src='/images/javascript_shopping_cart_spa/i3-4330_19-116-945-TS_125x135.jpg' alt='Intel Core i3-4330 Processor (4MB Cache, 3.50GHz) Haswell LGA1150 22nm Boxed' />
       </div>
       <div class='col-xs-7'>
        <div class='itemName'>Intel Core i3-4330 Processor (4MB Cache, 3.50GHz) Haswell LGA1150 22nm Boxed</div>
        <ul class='itemDetail'>
         <li><span>Launch Date:</span> Q3'13</li>
         <li><span># of Cores:</span> 2</li>
         <li><span>Max TDP:</span> 54W</li>
         <li><span>Processor Graphics:</span> Intel HD Graphics 4600</li>
         <li><span>Model #:</span> BX80646I34330</li>
        </ul>
       </div>
       <div class='col-xs-2 text-align-right'>
        <div class='itemPriceEach'>$147.00</div>
        <button onclick='ShoppingCartUtil.addItemToCart(\"Intel Core i3-4330 Processor (4MB Cache, 3.50GHz) Haswell LGA1150 22nm Boxed\")' class='btn btn-sm'>Add<span class='hidden-xs'>&nbsp;To&nbsp;Cart</span>&nbsp;&gt;</button>
       </div>
      </div>
      <div class='row'>
       <div class='col-xs-2'>
        <img src='/images/javascript_shopping_cart_spa/i3-4340_19-116-944-TS_125x135.jpg' alt='Intel Core i3-4340 Processor (4MB Cache, 3.60GHz) Haswell LGA1150 22nm Boxed' />
       </div>
       <div class='col-xs-7'>
        <div class='itemName'>Intel Core i3-4340 Processor (4MB Cache, 3.60GHz) Haswell LGA1150 22nm Boxed</div>
        <ul class='itemDetail'>
         <li><span>Launch Date:</span> Q3'13</li>
         <li><span># of Cores:</span> 2</li>
         <li><span>Max TDP:</span> 54W</li>
         <li><span>Processor Graphics:</span> Intel HD Graphics 4600</li>
         <li><span>Model #:</span> BX80646I34340</li>
        </ul>
       </div>
       <div class='col-xs-2 text-align-right'>
        <div class='itemPriceEach'>$157.00</div>
        <button onclick='ShoppingCartUtil.addItemToCart(\"Intel Core i3-4340 Processor (4MB Cache, 3.60GHz) Haswell LGA1150 22nm Boxed\")' class='btn btn-sm'>Add<span class='hidden-xs'>&nbsp;To&nbsp;Cart</span>&nbsp;&gt;</button>
       </div>
      </div>
      <div class='row'>
       <div class='col-xs-2'>
        <img src='/images/javascript_shopping_cart_spa/i3-4350_19-116-994-TS_125x135.jpg' alt='Intel Core i3-4350 Processor (4MB Cache, 3.60GHz) Haswell LGA1150 22nm Boxed' />
       </div>
       <div class='col-xs-7'>
        <div class='itemName'>Intel Core i3-4350 Processor (4MB Cache, 3.60GHz) Haswell LGA1150 22nm Boxed</div>
        <ul class='itemDetail'>
         <li><span>Launch Date:</span> Q2'14</li>
         <li><span># of Cores:</span> 2</li>
         <li><span>Max TDP:</span> 54W</li>
         <li><span>Processor Graphics:</span> Intel HD Graphics 4600</li>
         <li><span>Model #:</span> BX80646I34350</li>
        </ul>
       </div>
       <div class='col-xs-2 text-align-right'>
        <div class='itemPriceEach'>$147.00</div>
        <button onclick='ShoppingCartUtil.addItemToCart(\"Intel Core i3-4350 Processor (4MB Cache, 3.60GHz) Haswell LGA1150 22nm Boxed\")' class='btn btn-sm'>Add<span class='hidden-xs'>&nbsp;To&nbsp;Cart</span>&nbsp;&gt;</button>
       </div>
      </div>
      <div class='row'>
       <div class='col-xs-2'>
        <img src='/images/javascript_shopping_cart_spa/i3-4360_19-116-993-TS_125x135.jpg' alt='Intel Core i3-4360 Processor (4MB Cache, 3.70GHz) Haswell LGA1150 22nm Boxed' />
       </div>
       <div class='col-xs-7'>
        <div class='itemName'>Intel Core i3-4360 Processor (4MB Cache, 3.70GHz) Haswell LGA1150 22nm Boxed</div>
        <ul class='itemDetail'>
         <li><span>Launch Date:</span> Q2'14</li>
         <li><span># of Cores:</span> 2</li>
         <li><span>Max TDP:</span> 54W</li>
         <li><span>Processor Graphics:</span> Intel HD Graphics 4600</li>
         <li><span>Model #:</span> BX80646I34360</li>
        </ul>
       </div>
       <div class='col-xs-2 text-align-right'>
        <div class='itemPriceEach'>$147.00</div>
        <button onclick='ShoppingCartUtil.addItemToCart(\"Intel Core i3-4360 Processor (4MB Cache, 3.70GHz) Haswell LGA1150 22nm Boxed\")' class='btn btn-sm'>Add<span class='hidden-xs'>&nbsp;To&nbsp;Cart</span>&nbsp;&gt;</button>
       </div>
      </div>
      <div class='row'>
       <div class='col-xs-2'>
        <img src='/images/javascript_shopping_cart_spa/i3-4370_19-117-446-TS_125x135.jpg' alt='Intel Core i3-4370 Processor (4MB Cache, 3.80GHz) Haswell LGA1150 22nm Boxed' />
       </div>
       <div class='col-xs-7'>
        <div class='itemName'>Intel Core i3-4370 Processor (4MB Cache, 3.80GHz) Haswell LGA1150 22nm Boxed</div>
        <ul class='itemDetail'>
         <li><span>Launch Date:</span> Q3'14</li>
         <li><span># of Cores:</span> 2</li>
         <li><span>Max TDP:</span> 54W</li>
         <li><span>Processor Graphics:</span> Intel HD Graphics 4600</li>
         <li><span>Model #:</span> BX80646I34370</li>
        </ul>
       </div>
       <div class='col-xs-2 text-align-right'>
        <div class='itemPriceEach'>$147.00</div>
        <button onclick='ShoppingCartUtil.addItemToCart(\"Intel Core i3-4370 Processor (4MB Cache, 3.80GHz) Haswell LGA1150 22nm Boxed\")' class='btn btn-sm'>Add<span class='hidden-xs'>&nbsp;To&nbsp;Cart</span>&nbsp;&gt;</button>
       </div>
      </div>

      <p>
       <button type='button' id='shoppingGoToShoppingCartBtnId' class='btn btn-md'>Shopping Cart &gt;</button>
      </p>

      <p class='endnotes'>Processor images from <a href='http://www.newegg.com'>Newegg (newegg.com)</a>.<br />
       Processor prices per <a href='http://ark.intel.com/products/family/75025/4th-Generation-Intel-Core-i3-Processors/desktop#@Desktop'>4th Generation Intel Core i3 Processors (Desktop) (ark.intel.com)</a> 11 Jun 2015.</p>

     </div><!-- Close id='shoppingContainerId'. -->

<!-- 2.) SHOPPING CART -->

     <div id='shoppingCartContainerId' class='display-none min-height-100vh'>

      <div class='shopping-navbar'><span onclick='ShoppingCartUtil.navTo(\"Shopping\")' class='shopping-navbar-section-back'>1.) SHOPPING</span><span class='shopping-navbar-section-active'>2.) SHOPPING CART</span><img src='/images/javascript_shopping_cart_spa/rt_pnt_tri_6x28.gif' alt='Next pointing shopping navbar triangle' class='img-rt-pnt-tri' /><span class='shopping-navbar-section-next'>3.) CHECKOUT:</span><span class='shopping-navbar-section'>Shipping</span><span class='shopping-navbar-section'>Billing</span><span class='shopping-navbar-section'>Review Order</span><span class='shopping-navbar-section'>Order Confirmation</span></div>

      <div id='shoppingCartEmptyReportContainerId'>

       <p id='shoppingCartLineItemsReportContainerId'>Your shopping cart is empty. Please continue shopping and select an item to purchase.</p>

       <p>
        <button type='button' id='returnToShoppingBtn1Id' onclick='ShoppingCartUtil.navTo(\"Shopping\")' class='btn btn-md'>&lt; Continue Shopping</button>
       </p>

      </div><!-- Close id='shoppingCartEmptyReportContainerId'. -->

      <div id='shoppingCartFullReportContainerId'>

       <form name='shoppingCartLineItemsReportFormContainer' id='shoppingCartLineItemsReportFormContainerId' novalidate></form>

       <p>
        <button type='button' id='shoppingCartUpdateQuantitiesBtnId' class='btn btn-md'>Update Quantities</button>
       </p>

       <table class='shopping-cart-forms-table'>
        <tbody>
         <tr>
          <td class='text-align-right'><b>Shipping:</b></td>
          <td id='shoppingCartShippingPriceCellId' class='shopping-cart-forms-table-total-cell'></td>
         </tr>
         <tr>
          <td colspan='2' id='shoppingCartAddDeliveryMethodRadioBtnId'><b>Delivery Method</b><br />
           <label><input type='radio' name='shoppingCartDeliveryMethodRadioBtn' id='shoppingCartDeliveryMethodRadioBtn1Id' value='Free Super Saver (4 - 7 Business Days)' /><span id='shoppingCartDeliveryMethodCssRadioBtn1Id'>&#9679;</span> $0.00 - Free Super Saver (4 - 7 Business Days)</label><br />
           <label><input type='radio' name='shoppingCartDeliveryMethodRadioBtn' id='shoppingCartDeliveryMethodRadioBtn2Id' value='3 Business Days' /><span id='shoppingCartDeliveryMethodCssRadioBtn2Id'>&#9679;</span> $5.99 - 3 Business Days</label><br />
           <label><input type='radio' name='shoppingCartDeliveryMethodRadioBtn' id='shoppingCartDeliveryMethodRadioBtn3Id' value='2 Business Days' /><span id='shoppingCartDeliveryMethodCssRadioBtn3Id'>&#9679;</span> $19.99 - 2 Business Days</label><br />
           <label><input type='radio' name='shoppingCartDeliveryMethodRadioBtn' id='shoppingCartDeliveryMethodRadioBtn4Id' value='Next Business Day' /><span id='shoppingCartDeliveryMethodCssRadioBtn4Id'>&#9679;</span> $29.99 - Next Business Day</label>
          </td>
         </tr>
         <tr>
          <td class='text-align-right'><b>Total:</b></td>
          <td id='shoppingCartGrandTotalCellId' class='shopping-cart-forms-table-total-cell'></td>
         </tr>
        </tbody>
       </table>

       <p>
        <button type='button' id='returnToShoppingBtn2Id' onclick='ShoppingCartUtil.navTo(\"Shopping\")' class='btn btn-md'>&lt; Continue Shopping</button>
        <button type='button' id='processShoppingCart_checkoutBtnId' class='btn btn-md'>Checkout &gt;</button>
       </p>

      </div><!-- Close id='shoppingCartFullReportContainerId'. -->

     </div><!-- Close id='shoppingCartContainerId'. -->

<!-- 3a.) CHECKOUT: SHIPPING -->

     <div id='shippingContainerId' class='display-none min-height-100vh'>

      <div class='shopping-navbar'><span onclick='ShoppingCartUtil.navTo(\"Shopping\")' class='shopping-navbar-section-back'>1.) SHOPPING</span><span onclick='ShoppingCartUtil.navTo(\"Shopping Cart\")' class='shopping-navbar-section-back'>2.) SHOPPING CART</span><span class='shopping-navbar-section'>3.) CHECKOUT:</span><span class='shopping-navbar-section-active'>Shipping</span><img src='/images/javascript_shopping_cart_spa/rt_pnt_tri_6x28.gif' alt='Next pointing shopping navbar triangle' class='img-rt-pnt-tri' /><span class='shopping-navbar-section-next'>Billing</span><span class='shopping-navbar-section'>Review Order</span><span class='shopping-navbar-section'>Order Confirmation</span></div>

      <p class='subsection-title'>Shipping Information</p>

      <form name='shippingForm' id='shippingFormId' novalidate>

       <p><label>First Name<br />
        <input type='text' size='40' maxlength='40' name='shippingFirstName' id='shippingFirstNameId' data-validationtype='inputText_firstName' /></label></p>

       <p><label>Last Name<br />
        <input type='text' size='40' maxlength='40' name='shippingLastName' id='shippingLastNameId' data-validationtype='inputText_lastName' /></label></p>

       <p><label>Address<br />
        <input type='text' size='40' maxlength='80' name='shippingAddress' id='shippingAddressId' data-validationtype='inputText_address' /></label></p>

       <p><label>Address2 (optional) apartment, suite, floor, etc.<br />
        <input type='text' size='40' maxlength='80' name='shippingAddress2' id='shippingAddress2Id' data-validationtype='inputText_address2Optional' /></label></p>

       <p><label>City<br />
        <input type='text' size='40' maxlength='60' name='shippingCity' id='shippingCityId' data-validationtype='inputText_city' /></label></p>

       <p>
        <label>State<br />
         <select size='1' name='shippingState' id='shippingStateId' data-validationtype='selectOption_state'>
          <option value='' label=' '> </option>
          <option value='--'>--</option>
          <option value='AL'>AL</option>
          <option value='AK'>AK</option>
          <option value='AZ'>AZ</option>
          <option value='AR'>AR</option>
          <option value='CA'>CA</option>
          <option value='CO'>CO</option>
          <option value='CT'>CT</option>
          <option value='DE'>DE</option>
          <option value='DC'>DC</option>
          <option value='FL'>FL</option>
          <option value='GA'>GA</option>
          <option value='HI'>HI</option>
          <option value='ID'>ID</option>
          <option value='IL'>IL</option>
          <option value='IN'>IN</option>
          <option value='IA'>IA</option>
          <option value='KS'>KS</option>
          <option value='KY'>KY</option>
          <option value='LA'>LA</option>
          <option value='ME'>ME</option>
          <option value='MD'>MD</option>
          <option value='MA'>MA</option>
          <option value='MI'>MI</option>
          <option value='MN'>MN</option>
          <option value='MS'>MS</option>
          <option value='MO'>MO</option>
          <option value='MT'>MT</option>
          <option value='NE'>NE</option>
          <option value='NV'>NV</option>
          <option value='NH'>NH</option>
          <option value='NJ'>NJ</option>
          <option value='NM'>NM</option>
          <option value='NY'>NY</option>
          <option value='NC'>NC</option>
          <option value='ND'>ND</option>
          <option value='OH'>OH</option>
          <option value='OK'>OK</option>
          <option value='OR'>OR</option>
          <option value='PA'>PA</option>
          <option value='RI'>RI</option>
          <option value='SC'>SC</option>
          <option value='SD'>SD</option>
          <option value='TN'>TN</option>
          <option value='TX'>TX</option>
          <option value='UT'>UT</option>
          <option value='VT'>VT</option>
          <option value='VA'>VA</option>
          <option value='WA'>WA</option>
          <option value='WV'>WV</option>
          <option value='WI'>WI</option>
          <option value='WY'>WY</option>
         </select>
        </label>
       </p>

       <p><label>Zip Code (format: 12345)<br />
        <input type='text' size='5' maxlength='5' name='shippingZipCode' id='shippingZipCodeId' data-validationtype='inputText_zipCode' /></label></p>

       <p><label>Phone Number (format: 1234567890 or 123-456-7890)<br />
        <input type='tel' size='12' maxlength='12' name='shippingPhoneNumber' id='shippingPhoneNumberId' data-validationtype='inputTel_phoneNumber' /></label></p>

       <p><label>Email Address<br />
        <input type='email' size='40' maxlength='80' name='shippingEmailAddress' id='shippingEmailAddressId' data-validationtype='inputEmail_emailAddress' /></label></p>

       <p><label>Confirm Email Address<br />
        <input type='email' size='40' maxlength='80' name='shippingEmailAddressConfirm' id='shippingEmailAddressConfirmId' data-validationtype='inputEmail_emailAddressConfirm' /></label></p>

       <p>
        <button type='button' id='returnToShoppingBtn3Id' data-validationtype='doNotValidateMe' onclick='ShoppingCartUtil.navTo(\"Shopping\")' class='btn btn-md'>&lt; Continue Shopping</button>
        <button type='submit' id='processShipping_goToBillingBtnId' data-validationtype='doNotValidateMe' class='btn btn-md'>Billing &gt;</button>
       </p>

      </form>
 
     </div><!-- Close id='shippingContainerId'. -->

<!-- 3b.) CHECKOUT: BILLING -->

     <div id='billingContainerId' class='display-none min-height-100vh'>

      <div class='shopping-navbar'><span onclick='ShoppingCartUtil.navTo(\"Shopping\")' class='shopping-navbar-section-back'>1.) SHOPPING</span><span onclick='ShoppingCartUtil.navTo(\"Shopping Cart\")' class='shopping-navbar-section-back'>2.) SHOPPING CART</span><span class='shopping-navbar-section'>3.) CHECKOUT:</span><span onclick='ShoppingCartUtil.navTo(\"Shipping\")' class='shopping-navbar-section-back'>Shipping</span><span class='shopping-navbar-section-active'>Billing</span><img src='/images/javascript_shopping_cart_spa/rt_pnt_tri_6x28.gif' alt='Next pointing shopping navbar triangle' class='img-rt-pnt-tri' /><span class='shopping-navbar-section-next'>Review Order</span><span class='shopping-navbar-section'>Order Confirmation</span></div>

      <p class='subsection-title'>Billing Information</p>

      <form name='billingCreditCardForm' id='billingCreditCardFormId' novalidate>

       <p><label>Cardholder Name (exactly as shown on card)<br />
        <input type='text' size='40' maxlength='85' name='billingCreditCardholderName' id='billingCreditCardholderNameId' data-validationtype='inputText_creditCardholderName' /></label></p>

       <p><label>Card Number (format: 1234567890123456 or 1234 5678 9012 3456)<br />
        <input type='text' size='19' maxlength='19' name='billingCreditCardNumber' id='billingCreditCardNumberId' data-validationtype='inputText_creditCardNumber' /></label></p>

       <p>Expiration Month<br />
        <select size='1' name='billingCreditCardExpirationMonth' id='billingCreditCardExpirationMonthId' data-validationtype='selectOption_creditCardExpirationMonth'>
         <option value='' label=' '> </option>
         <option value='--'>--</option>
         <option value='01'>01</option>
         <option value='02'>02</option>
         <option value='03'>03</option>
         <option value='04'>04</option>
         <option value='05'>05</option>
         <option value='06'>06</option>
         <option value='07'>07</option>
         <option value='08'>08</option>
         <option value='09'>09</option>
         <option value='10'>10</option>
         <option value='11'>11</option>
         <option value='12'>12</option>
        </select>
       </p>

       <p>Expiration Year<br />
        <select size='1' name='billingCreditCardExpirationYear' id='billingCreditCardExpirationYearId' data-validationtype='selectOption_creditCardExpirationYear'>
         <option value='' label=' '> </option>
         <option value='----'>----</option>
         <option value='2018'>2018</option>
         <option value='2019'>2019</option>
         <option value='2020'>2020</option>
         <option value='2021'>2021</option>
         <option value='2022'>2022</option>
         <option value='2023'>2023</option>
         <option value='2024'>2024</option>
         <option value='2025'>2025</option>
         <option value='2026'>2026</option>
         <option value='2027'>2027</option>
         <option value='2028'>2028</option>
         <option value='2029'>2029</option>
         <option value='2030'>2030</option>
        </select>
       </p>

       <p><label>Security Code<br />
        <input type='text' size='3' maxlength='3' name='billingCreditCardSecurityCode' id='billingCreditCardSecurityCodeId' data-validationtype='inputText_creditCardSecurityCode' /></label></p>

      </form>
 
      <p class='subsection-title'>Billing Address</p>

      <p><label><input type='checkbox' name='billingEditShippingInfoToBillingInfoCheckbox' id='billingEditShippingInfoToBillingInfoCheckboxId' checked='checked' /><span>&#10003;</span> Same as the shipping address:</label></p>

      <p id='billingInformationFormContainerId' class='display-none'></p>

      <p id='shippingInformationReportContainerId'></p>

      <p>
       <button type='button' id='returnToShoppingBtn4Id' onclick='ShoppingCartUtil.navTo(\"Shopping\")' class='btn btn-md'>&lt; Continue Shopping</button>
       <button type='button' id='processBilling_goToReviewOrderBtnId' class='btn btn-md'>Review Order &gt;</button>
      </p>

     </div><!-- Close class='billingContainerId'. -->

<!-- 3c.) CHECKOUT: REVIEW ORDER -->

     <div id='reviewOrderContainerId' class='display-none min-height-100vh'>

      <div class='shopping-navbar'><span onclick='ShoppingCartUtil.navTo(\"Shopping\")' class='shopping-navbar-section-back'>1.) SHOPPING</span><span onclick='ShoppingCartUtil.navTo(\"Shopping Cart\")' class='shopping-navbar-section-back'>2.) SHOPPING CART</span><span class='shopping-navbar-section'>3.) CHECKOUT:</span><span onclick='ShoppingCartUtil.navTo(\"Shipping\")' class='shopping-navbar-section-back'>Shipping</span><span onclick='ShoppingCartUtil.navTo(\"Billing\")' class='shopping-navbar-section-back'>Billing</span><span class='shopping-navbar-section-active'>Review Order</span><img src='/images/javascript_shopping_cart_spa/rt_pnt_tri_6x28.gif' alt='Next pointing shopping navbar triangle' class='img-rt-pnt-tri' /><span class='shopping-navbar-section-next'>Order Confirmation</span></div>

      <p class='subsection-title'>Shopping Cart&nbsp;&nbsp;<button type='button' onclick='ShoppingCartUtil.navTo(\"Shopping Cart\")' class='btn-xs'>Edit</button></p>

      <p>Products:<br />
       <span id='reviewOrderLineItemsReportContainerId'>Your shopping cart is empty. Please continue shopping and select an item to purchase.</span></p>

      <p>Delivery Method:<br />
       <span id='reviewOrderDeliveryMethodReportContainerId'>There is no delivery method. Please return to the shopping cart and select a delivery method.</span></p>

      <p>Total:<br />
       <span id='reviewOrderGrandTotalContainerId'></span></p>

      <p class='subsection-title'>Shipping Information&nbsp;&nbsp;<button type='button' onclick='ShoppingCartUtil.navTo(\"Shipping\")' class='btn-xs'>Edit</button></p>

      <p id='reviewOrderShippingInformationReportContainerId'></p>

      <p class='subsection-title'>Billing Information&nbsp;&nbsp;<button type='button' onclick='ShoppingCartUtil.navTo(\"Billing\")' class='btn-xs'>Edit</button></p>

      <p id='reviewOrderBillingInformationReportContainerId'></p>

      <p>
       <button type='button' id='returnToShoppingBtn5Id' onclick='ShoppingCartUtil.navTo(\"Shopping\")' class='btn btn-md'>&lt; Continue Shopping</button>
       <button type='button' id='placeFakeOrderBtnId' class='btn btn-md'>Place Fake Order/Order Confirmation &gt;</button>
      </p>

     </div><!-- Close id='reviewOrderContainerId'. -->

<!-- 3d.) CHECKOUT: ORDER CONFIRMATION -->

     <div id='orderConfirmationContainerId' class='display-none min-height-100vh'>

      <div class='shopping-navbar'><span onclick='ShoppingCartUtil.navTo(\"Shopping\")' class='shopping-navbar-section-back'>1.) SHOPPING</span><span onclick='ShoppingCartUtil.navTo(\"Shopping Cart\")' class='shopping-navbar-section-back'>2.) SHOPPING CART</span><span class='shopping-navbar-section'>3.) CHECKOUT:</span><span onclick='ShoppingCartUtil.navTo(\"Shipping\")' class='shopping-navbar-section-back'>Shipping</span><span onclick='ShoppingCartUtil.navTo(\"Billing\")' class='shopping-navbar-section-back'>Billing</span><span onclick='ShoppingCartUtil.navTo(\"Review Order\")' class='shopping-navbar-section-back'>Review Order</span><span class='shopping-navbar-section-active'>Order Confirmation</span></div>

      <p id='orderConfirmationReportContainerId'></p>

      <p>
       <button type='button' id='returnToShoppingBtnId' onclick='ShoppingCartUtil.navTo(\"Shopping\")' class='btn btn-md'>&lt; Continue Shopping</button>
      </p>

     </div><!-- Close id='orderConfirmationContainerId'. -->

    </section>";
