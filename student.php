<html !DOCTYPE>
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
		
	<div class="form1">

		<div class="form_container">
		<form action="index.php" method="post" class="form_item">
		
		<br><a href="login.php"><input style="font-family:Times New Roman; background-color: rgb(89, 4, 4); color:white; margin-top:250px" type="button" name="btn3" value="Logout"></a><br>
			</form>
			
			<table id="stu_table" >
			 <tr>
				   <th>Semester</th>
				   <th>A.Y</th>
				   <th>Full Name</th>
				   <th>Course</th>
				   <th>Year Level</th>
				   <th>School</th>
				   <th>Grant</th>
				 
				   
			 </tr>
			 </div>
		
	</div>
			 <?php 
			  include("config.php");
			  $select2="select * from permit_tb";
			  $qr2=mysqli_query($conn,$select2);
			  while($row2=mysqli_fetch_array($qr2)){
				 ?>
				 <tr>
					 <form action="index.php" method="post">
						<td><input type="text" value="<?php echo $row2['sem1']; ?>" name="sem" maxlength="6" size="6"></td>
						<td><input type="text" value="<?php echo $row2['ay1']; ?>" name="ay" maxlength="6" size="6"></td>
						<td><input type="text" value="<?php echo $row2['fname']; ?>" name="fn" maxlength="15" size="15"></td>
						<td><input type="text" value="<?php echo $row2['course1']; ?>" name="c1" maxlength="6" size="6"></td>
						<td><input type="text" value="<?php echo $row2['yearlevel1']; ?>" name="yr" maxlength="6" size="6"></td>
						<td><input type="text" value="<?php echo $row2['school1']; ?>" name="schl" maxlength="6" size="6"></td>
						<td><input type="text" value="<?php echo $row2['grant1']; ?>" name="gra1" maxlength="6" size="6"></td>
						
					</form>
				 </tr>
			<?php 
			  
			  }
			 if(isset($_POST["delbtn"])){
			   include("config.php");
			   $delte2="delete from permit_tb where id='".$_POST['delt3']."'";
			   mysqli_query($conn,$delte2);
			  
			 }
			  if(isset($_POST["upbtn"])){
			   include("config.php");
			   $delte2="update permit_tb set sem1='".$_POST['sem']."',ay1='".$_POST['ay']."',fname='".$_POST['fn']."',course1='".$_POST['c1']."',yearlevel1='".$_POST['yr']."',school1='".$_POST['schl']."',grant1='".$_POST['gra1']."' where id='".$_POST['delt3']."'";
			   mysqli_query($conn,$delte2);
			  
			 }
			 ?>
			
		
</table>
</body>
</html>