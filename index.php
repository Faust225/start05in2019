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

print $panos[rand(0, 2)]['vardas'];
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