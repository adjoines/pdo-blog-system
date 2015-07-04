# pdo-blog-system
This is a simple blog system based entirely on php data objects. This project consist of the following technologies:- 
1. A signup and login system for blog authors.
2. 2. An admin system to manage the blogs(delete and edit blogs) 
3. 3. A blog comment system. 
4. 4. Url seo friendly

/**
 * simpleblog v1.0.0
 *
 * http://www.simplecss3.com
 * Author: Oj Obasi
 *
 * Licensed under the GNU General Public License (GPL)
 * http://opensource.org/licenses/gpl-license.html
 *
 *  Date: Tues June 30 12:00:00 2015
 * Copyright 2015, simplecss3.com
 *
 */
 
 INSTALLATION NOTES:
 
 1. Open the config.php file in the inc/ folder and update with your MySql database information.
 
 	define("DB_HOST","localhost");
	define("DB_NAME","-databasename-");
	define("DB_PORT","3306"); // default: 3306
	define("DB_USER","-database username-");
	define("DB_PASS","-password-");
	
 /* If you are testing on localhost ,  
        // these two constants are used to create root-relative web addresses
       // and absolute server paths throughout all the code
	   define("BASE_URL","/");
	   define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/");
to specify BASE_URL and ROOT_PATH
*/

2. if your database connection is established, Navigate your root URL to YOUR_SITE_URL/make_my_tables.php to create your database table.

3. If all tables are up and working well and your database connection all good, then your site is up and running.
Scroll to the footer, click on Admin login to register an account, login and write and publish your blogs.

4. Support available @ simplecss3.com
5. DEMO and DOWNLOAD URL: http://simplecss3.com/tutorial/76/php-data-object-simple-blog-system/
