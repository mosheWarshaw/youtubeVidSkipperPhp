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
        <link href="../../../css/pages/responses/account.css" rel="stylesheet" />
    </head>

    <body>
        <?php include "../../menu.php"; ?>
        <?php include "../../funcs/account.php"; ?>
        
        <?php   
            $credentialsType = $_POST["credentialsType"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $validCredentials = validateCredentials($credentialsType, $username, $password);
            $response = getResponse($credentialsType, $validCredentials, $username);
            if($response === "Invalid credentials."){
                $_SESSION["loggedIn"] = false;
            }
            else{
                $_SESSION["loggedIn"] = true;
            }
            echo "<div id='accountResponse'>" . $response . "</div>";
        ?>
    </body>
</html>