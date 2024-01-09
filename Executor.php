<?php

namespace UI;

class Executor
{
    /* Constructor */
    public function __construct()
    {
    }

    public function __construct(int $microseconds)
    {
    }

    public function __construct(int $seconds, int $microseconds)
    {
    }

    /* 方法 */
    public function kill(): void
    {
    }

    abstract protected function onExecute(): void
    {
    }

    public function setInterval(int $microseconds): bool
    {
    }

    public function setInterval(int $seconds, int $microseconds): bool
    {
    }
}