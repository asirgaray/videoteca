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

    <div class="caja1">
    <form method="POST">
            <label>Titulo:   </label>
            <input type="text" name="titulo">
            <label>ID:   </label>
            <input type="text" name="pelicula_id">
            <label>Director: </label>
            <input type="text" name="director">
            <br><br>
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
        <br>
        <label>Duración:  </label>
        <select name="duracion" class="browser-default" style="font-size: 13px;">
            <option value="190">Seleccione</option>
            <option value="0">menos de 1 hora </option>
            <option value="60">mas de 1 hora</option>
            <option value="90">mas de 1 hora y media</option>
            <option value="120">2 horas o más</option>
        
        </select>
        
         <br>
        <label>Se estrenó entre: </label>
        <input type="date" name="de"  style="font-size: 13px;">
        <label>y</label> 
        <input type="date" name="a"  style="font-size: 13px;">
        <br><br>
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
            $titulo = $_POST["titulo"];
            $select = "select *,nombre from peliculas p, generos g where p.genero = g.genero_id" ;
            if($titulo != null) {
                $select = $select." and titulo like '%$titulo%'";
            }

            $pelicula_id = $_POST["pelicula_id"];
            if($pelicula_id != null) {
                $select = $select." and pelicula_id like '%$pelicula_id%'";
            }

            $director = $_POST["director"];
            if($director != null) {
                $select = $select." and director like '%$director%'";
            }
            $genero = $_POST["genero"];
            if ($genero!=0) {
                $select = $select." and genero=$genero";
            } 
            $duracion = $_POST["duracion"]; 
            if($duracion==0) {
                $select = $select." and duracion<=60";
            }elseif($duracion==60) {
                $select = $select." and duracion>60 and duracion <90";
            }
            elseif($duracion==90) {
                $select = $select." and duracion>90 and duracion <120";
            }
            elseif($duracion==120) {
                $select = $select." and duracion>120";
            }else {
                $select = $select;
            }
            
           
            if(isset($_POST["de"]) && $_POST["a"]) {
                $de= $_POST["de"];
                $a= $_POST["a"];
                $select = $select." and date_format(fecha,'%Y%m%d') between date_format('$de','%Y%m%d') and date_format('$a','%Y%m%d')";
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
        } 
   
    ?>
   
   <?php  include "footer.php";?>
   
    
</body>
</html>