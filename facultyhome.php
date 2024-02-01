
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
		<a href="facultyhome.php" >Faculty Home</a>
		<a style="float: right;"><form method='post' action='<?php echo $_SERVER['PHP_SELF'] ?>'><button name='logout' style="border: none; background: none; color: white; font-size:15px">Logout</button></form></a>
	</div>
	

<div class="container" style="background: #eeeeee; padding: 3% 0; border-radius: 10px; max-width: 72em; margin: 15px 15%;"> 
		<h1 align="center">Research Progress <br> Managment System</h1>
		<h3 align="center" >Faculty Home</h3>
</div>

<div class="container">
<br>
<?php
include_once 'includes/dbh_inc.php';
session_start();


$sql ="select * from employee where employeeid ='".$_SESSION['employeeid']."' ";
$result= $conn->query($sql);


echo '<center>';
echo '<h2>';
while($row = $result->fetch_assoc()){
	echo 'Welcome '.$row["name"];
}

echo '</center>';
echo '</h2>';
if(isset($_POST['logout'])){
	unset($_SESSION['employeeid']);
	header('Location:facultylogin.php');
}
?>
<br><br><br>
	<div class="container">
		<a  class="button" style="margin:70px" href="editpersonal.php" >Update Personal Details</a>
		<a  class="button" style="margin:74px" href="addnewresearch.php" >Add New Research</a>
		<a  class="button" style="margin:70px" href="research.php" >Present Research Details</a>
	</div>
</div>



<footer>
  <p>Developed by: Ar_Vamshi & Abhinav</p>
</footer>
</body>
</html>