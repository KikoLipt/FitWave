<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.svg">
    <link rel="stylesheet" href="style/style_blog.css">
    <link rel="stylesheet" href="style/media.css">
    <title>Блог</title>
</head>
<body>
    <header>
        <div class="container">
            <nav class="menu">
                <ul class="menu_top">
                    <li class="menu_top_pice"><a href="index.php"><img src="img/Logo-menu.svg" alt="логотип" class="menu_top_pice_logo"></a></li>
                    <li class="menu_top_pice"><a href="index_rasp.php" class="menu_top_pice"><p class="menu_top_pice_topic">Расписание</p></a></li>
                    <li class="menu_top_pice"><a href="#" class="menu_top_pice"><p class="menu_top_pice_topic">Блог</p></a></li>
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
    <section id="banner">
        <div class="container">
            <div class="banner">
                <h1 class="banner_title">Fitwave Блог</h1>
            </div>
        </div>
    </section>

    <section id="why">
        <div class="container">
            <div class="why">
                <h2 class="why_title">Отзывы</h2>
                <div class="why_box">
                    <div class="why_box_subbox">
                        <img src="img/ava1.png" alt="" class="why_box_subbox_img">
                        <div class="why_box_subbox_textbox">
                            <div class="why_box_subbox_textbox_subtextbox">
                                <p class="why_box_subbox_textbox_subtextbox_text">Иван</p>
                                <p class="why_box_subbox_textbox_subtextbox_time">05.06.2024 19:20</p>
                            </div>
                            <p class="why_box_subbox_textbox_text why_text">Разнообразные тренировки: В FitWave ты найдешь разнообразные групповые занятия, индивидуальные тренировки, а также возможность заниматься самостоятельно на современном оборудовании.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="why_box_subbox">
                        <img src="img/ava2.png" alt="" class="why_box_subbox_img">
                        <div class="why_box_subbox_textbox">
                            <div class="why_box_subbox_textbox_subtextbox">
                                <p class="why_box_subbox_textbox_subtextbox_text">Максим</p>
                                <p class="why_box_subbox_textbox_subtextbox_time">07.05.2024 13:02</p>
                            </div>
                            <p class="why_box_subbox_textbox_text why_text">Комфорт и удобство: Наши современные залы оборудованы всем необходимым для комфортного занятия спортом.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="why_box_subbox">
                        <img src="img/ava3.png" alt="" class="why_box_subbox_img">
                        <div class="why_box_subbox_textbox">
                            <div class="why_box_subbox_textbox_subtextbox">
                                <p class="why_box_subbox_textbox_subtextbox_text">Егор</p>
                                <p class="why_box_subbox_textbox_subtextbox_time">03.03.2024 08:46</p>
                            </div>
                            <p class="why_box_subbox_textbox_text why_text">Опытные инструкторы и персональный подход: Наши инструкторы - профессионалы своего дела, которые помогут тебе правильно выполнить упражнения, подберут оптимальную программу тренировок и дадут советы по питанию. Мы ценим каждого клиента и стремимся к индивидуальному подходу, чтобы помочь тебе достичь желаемых результатов.</p>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="rate_subtitle">Оставить свой отзыв:</h3>
            <form action="#" class="rate_input">
                <input class="rate_input_text" type="text" name="email" placeholder="Отзыв...">
                <button id="open-popup-btn5" class="rate_input_btn"><img class="rate_input_btnn" src="img/post.svg" alt=""></button>
            </form>
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