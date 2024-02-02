<?php
    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }
?>

<!doctype html>
<html>
    <head>
        <?php include "../libraries.php"; ?>
        <?php include "../stylesheets.php"; ?>
        <link href="../../css/pages/add.css" rel="stylesheet" />
    </head>

    <body>
        <?php include "../menu.php"; ?>

        <?php
            if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]){
                include "../pageComponents/add.php";
            }
            else{
                echo "<div id='redirectMessage'>Create an account or login at the Account page before using this page.</div>";
            }
        ?>
    </body>
</html>