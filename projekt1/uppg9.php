<?php
session_start();

$fileName = "comments.txt";

$userName = $_SESSION['username'];

if (!empty($_REQUEST['comments'])) {
    $safeInput = test_input2($_REQUEST['comments']);
    $time = time();
    $comments = $userName . "," . $time . "," . $safeInput . "\n";
    file_put_contents($fileName, $comments, FILE_APPEND);
    //comment($comment);
    echo "<p>Kommentaren har laddats upp!</p>";
    echo "<p>Du flyttas tilbaka inom 3 sekunder!</p>";
    header("refresh:0; url=index.php");
}

$comArray = file($fileName, FILE_IGNORE_NEW_LINES);
$comArray = array_reverse($comArray);

function test_input2($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Gammal metod 
/*$comlist = file_get_contents("comments.txt");
$comlist = explode(",", $comlist);
$i = count($comlist) - 1;

$iEnd = (int)$i - 2;

// Printar ut alla kommentarer
for ($i; $i >= 0; $i--) {
    echo $comlist[$i] . "<br>";
}
function comment($comment)
{
    $myfile = fopen("comments.txt", "a") or die("Unable to open file!");
    $txt = "<div class='comment'><p class='userHead'>Användare: <b>" . $_SESSION['username'] . "</b></p>" . "<p class='comText'> Kommentar:<br> " . $comment . "</p>" . "<p class='comDate'>Datum: " . "<b>" . date("d.m.Y") . "</b>" . " Klockan: " . "<b>" . date("H:i:s") . "</b>" . "</p></div>";
    fwrite($myfile, "," . $txt);
    fclose($myfile);
}*/
