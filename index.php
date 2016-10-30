<?php 
require_once('class_currentor.php');
$currentor = new Currentor();


echo '1 PLN to PHP:<br>';
echo $currentor->convertCurrency(1, 'PLN', 'PHP');

echo '<br>1 PLN to USD:<br>';
echo $currentor->convertCurrency(15, 'PLN', 'USD');

echo '<br><a href="https://github.com/Dante383/php-class-currentor">https://github.com/Dante383/php-class-currentor</a>';
?>
