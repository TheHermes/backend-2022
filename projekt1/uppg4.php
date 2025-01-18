<?php

    if(!empty($_GET['name']) && !empty($_GET['email'])) {

        $username = test_input($_GET['name']);

        $email = test_input($_GET['email']);
        
        echo "<p>Namn: " . $username . "</p>" . "<p>E-post: " . $email . "</p>". "<p>Kolla din epost för att få ditt lösenord.</p>";

        $pwd = bin2hex(openssl_random_pseudo_bytes(4));

        $msg = "Välkommen ". $username ." till detta Paradis!\nDitt slumpmässigt generade lösenord är: " . $pwd;
        
        $msg = wordwrap($msg,70);

        mail($email,"Lösenord till sidan", $msg);

        // Spara användatnamnet i sessionsvariabel så att vi kan hälsa på återkommande användare
        $_SESSION['username'] = $username;

        //echo "<p>You will be redirected to the main page in 3 seconds</p>";
        header("refresh:3; url=index.php");
    }