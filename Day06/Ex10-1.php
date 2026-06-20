<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname"><br><br>
  Email: <input type="text" name="femail"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input fields
    $name = htmlspecialchars($_POST['fname']);
    $email = htmlspecialchars($_POST['femail']);
    
    if (!empty($name) || !empty($email)) {
        echo "<h3>Your Input:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    }
}
?>

</body>
</html>