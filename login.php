<?php session_start(); ?>
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
			<div id="form">
				<div class="box1">
					<img src="csa.png" alt="logo"> 
					<img src="perps.png" alt="logo"> 
					<img src="smcl1.png" alt="logo">
					
				</div>
				<form action="login.php" method="post" class="box2">
					<input type="text" id="text5" name="un" placeholder="Username" required> <br> <br>
					<input type="password" id="text5" name="pass" placeholder="Password" required> <br> <br>
					<input type="submit" name="submit-charot">
					
					<p class="link">Don't have an account? <a href="registration.php" style="color:rgb(89, 4, 4);">Register now.</a></p>
				</form>	

				<div class="box3">
					
					<img src="guardian1.jpg" alt="logo"> 		
					<img src="pup.png" alt="logo"> 
					<img src="lcc.png" alt="logo"> 
				</div>
			</div>
			
<?php
	if(isset($_POST["sbtn"])){
		include("config.php");
		$inser2="insert into register1(username1,password1) values('".$_POST['un']."','".$_POST['pass']."')";
		mysqli_query($conn,$inser2);
		echo ""; 
	}
	if(isset($_POST["submit-charot"])){
		include("config.php");
		$result = mysqli_query($conn,"SELECT * FROM `registration1` WHERE `username2` = '".$_POST["un"]."' AND `password2` = '".$_POST["pass"]."'");
		if(mysqli_num_rows($result)){
			$data_mo = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if($data_mo["user_type"] == "student"){
				$_SESSION["student"] = 1;
				header("location: http://localhost:8080/epermit/student.php");
			}else{
				$_SESSION["admin"] = 1;
				header("location: http://localhost:8080/epermit/index.php");
			}
		}
	}
?>

			<div id="rightside">
				<div>
						
				</div>
				
				
			</div>
		</div>
	
</body>
</html>