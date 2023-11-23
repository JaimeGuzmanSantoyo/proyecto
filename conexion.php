<?php

$Server = "localhost";
$usuario = "root";
$passw = "1234";
$namedb= "proyectofinal";


$conexion = new mysqli($Server,$usuario,$passw,$namedb,3308); // en este caso le indique mi puerto dado que lo tuve que cambiar en xampp

if($conexion->connect_error){
    die("la conexion ha fallado".$conexion ->connect_ernno);
}else{
echo "----------------------Humano la conexion esta establecida ,Bienvenido a la matrix ------01100011 01101111 01101101 01100101 01101110 01111010 01100001 01101110 01100100 01101111 00100000 01100101 01101100 00100000 01110000 01110010 01101111 01100011 01100101 01110011 01101111 00100000 ";
}

echo "<h1><br><a href='eliminarformato.php'>conectar al inicio </br></a></h1>";

?>
