<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="sty.css" rel="stylesheet" />
    <script src="lib/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
    <header>
        <div class="head">
            <div class="logo">
                <img src="photo/logo.png">
                <p>WORLD BANK <br> Publications</p>
            </div>
            <ul class="num-telephone">
                <li>8-800-100-5005</li>
                <li>+7 (3452)522-000</li>
            </ul>
        </div>
    </header>
    <div class="menu-header">
        <div class="contain-for-a">
            <a href="#">Кредитные карты</a>
        </div>
        <div class="contain-for-aa">
            <a href="#">Вклады</a>
        </div>
        <div class="contain-for-aa">
            <a href="#">Дебетовая карта</a>
        </div>
        <div class="contain-for-aa">
            <a href="#">Страхование</a>
        </div>
        <div class="contain-for-aa">
            <a href="#">Друзья</a>
        </div>
        <div class="contain-for-aaa">
            <a href="#">Интернет-банк</a>
        </div>
    </div>
    <div class="route-url">
        <a class="url-a-calcses" href="#">Главная</a> - <a class="url-a-calcses" href="#">Вклады</a> - <a class="url-a-calc" href="#">Калькулятор</a>
    </div>

    <div class="form-calc">
    <span class="error-input"></span>

        <div>
            <div class="name-calc">
                <p>Калькулятор</p>
            </div>

            <div class="item-calc-p">
                <div class="item"><p>Дата оформления вклада</p></div>
                <div class="item"><p>Сумма вклада</p></div>
                <div class="item">
                    <p>Срок вклада</p>
                </div>
                <div class="item"><p>Пополнение вклада</p></div>
                <div class="item"><p>Сумма пополнения вклада</p></div>
            </div>

            

            <form method="POST" action="calc.php">

                <div class="item-calc-input">
                    <div><input class="input-refr" type="text" id="datepicker"></div>
                    <div><input class="input-refr input-sum" id="summVckl" type="text" value="1000"><span class="warrior1"></span></div>
                    <div>
                        <select id="selectYear">
                            <option value="1">1 год</option>
                            <option value="2">2 года</option>
                            <option value="3">3 года</option>
                            <option value="4">4 года</option>
                            <option value="5">5 лет</option>
                        </select>
                    </div>
                    <div class="input-radio"><input name="radioActive" value="2" type="radio" checked> <span class="radio-text">Нет</span><input value="1" name="radioActive" type="radio" class="radio-style"> <span class="radio-text">Да</span></div>

                    <div><input class="input-refr input-sum-person" id="summAddVckl" type="text" value="0" disabled><span class="warrior2"></span></div>
                </div>

                <div class="item-calc-scale">
                    <div class="scale-option">
                        <input class="range-calc num2" id="rangeOne" type="range" value="1000" min="1000" max="3000000" step="1">
                        <span class="span-rub-under-input-range-right">3 000 000</span>
                        <span class="span-rub-under-input-range-left">1тыс. руб</span>
                        <input class="range-calc num1" id="rangeTwo" type="range" value="1000"  min="1000" max="3000000" step="1">
                        <span class="span-rub-under-input-range-right">3 000 000</span>
                        <span class="span-rub-under-input-range-left">1тыс. руб</span>

                    </div>
                    <div class="scale-option"></div>
                </div>
                
                <div class="item-button-form">
                    <input class="input-submit-calc-form" type="button" value="Рассчитать">
                    <span class="result-calc-text">Результат: </span><span class="result-calc-num">0</span>
                </div>

            </form>
        </div>
    </div>
    


    <footer>
        <a href="#">Кредитные карты</a>
        <a href="#">Вклады</a>
        <a href="#">Дебетовая карта</a>
        <a href="#">Страхование</a>
        <a href="#">Друзья</a>
        <a href="#">Интернет-банк</a>
    </footer>
    <script src="script.js"></script>
</body>
</html>