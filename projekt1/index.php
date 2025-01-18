<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Projekt 1</title>
    <link rel="icon" href="../media/php-logo-black.svg" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js" defer></script>
</head>

<body>

<?php
// Finns här uppe eftersom header() tycker inte om att köras efter outputs
include "uppg9.php";
?>

    <div id="container">
        <!-- Max 800px bred container-->

        <?php include "header.php"; ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>

            <!-- Artiklar placerar sig snyggt nedanför varann-->
            <article>
                <?php
                if (isset($_SESSION['username'])) {
                    echo "<h2>Välkommen " . $_SESSION['username'] . "!</h2>";
                }
                //echo "<h1>Välkommen ".$_SERVER['MELLON_givenName']."!</h1>"
                ?>
                <h2>Uppgift - 1 Användar och serverdata</h2>
                <p>Hit kommer det allmän information om servern samt användar info</p>
                <hr>
                <?php include "uppg1.php"; ?>

            </article>
            <div class="separator"></div>

            <article>
                <h2>Uppgift - 2 Tid och Datum</h2>
                <?php include "uppg2.php"; ?>
            </article>

            <article>
                <h2>Uppgift - 3 Användarinmatning</h2>
                <form action="index.php" method="get">
                    Ange ett datum: <input type="date" name="date1"><br><br>
                    <input class="inputButton" type="submit" value="Tillägg">
                </form>
                <?php include "uppg3.php"; ?>
            </article>

            <article>
                <h2>Uppgift - 8 Besöksräknare</h2>

                <?php include "uppg8.php"; ?>
            </article>

            <article>
                <h2>Uppgift - 9 Kommentarfält</h2>
                <form action="uppg9.php" method="post">
                    <label>Kommentarfält:</label><br>
                    <textarea placeholder="Skriv en kommentar!"  maxlength="500" cols="80" rows="6" name="comments" id="para1"></textarea><br><br>
                    <input class="inputButton" type="submit" name="button" value="Kommentera" />
                </form>
                <h3>Kommentarer</h3><hr>
                <div>
                    <?php
                    // Printar ut alla kommentarer
                    foreach ($comArray as $value) {
                        list($userName, $timeStamp, $text) = explode(",", $value);
                        echo "<div class='comment'><p class='userHead'>Användare: <b>" . $userName . "</b></p>" . "<p class='comText'> Kommentar:<br> " . $text . "</p>" . "<p class='comDate'>Datum: <b>" . date("d.m.Y H:i:s", $timeStamp) . "</b>" . "</p></div>";
                    }
                    ?></div>
            </article>

        </section>
        <?php include "footer.php" ?>
    </div>
</body>

</html>