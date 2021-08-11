<!DOCTYPE html>
<html>
<body>
	<?php 
		$con = mysqli_connect('localhost','root','');
		if(!$con)
			echo "Connection is not created";
		$sel = mysqli_select_db($con,'pat');
		if(!$sel)
			echo "Database is not selected";
		$name = $_POST['fName'];
		$email = $_POST['fEMail'];
		$rollno = $_POST['fRollNumber'];
		$branch = $_POST['fBranch'];
		$password = $_POST['fPassword'];
		
		$qry2 = "INSERT INTO faculty(fname,femail,frollno,fdept,fpassword) values('$name','$email','$rollno','$branch','$password')";
		$ins = mysqli_query($con,$qry2);
		if(!$ins)
			echo "<br>Login Data not inserted successfully";
		else
			echo "<br>Login Data inserted successfully";
		echo "<br><a href='flogin.php' > Back To Home";
		mysqli_close($con);


	 ?>

</body>
</html>