<?php
namespace thipages\string;
class SPattern {
    public static function map($s) {
        if ($s==null) {
            return ["","_"=>0];
        } else {
            $map=[];
            $chars = str_split($s);
            $count = count($chars);
            $i=0;
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
            $map['_']=$count;
        }
        return $map;
    }
    public static function normalize($s) {
        $map=self::map($s);
        $output=[0,'',''];
        if ($s!=null) {
            $output[0] = $map['_'];
            unset($map['_']);
            foreach ($map as $item) {
                $output[1] .= $item[0];
                $output[2] .= join($item);
            }
        }
        return $output;
    }
}