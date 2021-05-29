<?php
declare(strict_types=1);

namespace Workers;

abstract class AbstractWorker
{
    protected string $name;
    protected string $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    abstract public function setSalary(int $salary): void;

    abstract public function getInfo(): string;
}
