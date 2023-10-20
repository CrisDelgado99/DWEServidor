<?php
    
    function impArray($arr){
        for($i= 0;$i<count($arr);$i++){
            if($i==count($arr)-1){
                echo $arr[$i];
            } else {
                echo $arr[$i] . ", ";
            }
        }
    }
    function generaArrayInt($tamanio, $min, $max){
        $arrInt = [];
        for ($i = 0; $i < $tamanio; $i++) {
            $arrInt[$i] = rand($min, $max);
        }

        return $arrInt;
    }

    function minArrayInt($arrInt){
        return min($arrInt);
    }

    function maxArrayInt($arrInt){
        return max($arrInt);
    }

    function mediaArrayInt($arrInt){
        $suma = 0;
        for($i = 0; $i < count($arrInt); $i++){
            $suma += $arrInt[$i];
        }
        return $suma/count($arrInt);
    }

    function estaEnArrayInt($arrInt, $num){
        $esta = false;
        for($i = 0; $i < count($arrInt); $i++){
            if($arrInt[$i] == $num){
                $esta = true;
            }
        }
        return $esta;
    }

    function posicionEnArrayInt($arrInt, $num){
        for($i = 0; $i < count($arrInt); $i++){
            if($arrInt[$i] == $num){
                return $i;
            }
        }
        return -1;
    }

    function volteaArrayInt($arrInt){
        $arrResultado = [];
        $i2 = count($arrInt) - 1;
        for($i = 0; $i < count($arrInt); $i++){
            $arrResultado[$i2] = $arrInt[$i];
            $i2--;
        }

        return $arrResultado;
    }

    function rotaArrayIzq($arrInt, $n){
        $arrDelante = [];
        $arrDetras = [];
        for($i = 0; $i < count($arrInt); $i++){
            if($i < $n){
                array_push($arrDetras, $arrInt[$i]) ;
            } else {
                array_push($arrDelante, $arrInt[$i]) ;
            }
        }

        return array_merge($arrDelante, $arrDetras);
        
    }

    function rotaArrayDer($arrInt, $n){
        $arrDelante = [];
        $arrDetras = [];
        for($i = 0; $i < count($arrInt); $i++){
            
            if($i < count($arrInt) - $n){
                array_push($arrDelante, $arrInt[$i+$n]) ;
            } else {
                array_push($arrDetras, $arrInt[$i-$n]) ;
            }
        }

        return array_merge($arrDelante, $arrDetras);
        
    }
?>