<?php
declare(strict_types=1);

namespace Workers;

class Tester extends AbstractWorker implements interfaces\ApplicationCreatorInterface
{
    public string $position = 'team leader';
    public int $salary = 45_000;

    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    public function showAppCreatorResponsibilities(): string
    {
        return "Писать автотесты, ручное тестирование";
    }

    public function getInfo(): string
    {
        $info = "$this->name $this->surname, должность: $this->position, зарплата: $this->salary руб.,
        обязанности: ". $this->showAppCreatorResponsibilities();
        return $info;
    }
}