<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    <meta charset="utf-8">
    <title>Insert PDF</title>
    <style media="screen">

    </style>
  </head>
  <body>
  <section id="header">
		<div class="row";>  
			<div class="col-md-2" style="text-align: center; font-size: 35px;color:#FAFAD10;"> Rys Law Firm </div>
			<div class="col-md-10" style="text-align: right;color: #FFD700;"> 
				<a href="clientlogin.php"> SIGN OUT </a> 
			</div>
		</div>
	</section>
	

    <div class="">
	<div style="margin-left:20%; margin-right:20%; margin-top:80px; margin-bottom:80px;text-align:center;background:#E0FFFF;">
			<div class="row" style="padding:5px;"> 
      <form class="" action="client.php" method="post" enctype="multipart/form-data">
        <label for="">Choose Your PDF File</label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="Upload">
        <?php
		
        require_once ('DBconnect.php');

        if (isset($_POST['submit'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;
		  
          move_uploaded_file($pdf_tem_loc,$pdf_store);
          $sql="INSERT INTO pdf_file(pdf) values('$pdf')";
		  

		if(mysqli_query($conn,$sql))
	{
		
		echo"succesful!!!";
	}
	else{
		echo"failed (((";
	}

        }
         ?>

      </form>

    </div>

  </body>
</html>