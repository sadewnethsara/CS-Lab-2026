<html>
<head>
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
		My_func();
		echo "The value of x is $x <br>";
	?>
</body>
</html>