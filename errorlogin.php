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
        <h1>Error en el login</h1>
        <h2>Regístrese o vuelva atrás para reintentar</h2>
       
    <a href="registro.php">Registro</a>
    <a href="login.php">Login</a>
    <?php
    include "footer.php";
    ?>
</body>
</html>
