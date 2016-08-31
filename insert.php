<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

<form action="" method="post">
	<input type="text" name="name">
	<input type="text" name="mail">
	<input type="number" name="numb">
	<input type="submit" name="get">
</form>

<?php 
	include 'index.php';

if (isset($_POST['get'])) {	
	if ($connect->insert("crudoop", $_POST['name'], $_POST['mail'], $_POST['numb'])) {
		header('Location:index.php');
	}else{
		echo "error";
	}
}
 ?>

</body>
</html>