<html>
<head>
</head>
<body>
    <?php
		$score = 82;

		if ($score >= 75) {
			$grade = "A";
			$message = "Excellent performance!";
		} elseif ($score >= 65) {
			$grade = "B";
			$message = "Good job!";
		} elseif ($score >= 50) {
			$grade = "C";
			$message = "Satisfactory pass.";
		} else {
			$grade = "F";
			$message = "Needs improvement.";
		}

		echo "Score: " . $score . "<br>";
		echo "Letter Grade: " . $grade . "<br>";
		echo "Message: " . $message;
	?>
</body>
</html>