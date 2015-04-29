<html>
<head>
<style>
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid red;
	padding : 10px;
}
</style>
</head>
<body>
<?php
include 'my_connect.php';

$sql ="SELECT * FROM employees";
mysql_select_db('my_new');

$retval = mysql_query($sql);
if(!$retval){
	 die('Could not get data: ' . mysql_error());
}else{
	?>
	<table style="border:1px solid red">
	<thead>
		<th>EN</th>
		<th>Namne</th>
		<th>Email</th>
	</thead>
	<tbody>
	<?php
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
		?>
			<tr>
				<td><?php echo $row['employeeNumber'];?></td>
				<td><?php echo $row['lastName']." ".$row['firstName'];?></td>
				<td><?php echo $row['email'];?></td>
			</tr>
		<?php
	}?>
	</tbody>
	</table>
	<?php
}
?>
</body>
</html>
