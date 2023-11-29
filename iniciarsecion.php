<?php
session_start();
include('conexion.php');
if(isset($_POST['Usuario'])&& isset($_POST['Clave'])){
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$Usuario = validate($_POST['Usuario']);
$Clave = validate($_POST['Clave']);
if(empty($Usuario) ){
header("location:login.php?error= el usuario es requerido ");
exit();
}else if(empty("$Clave")){
    header("location:login.php?error= la clave  es requerido ");
    exit();
}else{
  //  $Clave = md5($Clave);
    $Sql = "SELECT * FROM  persona where Usuario = '$Usuario' and  Clave= '$Clave'";
$result = mysqli_query($conexion,$Sql);

if(mysqli_num_rows($result)=== 1 ){
    $row= mysqli_fetch_assoc($result);
    if($row['Usuario']===$Usuario && $row['Clave']===$Clave){
        $_SESSION['Usuario'] =$row['Usuario'];
        $_SESSION['Nombre_completo'] =$row['Nombre_completo'];
        $_SESSION['Id'] =$row['Id'];
        header("Location: inicio.php");
        exit();

    }else{
        header("Location:login.php?error=el usuario o la contraseña estan mal ");
    exit();
    }
}else{
    header("Location:login.php?error=el usuario o la contraseña estan mal ");
    exit();
}
}



}else{
    header("Location:login.php");
    exit();
}
