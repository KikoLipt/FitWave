<?php
    require_once '../connect.php';
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `Rooms` WHERE `Id_room` = '$id'");
    header('Location: ../../add_rooms.php'); // Перенаправление на страницу с таблицей
?>