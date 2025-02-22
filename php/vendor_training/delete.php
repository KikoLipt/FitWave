<?php
    require_once '../connect.php';
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `Trainings` WHERE `Id_training` = '$id'");
    header('Location: ../../add_trainings.php'); // Перенаправление на страницу с таблицей
?>