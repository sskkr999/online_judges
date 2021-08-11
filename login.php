<?php
$con = mysqli_connect('localhost','root','');
		if(!$con)
			echo "Connection is not created";
		$sel = mysqli_select_db($con,'pat');
		if(!$sel)
			echo "Database is not selected";

error_reporting(0);
if(isset($_COOKIE['login']))
{
	header("location:studentdashboard.php");
}
if($_POST['login'] == "Login")
{


	


	$u = $_POST['username'];
	$p = $_POST['password'];

	$qry2   = "SELECT * FROM student WHERE email='$u'";
	$ins = mysqli_query($con,$qry2);
	$row=mysqli_fetch_array($ins);

	
	
	if($u == $row['email'] && $p == $row['password']   )
	{
		setcookie("login",$u,time()+3600);
		header("location:studentdashboard.php");
	}
	else
	{
		?>
        <script type="text/javascript">
		alert("Incorrect username or password");
		</script>
        <?php } 
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Portal </title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>		a{
				text-decoration: none;
				color: red;
				font-size: 20px;
				font-family:'Trebuchet MS';
			}

			body{
				background: SkyBlue;
			}

			

</style>

<link href="assets/img/aw.jpg" rel="icon">
  <link href="assets/img/aw.jpg" rel="apple-touch-icon">
</head>
<body>
		<!-- <fieldset> -->
				
	<h3> <a href="index.php">  <span style="border:solid;border-color: black;"> &nbsp;Home Page &nbsp;</span></a></h3>
	<center><fieldset style="

  font-size:12px;
  padding:40px;
  width:500px;
  line-height:1.2;
  background:SkyBlue;
    border:2px solid red;
    border-radius:25px;
  "
	>
	<div align="center">
    <br>
<br>
<img src="logo.png" />
<br>

    	<span class="head">VARDHAMAN COLLEGE OF ENGINEERING</span>
    <br>
<br>
<span class="Subhead"> Student Login </span>
<br>
<br>

<form method="post" action="">

<input type="text" placeholder="Enter Username" name="username" required size="25" />
<br>
<br>
<input type="password" placeholder="Enter Password" name="password" required size="25" />
<br>
<br>
<input type="submit" value="Login" name="login"/> &nbsp;	<a href="signup.php" > Sign up </a>
	</fieldset></center>
<!-- </fieldset> -->
</form>
</div>
</body>
</html>