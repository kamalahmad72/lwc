<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: classes/UserAccnts.class.php.
 * Purpose: User Accounts page model. Class definition for User Accounts page $uA object. User Accounts page $uA object declares properties representing User Accounts page web page content and defines methods representing User Accounts page interface.
 * Used in: controllers/userAccnts.php.
 * Last reviewed/updated: 15 Jul 2017.
 * Last reviewed/updated for SQL injection: 31 May 2017.
 * Published: 14 May 2017.
 * NOTE: No HTML in class definition. */

/* -------------------- PHP CLASS DEFINITION -------------------- */

// Instantiated as $uA object in controller (controllers/userAccnts.php).
class UserAccnts {

/* ---------- PROPERTIES ---------- */

 // Properties: $uA->property.
 // Purpose: $uA object properties.
 // NOTE: No logic in properties.

 // First assigned value in User Accounts page class (classes/UserAccnts.class.php, this file).
 private
  $dbh;		// Object. Represents a connection between PHP and a database server (aka, dbh = database handle). PHP connects to database server via the $index->dbh property (an object), which is passed from the $index object to the $uA object. (function __construct() method below.)
 public
  $isCreateUserAccntSuccessful,			// Boolean. ($uA->createUserAccnt() method below.)
  $isDropUserAccntsSuccessful,			// Boolean. ($uA->dropUserAccnts() method below.)
  $isRevokeAllPrivsSuccessful,			// Boolean. ($uA->revokeAllPrivs() method below.)
  $isRevokeGrantOptionSuccessful,		// Boolean. ($uA->revokeGrantOption() method below.)
  $isGrantSuccessful,					// Boolean. ($uA->grant() method below.)
  $isSelectUserHostPasswordSuccessful,	// Boolean. ($uA->selectUserHostPassword() method below.)
  $isShowGrantsSuccessful;				// Boolean. ($uA->showGrants() method below.)

 // First assigned value in User Accounts page controller (controllers/userAccnts.php).
 public
  $createUserAccntStatus,				// String. (create user account section.)
  $dropUserAccntsStatus,				// String. (drop user accounts section.)
  $selectedUserAccntFromSession,		// String. (edit user account privileges section.)
  $editedUserAccntPrivsCsv,				// String. (edit user account privileges section.)
  $editStatus,							// String. (edit user account privileges section.)
  $isEditedUserAccntPrivsIncludeGrant,	// Boolean. (edit user account privileges section.)
  $userAccntsArray,						// Array. (user accounts table data section.)
  $userAccntsTableDataArray,			// Array. (user accounts table data section.)
  $userAccntsPrivsCsv,					// String. (user accounts table data section.)
  $privsCsv,							// String. (get selected user account privileges section.) Used in simple_mysql_admin.js.
  $isEditUserAccntPrivsFieldsetForm;	// String. (is last form submitted an edit user account privileges fieldset form.) Used in simple_mysql_admin.js.

 // First assigned value in User Accounts page view (views/userAccnts-html.php).
 public
  $userAccntsTableDataHtml,			// String. First use is with .= operator. If not declared as $uA-property, throws following which references first use: Notice: Undefined variable: userAccntsTableDataHtml.
  $selectUserAccntDropdownHtml;		// String. First use is with .= operator. If not declared as $uA-property, throws following which references first use: Notice: Undefined variable: selectUserAccntDropdownHtml.

/* ---------- METHODS ---------- */

 // NOTE:
 // Default access level for methods is public.
 // PDO = PHP Data Object.

 // Method: function __construct(). Class constructor method.
 // Purpose: In general, to automatically perform things when object is instantiated. Typically, to initialize properties with non constant values (http://php.net/manual/en/language.oop5.properties.php). Here, to initialize the $uA object with the $index->dbh property, which is an object that represents a connection between PHP and MySQL. Accomplished by passing $index->dbh as argument to $uA object constructor method in User Accounts page controller (userAccnts.php), which, in turn, is automatically passed as argument to UserAccnts class constructor method in User Accounts page class (UserAccnts.class.php, this file) when $uA object is instantiated.
 // NOTE:
 // Class constructor method automatically runs when object instantiated.
 // Arguments to object constructor method (in controller) are automatically passed to class constructor method (in class, here) when object is instantiated (in controller). This allows objects to be instantiated with properties from other objects, which is known as dependency injection.
 function __construct($pdoConnObject){
  $this->dbh = $pdoConnObject;
 }

