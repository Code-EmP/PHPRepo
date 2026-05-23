<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

<h1>Multiplication Table</h1>

<table border="1" cellspacing="0" cellpadding="8">
<?php
for ($row = 0; $row <= 10; $row++) {
    echo "<tr>";

    for ($col = 0; $col <= 10; $col++) {

        $value = $row * $col;

        if (($row + $col) % 2 == 0) {
            $color = "#90EE90"; 
        } else {
            $color = "#ADD8E6";
        }

        echo "<td style='background-color: $color;'>$value</td>";
    }

    echo "</tr>";
}
?>
</table>

</body>
</html>