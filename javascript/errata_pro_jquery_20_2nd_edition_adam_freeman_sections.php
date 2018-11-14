<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/errata_pro_jquery_20_2nd_edition_adam_freeman_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/errata_pro_jquery_20_2nd_edition_adam_freeman.php.
 * Last reviewed/updated: 13 Nov 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Unfortunately, <a href='http://www.apress.com/9781430263883'>Apress Pro jQuery 2.0 2nd Edition by Adam Freeman (ISBN-13: 9781430263883)</a> was not properly edited. Moreover, Apress has not published any submitted errata/suggestions. Otherwise, it would be an excellent book.</p>

     <div class='note normal'>Often below the errata for the source code book listings also applies to the corresponding source code download files. Also, when a block of source code is used in multiple listings, the errata for the initial block of source code also applies to the subsequent blocks of source code.</div>

    </section>
    <hr />
    <section>

     <h2><a id='ch1'></a>2. Chapter 1: Putting jQuery In Context</h2>

     <ol>
      <li>
       <p><!-- 1 --><b>Ch1 p1.</b></p>

       <p><b>Text reads:&nbsp;</b> I can do more work with much code.</p>

       <p><b>Change to:&nbsp;</b> I can do more work with less code.</p>

       <p><b>Why:&nbsp;</b> The wrong word is used.</p>
      </li>
      <li>
       <p><!-- 2 --><b>Ch1 p1.</b></p>

       <p><b>Text reads:&nbsp;</b> When I don't understand how something works or I don't quite get the result I expect, I can read through the JavaScript code and, if needed, make changes.</p>

       <p><b>Change to:&nbsp;</b> When I don't understand how something works or I don't quite get the result I expect, I can read through the jQuery source code, which is written in JavaScript, and make any needed changes.</p>

       <p><b>Why:&nbsp;</b> To clarify that jQuery is written in JavaScript.</p>
      </li>
      <li>
       <p><!-- 3 --><b>Ch1 p6.</b></p>

       <p><b>Text reads:&nbsp;</b> The very first thing you need is the jQuery library, which is available from http://jquery.com.</p>

       <p><b>Change to:&nbsp;</b> The source code download for the book examples includes the jQuery library. Therefore, if you are using the source code download for the book examples, then you already have the jQuery library. If you are not using the source code download for the book examples, then you need to download the jQuery library, which is available from http://jquery.com.</p>

       <p><b>Why:&nbsp;</b> To clarify that if you are using the source code download for the examples in this book, then you do not need to download the jQuery library.</p>
      </li>
      <li>
       <p><!-- 4 --><a id='4_ch1_p7'></a><b>Ch1 p7.</b></p>

       <p><b>Text reads:&nbsp;</b> If you want to re-create the examples in this book, you will need a web server so that the browser has somewhere from which to load the example HTML document and related resources (such as images and JavaScript files).</p>

       <p><b>Change to:&nbsp;</b> To recreate the examples for the majority of this book, simply open the source code download <span class='filename'>.html</span> files in a web browser. To recreate the examples for Chapters 14 and 15, you will need a web server.</p>

       <p><b>Why:&nbsp;</b> To clarify that the majority of the book does not require a web server. Instead, simply open the source code download <span class='filename'>.html</span> files in a web browser.</p>

       <p><b>Note:&nbsp;</b> As I read more of the book, this note will be updated to include any additional chapters that require a web server.</p>
      </li>
      <li>
       <p><!-- 5 --><b>Ch1 p8.</b></p>

       <p><b>Text reads:&nbsp;</b> Starting in Part 3, you’ll be using Node.js in addition to a regular web server.</p>

       <p><b>Change to:&nbsp;</b> Starting in Part 3, you’ll be using Node.js.</p>

       <p><b>Why:&nbsp;</b> The majority of the book does not require a web server. Instead, simply open the source code download <span class='filename'>.html</span> files in a web browser.</p>
      </li>
      <li>
       <p><!-- 6 --><b>Ch1 p8.</b></p>

       <p><b>Text reads:</b></p>

       <p>The simplest way to test Node.js is with a simple script....You should see something very similar to Figure 1-2, indicating that everything is as expected.</p>

       <p><b>Change to:&nbsp;</b></p>

       <p>To install Node.js:</p>

       <ol>
        <li>Download Node.js from <a href='https://nodejs.org/en/download/'>Node.js Downloads (nodejs.org)</a>. For Windows, download the Windows Installer <span class='filename'>(.msi)</span> file.</li>
        <li>Install Node.js. For Windows, double click the downloaded <span class='filename'>.msi</span> file and use the default settings.</li>
       </ol>

       <p>To test the Node.js installation, run <span class='filename'>nodetest.js</span>:</p>

       <ol>
        <li>Open the terminal (Linux)/command prompt (Windows).
        <li>Navigate the terminal/command prompt to the drive/directory containing <span class='filename'>nodetest.js</span>.</li>
        <li>Type <kbd>node.exe nodetest.js</kbd> and press <kbd>Enter</kbd>.</li>
        <li>If the <q>Ready on port 80</q> report appears, Node.js is properly installed and <span class='filename'>nodetest.js</span> is running and listening on port 80. To confirm, open your web browser to http://localhost/. You should see a web page very similar to Figure 1-2.</li>
       </ol>

       <p><b>Why:&nbsp;</b> To clarify how to install Node.js. To clarify how to test the Node.js installation. The source code download file is <span class='filename'>nodetest.js</span>, not <span class='filename'>Nodetest.js</span>. The command to run <span class='filename'>nodetest.js</span> is issued at the terminal/command prompt, not at the console prompt. The <kbd>node.exe nodetest.js</kbd> command to run <span class='filename'>nodetest.js</span> requires that the terminal/command prompt is navigated to the drive/directory containing <span class='filename'>nodetest.js</span>. Otherwise, the command to run <span class='filename'>nodetest.js</span> requires the path to <span class='filename'>nodetest.js</span>.</p>

       <p><b>Note:&nbsp;</b> To stop <span class='filename'>nodetest.js</span> from running, close the terminal/command prompt.</p>
      </li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='ch13'></a>3. Chapter 13: Working With Forms</h2>

     <div class='note normal'>
      <ul>
       <li><a id='ch13_requirements'></a>Chapter 13 does not require a web server. Instead, simply open the source code download <span class='filename'>.html</span> files in a web browser. If you decide to install a web server, the web server can be installed on your local computer. It is not necessary to install the web server on a separate <q>server</q> computer.</li>
       <li>Chapter 13 requires Node.js. Node.js can be installed on your local computer. It is not necessary to install Node.js on a separate <q>server</q> computer.</li>
       <li>It is strongly recommended that a computer does not have two processes listening on the same port. By default, web servers listen on port 80. By default, the Node.js <span class='filename'>formserver.js</span> script also listens on port 80. Therefore, if you install a web server and Node.js on your local computer, either the web server or the <span class='filename'>formserver.js</span> listening port must be changed. It is strongly recommended, and typically easiest, to keep the web server on port 80, which means changing the <span class='filename'>formserver.js</span> listening port. Port 8080 is the typical first alternate to port 80.</li>
        <li><a id='ch13_configure_formserver_to_listen_on_port_8080'></a>Chapter 13 does not require a web server, but does require Node.js. Therefore, if you do not install a web server on your local computer, there should be no problem installing Node.js on your local computer and running the Node.js <span class='filename'>formserver.js</span> script to listen on port 80. Regardless, instead of running <span class='filename'>formserver.js</span> to listen on port 80, it will be changed to listen on port 8080. There are two reasons for this. First, if you decide to install a web server on your local computer, the <span class='filename'>formserver.js</span> listening port will already be changed. Second, chapters 14 and 15 require a web server and Node.js, and if you decide to install the web server and Node.js on your local computer, the <span class='filename'>formserver.js</span> listening port must be changed. Either way, to possibly avoid confusing matters even worse by configuring <span class='filename'>formserver.js</span> to listen on a different port in chapter 13 (port 80) and chapters 14 and 15 (port 8080), it was decided to write this note and to configure <span class='filename'>formserver.js</span> to listen on port 8080 throughout.</li>
      </ul>
     </div>	

     <ol>
      <li>
       <p><!-- 1 --><a id='1_ch13_p310'></a><b>Ch13 p310.</b></p>

       <p><b>Listing 13-1 reads:&nbsp;</b> <code>var port = 80;</code></p>

       <p><b>Change to:&nbsp;</b> <code>var port = 80<b>80</b>;</code></p>

       <p><b>Why:&nbsp;</b> Per the note to <a href='#ch13_configure_formserver_to_listen_on_port_8080'>change the Node.js <span class='filename'>formserver.js</span> script listening port to 8080 (above)</a>.</p>

       <p><b>Note:&nbsp;</b> Listing 13-1 is source code download <span class='filename'>formserver.js</span>.</p>
      </li>
      <li>
       <p><!-- 2 --><b>Ch13 p311.</b></p>

       <p><b>Text reads:</b></p>

       <p>To run this script, I enter the following at the command line: <kbd>node.exe formserver.js</kbd></p>

       <p><b>Change to:</b></p>

       <p>To run the Node.js <span class='filename'>formserver.js</span> script:</p>

       <ol>
        <li>If you installed Node.js on your local computer, first change the Node.js <span class='filename'>formserver.js</span> script to listen on port 8080 per <a href='#1_ch13_p310'>1. Ch13 p310 (above)</a>.</li>
        <li>Open the terminal (Linux)/command prompt (Windows).</li>
        <li>Navigate the terminal/command prompt to the drive/directory containing <span class='filename'>formserver.js</span>.</li>
        <li>Type <kbd>node.exe formserver.js</kbd> and press <kbd>Enter</kbd>.</li>
        <li>If the <q>Ready on port 8080</q> report appears, the Node.js <span class='filename'>formserver.js</span> script is running and listening on port 8080.</li>
       </ol>

       <p><b>Why:&nbsp;</b> To clarify that the <kbd>node.exe formserver.js</kbd> command requires that the terminal/command prompt is navigated to the drive/directory containing <span class='filename'>formserver.js</span>. Otherwise, the command to run <span class='filename'>formserver.js</span> requires the path to <span class='filename'>formserver.js</span>.</p>

       <p><b>Note:&nbsp;</b> To stop the Node.js <span class='filename'>formserver.js</span> script from running, close the terminal/command prompt. Unlike <span class='filename'>nodetest.js</span> in Chapter 1, <span class='filename'>formserver.js</span> does not display a <q>Node.js is working</q> confirmation web page.</p>
      </li>
      <li>
       <p><!-- 3 --><b>Ch13 p311.</b></p>

       <p><b>Text reads:&nbsp;</b> I will use the example document shown in Listing 13-2, which I saved as <span class='filename'>example.html</span>.</p>

       <p><b>Change to:&nbsp;</b> I will use the example document shown in Listing 13-2, which I saved as <span class='filename'>Listing-02.html</span>.</p>

       <p><b>Why:&nbsp;</b> Listing 13-2 corresponds to source code download <span class='filename'>Listing-02.html</span>, not <span class='filename'>example.html</span>. Source code download <span class='filename'>example.html</span> is not used in Chapter 13 and should be deleted.</p>
      </li>
      <li>
       <p><!-- 4 --><b>Ch13 p311.</b></p>

       <p><b>Listing 13-2 reads:</b></p>

