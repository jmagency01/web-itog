<!DOCTYPE html>
<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device=width" initial-scale="1">
    <title>Page on Flex-T</title>
    <link rel="stylesheet" href="/CSS/flex.css">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>

</head>
<body>

<div class="container fon-w">
    <div class="row-container">

        <div class="flex-1 fon1 justify "><img class="img-logo" src="/IMG/logo.png"></div>
        <div class=" flex-5 column-container "><div class="flex-1 justify fon1">
                <div class="ind dis"><a href="/"> Главная</a></div>
                <div class="fri dis"><a class="alink" href="/findprinter">Найти печатника</a>
                </div>
                <div><a class="dis" href="/createorder"> Создать заказ</a></div>

                <div class="dis"><a class="alink" href="/findorder">Найти заказ</a></div>
                <div class="dis"><a class="alink" href="/aboutprint">Все о печати</a></div>
                <div class="dis"><a class="alink" href="/aboutus">О проекте</div>
                <div class="dis"><a class="alink" href="/account">Вход /</a> <a class="alink" href="/account/registrationUser"> Регистрация</a></div>
                <div class="r7 justify dis2 flex-5 align-menu mini-menu"><img class="" src="/public_html/IMG/menu.svg">

                    <div class="block-menu">
                        <div class="ind">Главная</div>
                        <div><a class="alink" href="/public_html/HTML/find-maps.html">Найти печатника</a></div>
                        <div><a class="alink" href="/public_html/HTML/order.html">Найти заказ</a></div>
                        <div><a class="alink" href="/public_html/HTML/order.html">Создать заказ</a></div>
                        <div><a class="alink" href="/public_html/HTML/aboutprint.html">Все о печати</a></div>
                        <div><a class="alink" href="/public_html/HTML/aboutus.html">О проекте</a></div>
                        <div><a class="alink" href="#openModal">Вход</a>/<a class="alink" href="#openModal2">Регистрация</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row-container">
        <div class="flex-6">
            <input  class="inallblock" type="search" placeholder="Здесь можно написать то, что вы ищете">
            <input type="submit" class="ico" >
        </div>
    </div>




    <div><?php include_once $view; ?></div>

        <div class="flex-2 column-container list-base dis">
           <!-- <div class=""><h3>Типография "Синэл"</h3></div>
            <div ><img class="imgloco size" src="/IMG/logo_mini.jpg">
                <p class=" p">Перечень выполняемых работ: офсетная печать, цифровая печать, сувенирная продукция, широкоформатная печать</p></div>
            <div class="justify cool-list"><div>Рейтинг: 4/5</div><div class="margin butchoice2">Подробнее</div></div>
            <div class=""><h3>Типография "Синэл"</h3></div>
            <div ><img class="imgloco size" src="/IMG/logo_mini.jpg">
                <p class="p">Перечень выполняемых работ: офсетная печать, цифровая печать, сувенирная продукция, широкоформатная печать</p></div>
            <div class="justify"><div>Рейтинг: 4/5</div><div class="margin butchoice2">Подробнее</div></div>
            <div class=""><h3>Типография "Синэл"</h3></div>
            <div ><img class="imgloco size" src="/IMG/logo_mini.jpg">
                <p class="p">Перечень выполняемых работ: офсетная печать, цифровая печать, сувенирная продукция, широкоформатная печать</p></div>
            <div class="justify"><div>Рейтинг: 4/5</div><div class="margin butchoice2">Подробнее</div></div>-->
            </div>
    </div>


    <div class="flex-6 fon1 footer">ФУТЕР</div>
    <div id="openModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Вход в личный кабинет</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">


                    <div><input class="text-field" type="text" placeholder="Логин или e-mail" required></div>
                    <div><input class="text-field" type="password" placeholder="Пароль" required></div>
                    <a class="padding" href="#openModal2">Нет Личного Кабинета? Зарегистрируйся! </a>
                    <div class="justify padding"> <input class="butchoice2 " type="submit" value="Войти"></div>


                </div>
            </div>
        </div>
    </div>

    <div id="openModal2" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Выберите, как вы хотите зарегистрироваться?</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">


                    <a class="alink" href="#modalreg-client"><div class="butchoice">Я-Клиент </div></a>
                    <a class="alink" href="/public_html/HTML/form_register_company.html"><div class="butchoice">Я-Компания</div></a>


                </div>
            </div>
        </div>
    </div>

    <div id="modalreg-client" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Регистрация</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>

                <form name="MyForm" action="" id="callbacks" method="post"><!--Атрибут action остается пустым-->
                    <input name="name" type="text" class="text-field" placeholder="Ваше имя" /><br>
                    <input name="tel" type="phone" class="text-field" placeholder="Телефон" /><br>
                    <input name="email" type="email" class="text-field" placeholder="Email" /><br>
                    <div class="but-fip">
                        <div class="gip"><input name="body" type="checkbox" required>Нажимая данную кнопку, вы соглашаетесь на обработку персональных данных в соответствии с законом №152ФЗ </div>
                        <div ><input class="butchoice2" type="reset"><input class="butchoice2" type="submit" id="btncontcall"></div>
                    </div>
                </form> <div id="erconts"></div><!--В этом блоке будет выводится информация от обработчика-->
            </div>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</body>
</html>