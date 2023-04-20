<?php
include "functions.php";
$action=$_POST['action'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];

if($action =="guardar"){
    saveData($name, $lastname, $age);
    //redirigir
    header('Location: index.php');
}

//funcion para editar registro
if($action == "editar"){
    $cod = $_POST['cod'];  
    //actualizar datos

    updateData($cod, $name, $lastname, $age);

     //redirigir
     header('Location: index.php');
}

// eliminar registro

if($action == "eliminar"){

    $cod =$_POST['cod'];
    //llamamos la funcion eliminar 
    deleteData($cod);

    header('Location: index.php');
}

?>