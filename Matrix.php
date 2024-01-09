<?php

namespace UI\Draw;



use UI\Point;

class Matrix
{
    /* 方法 */
    public function invert()
    {
    }

    public function isInvertible(): bool
    {
    }

    public function multiply(Matrix $matrix): Matrix
    {
    }

    public function rotate(Point $point, float $amount)
    {
    }

    public function scale(Point $center, Point $point)
    {
    }

    public function skew(Point $point, Point $amount)
    {
    }

    public function translate(Point $point)
    {
    }
}