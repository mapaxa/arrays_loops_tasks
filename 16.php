<?php
//16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке. 1, 2, 3 4, 5, 6 7, 8, 9

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$count = 0;
foreach($arr as $key => $item) {
	echo ($key != count($arr) - 1) ? $item . ', ' : $item;
	$count ++ ;
	if($count == 3){
		echo '<br>';
		$count = 0;
	}
}

 ?>