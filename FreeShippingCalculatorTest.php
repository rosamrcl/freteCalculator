<?php

class FreeShippingCalculatorTest{

    public function ShouldApply_WhenValueisAboveMinimumTest(){
        $frete = new FreeShippingCalculator();

        $totalValue = 80;
        $totalValue = $frete->apply(value:$totalValue);

        $expectedValue = 160;
        $this->asserEquals(exp$totalValue);

        public function asserEquals($totalValue){
            if ($fete >=)
        };

    }
}
?>