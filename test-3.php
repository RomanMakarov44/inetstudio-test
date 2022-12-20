<?php

$array= [
  ['id' => 1, 'date' => "12.01.2020", 'name' => "test1"],
  ['id' => 2, 'date' => "02.05.2020", 'name' => "test2"],
  ['id' => 4, 'date' => "08.03.2020", 'name' => "test4"],
  ['id' => 3, 'date' => "06.06.2020", 'name' => "test3"],
];
$id = "2"; // указываем id поиска

foreach ($array as $item) {
    if($item['id'] == $id){
      print_r($item);   // вывод всех элементов с $id
    }
}

foreach ($array as $item) {
    if($item['id'] == $id){
        echo $item['date'];  //вывод конкретного элемента 'date'  
    }
}