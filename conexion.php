<?php

  $host='localhost';
  $bdd='videoteca';
  $usuario='ruben';
  $pass='Ba66age??';
  
if(!$con = mysqli_connect( $host,$usuario,$pass,$bdd) ) {  header("Location:noconecta.php");
    } mysqli_set_charset($con,"utf8");
?>