<?php
session_start();
// Удаление всех сессионных переменных
$_SESSION = array();

// Если требуется удалить сессию также с сервера
// (для дополнительной защиты против атак с фиксацией сессии)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}
// Удаление сессии
session_destroy();

// Перенаправление на главную страницу или другую необходимую страницу
header("Location: ../index.php");
exit;
?>