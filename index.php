<?php
session_start();
$loggedIn = isset($_SESSION['user']); // Предполагая, что информация об авторизации сохраняется под ключом 'user'
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.svg">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/media.css">
    <title>FitWave</title>
</head>
<body>
    <header>
        <div class="container">
            <nav class="menu">
                <ul class="menu_top">
                    <li class="menu_top_pice"><a href="#"><img src="img/Logo-menu.svg" alt="логотип" class="menu_top_pice_logo"></a></li>
                    <li class="menu_top_pice"><a href="index_rasp.php" class="menu_top_pice"><p class="menu_top_pice_topic">Расписание</p></a></li>
                    <li class="menu_top_pice"><a href="index_blog.php" class="menu_top_pice"><p class="menu_top_pice_topic">Блог</p></a></li>
                    <li class="menu_top_pice"><a href="index_rasp.php#trainers" class="menu_top_pice"><p class="menu_top_pice_topic">Наши тренеры</p></a></li>
                    <li class="menu_top_pice"><a href="#aboutus" class="menu_top_pice"><p class="menu_top_pice_topic">О нас</p></a></li>
                    <li class="menu_top_pice"><a href="#rate" class="menu_top_pice"><p class="menu_top_pice_topic">Тарифы</p></a></li>
                    <li class="menu_top_pice"><a href="#filial" class="menu_top_pice"><p class="menu_top_pice_topic">Филиалы</p></a></li>
                    <?php
                    if ($loggedIn) {
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
                <h1 class="banner_title">Fitwave приглашает вас!Прямо сейчас, присоединяйся</h1>
                <button id="open-popup-btn4" class="banner_btn">Оформить карту</button>
            </div>
        </div>
    </section>
    <section id="aboutus">
        <div class="container">
            <div class="aboutus">
                <h2 class="aboutus_title">О нас</h2>
                <p class="aboutus_text">Добро пожаловать в мир FitWave - где каждая волна тренировки приносит радость и здоровье!<br><br>FitWave - это не просто фитнес клуб, это комьюнити амбициозных людей, стремящихся к лучшей версии себя каждый день.<br><br>Наши специально разработанные фитнес-программы под руководством опытных инструкторов помогут тебе достичь своих фитнес-целей, будь то снижение веса, укрепление мышц или улучшение выносливости.<br><br>У нас ты найдешь все, что необходимо для эффективных тренировок: современное оборудование, уютные залы для групповых занятий, индивидуальные тренировки и просторные бассейны для релаксации и укрепления здоровья.<br><br>И не забывай о радости послетренировочного расслабления! Наши спа-услуги помогут тебе восстановиться и насладиться заслуженным отдыхом - массаж, сауна, солярий и многое другое ждут тебя в наших уютных филиалах.<br><br>Присоединяйся к FitWave уже сегодня и позволь себе окунуться в океан заботы о своем теле и душе!</p>
            </div>
        </div>
    </section>
    <section id="sale">
        <div class="container">
            <div class="sale">
                <h2 class="sale_title">А<br>К<br>Ц<br>И<br>И</h2>
                <div class="sale_box">
                    <div class="sale_box_subbox">
                        <img src="img/sale1.png" alt="акция 1" class="sale_box_subbox_img">
                        <p class="sale_box_subbox_text">Сильная пятница!<br>Все тренажёры доступны</p>
                    </div>
                    <div class="sale_box_subbox">
                        <img src="img/sale2.png" alt="акция 2" class="sale_box_subbox_img">
                        <p class="sale_box_subbox_text">Открытые тренировки<br>в Филёвском парке</p>
                    </div>
                    <div class="sale_box_subbox">
                        <img src="img/sale3.png" alt="акция 3" class="sale_box_subbox_img">
                        <p class="sale_box_subbox_text">50% акция для женщин<br>на абонемент</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="filial">
        <div class="container">
            <div class="filial">
                <h2 class="filial_title">Наши филиалы:</h2>
                <div class="filial_box">
                    <img src="img/left.svg" alt="кнопка налево" class="filial_box_btn leftbtn">
                    <div class="filial_box_subbox activslide">
                        <img src="img/zal.png" alt="фото из филиала" class="filial_box_subbox_img">
                        <div class="filial_box_subbox_subboxx">
                            <p class="filial_box_subbox_subboxx_filial">Филиал: Раменки...</p>
                            <p class="filial_box_subbox_subboxx_text">Часы работы: 6:00 - 23:00 Что имеется:</p>
                            <div class="filial_box_subbox_subboxx_options">
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon1.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">Тренажёры</p>
                                </div>
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon2.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">СПА</p>
                                </div>
                            </div>
                            <div class="filial_box_subbox_subboxx_options nonactiv">
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon3.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">Бассейн</p>
                                </div>
                            </div>
                            <p class="filial_box_subbox_subboxx_text next_subbox">Ближайшие станции метро:</p>
                            <div class="filial_box_subbox_subboxx_metro">
                                <div class="filial_box_subbox_subboxx_metro_subbox">
                                    <img src="img/geo.svg" alt="" class="filial_box_subbox_subboxx_metro_subbox_img">
                                    <p class="filial_box_subbox_subboxx_metro_subbox_text">Аминьевская</p>
                                </div>
                                <div class="filial_box_subbox_subboxx_metro_subbox">
                                    <img src="img/geo.svg" alt="" class="filial_box_subbox_subboxx_metro_subbox_img">
                                    <p class="filial_box_subbox_subboxx_metro_subbox_text">Минская</p>
                                </div>
                                <div class="filial_box_subbox_subboxx_metro_subbox">
                                    <img src="img/geo.svg" alt="" class="filial_box_subbox_subboxx_metro_subbox_img">
                                    <p class="filial_box_subbox_subboxx_metro_subbox_text">Мичуринский проспект</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filial_box_subbox">
                        <img src="img/zal2.png" alt="фото из филиала" class="filial_box_subbox_img">
                        <div class="filial_box_subbox_subboxx">
                            <p class="filial_box_subbox_subboxx_filial">Филиал: Братеевское...</p>
                            <p class="filial_box_subbox_subboxx_text">Часы работы: 6:00 - 23:00 Что имеется:</p>
                            <div class="filial_box_subbox_subboxx_options">
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon1.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">Тренажёры</p>
                                </div>
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon3.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">Бассейн</p>
                                </div>
                            </div>
                            <div class="filial_box_subbox_subboxx_options nonactiv">
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon2.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">СПА</p>
                                </div>
                            </div>
                            <p class="filial_box_subbox_subboxx_text next_subbox">Ближайшие станции метро:</p>
                            <div class="filial_box_subbox_subboxx_metro">
                                <div class="filial_box_subbox_subboxx_metro_subbox">
                                    <img src="img/geo.svg" alt="" class="filial_box_subbox_subboxx_metro_subbox_img">
                                    <p class="filial_box_subbox_subboxx_metro_subbox_text">Борисово</p>
                                </div>
                                <div class="filial_box_subbox_subboxx_metro_subbox">
                                    <img src="img/geo.svg" alt="" class="filial_box_subbox_subboxx_metro_subbox_img">
                                    <p class="filial_box_subbox_subboxx_metro_subbox_text">Алма-Атинская</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filial_box_subbox">
                        <img src="img/zal3.png" alt="фото из филиала" class="filial_box_subbox_img">
                        <div class="filial_box_subbox_subboxx">
                            <p class="filial_box_subbox_subboxx_filial">Филиал: Донской...</p>
                            <p class="filial_box_subbox_subboxx_text">Часы работы: 6:00 - 23:00 Что имеется:</p>
                            <div class="filial_box_subbox_subboxx_options">
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon1.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">Тренажёры</p>
                                </div>
                            </div>
                            <div class="filial_box_subbox_subboxx_options nonactiv">
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon2.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">СПА</p>
                                </div>
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon3.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">Бассейн</p>
                                </div>
                            </div>
                            <p class="filial_box_subbox_subboxx_text next_subbox">Ближайшие станции метро:</p>
                            <div class="filial_box_subbox_subboxx_metro">
                                <div class="filial_box_subbox_subboxx_metro_subbox">
                                    <img src="img/geo.svg" alt="" class="filial_box_subbox_subboxx_metro_subbox_img">
                                    <p class="filial_box_subbox_subboxx_metro_subbox_text">Шаболовская</p>
                                </div>
                                <div class="filial_box_subbox_subboxx_metro_subbox">
                                    <img src="img/geo.svg" alt="" class="filial_box_subbox_subboxx_metro_subbox_img">
                                    <p class="filial_box_subbox_subboxx_metro_subbox_text">Октябрьская</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filial_box_subbox">
                        <img src="img/zal4.png" alt="фото из филиала" class="filial_box_subbox_img">
                        <div class="filial_box_subbox_subboxx">
                            <p class="filial_box_subbox_subboxx_filial">Филиал: Сходненский...</p>
                            <p class="filial_box_subbox_subboxx_text">Часы работы: 6:00 - 23:00 Что имеется:</p>
                            <div class="filial_box_subbox_subboxx_options">
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon1.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">Тренажёры</p>
                                </div>
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon2.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">СПА</p>
                                </div>
                            </div>
                            <div class="filial_box_subbox_subboxx_options nonactiv">
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon3.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">Бассейн</p>
                                </div>
                            </div>
                            <p class="filial_box_subbox_subboxx_text next_subbox">Ближайшие станции метро:</p>
                            <div class="filial_box_subbox_subboxx_metro">
                                <div class="filial_box_subbox_subboxx_metro_subbox">
                                    <img src="img/geo.svg" alt="" class="filial_box_subbox_subboxx_metro_subbox_img">
                                    <p class="filial_box_subbox_subboxx_metro_subbox_text">Сходненская</p>
                                </div>
                                <div class="filial_box_subbox_subboxx_metro_subbox">
                                    <img src="img/geo.svg" alt="" class="filial_box_subbox_subboxx_metro_subbox_img">
                                    <p class="filial_box_subbox_subboxx_metro_subbox_text">Планерная</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filial_box_subbox">
                        <img src="img/zal5.png" alt="фото из филиала" class="filial_box_subbox_img">
                        <div class="filial_box_subbox_subboxx">
                            <p class="filial_box_subbox_subboxx_filial">Филиал: Селигерский...</p>
                            <p class="filial_box_subbox_subboxx_text">Часы работы: 6:00 - 23:00 Что имеется:</p>
                            <div class="filial_box_subbox_subboxx_options">
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon1.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">Тренажёры</p>
                                </div>
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon2.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">СПА</p>
                                </div>
                                <div class="filial_box_subbox_subboxx_options_subbox">
                                    <img src="img/icon3.svg" alt="" class="filial_box_subbox_subboxx_options_subbox_img">
                                    <p class="filial_box_subbox_subboxx_options_subbox_text">Бассейн</p>
                                </div>
                            </div>
                            <p class="filial_box_subbox_subboxx_text next_subbox">Ближайшие станции метро:</p>
                            <div class="filial_box_subbox_subboxx_metro">
                                <div class="filial_box_subbox_subboxx_metro_subbox">
                                    <img src="img/geo.svg" alt="" class="filial_box_subbox_subboxx_metro_subbox_img">
                                    <p class="filial_box_subbox_subboxx_metro_subbox_text">Селигерская</p>
                                </div>
                                <div class="filial_box_subbox_subboxx_metro_subbox">
                                    <img src="img/geo.svg" alt="" class="filial_box_subbox_subboxx_metro_subbox_img">
                                    <p class="filial_box_subbox_subboxx_metro_subbox_text">Яхромская</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="img/right.svg" alt="кнопка направо" class="filial_box_btn rightbtn">
                </div>
            </div>
        </div>
    </section>
    <section id="why">
        <div class="container">
            <div class="why">
                <h2 class="why_title">Почему мы?</h2>
                <div class="why_box">
                    <div class="why_box_subbox">
                        <img src="img/icon1.png" alt="" class="why_box_subbox_img">
                        <p class="why_box_subbox_text">Разнообразные тренировки: В FitWave ты найдешь разнообразные групповые занятия, индивидуальные тренировки, а также возможность заниматься самостоятельно на современном оборудовании.</p>
                    </div>
                    <hr>
                    <div class="why_box_subbox">
                        <img src="img/icon2.png"  alt="" class="why_box_subbox_img">
                        <p class="why_box_subbox_text">Комфорт и удобство: Наши современные залы оборудованы всем необходимым для комфортного занятия спортом.</p>
                    </div>
                    <hr>
                    <div class="why_box_subbox">
                        <img src="img/icon3.png" alt="" class="why_box_subbox_img">
                        <p class="why_box_subbox_text">Опытные инструкторы и персональный подход: Наши инструкторы - профессионалы своего дела, которые помогут тебе правильно выполнить упражнения, подберут оптимальную программу тренировок и дадут советы по питанию. Мы ценим каждого клиента и стремимся к индивидуальному подходу, чтобы помочь тебе достичь желаемых результатов.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="map">
        <div class="container">
            <div class="map">
                <h2 class="map_title">Карта</h2>
                <iframe  class="map_geo" src="https://yandex.ru/map-widget/v1/?um=constructor%3A0ed3f2a55235bbe4f15aef02b86b0f52001ef2c0db9b06c222d42f2f725126ee&amp; source=constructor" frameborder="0"></iframe>
            </div>
        </div>
    </section>
    <section id="rate">
        <div class="container">
            <div class="rate">
                <h2 class="rate_title">Тарифы</h2>
                <div class="rate_box">
                    <div class="rate_box_subbox">
                        <h3 class="rate_box_subbox_title">Стандарт</h3>
                        <p class="rate_box_subbox_text">8 месяцев</p>
                        <div class="rate_box_subbox_iconbox">
                            <img src="img/yes.svg" alt="" class="rate_box_subbox_iconbox_icon">
                            <p class="rate_box_subbox_iconbox_text">Заморозка на 10 дней</p>
                        </div>
                        <div class="rate_box_subbox_iconbox">
                            <img src="img/yes.svg" alt="" class="rate_box_subbox_iconbox_icon">
                            <p class="rate_box_subbox_iconbox_text">Пакет тренировок</p>
                        </div>
                        <div class="rate_box_subbox_iconbox">
                            <img src="img/yes.svg" alt="" class="rate_box_subbox_iconbox_icon">
                            <p class="rate_box_subbox_iconbox_text">Анализ состава тела InBody</p>
                        </div>
                        <button id="open-popup-btn" class="rate_box_subbox_btn">Оформить карту</button>
                    </div>
                    <div class="rate_box_subbox stud_sale">
                        <h3 class="rate_box_subbox_title">Студенческий</h3>
                        <p class="rate_box_subbox_text">8 месяцев</p>
                        <div class="rate_box_subbox_iconbox">
                            <img src="img/yes.svg" alt="" class="rate_box_subbox_iconbox_icon">
                            <p class="rate_box_subbox_iconbox_text">Заморозка на 10 дней</p>
                        </div>
                        <div class="rate_box_subbox_iconbox">
                            <img src="img/yes.svg" alt="" class="rate_box_subbox_iconbox_icon">
                            <p class="rate_box_subbox_iconbox_text">Пакет тренировок</p>
                        </div>
                        <div class="rate_box_subbox_iconbox">
                            <img src="img/yes.svg" alt="" class="rate_box_subbox_iconbox_icon">
                            <p class="rate_box_subbox_iconbox_text">Анализ состава тела InBody</p>
                        </div>
                        <button id="open-popup-btn2" class="rate_box_subbox_btn">Оформить карту</button>
                    </div>
                    <div class="rate_box_subbox">
                        <h3 class="rate_box_subbox_title">VIP</h3>
                        <p class="rate_box_subbox_text">11 месяцев</p>
                        <div class="rate_box_subbox_iconbox">
                            <img src="img/yes.svg" alt="" class="rate_box_subbox_iconbox_icon">
                            <p class="rate_box_subbox_iconbox_text">Заморозка на 30 дней</p>
                        </div>
                        <div class="rate_box_subbox_iconbox">
                            <img src="img/yes.svg" alt="" class="rate_box_subbox_iconbox_icon">
                            <p class="rate_box_subbox_iconbox_text">Пакет тренировок</p>
                        </div>
                        <div class="rate_box_subbox_iconbox">
                            <img src="img/yes.svg" alt="" class="rate_box_subbox_iconbox_icon">
                            <p class="rate_box_subbox_iconbox_text">Анализ состава тела InBody</p>
                        </div>
                        <button id="open-popup-btn3" class="rate_box_subbox_btn">Оформить карту</button>
                    </div>
                </div>
                <h3 class="rate_subtitle">Если желаете получать рассылку о новостях компании, внесите данные вашей почты:</h3>
                <form action="#" class="rate_input">
                    <input class="rate_input_text" type="text" name="email" placeholder="Emile...">
                    <button id="open-popup-btn5" class="rate_input_btn"><img class="rate_input_btnn" src="img/post.svg" alt=""></button>
                </form>
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
    <div class="popup" id="popup-card">
        <div class="popup_box">
            <p class="popup_box_text">В данный момент это действие не возможно...</p>
            <a id="close-popup-btn" class="popup_box_btn"><img src="img/close.svg" alt=""></a>
        </div>
    </div>
    <div class="popup" id="popup-email">
        <div class="popup_box">
            <p class="popup_box_text">Письмо отправлено, проверьте почту для подтверждения.</p>
            <a id="close-popup-btn1" class="popup_box_btn"><img src="img/close.svg" alt=""></a>
        </div>
    </div>
    <script src="./main.js"></script>
</body>
</html>