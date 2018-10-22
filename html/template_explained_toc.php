<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/html/template_explained_toc.php.
 * Purpose: Web page table of contents.
 * Used in: /web_server_root_directory/html/template_explained.php.
 * Last reviewed/updated: 21 Oct 2018.
 * Published: 21 Sep 2016. */
return
    "<div class='toc-sec'><div class='toc-num'>1.</div><div class='toc-sec-title'><a href='#introduction'>Introduction</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>1.1.</div><div class='toc-sub1sec-title'><a href='#goals'>LWC Home Template Goals</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>1.2.</div><div class='toc-sub1sec-title'><a href='#browserSupport'>Web Browser Support</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>1.3.</div><div class='toc-sub1sec-title'><a href='#phpSupport'>PHP Support</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>1.4.</div><div class='toc-sub1sec-title'><a href='#abbreviations'>Abbreviations</a></div></div>
     <div class='toc-sec'><div class='toc-num'>2.</div><div class='toc-sec-title'><a href='#bootstrap'>Bootstrap Usage</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>2.1.</div><div class='toc-sub1sec-title'><a href='#customizingBootstrapStyleSheet'>Customizing Bootstrap And Then Editing The Bootstrap Style Sheet</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>2.2.</div><div class='toc-sub1sec-title'><a href='#customizingBootstrapJavaScript'>Customizing Bootstrap And The Bootstrap JavaScript</a></div></div>
     <div class='toc-sec'><div class='toc-num'>3.</div><div class='toc-sec-title'><a href='#fontAwesome'>Font Awesome Usage</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>3.1.</div><div class='toc-sub1sec-title'><a href='#editingFontAwesome'>Editing The Font Awesome Style Sheet</a></div></div>
     <div class='toc-sec'><div class='toc-num'>4.</div><div class='toc-sec-title'><a href='#phpTemplate'>PHP Template System</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>4.1.</div><div class='toc-sub1sec-title'><a href='#phpTemplateFileDescription'>PHP Template System File Description</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>4.2.</div><div class='toc-sub1sec-title'><a href='#phpTemplateHowWorks'>How The PHP Template System Works</a></div></div>
     <div class='toc-sec'><div class='toc-num'>5.</div><div class='toc-sec-title'><a href='#structure'>Semantic HTML Structure, Content Type Reference, And The <code>html</code> And <code>body</code> Style Rules</a></div></div>
     <div class='toc-sec'><div class='toc-num'>6.</div><div class='toc-sec-title'><a href='#assets'>Assets Loaded In The <code>&lt;head&gt;&lt;/head&gt;</code> and <code>&lt;body&gt;&lt;/body&gt;</code> Sections</a></div></div>
     <div class='toc-sec'><div class='toc-num'>7.</div><div class='toc-sec-title'><a href='#headerSection'><code>&lt;header&gt;&lt;/header&gt;</code> Section</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>7.1.</div><div class='toc-sub1sec-title'><a href='#lwcNavbar'>LWC Navbar</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>7.2.</div><div class='toc-sub1sec-title'><a href='#lwcBootstrapNavbar'>LWC Bootstrap Navbar</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>7.3.</div><div class='toc-sub1sec-title'><a href='#noscriptSection'><code>&lt;noscript&gt;&lt;/noscript&gt;</code> Section</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>7.4.</div><div class='toc-sub1sec-title'><a href='#lwcHomeBreadcrumbsNavigation'>LWC Home Breadcrumbs Navigation</a></div></div>
     <div class='toc-sec'><div class='toc-num'>8.</div><div class='toc-sec-title'><a href='#mainSection'><code>&lt;main&gt;&lt;/main&gt;</code> Section</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>8.1.</div><div class='toc-sub1sec-title'><a href='#webPageTitle'>Web Page Title</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>8.2.</div><div class='toc-sub1sec-title'><a href='#lastReviewed'>Last Reviewed/Updated, Published, And Status Information</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>8.3.</div><div class='toc-sub1sec-title'><a href='#webBrowserSupportAndLwcHomeToolsIconDropdown'>Web Browser Support And LWC Home Tools Icon Dropdown</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>8.3.1.</div><div class='toc-sub2sec-title'><a href='#webBrowserSupport'>Web Browser Support</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>8.3.2.</div><div class='toc-sub2sec-title'><a href='#lwcHomeToolsIconDropdown'>LWC Home Tools Icon Dropdown</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>8.4.</div><div class='toc-sub1sec-title'><a href='#toc'>Table Of Contents</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>8.4.1.</div><div class='toc-sub2sec-title'><a href='#tocSectionTitles'>Table Of Contents Section Titles</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>8.4.2.</div><div class='toc-sub2sec-title'><a href='#tocSubsectionTitles'>Table Of Contents Subsection Titles</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>8.4.3.</div><div class='toc-sub2sec-title'><a href='#tocSubsubsectionTitles'>Table Of Contents Subsubsection Titles</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>8.4.4.</div><div class='toc-sub2sec-title'><a href='#tocSubsubsubsectionTitles'>Table Of Contents Subsubsubsection Titles</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>8.5.</div><div class='toc-sub1sec-title'><a href='#sections'><code>&lt;section&gt;&lt;/section&gt;</code> Sections</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>8.5.1.</div><div class='toc-sub2sec-title'><a href='#sectionTitles'>Section Titles</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>8.5.2.</div><div class='toc-sub2sec-title'><a href='#subsectionTitles'>Subsection Titles</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>8.5.3.</div><div class='toc-sub2sec-title'><a href='#subsubsectionTitles'>Subsubsection Titles</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>8.5.4.</div><div class='toc-sub2sec-title'><a href='#subsubsubsectionTitles'>Subsubsubsection Titles</a></div></div>
     <div class='toc-sec'><div class='toc-num'>9.</div><div class='toc-sec-title'><a href='#footerSection'><code>&lt;footer&gt;&lt;/footer&gt;</code> Section</a></div></div>
     <div class='toc-sec'><div class='toc-num'>10.</div><div class='toc-sec-title'><a href='#paragraphs'>Paragraphs</a></div></div>
     <div class='toc-sec'><div class='toc-num'>11.</div><div class='toc-sec-title'><a href='#lists'>Lists</a></div></div>
     <div class='toc-sec'><div class='toc-num'>12.</div><div class='toc-sec-title'><a href='#listsWithIntroductoryText'>Lists With Introductory Text</a></div></div>
     <div class='toc-sec'><div class='toc-num'>13.</div><div class='toc-sec-title'><a href='#listsInLists'>Lists In Lists</a></div></div>
     <div class='toc-sec'><div class='toc-num'>14.</div><div class='toc-sec-title'><a href='#listsWithIntroductoryTextInLists'>Lists With Introductory Text In Lists</a></div></div>
     <div class='toc-sec'><div class='toc-num'>15.</div><div class='toc-sec-title'><a href='#notes'>Notes</a></div></div>
     <div class='toc-sec'><div class='toc-num'>16.</div><div class='toc-sec-title'><a href='#listsInNotes'>Lists In Notes</a></div></div>
     <div class='toc-sec'><div class='toc-num'>17.</div><div class='toc-sec-title'><a href='#listsWithIntroductoryTextInNotes'>Lists With Introductory Text In Notes</a></div></div>
     <div class='toc-sec'><div class='toc-num'>18.</div><div class='toc-sec-title'><a href='#listsInListsInNotes'>Lists In Lists In Notes</a></div></div>
     <div class='toc-sec'><div class='toc-num'>19.</div><div class='toc-sec-title'><a href='#listsWithIntroductoryTextInListsInNotes'>Lists With Introductory Text In Lists In Notes</a></div></div>
     <div class='toc-sec'><div class='toc-num'>20.</div><div class='toc-sec-title'><a href='#notesInLists'>Notes In Lists</a></div></div>
     <div class='toc-sec'><div class='toc-num'>21.</div><div class='toc-sec-title'><a href='#tables'>Tables</a></div></div>
     <div class='toc-sec'><div class='toc-num'>22.</div><div class='toc-sec-title'><a href='#listsInTables'>Lists In Tables</a></div></div>
     <div class='toc-sec'><div class='toc-num'>23.</div><div class='toc-sec-title'><a href='#listsWithIntroductoryTextInTables'>Lists With Introductory Text In Tables</a></div></div>
     <div class='toc-sec'><div class='toc-num'>24.</div><div class='toc-sec-title'><a href='#hyperlinks'>Hyperlinks</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>24.1.</div><div class='toc-sub1sec-title'><a href='#normalHyperlinks'>Normal Hyperlinks</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>24.2.</div><div class='toc-sub1sec-title'><a href='#listHyperlinks'>List Hyperlinks</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>24.3.</div><div class='toc-sub1sec-title'><a href='#tableEndnoteHyperlinks'>Table Endnote Hyperlinks</a></div></div>
     <div class='toc-sec'><div class='toc-num'>25.</div><div class='toc-sec-title'><a href='#formControls'>Form Controls</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>25.1.</div><div class='toc-sub1sec-title'><a href='#formButtons'>Buttons</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>25.1.1.</div><div class='toc-sub2sec-title'><a href='#formButtonsBootstrapColors'>Bootstrap Button Colors</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>25.1.2.</div><div class='toc-sub2sec-title'><a href='#formButtonsUsingInputElement'>Buttons Using The <code>input</code> Element</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>25.1.3.</div><div class='toc-sub2sec-title'><a href='#formButtonsUsingButtonElement'>Buttons Using The  <code>button</code> Element</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>25.1.4.</div><div class='toc-sub2sec-title'><a href='#formButtonsUsingAElement'>Buttons Using The <code>a</code> Element</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>25.1.5.</div><div class='toc-sub2sec-title'><a href='#formButtonsUsingOtherElements'>Buttons Using An Element Other Than The <code>input</code>, <code>button</code>, Or <code>a</code> Elements</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>25.2.</div><div class='toc-sub1sec-title'><a href='#formTextboxes'>Textboxes</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>25.3.</div><div class='toc-sub1sec-title'><a href='#formTextareas'>Textareas</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>25.4.</div><div class='toc-sub1sec-title'><a href='#formSelectboxes'>Selectboxes (Dropdowns)</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>25.5.</div><div class='toc-sub1sec-title'><a href='#formCheckboxes'>Checkboxes</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>25.6.</div><div class='toc-sub1sec-title'><a href='#formRadioButtons'>Radio Buttons</a></div></div>
     <div class='toc-sec'><div class='toc-num'>26.</div><div class='toc-sec-title'><a href='#images'>Images</a></div></div>
     <div class='toc-sec'><div class='toc-num'>27.</div><div class='toc-sec-title'><a href='#textConventions'>Text Conventions</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>27.1.</div><div class='toc-sub1sec-title'><a href='#code'>Code</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.1.1.</div><div class='toc-sub2sec-title'><a href='#codeInSentences'>Code In Sentences</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.1.2.</div><div class='toc-sub2sec-title'><a href='#codeInSentencesInNotes'>Code In Sentences In Notes</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.1.3.</div><div class='toc-sub2sec-title'><a href='#codeInWebPageTitle'>Code In Web Page Title</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.1.4.</div><div class='toc-sub2sec-title'><a href='#linesAndBlocksOfCode'>Lines And Blocks Of Code</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.1.5.</div><div class='toc-sub2sec-title'><a href='#overriddenCode'>Overridden Code</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.1.6.</div><div class='toc-sub2sec-title'><a href='#htmlCharacterNamedEntity'>HTML Character Named Entity Usage</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>27.2.</div><div class='toc-sub1sec-title'><a href='#userInput'>User Input</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.2.1.</div><div class='toc-sub2sec-title'><a href='#objectsToClick'>Objects To Click</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.2.2.</div><div class='toc-sub2sec-title'><a href='#keyboardKeysToPress'>Keyboard Keys To Press</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.2.3.</div><div class='toc-sub2sec-title'><a href='#textToEnterOrType'>Text To Enter Or Type</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.2.4.</div><div class='toc-sub2sec-title'><a href='#fieldsets'>Fieldsets</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.2.5.</div><div class='toc-sub2sec-title'><a href='#textboxesAndTextareas'>Textboxes And Textareas (Fields)</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.2.6.</div><div class='toc-sub2sec-title'><a href='#selectboxes'>Selectboxes (Dropdowns)</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.2.7.</div><div class='toc-sub2sec-title'><a href='#checkboxes'>Checkboxes</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.2.8.</div><div class='toc-sub2sec-title'><a href='#radioButtonGroups'>Radio Button Groups</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>27.3.</div><div class='toc-sub1sec-title'><a href='#emailAddressesAndUris'>Email Addresses And URIs</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.3.1.</div><div class='toc-sub2sec-title'><a href='#emailAddressesAsHyperlinks'>Email Addresses As Hyperlinks</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.3.2.</div><div class='toc-sub2sec-title'><a href='#emailAddressesAndUrisAsText'>Email Addresses And URIs As Text</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>27.4.</div><div class='toc-sub1sec-title'><a href='#filenames'>Filenames, Folder Names, File System Paths, And Terminal/Command Prompt Output</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.4.1.</div><div class='toc-sub2sec-title'><a href='#filenamesAsHyperlinks'>Filenames As Hyperlinks</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>27.5.</div><div class='toc-sub1sec-title'><a href='#databaseNames'>Database Names, Table Names, Column Names, Field Data, And User Accounts</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>27.6.</div><div class='toc-sub1sec-title'><a href='#dialogTitles'>Dialog Titles And Web Page Titles</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>27.7.</div><div class='toc-sub1sec-title'><a href='#computerReports'>Computer Error, Success, And Failure Reports</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>27.8.</div><div class='toc-sub1sec-title'><a href='#emphasizedText'>Emphasized Text</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>27.9.</div><div class='toc-sub1sec-title'><a href='#quotedText'>Quoted Text</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.9.1.</div><div class='toc-sub2sec-title'><a href='#quotedWords'>Quoted Words</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>27.9.2.</div><div class='toc-sub2sec-title'><a href='#quotedTextWithSource'>Quoted Text With Source</a></div></div>
     <div class='toc-sec'><div class='toc-num'>28.</div><div class='toc-sec-title'><a href='#resources'>Resources And Additional Information</a></div></div>";
