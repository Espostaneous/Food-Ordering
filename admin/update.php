<?php
include "header.php"; 
include "connect.php"; 

// Check if the product ID is passed via GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to fetch the product details
    $query = mysqli_query($con, "SELECT * FROM menu WHERE id = '$id'");
    $product = mysqli_fetch_array($query);

    if (!$product) {
        echo "Product not found!";
        exit;
    }

    // If the form is submitted to update the product
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $category = $_POST['category'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_POST['image']; // Handle the image upload here if needed

        // Update query
        $update_query = "UPDATE menu SET category='$category', title='$title', description='$description', price='$price', image='$image' WHERE id='$id'";
        
        if (mysqli_query($con, $update_query)) {
            echo "<div style='color: green; text-align: center;'>Product updated successfully!</div>";
            header("Location: view_food.php"); // Redirect to the product list after update
        } else {
            echo "<div style='color: red; text-align: center;'>Error updating product!</div>";
        }
    }
} else {
    echo "No product selected for update.";
    exit;
}
?>

<style type="text/css">
    /* General Styling */
    .content {
        padding: 20px;
        background-color: #f9f9f9;
        box-shadow: 5px 4px 10px 2px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        width: 80%;
        border-radius: 8px;
    }

    h2 {
        color: #333;
        text-align: center;
        font-size: 1.8em;
        font-family: Arial, sans-serif;
    }

    form {
        margin-top: 20px;
    }

    label {
        font-size: 1.1em;
        font-weight: bold;
    }

    input[type="text"], input[type="number"], textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0 20px 0;
        font-size: 1em;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1.2em;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Styling for the update form */
    .update-form {
        font-size: 1.2em;
        color: black;
        background-color: #ffffff;
        box-shadow: 5px 4px 10px 2px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 0 auto;
        width: 70%;
        border-radius: 8px;
    }

    .update-form label {
        display: block;
        margin: 10px 0;
    }

    .update-form input[type="text"], .update-form textarea, .update-form input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .update-form input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1.2em;
    }

    .update-form input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<div class="content">
    <h2>Update Product</h2>
    <form method="POST" action="">
        <div class="update-form">
            <label for="category">Category:</label>
            <input type="text" name="category" value="<?php echo $product['category']; ?>" required><br>

            <label for="title">Title:</label>
            <input type="text" name="title" value="<?php echo $product['title']; ?>" required><br>

            <label for="description">Description:</label>
            <textarea name="description" required><?php echo $product['description']; ?></textarea><br>

            <label for="price">Price:</label>
            <input type="number" name="price" value="<?php echo $product['price']; ?>" required><br>

            <label for="image">Image URL:</label>
            <input type="text" name="image" value="<?php echo $product['image']; ?>"><br>

            <input type="submit" value="Update Product">
        </div>
    </form>
</div>

<script>
    // Optionally, add JavaScript validation for better UX
    document.querySelector('form').onsubmit = function(event) {
        // Simple client-side validation for empty fields
        var inputs = document.querySelectorAll('input, textarea');
        for (var i = 0; i < inputs.length; i++) {
            if (!inputs[i].value.trim()) {
                alert('Please fill in all fields!');
                event.preventDefault();
                return;
            }
        }
    };
</script>

<?php include "footer.php"; ?>
