<?php session_start();?>
    	<div id="branding">
        	<p><a href="index.php"><img src="images/branding.jpg" width="1000" height="222" alt="EZ hours logo" /></a></p>
      	</div><!--branding-->
        <?php include "php/main_nav.php";?>
        
        <div id="search_bar">
			<?php     
				if($_SESSION['user'])
				{ include "php/welcome_message.php"; }			
				else
				{ include "php/login_form.php"; }
            ?>
            
            <?php include "php/search_form.php" ?>
    </div><!--search_bar-->
