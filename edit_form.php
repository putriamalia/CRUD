<html>
<head></head>
<body>
<?php
	include 'my_connect.php';
	
	$id = $_GET['id'];
	$sql = "SELECT * FROM employees WHERE employeeNumber=".$id;
	$retval = mysql_query($sql);
	
	if(mysql_num_rows($retval) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysql_fetch_assoc($retval);
	}
?>
<h2>Edit Form <?php echo $data['lastName']." ".$data['firstName'];?></h2>
<form action="" method="POST">
	<table>
		<tr>
			<td>First Name</td>
			<td>:</td>
			<td><input type="text" name="fname" value="<?php echo $data['firstName'];?>"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td>:</td>
			<td><input type="text" name="lname" value="<?php echo $data['lastName'];?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email" value="<?php echo $data['email'];?>"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="submit"></td>
		</tr>
	</table>
</form>
</body>
</html>
