<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Опрос</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/stepper.css">
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <section class="step_level step_00" id="step_00">
                <h1>Помогите нам стать лучше и получите СКИДКУ 10% на аренду мебели!</h1>
                <p>Пожалуйста ответьте всего на 10 вопросов и получите скидку <b>10% на ваш заказ</b>! Нам важно
                    становится
                    лучше и постоянно повышать свой уровень обслуживания. Результаты опроса анонимны и доступны
                    только
                    владельцу сайта, для улучшения качества работы нашего сервиса! В конце опроса, Вы получите <b>
                        промокод,
                        использовав который при заказе, Вы получите скидку 10%. Спасибо за помощь!</b></p>
                <div class="form_box">
                    <input id="name" type="text" placeholder="Ваше Имя">
                </div>
                <a id="start" href="#">Начать опрос сейчас</a>
            </section>
            <form method="POST" id="main_form">
                <input name="name" type="text" id="user_name">
                <h3></h3>
                <section class="step_level step_01" id="step_01">
                    <div class="pre_header">
                        Помогите нам стать лучше и получите СКИДКУ 10% на аренду мебели!
                    </div>
                    <div class="header">
                        <h2>1. Откуда вы узнали про сайт?*</h2>
                        <p class="desc">Выберите один ответ</p>
                    </div>
                    <div class="form_box">
                        <input class="inputs required" name="check1[]" id="step1_1" value="реклама (баннер) в интернете"
                            type="checkbox" placeholder="">
                        <label for="step1_1">реклама (баннер) в интернете</label>
                        <input class="inputs required" name="check1[]" id="step1_2" value="поисковая система"
                            type="checkbox" placeholder="">
                        <label for="step1_2">поисковая система</label>
                        <input class="inputs required" name="check1[]" id="step1_3" value="социальные сети"
                            type="checkbox" placeholder="">
                        <label for="step1_3">социальные сети</label>
                        <input type="text" name="checktext1 " id="step1_1_text" placeholder="свой ответ (кратко)">
                    </div>
                </section>
                <h3></h3>
                <section class="step_level step_02" id="step_02">
                    <div class="pre_header">
                        Помогите нам стать лучше и получите СКИДКУ 10% на аренду мебели!
                    </div>
                    <div class="header">
                        <h2>2. Как часто вы пользуетесь услугой Аренда мебели и другого оборудования? </h2>
                        <p class="desc">Выберите один ответ</p>
                    </div>
                    <div class="form_box">
                        <input id="step2_1" value="Ориентировочно 1 раз в месяц" type="checkbox" placeholder="">
                        <label for="step2_1">Ориентировочно 1 раз в месяц</label>
                        <input id="step2_2" name="check2" value="Ориентировочно 1 раз в квартал" type="checkbox"
                            placeholder="">
                        <label for="step2_2">Ориентировочно 1 раз в квартал</label>
                        <input id="step2_3" name="check2" value="Приблизительно 1 раз в год" type="checkbox"
                            placeholder="">
                        <label for="step2_3">Приблизительно 1 раз в год</label>
                        <input id="step2_4" name="check2" value="Это впервые" type="checkbox" placeholder="">
                        <label for="step2_4">Это впервые</label>
                    </div>
                </section>
                <h3></h3>
                <section class="step_level step_03" id="step_03">
                    <div class="pre_header">
                        Помогите нам стать лучше и получите СКИДКУ 10% на аренду мебели!
                    </div>
                    <div class="header">
                        <h2>3. Что вы предпочитаете заказывать вместе с услугой аренда мебели?</h2>
                        <p class="desc">Выберите один ответ</p>
                    </div>
                    <div class="form_box">
                        <input id="step3_1" value="Доставка, монтаж, демонтаж" type="checkbox" placeholder=""
                            name="check3">
                        <label for="step3_1">Доставка, монтаж, демонтаж</label>
                        <input id="step3_2" name="check3" value="Только доставку" type="checkbox" placeholder="">
                        <label for="step3_2">Только доставку</label>
                        <input id="step3_3" name="check3" value="Предпочитаю самовывоз" type="checkbox" placeholder="">
                        <label for="step3_3">Предпочитаю самовывоз</label>
                    </div>
                </section>
                <h3></h3>
                <section class="step_level step_04" id="step_04">
                    <div class="pre_header">
                        Помогите нам стать лучше и получите СКИДКУ 10% на аренду мебели!
                    </div>
                    <div class="header">
                        <h2>4. Какой главный критерий выбора компании предоставляющей Аренду мебели: </h2>
                        <p class="desc">Выберите один ответ</p>
                    </div>
                    <div class="form_box">
                        <input id="step4_1" name="check4" value="Совет знакомых" type="checkbox" placeholder="">
                        <label for="step4_1">Совет знакомых</label>
                        <input id="step4_2" name="check4" value="Цена оборудования" type="checkbox" placeholder="">
                        <label for="step4_2">Цена оборудования</label>
                        <input id="step4_3" name="check4" value="Цена «под ключ», включая монтаж, демонтаж и доставку"
                            type="checkbox" placeholder="">
                        <label for="step4_3">Цена «под ключ», включая монтаж, демонтаж и доставку</label>
                        <input id="step4_4" name="check4" value="Чистота оборудования " type="checkbox" placeholder="">
                        <label for="step4_4">Чистота оборудования </label>
                    </div>
                </section>
                <h3></h3>
                <section class="step_level step_05" id="step_05">
                    <div class="pre_header">
                        Помогите нам стать лучше и получите СКИДКУ 10% на аренду мебели!
                    </div>
                    <div class="header">
                        <h2>5. Каким образом Вам удобнее всего и приятнее общаться с менеджером для уточнения деталей?
                        </h2>
                        <p class="desc">Выберите один ответ</p>
                    </div>
                    <div class="form_box">
                        <input id="step5_1" name="check5" value="По средствам телефонного звонка" type="checkbox" placeholder="">
                        <label for="step5_1">По средствам телефонного звонка</label>
                        <input id="step5_2" name="check5" value="Предпочитаю месенджеры" type="checkbox" placeholder="">
                        <label for="step5_2">Предпочитаю месенджеры</label>
                        <input type="text" name="checktext2" id="step2_3_text" placeholder="Свой вариант ответа">
                    </div>
                </section>
                <h3></h3>
                <section class="step_level step_06" id="step_06">
                    <div class="pre_header">
                        Помогите нам стать лучше и получите СКИДКУ 10% на аренду мебели!
                    </div>
                    <div class="header">
                        <h2>6. Удобен ли для Вас наш сайт (навигация, дизайн, информация)? </h2>
                        <p class="desc">Выберите один ответ</p>
                    </div>
                    <div class="form_box">
                        <input id="step6_1" name="check6" value="Да" type="checkbox" placeholder="">
                        <label for="step6_1">Да</label>
                        <input id="step6_2" name="check6" value="Нет" type="checkbox" placeholder="">
                        <label for="step6_2">Нет</label>
                        <input type="text" name="checktext3" id="step3_3_text"
                            placeholder="не совсем (Пожалуйста, опишите кратко что именно)">
                    </div>
                </section>
                <h3></h3>
                <section class="step_level step_07" id="step_07">
                    <div class="pre_header">
                        Помогите нам стать лучше и получите СКИДКУ 10% на аренду мебели!
                    </div>
                    <div class="header">
                        <h2>7. Какой главный критерий выбора компании предоставляющей Аренду мебели: </h2>
                        <p class="desc">Выберите один ответ</p>
                    </div>
                    <div class="form_box">
                        <input id="step7_1" name="check7" value="Ничего" type="checkbox" placeholder="">
                        <label for="step7_1">Ничего</label>
                        <input type="text"  name="checktext4" id="step4_4_text"
                            placeholder="Напишите, кратко, пожалуйста">
                    </div>
                </section>
                <h3></h3>
                <section class="step_level step_08" id="step_08">
                    <div class="pre_header">
                        Помогите нам стать лучше и получите СКИДКУ 10% на аренду мебели!
                    </div>
                    <div class="header">
                        <h2>8. Ваш пол?* </h2>
                        <p class="desc">Выберите один ответ</p>
                    </div>
                    <div class="form_box">
                        <input id="step8_1" name="check8"    value="мужской" type="checkbox" placeholder="">
                        <label for="step8_1">Мужской</label>
                        <input id="step8_2" name="check8" value="Женский" type="checkbox" placeholder="">
                        <label for="step8_2">Женский</label>
                    </div>
                </section>
                <h3></h3>
                <section class="step_level step_09" id="step_09">
                    <div class="pre_header">
                        Помогите нам стать лучше и получите СКИДКУ 10% на аренду мебели!
                    </div>
                    <div class="header">
                        <h2>9. Ваш возраст?* </h2>
                        <p class="desc">Выберите один ответ</p>
                    </div>
                    <div class="form_box">
                        <input id="step9_1" name="check9" value="Меньше 18 лет" type="checkbox" placeholder="">
                        <label for="step9_1">Меньше 18 лет</label>
                        <input id="step9_2" name="check9" value="18 – 24" type="checkbox" placeholder="">
                        <label for="step9_2">18 – 24</label>
                        <input id="step9_3" name="check9" value="25 – 34" type="checkbox" placeholder="">
                        <label for="step9_3">25 – 34</label>
                        <input id="step9_4" name="check9" value="35 – 44" type="checkbox" placeholder="">
                        <label for="step9_4">35 – 44</label>
                        <input id="step9_5" name="check9" value="45 и старше" type="checkbox" placeholder="">
                        <label for="step9_5">45 и старше</label>
                    </div>
                </section>
                <h3></h3>
                <section class="step_level step_10" id="step_10">
                    <div class="pre_header">
                        Помогите нам стать лучше и получите СКИДКУ 10% на аренду мебели!
                    </div>
                    <div class="header">
                        <h2>10. Что можно сделать с Вашей точки зрения, чтобы улучшить наш сервис? </h2>
                        <p class="desc">Выберите один ответ</p>
                    </div>
                    <div class="form_box">
                        <input type="text" name="checktext5" id="step5_5_text"
                            placeholder="Напишите, кратко, пожалуйста">
                    </div>
                </section>
                <h3></h3>
                <section class="step_level step_11" id="step_11">
                    <div class="header">
                        <h2>11. ВАШ ПРОМОКОД <br><span>Нажмите отправить что-бы увидеть код! <i class="counter"></i>
                            </span>
                            <br>Назовите его
                            оператору при заказе!*
                        </h2>
                    </div>
                </section>
                <div class="alert error" id="alert">
                    Обязательный вопрос</div>
                <input class="promocode" type="text" name="promocode" value="">
            </form>

        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.steps.min.js"></script>
    <script src="js/stepper.js"></script>
</body>

</html>