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

 <?php
include("conexion.php");


if(!isset($_POST['eliminar'])){

$SQL = "SELECT * FROM peliculas where pelicula_id=".$_GET['id'];
$RS=mysqli_query($con,$SQL);
$fila=mysqli_fetch_assoc($RS);
?>

<div class='login'>
<form  method="post" action="eliminar.php">

<p align='center'>¿Estas seguro que quiere eliminar <?php echo $fila['titulo'];?> ?</p>

<input type="hidden" name="pelicula_id" value="<?php echo $fila['pelicula_id'];?>" />

     <button class="btn waves-effect waves-light" 
        style="background-color: #d35e5e; display:block;
	       margin:0 auto;"

         type="submit" name="eliminar" value="Confirmar">Eliminar
        <i class="material-icons right">delete_forever
         </i>
        </button>
</form>
</div>
<?php
}else{
            $SQL ="DELETE FROM peliculas WHERE pelicula_id=".$_POST['pelicula_id'];
            
            //echo $SQL;
            if(mysqli_query($con,$SQL)){ 
               echo  '<div class=login >';
               echo "<h2>Registro eliminado con exito</h2>";
               echo "<a class='waves-effect waves-light btn' href='listar.php'><i class='material-icons right'>arrow_back
               </i>Volver</a>";
               echo '</div>';
            }
            mysqli_close($con);
}
    
    
     include "footer.php";
?>

</body>
</html>
