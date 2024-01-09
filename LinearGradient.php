<?php

namespace UI\Draw\Brush;




use UI\Draw\Color;
use UI\Point;

class LinearGradient extends Gradient
{
    /* Constructor */
    public function __construct(Point $start,Point $end)
    {
    }

    /* 继承的方法 */
    public function addStop(float $position, Color $color): int
    {
    }

    public function addStop(float $position, int $color): int
    {
    }

    public function delStop(int $index): int
    {
    }

    public function setStop(int $index, float $position, Color $color): bool
    {
    }

    public function setStop(int $index, float $position, int $color): bool
    {
    }
}