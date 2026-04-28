<?php  session_start(); 
if(!isset($_GET['id'])){
    echo "<script> window.location.href='index.php'; </script>";
}
include 'config/dbconnection.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Next Gen Auctions</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
<script lang="javascript">
function validate(){
    var amt=Number(document.f.amt.value);
    var base=Number(document.f.base.value);
    var high=Number(document.f.high.value);
    if((amt<=base) || (amt<=high)){
        alert('Bid amount should be more than Base Price and Current Bid Price');
        return false;
    }
    return true;
}
</script>
<style>
    h1{
color: #396;
font-weight: 100;
font-size: 40px;
margin: 40px 0px 20px;
}
#clockdiv{
	font-family: sans-serif;
	color: #fff;
	display: inline-block;
	font-weight: 100;
	text-align: center;
	font-size: 30px;
}
#clockdiv > div{
	padding: 10px;
	border-radius: 3px;
	background: #00BF96;
	display: inline-block;
}
#clockdiv div > span{
	padding: 15px;
	border-radius: 3px;
	background: #00816A;
	display: inline-block;
}
</style>
<body>
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.html"><img src="images/logo3.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle" style="border: transparent">
</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a></li>
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
					<li><a class="menu__link" href="index.php">Home<span class="sr-only">(current)</span></a></li>
                                        <li><a class="menu__link" href="veg.php">Vegetables</a></li>
                                        <li><a class="menu__link" href="fruits.php">Fruits</a></li>
                                        <li><a class="menu__link" href="regular.php">Flowers</a></li>
                                        <li class="active menu__item menu__item--current"><a class="menu__link" href="order.php">My Bids</a></li>
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
		<h3>View Product</h3>
	</div>
