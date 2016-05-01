<?php session_start(); 
	

	$uname = $_GET['user'];
	$pword = md5($_GET['pword']);
	
	//echo "uname is: ".$uname." pword is: ".$pword;
	
	$used = 0;
	$new = 0;
	
	$db = mysql_connect( 'localhost', 'pb0612_admin', '562288');//connect to server
		
	mysql_select_db('pb0612_nursing', $db); // select database
		
	$sql = "SELECT user_name FROM users";
    $result = mysql_query($sql);
	
	
	if(mysql_error())
	{
		echo 'That is not a valid user name or password'.'<br />';
	}
	else
	{
				
		while($row = mysql_fetch_array($result))// Loops untill the end of the array
		{
			
			$current = $row['user_name'];
			
			if($current == $uname)
			{
				$used += 1;
			}			
			
		}	
		
		if($used |= 0)
		{
			$db = mysql_connect( 'localhost', 'pb0612_admin', '562288');//connect to server
		
			mysql_select_db('pb0612_nursing', $db); // select database
		
			$sql = "SELECT password FROM users";
   			$result = mysql_query($sql);
			$test = mysql_fetch_array($result);
			
			if($test[0] == $pword)
			{
				$_SESSION['user']=$uname;
				echo "true";
			}
			else
			{
				echo "test is: ".$test[0]." pword is: ".$pword;
			}	
					
		}
		else
		{
			echo "false";
		}	
		
		
	}



?>