<?php

namespace UI\Controls;


use UI\Control;

class Entry extends Control
{
    /* 常量 */
    const Normal;
    const Password;
    const Search;

    /* Constructor */
    public function __construct(int $type = Entry::Normal)
    {
    }

    /* 方法 */
    public function getText(): string
    {
    }

    public function isReadOnly(): bool
    {
    }

    protected function onChange()
    {
    }

    public function setReadOnly(bool $readOnly)
    {
    }

    public function setText(string $text)
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