<!DOCTYPE html>
<html lang="es">
<head>
<?php
 include "nav.php";
?>
</head>
<body id="particles-js">
    <script src="js/particles.min.js"></script>
    <script src="js/particles.js"></script>
  
        
    <div class='login'>
    <h1 style="margin-top: -10px;">Inicio de sesión:</h1>
       <form action="autenticado.php" method="POST">
            
            <input type="text" name="usuario" placeholder="usuario">
            <input type="password" name="pass" placeholder="contraseña">
            <br><br>
            <button class="btn waves-effect waves-light" type="submit"  name="enviar" id="enviar">
            Enviar
            <i class="material-icons right">send</i>
            </button>
            
            <button class="btn waves-effect waves-light" type="submit"  name="enviar" id="enviar">
            <a style="color:white;" href="registro.php">Registro</a>
            <i class="material-icons right">person_add
            </i>
            </button>
            
            <button class="btn waves-effect waves-light red lighten-2"   name="salir" id="salir" >
            <a style="color:white;" href="cerrarsesion.php">salir</a>
            <i class="material-icons right">directions_walk
            </i>
            </button>
            
        </form>
       
    </div>
    
    
    <?php
        
        include "autenticado.php";
        include "footer.php";
    
    ?>
</body>
</html>