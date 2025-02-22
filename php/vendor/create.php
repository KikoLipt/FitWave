<?php
    require_once '../connect.php';

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Password = $_POST['Password'];
    // Проверка и преобразование даты начала
    $Mem_start = isset($_POST['Membership_start_date']) && !empty($_POST['Membership_start_date']) 
        ? $_POST['Membership_start_date'] 
        : null;

    // Проверка и преобразование даты окончания
    $Mem_end = isset($_POST['Membership_end_date']) && !empty($_POST['Membership_end_date']) 
        ? $_POST['Membership_end_date']
        : null;

    $Mem_stat = $_POST['Membership_status'];

    // Преобразование пустых строк в NULL для запроса
    $Mem_start = $Mem_start === null ? 'NULL' : "'$Mem_start'";
    $Mem_end = $Mem_end === null ? 'NULL' : "'$Mem_end'";
    
    mysqli_query($connect, "INSERT INTO `Clients` 
        (`Id_client`, `Name`, `Email`, `Phone`, `Membership_start_date`, `Membership_end_date`, `Membership_status`, `Password`) 
        VALUES (NULL, '$Name', '$Email', '$Phone', $Mem_start, $Mem_end, '$Mem_stat', '$Password')");

    header('Location: ../../add.php');
?>