<pre>
{{#each flowers}}
...
{{/each}}
</pre>

       <p><b>Change to:</b></p>

<pre>
{{<b>#flowers</b>}}
...
{{/<b>flowers</b>}}
</pre>

       <p><b>Why:&nbsp;</b> The Handlebars <code>#each</code> helper is not used and should be deleted.</p>
      </li>
      <li>
       <p><!-- 5 --><a id='5_ch13_p312'></a><b>Ch13 p312.</b></p>

       <p><b>Listing 13-2 reads:&nbsp;</b> <code>&lt;form method=&quot;post&quot; action=&quot;http://node.jacquisflowershop.com/order&quot;&gt;</code></p>

       <p><b>Suggestion:&nbsp;</b> If you installed Node.js on your local computer, and if you changed the Node.js <span class='filename'>formserver.js</span> script to listen on port 8080 per <a href='#1_ch13_p310'>1. Ch13 p310 (above)</a>, change to:&nbsp; <code>&lt;form method=&quot;post&quot; action=&quot;http://<b>localhost:8080</b>/order&quot;&gt;</code></p>

       <p><b>Why:&nbsp;</b> Unless you installed Node.js on a computer that is assigned hostname node.jacquisflowershop.com, submitting the forms in Chapter 13 (by clicking <kbd>Place Order</kbd>) will actually submit them over the Internet to node.jacquisflowershop.com, which is not recommended.</p>

       <p><b>Note:&nbsp;</b> If you installed Node.js on your local computer, and if you changed the Node.js <span class='filename'>formserver.js</span> script to listen on port 8080 per <a href='#1_ch13_p310'>1. Ch13 p310 (above)</a>, you can change all Chapter 13 instances of <code>http://node.jacquisflowershop.com/order</code> to <code>http://<b>localhost:8080</b>/order</code> or <code>http://<b>localhost:8080/</b></code>. Both <code>http://localhost:8080/order</code> and <code>http://localhost:8080/</code> work.</p>
      </li>
      <li>
       <p><!-- 6 --><b>Ch13 p312.</b></p>

       <p><b>Text reads:&nbsp;</b> I am using two different servers...you can see that I have entered some values into the <code>input</code> elements in the document.</p>

       <p><b>Change to:&nbsp;</b> Delete the text.</p>

       <p><b>Why:&nbsp;</b> Per the note on <a href='#ch13_requirements'>Chapter 13 requirements (above)</a>.</p>
      </li>
      <li>
       <p><!-- 7 --><b>Ch13 p317.</b></p>

       <p><b>Listing 13-4 reads:&nbsp;</b> <code>$(&quot;&lt;div id=bbox /&gt;&quot;).appendTo(&quot;body&quot;).append(total).css(&quot;clear: left&quot;);</code></p>

       <p><b>Change to:&nbsp;</b> Delete the line.</p>

       <p><b>Why:&nbsp;</b> The line is unnecessary and stops the form from being submitted.</p>
      </li>
      <li>
       <p><!-- 8 --><b>Ch13 p318.</b></p>

       <p><b>Listing 13-6 reads:</b></p>

<pre>
$(&quot;form&quot;).submit(function (e) {
 if ($(&quot;input&quot;).val() == 0) {
  e.preventDefault();
 }
});
$(&quot;&lt;button&gt;jQuery Method&lt;/button&gt;&quot;).appendTo(&quot;#buttonDiv&quot;).click(function (e) {
 $(&quot;form&quot;).submit();
 <b>e.preventDefault();</b>
});
$(&quot;&lt;button&gt;DOM API&lt;/button&gt;&quot;).appendTo(&quot;#buttonDiv&quot;).click(function (e) {
 document.getElementsByTagName(&quot;form&quot;)[0].submit();
 <b>e.preventDefault();</b>
});
</pre>

       <p><b>Change to:</b></p>

<pre>
$(&quot;form&quot;).submit(function (e) {
 if ($(&quot;input&quot;).val() == 0) {
  e.preventDefault();
 }
});
$(&quot;&lt;button&gt;jQuery Method&lt;/button&gt;&quot;).appendTo(&quot;#buttonDiv&quot;).click(function (e) {
 $(&quot;form&quot;).submit();
});
$(&quot;&lt;button&gt;DOM API&lt;/button&gt;&quot;).appendTo(&quot;#buttonDiv&quot;).click(function (e) {
 document.getElementsByTagName(&quot;form&quot;)[0].submit();
});
</pre>

       <p><b>Why:&nbsp;</b> For the jQuery Method button code, the <code>$(&quot;form&quot;).submit();</code> line and the <code>e.preventDefault();</code>line are independent statements. The <code>$(&quot;form&quot;).submit();</code> line is executed, and finishes executing, before the <code>e.preventDefault();</code> line is executed. As a result, it is impossible for the <code>e.preventDefault();</code> line to prevent the <code>$(&quot;form&quot;).submit();</code> line from submitting. For the DOM API button code, the JavaScript <code>submit()</code> method does not trigger the JavaScript <code>submit</code> event. Therefore, it is impossible for the <code>e.preventDefault();</code> line to prevent the JavaScript <code>submit()</code> method from submitting. In both cases, the <code>e.preventDefault();</code> lines are unnecessary, serve no purpose except possibly to confuse, and, therefore, should be deleted. In sum, the only benefit to Listing 13-6 over Listing 13-5 is that Listing 13-6 demonstrates that the jQuery Method button code calls the jQuery <code>submit()</code> method function in the code above.</p>
      </li>
      <li>
       <p><!-- 9 --><b>Ch13 p320.</b></p>

       <p><b>Text reads:&nbsp;</b> As I write this, the current version is 1.1.1.</p>

       <p><b>Change to:&nbsp;</b> As I write this, the current version is 1.11.1.</p>

       <p><b>Why:&nbsp;</b> Source code download <span class='filename'>jquery.validate.js</span> is version 1.11.1, not 1.1.1.</p>
      </li>
      <li>
       <p><!-- 10 --><b>Ch13 p321.</b></p>

       <p><b>Text reads:&nbsp;</b> Copy the <span class='filename'>jquery.validate.js</span> file from the <span class='filename'>dist</span> folder so that it is in the same directory as the <span class='filename'>example.html</span> file.</p>

       <p><b>Change to:&nbsp;</b> Copy the <span class='filename'>jquery.validate.js</span> file from the <span class='filename'>dist</span> folder so that it is in the same directory as the <span class='filename'>Listing-07.html</span> file.</p>

       <p><b>Why:&nbsp;</b> Source code download <span class='filename'>example.html</span> is not used in Chapter 13 and should be deleted. The file used in conjunction with the jQuery Validation Plugin is <span class='filename'>Listing-07.html</span>.</p>
      </li>
      <li>
       <p><!-- 11 --><b>Ch13 p322.</b></p>

       <p><b>Text reads:&nbsp;</b> The first thing I have to do is bring the template plug-in JavaScript file into the document with a <code>script</code> element...</p>

       <p><b>Change to:&nbsp;</b> The first thing I have to do is bring the validation plug-in JavaScript file into the document with a <code>script</code> element...</p>

       <p><b>Why:&nbsp;</b> The jQuery Validation Plugin is a validation plug-in, not a template plug-in.</p>
      </li>
      <li>
       <p><!-- 12 --><a id='12_ch13_p322'></a><b>Ch13 p322.</b></p>

       <p><b>Text reads:&nbsp;</b> I have specified values for four options (<code>highlight</code>, <code>unhighlight</code>, <code>errorElement</code>, and <code>errorClass</code>)...</p>

       <p><b>Change to:&nbsp;</b> I have specified values for four properties (<code>highlight</code>, <code>unhighlight</code>, <code>errorElement</code>, and <code>errorClass</code>) of the <code>options</code> configuration object that is passed to the jQuery Validation Plugin <code>validate()</code> method...</p>

       <p><b>Why:&nbsp;</b> To clarify that <code>highlight</code>, <code>unhighlight</code>, <code>errorElement</code>, and <code>errorClass</code> are properties of the <code>options</code> configuration object that is passed to the jQuery Validation Plugin <code>validate()</code> method.</p>
      </li>
      <li>
       <p><!-- 13 --><b>Ch13 p324.</b></p>

       <p><b>Table 13-3 reads:&nbsp;</b> <code>max: maxVal</code> The value must be at least as large as <code>maxVal</code>.</p>

       <p><b>Change to:&nbsp;</b> <code>max: maxVal</code> The value must be no larger than <code>maxVal</code>.</p>

       <p><b>Why:&nbsp;</b> The description is incorrect.</p>
      </li>
      <li>
       <p><!-- 14 --><b>Ch13 p325.</b></p>

       <p><b>Listing 13-11 reads:</b></p>

