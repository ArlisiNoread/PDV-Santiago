<?php

//include '../../../persistencia/db_config.php';
$sql = "SELECT * FROM portal_pdv.tienda;";
if (!$result = $conn->query($sql)) {
    echo "Sorry, the website is experiencing problems.";

    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}

if ($result->num_rows === 0) {
    // Oh, no rows! Sometimes that's expected and okay, sometimes
    // it is not. You decide. In this case, maybe actor_id was too
    // large? 
    echo "We could not find a match for ID $aid, sorry about that. Please try again.";
    exit;
}

$arregloDeArreglosTiendas = [];
while ($array_resultados = $result->fetch_row()) {
    array_push($arregloDeArreglosTiendas, $array_resultados);
}


//$arregloDeArreglosTiendas Es la variable que porta todas las tiendas

//$array_resultados = $result->fetch_row();
//echo count($arregloDeArreglosTiendas);
//$array_resultados = $result->fetch_row();

//echo var_dump($array_resultados);
//echo var_dump($result);
//echo $array_resultados[2];
//echo base64_encode($array_resultados[0]);
?>