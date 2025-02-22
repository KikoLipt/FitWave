<?php
    require_once '../connect.php';
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `Schedule` WHERE `Id_schedule` = '$id'");
    header('Location: ../../add_schedule.php');
?>