<?php
    require_once '../connect.php';

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    mysqli_query($connect, "INSERT INTO `Trainers` 
        (`Id_trainer`, `Name`, `Email`, `Phone`) 
        VALUES (NULL, '$Name', '$Email', '$Phone')");

    header('Location: ../../add_trainers.php');
?>