<?php

namespace UI\Draw;


class Color
{
    /* 常量 */
    const Red;
    const Green;
    const Blue;
    const Alpha;
    /* 属性 */
    public $r;
    public $g;
    public $b;
    public $a;

    /* Constructor */
    public function __construct(Color $color)
    {
    }

    public function __construct(int $color)
    {
    }

    /* 方法 */
    public function getChannel(int $channel): float
    {
    }

    public function setChannel(int $channel, float $value): void
    {
    }
}