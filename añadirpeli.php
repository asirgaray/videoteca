<!DOCTYPE html>
<html lang="es">
<head>
<?php
 include "head.php";
 include "nav.php";
 
?>
   <?php if ($_SESSION["autentificado"] != "SI") {

    
    echo '<h1>HAZ LOGIN</h1>';

	
} else{
    
    ?>
</head>
<body id="particles-js">
    
    <script src="js/particles.min.js"></script>
    <script src="js/particles.js"></script>
    
    
    
    <div class='login' style="margin-top: 70px;">
    <h1 style="margin-top: -20px; text-align: center">Insertar</h1><br>
   
      <form id="form" method="post" enctype="multipart/form-data">
        <label>Título:</label><br>
        <input type="text" name="titulo" id="titulo" maxlength="50"><br> <br> 
        <label>Director:</label><br>
        <input type="text" name="director" id="director" maxlength="50"><br> <br> 
        <label>Trailer:</label><br>
        <input type="text" name="trailer" id="trailer" maxlength="20"><br> <br> 
        <label>Sinopsis:</label><br>
        <textarea name="sinopsis" id="sinopsis" rows="10" cols="30"></textarea> <br> <br>
        <label>Genero:</label><br>
                <?php
                include "conexion.php";
                $SQLGEN = "select * from generos";
                $rs = mysqli_query($con,$SQLGEN);
                echo "<select name='genero' id='genero' class='browser-default' style='font-size: 13px'>";
                echo "<option value='0' disable selected>Seleccione</option>";
                while($fila = mysqli_fetch_assoc($rs)) {
                    ?>
                    <option value="<?php echo $fila['genero_id']; ?>"><?php echo $fila['nombre']; ?></option>
                <?php
                }
               
                ?>
          
          <?php echo '</select>' ?>
          
        <br>
        <label>Duracion:</label><br>
        <input type="number" name="duracion" id="duracion" min="0" max="999" step="3"><br>
        <br><br>
        <span>Subir foto:</span>
        <input type="file" name="imagen" id="imagen">
         
             <input class="file-path validate" type="text"  name="imagen" id="imagen">
    
        <label>Fecha:</label><br>
        <input type="date" name="fecha" id="fecha"><br><br>
         <button class="btn waves-effect waves-light" 
       style="background-color: #7b77ef; display:block;
	   margin:0 auto;" value="Búsqueda" type="submit" name="Guardar">Subir Película
       <i class="material-icons right">add</i>
        </button>
      </form>
     </div>
    
 
    
    
    
    
    
  </body>

</html>
<?php
                    }
  mysqli_close($con);
 ?>

<?php

  function imgimagen($imagen) {
    if (is_uploaded_file ($_FILES['imagen']['tmp_name']))
    {
    	$nombreDirectorio = "img/";
    	$nombreFichero = $_FILES['imagen']['name'];
    	$nombreCompleto = $nombreDirectorio . $nombreFichero;
    	if (is_file($nombreCompleto))
    	{
    		$idUnico = time();
    		$nombreFichero = $idUnico . "-" . $nombreFichero;
    	}
    	move_uploaded_file ($_FILES['imagen']['tmp_name'], $nombreDirectorio . $nombreFichero);
    }
  }

  
  $nombreDirectorio = "img/";
  $nombreFichero = $_FILES['imagen']['name'];
  $nombreCompleto = $nombreDirectorio . $nombreFichero;
  $titulo = $_POST['titulo'];
  $director = $_POST['director'];
  $trailer = $_POST['trailer'];
  $sinopsis = $_POST['sinopsis'];
  $genero = $_POST['genero'];
  $duracion = $_POST['duracion'];
  $imagen = imgimagen($_FILES['imagen']);
  $fecha = $_POST['fecha'];
  $id=rand(11111111, 99999999);

  include 'conexion.php';

  $sql = "INSERT INTO `peliculas` (`pelicula_id`, `titulo`, `director`, `sinopsis`, `genero`, `duracion`, `imagen`, `fecha`, `trailer`)  VALUES ('$id', '$titulo', '$director', '$sinopsis', '$genero', '$duracion', '$nombreCompleto', '$fecha', '$trailer')";

  mysqli_query($con, $sql);
  echo "$sql";

    echo "</div>";
    echo "</div>";
    
    include "footer.php";

?>