 // Method: $uA->createUserAccnt().
 // Purpose: Instruct MySQL to create user account.
 function createUserAccnt($username, $password, $hostname){
  // Set SQL statement with named placeholders in single quotes on $variable instructing MySQL to create user account.
  $sql = 'CREATE USER :username@:hostname IDENTIFIED BY :password';
  // Call PDO::prepare() method to prepare SQL statement for execution and set return value (PDOStatement object) on $variable.
  // NOTE: Returns PDOStatement object (aka, stmt or sth = statement handle) if database server successfully prepares the statement. Returns boolean false or emits PDOException (depending on error handling) if database server cannot successfully prepare the statement.
  $sth = $this->dbh->prepare($sql);
  // Bind parameters (aka, placeholders) to $variables and explicitly indicate data types.
  $sth->bindParam(':username', $username, PDO::PARAM_STR);
  $sth->bindParam(':hostname', $hostname, PDO::PARAM_STR);
  $sth->bindParam(':password', $password, PDO::PARAM_STR);
  // Call PDOStatement::execute() method to execute prepared SQL statement and set return boolean value on $this->property to indicate create user account successful.
  // NOTE:
  // Returns boolean true on success or boolean false on failure.
  // Create user account considered successful/unsuccessful if PDOStatement::execute() method successful/unsuccessful, respectively.
  $this->isCreateUserAccntSuccessful = $sth->execute();
  // Return PDOStatement object (aka, stmt or sth = statement handle).
  // NOTE: Not required/used if create user account successful.
  return $sth;
 }

 // Method: $uA->dropUserAccnts().
 // Purpose: Instruct MySQL to drop user accounts.
 function dropUserAccnts($userAccnts){
  // Initialize $variable to count number of drop user accounts that are unsuccessful.
  $numberDropUserAccntsUnsuccessful = 0;
  // Iterate over user accounts to drop.
  foreach ($userAccnts as $userAccnt){
   // Set SQL statement on $variable instructing MySQL to drop user account.
   // NOTE: $userAccnt is untrusted data and apparently a MySQL identifier. PDO::prepare/PDOStatement::bindParam do not accept MySQL identifiers as variables and placeholders. As a result, the following SQL statement is vulnerable to SQL injection.
   $sql = "DROP USER $userAccnt";
   // Call PDO::prepare() method to prepare SQL statement for execution and set return value (PDOStatement object) on $variable.
   // NOTE: Returns PDOStatement object (aka, stmt or sth = statement handle) if database server successfully prepares the statement. Returns boolean false or emits PDOException (depending on error handling) if database server cannot successfully prepare the statement.
   $sth = $this->dbh->prepare($sql);
   // Call PDOStatement::execute() method to execute prepared SQL statement and set return boolean value on $variable to indicate drop user account (singular, not plural) successful.
   // NOTE:
   // Returns boolean true on success or boolean false on failure.
   // Drop user account (singular, not plural) considered successful/unsuccessful if PDOStatement::execute() method successful/unsuccessful, respectively.
   $isDropUserAccntSuccessful = $sth->execute();
   // Determine if drop user account (singular, not plural) successful. If successful, expression evaluates to boolean true.
   if ($isDropUserAccntSuccessful){
    // Drop user account (singular, not plural) successful. Nothing to do here.
   } else {
    // Drop user account (singular, not plural) unsuccessful. Increment count of number of drop user accounts that are unsuccessful.
    $numberDropUserAccntsUnsuccessful++;
   }
  }
  // Determine if drop user accounts (plural, not singular) successful and set boolean value on $this->property to indicate drop user accounts successful.
  // NOTE: Drop user accounts (plural, not singular) considered successful if all individual drop user account (singular, not plural) considered successful. Otherwise, drop user accounts (plural, not singular) considered unsuccessful.
  $this->isDropUserAccntsSuccessful = empty($numberDropUserAccntsUnsuccessful) ? true : false;
  // Return PDOStatement object (aka, stmt or sth = statement handle).
  // NOTE: Not required/used if drop user accounts successful.
  return $sth;
 }

