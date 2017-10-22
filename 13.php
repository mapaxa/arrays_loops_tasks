<?php
//13. Вывести таблицу умножения

$a = 10; 
$b = 10;

for($i = 1; $i <= $a; $i ++) {
	for($j = 1; $j <= $b; $j ++ ) {
		$result = $i * $j;
		echo $i . 'x' . $j . '=' . $result . '<br>';
	}
	echo '<br>';
}

?>