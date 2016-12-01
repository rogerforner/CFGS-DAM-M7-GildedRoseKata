<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 1/12/16
 * Time: 16:00
 */

namespace App;


/**
 * Class Conjured
 * @package App
 */
class Conjured
{
    public $quality;

    public $sellIn;

    /**
     * Item constructor.
     * @param $quality
     * @param $sellIn
     */
    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

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