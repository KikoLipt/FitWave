<?php
require_once 'php/connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.svg">
    <link rel="stylesheet" href="style/style_add.css">
    <link rel="stylesheet" href="style/media.css">
    <title>Представление 4</title>
</head>
<style>
    th,td{
    padding: 7px;
    }
    th{
        background: #7d7d7d;
    }

    td{
        background: #adadad;
    }
    .admin{
        padding: 50px 0px;
        height: auto;
        min-height: 765px;
    }

    .admin_arrow{
        height: 30px;
        width: 30px;
        margin-bottom: 20px;
    }
    .admin_suh{
        max-width: 1440px;
        display: flex;
        flex-direction: column;
    }
    .admin_suh_btnbox{
        display: flex;
        margin-top: 20px;
        align-items: flex-start;
    }   
    .admin_suh_btnbox_btn{
        background-color: #fff;
        padding: 12px;
        margin-right: 20px;
        margin-bottom: 50px;
        border-radius: 30px;
        color: #000;
        text-decoration: none;
    }
    input{
        margin-right: 40px;
    }
    p{
        color: #fff;
        margin-top: 10px;
        margin-bottom: 20px;
    }
</style>
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
            <div class="admin">
                <a href="admin.php"><img src="img/left.svg" alt="" class="admin_arrow" style="height: 40px; width: 40px;"></a>
                <p>4. Получить список клиентов, занимающихся определенным видом тренировки.<br> Те кто занимается пилатесом:</p>
                <?php
                $clients = mysqli_query($connect, "SELECT * FROM pilates_client");
                if ($clients) {
                    echo "<table>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>клиент:</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while ($client = mysqli_fetch_assoc($clients)) {
                        echo "<tr>";
                        echo "<td>" . $client['клиент'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "Ошибка запроса: " . mysqli_error($connect);
                }
                ?>
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