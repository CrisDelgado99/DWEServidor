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
        $n = $n % count($arrInt);
        $arrDelante = array_splice($arrInt, 0, $n);
        $arrDetras = $arrInt;
        return array_merge($arrDetras, $arrDelante);
    }
    
    function rotaArrayDer($arrInt, $n){
        $n = $n % count($arrInt);
        $arrDelante = array_splice($arrInt, count($arrInt) - $n, $n);
        $arrDetras = $arrInt;
        return array_merge($arrDelante, $arrDetras);
    }
?>