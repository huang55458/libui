<?php

namespace UI\Controls;


use UI\Control;

class Group extends Control
{
    /* 属性 */
    protected $controls;

    /* Constructor */
    public function __construct(string $title)
    {
    }

    /* 方法 */
    public function append(Control $control)
    {
    }

    public function getTitle(): string
    {
    }

    public function hasMargin(): bool
    {
    }

    public function setMargin(bool $margin)
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