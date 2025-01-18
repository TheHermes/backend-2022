<?php
//include "handy_methods.php";

$timeNow = time();
$veckodagar = array("Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");

if (!empty($_GET['date1'])) {
    $safe_date1 = test_input($_GET['date1']); // Säkrar inputen

    $chosenDate = strtotime($safe_date1);    // Valda datum
    $pastOrPresent = null;

    $timeDif = $timeNow - $chosenDate;              // Skillnaden mellan datumen      

    // Bestämmer om datumet är i framtiden eller det förlutna
    if ($timeDif < 0) {
        $pastOrPresent = "framtiden";
    } else if ($timeDif > 0) {
        $pastOrPresent = "förlutna";
    }

    /*  Räknar ut skillnaden mellan datumen. abs() funktionen returnerar
        absoluta värdet av ett tal, -1 blir 1 och 2.3 blir 2.3 */
    $day = floor(abs($timeDif) / (60 * 60 * 24));
    $hour = floor((abs($timeDif) % (60 * 60 * 24)) / (60 * 60));
    $minute = floor((abs($timeDif) % (60 * 60)) / (60));
    $second = ((abs($timeDif) % (60)));

    echo "<p>Datumet du har inmatat: " . $_GET['date1'] . "</p>";
    echo "<p>Datument är i " . $pastOrPresent . ".</p>";
    echo "<p>Veckodagen ditt datum innfaller på: " . $veckodagar[date("N", $chosenDate) - 1] . "</p>";
    echo "<p>Tidsskillnaden mellan det nuvarande datumet och ditt datum: " . $day . " dagar " . $hour . " timmar " . $minute . " minuter " . $second . " sekunder " . "</p>";
}