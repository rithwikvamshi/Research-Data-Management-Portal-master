
<!DOCTYPE html>
<html>
<head>
	<title>Facultylogin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		h3{
			color: green;
		}
	</style>

</head>
<body>

<div class="topnav">
		<a href="index.php" class="navbar-brand">Home</a>
	</div>
	

<div class="container" style="background: #eeeeee; padding: 3% 0; border-radius: 10px; max-width: 72em; margin: 15px 15%;"> 
		<h1 align="center">Research Progress <br> Managment System</h1>
		<h3 align="center" >Sign-Up</h3>
</div>

<div class="container"> 
<form class="form-horizontal" name="reg" action ="includes/signup_inc.php" method = "POST">
	<br><br>
					<center>
          <label for="Name" style="font-weight: bold; color: #2c3e55;">Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="text" name ="name" id="Name" placeholder="Name">

					</center>
<br>
					<center>

          <label style="font-weight: bold; color: #2c3e55;" for="inputEmail3" >Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">

					</center>
<br>
          <center>
          <label for="inputEmail3" style="font-weight: bold; color: #2c3e55;">Username :&nbsp; </label>
          <input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="text" name="username"class="form-control" id="Username" placeholder="Username">
					</center>
<br>
          <center>
          <label for="inputPassword3" style="font-weight: bold; color: #2c3e55;">Password : &nbsp;</label>
          <input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
			
					</center>
<br>


					<center>
					<input  type="submit" name="submit" value="Submit"  class="button"><br>
					</center>
<br>

	</form>
</div>



<footer>
  <p>Developed by: Ar_Vamshi & Abhinav</p>
</footer>
</body>
</html>

