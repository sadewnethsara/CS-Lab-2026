<!DOCTYPE html>
<html>
<body>
    <?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="university";
		
		$conn = new mysqli($servername,$username,$password,$dbname);
		
		if($conn -> connect_error){
			die("Connection error" .$conn ->connect_error);
		}
		
		$sql ="Create Table mytable(
				id INT(7)PRIMARY KEY AUTO_INCREMENT,
				firstname VARCHAR(30) NOT NULL,
				lastname VARCHAR(30) NOT NULL,
				email VARCHAR(50)
			)";
			
		if($conn -> query($sql) == TRUE){
			echo"Table created Successfully";
		} else {
			echo"Error creating table: ".$conn->error;
		}
		
		$conn->close();
	?>
</body>
</html>