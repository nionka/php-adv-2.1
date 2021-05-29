<?php
declare(strict_types=1);

namespace Workers;

class TeamLeader extends AbstractWorker implements interfaces\LeadInterface, interfaces\WebinarSpeakerInterface
{
    public string $position = 'team leader';
    public int $salary = 100_000;

    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    public function showLeadResponsibilities(): string
    {
        return "Руководит группой разработчиков и отвечает за техническое управление";
    }

    public function showSpeakersResponsibilities(): string
    {
        return "Может участвовать в митапах и конференциях";
    }

    public function getInfo(): string
    {
        $info = "$this->name $this->surname, должность: $this->position, зарплата: $this->salary руб.,
        обязанности: ". $this->showLeadResponsibilities(). " ". $this->showSpeakersResponsibilities();
        return $info;
    }
}


