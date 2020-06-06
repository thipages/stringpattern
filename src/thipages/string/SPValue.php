<?php
namespace thipages\string;
class SPValue {
    public $length;
    public $sequence_occ;
    public $sequence;
    public function __construct($length,$map) {
        $this->length = $length;
        $this->sequence='';
        $this->sequence_occ='';
        foreach ($map as $item) {
            $this->sequence.=$item[0];
            $this->sequence_occ.=join($item);
        }
    }
}