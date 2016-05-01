<?php session_start(); 

	$test_num = $_GET['test_num']; //id nuumber of test
	$_SESSION['test_num'] = $test_num;	
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EZ Hours: Test for</title>
<script type="text/javascript" src="javascript/core.js"></script>
<script type="text/javascript" src="javascript/login.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />
</head>

<body class="body_basic">
	<div id="container">
	<?php include "php/header.php";?>

        <div id="content">
            <div id="content_main" class="tester">
                 
				<h1>CE Test Questions</h1>
				<h2>Complete the following test questions:</h2>
				
				<form action = "grader.php" method ="post" id="test">
					<?php	
					
						$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
						mysql_select_db('pb0612_nursing', $db);// select database
						$sql = "SELECT * FROM questions WHERE test_id=".$test_num;
						$result = mysql_query($sql, $db);
						
						while($row = mysql_fetch_array($result))
						{
							echo $row[body];
							$key = $key.$row[answer];
						}
						
						$_SESSION['key'] = $key;
						//echo $key;
					?>
					
					<input type="submit" value="Submit" />
				</form> 
            </div><!--content_main-->	
        </div><!--content-->
    
	<?php include "php/ads.php";?>
	 <?php include "php/site_info.php";?>
	</div><!--container-->
</body>
</html>