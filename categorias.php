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
?>
    
<article>
 <a id="textohover" href="https://es.wikipedia.org/wiki/Cine_de_terror" target="iframehome"  title="Las mejores peliculas de terror"><span class="buttonw buttoncircle" style="background-image: url(iconos/terror.png);background-size:cover;"></span><div class="textohoveroculto">Terror</div></a>
<a id="textohover" href="https://es.wikipedia.org/wiki/G%C3%A9nero_de_acci%C3%B3n"  target="iframehome"  title="Las mejores peliculas de acción"><span class="buttonw buttoncircle" style="background-image: url(iconos/action.png);background-size:cover;"></span><div class="textohoveroculto">Acción</div></a>
<a id="textohover" href="https://es.wikipedia.org/wiki/Ficci%C3%B3n"  target="iframehome"  title="Las mejores peliculas de ciencia fición"><span class="buttonw buttoncircle" style="background-image: url(iconos/Alien.png);background-size:cover;"></span><div class="textohoveroculto">Ficción</div></a>
<a id="textohover"  href="https://es.wikipedia.org/wiki/Romanticismo"  target="iframehome"  title="Las mejores peliculas de romanticismo"><span class="buttonw buttoncircle" style="background-image: url(iconos/romanticismo.png);background-size:cover;"></span><div class="textohoveroculto">Romanticismo</div></a>
<a id="textohover"  href="https://es.wikipedia.org/wiki/Comedia" target="iframehome"  title="Las mejores comedias"><span class="buttonw buttoncircle" style="background-image: url(iconos/comedia.png);background-size:cover;"></span><div class="textohoveroculto">Comedia</div></a>
<a id="textohover" href="http://es.wikipedia.org/wiki/Cine_de_animaci%C3%B3n" target="iframehome"  title="Las mejores peliculas de animación"><span class="buttonw buttoncircle" style="background-image: url(iconos/animacion.png);background-size:cover;"></span><div class="textohoveroculto">Animación</div></a> 

</article>   
    
    

    <div class="caja1">
    <form method="POST">
         
            <label>Genero: </label>
            <?php
                include "conexion.php";
                $qrygenero = "select * from generos";
                $rs = mysqli_query($con,$qrygenero);
                echo "<select name='genero' class='browser-default' style='font-size: 13px'>";
                echo "<option value='0' disable selected>Seleccione</option>";
                while($fila = mysqli_fetch_assoc($rs)) {
                    $id = $fila["genero_id"];
                    $nombre = $fila["nombre"];
                    echo "<option value='$id'>$nombre";
                }
                echo "</select>";
        ?>
          <button class="btn waves-effect waves-light" 
        style="background-color: #d35e5e; display:block;
	       margin:0 auto;"

        value="Búsqueda" type="submit" name="Búsqueda">Búsqueda
        <i class="material-icons right">send</i>
        </button>
        </form>
    </div>
    <?php
        if (isset($_POST["Búsqueda"])) {
            $select = "select *,nombre from peliculas p, generos g where p.genero = g.genero_id" ;
            $genero = $_POST["genero"];
            if ($genero!=0) {
                $select = $select." and genero=$genero";
            }else{
                    echo "<div><p align=center>No se ha indicado un género</p></div>";
                }
            } 
          
           
          
            
            echo "<div class='caja1' style='width: 90%; margin-bottom:40px;'>";
            echo "<table>";
            echo "<tr>";
            echo "<th align='center'></th>";
            echo "<th align='center'>Titulo</th>";
            echo "<th align='center'>Director</th>";
            echo "<th align='center'>Argumento</th>";
            echo "<th align='center'>Genero</th>";
            echo "<th align='center'>Duracion</th>";
            echo "<th align='center'>Fecha</th>";
            echo "<tr>";
            
            include "conexion.php";
            $rs = mysqli_query($con, $select);
            while ($fila = mysqli_fetch_assoc($rs)) {
                $argumento = substr($fila["sinopsis"], 0, 490);
                $argumento = $argumento." ...";
                $fecha2 = $fila['fecha'];
                $fechaBD = date("d-m-Y", strtotime($fecha2));
                $id = $fila["pelicula_id"];
                echo "<a href='detalles.php?id=$id'>";
                echo "<tr>";
                echo "<td align='center'><img src='".$fila['imagen']."' width='200px' height='290px'></td>";
                echo "<td align='center'>".$fila['titulo']."</td>"; 
                echo "<td align='center'>".$fila['director']."</td>";
                echo "<td align='left'>".$argumento."...</td>";
                echo "<td align='center'>".$fila['nombre']."</td>";
                echo "<td align='center'>".$fila['duracion'].'min'."</td>";
                echo "<td align='center'>".$fechaBD."</td>";
                echo "<tr>"; 
            }
            
            echo "<table>";
            echo "<div>";
        
   
    ?>
   
   <?php  include "footer.php";?>
   
    
</body>
</html>