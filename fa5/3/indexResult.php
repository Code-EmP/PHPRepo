<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ResultColors.php</title>
    <link rel="stylesheet" href="styleSession.css">
</head>
<body>

<div class="container">
    <h2>My Favorite Colors</h2>

    <div class="output">
        <?php
        
        function displayColor($label, $color) {
            echo $label . ": 
                <span style='color:" . $color . "; font-weight:bold;'>
                " . $color . "
                </span><br>";
            }


        if (isset($_SESSION['color1'])) {
            displayColor("My Favorite Color 1", $_SESSION['color1']);
            displayColor("My Favorite Color 2", $_SESSION['color2']);
            displayColor("My Favorite Color 3", $_SESSION['color3']);
            displayColor("My Favorite Color 4", $_SESSION['color4']);
            displayColor("My Favorite Color 5", $_SESSION['color5']);
        } else {
            echo "No data available.";
        }
        ?>
    </div>

    <br>

    <a href="indexSession.php">
        <button class="btn">Back</button>
    </a>
</div>

</body>
</html>