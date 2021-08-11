<?php
  // echo "hello";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TEAM 18 GRADE REPORT |Rohit</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script>
			function GEEKFORGEEKS() {
				var name =
					document.forms["RegForm"]["Name"];
				var email =
					document.forms["RegForm"]["EMail"];
				var rollno =
					document.forms["RegForm"]["RollNumber"];
				var branch=
					document.forms["RegForm"]["Branch"];
				
				var codechef=
					document.forms["RegForm"]["CodeChef"];

				var codeforces=
					document.forms["RegForm"]["CodeForces"];
				
				var password =
					document.forms["RegForm"]["Password"];
				
				var passyear=
					document.forms["RegForm"]["passingyear"];

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

				if (codechef.value == "") {
					window.alert("Please enter your CodeChef Username.");
					codechef.focus();
					return false;
				}

				if (codeforces.value == "") {
					window.alert("Please enter your CodeForces Username.");
					codeforces.focus();
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

				if (passyear.selectedIndex < 1) {
					alert("Please enter your passing year.");
					passyear.focus();
					return false;
				}


				// if((document.getElementById("stu").checked == false) && (document.getElementById("fal").checked == false )){
				// 	alert("Please select the designation.");
				// 	role.focus();
				// 	return false;	
				// }


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
  background: MediumTurquoise;

		}
			a{
				text-decoration: none;
				color:red;
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
<span style = "font-size:25px" class="Subhead"> <b>Registration Panel for student</b>
<br>
<br>

<form name="RegForm" action="insertuser.php"	onsubmit="return GEEKFORGEEKS()" method="post" >
			<center><fieldset style="
  font-size:20px;
  padding:40px;
  width:600px;
  line-height:1.2;
  background:MediumTurquoise;

    border:2px solid red;
    border-radius:25px;">
			

			<p >Name: <input type="text"	size="35" name="Name" placeholder="Enter your Name"></p>
			<br />
			<p>E-mail Address: <input type="email"
							size="35" name="EMail" placeholder="Enter your Vardhaman E-mail"></p>
			<br />
			<p>Roll Number: <input type="text"
							size="35" name="RollNumber" placeholder="Enter your Roll Number">
			</p>
			<br />

			<p>
				Branch:
				<select style = "font-size:20px; font-family:'Trebuchet MS';" type="text" value="" name="Branch" size="">
					<option>Select Your Branch</option>
					<option>Computer Science & Engineering</option>
					<option>Electronics and Communication Engineering </option>
					<option>Electronics and Electrical Engineering </option>
					<option>Information and Technology</option>
					<option>Mechanical Engineering </option>
					<option>Civil Engineering </option>
					
					
					
				</select>
			</p>

			<br />
			<p>CodeChef Username: <input type="text"
							size="35" name="CodeChef" placeholder="Enter your CodeChef Username"></p>
			<br />
			<p>CodeForces Username: <input type="text"
							size="35" name="CodeForces" placeholder="Enter your CodeForces Username"></p>
			<br />

			<p>Password: <input type="password"
						size="35" name="Password" placeholder="Create Password"></p>
			<br />
			

			<p>
				Passed out Year:
				<select type="text" value="" name="passingyear" style = "font-size:20px; font-family:'Trebuchet MS';" >
					<option>Enter the passing year</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
					<option>2021</option>
					<option>2022</option>
					<option>2023</option>
					<option>2024</option>
					
					
				</select>
			</p>
			<br>

			<p >
				Designation : <input type="radio" id="stu" name="role" value="Student" required="required">
											  <label for="html">Student</label>
							  <input type="radio" id="fac" name="role" value="Faculty"  required="required">
							  <label for="css">Faculty</label><br>				
			</p>

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