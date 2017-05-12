<?php

namespace spec\App;


use App\GildedRose;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GildedRoseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('normal',10,5);
        $this->shouldHaveType(GildedRose::class);
    }

    function it_updates_normal_items_before_sell_date()
    {
        $this->beConstructedWith('normal',10,5);
        $this->tick();
        $this->quality->shouldBe(9);
        $this->sellIn->shouldBe(4);
    }
}
