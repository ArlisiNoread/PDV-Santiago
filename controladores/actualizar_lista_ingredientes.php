<?php

include '../persistencia/db_config.php';


$id_producto = $_POST["id_producto"];

$sql = "SELECT fk_lista_ingredientes FROM portal_pdv.producto WHERE id = " . $id_producto . ";";
if (!$result = $conn->query($sql)) {
    echo "Sorry, the website is experiencing problems.";

    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}
if ($result->num_rows === 0) {
    echo "We could not find a match for ID $aid, sorry about that. Please try again.";
    exit;
}

$id_lista_ingredientes;
while ($array_resultados = $result->fetch_row()) {
    $id_lista_ingredientes = $array_resultados[0];
}


$sql = "SELECT * FROM portal_pdv.ingredientes WHERE fk_lista_ingredientes = " . $id_lista_ingredientes . ";";
if (!$result = $conn->query($sql)) {
    echo "Sorry, the website is experiencing problems.";

    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}
if ($result->num_rows === 0) {
    echo "We could not find a match for ID $aid, sorry about that. Please try again.";
    exit;
}

$ingredientes = array();
while ($array_resultados = $result->fetch_row()) {
    array_push($ingredientes, $array_resultados);
}

echo json_encode($ingredientes);
//echo var_dump($ingredientes);


include '../persistencia/db_config_close.php';
exit();
?>