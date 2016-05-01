<?php session_start(); 

	$word = $_POST['search_box']; //word to search for
	$type = $_POST['search_select']; //condition for search
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EZ Hours: Archives</title>
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<script type="text/javascript" src="javascript/core.js"></script>
<script type="text/javascript" src="javascript/login.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />

</head>

<body class="body_basic">
	
	<div id="container">
    <?php include "php/header.php";?>	
        <div id="content">
            <div id="content_main" class="normal_main">
            	<h1>EZ Hours Archives</h1>
            	<?
                    $db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
					mysql_select_db('pb0612_nursing', $db);// select database
                    $sql = "SELECT * FROM articles INNER JOIN authors ON articles.author=authors.auth_id ORDER BY date DESC";
                    $result = mysql_query($sql, $db);
                        
                    while($row = mysql_fetch_array($result))// Loops untill the end of the array
                    {
                        //$abs = mysql_real_escape_string($row["abstract"]);
                        echo "<div class='abstract'>".
                        
                                "<div class='abs_text'>".
                        
                                "<h3 class='abs_title'> <a href='reader.php?article_id=".$row['article_id']."'>".$row['title']."</a></h3>".
                                
                                "<p class='abs_author'> <a href='".$row['authors_blog']."'>".$row['name']."</a><p/>".
                                
                                "<p class='abs_date'> ".$row['date']."<p/>".
                                
                                "<p class='abs_body'> ".$row["abstract"] ."</p>".
                                                    
                                "</div>".
                                
                                "<p class='abs_pict'><img src='".$row['abs_pict']." ' image of author' /></p>".
                                
                            "</div>";						
                    }
				?>

            </div><!--content_main-->
        </div>
        <?php include "php/ads.php";?>
        <?php include "php/site_info.php";?>
    </div>
</body>
</html>