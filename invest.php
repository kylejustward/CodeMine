<?php

?>
<html>
	<!--USING PHP-->
	<form action = "main.php" method = "post">
		Address<input type = "text" name = "address">
		Square Feet<input type = "number" name = "squareFeet">
		Price<input type = "number" name = "price">
		Price Per Square Feet<p name="pricePerSquareFeet" id="pricePerSquareFeet"></p>
		Closing Cost<p name="closingCost" id="closingCost"></p>
		Agents Fee<p name="agentFee" id="agentFee"></p>
		Cost of Repairs<p name="repairs" id="repairs"></p>
		<input type = "submit" name = "investBtn">
		<hr>
		Net<p name="net" id="net"></p>
		Closing Cost<p name="closingCost" id="closingCost"></p>
		Holding Cost<p name="holdingCost" id="holdingCost"></p>
		Profit<p name="profit" id="profit"></p>
		Offer<p name="offer" id="offer"></p>		
	</form>
	<!-- USING JS -->
	<form action = "" method = "post">
		Address<input type = "text" name = "address" id='address'>
		Square Feet<input type = "number" name = "squareFeet" id='squareFeet'>
		Price<input type = "number" name = "price" id='price'>
		Price Per Square Feet<p name="pricePerSquareFeet" id="pricePerSquareFeet"></p>
		Closing Cost<p name="closingCost" id="closingCost"></p>
		Agents Fee<p name="agentFee" id="agentFee"></p>
		Cost of Repairs<p name="repairs" id="repairs"></p>
		<input type = "submit" name = "investBtn">
		<hr>
		Net<p name="net" id="net"></p>
		Closing Cost<p name="closingCost" id="closingCost"></p>
		Holding Cost<p name="holdingCost" id="holdingCost"></p>
		Profit<p name="profit" id="profit"></p>
		Offer<p name="offer" id="offer"></p>	
		<script>
			var address = document.getElementById('address').value;
			var price = document.getElementById('price').value;
			var sqrFt = document.getElementById('squareFeet').value;
			var priceSqFt = price / sqrFt;
			document.getElementById("pricePerSquareFeet").innerHTML = "" + priceSqFt;
			
			
		</script>	
	</form>
</html>

