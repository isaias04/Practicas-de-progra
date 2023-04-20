<?php 
//interfaces 
interface Inadar{
   public function getpato(); 
   public function getpinguino(); 
}
interface Ivolar{
    public function getgallina(); 
    public function getcondor();
}
//implementacin de las interfaces 
class Ave implements Inadar, Ivolar{
    public $pato;
    public $pinguino;
    public $gallina;
    public $condor;

    function __construct($_pato,  $_pinguino, $_gallina, $_condor){
        $this->pato=$_pato;
        $this->pinguino=$_pinguino;
        $this->gallina=$_gallina;
        $this->condor=$_condor;

    }
    
    public function getpato(){
        return $this->pato;
    }
    public function getpinguino(){
        return $this->pinguino;
    }
    public function getgallina(){
        return $this->gallina;
    }
    public function getcondor(){
        return $this->condor;
    }
}
$ave = new Ave("Pato", "Pinguino", "Gallina", "Condor");
/*echo $ave->getpato(),"<br>";
echo $ave->getpinguino(),"<br>";
echo $ave->getgallina(),"<br>";
echo $ave->getcondor();*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
</head>
<body>
   <h2> LABORATORIO 2</h2> <br>
   <h3> Clases e Interfaces</h3> 
    Aves 
   <table border=1> 
        <td> Nadar</td>
        <td> Volar</td>
    </tr>
    <tr>
        <td> <?php echo $ave->getpato();?></td>
        <td> <?php echo $ave->getgallina(); ?></td>
    </tr>
    <tr>
        <td> <?php echo $ave->getpinguino(); ?> </td>
        <td> <?php echo $ave->getcondor(); ?> </td>
    </tr>

     </table> 
</body>
</html>