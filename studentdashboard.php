<?php
error_reporting(0);
if(!isset($_COOKIE['login']))
{
	header("location:index.php");
}
if(!empty($_POST['update']))
{
		$key = md5('sami');
		$message = $_POST['message'];
		$file = fopen(md5('sami').".txt", 'w'); 
		fwrite($file, $message);
}

$filename = md5('sami').".txt"; 
$filer = fopen( $filename, 'r' ); 
$size = filesize( $filename ); 
$filedata = fread( $filer, $size ); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome To Dashboard</title>
<link href="style.css" rel="stylesheet" type="text/css" />
  <link href="assets/img/codelogo.jpg" rel="icon">
<style >
	body{
	font-size:20px; 
	font-family:'Trebuchet MS';
}
</style>

</head>
<body>
	<div align="center">
    <br>
<br>
<img src="logo.png"  width=200px />
<br>

    	<span class="head" >VARDHAMAN COLLEGE OF ENGINEERING</span>
    <br>
<br>
<span class="Subhead">Welcome <?php echo $_COOKIE['login']; ?> to dashboard</span>
<fieldset style="
  font-size:20px;
  padding:40px;
  width:600px;
  line-height:1.2;
  /*background:silver;*/

    border:2px solid red;
    border-radius:25px;">

	<?php

$con = mysqli_connect('localhost','root','');
		if(!$con)
			echo "Connection is not created";
		$sel = mysqli_select_db($con,'pat');
		if(!$sel)
			echo "Database is not selected";

 
 $u = $_COOKIE['login'];
 $qry2   = "SELECT * FROM student WHERE email='$u'";
 $ins = mysqli_query($con,$qry2);
 $row=mysqli_fetch_array($ins);

 echo "<br>";
 // echo "<br>";
 // echo "<br>";
 // echo $row['name']; echo "<br>";
 // echo $row['email']; echo "<br>";
 // echo $row['rollno']; echo "<br>";
 // echo $row['branch']; echo "<br>";
 // echo $row['codechef']; echo "<br>";
 // echo $row['codeforces']; echo "<br>";
 // echo $row['passedyear']; echo "<br>";
 echo "Student Detail:<br><br>";
 echo "<table border=2>
	<tr>
		<td>Name :</td>
		<td>$row[0]</td>
	</tr>
	<tr>
		<td>E-Mail :</td>
		<td>$row[1]</td>
	</tr>
	<tr>
		<td>Roll Number :</td>
		<td>$row[2]</td>
	</tr>
	<tr>
		<td>Branch :</td>
		<td>$row[3]</td>
	</tr>
	<tr>
		<td>Passing Year :</td>
		<td>$row[6]</td>
	</tr>
	
</table><br><br>";



$url = "https://competitive-coding-api.herokuapp.com/api/codechef/".$row['codechef'];
$json = file_get_contents($url);
$json = json_decode($json);

echo "CodeChef Details: <br><br>";
echo "<table border=2>
	<tr>
		<td>CodeChef Username :</td>
		<td>".$row['codechef']."</td>
	</tr>
	<tr>
		<td>CodeChef Rating :</td>
		<td>".$json->rating."</td>
	</tr>
	<tr>
		<td>CodeChef Highest Rating :</td>
		<td>".$json->highest_rating."</td>
	</tr>
	<tr>
		<td>CodeChef Global Rank :</td>
		<td>".$json->global_rank."</td>
	</tr>
	<tr>
		<td>CodeChef Country Rank :</td>
		<td>".$json->country_rank."</td>
	</tr>
	
</table><br><br>";


$url1 = "https://competitive-coding-api.herokuapp.com/api/codeforces/".$row['codeforces']; 
$json1 = file_get_contents($url1);
$json1 = json_decode($json1);

echo "CodeForces Details:<br><br>";
echo "<table border=2>
	<tr>
		<td>CodeForces Username :</td>
		<td>".$row['codeforces']."</td>
	</tr>
	<tr>
		<td>CodeForces Rating :</td>
		<td>".$json1->rating."</td>
	</tr>
	<tr>
		<td>CodeForces Highest Rating :</td>
		<td>".$json1->max_rating."</td>
	</tr>
	<tr>
		<td>CodeForces Rank :</td>
		<td>".$json1->rank."</td>
	</tr>
	<tr>
		<td>CodeForces Country Rank :</td>
		<td>".$json1->max_rank."</td>
	</tr>
	
</table><br><br> ";

?> 
</fieldset>

<!-- <form method="post" action="">
<input type="text" name="api_key" value="<?php //echo md5('sami');?>" required size="40" style="text-align:center;" readonly />
<br>
<br>
<input type="text" placeholder="Enter Message" name="message" required size="50" style="text-align:center;" value="<?php //echo $filedata;?>" />
<br>
<br>
<input type="submit" value="UPDATE" name="update"/>
<br> -->
<br>
<input type="button" onClick="window.location='logout.php'" value="Logout" />
</form>
</div>




</body>
</html>