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
  
           
 <?php include "autenticado.php";?>
    
    
    <div class='login'>
    <h3 style="margin-top: -10px; text-align: center;">
        <?php  
        
        echo  $_SESSION["username"]; 
        ?>
        </h3><br>
        <form method="POST">  
            
            <a class="btn-floating btn-large waves-effect waves-light green" style="margin-left: 35%; display: block;" href="index.php"><i class="material-icons">home</i></a>
            <a class="btn-floating btn-large waves-effect waves-light red" style="margin-left: 55%; margin-top: -54px; display: block;" href="cerrarsesion.php"><i class="material-icons">directions_walk</i></a>
      
        </form>
       
    </div>
    
 <?php include "footer.php";?>
    
   
    
    
</body>
</html>