<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_tutorial_toc.php.
 * Purpose: Web page table of contents.
 * Used in: /web_server_root_directory/css/css_tutorial.php.
 * Last reviewed/updated: 13 Aug 2017.
 * Published: 21 Sep 2016. */
return
    "<div class='toc-sec'><div class='toc-num'>1.</div><div class='toc-sec-title'><a href='#introduction'>Introduction</a></div></div>
     <div class='toc-sec'><div class='toc-num'>2.</div><div class='toc-sec-title'><a href='#basics'>Basics</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>2.1.</div><div class='toc-sub1sec-title'><a href='#styleRule'>Style Rules</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>2.2.</div><div class='toc-sub1sec-title'><a href='#comments'>Comments</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>2.3.</div><div class='toc-sub1sec-title'><a href='#grouping'>Grouping Selectors And Grouping Declarations</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>2.4.</div><div class='toc-sub1sec-title'><a href='#validProperties'>Valid Properties, Values, And The Handling Of Invalid Styles</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>2.5.</div><div class='toc-sub1sec-title'><a href='#dom'>The HTML Document Tree And The Inheritance Of Style</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>2.6.</div><div class='toc-sub1sec-title'><a href='#important'><code>!important</code> Styles</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>2.7.</div><div class='toc-sub1sec-title'><a href='#syntax'>Style Rule Syntax And Conventions</a></div></div>
     <div class='toc-sec'><div class='toc-num'>3.</div><div class='toc-sec-title'><a href='#creating'>Creating Style Rules And Attaching Styles To Content</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>3.1.</div><div class='toc-sub1sec-title'><a href='#elements'>Elements As Selectors</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>3.1.1.</div><div class='toc-sub2sec-title'><a href='#bodyElement'>The <code>Body</code> Element As Selector And Defining A Default Style For A Web Page/Site</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>3.1.2.</div><div class='toc-sub2sec-title'><a href='#otherElements'>Elements Other Than The <code>Body</code> Element As Selectors</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>3.2.</div><div class='toc-sub1sec-title'><a href='#class-names'>Class-Names As Selectors</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>3.2.1.</div><div class='toc-sub2sec-title'><a href='#generic'>Classing The Generic Inline <code>Span</code> Element And The Generic Block-Level <code>Div</code> Element</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>3.3.</div><div class='toc-sub1sec-title'><a href='#pseudo'>Pseudo-Classes As Selectors</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>3.4.</div><div class='toc-sub1sec-title'><a href='#inline'>Inline Styles</a></div></div>
     <div class='toc-sec'><div class='toc-num'>4.</div><div class='toc-sec-title'><a href='#styleSheets'>Style Sheets</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>4.1.</div><div class='toc-sub1sec-title'><a href='#embedded'>Embedded Style Sheets</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>4.2.</div><div class='toc-sub1sec-title'><a href='#external'>External Style Sheets</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>4.3.</div><div class='toc-sub1sec-title'><a href='#advantage'>The Advantage Of External Style Sheets Over Embedded Style Sheets</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>4.4.</div><div class='toc-sub1sec-title'><a href='#imported'>Imported Style Sheets</a></div></div>
     <div class='toc-sec'><div class='toc-num'>5.</div><div class='toc-sec-title'><a href='#userAgentAuthorUser'>User Agent Styles, Author Styles, And User Styles</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>5.1.</div><div class='toc-sub1sec-title'><a href='#userAgentStyles'>User Agent Styles</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>5.2.</div><div class='toc-sub1sec-title'><a href='#authorStyles'>Author Styles</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>5.3.</div><div class='toc-sub1sec-title'><a href='#userStyles'>User Styles</a></div></div>
     <div class='toc-sec'><div class='toc-num'>6.</div><div class='toc-sec-title'><a href='#theCascade'>The Cascade</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>6.1.</div><div class='toc-sub1sec-title'><a href='#overviewCascade'>Overview Of The Cascade</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.1.1.</div><div class='toc-sub2sec-title'><a href='#authorPresUserPres'>The Cascade By Diagram: Author Styles Present And User Styles Present</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.1.2.</div><div class='toc-sub2sec-title'><a href='#authorPresUserAbs'>The Cascade By Diagram: Author Styles Present And User Styles Absent</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.1.3.</div><div class='toc-sub2sec-title'><a href='#authorAbsUserPres'>The Cascade By Diagram: Author Styles Absent And User Styles Present</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.1.4.</div><div class='toc-sub2sec-title'><a href='#authorAbsUserAbs'>The Cascade By Diagram: Author Styles Absent And User Styles Absent</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>6.2.</div><div class='toc-sub1sec-title'><a href='#processing'>The Cascade Processing Author Styles Into An Author Styles List And User Styles Into A User Styles List</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>6.3.</div><div class='toc-sub1sec-title'><a href='#merging'>The Cascade Merging The User Agent Styles, Author Styles List, User Styles List, And The Definition Of A Style Conflict</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.3.1.</div><div class='toc-sub2sec-title'><a href='#differentSelectors'>Styles With The Same Property, The Same Value, But Different Selectors: No Style Conflict</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.3.2.</div><div class='toc-sub2sec-title'><a href='#differentProperties'>Styles With The Same Selector, But Different Properties: No Style Conflict</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.3.3.</div><div class='toc-sub2sec-title'><a href='#same'>Styles With The Same Selector, The Same Property, And The Same Value: No Style Conflict</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.3.4.</div><div class='toc-sub2sec-title'><a href='#differentValues'>Styles With The Same Selector, The Same Property, But Different Values: Style Conflict</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>6.4.</div><div class='toc-sub1sec-title'><a href='#resolving'>The Cascade's Rules For Resolving Style Conflicts</a></div></div>
     <div class='toc-sub1sec'><div class='toc-num'>6.5.</div><div class='toc-sub1sec-title'><a href='#cascadeInAction'>The Firefox 30 Cascade In Action</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.5.1.</div><div class='toc-sub2sec-title'><a href='#ffUserAgent'>Approximating The Firefox 30 User Agent Styles</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.5.2.</div><div class='toc-sub2sec-title'><a href='#ffProcessing'>The Firefox 30 Cascade Processing Author Styles Into An Author Styles List</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.5.3.</div><div class='toc-sub2sec-title'><a href='#ffMerging'>The Firefox 30 Cascade Merging The Firefox 30 User Agent Styles, Author Styles List, And Resolving Style Conflicts</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.5.4.</div><div class='toc-sub2sec-title'><a href='#ffMaster'>The Firefox 30 Cascade Creating The Master Style Sheet</a></div></div>
     <div class='toc-sub2sec'><div class='toc-num'>6.5.5.</div><div class='toc-sub2sec-title'><a href='#ffApplying'>The Firefox 30 Rendering Engine Applying The Styles Of The Master Style Sheet To Content: Proof That This Is The Way CSS Works</a></div></div>
     <div class='toc-sec'><div class='toc-num'>7.</div><div class='toc-sec-title'><a href='#resources'>Resources And Additional Information</a></div></div>";
