<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/misc/install_xampp_windows_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/misc/install_xampp_windows.php
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Ideally, web sites are developed in an offline development environment before being pushed to the online production environment. However, many web developers, unable or unwilling to install a web server and SQL database server, skip the offline development step and push their untested code to the online production environment. This is unfortunate because setting up an offline development environment with a web server and SQL database server running locally on Windows is much simpler than one might think.</p>

     <p><a href='https://www.apachefriends.org/'>Apache Friends XAMPP (apachefriends.org)</a> includes the Apache HTTP Server web server (including PHP interpreter) and the MySQL SQL database server. After XAMPP is installed, running Apache and MySQL is as simple as a couple of mouse clicks. In this example, XAMPP for Windows is installed on a local computer running Windows 7/8.1/10, In this example, <q>local computer</q> means either your computer, or any computer on a local network with your computer. The local computer onto which XAMPP is installed is known as the XAMPP host computer. Your computer and the XAMPP host computer (which may or may not be the same computer) constitute the offline development environment with Apache and MySQL running locally on Windows.<p>

<!-- Start similar content in install_quickinstall_windows.php, install_xampp_windows_sections.php, and simple_mysql_admin.php. -->

      <div class='note normal'>Actually, the XAMPP SQL database server is MariaDB, which is developed by the MariaDB Foundation, not MySQL, which is developed by Oracle. MariaDB is a drop in place replacement for MySQL. Therefore, for most practical purposes, the terms <q>MariaDB</q> and <q>MySQL</q> are interchangeable. In this example, <q>MySQL</q> is used throughout.</div>

     <h3><a id='security'></a>1.1. Security</h3>

     <p>XAMPP <em>is not</em> intended for installation on:</p>

     <ul>
      <li>A computer that is directly connected to the Internet (i.e., a computer assigned a public IP address because it is not behind a gateway/router).</li>
      <li>An Internet-facing server (i.e., a computer that provides a service over the Internet).</li>
      <li>A computer that stores or has access to sensitive/valuable data.</li>
      <li>In other words, XAMPP <em>is not</em> intended for use in public/Internet/online/production environments.</li>
     </ul>

     <p>XAMPP <em>is</em> intended for installation on:</p>

     <ul>
      <li>A computer that is connected to a local network (i.e., a computer assigned a private IP address because it is behind a gateway/router).</li>
      <li>An Intranet-facing server (i.e., a computer that provides a service over an Intranet).</li>
      <li>A computer that does not store and does not have access to sensitive/valuable data.</li>
      <li>In other words, XAMPP <em>is</em> intended for use in private/Intranet/offline/development environments.</li>
     </ul>

