<?php
    require_once '../connect.php';
    $id = $_POST['id'];
    $Date = ($_POST['Date']);
    $Time = $_POST['Time'];
    $Id_training = $_POST['Id_training'];
    $Id_trainer = $_POST['Id_trainer'];
    $Id_room = $_POST['Id_room'];

    mysqli_query($connect, "UPDATE `Schedule` SET 
        `Date` = '$Date', 
        `Time` = '$Time', 
        `Id_training` = '$Id_training', 
        `Id_trainer` = $Id_trainer, 
        `Id_room` = $Id_room
        WHERE `Id_schedule` = '$id'");
    header('Location: ../../add_schedule.php');
?>