<!DOCTYPE html>
<html>
<head>
    <title>Biography</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Enter Biography</h2>

    <form method="get" action="">
        <label>First Name:</label>
        <input type="text" name="fname"><br>

        <label>Middle Name:</label>
        <input type="text" name="mname"><br>

        <label>Last Name:</label>
        <input type="text" name="lname"><br>

        <label>Date of Birth:</label>
        <input type="date" name="dob"><br>

        <label>Address:</label>
        <input type="text" name="address"><br>

        <input type="submit" value="Submit" class="btn">
    </form>

    <div class="output">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['fname'])) {
        echo "<h3>Submitted Information:</h3>";
        echo "First Name: " . $_GET['fname'] . "<br>";
        echo "Middle Name: " . $_GET['mname'] . "<br>";
        echo "Last Name: " . $_GET['lname'] . "<br>";
        echo "Date of Birth: " . $_GET['dob'] . "<br>";
        echo "Address: " . $_GET['address'] . "<br>";
    }
    ?>
    </div>
</div>

</body>
</html>