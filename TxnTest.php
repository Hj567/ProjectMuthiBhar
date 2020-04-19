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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<meta name="GENERATOR" content="Evrsoft First Page">
<link rel="stylesheet" type="text/css" href="donationForm1.css">
</head>
<body>

<section>
	 
<div class="svg-wrapper">
	
<div class="svg">
	
	<img src="undraw_gifts_btw0 10.05.46 PM.svg">

</div>


</div>

	
	
						
<div class="wrapper">


<form method="post" action="pgRedirect.php">
				
				<div>
					
						<input id="ORDER_ID"tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly="readonly" type="text">



</div>

						
						
<div>
						<input title="nameUser" 
						type="text" name="nameUser" class="name" id="name" required="required" placeholder="Name">

					

			</div>

			<div>		


						<input title="userEmail" 
						type="text" name="userEmail" required="required" placeholder="E-mail">
					
					

</div>

<div>

						<input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						required="required" placeholder="Donation Amount">

					

			</div>	

<div class="submitBtn">
	
	<input value="Donate Now" type="submit"	onclick="" class="submit">
			
</div>

	<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001" hidden>

					<input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" hidden>
			
					<input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" hidden>



					

					
			
	</form>

	</div>

	</section>
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