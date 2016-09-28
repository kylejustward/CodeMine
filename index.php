<?php 
 $principleAmount = 0.0;
 $interestRate = 0.0;
 $numOfYears = 0.0;
 $monthlyPayments = 0.0;
 $totalAmountOwed = 0.0;
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Morgage Calculator</title>
  </head>
  <body>
    <form action = "$_SERVER['PHP_SELF']" method = "post">
      Morgage Amount<input type = "number" name = "principleAmount">                                                
    </form>
  </body>
</html>
