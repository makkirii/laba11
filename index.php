<?php
if(mkdir("test"))
    echo "Создан каталог test";
else echo "Ошибка при созании каталога test";
if(rename("test", "www"))
    echo "<br>Папка test переименована на www";
else echo "<br>Ошибка при переименовании папки test";
if(rmdir("www"))
    echo "<br>Каталог www удален";
else echo "<br>Ошибка при удалении каталога www";
$array = ['first', 'second', 'third', 'fourth', 'fifth'];
mkdir("test");
foreach($array as $ar) {
    $pathname = "test/" . $ar;
        mkdir($pathname);
        echo "<br>Папка $ar создана в каталоге test";
}
touch("opop.jpg");
touch("ertert.jpg");
echo "<br>Файлы с расширением .jpg:";
foreach(glob("*.jpg") as $file)
{
    echo "<br>" . basename($file);
}
?>