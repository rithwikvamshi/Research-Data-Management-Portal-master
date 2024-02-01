<!DOCTYPE html>
<html>
<head>
  <title>New research</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
h3{
  color: green;
}
</style>

</head>
<body>
  <div class="topnav">
    <a href="facultyhome.php" class="navbar-brand">Faculty Home</a>
	</div>

  <div class="container" style="background: #eeeeee; padding: 3% 0; border-radius: 10px; max-width: 72em; margin: 15px 15%;"> 
    <h1 align="center">Research Progress <br> Managment System</h1>
    <h3 align="center" >Add New Research</h3>
  </div>


  <div class="container"> 
	<form action="includes/addresearch.php" method="post" enctype="multipart/form-data">
	<br><br>
					<center>
          <label for="Status" style="font-weight: bold; color: #2c3e55;">Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

          <input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="text" name="status" class="form-control" id="Status" placeholder="Status">
					</center>
<br>
					<center>
          <label for="Research title" style="font-weight: bold; color: #2c3e55;">Research title:&nbsp;&nbsp;&nbsp;</label>
          
          <input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="text" name='title' class="form-control" id="Research title" placeholder="Research title">
					</center>
<br>
          <center>
          <label for="Start date" style="font-weight: bold; color: #2c3e55;">Start date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

          <input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="date" name='startdate' class="form-control" id="Start date" placeholder="Start date">
					</center>
<br>
          <center>
          <label for="End date" style="font-weight: bold; color: #2c3e55;">End date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

          <input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="date" name='enddate' class="form-control" id="End date" placeholder="Start date">
					</center>
<br>
          <center>
          <label for="fileToUpload" style="font-weight: bold; color: #2c3e55;">Document to upload:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

          <input  type="file" name="fileToUpload" id="fileToUpload">

					</center>
<br>


					<center>
          <input type="submit" class="button" value="Submit"><br>
					</center>
<br>

	</form>
</div>

<br>
<br>
<br>
<br>
<!-- $_SESSION['employeeid']; -->

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



<footer>
  <p>Developed by: Ar_Vamshi & Amulya</p>
</footer>
</body>
</html>