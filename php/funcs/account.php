<?php
    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }
?>

<?php include "query.php"; ?>

<?php    
    function validateCredentials($credentialsType, $username, $password){
        $isSqlInjection = isSqlInjection($username, $password);
        if(!$isSqlInjection){
            $selectQueryStr = "" .
                "SELECT user_id FROM User " .
                "WHERE username = '" . $username . "' " .
                "AND password_hash = '" . $password . "'";
            $response = query($selectQueryStr);
            $result = $response["result"];
            if($result !== false){               
                if($credentialsType === "loggingIn" && $result->num_rows === 1){
                    $_SESSION["userId"] = $result->fetch_assoc()["user_id"];
                    return true;
                }
                else if($credentialsType === "creatingAccount" && $result->num_rows === 0){
                    $insertQueryStr = "INSERT INTO User (username, password_hash) " .
                                "VALUES ('" . $username . "', '" . $password . "')";
                    $queryResult = query($insertQueryStr);
                    $_SESSION["userId"] = query($selectQueryStr)["result"]->fetch_assoc()["user_id"];
                    return true;
                }
                return false;
            }
        }
        return false;
    }

    function getResponse($credentialsType, $validCredentials, $username){
        if($validCredentials){
            if($credentialsType === "loggingIn"){
                return "Hello, " . $username . ". You're logged in.";
            }
            else if($credentialsType === "creatingAccount"){
                return "Account creation successful. You're logged in.";
            }
        }
        return "Invalid credentials.";
    }

    /*The input cannot be a sql injection attack if
    there's no spaces, because every sql command requires
    multiple words and spaces between them.
    I just wanted to inlcude this somewhere.*/
    function isSqlInjection($username, $password){
        if(preg_match("/.*\s.*/", $username) || preg_match("/.*\s.*/", $password)){
            return true;
        }
        return false;
    }
?>