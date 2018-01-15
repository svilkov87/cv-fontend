<?php
include("include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>frontend-developer VSN</title>
    <meta name="description" content="cv" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="app/img/favicon_fd.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="app/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="app/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/css/animate.css">
    <script src="app/libs/jquery/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="app/css/main-a5eb0076c6.css">
    <!--[if lt IE 9]-->
    <script src="app/libs/html5shiv/es5-shim.min.js"></script>
    <script src="app/libs/html5shiv/html5shiv.min.js"></script>
    <script src="app/libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="app/libs/respond/respond.min.js"></script>
    <!--[endif]-->
    <script src="app/libs/scrollto/jquery.scrollTo.min.js"></script>
    <script src="app/libs/main.js"></script>
    <script type="text/javascript" src="app/libs/wow.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    <script src="app/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                mode: 'horizontal',
                captions: true,
                easing: 'easeInOutQuad',
                controls: false,
                startSlide: 0,
                infiniteLoop: true,
                auto: true,
                responsive: true,
                pager: false,
                pause: 4500,
                speed: 500,
                useCSS: true
            });
        });
    </script>
    <link href="app/libs/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
</head>
<body>
<div class="main">
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div id="object"></div>
            </div>
        </div>
    </div>
    <i class="fa fa-chevron-up" aria-hidden="true" id="top"></i>
    <i class="fa fa-bars" id="menu_toggle" aria-hidden="true"></i>
    <div class="side_menu">
        <div class="side_top">
            <i class="fa fa-chevron-left" id="show_side" aria-hidden="true"></i>
        </div>
        <div class="head_items">
            <img src="../app/img/me.jpg" alt="alt" class="image_profile">
            <div class="block_name_proff">
                <p class="name">Вилков Сергей</p>
                <p class="proff">Верстальщик/Фронтенд-разработчик</p>
            </div>
        </div>
        <div class="side_list">
            <ul class="ul_side">
                <li class="li_side">
                    <a href="#head" class="active">Главная</a>
                </li>
                <li class="li_side">
                    <a href="#about_me">Обо мне</a>
                </li>
                <li class="li_side">
                    <a href="#ui">UI-elements</a>
                </li>
                <li class="li_side">
                    <a href="#my_works">Примеры работ</a>
                </li>
                <li class="li_side write_me">
                    <a href="#contacts">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
    <section class="cv_sections" id="head">
        <div class="col-md-12">
            <div class="row">
                <div class="head_block">
                    <div class="head_header">
                        <h4 class="wow fadeIn" data-wow-delay=".3s">Вилков Сергей</h4>
                        <p class="p wow fadeIn" data-wow-delay=".5s">резюме на позицию html-верстальщик /
                            frontend-разработчик</p>
                        <div class="button_go wow fadeIn" data-wow-delay=".7s">
                            <p class="go_about">узнать больше</p>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cv_sections" id="about_me">
        <div class="col-md-12">
            <div class="row">
                <div class="about_title">
                    <h2>Обо мне</h2>
                </div>
                <div class="content_section">
                    <div class="story">
                        Меня зовут <span class="story_name">Вилков Сергей.</span> Я являюсь кандидатом на позицию
                        html-верстальщик/frontend-разработчик.
                        На сегодняшний день мой профессиональный опыт в данной сфере составляет 2 года.
                        Разрешите предложить Вам свою кандидатуру и позвольте презентовать себя настоящим резюме.
                    </div>
                    <div class="items_profile">
                        <div class="col-md-6">
                            <ul class="ul_info wow fadeInLeft" data-wow-delay=".8s">
                                <li class="li_info"><span>Возраст:</span> 30лет</li>
                                <li class="li_info"><span>Локация:</span> Нижний Новгород</li>
                                <li class="li_info"><span>Электронный адрес:</span> svilkov87@mail.ru</li>
                                <li class="li_info"><span>Контактный телефон:</span> +7 953 551 2834</li>
                                <li class="li_info"><span>github:</span> <a href="https://github.com/svilkov87">github.com/svilkov87</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="main_wr wow fadeIn" data-wow-delay=".8s">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="skills_wrapp">
                                        <div class="sk_top">
                                            <span>В ближайшей перспективе - Pug</span>
                                        </div>
                                        <div class="sk_bottom">
                                            <span>HTML5</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_wr wow fadeIn" data-wow-delay="1s">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="skills_wrapp">
                                        <div class="sk_top">
                                            <span>Использую препроцессор SCSS</span>
                                        </div>
                                        <div class="sk_bottom">
                                            <span>CSS3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_wr wow fadeIn" data-wow-delay="1.1s">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="skills_wrapp">
                                        <div class="sk_top">
                                            <span>Изучение нативного JS +(Angular,React)</span>
                                        </div>
                                        <div class="sk_bottom">
                                            <span>JS(JQUERY/AJAX)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_wr wow fadeIn" data-wow-delay="1.3s">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="skills_wrapp">
                                        <div class="sk_top">
                                            <span>Процедурный стиль</span>
                                        </div>
                                        <div class="sk_bottom">
                                            <span>PHP</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_wr wow fadeIn" data-wow-delay="1.5s">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="skills_wrapp">
                                        <div class="sk_top">
                                            <span>Сборка проекта</span>
                                        </div>
                                        <div class="sk_bottom">
                                            <span>GULP</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_wr wow fadeIn" data-wow-delay="1.7s">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="skills_wrapp">
                                        <div class="sk_top">
                                            <span><a href="https://github.com/svilkov87">Мой аккаунт</a></span>
                                        </div>
                                        <div class="sk_bottom">
                                            <span>GIT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cv_sections" id="ui">
        <div class="about_ul">
            <h2>UI</h2>
            <div class="ui_desc">В данном разделе представлены элементы интерфейса, а так же эффекты, которые я могу использовать в работе. Условно:</div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="op">
                        <img src="../app/img/Cute-Girlnbspfond-ecran-hd3.jpg"/>
                        <div class="top">
                            <p class="he">item</p>
                        </div>
                        <div class="fade"></div>
                        <div class="bottom">
                            <p class="bott">description</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="ot">
                        <img src="../app/img/Cute-Girlnbspfond-ecran-hd3.jpg"/>
                        <div class="top">
                            <p class="he">item</p>
                        </div>
                        <div class="fade"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="three">
                        <img src="app/img/Cute-Girlnbspfond-ecran-hd3.jpg"/>
                        <div class="top">
                        </div>
                        <div class="fade">
                            test
                        </div>
                        <div class="bottom">
                            <p class="bott">description</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="four">
                        <div class="nav_wrapp">
                            <span class="menu_touch">menu</span>
                        </div>
                        <div class="menu_down">
                            <ul class="ul_four">
                                <li class="li li_four">one</li>
                                <li class="li li_four">two</li>
                                <li class="li li_four">three</li>
                                <li class="li li_four">four</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="five">
                        <div class="nav_wrapp">
                            <span class="menu_touch_five">menu</span>
                        </div>
                        <div class="menu_down_five">
                            <ul class="ul_four">
                                <li class="li_five"><div class="li_wrapp">one</div></li>
                                <li class="li_five"><div class="li_wrapp">two</div></li>
                                <li class="li_five"><div class="li_wrapp">three</div></li>
                                <li class="li_five"><div class="li_wrapp">four</div></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="six">
                        <div class="nav_wrapp">
                            <span class="menu_touch_six">menu</span>
                        </div>
                        <div class="menu_down_six">
                            <ul class="ul_six">
                                <li class="li_six">
                                    <div class="li_wrapp">one</div>
                                    <span>100$</span>
                                </li>
                                <li class="li_six">
                                    <div class="li_wrapp">two</div>
                                    <span>100$</span>
                                </li>
                                <li class="li_six">
                                    <div class="li_wrapp">three</div>
                                    <span>100$</span>
                                </li>
                                <li class="li_six">
                                    <div class="li_wrapp">four</div>
                                    <span>100$</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="buttons">Buttons</div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-6 col-sm-4">
                        <div class="button_sev">button</div>
                    </div>
                    <div class="col-md-6 col-sm-4">
                        <div class="button_ei">button
                            <div class="el_hide"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="circle_buttons">
                            <div class="col-md-3">
                                <div class="cir_one"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="cir_two"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="cir_three">
                                    <div class="cir_th_border"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="cir_four">
                                    <div class="cir_four_border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hireme">
        <div class="my_tragets">Мои цели на ближайшую перспективу</div>
        <ul class="bxslider">
            <li>Изучение и практика <span class="yellow">нативного JS</span></li>
            <li><span class="yellow">Unit-тестирование</span> кода</li>
            <li>Использование в работе JS-фреймфорков <span class="yellow">Angular</span> и <span class="yellow">Coffee Script</span></li>
            <li>Изучение программы <span class="yellow">Sketch</span></li>
            <li>Углубленная практика <span class="yellow">адаптивной верски</span></li>
            <li>Изучение формата <span class="yellow">SVG</span></li>
        </ul>
    </section>
    <section class="cv_sections" id="my_works">
        <div class="col-md-12">
            <div class="row">
                <div class="my_w_header">
                    <h2>Мои работы</h2>
                </div>
                <div class="example_wrapp">
                    <div class="col-md-4 col-sm-4">
                        <div class="main_ex">
                            <a href="https://grandpovar.ru" target="_blank">
                                <img src="app/img/gp.jpg" alt="photo">
                            </a>
                            <div class="top">
                                <p class="header">Grandpovar</p>
                                <span class="desc">Энциклопедия рецептов</span>
                            </div>
                            <div class="second_blcok">
                                <a href="https://github.com/svilkov87/povar" class="git">github</a>
                                <div class="header"></div>
                                <ul class="tech">
                                    <li class="li_tech">html5, bootstrap (grid only)</li>
                                    <li class="li_tech">css3</li>
                                    <li class="li_tech">JS (Jquery)</li>
                                    <li class="li_tech">php, mysql (pdo)</li>
                                </ul>
                            </div>
                            <div class="sb_more">
                                <div class="item_span"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="main_ex">
                            <a href="http://ketra-lp.svtest.ru/">
                                <img src="app/img/ketra.jpg" alt="photo">
                            </a>
                            <div class="top">
                                <p class="header">Ketra LP</p>
                                <span class="desc">Landing Page</span>
                            </div>
                            <div class="second_blcok">
                                <a href="https://github.com/svilkov87/ketra" class="git">github</a>
                                <div class="header"></div>
                                <ul class="tech">
                                    <li class="li_tech">html5, bootstrap (grid only)</li>
                                    <li class="li_tech">css3, sass ( scss )</li>
                                    <li class="li_tech">JS (Jquery)</li>
                                    <li class="li_tech">php, mysql (pdo)</li>
                                    <li class="li_tech">gulp</li>
                                </ul>
                            </div>
                            <div class="sb_more">
                                <div class="item_span"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="main_ex">
                            <a href="http://rbrick-nn.svtest.ru/">
                                <img src="app/img/rbr.jpg" alt="photo">
                            </a>
                            <div class="top">
                                <p class="header">Русский Кирпич</p>
                                <span class="desc">Оптово-розничная продажа строительних материалов</span>
                            </div>
                            <div class="second_blcok">
                                <a href="https://github.com/svilkov87/rbrick" class="git">github</a>
                                <div class="header"></div>
                                <ul class="tech">
                                    <li class="li_tech">html5, bootstrap (grid only)</li>
                                    <li class="li_tech">css3, sass ( scss )</li>
                                    <li class="li_tech">JS (Jquery)</li>
                                    <li class="li_tech">php, mysql (pdo)</li>
                                    <li class="li_tech">gulp</li>
                                </ul>
                            </div>
                            <div class="sb_more">
                                <div class="item_span"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cv_sections" id="contacts">
        <div class="title_section">
            <h2>Связаться со мной</h2>
        </div>
        <div class="content_section">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="contact_wrapp">
                        <div class="err_block">
                            Не все поля заполнены
                        </div>
                        <div class="modal_confirm">
                            Спасибо!
                        </div>
                        <div class="modal_forms">
                            <form action="" method="post" id="my_form">
                                <div class="form_line">
                                    <input type="text" name="name" class="form_style" id="name" placeholder="Укажите Ваше имя или компанию">
                                </div>
                                <div class="form_line">
                                    <input type="text" name="s_name" class="form_style" id="s_name" placeholder="Адрес электронной почты или телефон(можно иное)">
                                </div>
                                <div class="form_line">
                                    <textarea name="theme" class="form_style" id="modal_field" cols="30" rows="10" placeholder="Сообщение"></textarea>
                                </div>
                                <button type="submit" name="enter" class="btn_modal">Написать мне</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
