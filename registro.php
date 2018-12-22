<!DOCTYPE html>
<html lang="es">
<head>
<?php
 include "head.php";
?>
</head>
<body id="particles-js">
    <script src="js/particles.min.js"></script>
    <script src="js/particles.js"></script>
    <?php
        include "nav.php";
        include "conexion.php";
    ?>
    <div class="login">
        <h1>Registro</h1>
       
        <form method="POST">
            <input type="text" name="usuario" placeholder="usuario">
            <input type="password" name="cont" placeholder="contraseña">
            <input type="email" name="email" placeholder="Email">
            <button class="btn waves-effect waves-light" type="submit"  name="enviar" id="enviar">
            Enviar
            <i class="material-icons right">send</i>
            </button>
        </form>
    
<?php
    if(isset($_POST["enviar"])) {
        $usuario = $_POST["usuario"];
        $cont = $_POST["cont"];
        $email = $_POST["email"];
        //contraseña encriptada
        //$password = password_hash($cont, PASSWORD_BCRYPT);
        //descomentar para usar una contraseña sin encriptar
        $password = $cont;
        $insert = "insert into users values('$usuario','$password','$email')";
        if(mysqli_query($con,$insert)) {
            $_SESSION["autorizado"]=true;
            $_SESSION["usuario"]=$usuario;
            echo "usuario registrado con éxito";
        }else {
            echo "Se ha producido un error al registrar el usuario";
     
        
        }
        
    }
    
?>
     </div>   
    
    <?php include "footer.php"; ?>
</body>
</html>
