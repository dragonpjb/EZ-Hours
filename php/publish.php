<?php session_start(); 
	$title= $_GET['title']; //article Id number
	$author= $_GET['author']; //article Id number
	$body= $_GET['content']; //article Id number
	$body= $_GET['content']; //article Id number
	
	$db = mysql_connect( 'localhost', 'pb0612_admin', '562288');//connect to server
            
                    mysql_select_db('pb0612_nursing', $db);// select database
                                                            
                    $sql = "INSERT INTO articles (title, author, body) VALUES ('". ."', '".."', '".."')";
                        
                    $result = mysql_query($sql, $db);
		
?>