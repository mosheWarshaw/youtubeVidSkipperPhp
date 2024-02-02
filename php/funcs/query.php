<?php
    function query($queryStr, $multiQuery = false){
        $serverName = "localhost";
        $dbUsername = "moshe";
        $dbPassword = "password";
        $dbName = "mcoo358";
        $conn = new mysqli($serverName, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            return false;
        }

        $response = [];
        if($multiQuery){
            $response["result"] = $conn->multi_query($queryStr);
        }
        else{
            $response["result"] = $conn->query($queryStr);
        }
        $response["insertId"] = $conn->insert_id;
        $conn->close();
        return $response;
    }
?>