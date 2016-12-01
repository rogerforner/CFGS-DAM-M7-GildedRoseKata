<?php

namespace App;


/**
 * Class AgedBrie
 * @package App
 */
class AgedBrie extends Item
{

    public function tick()
    {
        if ($this->quality < 50)
            $this->quality = $this->quality + 1;

        $this->sellIn = $this->sellIn - 1;

        if ($this->sellIn < 0) {
            if ($this->quality < 50)
                $this->quality = $this->quality + 1;
        }
    }
}