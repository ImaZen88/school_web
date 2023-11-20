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
$Players = array(
    array("", "", 1),
    array("", "", 2),
    array("", "", 3),
    array("", "", 4)
    array("", "", 5),
    array("", "", 6),
    array("", "", 7)
    array("", "", 8),
    array("", "", 9),
    array("", "", 10),
);

echo "<table>";
echo "<tr><th>Nickname</th><th>Score</th><th>Place</th></tr>";

foreach ($Players as $Players) {
    echo "<tr>";
    foreach ($Players as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
