<?php
    require_once '../connect.php';
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    $Capacity = $_POST['Capacity'];

    mysqli_query($connect, "UPDATE `Rooms` SET 
        `Name` = '$Name', 
        `Capacity` = '$Capacity'
        WHERE `Id_room` = '$id'");
    header('Location: ../../add_rooms.php'); // Перенаправление на страницу с таблицей
?>