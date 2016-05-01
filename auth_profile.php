<?php session_start();
 //echo $_SESSION['user'];
 $auth = $_GET['auth'];
 include "db_connect.php";
 
 $sql = "SELECT * FROM authors WHERE auth_id = ".$auth;
$result = mysql_query($sql, $db);
$author = mysql_fetch_array($result);

$sql = "SELECT * FROM articles WHERE author = ".$auth." ";
$result = mysql_query($sql, $db);

?> 	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EZ Hours: Authors</title>
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<script type="text/javascript" src="javascript/core.js"></script>
<script type="text/javascript" src="javascript/login.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />
</head>

<body class="body_basic">

	 
	<div id="container">
    <?php include "php/header.php";?>
   
	<div id="content_main" class="normal_main">
		<div id="bob">
			<!--<h2>Author Profile</h2>-->
			<p id="auth_image"><img src="<?php echo $author['auth_image']; ?>" alt="picture of author"/></p>
			<ul id="auth_ul">
				<li><b>Name:</b><h1><?php echo $author['name']; ?></h1></li>
				<li><b>Job:</b><?php echo $author['job']; ?></li>
				<li><b>Location:</b><?php echo $author['city']; ?>, <?php echo $author['state']; ?></li>
				<li><b>Email:</b><?php echo $author['email']; ?></li>
			</ul>
		</div><!--bob-->
		<div id="art_lst">
			<h2>Articles</h2>
			<?php
				while($row = mysql_fetch_array($result))// Loops untill the end of the array
				{
					echo "<div class='abstract'>".
                        
                                "<div class='abs_text'>".
                        
                                "<h3 class='abs_title'> <a href='reader.php?article_id=".$row['article_id']."'>".$row['title']."</a></h3>".
                                
                                "<p class='abs_author'> <a href='".$row['authors_blog']."'>".$author['name']."</a><p/>".
                                
                                "<p class='abs_date'> ".$row['date']."<p/>".
                                
                                "<p class='abs_body'> ".$row["abstract"] ."</p>".
                                                    
                                "</div>".
                                
                                "<p class='abs_pict'><img src='".$row['abs_pict']." ' image of author' /></p>".
                                
                            "</div>";	
					//echo "<h3><a href='reader.php?article_id=".$row['article_id']."'>" .$row['title']. "</a></h3>";
				}
				
				
			?>
		</div><!--art_lst-->
	</div>
			   
	<?php include "php/ads.php";?>
	<?php include "php/site_info.php";?>
    </div><!--container-->
</body>
</html>