<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">
	tr{
		font-size: 1.2em;
		color: black;
	}
	tr:hover{
		background-color: #7CB9E8;
		color: white;
	}
	th{
		color: black;
		font-size: 1.3em;
	}
	.del{
		color: red;
		text-decoration: none;
	}
	.del:hover{
		color: blue;
		text-decoration: none;
		text-shadow: 2px 3px 2px #FFFFFF;
	}
	.update{
		color: green;
		text-decoration: none;
	}
	.update:hover{
		color: orange;
		text-decoration: none;
	}
</style>
<div class="content">
	<table border="1%" width="100%" cellspacing="3" cellpadding="5" style="box-shadow: 5px 4px 10px 2px; background-color:white">
		<tr>
			<th>Category</th>
			<th>Title</th>
			<th>Description</th>
			<th>Price</th>
			<th>Image</th>
			<th>Update</th>  <!-- Added Update Column -->
			<th>Remove</th>
		</tr>
		<?php 
			$s = mysqli_query($con,"select * from menu");
			while($r = mysqli_fetch_array($s))
			{
		?>
			<tr align="center">
				<td><?php echo $r['category']; ?></td>
				<td><?php echo $r['title']; ?></td>
				<td><?php echo $r['description']; ?></td>
				<td><?php echo $r['price']; ?></td>
				<td><img src="<?php echo $r['image']; ?>" width=70 height=70></td>
				<td><a href="update.php?id=<?php echo $r['id']; ?>" class="update">UPDATE</a></td> <!-- Added Update Button -->
				<td><a href="delfood.php?a=<?php echo $r['id']; ?>" class="del">DELETE</a></td>
			</tr>	
		<?php	
			}
		?>
	</table>	
</div>
<?php include "footer.php"; ?>
