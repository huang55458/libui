<?php

namespace UI\Draw;



use UI\Draw\Stroke\Stroke;
use UI\Draw\Text\Layout;
use UI\Point;

class Pen
{
    /* 方法 */
    public function clip(Path $path)
    {
    }

    public function fill(Path $path, Brush $with)
    {
    }

    public function fill(Path $path, Color $with)
    {
    }

    public function fill(Path $path, int $with)
    {
    }

    public function restore()
    {
    }

    public function save()
    {
    }

    public function stroke(Path $path, Brush $with, Stroke $stroke)
    {
    }

    public function stroke(Path $path, Color $with, Stroke $stroke)
    {
    }

    public function stroke(Path $path, int $with, Stroke $stroke)
    {
    }

    public function transform(Matrix $matrix)
    {
    }

    public function write(Point $point, Layout $layout)
    {
    }
}