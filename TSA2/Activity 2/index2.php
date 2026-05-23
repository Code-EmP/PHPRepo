<?php

function volumeCube($s) {
    return pow($s, 3);
}

function volumeRect($l, $w, $h) {
    return $l * $w * $h;
}

function volumeCylinder($r, $h) {
    return pi() * $r * $r * $h;
}

function volumeCone($r, $h) {
    return (1/3) * pi() * $r * $r * $h;
}

function volumeSphere($r) {
    return (4/3) * pi() * pow($r, 3);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="card">
    <h1>Volume of Shapes</h1>

    <table>
        <thead>
            <tr>
                <th>Values</th>
                <th>Formula</th>
                <th>Answer</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>s = 5</td>
                <td>V = s³</td>
                <td><?php echo volumeCube(5); ?></td>
            </tr>

            <tr>
                <td>l = 4, w = 3, h = 2</td>
                <td>V = l × w × h</td>
                <td><?php echo volumeRect(4,3,2); ?></td>
            </tr>

            <tr>
                <td>r = 3, h = 7</td>
                <td>V = πr²h</td>
                <td><?php echo number_format(volumeCylinder(3,7), 2); ?></td>
            </tr>

            <tr>
                <td>r = 3, h = 7</td>
                <td>V = ⅓πr²h</td>
                <td><?php echo number_format(volumeCone(3,7), 2); ?></td>
            </tr>

            <tr>
                <td>r = 3</td>
                <td>V = ⁴⁄₃πr³</td>
                <td><?php echo number_format(volumeSphere(3), 2); ?></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
``