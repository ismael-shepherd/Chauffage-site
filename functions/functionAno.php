<?php
require_once './vendor/autoload.php';

$eleves = [
    [
        'nom' => 'Anne',
        'age' => 18,
        'moyenne' => 15
    ],
    [
        'nom' => 'Marc',
        'age' => '21',
        'moyenne' => 13
    ],
    [
        'nom' => 'Jean',
        'age' => 20,
        'moyenne' => 18
    ]
];

function sorterByKey($key) {
    return function ($eleve1, $eleve2) use ($key) {
        return $eleve1[$key] - $eleve2[$key];
    };
};

$key = 'age';

usort($eleves, sorterByKey('age'));
dump($eleves);






















/* $maFunction = function ($nom) {
    return 'Salut' . $nom;
};
 echo $maFunction(' Jean'); */