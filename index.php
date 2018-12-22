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
    echo "<h1 class='h1'><a href='#' >RECOMENDADAS</a></h1>"; 

    
    $select = "select * from peliculas order by rand() limit 6";
    
    $rs = mysqli_query($con, $select);
    
    echo "<div class='caja'>";
    echo "<div class='grid gallery'>";
    
    while ($fila = mysqli_fetch_assoc($rs)) {
        $id=$fila["pelicula_id"];
        echo "<a href='detalle.php?id=$id'./>";
        echo "<img src='".$fila["imagen"]."'>";
    }


    echo "</div>";
    echo "</div>";
    
    include "footer.php";

?>

  
</body>
</html>