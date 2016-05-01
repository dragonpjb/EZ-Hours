<?php session_start();
 //echo $_SESSION['user'];
?> 	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EZ Hours: About</title>
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<script type="text/javascript" src="javascript/core.js"></script>
<script type="text/javascript" src="javascript/login.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />
</head>

<body class="body_basic">
 
	<div id="container">
    <?php include "php/header.php";?>
   
	<div id="content_main" class="normal_main">
		<h1>About EZ Hours</h1>
		<p class="about">
			This is a prototype of the EZ Hours website. It was designed as a class project. Some nurses came to our design class and said they were looking for ideas for a site to make it easy for nurses to get continuing education credits.
		</p>
		<p class="about">
			Each student created their own design for a site. The only stipulations were that a user had to be able to read articles and there had to be a space for ads. Other than that we had the freedom to do whatever we wanted. At the end of the class they were supposed to choose a design, but they changed their mind and did not use any of them. It was a good design exercise though so the time was not wasted.
		</p>
		<p class="about">
			I originally wanted to integrate some social networking into the sight but I realized that most of it distracted from the main focus of the site. I pruned most of the extraneous features and ended up with a much more user friendly site. 
		</p>
		<p class="about">
			
		</p>
		<p class="about">
			
		</p>
	</div>
			   
	<?php include "php/ads.php";?>
	<?php include "php/site_info.php";?>
    </div><!--container-->
</body>
</html>