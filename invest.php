
<html>

	
	<!-- USING JS -->
	  
	<form>
		Address<input type = "text" name = "address" id="address">
		Square Feet<input type = "number" name = "squareFeet" id="squareFeet">
		Price<input type = "number" name = "price" id="price"><br>
		Price Per Square Feet<p  id="pricePerSquareFeet"></p>
		
		Closing Cost<p  id="closingCost"></p>
		Agents Fee<p  id="agentFee"></p>
		Cost of Repairs<p  id="repairs"></p>
		<input type = "submit" name = "investBtn"/>	
		<hr>
		Net<p  id="net"></p>
		Closing Cost<p  id="closingCost"></p>
		Holding Cost<p  id="holdingCost"></p>
		Profit<p  id="profit"></p>
		Offer<p  id="offer"></p>

		<button onclick="return CalcPrice();">Test button</button>
		<script>
			function CalcPrice(){
				alert("Not this again!!");
				var address = document.getElementById("address").value;
				var price   = document.getElementById("price").value;
				var sqrFt   = document.getElementById("squareFeet").value;
				var priceSqrFt = price / sqrFt;
				document.getElementById("pricePerSquareFeet").innerHTML =  priceSqrFt;
				return false;
			}	
		</script>	
	</form>
</html>

