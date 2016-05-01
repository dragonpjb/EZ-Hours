<?php session_start(); 

	$word = $_POST['search_box']; //word to search for
	$type = $_POST['search_select']; //condition for search
		
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EZ Hours: Dashboard</title>
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<script type="text/javascript" src="javascript/core.js"></script>
<script type="text/javascript" src="javascript/login.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />

</head>

<body class="body_basic">
	<div id="container">
	<?php include "php/header.php";?>

            <div id="content_main" class="dash_main">
            	<div id="dash_nav" class="left">
                    <ul class="vert_lst">
                        <li><a href="favs.php">My Favorites</a></li>
                        <li><a href="read_list.php">My Bookmarks</a></li>
                        <li><a href="my_art.php">My Articles</a></li>
						<li><a href="my_pro.php">My Profile</a></li>
						<li><a href="my_mess.php">My Messages</a></li>
						<!--<li><a href="#">#</a></li>-->
						 <!--<li><a href="#">My Blog</a></li>-->
                    </ul>
                </div>
                
             	<div id="writer" class="right">
                	<!--<div id="pub_abs" class="editor">
                        <form action = "php/publish_abs.php" method = "post" >
                        	<p>
                                <label for="author">Author:</label>
                                <input type="text" name="author" id="author"/>
                            </p>
                       		<p>    
                                <label for="title">Title:</label>
                                <input type="text" name="title" id="title"/>
                            </p>
                            
                                <ul class="flat_lst">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                </ul>
                            
                                <!--<label for="abstract">Content</label>
                                <textarea rows="10" cols="30" id="abstract" name="abstract"> Write article abstract here.</textarea>
                          
                            <p>
                            	<button type="submit" id="sub_abs">Submit</button>
                            </p>
                        </form>
                    </div>--><!--pub_abs-->
                    
                    <div id="pub_art" class="editor">
                	<form action = "php/publish_art.php" method = "post" >
                    	<p>
                            <label for="author">Author:</label>
                            <input type="text" name="author" id="author"/>
                        </p>
                        <p>    
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title"/>
                        </p>
                        
                        
                            <!--<ul class="flat_lst">
                                <li>Heading</li>
                                <li>Bullet list</li>
                                <li>Numbered list</li>
                                <li>Box</li>
                                <li>Picture</li>
                            </ul>-->
                            
                            <!--<label for="body">Content</label>-->
                            <textarea rows="10" cols="30" name="body" id="body"> Write article body here.</textarea> 
                         
                         
                         <p> 
                        	<button type="submit" id="sub_art">Submit</button>
                        </p>
                	</form>
                	</div><!--pub_art-->
                    
                    <div id="pub_test" class="editor">
                	<form action = "php/publish_test.php" method = "post" >                                          
                            <ul class="flat_lst">
                                <li>Add question</li>
                                <li>Add Answer</li>
                            </ul>
                        
                            <!--<label for="make_test">Content</label>-->
                            <textarea rows="10" cols="30" id="make_test" name="make_test"> Write article test here.</textarea>
                        
                        
                        <p>
                            <label for="key">Answer Key:</label>
                            <input type="text" name="key" id="key"/>
                        </p>
                        
                        <p>
                        	<button type="submit" id="sub_test">Submit</button>
                        </p>
					</form>
                    </div><!--pub_test-->
                </div>
            </div><!--content_main-->	
    
	 <?php include "php/site_info.php";?>
	</div><!--container-->
</body>
</html>