 // Method: $uA->revokeAllPrivs().
 // Purpose: Instruct MySQL to revoke all privileges on all databases.tables from selected user account.
 function revokeAllPrivs($userAccnt){
  // Set SQL statement on $variable instructing MySQL to revoke all privileges on all databases.tables from selected user account.
  // NOTE: $userAccnt is untrusted data and apparently a MySQL identifier. PDO::prepare/PDOStatement::bindParam do not accept MySQL identifiers as variables and placeholders. As a result, the following SQL statement is vulnerable to SQL injection.
  $sql = "REVOKE ALL PRIVILEGES ON *.* FROM $userAccnt";
  // Call PDO::prepare() method to prepare SQL statement for execution and set return value (PDOStatement object) on $variable.
  // NOTE: Returns PDOStatement object (aka, stmt or sth = statement handle) if database server successfully prepares the statement. Returns boolean false or emits PDOException (depending on error handling) if database server cannot successfully prepare the statement.
  $sth = $this->dbh->prepare($sql);
  // Call PDOStatement::execute() method to execute prepared SQL statement and set return boolean value on $this->property to indicate revoke all privileges successful.
  // NOTE:
  // Returns boolean true on success or boolean false on failure.
  // Revoke all privileges considered successful/unsuccessful if PDOStatement::execute() method successful/unsuccessful, respectively.
  $this->isRevokeAllPrivsSuccessful = $sth->execute();
  // Return PDOStatement object (aka, stmt or sth = statement handle).
  // NOTE: Not required/used if revoke all privileges successful.
  return $sth;
 }

 // Method: $uA->revokeGrantOption().
 // Purpose: Instruct MySQL to revoke grant option on all databases.tables from selected user account.
 function revokeGrantOption($userAccnt){
 // Set SQL statement on $variable instructing MySQL to revoke grant option on all databases.tables from selected user account.
 // NOTE: $userAccnt is untrusted data and apparently a MySQL identifier. PDO::prepare/PDOStatement::bindParam do not accept MySQL identifiers as variables and placeholders. As a result, the following SQL statement is vulnerable to SQL injection.
 $sql = "REVOKE GRANT OPTION ON *.* FROM $userAccnt";
  // Call PDO::prepare() method to prepare SQL statement for execution and set return value (PDOStatement object) on $variable.
  // NOTE: Returns PDOStatement object (aka, stmt or sth = statement handle) if database server successfully prepares the statement. Returns boolean false or emits PDOException (depending on error handling) if database server cannot successfully prepare the statement.
  $sth = $this->dbh->prepare($sql);
  // Call PDOStatement::execute() method to execute prepared SQL statement and set return boolean value on $this->property to indicate revoke grant option successful.
  // NOTE:
  // Returns boolean true on success or boolean false on failure.
  // Revoke grant option considered successful/unsuccessful if PDOStatement::execute() method successful/unsuccessful, respectively.
  $this->isRevokeGrantOptionSuccessful = $sth->execute();
  // Return PDOStatement object (aka, stmt or sth = statement handle).
  // NOTE: Not required/used if revoke grant option successful.
  return $sth;
 }

 // Method: $uA->grant().
 // Purpose: Instruct MySQL to grant privileges to user account.
 function grant($userAccnt){
  // Set SQL statement on $variable instructing MySQL to grant edited user account privileges on all databases.tables to selected user account including default grants for global privileges not listed in user account privileges form.
  // NOTE: $userAccnt is untrusted data and apparently a MySQL identifier. PDO::prepare/PDOStatement::bindParam do not accept MySQL identifiers as variables and placeholders. As a result, the following SQL statement is vulnerable to SQL injection.
  $sql = "GRANT $this->editedUserAccntPrivsCsv ON *.* TO $userAccnt";
  // Determine if edited user account privileges CSV string is "ALL PRIVILEGES" and edited user account privileges CSV string is not does not include "GRANT" substring, or edited user account privileges CSV string includes "GRANT" substring. If edited user account privileges CSV string is "ALL PRIVILEGES" and edited user account privileges CSV string is not does not include "GRANT" substring, or edited user account privileges CSV string includes "GRANT" substring, expression evaluates to boolean true.
  if ((($this->editedUserAccntPrivsCsv === "ALL PRIVILEGES") && ($this->isEditedUserAccntPrivsIncludeGrant !== false)) || ($this->isEditedUserAccntPrivsIncludeGrant === true)){
   // Edited user account privileges CSV string is "ALL PRIVILEGES" and edited user account privileges CSV string is not does not include "GRANT" substring, or edited user account privileges CSV string includes "GRANT" substring. Concatenate default grants for global privileges not listed in user account privileges form with grant option privilege.
   $sql .= " REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;";
  } else {
   // Edited user account privileges CSV string is not "ALL PRIVILEGES" or edited user account privileges CSV string is does not include "GRANT" substring, or edited user account privileges CSV string does not includes "GRANT" substring. Concatenate default grants for global privileges not listed in user account privileges form without grant option privilege.
   $sql .= " REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;";
  }
  // Call PDO::prepare() method to prepare SQL statement for execution and set return value (PDOStatement object) on $variable.
  // NOTE: Returns PDOStatement object (aka, stmt or sth = statement handle) if database server successfully prepares the statement. Returns boolean false or emits PDOException (depending on error handling) if database server cannot successfully prepare the statement.
  $sth = $this->dbh->prepare($sql);
  // Call PDOStatement::execute() method to execute prepared SQL statement and set return boolean value on $this-property to indicate grant successful.
  // NOTE:
  // Returns boolean true on success or boolean false on failure.
  // Grant considered successful/unsuccessful if PDOStatement::execute() method successful/unsuccessful, respectively.
  $this->isGrantSuccessful = $sth->execute();
  // Return PDOStatement object (aka, stmt or sth = statement handle).
  // NOTE: Not required/used if grant successful.
  return $sth;
 }

