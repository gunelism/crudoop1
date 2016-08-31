<?php 

	class Databsae
	{
		public $hostname;
		public $username;
		public $password;
		public $dbname;
		public $conn;
		
		public function __construct($host, $user, $pass, $db)
		{
			$this->hostname = $host;
			$this->username = $user;
			$this->password = $pass;
			$this->dbname = $db;

			$this->conn= mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);

			if ($this->conn) {
				// echo "<b>$this->dbname</b> adli databasaya xosh geldinqiz";
			}
			else{
				echo "no connection";
			}
		}

		public function select($tname , $where = null){
			$sql = "SELECT * FROM $tname";
			if ($where != null) {
				$sql .= ' WHERE '.$where;
			}
			$query = mysqli_query($this->conn,$sql);
			return $query;
		}
		public function insert($tname, $name, $mail, $numb){
			$sql1 = "INSERT INTO $tname(`name`, `mail`, `number`) VALUES('$name','$mail', '$numb')";
			$query1 = mysqli_query($this->conn,$sql1);
			return $query1;
		}
		public function delete($tname, $id){
			$sql2 = "DELETE FROM $tname WHERE id=$id";
			$query2 = mysqli_query($this->conn,$sql2);
			return $query2;
		}

		public function update($tname, $name, $mail, $numb, $id){
			$sql3 = "UPDATE $tname SET name=$name, mail=$mail, number=$numb WHERE id=$id";
			$query3 = mysqli_query($this->conn,$sql3);
			return $query3;
		}
	}

$connect = new Databsae("localhost","root","","crudoop");
// $newquery = $connect -> select("crudoop");
// while ($row=mysqli_fetch_assoc($newquery)) {
	// echo $row["name"] . " " . $row["mail"] . "<br>";
// }

 ?>