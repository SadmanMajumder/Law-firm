<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Rys Law Firm </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row";>  
			<div class="col-md-2" style="text-align: center; font-size: 35px;color:#FAFAD2;"> Rys Law Firm </div>
			<div class="col-md-10" style="text-align: right;color: #FFD700;"> 
				 
				<a href="login.php" style="margin-left: 20px;"> Back </a> 
				
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Change Password </div>
		
		<form action="change_password_action.php" class="form_design" method="post">
			ID: <input type="text" name="fname"> <br/>
			Old Password: <input type="password" name="opass"> <br/>
			New Password: <input type="password" name="npass">			<br/> <br/>
			<input type="submit" value="Confirm">
		</form>
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

