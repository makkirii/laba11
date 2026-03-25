<?php
if(mkdir("test"))
    echo "Создан каталог test";
else echo "Ошибка при созании каталога test";
if(rename("test", "www"))
    echo "<br>Папка test переименована на www";
else echo "<br>Ошибка при переименовании папки test";
if(rmdir("www"))
    echo "<br>Каталог www удален";
else echo "Ошибка при удалении каталога www";
?>
