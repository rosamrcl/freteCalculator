<?php
include 'autoloader.php';
$FreefreteTEST = new FreeShippingCalculatorTest();
$FreefreteTEST ->ShouldNotApply_WhenValueIsBelowMinimumTest();
?>