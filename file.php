<?php
$time = time();
$data = [
    "title" => $_POST['title'],
    "content" => $_POST['content'],
    "data_2" => $time
];

$connection = new PDO('mysql: host=localhost;dbname=test10', 'root', ''); //Соеденяемся с базой
//var_dump($connection);//если соединение успешно то ошибки не будет
$sql = "INSERT INTO data_test (title,content,data_2) VALUES(:title, :content, :data_2)"; //Подготавливаем строку запроса
$statement = $connection->prepare($sql); // Передаем строку запроса сюда
$result = $statement->execute($data); //Передаем данные в масиве data

var_dump($result);
