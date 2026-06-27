<?php
$conn = new mysqli("localhost", "root", "", "dog_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dogs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .card {
            background: white;
            padding: 30px;
            width: 90%;
            max-width: 900px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #667eea;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f2f2f2;
        }

        .btn {
            display: block;
            margin: 20px auto 0;
            padding: 12px 20px;
            border-radius: 10px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            text-decoration: none;
            text-align: center;
            width: 200px;
        }

        .btn:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>

<div class="card">
    <h2>🐕 Dog Records</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Address</th>
            <th>Color</th>
            <th>Height</th>
            <th>Weight</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['breed']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['color']}</td>
                        <td>{$row['height']}</td>
                        <td>{$row['weight']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No records found</td></tr>";
        }
        ?>
    </table>

    <a href="DogRegister.php" class="btn">➕ Add New Dog</a>
</div>

</body>
</html>