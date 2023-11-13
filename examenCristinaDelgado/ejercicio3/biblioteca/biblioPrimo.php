<?php

    function esPrimo($num){
        $boolPrimo = true;
        for($i = 2; $i < $num; $i++){
            if($num%$i == 0){
                $boolPrimo = false;
            }
        }
        return $boolPrimo;
    }
?>