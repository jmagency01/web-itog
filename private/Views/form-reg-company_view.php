<div class="row-container">
    <div class="flex-6 justify padding">
        <form action="#" method="post">
            <fieldset>
                <LEGEND>Регистрация</LEGEND>
                <div><input class="text-field" type="text" placeholder="Название вашей компании" required></div>
                <div><textarea class="text-field" placeholder="Краткое описание вашей компании (до 200 символов)" maxlength="200"></textarea></div>
                <fieldset><legend>Выберите услуги, которые предоставляет ваша компания</legend>

                    <div><input type="checkbox" name="flag[]">Цифровая печать</div>
                    <div><input type="checkbox" name="flag[]">Широкоформатная печать</div>
                    <div><input type="checkbox" name="flag[]">Сувенирная продукция</div>
                    <div><input type="checkbox" name="flag[]">Упаковка</div>
                    <div><input type="checkbox" name="flag[]">Реклама в средствах массовой информации</div>
                    <div><input type="checkbox" name="flag[]">Реклама на транспорте</div>
                    <div><input type="checkbox" name="flag[]">Реклама на местах продаж</div>
                    <div><input type="checkbox" name="flag[]">Другое</div>

                </fieldset>

                <!-- у меня есть вопрос по организации формы. Есть список услуг. Компания выбирает те, которые осуществляет,
                 но мне нужно чтобы после выбора услуги выскакивал список продуктов данной категории, к примеру:
                 цифровая печать(выбор)-выскакивает список: визитки, листовки, флаеры и т.д. -->

                <div><input class="text-field" type="text" placeholder="Юридический адрес организации" required></div>
                <div><input class="text-field" type="text" placeholder="ОГРН/ИНН вашей организации" required></div>
                <div><input class="text-field" type="text" placeholder="Телефон организации(для клиентов)" required></div>
                <div><input class="text-field" type="email" placeholder="Почтовый ящик для приема заказов" required></div>
                <div><input class="text-field" type="text" placeholder="Телефон организации(для нашего сервиса)" required></div>
                <div><input class="text-field" type="text" placeholder="Контактное лицо" required></div>
                <div><input  type="checkbox" required>Нажимая данную кнопку, вы соглашаетесь на обработку персональных данных в соответствии с законом №152ФЗ </div>
                <div><input class="butchoice2" type="reset"><input class="butchoice2" type="submit"></div>
            </fieldset>
        </form>

    </div>
</div>