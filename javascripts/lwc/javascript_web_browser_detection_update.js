/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascripts/lwc/javascript_web_browser_detection_update.js.
 * Purpose: Determine web browser name, version, and report whether or not web browser is latest known official version, and, if web browser is not latest known official version, provide link to download web browser.
 * Used in: javascript_web_browser_detection_update.php.
 * Last reviewed/updated: 11 Sep 2018.
 * Published: 04 Feb 2014.
 * Unobtrusive: 1.) decouple HTML/JavaScript: a.) no register JavaScript event handlers in HTML via HTML attributes (eg, onload and onclick), and b.) no embed JavaScripts in HTML via HTML script element; 2.) as reasonable, decouple CSS/JavaScript. Eg, as reasonable, use JavaScript to change HTML class attribute value assignments (loose coupling), not use JavaScript to change JavaScript style object CSS property value assignments (tight coupling); and 3.) no define JavaScript variables and functions on JavaScript global scope.
 * Web browser support: Supported web browsers are those that the JavaScript is designed and tested to positively detect/report on: IE6+ for Windows XP, IE7+ for Windows Vista, IE8+ for Windows 7, IE10+ for Windows 8, IE11+ for Windows 8.1, IE11+ and ED12+ for Windows 10, FF0.8+ for Windows, CH2+ for Windows, OP5+ for Windows, and VV1+ for Windows. Unsupported web browsers are those that the JavaScript is not designed and tested to positively detect/report on: SF for Windows and SM for Windows.
 * Objects: BrowserDetectionUpdateUtil.
 * NOTE:
 * Support for SM1+ for Windows commented out 07 Jul 2016.
 * 30 Jun 2017: make three changes for Vivaldi 1.10+ user-agent string value does not report correct version of Vivaldi.
 * 05 May 2018: Windows 10 version build.update (eg, Windows 10 version 1709 build 16299 update 371 aka 1709 16299.371 and 10.0.16299.371). Update number is appended to both OS build number and Edge version number (eg, OS 10.0.16299.371 has Edge 41.16299.371.0). Since update number is appended to Edge version number and this changes with time, to avoid reporting incorrect update number, do not hard code update number appended to Edge version number. Then decided to remove build.update information throughout as unnecessary. */

/* -------------------- JAVASCRIPT OBJECT DEFINITIONS -------------------- */

/* ---------- NEW JAVASCRIPT OBJECT DEFINITION ---------- */

