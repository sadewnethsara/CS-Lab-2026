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
		
		$sql ="UPDATE mytable SET lastname='Pritter' WHERE firstname='Nimal'";
			
		if($conn -> query($sql) == TRUE){
			echo"Record updated Successfully";
		} else {
			echo"Error updating record: ".$conn->error;
		}
		
		$conn->close();
	?>
</body>
</html>