<?php
session_start();
$target_dir = "../pictures/";

//print_r($_FILES);
// Har använt samma kod som vi använde under lektionen
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$_SESSION['profile'] = basename($_FILES["fileToUpload"]["name"]); // Sparar bilden
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "<p>Filen är en bild - " . $check["mime"] . ".</p>";
        $uploadOk = 1;
    } else {
        echo "<p>Filen är inte en bild. Se till att filen du laddar upp är en bild.</p>";
        $uploadOk = 0;
    }
}

// Kollar om filen finns redan
if (file_exists($target_file)) {
    echo "<p>Filen existerar redan, byt namnet på filen eller ladda upp en annan fil.<p>";
    $uploadOk = 0;
}

// Kollar fil storleken
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "<p>Din fil är för stor, endast filer som är 1mb eller mindre kan laddas upp.</p>";
    $uploadOk = 0;
}

// Tillåter endast jpg och png
if ($imageFileType != "jpg" && $imageFileType != "png") {
    echo "<p>Endast JPG och PNG är tillåtna.</p>";
    $uploadOk = 0;
}

// Kollar om $uploadOk är 0
if ($uploadOk == 0) {
    echo "Din fil laddades inte upp.";
    echo "<p>Du förs tillbaka till förra sidan inom 5 sekunder.</p>";
    header("refresh:5; url=profile.php");
    // Om allting ok, försöker ladda upp filen
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<p>Filen " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " har laddats upp.</p>";
        $_SESSION['profile'] = basename($_FILES["fileToUpload"]["name"]); // Sparar bilden till en sessions variabel för att visa valda bilden.
        echo "<p>Du förs tillbaka till förra sidan inom 5 sekunder.</p>";
        header("refresh:5; url=profile.php");
    } else {
        echo "<p>Det uppkom ett fel i uppladningen.</p>";
        echo "<p>Du förs tillbaka till förra sidan inom 5 sekunder.</p>";
        header("refresh:5; url=profile.php");
    }
}
