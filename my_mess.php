<?php session_start();
 $id = $_SESSION['id'];
?> 	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EZ Hours: reading list</title>
<script type="text/javascript" src="javascript/core.js"></script>
<script type="text/javascript" src="javascript/login.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />
</head>

<body class="body_basic">
<div id="container" class="dash">
    <?php include "php/header.php";?>
    
	<div id="content_main" class="normal_main">
		<?php include "php/dash_nav.php";?>
		<div id="fav_list" class="left">
		<h1 class="dash">My Articles</h1>
			<?php
				$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
				mysql_select_db('pb0612_nursing', $db);// select database
				$sql = "SELECT * FROM `articles` WHERE `user_id` = $id";
			          //SELECT * FROM `articles` WHERE `user_id` = 2
					//echo $sql;
				
				$result = mysql_query($sql, $db);
				
				while($row = mysql_fetch_array($result))// Loops untill the end of the array
				{
					
					
					echo "<p class='dash'><a href='reader.php?article_id=".$row['art_id']."'>" .$row['title']. "</a></p>";
				}
			?>
		</div><!--authors-->
	</div><!--content_main-->
			   
	<?php include "php/ads.php";?>
	<?php include "php/site_info.php";?>
    </div><!--container-->

</body>
</html>