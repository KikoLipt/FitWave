<?php
    require_once '../connect.php';
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `Attendances` WHERE `Id_attendances` = '$id'");
    header('Location: ../../add_attendances.php'); // Перенаправление на страницу с таблицей
?>

