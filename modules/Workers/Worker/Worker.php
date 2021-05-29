<?php
declare(strict_types=1);

namespace Workers;

class Worker extends AbstractWorker
{
    public string $position = 'разнорабочий';
    public int $salary = 30_000;
    public string $responsibilities = 'разнорабочий';

    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    public function setResponsibilities(string $responsibilities): void
    {
        $this->responsibilities = $responsibilities;
    }

    public function getInfo(): string
    {
        $info = "$this->name $this->surname, должность: $this->position, зарплата: $this->salary руб.,
        обязанности: $this->responsibilities";
        return $info;
    }
}
