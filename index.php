<?php  
include "./projekt1/handy_methods.php"?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hem</title>
    <link rel="icon" href="./media/php-logo-black.svg" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js" defer></script>
</head>

<body>

    <div id="container">
        <!-- Max 800px bred container-->

        <?php include "./projekt1/header.php" ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>

            <!-- Artiklar placerar sig snyggt nedanför varann-->
            <article>
                <?php
                if(!isset($_COOKIE['Visits'])){
                    echo "<h1>Välkommen till detta PHP projekt sida!</h1>";
                } else {
                    echo "<h1>Välkommen tillbaka " . $_SESSION['username'] . "!</h1>";
                }
                
                ?>

                <div id="mainHeader">
                    <div>
                        <img src="./media/PHP-logo.svg" alt="PHP-logo">
                    </div>
                    <div id="home">
                        <h2>Hem</h2>
                    </div>
                </div>

                <div>
                    <p>Detta är ett php projekt!</p>
                </div>

                <hr>

            </article>
            <div class="separator"></div>

            <article>
                <h2>Back-End 2023 våren - Projekt</h2>
                <div id="mainBox">
                    <a class="box" href="<?php if(isset($_SESSION['username'])){echo "./projekt1/index.php";} else {echo "./projekt1/login.php";}?>">
                        Projekt 1
                        <p>Projekt 1 handlade mest om att jobba med PHP och lösa grundläggande
                            problem och skapa saker som används inom PHP utveckling.</p>
                    </a>
                    <a class="box" href="./projekt2/index.php">
                        Projekt 2
                        <p>I projekt 2 skapar vi en "dating app".</p>
                        <p><b>WORK IN PROGRESS</b></p>
                    </a>

                </div>
                <h2>Projekt Rapporter</h2>
                <div id="mainBox">
                    <a class="box" href="./rapport/hermesrapport.php" target="_blank">
                        Hermes Rapport
                    </a>

                    <a class="box" href="./rapport/victorrapport.php" target="_blank">
                        Victor Rapport
                    </a>
                </div>
            </article><br><br><br><br><br>


        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <?php include "./projekt1/footer.php" ?>

    </div>
</body>

</html>