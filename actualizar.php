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
    
      $id=$_GET['id'];
      $SQL = "SELECT *,DATE_FORMAT(fecha, '%Y-%m-%d') as date FROM peliculas,generos WHERE genero_id=genero and pelicula_id=$id";
      $RS=mysqli_query($con,$SQL);
      while($fila=mysqli_fetch_assoc($RS))
      {
        $titulo=$fila['titulo'];
        $director=$fila['director'];
        $trailer=$fila['trailer'];
        $sinopsis=$fila['sinopsis'];
        $nombre=$fila['nombre'];
        $genero=$fila['genero'];
        $imagen=$fila['imagen'];
        $fecha=$fila['date'];
        $duracion=$fila['duracion'];
      }
     ?>
    <div class='login'>
    <h1><b style="color:#f26c6c">Modificar</b></h1> <h1 style="color:#8db5f4"><?php echo $titulo; ?></h1>
    <section class="webdesigntuts-workshop">
      <form id="form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
        <label>Titulo:</label><br>
        <input type="text" name="titulo" id="titulo" maxlength="50" value="<?php echo $titulo; ?>"><br>
        <label>Director:</label><br>
        <input type="text" name="director" id="director" maxlength="50" value="<?php echo $director; ?>"><br>
        <label>Trailer:</label><br>
        <input type="text" name="trailer" id="trailer" maxlength="20" value="<?php echo $trailer; ?>"><br>
        <label>Sinopsis:</label><br> <br>
        <textarea name="sinopsis" id="sinopsis" rows="10" cols="30" ><?php echo $sinopsis; ?>"</textarea><br><br> 
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
          
          <?php echo '</select>' ?><br>
        <label>Duracion:</label><br>
        <input type="number" name="duracion" id="duracion" min="0" max="999" step="3" value="<?php echo $duracion; ?>"><br>
        <label>Imagen:</label><br><br>
        <input type="file" name="imagen" id="imagen" accept="image/jpg" value="<?php echo $imagen; ?>"><br><br>
        <label>Fecha:</label><br>
        <input type="date" name="fecha" id="fecha" value="<?php echo $fecha; ?>"><br><br>
          <button class="btn waves-effect waves-light" 
        style="background-color: #d35e5e; display:block;
	       margin:0 auto;"
        value="Guardar" type="submit" name="">Guardar
        <i class="material-icons right">send</i>
        </button>
      </form>
    </section>
  </div>
  </body>

</html>
<?php
  mysqli_close($con);
 ?>
<?php



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
  
//poner distinto a las de arriba
$id=$_POST['id'];
$tit=$_POST['titulo'];
$dir=$_POST['director'];
$tra=$_POST['trailer'];
$sin=$_POST['sinopsis'];
$gen=$_POST['genero'];
$dur=$_POST['duracion'];
$img=($_FILES['imagen']);
$fech=$_POST['fecha'];

include 'conexion.php';


  $sql = "UPDATE `peliculas` SET `titulo` = '$tit', `director` = '$dir', `sinopsis` = '$sin', `genero` = '$gen', `duracion` = '$dur', `imagen` = '$nombreCompleto', `fecha` = '$fech', `trailer` = '$tra' WHERE `peliculas`.`pelicula_id` = $id";


echo mysqli_query($con,$sql);
mysqli_close($con);
 include "footer.php";
 ?>





