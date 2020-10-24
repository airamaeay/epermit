<html>
    <head>
    </head>
    <body>
        <form action="index2.php" method="post">
            <label>First Name</label><input type="text" name="fn"><br>
            <label>Last Name</label><input type="text" name="ln"><br>
            <label>Middle Name</label><input type="text" name="mn"><br>
            <input type="submit" name="sbtn" value="Save">
        </form>
        <?php
            if(isset($_POST["sbtn"])) {
                include("config.php");
                $inser2="insert into table_info(fname,lname,mname)values('".$_POST['fn']."','".$_POST['ln']."','".$_POST['mn']."')";
                mysqli_query($conn,$inser2);
                echo "<br>Saved Data";
            }
        ?>
       
    </body>
</html>