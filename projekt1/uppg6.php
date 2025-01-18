<?php
//Profilsidan
if (isset($_SESSION['username'])) {
    echo "<h2>Välkommen " . $_SESSION['username'] . "!</h2>";

    // Profilbild funktionalitet
    $katalog = "../pictures/";
    $bilder = scandir($katalog);
    $index = count($bilder) - 1;

    //print_r($bilder);

    // Printar profil bild
    if(isset($_SESSION['profile'])){
            echo "<img id='profPic' src='" . $katalog . $_SESSION['profile'] . "' alt='Profil bild'/>";
    } else {
        // Printar en placeholder bild
        echo "<img id='profPic' src='../media/blank.png' alt='Profil bild'/>";
    }
    // Printar ut ett galleri av gamla bilder, details och summary för att gömma dom lätt
    echo "<details><summary>Gamla bilder</summary><div id='gallery'>";
    // Printar utt alla gamla bilder
    // >= 2 eftersom första 2 indexen i en scandir array är . och .. onödigt att printa ut
    for ($index; $index >= 2; $index--) {
        echo "<div> <a href='" . $katalog . $bilder[$index] . "' target=\"_blank\"><img class='oldImg' src='" . $katalog . $bilder[$index] . "' alt='Picture'/></a></div>";
    }
    echo "</div></details>";

}
