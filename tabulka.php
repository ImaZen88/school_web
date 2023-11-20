<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Sample data for the table
$students = array(
    array("John", "Doe", 25),
    array("Jane", "Smith", 22),
    array("Bob", "Johnson", 28)
);

// Outputting the table
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
