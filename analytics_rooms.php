<?php
header('Content-Type: application/json');
include 'php/connect.php';

// Запрос данных о залах
$sql = "SELECT Name, Capacity FROM Rooms"; // Например, можно получить имена залов и их ёмкость
$result = mysqli_query($connect, $sql);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;  // добавляем полученные данные в массив
}

mysqli_close($connect); // Закрываем соединение
echo json_encode($data);  // выводим данные в формате JSON
?>