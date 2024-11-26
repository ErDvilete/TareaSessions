<!-- Un primer documento PHP que guarde esos datos como variables de sesión y contenga un enlace a un segundo documento PHP. -->
<?php

 session_start();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
   

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $_SESSION["nombre"] = $nombre;
    $_SESSION["apellido"] = $apellido;

     
    header('Location: saludo.php');

    var_dump($_SESSION);
    }

    

?>