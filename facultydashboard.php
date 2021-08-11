<?php
error_reporting(0);
if(!isset($_COOKIE['login']))
{
	header("location:flogin.php");
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
<title>Welcome To Faculty Dashboard</title>
<link href="style.css" rel="stylesheet" type="text/css" />
  <link href="assets/img/codelogo.jpg" rel="icon">
<style >
	body{
	font-size:20px; 
	font-family:'Trebuchet MS';
    width: 100%;
    background: silver;
}
</style>

</head>
<body>
	<div align="center">
    <br>
<br>
<fieldset style="
  font-size:20px;
  padding:40px;
  width:600px;
  line-height:1.2;
  /*background:silver;*/

    border:4px solid red;
    border-radius:30px;">
<img src="logo.png"  width=200px />
<br>

    	<span class="head" >VARDHAMAN COLLEGE OF ENGINEERING</span>
    <br>
<br>
<span class="Subhead">Welcome <?php echo $_COOKIE['login']; ?> to dashboard</span>


	<?php

$con = mysqli_connect('localhost','root','');
		if(!$con)
			echo "Connection is not created";
		$sel = mysqli_select_db($con,'pat');
		if(!$sel)
			echo "Database is not selected";

 
 $u = $_COOKIE['login'];
 $qry2   = "SELECT * FROM student ";
 $ins = mysqli_query($con,$qry2);
 $row=mysqli_fetch_array($ins);

 echo "<br>";


?> 

<br>


<table border=2>
            <tr>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Roll Number</th>
                <th>Branch</th>
                <th>Passed of Year</th>

                <th>CodeChef Username :</th>
	
				<th>CodeChef Rating :</th>
						
				<th>CodeChef Highest Rating :</th>
								
				<th>CodeChef Global Rank :</th>
							
				<th>CodeChef Country Rank :</th>
			
                <th>CodeForces Username :</th>
    
                <th>CodeForces Rating :</th>
                        
                <!-- <th>Codeforces Highest Rating :</th> -->
                                
                <th>Codeforces Global Rank :</th>
                            
                <!-- <th>Codeforces Country Rank :</th> -->
            

            </tr>
            
            <?php    
                while($rows=$ins->fetch_assoc())
                {
             ?>
            <tr>
                
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['rollno'] ;?></td>
                <td><?php echo $rows['branch'] ;?></td>
                <td><?php echo $rows['passedyear'] ;?></td>
                <?php $user = $rows['codechef'] ;?>
                
                <?php 
                	$url = "https://competitive-coding-api.herokuapp.com/api/codechef/".$user;
					$json = file_get_contents($url);
					$json = json_decode($json);
                ?>
                <td><?php echo $rows['codechef'];?></td>
                <td><?php echo $json->rating;?></td>
                <td><?php echo $json->highest_rating;?></td>
                <td><?php echo $json->global_rank;?></td>
                <td><?php echo $json->country_rank;?></td>

                <?php $user1 = $rows['codeforces'] ;?>
                       
                <?php 
                    $url1 = "https://competitive-coding-api.herokuapp.com/api/codeforces/".$user1;
                    $json1 = file_get_contents($url1);
                    $json1 = json_decode($json1);
                ?>
                <td><?php echo $rows['codeforces'] ;?></td>
                <td><?php echo $json1->rating;?></td>
                <!-- <td><?php echo $json1->max_rating;?></td> -->
                <td><?php echo $json1->rank;?></td>
                <!-- <td><?php echo $json1->max_rank;?></td> -->
            </tr>
            <?php
                }
             ?>

        </table>
       
       <br>
<input type="button" onClick="window.location='logout.php'" value="Logout" />
</fieldset>
</form>
</div>


</body>
</html>