				<form action = "archive.php" method = "post" id="search">	
                
                    <label for="search_select">Search by:</label>
                    <select id="search_select" name="search_select">     
                            <option value="author" >Author</option>
                            <option value="title" >Title</option>
                            <option value="subject" >Subject</option>
                            <option value="date" >Date</option>
                            <option value="c_hours" >Credit Hours</option>
                    </select>
                    
                    <input type="text" name="search_box" id="search_box"/>
                    
                    <button type="submit">Search</button>
				</form>  
