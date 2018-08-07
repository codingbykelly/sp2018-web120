
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Kelly's WEB120 - Contact Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/form.css" />
     <link rel="stylesheet" href="nav/form.css" />
 </head>
 <body>
   <div class="wrapper">
   <header>
     
     <nav class="topnav" id="myTopnav">
       <a href="index.php">Welcome</a>
       <a href="flowchart.php">Flowchart</a>
       <a href="aia.php">AIA</a>
       <a href="big/index.php">BIG</a>
     
       
       <a href="fp/index.php">Final Project</a>
       <a href="contact.php" >Contact Kelly</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
   </header> 

       
       <h1>Contact Kelly</h1>
     
       	<!-- START HTML FORM -->
	<form action="contact.php" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email" title=Cont tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="30"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6LdIq2gUAAAAACA3f57y_5i4pNKr0ew7jLGdSwGe"></div> 
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
	 <p class="clear-recaptcha"></p>
       
       </div>
     
     

     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>