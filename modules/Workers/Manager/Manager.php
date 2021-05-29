<?php
declare(strict_types=1);

namespace Workers;

class Manager extends AbstractWorker implements interfaces\LeadInterface
{
    public string $position = 'manager';
    public int $salary = 80_000;

    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    public function showLeadResponsibilities(): string
    {
        return "Помогает в непосредственной реализации технических задач: общение с командой разработчиков,
         бюджет, содержание и сбор требований по проекту, постановка целей, распределение задач и контроль 
         за соблюдением сроков.";
    }

    public function getInfo(): string
    {
        $info = "$this->name $this->surname, должность: $this->position, зарплата: $this->salary руб.,
        обязанности: ". $this->showLeadResponsibilities();
        return $info;
    }
}
