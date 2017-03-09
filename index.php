<?php  //Финальные правки по 1-ому ДЗ
// Задание №1
echo 'Задание №1: <br><br>';

$name = 'Евгений';
$age = '28';

echo "Меня зовут: $name";
echo '<br>';
echo 'Мне ' . $age . ' лет';
echo '<br>';
echo "\"!|\/'\"\\";

echo '<br>_________________________________________<br><br>';
//Задание №2
echo 'Задание №2: <br><br>';

$all = 80;
$markers = 23;
$pencils = 40;

$paints = $all - $markers - $pencils;

echo "$all - $markers - $pencils = $paints";

echo '<br>_________________________________________<br><br>';
//Задание №3
echo 'Задание №3: <br><br>';


define('NUMBER', 55);
if (defined('NUMBER')) {
    echo 'константа NUMBER = ' . NUMBER . ' существует';
} else {
    echo 'Константы не существует';
}
echo '<br>';

define('NUMBER', 10);
echo 'Константа NUMBER -> ' . NUMBER;


echo "<br>_________________________________________<br><br>";
//Задание №4
echo 'Задание №4: <br><br>';

$fullAge = 17;
if ($fullAge >= 18 && $fullAge <= 65) {
    echo 'Вам еще работать и работать'; // двойные кавычки избыточны
} elseif ($fullAge > 65) {
    echo 'Вам пора на пенсию';
} elseif ($fullAge >= 1 && $fullAge < 18) {      //лучше поставить не 17(как в условии задачи) а 18, т.к. в этом случае не будет выпадать возраст от 17 до 18
    echo 'Вам еще рано работать';
} else {
    echo 'Неизвестный возраст';
}


echo '<br>_________________________________________<br><br>';
//Задание №5
echo 'Задание №5: <br><br>';

$day = 6;

switch ($day) {
    case '1':
        echo 'Это рабочий день';
        break;
    case '2':
        echo 'Это рабочий день';
        break;
    case '3':
        echo 'Это рабочий день';
        break;
    case '4':
        echo 'Это рабочий день';
        break;
    case '5':
        echo 'Это рабочий день';
        break;
    case '6':
        echo 'Это выходной день';
        break;
    case '7':
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
}


echo '<br>_________________________________________<br><br>';
//Задание №6
echo 'Задание №6: <br><br>';

$bmw['model'] = 'X5';
$bmw['speed'] = 120;
$bmw['doors'] = 5;
$bmw['year'] = '2015';

$toyota['model'] = 'camry';
$toyota['speed'] = 110;
$toyota['doors'] = 4;
$toyota['year'] = '2010';

$opel['model'] = 'astra';
$opel['speed'] = 100;
$opel['doors'] = 3;
$opel['year'] = '2014';

$cars = array(
    'BMW' => $bmw,
    'TOYOTA' => $toyota,
    'OPEL' => $opel
);

//echo "<pre>";
//print_r($cars);

foreach ($cars as $key => $car) {
    echo "<div style='border: 1px solid black'>";
    echo "CAR $key <br>";
    foreach ($car as $item) {
        echo $item . ' ';
    }
    echo '</div>';
    echo '<br><br>';
}


echo "<br>_________________________________________<br><br>";
//Задание №7
echo 'Задание №7: <br><br>';

echo "<table border='1'>";

for ($i = 1; $i < 11; $i++) {
    echo '<tr>';
    for ($j = 1; $j < 11; $j++) {
        if ($i % 2 === 0 && $j % 2 === 0) {
            echo "<td align='center'>(" . $i * $j . ")</td>";
        } elseif ($i % 2 !== 0 && $j % 2 !== 0) {
            echo "<td align='center'>[" . $i * $j . "]</td>";
        } else {
            echo "<td align='center'>" . $i * $j . "</td>";
        }
    }
    echo '</tr>';
}

echo '</table>';


echo '<br>_________________________________________<br><br>';
//Задание №8
echo 'Задание №8: <br><br>';


$str = 'строка из разделенных пробелами слов';
echo $str;

$array = explode(' ', $str);
echo '<pre>';
print_r($array);

/* Вариант с добавлением нового массива
$count = count($array);
$k = 0;
while ($count--) {
    $array1[$k++] = $array[$count];
}
*/

$count = count($array);
$k = 0;
$m = 0;
while ($count >= $m) {
    $k = $array[--$count];
    $array[$count] = $array[$m];
    $array[$m] = $k;
    ++$m;
}

//echo "<pre>";
//print_r($array);

echo "<br><br>" . $newStr = implode(' + ', $array);
