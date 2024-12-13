<?php
include 'db.php';

$id = $_GET['id'];
$product = $conn->query("SELECT * FROM products WHERE id = $id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if ($_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);
    } else {
        $image = $product['image'];
    }

    $sql = "UPDATE products SET name='$name', description='$description', price='$price', image='$image' WHERE id=$id";
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
    <title>Modifier un Produit</title>
</head>
<body>
    <h1>Modifier un Produit</h1>
    <form action="edit.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
        <label>Nom :</label>
        <input type="text" name="name" value="<?php echo $product['name']; ?>" required>
        <label>Description :</label>
        <textarea name="description" required><?php echo $product['description']; ?></textarea>
        <label>Prix :</label>
        <input type="number" name="price" step="0.01" value="<?php echo $product['price']; ?>" required>
        <label>Image :</label>
        <input type="file" name="image" accept="image/*">
        <button type="submit">Modifier</button>
    </form>
</body>
</html>