<?php
require('database.php');
//Get Categories from the Database
$db = createDbConnection();
$categories = getAllCategories($db);
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Product Manager</h1></header>

    <main>
        <h1>Add Product</h1>
        <form action="add_product.php" method="post"
              id="add_product_form">

            <label>Category:</label>
            <select name="category_id">
            <?php while ($category = mysqli_fetch_assoc($categories)) { ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php } ?>
            </select><br>

            <label>Code:</label>
            <input type="text" name="code"><br>

            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>List Price:</label>
            <input type="text" name="price"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Product"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
<?php
    closeDbConnection($db);
?>