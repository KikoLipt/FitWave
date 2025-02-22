<?php
    require_once '../connect.php';
    $Date = $_POST['Date'];
    $Id_client = $_POST['Id_client'];
    $Id_schedule = $_POST['Id_schedule'];

    mysqli_query($connect, "INSERT INTO `Attendances` 
        (`Id_attendances`, `Date`, `Id_client`, `Id_schedule`) 
        VALUES (NULL, '$Date', '$Id_client', '$Id_schedule')");

    header('Location: ../../add_attendances.php');
?>