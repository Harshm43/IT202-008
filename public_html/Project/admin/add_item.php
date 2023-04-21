<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");
$TABLE_NAME = "Products";
if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH/home.php"));
}

if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["category"]) && isset($_POST["stock"]) && isset($_POST["price"])) {
    //Sets all $_POST values to variables
    $name = se($_POST, "name", "", false);
    $description = (se($_POST, "description", "", false) == "" ? "No description" : se($_POST, "description", "", false));
    $category = (se($_POST, "category", "", false) == "" ? "Other" : se($_POST, "category", "", false));
    $stock = se($_POST, "stock", "", false);
    $price = se($_POST, "price", "", false);
    $visibility = se($_POST, "visibility", "0", false);
    //Server side validation
    $isValid = true;
    if (strlen($name) == 0) {
        flash("Product must have a name", "warning");
        $isValid = false;
    }
    if (strlen($stock) == 0) {
        flash("Stock must not be empty", "warning");
        $isValid = false;
    }
    if (strlen($price) == 0) {
        flash("Price must not be empty", "warning");
        $isValid = false;
    }
    if ($stock < 0 || $stock > 1000) {
        flash("Stock must between 0 and 1000 inclusive", "warning");
        $isValid = false;
    }
    if ($price < 0.01 || $price > 5000.00) {
        flash("Price must be between 0.01 and 5000.00 inclusive", "warning");
        $isValid = false;
    }
    //Database insertion
    if ($isValid) {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Products (name, description, category, stock, unit_price, visibility) VALUES(:name, :description, :category, :stock, :price, :visibility)");
        try {
            $stmt->execute([":name" => $name, ":description" => $description, ":category" => $category, ":stock" => $stock, ":price" => $price, ":visibility" => $visibility]);
            flash("Successfully added $name!", "success");
        } catch (PDOException $e) {
            flash("Unknown error occurred, please try again", "danger");
            error_log(var_export($e->errorInfo, true), "danger");
        }
    }
}
?>
<div class="container-fluid">
    <h1>Add Item</h1>
    <form method="POST">
        <?php foreach ($columns as $index => $column) : ?>
            <?php /* Lazily ignoring fields via hardcoded array*/ ?>
            <?php if (!in_array($column["Field"], $ignore)) : ?>
                <div class="mb-4">
                    <label class="form-label" for="<?php se($column, "Field"); ?>"><?php se($column, "Field"); ?></label>
                    <input class="form-control" id="<?php se($column, "Field"); ?>" type="<?php echo input_map(se($column, "Type", "", false)); ?>" name="<?php se($column, "Field"); ?>" />
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <input class="btn btn-primary" type="submit" value="Create" name="submit" />
    </form>
</div>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/footer.php");
