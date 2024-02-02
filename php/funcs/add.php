<?php
    function getSecondsQuery($title){
        $queryStr = "" .
            "INSERT INTO Skip " .
            "(user_id, title, start, end) " .
            "VALUES";
        $numOfPairs = (int)$_POST["numOfPairs"];
        for($i = 1; $i <= $numOfPairs; $i++){
            $start = (int) $_POST["start" . $i];
            $end = (int) $_POST["end" . $i];
            $queryStr .= "" .
                "(" .
                    "'" . $_SESSION["userId"] . "'," .
                    "'" . $title . "'," .
                    $start . "," .
                    $end .
                ")";
            $isNotLastPair = $i != $numOfPairs;
            if($isNotLastPair){
                $queryStr .= ",";
            }
        }
        return $queryStr;
    }
?>