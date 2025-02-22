<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.svg">
    <link rel="stylesheet" href="style/style_rasp.css">
    <link rel="stylesheet" href="style/media_popup.css">
    <link rel="stylesheet" href="style/media.css">
    <title>FitWave Расписание</title>
</head>
<body>
    <header>
        <div class="container">
            <nav class="menu">
                <ul class="menu_top">
                    <li class="menu_top_pice"><a href="index.php"><img src="img/Logo-menu.svg" alt="логотип" class="menu_top_pice_logo"></a></li>
                    <li class="menu_top_pice"><a href="#" class="menu_top_pice"><p class="menu_top_pice_topic">Расписание</p></a></li>
                    <li class="menu_top_pice"><a href="index_blog.php" class="menu_top_pice"><p class="menu_top_pice_topic">Блог</p></a></li>
                    <li class="menu_top_pice"><a href="#trainers" class="menu_top_pice"><p class="menu_top_pice_topic">Наши тренеры</p></a></li>
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
                <h1 class="banner_title">Расписание тренировок</h1>
            </div>
        </div>
    </section>
    <section id="trainers">
        <div class="container">
            <div class="trainers">
                <h2 class="trainers_title">Наши тренеры</h2>
                <hr>
                <div class="trainers_box">
                    <div class="trainers_box_subbox">
                        <div id="open-popup-btn-trainer" class="trainers_box_subbox_card">
                            <img src="img/train1.png" alt="trainer1" class="trainers_box_subbox_card_img">
                            <p class="trainers_box_subbox_card_text">Гурова Полина</p>
                        </div>
                        <div id="open-popup-btn-trainer2" class="trainers_box_subbox_card">
                            <img src="img/train2.png" alt="trainer2" class="trainers_box_subbox_card_img">
                            <p class="trainers_box_subbox_card_text">Титов Станислав</p>
                        </div>
                        <div id="open-popup-btn-trainer3" class="trainers_box_subbox_card">
                            <img src="img/train3.png" alt="trainer3" class="trainers_box_subbox_card_img">
                            <p class="trainers_box_subbox_card_text">Фадеев Егор</p>
                        </div>
                    </div>
                    <div class="trainers_box_subbox">
                        <div id="open-popup-btn-trainer4" class="trainers_box_subbox_card">
                            <img src="img/train4.png" alt="trainer4" class="trainers_box_subbox_card_img">
                            <p class="trainers_box_subbox_card_text">Крот Сергей</p>
                        </div>
                        <div id="open-popup-btn-trainer5" class="trainers_box_subbox_card">
                            <img src="img/train5.png" alt="trainer5" class="trainers_box_subbox_card_img">
                            <p class="trainers_box_subbox_card_text">Крот Михаил</p>
                        </div>
                        <div id="open-popup-btn-trainer6" class="trainers_box_subbox_card">
                            <img src="img/train6.png" alt="trainer6" class="trainers_box_subbox_card_img">
                            <p class="trainers_box_subbox_card_text">Морозова Валерия</p>
                        </div>
                    </div>
                    <div class="trainers_box_subbox">
                        <div id="open-popup-btn-trainer7" class="trainers_box_subbox_card">
                            <img src="img/train7.png" alt="trainer7" class="trainers_box_subbox_card_img">
                            <p class="trainers_box_subbox_card_text">Севин Мария</p>
                        </div>
                        <div id="open-popup-btn-trainer8" class="trainers_box_subbox_card">
                            <img src="img/train8.png" alt="trainer8" class="trainers_box_subbox_card_img">
                            <p class="trainers_box_subbox_card_text">Рубинова Екатерина</p>
                        </div>
                        <div id="open-popup-btn-trainer9" class="trainers_box_subbox_card">
                            <img src="img/train9.png" alt="trainer9" class="trainers_box_subbox_card_img">
                            <p class="trainers_box_subbox_card_text">Выхова Василиса</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tren">
        <div class="container">
            <div class="tren">
                <h2 class="tren_title">Тренировки сегодня:</h2>
                <div class="tren_filial">
                    <p class="tren_filial_text">В филиале:</p>
                    <p class="tren_filial_text"></p>
                </div>
                <div class="tren_box">
                    <div class="tren_box_subbox">
                        <div id="open-popup-btn-tren" class="tren_box_subbox_card">
                            <img src="img/pilates.png" alt="тренировка1" class="tren_box_subbox_card_img">
                            <p class="tren_box_subbox_card_title">Пилатес</p>
                            <div class="tren_box_subbox_card_box">
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>8:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>10:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>12:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>14:00</p></a>
                                </div>
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>16:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>18:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>20:00</p></a>
                                </div>
                            </div>
                        </div>
                        <div id="open-popup-btn-tren2" class="tren_box_subbox_card">
                            <img src="img/salsa.png" alt="тренировка1" class="tren_box_subbox_card_img">
                            <p class="tren_box_subbox_card_title">Сальса</p>
                            <div class="tren_box_subbox_card_box">
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>8:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>10:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>12:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>14:00</p></a>
                                </div>
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>16:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>18:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>20:00</p></a>
                                </div>
                            </div>
                        </div>
                        <div id="open-popup-btn-tren3" class="tren_box_subbox_card">
                            <img src="img/circle_tren.png" alt="тренировка1" class="tren_box_subbox_card_img">
                            <p class="tren_box_subbox_card_title">Круговая тренировка</p>
                            <div class="tren_box_subbox_card_box">
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>8:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>10:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>12:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>14:00</p></a>
                                </div>
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>16:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>18:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>20:00</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tren_box_subbox">
                        <div id="open-popup-btn-tren4" class="tren_box_subbox_card">
                            <img src="img/yoga.png" alt="тренировка1" class="tren_box_subbox_card_img">
                            <p class="tren_box_subbox_card_title">Йога</p>
                            <div class="tren_box_subbox_card_box">
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>8:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>10:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>12:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>14:00</p></a>
                                </div>
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>16:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>18:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>20:00</p></a>
                                </div>
                            </div>
                        </div>
                        <div id="open-popup-btn-tren5" class="tren_box_subbox_card">
                            <img src="img/power.png" alt="тренировка1" class="tren_box_subbox_card_img">
                            <p class="tren_box_subbox_card_title">Силовая</p>
                            <div class="tren_box_subbox_card_box">
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>8:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>10:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>12:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>14:00</p></a>
                                </div>
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>16:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>18:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>20:00</p></a>
                                </div>
                            </div>
                        </div>
                        <div id="open-popup-btn-tren6" class="tren_box_subbox_card">
                            <img src="img/bike.png" alt="тренировка1" class="tren_box_subbox_card_img">
                            <p class="tren_box_subbox_card_title">Вело тренировка</p>
                            <div class="tren_box_subbox_card_box">
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>8:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>10:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>12:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>14:00</p></a>
                                </div>
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>16:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>18:00</p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p>20:00</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mytren">
        <div class="container">
            <div class="tren">
                <h2 class="tren_title mytren_title">Мои Тренеровки:</h2>
                <div class="tren_box mytren_box">
                    <div class="tren_box_subbox">
                        <div class="tren_box_subbox_card nonactiv_card">
                            <img src="" class="tren_box_subbox_card_img">
                            <p class="tren_box_subbox_card_title"></p>
                            <div class="tren_box_subbox_card_box">
                                <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                            </div>
                        </div>
                        <div class="tren_box_subbox_card nonactiv_card">
                            <img src="" alt="" class="tren_box_subbox_card_img">
                            <p class="tren_box_subbox_card_title"></p>
                            <div class="tren_box_subbox_card_box">
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                </div>
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                </div>
                            </div>
                        </div>
                        <div class="tren_box_subbox_card nonactiv_card">
                            <img src="" alt="" class="tren_box_subbox_card_img">
                            <p class="tren_box_subbox_card_title"></p>
                            <div class="tren_box_subbox_card_box">
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                </div>
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tren_box_subbox">
                        <div class="tren_box_subbox_card nonactiv_card">
                            <img src="" alt="" class="tren_box_subbox_card_img">
                            <p class="tren_box_subbox_card_title"></p>
                            <div class="tren_box_subbox_card_box">
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                </div>
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                </div>
                            </div>
                        </div>
                        <div class="tren_box_subbox_card nonactiv_card">
                            <img src="" alt="" class="tren_box_subbox_card_img">
                            <p class="tren_box_subbox_card_title"></p>
                            <div class="tren_box_subbox_card_box">
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                </div>
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                </div>
                            </div>
                        </div>
                        <div class="tren_box_subbox_card nonactiv_card">
                            <img src="" alt="" class="tren_box_subbox_card_img">
                            <p class="tren_box_subbox_card_title"></p>
                            <div class="tren_box_subbox_card_box">
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                </div>
                                <div class="tren_box_subbox_card_box_subbox">
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                    <a href="" class="tren_box_subbox_card_box_subbox_time"><p></p></a>
                                </div>
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
    <div class="popup" id="popup-trainer">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/train1.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Гурова Полина</p>
                    <p class="popup_box_subbox_textbox_text">Возраст: 22 года</p>
                    <p class="popup_box_subbox_textbox_text">Тренер по: Лёгкой атлетике</p>
                    <p class="popup_box_subbox_textbox_text opis">Опытный и позитивный тренер в FitWave! С её помощью каждая тренировка превращается в увлекательное путешествие к лучшей версии себя. 💪 Полина обладает высоким профессионализмом и индивидуальным подходом к каждому клиенту, помогая им достичь своих фитнес-целей и преодолеть любые препятствия. 🌊 Её энергия и вдохновение заразительны, а знания в области тренировок и правильного питания делают занятия эффективными и результативными. Присоединяйтесь к тренировкам с Полиной и почувствуйте себя заряженными энергией и мотивацией! 💫🔥</p>
                </div> 
            </div>
            <a id="close-popup-btn-trainer" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-trainer2">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/train2.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Титов Станислав</p>
                    <p class="popup_box_subbox_textbox_text">Возраст: 25 лет</p>
                    <p class="popup_box_subbox_textbox_text">Тренер по: Фитнесу и бодибилдингу</p>
                    <p class="popup_box_subbox_textbox_text opis">Станислав – настоящий профессионал в мире фитнеса и бодибилдинга! 💪 С ним каждая тренировка становится вызовом, который помогает превзойти себя и достичь новых результатов. 🏋️‍♂️ Его опыт и знания в области тренировок и питания делают занятия не только эффективными, но и увлекательными. Станислав применяет индивидуальный подход к каждому клиенту, помогая им сформировать ярко выраженные мышцы и улучшить свою физическую форму. 🌟 Присоединяйтесь к тренировкам с Титовым и почувствуйте себя сильными, стройными и полными энергии! 🔥💫</p>
                </div> 
            </div>
            <a id="close-popup-btn-trainer2" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-trainer3">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/train3.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Фадеев Егор</p>
                    <p class="popup_box_subbox_textbox_text">Возраст: 30 лет</p>
                    <p class="popup_box_subbox_textbox_text">Тренер по: Функциональному тренингу</p>
                    <p class="popup_box_subbox_textbox_text opis">🏋️‍♂️ Егор – опытный тренер по функциональному тренингу в нашем фитнес-клубе! С ним каждая тренировка превращается в захватывающее путешествие к лучшей физической форме. 💪 Егор отличается высоким профессионализмом, терпением и индивидуальным подходом к каждому ученику, помогая им достичь желаемых результатов и преодолеть любые трудности. 🌟 Его энтузиазм и позитивная энергия мотивируют даже самых уставших, а его глубокие знания в области тренировок и здорового образа жизни делают занятия максимально эффективными. Присоединяйтесь к тренировкам с Егором и почувствуйте себя наполненными силой и решимостью! 🔥💫</p>
                </div> 
            </div>
            <a id="close-popup-btn-trainer3" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-trainer4">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/train4.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Крот Сергей</p>
                    <p class="popup_box_subbox_textbox_text">Возраст: 28 лет</p>
                    <p class="popup_box_subbox_textbox_text">Тренер по: Фитнесу и силовым тренировкам</p>
                    <p class="popup_box_subbox_textbox_text opis">Сергей - опытный профессионал в мире фитнеса! 💪 С ним каждая тренировка превращается в захватывающее путешествие к вашим фитнес-целям. 🏋️‍♂️ Стремясь помочь каждому своему клиенту, Сергей предлагает индивидуальный подход к тренировкам, помогая преодолеть любые препятствия на пути к их достижению. 💥 Его энтузиазм и энергия невероятно заразительны, а его знания в области физической формы и питания делают занятия максимально эффективными. Присоединяйтесь к тренировкам с Сергеем и почувствуйте себя более сильными, здоровыми и полными энергии! 🚀🔥</p>
                </div> 
            </div>
            <a id="close-popup-btn-trainer4" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-trainer5">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/train5.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Крот Михаил</p>
                    <p class="popup_box_subbox_textbox_text">Возраст: 21 год</p>
                    <p class="popup_box_subbox_textbox_text">Тренер по:  Бодибилдингу</p>
                    <p class="popup_box_subbox_textbox_text opis">🏋️‍♂️💥 Крот Михаил – опытный тренер в зале "Iron Strength"! Его подход к тренировкам превращает каждое занятие в захватывающее путешествие к сильному и подтянутому телу. Страсть к бодибилдингу и дружелюбный настрой делают его занятия незабываемыми и результативными. 💪🔥 Михаил обладает высоким профессионализмом и заботливым отношением к каждому своему клиенту, помогая им превзойти свои лимиты и достичь желаемых спортивных результатов. Его мотивация и энтузиазм заражают всю группу, помогая каждому ученику раскрыть свой потенциал и добиться успеха. Присоединитесь к тренировкам с Михаилом и почувствуйте себя сильными, уверенными и готовыми к новым спортивным достижениям! 🌟🏋️‍♂️</p>
                </div> 
            </div>
            <a id="close-popup-btn-trainer5" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-trainer6">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/train6.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Морозова Валерия</p>
                    <p class="popup_box_subbox_textbox_text">Возраст: 28 лет</p>
                    <p class="popup_box_subbox_textbox_text">Тренер по: Круговой тренировке</p>
                    <p class="popup_box_subbox_textbox_text opis">Валерия - искромётный и целеустремленный тренер в мире круговых тренировок! 💪 С её поддержкой каждая тренировка превращается в захватывающее путешествие к идеальной форме и здоровью. 🏋️‍♀️ Валерия отличается глубоким знанием спорта и энергичным подходом к обучению, что помогает ей мотивировать и вдохновлять своих подопечных на результаты, о которых они мечтают. 💥 Её опыт и профессионализм позволяют разрабатывать индивидуальные программы тренировок, а также питания, чтобы помочь каждому достичь своих целей и преодолеть любые трудности на пути к здоровому образу жизни. Присоединяйтесь к тренировкам с Валерией и почувствуйте, как ваше тело наполняется энергией, а душа - радостью и уверенностью! 💫🔥🌟</p>
                </div> 
            </div>
            <a id="close-popup-btn-trainer6" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-trainer7">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/train7.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Севин Мария</p>
                    <p class="popup_box_subbox_textbox_text">Возраст: 32 года</p>
                    <p class="popup_box_subbox_textbox_text">Тренер по: Сальсе</p>
                    <p class="popup_box_subbox_textbox_text opis">Севин - танцевальный гуру в студии SalsaRhythm! 💃 С её помощью вы окунетесь в мир страсти и ритма сальсы, превращая каждое занятие в захватывающее танцевальное путешествие. 💖 Мария обладает огромным опытом и профессионализмом, что позволяет ей создавать индивидуальные программы тренировок, помогая каждому ученику раскрыть свой танцевальный потенциал. 💫 Её энтузиазм и позитивный настрой заразительны, а умение передавать танцевальные навыки делает занятия не только увлекательными, но и результативными. Присоединяйтесь к занятиям с Марией и почувствуйте, как ваши движения наполняются гармонией, страстью и энергией! 🔥🎶🌟</p>
                </div> 
            </div>
            <a id="close-popup-btn-trainer7" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-trainer8">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/train8.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Рубинова Екатерина</p>
                    <p class="popup_box_subbox_textbox_text">Возраст: 42 года</p>
                    <p class="popup_box_subbox_textbox_text">Тренер по: йоге и пилатесу</p>
                    <p class="popup_box_subbox_textbox_text opis">Екатерина - талантливый тренер в области йоги и пилатеса! С ней каждое занятие превращается в гармонию тела и души. 🧘‍♀️ Ее профессионализм и доброжелательность помогают ученикам достигать гибкости, силы и внутреннего спокойствия. 🌿 Екатерина применяет индивидуальный подход к каждому ученику, учитывая их потребности и возможности, что делает занятия максимально эффективными и приятными. 💫💪 Присоединитесь к группе Екатерины и почувствуйте, как ваше тело и ум становятся более гармоничными и здоровыми под ее руководством! 🙏✨</p>
                </div> 
            </div>
            <a id="close-popup-btn-trainer8" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-trainer9">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/train9.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Выхова Василиса</p>
                    <p class="popup_box_subbox_textbox_text">Возраст: 30 года</p>
                    <p class="popup_box_subbox_textbox_text">Тренер по: Фитнесу и бодибилдингу</p>
                    <p class="popup_box_subbox_textbox_text opis">🏋️‍♂️ Василиса — настоящий профессионал в мире фитнеса и бодибилдинга! Она страстно любит свою работу и готова вдохновить каждого своего подопечного на пути к их лучшей форме. Специализируется на индивидуальном подходе к тренировкам, помогая достичь поставленных целей и преодолеть любые трудности. 💪💥 Василиса обладает обширными знаниями в области физиологии, питания и тренировок, что делает её занятия не только эффективными, но и безопасными. Под её руководством вы почувствуете себя уверенно и мощно, стремясь к новым спортивным достижениям! Присоединяйтесь к тренировкам с Василисой и почувствуйте, как ваше тело и дух становятся сильнее с каждым днем! 🌟🏋️‍♀️</p>
                </div> 
            </div>
            <a id="close-popup-btn-trainer9" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-tren">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/popup1.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Пилатес</p>
                    <p class="popup_box_subbox_textbox_text">Время тренировки:</p>
                    <p class="popup_box_subbox_textbox_text">Тренер:</p>
                    <p class="popup_box_subbox_textbox_text opis">Добро пожаловать на тренировку по пилатесу - нежному, но мощному способу укрепить свое тело и развить гибкость! Пилатес - это система упражнений, разработанная для улучшения силы, гибкости, равновесия и осанки. На тренировке вы будете работать над корпусом, укрепляя мышцы спины, брюшного пресса, ягодиц и ног. Пилатес также способствует улучшению дыхания, координации движений и снятию стресса, помогая достичь гармонии между телом и разумом. Присоединяйтесь к тренировке по пилатесу и почувствуйте, как ваше тело становится сильнее, гибче и более гармоничным! 🌸🌟</p>
                </div> 
            </div>
            <a id="close-popup-btn-tren" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-tren2">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/popup2.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Сальса</p>
                    <p class="popup_box_subbox_textbox_text">Время тренировки:</p>
                    <p class="popup_box_subbox_textbox_text">Тренер:</p>
                    <p class="popup_box_subbox_textbox_text opis">Добро пожаловать на зажигательную тренировку по сальсе! Погружайтесь в мир латиноамериканских ритмов и движения, где вы сможете не только овладеть основами этого яркого танца, но и улучшить свою координацию, гибкость и выносливость. Сальса - это не просто танец, это стиль жизни, который подарит вам заряд энергии и позитива. Присоединяйтесь к тренировке, и пусть ваши ноги танцуют в такт ритму сальсы! 💃🔥</p>
                </div> 
            </div>
            <a id="close-popup-btn-tren2" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-tren3">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/popup3.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Круговая тренировка</p>
                    <p class="popup_box_subbox_textbox_text">Время тренировки:</p>
                    <p class="popup_box_subbox_textbox_text">Тренер:</p>
                    <p class="popup_box_subbox_textbox_text opis">Готовы к интенсивной и эффективной тренировке? Круговая тренировка - это высокоинтенсивный режим, включающий в себя серию упражнений, которые выполняются по кругу с минимальным отдыхом между ними. Это идеальный вариант для тех, кто хочет быстро сжечь калории, повысить уровень метаболизма и улучшить свою общую физическую форму. Присоединяйтесь к тренировке, и почувствуйте, как ваше тело становится сильнее и выносливее! 💪🔥</p>
                </div> 
            </div>
            <a id="close-popup-btn-tren3" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-tren4">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/popup4.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Йога</p>
                    <p class="popup_box_subbox_textbox_text">Время тренировки:</p>
                    <p class="popup_box_subbox_textbox_text">Тренер:</p>
                    <p class="popup_box_subbox_textbox_text opis">Добро пожаловать в мир йоги - практики, которая гармонично сочетает физические упражнения, дыхательные техники и медитацию. На тренировке вы будете работать над гибкостью, силой и балансом, а также освоите техники глубокого дыхания, которые помогут снизить стресс и улучшить сон. Йога - это путь к самопознанию и достижению гармонии между телом и разумом. Присоединяйтесь к тренировке и ощутите внутренний покой и умиротворение! 🧘‍♀️😌</p>
                </div> 
            </div>
            <a id="close-popup-btn-tren4" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-tren5">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/popup5.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Силовая</p>
                    <p class="popup_box_subbox_textbox_text">Время тренировки:</p>
                    <p class="popup_box_subbox_textbox_text">Тренер:</p>
                    <p class="popup_box_subbox_textbox_text opis">Хотите укрепить мышцы и сделать свое тело более рельефным? Силовая тренировка - это то, что вам нужно! Она направлена на развитие силы и выносливости, используя различные упражнения с отягощениями. Силовая тренировка не только улучшает физическую форму, но и повышает уровень метаболизма, способствует укреплению костей и снижению риска травм. Присоединяйтесь к тренировке и почувствуйте, как ваше тело становится более сильным и выносливым! 💪🏋️‍♀️</p>
                </div> 
            </div>
            <a id="close-popup-btn-tren5" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <div class="popup" id="popup-tren6">
        <div class="popup_box">
            <div class="popup_box_subbox">
                <img src="img/popup6.png" alt="" class="popup_box_subbox_img">
                <div class="popup_box_subbox_textbox">
                    <p class="popup_box_subbox_textbox_title">Вело тренировка</p>
                    <p class="popup_box_subbox_textbox_text">Время тренировки:</p>
                    <p class="popup_box_subbox_textbox_text">Тренер:</p>
                    <p class="popup_box_subbox_textbox_text opis">Вперед на велотренажер - к захватывающим кардио-тренировкам! Вело тренировка - это отличный способ улучшить свою выносливость, сжечь калории и прокачать мышцы ног. На тренировке вы сможете настроить уровень нагрузки и насладиться прогулкой по живописным виртуальным маршрутам. Присоединяйтесь к тренировке и почувствуйте, как ваше тело становится более выносливым и энергичным! 🚴‍♀️💨</p>
                </div> 
            </div>
            <a id="close-popup-btn-tren6" class="popup_box_btn"><img src="img/close.svg"></a>
        </div>
    </div>
    <script src="./popup.js"></script>
</body>
</html>