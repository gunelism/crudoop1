<?php 
include 'index.php';


		if ($connect->delete("crudoop", $_GET['id'])){
			header('Location:show.php');
		}else{
			echo "error";
		}



 ?>