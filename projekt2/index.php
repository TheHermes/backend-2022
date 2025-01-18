<?php include "../projekt1/handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Projekt 2</title>
    <link rel="icon" href="../media/php-logo-black.svg" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
    <script src="./script.js" defer></script>
</head>

<body>

    <div id="container">
        <!-- Max 800px bred container-->

        <?php include "../projekt1/header.php" ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>

            <!-- Artiklar placerar sig snyggt nedanför varann-->
            <article>
                <?php
                if (isset($_SESSION['username'])) {
                    echo "<h2>Välkommen " . $_SESSION['username'] . "!</h2>";
                }
                echo "Du flyttas tillbaka! Du får inte befinna dig här ännu!";
                header("refresh: 3; url=../index.php")
                //echo "<h1>Välkommen ".$_SERVER['MELLON_givenName']."!</h1>"
                ?>
                <h2>Projekt 2</h2>

            </article>
            <div class="separator"></div>


        </section>

        <?php include "../projekt1/footer.php"?>

    </div>
</body>

</html>