<!DOCTYPE html>
<html>
<head>
<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- single -->
<script src="js/imagezoom.js"></script>
<script src="js/jquery.flexslider.js"></script>
<!-- single -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
</head>
<body>
    <?php
session_start();
if($_SESSION['id']==""){
    header('location:index.php?m=1');
}
include './config/dbconnection.php';
?>
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.php"><img src="images/logo3.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle" style="border: transparent">
</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
					
				</li>
				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="log" href="logout.php"></a></li>
                                <?php 
                                    if(isset($_SESSION['id'])){
                                        echo "Welcome: ".$_SESSION['id'];
                                    }
                                ?>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home<span class="sr-only">(current)</span></a></li>
                                        <li><a class="menu__link" href="veg.php">Vegetables</a></li>
                                        <li><a class="menu__link" href="fruits.php">Fruits</a></li>
                                        <li><a class="menu__link" href="regular.php">Flowers</a></li>
                                        <li><a class="menu__link" href="order.php">My Bids</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Orders</h3>
	</div>
</div>
<!-- //banner -->
<!-- single -->
<div class="single">
	<div class="container">
            <h1><center>My Bids</center></h1><br/>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
                    <table class="timetable_sub">
				<thead>
					<tr>
						<th>Sl. No</th>
                                                <th>Product Image</th>
                                                <th>Product</th>
                                                <th>Type</th>
                                                <th>Category</th>
                                                <th>Packing</th>
                                                <th>Base Price</th>
                                                <th>Auction Price</th>
                                                <th>Confirmed</th>
                                                <th>Payment</th>
					</tr>
				</thead>
                    <?php
                    
                   $query="select * from tblproducts where customer='{$_SESSION['id']}'";
                        $result=mysqli_query($link,$query);
                        $s=1;
                        while($row1=mysqli_fetch_assoc($result)){                            
                            $query="select * from tblproducts where id='{$row1['id']}'";
                            $result1=mysqli_query($link,$query);
                            $row= mysqli_fetch_assoc($result1);
                            $fn="productimg/".$row['filename0'];
                        ?>
					<tr class="rem1">
                                                <td><?php echo $s; ?></td>
						<td ><a href="#"><img src="<?php echo $fn; ?>" width="100px;" height="100px;"/></a></td>
						<td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['type']; ?></td>
                                                <td><?php echo $row['brand']; ?></td>
                                                <td><?php echo $row['model']; ?></td>
                                                <td><?php echo $row['price']; ?></td>
                                                <td><?php echo $row['current']; ?></td>
                                                <?php if($row['confirmed']=='Y'){?>
                                                    <td>Yes</td>
                                                <?php }else{ ?>
                                                    <td>No</td>
                                                <?php } ?>                                                    
                                                <?php if(($row['confirmed']=='Y')&&($row['paid']=='N')){?>
                                                    <td><a href='payment.php?amt=<?php echo $row['current']; ?>&id=<?php echo $row['id']; ?>' >Pay Now</a></td>
                                                <?php }else if(($row['confirmed']=='Y')&&($row['paid']=='Y')){ ?>
                                                    <td>Paid</td>
                                                <?php }else{ ?>
                                                    <td>-</td>
                                               <?php } ?>
					</tr>
					 <?php
                                         $s++;
                                              }                                              
                                         ?>
				</table>
		</div>
	</div>

</div>
  
<!-- //single -->
<!-- //product-nav -->
<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<!-- //footer -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Customer Login</h3>
										<form name="f" method="post" action="login.php">
											<div class="sign-up">
												<h4>Username :</h4>
												<input type="text" value="Type here" name="user" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											
											<div class="sign-up">
												<input type="submit" name="custlog" value="Login" />
											</div>
                                                                                    
                                                                                    <div class="sign-up" align="center">
                                                                                    <a href="custreg.php"> New Customer Register...!</a>
                                                                                    </div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Farmer Login</h3>
										<form name="f1" method="post" action="">
											<div class="sign-up">
												<h4>Username :</h4>
												<input type="text" value="Type here" name="user" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											
											<div class="sign-up">
												<input type="submit" name="distlog" value="Login" />
											</div>
                                                                                    <div class="sign-up" align="center">
                                                                                    <a href="distreg.php"> New Farmer Register...!</a>
                                                                                    </div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
			
</body>
</html>