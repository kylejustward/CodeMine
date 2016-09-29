<?php 
$principleAmount = 1.0;
$interestRate = 1.0;
$years = 1.0;
$months = 1.0;
$monthlyPayments = 1.0;
?>

<html>
  <head>
    <title></title>
    <title>Morgage Calculator</title>
  </head>
  <body>
    <form action = " main.php " method = "POST"><br>
      Morgage Amount<input type = "number" name = "principleAmount"> <br>
      Interest Rate<input type = "number" name = "interestRate"><br>
      Length of Loan in Years<input type = "number" name = "years"><br>
      <input type="submit" name="submit" value="CalculatePayments">                                               
    </form>

  </body>
</html>
