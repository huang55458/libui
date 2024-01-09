<?php

namespace UI\Draw;

use UI\Point;
use UI\Size;

class Path
{
    /* 常量 */
    const Winding;
    const Alternate;

    /* Constructor */
    public function __construct(int $mode = Path::Winding)
    {
    }

    /* 方法 */
    public function addRectangle(Point $point, Size $size)
    {
    }

    public function arcTo(
        Point $point,
        float $radius,
        float $angle,
        float $sweep,
        float $negative
    )
    {
    }

    public function bezierTo(
        Point $point,
        float $radius,
        float $angle,
        float $sweep,
        float $negative
    )
    {
    }

    public function closeFigure()
    {
    }

    public function end()
    {
    }

    public function lineTo(
        Point $point,
        float $radius,
        float $angle,
        float $sweep,
        float $negative
    )
    {
    }

    public function newFigure(Point $point)
    {
    }

    public function newFigureWithArc(
        Point $point,
        float $radius,
        float $angle,
        float $sweep,
        float $negative
    )
    {
    }
}