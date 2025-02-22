<?php
session_start();

if (!isset($_SESSION['user'])) {
    // Обработка случая, когда пользователь не авторизован
    // Например, перенаправление на страницу авторизации
    header('Location: login.php');
    exit;
}

// Получение данных о пользователе из сессии
$user = $_SESSION['user'];

// Извлечение Membership_status из $user, если он существует
$membershipStatus = isset($user['Membership_status']) ? $user['Membership_status'] : 'Статус абонемента неизвестен';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.svg">
    <link rel="stylesheet" href="style/style_lk.css">
    <link rel="stylesheet" href="style/media.css">
    <title>Личный кабинет</title>
</head>
<body>
    <header>
        <div class="container">
            <nav class="menu">
                <ul class="menu_top">
                    <li class="menu_top_pice"><a href="index.php"><img src="img/Logo-menu.svg" alt="логотип" class="menu_top_pice_logo"></a></li>
                    <li class="menu_top_pice"><a href="index_rasp.php" class="menu_top_pice"><p class="menu_top_pice_topic">Расписание</p></a></li>
                    <li class="menu_top_pice"><a href="index_blog.php" class="menu_top_pice"><p class="menu_top_pice_topic">Блог</p></a></li>
                    <li class="menu_top_pice"><a href="index_rasp.php#trainers" class="menu_top_pice"><p class="menu_top_pice_topic">Наши тренеры</p></a></li>
                    <li class="menu_top_pice"><a href="index.php#aboutus" class="menu_top_pice"><p class="menu_top_pice_topic">О нас</p></a></li>
                    <li class="menu_top_pice"><a href="index.php#rate" class="menu_top_pice"><p class="menu_top_pice_topic">Тарифы</p></a></li>
                    <li class="menu_top_pice"><a href="index.php#filial" class="menu_top_pice"><p class="menu_top_pice_topic">Филиалы</p></a></li>
                    <li class="menu_top_pice"><a href="index.php"><img src="img/ava.svg" alt="личный кабинет" class="menu_top_pice_ava"></a></li>
                    <li class="menu_top_pice burger"><a href="#"><img src="img/burger-menu.svg" alt="бургер меню" class="menu_top_pice_bmenu"></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="person">
        <div class="container">
            <div class="person">
                <h2 class="person_title">Личный кабинет</h2>
                <div class="person_box">
                    <img src="img/avatar.png" alt="" class="person_box_img">
                    <div class="person_box_subbox">
                        <p class="person_box_subbox_name">Логин: <?php echo $user['Name']; ?></p>
                        <p class="person_box_subbox_text">Email: <?php echo $user['Email']; ?></p>
                        <p class="person_box_subbox_text">Статус абонемента: <?php echo $membershipStatus; ?></p>
                        <?php
                        if ($user['role'] == 1) {
                                echo '<button class="person_box_subbox_btn"><a href="admin.php" class="person_box_subbox_btn_text">Перейти в админ панель</a></button>';
                            }
                        ?>
                        <form method="post" action="php/logout.php">
                            <input class="person_box_subbox_btn" style="color: white; text-decoration: none; font-size: 18px; font-weight: 500;" type="submit" value="Выйти из аккаунта">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer">
                <div class="footer_box">
                    <a href=""><img src="img/tg.svg" alt="" class="footer_box_icon"></a>
                    <a href=""><img src="img/vk.svg" alt="" class="footer_box_icon"></a>
                    <a href=""><img src="img/facebook.svg" alt="" class="footer_box_icon"></a>
                </div>
                <div class="footer_box">
                    <p class="footer_box_text">88005553535</p>
                    <a href=""><img src="img/phone.svg" alt=""  class="footer_box_icon"></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>