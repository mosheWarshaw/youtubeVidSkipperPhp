<?php
    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }
?>

<!doctype html>
<html>
    <head>
        <?php include "../libraries.php"; ?>
        <script src="../../js/libraries/responsiveslides.min.js" defer></script>
        <script src="../../js/home.js" defer></script>
        <?php include "../stylesheets.php"; ?>
        <link href="../../css/pages/home.css" rel="stylesheet" />
    </head>

    <body>
        <?php include "../menu.php"; ?>

        <article>
                <div id="instructions1">
                    This site is to be used for playing the YouTube videos of your choosing
                    without the parts you don't want.
                </div>
                <div id="instructions2">
                    Go to the Add A Video tab, paste the ID of a
                    YouTube video (it's the part after the "v="
                    of the url), the start and end seconds of each
                    section you want skipped, and the identifier you
                    will use later to specify which video you want
                    played (eg: the name of the song of the video) to
                    add it to your collection. You can then go to the
                    Play A Video tab to play any of the videos in your
                    collection.
                </div>

            <ul class="rslides gridContainer" id="slideshow">
                <li id="li1"><img id="img1" src="../../images/img1.png" alt="img1"></li>
                <li id="li2"><img id="img2" src="../../images/img2.png" alt="img2"></li>
                <li id="li3"><img id="img3" src="../../images/img3.png" alt="img3"></li>
            </ul>
        </article>
    </body>
</html>