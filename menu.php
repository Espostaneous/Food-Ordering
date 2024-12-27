<?php session_start(); ?>
<?php include  "header.php"; ?>
	<!-- Start All Pages -->
	<br>
	<br>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h3>Dishes of the Month</h3>
						<p>Savor the Experience of our Signature Dishes</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">main dishes</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">pancit dishes</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">vegetables dishes</a>

						<a class="nav-link" id="v-pills-tava-tab" data-toggle="pill" href="#v-pills-tava" role="tab" aria-controls="v-pills-tava" aria-selected="false">soup dishes</a>
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											
											<h5 align="center">
									<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>

										</div>
									</div>
								</div>
								<?php } ?>
							</div>	
						</div>


						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">


							<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu where category='main dishes'");
								while($r = mysqli_fetch_array($s))
								{	
								?>

								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
										
											<h5 align="center">
												<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>




											</h5>
										</div>
									</div>
								</div>
								<?php } ?>
								
								
							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="row">
								
								<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu where category='pancit dishes'");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											
											<h5 align="center">
												<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>


											</h5>
										</div>
									</div>
								</div>
								<?php } ?>
								
								
								
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="row">
                             <?php include "connect.php";
								$s = mysqli_query($con,"select * from menu where category='vegetables dishes'");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											
											<h5 align="center">
											 <?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>
	

											</h5>
										</div>
									</div>
								</div>
								<?php } ?>     
						</div>
					</div>		
 
                          
						<div class="tab-pane fade" id="v-pills-tava" role="tabpanel" aria-labelledby="v-pills-tava-tab">
							<div class="row">
								<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu where category='soup dishes'");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											
											<h5 align="center"><?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?></h5>
										</div>
									</div>
								</div>
								<?php } ?>	

								
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Menu -->

<?php include "footer.php" ?>	

