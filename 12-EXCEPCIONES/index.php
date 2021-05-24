<?php

//Capturar excepciones en codigo susceptible a errores
try {

    if (isset($_GET["id"])) {
        echo "<h1>El parametro es: {$_GET['id']}</h1>";
    }

    else{
        throw new Exception("Faltan parametros");
    }


    
} catch (Exception $e) {
    echo "Ha habido un error: " . $e->getMessage();
}











//indica cuando se ha acabado "esta" estructura

// (no se suele usar mucho)
// finally{
//     echo "Todo correcto";
// }