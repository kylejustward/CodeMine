    <?php 
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
