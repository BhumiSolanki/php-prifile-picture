<?php
	$con = mysqli_connect("localhost","root","","registration");
	if(isset($_POST['txtnm']))
	{
		$nm = $_POST['txtnm'];
		$pwd = $_POST['txtpwd'];
		$sql = "INSERT INTO `reg_table`(`user_name`,`password`) VALUES('$nm','$pwd')";
		mysqli_query($con,$sql);
		header("location:home.php");
    }		
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
	</head>
		<body>
		    <h3><center><u>LOGIN FORM</center></u></h3>
			<form action="login.php" method="POST">
				<div class="container mt-3">
					<input type="text" name="txtnm" class="form-control" placeholder="Enter username" required></br>
					<input type="password" name="txtpwd" class="form-control" placeholder="Enter password" required></br>
					<input type="submit" name="btn save" class="btn btn-primary w-100" value="Login">
					<center><u><font color="blue">click here to forget password</u></center>
				</div>
			</form>
		<?php
				$sql = "SELECT * FROM `reg_table`";
				$res = mysqli_query($con,$sql);
				$i=1;
				while($row=mysqli_fetch_assoc($res))
				{
				?>
				<?php
				     $i++;
			    } ?>
		</body>
</html>