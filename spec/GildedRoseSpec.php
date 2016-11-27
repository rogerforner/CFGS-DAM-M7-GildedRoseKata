<?php

namespace spec;


use App\GildedRose;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GildedRoseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(GildedRose::class);
    }
}
