<?php
    function voltear($num){
        $numVolt = "";
        while($num > 0){
            if($num%10 != 0){
                $numVolt .= $num%10;
            }
            $num = (int) $num/10;
        }

        return $numVolt;
    }

    function esCapicua($num){
        $volteado = voltear($num);
        if($num == $volteado){
            return true;
        } else {
            return false;
        }
    }

    function esPrimo($num){
        $boolPrimo = true;
        for($i = 2; $i < $num; $i++){
            if($num%$i == 0){
                $boolPrimo = false;
            }
        }
        return $boolPrimo;
    }

    function siguientePrimo($num){
        $num++;
        while(!esPrimo($num)){
            $num++;
        }
        return $num;
    }

    function potencia($base, $exp){
        $potencia = 1;
        for($i = 0; $i < $exp; $i++){
            $potencia *= $base;
        }
        return $potencia;
    }

    function digitos($num){
        return strlen($num);
    }

    function digitoN($num, $n){
        return substr($num, $n-1, 1);
    }

    function posicionDigito($num, $digito){
        for($i = 1; $i <= digitos($num); $i++){
            if(digitoN($num, $i) == $digito){
                return $i;
            }
        }
        return -1;
    }

    function quitaPorDetras($num, $numDig){
        for($i = 0; $i < $numDig; $i++){
            $num = (int) $num/10; 
        }

        return (int)$num;
    }

    function quitaPorDelante($num, $numDig){
        $num = voltear($num);
        $num = quitaPorDetras($num, $numDig);
        return voltear($num);
    }

    function pegaPorDetras($num, $digito){
        return $num . $digito;
    }

    function pegaPorDelante($num, $digito){
        return $digito . $num;
    }

    function trozoDeNumero($num, $inicial, $final){
        $numCifras = $final - ($inicial - 1);
        return substr($num, $inicial-1, $numCifras);
    }

    function juntaNumeros($num1, $num2){
        return $num1 . $num2;
    }

    function binarioADecimal($binario){
        $i = 0;
        $decimal = 0;
        while($binario > 0){
            if($binario%10 == 1){
                $decimal += potencia(2, $i); 
            }

            $i++;
            $binario = (int)$binario/10;
        }

        return $decimal;
    }

    function decimalABinario($num){
        $binario = "";
        while((int)$num > 0){
            
            $binario = $num%2 . $binario;
            $num = (int)$num/2;
        }

        return $binario;   
    }

?>