<?php

use thipages\string\SPattern;

include('../src/thipages/string/SPattern.php');
$sets=[];
$sets[0]= [
        [
        '',
        null,
        '123',
        '123.1',
        '12,1',
        'T23@mail.com',
        "rémanent"
    ],
    [
        '',
        '',
        'N3',
        'N3.1N1',
        'N2,1N1',
        'A1N2@1A4.1A3',
        'A1é1A6'
    ]
];
$sets[1] = (new ArrayObject($sets[0]))->getArrayCopy();
array_pop($sets[1][1]);
$sets[1][1][]='A8';
$res=[];
$accent=false;
foreach ($sets as $set) {
    for ($i=0;$i<count($set[0]);$i++) {
        $res[]= SPattern::normalize($set[0][$i],$accent)[2]===$set[1][$i]?'ok':'nok';
    }  
    $accent=true;
}
print_r($res);





