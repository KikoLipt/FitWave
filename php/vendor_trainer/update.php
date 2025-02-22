<?php
    require_once '../connect.php';
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];

    mysqli_query($connect, "UPDATE `Trainers` SET 
        `Name` = '$Name', 
        `Email` = '$Email', 
        `Phone` = '$Phone'
        WHERE `Id_trainer` = '$id'");
    header('Location: ../../add_trainers.php'); // Перенаправление на страницу с таблицей
?>