var BrowserDetectionUpdateUtil = {
 // Method: BrowserDetectionUpdateUtil.browserDetectionUpdate().
 // Purpose: For supported web browsers: 1.) Get web browser user-agent string. 2.) From user-agent string, determine if web browser name is IE, ED, FF, CH, OP, or VV, 3.) If web browser is IE or ED, from user-agent string, determine version of Windows. 4.) From user-agent string, determine web browser version. 5.) Compare the web browser version to the latest known version of the web browser. 6.) Generate and write report to web page, including; a.) web browser name and version, b.) whether or not the web browser is the latest known official version, and c.) if it is not the latest known official version, provide link to download web browser. For unsupported web browsers, generate and write report to web page, "Most likely the web browser is not supported by the JavaScript."
 // NOTE: BrowserDetectionUpdateUtil.browserDetectionUpdate() is not called by javascript_web_browser_detection_update.php. Instead, it is called by last line of this javascript_web_browser_detection_update.js file, which is outside BrowserDetectionUpdateUtil. Effect of placing call to method in the defining .js file is that it disassociates the JavaScript from the web page .php document, which means can edit the JavaScript object/method name without having to also edit the web page HTML.
 browserDetectionUpdate: function(){
  // Next block strings because some web browser version numbers have double and triple points.
  var latestVersionIEForXP = "8.0",
   latestVersionIEForVista = "9.0",
   latestVersionIEFor7 = "11.0",
   latestVersionIEFor8 = "10.0",
   latestVersionIEFor81 = "11.0",
   latestVersionIEFor10 = "11.0",
   latestVersionEDHTMLFor10v1507 = "12.10240",
   latestVersionEDFor10v1507 = "12 (Edge 20)",
   latestVersionEDHTMLFor10v1511 = "13.10586",
   latestVersionEDFor10v1511 = "13 (Edge 25)",
   latestVersionEDHTMLFor10v1607 = "14.14393",
   latestVersionEDFor10v1607 = "14 (Edge 38)",
   latestVersionEDHTMLFor10v1703 = "15.15063",
   latestVersionEDFor10v1703 = "15 (Edge 40)",
   latestVersionEDHTMLFor10v1709 = "16.16299",
   latestVersionEDFor10v1709 = "16 (Edge 41)",
   latestVersionEDHTMLFor10v1803 = "17.17134",
   latestVersionEDFor10v1803 = "17 (Edge 42)",
  // IMPORTANT: Because FF 16+ major releases (e.g., FF58) and point releases (e.g, FF58.0.1) have identical user-agent string values, the logic for FF is slightly different than, for example, SM.
   latestVersionFFPerUaString = "62.0", // Enter latest version FF per user-agent string value, not latest actual version FF. Set to string. Eg, if latest version FF is 50.0.1 but its user-agent string reports 50.0, set to string "50.0" not "50.0.1". REQUIRED.
   isFFPointReleasesWithIdenticalUaStringAsFFMajorRelease = false, // Is there FF point releases with identical user-agent string value as FF major release? Set to boolean true or false. Eg, if FF 50.0 and FF 50.0.1 (+/- and FF 50.0.2, etc) have identical user-agent strings reporting 50.0, set to boolean true. Eg, if there is a FF 50.0 but there is no FF 50.0.1, set to boolean false. REQUIRED.
   latestVersionFF = "62.0", // Enter latest actual version FF, not latest version FF per user-agent string value. Set to string. Eg, if latest version FF is 50.0.1 but its user-agent string reports 50.0, set to string "50.0.1". REQUIRED ONLY IF isFFPointReleasesWithIdenticalUaStringAsFFMajorRelease = true. However, if isFFPointReleasesWithIdenticalUaStringAsFFMajorRelease = false, set to latestVersionFFPerUaString. This way, if FF is FF beta, the report will display the correct latest known official version FF.
   listVersionsFFWithIdenticalUaStringExceptLatestVersionFF = "62.0", // List versions FF with identical user-agent string values except latest version FF. Set to string. Eg, if latestVersionFF = "50.0.1", set to string "50.0" (NOTE: no trailing comma in string if list contains only a single version). Eg, if latestVersionFF = "50.0.2", set to string "50.0, 50.0.1," (NOTE: trailing comma in string if list contains multiple versions). REQUIRED ONLY IF isFFPointReleasesWithIdenticalUaStringAsFFMajorRelease = true. Therefore, if isFFPointReleasesWithIdenticalUaStringAsFFMajorRelease = false, can leave value as is, can set value to empty string "", or can set value to anything.
/*
   latestVersionSM = "2.40",
*/
   latestVersionCH = "69.0.3497.92",
   latestVersionOP = "55.0.2994.56",
   latestVersionVVPerUaString = "1.96.1147.64", // Line added 30 Jun 2017 for Vivaldi 1.10+ user-agent string value does not report correct version of Vivaldi.
   latestVersionVV = "1.15.1147.64";
  var linkDownloadIEForXP = "<a href='http://windows.microsoft.com/ie/'>Internet Explorer " + latestVersionIEForXP + " for Windows XP (windows.microsoft.com)</a>",
   linkDownloadIEForVista = "<a href='http://windows.microsoft.com/ie/'>Internet Explorer " + latestVersionIEForVista + " for Windows Vista (windows.microsoft.com)</a>",
   linkDownloadIEFor7 = "<a href='http://windows.microsoft.com/ie/'>Internet Explorer " + latestVersionIEFor7 + " for Windows 7 (windows.microsoft.com)</a>",
   linkDownloadIEFor8 = "<a href='http://windows.microsoft.com/ie/'>Internet Explorer " + latestVersionIEFor8 + " for Windows 8 (windows.microsoft.com)</a>",
   linkDownloadIEFor81 = "<a href='http://windows.microsoft.com/ie/'>Internet Explorer " + latestVersionIEFor81 + " for Windows 8.1 (windows.microsoft.com)</a>",
   linkDownloadWindows10 = "<a href='https://www.microsoft.com/en-us/software-download/windows10'>Get Windows 10 (microsoft.com)</a>",
   linkDownloadFF = "<a href='https://www.mozilla.org/firefox/new/'>Firefox " + latestVersionFF + " (mozilla.com)</a>",
/*
   linkDownloadSM = "<a href='http://www.seamonkey-project.org/'>SeaMonkey " + latestVersionSM + " (seamonkey-project.org)</a>",
*/
   linkDownloadCH = "<a href='https://www.google.com/intl/en/chrome/'>Chrome " + latestVersionCH + " (google.com)</a>",
   linkDownloadOP = "<a href='http://www.opera.com/'>Opera " + latestVersionOP + " (opera.com)</a>",
   linkDownloadVV = "<a href='https://vivaldi.com/download/'>Vivaldi " + latestVersionVV + " (vivaldi.com)</a>";
  var userAgent = navigator.userAgent.toLowerCase(),
   browserName = "",
   operatingSystem = "",
   browserStatus = "",
   browserVersion = "",
   linkDownloadBrowser = "",
   reasonNotDetected = "",
   errorReportLineAndIssue = "";
  // Independently detect IE5+ except for OP9 - 12.17 (Mask as Internet Explorer). For ED see below.
  if (((userAgent.indexOf("msie") !== -1) && (userAgent.indexOf("opera") === -1)) || (userAgent.indexOf("trident/7.0") !== -1)){
   browserName = "Internet Explorer";
   // userAgent = "enter test user-agent string here and uncomment out";
   // Is operating system Windows XP?
   if (userAgent.indexOf("windows nt 5.1") !== -1){
    operatingSystem = " for Windows XP";
    // Is latest version of IE (IE8) for Windows XP?
    if ((userAgent.indexOf("msie " + latestVersionIEForXP) !== -1) || ((userAgent.indexOf("msie 7.0") !== -1) && (userAgent.indexOf("trident/4.0") !== -1))){
     browserStatus = "latestVersion";
     browserVersion = latestVersionIEForXP;
    // Is IE7 for Windows XP?
    } else if ((userAgent.indexOf("msie 7.0") !== -1) && (userAgent.indexOf("trident") === -1)){
     browserStatus = "notLatestVersion";
     browserVersion = "7.0";
     linkDownloadBrowser = linkDownloadIEForXP;
    // Is IE6 for Windows XP?
    } else if (userAgent.indexOf("msie 6.0") !== -1){
     browserStatus = "notLatestVersion";
     browserVersion = "6.0";
     linkDownloadBrowser = linkDownloadIEForXP;
    // Report error detecting version of IE for Windows XP.
    } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Internet Explorer for Windows XP is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 102. Issue: Detect version of Internet Explorer for Windows XP failed.";
    }
   }
   // Is operating system Windows Vista?
   else if (userAgent.indexOf("windows nt 6.0") !== -1){
    operatingSystem = " for Windows Vista";
    // Is latest version of IE (IE9) for Windows Vista?
    if ((userAgent.indexOf("msie " + latestVersionIEForVista) !== -1) || ((userAgent.indexOf("msie 7.0") !== -1) && (userAgent.indexOf("trident/5.0") !== -1))){
     browserStatus = "latestVersion";
     browserVersion = latestVersionIEForVista;
    // Is IE8 for Windows Vista?
    } else if ((userAgent.indexOf("msie 8.0") !== -1) || ((userAgent.indexOf("msie 7.0") !== -1) && (userAgent.indexOf("trident/4.0") !== -1))){
     browserStatus = "notLatestVersion";
     browserVersion = "8.0";
     linkDownloadBrowser = linkDownloadIEForVista;
    // Is IE7 for Windows Vista?
    } else if ((userAgent.indexOf("msie 7.0") !== -1) && (userAgent.indexOf("trident") === -1)){
     browserStatus = "notLatestVersion";
     browserVersion = "7.0";
     linkDownloadBrowser = linkDownloadIEForVista;
    // Report error detecting version of IE for Windows Vista.
    } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Internet Explorer for Windows Vista is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 126 Issue: Detect version of Internet Explorer for Windows Vista failed.";
    }
   }
   // Is operating system Windows 7?
   else if (userAgent.indexOf("windows nt 6.1") !== -1){
    operatingSystem = " for Windows 7";
    // Is latest version of IE (IE11) for Windows 7?
    if ((userAgent.indexOf("rv:" + latestVersionIEFor7) !== -1) || ((userAgent.indexOf("msie 7.0") !== -1) && (userAgent.indexOf("trident/7.0") !== -1))){
     browserStatus = "latestVersion";
     browserVersion = latestVersionIEFor7;
    // Is IE10 for Windows 7?
    } else if ((userAgent.indexOf("msie 10.0") !== -1) || ((userAgent.indexOf("msie 7.0") !== -1) && (userAgent.indexOf("trident/6.0") !== -1))){
     browserStatus = "notLatestVersion";
     browserVersion = "10.0";
     linkDownloadBrowser = linkDownloadIEFor7;
    // Is IE9 for Windows 7?
    } else if ((userAgent.indexOf("msie 9.0") !== -1) || ((userAgent.indexOf("msie 7.0") !== -1) && (userAgent.indexOf("trident/5.0") !== -1))){
     browserStatus = "notLatestVersion";
     browserVersion = "9.0";
     linkDownloadBrowser = linkDownloadIEFor7;
    // Is IE8 for Windows 7?
    } else if ((userAgent.indexOf("msie 8.0") !== -1) || ((userAgent.indexOf("msie 7.0") !== -1) && (userAgent.indexOf("trident/4.0") !== -1))){
     browserStatus = "notLatestVersion";
     browserVersion = "8.0";
     linkDownloadBrowser = linkDownloadIEFor7;
    // Report error detecting version of IE for Windows 7.
    } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Internet Explorer for Windows 7 is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 155. Issue: Detect version of Internet Explorer for Windows 7 failed.";
    }
   }
   // Is operating system Windows 8?
   else if (userAgent.indexOf("windows nt 6.2") !== -1){
    operatingSystem = " for Windows 8";
    // Is latest version of IE (IE10) for Windows 8?
    if ((userAgent.indexOf("msie " + latestVersionIEFor8) !== -1) || ((userAgent.indexOf("msie 7.0") !== -1) && (userAgent.indexOf("trident/6.0") !== -1))){
     browserStatus = "latestVersion";
     browserVersion = latestVersionIEFor8;
    // Report error detecting version of IE for Windows 8.
    } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Internet Explorer for Windows 8 is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 169. Issue: Detect version of Internet Explorer for Windows 8 failed.";
    }
   }
   // Is operating system Windows 8.1?
   else if (userAgent.indexOf("windows nt 6.3") !== -1){
    operatingSystem = " for Windows 8.1";
    // Is latest version of IE (IE11) for Windows 8.1?
    if ((userAgent.indexOf("rv:" + latestVersionIEFor81) !== -1) || ((userAgent.indexOf("msie 7.0") !== -1) && (userAgent.indexOf("trident/7.0") !== -1))){
     browserStatus = "latestVersion";
     browserVersion = latestVersionIEFor81;
    // Report error detecting version of IE for Windows 8.1.
    } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Internet Explorer for Windows 8.1 is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 183. Issue: Detect version of Internet Explorer for Windows 8.1 failed.";
    }
   }
   // Is operating system Windows 10?
   else if (userAgent.indexOf("windows nt 10.0") !== -1){
    operatingSystem = " for Windows 10";
    // Is latest version of IE (IE11) for Windows 10?
    if ((userAgent.indexOf("rv:" + latestVersionIEFor10) !== -1) || ((userAgent.indexOf("msie 7.0") !== -1) && ((userAgent.indexOf("trident/7.0") !== -1) || (userAgent.indexOf("trident/8.0") !== -1)))){
     browserStatus = "latestVersion";
     browserVersion = latestVersionIEFor10;
    // Report error detecting version of IE for Windows 10.
    } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Internet Explorer for Windows 10 is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 197. Issue: Detect version of Internet Explorer for Windows 10 failed.";
    }
   // Report error detecting version of Windows for Internet Explorer.
   } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Windows is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 203. Issue: Detect version of Windows for Internet Explorer failed.";
   }
  // Independently detect ED.
  } else if (userAgent.indexOf("edge") !== -1){
   browserName = "EdgeHTML";
   // userAgent = "enter test user-agent string here and uncomment out";
   // Is operating system Windows 10 Version 1507 Build 10240?
   if (userAgent.indexOf("10240") !== -1){
    operatingSystem = " for Windows 10 Version 1507";
    // Is latest version of ED for Windows 10 Version 1507 Build 10240?
    if (userAgent.indexOf("edge/" + latestVersionEDHTMLFor10v1507) !== -1){
     browserStatus = "latestVersion";
     browserVersion = latestVersionEDFor10v1507;
    // Report error detecting version of ED for Windows 10 Version 1507 Build 10240.
    } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Edge for Windows 10 Version 1507 is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 220. Issue: Detect version of Edge for Windows 10 Version 1507 failed.";
    }
   }
   // Is operating system Windows 10 Version 1511 Build 10586?
   else if (userAgent.indexOf("10586") !== -1){
    operatingSystem = " for Windows 10 Version 1511";
    // Is latest version of ED for Windows 10 Version 1511 Build 10586?
    if (userAgent.indexOf("edge/" + latestVersionEDHTMLFor10v1511) !== -1){
     browserStatus = "latestVersion";
     browserVersion = latestVersionEDFor10v1511;
    // Report error detecting version of ED for Windows 10 Version 1511 Build 10586.
    } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Edge for Windows 10 Version 1511 is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 234. Issue: Detect version of Edge for Windows 10 Version 1511 failed.";
    }
   }
   // Is operating system Windows 10 Version 1607 Build 14393?
   else if (userAgent.indexOf("14393") !== -1){
    operatingSystem = " for Windows 10 Version 1607";
    // Is latest version of ED for Windows 10 Version 1607 Build 14393?
    if (userAgent.indexOf("edge/" + latestVersionEDHTMLFor10v1607) !== -1){
     browserStatus = "latestVersion";
     browserVersion = latestVersionEDFor10v1607;
    // Report error detecting version of ED for Windows 10 Version 1607 Build 14393.
    } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Edge for Windows 10 Version 1607 is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 248. Issue: Detect version of Edge for Windows 10 Version 1607 failed.";
    }
   }
   // Is operating system Windows 10 Version 1703 Build 15063?
   else if (userAgent.indexOf("15063") !== -1){
    operatingSystem = " for Windows 10 Version 1703";
    // Is latest version of ED for Windows 10 Version 1703 Build 15063?
    if (userAgent.indexOf("edge/" + latestVersionEDHTMLFor10v1703) !== -1){
     browserStatus = "latestVersion";
     browserVersion = latestVersionEDFor10v1703;
    // Report error detecting version of ED for Windows 10 Version 1703 Build 15063.
    } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Edge for Windows 10 Version 1703 is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 262. Issue: Detect version of Edge for Windows 10 Version 1703 failed.";
    }
   }
   // Is operating system Windows 10 Version 1709 Build 16299?
   else if (userAgent.indexOf("16299") !== -1){
    operatingSystem = " for Windows 10 Version 1709";
    // Is latest version of ED for Windows 10 Version 1709 Build 16299?
    if (userAgent.indexOf("edge/" + latestVersionEDHTMLFor10v1709) !== -1){
     browserStatus = "latestVersion";
     browserVersion = latestVersionEDFor10v1709;
    // Report error detecting version of ED for Windows 10 Version 1709 Build 16299.
    } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Edge for Windows 10 Version 1709 is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 276. Issue: Detect version of Edge for Windows 10 Version 1709 failed.";
    }
   }
   // Is operating system Windows 10 Version 1803 Build 17134?
   else if (userAgent.indexOf("17134") !== -1){
    operatingSystem = " for Windows 10 Version 1803";
    // Is latest version of ED for Windows 10 Version 1803 Build 17134?
    if (userAgent.indexOf("edge/" + latestVersionEDHTMLFor10v1803) !== -1){
     browserStatus = "latestVersion";
     browserVersion = latestVersionEDFor10v1803;
    // Report error detecting version of ED for Windows 10 Version 1803 Build 17134.
    } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Edge for Windows 10 Version 1803 is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 290. Issue: Detect version of Edge for Windows 10 Version 1803 failed.";
    }
   // Report error detecting version of Windows for ED.
   } else {
     browserStatus = "unknown";
     reasonNotDetected = "Most likely the version of Windows is an unofficial version and not supported by the JavaScript.";
     errorReportLineAndIssue = "Line: 296. Issue: Detect version of Windows for Edge failed.";
   }
  // Independently detect FF0.8+ except for OP9.10+ Mask As Firefox.
  // "gecko/2009xxxxxx firefox/3.0.1x" are to exclude FL2.5 - 2.5.2. "gecko/20050302 firefox/0.9.6" is to exclude NT8.0 Beta.
  } else if ((userAgent.indexOf("firefox") !== -1) && (userAgent.indexOf("seamonkey") === -1) && (userAgent.indexOf("opera") === -1) && (userAgent.indexOf("navigator") === -1) && (userAgent.indexOf("flock") === -1) && (userAgent.indexOf("gecko/2009051221 firefox/3.0.10") === -1) && (userAgent.indexOf("gecko/2009072518 firefox/3.0.12") === -1) && (userAgent.indexOf("gecko/2009080717 firefox/3.0.13") === -1) && (userAgent.indexOf("gecko/20050302 firefox/0.9.6") === -1)){
   browserName = "Firefox";
   // userAgent = "enter test user-agent string here and uncomment out";
   // Get version FF.
   getBrowserVersion("firefox/");
   // Is FF latest version?
   if (browserVersion === latestVersionFFPerUaString){
    browserStatus = "latestVersion";
    // FF is not latest version.
   } else {
    browserStatus = "notLatestVersion";
    linkDownloadBrowser = linkDownloadFF;
   }
/*
  // Independently detect SM1+.
  } else if (userAgent.indexOf("seamonkey") !== -1){
   browserName = "SeaMonkey";
   // userAgent = "enter test user-agent string here and uncomment out";
   // Get version SM.
   getBrowserVersion("seamonkey/");
   // Is SM latest version?
   if (browserVersion === latestVersionSM){
    browserStatus = "latestVersion";
   // SM is not latest version.
   } else {
    browserStatus = "notLatestVersion";
    linkDownloadBrowser = linkDownloadSM;
   }
*/
  // Independently detect CH2+.
  } else if ((userAgent.indexOf("chrome") !== -1) && (userAgent.indexOf("opr") === -1) && (userAgent.indexOf("flock") === -1) && (userAgent.indexOf("vivaldi") === -1)){
   browserName = "Chrome";
   // userAgent = "enter test user-agent string here and uncomment out";
   // Get version CH.
   getBrowserVersion("chrome/");
   // Is CH latest version?
   if (browserVersion === latestVersionCH){
    browserStatus = "latestVersion";
   // CH is not latest version.
   } else {
    browserStatus = "notLatestVersion";
    linkDownloadBrowser = linkDownloadCH;
   }
  // Independently detect Opera 5+ except for OP9 - 12.17 (Mask As Internet Explorer) and OP10.50 - 12.17 (Mask As Firefox).
  // Note (not all inclusive): 1.) "gecko/20061208" detects OP9.50 Beta-10.50 Beta2 (Identify as Firefox) and OP9.50 Beta-10.50 Beta2 (Mask as Firefox). 2.) "gecko/20061208" && not "opera" detects OP9.50 Beta-10.50 Beta2 (Mask as Firefox). 3.) "gecko/20060728" && "rv:1.8.0" detects OP9.10 - 9.27 (Identify as Firefox) and OP9.10 - 9.27 (Mask as Firefox). 4.) "gecko/20060728" && "rv:1.8.0" && not "opera" detects OP9.10 - 9.27 (Mask as Firefox). 5.) "gecko/20041110" detects OP9.00 - 9.02 (Mask as Mozilla). 6.) user-agent strings with "version/" also have "opera/9.80". Therefore, must do search for "version/" before search for "opera/". */
  } else if ((userAgent.indexOf("opr") !== -1) || (userAgent.indexOf("opera") !== -1) || ((userAgent.indexOf("gecko/20061208") !== -1) && (userAgent.indexOf("opera") === -1)) || ((userAgent.indexOf("gecko/20060728") !== -1) && (userAgent.indexOf("rv:1.8.0") !== -1) && (userAgent.indexOf("opera") === -1)) || (userAgent.indexOf("gecko/20041110") !== -1)){
   browserName = "Opera";
   // userAgent = "enter test user-agent string here and uncomment out";
   // Get version OP.
   if ((userAgent.indexOf("opr")) !== -1){
    getBrowserVersion("opr/");
    // Is OP latest version?
    if (browserVersion === latestVersionOP){
     browserStatus = "latestVersion";
    // OP is not latest version.
    } else {
     browserStatus = "notLatestVersion";
     linkDownloadBrowser = linkDownloadOP;
    }
   } else if ((userAgent.indexOf("version")) !== -1){
    getBrowserVersion("version/");
    // Is OP latest version?
    if (browserVersion === latestVersionOP){
     browserStatus = "latestVersion";
    // OP is not latest version.
    } else {
     browserStatus = "notLatestVersion";
     linkDownloadBrowser = linkDownloadOP;
    }
   } else if ((userAgent.indexOf("opera ")) !== -1){
    getBrowserVersion("opera ");
    // Is OP latest version?
    if (browserVersion === latestVersionOP){
     browserStatus = "latestVersion";
    // OP is not latest version.
    } else {
     browserStatus = "notLatestVersion";
     linkDownloadBrowser = linkDownloadOP;
    }
   } else if ((userAgent.indexOf("opera/")) !== -1){
    getBrowserVersion("opera/");
    // Is OP latest version?
    if (browserVersion === latestVersionOP){
     browserStatus = "latestVersion";
    // OP is not latest version.
    } else {
     browserStatus = "notLatestVersion";
     linkDownloadBrowser = linkDownloadOP;
    }
   } else if ((userAgent.indexOf("gecko/20061208") !== -1) && (userAgent.indexOf("opera") === -1)){
    browserStatus = "notLatestVersion";
    browserVersion = "9.50 Beta (Mask as Firefox) through Opera 10.50 Beta2 (Mask as Firefox)";
    linkDownloadBrowser = linkDownloadOP;
   } else if ((userAgent.indexOf("gecko/20060728") !== -1) && (userAgent.indexOf("rv:1.8.0") !== -1) && (userAgent.indexOf("opera") === -1)){
    browserStatus = "notLatestVersion";
    browserVersion = "9.10 (Mask as Firefox) through Opera 9.27 (Mask as Firefox).";
    linkDownloadBrowser = linkDownloadOP;
   } else if (userAgent.indexOf("gecko/20041110") !== -1){
    browserStatus = "notLatestVersion";
    browserVersion = "9.00 (Mask as Mozilla) through OP9.02 (Mask as Mozilla).";
    linkDownloadBrowser = linkDownloadOP;
   } else {
    browserStatus = "unknown";
    reasonNotDetected = "Most likely the version of Opera is Opera 9 - 12.17 (Mask As Internet Explorer) or Opera 10.50 - 12.17 (Mask As Firefox), neither of which are supported by the JavaScript.";
    errorReportLineAndIssue = "Line: 404. Issue: Detect version of Opera failed.";
   }
  // Independently detect VV1+.
  } else if (userAgent.indexOf("vivaldi") !== -1){
   browserName = "Vivaldi";
   // userAgent = "enter test user-agent string here and uncomment out";
   // Get version VV.
   getBrowserVersion("vivaldi/");
   // Is VV latest version?
   if (browserVersion === latestVersionVVPerUaString){ // Line edited 30 Jun 2017 for Vivaldi 1.10+ user-agent string value does not report correct version of Vivaldi.
    browserStatus = "latestVersion";
    browserVersion = latestVersionVV; // Line added 30 Jun 2017 for Vivaldi 1.10+ user-agent string value does not report correct version of Vivaldi.
   // VV is not latest version.
   } else {
    browserStatus = "notLatestVersion";
    linkDownloadBrowser = linkDownloadVV;
   }
  // Report error detecting web browser.
  } else {
   browserStatus = "unknown";
   reasonNotDetected = "Most likely the web browser is not supported by the JavaScript.";
   errorReportLineAndIssue = "Line: 425. Issue: Detect web browser failed.";
  }
  // Function: getBrowserVersion().
  // Purpose: Extract browserVersion from user-agent string for non-IE web browsers in which browserVersion is present in unique user-agent string. As fail-safe, test for " " after end of browserVersion even though unaware of any user-agent strings with data after end of browserVersion.
  // Note: Passed in browserVersionSearchString has length such that the next character is beginning of browserVersion.
  function getBrowserVersion(browserVersionSearchString){
   var userAgentIndexOfBrowserVersionSearchString = userAgent.indexOf(browserVersionSearchString);
   var browserVersionString = userAgent.substring(userAgentIndexOfBrowserVersionSearchString + browserVersionSearchString.length);
   var browserVersionStringIndexOfSpace = browserVersionString.indexOf(" ");
   if (browserVersionStringIndexOfSpace === -1){
    browserVersion = browserVersionString;
   } else {
    browserVersion = browserVersionString.substr(0, browserVersionStringIndexOfSpace);
   }
  }
  // Function: anonymous.
  // Purpose: Generate and write report to web page.
  // NOTE: Immediately invoked.
  (function(){
   document.write("<p><b>Web Browser User-Agent String Value</b><br />" + userAgent + "</p>");
   document.write("<p><b>JavaScript Web Browser Detection With Link To Download Update Report</b><br />");
   if (browserStatus === "latestVersion"){
    if ((browserName === "Firefox") && (isFFPointReleasesWithIdenticalUaStringAsFFMajorRelease)){
     document.write("The web browser is " + browserName + " " + listVersionsFFWithIdenticalUaStringExceptLatestVersionFF + " or " + latestVersionFF + ".<br />" +
     browserName + " " + latestVersionFF + " is the latest known official version of " + browserName + ".<br />" +
     "Unfortunately, the " + browserName + " " + listVersionsFFWithIdenticalUaStringExceptLatestVersionFF + " and " + latestVersionFF + " user-agent string values are identical, which makes it impossible - based on user-agent string values - to determine if " + browserName + " is the latest known official version.</p>");
    } else {
     document.write("The web browser is " + browserName + " " + browserVersion + operatingSystem + ".<br />" +
     browserName + " " + browserVersion + operatingSystem + " is the latest known official version of " + browserName + operatingSystem + ".<br />" +
     "No newer official version of " + browserName + " is known available.</p>");
    }
   } else if (browserStatus === "notLatestVersion"){
    document.write("The web browser is " + browserName + " " + browserVersion + operatingSystem + ".<br />" +
    browserName + " " + browserVersion + operatingSystem + " is not the latest known official version of " + browserName + operatingSystem + ".<br />" +
    linkDownloadBrowser + " is the latest known official version of " +  browserName + operatingSystem + ".</p>");
   } else if (browserStatus === "unknown"){
    document.write("The JavaScript did not detect the web browser.<br />" +
    reasonNotDetected + "<br />" +
    "Error report - File: javascript_web_browser_detection_update.js. Object: BrowserDetectionUpdateUtil. Method: browserDetectionUpdate(). " + errorReportLineAndIssue + "</p>");
   }
  })();
 }
};

BrowserDetectionUpdateUtil.browserDetectionUpdate();
