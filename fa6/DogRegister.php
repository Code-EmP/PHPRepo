<?php
$conn = new mysqli("localhost", "root", "", "dog_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if ($conn->query($sql) === TRUE) {
        $message = "✅ Dog registered successfully!";
    } else {
        $message = "❌ Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Registration</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 30px;
            width: 400px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #333;
        }

        input {
            width: 75%;
            padding: 12px;
            margin: 8px 0;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        input:focus {
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102,126,234,0.5);
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        button {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .view-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border-radius: 10px;
            background: #444;
            color: white;
            font-size: 16px;
            transition: 0.3s;
        }

        .view-btn:hover {
            background: #222;
            transform: translateY(-2px);
        }

        .message {
            margin-top: 15px;
            font-size: 14px;
            color: green;
        }

        
    </style>
</head>

<body>

<div class="card">
    <h2>🐶 Register Dog</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Dog Name" required>
        <input type="text" name="breed" placeholder="Breed" required>
        <input type="number" name="age" placeholder="Age" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="color" placeholder="Color" required>
        <input type="number" step="0.01" name="height" placeholder="Height (cm)" required>
        <input type="number" step="0.01" name="weight" placeholder="Weight (kg)" required>

        <div class="button-group">
            <button type="submit">💾 Save Dog</button>
            <a href="DogView.php" class="view-btn">📋 View Dogs</a>
        </div>
    </form>

    <?php if (isset($message)) { ?>
        <div class="message"><?php echo $message; ?></div>
    <?php } ?>

</div>

</body>
</html>