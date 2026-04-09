<?php
echo "--------задание 1-------- <br>";
class Lobova_Employee
{
    public $name, $salary;
    private $age;
    public static $totalSalary = 0;
    public function getName()
    {
        return $this->name;
    }
    public function setAge($newage)
    {
        $this->checkAge($newage);
    }
    public function getSalary($sum)
    {
        self::$totalSalary += $sum;
        return self::$totalSalary;
    }
    private function checkAge($newage)
    {
        if($newage >= 18)
            $this->age = $newage;
        else echo "Вам работать в нашей компании ещё рано:(<br>";
    }
}
// $tom->name = "Tom";
// $tom->age = 30;
// $tom->salary = 100000;
// $jerry = new Lobova_Employee();a
// $jerry->name = "Jerry";
// $jerry->age = 20;
// $jerry->salary = 500000;
echo "Создан класс и экземпляры!";
echo "<br>--------задание 2--------<br>";
// $tomAge = $tom->age;
// $jerryAge = $jerry->age;
// $tomSalary = $tom->salary;
// $jerrySalary = $jerry->salary;
// echo "Сумма возрастов работников равна " . ($tomAge + $jerryAge) . " лет" . "<br>";
// echo "Сумма зарплат работников равна " . ($tomSalary + $jerrySalary) . " рублей";
echo "<br>--------задание 3--------<br>";
echo "Добавлен метод getName";
echo "<br>--------задание 4--------<br>";
echo "Добавлен метод getAge";
echo "<br>--------задание 5--------<br>";
echo "Добавлен метод getSalary<br>";
// echo "Зарплата Тома равна " . $tom->getSalary() . " рублей"; 
echo "--------задание 6--------<br>";
echo "Изменён метод getSalary<br>";
$mimi = new Lobova_Employee();
$mimi->getSalary(500);
$mimii = new Lobova_Employee();
echo "Сумма зарплаты: " . $mimii->getSalary(540);
echo "<br>--------задание 7--------<br>";
echo "Изменён метод getAge на setAge!";
echo "<br>--------задание 8--------<br>";
echo "Изменён метод setAge!<br>";
$katya = new Lobova_Employee();
$katya->setAge(12);
echo "--------задание 9--------<br>";
echo "Создан метод checkAge!";
// $check = $katya->checkAge();
// var_dump($check);
echo "<br>--------задание 10--------<br>";
echo "Изменены методы checkAge и setAge!";
?>