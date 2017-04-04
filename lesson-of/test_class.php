<?php

class Slime {
    public $type = 'スライム';
    public $hp = 10;
    public $power = 3;
    
    function attack($character_name) {
        print $this->type . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
    }
}

$slime_A = new Slime();

$slime_A->attack('主人公');

print_r($slime_A);