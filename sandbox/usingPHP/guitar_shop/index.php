<?php
require_once('database.php');
$db = createDbConnection();
// Get category ID
if (!isset($category_id)) {
    $category_id = filter_input(INPUT_GET, 'category_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
}
// Get name for selected category
    $query = "SELECT categoryName FROM categories WHERE categoryID = ".$category_id.";";
    $category_result = mysqli_query($db, $query);
    $category = mysqli_fetch_assoc($category_result);
    $category_name = $category['categoryName'];
// Get all categories
    $query = "SELECT * FROM categories;";
    $category_set = mysqli_query($db, $query);
// Get products for selected category
    $query = "SELECT * FROM products WHERE categoryID = ".$category_id.";";
    $product_set = mysqli_query($db, $query);

?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Product List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
            <?php while($category = mysqli_fetch_assoc($category_set)){ ?>
            <li><a href=".?category_id=<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
            </li>
            <?php } ?>
        </ul>
        </nav>          
    </aside>

    <section>

        <!-- display a table of products -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Price</th>
                <th>&nbsp;</th>
            </tr>

            <?php while($product = mysqli_fetch_assoc($product_set)) { ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productName']; ?></td>
                <td class="right"><?php echo $product['listPrice']; ?></td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $product['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php } ?>
        </table>
        <p><a href="add_product_form.php">Add Product</a></p>
        <p><a href="category_list.php">List Categories</a></p>        
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
</footer>
</body>
</html>
<?php
    closeDbConnection($db);
?>