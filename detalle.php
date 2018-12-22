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
include("conexion.php");

$select = "select * from peliculas,generos where  genero=genero_id and  pelicula_id=".$_GET['id'];
$rs=mysqli_query($con,$select);
$fila=mysqli_fetch_assoc($rs);
    $pelicula_id=$fila['pelicula_id'];
    $titulo=$fila['titulo'];
    $director=$fila['director'];
    $sinopsis=$fila['sinopsis'];
    $genero=$fila['nombre'];
    $duracion=$fila['duracion'];
    $fecha=$fila['fecha'];
    $fecha= date("Y-m-d", strtotime($fecha));
    $trailer=$fila['trailer'];

mysqli_close($con);

?>
  
<div class="caja2">
 <table>
    <tr>
        <th>Titulo</th>
        <td><?php echo $titulo   ?></td>
    </tr>
    <tr>
        <th>Director</th>
        <td><?php echo $director?></td>
    </tr>
    <tr>
        <th>Sinopsis</th>
        <td><textarea id="textarea"  rows="15" cols="70">  <?php echo $sinopsis   ?></textarea> </td>
    </tr>
    <tr>
        <th>Genero</th>
        <td><?php echo  $genero  ?></td>
    </tr>
    <tr>
        <th>Duracion</th>
        <td><?php echo  $duracion  ?></td>
    </tr>
     <tr>
        <th>Fecha</th>
        <td><?php echo  $fecha  ?></td>
    </tr>  
    </table> 
    <?php
    echo "
    <div style='margin-top: 50px;'>
    <img style='margin-right:20px;' src='".$fila['imagen']."' width='350px' height='490px'>";
            echo"<iframe width='673' height='490' src='https://www.youtube.com/embed/$trailer' frameborder='0' allow='accelerometer encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
            </div>";
    
    
   
    ?>
</div>
   <?php include "footer.php";   ?>


</body>
</html>