/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascripts/lwc/google_analytics.js.
 * Purpose: LWC Home Google Analytics HTML.
 * Used in: 404.shtml and web_browser_retain_remove_content_f5.html. Used in LWC Home web pages based on LWC Home Template (/public_html/html/template_explained.php) that need to be .(s)html files, not .php files. Not used in LWC Home specialty web pages. Not used in LWC Blog/Forums.
 * Last reviewed/updated: 24 May 2018.
 * Published: 16 May 2018.
 * Web browser support: ???
 * NOTE: Copy changes to google_analytics.php and google_analytics.js. */

document.write(
'<!-- Global site tag (gtag.js) - Google Analytics -->' +
'<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53108923-2"></script>' +
'<script>' +
 'window.dataLayer = window.dataLayer || [];' +
 'function gtag(){dataLayer.push(arguments);}' +
 'gtag("js", new Date());' +
 'gtag("config", "UA-53108923-2");' +
'</script>'
);


