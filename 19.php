<?php
//19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

$arr = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
$day = date('l');
foreach ($arr as $value) {

	echo ($value == $day) ? '<i>' . $value . '</i> <br>' : $value . '<br>';
}
 ?>