<div class="inner">
    <section class="section">
        <div class="features-simple features-simple--2items">
            <div class="features-simple__item">
                <div class="features-simple__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/svgs/icon_briefcase.svg" alt=""/></div>
                <div class="ui-p1 features-simple__ui-p1">Бесплатное открытие зарплатного проекта
                </div>
            </div>
            <div class="features-simple__item">
                <div class="features-simple__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/svgs/icon_cash.svg" alt=""/></div>
                <div class="ui-p1 features-simple__ui-p1">Бесплатный выпуск и обслуживание карт сотрудников
                </div>
            </div>
            <div class="features-simple__item">
                <div class="features-simple__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/svgs/icon_nul_rub.svg" alt=""/></div>
                <div class="ui-p1 features-simple__ui-p1">Отсутствие расходов на хранение, перевозку и выдачу наличных
                </div>
            </div>
            <div class="features-simple__item">
                <div class="features-simple__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/svgs/icon_two_people.svg" alt=""/></div>
                <div class="ui-p1 features-simple__ui-p1">Льготные ставки по кредиту наличными для сотрудников
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="how-connect">
            <h2 class="ui-h2 how-connect__ui-h2">Как подключить зарплатный проект
            </h2>
            <div class="how-connect__wrapper">
                <div class="how-connect__item">
                    <div class="how-connect__count">
                        <h6 class="ui-h6 ui-h6--medium text-green">1
                        </h6>
                    </div>
                    <div class="how-connect__text">
                        <div class="ui-p1 how-connect__ui-p1 ui-p1--medium text-green">Заявка
                        </div>
                        <div class="ui-p2 how-connect__ui-p2">Заполните форму заявки ниже, <br>и&nbsp;мы сразу возьмём <br>ее в&nbsp;работу
                        </div>
                    </div>
                </div>
                <div class="how-connect__item">
                    <div class="how-connect__count">
                        <h6 class="ui-h6 ui-h6--medium text-green">2
                        </h6>
                    </div>
                    <div class="how-connect__text">
                        <div class="ui-p1 how-connect__ui-p1 ui-p1--medium text-green">Консультация
                        </div>
                        <div class="ui-p2 how-connect__ui-p2">Менеджер Банка перезвонит Вам и проведет консультации по всем интересующим вопросам
                        </div>
                    </div>
                </div>
                <div class="how-connect__item">
                    <div class="how-connect__count">
                        <h6 class="ui-h6 ui-h6--medium text-green">3
                        </h6>
                    </div>
                    <div class="how-connect__text">
                        <div class="ui-p1 how-connect__ui-p1 ui-p1--medium text-green">Оформление
                        </div>
                        <div class="ui-p2 how-connect__ui-p2">Откройте счет и перечисляйте заработную плату после выпуска карт сотрудникам
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="application application--salary-project">
            <div class="application-inner">
                <form class="application-form js-form-success-popup" action="#">
                    <h2 class="ui-h2 application-form__ui-h2">Заявка на подключение зарплатного проекта
                    </h2>
                    <div class="application-form__main">
                        <div class="application-form__line">
                            <div class="ui-input">
                                <input class="js-inn" id="applicationInn" type="text" required="required" data-parsley-inn=""/>
                                <label for="applicationInn">ИНН</label>
                            </div>
                        </div>
                        <div class="application-form__line">
                            <div class="ui-input">
                                <input id="applicationCompany" type="text" required="required"/>
                                <label for="applicationCompany">Название компании</label>
                            </div>
                        </div>
                        <div class="application-form__line">
                            <div class="ui-input">
                                <input id="applicationName" type="text" required="required" data-parsley-name=""/>
                                <label for="applicationName">Контактное лицо</label>
                            </div>
                        </div>
                        <div class="application-form__line">
                            <div class="ui-input">
                                <input class="js-phone" id="applicationPhone" type="text" required="required" data-parsley-phone=""/>
                                <label for="applicationPhone">Телефон</label>
                            </div>
                        </div>
                        <div class="application-form__line">
                            <div class="ui-input">
                                <input id="applicationEmail" type="email" required="required"/>
                                <label for="applicationEmail">E-mail</label>
                            </div>
                        </div>
                        <div class="application-form__line application-form__line--captcha">
                            <div class="application-form__captcha"><img src="<?=SITE_TEMPLATE_PATH?>/img/captcha.jpg" alt=""/>
                                <div class="ui-p4 ui-p4--green">Обновить код
                                </div>
                            </div>
                            <div class="ui-input">
                                <input id="applicationCaptcha" type="text" required="required" data-parsley-name=""/>
                                <label for="applicationCaptcha">Введите символы</label>
                            </div>
                        </div>
                        <div class="application-form__line">
                            <div class="ui-checkbox application__ui-checkbox">
                                <input id="approval" name="approval" type="checkbox" required="required" data-parsley-errors-messages-disabled="data-parsley-errors-messages-disabled"/>
                                <label for="approval">
                                    <div class="ui-p4">Я соглашаюсь <a href="#popup-captcha" class="js-popup">с условиями и даю свое согласие на обработку</a> моих персональных данных,
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="application-form__line application-form__line--submit">
                            <div class="ui-checkbox application__ui-checkbox">
                                <input id="approvalAds" name="approvalAds" type="checkbox" data-parsley-errors-messages-disabled="data-parsley-errors-messages-disabled"/>
                                <label for="approvalAds">
                                    <div class="ui-p4">Я соглашаюсь <a href="#popup-ads" class="js-popup">с условиями и даю свое согласие на получение</a> информационно-рекламной информации,
                                    </div>
                                </label>
                            </div>
                            <input class="ui-button ui-button--mob-height-xl" type="submit" value="отправить заявку"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="popup-container popup-container--size-m popup-container--pd popup-container--captcha popup-captcha" id="popup-captcha" style="display: none;">
                <div class="popup-wrapper">
                    <h5 class="ui-h5 ui-h5--bold">Согласие с условиями и согласие на обработку моих персональных данных
                    </h5>
                    <div class="ui-p4">Я даю свое согласие КБ «СТРОЙЛЕСБАНК» (ООО) (адрес: 625000, г. Тюмень, ул. Республики, 65) на обработку моих персональных данных, предоставленных мной Банку, в том числе указанных в заявке, и/или иным образом полученных Банком (включая файлы cookie, сведения о действиях, которые я совершаю на сайте, сведения об используемых для этого устройствах, дата и время сессии).Обработка вышеуказанных персональных данных будет осуществляться путем смешанной (автоматизированной и неавтоматизированной) обработки персональных данных, а именно: сбор, систематизация, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передача (предоставление), блокирование, удаление персональных данных.
                    </div>
                    <div class="ui-p4">Целями обработки персональных данных являются:
                    </div>
                    <ul class="ui-ul">
                        <li>
                            <div class="ui-p4">заключение с Банком любых договоров и соглашений;
                            </div>
                        </li>
                        <li>
                            <div class="ui-p4">проверка достоверности указанных мной сведений;
                            </div>
                        </li>
                        <li>
                            <div class="ui-p4">подбор и предоставление мне Банком услуг;
                            </div>
                        </li>
                        <li>
                            <div class="ui-p4">обеспечение работы приложений и сервисов Банка, управления ими;
                            </div>
                        </li>
                        <li>
                            <div class="ui-p4">усовершенствования продуктов и (или) услуг Банка, разработки новых продуктов и (или) услуг Банка, ведения статистики о пользователях сайтов/мобильных приложений Банка, хранения персональных предпочтений и настроек пользователей, отслеживания состояния сессии доступа пользователей, обеспечения функционирования и улучшения качества сайта Банка;
                            </div>
                        </li>
                        <li>
                            <div class="ui-p4">хранение, размещение и иная обработка данных Банком и третьими лицами, в том числе с использованием облачных хранилищ.
                            </div>
                        </li>
                    </ul>
                    <div class="ui-p4">В вышеуказанных целях я даю свое согласие на обработку своих персональных данных Банку и поручение обработки третьим лицам, в том числе Яндекс.Метрика (<a href="#">https://yandex.ru/support/metrica/code...ected.html</a>) и ООО «Колибри» (620027, г. Екатеринбург, ул. Свердлова, д. 11а, ИНН 6658451500).
                    </div>
                    <div class="ui-p4">Указанное согласие дано Банку на срок 5 лет со дня его подачи и может быть мной отозвано путем обращения в офис Банка с заявлением, оформленным в письменной форме.
                    </div>
                    <div class="documents"><a class="documents-item" href="https://slbank.ru/files/politika_pdn_slb.pdf">
                            <div class="documents-item__icon">
                                <svg class="svg-icon svg-icon--icon_pdf">
                                    <use xlink:href="img/sprite.svg#icon_pdf"></use>
                                </svg>
                            </div>
                            <div class="documents-item__content">
                                <div class="ui-p2">Политика обработки ПДн
                                </div>
                                <div class="ui-p4 documents-item__ui-p4">232 Кб
                                </div>
                            </div></a><a class="documents-item" href="https://slbank.ru/files/user_agreement.pdf">
                            <div class="documents-item__icon">
                                <svg class="svg-icon svg-icon--icon_pdf">
                                    <use xlink:href="img/sprite.svg#icon_pdf"></use>
                                </svg>
                            </div>
                            <div class="documents-item__content">
                                <div class="ui-p2">Пользовательское соглашение
                                </div>
                                <div class="ui-p4 documents-item__ui-p4">232 Кб
                                </div>
                            </div></a></div>
                </div>
            </div>
            <div class="popup-container popup-container--size-m popup-container--pd popup-container--ads popup-ads" id="popup-ads" style="display: none;">
                <div class="popup-wrapper">
                    <h5 class="ui-h5 ui-h5--bold">Согласие на получение информационно-рекламной информации
                    </h5>
                    <div class="ui-p4">Я даю свое согласие КБ «СТРОЙЛЕСБАНК» (ООО) (далее — Банк) (адрес: 625000, г. Тюмень, ул. Республики, д. 65) на обработку персональных данных, указанных мной на сайте в сети интернет по адресу slbank.ru способом и в порядке исключительно по усмотрению Банка и в соответствии с действующим законодательством Российской Федерации, с использованием средств автоматизации и/или без использования таких средств, в том числе осуществление сбора, записи, систематизации, накопления информации, содержащей мои персональные данные, хранение, уточнение (обновление, изменение), использование, передачу (предоставление, доступ), блокирование, обезличивание, удаление и уничтожение этих данных.
                    </div>
                    <div class="ui-p4 popup-ads__ui-p4">Целями обработки персональных данных являются:
                    </div>
                    <ul class="ui-ul">
                        <li>
                            <div class="ui-p4">подбор и предоставление мне Банком услуг;
                            </div>
                        </li>
                        <li>
                            <div class="ui-p4">осуществление информирования о грядущих мероприятиях и новостях Банка, рекламных акциях, услугах, товарах и продуктах Банка.
                            </div>
                        </li>
                    </ul>
                    <div class="ui-p4 popup-ads__ui-p4">Согласие дается на получение рекламных рассылок следующими способами:
                    </div>
                    <ul class="ui-ul">
                        <li>
                            <div class="ui-p4">sms-рассылки;
                            </div>
                        </li>
                        <li>
                            <div class="ui-p4">push-сообщения;
                            </div>
                        </li>
                        <li>
                            <div class="ui-p4">по электронной почте;
                            </div>
                        </li>
                        <li>
                            <div class="ui-p4">по сетям электросвязи, в том числе посредством использования телефонной, факсимильной, подвижной радиотелефонной связи;
                            </div>
                        </li>
                        <li>
                            <div class="ui-p4">сообщения в мессенджерах.
                            </div>
                        </li>
                    </ul>
                    <div class="ui-p4 popup-ads__ui-p4">Для достижения целей обработки Банк поручает нижеуказанным категориям третьих лиц обрабатывать предоставленные персональные данные, настоящим я даю согласие на передачу моих персональных данных указанным третьим лицам:
                    </div>
                    <ul class="ui-ul">
                        <li>
                            <div class="ui-p4">Операторы сотовой связи;
                            </div>
                        </li>
                        <li>
                            <div class="ui-p4">Владельцы социальных сетей;
                            </div>
                        </li>
                        <li>
                            <div class="ui-p4">Владельцы мессенджеров.
                            </div>
                        </li>
                    </ul>
                    <div class="ui-p4">Рекламная рассылка по электронной почте осуществляется до отписки от информации путем перехода по специальной ссылке «Отписаться от рассылки» в рассылаемых письмах.
                    </div>
                    <div class="ui-p4">Согласие на обработку персональных данных действует со дня указания данных в заполняемой заявке на сайте slbank.ru до дня его отзыва. Согласие может быть отозвано путем передачи Банку соответствующего заявления. Заявление могут быть переданы на бумажном носителе за собственноручной подписью заявителя (с указанием сведений, обязательных для включения в запрос на получение информации, касающейся обработки персональных данных)..
                    </div>
                    <div class="ui-p4">При отзыве мной настоящего согласия, Банк обязан незамедлительно прекратить обработку моих персональных данных (обеспечить прекращение моих персональных данных другими лицами, обрабатывающими мои персональные данные по поручению Банка), если иное не установлено законодательством Российской Федерации.
                    </div>
                    <div class="ui-p4">Банк обязуется соблюдать конфиденциальность при обработке полученных персональных данных и обеспечить их надлежащую безопасность в соответствии с законодательством Российской Федерации. Обработка Банком персональных данных осуществляется в соответствии с «Политикой обработки персональных данных КБ «СТРОЙЛЕСБАНК» (ООО) <a href="https://slbank.ru/files/politika_pdn_slb.pdf">https://slbank.ru/files/politika_pdn_slb.pdf</a>
                    </div>
                    <div class="documents"><a class="documents-item" href="https://slbank.ru/files/politika_pdn_slb.pdf">
                            <div class="documents-item__icon">
                                <svg class="svg-icon svg-icon--icon_pdf">
                                    <use xlink:href="img/sprite.svg#icon_pdf"></use>
                                </svg>
                            </div>
                            <div class="documents-item__content">
                                <div class="ui-p2">Политика обработки ПДн
                                </div>
                                <div class="ui-p4 documents-item__ui-p4">232 Кб
                                </div>
                            </div></a><a class="documents-item" href="https://slbank.ru/files/user_agreement.pdf">
                            <div class="documents-item__icon">
                                <svg class="svg-icon svg-icon--icon_pdf">
                                    <use xlink:href="img/sprite.svg#icon_pdf"></use>
                                </svg>
                            </div>
                            <div class="documents-item__content">
                                <div class="ui-p2">Пользовательское соглашение
                                </div>
                                <div class="ui-p4 documents-item__ui-p4">232 Кб
                                </div>
                            </div></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <h2 class="ui-h2 ui-h2--mb40">Документы
        </h2>
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-item__head">
                    <h6 class="ui-h6 ui-h6--medium">Документы
                    </h6>
                </div>
                <div class="accordion-item__main">
                    <div class="accordion-item__wrapper">
                        <div class="documents"><a class="documents-item" href="#">
                                <div class="documents-item__icon">
                                    <svg class="svg-icon svg-icon--icon_pdf">
                                        <use xlink:href="img/sprite.svg#icon_pdf"></use>
                                    </svg>
                                </div>
                                <div class="documents-item__content">
                                    <div class="ui-p2">Перечень документов, необходимых для открытия расчетного счета (для лиц, занимающихся в установленном законодательством РФ порядке частной практикой)
                                    </div>
                                    <div class="ui-p4 documents-item__ui-p4">232 Кб
                                    </div>
                                </div></a><a class="documents-item" href="#">
                                <div class="documents-item__icon">
                                    <svg class="svg-icon svg-icon--icon_pdf">
                                        <use xlink:href="img/sprite.svg#icon_pdf"></use>
                                    </svg>
                                </div>
                                <div class="documents-item__content">
                                    <div class="ui-p2">Перечень документов, необходимых для открытия расчетного счета (для лиц, занимающихся в установленном законодательством РФ порядке частной практикой)
                                    </div>
                                    <div class="ui-p4 documents-item__ui-p4">232 Кб
                                    </div>
                                </div></a><a class="documents-item" href="#">
                                <div class="documents-item__icon">
                                    <svg class="svg-icon svg-icon--icon_pdf">
                                        <use xlink:href="img/sprite.svg#icon_pdf"></use>
                                    </svg>
                                </div>
                                <div class="documents-item__content">
                                    <div class="ui-p2">Перечень документов, необходимых для открытия расчетного счета (для лиц, занимающихся в установленном законодательством РФ порядке частной практикой)
                                    </div>
                                    <div class="ui-p4 documents-item__ui-p4">232 Кб
                                    </div>
                                </div></a><a class="documents-item" href="#">
                                <div class="documents-item__icon">
                                    <svg class="svg-icon svg-icon--icon_pdf">
                                        <use xlink:href="img/sprite.svg#icon_pdf"></use>
                                    </svg>
                                </div>
                                <div class="documents-item__content">
                                    <div class="ui-p2">Перечень документов, необходимых для открытия расчетного счета (для лиц, занимающихся в установленном законодательством РФ порядке частной практикой)
                                    </div>
                                    <div class="ui-p4 documents-item__ui-p4">232 Кб
                                    </div>
                                </div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="banner-slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="banner-slider__item banner-slider__item--rko swiper-slide">
                        <div class="banner-slider__content">
                            <div class="ui-h3 banner-slider__ui-h3">Выгодные тарифы РКО
                            </div>
                            <div class="ui-p1 banner-slider__ui-p1">Подключение Интернет-банка БЕСПЛАТНО
                            </div><a class="ui-button banner-slider__ui-button ui-button--empty" href="#">подробнее</a>
                        </div>
                        <div class="banner-slider__img"><img src="<?=SITE_TEMPLATE_PATH?>/img/banner-slider_rko.png" alt=""/></div>
                    </div>
                    <div class="banner-slider__item banner-slider__item--online-banking swiper-slide">
                        <div class="banner-slider__content">
                            <div class="ui-h3 banner-slider__ui-h3">Интернет-банк для&nbsp;юридических лиц
                            </div>
                            <div class="ui-p1 banner-slider__ui-p1">Подключение Интернет-банка БЕСПЛАТНО
                            </div><a class="ui-button banner-slider__ui-button ui-button--empty" href="#">подключить</a>
                        </div>
                        <div class="banner-slider__img"><img src="<?=SITE_TEMPLATE_PATH?>/img/banner-slider_online_banking.png" alt=""/></div>
                    </div>
                </div>
                <div class="ui-swiper-pagination banner-slider__ui-swiper-pagination">
                    <div class="swiper-pagination"></div>
                </div>
                <div class="ui-swiper-buttons banner-slider__ui-swiper-buttons">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="popup-container" id="form-thank" style="display: none;">
        <div class="popup-wrapper">
            <div class="form-thank">
                <div class="form-thank__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/svgs/icon_success_ok.svg" alt=""/></div>
                <div class="ui-p1 form-thank__ui-p1 ui-p1--medium">Спасибо за Вашу заявку, в ближайшее время мы с Вами свяжемся
                </div>
            </div>
        </div>
    </div>
</div>