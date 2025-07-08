<?php
class FreeShippingCalculator{
    const Minimum_Value_FreteFree =150;


    public function apply($value){
        if ($value >=self::Minimum_Value_FreteFree){
            return true;
        }else{
            return false;
        }
    }
}
?>