<?php session_start(); ?>
<?php
 if(isset($_SESSION["admin"])){header("location:index.php");}
 if(isset($_SESSION["student"])){header("location:student.php");}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<link rel="stylesheet" href="login.css"/>
</head>
<body>
	
		<div id="header">		
			<div class="header_container">
				<img src="logo3.png" alt="logo" style= "margin-left:100px;"> 
				<p style="font-size:40px; margin-left:270px; text-align: center;">
				ISKOLAR NG BINAN <br>
				ENROLLMENT PERMIT</p>
				<img src="logo4.png" alt="logo" style= "margin-left:280px;" > 
			</div>
		</div>
		 
	
		<div id="container">
			<div id="form2">
				
				<form action="registration.php" method="post">
					<input type="text" class="text2" name="fn2" placeholder="Full Name" required> <br> <br>
					<input type="text" class="text2" name="yl2" placeholder="Year Level" required> <br> <br>
					<input type="text" class="text2" name="c2" placeholder="Course" required> <br> <br>
					<input type="text" class="text2" name="sch2" placeholder="School" required> <br> <br>
					<input type="text" class="text2" name="un2" placeholder="Username" required> <br> <br>
					<input type="password" class="text2" name="pass2" placeholder="Password" required> <br> <br>
					<select name="user_type" class="text2">
						<option value="admin">admin</option>
						<option value="student">student</option>
					</select>
					<input type="submit" id="btn" name="sbtn1" value="REGISTER" >  
					
					<p class="link">Already have an account? <a href="login.php" style="color:rgb(89, 4, 4);">Log in here.</a></p>
				</form>		
			</div>
			
<?php
if(isset($_POST["sbtn1"])){
	include("config.php");
	$inser2="insert into registration1(fullname,yearlevel2,course2,school2,username2,password2,user_type) values('".$_POST['fn2']."','".$_POST['c2']."','".$_POST['yl2']."','".$_POST['sch2']."','".$_POST['un2']."','".$_POST['pass2']."','".$_POST['user_type']."')";
	mysqli_query($conn,$inser2);
	echo "<br>Saved Data";
}
?>

			<div id="rightside">
				<div>
						
				</div>
				
				
			</div>
		</div>
	
</body>
</html>