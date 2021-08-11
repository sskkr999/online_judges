<?php
  // echo "hello";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Faculty signup</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script>
			function GFG() {
				var name =
					document.forms["RegForm"]["fName"];
				var email =
					document.forms["RegForm"]["fEMail"];
				var rollno =
					document.forms["RegForm"]["fRollNumber"];
				var branch=
					document.forms["RegForm"]["fBranch"];
				var password =
					document.forms["RegForm"]["fPassword"];
				
				

				// var role=
				// 	document.forms["RegForm"]["role"];
				

				if (name.value == "") {
					window.alert("Please enter your name.");
					name.focus();
					return false;
				}

				if (rollno.value == "") {
					window.alert("Please enter your roll number.");
					rollno.focus();
					return false;
				}

				if (email.value == "") {
					window.alert("Please enter a valid e-mail address.");
					email.focus();
					return false;
				}

				

				if (password.value == "") {
					window.alert("Please enter your password");
					password.focus();
					return false;
				}

				if (branch.selectedIndex < 1) {
					alert("Please enter your branch.");
					branch.focus();
					return false;
				}

				return true;
			}
		</script>

		<style>
		body{
			/*background-image: url("assets/img/hero-bg.jpg");
			min-height: 380px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;*/
  background: SteelBlue;

		}
			a{
				text-decoration: none;
				color:yellow;
			}
			div {
				box-sizing: border-box;
				width: 100%;
				border: 4px solid black;
				float: left;
				align-content: center;
				align-items: center;

			}

			form {
				margin: 0 auto;
				
				  margin-right: 30px;

				width: 100%;
			}
		</style>

		<link href="assets/img/aw.jpg" rel="icon">
  		<link href="assets/img/aw.jpg" rel="apple-touch-icon">
</head>


<!-- Body -->

<body>

	<h3 style = "font-size:20px; font-family:'Trebuchet MS';"><a href="login.php">  <span style="border: solid;border-color: black;">&nbsp;Back&nbsp;</span></a> <a href="index.php"> <span style="border:solid;border-color: black;">&nbsp; Home Page
				&nbsp;</span></a></h3>

	<div align="center">

    <br>
<br>
<img height=100px width=150px src="logo.png" />
<br>

    	<span style = "font-size:30px" class="head">VARDHAMAN COLLEGE OF ENGINEERING</span>
    <br>
<br>
<span style = "font-size:25px" class="Subhead"> <b>Registration  Panel for faculty</b>
<br>
<br>

<form name="RegForm" action="insertfaculty.php"	onsubmit="return GFG()" method="post" >
			<center><fieldset style="
  font-size:20px;
  padding:40px;
  width:600px;
  line-height:1.2;
  background:SteelBlue;

    border:4px solid red;
    border-radius:30px;">
			

			<p >Name: <input type="text"	size="35" name="fName" placeholder="Enter your Name"></p>
			<br />
			<p>E-mail Address: <input type="email"
							size="35" name="fEMail" placeholder="Enter your Vardhaman E-mail"></p>
			<br />
			<p>Faculty ID: <input type="text"	size="35" name="fRollNumber" placeholder="Enter your ID">
			</p>
			<br />

			<p>
				Department:
				<select style = "font-size:20px; font-family:'Trebuchet MS';" type="text" value="" name="fBranch" size="">
					<option>Select Your Department</option>
					<option>Computer Science & Engineering</option>
					<option>Electronics and Communication Engineering </option>
					<option>Electronics and Electrical Engineering </option>
					<option>Information and Technology</option>
					<option>Mechanical Engineering </option>
					<option>Civil Engineering </option>
					
					
					
				</select>
			</p>

			<br />
			

			<p>Password: <input type="password"
						size="35" name="fPassword" placeholder="Create Password"></p>
			<br />
			<br />
			
				<input type="submit"
					value="Submit" name="Submit" />
				<input type="reset"
					value="Reset" name="Reset" />
			</p>
		</fieldset></center>
		</form></span>
	
	</center>
</div>
</body>
</html>