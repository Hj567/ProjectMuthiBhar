<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<meta name="GENERATOR" content="Evrsoft First Page">
<link rel="stylesheet" type="text/css" href="donationForm.css">
</head>
<body>

	 <div class="containerSide">
	
<div class="membersContainer">
	
<p class="hello"> 260</p> 
<p> Donated</p>



</div>

<div class="projectsContainer">
	
	<p class="hello"> 200</p> 
<p> PEOPLE FED</p>


</div>

<div class="visitorsContainer">
	
	<p class="hello"> 380</p> 
<p> LIVES TOUCHED</p>

<script type="text/javascript">
	
	$(".hello").counterUp({delay:10,time:2000})

</script>
	
</div>


</div>



	<form method="post" action="pgRedirect.php">
	
						
<div class="wrapper">


<div class="orderID yolo">
				
					
						<input id="ORDER_ID"tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly="readonly>


</div>

<div class="nameUserDiv yolo">
						
						<label id="helloWorld">

						<span>Name</span>
</label>

						<input title="nameUser" 
						type="text" name="nameUser" class="name" id="name" required="required">

					</div>

					<div class="emailDiv yolo">
<label>
						<span>Email Address</span>

</label>

						<input title="userEmail" 
						type="text" name="userEmail" required="required">
					
					</div>

<div class="donationAmt yolo">

<label>
						<span> Donation Amount</span>

</label>

						<input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						required="required">

					

					</div>

	<input value="Donate Now" type="submit"	onclick="" class="submit" style="background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%); height: 55px; width:400px; border-bottom: none;">
			


	<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001" hidden>

					<input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" hidden>
			
					<input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" hidden>



					

					</div>
			
	</form>
</body>

<script type="text/javascript">
	
   document.getElementById('name').addEventListener("click", function() {
  document.querySelector('.helloWorld').style.top= "100px";
});


   document.getElementById('button').addEventListener("click", function() {
  document.querySelector('.bg-modal').style.display = "flex";
});




</script>
</html>