<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.svg">
    <link rel="stylesheet" href="style/style_add.css">
    <link rel="stylesheet" href="style/media.css">
    <title>Admin</title>
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
                    <?php
                    session_start();
                    if (isset($_SESSION['Name'])) {
                        echo '<li class="menu_top_pice"><a href="index_lk.php"><img src="img/ava.svg" alt="личный кабинет" class="menu_top_pice_ava"></a></li>';
                    } else {
                        echo '<li class="menu_top_pice"><a href="php/index.php"><img src="img/ava.svg" alt="личный кабинет" class="menu_top_pice_ava"></a></li>';
                    }
                    ?>
                    <li class="menu_top_pice burger"><a href="#"><img src="img/burger-menu.svg" alt="бургер меню" class="menu_top_pice_bmenu"></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="add">
        <div class="container">
            <div class="admin" style="min-height: 794px;">
                <a href="index_lk.php"><img src="img/left.svg" alt="" class="admin_arrow" style="height: 40px; width: 40px;"></a>
                <div class="admin_suh">
                    <h3 class="admin_form_title">Сущности:</h3>
                    <div class="admin_suh_btnbox">
                        <a class="admin_suh_btnbox_btn" href="add.php">Клиенты</a>
                        <a class="admin_suh_btnbox_btn" href="add_trainers.php">Тренеры</a>
                        <a class="admin_suh_btnbox_btn" href="add_rooms.php">Комнаты</a>
                        <a class="admin_suh_btnbox_btn" href="add_trainings.php">Тренировки</a>
                        <a class="admin_suh_btnbox_btn" href="add_schedule.php">Расписание</a>
                        <a class="admin_suh_btnbox_btn" href="add_attendances.php">Посещение</a>
                    </div>
                </div>
                <div class="admin_suh">
                    <h3 class="admin_form_title">Представления:</h3>
                    <div class="admin_suh_btnbox" style="flex-wrap: wrap;">
                        <a class="admin_suh_btnbox_btn" href="add1.php">Представление 1</a>
                        <a class="admin_suh_btnbox_btn" href="add2.php">Представление 2</a>
                        <a class="admin_suh_btnbox_btn" href="add3.php">Представление 3</a>
                        <a class="admin_suh_btnbox_btn" href="add4.php">Представление 4</a>
                        <a class="admin_suh_btnbox_btn" href="add5.php">Представление 5</a>
                        <a class="admin_suh_btnbox_btn" href="add6.php">Представление 6</a>
                        <a class="admin_suh_btnbox_btn" href="add7.php">Представление 7</a>
                        <a class="admin_suh_btnbox_btn" href="add8.php">Представление 8</a>
                        <a class="admin_suh_btnbox_btn" href="add9.php">Представление 9</a>
                        <a class="admin_suh_btnbox_btn" href="add10.php">Представление 10</a>
                    </div>
                </div>

                <!-- график -->
                <div class="analytics-section">
                    <h2>Дашборд</h2>
                    <div style="display: flex; justify-content: space-around;">
                        <div class="analytics-allbox">
                            <div class="analytics-box">
                                <h3 class="analyt-title">График клиентов</h3>
                                <canvas id="clientsChart" width="400" height="200"></canvas>
                            </div>
                            <div class="analytics-box">
                                <h3 class="analyt-title">График посещаемости</h3>
                                <canvas id="attendancesChart" width="400" height="200"></canvas>
                            </div>
                        </div>    
                        <div class="analytics-allbox">
                            <div class="analytics-box">
                                <h3 class="analyt-title">График по залам</h3>
                                <canvas id="roomsChart" width="400" height="200"></canvas>  
                            </div>
                            <div class="analytics-box">
                                <h3 class="analyt-title">График по тренировкам</h3>
                                <canvas id="trainingsChart" width="400" height="200"></canvas>
                            </div>
                        </div>    
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
    <!-- Подключение библиотек -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="analytics.js"></script> <!-- JavaScript файл для аналитики --> 
</body>
</html>