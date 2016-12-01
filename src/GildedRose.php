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

//    public function tick()
//    {
//
//        switch ($this->name){
//
//            case 'Aged Brie':
//                if ($this->quality < 50)
//                    $this->quality = $this->quality + 1;
//
//                $this->sellIn = $this->sellIn - 1;
//
//                if ($this->sellIn < 0) {
//                    if ($this->quality < 50)
//                        $this->quality = $this->quality + 1;
//                }
//                break;
//
//            case 'Backstage passes to a TAFKAL80ETC concert':
//
//                if ($this->quality < 50)
//                    $this->quality = $this->quality + 1;
//                if ($this->sellIn < 11)
//                    if ($this->quality < 50)
//                        $this->quality = $this->quality + 1;
//
//                if ($this->sellIn < 6)
//                    if ($this->quality < 50)
//                        $this->quality = $this->quality + 1;
//
//                $this->sellIn = $this->sellIn - 1;
//
//                if ($this->sellIn < 0) {
//                    $this->quality = $this->quality - $this->quality;
//                }
//                break;
//
//            case 'Sulfuras, Hand of Ragnaros':
//                break;
//
//            case 'Conjured Mana Cake':
//                if ($this->quality > 0)
//                    $this->quality = $this->quality - 2;
//
//                $this->sellIn = $this->sellIn - 1;
//
//                if ($this->sellIn < 0) {
//                    if ($this->quality > 0)
//                        $this->quality = $this->quality - 2;
//                }
//                break;
//
//            default:
////                $this->item->tick();
////                $this->quality = $this->item->quality;
////                $this->sellIn = $this->item->sellIn;
//                break;
//
//        }
//
//
//    }
}