</div>
<!-- //banner -->
<!-- single -->
<div class="single">
	<div class="container">
		<div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<div class="grid images_3_of_2">
                                <?php
                        $query="select * from tblproducts where id='{$_GET['id']}'";
                        $result=mysqli_query($link,$query);
                        if(mysqli_num_rows($result)>0){
                            $row=  mysqli_fetch_assoc($result);
                            $desc=$row['description'];
                            $f0="productimg/".$row['filename0'];
                    ?>
				<div class="flexslider">
                                <div> <img src="<?php echo $f0;?>" data-imagezoom="true" class="img-responsive"> </div>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
                                        <h3><?php echo $row['name']; ?></h3>
					<h3><?php echo $row['brand'];?></h3>
                                        <p><span class="item_price"> <h3>Packing Type: <?php echo $row['model'];?></h3></span></p>
                                        <p><span class="item_price">Base Price: Rs.&emsp;<?php echo $row['price'];?></span></p>
                                        <p><span class="item_price">Bid Price&nbsp;: Rs.&emsp;<?php echo $row['current'];?></span></p>
					<div class="description">
					</div>
					<div class="color-quality">
						<div class="color-quality-right">							
						</div>
					</div><br/>
					<div class="occasion-cart">
                                            <form name="f" method="post" action="addtobid.php" onsubmit="javascript:return validate();">
                                                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
                                                <input type="hidden" name="base" value="<?php echo $row['price'];?>" />
                                                <input type="hidden" name="high" value="<?php echo $row['current'];?>" />
                                                <p>Your Bid: <input  name="amt" type="text" class="contact-form2" pattern="[0-9]+" /> &nbsp;&nbsp;&nbsp; <input type="submit" class="item_add hvr-outline-out button2" value="Send Bid" name="sub"/></p>
                                            </form>
					</div>
					<h1>Time Remaining</h1>
<div id="clockdiv">
<div>
	<span class="days" id="day"></span>
	<div class="smalltext">Days</div>
</div>
<div>
	<span class="hours" id="hour"></span>
	<div class="smalltext">Hours</div>
</div>
<div>
	<span class="minutes" id="minute"></span>
	<div class="smalltext">Minutes</div>
</div>
<div>
	<span class="seconds" id="second"></span>
	<div class="smalltext">Seconds</div>
</div>
</div>

<p id="demo"></p>

<script>
var deadline = new Date("<?php echo $row['dtend']; ?>").getTime();

var x = setInterval(function() {

var now = new Date().getTime();
var t = deadline - now;
var days = Math.floor(t / (1000 * 60 * 60 * 24));
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((t % (1000 * 60)) / 1000);
document.getElementById("day").innerHTML =days ;
document.getElementById("hour").innerHTML =hours;
document.getElementById("minute").innerHTML = minutes;
document.getElementById("second").innerHTML =seconds;
if (t < 0) {
	alert('TIME UP');
        window.location.href='index.php';
        clearInterval(x);         
        document.getElementById("day").innerHTML ='0'; 
        document.getElementById("hour").innerHTML ='0'; 
        document.getElementById("minute").innerHTML ='0' ;  
        document.getElementById("second").innerHTML = '0'; }
}, 1000);
</script>
		</div>
				<div class="clearfix"> </div>

				<div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
								<h5>Product Brief Description</h5>
								<p><?php echo $desc; ?></p>
							</div>
							
                                                    <div class="span9">	
								<br>
<!--								<h4 class="title">-->
									<span class="pull-left"><h1>User Comments</h1></span><br/><br/>
<!--								</h4>-->
								<?php
                                                                     $query="Select * from tblcomments where prodid='{$_GET['id']}'";
                                                                     $result=  mysqli_query($link,$query);
                                                                     echo "<table>";
                                                                     while ($rowrow=  mysqli_fetch_assoc($result)){
                                                                         echo "<tr><td style='color:brown'>{$rowrow['username']}</td></tr>";
                                                                         echo "<tr><td><textarea readonly cols='100'  style='border: transparent;'>{$rowrow['comment']}</textarea></td></tr>";
                                                                     }
                                                                     echo "</table>";
                                                                ?>
                                                                
                                                                <form name="f4" method="post" action="">
                                                                    <input type="hidden" name="id" value="<?php echo $_GET['id']?>"/>
                                                                    <textarea name="comment" cols='100' placeholder="Add your comment here" required></textarea><br/>
                                                                    <input type="submit" name="comm" value="Comment" class="item_add hvr-outline-out button2"/>
                                                                </form>
                                                                
                                                         <?php
                                                         if(isset($_REQUEST['comm'])){
                                                             if(isset(($_SESSION['id']))){
                                                                     $res=mysqli_query($link,"select username from tblproducts where id='{$_GET['id']}'");
                                                                     $rowrow=mysqli_fetch_assoc($res);                                                                     
                                                                     $res=mysqli_query($link,"insert into tblcomments(prodid,username,seller,comment) values('{$_GET['id']}','{$_SESSION['id']}','{$rowrow['username']}','{$_POST['comment']}')") or die(mysqli_error());
                                                                     if($res){
                                                                         echo "<script> alert('Product Commented');
                                                                                        window.location.href='single.php?id={$_GET['id']}' </script>";
                                                                     }else{
                                                                         echo "<script> alert('Product Comment not submitted. Please try later');
                                                                                        window.location.href='single.php?id={$_GET['id']}' </script>";
                                                                     }
                                                             }else{
                                                                 echo "<script> alert('Please login to comment the product'); </script>";
                                                             }
                                                             }
//                                                         }
                                                         ?>
                                                                
							</div>
						</div>
					</div>
				</div>
	</div>
    <?php
                    }
                    ?>
			
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
                                                                                <form name="f3" method="post" action="login.php">
											<div class="sign-up">
												<h2>Username :</h2>
												<input type="text" value="Type here" name="user" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h2>Password :</h2>
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
										<h3>Distributor Login</h3>
										<form name="f1" method="post" action="login.php">
											<div class="sign-up">
												<h2>Username :</h2>
												<input type="text" value="Type here" name="user" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h2>Password :</h2>
												<input type="password" value="Password" name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											
											<div class="sign-up">
												<input type="submit" name="distlog" value="Login" />
											</div>
                                                                                    <div class="sign-up" align="center">
                                                                                    <a href="distreg.php"> New Distributor Register...!</a>
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
