<?php
	$gender="";
	if(isset($_GET['error'])){
		echo $_GET['error'];
		
	}
?>
<html>
	<form method="post" action="RegCheck.php">
		<fieldset>
			<legend>REGISTRATION FORM</legend>
			<table border="0">
			<tr>
				<td> First Name :</td>
				<td><input type="text" name="firstName" /><br/></td>
			</tr>
			<tr>
				<td> Last Name :</td>
				<td><input type="text" name="secondName" /><br/></td>
			</tr>
			<tr>
				<td>Date Of Birth :</td>
				<td><input type="date" name="dob" /><br/></td>
			</tr>
			<tr>
				<td> Gender :</td>
				<td>
					<input type="radio" name="gender" value="Male" <?php if("Male" == $gender){ echo "checked";} ?> />Male<br/>
					<input type="radio" name="gender" value="Female" <?php if("Male" == $gender){ echo "checked";} ?> />Female<br/>
					<input type="radio" name="gender" value="Others" <?php if("Male" == $gender){ echo "checked";} ?> />Others<br/>
				</td>
			</tr>
			<tr>
				<td>Phone :</td>
				<td><input type="number" name="phone" value=""/><br/></td>
			</tr>
			<tr>
				<td> Email ID :</td>
				<td><input type="text" name="email" value=""/><br/></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="pass" value=""/><br/></td>
			</tr>
			<tr>
				<td>Confirm password :</td>
				<td><input type="password" name="repass" value=""/><br/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"/><br/></td>
			</tr>
			</table>
		</fieldset>
	</form>
</html>