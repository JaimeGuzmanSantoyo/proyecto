

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class=" blue lighten-2"style="height:300px;"><center> <p class="flow-text">
Conectado
</p></center>
</div>
</body>
</html><?php

$Server = "localhost";
$usuario = "root";
$passw = "1234";
$namedb= "proyectofinal";


$conexion = new mysqli($Server,$usuario,$passw,$namedb,3308); // en este caso le indique mi puerto dado que lo tuve que cambiar en xampp

if($conexion->connect_error){
    die("la conexion ha fallado".$conexion ->connect_ernno);
}else{
echo " Conectado ";
}

echo "<h1><br><a href='inicio.php'>conectar al inicio </br></a></h1>";

?>
