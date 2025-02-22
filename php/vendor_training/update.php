<?php
require_once '../connect.php';
$id = $_POST['id'];
$Name = $_POST['Name'];
$Type = $_POST['Type'];
$Duration = $_POST['Duration'];
$Id_room = $_POST['Id_room'];

// Проверка существования Id_room в таблице Rooms
$checkRoom = mysqli_query($connect, "SELECT * FROM `Rooms` WHERE `Id_room` = '$Id_room'");
if (mysqli_num_rows($checkRoom) > 0) {
    // Id_room существует, выполняем обновление
    mysqli_query($connect, "UPDATE `Trainings` SET 
        `Name` = '$Name', 
        `Type` = '$Type', 
        `Duration` = '$Duration',
        `Id_room` = '$Id_room'
        WHERE `Id_training` = '$id'");
    header('Location: ../../add_trainings.php'); 
} else {
    // Id_room не существует, выводим сообщение об ошибке
    echo "Ошибка: Зал с таким ID не найден.";
}

?>