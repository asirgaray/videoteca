<!DOCTYPE html>
<html lang="es">
<head>
<?php
 include "head.php";
?>
    <style></style>
</head>
<body id="particles-js">
    
    <script src="js/particles.min.js"></script>
    <script src="js/particles.js"></script>
   
      
    <?php
        include "nav.php";
        include "conexion.php";
        echo "<h1 class='h1'><a href='#' > Lista de películas</a></h1>"; 
        if(isset($_POST["titulo"])) {
            $titulo=$_POST["titulo"];
            $select = "select *,g.nombre, 
            date_format(fecha,'%d - %m - %Y') 'fecha' 
            from peliculas p, generos g where p.genero = g.genero_id where titulo like '%$titulo%'";
        }else {
            $select = "select *,g.nombre, 
            date_format(fecha,'%d - %m - %Y') 'fecha' 
            from peliculas p, generos g where p.genero = g.genero_id" ;
        }
        $rs = mysqli_query($con, $select);
        
        while ($fila = mysqli_fetch_assoc($rs)) {
            $sinopsis500 = substr($fila["sinopsis"], 0, 500);
            $sinopsis500 = $sinopsis500." ..."; 
            $id=$fila["pelicula_id"];
            
            echo "<div class='caja' '>";
            echo "<div class='grid gallery'>";
            echo "<img sytle='float:left;' src='".$fila["imagen"]."'>";
            echo "</div></div>";
            echo "<div class='desc'>";
            echo"<h3>".$fila['titulo']."</h3>
            <b>Director: </b>".$fila["director"]."
            </p><p><b>Sinopsis:  </b>".$sinopsis500."</p>
            <p><b>Genero: </b>".$fila["nombre"]."</p>
            <p><b>Duracion: </b>".$fila["duracion"]."</p>
            <p><b>Fecha de lanzamiento: </b>".$fila['fecha']."</p>
            <a class='waves-effect waves-light btn' href='detalle.php?id=$id'>
            <i class='material-icons right'>details</i>Detalles</a>
            <a class='waves-effect waves-light btn green' href='actualizar.php?id=".$fila["pelicula_id"]."'><i class='material-icons right'>update</i>Actualizar</a>
            <a class='waves-effect waves-light btn red' href='eliminar.php?id=".$fila["pelicula_id"]."'><i class='material-icons right'>delete</i>Eliminar</a>";
            echo "</div>";
           

        }
       include "footer.php";
    ?>
</body>
</html>