<pre>
&lt;input name=&quot;{{product}}&quot; value=&quot;0&quot; <b>required</b> /&gt;
...
required: true,
</pre>

       <p><b>Change to:</b></p>

<pre>
&lt;input name=&quot;{{product}}&quot; value=&quot;0&quot; /&gt;
...
required: true,
</pre>

       <p><b>Why:&nbsp;</b> In order to demonstrate the <code>required: true</code> validation rule, the <code>input</code> element <code>required</code> attribute must be removed.</p>
      </li>
      <li>
       <p><!-- 15 --><b>Ch13 p326.</b></p>

       <p><b>Text reads:&nbsp;</b> As shown, you call the <code>addClassRules</code> method on the <code>validator</code> property of the main jQuery <code>$</code> function.</p>

       <p><b>Change to:&nbsp;</b> The jQuery Validation Plugin <code>validate()</code> method returns a <code>Validator</code> object that is defined as a property of the main jQuery <code>$</code> function (<code>$.validator</code>). The jQuery Validation Plugin provides a number of methods on the <code>validator</code> property. As shown, the jQuery Validation Plugin <code>addClassRules()</code> method is called on the <code>validator</code> property to assign validation rules to a CSS class.</p>

       <p><b>Why:&nbsp;</b> To explain what <code>$.validator</code> is and where it comes from.</p>
      </li>
      <li>
       <p><!-- 16 --><b>Ch13 p329.</b></p>

       <p><b>Listing 13-13 reads:&nbsp;</b> <code>digits: true,</code></p>

       <p><b>Change to:&nbsp;</b> Delete the line.</p>

       <p><b>Why:&nbsp;</b> The validation rule specified by the line is never used because the form validation never reaches the line.</p>

       <p><b>Note:&nbsp;</b> Alternatively, to use the line, move it to after the <code>required: true,</code> line as shown in Listing 13-11.</p>
      </li>
      <li>
       <p><!-- 17 --><b>Ch13 p329.</b></p>

       <p><b>Add Tip/Note:&nbsp;</b> Please do not confuse rules (short for validation rules) with the jQuery Validation Plugin <code>rules()</code> method. In short, the jQuery Validation Plugin provides a number of ways to apply rules (short for validation rules) to elements. One of these is the jQuery Validation Plugin <code>rules()</code> method, which is used to apply rules (short for validation rules) directly to elements, as demonstrated in Listing 13-13.</p>

       <p><b>Why:&nbsp;</b> To clarify that the terms <q>rules</q> and <q>validation rules</q> are being used interchangeably. To clarify the difference between rules (short for validation rules) and the jQuery Validation Plugin <code>rules()</code> method.</p>
      </li>
      <li>
       <p><!-- 18 --><b>Ch13 p329.</b></p>

       <p><b>Text reads:&nbsp;</b> Rules applied to elements using the <code>rules</code> methods are evaluated before those applied using a class. For my example, this means the <code>input</code> elements on the top row will be checked using a <code>min</code> value of <code>10</code> and a <code>max</code> value of <code>20</code>, while the other <code>input</code> elements will use values of <code>0</code> and <code>100</code>, respectively.</p>

       <p><b>Change to:&nbsp;</b> The rules specified by the jQuery Validation Plugin <code>rules()</code> method and the jQuery Validation Plugin <code>addClassRules()</code> method are applied to elements. However, if both methods specify the same jQuery Validation Plugin check for an element, the value specified by the jQuery Validation Plugin <code>rules()</code> method is applied, and the value specified by the jQuery Validation Plugin <code>addClassRules()</code> method is not applied. For my example, this means all <code>input</code> elements are required, the <code>input</code> elements in row1 will be checked using a <code>min</code> value of <code>10</code> and a <code>max</code> value of <code>20</code>, and the other <code>input</code> elements will be checked using a <code>min</code> value of <code>0</code> and a <code>max</code> value of <code>100</code>.</p>

       <p><b>Why:&nbsp;</b> To clarify that the rules from the jQuery Validation Plugin <code>rules()</code> method and the jQuery Validation Plugin <code>addClassRules()</code> method are applied to elements. To clarify that if both methods specify the same jQuery Validation Plugin check for an element, the value specified by the jQuery Validation Plugin <code>rules()</code> method is applied, and the value specified by the jQuery Validation Plugin <code>addClassRules()</code> method is not applied. In other words, to clarify that if both methods specify the same jQuery Validation Plugin check for an element, the application of the value is a matter of one value overriding (i.e., negating) another value, not a matter of one value being evaluated before another value.</p>

       <p><b>Note:&nbsp;</b> Switching the position of the jQuery Validation Plugin <code>rules()</code> method and the jQuery Validation Plugin <code>addClassRules()</code> method in the source code does not matter.</p>
      </li>
      <li>
       <p><!-- 19 --><b>Ch13 p331.</b></p>

       <p><b>Listing 13-14 reads:&nbsp;</b> <code>max: data.flowers[index].stock,</code></p>

       <p><b>Change to:&nbsp;</b> <code>max: <b>Number(</b>data.flowers[index].stock<b>)</b>,</code></p>

       <p><b>Why:&nbsp;</b> It is necessary to convert the value assigned to the <code>max</code> check from a string to a number. Otherwise, for example, for Aster, entering <code>2</code> through <code>9</code> results in the erroneous validation error message, <q>Please enter a value less than or equal to 10.</q></p>
      </li>
      <li>
       <p><!-- 20 --><b>Ch13 p331.</b></p>

       <p><b>Description for Listing 13-14:&nbsp;</b> Missed opportunity to point out that the validation rules for the second argument of the jQuery Validation Plugin <code>rules()</code> method are defined in a variable, not as the second argument of the jQuery Validation Plugin <code>rules()</code> method as done in Listing 13-13.</p>
      </li>
      <li>
       <p><!-- 21 --><a id='21_ch13_p333'></a><b>Ch13 p333.</b></p>

       <p><b>Text reads:&nbsp;</b> I added rules that rely on element names using the <code>rules</code> property of the configuration object I pass to the <code>validate</code> method when I set up form validation.</p>

       <p><b>Change to:&nbsp;</b> I added rules that rely on element names using the <code>rules</code> property of the <code>options</code> configuration object that is passed to the jQuery Validation Plugin <code>validate()</code> method.</p>

       <p><b>Why:&nbsp;</b> To clarify that <code>rules</code> is a property of the <code>options</code> configuration object that is passed to the jQuery Validation Plugin <code>validate()</code> method. For consistency with <a href='#12_ch13_p322'>12. Ch13 p322. (above)</a></p>
      </li>
      <li>
       <p><!-- 22 --><b>Ch13 p333.</b></p>

       <p><b>Description for Listing 13-15:&nbsp;</b></p>

       <p>Missed opportunity to show the <code>rulesList</code> object:</p>

