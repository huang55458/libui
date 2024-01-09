<?php

namespace UI\Draw\Brush;


use UI\Draw\Brush;
use UI\Draw\Color;

class Gradient extends Brush
{
    /* 方法 */
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

    /* 继承的方法 */
    public function getColor(): Color
    {
    }

    public function setColor(Color $color): void
    {
    }

    public function setColor(int $color): void
    {
    }
}