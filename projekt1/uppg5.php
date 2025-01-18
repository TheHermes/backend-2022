<?php
    $count = 0;
    // Finns i handymethods nuförtiden detta är en gammal version 
    if(!isset($_COOKIE['Visits'])){
        echo "<p>Välkommen detta är den första gången du besöker sidan!</p>";
        setcookie("Visits", $count);
    } else {
        $count = ++$_COOKIE['Visits'];
        setcookie("Visits", $count);
        echo "<p>Du har besökt sidan ".$_COOKIE['Visits']." gånger</p>";
    }
