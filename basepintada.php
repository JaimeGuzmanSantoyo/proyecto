<?php

// se usa el requiere para si psi se necesita el archivo conexion
require "conexion.php";
mysqli_set_charset($conexion,'utf8');


//genear el query
$consulta_sql="SELECT * FROM persona";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 


echo "<table border='2' >
    <tr>
        <th>Clave</th>
        
        <th>Usuario</th>
        
    </tr>";

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['Clave'] ."</td>";
  
     echo"<td>". $row['Usuario'] ."</td>";
     echo"<td>". $row['Nombre_completo'] ."</td>";
     
    }
    echo "</table>";

}else{
    
    
    echo"<h1 style='color:red' >Sin Ningun registro</h1>";
    }

    echo "<h1><a href='login.php'>Voler al Formulario </a></h1>";

?>


