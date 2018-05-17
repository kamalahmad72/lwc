PHP_Template_System_Readme.txt
Last reviewed/edited: 15 May 2018.

The LWC Home Template is developed by Steve Taylor at Learn Web Coding (http://www.learnwebcoding.com/). For additional information, see Learn Web Coding Home Template Explained (http://www.learnwebcoding.com/html/template_explained.php). Please email comments/suggestions to steve@learnwebcoding.com. Please feel free to download, edit, and/or fork the LWC Home Template source code. The LWC Home Template source code is available on GitHub (https://github.com/learnwebcoding/lwc_home_template).

-----------------
TABLE OF CONTENTS
-----------------

1.) INTRODUCTION
2.) WEB BROWSER SUPPORT
3.) PHP SUPPORT
4.) PHP CONFIGURATION
5.) PHP TEMPLATE SYSTEM FILE DESCRIPTION
6.) HOW THE PHP TEMPLATE SYSTEM WORKS
7.) HOW TO CREATE A WEB PAGE
8.) HOW TO USE THE LWC HOME TEMPLATE CSS STYLES
9.) EDITING THE PHP TEMPLATE SYSTEM
10.) RESOURCES AND ADDITIONAL INFORMATION

----------------
1.) INTRODUCTION
----------------

Learn Web Coding (LWC) consists of LWC Home (http://www.learnwebcoding.com/), LWC Blog (http://blog.learnwebcoding.com/), and LWC Forums (http://forums.learnwebcoding.com/). LWC Home, LWC Blog, and LWC Forums (LWC Home/Blog/Forums) are treated as three distinct web sites with the LWC Home home page serving as the LWC home page.

With the exception of specialty web pages, the LWC Home Template (http://www.learnwebcoding.com/html/web_page.php) is the starting point for every web page at LWC Home. The LWC Home Template is mobile first, responsive, and passes the Google Mobile-Friendly Test (https://search.google.com/search-console/mobile-friendly). The LWC Home Template consists of an original object-oriented PHP template system for creating a flexible and easy to maintain web site and web pages, original HTML and CSS conventions for consistently structuring and styling web page content, original object-oriented JavaScripts for breadcrumbs navigation and tools icon dropdown, a modified Bootstrap grid system and navbar, CSS compiled from Sass, valid HTML5, and valid CSS Level 3.

This file explains the PHP template system of the LWC Home Template.

The PHP template system:
* Allows the definition of a web page type as a PHP web page object (WPO) in a single file, with the WPO properties representing HTML markup and attributes, and the WPO property values representing HTML attribute values and content (Web_Page.class.php).
* Allows the assignment of sitewide default WPO property values in a single file (Web_Page.class.php).
* Allows the overriding of sitewide default WPO property values with web page specific WPO property values in a single file (web_page.php).
* Allows the placement of sitewide blocks of code in separate files (e.g., footer.php, header.php, javascripts.php, stylesheets.php, and tools.php).
* Allows that some WPO properties and that some sitewide blocks of code might not be used in all web pages (web_page.php).
* Allows the creation of a web page HTML/PHP template in a single file, with HTML from <html> to </html>, and PHP that inserts WPO property values into the HTML (template.php).
* Allows the definition of multiple different web page types as PHP WPOs each in a separate file (Web_Page*.class.php).
* Allows the placement of multiple different sitewide blocks of code, and the creation of multiple different variations of the sitewide blocks of code, each in a separate file (myblockofcode*.php, footer*.php, header*.php, javascripts*.php, stylesheets*.php, and tools*.php).
* Allows the creation of multiple different web page HTML/PHP templates each in a separate file (template*.php).

-----------------------
2.) WEB BROWSER SUPPORT
-----------------------

The LWC Home Template supports Internet Explorer 10+, Edge 12+, Firefox 6+, Chrome 30+, and Opera 17+.

---------------
3.) PHP SUPPORT
---------------

The LWC Home Template supports 5.6.8+ and PHP 7+. PHP 5.6.7- not tested.

---------------------
4.) PHP CONFIGURATION
---------------------

The PHP template system uses pathless include_once statements. For the pathless include_once statements to work, the PHP interpretor must be instructed of the path to the PHP template system templates directory on the web server. This requires editing the include_path directive of the PHP initialization php.ini file. Otherwise, change the PHP template system include_once statements to absolute paths.

