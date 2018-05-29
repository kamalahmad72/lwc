<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/php/simple_mysql_admin_sections.php.
 * Purpose: Web page sections.
 * Used in: /web_server_root_directory/php/simple_mysql_admin.php.
 * Last reviewed/updated: 26 May 2018.
 * Published: 14 May 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Simple MySQL Admin is a web-based graphical user interface (web GUI) for managing <a href='https://www.mysql.com/'>MySQL (mysql.com)</a> and <a href='https://mariadb.org/'>MariaDB (mariadb.org)</a>. Simple MySQL Admin is a lightweight and easy to use alternative to <a href='https://www.phpmyadmin.net/'>phpMyAdmin (phpmyadmin.net)</a>. Simple MySQL Admin supports only the most commonly used MySQL/MariaDB features. Currently, Simple MySQL Admin supports:</p>

     <ul>
      <li>User accounts:
       <ul>
        <li>Create user accounts.</li>
        <li>Drop user accounts.</li>
        <li>Edit user account global privileges.</li>
       </ul>
      </li>
      <li>Databases:
       <ul>
        <li>Create database.</li>
        <li>Drop databases.</li>
       </ul>
      </li>
     </ul>

     <p>Simple MySQL Admin is written primarily in PHP. Please feel free to download, edit, and/or fork the Simple MySQL Admin source code. The Simple MySQL Admin source code is available at <a href='https://github.com/learnwebcoding/simple_mysql_admin'>GitHub | learnwebcoding | simple_mysql_admin Repository (github.com)</a>.</p>

     <h3><a id='browserSupport'></a>1.1. Web Browser Support</h3>

     <p>Web browser support: IE10+, ED12+, FF6+, CH30+, OP17+.</p>

     <h3><a id='phpSupport'></a>1.2. PHP Support</h3>

     <p>PHP support: PHP 5.6.8+ and PHP 7+. PHP 5.6.7- not tested.</p>

     <h3><a id='databaseServerSupport'></a>1.3. Database Server Support</h3>

     <p>Database server support: MariaDB 10+ and MySQL 5.5+.<!-- MySQL 5.5 is slow. MySQL 5.6+ recommended. --></p>

     <h3><a id='screenshots'></a>1.4. Screenshots</h3><!-- See databases DVD for screenshots of various versions of MariaDB and MySQL +/- Simple MySQL Admin. -->

     <p>Requirements tab:</p>

     <img src='/images/simple_mysql_admin/requirements_tab_600x450.gif' alt='Simple MySQL Admin Requirements Tab' class='box-shadow' />

     <p>User accounts tab:</p>

     <img src='/images/simple_mysql_admin/user_accounts_tab_600x450.gif' alt='Simple MySQL Admin User Accounts Tab' class='box-shadow' />

     <p>Databases tab:</p>

     <img src='/images/simple_mysql_admin/databases_tab_600x450.gif' alt='Simple MySQL Admin Databases Tab' class='box-shadow' />

     <h3><a id='security'></a>1.5. Security</h3>

     <p>Simple MySQL Admin is intended solely for personal use in private/Intranet/offline/development environments, not public/Internet/online/production environments. As long as Simple MySQL Admin is used as intended, the following known vulnerabilities cannot be exploited unless a malicious user gains access to your computer or network (in which case Simple MySQL Admin vulnerabilities are the least of your problems):</p>

     <ol>
      <li>Type: Information disclosure.<br />
       Description: <span class='filename'>simple_mysql_admin/connection_credentials.php</span> is in plain text.</li>
      <li>Type: SQL injection.<br />
       Description: <a href='http://php.net/manual/en/pdo.prepare.php'>PDO::prepare (php.net)</a>/<a href='http://php.net/manual/en/pdostatement.bindparam.php'>PDOStatement::bindParam (php.net)</a> do not accept <a href='https://dev.mysql.com/doc/refman/5.7/en/identifiers.html'>MySQL identifiers (dev.mysql.com)</a> as variables and placeholders. As a result, there are instances where untrusted data is included in SQL statements. This occurs in the indicated locations in the user accounts section class (<span class='filename'>classes/UserAccnts.class.php</span>) and the databases section class (<span class='filename'>classes/Databases.class.php</span>).<!-- Note &apos; and &quot; character issues described in simple_,mysql_admin/vulnerabilities.txt. --></li>
      <li>Type: Cross-site scripting (XSS).<br />
       Description: There are instances where <a href='http://php.net/manual/en/pdostatement.errorinfo.php'>PDOStatement::errorInfo[2] (php.net)</a> outputs untrusted data which is then output to HTML. This occurs in the indicated locations in the user accounts section controller (<span class='filename'>controllers/userAccnts.php</span>) and the databases section controller (<span class='filename'>controllers/databases.php</span>).</li>
     </ol>

     <h3><a id='issues'></a>1.6. Known Issues</h3>

     <p>For known issue, see <a href='https://github.com/learnwebcoding/simple_mysql_admin/issues'>GitHub | learnwebcoding | simple_mysql_admin Repository | Issues (github.com)</a>.</p>

     <h3><a id='try'></a>1.7. How To Download And Try On Your Web Server</h3>

     <p>To download and try on your web server:</p>

     <ol>
      <li>Download the following source code zip file to your computer:
       <ul class='link-list'>
        <li><a href='/downloads/simple_mysql_admin.zip'><span class='filename'>simple_mysql_admin.zip</span> (learnwebcoding.com)</a> - v1.3.0 released 08 Apr 2018. Size: 60,089 bytes. SHA-256 checksum: 3a6dbd2b23a4acf88995baca7ae4f5fdf579d8f345a4a76af7e2900d455f8c0a.</li>
       </ul>
      </li>
      <li>Extract the downloaded zip file. In this example, <span class='filename'>simple_mysql_admin.zip</span> is extracted to the <span class='filename'>simple_mysql_admin</span> folder:
       <img src='/images/simple_mysql_admin/simple_mysql_admin_folder_450x342.gif' alt='Contents Extracted Simple MySQL Admin Folder' />
      </li>
      <li>Copy the <span class='filename'>simple_mysql_admin</span> folder itself, not the contents of the <span class='filename'>simple_mysql_admin</span> folder, to the root of the web server.</li>
      <li>Point your web browser to the <span class='filename'>/simple_mysql_admin/index.php</span> file on the web server.</li>
      <li>The Simple MySQL Admin interface appears.</li>
     </ol>

     <h3><a id='release'></a>1.8. Release History And Changelog</h3>

     <ul>
      <li>v1.3.0 released 08 Apr 2018:
       <ul>
        <li>Update database server support. Primary changes: 1.) add support for MySQL 5.7 stores MySQL user account password in mysql.user table authentication_string column, not password column (in MySQL 5.7, mysql.user table password column does not exit); 2.) add support for MySQL 5.7 'mysql.session'@'localhost' and 'mysql.sys'@'localhost' reserved user accounts, and MariaDB 10.0 - 10.2 'root'@'computername-pc' reserved user account; 3.) add support for MySQL 5.7 sys reserved database; and 4.) change MySQL to store Simple MySQL Admin | User Accounts | create user account | host name/IP address field empty/blank in mysql.user table host column as any host name ('%' string), not empty string (''), and change Simple MySQL Admin | User Accounts | create user account reports to display host name/IP address field empty/blank as any host name ('%' string), not empty string ('').</li>
        <li>Replace User Accounts | edit user account privileges | select user account dropdown with explanatory text if all user accounts are reserved.</li>
        <li>Update lwc.css and update CSS styles.</li>
       </ul>
      </li>
      <li>v1.2.2 released 11 Mar 2018:
       <ul>
        <li>Fix path to images.</li>
        <li>Update PHP support.</li>
        <li>Add database server support.</li>
        <li>Update comments for consistency with other projects.</li>
       </ul>
      </li>
      <li>v1.2.1 released 28 Jul 2017:
       <ul>
        <li>Update <span class='filename'>lwc.css</span>.</li>
        <li>Edit <span class='filename'>simple_mysql_admin.js</span> to be unobtrusive. Change IE support from IE9+ to IE10+.</li>
        <li>Change Simple MySQL Admin information displayed at bottom of Requirements page.</li>
       </ul>
      </li>
      <li>v1.2 released 20 Jul 2017:
       <ul>
        <li>Redesign interface. Primary changes; 1.) replace page section HTML <code>fieldset</code> and <code>legend</code> elements with <code>div</code> elements, 2.) set <code>max-width</code> dependent on viewport width and center in viewport, and 3.) move app name from top of interface to <code>float: right</code> of tabs.</li>
        <li>Make last status report persistent.</li>
        <li>Move section notes from section content always displayed to section title with plus/minus icon and JavaScript to toggle display.</li>
        <li>Remove use database code as belonging in future Tables page as dropdown.</li>
        <li>End User Accounts | edit user account privileges | selected user account persistence if selected user account is dropped.</li>
        <li>Change references to Index section, Requirements section, User Accounts section, and Databases section to Index page, Requirements page, User Accounts page, and Databases page.</li>
       </ul>
      </li>
      <li>v1.1.2 released 20 Jun 2017:
       <ul>
        <li>Update <span class='filename'>simple_mysql_admin.css</span> to improve presentation/consistency and to eliminate redundant overriding of <span class='filename'>lwc.css</span> styles.</li>
        <li>Add HTML <code>button</code> element <code>class='btn-md'</code> attribute where missing and <code>input</code> element <code>required</code> attribute where appropriate.</li>
       </ul>
      </li>
      <li>v1.1.1 released 11 Jun 2017:
       <ul>
        <li>Add <span class='filename'>lwc.css</span> as primary style sheet and supplement/override <span class='filename'>lwc.css</span> styles in <span class='filename'>simple_mysql_admin.css</span>.</li>
        <li>Update CSS styles.</li>
       </ul>
      </li>
      <li>v1.1 released 31 May 2017:
       <ul>
        <li>Move MySQL running mysqli connection object and MySQL connection PDO connection object from Connection section to Index section.</li>
        <li>Replace Connection section with Requirements section.</li>
        <li>Group MySQL running and MySQL connection under MySQL fieldset in, and add Web Browser Cookies fieldset to, Requirements section.</li>
        <li>Add User Accounts tab and Databases tab are not shown until Requirements section is fulfilled.</li>
        <li>Change boundary between model code and controller code in User Accounts section and Databases section: move code deemed less model-worthy (ie, <code>&quot;isExecuteSuccessful&quot;</code> and <code>&quot;isFetchSuccessful&quot;</code> conditionals) from model to controller.</li>
        <li>Add comment Last reviewed/updated for SQL injection: Date or Last reviewed/updated for XSS: Date to Introduction section of relevant files.</li>
        <li>Change status report from bad to warning when click <kbd>Go</kbd> button without specifying/selecting required information.</li>
        <li>Sync check/uncheck radio buttons/checkboxes between <code>JavaScript EditUserAccntPrivsUtil.checkUserAccntPrivsFormRadioBtnCheckboxes()</code> method and <code>JavaScript EditUserAccntPrivsUtil.coordinateCheckedUncheckedHierarchy()</code> method.</li>
        <li>Change grant all privileges without grant option from SQL statement that grants all individual global privileges except grant to SQL statement that grants all privileges without grant option.</li>
        <li>Update <span class='filename'>Simple_MySQL_Admin_Readme.txt</span>.</li>
       </ul>
      </li>
      <li>v1.0.1 released 16 May 2017:
       <ul>
        <li>Update <span class='filename'>Simple_MySQL_Admin_Readme.txt</span>.</li>
       </ul>
      </li>
      <li>v1.0 released 14 May 2017:
       <ul>
        <li>Initial release.</li>
       </ul>
      </li>
     </ul>

     <h3><a id='disclaimer'></a>1.9. Disclaimer</h3>

<!-- Disclaimer from http://unxutils.sourceforge.net/StdDisclaimer.html. -->

     <p>THIS SOFTWARE IS PROVIDED &quot;AS IS&quot; AND ANY EXPRESSED OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE REGENTS OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</p>

     <h3><a id='abbreviations'></a>1.10. Abbreviations</h3>

     <ul>
      <li>IE = Internet Explorer.</li>
      <li>ED = Edge = EdgeHTML rendering engine (ED12+) and/or Edge browser (ED20+).</li>
      <li>FF = Firefox.</li>
      <li>CH = Chrome.</li>
      <li>OP = Opera.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>2. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='https://github.com/learnwebcoding/simple_mysql_admin'>GitHub | learnwebcoding | simple_mysql_admin Repository (github.com)</a></li>
      <li><a href='https://www.mysql.com/'>MySQL (mysql.com)</a></li>
      <li><a href='https://mariadb.org/'>MariaDB (mariadb.org)</a></li>
      <li><a href='https://www.phpmyadmin.net/'>phpMyAdmin (phpmyadmin.net)</a></li>
     </ul>

    </section>";
