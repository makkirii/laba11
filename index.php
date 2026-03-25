<?php
$f = fopen("test.txt", "w") or 
die("не удалось создать файл");
$str = "Привет,мир!";
fputs($f, $str);
fclose($f);
$numb2 = htmlentities(file_get_contents("test.txt"));
echo $numb2;
?>
