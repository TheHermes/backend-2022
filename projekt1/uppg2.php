<?php
    $month = array("Januari","Februari","Mars","April","Maj","Juni","Juli","Augusti","September","Oktober", "November", "December");
    $veckodagar = array("Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag","Söndag",);
    
    print("<p>Klo. " . date("H.i.s"). "</p>");
    print("<p>Datum: " . date("d.m.Y"));
    print("<p>Dagens datum är " .$veckodagar[date("N")-1]. " den " . date("d ") . $month[(int)date('m')-1] . " år " . date("Y") . " och vecka " . (int)date("W")."</p>");