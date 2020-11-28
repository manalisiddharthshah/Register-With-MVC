<?php 
	require ("dao.php");
	require ("model.php");
	$d=new dao();
?>
<!DOCTYPE html>
<html>
<head>
	<title>View_Database</title>
</head>
<body>
<table border="1px">
	<thead>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Gender</th>
		<!-- <th>Date</th> -->
		<th>Country</th>
		<th>Interst</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php
			$q =$d->select("register");
			$i=0;
		while($result=mysqli_fetch_array($q))
		{	
			$i++;

			//print_r($result);
			//echo "<br>";

		?>

			<tr>
				<td><?php echo $result['id'];?></td>
				<td><?php echo $result['name']; ?></td>
				<td><?php echo $result['email']; ?></td>
				<td><?php echo $result['phone']; ?></td>
				<td><?php echo $result['address']; ?></td>
				<td><?php echo $result['gender']; ?></td>
				<!-- <td><?php echo $result['dob'];?></td> -->
				<td><?php echo $result['country']; ?></td>
				<td><?php echo $result['interest']; ?></td>	
				<td><a href="edit.php?id=<?php echo $result['id'];?>">Edit</a>
					<a href="controller.php?id=<?php echo $result['id'];?>">DELETE</a></td>				
			</tr>
		
		<?php
		}
		?>
		
	</tbody>

</table>

<p><a href="day9.php">want add more data then click here</a></p>

</body>
</html>