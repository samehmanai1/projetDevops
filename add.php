<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];

    move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);

    $sql = "INSERT INTO products (name, description, price, image) VALUES ('$name', '$description', '$price', '$image')";
    $conn->query($sql);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter un Produit</title>
</head>
<body>
    <h1>Ajouter un Produit</h1>
    <form action="add.php" method="POST" enctype="multipart/form-data">
        <label>Nom :</label>
        <input type="text" name="name" required>
        <label>Description :</label>
        <textarea name="description" required></textarea>
        <label>Prix :</label>
        <input type="number" name="price" step="0.01" required>
        <label>Image :</label>
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
