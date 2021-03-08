<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" class="css">
    <link rel="stylesheet" href="js/jquery/jquery-ui.min.css">
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery-ui.min.js"></script>
    <title>Калькулятор</title>
</head>
<header>
    <div class="header-top">
        <img class="logo" src="img/logo.gif" alt="logo">
        <div class="contact-form">
            <ul class="phone">
                <li><a href="#phone1">8-800-100-5005</a></li>
                <li><a href="#phone2">+7(3452)522-000</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar">
        <a href="#creditCards">Кредитные карты</a>
        <a class="checked" href="#vkladi">Вклады</a>
        <a href="#debetCards">Дебетовая карта</a>
        <a href="#strahovanie">Страхование</a>
        <a href="#friends">Друзья</a></li>
        <a href="#internet-bank">Интернет банк</a>
    </div>
    <div class="container-breadcrumb">
        <ul class="breadcrumb">
            <li><a href="#home">Главная</a></li>
            <li><a href="#vkladi">Вклады</a></li>
            <li><a href="#calculator">Калькулятор</a></li>
        </ul>
    </div>
</header>
<main>
    <div class="calculator">
        <div class="container-left">
            <h1 class="title">Калькулятор</h1>
            <form action="" id="calculator-form" method="POST">
                <div class="row">
                    <div class="col-left">
                        <label for="vklad-date">Дата оформления вклада</label>
                    </div>
                    <div class="col-right">
                        <input type="text" name="vklad-date" id="date" placeholder="дд.мм.гггг">
                    </div>
                </div>
                <div class="row">
                    <div class="col-left">
                        <label for="summ-vklad">Сумма вклада</label>
                    </div>
                    <div class="col-right">
                        <input type="number" name="summ-vklad" id="summ-vklad" placeholder="10 000" min="1000" max="3000000">
                    </div>
                    <div class="col-3">
                        <div class="slider-container">
                            <div id="slider-1">
                                <div id="custom-handle" class="ui-slider-handle"></div>
                            </div>
                            <div class="slider-info">
                                <span>1 тыс. руб.</span>
                                <span>3 000 000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-left">
                        <label for="srok-vklad">Срок вклада</label>
                    </div>
                    <div class="col-right">
                        <select name="srok-vklad" id="">
                            <option value="1-year">1 год</option>
                            <option value="2-year">2 года</option>
                            <option value="3-year">3 года</option>
                            <option value="4-year">4 года</option>
                            <option value="5-year">5 лет</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-left">
                        <label for="popolnenie-vklad">Пополнение вклада</label>
                    </div>
                    <div class="col-right">
                        <div class="content-inline"><input type="radio" name="popolnenie-vklad" value="net" checked>Нет</div>
                        <div class="content-inline"><input type="radio" name="popolnenie-vklad" value="da">Да</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-left">
                        <label for="summ-popolnenie-vklad">Сумма пополнения вклада</label>
                    </div>
                    <div class="col-right">
                        <input type="number" name="summ-popolnenie-vklad" id="summ-popolnenie-vklad" placeholder="10 000" min="1000" max="3000000">
                    </div>
                    <div class="col-3">
                        <div class="slider-container">
                            <div id="slider-2">
                                <div id="custom-handle" class="ui-slider-handle"></div>
                            </div>
                            <div class="slider-info">
                                <span>1 тыс. руб.</span>
                                <span>3 000 000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="results">
                    <div class="col-left-button"><input class="btn" type="submit" value="Рассчитать"></div>
                    <div class="col-right-result">Результат: <span id="result"></span></div>
                </div>
            </form>
        </div>
</main>
<footer>
    <nav>
        <ul class="footer-nav">
            <li><a href="#creditCards">Кредитные карты</a></li>
            <li><a href="#vkladi">Вклады</a></li>
            <li><a href="#debetCards">Дебетовая карта</a></li>
            <li><a href="#strahovanie">Страхование</a></li>
            <li><a href="#friends">Друзья</a></li>
            <li><a href="#internet-bank">Интернет-банк</a></li>
        </ul>
    </nav>
</footer>
<script src="js/main.js"></script>
</html>