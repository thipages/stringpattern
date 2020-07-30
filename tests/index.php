<?php
include('../src/thipages/string/SPattern.php');
$dataSet= [
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
$res=[];
for ($i=0;$i<count($dataSet[0]);$i++) {
   $res[]=\thipages\string\SPattern::normalize($dataSet[0][$i])[2]===$dataSet[1][$i]?'ok':'nok'; 
}
print_r($res);





