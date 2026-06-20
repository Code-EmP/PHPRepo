<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    setcookie("fname", $_POST['fname'], time() + 10, "/");   
    setcookie("mname", $_POST['mname'], time() + 20, "/");   
    setcookie("lname", $_POST['lname'], time() + 30, "/");   

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Form Activity</title>
    <link rel="stylesheet" href="stylecookies.css">
</head>
<body>

<div class="container">
    <h2>Personal Information (Cookies)</h2>

    <form method="POST">
        <label>First Name:</label>
        <input type="text" name="fname" required><br><br>

        <label>Middle Name:</label>
        <input type="text" name="mname" required><br><br>

        <label>Last Name:</label>
        <input type="text" name="lname" required><br><br>

        <input type="submit" value="Submit" class="btn">
    </form>

    <div class="output">
        <h3>Cookie Output:</h3>

        <?php
        if (isset($_COOKIE['fname'])) {
            echo "<span class='available'>First Name: " . $_COOKIE['fname'] . "</span><br>";
        } else {
            echo "<span class='waiting'>First Name: ❌ Expired</span><br>";
        }

        if (isset($_COOKIE['mname'])) {
            echo "<span class='available'>Middle Name: " . $_COOKIE['mname'] . "</span><br>";
        } else {
            echo "<span class='waiting'>Middle Name: ❌ Expired</span><br>";
        }

        if (isset($_COOKIE['lname'])) {
            echo "<span class='available'>Last Name: " . $_COOKIE['lname'] . "</span><br>";
        } else {
            echo "<span class='waiting'>Last Name: ❌ Expired</span><br>";
        }
        ?>
    </div>
</div>

</body>
</html>