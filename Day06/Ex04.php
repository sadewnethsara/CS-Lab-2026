<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
		$x = 5;
		function My_func(){
			global $x;
			echo "The value of x is $x <br>";
		}
		
		My_func();
		echo "The value of x is $x <br>";
	?>
</body>
</html>