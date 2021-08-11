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
		$name = $_POST['Name'];
		$email = $_POST['EMail'];
		$rollno = $_POST['RollNumber'];
		$branch = $_POST['Branch'];
		$codechef = $_POST['CodeChef'];
		$codeforces = $_POST['CodeForces'];
		$passedyear = $_POST['passingyear'];
		$password = $_POST['Password'];
	



		$qry2 = "INSERT INTO student(name,email,rollno,branch,codechef,codeforces,passedyear,password) values('$name','$email','$rollno','$branch','$codechef','$codeforces','$passedyear','$password')";
		$ins = mysqli_query($con,$qry2);
		if(!$ins)
			echo "<br>Login Data not inserted successfully";
		else
			echo "<br>Login Data inserted successfully";
		echo "<br><a href='login.php' > Back To Home";
		mysqli_close($con);


	 ?>

</body>
</html>