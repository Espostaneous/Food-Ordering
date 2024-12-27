<?php
include "connect.php";

if (isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];

    // SQL query to delete the record from the 'checkout' table
    $query = "DELETE FROM checkout WHERE p_id = '$p_id'";

    if (mysqli_query($con, $query)) {
        echo "Order deleted successfully!";
    } else {
        echo "Error deleting order: " . mysqli_error($con);
    }

    // Redirect back to the main page after deletion
    header("Location: index.php");
    exit();
}
?>
