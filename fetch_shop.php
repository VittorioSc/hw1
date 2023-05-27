<?php
    require_once 'dbconfig.php';

    header('Content-Type: application/json');

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $query = "SELECT * FROM shop WHERE nome = 'primai' LIMIT 4";

    $res = mysqli_query($conn, $query) or die(mysqli_connect_error());

    $jsonArray = array();
    while($row = mysqli_fetch_assoc($res)){
        $jsonArray[] = array('id' => $row['id'], 'type' => $row['type'],
        'prezzo' => $row['prezzo'], 'nome' => $row['nome'], 'picture' => $row['picture']);
    }

    mysqli_free_result($res);
    mysqli_close($conn);
    echo json_encode($jsonArray);

    exit;
?>