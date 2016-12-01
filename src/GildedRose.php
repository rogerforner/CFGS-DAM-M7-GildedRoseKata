<?php

namespace App;

/**
 * Class GildedRose
 * @package App
 */
class GildedRose
{
    public static $llista = [
        'Aged Brie' => AgedBrie::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackStage::class,
        'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
        'Conjured Mana Cake' => Conjured::class,
    ];

    /**
     * @param $name
     * @param $quality
     * @param $sellIn
     * @return Item
     */
    public static function of($name, $quality, $sellIn) {
        if(array_key_exists($name,self::$llista)){
            return new self::$llista[$name]($quality,$sellIn);
        }
        return new Item($quality, $sellIn);
    }

}
