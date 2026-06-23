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
		
		$sql ="INSERT INTO mytable(firstname,lastname,email) VALUES
				('Ali','Hashan','ali@example.com'),
				('Nimal','Perera','nimal@example.com'),
				('Sara','Fernando','sara@example.com')";
			
		if($conn -> query($sql) == TRUE){
			echo"New record inserted Successfully";
		} else {
			echo"Error inserting data: ".$conn->error;
		}
		
		$conn->close();
	?>
</body>
</html>