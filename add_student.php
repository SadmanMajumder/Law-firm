<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Add New Lawyer </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="text-align: center;font-size: 40px;color:#FAFAD2;"> Rys Law Firm </div>
			<div class="col-md-10" style="text-align: right;color: #FFD700;"> 
				<a href="home.php"> Home  </a> 
				<a href="show_students.php" style="margin-left: 20px;"> Lawyers </a> 
				<a href="index.php" style="margin-left: 20px;"> Sign Out </a>
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title" style="color: #FAFAD2;"> Add a New Lawyer  </div>
		
		<form action="insert_student.php" class="form_design" method="post">
			ID: <input type="text" name="lid"> <br/>
			Name: <input type="text" name="lname"> <br/> 
			Position: <input type="text" name="pstn"> <br/>
			Expertise: <input type="text" name="expt"> <br/>
			Salary: <input type="text" name="slry"> <br/>
			LeaderID: <input type="text" name="ldr"> <br/>
			<br/>
			<input type="submit" value="Add to Database">
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

