<?php
$array= [
  ['id' => 1, 'date' => "12.01.2020", 'name' => "test1"],
  ['id' => 2, 'date' => "02.05.2020", 'name' => "test2"],
  ['id' => 4, 'date' => "08.03.2020", 'name' => "test4"],
  ['id' => 3, 'date' => "06.06.2020", 'name' => "test3"],
];
usort($array, fn($a, $b) => $a['id'] <=> $b['id']); //сортировка 
print_r($array);
?>