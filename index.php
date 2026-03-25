<?php
$f = fopen("test.txt", "w") or 
die("не удалось создать файл");
$str = "Привет,мир!";
fputs($f, $str);
fclose($f);
$numb2 = htmlentities(file_get_contents("test.txt"));
echo "Содержимое файла: " . $numb2;
if(!rename("test.txt", "mir.txt"))
    echo "Ошибка перемещения файла";
else echo "<br> Файл test.txt переименован в mir.txt";
if (mkdir("folder"))
    echo "<br>Создан каталог folder";
else 
    echo "<br>Ошибка при создании каталога";
if(!rename("mir.txt", "folder/mir.txt"))
    echo "<br>Файл mir.txt не был перемещён в каталог folder из-за ошибки";
else echo "<br>Файл mir.txt перемещён в каталог folder";
if (copy("folder/mir.txt", "folder/world.txt"))
    echo "<br>Создана копия файла mir.txt";
else echo "<br>Ошибка копирования файла mir.txt";
?>
