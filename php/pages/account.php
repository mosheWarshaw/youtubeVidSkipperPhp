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
        <link href="../../css/pages/account.css" rel="stylesheet" />
    </head>

    <body>
        <?php include "../menu.php"; ?>

        <article>
            <form method="POST" action="responses/account.php">
                <div id="loggingIn">
                    <input type="radio" name="credentialsType" value="loggingIn" required>
                    Logging In
                </div>

                <div id="creatingAccount">
                    <input type="radio" name="credentialsType" value="creatingAccount" id="creatingAccount" required>
                    Creating An Account
                </div>

                <div id="username">
                    <input type="text" name="username" id="username" placeholder="Username" required/>
                </div>

                <div id="password">
                    <input type="text" name="password" id="password" placeholder="Password" required/> 
                </div>

                <div id="submitButtonDiv">
                    <input type="submit" id="submitForm" value="Submit"/>
                </div>
            </form>
        </article>
    </body>
</html>