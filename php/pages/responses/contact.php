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
        <link href="../../../css/pages/responses/contact.css" rel="stylesheet" />
    </head>

    <body>
        <?php include "../../menu.php"; ?>
        <?php include "../../funcs/contact.php"; ?>

        <?php
            if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]){
                $sentSuccessfully = sendEmail($_POST["body"]);
                if($sentSuccessfully){
                    echo "<div id='submissionResponse'>Message sent successfuly.</div>";
                }
                else{
                    echo "<div id='submissionResponse'>Unsuccessful secding of message.</div>";
                }
            }
        ?>
    </body>
</html>