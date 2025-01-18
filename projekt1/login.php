<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Login</title>
    <link rel="icon" href="../media/php-logo-black.svg" type="image/x-icon">
    <!--<link rel="stylesheet" href="../style.css">-->
    <link rel="stylesheet" href="../login.css">
    <script src="../script.js" defer></script>
</head>

<body>

    <? //php include "header.php" 
    ?>

    <!-- Artiklar placerar sig snyggt nedanför varann-->
    <div id="login">

        
            <h2>Registrera dig</h2><br>
            <form action="login.php" method="get">
                <p>Namn:</p>
                <input type="text" name="name"><br>
                <p>E-post:</p>
                <input type="email" name="email"><br>
                <input  class="inputButton" id="submit" type="submit" value="Registrera">
            </form>
         
        <?php include "uppg4.php" ?>
    </div>

    <? //php include "footer.php" 
    ?>
</body>

</html>