<?php
use thipages\string\SPattern;
class Tests {
    public static function dataSet() {
        $t=[
            '123',
            '123.1',
            '12,1',
            'T23@mail.com'
        ];
        $r=[
            'D3',
            'D3.1D1',
            'D2,1D1',
            'A1D2@1A4.1A3'
        ];
        return array_map(
            function($v, $i) use($r,$t) {
                return [SPattern::parse($v)->sequence_occ,$r[$i],$t[$i]];
            },
            $t, array_keys($t));
        
    }
}

