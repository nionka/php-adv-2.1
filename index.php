<?php
declare(strict_types=1);

define('LIB_DIR', __DIR__ . '/modules/');

spl_autoload_register(function($class) {
    $a = explode('\\', $class);
    $last = array_pop($a);
    $fn = $class . '/' . $last . '.php';
    $fn = LIB_DIR . str_replace('\\', '/', $fn);

    // echo '<b>autoload: ' . $class . '</b> file: ' . $fn . '<br>';

    if (file_exists($fn)) require $fn;
});

$people[] = new Workers\TeamLeader('OLeg', 'Ivanov');
$people[] = new Workers\Manager("Irina", "Alegrova");
$people[] = new Workers\Programmer("Alena", "Smirnova");
$people[] = new Workers\Programmer("Igor", "Balamanov");
$people[] = new Workers\Tester("Alexey", "Sidorov");
$people[] = new Workers\Worker("Maria", "Maksimova");

$salaryAll = 0;

foreach ($people as $key => $person) {
    echo $key + 1 . ". ". $person->getInfo();
    echo "<br>". PHP_EOL;
    $salaryAll += $person->salary;
}
echo "<br>";
echo "Общее количество сотрудников: ". count($people). "<br>".  PHP_EOL;
echo "Общая сумма зарплат: ". $salaryAll . " руб" . "<br>".  PHP_EOL;