<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
include 'index.php';

$tt = $_GET['id'];
$newquery = $connect -> select("crudoop", "id = $tt");
var_dump($newquery);
$row = mysqli_fetch_assoc($newquery);

 ?>


<form action="" method="post">
	<input type="text" name="id" value="<?= $tt?>">
	<input type="text" name="name" value="<?= $row['name'] ?>">
	<input type="text" name="mail" value="<?= $row['mail'] ?>">
	<input type="number" name="number" value="<?= $row['number'] ?>">
	<input type="submit" name="get">
</form>

</body>
</html>