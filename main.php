    <?php 
    	$principleAmount = $_POST['principleAmount'];
    	$interestRate = $_POST['interestRate'];
    	$interestRate = $interestRate / 100;
    	$years = $_POST['years'];
    	$months = $years * 12;
    	$monthlyPayments = $principleAmount * (($interestRate * pow((1 + $interestRate),$months)) / (pow((1 + $interestRate),$months)-1));
    	
    	if(isset($_POST['principleAmount'])){
    	echo "$principleAmount";
    	}
    ?>