<?php
    session_start();
    if( ($_SESSION["nombre"]) && ($_SESSION["apellido"]) ){ 
        echo "Hola ". $_SESSION['nombre'] ." ". $_SESSION['apellido'];
    }
    else{
        header('location: session.html');
    }

    session_destroy();
?>