<pre>
var rulesList = {
 aster: { max: 10, min: 0 },
 daffodil: { max: 12, min: 0 },
 rose: { max: 2, min: 0 },
 peony: { max: 0, min: 0 },
 primula: { max: 1, min: 0 },
 snowdrop: { max: 15, min: 0 }
}
</pre>

       <p>Missed opportunity to show what the <code>rules</code> property (i.e., <code>rules: rulesList</code>) is interpreted as:</p>

<pre>
rules: {
 aster: { max: 10, min: 0 },
 daffodil: { max: 12, min: 0 },
 rose: { max: 2, min: 0 },
 peony: { max: 0, min: 0 },
 primula: { max: 1, min: 0 },
 snowdrop: { max: 15, min: 0 }
}
</pre>
      </li>
      <li>
       <p><!-- 23 --><a id='23_ch13_p333'></a><b>Ch13 p333.</b></p>

       <p><b>Listing 13-16 reads:</b></p>

<pre>
&lt;input name=&quot;{{product}}&quot; value=&quot;0&quot; required min=&quot;0&quot; max=&quot;{{stock}}&quot;/&gt;
...
{ name: &quot;Peony&quot;, product: &quot;peony&quot;, stock: &quot;0&quot;, price: &quot;1.50&quot; },
</pre>

       <p><b>Issue:&nbsp;</b> <code>max=&quot;0&quot;</code> is not recognized as a valid validation rule by the jQuery Validation Plugin. As a result, Peony validation against <code>max=&quot;0&quot;</code> does not work and the <q>Please enter a value less than or equal to 0.</q> validation error message never appears. This apparent bug in the jQuery Validation Plugin is not mentioned.</p>

       <p><b>Note:&nbsp;</b> If change <code>&lt;input name=&quot;{{product}}&quot; value=&quot;0&quot; required min=&quot;0&quot; max=&quot;{{stock}}&quot;/&gt;</code> to, for example, <code>&lt;input name=&quot;{{product}}&quot; value=&quot;0&quot; max=&quot;0&quot;/&gt;</code>, validation against <code>max=&quot;0&quot;</code> still does not work.</p>
      </li>
      <li>
       <p><!-- 24 --><b>Ch13 p334.</b></p>

       <p><b>Text reads:&nbsp;</b> Please enter a value less than or equal to 12</p>

       <p><b>Change to:&nbsp;</b> Please enter a value less than or equal to 10</p>

       <p><b>Why:&nbsp;</b> The validation error message is incorrect.</p>
      </li>
      <li>
       <p><!-- 25 --><b>Ch13 p334.</b></p>

       <p><b>Text reads:&nbsp;</b> ...you can change the messages displayed to the user by adding a <code>messages</code> property to the <code>options</code> object passed to the <code>validate</code> method.</p>

       <p><b>Change to:&nbsp;</b> ...you can change the messages displayed to the user by using the <code>messages</code> property of the <code>options</code> configuration object that is passed to the jQuery Validation Plugin <code>validate()</code> method.</p>

       <p><b>Why:&nbsp;</b> To clarify that <code>messages</code> is a property of the <code>options</code> configuration object that is passed to the jQuery Validation Plugin <code>validate()</code> method. For consistency with <a href='#12_ch13_p322'>12. Ch13 p322. (above)</a> and <a href='#21_ch13_p333'>21. Ch13 p333. (above)</a></p>
      </li>
      <li>
       <p><!-- 26 --><b>Ch13 p335.</b></p>

       <p><b>Text reads:&nbsp;</b> Within the <code>messages</code> object, I define a property using the name of the element I am interested in and set the value of this property to be a map between the check and the new message you want to use. In this example, I have changed the message for the <code>max</code> check on the elements with the names <code>rose</code> and <code>primula</code>.</p>

       <p><b>Change to:&nbsp;</b> The <code>messages</code> object is a property of the <code>options</code> configuration object that is passed to the jQuery Validation Plugin <code>validate()</code> method. Within the <code>messages</code> object, I define a property using the value assigned to the <code>name</code> attribute of the element I am interested in and set the value of this property to be a map between the check and the new message you want to use. In this example, I have changed the message for the <code>max</code> check on the elements with the names <code>rose</code> and <code>primula</code>.</p>

       <p><b>Why:&nbsp;</b> To clarify that the <code>messages</code> property of the <code>options</code> configuration object is, itself, an object. In other words, to clarify that <code>messages</code> is an object that is defined as a property of the <code>options</code> configuration object that is passed to the jQuery Validation Plugin <code>validate()</code> method. To clarify that you are using the value (<code>rose</code> and <code>primula</code>) assigned to the <code>name</code> attribute of the element, not the name of the element (which is <code>input</code>, not <code>rose</code> and <code>primula</code>).</p>
      </li>
      <li>
       <p><!-- 27 --><b>Ch13 p337.</b></p>

       <p><b>Figure 13-11:&nbsp;</b> Inexplicably, the Peony validation against <code>max=&quot;0&quot;</code> is shown not working. For more on this apparent bug in the jQuery Validation Plugin, see <a href='#23_ch13_p333'>23. Ch13 p333. (above)</a>.</p>
      </li>
      <li>
       <p><!-- 28 --><b>Ch13 p338.</b></p>

       <p><b>Tip reads:&nbsp;</b> ...as shown in Listing 13-17.</p>

       <p><b>Change to:&nbsp;</b> ...as shown in Listing 13-16.</p>

       <p><b>Why:&nbsp;</b> The Handlebars template is shown in Listing 13-16, not Listing 13-17.</p>
      </li>
      <li>
       <p><!-- 29 --><a id='29_ch13_p339'></a><b>Ch13 p339.</b></p>

       <p><b>Listing 13-20 reads:&nbsp;</b> <code>return Number(value) &lt; Number(args);</code></p>

       <p><b>Change to:&nbsp;</b> <code>return Number(value) &lt;<b>=</b> Number(args);</code></p>

       <p><b>Why:&nbsp;</b> The validation error message should not appear if the entered value is less than or equal to the <code>stock</code> value. The last sentence in p340 confirms it should be less than or equal to.</p>
      </li>
      <li>
       <p><!-- 30 --><b>Ch13 p340.</b></p>

       <p><b>Text reads:&nbsp;</b> Custom checks are created using the <code>addMethod</code> method, which is called on the <code>validator</code> property of the <code>$</code> function. The arguments to this method are the name you want to assign the check, a function that is used to perform validation, and a message to show if validation fails. In this example, I have defined a check called <code>stock</code>, which I explain in the sections that follow.</p>

       <p><b>Change to:&nbsp;</b> Custom jQuery Validation Plugin checks are created using the jQuery Validation Plugin <code>addMethod()</code> method, which is called on the <code>validator</code> property of the <code>$</code> function. The arguments to the jQuery Validation Plugin <code>addMethod()</code> method are a user defined name (a valid JavaScript identifier) for the check, a custom validation function that is used to perform validation, and a validation error message to show if validation fails. In this example, the first argument of the jQuery Validation Plugin <code>addMethod()</code> method is <code>&quot;stock&quot;</code>, which means the custom jQuery Validation Plugin check is named <code>stock</code>. The custom jQuery Validation Plugin validation check named <code>stock</code> is explained further in the following sections.</p>

       <p><b>Why:&nbsp;</b> To clarify that the custom check is a custom jQuery Validation Plugin check. To clarify that the first argument of the jQuery Validation Plugin <code>addMethod()</code> method specifies a user defined name for the custom jQuery Validation Plugin check.</p>
      </li>
      <li>
       <p><!-- 31 --><a id='31_ch13_p340'></a><b>Ch13 p340.</b></p>

       <p><b>Code reads:&nbsp;</b> <code>min: 0,</code></p>

       <p><b>Change to:&nbsp;</b> Delete the line.</p>

       <p><b>Why:&nbsp;</b> Although <code>min: 0</code> is a useful validation rule for this example;<!-- (it flags negative values, for example, -1, but not - 1) --> 1.) it does not appear in Listing 13-20, 2.) it does not appear in source code download <span class='filename'>Listing-20.html</span>, 3.) it is not mentioned in the discussion of Listing 13-20/<span class='filename'>Listing-20.html</span> in p340, and 4.) the first paragraph of p340 confirms it should be deleted.</p>
      </li>
<!-- *** double check wording 32 -->
      <li>
       <p><!-- 32 --><b>Ch13 p340.</b></p>

       <p><b>Text and code read:</b></p>

       <p>The arguments to the custom validation function are the value entered by the user, the <code>HTMLElement</code> object representing the <code>form</code> element, and any arguments that were specified when the check is applied to an element for validation, like this:</p>

<pre>
$(elem).rules(&quot;add&quot;, {
 min: 0,
 stock: data.flowers[index].stock
})
</pre>

       <p>When I applied the rule, I specified the value of a <code>stock</code> property from the <code>flower</code> data object that corresponds to the <code>input</code> element as the argument to the check. This is passed as is to the custom validation function:</p>

