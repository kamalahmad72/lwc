PHP_Template_System_Readme.txt
Last reviewed/edited: 21 Oct 2018.

This file explains the PHP template system of the LWC Home Template.

The LWC Home Template is developed by Steve Taylor at Learn Web Coding (http://www.learnwebcoding.com/). For additional information, see Learn Web Coding Home Template Explained (http://www.learnwebcoding.com/html/template_explained.php). Please email comments/suggestions to steve@learnwebcoding.com. Please feel free to download, edit, and/or fork the LWC Home Template source code. The LWC Home Template source code is available on GitHub (https://github.com/learnwebcoding/lwc_home_template).

-----------------
TABLE OF CONTENTS
-----------------

1.) INTRODUCTION
2.) WEB BROWSER SUPPORT
3.) PHP SUPPORT
4.) PHP TEMPLATE SYSTEM FILE DESCRIPTION
5.) HOW THE PHP TEMPLATE SYSTEM WORKS
6.) HOW TO CREATE A WEB PAGE
7.) HOW TO USE THE LWC HOME TEMPLATE CSS STYLES
8.) EDITING THE PHP TEMPLATE SYSTEM
9.) RESOURCES AND ADDITIONAL INFORMATION

----------------
1.) INTRODUCTION
----------------

Learn Web Coding (LWC) consists of LWC Home (http://www.learnwebcoding.com/), LWC Blog (http://blog.learnwebcoding.com/), and LWC Forums (http://forums.learnwebcoding.com/). LWC Home, LWC Blog, and LWC Forums (LWC Home/Blog/Forums) are treated as three distinct web sites with the LWC Home home page serving as the LWC home page.

With the exception of specialty web pages, the LWC Home Template (http://www.learnwebcoding.com/html/web_page.php) is the starting point for every web page at LWC Home. The LWC Home Template is mobile first, responsive, and passes the Google Mobile-Friendly Test (https://search.google.com/test/mobile-friendly). The LWC Home Template consists of an original object-oriented PHP template system for creating a flexible and easy to maintain web site and web pages, original HTML and CSS conventions for consistently structuring and styling web page content, original object-oriented JavaScripts for breadcrumbs navigation and tools icon dropdown, a modified Bootstrap grid system and navbar, CSS compiled from Sass, valid HTML5, and valid CSS Level 3.

To download and try the LWC Home Template on your web server, including instructions on how to copy the LWC Home Template files to your web server and how to edit the include_path directive of the PHP initialization php.ini file, see Learn Web Coding Home Template Download (https://learnwebcoding.com/html/template_download.php). 

This file explains the PHP template system of the LWC Home Template.

Goal:
To develop a PHP template system for creating a flexible and easy to maintain web site and web pages. This results in a web site whose content is easy to change, a web site whose content is easy to rearrange, and a web site that can accept any number of web page types.

Accomplished: The PHP template system:
* Allows the definition of a web page type as a web page object (WPO) in a single file, with the WPO properties representing HTML markup and attributes, and the WPO property values representing HTML attribute values and content (Web_Page.class.php).
* Allows the assignment of sitewide default WPO property values in a single file (Web_Page.class.php).
* Allows the overriding of sitewide default WPO property values with web page specific WPO property values in a single file (web_page.php).
* Allows the placement of sitewide blocks of code in separate files (google_analytics.php, stylesheets.php, header.php, tools.php, footer.php, and javascripts.php).
* Allows that some WPO properties and that some sitewide blocks of code might not be used in all web pages (web_page.php).
* Allows the creation of a web page HTML/PHP template in a single file, with HTML from <html> to </html>, and PHP that inserts WPO property values into the HTML (template.php).
* Allows the definition of multiple different web page types as WPOs each in a separate file (Web_Page*.class.php).
* Allows the placement of multiple different sitewide blocks of code, and the creation of multiple different variations of the sitewide blocks of code, each in a separate file (myblockofcode*.php, google_analytics*.php, stylesheets*.php, header*.php, tools*.php, footer*.php, and javascripts*.php).
* Allows the creation of multiple different web page HTML/PHP templates each in a separate file (template*.php).

-----------------------
2.) WEB BROWSER SUPPORT
-----------------------

The LWC Home Template supports Internet Explorer 10+, Edge 12+, Firefox 6+, Chrome 30+, and Opera 17+.

---------------
3.) PHP SUPPORT
---------------

The LWC Home Template supports PHP 5.6.8+ and PHP 7+. PHP 5.6.7- not tested.

----------------------------------------
4.) PHP TEMPLATE SYSTEM FILE DESCRIPTION
----------------------------------------

The minimum files for the PHP template system (all located in the extracted /templates/ folder):
* footer.php: Web page <footer></footer> section.
* google_analytics.php: Web page Google Analytics code.
* header.php: Web page <header></header> section.
* javascripts.php: Web page JavaScripts.
* stylesheets.php: Web page style sheets.
* template.php: Web page HTML/PHP template.
* tools.php: Web page tools icon dropdown.
* Web_Page.class.php: Web page object (WPO) definition.
* web_page.php: Web page file.
* web_page_sections.php: Web page <section></section> sections.
* web_page_toc.php: Web page table of contents.

-------------------------------------
5.) HOW THE PHP TEMPLATE SYSTEM WORKS
-------------------------------------

