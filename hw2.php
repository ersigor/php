/* 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом.
*/
<?php
$a = 5;
$b = 4;
if ($a >=0 && $b >= 0) {
	echo 'Разность чисел: '.($a - $b);
} elseif ($a < 0 && $b < 0) {
	echo 'Произведение чисел: '.($a * $b);
} elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
	echo 'Сумма чисел: '.($a + $b);
}
?>
/* 2. Присвоить переменной $а значение в промежутке [0..15] (произвольное значение при помощи rand). 
С помощью оператора switch организовать вывод чисел от $a до 15.*/
<?php
$a = rand(5,15);
	switch ($a) {
		case 1:
			echo "1";
		case 2:
			echo "2";
		case 3:
			echo "3";
		case 4:
			echo "4";
		case 5:
			echo "5";
		case 6:
			echo "6";
		case 7:
			echo "7";
		case 8:
			echo "8";
        case 9:
			echo "9";
		case 10:
			echo "10";
		case 11:
			echo "11";
		case 12:
			echo "12";
		case 13:
			echo "13";
        case 14:
			echo "14";
		case 15:
			echo "15";
		break;
	}
?>
/* 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. */
<?php
function sum($arg1, $arg2) {
	return $arg1 + $arg2;
}

function minus($arg1, $arg2) {
	return $arg1 - $arg2;
}

function mult($arg1, $arg2) {
	return $arg1 * $arg2;
}
function del($arg1, $arg2) {
	return $arg1 / $arg2;
}
echo sum(1,2);
echo minus(1,2);
echo mult(1,2);
echo del(1,2);
?>
/* 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/
<?php
function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case "sum": 
			return $arg1 + $arg2;
		case "minus":
			return $arg1 - $arg2;
		case "mult":
			return $arg1 * $arg2; 
		case "del":
			if ($arg2 === 0) {
				echo "Делить на ноль нельзя, знаменатель равен 0";
				break;
			}
			return $arg1 / $arg2;
		}
	}
	echo mathOperation(1, 3, del);
    ?>
/*    5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год 
в подвале при помощи встроенных функций PHP. */

<!DOCTYPE html>
<html lang "en">
<body>
<header>
<h1>Site</h1>
</header>
<footer>
	<?php  echo date('Y');?>
</footer>
</body>
</html>















