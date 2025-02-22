<?php
    require_once '../connect.php';
    // Проверка и преобразование даты начала
    $Date = ($_POST['Date']);
    $Time = $_POST['Time'];
    $Id_training = $_POST['Id_training'];
    $Id_trainer = $_POST['Id_trainer'];
    $Id_room = $_POST['Id_room'];

    mysqli_query($connect, "INSERT INTO `Schedule` 
        (`Id_schedule`, `Date`, `Time`, `Id_training`, `Id_trainer`, `Id_room`) 
        VALUES (NULL, '$Date', '$Time', '$Id_training', '$Id_trainer', '$Id_room')");

    header('Location: ../../add_schedule.php');
?>