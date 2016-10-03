<?php
	$share = $_GET['share'];
	
	function shareQuote(){
		echo 'its working so far' + $share;
	}
	if(isset($_GET['share'])){
		shareQuote();
	}
?>
<html>
Address<input id="address" name="address"><br>
Price<input id="price">
Square Feet<input id="sqrFt"><br>
Price Per Sqr Foot<p id="priceSqrFt"></p>
Closing Cost<p id='closingCost'></p>
Agent Fee<p id='agentFee'></p>
Repairs<input id='repairs'/><br>
Net<p id='net'></p>
Closing Cost<p id="closingCost2"></p>
HoldingCost<p id="holdingCost"></p>
Profit<p id="profit"></p>
Offer<p id="offer"></p>

<a href="invest.php?share=true"><button name="share">SHARE</button></a>

<script type="text/javascript">
var price = 0.0;
var priceGood = false;
var sqrFt = 0.0;
var sqrFtGood = false;
var priceSqrFt = 0.0;
var closingCost = 0.0;
var agentFee = 0.0;
var repairs = 0.0;
repairsGood = false;
var closingCost2 = 0.0;
var holdingCost = 0.0;
var profit = 0.0;

	document.getElementById("price").onchange = function() {
		validatePrice();
		calcPrice();
	}

	document.getElementById("sqrFt").onchange = function() {
		validateSqrFt();
		calcPrice();
	}

	document.getElementById('repairs').onchange = function(){
		validateRepairs();
		calcPrice();
	}

	function validatePrice(){
		//alert('function is running');
		if(isNaN(document.getElementById("price").value)){
			alert('Price must be a number');
			priceGood = false;
		}else{
			price = document.getElementById("price").value;
			//alert(price + ' is the value of price');
			priceGood = true;
		}
	}

	function validateSqrFt(){
		//alert('function is running');
		if(isNaN(document.getElementById("sqrFt").value)){
			alert('Square Feet must be a number');
			sqrFt = false;
		}else{
			sqrFt = document.getElementById("sqrFt").value;
			//alert(sqrFt + ' is the value of square feet');
			sqrFtGood = true;
		}
	}

	function validateRepairs(){
		if(isNaN(document.getElementById('repairs').value)){
			alert('Repairs must be a number');
			repairs = false;
		}else{
			repairs = document.getElementById('repairs').value;
			repairsGood = true;
			
		}
	}

	function calcPrice(){
		//checking if price and sqr ft have been set
		if(priceGood && sqrFtGood){
			//evaluating and printing price pr sqr ft
			priceSqrFt = price / sqrFt;
			document.getElementById("priceSqrFt").innerHTML = "$" + priceSqrFt;
			
			//evaluating and printing closing cost
			closingCost = 0.03 * price;
			document.getElementById("closingCost").innerHTML = "$" + closingCost;
			//evaluating and printing agent fee
			agentFee = 0.06 * price;
			document.getElementById("agentFee").innerHTML = "$" + agentFee;
		}
		//checking if repairs are set and preforming the rest of the calculations
		if(repairsGood){
			//calc net value
			net = price - closingCost - agentFee - repairs;
			document.getElementById('net').innerHTML = "$" + net;
			//calc and print closing cost
			closingCost2 = 0.03 * net;
			document.getElementById("closingCost2").innerHTML = "$" + closingCost2;
			//calc and print holding cost
			holdingCost = 0.05 * net;
			document.getElementById("holdingCost").innerHTML = "$" + holdingCost;
			//calc and print profit
			profit = 0.15 * net;
			document.getElementById("profit").innerHTML = "$" + profit;
			//calc and print offer
			offer = net - closingCost - holdingCost - profit;
			document.getElementById("offer").innerHTML = "$" + offer;
		}
	}
</script>
</html>
<?php 
	
?>
