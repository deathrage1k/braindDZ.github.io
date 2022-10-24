<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>

		<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">

		N:<input type="text" name="N">
		M:<input type="text" name="M">
		<input type="submit">
		</form>

	<?php
$warning = isset($_GET['M']) ? $_GET['M'] : 6;
$error = isset($_GET['N']) ? $_GET['N'] : 4;
$commit = 0;
if((empty($warning)) || (empty($error)) || (!is_numeric($error)) || (!is_numeric($warning)) || ($warning<0) || ($error < 0)){
 echo "Введите корректные данные";
}
else{
if($error%2 == 1 && $warning == 0){
echo '-1';
}
else{
$commit = intdiv($warning, 2);
$warning -= $commit*2;
$error += $commit;
if($warning == 1){
$error += 1;
$commit += 2;
$warning = 0;
}
if($error%2 == 0){
 $commit += $error/2;
 $error = 0;
}
else{
	$error +=1;
	$commit += 3 + $error/2;
	$error = 0;
}

echo $commit . " min commits";
}
}

//всё отлично, но оператор сравнения != работает криво, так же цикл while с двумя условиями не воспринимал условие != если значение было равно 2
// Из-за вышеперечисленного было решено сделать это формулой, а не циклом. P.S. Возможно данные проблемы только у меня
// на XAMPP версии 16 апреля 21 года.
 ?> 
 </body>
</html>