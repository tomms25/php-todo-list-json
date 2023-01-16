<?php

$tasks = [
    'passare alle poste',
    'fare la spesa',
    'riunione su zoom',
    'studiare PHP',
    'cena al ristorante alle 21.15'
];



$tasks_string = file_get_contents('todolist.json');
$tasks_array = json_decode($tasks_string);



header('Content-Type: application/json');
echo json_encode($tasks_array);

?>