 // Method: $uA->selectUserHostPassword().
 // Purpose: Instruct MySQL to select user accounts user, host, and password.
 function selectUserHostPassword(){
  // Set SQL statement on $variable instructing MySQL to select user accounts user name (user), host name (host), and password (password) from the database server table that store information about user accounts (mysql.user) and order result by user name (user).
  // NOTE:
  // For additional info, see 7.3.1 User Names and Passwords https://dev.mysql.com/doc/refman/5.7/en/user-names.html.
  // NOTE: No untrusted data (ie, no untrusted $variable or $object->property) to process with PDO::prepare/PDOStatement::bindParam. As a result, the following SQL statement is not vulnerable to SQL injection.
  $sql = "SELECT user, host, password FROM mysql.user ORDER BY user";
  // Call PDO::prepare() method to prepare SQL statement for execution and set return value (PDOStatement object) on $variable.
  // NOTE: Returns PDOStatement object (aka, stmt or sth = statement handle) if database server successfully prepares the statement. Returns boolean false or emits PDOException (depending on error handling) if database server cannot successfully prepare the statement.
  $sth = $this->dbh->prepare($sql);
  // Call PDOStatement::execute() method to execute prepared SQL statement and set return value on $this->property to indicate select user accounts user, host, and password successful.
  // NOTE: Returns boolean true on success or boolean false on failure.
  // Select user accounts user, host, and password considered successful/unsuccessful if PDOStatement::execute() method successful/unsuccessful, respectively.
  $this->isSelectUserHostPasswordSuccessful = $sth->execute();
  // Return PDOStatement object (aka, stmt or sth = statement handle).
  return $sth;
 }

 // Method: $uA->showGrants().
 // Purpose: Instruct MySQL to show user account grants.
 function showGrants($userAccnt){
  // Set SQL statement on $variable instructing MySQL to show user account grants.
  // NOTE: $userAccnt is untrusted data and apparently a MySQL identifier. PDO::prepare/PDOStatement::bindParam do not accept MySQL identifiers as variables and placeholders. As a result, the following SQL statement is vulnerable to SQL injection.
  $sql = "SHOW GRANTS FOR $userAccnt";
  // Call PDO::prepare() method to prepare SQL statement for execution and set return value (PDOStatement object) on $variable.
  // NOTE: Returns PDOStatement object (aka, stmt or sth = statement handle) if database server successfully prepares the statement. Returns boolean false or emits PDOException (depending on error handling) if database server cannot successfully prepare the statement.
  $sth = $this->dbh->prepare($sql);
  // Call PDOStatement::execute() method to execute prepared SQL statement and set return value on $this->property to indicate show user account grants successful.
  // NOTE: Returns boolean true on success or boolean false on failure.
  // Show user account grants considered successful/unsuccessful if PDOStatement::execute() method successful/unsuccessful, respectively.
  $this->isShowGrantsSuccessful = $sth->execute();
  // Return PDOStatement object (aka, stmt or sth = statement handle).
  return $sth;
 }

} // Close UserAccnts class.
