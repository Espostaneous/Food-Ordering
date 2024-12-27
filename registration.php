<?php include "header.php"; ?> 
<body>
	
	<!-- Start All Pages -->
	<br>
	<br>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<h2><br> &nbsp;&nbsp;&nbsp;&nbsp;Sign In</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
      <table cellpadding="10" cellspacing="12" align="left	">
     <form action="" method="POST"> 

  <tr>
  	<td>
  <input type="text" name="uid" value="" placeholder="Enter user id" required=""style="padding: 10px; width: 300%"> <br>  </td>
    </tr>
   
	<tr>  
 <td> <input type="name" name="name" value="" placeholder="Enter your name" required="" style="padding: 10px; width: 300%">  <br> </td>
</tr>
         
      <tr>   


   <tr>	
 <td> <input type="password" name="pass" value="" placeholder=" Enter your password" required="" style="padding: 10px; width: 300%"> <br> </td>
   </tr>

  <tr>  
 <td> <input type="email" name="email" value="" placeholder="Enter your email address" required="" style="padding: 10px; width: 300%">  <br> </td>
</tr>
         
      <tr>   
<td align="center"> <input type="submit" name="sb" value="Register Now" style="color:black; background: white; font-size: 1.3em;">  <br> </td>
   </tr>
    	
    </form>
 </table>

					<?php
					if(isset($_POST['sb']))
					{
						
						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$email = $_POST['email'];
						include "connect.php";
						mysqli_query($con,"insert into registration(userid, password,email) values('$uid','$pass','$email')");
						echo "<script>alert('Registration SuccessFully');</script>";
						echo "<center>Registration SuccessFully, click to <a href='login.php'>login</a></center>";
					}	

					?>





				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>