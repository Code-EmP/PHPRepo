<!DOCTYPE html>
<html>
<head>
    <title>Biography</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Enter Biography</h2>

    <form method="post" action="">
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Submitted Information:</h3>";
        echo "First Name: " . $_POST['fname'] . "<br>";
        echo "Middle Name: " . $_POST['mname'] . "<br>";
        echo "Last Name: " . $_POST['lname'] . "<br>";
        echo "Date of Birth: " . $_POST['dob'] . "<br>";
        echo "Address: " . $_POST['address'] . "<br>";
    }
    ?>
    </div>
</div>

</body>
</html>