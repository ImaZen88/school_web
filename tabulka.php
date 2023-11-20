<!DOCTYPE html>
<head>
</head>
<body>
<?php
$students = array(
    array("John", "Doe", 25),
    array("Jane", "Smith", 22),
    array("Bob", "Johnson", 28)
);

echo "<table>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Age</th></tr>";

foreach ($students as $student) {
    echo "<tr>";
    foreach ($student as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
