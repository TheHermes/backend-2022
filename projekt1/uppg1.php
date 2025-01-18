<?php

echo 
    "<details><table><summary>Server Info</summary>".
        "<tr>
            <td><b>PHP version</b></td>
            <td>".phpversion()."</td>
        </tr>".
        "<tr>
            <td><b>Serverns namn</b></td>
            <td>".$_SERVER['SERVER_NAME']."</td>
        </tr>".
        "<tr>
            <td><b>Serverns IP address</b></td>
            <td>".$_SERVER['SERVER_ADDR']."</td>
        </tr>".
        "<tr>
            <td><b>Apache Version</b></td>
            <td>".$_SERVER['SERVER_SOFTWARE']."</td>
        </tr>".
        "<tr>
            <td><b>CGI version</b></td>
            <td>".$_SERVER['GATEWAY_INTERFACE']."</td>
        </tr>".
        "<tr>
            <td><b>Användarens IP address</b></td>
            <td>".$_SERVER['REMOTE_ADDR']."</td>
        </tr>".
        "<tr>
            <td><b>Användarens namn</b></td>
            <td>".$_SERVER['MELLON_displayName']."</td>
        </tr>".
        "<tr>
            <td><b>Användarnamn</b></td>
            <td>".$_SERVER['MELLON_uid']."</td>
        </tr>".
    "</table></details>";