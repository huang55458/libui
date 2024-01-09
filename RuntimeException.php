<?php

namespace UI\Exception;

use Throwable;

abstract class RuntimeException extends RuntimeException implements Throwable
{
    /* 继承的属性 */
    protected string $message = "";
    private string $string = "";
    protected int $code;
    protected string $file = "";
    protected int $line;
    private array $trace = [];
    private ?Throwable $previous = null;

    /* 继承的方法 */
    final public function getMessage(): string
    {
    }

    final public function getPrevious(): ?Throwable
    {
    }

    final public function getCode(): int
    {
    }

    final public function getFile(): string
    {
    }

    final public function getLine(): int
    {
    }

    final public function getTrace(): array
    {
    }

    final public function getTraceAsString(): string
    {
    }

    public function __toString(): string
    {
    }

    private function __clone()
    {
    }
}