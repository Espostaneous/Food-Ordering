<?php
include "header.php"; 
include "connect.php";

// Check if the product ID and user ID are passed via GET
if (isset($_GET['pid']) && isset($_GET['uid'])) {
    $pid = $_GET['pid'];
    $uid = $_GET['uid'];

    // Query to fetch the order details for the customer
    $query = mysqli_query($con, "SELECT addcart.price, addcart.qty, addcart.total, menu.title, menu.description, menu.image
                                  FROM addcart
                                  INNER JOIN menu ON addcart.p_id = menu.id
                                  WHERE addcart.u_id = '$uid' AND addcart.p_id = '$pid'");

    if (mysqli_num_rows($query) > 0) {
        $order = mysqli_fetch_array($query);
    } else {
        echo "No order details found!";
        exit;
    }
} else {
    echo "Invalid request!";
    exit;
}
?>

<div class="content">
    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Customer Order Details</h2>
    <table border="1" cellpadding="6" cellspacing="8" width="80%" style="margin: 0 auto;">
        <tr>
            <th>Product Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Image</th>
        </tr>
        <tr>
            <td><?php echo $order['title']; ?></td>
            <td><?php echo $order['description']; ?></td>
            <td><?php echo $order['price']; ?></td>
            <td><?php echo $order['qty']; ?></td>
            <td><?php echo $order['total']; ?></td>
            <td><img src="<?php echo $order['image']; ?>" width="100" height="100"></td>
        </tr>
    </table>
</div>

<?php include "footer.php"; ?>
