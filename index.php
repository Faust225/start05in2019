<?php
$x = 2;
function change_x(&$x) {
    $x = 5;
}


change_x($x);
print $x;
?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title></title> 
        <meta charset="utf-8"> 
    </head> 
    <body>

    </body> 
</html> 