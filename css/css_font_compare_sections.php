<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_font_compare_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/css/css_font_compare.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>The choice of font is an important decision when designing a web page/site. Therefore, it is useful to be able to compare fonts side by side exactly as they would appear online. In this web page, user selected CSS <code>font</code> property values in Section 2.1 are applied to strings of text in Section 2.2, thereby allowing CSS <code>font</code> property values to be compared side by side online.</p>

    </section>
    <hr />
    <section>

     <h2><a id='selectAndCompare'></a>2. Select And Compare CSS <code>font</code> Property Values Side By Side Online</h2>

     <h3><a id='select'></a>2.1. Select CSS <code>font</code> Property Values</h3>

     <form id='formId'>
      <p>
       <button type='reset' id='resetBtnId' class='btn-md'>Reset</button>
       <button type='button' id='addAnotherBtnId' data-addanothercounter='3' class='btn-md'>Add Another To Compare</button>
      </p>
      <div id='selectFontId1'>
       1.) font-family:
        <select size='1' id='fontFamily_Id1'>
         $reusableCode->fontFamilySelectboxOptions
        </select>&nbsp;&nbsp;
       font-size:
        <select size='1' id='fontSizeAbs_Id1'>
         $reusableCode->fontSizeAbsSelectboxOptions
        </select>&nbsp;&nbsp;
       px or pt:
        <select size='1' id='fontSizePxPt_Id1'>
         $reusableCode->fontSizePxPtSelectboxOptions
        </select>&nbsp;&nbsp;
       font-weight:
        <select size='1' id='fontWeight_Id1'>
         $reusableCode->fontWeightSelectboxOptions
        </select>&nbsp;&nbsp;
       font-style:
        <select size='1' id='fontStyle_Id1'>
         $reusableCode->fontStyleSelectboxOptions
        </select>
      </div>
      <div id='selectFontId2'>
       2.) font-family:
        <select size='1' id='fontFamily_Id2'>
         $reusableCode->fontFamilySelectboxOptions
        </select>&nbsp;&nbsp;
       font-size:
        <select size='1' id='fontSizeAbs_Id2'>
         $reusableCode->fontSizeAbsSelectboxOptions
        </select>&nbsp;&nbsp;
       px or pt:
        <select size='1' id='fontSizePxPt_Id2'>
         $reusableCode->fontSizePxPtSelectboxOptions
        </select>&nbsp;&nbsp;
       font-weight:
        <select size='1' id='fontWeight_Id2'>
         $reusableCode->fontWeightSelectboxOptions
        </select>&nbsp;&nbsp;
       font-style:
        <select size='1' id='fontStyle_Id2'>
         $reusableCode->fontStyleSelectboxOptions
        </select>
      </div>
     </form>
     <br />

     <h3><a id='compare'></a>2.2. Compare CSS <code>font</code> Property Values Side By Side Online</h3>

     <p id='compareId'>
      <span id='compareFontId1' class='line-height-normal'>1.) <span id='stringId1'>$reusableCode->allCharactersString</span><br /></span>
      <span id='compareFontId2' class='line-height-normal'>2.) <span id='stringId2'>$reusableCode->allCharactersString</span><br /></span>
     </p>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/CSS2/fonts.html'>Cascading Style Sheets Level 2 Revision 1 (CSS 2.1) Specification: 15 Fonts (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/css-fonts-3/'>CSS Fonts Module Level 3: W3C Candidate Recommendation 3 October 2013 (w3.org)</a></li>
      <li><a href='http://www.microsoft.com/typography/AboutFontsOverview.mspx'>Microsoft Typography (microsoft.com)</a></li>
     </ul>

    </section>";
