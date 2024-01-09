<?php

namespace UI\Controls;

use UI\Control\Control;

class Box extends Control
{
    /* 常量 */
    const Vertical;
    const Horizontal;
    /* 属性 */
    protected $controls;

    /* Constructor */
    public function __construct(int $orientation = Box::Horizontal)
    {
    }

    /* 方法 */
    public function append(Control $control, bool $stretchy = false): int
    {
    }

    public function delete(int $index): bool
    {
    }

    public function getOrientation(): int
    {
    }

    public function isPadded(): bool
    {
    }

    public function setPadded(bool $padded)
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