<?php
    require_once '../connect.php';
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `Trainers` WHERE `Id_trainer` = '$id'");
    header('Location: ../../add_trainers.php'); // Перенаправление на страницу с таблицей
?>