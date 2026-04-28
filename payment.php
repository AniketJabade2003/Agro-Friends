<!DOCTYPE html>
<html>
<head>
<title>Payment Form</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="online/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="online/js/jquery.min.js"></script>
</head>
<style>
.button {
  background-color: #04AA6D; /* Green */
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body>
	<div class="main">
		<h1>Payment</h1>
		<div class="content">
			
			<script src="online/js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
                                      
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit/Debit Card</span></li>
										  <!--<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>-->
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											
											<h3 class="pay-title">Credit/Debit Card Info</h3>
											<form name="f" method="post" action="transaction.php">
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" name="name" value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" name="cardno" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
                                                                                                                                    <input type="text" name="mm" class="text_box" value="MM" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM';}" type="text" type="text"  maxlength="2" />	
																</li>
																<li>
                                                                                                                                    <input type="text" name="yy" class="text_box" Value="YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YY';}" type="text" maxlength="2" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxx" name="cvv" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxx';}" required="">
													</div>
                                                                                                    <div class="clear"></div>
                                                                                                    <div class="tab-for">
													<h5>Address</h5>
                                                                                                        <input type="text" name="addr">
													<h5>Mobile Number</h5>													
                                                                                                        <input name="mob" type="text" pattern="[6,7,8,9][0-9]{9}" required>
                                                                                                    </div>	
													<div class="clear"></div>
												</div>
                                                                                </div><input type="hidden" name="amt" value="<?php echo $_GET['amt']; ?>"/>
                                                                                      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
                                                                                      <input type="submit" class="button" value="Pay" name="credit">
											</form>
											<div class="single-bottom">
													<ul>
														
													</ul>
											</div>
										</div>
									</div>
									
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Dedit Card Info</h3>
											<form name="f1" method="post" action="transaction.php"> 
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" name="name" value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" name="cardno" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="text" name="mm" class="text_box" type="text" value="MM" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM';}"  maxlength="2" />	
																</li>
																<li>
																	<input type="text" name="yy" class="text_box" type="text" value="YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YY';}"  maxlength="2" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxx" name="cvv" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxx';}" required="">
													</div>
													<div class="clear"></div>
                                                                                                </div><input type="hidden" name="amt" value="<?php echo $_GET['amt']; ?>"/>
												<input type="submit" value="SUBMIT" name="debit">
											</form>
											<div class="single-bottom">
													
											</div>
										</div>	
									</div>
								</div>	
							</div>
						</div>	
		</div>
	</div>
</body>
</html>