<?php
$panos = [
    [
        'vardas' => 'Augustina',
        'grazi' => true,
        'protinga' => false,
    ],
    [
        'vardas' => 'Veronika',
        'grazi' => false,
        'protinga' => false,
    ],
    [
        'vardas' => 'Gintare',
        'grazi' => true,
        'protinga' => true,
    ]
];

foreach ($panos as $pana) {
    foreach ($pana as $charakteris => $bruozai) {

        if ($pana['protinga'] == true) {
            print $charakteris . " $bruozai ";
        }
    }
}
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