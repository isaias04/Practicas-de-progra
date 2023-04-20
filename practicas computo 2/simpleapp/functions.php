<?php
//archivo
//$file="datos.txt";
define('FILE', "datos.txt");

//funcion para listar datos
function getData(){
    //si el archivo no exixte lo creamos
    if(!file_exists(FILE)){
        file_put_contents(FILE, '');
    }
    //obtener datos del archivo
    $data= file_get_contents(FILE);
    $data=json_decode($data, true);

    //
    if(!is_array($data)){
        $data=array();
    }
    return $data;
}
//funcion para guardar datos

function saveData($name, $lastname, $age){
// obtenemos los datos actuales del archivo
$data=getData();
//crear nuevo registro
$record = array(

    "name" => $name,
    "lastname" => $lastname,
    "age" => $age,
);
//agregar el nuevo registro al array de datos
$data[] = $record;
//converrtimos el array a formato json
$data = json_encode($data);
file_put_contents(FILE, $data);
}

// funcion para modificar registros
function updateData($cod, $name, $lastname, $age){
    //obtenemos datos actuales del archivo
    $data=getData();
   // actualizamos el registro 
    $data[$cod]['name'] = $name;
    $data[$cod]['lastname'] = $lastname;
    $data[$cod]['age'] = $age;

    //convertir a formato json

    $data = json_encode($data);
    file_put_contents(FILE, $data); 
}

//funcion para eliminar
function deleteData($cod){
    $data= getData();

    //eleminar

    unset($data[$cod]);

    //reindexar el array

    $data=array_values($data);
    //convertimos el array a formato joson y guardar el archivo

    $data = json_encode($data);
    file_put_contents(FILE, $data);
}

?>