The following instructs the PHP interpretor of the path to the PHP template system templates directory for a default installation of XAMPP 5.6.30 on Windows with the LWC Home Template copied to the root of the XAMPP Apache HTTP Server. In this setup, the root of the web server (ie, the XAMPP Apache HTTP Server) is C:\xampp\htdocs\, and the PHP template system templates directory is C:\xampp\htdocs\templates\. If necessary, modify as appropriate for your setup. For additional information, see Apache Friends (https://www.apachefriends.org/), PHP documentation | include (http://php.net/manual/en/function.include.php), and PHP documentation | Description of core php.ini directives - include_path string (http://php.net/manual/en/ini.core.php#ini.include-path).

1.) Copy and paste the php.ini file in place as php.ini.bak. For a default installation of XAMPP 5.6.30, the php.ini file is located at C:\xampp\php\php.ini.
2.) Open the php.ini file in a text editor.
3.) Go to the Paths and Directories section. Change the following line:

include_path=C:\xampp\php\PEAR

To:

include_path="C:\xampp\php\PEAR;C:\xampp\htdocs\templates"

NOTE: The include_path directive is not commented out. The include_path directive value is now correctly enclosed in quotation mark (") characters. The following are appended to the end of the existing value; a.) a semicolon (;) character, and b.) the path to the PHP template system templates directory on the web server.

4.) Save the php.ini file.
5.) If the web server is started, stop and restart the web server.
6.) If it becomes necessary to undo the changes, delete the php.ini file and rename the php.ini.bak file to php.ini. If the web server is started, stop and restart the web server.

----------------------------------------
5.) PHP TEMPLATE SYSTEM FILE DESCRIPTION
----------------------------------------

The minimum files for the PHP template system (all located in the extracted /templates/ folder):
* footer.php: Web page <footer></footer> section code file.
* google_analytics.php: Web page Google Analytics code file.
* header.php: Web page <header></header> section code file.
* javascripts.php: Web page JavaScripts code file.
* stylesheets.php: Web page style sheets code file.
* template.php: Web page HTML/PHP template file.
* tools.php: Web page LWC Home tools icon dropdown code file.
* Web_Page.class.php: Web page object (WPO) definition file. Defines a web page type as a PHP WPO. Defines WPO properties. Assigns sitewide default WPO property values.
* web_page.php: Web page file. Assigns web page specific WPO property values. The property values assigned in web_page.php override the property values assigned in Web_Page.class.php. Merges the WPO with the web page HTML/PHP template. Becomes a web page with filename web_page.php.
* web_page_sections.php: Web page sections code file.
* web_page_toc.php: Web page table of contents code file.

-------------------------------------
6.) HOW THE PHP TEMPLATE SYSTEM WORKS
-------------------------------------

In general, web_page.php merges a web page object (WPO) with a web page HTML/PHP template, which turns web_page.php into a web page with filename web_page.php. Specifically:
* Web_Page.class.php: Defines a web page type as a PHP WPO. Defines WPO properties and assigns sitewide default WPO property values.
* web_page.php: include_once Web_Page.class.php and instantiate the WPO.
* web_page.php: Overrides sitewide default WPO property values with web page specific WPO property values.
* web_page.php: include_once stylesheets.php, header.php, tools.php, web_page_toc.php, web_page_sections.php, footer.php, and javascripts.php.
* template.php: Represents a web page HTML/PHP template. Provides HTML from <html> to </html> and the PHP inserts WPO property values into the HTML.
* web_page.php: include_once template.php.
* web_page.php: Becomes a web page with filename web_page.php.

+--------------------+
|                    |
|                    | - Defines a web page type as a PHP WPO.
|                    | - Defines WPO properties.
| Web_Page.class.php | - Assigns sitewide default WPO property
|                    |   values.------------------------------------>+
|                    | --------------->+                             |
|                    |                 |                             |
+--------------------+                 |                             |
                                       |                             |
