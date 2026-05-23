<?php
$fruits = array(
    array("Apple", "https://cdn-icons-png.flaticon.com/128/415/415682.png", "Sweet red fruit", "Improves heart health"),
    array("Banana", "https://cdn-icons-png.flaticon.com/128/2909/2909761.png", "Yellow tropical fruit", "Rich in potassium"),
    array("Cherry", "https://cdn-icons-png.flaticon.com/128/3137/3137038.png", "Small red fruit", "Contains antioxidants"),
    array("Grapes", "https://cdn-icons-png.flaticon.com/128/5376/5376172.png", "Small juicy fruits", "Used for wine"),
    array("Mango", "https://cdn-icons-png.flaticon.com/128/3137/3137152.png", "Sweet tropical fruit", "Philippines famous for mango"),
    array("Orange", "https://cdn-icons-png.flaticon.com/128/1728/1728765.png", "Citrus fruit", "High in Vitamin C"),
    array("Papaya", "https://cdn-icons-png.flaticon.com/128/8556/8556927.png", "Soft orange fruit", "Good for digestion"),
    array("Pineapple", "https://cdn-icons-png.flaticon.com/128/898/898142.png", "Rough tropical fruit", "Contains bromelain"),
    array("Strawberry", "https://cdn-icons-png.flaticon.com/128/590/590685.png", "Red fruit with seeds", "Full of antioxidants"),
    array("Watermelon", "https://cdn-icons-png.flaticon.com/128/5582/5582664.png", "Large juicy fruit", "High water content")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fruit Directory</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>

<div class="container">
    <h1>🍉 FRUIT DIRECTORY</h1>

    <table>
        <tr>
            <th>IMAGE</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>FACT</th>
        </tr>

        <?php foreach($fruits as $fruit): ?>
        <tr>
            <td><img src="<?php echo $fruit[1]; ?>"></td>
            <td><?php echo $fruit[0]; ?></td>
            <td><?php echo $fruit[2]; ?></td>
            <td><?php echo $fruit[3]; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>

</body>
</html>
