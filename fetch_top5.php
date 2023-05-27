<?php
    require_once 'dbconfig.php';

    header('Content-Type: application/json');

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $type = mysqli_real_escape_string($conn, $_GET['type']);
    $query = "SELECT * FROM top5 WHERE type = '$type' LIMIT 5";

    $res = mysqli_query($conn, $query) or die(mysqli_connect_error());

    $jsonArray = array();
    while($row = mysqli_fetch_assoc($res)){
        $jsonArray[] = array('id' => $row['id'], 'nome' => $row['nome'],
        'punteggio' => $row['punteggio'], 'descr' => $row['descr'], 'opinione' => $row['opinione'], 'picture' => $row['picture'], 'type' => $row['type']);
    }

    mysqli_free_result($res);
    mysqli_close($conn);
    echo json_encode($jsonArray);

    exit;
?>