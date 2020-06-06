<?php
namespace thipages\string;
class SPattern {
    public static function parse($s) {
        if ($s==null) {
            return new SPValue(
                0, []
            );
        } else {
            $chars = str_split($s);
            $count = count($chars);
            $i=0;
            $map=[];
            $iCurrent=-1;
            $current='';
            while ($i<$count) {
                $next = ctype_digit($chars[$i])
                    ? "N" : (
                    ctype_alpha($chars[$i])
                        ? "A" : $chars[$i]
                    );
                if ($next!==$current || $i===0) {
                    array_push($map,[$next,1]);
                    $iCurrent++;
                    $current=$next;
                } else {
                    $map[$iCurrent][1]++;
                }
                $i++;
            }
            //print_r($map);
            return new SPValue($count, $map);
        }
    }
}