<?php
    require_once '../connect.php';
    $Name = $_POST['Name'];
    $Capacity = $_POST['Capacity'];
    mysqli_query($connect, "INSERT INTO `Rooms` 
        (`Id_room`, `Name`, `Capacity`) 
        VALUES (NULL, '$Name', '$Capacity')");

    header('Location: ../../add_rooms.php');
?>