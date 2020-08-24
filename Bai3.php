<?php
$arr = [2,5,4,9,0];
print_r($arr);

var_dump($arr);

for ($i = 0; $i < count($arr); $i++){
    echo "key: " . $i . ", value: " . $arr[$i]. "</br>";
}