<?php
    require_once '../connect.php';

    $Name = $_POST['Name'];
    $Type = $_POST['Type'];
    $Duration = $_POST['Duration'];
    $Id_room = $_POST['Id_room'];
    mysqli_query($connect, "INSERT INTO `Trainings` 
        (`Id_training`, `Name`, `Type`, `Duration`, `Id_room`) 
        VALUES (NULL, '$Name', '$Type', '$Duration', '$Id_room')");

    header('Location: ../../add_trainings.php');
?>