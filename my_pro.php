<?php session_start();
 $id = $_SESSION['id'];
?> 	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EZ Hours: Profile Information</title>
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<script type="text/javascript" src="javascript/core.js"></script>
<script type="text/javascript" src="javascript/update.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />
</head>

<body class="body_basic">
<div id="container" class="dash">
    <?php include "php/header.php";?>
    
	<div id="content_main" class="normal_main">
		<?php include "php/dash_nav.php";?>
		
		<div id="fav_list" class="left">
		<h1 class="dash">My Profile Information</h1>
			<form id="edit_prof_form" action="pro_update.php" method="post">
								<fieldset class="dash">
									<ul id="edit_prof_ul" class="dash">
										<!--<li id="edit_prof_li_1">
											<label for="user_name" >User Name: </label><br/>
											<input type="text" name="uname" id="uname" value=""/>
										</li>-->
										
										<li id="edit_prof_li_2" class="dash">
											<label for="first_name" >First Name: </label><br/>
											<input class="dash" type="text" name="get_first" id="get_first" id="get_age" value=""/>
										</li>
										
										<li id="edit_prof_li_3" class="dash">
											<label for="last_name" >Last Name: </label><br/>
											<input class="dash" type="text" name="get_last" id="get_last" value=""/>
										</li>
										
										<li id="edit_prof_li_4" class="dash">
											<label for="password" >Password: </label><br/>
											<input class="dash" type="text" name="password" id="password" value=""/>
										</li>
										
										<li id="edit_prof_li_5" class="dash">
											<label for="email" >Email: </label><br/>
											<input class="dash" type="text" name="email" id="email" value=""/>
										</li>
									</ul>
									
									<p id="edit_prof_sub_p" class="dash">
										<input id="edit_prof_sub" type="submit" value="Submit"/>
									</p>
								</fieldset>
							</form>
		</div><!--authors-->
	</div><!--content_main-->
			   
	<?php include "php/ads.php";?>
	<?php include "php/site_info.php";?>
    </div><!--container-->

</body>
</html>