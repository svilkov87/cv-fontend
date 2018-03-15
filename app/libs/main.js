$(document).ready( function() {

    //loader
    $(window).load( function() {
       $("#object").fadeOut();
       $("#loading").delay(100).fadeOut("slow");
   } );

    // серый фон при скролле
    $(window).scroll( function () {

        var st = $( this ).scrollTop();

        $("#head")
        .css({
            "filter": "grayscale(" + st / 50 + ")"
                  // "bottom" : "translate3d(0px, " + st/ 100  + "%, .01px)"
                  // "-webkit-transform" : "translate3d(0px, " + st/ 100  + "%, .01px)"
              } );
    } );

    //протфолио показать подробности
    $('.sb_more').click( function() {
        $( this )
        .toggleClass('burger');
        $( this )
        .prev(".second_blcok")
        .toggleClass('active');
    });

    //скролл side главная страница
    $(window).scroll(function () {
        var $sections = $('.cv_sections');
        $sections.each(function (i, el) {
            var top = $(el).offset().top - 100;
            var bottom = top + $(el).height();
            var scroll = $(window).scrollTop();
            var id = $(el).attr('id');
            if (scroll > top && scroll < bottom) {
                $('a.active').removeClass('active');
                $('a[href="#' + id + '"]').addClass('active');

            }
        })
    });

    var sScroll = $(".ul_side");
    $(this).on("click", "a", function (event) {
        // исключаем стандартную реакцию браузера
        event.preventDefault();

        // получем идентификатор блока из атрибута href
        var id = $(this).attr('href'),

        // находим высоту, на которой расположен блок
        top = $(id).offset().top;

        // анимируем переход к блоку, время: 800 мс
        $('body,html').animate({scrollTop: top}, 800);
    });

    //написать мне
    $(".write_me").click(function () {
        $(".main").addClass('back');
    });

    //меню четвертого примера
    $(".menu_touch").click(function () {
        $(".menu_down").slideToggle(150);
    });

    //меню пятого примера
    $(".menu_touch_five").click(function () {
        $('.menu_down_five').toggleClass('up');
    });

    //меню шестого примера
    $(".menu_touch_six").click(function () {
        $('.menu_down_six').toggleClass('up');
    });


    // форма отправки заказа
    $('.btn_modal').click(function(e){
        e.preventDefault();
        var name = $('#name').val(),
        s_name = $('#s_name').val(),
        field = $('#modal_field').val();

        if( name == "" || s_name == "" || field == ""){
            $('.err_block').css("display" , "block");
        }
        else {
            $('.err_block').css("display" , "none");
            $.ajax({
                url: "../../ajax/upload.php",
                type: "POST",
                data: $('#my_form').serialize(),
                dataType: "html"
            }).done(function(){
                // $('#myModlal').css("display" , "none");
                $('.modal_forms').css("display" , "none");
                $('.modal_confirm').css("display" , "block");
                // alert('data');
            });
        }
        $('#name, #s_name, #modal_field').focus(function(){
            $('.err_block').css("display" , "none");
        });
    });

    //Плавный скролл до блока .div по клику на .scroll
    //Документация: https://github.com/flesler/jquery.scrollTo
    $('.button_go').on('click', function() {

        var $aboutMePosition = $('#about_me')
        .offset()
        .top;

        $('body,html')
        .animate({
            scrollTop: $aboutMePosition
        }, 300);

    });

    // показать кнопку наверх
    $(window).scroll(function() {
        if ($(this).scrollTop() > 250){
          $('#top').fadeIn(100);
      }
      else{
          $('#top').fadeOut(100);
      }
  });

    //Кнопка "Наверх"
    //Документация:
    //http://api.jquery.com/scrolltop/
    //http://api.jquery.com/animate/
    $("#top").click(function () {
        $("body, html").animate({
          scrollTop: 0
      }, 800);
        return false;
    });

    //показать менб слева
    $("#menu_toggle").click(function() {
        $(this).toggleClass('mleft');
        $('.side_menu').toggleClass('sleft');
        $('.main').toggleClass('on');
    });


    //ui
    //menu toggle
    //
    //

    $('.ui-menu__action').hover(
        function () {

            var $parent     = $( this ).parents('.ui-menu__wrapper'),
            $annotation = $parent.find('.ui-menu__annotation').addClass('show');
        },
        function () {

            var $parent     = $(this).parents('.ui-menu__wrapper'),
            $annotation = $parent.find('.ui-menu__annotation').removeClass('show');
        }
        );

    //four

    $('.ui-menu__toggle_four').on( 'click', function() {
        $( this ).toggleClass('active_toggle');
        $( '.ui-menu__drop_four' ).toggleClass('drop_four_active');
    } );

    $('.ui-menu__li').hover(
        function () {
            $(this).children('.ui-menu__ul-child').fadeIn(150);
        },
        function () {
            $(this).children('.ui-menu__ul-child').fadeOut(150);
        }
        );

    //five

    $('.ui-menu__toggle_five').on( 'click', function() {
        $( this ).toggleClass('active_toggle');
        $( '.ui-menu__drop_five' ).toggleClass('drop_five_active');

        var $liFiveItems = $('.ui-menu__drop_five')
        .find('.ui-menu__li');

        $liFiveItems.each(function () {

            var sideData  = $( this ).data('side'),
            listItems = $( this ),
            liWrapp   = $( this ).find('.ui-menu__li-wrapp'),
            delayData = $( this ).data('delay');

            // console.log( delayData );

            setTimeout(function () {
                listItems.toggleClass('ui-menu__li-active');
                liWrapp.toggleClass(sideData);
            }, delayData + '00' );

        } );

    } );

    var $FiveItems = $('.ui-menu__drop_five').find('.ui-menu__li');

    $FiveItems.hover(
        function () {

            $(this).prev().addClass('previous');
            $(this).next().addClass('next');
            $FiveItems.not($(this)).addClass('wave');
        },
        function () {

            // var $this = $(this);
            // setTimeout( function(){
            //     $this.next().removeClass('next');
            //     $this.prev().removeClass('previous');
            //     // $FiveItems.not($(this)).removeClass('wave');
            // }, 100);

            $(this).next().removeClass('next');
            $(this).prev().removeClass('previous');
            $FiveItems.not($(this)).removeClass('wave');
        }
        );

    $FiveItems.on( 'click', function(){
        $( this ).toggleClass('fixed');
    } );

    // six

    var count = 0;
        resultDisplayArray = [];
        countOfChosenItems = [];
        countOfActions     = [];

    function pushToResultTable(par, fixed) {

        count++;

        $('.ui-menu__result-table').show();

        for ( var i = 0; i < resultDisplayArray.length; i++) {

            $('.ui-menu__result-description').text(resultDisplayArray[i]);

        }

        for ( var i = 0; i < countOfChosenItems.length; i++) {

            $('.ui-menu__stat > .ui-menu__count-chosen').html('Выбрано элементов: ' + '<span class="count_choosen">' + (i + 1) + '</span>');

        }

        if (countOfChosenItems.length == 0) {
            $('.ui-menu__stat > .ui-menu__count-chosen').html('Выбрано элементов: 0');
        }


        if (countOfActions.length == 0) {
            $('.ui-menu__stat > .ui-menu__count-actions').html('Всего действий: 0');
        } else {
            $('.ui-menu__stat > .ui-menu__count-actions').html('Всего действий: ' + '<strong>' + count + '</strong>');
        }


        resultDisplayArray = [];

    console.log(countOfActions);

    }

    $('.ui-menu__toggle_six').on( 'click', function() {

        $( this ).toggleClass('active_toggle');
        $( '.ui-menu__drop_six' ).toggleClass('drop_six_active');

        var $liSixItems = $('.ui-menu__drop_six')
            .find('.ui-menu__li');

        $liSixItems.each(function () {

            var sideData  = $( this ).data('side'),
            listItems = $( this ),
            liWrapp   = $( this ).find('.ui-menu__li-wrapp'),
            delayData = $( this ).data('delay');

            // console.log( delayData );

            setTimeout(function () {
                listItems.toggleClass('ui-menu__li-active');
                liWrapp.toggleClass(sideData);
            }, delayData + '00' );

        } );

    } );

    var $sixItems = $('.ui-menu__drop_six').find('.ui-menu__li');

    $sixItems.hover(
        function () {
            $('.ui-menu__stat').addClass('open_stat');
            $itemNumber = 'Пункт ' + $( this ).children('.ui-menu__li-span').html();

            resultDisplayArray.push($itemNumber);
            pushToResultTable();
            countOfActions.push('');

            $(this).prev().addClass('previous');
            $(this).next().addClass('next');
            $sixItems.not($(this)).addClass('wave');
        },
        function () {

            $(this).next().removeClass('next');
            $(this).prev().removeClass('previous');
            $sixItems.not($(this)).removeClass('wave');
        }
        );

    $sixItems.on( 'click', function(){

        $( this ).toggleClass('fixed');
        $('.ui-menu__stat').addClass('open_stat');

        $chosenItem  = 'Пункт ' + $( this ).children('.ui-menu__li-span').html() + ' активен';
        $detetedItem = 'Снят пункт ' + $( this ).children('.ui-menu__li-span').html();

        if( $( this ).hasClass('fixed') ) {

            resultDisplayArray.push($chosenItem);
            countOfChosenItems.push($chosenItem);
            pushToResultTable('', $chosenItem);
            countOfActions.push('');
        } else {
            resultDisplayArray.push($detetedItem);
            countOfChosenItems.pop();
            pushToResultTable();
        }

        var $parentItems   = $(this).parent('.ui-menu__ul'),
        $resultDisplay = $parentItems.prev('.ui-menu__result-table');

        $resultDisplay.addClass('show');

    } );








    //photocard
    $('.ui-quadro-center').mouseenter( function(){
        var $photocard = $('.ui-photocard'),
        $widthQuadroCenter = $( this ).width();

            // console.log($widthQuadroCenter);

            setTimeout(function () {
                $photocard.addClass('active_photocard');
                $photocard.width($widthQuadroCenter);
            }, 1000),
            setTimeout(function () {
                $photocard.removeClass('active_photocard');
            }, 2500)

        } );

} );

