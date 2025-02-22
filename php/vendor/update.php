<?php
    require_once '../connect.php';
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Password = $_POST['Password'];
    $Mem_start = isset($_POST['Membership_start_date']) && !empty($_POST['Membership_start_date']) ? $_POST['Membership_start_date'] : null;
    $Mem_end = isset($_POST['Membership_end_date']) && !empty($_POST['Membership_end_date']) ? $_POST['Membership_end_date'] : null;
    $Mem_stat = $_POST['Membership_status'];
    $Mem_start = $Mem_start === null ? 'NULL' : "'$Mem_start'";
    $Mem_end = $Mem_end === null ? 'NULL' : "'$Mem_end'";

    mysqli_query($connect, "UPDATE `Clients` SET 
        `Name` = '$Name', 
        `Email` = '$Email', 
        `Phone` = '$Phone', 
        `Membership_start_date` = $Mem_start, 
        `Membership_end_date` = $Mem_end, 
        `Membership_status` = '$Mem_stat',
        `Password` = '$Password'
        WHERE `Id_client` = '$id'");
    header('Location: ../../add.php'); // Перенаправление на страницу с таблицей
?>