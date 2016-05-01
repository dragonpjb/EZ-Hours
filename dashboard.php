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
	<div id="container" class="dash">
	<?php include "php/header.php";?>

            <div id="content_main" class="normal_main">
            	<?php include "php/dash_nav.php";?>
                
             	<div id="writer" class="left">			
				<h1 class="dash">Write An Article</h1>
                    <div id="pub_art" class="editor">
						<form action = "php/publish_art.php" method = "post" >
							<ul class="dash">
								<li class="dash flat_lst">
									<label for="author">Author:</label>
									<input class="dash" type="text" name="author" id="author"/>
								</li>
								
								<li class="dash flat_lst">    
									<label class="dash" for="title">Title:</label>
									<input class="dash" type="text" name="title" id="title"/>
								</li>
								
							</ul>
							
							<p class="dash">
								<!--<label for="body">Content</label>-->
								<textarea rows="10" cols="30" name="body" id="body"> Write article body here.</textarea> 
								<button class="dash" type="submit" id="sub_art">Submit</button>
							</p>
						</form>
                	</div><!--pub_art-->
                    
                    <div id="pub_test" class="editor">
						<form action = "php/publish_test.php" method = "post" >                                          
							<p class="dash">
								<textarea rows="10" cols="30" id="make_test" name="make_test"> Write article test here.</textarea>                        
								<button class="dash" type="submit" id="sub_test">Add Question</button>
							</p>
						</form>
                    </div><!--pub_test-->
                </div>
            </div><!--content_main-->	
		<?php include "php/ads.php";?>
		<?php include "php/site_info.php";?>
	</div><!--container-->
</body>
</html>