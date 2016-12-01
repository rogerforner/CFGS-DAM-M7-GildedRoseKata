<?php

namespace App;


/**
 * Class Conjured
 * @package App
 */
class Conjured extends Item
{
    public function tick()
    {
        if ($this->quality > 0)
            $this->quality = $this->quality - 2;

        $this->sellIn = $this->sellIn - 1;

        if ($this->sellIn < 0) {
            if ($this->quality > 0)
                $this->quality = $this->quality - 2;
        }
    }
}