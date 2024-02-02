<script src="https://www.youtube.com/iframe_api" defer></script>
<script src="../../js/play/main.js" type="module" defer></script>

<?php include "../funcs/query.php"; ?>

<article>
    <div id="instructions">
        Use ctrl+f to find the title of the video
        you want played, click on the button to play it.
        <br/>
        Reload the page before clicking on a second and
        all other subsequent button clicks.
    </div>

    <div id="outerIframeDiv">
        <div id="iframeDiv"></div>
    </div>

    <div id="buttons">
        <?php
            $queryStr = "" .
                "SELECT video_id, title " .
                "FROM Video " .
                "WHERE user_id='" . $_SESSION["userId"] . "'";
            $response = query($queryStr);
            $result = $response["result"];
            for($i = 0; $i < $result->num_rows; $i++){
                $row = $result->fetch_assoc();
                $videoId = $row["video_id"];
                $title = $row["title"];
                echo "" .
                    "<div class='buttonDiv'>" .
                        "<button id='" . $videoId . "'>" .
                            $title .
                        "</button>" .
                    "</div>";
            }
        ?>
    </div>
</article>