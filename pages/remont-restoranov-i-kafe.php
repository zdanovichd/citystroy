<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
    <meta name="description" content="Ремонт ресторанов и кафе в Москве под ключ — быстро, качественно, с гарантией! Отделка помещений любой сложности, фиксированные цены, бесплатный выезд замерщика. СитиСтрой — ваш надежный партнер в создании стильного и функционального заведения. Звоните — рассчитаем смету за 1 день!">
    <title>Ремонт ресторанов и кафе в Москве - заказать отделку ресторанов цены под ключ Ӏ СитиСтрой</title>
    <?php
    include('../components/head.php')
    ?>
</head>

<body>
<!-- PRELOADER -->
<?php
include('../components/preloader.php')
?>

<!-- HEADER -->
<?php
include('../components/header.php')
?>
<style>
    .menu__main > li:nth-child(5) > a {
        color: #28bbff;
        font-weight: 300;
    }
    .menu-mob_main > li:nth-child(5) > a {
        color: #28bbff;
        font-weight: 300;
    }
    /* Стили для секции услуг */
    .services {
        padding: 80px 0;
        background-color: #000;
        color: #fff;
    }

    .services__container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .services__grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .service__item {
        padding: 30px;
        border-radius: var(--radius);
        background: rgba(255, 255, 255, 0.05);
        transition: var(--duration);
    }

    .service__item:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.1);
    }

    /* Стили для секции особенностей */
    .features {
        padding: 80px 0;
        background-color: #161616;
        color: #fff;
    }

    .features__container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .features__content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .feature__item {
        padding: 30px;
        border-radius: var(--radius);
        background: rgba(255, 255, 255, 0.05);
    }

    /* Стили для секции зон */
    .zones {
        padding: 80px 0;
        background-color: #000;
        color: #fff;
    }

    .zones__container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .zones__grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .zone__item {
        padding: 30px;
        border-radius: var(--radius);
        background: rgba(255, 255, 255, 0.05);
    }

    /* Стили для секции этапов */
    .stages {
        padding: 80px 0;
        background-color: #161616;
        color: #fff;
    }

    .stages__container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .stages__timeline {
        margin-top: 50px;
        position: relative;
    }

    .stages__timeline::before {
        content: '';
        position: absolute;
        left: 20px;
        top: 0;
        bottom: 0;
        width: 2px;
        background: var(--main-blue);
    }

    .stage__item {
        position: relative;
        padding: 30px 0 30px 60px;
        margin-bottom: 30px;
    }

    .stage__item::before {
        content: '';
        position: absolute;
        left: 12px;
        top: 40px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: var(--main-blue);
    }

    /* Стили для секции цен */
    .prices {
        padding: 80px 0;
        background-color: #000;
        color: #fff;
    }

    .prices__container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .prices__table {
        margin-top: 50px;
        border-radius: var(--radius);
        overflow: hidden;
    }

    .price__header, .price__row {
        display: grid;
        grid-template-columns: 1fr 1fr 2fr;
        gap: 20px;
        padding: 20px;
    }

    .price__header {
        background: var(--main-blue);
    }

    .price__row {
        background: rgba(255, 255, 255, 0.05);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .price__row:nth-child(even) {
        background: rgba(255, 255, 255, 0.02);
    }

    /* Стили для секции цен на отделочные работы */
    .works-prices {
        padding: 80px 0;
        background-color: #161616;
        color: #fff;
    }

    .works-prices__container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .works-prices__table {
        margin-top: 50px;
        border-radius: var(--radius);
        overflow: hidden;
    }

    .work-price__header, .work-price__row {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 20px;
        padding: 20px;
    }

    .work-price__header {
        background: var(--main-blue);
    }

    .work-price__row {
        background: rgba(255, 255, 255, 0.05);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .work-price__row:nth-child(even) {
        background: rgba(255, 255, 255, 0.02);
    }

    /* Стили для секции дополнительных услуг */
    .additional-services {
        padding: 80px 0;
        background-color: #000;
        color: #fff;
    }

    .additional-services__container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .additional-services__grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .additional-service__item {
        border-radius: var(--radius);
        overflow: hidden;
        background: rgba(255, 255, 255, 0.05);
        transition: var(--duration);
    }

    .additional-service__item:hover {
        transform: translateY(-5px);
    }

    .additional-service__item img {
        width: 100%;
        object-fit: cover;
    }

    .additional-service__item h3,
    .additional-service__item p {
        padding: 20px;
    }

    /* Стили для секции консультации */
    .consultation {
        padding: 80px 0;
        background-color: #161616;
        color: #fff;
        text-align: center;
    }

    .consultation__container {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .consultation .button {
        margin-top: 30px;
    }

    /* Адаптивность */
    @media (max-width: 768px) {
        .services__grid,
        .features__content,
        .zones__grid,
        .additional-services__grid {
            grid-template-columns: 1fr;
        }

        .price__header, .price__row,
        .work-price__header, .work-price__row {
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .stages__timeline::before {
            left: 10px;
        }

        .stage__item {
            padding-left: 40px;
        }

        .stage__item::before {
            left: 2px;
        }
    }
</style>


<!-- SCREEN_1-TITLE -->
<article id="anchor_title" class="title__con">
    <div class="title">
        <div class="title__text title__srm">
            <div>
                <h1 class="h1">Ремонт ресторанов и кафе</h1>
            </div>
            <div class="h2" style="max-width: 1200px;">
                <p>Ремонт ресторана — не стройка, а инвестиция. Мы делаем так, чтобы каждый вложенный рубль окупался за счет увеличения чека, лояльности гостей и скорости обслуживания.</p>
            </div>

            <div class="title__button">
                <button class="button modal__btn">
                    СВЯЗАТЬСЯ С НАМИ
                </button>
                <a href="#smr_about">
                    <div class="down"
                         onmouseenter="down__button.play()"
                         onmouseleave="down__button.stop()"	>
                        <dotlottie-player
                                id="down__button"
                                class="down__button"
                                src="/assets/animation/down.json"
                                background="transparent"
                                speed="1">
                        </dotlottie-player>
                    </div>
                </a>
            </div>
        </div>

        <div class="title-mob swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide title-mob__slide"><img src="/assets/img/remont/1.jpg" alt="" loading="lazy"></div>
                <div class="swiper-slide title-mob__slide"><img src="/assets/img/remont/2.jpg" alt="" loading="lazy"></div>
                <div class="swiper-slide title-mob__slide"><img src="/assets/img/remont/3.jpg" alt="" loading="lazy"></div>
            </div>
        </div>

        <div class="video__con">
            <img src="/assets/img/remont/3.jpg" alt="" loading="lazy" class="_img">
        </div>
</article>

<!-- SCREEN_2 Наши преимущества-->
<article id="smr_about" class="about">
    <p class="h1 about__title" style="text-align: left;max-width: 1300px;">Ремонт ресторана — это не про обои и плитку. Это про потоки гостей, нагрузку на полы, мощность вентиляции и атмосферу, которая цепляет. Мы знаем, как сделать отделку ресторанов так, чтобы она служила годами — без скрипов, протечек и переделок.</p>
    <p class="h1 about__title">Укладываемся в срок арендных каникул и не выходим за бюджет сметы за счет того, что:</p>
    <div class="about__item about__smr">
        <p class="h3">
            <img src="/assets/icon/2.svg" alt="" loading="lazy">
            Cчитаем в смете все и сразу, не занижая количество и стоимость работ
        </p>
        <p class="h3">
            <img src="/assets/icon/9.svg" alt="" loading="lazy">
            Специализируемся на строительстве в ТЦ и БЦ
        </p>
        <p class="h3" >
            <img src="/assets/icon/1.svg" alt="" loading="lazy">
            Жестко контролируем движение по графику производства работ
        </p>
        <p class="h3" >
            <img src="/assets/icon/10.svg" alt="" loading="lazy">
            Обеспечиваем выполнение работ в 2-3 смены
        </p>
        <p class="h3" >
            <img src="/assets/icon/3.svg" alt="" loading="lazy">
            Координируем работу смежных организаций
        </p>
    </div>
    <button class="button-about button modal__KP">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>
</article>

<!-- ПЕРЕЧЕНЬ УСЛУГ -->
<article class="services">
    <div class="services__container">
        <h2 class="h1">Перечень услуг</h2>
        <div class="services__grid">
            <div class="service__item">
                <p class="h2">Полный демонтаж</p>
                <p class="h3">Убираем старые покрытия, перегородки, коммуникации. Вывозим мусор. Готовим «чистый лист» для нового проекта.</p>
            </div>
            <div class="service__item">
                <p class="h2">Черновые работы</p>
                <p class="h3">Выравнивание стен, потолков, устройство стяжки пола, монтаж каркасов под гипсокартон. Все — с учетом будущих нагрузок.</p>
            </div>
            <div class="service__item">
                <p class="h2">Инженерные системы</p>
                <p class="h3">Прокладка и монтаж электрики, вентиляции (особенно важно для кухни), водоснабжения, канализации, пожарной сигнализации.</p>
            </div>
            <div class="service__item">
                <p class="h2">Отделочные работы</p>
                <p class="h3">Укладка плитки, покраска стен, монтаж декоративных панелей, натяжные и подвесные потолки, укладка напольных покрытий.</p>
            </div>
            <div class="service__item">
                <p class="h2">Зонирование</p>
                <p class="h3">Установка перегородок, барных стоек, островов, зон ожидания — все по вашему дизайн-проекту.</p>
            </div>
            <div class="service__item">
                <p class="h2">Сантехника и освещение</p>
                <p class="h3">Монтаж раковин, смесителей, бойлеров, светильников, подсветки баров и столов.</p>
            </div>
            <div class="service__item">
                <p class="h2">Финальная уборка</p>
                <p class="h3">Вывозим весь строительный мусор, моем полы, стекла, оставляем помещение готовым к приемке.</p>
            </div>
            <div class="service__item">
                <p class="h2">Сдача под мебель</p>
                <p class="h3">Вы въезжаете с мебелью и оборудованием — мы уже все подготовили.</p>
            </div>
        </div>
    </div>
</article>

<!-- ОСОБЕННОСТИ РЕМОНТА -->
<article class="features">
    <div class="features__container">
        <h2 class="h1">Особенности ремонта помещений под рестораны</h2>
        <div class="features__content">
            <div class="feature__item">
                <p class="h2">Нагрузка на материалы</p>
                <p class="h3">Полы в зале должны выдерживать тысячи шагов в день. Стены у кухни — брызги жира и пара. Потолки — конденсат и тепло. Мы используем только профессиональные, сертифицированные покрытия.</p>
            </div>
            <div class="feature__item">
                <p class="h2">Инженерные системы</p>
                <p class="h3">Кухня без мощной вентиляции — это ад для персонала и штрафы от СЭС. Слабая электрика — риск отключения в час пик. Мы проектируем и монтируем инженерные коммуникации с запасом мощности.</p>
            </div>
            <div class="feature__item">
                <p class="h2">Планировка = прибыль</p>
                <p class="h3">Плохо спроектированная кухня увеличивает время подачи блюд. Неудобный бар — теряете клиентов. Мы продумываем логистику: как официант идет от кухни к столу, где ставить POS-терминал.</p>
            </div>
            <div class="feature__item">
                <p class="h2">Стиль = лояльность</p>
                <p class="h3">Дизайн интерьера — не «чтобы было красиво». Это инструмент удержания клиента. Мы подбираем цвета, текстуры, освещение так, чтобы посетитель чувствовал себя «как дома».</p>
            </div>
        </div>
    </div>
</article>

<!-- ЗОНЫ РЕМОНТА -->
<article class="zones">
    <div class="zones__container">
        <h2 class="h1">Какие зоны мы ремонтируем</h2>
        <div class="zones__grid">
            <div class="zone__item">
                <p class="h2">Обеденный зал</p>
                <p class="h3">Сердце вашего заведения — где рождается лояльность гостей. Мы делаем отделку ресторанов так, чтобы свет, цвет и текстуры создавали нужную атмосферу.</p>
            </div>
            <div class="zone__item">
                <p class="h2">Кухня</p>
                <p class="h3">Самая технически сложная зона — здесь решается 50% успеха. При ремонте ресторана мы усиливаем вентиляцию, монтируем жаропрочные покрытия.</p>
            </div>
            <div class="zone__item">
                <p class="h2">Барная зона</p>
                <p class="h3">Не просто стойка — точка продаж и атмосферы. При отделке кафе делаем акцент на стиль: подсветка, фактуры, удобное хранение бутылок.</p>
            </div>
            <div class="zone__item">
                <p class="h2">Санузлы</p>
                <p class="h3">Первое, что проверяют гости — и первое, что формирует впечатление. Мы используем антивандальные материалы, автоматику, принудительную вентиляцию.</p>
            </div>
            <div class="zone__item">
                <p class="h2">Веранда / летняя площадка</p>
                <p class="h3">Сезонная зона, которая должна работать в любую погоду. Напольное покрытие — не скользит под дождем, навес — защищает от солнца, обогрев — работает при +5°C.</p>
            </div>
            <div class="zone__item">
                <p class="h2">Зона ожидания / холл</p>
                <p class="h3">Первые 10 секунд — решают все. Мы создаем пространство, где гостю хочется остаться: удобные диваны, зарядки, Wi-Fi, приятный свет.</p>
            </div>
            <div class="zone__item">
                <p class="h2">Зона выдачи / кассовый узел</p>
                <p class="h3">Критически важная точка — здесь рождается впечатление о скорости и порядке. При ремонте делаем стойку эргономичной.</p>
            </div>
        </div>
    </div>
</article>

<!-- ЭТАПЫ РАБОТ -->
<article class="stages">
    <div class="stages__container">
        <h2 class="h1">Этапы работ</h2>
        <div class="stages__timeline">
            <div class="stage__item">
                <p class="h2">Бесплатный выезд и замер</p>
                <p class="h3">Мы приезжаем в любое удобное для вас время. Фиксируем габариты, особенности помещения, слушаем ваши пожелания.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Разработка дизайн-проекта и сметы</p>
                <p class="h3">На основе замеров готовим детальный расчет стоимости — без скрытых строк. Смету вы получаете за 1 день.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Подписание договора</p>
                <p class="h3">Фиксируем все: сроки, цену, гарантию, этапы оплаты. Никаких устных обещаний — только четкие условия в договоре.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Демонтаж и подготовка помещения</p>
                <p class="h3">Аккуратно убираем все старое — плитку, полы, перегородки, коммуникации. Сразу вывозим мусор.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Черновые работы и инженерка</p>
                <p class="h3">Самый важный этап — выравниваем стены и потолки, делаем стяжку, монтируем инженерные коммуникации.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Чистовая отделка и установка</p>
                <p class="h3">Здесь раскрывается стиль: укладываем плитку, красим стены, монтируем потолки, ставим светильники.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Финальная уборка и сдача объекта</p>
                <p class="h3">Моем полы, стекла, протираем все поверхности, вывозим последний мешок мусора. Приглашаем вас на приемку.</p>
            </div>
        </div>
    </div>
</article>

<!-- SCREEN_2 ABOUT-->
<article id="anchor-about" class="about">
    <h2 class="h1 about__title">Наши преимущества</h2>
    <p class="h1 about__title">Помогаем открыть заведение, которое эффективно функционирует и окупается: прорабатываем при строительстве все ключевые аспекты его успеха</p>
    <div class="about__item">
        <p class="h3 element-animation">
            <img src="/assets/icon/15.svg" alt="" loading="lazy">
            Закладываем основу окупаемости через технологический проект кухни
        </p>
        <p class="h3 element-animation">
            <img src="/assets/icon/18.svg" alt="" loading="lazy">
            Работаем на увеличение прибыли, создавая атмосферный дизайн интерьера
        </p>
        <p class="h3 element-animation">
            <img src="/assets/icon/7.svg" alt="" loading="lazy">
            Сокращаем бюджет строительства за счет оптимальных инженерных решений
        </p>
        <p class="h3 element-animation">
            <img src="/assets/icon/6.svg" alt="" loading="lazy">
            Укладывамся в срок и не выходим за бюджет сметы во время ремонта и СМР
        </p>
    </div>



    <div class="about__column">

        <div class="element-animation">
            <div>
                <!-- <img src="/assets/img/icon/Frame 34.svg" alt="" loading="lazy"> -->
                <p class="h1 about__column_2">Оптимизируем общий бюджет проектировочных решений</p>
            </div>
            <p class="h3">Находим технические решения для оптимизации расходов за счет богатого 7-летнего опыта проектирования и строительства ресторанов: от самых маленьких до двух- трехуровневых объектов большой площади.</p>
        </div>

        <div class="element-animation">
            <div>
                <!-- <img src="/assets/img/icon/Frame 34.svg" alt="" loading="lazy"> -->
                <p class="h1">Уберегаем от финансовых потерь из-за неточностей в проектировании</p>
            </div>
            <p class="h3">Делаем сквозной контроль всех разделов проектирования на предмет ошибок и наложений, исключая ошибки от перекрестного проектирования разными подрядчиками, которые приводят к увеличению общего бюджета строительства.</p>
        </div>

        <div class="element-animation">
            <div>
                <!-- <img src="/assets/img/icon/Frame 34.svg" alt="" loading="lazy"> -->
                <p class="h1">Быстро согласовываем рабочую документацию с администрацией здания</p>
            </div>
            <p class="h3">Накоплен большой опыт взаимодействия со службами эксплуатации ТЦ и БЦ. Знаем весь процесс согласования рабочей и сдачи исполнительной документации ТЦ/БЦ. Это позволяет быстро вносить в проект корректировки от администрации здания и оперативно согласовывать с ней все решения.</p>
        </div>

        <div class="element-animation">
            <div>
                <!-- <img src="/assets/img/icon/Frame 34.svg" alt="" loading="lazy"> -->
                <p class="h1">Создаем проект по которому не будет изменений в смете и сроках при СМР</p>
            </div>
            <p class="h3">Мы разрабатываем проекты в множество циклов, в каждом из которых происходят значительные изменения от первоначальной версии. Такой подход позволяет создать максимально-точный и грамотный проект, по которому не будет изменений в смете и сроках при строительстве.</p>
        </div>
    </div>
    <p class="h3 about-warning">*Данное предложение не является публичной офертой. Исполнитель – СитиСтрой – самостоятельно определяет объем услуг/работ на свое усмотрение. <br>Исполнитель -СитиСтрой- вправе отказаться от оказания данной услуги/проведении работ в любой момент без объяснения причин.</p>

    <button class="button-about button modal__KP">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>


</article>

<!-- ЦЕНЫ НА РЕМОНТ -->
<article class="prices">
    <div class="prices__container">
        <h2 class="h1">Цены на ремонт кафе и ресторанов</h2>
        <div class="prices__table">
            <div class="price__header">
                <div class="h2">ТИП РЕМОНТА</div>
                <div class="h2">ЦЕНА ОТ (ЗА м²)</div>
                <div class="h2">ЧТО ВКЛЮЧЕНО</div>
            </div>
            <div class="price__row">
                <div class="h3">Косметический</div>
                <div class="h3">от 5 500 ₽</div>
                <div class="h3">Обновление покрытий, покраска, замена сантехники, освещения</div>
            </div>
            <div class="price__row">
                <div class="h3">Капитальный</div>
                <div class="h3">от 9 800 ₽</div>
                <div class="h3">Полный демонтаж, замена коммуникаций, черновая и чистовая отделка</div>
            </div>
            <div class="price__row">
                <div class="h3">Дизайнерский</div>
                <div class="h3">от 14 000 ₽</div>
                <div class="h3">Индивидуальный дизайн-проект, авторские решения, премиальные материалы</div>
            </div>
        </div>
    </div>
</article>

<!-- ЦЕНЫ НА ОТДЕЛОЧНЫЕ РАБОТЫ -->
<article class="works-prices">
    <div class="works-prices__container">
        <h2 class="h1">Цены на отделочные работы</h2>
        <div class="works-prices__table">
            <div class="work-price__header">
                <div class="h2">ВИД РАБОТ</div>
                <div class="h2">ЦЕНА ОТ</div>
            </div>
            <div class="work-price__row">
                <div class="h3">Выравнивание стен</div>
                <div class="h3">от 450 ₽/м²</div>
            </div>
            <div class="work-price__row">
                <div class="h3">Устройство наливного пола</div>
                <div class="h3">от 600 ₽/м²</div>
            </div>
            <div class="work-price__row">
                <div class="h3">Монтаж подвесного потолка (ГКЛ)</div>
                <div class="h3">от 550 ₽/м²</div>
            </div>
            <div class="work-price__row">
                <div class="h3">Укладка керамической плитки</div>
                <div class="h3">от 800 ₽/м²</div>
            </div>
            <div class="work-price__row">
                <div class="h3">Поклейка виниловых обоев</div>
                <div class="h3">от 350 ₽/м²</div>
            </div>
            <div class="work-price__row">
                <div class="h3">Монтаж гипсокартонных перегородок</div>
                <div class="h3">от 1 200 ₽/м²</div>
            </div>
            <div class="work-price__row">
                <div class="h3">Покраска стен и потолков</div>
                <div class="h3">от 400 ₽/м²</div>
            </div>
            <div class="work-price__row">
                <div class="h3">Укладка ПВХ-плитки / ламината</div>
                <div class="h3">от 500 ₽/м²</div>
            </div>
            <div class="work-price__row">
                <div class="h3">Облицовка стен декоративным камнем</div>
                <div class="h3">от 1 100 ₽/м²</div>
            </div>
            <div class="work-price__row">
                <div class="h3">Монтаж панелей ПВХ / МДФ</div>
                <div class="h3">от 700 ₽/м²</div>
            </div>
        </div>
    </div>
</article>

<!-- ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ -->
<article class="additional-services">
    <div class="additional-services__container">
        <h2 class="h1">Закажите дополнительные услуги</h2>
        <div class="additional-services__grid">
            <div class="additional-service__item">
                <img src="/assets/img/remont/5.jpg" alt="Дизайн ресторанов и кафе" loading="lazy">
                <p class="h2">Дизайн ресторанов и кафе</p>
                <p class="h3">Создаем уникальный стиль: от концепции до деталей. Учитываем целевую аудиторию, локацию, бюджет.</p>
            </div>
            <div class="additional-service__item">
                <img src="/assets/img/remont/4.jpg" alt="Проектирование ресторанов" loading="lazy">
                <p class="h2">Проектирование ресторанов</p>
                <p class="h3">Не просто чертежи, а продуманная логистика: потоки посетителей, размещение оборудования, эргономика персонала.</p>
            </div>
            <div class="additional-service__item">
                <img src="/assets/img/remont/6.jpg" alt="Запуск ресторана под ключ" loading="lazy">
                <p class="h2">Запуск ресторана под ключ</p>
                <p class="h3">От ремонта до открытия: подбор поставщиков, обучение персонала, маркетинговое сопровождение (по запросу).</p>
            </div>
        </div>
    </div>
</article>

<!-- КОНСУЛЬТАЦИЯ -->
<article class="consultation">
    <div class="consultation__container">
        <h2 class="h1">Получите бесплатную консультацию</h2>
        <p class="h2">Оставьте заявку и мы свяжемся с вами в течение 15 минут для обсуждения вашего проекта</p>
        <button class="button modal__btn">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>
    </div>
</article>

<!-- SWIPER-TICKER Наши клиенты-->
<div class="swiper ticker">
    <p class="h1 ticker__name">НАШИ КЛИЕНТЫ</p>
    <div class="swiper-wrapper">
        <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (1).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (2).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../case/pasta.php"><img src="assets/img/logo_swiper/swiper (3).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../case/il_patio.php"><img src="assets/img/logo_swiper/swiper (4).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../case/miata-ostrov.php"><img src="assets/img/logo_swiper/swiper (5).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../case/bsb.php"><img src="assets/img/logo_swiper/swiper (6).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (7).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../case/bsb.php"><img src="assets/img/logo_swiper/swiper (8).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../case/costa.php"><img src="assets/img/logo_swiper/swiper (9).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (10).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (11).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../case/luna.php"><img src="assets/img/logo_swiper/swiper (12).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (13).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../case/il_&_geo.php"><img src="assets/img/logo_swiper/swiper (14).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../case/river.php"><img src="assets/img/logo_swiper/swiper (15).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../case/sinabon.php"><img src="assets/img/logo_swiper/swiper (16).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../case/il_&_geo.php"><img src="assets/img/logo_swiper/swiper (17).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (18).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (19).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (20).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (21).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (22).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (23).svg" alt="" loading="lazy"></div></a>
        <div class="swiper-slide ticker__slide"><a href="../case/niama_butovo.php"><img src="assets/img/logo_swiper/swiper (25).svg" alt="" loading="lazy"></div></a>
    </div>
</div>

<!-- Выполненные проекты -->
<?php
include('../components/carts.php')
?>

<?php
include('../components/licensii.php')
?>




<!-- --------------------------------------- -->

<!-- FOTTER -->
<?php
include('../components/footer.php')
?>


</body>
</html>