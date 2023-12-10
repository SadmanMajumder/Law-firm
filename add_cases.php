<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Add New Case </title>
    
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
		<div class="title" style="color: #FAFAD2;"> Add New Case  </div>
		
		<form action="insert_case.php" class="form_design" method="post">
			CaseID: <input type="text" name="Cid"> <br/>
			Plaintiff: <input type="text" name="plntff"> <br/> 
			Defendant: <input type="text" name="dfndnt"> <br/>
			Filing Date: <input type="text" name="fdt"> <br/>
			Closing Date: <input type="text" name="cdt"> <br/>
			Court: <input type="text" name="crt"> <br/>
			Judge: <input type="text" name="jname"> <br/>
			Fees: <input type="text" name="fs"> <br/>
			Lawyer: <input type="text" name="lname"> <br/>
			Files: <input type="text" name="fls"> <br/>
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

