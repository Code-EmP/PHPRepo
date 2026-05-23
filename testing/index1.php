<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSA3 - Lab Activity 1: HSR Character Directory</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1a1a2e; 
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 900px;
            background: #16213e;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.5);
            border-radius: 8px;
            border: 1px solid #0f3460;
        }
        h1 {
            text-align: center;
            color: #e94560;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #0f3460;
        }
        th {
            background-color: #0f3460;
            color: #fff;
            text-transform: uppercase;
            font-size: 0.9em;
        }
        tr:hover {
            background-color: #1a1a2e;
        }
        .profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e94560;
            background-color: #ccc; 
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Honkai: Star Rail Characters</h1>

    <?php
    $characters = array(
        array("Kafka", "Kafka.png", 23, "Unknown", "0917-SPIDER-01"),
        array("Silver Wolf", "Silver  Wolf.png", 15, "June 11", "0918-HACKER-02"),
        array("Tribbie", "Tribbie.png", 30, "Unknown", "0919-SWORD-03"),
        array("Dan Heng", "Dan Heng.png", 20, "December 12", "0920-DRAGON-04"),
        array("March 7th", "March.png", 18, "March 7th", "0921-PHOTO-05"),
        array("Robin", "Robin.png", 19, "Unknown", "0922-TRAIL-06"),
        array("Hysilens", "Hysilens.png", 19, "Unknown", "0923-TRAIL-07"),
        array("Himeko", "Himeko.png", 30, "August 10", "0924-COFFEE-08"),
        array("Feixiao", "Feixiao.png", 40, "November 11", "0925-DEITY-09"),
        array("Firefly", "Firefly.png", 30, "Unknown", "0926-LIGHT-10")
    );

    usort($characters, function($a, $b) {
        return strcmp($a[0], $b[0]);
    });

    echo "<table>";
    echo "<thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Age</th>
                <th>Birthday</th>
                <th>Contact Number</th>
            </tr>
          </thead>";
    
    echo "<tbody>";
    
    // Loop through the sorted array
    foreach ($characters as $char) {
        echo "<tr>";

        echo "<td><img class=\"profile-img\" src=\"" . $char[1] . "\" alt=\"Profile of " . $char[0] . "\"></td>";
        echo "<td>" . $char[0] . "</td>";
        echo "<td>" . $char[2] . "</td>";
        echo "<td>" . $char[3] . "</td>";
        echo "<td>" . $char[4] . "</td>";
        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";
    ?>

</div>

</body>
</html>