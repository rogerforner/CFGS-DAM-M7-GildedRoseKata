<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 1/12/16
 * Time: 16:00
 */

namespace App;


/**
 * Class Sulfuras
 * @package App
 */
class Sulfuras
{

    public $quality;

    public $sellIn;

    /**
     * Sulfuras constructor.
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

    }

}