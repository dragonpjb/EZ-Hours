<?php session_start(); 
	$title= $_POST['title']; //article Id number
	$author= $_POST['author']; //article Id number
	$body= $_POST['make_test']; //article Id number
	$key= $_POST['key']; //answer key
	$isHere = 0; //flag to see if article already exists
	$author_id=0; //id number of author
	$art_id = 0;
	$test_id=0;
	
	echo "title = ".$title."<br/>author = ".$author."<br/>body = ".$abs."<br/>";
	
	$db = mysql_connect( 'localhost', 'pb0612_admin', '562288');//connect to server
    mysql_select_db('pb0612_nursing', $db);// select database
	
	$sql = "SELECT * FROM authors WHERE name = '".$author."'";// select all articles
	echo $sql."<br/>";						
	$result = mysql_query($sql, $db);
	$row = mysql_fetch_array($result);
	$author_id=$row['auth_id'];
	echo $author_id."<br/><br/>";
	
	
	$sql = "SELECT * FROM articles INNER JOIN authors ON articles.author=authors.auth_id";// select all articles
							
	$result = mysql_query($sql, $db);
						
	while($row = mysql_fetch_array($result))// checkes to see if article already exists
    {			
        if($row['name'] == $author && $row['title'] == $title)
		{
			$isHere = 1;
			$art_id=$row['article_id'];
			$test_id=$row['test'];
		}
        echo "name = ".$row['name']." author = ".$author."<br/>title = ".$row['title']." $title = ".$title."<br/> isHere = ".$isHere." article_id = ".$art_id."<br/><br/>";            				
    }
	
	if($isHere == 1 && $test_id != 0)
	{
		echo "The article already exists.<br/>";
		$sql = "UPDATE  tests SET body='".$body."', test_key='".$key."' WHERE test_id=".$test_id;
		echo $sql;
		
		mysql_query($sql, $db);
	}
	else
	{
		echo "The test is new.<br/>";
		$sql = "INSERT INTO tests (article, body, test_key) VALUES (     '".$art_id."', '".$body."', '".$key."')";
		echo $sql;
		$result = mysql_query($sql, $db);
		
		$sql = "SELECT * FROM tests WHERE article = '".$art_id."'";
		$result = mysql_query($sql, $db);
		$row = mysql_fetch_array($result);
		
		$sql = "UPDATE  articles SET test='".$row['test_id']."'WHERE article_id=".$art_id;
		echo $sql;
		mysql_query($sql, $db);
	}
					
		
?>