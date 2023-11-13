<?php
    function elegirHora($hora) {
        switch ($hora) {
            case 0: 
                return "15:15";
            case 1: 
                return "16:15";
            case 2:
                return "17:15";
            case 3: 
                return "18:30";
            case 4:
                return "19:30";
            case 5:
                return "20:30";
        }
    }

?>