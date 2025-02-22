<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'fitness_club'); // Имя базы данных: fitness_club
if ($db == false) {
    echo 'Ошибка соединения!';
    exit;
}

// Получаем данные из формы
$Name = isset($_POST['Name']) ? $_POST['Name'] : '';
$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
$Phone = isset($_POST['Phone']) ? $_POST['Phone'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
$repassword = isset($_POST['repassword']) ? $_POST['repassword'] : '';

// Хешируем пароль
$hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

// Проверка пароля
if (strlen($Password) < 6) {
    echo '<script type="text/javascript"> window.onload = function () { alert("Пароль должен содержать не менее 6 символов!"); } </script>';
    exit;
}

// Проверка, есть ли пользователь с таким Email
$emailCheck = "SELECT * FROM Clients WHERE Email = '$Email'";
$emailResult = mysqli_query($db, $emailCheck);
if ($emailResult === false) {
    echo "Error: " . $emailCheck . "<br>" . $db->error;
} elseif (mysqli_num_rows($emailResult) > 0) {
    echo '<script type="text/javascript"> window.onload = function () { alert("Пользователь с такой почтой уже существует!"); } </script>';
    exit;
}

// Проверка совпадения паролей
if ($Password !== $repassword) {
    echo '<script type="text/javascript"> window.onload = function () { alert("Пароли не совпадают!"); } </script>';
    exit;
}

// Создание нового пользователя с хешированным паролем
$sqlInsert = "INSERT INTO Clients (Name, Email, Phone, Password, Access) VALUES ('$Name', '$Email', '$Phone', '$hashedPassword', '0')";
$result = mysqli_query($db, $sqlInsert);
if ($result === false) {
    echo "Error: " . $sqlInsert . "<br>" . $db->error;
} else {
    echo '<script type="text/javascript"> window.onload = function () { alert("Вы успешно зарегистрированы!"); } </script>';
    header("Location: indexAvtor.php");
    exit;
}

$db->close();
?>