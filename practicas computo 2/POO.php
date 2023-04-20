<?php
//creacion de la clase 
class Mascota{
    // encapsulamientos
    private $tipo;
    private $raza;
    private $tamano;
    private $color;
     // Metodos de las propiedades 
    public function setTipo($value){
        $this->tipo=$value;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setRaza($value){
        $this->raza=$value;
    }
    public function getRaza(){
        return $this->raza;
    }
    public function setColor($value){
        $this->color=$value;
    }
    public function getColor(){
        return $this->color;
    }
}
//defineimos la clase Libros 
class Libro{
    public $genero;
    public $rama;
    public $edicion;
    public $volumen;
    }
    // instaciamos las clases
    $mascota = new Mascota();
    $mascota->setTipo("Perro");
    $mascota->setRaza("Labrador");
    $mascota->setColor("Negro");

    $libro = new Libro();
    $libro->genero="Informatica";
    $libro->rama="Telecomunicaciones";
    $libro->edicion="3";
   // mandamos a  imprimir lo que tienen las clases 
    echo "Clase mascota";
    echo "<br>";
    echo $mascota->getTipo(), "<br>";
    echo $mascota->getRaza(), "<br>";
    echo $mascota->getColor(), "<br> <br>";

    echo "Clase Libro <br>";
    echo $libro->genero, "<br>";
    echo $libro->rama, "<br>";
    echo "Edicion: ", $libro->edicion;


    
?>