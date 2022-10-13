<?php
	$con = mysqli_connect("localhost","root","","registration");
	if(isset($_POST['txtnm']))
	{
		$nm = $_POST['txtnm'];
		$co = $_POST['txtno'];
		$em = $_POST['txtem'];
		$pwd = $_POST['txtpwd'];
		$sql = "INSERT INTO `reg_table2`(`name`,`contact`,`email`,`password`) VALUES('$nm','$co','$em','$pwd')";
		mysqli_query($con,$sql);
		header("location:login.php");
    }		
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
	</head>
		<body>
		    <h3><u><center>REGISTRASITION FORM</center></u></h3>
			<form action="reg.php" method="POST">
				<div class="container mt-3">
					<input type="text" name="txtnm" class="form-control" placeholder="Enter name" required></br>
					<input type="text" name="txtno" class="form-control" placeholder="Enter contact no" required></br>
					<input type="email" name="txtem" class="form-control" placeholder="Enter email" required></br>
					<input type="password" name="txtpwd" class="form-control" placeholder="Enter password" required></br>
					<input type="submit" name="btn save" class="btn btn-success w-100" value="register">
				</div>
			</form>
		<?php
				$sql = "SELECT * FROM `reg_table2`";
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