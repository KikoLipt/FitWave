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
    <title>Посещение</title>
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
    .admin_form{
        padding: 50px 0px;
        font-size: 28px;
        margin-right: 150px;
        margin-bottom: 100px;
        display: flex;
        flex-direction: column;
        max-height: 1000px;
        flex-wrap: wrap;
    }
    .admin_form_title{
        color: #fff;
        margin-right: 40px;
        font-size: 22px;
    }
    .admin_form_text{
        color: #fff;
        margin: 5px;
        margin-top: 15px;
        font-size: 20px;
        margin-right: 40px;
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
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .btn{
        background-color: #6F7A8E;
        color: white;
        padding: 12px 20px;
        margin: 10px 0;
        border: none;
        border-radius: 0px 20px;
        cursor: pointer;
        width: 100%;
        font-size: 22px;
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
                <?php
                $attendances = mysqli_query($connect, "SELECT * FROM `Attendances`");

                // Проверка успешного выполнения запроса
                if ($attendances) {
                    // Начало таблицы
                    echo "<table>";
                    echo "<thead>";
                    echo "<tr>";
                
                    // Вывод заголовков столбцов 
                    echo "<th>Id_attendances </th>";
                    echo "<th>Date</th>";
                    echo "<th>Id_client </th>";
                    echo "<th>Id_schedule </th>";
                    echo "<th>Действия</th>"; // Добавляем столбец "Действия"
                
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                
                    // Проход по результатам запроса
                    while ($attendance = mysqli_fetch_assoc($attendances)) { 
                        // Вывод данных в строках таблицы
                        echo "<tr>";
                        echo "<td>" . $attendance['Id_attendances'] . "</td>";
                        echo "<td>" . $attendance['Date'] . "</td>";
                        echo "<td>" . $attendance['Id_client'] . "</td>";
                        echo "<td>" . $attendance['Id_schedule'] . "</td>";
                        echo "<td><a href='add_attendances.php?id=" . $attendance['Id_attendances'] . "'>Изменить</a> | <a href='php/vendor_attendances/delete.php?id=" . $attendance['Id_attendances'] . "'>Удалить</a></td>"; // Кнопки "Изменить" и "Удалить"
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "Ошибка запроса: " . mysqli_error($connect);
                }                
                ?>
                <div class="inputbox" style="display:flex;">
                    <form class="admin_form" style="margin-right: 250px;" action="php/vendor_attendances/create.php" method="POST">
                        <h3 class="admin_form_title">Добавить данные:</h3>
                        <p class="admin_form_text">Дата:</p>
                        <input type="date" name="Date">
                        <p class="admin_form_text">Идентификатор клиента:</p>
                        <input type="Id_client" name="Id_client">
                        <p class="admin_form_text">Идентификатор расписания:</p>
                        <input type="Id_schedule" name="Id_schedule"><br><br>
                        <button class="btn" type="submit">Добавить</button>
                    </form>
                    <?php
                        // Форма для обновления данных клиента
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            // Получаем данные клиента по ID
                            $attendance = mysqli_query($connect, "SELECT * FROM `Attendances` WHERE `Id_attendances` = '$id'");
                            $attendance = mysqli_fetch_assoc($attendance);

                            if ($attendance) {
                                echo "<form class='admin_form' action='php/vendor_attendances/update.php' method='POST'>"; 
                                echo "<h3 class='admin_form_title'>Изменить данные:</h3>";
                                echo "<input type='hidden' name='id' value='" . $attendance['Id_attendances'] . "'>"; 

                                echo "<p class='admin_form_text'>Дата:</p>";
                                echo "<input type='date' name='Date' value='" . $attendance['Date'] . "'>";

                                echo "<p class='admin_form_text'>Идентификатор клиента:</p>";
                                echo "<input type='text' name='Id_client' value='" . $attendance['Id_client'] . "'>";

                                echo "<p class='admin_form_text'>Идентификатор расписания:</p>";
                                echo "<input type='text' name='Id_schedule' value='" . $attendance['Id_schedule'] . "'><br> <br>";

                                echo "<button class='btn' type='submit'>Изменить</button>";
                                echo "</form>";
                            } else {
                                echo "Клиент не найден.";
                            }
                        }
                    ?>
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