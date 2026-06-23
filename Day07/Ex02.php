<!DOCTYPE html>
<html>
<body>
    <?php
		$servername = "localhost";
		$username ="root";
		$password="";
		
		$conn = new mysqli($servername,$username,$password);
		
		if($conn -> connect_error){
			die("Connection failed: ".$conn->connnect_error);
		}
		
		$sql ="CREATE DATABASE university";
		if($conn -> query($sql) === TRUE){
			echo"Database created Successfully";
		} else {
			echo"Error creating Databse: ".$conn->error;
		}
		
		$conn->close();
	?>
</body>
</html>