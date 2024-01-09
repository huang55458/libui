<?php

namespace UI\Controls;


use UI\Control;

class Grid extends Control
{
    /* 常量 */

    const Fill;

    const Start;

    const Center;

    const End;

    const Leading;

    const Top;

    const Trailing;

    const Bottom;
    /* 属性 */
    protected $controls;

    /* 方法 */
    public function append(
        Control $control,
        int     $left,
        int     $top,
        int     $xspan,
        int     $yspan,
        bool    $hexpand,
        int     $halign,
        bool    $vexpand,
        int     $valign
    )
    {
    }

    public function isPadded(): bool
    {
    }

    public function setPadded(bool $padding)
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