<?php

namespace UI\Draw\Text\Font;


class Descriptor
{
    /* Constructor */
    public function __construct(
        string $family,
        float  $size,
        int    $weight = Weight::Normal,
        int    $italic = Italic::Normal,
        int    $stretch = Stretch::Normal
    )
    {
    }

    /* 方法 */
    public function getFamily(): string
    {
    }

    public function getItalic(): int
    {
    }

    public function getSize(): float
    {
    }

    public function getStretch(): int
    {
    }

    public function getWeight(): int
    {
    }
}