In brief, web_page.php; 1.) merges a web page object (WPO) definition (Web_Page.class.php) with a web page HTML/PHP template (template.php), and 2.) outputs a web page (web_page.php). More specifically:
* Web_Page.class.php: Defines a web page type as a WPO. Defines WPO properties and assigns sitewide default WPO property values. include_once google_analytics.php, stylesheets.php, header.php, tools.php, footer.php, and javascripts.php. Similar to MVC model.
* web_page.php: include_once Web_Page.class.php and instantiates the WPO. Overrides sitewide default WPO property values with web page specific WPO property values. include_once web_page_toc.php and web_page_sections.php. include_once template.php. Outputs the web page, which has filename web_page.php. Similar to MVC controller.
* template.php: Web page HTML/PHP template. Provides HTML from <html> to </html>. PHP inserts the WPO property values into the HTML. Similar to MVC view.

+--------------------+
|                    |
|                    | - Defines a web page type as a WPO.
|                    | - Defines WPO properties and assigns
|                    |   sitewide default WPO property values.
| Web_Page.class.php | - include_once google_analytics.php,
|                    |   stylesheets.php, header.php, tools.php,
|                    |   footer.php, and javascripts.php.
|                    | ---------------------->---------------------+
|                    |                                             |
+--------------------+                                             |
                                                                   |
+--------------------+                                            \|/
|                    |                                             |
|                    | - include_once Web_Page.class.php and       |
|                    |   instantiates the WPO. <-------------------+
|                    | - Overrides sitewide default WPO
|   web_page.php     |   property values with web page specific
|    (web page)      |   WPO property values.
|                    | - include_once web_page_toc.php and
|                    |   web_page_sections.php.
|                    | - include_once template.php. <--------------+
|                    | - Outputs the web page.                     |
|                    |                                             |
+--------------------+                                            /|\
                                                                   |
+--------------------+                                             |
|                    |                                             |
|                    | ---------------------->---------------------+
|                    | - Web page HTML/PHP template.
|   template.php     | - Provides HTML from <html> to </html>.
|                    | - PHP inserts the WPO property values into
|                    |   the HTML.
|                    |
+--------------------+

----------------------------
6.) HOW TO CREATE A WEB PAGE
----------------------------

Each web page consists of three files:
a.) web_page.php (required): Web page file.
b.) web_page_sections.php (required): Web page <section></section> sections.
c.) web_page_toc.php (optional): Web page table of contents. NOTE: If the web page does not include a table of contents, web_page_toc.php can be empty, contain only comments, or be omitted.

To create a web page:
a.) Copy web_page.php, web_page_sections.php, and web_page_toc.php from the extracted /templates/ folder to the desired location of the web page on the web server.
b.) Select a web page filename and rename web_page.php, web_page_sections.php, and web_page_toc.php, replacing "web_page" with the filename. For example, if the selected web page filename is myfilename, rename web_page.php, web_page_sections.php, and web_page_toc.php to myfilename.php, myfilename_sections.php, and myfilename_toc.php, respectively.
c.) Point the web browser to the myfilename.php file on the web server.
d.) The web page appears.

-----------------------------------------------
7.) HOW TO USE THE LWC HOME TEMPLATE CSS STYLES
-----------------------------------------------

To use the LWC Home Template styles, code your HTML in myfilename_toc.php, myfilename_sections.php, and the include_once statement *.php files per the LWC Home Template Explained (http://www.learnwebcoding.com/html/template_explained.php).

-----------------------------------
8.) EDITING THE PHP TEMPLATE SYSTEM
-----------------------------------

Editing the web page object (WPO) definition file (Web_Page.class.php):
a.) Add, remove, and/or edit the defined WPO properties per your requirements.
b.) Assign sitewide default WPO property values per your requirements.

Editing each web page:
a.) In the web page file (myfilename.php), add, remove, and/or edit the web page specific WPO property values per your requirements. NOTE: The web page file (myfilename.php) is not intended to contain any HTML tags. Instead, HTML tags are intended for the include_once statement *.php files. (For an exception, see To reduce the number of include_once statements below.)
b.) In the web page <section></section> sections file (myfilename_sections.php), replace the web page sections code with your web page sections code.
c.) In the web page table of contents file (myfilename_toc.php), replace the web page table of contents code with your web page table of contents code.

Editing the web page HTML/PHP template file (template.php):
a.) Add, remove, and/or edit the HTML/PHP per your requirements.

Editing the footer.php, google_analytics.php, header.php, javascripts.php, stylesheets.php, and tools.php files:
a.) Replace the provided code with your code per your requirements.

NOTE: For an example of two web pages using the same WPO definition (Web_Page.class.php), two different web page HTML/PHP templates (template_home_page.php and template.php), and one of the web pages (the home page) not using the web page table of contents (index_toc.php), see the home page (/web_server_root_directory/index.php) and the HTML landing page (/web_server_root_directory/html/index.php). The reason for this is that the home page; 1.) does not call the LWC Home breadcrumbs navigation, 2.) does not use the WPO last reviewed property, 3.) does not use the WPO web browser support property, 4.) does not use the LWC Home tools icon dropdown (tools.php), 5.) does not use a table of contents (index_toc.php), 6.) does not use the WPO horizontal rule property, 7.) does not use the footer (footer.php), and 8.) uses a unique footer-like section. Here, the home page is considered the exception and the HTML landing page is considered the norm; hence, the web page HTML/PHP template filename is template_home_page.php for the exception (the home page) and template.php for the norm (the HTML landing page). Of course, because of the flexibility of the PHP template system, there can be multiple different ways of accomplishing the same task. Select a solution that makes the most sense to you while ensuring maintainability.

----------------------------------------
9.) RESOURCES AND ADDITIONAL INFORMATION
----------------------------------------

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
