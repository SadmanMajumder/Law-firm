<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Cases </title>
    
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
			<div class="col-md-2" style="text-align: center;font-size: 40px;color:#FAFAD2;"> Rys Law Firm  </div>
			<div class="col-md-10" style="text-align: right;color: #FFD700;"> 
				<a href="home.php"> Home </a> 
				<a href="#" style="margin-left: 20px;"> Lawyers </a> 
				<a href="index.php" style="margin-left: 20px;"> Sign Out </a>   
			</div>
		</div>
	</section>
	
	<section id = "section2">
		<div class="title" style="color: #FAFAD2" > Cases </div>
		<div style="margin-left:8%; margin-right:8%; margin-top:80px; margin-bottom:80px;text-align:center ;background:#E0FFFF;">
			<div class="row" style="padding:5px;"> 
				<div class="col-md-1" style="color:#5C2C26 ; font-size: 15px">  Case ID </div>
				<div class="col-md-1" style="color:#5C2C26 ; font-size: 15px">  Plaintiff </div>
				<div class="col-md-1" style="color:#5C2C26 ; font-size: 15px">  Defendant  </div>
				<div class="col-md-1" style="color:#5C2C26 ; font-size: 15px">  Filing_Date </div>
				<div class="col-md-1" style="color:#5C2C26 ; font-size: 15px">  Closing_Date</div>
				<div class="col-md-1" style="color:#5C2C26 ; font-size: 15px">  Court</div>
				<div class="col-md-1" style="color:#5C2C26 ; font-size: 15px">  Judge</div>
				<div class="col-md-1" style="color:#5C2C26 ; font-size: 15px">  Fees</div>
				<div class="col-md-1" style="color:#5C2C26 ; font-size: 15px">  Lawyer</div>
				<div class="col-md-1" style="color:#5C2C26 ; font-size: 15px">  Files</div>
			</div>
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			<?php 
			require_once("DBconnect.php");
			$sql = 'select * from cases ';
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div class="row" style="padding:5px;"> 
				<div class="col-md-1">  <?php echo $row[0]; ?> </div>
				<div class="col-md-1">  <?php echo $row[1]; ?> </div>
				<div class="col-md-1">  <?php echo $row[2]; ?> </div>
				<div class="col-md-1">  <?php echo $row[3]; ?> </div>
				<div class="col-md-1">  <?php echo $row[4]; ?> </div>
				<div class="col-md-1">  <?php echo $row[5]; ?> </div>
				<div class="col-md-1">  <?php echo $row[6]; ?> </div>
				<div class="col-md-1">  <?php echo $row[7]; ?> </div>
				<div class="col-md-1">  <?php echo $row[8]; ?> </div>
				<div class="col-md-1">  <?php echo $row[9]; ?> </div>
				
			</div>
			
			<?php 
				}					
			}
			?>
			
			
			
		</div>
		
		
		
		
		
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