+--------------------+                 |                             |
|                    |                \|/                           \|/
|                    | - include_once Web_Page.class.php and         |
|                    |   instantiate the WPO.                        |
|                    | - Overrides sitewide default WPO property     |
|                    |   values with web page specific WPO           |
|   web_page.php     |   property values.--------------------------->+
|    (web page)      | - include_once stylesheets.php,               |
|                    |   header.php, tools.php,                      |
|                    |   web_page_toc.php, web_page_sections.php,    |
|                    |   footer.php, and javascripts.php.            |
|                    | - include_once template.php.                  |
|                    |                /|\                           \|/
+--------------------+                 |                             |
                                       |                             |
+--------------------+                 |                             |
|                    |                 |                             |
|                    | --------------->+                             |
|                    | - Represents a web page HTML/PHP template.    |
|   template.php     | - Provides HTML from <html> to </html> and    |
|                    |   the PHP inserts WPO property values into   \|/
|                    |   the HTML.<----------------------------------+
|                    |
+--------------------+

----------------------------
7.) HOW TO CREATE A WEB PAGE
----------------------------

Each web page consists of three files:
a.) web_page.php (required): Web page file. Assigns web page specific web page object (WPO) property values. The property values assigned in web_page.php override the property values assigned in Web_Page.class.php. Merges the WPO with the web page HTML/PHP template. Becomes a web page with filename web_page.php.
b.) web_page_sections.php (required): Web page sections code.
c.) web_page_toc.php (optional): Web page table of contents code. NOTE: If the web page does not include a table of contents, web_page_toc.php can be empty, contain only comments, or be omitted.

To create a web page:
a.) Copy web_page.php, web_page_sections.php, and web_page_toc.php from the extracted /templates/ folder to the web page destination directory of your web server.
b.) Select a web page filename and rename web_page.php, web_page_sections.php, and web_page_toc.php, replacing "web_page" with the filename. For example, if the selected web page filename is myfilename, rename web_page.php, web_page_sections.php, and web_page_toc.php to myfilename.php, myfilename_sections.php, and myfilename_toc.php, respectively.
c.) Point your web browser to the myfilename.php file in the destination directory of your web server.
d.) The web page appears.

-----------------------------------------------
8.) HOW TO USE THE LWC HOME TEMPLATE CSS STYLES
-----------------------------------------------

To use the LWC Home Template styles, code your HTML in myfilename_toc.php, myfilename_sections.php, and the include_once statement *.php files per the LWC Home Template Explained (http://www.learnwebcoding.com/html/template_explained.php).

-----------------------------------
9.) EDITING THE PHP TEMPLATE SYSTEM
-----------------------------------

Editing the PHP web page object (WPO) definition file (Web_Page.class.php):
a.) Add, remove, and/or edit the defined WPO properties per your requirements.
b.) Assign sitewide default WPO property values per your requirements.

Editing each web page:
a.) In the web page file (myfilename.php), add, remove, and/or edit the web page specific WPO property values per your requirements. NOTE: The web page file (myfilename.php) is not intended to contain any HTML tags. Instead, HTML tags are intended for the include_once statement *.php files. (For an exception, see To reduce the number of include_once statements below.)
b.) In the web page sections code file (myfilename_sections.php), replace the web page sections code with your web page sections code.
c.) In the web page table of contents code file (myfilename_toc.php), replace the web page table of contents code with your web page table of contents code.

Editing the web page HTML/PHP template file (template.php):
a.) Add, remove, and/or edit the HTML per your requirements.
b.) Add, remove, and/or edit the WPO properties per your requirements.

Editing the footer.php, google_analytics.php, header.php, javascripts.php, stylesheets.php, and tools.php files:
a.) Replace the provided code with your code per your requirements.

NOTE: For an example of two web pages using the same WPO definition file (Web_Page.class.php), two different web page HTML/PHP template files (template_home_page.php and template.php), and one of the web pages (the home page) not using the web page table of contents code file (index_toc.php), see the home page (/web_server_root_directory/index.php) and the HTML landing page (/web_server_root_directory/html/index.php). The reason for this is that the home page; 1.) does not call the LWC Home breadcrumbs navigation, 2.) does not use the WPO last reviewed property, 3.) does not use the WPO web browser support property, 4.) does not use the LWC Home tools icon dropdown (tools.php), 5.) does not use a table of contents (index_toc.php), 6.) does not use the WPO horizontal rule property, 7.) does not use the footer (footer.php), and 8.) uses a unique footer-like section. Here, the home page is considered the exception and the HTML landing page is considered the norm; hence, the web page HTML/PHP template filename is template_home_page.php for the exception (the home page) and template.php for the norm (the HTML landing page). Of course, because of the flexibility of the PHP template system, there are often multiple different ways of accomplishing essentially the same task. Select a solution that makes the most sense to you while ensuring maintainability.

