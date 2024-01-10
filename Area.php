<?php

namespace UI;

class Area extends Control
{
    /* 常量 */
    const  Ctrl;
    const  Alt;
    const  Shift;
    const  Super;
    const  Down;
    const  Up;

    /* 方法 */
    protected function onDraw(
        Draw\Pen $pen,
        Size     $areaSize,
        Point    $clipPoint,
        Size     $clipSize
    )
    {
    }

    protected function onKey(string $key, int $ext, int $flags)
    {
    }

    protected function onMouse(Point $areaPoint, Size $areaSize, int $flags)
    {
    }

    public function redraw()
    {
    }

    public function scrollTo(Point $point, Size $size)
    {
    }

    public function setSize(Size $size)
    {
    }

    /* 继承的方法 */
    public function destroy()
    {
    }

    public function disable()
    {
    }

    public function enable()
    {
    }

    public function getParent(): Control
    {
    }

    public function getTopLevel(): int
    {
    }

    public function hide()
    {
    }

    public function isEnabled(): bool
    {
    }

    public function isVisible(): bool
    {
    }

    public function setParent(Control $parent)
    {
    }

    public function show()
    {
    }
}