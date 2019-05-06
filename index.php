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

$grazios = 0;
$visos_panos = 0;

foreach($panos as $pana) {
    
    if($pana['grazi'] == true) {
        $grazios++;
    }
    $visos_panos++;
}

$grazios_proc = round($grazios * 100 / $visos_panos);

print $grazios_proc . "<br> is viso $visos_panos, o is graziu $grazios ";
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