<!-- End similar content in install_quickinstall_windows.php, install_xampp_windows_sections.php, and simple_mysql_admin.php. -->

    </section>
    <hr />
    <section>

     <h2><a id='installXampp'></a>2. Install XAMPP</h2>

     <p>XAMPP supports Windows, Linux, And Mac OS X. The latest versions of XAMPP for Windows supports Windows 7/8.1/10.</p>

     <p>The XAMPP version indicates the included PHP version. XAMPP for Windows 5.6.x includes PHP version 5.6.x. XAMPP for Windows 7.0.x includes PHP version 7.0.x. XAMPP for Windows 7.1.x includes PHP version 7.1.x. As most web hosts provide PHP 5.6.x support by default, in this example, XAMPP for Windows 5.6.x is installed. More specifically, in this example, XAMPP for Windows 5.6.24 is installed on Windows 7.</p>

     <p>The computer onto which XAMPP is installed is known as the XAMPP host computer.</p>

     <p>To install XAMPP:</p>

     <ol>
      <li>Download the latest version of XAMPP for Windows 5.6.x from <a href='https://www.apachefriends.org/download.html'>Download XAMPP (apachefriends.org)</a>. In this example, XAMPP for Windows 5.6.24 was downloaded.</li>
      <li>Double click the XAMPP installer. In this example, <kbd>xampp-win32-5.6.24-1-VC11-installer.exe</kbd> was double clicked.</li>
      <li>On Windows 7/8.1, the <b>User Account Control: Do you want to allow the following program from an unknown publisher to make changes to this computer?</b> dialog appears. Click <kbd>Yes</kbd>.<!-- Confirmed 7Pro_SP1_64 and 81Pro_Update3000850_64 01 Nov 2016. --><br />
       On Windows 10, the <b>User Account Control: Do you want to allow this app from an unknown publisher to make changes to your device?</b> dialog appears. Click <kbd>Yes</kbd>.<!-- Confirmed 10P_1607_64 01 Nov 2016. -->
      </li>
      <li>If XAMPP detects an anti-virus program is installed, the <b>Question: Continue with installation?</b> dialog appears. Read the information on how an anti-virus program might interfere with XAMPP. Click <kbd>Yes</kbd>.</li>
      <li>If XAMPP detects that User Account Control (UAC) is enabled, the <b>Warning: Important! Because an activated User Account Control (UAC) on your system some functions of XAMPP are possibly restricted. With UAC please avoid to install XAMPP to <span class='filename'>C:\\Program Files (x86)</span> (missing write permissions). Or deactivate UAC with msconfig after this setup.</b> dialog appears. I have not had an issue with UAC if XAMPP is installed to the default location (<span class='filename'>C:\\xampp</span>) or to a location other than <span class='filename'>C:\\Program Files (x86)</span>. Click <kbd>OK</kbd>.</li>
      <li>The <b>Setup: Setup - XAMPP</b> dialog appears. Click <kbd>Next</kbd>.</li>
      <li>The <b>Setup: Select Components</b> dialog appears. By default, all components are checked (i.e., selected) for installation. In this example:
       <ol>
        <li>Under Server, <kbd>Apache</kbd>, which XAMPP considers a required component, is automatically checked and grayed out. If your development environment requires MySQL, check MySQL. Otherwise, uncheck MySQL. In this example, <kbd>MySQL</kbd> was checked.</li>
        <li>Under Program Languages, <kbd>PHP</kbd>, which XAMPP considers a required component, is automatically checked and grayed out.</li>
        <li>Under the second entry for Program Languages, if you are installing MySQL and want to use phpMyAdmin to manage MySQL, check  phpMyAdmin. Otherwise, uncheck <kbd>phpMyAdmin</kbd>. In this example, <kbd>phpMyAdmin</kbd> was checked.
         <div class='note normal'>phpMyAdmin is a web-based graphical user interface (web GUI) for managing MySQL. If phpMyAdmin is not installed, the only way to manage MySQL is by issuing SQL commands at the command prompt. In other words, although not technically required for managing MySQL, phpMyAdmin is installed as an option for managing MySQL.</div>
        </li>
        <li>In this example, <kbd>all other components</kbd> were unchecked:
        <div class='imgInListItem'><img src='/images/install_xampp_windows/xampp_installation_setup_select_components_516x431.gif' alt='XAMPP Installation: Setup - Select Components' /></div>
        </li>
        <li>Click <kbd>Next</kbd>.</li>
       </ol>
      </li>
      <li>The <b>Setup: Installation folder</b> dialog appears. By default, the installation folder is <span class='filename'>C:\\xampp</span>. This is fine and avoids the potential UAC issue mentioned above. Click <kbd>Next</kbd>.</li>
      <li>The <b>Setup: Bitnami for XAMPP</b> dialog appears. Uncheck <kbd>Learn more about Bitnami for XAMPP</kbd>. Click <kbd>Next</kbd>.</li>
      <li>The <b>Setup: Ready to Install</b> dialog appears. Click <kbd>Next</kbd>.</li>
      <li>The <b>Setup: Welcome to XAMPP!</b> dialog appears and XAMPP installation commences.</li>
      <li>If Windows Firewall is running, the <b>Windows Security Alert: Windows Firewall has blocked some features of this program (or app)</b> dialog appears. This is for Apache. Check <kbd>Private networks</kbd>, uncheck <kbd>Public networks</kbd>, and click <kbd>Allow access</kbd>.
       <div class='note normal'>Software firewalls other than Windows Firewall will probably be triggered when Apache is actually run for the first time in <a href='#startModule'>Start A Module (below)</a>.</div>
      </li>
      <li>The <b>Setup: Completing the XAMPP Setup Wizard</b> dialog appears. Uncheck <kbd>Do you want to start the Control Panel now?</kbd> Click <kbd>Finish</kbd>.</li>
      <li>XAMPP is installed. Run Windows/Microsoft Update and install any updates for the installed XAMPP packages. In this example, the Security Update for Microsoft Visual C++ 2008 Service Pack 1 Redistributable Package (2538243) was listed and installed.</li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='runXampp'></a>3. Run XAMPP</h2>

     <p>The computer onto which XAMPP is installed is known as the XAMPP host computer. XAMPP is run on, and from, the XAMPP host computer.</p>

     <h3><a id='startXampp'></a>3.1. Start XAMPP: The XAMPP Control Panel And The XAMPP Notification Area Icon</h3>

     <p>Starting XAMPP displays the XAMPP Control Panel and the XAMPP notification area icon. The XAMPP Control Panel is the main XAMPP interface.</p>

     <p>To start XAMPP:</p>

     <ol>
      <li>On Windows 7, click <kbd>Start | All Programs | XAMPP | XAMPP Control Panel</kbd>.<!-- Confirmed 7Pro_SP1_64 01 Nov 2016. --><br />
       On the Windows 8.1 Metro interface, click the <kbd>Apps</kbd> arrow | under XAMPP click <kbd>XAMPP Control Panel</kbd>.<!-- Confirmed 81Pro_Update3000850_64 01 Nov 2016. --><br />
       On Windows 10, click <kbd>Start</kbd> | if necessary, click <kbd>All apps</kbd> | in the apps list click <kbd>XAMPP</kbd> | <kbd>XAMPP Control Panel</kbd>.<!-- Confirmed 10P_1607_64 01 Nov 2016. -->
      </li>
      <li>On first run, the <b>Language</b> dialog appears. Select the flag for the country that speaks your language. Click <b>Save</b>.</li>
      <li>The <b>XAMPP Control Panel</b> (top) and <b>XAMPP notification area icon</b> (bottom) appear:
       <img src='/images/install_xampp_windows/xampp_control_panel_682x440.gif' alt='XAMPP Control Panel' />
       <img src='/images/install_xampp_windows/xampp_notification_area_icon_arrow_240x80.gif' alt='XAMPP Notification Area Icon' class='box-shadow' />
      </li>
     </ol>

     <h3><a id='startModule'></a>3.2. Start A Module</h3>

     <p>There are two ways to start a module:</p>

     <ul>
      <li>In the XAMPP Control Panel under Actions, click the module's <kbd>Start</kbd> button. When the module is successfully started/running, the background color for the module's name turns green.</li>
      <li>Right click the <kbd>XAMPP notification area icon</kbd> | click the <kbd>module | Start</kbd>. When the module is successfully started/running, the module's notification area icon status indicator turns green.</li>
     </ul>

     <p>If your software firewall prompts that the Apache HTTP Server (httpd.exe) is attempting to listen for connections from other computers on ports 80 and 443, or that mysqld (mysqld.exe) is attempting to listen for connections from other computers on port 3306, or something similar, set the software firewall to the most restrictive setting that allows Apache and MySQL to function. For Windows Firewall, check <kbd>Private networks</kbd>, uncheck <kbd>Public networks</kbd>, and click <kbd>Allow access</kbd>.</p>

     <div class='note normal'>If the XAMPP host computer is going to be used primarily for development, instead of starting the modules manually, you might want to start the modules as a service, which means they will automatically start when Windows starts. To start modules as a service, in the XAMPP Control Panel click the top right <kbd>Config</kbd> button. In the Autostart of modules fieldset, check the <kbd>modules</kbd> to start as a service. Click <kbd>Save</kbd>.</div>

     <h3><a id='stopModule'></a>3.3. Stop A Module</h3>

     <p>There are two ways to stop a module:</p>

     <ul>
      <li>In the XAMPP Control Panel under Actions, click the module's <kbd>Stop</kbd> button. When the module is successfully stopped/not running, the background color for the module's name turns transparent.</li>
      <li>Right click the <kbd>XAMPP notification area icon</kbd> | click the <kbd>module | Stop</kbd>. When the module is successfully stopped/not running, the module's notification area icon status indicator turns red.</li>
     </ul>

     <h3><a id='closeXampp'></a>3.4. Close Verses Quit XAMPP And Manually Close Any Started Modules</h3>

     <p>Closing XAMPP:</p>

     <ul>
      <li>Closes the XAMPP Control Panel.</li>
      <li>Leaves the XAMPP notification area icon running.</li>
      <li>Leaves the started modules running.</li>
     </ul>

     <p>To Close XAMPP:</p>

     <ul>
      <li>In the XAMPP Control Panel, click <kbd>Close</kbd> (top right red X).</li>
     </ul>

     <p>Quitting XAMPP:</p>

     <ul>
      <li>Closes the XAMPP Control Panel.</li>
      <li>Closes the XAMPP notification area icon.</li>
      <li>Leaves the started modules running.</li>
     </ul>

     <p>There are two ways to quit XAMPP:</p>

     <ul>
      <li>In the XAMPP Control Panel, click <kbd>Quit</kbd>.</li>
      <li>Right click the <kbd>XAMPP notification area icon</kbd> | click <kbd>Quit</kbd>.</li>
     </ul>

     <p>The XAMPP Control Panel can be shown/hidden from the XAMPP notification area icon.</p>

     <p>To show/hide the XAMPP Control Panel from the XAMPP  notification area icon:</p>

     <ul>
      <li>Right click the <kbd>XAMPP notification area icon</kbd> | click <kbd>Show/Hide</kbd>.</li>
     </ul>

     <p>Closing and/or quitting XAMPP does not stop any started modules. The only way to stop any started modules is to stop them manually.</p>

     <p>To exit all XAMPP associated programs:</p>

     <ol>
      <li>Stop any started modules per <a href='#stopModule'>Stop A Module (above)</a>.</li>
      <li>In the XAMPP Control Panel or notification area icon, click <kbd>Quit</kbd>.</li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='testXamppInstallation'></a>4. Test The XAMPP Installation: The XAMPP Dashboard</h2>

     <p>To test the XAMPP installation:</p>

     <ol>
      <li>Start XAMPP and then start Apache.</li>
      <li>Point the web browser to either of the following:
       <ul>
        <li>The root of the web server:
         <div class='note normal'>XAMPP redirects connections to the root of the web server to the XAMPP dashboard.</div>
         <ul>
          <li>If your computer is the XAMPP host computer, the root of the web server is http://localhost/.</li>
          <li>If a computer on a local network with your computer is the XAMPP host computer, the root of the web server is http://xampp_host_computer_ip_address_or_host_name/.</li>
         </ul>
        </li>
        <li>The XAMPP dashboard:
         <ul>
          <li>If your computer is the XAMPP host computer, the XAMPP dashboard is http://localhost/dashboard/.</li>
          <li>If a computer on a local network with your computer is the XAMPP host computer, the XAMPP dashboard is http://xampp_host_computer_ip_address_or_host_name/dashboard/.</li>
         </ul>
        </li>
       </ul>
      <li><a id='xamppDashboard'></a>Either way, if the installation of XAMPP was successful, the XAMPP dashboard appears. The XAMPP dashboard consists of web pages that provide educational information about XAMPP and, in the top navigation bar, a link to phpMyAdmin: <img src='/images/install_xampp_windows/xampp_dashboard_800x500.gif' alt='XAMPP Dashboard'  class='box-shadow' /></li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='vulnerabilitiesAndXamppSecurityPolicy'></a>5. Common LAMP/WAMP MySQL And phpMyAdmin Vulnerabilities And The XAMPP Security Policy</h2>

     <h3><a id='vulnerabilities'></a>5.1. Common LAMP/WAMP MySQL And phpMyAdmin Vulnerabilities</h3>

     <p>The installation of MySQL and phpMyAdmin by most LAMPs/WAMPs present two vulnerabilities that users should be aware of:</p>

     <div class='note normal'>If MySQL is not installed, the two vulnerabilities are not present.</div>

