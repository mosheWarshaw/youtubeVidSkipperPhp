<?php
    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }
?>

<?php include "../../funcs/query.php"; ?>

<?php
    $userId = (int)$_SESSION["userId"];
    $title = trim($_GET["title"]);
    $queryStr = "" .
        "SELECT start, end ".
        "FROM Skip " .
        "WHERE user_id =" . $userId . " " .
        "AND title ='" . $title . "'";
    $response = query($queryStr);
    $rows = $response["result"]->fetch_all(MYSQLI_ASSOC);
    echo json_encode($rows);
?>