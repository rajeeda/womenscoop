<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>womenscoop</title>
	<!--<meta name="AUTHOR" content="Dhanushka Baranasuriya" />-->
	<meta name="COPYRIGHT" content="Copyright (c) 2017 -  ::: Association Of Asia Confederation Credit Union :::" />
	<meta name="KEYWORDS" content="Association, Asia, Confederation, Credit Union" />

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- master stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">



</head>
<body>
<?php include_once 'Header.php';?>

	<div class="comment-form contact-content">
						<div class="causes-details clearfix p_30">
							<div class="col-md-6">
							<?php if ($msg!=""){
									if($msg_ty==1){
							?>
										<lable class="text-success"><h4><?=$msg?></h4></lable>
							<?php   } elseif($msg_ty==2){
											?>
											<lable class="text-danger"><h4><?=$msg?></h4></lable>
										<?php
									}else{
										?>
										<lable class="text-danger"><h4><?=$msg?></h4></lable>
										<?php
									}
								}

								?>
							<form id="paymentForm" method="post" action="https://ipay.bangkokbank.com/b2c/eng/payment/payForm.jsp">


<input type="hidden" name="merchantId" value='2563'>

<div class="form-group">
    <label for="orderRef1">Customer Name:</label>
    <input type="text" class="form-control" id="customer_name" name="orderRef1" placeholder="Customer Name" autocomplete="off" required />
</div>

<div class="form-group">
    <label for="orderRef2">Email Address:</label>
    <input type="text" class="form-control" id="email_address" name="orderRef2" placeholder="Email Address" autocomplete="off" required />
</div>  
<div class="form-group">
    <label for="amount2">Product Name:</label>
    <Select><option value='<?=$id?>'>Donate</option>
    	<?php foreach ($products as $key => $value) {?>
    		<option value='<?=$value->id?>'><?=$value->name?></option>
    	<?php }?>
    	
    </Select>
</div>  	
<div class="form-group">
    <label for="amount">Donation Amount ($):</label>
    <input type="text" class="form-control" id="amount" name="amount" placeholder="Donation Amount" autocomplete="off" required />
</div> 

<input type="hidden" id='order_id' name="orderRef" value="">

<input type="hidden" name="currCode" value="840" > 

<input type="hidden" id="successUrl" name="successUrl" value="<?php echo base_url(); ?>index.php/Donation/succes?id=">

<input type="hidden" id="failUrl" name="failUrl" value="<?php echo base_url(); ?>index.php/Donation/error?id=1"> 

<input type="hidden" id="cancelUrl" name="cancelUrl" value="<?php echo base_url(); ?>index.php/Donation/cancel?id=1">

<input type="hidden" name="payType" value="N"> 

<input type="hidden" name="lang" value="E"> 

<input type="hidden" name="remark" value="-"> 

<input type="hidden" name="redirect" value="30"> 

<input type="hidden" id='product_id' name="orderRef3" value="1"> 

<input type="hidden" name="orderRef4" value="add-ref-00004"> 

<input type="hidden" name="orderRef5" value="add-ref-00005"> 
 

<button id='submitButton' type="submit" name="Post" class="thm-btn" value='Submit'>Submit</button> 

</form>
</div>
</div>
</div>
	<?php include_once 'Footer.php';?>
	<section class="footer-bottom">
		<div class="container text-center">
			<p>© 2017 Association of Asian Confederation of Credit Unions - All Rights Reserved <a href="#">Association of Asian Confederation</a></p>

		</div>
	</section>


	<!-- main jQuery -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<!-- bootstrap -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<!-- bx slider -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.bxslider.min.js"></script>
	<!-- owl carousel -->
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<!-- validate -->
	<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
	<!-- mixit up -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.mixitup.min.js"></script>
	<!-- fancybox -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js"></script>
	<!-- easing -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
	<!-- circle progress -->
	<script src="<?php echo base_url(); ?>assets/js/circle-progress.js"></script>
	<!-- appear js -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
	<!-- count to -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.countTo.js"></script>
	<!-- gmap helper -->
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyAMXC-Pf0_AsU3x19JKJ4oxgphZYvwUHyA"></script>
	<!-- gmap main script -->
	<script src="<?php echo base_url(); ?>assets/js/gmap.js"></script>

	<!-- isotope script -->
	<script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
	<!-- jQuery ui js -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.11.4/jquery-ui.js"></script>
<script>
$(document).ready(function () {
  $("#submitButton").click(function (e) {
    var customer_name= $("#customer_name").val(); 
	var email= $("#email_address").val(); 
	var product_id=$("#product_id").val();
	var amount= $("#amount").val();
        $.ajax({
            url:'<?php echo base_url(); ?>index.php/Donation/addorder?id=1',
            type: 'POST',
            data: {customer_name:customer_name,email:email,product_id:product_id,amount:amount},
            dataType: 'json',
            success: function(response){
            	$(response).each(function(index,ord) {
            		$("#order_id").val(ord.order_id);
            		$("#successUrl").val("");
            	$("#failUrl").val("");
            	$("#cancelUrl").val("");
            	$("#successUrl").val("<?php echo base_url(); ?>index.php/Donation/succes?id="+ord.order_id);
            	$("#failUrl").val("<?php echo base_url(); ?>index.php/Donation/error?id="+ord.order_id);
            	$("#cancelUrl").val("<?php echo base_url(); ?>index.php/Donation/cancel?id="+ord.order_id);

            	$("#paymentForm").submit();
            	});

            },
            error: function(e){
                console.log(e)
            }
            
         });
	});
});

</script>
</body>
</html>