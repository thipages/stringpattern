<?php
namespace thipages\string;
// todo : add a new accentuated chars segmentation
// https://stackoverflow.com/questions/2133758/how-do-i-match-accented-characters-with-php-preg
// $s=preg_replace("/\p{L}/u","a","_béévv1");
class SPattern {
    public static function utf8Split($str) {
        $len = mb_strlen($str, 'UTF-8');
        $result = [];
        for ($i = 0; $i < $len; $i++) {
            $result[] = mb_substr($str, $i, 1, 'UTF-8');
        }
        return $result;
    }
    public static function normalize($s, $accents=true) {
        $output=[0,'',''];
        if ($s!=null) {
            $r = $accents
                ? preg_replace("/\p{L}/u", "A", $s)
                : preg_replace("/[a-zA-Z]/", "A", $s);
            $r = self::utf8Split(preg_replace("/\d/", "N", $r));
            $prev=null;
            $count=-1;
            $res=[];
            foreach ($r as $c) {
                if ($prev===$c) {
                    $res[$count][1]++;
                } else {
                    $res[]=[$c,1];
                    $count++;
                    $prev=$c;
                }
            }
            $output[0]=count($r);
            foreach ($res as $o) {
                $output[1].=$o[0];
                $output[2].=join($o);
            }
        }
        return $output;
    }
}