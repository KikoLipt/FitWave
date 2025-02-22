<?php
    require_once '../connect.php';
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `Clients` WHERE `Id_client` = '$id'");
    header('Location: ../../add.php'); // Перенаправление на страницу с таблицей
?>