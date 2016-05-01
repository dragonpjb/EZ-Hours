<?php session_start(); 

	$test_num = $_SESSION['test_num']; //id nuumber of test
	 //id nuumber of test
	
		
	$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
            
	mysql_select_db('pb0612_nursing', $db);// select database
                                                            
	$sql = "SELECT * FROM tests WHERE tests.test_id=".$test_num;
                        
	$result = mysql_query($sql, $db);
	                    
	$row = mysql_fetch_array($result);
	
	$q_num = strlen($row['test_key']); //this is how many questions there are
	$points = 100 / $q_num; //number of points per question
	$score = 0; //students test score
	$key = $_SESSION['key'];//$key = $row['test_key']; //test key
	$correct = 0; //number of correct anwsers
	$wrong = 0 ;//Number of wrong anwsers
	
	echo $q_num.$key;
	
	for( $i=0;$i<$q_num; $i++)
	{
		$x = $i+1;
		$y = $_POST['answer_'.$x];
		
		if($y == $key[$i])
		{
			$correct++;
		}
		else
		{
			$wrong++;
		}
		
		//echo "correct = ".$correct." wrong =  ".$wrong."|";
	}
	
	$score = $correct * $points;
	//echo "<br/>";
	//echo "your score is ".$score."<br/>";
	
	
	
	
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EZ Hours</title>

<script type="text/javascript" src="core.js"></script>
<script type="text/javascript" src="login.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />

</head>

<body class="body_basic">
	<div id="container">
	<?php include "php/header.php";?>

        <div id="content">
            <div id="content_main" class="">
            <?php
				
                if($score >+ 75)
                {
                     echo "<h1>You have passed</h1><br/>";
                }
                 else
				 {
					 echo "<h1>You have failed</h1><br/>"; 
				 }
				 echo "<h2>Your final score is: ". $score.".</h2><br/>";
				 echo "<p>You Answered ".$correct." questions correct, and ".$wrong." questions wrong.</p><br/>"	
				 
			?>
            </div><!--content_main-->	
        </div><!--content-->
    
	<?php include "php/ads.php";?>
	<?php include "php/site_info.php";?>
	</div><!--container-->
</body>
</html>