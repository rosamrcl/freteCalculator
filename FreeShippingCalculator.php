<?php
class FreeShippingCalculator{
    const Minimum_Value =150;


    public function apply($value){
        if ($value >=self::Minimum_Value){
            return $value;
        }
    }
}
?>