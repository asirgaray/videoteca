<?php
/*
include("conexion.php");
if (isset($_POST['enviar']){
        $username=$_POST['usuario'];
        $password=$_POST['contraseña'];
        //$pass=md5($password);

        $SQL="SELECT * FROM users where username='$username' and password='$pass'";
        echo $SQL;
        $RS=mysqli_query($con,$SQL);

        $filas=mysqli_num_rows($RS); //si coinciden los datos en la fila (username y password correctos) tendrá valor mayor que 0

        if($filas>0){
            session_start();
            $_SESSION["autentificado"]= "SI";
            $_SESSION["username"]= $_POST["usuario"];
            echo $filas;
            //header ("Location:bienvenido.php");
        }
        else {
            //header("Location:errorlogin.php");
            echo 'error';
            }


}
*/



?>


<?php

include("conexion.php");
if (isset($_POST['enviar'])){
        $username=$_POST['usuario'];
        $password=$_POST['pass'];
        //$pass=md5($password);

        $SQL="SELECT * FROM users where username='$username' and password='$password'";
        echo $SQL;
        $RS=mysqli_query($con,$SQL);

        $filas=mysqli_num_rows($RS); //si coinciden los datos en la fila (username y password correctos) tendrá valor mayor que 0

        if($filas>0){
            session_start();
            $_SESSION["autentificado"]= "SI";
            $_SESSION["username"]= $_POST["usuario"];
            //echo $filas;
            header ("Location:bienvenido.php");
        }
        else {
            header("Location:errorlogin.php");
            //echo 'error';
            }


}


/*
//comprobamos si los datos son correctos
if ($_POST["usuario"]=="padrino" && $_POST["pass"]=="password"){
//Si son validos... creo una sesion
//creando sesion y guardando datos
session_start();
$_SESSION["autentificado"]= "SI";
header ("Location: protegida.php");
}else {
//si no existe le mando otra vez a la portada
header("Location: index.php?error=data");
}*/
?>