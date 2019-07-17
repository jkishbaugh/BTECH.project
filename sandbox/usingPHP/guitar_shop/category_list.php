<?php
require_once('database.php');
$db = createDbConnection();
// Get all categories

$query = "SELECT * FROM categories;";
$category_set = mysqli_query($db, $query);
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
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php
            while($category = mysqli_fetch_assoc($category_set)){
                echo " <tr>
            <td>".$category['categoryId']."</td>
            <td>".$category['categoryName']."</td>
            </tr>";
            }
        ?>
    
    </table>

    <h2>Add Category</h2>

    <form action="" method="post">

        <div id="data">
            <label>Category Name:</label>
            <input type="text" name="category_name" ><br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Add Category"><br>
        </div>

    </form>
    <br>
    <p><a href="index.php">List Products</a></p>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
<?php
    closeDbConnection($db);
?>