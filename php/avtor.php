<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'fitness_club');
if ($db === false) {
    echo 'Ошибка соединения!';
    exit;
}

if (isset($_POST['submit'])) {
    if (isset($_POST['Name'], $_POST['Password'], $_POST['g-recaptcha-response'])) {
        $Name = $_POST['Name'];
        $Password = $_POST['Password'];
        $recaptcha = $_POST['g-recaptcha-response'];

        // Ваш секретный ключ ReCaptcha
        $secretKey = '6Lf4ywMqAAAAAKqlQ_RMtyTi3CXanr7aF4ylfj2f';

        // Проверка ReCaptcha
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $secretKey,
            'response' => $recaptcha
        );

        $options = array(
            'http' => array (
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $responseKey = json_decode($response, true);

        if ($responseKey['success']) {
            $loginQuery = "SELECT * FROM `Clients` WHERE `Name` = ?";
            $stmt = $db->prepare($loginQuery);
            $stmt->bind_param("s", $Name);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $userData = $result->fetch_assoc();
                $storedPassword = $userData['Password'];

                if (password_verify($Password, $storedPassword)) {
                    $_SESSION['user'] = $userData;
                    $stmt->close();
                    mysqli_close($db);
                    header('Location: ../index_lk.php');
                    exit;
                } else {
                    echo '<script type="text/javascript">window.onload = function () { alert("Неправильный пароль!"); }</script>';
                    exit;
                }
            } else {
                echo '<script type="text/javascript">window.onload = function () { alert("Пользователь с таким логином не существует!"); }</script>';
                exit;
            }
        } else {
            $_SESSION['message'] = 'Пожалуйста подтвердите, что вы не робот';
            header('Location: indexAvtor.php');
            exit;
        }
    }
}
?>