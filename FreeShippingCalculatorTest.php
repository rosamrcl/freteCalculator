<?php

class FreeShippingCalculatorTest{

    public function ShouldApply_WhenValueisAboveMinimumTest(){
        $frete = new FreeShippingCalculator();

        $totalValue = 80;
        $totalValuefrete = $frete->apply(value:$totalValue);

        $expectedValue = false;
        $this->asserEquals($expectedValue,$totalValue);

    }
        public function asserEquals($expectedValue, $actualValue){
            if ($expectedValue !==$actualValue){
                $message = 'Expected: ' . $expectedValue . ' but got: ' . $actualValue;
                throw new Exception(message: $message);

            }
            echo "Test Passed \n";
        }

    
}
?>