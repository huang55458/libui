<?php

namespace UI\Controls;


use UI\Control;

class Tab extends Control
{
    /* 属性 */
    protected $controls;

    /* 方法 */
    public function append(string $name, Control $control): int
    {
    }

    public function delete(int $index): bool
    {
    }

    public function hasMargin(int $page): bool
    {
    }

    public function insertAt(string $name, int $page, Control $control)
    {
    }

    public function pages(): int
    {
    }

    public function setMargin(int $page, bool $margin)
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