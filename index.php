<?php 
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
require_once("inc/config.php");
require_once(ROOT_PATH . "inc/files.php");
$all_blogs = get_all_blogs();
$pageTitle = "Simple Blog Build in PDO";
$pageDesc = "Simple Blog Build in PDO";
$section = "home";
include(ROOT_PATH . 'inc/header.php'); ?>

<h3>DEMO LOGIN WITH :</h3>
<strong>Username : </strong> admin <br>
<strong>password : </strong> admin <br>
<a href="<?php echo BASE_URL; ?>admin/login.php">Click here to Login or register an account to test the blog system.</a><br>
<hr>
<strong><i class="fa fa-list-alt"></i> Published Blogs:</strong>
<ul class="all-list">
	<?php
		  foreach(array_reverse($all_blogs) as $allblog) {
			  include(ROOT_PATH . "inc/all-blog-view.html.php");
		  }
      ?>
</ul>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>
