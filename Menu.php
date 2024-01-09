<?php

namespace UI;

use UI\MenuItem;

class Menu
{
    /* Constructor */
    public function __construct(string $name)
    {
    }

    /* 方法 */
    public function append(string $name, string $type = MenuItem::class): MenuItem
    {
    }

    public function appendAbout(string $type = MenuItem::class): MenuItem
    {
    }

    public function appendCheck(string $name, string $type = MenuItem::class): MenuItem
    {
    }

    public function appendPreferences(string $type = MenuItem::class): MenuItem
    {
    }

    public function appendQuit(string $type = MenuItem::class): MenuItem
    {
    }

    public function appendSeparator()
    {
    }
}