<!-- Last tested/confirmed on XAMPP 5.6.24. -->

     <ol>
      <li>phpMyAdmin all granted access vulnerability: The LAMP/WAMP host computer, and any computers on a local network with the LAMP/WAMP host computer, are granted access to phpMyAdmin. To access phpMyAdmin from the XAMPP host computer, point the web browser to http://localhost/phpmyadmin/ or click the <a href='#xamppDashboard'>XAMPP dashboard (above)</a> top navigation bar phpMyAdmin link. To access phpMyAdmin from a computer on a local network with the XAMPP host computer, point the web browser to http://xampp_host_computer_ip_address_or_host_name/phpmyadmin/.</li>
      <li>MySQL root user account no password vulnerability: The LAMP/WAMP host computer, and any remote computers able to open the LAMP/WAMP host computer command prompt, can login to MySQL as the MySQL root user without having to supply a password. In addition, because MySQL user accounts are phpMyAdmin user accounts, any computers granted access to phpMyAdmin are automatically logged into phpMyAdmin as the MySQL root user without having to supply a password.</li>
     </ol>

     <h3><a id='xamppSecurityPolicy'></a>5.2. The XAMPP Security Policy</h3>

     <p>The XAMPP security policy restricts access to phpMyAdmin. As a result of the XAMPP security policy, only the XAMPP host computer, not any computers on a local network with the XAMPP host computer, is granted access to phpMyAdmin. If a computer on a local network with the XAMPP host computer tries to access phpMyAdmin, the following is displayed:</p>

     <img src='/images/install_xampp_windows/xampp_network_computer_access_to_phpmyadmin_forbidden_800x450.gif' alt='Computer On Network With XAMPP Computer Access To phpMyAdmin Forbidden' class='box-shadow' />

     <div class='note normal'>
      <ul>
       <li>In the web page above, the <q>Access to the requested directory is only available from the local network.</q> text is incorrect and should be changed to something like, <q>Access to the requested directory is only available to the XAMPP host computer.</q></li>
       <li>The code for the XAMPP security policy is located in the <span class='filename'>C:\\xampp\\apache\\conf\\extra\\httpd-xampp.conf</span> text file.</li>
       <li>Concerning the MySQL root user account no password vulnerability, if there is a malicious user of the XAMPP host computer who might exploit the MySQL root user account no password vulnerability, or if there is a malicious user of a remote computer able to open the XAMPP host computer command prompt who might exploit the MySQL root user account no password vulnerability, then password protect the MySQL root user account per <a href='http://localhost/dashboard/docs/reset-mysql-password.html'>reset the MySQL/MariaDB root password (localhost)</a>. If there are no such malicious users, then the MySQL root user account no password vulnerability is not a security risk.</li>
      </ul>
     </div>

    </section>
    <hr />
    <section>

     <h2><a id='whereToPlaceFiles'></a>6. Where To Place Your Web Site Files: The Root Of The Web Server</h2>

     <p>The easiest location to place your web site files is on the root of the web server. In this example, the root of the web server is <span class='filename'>C:\\xampp\\htdocs\\</span>.</p>

     <p>To place your web site files on the root of the web server:</p>

     <ol>
      <li>Rename the <span class='filename'>C:\\xampp\\htdocs\\index.php</span> file (which redirects to the XAMPP dashboard) to <span class='filename'>C:\\xampp\\htdocs\\index_xampp.php</span>.</li>
      <li>Copy your web site files to the root of the web server. In this example, the root of the web server is <span class='filename'>C:\\xampp\\htdocs\\</span>.</li>
      <li>Start XAMPP and then start Apache.</li>
      <li>If your web site home page is <span class='filename'>index.html</span>, <span class='filename'>index.htm</span>, <span class='filename'>index.php</span>, <span class='filename'>default.html</span>, <span class='filename'>default.htm</span>, or <span class='filename'>default.php</span>, point the web browser to the root of the web server. If your computer is the XAMPP host computer, the root of the web server is http://localhost/. If a computer on a local network with your computer is the XAMPP host computer, the root of the web server is http://xampp_host_computer_ip_address_or_host_name/. If your web site home page has some other filename, for example, <span class='filename'>filename.xyz</span>, then point the web browser to web site home page explicitly. If your computer is the XAMPP host computer, point the web browser to http://localhost/filename.xyz. If a computer on a local network with your computer is the XAMPP host computer, point the web browser to http://xampp_host_computer_ip_address_or_host_name/filename.xyz.</li>
      <li>The web site home page appears.</li>
     </ol>

     <div class='note normal'>The XAMPP dashboard is still available, just not via the redirect from the root of the web server. To access the XAMPP dashboard, point the web browser to the XAMPP dashboard explicitly. If your computer is the XAMPP host computer, the XAMPP dashboard is http://localhost/dashboard/. If a computer on a local network with your computer is the XAMPP host computer, the XAMPP dashboard is http://xampp_host_computer_ip_address_or_host_name/dashboard/. Alternatively, point your web browser to the <span class='filename'>index_xampp.php</span> file on the root of the web server.</div>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>7. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='https://www.apachefriends.org/'>Apache Friends XAMPP (apachefriends.org)</a></li>
      <li><a href='https://www.apachefriends.org/download.html'>Download XAMPP (apachefriends.org)</a></li>
      <li><a href='https://httpd.apache.org/'>Apache HTTP Server (httpd.apache.org)</a></li>
      <li><a href='https://mariadb.org/'>MariaDB (mariadb.org)</a></li>
     </ul>

    </section>";
