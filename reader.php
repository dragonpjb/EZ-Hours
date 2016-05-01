<?php session_start(); 
	$art_id = $_GET['article_id']; //article Id number
	$_SESSION['curArt'] = $art_id;
	
	//echo $_SESSION['curArt'];
	
	$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
	mysql_select_db('pb0612_nursing', $db);// select database
	$sql = "SELECT * FROM articles INNER JOIN authors ON articles.article_id=".$art_id." AND articles.author=authors.auth_id";
	$result = mysql_query($sql, $db);
	$row = mysql_fetch_array($result);
	
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EZ Hours: <?php  echo $row['title'];?></title>
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<script type="text/javascript" src="javascript/login.js"></script>
<script type="text/javascript" src="javascript/core.js"></script>
<script type="text/javascript" src="javascript/mark-it.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />

</head>

<body class="body_basic">
	<div id="container">
    	<div id="branding">
		<?php     
			if($_SESSION['user'])
			{ include "php/welcome_message.php"; }			
			else
			{ include "php/login_form.php"; }
        ?>
		
        <p><a href="index.php"><img src="images/ez-logo.jpg" alt="EZ hours logo" /></a><!----></p>
    </div><!--branding-->
		
        <?php include "php/main_nav.php";?>
        
    <div id="search_bar">
		
        
		<ul id="arts" class="norm">
			<li class="norm">More Articles: </li>
			<li class="norm"><a href="reader.php?article_id=17">Women and heart disease,</a></li>
			<li class="norm"><a href="reader.php?article_id=16">Caring For Family Caregivers Of Older Persons,</a></li>
			<li class="norm"><a href="reader.php?article_id=15">Nursing care of the oldest-old</a></li>
			<!--<li><a href="reader.php?article_id=5">Nursing management models for response to bioterrorism</a></li>
			<li><a href="reader.php?article_id=1">The Metabolic Syndrome in Older Adults</a></li>-->
			
			
		</ul>
    </div><!--search_bar-->
        <div id="content">
            <div id="reader_bar">
                <ul>
                    <li id="rb_1"><a title="Discuss This Article" href="<?php  echo $row['discuss'];?>"><img src="images/discussion.png" alt="discussion icon"/></a></li>
                    <li id="rb_2"><a title="Download PDF" href="<?php  echo $row['pdf'];?>"><img src="images/pdf-1.png" alt="pdf icon"/></a></li>
                    <li id="rb_4"><a title="Take Test" href="tester.php?test_num=<?php  echo $row['test'];?>"><img src="images/test-1.png" alt="test icon"/></a></li>
					<li id="rb_6"><a href="#" title="Add to Favorites"><img src="images/fav.png" alt="heart icon"/></a></li>
					<li id="rb_7"><a href="#" title="Mark for Later"><img src="images/book_open-26px.png" alt="open book icon"/></a></li>
					<!--<li id="rb_3"><a href="fact_sheet.php?art_id=<?php  //echo $art_id;?>">Factsheet</a></li>-->
                    <!--<li id="rb_5">
                        <label for="column_select">Search by:</label>
                        <select id="column_select" name="column_select">     
                                <option value="1" >One Column</option>
                                <option value="2" >Two Column</option>
                                <option value="3" >Three Columnt</option>
                        </select>
                    </li>-->
					
                </ul>
            </div>
        
        
            <div id="content_main" class="reader">
                <?
						
						
						echo	"<h1 class='art_title'> ".$row['title']."</h1>";
                                    
                        echo 	"<h2 class='art_author'> <a href='".$row['authors_blog']."'>By ".$row['name']." <br/>".$row['job']."</a></h2>";
                                 						
                        echo	"<div class='art_body'>" .$row['body']."</div>";
						
                ?>
    
            </div><!--content_main-->
        </div><!--content-->
        <?php include "php/ads.php";?>
        <?php include "php/site_info.php";?>
    </div>
</body>
</html>