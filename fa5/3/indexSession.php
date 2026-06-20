<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>FavoriteColor.php</title>
    <link rel="stylesheet" href="styleSession.css">
</head>
<body>

<div class="container">
    <h2>Enter your favorite colors</h2>

    <form action="indexResult.php" method="POST">
        <table border="1" cellpadding="8" cellspacing="0" align="center">
            <tr>
                <td>Favorite color 1:</td>
                <td><input type="text" name="color1" required></td>
            </tr>
            <tr>
                <td>Favorite color 2:</td>
                <td><input type="text" name="color2" required></td>
            </tr>
            <tr>
                <td>Favorite color 3:</td>
                <td><input type="text" name="color3" required></td>
            </tr>
            <tr>
                <td>Favorite color 4:</td>
                <td><input type="text" name="color4" required></td>
            </tr>
            <tr>
                <td>Favorite color 5:</td>
                <td><input type="text" name="color5" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Send Colors" class="btn">
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>