<?php session_start();
 //echo $_SESSION['user'];
?> 	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EZ Hours: News</title>
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<script type="text/javascript" src="javascript/core.js"></script>
<script type="text/javascript" src="javascript/login.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />
</head>

<body class="body_basic">

	
	<div id="container">
    <?php include "php/header.php";?>
    
	<div id="content_main" class="normal_main">
		<h1>EZ Hours News</h1>
		<?php
			$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
			mysql_select_db('pb0612_nursing', $db);// select database
			$sql = "SELECT * FROM news ORDER BY date";
			$result = mysql_query($sql, $db);

			while($row = mysql_fetch_array($result))// Loops untill the end of the array
			{
											
			echo 	"<div class='news'>".
					"<h2 class='news'> ".$row['title']. "</h2>".
					"<p class='news'>".$row['date']."</p>".
					"<p class='news'>".$row['body']."</p>".
					"</div>";
			}
		?>
	</div><!--content_main-->
			   
	<?php include "php/ads.php";?>
	<?php include "php/site_info.php";?>
    </div><!--container-->
</body>
</html>