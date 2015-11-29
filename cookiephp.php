<?php

    $cookiename="color";

    if(isset($_COOKIE[$cookiename])==1)
       {
          echo "your color is ".$_COOKIE[$cookiename];

        }
    else
       {
          echo" <form name='f1' method='POST' action='a.php'> Value:<input type='text' name='valu'><input type='submit'value='cookie'></form>";

       }



?>









