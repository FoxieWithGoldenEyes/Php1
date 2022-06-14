

<form action="zad7.php" method="get">
    <input type="number" name="quantity" id="quantity" value="1"/>
    <label for="quantity">Ile?</label>
    <br/><br />
    <input type="radio" name="currency" id="EUR_TO_USA" value="EUR_TO_USA" />
    <label for="EUR_TO_USA">EUR -> USA</label>
    <br />
    <input type="radio" name="currency" id="EUR_TO_PL" value="EUR_TO_PL" />
    <label for="EUR_TO_PL">EUR -> PL</label>
    <br />
    <input type="radio" name="currency" id="PL_TO_USA" value="PL_TO_USA" />
    <label for="PL_TO_USA">PL -> USA</label>
    <br />
    <input type="radio" name="currency" id="USA_TO_EUR" value="USA_TO_EUR" />
    <label for="USA_TO_EUR">USA -> EUR</label>
    <br />
    <input type="radio" name="currency" id="PL_TO_EUR" value="PL_TO_EUR" />
    <label for="PL_TO_EUR">PL -> EUR</label>
    <br /><br />
    <input type="submit" value="Send" />
</form>



<?php
$converters = array('EUR_TO_USA' => 3, 'EUR_TO_PL' => 4, 'PL_TO_USA' => 1/3, 'USA_TO_EUR' => 4/3, 'PL_TO_EUR' => 1/4);
$currency = $_GET['currency'];
$quantity = $_GET['quantity'];
echo "Przelicznik: $quantity * $converters[$currency]<br/>";
echo 'Razem: '.$quantity*$converters[$currency];
?>







