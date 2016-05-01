<?php session_start(); 

	$word = $_POST['search_box']; //word to search for
	$type = $_POST['search_select']; //condition for search
		
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EZ Hours</title>
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<script type="text/javascript" src="core.js"></script>
<script type="text/javascript" src="login.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />

</head>

<body class="body_basic">
	
	<div id="container">
	<?php include "php/header.php";?>

        <div id="content">
            
        
            <div id="content_main" class="contact">   
			
				<h1>Contact Us</h1>
				
				
            	<form method="post" enctype="multipart/form-data" action="mailto:ezhoura@gmail.com">
				
					<fieldset>
                    	<p id="form-cap">Do you have a question or suggestion? Send us a quick email. Feel free to contract us with you questions or concerns. We will responds to you as soon as possible.</p>
						<!--<legend>Your Contact Details</legend>-->
						<p>
							<label for="name">Name: </label>
							<input name="name" id="name" type="text" /> 
						</p>
						<p>
							<label for="email">Email Address: </label>
							<input name="email" id="email" type="text"/>
						</p>
					
                    
						<p>
							<label for="text">Message: </label>
							<textarea name="text" id="text">
							</textarea>
						</p>
                        
						<p>
							<input name="submit" id="submit" type="submit"  value="Send" />
							<input name="reset" id="reset" type="reset" value="Clear" />
						</p>
					</fieldset>
					
				</form>   
            </div><!--content_main-->	
        </div><!--content-->
    
	<?php include "php/ads.php";?>
	 <?php include "php/site_info.php";?>
	</div><!--container-->
</body>
</html>