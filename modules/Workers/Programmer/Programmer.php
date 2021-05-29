<?php
declare(strict_types=1);

namespace Workers;

class Programmer extends AbstractWorker implements interfaces\ApplicationCreatorInterface
{
    public string $position = 'программист';
    public int $salary = 50_000;

    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    public function showAppCreatorResponsibilities(): string
    {
        return "Писать код";
    }

    public function getInfo(): string
    {
        $info = "$this->name $this->surname, должность: $this->position, зарплата: $this->salary руб.,
        обязанности: ". $this->showAppCreatorResponsibilities();
        return $info;
    }
}