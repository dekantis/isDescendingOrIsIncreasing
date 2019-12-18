<?php

//Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.

//Функция поиска возрастающей последовательности
function isIncSequence(int $naturalNum): bool
{
    while ($naturalNum > 9) {
        if ($naturalNum % 10 <= (int)($naturalNum / 10) % 10) { //Сравнение текущей цифры с предыдущей
            return false;
        }
        $naturalNum = (int)($naturalNum / 10);
    }
    return true;
}

//Функция поиска убывающей последовательности
function isDescSequence(int $naturalNum): bool
{
    while ($naturalNum > 9) {
        if ($naturalNum % 10 >= (int)($naturalNum / 10) % 10) { //Сравнение текущей цифры с предыдущей
            return false;
        }
        $naturalNum = (int)($naturalNum / 10);
    }
    return true;
}
for ($i=1234; $i<9877;$i++) {
    if ($i % 2 == 0 && (isDescSequence($i)||isIncSequence($i))) { //проврека числа на возрастающие или убывающие цифры
        echo $i."\n";
        }
}

