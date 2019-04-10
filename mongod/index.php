<html>
<head>
	<style type="text/css">
		body
		{
			background-image: url(images/bodybg.jpg);
			background-repeat: no-repeat;
			background-size: 100% 100%;
			opacity: 1.0;
		}
		body::after
		{
			opacity: 0.5;	
		}
		.txt
		{
			width:200px;
			height:25px;
			padding: 10px;
			color:red;
			font-family: ariel;
			border: 2px solid black;
			border-radius: 6px;
			margin-top: 5px;
		}
		.submit
		{
			
			width: 100px;
			color: white;
			font-family: ariel;
			height: 35px;
			background-color: #2547F2;
			margin-top: 10px;
			border-radius: 6px;
			border: none;
		}
		.submit:hover
		{
			background-color: #D22EAC;
			font-size: 20px;
			color: white;
			width: 130px;
			height: 45px;

		}
		.txt
		{
			border: none;
			border-radius: 6px;
		}
		h2
		{

			color: red;
		}
		.container
		{
			margin-top: 150px;
		}
		.form
		{
			
			background-color:#8BC9DC;
			width: 400px;
			opacity: 0.9;
			border: 1px solid #3925F2;
			border-radius: 15px 50px 30px;
			color: black; 
			box-shadow: 4px 4px #3322CA;
		}
		.log
		{
			color: red;
		}
		.log:hover
		{
			color: white;
		}
	</style>
</head>
<body>
	<?php
	include"head.php";
	?>

	<div class="container">
			<center>
			<div class="form">
				<h2 >Sign-Up</h2>
				<hr>
				<form action="user/collectdata.php" method="POST">
					<input class="txt" type="text" name="name" placeholder="Enter name" required>
					<br>
					<input class="txt" type="text" name="mobile" placeholder="Enter mobile number" required>
					<br>

					<input class="txt" type="email" name="email" placeholder="Enter EMAIL" required>
					<br>
					<input class="txt" type="password" name="password" placeholder="Enter password" required>
					<br>
					<input type="submit" class="submit" name="click" value="Sign Up">
				<br><a href="login.php" class="log">Already a User?Log-in Now.</a>
				</form>

			</div>
	</div>
</body>
</html>