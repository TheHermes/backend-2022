<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Profil</title>
    <link rel="icon" href="../media/php-logo-black.svg" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js" defer></script>
</head>

<body>

    <div id="container">
        <!-- Max 800px bred container-->

        <?php include "header.php" ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>
            <!-- Artiklar placerar sig snyggt nedanför varann-->
            <article>
                <h2>Profilsidan</h2>

                <?php include "uppg6.php" ?>

                <!----->
                <?php if (isset($_SESSION['username'])) { ?>
                    <br><form action="upload.php" method="post" enctype="multipart/form-data">
                        Välj en bild att ladda upp:
                        <input class="inputButton" type="file" name="fileToUpload" id="fileToUpload">
                        <input class="inputButton" type="submit" value="Ladda upp" name="submit">
                    </form><br>
                <?php }
                ?>

                <!--Cookies för användaren syns här--->
                <?php
                if (!isset($_COOKIE['Visits'])) {
                    echo "<p>Välkommen detta är den första gången du besöker sidan!</p>";
                } else {
                    echo "<p>Du besökte sidan första gången: <b>" . $_COOKIE['firstTimeVisit'] . "</b></p>";
                    echo "<p>Du har besökt sidan <b>" . $_COOKIE['Visits'] . "</b> gånger</p>";
                }

                include "uppg8.php"
                ?>
                
            </article>

        </section>

        <?php include "footer.php" ?>

    </div>
</body>

</html>