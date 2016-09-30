    <?php 
    /*
     * Mortage Calculator Code
     */
    	$principleAmount = $_POST['principleAmount'];
    	$interestRate = $_POST['interestRate'];
    	$interestRate = $interestRate / 100;
    	$years = $_POST['years'];
    	$months = $years * 12;
    	$monthlyPayments = (($interestRate * pow((1 + $interestRate),$months)) / (pow((1 + $interestRate),$months)-1));
    	$monthlyPayments *= $principleAmount;
    	if(isset($_POST['principleAmount'])){
    	echo "$monthlyPayments";
    	}
    ?>
    
    <?php 
    /*
     * Investment Tab Code
     *
    	$address = $_POST['address'];
    	$sqrFt = $_POST['squareFeet'];
    	$price = $_POST['price'];
    	
    	$priceSqrFt = 0.0;
    	$closingCost = 0.0;
    	$agent = 0.0;
    	$repairs = 0.0;
    	
    	*/
    	
    ?>
