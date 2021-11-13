<?php
$cookie_name ="user";
$_cookie_value ="Alex Porter";
setcookie($cookie_name, $_cookie_value, time() + (86400*30), "/");
?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE[cookie_name]))
        {
            echo "Cookie named '" . $cookie_name . " ' is not set!";

        }
        else{
              echo "Cookie '" . $cookie_name . " ' is not set!<br>";
              echo "value is: ".$_COOKIE [$cookie_name];
        }
        ?>
        </body>
        </html>