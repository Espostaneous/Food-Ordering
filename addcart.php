<?php session_start(); 
 include "header.php"; ?> 
<body>
	
	<!-- Start All Pages -->
	
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2><br><br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					Add to Cart<br><br><br></h2>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">

	<form action="" method="post">
		
		<table align="center" border="1" cellspacing="14" cellpadding="12" style="color: black" >

			    <tr align="center">

			    	<td>  Product ID  </td>
			    	<td> <input type="hidden" name="pid"  value="<?php echo $_GET['pid']; ?>"><?php echo $_GET['pid']; ?></td>
			    	
			    </tr>

			    <tr align="center">
			    	<td>   Your USERID </td>
			        <td> <input type="hidden" name="uid" value="<?php echo $_GET['uid']; ?>"><?php echo $_GET['uid']; ?></td>
			    </tr>
			    <tr align="center">
			    	<td>   Price </td>
			        <td> ₱ <input type="hidden" name="price" value="<?php echo $_GET['price']; ?>"><?php echo $_GET['price']; ?></td>
			    </tr>
				    <tr align="center">
			    	<td>   Quantity</td>
			        <td> <input type="number" name="qty" value="" min=1 max=10 required></td>
			    </tr>

                <tr align="center">
                	<td colspan="4"> <input type="submit" name="sb" value="Add Now"></td>
                </tr>
		</table>
	</form>
			<?php
			if(isset($_POST['sb']))
			{
				$pid = $_POST['pid'];
				$uid = $_POST['uid'];
				$price = $_POST['price'];
				$qty = $_POST['qty'];
				$total  = $price*$qty;

				include "connect.php";
				mysqli_query($con,"insert into addcart(p_id,u_id,price,qty,total ) values('$pid','$uid','$price','$qty','$total')") or die(mysqli_error($con));
				echo "<script>alert('Your order is added successfully')</script>";

			}

			?>
					




				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>