<?php
include("include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


$time = time() - 20;


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
    <link rel="stylesheet" href="app/css/libs.min.css?<?php echo $time;?>">
    <!--[if lt IE 9]-->
    <script src="app/libs/html5shiv/es5-shim.min.js"></script>
    <script src="app/libs/html5shiv/html5shiv.min.js"></script>
    <script src="app/libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="app/libs/respond/respond.min.js"></script>
    <!--[endif]-->
    <script src="app/libs/scrollto/jquery.scrollTo.min.js"></script>
    <script src="app/libs/main.js?<?php echo $time;?>"></script>
    <script type="text/javascript" src="app/libs/wow.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    <script src="app/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.bx_slider').bxSlider({
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
            <img src="app/img/me.jpg" alt="alt" class="image_profile">
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
                <div class="content_middle">
                    <div class="head_header">
                        <h4 class="wow fadeIn" data-wow-delay=".3s">Вилков Сергей</h4>
                        <p class="p wow fadeIn" data-wow-delay=".5s">резюме на позицию html-верстальщик /
                            frontend-разработчик</p>
                        <div class="button_go">
                            <p class="go_about">узнать больше</p>
                        </div>
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
                    <div class="about-me__header">Обо мне</div>
                </div>
                <div class="content_section">
                    <div class="content_middle">
                        <div class="story">
                            Меня зовут <span class="story_name">Вилков Сергей.</span> Я являюсь кандидатом на позицию
                            html-верстальщик/frontend-разработчик.
                            На сегодняшний день мой профессиональный опыт в данной сфере составляет 2 года.
                            Разрешите предложить Вам свою кандидатуру и позвольте презентовать себя настоящим резюме.
                        </div>
                    </div>
                    <div class="content_middle">
                        <div class="items_profile">
                            <div class="col-md-6 col-sm-6">
                                <div class="row">
                                    <ul class="ul_info wow fadeInLeft" data-wow-delay=".8s">
                                        <li class="li_info"><span>Возраст:</span> 30лет</li>
                                        <li class="li_info"><span>Локация:</span> Нижний Новгород</li>
                                        <li class="li_info"><span>Электронный адрес:</span> svilkov87@mail.ru</li>
                                        <li class="li_info"><span>Контактный телефон:</span> +7 953 551 2834</li>
                                        <li class="li_info"><span>github:</span> <a href="https://github.com/svilkov87">github.com/svilkov87</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="main_wr_rel">
                                        <div class="main_wr wow fadeIn" data-wow-delay=".8s">
                                            <div class="l"></div>
                                            <div class="r"></div>
                                            <div class="skills_wrapp">
                                                <div class="sk_top">
                                                    <span>Шаблонизатор Template Toolkit</span>
                                                </div>
                                                <div class="sk_bottom">
                                                    <span>HTML5</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main_wr_rel">
                                        <div class="main_wr wow fadeIn" data-wow-delay="1s">
                                            <div class="l"></div>
                                            <div class="r"></div>
                                            <div class="skills_wrapp">
                                                <div class="sk_top">
                                                    <span>Использую препроцессор SCSS/LESS</span>
                                                </div>
                                                <div class="sk_bottom">
                                                    <span>CSS3</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main_wr_rel">
                                        <div class="main_wr wow fadeIn" data-wow-delay="1.1s">
                                            <div class="l"></div>
                                            <div class="r"></div>
                                            <div class="skills_wrapp">
                                                <div class="sk_top">
                                                    <span>Изучение нативного JS +(Vue,React)</span>
                                                </div>
                                                <div class="sk_bottom">
                                                    <span>JS(JQUERY/AJAX)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main_wr_rel">
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
                                    </div>
                                    <div class="main_wr_rel">
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
                                    </div>
                                    <div class="main_wr_rel">
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
                                    <div class="main_wr_rel">
                                        <div class="main_wr wow fadeIn" data-wow-delay="1.9s">
                                            <div class="l"></div>
                                            <div class="r"></div>
                                            <div class="skills_wrapp">
                                                <div class="sk_top">
                                                    <span>Windows, Linux. Терминал, devtools</span>
                                                </div>
                                                <div class="sk_bottom">
                                                    <span>TOOLS</span>
                                                </div>
                                            </div>
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
        <div class="about_ui">
            <div class="ui__header">UI</div>
        </div>
        <div class="content_middle">
            <div class="ui_desc">В данном разделе представлены элементы интерфейса, а так же эффекты, которые я могу использовать в работе. Условно:</div>
        </div>
        <div class="ui__examples">
            <div class="col-md-12">
                <div class="row">
                    <div class="content_middle">
                        <div class="ui-opacity">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="ui-frames ui-grid-effect">
                                    <img src="app/img/Cute-Girlnbspfond-ecran-hd3.jpg" alt="" class="ui_grid_img">
                                    <div class="ui-grid-bg">
                                        <div class="ui_grid_header"><h3>Heading here</h3></div>
                                        <p class="ui_grid_description">Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="ui-frames ui-bottom-effiect">
                                    <div class="ui-bottom-left__bg">
                                        <div class="ui-bottom-left__title"><h3>Heading here</h3></div>
                                        <div class="ui-bottom-left__description"><p>Decription</p></div>
                                    </div>
                                    <img src="app/img/Cute-Girlnbspfond-ecran-hd3.jpg" alt="" class="ui_bottom_img">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="ui-frames ui-quadro-center">
                                    <img src="app/img/Cute-Girlnbspfond-ecran-hd3.jpg" alt="" class="ui_quadro_img">
                                    <div class="ui-quadro-center__center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content_middle">
                        <div class="ui-menu">
                           <div class="col-md-4 col-sm-4">
                               <div class="ui-menu__wrapper four">
                                   <div class="ui-menu__annotation">
                                       <span class="ui-menu__annotation-text">Многоуровневое выпадающее меню с hover-эффектом</span>
                                   </div>
                                   <div class="ui-menu__header">
                                       <div class="ui-menu__action">
                                           <span class="ui-menu__action-span"></span>
                                       </div>
                                       <div class="ui-menu__toggle ui-menu__toggle_four"></div>
                                   </div>
                                   <div class="ui-menu__drop_four">
                                       <ul class="ui-menu__ul">
                                           <li class="ui-menu__li"><span>one</span></li>
                                           <li class="ui-menu__li"><span>two</span></li>
                                           <li class="ui-menu__li icon"><span>three</span>
                                               <ul class="ui-menu__ul-child">
                                                   <li class="ui-menu__li-child"><span class="ui-menu__li-child_span">child 1</span></li>
                                                   <li class="ui-menu__li-child"><span class="ui-menu__li-child_span">child 2</span></li>
                                                   <li class="ui-menu__li-child"><span class="ui-menu__li-child_span">child 3</span></li>
                                               </ul>
                                           </li>
                                           <li class="ui-menu__li"><span>four</span></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4 col-sm-4">
                               <div class="ui-menu__wrapper five">
                                   <div class="ui-menu__annotation">
                                       <span class="ui-menu__annotation-text">Выпадающее меню с hover-эффектом и возможностью выбирать пункты</span>
                                   </div>
                                   <div class="ui-menu__header">
                                       <div class="ui-menu__action">
                                           <span class="ui-menu__action-span"></span>
                                       </div>
                                       <div class="ui-menu__toggle ui-menu__toggle_five"></div>
                                   </div>
                                   <div class="ui-menu__drop_five">
                                       <ul class="ui-menu__ul">
                                           <li class="ui-menu__li" data-delay="2" data-side="left">one</li>
                                           <li class="ui-menu__li" data-delay="3" data-side="right">two</li>
                                           <li class="ui-menu__li" data-delay="4" data-side="left">three</li>
                                           <li class="ui-menu__li" data-delay="5" data-side="right">four</li>
                                           <li class="ui-menu__li" data-delay="6" data-side="right">five</li>
                                           <li class="ui-menu__li" data-delay="7" data-side="right">six</li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4 col-sm-4">
                               <div class="ui-menu__wrapper six">
                                   <div class="ui-menu__annotation">
                                       <span class="ui-menu__annotation-text">Выпадающее меню с hover-эффектом и возможностью выбирать пункты. Используется счетчик событий.</span>
                                   </div>
                                   <div class="ui-menu__header">
                                       <div class="ui-menu__action">
                                           <span class="ui-menu__action-span"></span>
                                       </div>
                                       <div class="ui-menu__toggle ui-menu__toggle_six"></div>
                                   </div>
                                   <div class="ui-menu__drop_six">
                                       <div class="ui-menu__result-table">
                                           <p class="ui-menu__result-header"></p>
                                           <p class="ui-menu__result-description"></p>
                                           <p class="ui-menu__result-description-fixed"></p>
                                           <div class="ui-menu__stat">
                                               <p class="ui-menu__count-chosen"></p>
                                               <p class="ui-menu__count-actions"></p>
                                           </div>
                                       </div>
                                       <ul class="ui-menu__ul">
                                           <li class="ui-menu__li" data-delay="2" data-side="left">
                                               <span class="ui-menu__li-span">one</span>
                                               <input type="text" class="ui-menu__li-input">
                                           </li>
                                           <li class="ui-menu__li" data-delay="3" data-side="right">
                                               <span class="ui-menu__li-span">two</span>
                                               <input type="text" class="ui-menu__li-input">
                                           </li>
                                           <li class="ui-menu__li" data-delay="6" data-side="left">
                                               <span class="ui-menu__li-span">three</span>
                                               <input type="text" class="ui-menu__li-input">
                                           </li>
                                           <li class="ui-menu__li" data-delay="7" data-side="right">
                                               <span class="ui-menu__li-span">four</span>
                                               <input type="text" class="ui-menu__li-input">
                                           </li>
                                           <li class="ui-menu__li" data-delay="1" data-side="right">
                                               <span class="ui-menu__li-span">five</span>
                                               <input type="text" class="ui-menu__li-input">
                                           </li>
                                           <li class="ui-menu__li" data-delay="4" data-side="right">
                                               <span class="ui-menu__li-span">six</span>
                                               <input type="text" class="ui-menu__li-input">
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="content_middle">
                        <div class="ui-buttons">
                            <div class="ui-buttons__header">Buttons</div>
                            <div class="ui-buttons__quadro">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="col-md-6">
                                        <div class="button-sev">
                                            <div class="button-sev__top">button</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="button_ei">button</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ui-circle-buttons">
                                <div class="col-md-3 col-sm-6">
                                    <div class="cir cir_one"></div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="cir cir_two"></div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="cir cir_three">
                                        <div class="cir_th_border"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="cir cir_four">
                                        <div class="cir_four_border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cv_sections hireme">
        <div class="my_tragets">Мои цели на ближайшую перспективу</div>
        <ul class="bx_slider">
            <li>Изучение и практика <span class="yellow">нативного JS</span></li>
            <li><span class="yellow">Unit-тестирование</span> кода</li>
            <li>Использование в работе JS-фреймфорков <span class="yellow">Vue</span> и/или <span class="yellow">React</span></li>
        </ul>
    </section>
    <section class="cv_sections" id="my_works">
        <div class="col-md-12">
            <div class="row">
                <div class="my_w_header">
                    <h2>Мои работы</h2>
                </div>
                <div class="content_middle">
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
<div class="ui-photocard">
    <div class="ui-photocard__header">Photocard</div>
</div>
</body>
</html>
