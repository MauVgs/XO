<?php 

    $texto = "ooxXm";
    $texto = strtoupper($texto);

    $resultado = XO($texto);


    function XO($string){
        $resultado = True;
        $string = str_split($string);
        $res = array_count_values($string);

        $resX = $res["X"];
        $resO = $res["O"];

        

        if($resX == $resO){
            print_r("Correcto");
            $resultado = True;
        }
        else{
            print_r("Incorrecto");
            $resultado = False;
        }

        return $resultado;
    }
?>