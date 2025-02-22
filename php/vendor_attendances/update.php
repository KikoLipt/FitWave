<?php
    require_once '../connect.php';
    $id = $_POST['id'];
    $Date = $_POST['Date'];
    $Id_client = $_POST['Id_client'];
    $Id_schedule = $_POST['Id_schedule'];

    mysqli_query($connect, "UPDATE `Attendances` SET 
        `Date` = '$Date', 
        `Id_client` = '$Id_client', 
        `Id_schedule` = '$Id_schedule'
        WHERE `Id_attendances` = '$id'");
    header('Location: ../../add_attendances.php'); // Перенаправление на страницу с таблицей
?>