<?php
    require_once 'dbconfig.php';

    header('Content-Type: application/json');

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $type = mysqli_real_escape_string($conn, $_GET['type']);
    $query = "SELECT * FROM guitars WHERE type = '$type' LIMIT 10";

    $res = mysqli_query($conn, $query) or die(mysqli_connect_error());

    $jsonArray = array();
    while($row = mysqli_fetch_assoc($res)){
        $jsonArray[] = array('id' => $row['id'], 'name' => $row['name'], 'type' => $row['type'],
        'picture' => $row['picture']);
    }

    mysqli_free_result($res);
    mysqli_close($conn);
    echo json_encode($jsonArray);

    exit;
?>
