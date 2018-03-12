<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: views/userAccnts-html.php.
 * Purpose: User Accounts page view.
 * Used in: controllers/userAccnts.php.
 * Last reviewed/updated: 20 Jul 2017.
 * Last reviewed/updated for XSS: 31 May 2017.
 * Published: 14 May 2017.
 * Forms: 1.) createUserAccntForm, 2.) dropUserAccntsForm, 3.) selectUserAccntForm, and 4.) userAccntPrivsForm. */

/* ---------- USER ACCOUNTS TABLE DATA ---------- */

// Determine if user accounts table data array is not empty. If not empty, expression evaluates to boolean true.
if (!empty($uA->userAccntsTableDataArray)){
// User accounts table data array is not empty. Iterate over array elements.
 foreach ($uA->userAccntsTableDataArray as list($user, $host, $userAccnt, $password, $privileges, $grant, $on)){
  // Call html entities method to reduce XSS attack surface and set return value on $variable.
  // NOTE: Untrusted data output to HTML is vulnerable to XSS attack. $user, $host, and $userAccnt are untrusted data output to HTML. To reduce XSS attack surface, convert all applicable characters to HTML entities.
  $user = $index->htmlEntities($user);
  $host = $index->htmlEntities($host);
  $userAccnt = $index->htmlEntities($userAccnt);
  $uA->userAccntsTableDataHtml .= "<tr>\n";
  // Drop column.
  // NOTE: sys indicates MySQL/phpMyAdmin system user account. Drop unavailable.
  if (($user === "pma") || ($user === "root")){
   $uA->userAccntsTableDataHtml .= "<td class='text-align-center'>sys</td>\n";
  } else {
   $uA->userAccntsTableDataHtml .= "<td class='text-align-center'><label><input type='checkbox' name='dropUserAccntsArray[]' value=\"$userAccnt\" /><span>&#10003;</span></label></td>\n";
  }
  // User name column.
  // NOTE: Asterisk (*) character indicates MySQL/phpMyAdmin user account.
  if (($user === "pma") || ($user === "root")){
   $uA->userAccntsTableDataHtml .= "<td>$user*</td>\n";
  } elseif ($user === ""){
   $uA->userAccntsTableDataHtml .= "<td>Any*</td>\n";
  } else {
   $uA->userAccntsTableDataHtml .= "<td>$user</td>\n";
  }
  // Host name/IP column.
  $uA->userAccntsTableDataHtml .= "<td>$host</td>\n";
  // Password column.
  if ($password === ""){
   $uA->userAccntsTableDataHtml .= "<td>No</td>\n";
  } else {
   $uA->userAccntsTableDataHtml .= "<td>Yes</td>\n";
  }
  // Privileges (Grant Yes/No) column.
  // NOTE: sys indicates MySQL/phpMyAdmin system database that cannot be selected for drop.
  if ($grant === ""){
   $uA->userAccntsTableDataHtml .= "<td>$privileges (GRANT No)</td>\n";
  } else {
   $uA->userAccntsTableDataHtml .= "<td>$privileges (GRANT Yes)</td>\n";
  }
  // On databases.tables column.
  $uA->userAccntsTableDataHtml .= "<td class='text-align-center'>$on</td>\n";
  $uA->userAccntsTableDataHtml .= "</tr>\n";
 }
} else {
 // Similar text in User Accounts page view (views/userAccnts-html.php) and Databases page view (views/databases-html.php).
 $uA->userAccntsTableDataHtml = "<tr>\n<td colspan='6'>Error: Unable to list MySQL user accounts. Most likely <!-- you are not logged into MySQL under the MySQL root user account, -->the MySQL root user account has been changed/corrupted in some way that it is unable to list MySQL user accounts, or Simple MySQL Admin has been changed/corrupted in some way that it is unable to list MySQL user accounts. To continue, please try manually entering the credentials for a MySQL user account with sufficient privileges to list MySQL user accounts into the Simple MySQL Admin <span class='filename'>simple_mysql_admin/connection_credentials.php</span> file, or try uninstalling Simple MySQL Admin and redownloading and reinstalling Simple MySQL Admin from scratch.</td>\n</tr>";
}
// Unset foreach special variables used below, including in views/userAccnts-html-content.php.
unset($userAccnt);

/* ---------- SELECT USER ACCOUNT DROPDOWN ---------- */

// Determine if MySQL connection successful. If successful, expression evaluates to boolean true.
if ($index->isConnected){
 // MySQL connection successful.
 // NOTE: If use $uA->userAccntsArray as list($userAccnt) here, then use $uA->userAccntsArray[] = array($userAccnt) in User Accounts page controller (controllers/userAccnts.php).
 foreach ($uA->userAccntsArray as $userAccnt){
  if (($userAccnt !== "'pma'@'localhost'") && ($userAccnt !== "'root'@'localhost'") && ($userAccnt !== "'root'@'127.0.0.1'") && ($userAccnt !== "'root'@'::1'")){
   // Call html entities method to reduce XSS attack surface and set return value on $variable.
   // NOTE: Untrusted data output to HTML is vulnerable to XSS attack. $userAccnt is untrusted data output to HTML. To reduce XSS attack surface, convert all applicable characters to HTML entities.
   if ((isset($_SESSION["selectedUserAccnt"])) && ($userAccnt === $_SESSION["selectedUserAccnt"])){
    $userAccnt = $index->htmlEntities($userAccnt);
    $uA->selectUserAccntDropdownHtml .= "<option value=\"$userAccnt\" selected='selected'>$userAccnt</option>\n";
   } else {
    $userAccnt = $index->htmlEntities($userAccnt);
    $uA->selectUserAccntDropdownHtml .= "<option value=\"$userAccnt\">$userAccnt</option>\n";
   }
  }
 }
}

/* ---------- USER ACCOUNTS HTML CONTENT ---------- */

// Quantity of content makes logic difficult to read. Therefore, place content in external file.
$userAccntsHtmlContentHtml = require_once "views/userAccnts-html-content.php";

/* ---------- VIEW ---------- */

return
  "<div class='view-container'>
    $userAccntsHtmlContentHtml
   </div>
";
