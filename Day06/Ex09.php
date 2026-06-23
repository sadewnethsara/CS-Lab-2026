<html>
<head>
</head>
<body>
    <?php
    // Define a 2D array for students and their marks
    $students = [
        ["Name" => "Alice", "Math" => 85, "Science" => 90],
        ["Name" => "Bob", "Math" => 78, "Science" => 82],
        ["Name" => "Charlie", "Math" => 92, "Science" => 88]
    ];

    // Display the array in a table
    echo "<h3>Student Marks</h3>";
    echo "<table border='1' cellpadding='8' style='border-collapse: collapse;'>
    <tr>
        <th>Name</th>
        <th>Math</th>
        <th>Science</th>
    </tr>";

    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student["Name"] . "</td>";
        echo "<td>" . $student["Math"] . "</td>";
        echo "<td>" . $student["Science"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>