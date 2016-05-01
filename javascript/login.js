
var Login = new Object();
Login.init = function ()
{
/*	var x = document.getElementById('site_info');
	var y = x.getElementsByTagName('p');	
	y[0].firstChild.nodeValue = 'Copyright 2009 Pete.  Design by Patrick Brewer.';
*/		
	var box = document.getElementById('search_bar');
	var sbmt = box.getElementsByTagName('button')[0];
		Core.addEventListener(sbmt,'click',Login.subHandler);
		
}
Login.subHandler = function (event)
{
	Core.preventDefault(event);
	
	Login.nameCheck();
	
	
}

Login.nameCheck = function()
	{
	
		var user = document.getElementById('username').value;
		var pword = document.getElementById('password').value;
		
		try
		{
			var requester = new XMLHttpRequest();
		}
		catch(error)
		{
			try
			{
				var requester = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(error)
			{
				var requester = null;
			}
		}
		
		//alert(typeof(requester));
		
		if(requester == null)
		{
			alert("site not compatible");
		}
		else
		{
			requester.onreadystatechange = function()
			{
				if(requester.readyState == 4)
				{
					if(requester.status == 200 || requester.status == 304)
					{
						var resp = requester.responseText;
						
						if(resp == "true")
						{
							Login.removeStuff();
							Login.addMessage();
							//alert("used");
						}
						else if(resp == "false")
						{
							alert("That is not a valid user name or password");
						}
						else
						{
							alert("oops");
						}/**/
					}
					else
					{
						alert("failure");
					}
				}
			}
			var vars = "user="+user+"&pword="+pword;
			requester.open("GET","php/name_check.php?"+vars,true);
			requester.send(null);
			//alert("sent");
		}
	}
Login.removeStuff =function ()
{
		var x = 0;
		var ele = document.getElementById("login");
		
		while(ele.firstChild) 
		{
			ele.removeChild(ele.firstChild);
			x++;
		}
}
Login.addMessage =function ()
{	
	var para = document.createElement('p');
	var txt = document.createTextNode('Welcome');
	//<?php echo "<div id='logout'><p class='left'>Welcome ".$_SESSION['user']."</p><p class='right' ><a href='php/logout.php'>logout</a></p></div>";?>
	para.appendChild(txt);
	document.getElementById('login').appendChild(para);
}

Core.start(Login);