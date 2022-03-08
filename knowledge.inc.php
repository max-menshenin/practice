        <!-- integer — целые числа;
        double — дробные числа;
        string — строки;
        object — объекты;
        array — массивы;
        boolean — логический тип;
        resource — ресурсы;
        NULL. -->


<?php
$layout = 'Верстка удовлетворительна, но пока не идеальна'.'<br>';
$php = 'Создавал проекты на Laravel';
$javascript = 'Понимаю Javascript'; 
$boolean = 1; // присвоить $boolean значение TRUE
if($boolean) echo 'true'.' - булевый тип'.'<br>';
$integer = 123;
echo $integer.'  — целые числа'.'<br>';
$double = 1.234;
echo $double.'- дробные числа'.'<br>';
$string = 'test';
echo $string.' - строковый тип'.'<br>';
?>
