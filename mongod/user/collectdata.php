<?php
include"head.php";
?>
<style type="text/css">
	form
	{
		border: red;
		background-color: white;
		margin-top: 100px;
		font-family: ariel;
		border-radius: 15px 50px 30px;
	}
	.submit
	{
		background-image: linear-gradient(#082E3F,#2194C6);
		color: white;
		width: 100px;
		margin-bottom: 10px; 
		border-radius:  15px 50px 30px;
	}
	.submit:hover
	{
		
		background-image: linear-gradient(#2194C6,#082E3F);
	}
	hr
	{
		border-top: 1px solid red;
	}
</style>
<body style="background-image: linear-gradient(white,#89BAD0)">
<div class="container">
<div class="form-data">
	<center>
		<form method="POST">
			<h3>Update profile</h3><hr>
			<table style="border: none;">
				<tbody>
					<tr>
						<td>
							Profile picture
						</td>
						<td><input type="file" name="img" placeholder="Select Image">
						</td>
						<tr>
							<td>
								Sports:
							</td>
							<td>
								<select name="Select" form="carform">
  									<option value="Cricket">Cricket</option>
  									<option value="Football">Football</option>
 								 	<option value="NBA">NBA</option>
  									<option value="kabaddi">kabaddi</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								Mobile Number:
							</td>
							<td>
								<input 	 type="text" placeholder="+91 9999999999"/>
							</td>
						</tr>
						<tr>
							<td>
									
	<script type= "text/javascript" src = "countries.js"></script>
	Select Country:  </td><td> <select id="country" name ="country"></select> </td></tr><tr><td>
	Select State:</td> <td><select name ="state" id ="state"></select>  </td></tr> 
	<script language="javascript">
	populateCountries("country", "state"); 
	populateCountries("country2");
	populateCountries("country2");
</script>
</td>
						</tr>
				</tbody>
			</table>
			<input type="Submit" class="submit" name="submit" value="Update">
		</form>
	</center>
</div>
</div>
</body>