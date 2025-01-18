<?php
    // Besöksräknaren
    $visits = fopen("besok.txt", "a") or die("Unable to open file!");
    // IP adress
    $ipAddr = $_SERVER['REMOTE_ADDR'];

    // iplist.txt innehåller och sparar ip addresser och används för att lista ut om användaren har besökt sidan förr eller inte
    $iplist = file_get_contents("iplist.txt"); // Tar datan ur en fil och till en string
    $iplist = explode(",", $iplist); // explode() skapar en array string-data, ;
    $uniVis = count($iplist);    // Räknar hur många array variabler det finns

    // Unika besökare i en fil
    $uniqueVisits = fopen("uniqueVisitors.txt", "w") or die;
    $uniTxt = $uniVis . " unika besökare på sidan";
    fwrite($uniqueVisits, $uniTxt);
    fclose($uniqueVisits);

    // Kollar om ipaddressen inte finns i filen så tillägger den dit addressen
    if(!in_array(trim($ipAddr), $iplist)){
        $fil = fopen("iplist.txt", "a+") or die("Unable to open file!");
        fwrite($fil, ",".trim($ipAddr));
        fclose($fil); 
    }

    // Printar i en fil information om vem som har besökt sidan samt ip och datum.
    $ip = "User: " . $_SESSION['username'] . " IP-address: " .$_SERVER['REMOTE_ADDR']." Date: (". date("d.m.Y H:i:s").")\n\n"; //
    fwrite($visits, $ip);
    fclose($visits);
    echo "<p>Din IP-adress har sparats.</p>";
    echo "<p>".file_get_contents("uniqueVisitors.txt")."<br>"; // Printar
