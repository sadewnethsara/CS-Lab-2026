<!DOCTYPE html>
<html>
<body>
    <?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="university";
		
		$conn = new mysqli($servername,$username,$password,$dbname);
		
		if($conn->connect_error){
			die("Connection failed".$conn->connect_error);
		}
		
		$sql ="DELETE FROM mytable WHERE firstname='Sara'";
		
		if($conn->query($sql)===TRUE){
			echo"Delete Successfully";
		} else {
			echo"Error deleting: ".$conn->error;
		}
		
		$conn->close();
	?>
</body>
</html>