<?php
    $aDias = array("Martes", "Miércoles", "Jueves");
     array_unshift( $aDias, "Lunes" );
     $num = array_push( $aDias, "Viernes" );
    // El array quedaría: "Lunes", "Martes", "Miércoles", "Jueves", "Viernes"
     print_r( $aDias );
    echo "<p/>".$num."<br/>";   // Devuelve 5
    echo count($aDias)."<br />";      // Devuelve 5
?>