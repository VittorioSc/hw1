<?php
    require_once 'dbconfig.php';
    session_start();

    if(isset($_SESSION['session_user_id'])) {
        $user = $_SESSION['session_user_id'];
    }
    else exit;

    header('Content-Type: application/json');

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $user = mysqli_real_escape_string($conn, $user);
    $query = "SELECT g.id as id, g.name as name, g.type as type, g.picture as picture FROM guitars g JOIN stars s on g.id = s.guitar WHERE s.user = '$user'";

    $res = mysqli_query($conn, $query) or die(mysqli_connect_error());

    $jsonArray = array();
    while($row = mysqli_fetch_assoc($res)){
        $jsonArray[] = array('id' => $row['id'], 'name' => $row['name'],
        'type' => $row['type'], 'picture' => $row['picture']);
    }

    mysqli_free_result($res);
    mysqli_close($conn);
    echo json_encode($jsonArray);

    exit;
?>