-----------------------------------------
10.) RESOURCES AND ADDITIONAL INFORMATION
-----------------------------------------

PHP: If you want to reduce the number of include_once statements, the code returned by any of the include_once *.php files can be assigned as a string value to the appropriate WPO property in the WPO definition file (Web_Page.class.php) or web page file (web_page.php). In Web_Page.class.php, if assigning the string value to one of the properties defined in the constructor, the initialization of the property no longer requires the constructor and, therefore, the property can be moved and defined outside of the constructor using the public keyword and the syntax of the other properties defined outside of the constructor. NOTE: One downside to "embedding" code in Web_Page.class.php or web_page.php is that if the code is embedded in multiple files, and you then decide to edit the code, there are multiple files to edit, which is avoided if the code is located in a single file that is included in multiple files.

On double quotation mark (") and apostrophe (') character usage:
a.) If the code to return to a PHP variable/property, or the code to assign to a PHP variable/property as a string value, INCLUDES PHP variables/properties, enclose the code in double quotation mark characters, in the code enclose the HTML attribute values in apostrophe characters, and in the code escape any remaining double quotation mark characters with \" or &quot; as follows:
* Code to return to a PHP variable/property:
return "<element attribute='value' attribute='$phpVariableOrProperty'>Content with $phpVariableOrProperty value inserted and two double quotation mark \" &quot; characters escaped two different ways.</element>";
* Code to assign to a PHP variable/property as a string value:
$phpVariableOrProperty = "<element attribute='value' attribute='$phpVariableOrProperty'>Content with $phpVariableOrProperty value inserted and two double quotation mark \" &quot; characters escaped two different ways.</element>";
This allows the HTML to work, allows the PHP variable/property values to be inserted in the place of the PHP variables/properties, and stops a double quotation mark character in the code from prematurely terminating the return/string value.
NOTE: This convention is used in the PHP template system. In the code, after enclosing the HTML attribute values in apostrophe characters, any remaining double quotation mark characters in the code are likely from HTML content, embedded CSS, or embedded JavaScript. Enclosing HTML attribute values in apostrophe characters is valid HTML 5.
b.) If the code to return to a PHP variable/property, or the code to assign to a PHP variable/property as a string value, DOES NOT INCLUDE PHP variables/properties, AND if the HTML attribute values are enclosed in apostrophe characters, enclose the code in double quotation mark characters and escape any double quotation mark characters in the content with \" or &quot; as follows:
* Code to return to a PHP variable/property:
return "<element attribute = 'value'>Content with two double quotation mark \" &quot; characters escaped two different ways.</element>";
* Code to assign to a PHP variable/property as a string value:
$phpVariableOrProperty = "<element attribute = 'value'>Content with two double quotation mark \" &quot; characters escaped two different ways.</element>";
This allows the HTML to work and stops a double quotation mark character in the code from prematurely terminating the return/string value.
NOTE: This convention, similar to the convention above, is used in the PHP template system because it is amenable to inserting PHP variable/property values into HTML. Enclosing HTML attribute values in apostrophe characters is valid HTML 5.
c.) If the code to return to a PHP variable/property, or the code to assign to a PHP variable/property as a string value, DOES NOT INCLUDE PHP variables/properties, AND if the HTML attribute values are enclosed in double quotation mark characters, enclose the code in apostrophe characters and escape any apostrophe characters in the code with \' or &apos; as follows:
* Code to return to a PHP variable/property:
return '<element attribute = "value">Content with two apostrophe \' &apos; characters escaped two different ways.</element>';
* Code to assign to a PHP variable/property as a string value:
$phpVariableOrProperty = '<element attribute = "value">Content with two apostrophe \' &apos; characters escaped two different ways.</element>';
This allows the HTML to work and stops an apostrophe character in the code from prematurely terminating the return/string value.
NOTE: This convention, dissimilar to the conventions above, is not used in the PHP template system because it is not amenable to inserting PHP variable/property values into HTML.
