<?php

//Evaluar si se esta inviando algo
if(isset($_POST["enviar"])){

    //declaracion de variable
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = strtolower ($_POST['operacion']);
    //opereraciones a realizar
    $operaciones = array('suma','resta', 'multiplicacion' ,'division');
    
    //evaluar si la opercion exixte en el array $operaciones 
    if(!in_array($operacion, $operaciones)){
        echo "La operacion no es valida";
        exit();
    }
    
    switch($operacion){
        case "suma": 
            $resultado = $num1 + $num2;
            break;
    
        case "resta":
        $resultado =  $num1 - $num2;
        break;
        case "multiplicacion":
            $resultado =  $num1 * $num2;
            break;
        case "division":
        if ($num2 == 0){
            echo "No se puede dividir por  cero";
    
        }
        $resultado =  $num1 / $num2;
        break;
    
    }
    
    echo "El resulatdo es la $operacion de $num1 y $num2 es : $resultado";
}



?>