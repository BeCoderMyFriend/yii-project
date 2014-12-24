yii-project
===========

<------ My first Yii project is to create a simple blog ------>
Note: I am using the Linux platform.

-----------------------------------------------------------------------------------------------------------------------
<------------------------------------------- Installing The LAMP stack ----------------------------------------------->
-----------------------------------------------------------------------------------------------------------------------
Before downloading Yii framework basic template, we will need to download LAMP (Linux, Apache, MySQL, PHP) software bundle.

Steps for dowloading the software bundle on Linux platform:

-----------------------------------------------------------------------------------------------------------------------
<------------------------------------------ Apache web server installation ------------------------------------------->
-----------------------------------------------------------------------------------------------------------------------

1. To install Apache web server, open the terminal then type:
2. sudo apt-get update // to update our repository.
3. sudo apt-get install apache2 apache2-utils // to install apache2 web server and all related dependencies.
4. sudo nano /etc/apache2/mods-enabled/dir.conf
5. You should see the following line: 

<IfModule mod_dir.c>
       DirectoryIndex index.html index.cgi index.pl index.php index.xhtml index.htm
</IfModule>

6. Change it to: // to make priority for PHP pages first.

<IfModule mod_dir.c>
       DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm
</IfModule>

7. sudo service apache2 restart // to restart apache server
8. You can check if apache web server is working by typing (http://ip_address) in your web browser.

-----------------------------------------------------------------------------------------------------------------------
<------------------------------------------MySQL installation -------------------------------------------------------->
-----------------------------------------------------------------------------------------------------------------------

1. to install MySQL type:
2. sudo apt-get install mysql-server libapache2-mod-auth-mysql php5-mysql // to install mysql server package and all related package dependencies.
3. During the installation you will be asked to set up the MySQL root user password.
4. sudo mysql_install_db // to create a database directory structure where it will store its information.
5. sudo mysql_secure_installation // to make a secure installation for your MySQL.

-----------------------------------------------------------------------------------------------------------------------
<----------------------------------------- PHP installation ---------------------------------------------------------->
-----------------------------------------------------------------------------------------------------------------------

1. to install and configure PHP5 type:
2. sudo apt-get install php5 php5-mysql php-pear php5-gd php5-mcrypt php5-curl // to install php5 package and all related package dependencies.

-----------------------------------------------------------------------------------------------------------------------
<----------------------------------------- PHP and MySQL testing ----------------------------------------------------->
-----------------------------------------------------------------------------------------------------------------------

1. to test PHP script, create a simple PHP script in your /var/www/html directory, for example test.php.
2. sudo touch /var/www/html/test.php // to create our PHP script.
3. sudo nano /var/www/html/test.php // to edit this file.
4. Add the following in your /var/www/html/test.php:
<?php phpinfo; ?>
5. Save by pressing (Ctrl+O) and exit by pressing (Ctrl+X).
6. Go to your web browser and type:
7. http://ip_address/test.php
8. A page should appear showing you information about your server from the perspective of PHP.
9. to test MySQL connection using PHP script, create a PHP script in your /var/www/html directory, for example testdb.php.
10. sudo touch /var/www/hmtl/testdb.php
11. sudo nano /var/www/html/testdb.php
12. Add the following in your /var/www/html/testdb.php:
<?php
$con = mysql_connect("localhost", "root", "password");

  if(!$con){
    die('Could not connect: ' . mysql_error());
  }
  else{
    echo "Connection established successfully.";
  }

mysql_close($con);
?>
13. Now open your web browser and type:
14. http://ip_address/testdb.php
15. See the result.

Thats it, by following these simple steps you should be able to download the LAMP stack successfully.

After that just follow the instructions inside the basic folder from the README.md file to download Yii-basic template and then view my project.

