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
<title>TEAM-18 REPORT | Rohit</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div align="center">
    <br>
<br>
<img src="logo.png" />
<br>

    	<span class="head">VARDHAMAN COLLEGE OF ENGINEERING</span>
    <br>
<br>
<span class="Subhead">Welcome <?php echo $_COOKIE['login'];?></span>
<br>
<br>

<form method="post" action="">
<input type="text" name="api_key" value="<?php echo md5('sami');?>" required size="40" style="text-align:center;" readonly />
<br>
<br>
<input type="text" placeholder="Enter Message" name="message" required size="50" style="text-align:center;" value="<?php echo $filedata;?>" />
<br>
<br>
<input type="submit" value="UPDATE" name="update"/>
<br>
<br>
<input type="button" onClick="window.location='logout.php'" value="Logout" />
</form>
</div>
</body>
</html>