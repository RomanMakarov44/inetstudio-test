<?php


$array= [
  ['id' => 1, 'date' => "12.01.2020", 'name' => "test1"],
  ['id' => 2, 'date' => "02.05.2020", 'name' => "test2"],
  ['id' => 4, 'date' => "08.03.2020", 'name' => "test4"],
  ['id' => 3, 'date' => "06.06.2020", 'name' => "test3"],
];

$array = array_map(function($tag) {
    return array(
        $tag['name'] => $tag['id'], // изменяю в массиве значения и ключи
    ); }, $array);   

print_r($array); //вывод изменённого массива