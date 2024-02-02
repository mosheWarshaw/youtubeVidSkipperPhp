<?php
    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }
?>

<!doctype html>
<html>
    <head>
        <?php include "../../librariesResponses.php"; ?>
        <?php include "../../stylesheets.php"; ?>
    </head>

    <body>
        <?php include "../../menu.php"; ?>
        <?php include "../../funcs/add.php"; ?>
        <?php include "../../funcs/query.php"; ?>
        
        <?php
            if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]){
                $userId = $_SESSION["userId"];
                $title = trim($_POST["title"]);
                $videoId = trim($_POST["videoId"]);
                //TODO Here do a sql injection check like you do in the node version of the project.
                $videoQuery = "" .
                    "INSERT INTO Video " .
                    "(user_id, title, video_id) " .
                    "VALUES('" . $userId . "','" . $title . "','" . $videoId . "');";
                $response = query($videoQuery);

                $secondsQuery = getSecondsQuery($title);
                query($secondsQuery);
            }
        ?>
    </body>
</html>