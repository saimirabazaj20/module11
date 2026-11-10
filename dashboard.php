<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>Document</title>
	

	<style>
		
		table
		{
			border: 1px solid black;
		}

		tr,td,th
		{
			border: 1px solid black;
			
		}
		table,tr,td
		{
			border-collapse: collapse;
		}
		td
		{
			padding: 10px;
		}

	</style>
</head>
<body>


	<?php 

		include_once('config.php');

		$getUsers = $conn->prepare("SELECT * FROM users");

		$getUsers->execute();

		$users = $getUsers->fetchAll();

	 ?>


	 <table>
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Email</th>
				<th>Update</th>
			</tr>
	</thead>


	 	<?php 

	 		foreach ($users as $user ) {
			
		?>
			<tr> 
				<td> <?= $user['id'] ?> </td>
				<td> <?= $user['username'] ?> </td>
				<td> <?= $user['name']  ?> </td> 
				<td> <?= $user['surname']  ?> </td> 
				<td> <?= $user['email']  ?> </td>
				<td> <?= "<a href='delete.php?id=$user[id]'> Delete</a>| <a href='edit.php?id=$user[id]'> Update </a>"?></td>

			</tr>
		
		<?php 

			}

	 	 ?>


	 </table>

	 <a href="index.php">Add User</a>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>