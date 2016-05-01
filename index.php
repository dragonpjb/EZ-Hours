<?php session_start();
 //echo $_SESSION['user'];
?> 	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EZ Hours: Home</title>
<link href="favicon.ico" rel="icon" type="image/x-icon" />

<script type="text/javascript" src="javascript/core.js"></script>
<script type="text/javascript" src="javascript/login.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />
</head>

<body class="body_basic">

	
	<div id="container">
    <?php include "php/header.php";?>
    	
		<div id="wrapper">
			<div id="content">    
			  
				<div id="cover">
					<p><a href="reader.php?article_id=5" title="Featured Article"><img src='images/hazard-cover.jpg'width='650' alt=' image of author' /></a></p>
					<?php
						$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
						mysql_select_db('pb0612_nursing', $db);// select database
						$sql = "SELECT * FROM articles INNER JOIN authors ON articles.author=authors.auth_id ORDER BY date DESC";
						$result = mysql_query($sql, $db);
						$row = mysql_fetch_array($result);
												
						//echo "<p><img src='".$row["cover"]."'width='650' alt=' image of author' /></p> ";
							
					?>
				</div><!--cover-->
				
				<div id="content_main" class="normal_main">
					<h1>Latest Articles</h1>
					
					<?php
						$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
						mysql_select_db('pb0612_nursing', $db);// select database
						$sql = "SELECT * FROM articles INNER JOIN authors ON articles.author=authors.auth_id ORDER BY date DESC LIMIT 3";
						$result = mysql_query($sql, $db);
						//$i = 0;
							
						while($row = mysql_fetch_array($result))// Loops untill the end of the array
						{
							//$row = mysql_fetch_array($result);
							
							echo "<div class='abstract'>".
							
										"<div class='abs_text'>".
									
											"<h3 class='abs_title'> <a href='reader.php?article_id=".$row['article_id']."'>".$row['title']."</a></h3>".
											
											"<p class='abs_author'> <a href='".$row['authors_blog']."'>".$row['name']."</a><p/>".
											
											"<p class='abs_date'> ".$row['date']."<p/>".
											
											"<p class='abs_body'> ".$row["abstract"]."</p>".
															
										"</div>".
										
										"<p class='abs_pict'><img src='".$row['abs_pict']." ' alt' image of author' /></p>".
										
									"</div>";	
									
							//$i++;
						}
					?>		
				</div><!--content_main-->
			</div><!--content-->
		
        <?php include "php/ads.php";?>
        </div><!--wrapper-->
        <?php include "php/site_info.php";?>
    </div><!--container-->
</body>
</html>