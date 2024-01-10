<?php
namespace UI;


use UI\Control;
use UI\Size;

class Window extends Control
{
    /* 属性 */
    protected $controls;

    /* Constructor */
    public function __construct(string $title, Size $size, bool $menu = false)
    {
    }

    /* 方法 */
    public function add(Control $control)
    {
    }

    public function error(string $title, string $msg)
    {
    }

    public function getSize(): Size
    {
    }

    public function getTitle(): string
    {
    }

    public function hasBorders(): bool
    {
    }

    public function hasMargin(): bool
    {
    }

    public function isFullScreen(): bool
    {
    }

    public function msg(string $title, string $msg)
    {
    }

    protected function onClosing(): int
    {
    }

    public function open(): string
    {
    }

    public function save(): string
    {
    }

    public function setBorders(bool $borders)
    {
    }

    public function setFullScreen(bool $full)
    {
    }

    public function setMargin(bool $margin)
    {
    }

    public function setSize(UI\Size $size)
    {
    }

    public function setTitle(string $title)
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