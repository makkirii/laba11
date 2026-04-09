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
?>