<pre>
function(value, elem, args) {
 return Number(value) &lt;= Number(args);
}
</pre>

       <p>The value and the arguments are presented as strings...</p>

       <p><b>Change to:</b></p>

       <p>The second argument to the jQuery Validation Plugin <code>addMethod()</code> method is a custom validation function. The arguments to the custom validation function are the value entered by the user, the <code>HTMLElement</code> object representing the <code>form</code> element, and any arguments that were specified when the check is applied to an element for validation, like this:</p>

<pre>
function(value, elem, <b>args</b>) {
 return Number(value) &lt;= Number(<b>args</b>);
}
</pre>

       <p>The first argument of the jQuery Validation Plugin <code>addMethod()</code> method (<code>&quot;stock&quot;</code>) is a user defined name for a custom jQuery Validation Plugin check (<code>stock</code>). The jQuery Validation Plugin <code>rules()</code> method is passed a validation rule with a check named <code>stock</code>. As a result, the jQuery Validation Plugin passes the <code>stock</code> property value to the third argument of the custom validation function. In other words, in this example, the value of <code>data.flowers[index].stock</code> is passed to the custom validation function <code>args</code> argument.</p>

<pre>
$(elem).rules(&quot;add&quot;, {
 stock: <b>data.flowers[index].stock</b>
})
</pre>

       <p>In the custom validation function, the value and the arguments are presented as strings...</p>

       <p><b>Why:&nbsp;</b> The first text paragraph describes the second block of code, not the first block of code, and the second text paragraph describes the first block of code, not the second block of code. In other words, the two blocks of code need to be switched. To clarify the connection between the first argument of the jQuery Validation Plugin <code>addMethod()</code> method and the third argument of the second argument of the jQuery Validation Plugin <code>addMethod()</code> method; specifically, that the first argument of the jQuery Validation Plugin <code>addMethod()</code> method is a user defined name for a custom jQuery Validation Plugin check, that the second argument of the jQuery Validation Plugin <code>addMethod()</code> method is a custom validation function, and that the jQuery Validation Plugin passes the custom check property value to the third argument of the custom validation function.</p>

       <p><b>Note:&nbsp;</b> <code>return Number(value) &lt; Number(args);</code> was changed to <code>return Number(value) &lt;= Number(args);</code> per <a href='#29_ch13_p339'>29. Ch13 p339. (above)</a>. <code>min: 0</code> was deleted per <a href='#31_ch13_p340'>31. Ch13 p340. (above)</a></p>
      </li>
      <li>
       <p><!-- 33 --><b>Ch13 p341.</b></p>

       <p><b>Text reads:&nbsp;</b> You can specify the message that is displayed in two ways.</p>

       <p><b>Change to:&nbsp;</b> The third argument of the jQuery Validation Plugin <code>addMethod()</code> method specifies a validation error message to display if validation fails. The validation error message can be specified in two ways.</p>

       <p><b>Why:&nbsp;</b> To clarify that the third argument of the jQuery Validation Plugin <code>addMethod()</code> method specifies the validation error message.</p>
      </li>
      <li>
       <p><!-- 34 --><b>Ch13 p344.</b></p>

       <p><b>Text reads:&nbsp;</b> The <code>highlight</code> and <code>unhighlight</code> options specify functions that will be used to highlight elements that contain invalid values.</p>

       <p><b>Change to:&nbsp;</b> The <code>highlight</code> and <code>unhighlight</code> options specify functions that will be used to highlight and unhighlight, respectively, elements that contain invalid values.</p>

       <p><b>Why:&nbsp;</b> Only the <code>highlight</code> option, not the <code>unhighlight</code> option, was described.</p>
      </li>
      <li>
       <p><!-- 35 --><b>Ch13 p345.</b></p>

       <p><b>Text reads:&nbsp;</b> I have applied a border to the parent element...</p>

       <p><b>Change to:&nbsp;</b> I have applied a border to the invalid element and its parent element...</p>

       <p><b>Why:&nbsp;</b> The jQuery selector is <code>$(element).add($(element).parent())</code>, not <code>$(element).parent()</code>.</p>
      </li>
      <li>
       <p><!-- 36 --><a id='36_ch13_p346'></a><b>Ch13 p346.</b></p>

       <p><b>Code reads:&nbsp;</b> <code>index: index,</code></p>

       <p><b>Change to:&nbsp;</b> Delete the line.</p>

       <p><b>Why:&nbsp;</b> The line is unnecessary.</p>
      </li>
<!-- double check wording c13_37 -->
      <li>
       <p><!-- 37 --><b>Ch13 p347.</b></p>

       <p><b>Text reads:&nbsp;</b> I use these values to generate a specific error message using the function feature of the custom check, like this:</p>

       <p><b>Change to:&nbsp;</b> Notice that the order of the flowers in the <code>plurals</code> object and the <code>data</code> object is the same. This syncs the objects, which means that portions of validation error message text can be generated by juxtaposing references to the <code>plurals</code> object and the <code>data</code> object in a function defined as the third argument of the jQuery Validation Plugin <code>addMethod()</code> method, like this.</p>

       <p><b>Why:&nbsp;</b> To clarify that the order of the flowers in the <code>plurals</code> object and the <code>data</code> object is the same. To clarify that this syncs the objects, which means that portions of validation error message text can be generated by juxtaposing references to the <code>plurals</code> object and the <code>data</code> object, such as in <code>plurals[args.data.product]</code>. To clarify that a function, not a string, is being used to generate the validation error message from the third argument of the jQuery Validation Plugin <code>addMethod()</code> method.</p>
      </li>
