<?php
echo "--------задание 1-------- <br>";
class Lobova_Employee
{
    public $name, $age, $salary;
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}
$tom = new Lobova_Employee();
$tom->name = "Tom";
$tom->age = 30;
$tom->salary = 100000;

$jerry = new Lobova_Employee();
$jerry->name = "Jerry";
$jerry->age = 20;
$jerry->salary = 500000;
echo "Создан класс и экземпляры!";
echo "<br>--------задание 2--------<br>";
$tomAge = $tom->age;
$jerryAge = $jerry->age;
$tomSalary = $tom->salary;
$jerrySalary = $jerry->salary;
echo "Сумма возрастов работников равна " . ($tomAge + $jerryAge) . " лет" . "<br>";
echo "Сумма зарплат работников равна " . ($tomSalary + $jerrySalary) . " рублей";
echo "<br>--------задание 3--------<br>";
echo "Добавлен метод getName";
echo "<br>--------задание 4--------<br>";
echo "Добавлен метод getAge";
echo "<br>--------задание 5--------<br>";
echo "Добавлен метод getSalary<br>";
echo "Зарплата Тома равна " . $tom->getSalary() . " рублей"; 
?>