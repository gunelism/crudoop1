<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

include 'index.php';

 ?>

<table>
	<thead>
	<tr>
		<td>id</td>
		<td>name</td>
		<td>mail</td>
		<td>number</td>
		</tr>	
	</thead>
	<tbody>

		<?php 
 $newquery = $connect -> select("crudoop");
		while ($row = mysqli_fetch_assoc($newquery)){
				?>

				<tr>

				<?php
					foreach ($row as $key => $value) {
						echo "<td> $value </td>";
					}
				?>
				<td><a href="delete.php?id=<?php echo $row['id'] ?>">delete</a></td>
				<td><a href="update.php?id=<?php echo $row['id'] ?>">update</a></td>
				<td><a href="see.php?id=<?php echo $row['id']?>">see</a></td>

				</tr>

			<?php 
		}
			?>

	</tbody>
</table>
</body>
</html>
<style type="text/css">
	td{
		border: 1px solid lightgrey;
	}
	tr{
		border: 1px solid lightgrey;

	}
</style>