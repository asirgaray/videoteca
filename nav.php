<!DOCTYPE html>
<html lang="es">

<head>
<?php
 include "head.php";
?>
</head>
<body>
    
   
     
  <nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo"><i class="material-icons">local_movies
      </i>VIDEOTECA</a>
      <ul class="right hide-on-med-and-down">
   
        <li><a href="buscar.php" title="buscar"><i class="material-icons">search</i></a></li>
        <li><a href="index.php"  title="portada"><i class="material-icons">casino</i></a></li>
        <li><a href="categorias.php"  title="categorias"><i class="material-icons">more
        </i></a></li>
        <li><a  title="refrescar página" onclick="history.go(0)" ><i class="material-icons">refresh</i></a></li>
        <li><a style="margin-right: 60px;" href="listar.php"  title="listado de peliculas"><i class="material-icons">list
        </i></a></li>
        <li><a  title="gestión de usuarios" style="position: absolute; right: -2px; padding-left: 38px;" href="login.php"><i class="material-icons">account_circle
        </i></a></li>
         <li style="position: absolute; right: -2px; top: -19px;"> <a title="gestión de usuarios" href="login.php">    
          <?php  
        session_start();
        echo  $_SESSION["username"]; 
        ?></a>  </li>
        <a class="btn-floating btn-large halfway-fab waves-effect waves-light teal  riple" style="margin-right: 1px;" href="añadirpeli.php">
        <i class=" material-icons ripple">add</i></a>
          
          
      </ul>
    </div>
  </nav>

        


</body>
</html>
        
