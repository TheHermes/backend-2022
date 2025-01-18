<?php
//Start the session
session_start();


// COOKIES 
// kollar om en kakan 'Visits', om inte så skapar den en
if (!isset($_COOKIE['Visits'])) {
  $count = 1;

  setcookie("Visits", $count, time() + 60 * 60 * 24 * 30, "/");
} else if (isset($_COOKIE['Visits'])) {
  // Plussar till med 1 varje gång man besöker sidan
  $count = ++$_COOKIE['Visits'];
  setcookie("Visits", $count, time() + 60 * 60 * 24 * 30, "/");
}

if (!isset($_COOKIE['firstTimeVisit'])) {
  // Första gången man besöker sidan, sparar den datumet och klockslaget när man besökte.
  setcookie("firstTimeVisit", "<br>Klockan: " . date("H.i.s") . " <br>Datum: " . date("d.m.Y"), time() + 60 * 60 * 24 * 30, "/");
}

// All möjligt som vi använder ofta, sessionshantering, form validation etc.

// En funktion som tar bort whitespace, backslashes (espcape char) och gör om < till html safe motsvarigheter
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// How to use function: $safe_input = test_input($_REQUEST['unsafedata']); 
