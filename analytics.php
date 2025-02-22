<?php
header('Content-Type: application/json');
include 'php/connect.php';

$sql = "SELECT Membership_status, COUNT(*) as count FROM Clients GROUP BY Membership_status";
$result = mysqli_query($connect, $sql);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;  // добавляем полученные данные в массив
}

mysqli_close($connect); // Закрываем соединение
echo json_encode($data);  // выводим данные в формате JSON
?>
