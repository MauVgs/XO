<?php 

    $texto = "ooxxx";
    

    $resultado = XO($texto);


    function XO($string){
        $resultado = TRUE;
        $string = strtoupper($string);
        $string = str_split($string);
        $res = array_count_values($string);

        $resX = $res["X"];
        $resO = $res["O"];

        

        if($resX == $resO){
            print_r("Correcto");
            $resultado = TRUE;
        }
        else{
            print_r("Incorrecto");
            $resultado = FALSE;
        }

        return $resultado;
    }
?>