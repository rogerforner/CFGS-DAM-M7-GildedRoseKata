<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 29/11/16
 * Time: 14:09
 */

namespace App;


class Item
{

    public $quality;

    public $sellIn;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function tick()
    {
        if ($this->quality > 0)
            $this->quality = $this->quality - 1;

        $this->sellIn = $this->sellIn - 1;

        if ($this->sellIn < 0) {
            if ($this->quality > 0)
                $this->quality = $this->quality - 1;
        }
    }

}