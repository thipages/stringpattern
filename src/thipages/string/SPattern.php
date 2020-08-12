<?php
namespace thipages\string;
// todo : add a new accentuated chars segmentation
// https://stackoverflow.com/questions/2133758/how-do-i-match-accented-characters-with-php-preg
class SPattern {
    public static function utf8Split($str) {
        $len = mb_strlen($str, 'UTF-8');
        $result = [];
        for ($i = 0; $i < $len; $i++) {
            $result[] = mb_substr($str, $i, 1, 'UTF-8');
        }
        return $result;
    }
    public static function map($s) {
        if ($s==null) {
            return ["","_"=>0];
        } else {
            $map=[];
            $chars = self::utf8Split($s);
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