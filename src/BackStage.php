<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 1/12/16
 * Time: 16:00
 */

namespace App;


/**
 * Class BackStage
 * @package App
 */
class BackStage
{
    public $quality;

    public $sellIn;


    /**
     * BackStage constructor.
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
        if ($this->quality < 50)
            $this->quality = $this->quality + 1;
        if ($this->sellIn < 11)
            if ($this->quality < 50)
                $this->quality = $this->quality + 1;

        if ($this->sellIn < 6)
            if ($this->quality < 50)
                $this->quality = $this->quality + 1;

        $this->sellIn = $this->sellIn - 1;

        if ($this->sellIn < 0) {
            $this->quality = $this->quality - $this->quality;
        }
    }

}