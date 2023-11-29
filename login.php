<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" 
    integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilos3.css">
    
    <title>Document</title>
</head>
<body style="background:url('fondo.jpg')no-repeat;background-size:cover;" >

    
<form class="right"action="iniciarsecion.php" method="post" >
    <h1>Iniciar sesion</h1>
    <hr>
    <?php
    if(isset($_GET['error'])){
        ?>
        <p class="error"></p>
        <?php
        echo $_GET['error']
        ?>
        <?php
    }

?>
    <hr>
    <i class="fa-solid fa-user"></i>
    <label >Usuario</label>
    <input type="text" name="Usuario" placeholder="Nombre de Usuario ">
   
    <i class="fa-solid fa-unlock"></i>
    <label >Clave</label>
    <input type="text" name="Clave" placeholder="Clave ">
    <hr>
    <button type="submit">INICIAR SECION</button>
    <a href="Crearcuenta.php">crear cuenta</a>

    </form>
</body>
</html>