<?php

namespace UI\Draw;



use UI\Draw\Line\Cap;
use UI\Draw\Line\Join;

class Stroke
{
    /* Constructor */
    public function __construct(
        int   $cap = Cap::Flat,
        int   $join = Join::Miter,
        float $thickness = 1,
        float $miterLimit = 10
    )
    {
    }

    /* 方法 */
    public function getCap(): int
    {
    }

    public function getJoin(): int
    {
    }

    public function getMiterLimit(): float
    {
    }

    public function getThickness(): float
    {
    }

    public function setCap(int $cap)
    {
    }

    public function setJoin(int $join)
    {
    }

    public function setMiterLimit(float $limit)
    {
    }

    public function setThickness(float $thickness)
    {
    }
}