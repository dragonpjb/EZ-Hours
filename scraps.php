<h1>Authors</h1>
			<div id="authors">
			<?php
				//$db = mysql_connect( 'localhost', 'pb0612_admin', '562288');//connect to server
				//mysql_select_db('pb0612_nursing', $db);// select database
				include "db_connect.php";
				$sql = "SELECT * FROM authors ";
				$result = mysql_query($sql, $db);
				
				while($row = mysql_fetch_array($result))// Loops untill the end of the array
				{
					echo "<h2><a href='" .$row['auth_blog']. "'>" .$row['name']. "</a></h2>";
				}
			?>
		</div><!--authors-->