<!-- double check wording 38 -->
      <li>
       <p><!-- 38 --><b>Ch13 p348.</b></p>

       <p><b>Text reads:&nbsp;</b> In this case, I have passed the index, the data array, and the element itself, all of which I use to piece together the message to display to the user.</p>

       <p><b>Change to:&nbsp;</b> In this case, <code>stock</code> is an object and the <code>stock</code> object is passed to the custom validation function <code>args</code> argument. As a result, <code>args</code> is an object, the properties of the <code>stock</code> object become properties of the <code>args</code> object, and I can now use the <code>args</code> object to generate portions of validation error message text to display to the user.</p>

       <p><b>Why:&nbsp;</b> To clarify that the properties of the <code>stock</code> object become properties of the <code>args</code> object. To clarify that the <code>args</code> object can be used to generate portions of validation error message text.</p>

       <p><b>Note:&nbsp;</b> <code>index: index</code> was deleted per <a href='#36_ch13_p346'>36. Ch13 p346. (above)</a></p>
      </li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='ch14'></a>4. Chapter 14: Using Ajax: Part I</h2>

     <div class='note normal'>
      <ul>
       <li><a id='ch14_requirements'></a>Chapter 14 requires a web server. The web server can be installed on your local computer. It is not necessary to install the web server on a separate <q>server</q> computer.</li>
       <li>Chapter 14 requires Node.js. Node.js can be installed on your local computer. It is not necessary to install Node.js on a separate <q>server</q> computer.</li>
       <li><a id='ch14_configure_formserver_to_listen_on_port_8080'></a>It is strongly recommended that a computer does not have two processes listening on the same port. By default, web servers listen on port 80. By default, the Node.js <span class='filename'>formserver.js</span> script also listens on port 80. Therefore, if you install a web server and Node.js on your local computer, either the web server or the <span class='filename'>formserver.js</span> listening port must be changed. It is strongly recommended, and typically easiest, to keep the web server on port 80, which means changing the <span class='filename'>formserver.js</span> listening port. Port 8080 is the typical first alternate to port 80.</li>
      </ul>
     </div>

     <ol>
      <li>
       <p><!-- 1 --><a id='1_ch14_p353'></a><b>Ch14 p353.</b></p>

       <p><b>Listing 14-1 reads:&nbsp;</b> <code>&lt;form method=&quot;post&quot; action=&quot;http://node.jacquisflowershop.com/order&quot;&gt;</code></p>

       <p><b>Suggestion:&nbsp;</b> If you installed Node.js on your local computer, and if you changed the Node.js <span class='filename'>formserver.js</span> script to listen on port 8080 per <a href='#3_ch14_p360'>3. Ch14 p360 (below)</a>, change to:&nbsp; <code>&lt;form method=&quot;post&quot; action=&quot;http://<b>localhost:8080</b>/order&quot;&gt;</code></p>

       <p><b>Why:&nbsp;</b> Unless you installed Node.js on a computer that is assigned hostname node.jacquisflowershop.com, submitting the forms in Chapter 14 (by clicking <kbd>Place Order</kbd>) will actually submit them over the Internet to node.jacquisflowershop.com, which is not recommended.</p>

       <p><b>Note:&nbsp;</b> If you installed Node.js on your local computer, and if you changed the Node.js <span class='filename'>formserver.js</span> script to listen on port 8080 per <a href='#3_ch14_p360'>3. Ch14 p360 (below)</a>, you can change all Chapter 14 instances of <code>http://node.jacquisflowershop.com/order</code> to <code>http://<b>localhost:8080</b>/order</code> or <code>http://<b>localhost:8080/</b></code>. Both <code>http://localhost:8080/order</code> and <code>http://localhost:8080/</code> work.</p>
      </li>
      <li>
       <p><!-- 2 --><b>Ch14 p358.</b></p>

       <p><b>Text reads:&nbsp;</b> For this example, this means you request the following: http://www.jacquisflowershop.com/jquery/flowers.html?country=US&amp;state=New+York</p>

       <p><b>Change to:&nbsp;</b> For this example, this means you request the following: http://www.jacquisflowershop.com/jquery/<b>mydata.json</b>?country=US&amp;state=New+York</p>

       <p><b>Why:&nbsp;</b> In Listing 14-8, Figure 14-4, and source code download <span class='filename'>Listing-08.html</span>, the first argument to the jQuery Ajax shorthand <code>get()</code> method is <code>mydata.json</code>, not <code>flowers.html</code>.</p>

       <p><b>Suggestion:&nbsp;</b> If you installed the web server on your local computer, unless you assigned it a hostname, change further to: http://<b>localhost</b>/jquery/mydata.json?country=US&amp;state=New+York</p>

       <p><b>Why:&nbsp;</b> If you installed the web server on your local computer, unless you assigned it a hostname, you are likely accessing the web server on your local computer using hostname localhost.</p>
      </li>
      <li>
       <p><!-- 3 --><a id='3_ch14_p360'></a><b>Ch14 p360.</b></p>

       <p><b>Listing 14-9 reads:&nbsp;</b> <code>var port = 80;</code></p>

       <p><b>Change to:&nbsp;</b> <code>var port = 80<b>80</b>;</code></p>

       <p><b>Why:&nbsp;</b> Per the note to <a href='#ch14_configure_formserver_to_listen_on_port_8080'>change the Node.js <span class='filename'>formserver.js</span> script listening port to 8080 (above)</a>.</p>

       <p><b>Note:&nbsp;</b> Listing 14-9 is source code download <span class='filename'>formserver.js</span>.</p>
      </li>
      <li>
       <p><!-- 4 --><a id='4_ch14_p360'></a><b>Ch14 p360.</b></p>

       <p><b>Listing 14-9 reads:&nbsp;</b> <code>&quot;Access-Control-Allow-Origin&quot;: &quot;http://www.jacquisflowershop.com&quot;</code></p>

       <p><b>Source code download <span class='filename'>formserver.js</span> reads:&nbsp;</b> <code>&quot;Access-Control-Allow-Origin&quot;: &quot;*&quot;</code></p>

       <p><b>Suggestion:&nbsp;</b> Leave source code download <span class='filename'>formserver.js</span> as is.</p>

       <p><b>Why:&nbsp;</b> <code>&quot;*&quot;</code> gives the best chance for success.</p>

       <p><b>Note:&nbsp;</b> Listing 14-9 is source code download <span class='filename'>formserver.js</span>. As described in p363, in a production environment, do not use <code>&quot;*&quot;</code>.</p>
      </li>
      <li>
       <p><!-- 5 --><a id='5_ch14_p362'></a><b>Ch14 p362.</b></p>

       <p><b>Text reads:</b></p>

       <p>As before, I run the script by entering the following at the command prompt: <kbd>node.exe formserver.js</kbd></p>

       <p><b>Change to:</b></p>

       <p>To run the Node.js <span class='filename'>formserver.js</span> script:</p>

       <ol>
        <li>If you installed Node.js on your local computer, first change the Node.js <span class='filename'>formserver.js</span> script to listen on port 8080 per <a href='#3_ch14_p360'>3. Ch14 p360 (above)</a>.</li>
        <li>Open the terminal (Linux)/command prompt (Windows).</li>
        <li>Navigate the terminal/command prompt to the drive/directory containing <span class='filename'>formserver.js</span>.</li>
        <li>Type <kbd>node.exe formserver.js</kbd> and press <kbd>Enter</kbd>.</li>
        <li>If the <q>Ready on port 8080</q> report appears, the Node.js <span class='filename'>formserver.js</span> script is running and listening on port 8080.</li>
       </ol>

       <p><b>Why:&nbsp;</b> To clarify that the <kbd>node.exe formserver.js</kbd> command requires that the terminal/command prompt is navigated to the drive/directory containing <span class='filename'>formserver.js</span>. Otherwise, the command to run <span class='filename'>formserver.js</span> requires the path to <span class='filename'>formserver.js</span>.</p>

       <p><b>Note:&nbsp;</b> To stop the Node.js <span class='filename'>formserver.js</span> script from running, close the terminal/command prompt. Unlike <span class='filename'>nodetest.js</span> in Chapter 1, <span class='filename'>formserver.js</span> does not display a <q>Node.js is working</q> confirmation web page.</p>
      </li>
      <li>
       <p><!-- 6 --><b>Ch14 p362.</b></p>

       <p><b>Text reads:&nbsp;</b> So, for example, if I selected one aster, two daffodils, and three roses...<code>{&quot;aster&quot;:&quot;1&quot;,&quot;daffodil&quot;:&quot;2&quot;,&quot;rose&quot;:&quot;2&quot;,&quot;total&quot;:5}</code></p>

       <p><b>Change to:&nbsp;</b> So, for example, if I selected one aster, two daffodils, and three roses...<code>{&quot;aster&quot;:&quot;1&quot;,&quot;daffodil&quot;:&quot;2&quot;,&quot;rose&quot;:&quot;<b>3</b>&quot;,&quot;total&quot;:<b>6</b>}</code></p>

       <p><b>Why:&nbsp;</b> The description says three roses, not two roses. The total is 6, not 5.</p>
      </li>
      <li>
       <p><!-- 7 --><b>Ch14 p364-5.</b></p>

       <p><b>Listing 14-10 reads:&nbsp;</b> <code>$.post(&quot;http://node.jacquisflowershop.com/order&quot;,</code></p>

       <p><b>Suggestion:&nbsp;</b> If you installed Node.js on your local computer, and if you configured <span class='filename'>formserver.js</span> to listen on port 8080 per <a href='#3_ch14_p360'>3. Ch14 p360 (above)</a>, change to:&nbsp; <code>$.post(&quot;http://<b>localhsot:8080</b>/order&quot;,</code></p>

       <p><b>Why:&nbsp;</b> Unless you installed Node.js on a computer that is assigned hostname node.jacquisflowershop.com, submitting the forms in Chapter 14 (by clicking <kbd>Place Order</kbd>) will actually submit them over the Internet to node.jacquisflowershop.com, which is not recommended.</p>
      </li>
      <li>
       <p><!-- 8 --><b>Ch14 p365.</b></p>

       <p><b>Text reads:&nbsp;</b> I start by using the <code>getJSON</code> method to obtain the <span class='filename'>mydata.json</span> file that contains details of the flower products and then use a data template to generate elements and add them to the document.</p>

       <p><b>Change to:&nbsp;</b> I start by using the jQuery Ajax shorthand <code>get()</code> method to obtain the <span class='filename'>flowers.html</span> file that contains details of the flower products and then use the jQuery <code>slice()</code> and <code>appendTo()</code> methods to generate elements and add them to the document.</p>

       <p><b>Why:&nbsp;</b> The jQuery Ajax shorthand <code>get()</code> method, not the jQuery Ajax type-specific convenience <code>getJSON()</code> method, is used. The <span class='filename'>flowers.html</span> file, not the <span class='filename'>mydata.json</span> file, is obtained. The jQuery <code>slice()</code> and <code>appendTo()</code> methods, not a Handlebars data template, is used to generate elements and add them to the document.</p>
      </li>
      <li>
       <p><!-- 9 --><b>Ch14 p366.</b></p>

       <p><b>Text reads:&nbsp;</b> For the values I entered into the input elements, the serialize method generates a string as follows: <code>aster=12&amp;daffodil=20&amp;rose=0&amp;peony=0&amp;primula=4&amp;snowdrop=0</code></p>

       <p><b>Change to:&nbsp;</b> For the values I entered into the input elements, the serialize method generates a string as follows: <code>aster=12&amp;daffodil=20&amp;rose=0&amp;peony=0&amp;primula=4&amp;snowdrop=<b>4</b></code></p>

       <p><b>Why:&nbsp;</b> In Figure 14-5 and Figure 14-6, the entered value for Snowdrop is 4, not 0.</p>
      </li>
      <li>
       <p><!-- 10 --><b>Ch14 p366.</b></p>

       <p><b>Text reads:&nbsp;</b> In this example, I take the response from the server and pass it to the <code>processServerResponse</code> function, which is defined as follows:</p>

       <p><b>Change to:&nbsp;</b> In this example, the response from the server is: <code>{&quot;aster&quot;:&quot;12&quot;,&quot;daffodil&quot;:&quot;20&quot;,&quot;primula&quot;:&quot;4&quot;,&quot;snowdrop&quot;:&quot;4&quot;,&quot;total&quot;:40}</code>. The response from the server is passed it to the <code>processServerResponse()</code> function, which is defined as follows:</p>

       <p><b>Why:&nbsp;</b> To show what the response from the server is, which is not only informative, but helps in understanding how the <code>processServerResponse()</code> function <code>for</code> loop uses the response from the server to generate the cell level <code>div</code> elements that are displayed in Figure 14-6.</p>
      </li>
      <li>
       <p><!-- 11 --><b>Ch14 p371.</b></p>

       <p><b>Listing 14-14 reads:</b></p>

<pre>
&lt;script type=&quot;text/javascript&quot;&gt;
 $(document).ready(function () {
  $(&quot;#row1&quot;).load(&quot;flowers.html&quot;);
 });
&lt;/script&gt;
</pre>

       <p>Missed opportunity to show a side-by-side comparison that gives identical results: 1.) the jQuery Ajax type-specific convenience <code>load()</code> method (above), and 2.) the jQuery Ajax shorthand <code>get()</code> method with the jQuery <code>append()</code> method (below).</p>

<pre>
&lt;script type=&quot;text/javascript&quot;&gt;
 $(document).ready(function () {
  <b>$.get(&quot;flowers.html&quot;, function (data) {
   $(&quot;#row1&quot;).append(data);
  });</b>
 });
&lt;/script&gt;
</pre>

      </li>
<!-- double check wording 12 -->
      <li>
       <p><!-- 12 --><b>Ch14 p377.</b></p>

       <p><b>Text reads:</b></p>

       <p>jQuery has convenient support for JSONP. All you have to do is use the <code>getJSON</code> method and specify a URL that contains <code>callback=?</code> in the query string. jQuery creates a function with a random name and uses this when communicating to the server, meaning you don't have to modify your code at all. Listing 14-22 demonstrates how to make a JSONP request.</p>

       <p><b>Change to:</b></p>

       <p>jQuery has convenient support for JSONP. As a result, compared to sending data with the jQuery Ajax shorthand <code>post()</code> method (Listing 14-10), all you have to do is use the jQuery Ajax type-specific convenience <code>getJSON()</code> method and specify a URL that contains <code>callback=?</code> in the query string. jQuery creates a function with a random name and uses this when communicating to the server, meaning you don't have to modify any other code as shown:</p>

       <p>From Listing 14-10. Sending Data With The jQuery Ajax Shorthand <code>post()</code> Method:</p>

<pre>
$(&quot;button&quot;).click(function (e) {
 var formData = $(&quot;form&quot;).serialize();
 $.post(&quot;http://localhost:8080/order&quot;, formData, processServerResponse);
 e.preventDefault();
});

function processServerResponse(data) {
 var inputElems = $(&quot;div.dcell&quot;).hide();
 for (var prop in data) {
  var filtered = inputElems.has(&quot;input[name=&quot; + prop + &quot;]&quot;)
   .appendTo(&quot;#row1&quot;).show();
 }
 $(&quot;#buttonDiv&quot;).remove();
 $(&quot;#totalTmpl&quot;).template(data).appendTo(&quot;body&quot;);
}
</pre>

       <p>From Listing 14-22. Making A JSONP Request Using The jQuery Ajax Type-Specific Convenience <code>getJSON()</code> Method:</p>

<pre>
$(&quot;button&quot;).click(function (e) {
 var formData = $(&quot;form&quot;).serialize();
 $.<b>getJSON</b>(&quot;http://localhost:8080/order<b>?callback=?&quot;</b>, formData, processServerResponse);
 e.preventDefault();
})

function processServerResponse(data) {
 var inputElems = $(&quot;div.dcell&quot;).hide();
 for (var prop in data) {
  var filtered = inputElems.has(&quot;input[name=&quot; + prop + &quot;]&quot;)
   .appendTo(&quot;#row1&quot;).show();
 }
 $(&quot;#buttonDiv&quot;).remove();
 $(&quot;#totalTmpl&quot;).template(data).appendTo(&quot;body&quot;);
}
</pre>

       <p>Notice that the callback functions are identical, and that the only required code modification involves the jQuery Ajax type-specific convenience <code>getJSON()</code> method, itself. Listing 14-22 demonstrates how to make a JSONP request.</p>

       <p><b>Why:&nbsp;</b> To clarify that <q>you don't have to modify your code</q> is in reference to Listing 14-10: Sending Data With The jQuery Ajax Shorthand <code>post()</code> Method. To show the relevant code from Listing 14-10 Listing 14-22 side by side. To clarify that the callback functions are identical. To clarify that the only required code modification involves the jQuery Ajax type-specific convenience <code>getJSON()</code> method.</p>

       <p><b>Note:&nbsp;</b> In Listing 14-10 and Listing 14-22, <code>node.jacquisflowershop.com</code> changed to <code>localhost:8080</code> per <a href='#1_ch14_p353'>1. Ch14 p353 (above)</a>. In Listing 14-22, <code>.has(&quot;input[name=' + prop + ']&quot;)</code> changed to <code>.has(&quot;input[name=&quot; + prop + &quot;]&quot;)</code> per <a href='#13_ch14_p378'>13. Ch14 p378 (below)</a>. In Listing 14-22, <code>$(&quot;#buttonDiv, #totalDiv&quot;).remove();</code> changed to <code>$(&quot;#buttonDiv&quot;).remove();</code> per <a href='#14_ch14_p378'>14. Ch14 p378 (below)</a>.</p>
      </li>
      <li>
       <p><!-- 13 --><a id='13_ch14_p378'></a><b>Ch14 p378.</b></p>

       <p><b>Listing 14-22 reads:&nbsp;</b> <code>var filtered = inputElems.has(&quot;input[name=' + prop + ']&quot;)</code></p>

       <p><b>Change to:&nbsp;</b> <code>var filtered = inputElems.has(&quot;input[name=<b>&quot;</b> + prop + <b>&quot;</b>]&quot;)</code></p>

       <p><b>Why:&nbsp;</b> A string concatenation operation, not a string nesting and concatenation operation, is needed. The mismatched quotes stop any flowers in the server response JSON data from being displayed.</p>
      </li>
      <li>
       <p><!-- 14 --><a id='14_ch14_p378'></a><b>Ch14 p378.</b></p>

       <p><b>Listing 14-22 reads:&nbsp;</b> <code>$(&quot;#buttonDiv<b>, #totalDiv</b>&quot;).remove();</code></p>

       <p><b>Change to:&nbsp;</b> <code>$(&quot;#buttonDiv&quot;).remove();</code></p>

       <p><b>Why:&nbsp;</b> When the line is read, the <code>div</code>element with <code>id=&quot;totalDiv&quot;</code> attribute does not exist in the DOM.</p>
      </li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='ch15'></a>5. Chapter 15: Using Ajax: Part II</h2>

     <div class='note normal'>
      <ul>
       <li><a id='ch15_requirements'></a>Chapter 15 requires a web server. The web server can be installed on your local computer. It is not necessary to install the web server on a separate <q>server</q> computer.</li>
       <li>Chapter 15 requires Node.js. Node.js can be installed on your local computer. It is not necessary to install Node.js on a separate <q>server</q> computer.</li>
       <li><a id='ch15_configure_formserver_to_listen_on_port_8080'></a>It is strongly recommended that a computer does not have two processes listening on the same port. By default, web servers listen on port 80. By default, the Node.js <span class='filename'>formserver.js</span> script also listens on port 80. Therefore, if you install a web server and Node.js on your local computer, either the web server or the <span class='filename'>formserver.js</span> listening port must be changed. It is strongly recommended, and typically easiest, to keep the web server on port 80, which means changing the <span class='filename'>formserver.js</span> listening port. Port 8080 is the typical first alternate to port 80.</li>
      </ul>
     </div>

     <ol>
      <li>
       <p><!-- 1 --><a id='1_ch15_source_code_download_formserver.js'></a><b>Ch15 source code download <span class='filename'>formserver.js</span>.</b></p>

       <p><b>Code reads:</b></p>

<pre>
var port = 80;
...
&quot;Access-Control-Allow-Origin&quot;: &quot;http://www.jacquisflowershop.com&quot;
</pre>

       <p><b>Change to:</b></p>

<pre>
var port = 80<b>80</b>;
...
&quot;Access-Control-Allow-Origin&quot;: &quot;<b>*</b>&quot;
</pre>

       <p><b>Why:&nbsp;</b> Per the note to <a href='#ch15_configure_formserver_to_listen_on_port_8080'>change the Node.js <span class='filename'>formserver.js</span> script listening port to 8080 (above)</a>. <code>&quot;*&quot;</code> gives the best chance for success.</p>

       <p><b>Note:&nbsp;</b> As described in p363, in a production environment, do not use <code>&quot;*&quot;</code>.</p>
      </li>
      <li>
       <p><!-- 2 --><a id='2_ch15_p383'></a><b>Ch15 p383.</b></p>

       <p><b>Listing 15-1 reads:&nbsp;</b> <code>&lt;form method=&quot;post&quot; action=&quot;http://node.jacquisflowershop.com/order&quot;&gt;</code></p>

       <p><b>Suggestion:&nbsp;</b> If you installed Node.js on your local computer, and if you changed the Node.js <span class='filename'>formserver.js</span> script to listen on port 8080 per <a href='#1_ch15_source_code_download_formserver.js'>1. Ch15 source code download <span class='filename'>formserver.js</span> (above)</a>, change to:&nbsp; <code>&lt;form method=&quot;post&quot; action=&quot;http://<b>localhost:8080</b>/order&quot;&gt;</code></p>

       <p><b>Why:&nbsp;</b> Unless you installed Node.js on a computer that is assigned hostname node.jacquisflowershop.com, submitting the forms in Chapter 15 (by clicking <kbd>Place Order</kbd>) will actually submit them over the Internet to node.jacquisflowershop.com, which is not recommended.</p>

       <p><b>Note:&nbsp;</b> If you installed Node.js on your local computer, and if you changed the Node.js <span class='filename'>formserver.js</span> script to listen on port 8080 per <a href='#1_ch15_source_code_download_formserver.js'>1. Ch15 source code download <span class='filename'>formserver.js</span> (above)</a>, you can change all Chapter 15 instances of <code>http://node.jacquisflowershop.com/order</code> to <code>http://<b>localhost:8080</b>/order</code> or <code>http://<b>localhost:8080/</b></code>. Both <code>http://localhost:8080/order</code> and <code>http://localhost:8080/</code> work.</p>
      </li>
      <li>
       <p><!-- 3 --><b>Ch15 p383.</b></p>

       <p><b>Note reads:&nbsp;</b> This chapter relies on the same Node.js script used in Chapter 14.</p>

       <p><b>Change to:&nbsp;</b> This chapter relies on the same Node.js <span class='filename'>formserver.js</span> script used in Chapter 14. To run the Node.js <span class='filename'>formserver.js</span> script, see <a href='#5_ch14_p362'>5. Ch14 p362 (above)</a>.</p>

       <p><b>Why:&nbsp;</b> To clarify that the Node.js script is <span class='filename'>formserver.js</span>. To clarify that the Node.js <span class='filename'>formserver.js</span> script needs to be run. To clarify how to run the Node.js <span class='filename'>formserver.js</span> script.</p>
      </li>
      <li>
       <p><!-- 4 --><b>Ch15 p384.</b></p>

       <p><b>Text reads:&nbsp;</b> ...adapted to work with the jQuery deferred object features that I describe in Chapter 35.</p>

       <p><b>Change to:&nbsp;</b> ...adapted to work with the jQuery deferred object features that I describe in Chapter 36.</p>

       <p><b>Why:&nbsp;</b> Using Deferred Objects is Chapter 36, not Chapter 35.</p>
      </li>
      <li>
       <p><!-- 5 --><b>Ch15 p384.</b></p>

       <p><b>Text reads:&nbsp;</b> Table 15-2 describes the members of the jQuery <code>jqXHR</code> object.</p>

       <p><b>Change to:&nbsp;</b> Table 15-2 describes the properties and methods of the jQuery <code>jqXHR</code> object, all of which also exist on the JavaScript <code>XMLHttpRequest</code> object.</p>

       <p><b>Why:&nbsp;</b> Members? To clarify that the listed properties and methods exist on the jQuery <code>jqXHR</code> object and the JavaScript <code>XMLHttpRequest</code> object.</p>
      </li>
      <li>
       <p><!-- 6 --><b>Ch15 p384.</b></p>

       <p><b>Tip reads:&nbsp;</b> ...which I explain in the section <q>....</q></p>

       <p><b>Change to:&nbsp;</b> ...which I explain in the section <q>Handling Ajax Callbacks.</q></p>

       <p><b>Why:&nbsp;</b> To filling in the <q>....</q></p>
      </li>
      <li>
       <p><!-- 7 --><b>Ch15 p385.</b></p>

       <p><b>Text reads:&nbsp;</b> In this listing, I assign the result from the <code>ajax</code> method to a variable called <code>jqxhr</code> and use the <code>setInterval</code> method to write information about the request to the console every 100 milliseconds.</p>

       <p><b>Change to:&nbsp;</b> In this listing, I assign the result from the jQuery <code>ajax()</code> method (which is the jQuery <code>jqXHR</code> object) to a variable called <code>jqxhr</code>, and use the JavaScript <code>setInterval()</code> method with the JavaScript <code>clearInterval()</code> method to write information about the request to the console one time after 100 milliseconds.</p>

       <p><b>Why:&nbsp;</b> To clarify that the jQuery <code>jqXHR</code> object is assigned to the <code>jqxhr</code> variable. The information about the request is written to the console one time after 100 milliseconds, not every 100 milliseconds.</p>
      </li>
      <li>
       <p><!-- 8 --><b>Ch15 p386.</b></p>

       <p><b>Listing 15-4 reads:&nbsp;</b> <code>var filtered = inputElems.has(&quot;input[name=' + prop + ']&quot;)</code></p>

       <p><b>Change to:&nbsp;</b> <code>var filtered = inputElems.has(&quot;input[name=<b>&quot;</b> + prop + <b>&quot;</b>]&quot;)</code></p>

       <p><b>Why:&nbsp;</b> A string concatenation operation, not a string nesting and concatenation operation, is needed. The mismatched quotes stop any flowers in the server response JSON data from being displayed.</p>
      </li>
      <li>
       <p><!-- 9 --><b>Ch15 p391.</b></p>

       <p><b>Table 15-5 heading reads:&nbsp;</b> Table 15-5. The Ajax Event Settings</p>

       <p><b>Change to:&nbsp;</b> Table 15-5. The Complete Status Values</p>

       <p><b>Why:&nbsp;</b> The Table 15-3 and 15-5 headings are the same. The Table 15-5 heading is wrong.</p>
      </li>
      <li>
       <p><!-- 10 --><b>Ch15 p395.</b></p>

       <p><b>Listing 15-12 reads:&nbsp;</b> <code>$(&quot;&lt;div&quot;).append(&quot;&lt;label&gt;Events:&lt;label&gt;&quot;)</code></p>

       <p><b>Change to:&nbsp;</b> <code>$(&quot;&lt;div<b>&gt;</b>&quot;).append(&quot;&lt;label&gt;Events:&lt;label&gt;&quot;)</code></p>

       <p><b>Why:&nbsp;</b> The <code>&lt;div&gt;</code> tag is missing the <code>&gt;</code>.</p>
      </li>
      <li>
       <p><!-- 11 --><a id='#11_ch15_p399'></a><b>Ch15 p399.</b></p>

       <p><b>Listing 15-14 reads:</b></p>

<pre>
var template = $(&quot;#flowerTmpl&quot;);
template.tmpl(data.slice(0, 3)).appendTo(&quot;#row1&quot;);
template.tmpl(data.slice(3)).appendTo(&quot;#row2&quot;);
</pre>

       <p><b>Change to:</b></p>

<pre>
var <b>tmplElems</b> = $(&quot;#flowerTmpl&quot;)<b>.template({ flowers: data }).filter(&quot;*&quot;)</b>;
<b>tmplElems.slice(0, 3)</b>.appendTo(&quot;#row1&quot;);
<b>tmplElems.slice(3)</b>.appendTo(&quot;#row2&quot;);
</pre>

       <p><b>Why:&nbsp;</b> The code is nonsense.</p>
      </li>
      <li>
       <p><!-- 12 --><b>Ch15 p404.</b></p>

       <p><b>Listing 15-18:&nbsp;</b> The same nonsense code as in <a href='#11_ch15_p399'>11. Ch15 p399 (above)</a>.</p>
      </li>
      <li>
       <p><!-- 13 --><b>Ch15 p405.</b></p>

       <p><b>Text reads:&nbsp;</b> I convert the JSON data into a JavaScript array by using the jQuery <code>parseJSON</code> data...</p>

       <p><b>Change to:&nbsp;</b> I convert the JSON data into a JavaScript array by using the jQuery <code>parseJSON()</code> method...</p>

       <p><b>Why:&nbsp;</b> The jQuery <code>parseJSON()</code> is a method, not data.</p>
      </li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>6. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='http://jquery.com/'>jQuery (jquery.com)</a></li>
      <li><a href='http://api.jquery.com/'>jQuery API Documentation (api.jquery.com)</a></li>
      <li><a href='https://nodejs.org/en/'>Node.js (nodejs.org)</a></li>
      <li><a href='https://nodejs.org/en/download/'>Node.js Downloads (nodejs.org)</a></li>
      <li><a href='http://handlebarsjs.com/'>Handlebars (handlebarsjs.com)</a></li>
      <li><a href='http://handlebarsjs.com/builtin_helpers.html'>Handlebars Built-In Helpers (handlebarsjs.com)</a></li>
      <li><a href='http://handlebarsjs.com/reference.html'>Handlebars API Reference (handlebarsjs.com)</a></li>
      <li><a href='http://jqueryvalidation.org/'>jQuery Validation Plugin (jqueryvalidation.org)</a></li>
      <li><a href='http://jqueryvalidation.org/documentation/'>jQuery Validation Plugin Documentation (jqueryvalidation.org)</a></li>
     </ul>

    </section>";
