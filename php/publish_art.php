<?php session_start(); 
	$title= $_POST['title']; //article Id number
	$author= $_POST['author']; //article Id number
	$body= $_POST['body']; //article Id number
	$isHere = 0; //flag to see if article already exists
	$author_id=0; //id number of author
	$article_id=0;
	
	echo "title = ".$title."<br/>author = ".$author."<br/>body = ".$body."<br/>";
	
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
			$article_id=$row['article_id'];
		}
        echo "name = ".$row['name']." author = ".$author."<br/>title = ".$row['title']." $title = ".$title."<br/> isHere = ".$isHere." article_id = ".$article_id."<br/><br/>";            				
    }
	
	if($isHere == 1)
	{
		echo "The article already exists.<br/>";
		$sql = "UPDATE  articles SET title='".$title."', body='".$body."'WHERE article_id=".$article_id;
		echo $sql;
	}
	else
	{
		echo "The article is new.<br/>";
		$sql = "INSERT INTO articles (title, author, body) VALUES ('".$title."', '".$author_id."', '".$body."')";
		echo $sql;
	}
					
    $result = mysql_query($sql, $db);
		
?>