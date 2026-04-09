<?php 
echo "<b>Часть 1</b><br>";
echo "---задание 1---<br>";
try {
    $fiile = fopen("file.txt", "r");
    if ($fiile == true)
        echo "Открыт файл file.txt";
    else throw new Exception("файла не существует");
    fclose($fiile);
} 
catch(Exception $ex) {  
echo 'Исключение: ' . $ex->getMessage();    
}
echo "<br>---задание 2---<br>";
try {
    $result = 7/0;
    echo $result . "<br>";
}
catch (DivisionByZeroError $ex) {
    $fd = fopen("log.txt", 'w') or die("не удалось создать файл");
    $text = $ex->getMessage();
    fputs($fd, $text);
    fclose($fd);
    echo 'Ошибку можете посмотреть в файле log.txt!!';
}
echo "<br>---задание 3---<br>";
try{
    $countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];
    $element = 'Germany';
    if (!isset($countries[$element]))
        throw new Exception("Этого элемента нет в массиве!");
    else echo $countries[$element];
}
catch(Exception $ex) {
    echo 'Исключение: ' . $ex->getMessage();    
}
echo "<b><br>Часть 2</b><br>";
echo "---задание 1---<br>";
echo "15 марта 2025 года, 10:25:00 в формате timestamp: ";
echo mktime(10, 25, 00, 3, 15, 2025);
echo "<br>---задание 2---<br>";
echo "Разница между 2 октября 1990 года, 08:05:59 и текущим моментом времени в секундах: ";
echo time() - mktime(8, 05, 59, 10, 2, 1990);
echo "<br>---задание 3---<br>";
echo "Текущая дата-время в формате 'Год.месяц.день Час:Минута:Секунда': ";
echo date('Y.m.d H:i:s');
echo "<br>---задание 4---<br>";
echo "1 сентября 2026 года в формате 'Год.месяц.день': ";
echo date('Y.m.d', mktime(0, 0, 0, 9, 1, date('Y')));
echo "<br>---задание 5---<br>";
$d = date('w', mktime(0, 0, 0, 02, 02, 2000));
switch($d)
{
    case 0:
        echo "Воскресенье";
        break;
    case 1:
        echo "Понедельник";
        break;
    case 2:
        echo "Вторник";
        break;
    case 3:
        echo "Среда";
        break;
    case 4:
        echo "Четверг";
        break;
    case 5:
        echo "Пятница";
        break;
    case 6:
        echo "Суббота";
        break;
    default:
        echo "Неверный вывод!";
}
echo "<br>---задание 6---<br>";
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
$zad6 = mktime(0, 0, 0, 06, 12, 2016);
$dr = mktime(0,0,0, 11, 27, 2006);
echo "12 июня 2016 года был такой день недели: " . $week[date('w', $zad6)] . "<br>";
echo "В мой день рождения (27 ноября 2006 года) был такой день недели: " . $week[date('w', $dr)];
echo "<br>---задание 7---<br>";
echo '<form method="POST">
Дата 1:
<input type="date" name="date1" required></input>
Дата 2:
<input type="date" name="date2" required></input>
<button type="submit">Проверить</button>
</form>';
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    if ($date1 != null && $date2 != null)
    {
        if ($date1 > $date2)
            echo "{$date1} больше";
        elseif ($date2 > $date1)
            echo "{$date2} больше";
        else echo "Вы выбрали одинаковые даты!!!";

    }
}
echo "<br>---задание 8---<br>";
echo date('d-m-Y', strtotime('2024-09-17'));
echo "<br>---задание 9---<br>";
$date = date_create('2000-02-03');
date_modify($date, '2 days');
echo "Прибавлено 2 дня: ";
echo date_format($date, 'd.m.Y');
$date = date_create('2000-02-03');
date_modify($date, '1 month 3 days');
echo "<br>Прибавлен 1 месяц и 3 дня: ";
echo date_format($date, 'd.m.Y');
$date = date_create('2000-02-03');
date_modify($date, '1 year');
echo "<br>Прибавлен 1 год: ";
echo date_format($date, 'd.m.Y');
$date = date_create('2000-02-03');
date_modify($date, '-3 day');
echo "<br>Отнято 3 дня: ";
echo date_format($date, 'd.m.Y');
echo "<br>---задание 10---<br>";
$newYear = mktime(0,0,0, 1, 1, date('Y') + 1);
$days = ($newYear - time()) / 86400;
echo "До нового года осталось " . round($days,0) . " дней";
?>