<?php

class FreeShippingCalculatorTest{

    public function ShouldNotApply_WhenValueIsBelowMinimumTest(){
        $frete = new FreeShippingCalculator();

        $totalValue = 80;
        $totalValuefrete = $frete->apply(value:$totalValue);

        $expectedValue = false;
        $this->assertEquals($expectedValue,$totalValuefrete);

    }
        public function assertEquals($expectedValue, $actualValue){
            if ($expectedValue !==$actualValue){
                $message = 'Expected: ' . $expectedValue . ' but got: ' . $actualValue;
                throw new Exception(message: $message);

            }
            echo "Test Passed \n";
        }

    
}
?>