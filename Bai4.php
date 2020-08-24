<?php
$dayso = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum = 0;
for ($i = 0; $i < count($dayso); $i++){
    $sum += $dayso[$i];
}
echo "Trung binh cong: " . $sum / count($dayso);
echo "</br>";
echo "</br>";
$swap = 0;
for ($j = 0; $j < count($dayso) - 1; $j++){
    for ($k = $j+1; $k < count($dayso); $k++){
        if ($dayso[$j] > $dayso[$k]){
            $swap = $dayso[$j] ;
            $dayso[$j]  = $dayso[$k];
            $dayso[$k] = $swap;
        }
    }
}
echo "5 so nho nhat: ";
for ($m = 0; $m < 5; $m++)
{
    echo $dayso[$m] . " ";
}
echo "</br>";
echo "</br>";
echo "5 so lon nhat: ";
for ($n = count($dayso) - 5; $n < count($dayso); $n++){
    echo $dayso[$n] . " ";
}