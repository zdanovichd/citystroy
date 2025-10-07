<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
    <meta name="description" content="Ремонт офисов под ключ в Москве от компании СитиСтрой — быстро, качественно, с фиксированной ценой за м². Индивидуальный дизайн, выезд замерщика и смета в день обращения. Идеальный офис — без хлопот и в срок!">
    <title>Ремонт офисов под ключ в Москве - заказать отделку офисных помещений цена м2 | СитиСтрой</title>
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

        /* Стили для FAQ */

    .faq {
        padding: 80px 0;
        background-color: #161616;
        color: #fff;
    }

    .faq__header {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .faq__container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .faq__title {
            font-size: 2.2rem;
            margin-bottom: 10px;
        }

        .faq__item {
            margin-bottom: 15px;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #eaeaea;
            transition: all 0.3s ease;
        }

        .faq__item:hover {
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        .faq__item:last-child {
            margin-bottom: 0;
        }

        details {
            width: 100%;
            background-color: #f9fbfd;
        }

        summary {
            padding: 20px;
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c3e50;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
            list-style: none;
            display: flex;
            align-items: center;
            background-color: #fff;
        }

        summary:hover {
            background-color: #f8fafc;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        summary::after {
            content: '+';
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.8rem;
            font-weight: 300;
            color: #4b6cb7;
            transition: transform 0.3s ease;
        }

        details[open] summary::after {
            content: '−';
            transform: translateY(-50%);
        }

        details[open] summary {
            background-color: #f0f7ff;
        }

        .faq__answer {
            padding: 0 20px 20px 20px;
            color: #555;
            line-height: 1.7;
            background-color: #f9fbfd;
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
                <h1 class="h1">Ремонт офисов под ключ в Москве</h1>
            </div>
            <div class="h2" style="max-width: 1200px;">
                <p>Не просто ремонт — создание пространства, где сотрудники работают эффективнее, а клиенты чувствуют надежность вашего бизнеса.</p>
            </div>

            <div class="title__button">
                <button class="button modal__btn">
                    ПОЛУЧИТЬ СМЕТУ
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
            <img src="/assets/img/remont/7.jpg" alt="" loading="lazy" class="_img">
        </div>
</article>

<!-- SCREEN_2 Наши преимущества-->
<article id="smr_about" class="about">
    <p class="h1 about__title" style="text-align: left;max-width: 1300px;">Ремонт офисов под ключ в Москве — это не замена обоев, а создание среды для продуктивности. Мы учитываем потоки сотрудников, зонирование, инженерные системы, стиль бренда. СитиСтрой выполняет косметический, капитальный, элитный и срочный ремонт — с выездом в день заявки, фиксированной ценой и гарантией. Работаем без остановки вашего бизнеса. Оставьте заявку — рассчитаем смету за 24 часа.</p>
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
        <p class="h3">Заказывая ремонт офиса, вы получаете готовое пространство — без головной боли, с фиксированной ценой и гарантией. Вот что входит в комплексный ремонт офиса под ключ:</p>
        <div class="services__grid">
            <div class="service__item">
                <p class="h2">Демонтаж + подготовка</p>
                <p class="h3">Убираем старые покрытия, перегородки, потолки, коммуникации — с вывозом мусора. Выравниваем стены, заливаем стяжку пола — основа для долговечной отделки офисов.</p>
            </div>
            <div class="service__item">
                <p class="h2">Инженерные системы</p>
                <p class="h3">Монтируем электрики, вентиляции, водоснабжение — с тестированием до чистовой. Особенно важно при капитальном ремонте офисов — чтобы потом не переделывать.</p>
            </div>
            <div class="service__item">
                <p class="h2">Зонирование пространства</p>
                <p class="h3">Ставим перегородки — стеклянные, ГКЛ, звукоизолированные. Делим на рабочие зоны, кабинеты, переговорки — по вашему проекту или поможем составить.</p>
            </div>
            <div class="service__item">
                <p class="h2">Чистовая отделка</p>
                <p class="h3">Красим стены, клеим обои, монтируем потолок, укладываем ламинат или плитку. Подбираем материалы под стиль и бюджет — даже для косметического ремонта офисов.</p>
            </div>
            <div class="service__item">
                <p class="h2">Освещение и розетки</p>
                <p class="h3">Устанавливаем светильники, розетки, выключатели — с зональным управлением. Важно для евроремонта офисов — где свет влияет на продуктивность.</p>
            </div>
            <div class="service__item">
                <p class="h2">Сантехника + уборка</p>
                <p class="h3">Ставим раковины, смесители, унитазы — даже в мини-кухнях. Затем — моем полы, стекла, вывозим мусор. Оставляем чисто — как после клининга.</p>
            </div>
            <div class="service__item">
                <p class="h2">Сдача + гарантия</p>
                <p class="h3">Приглашаем на приемку, подписываем акт, даем гарантию до 3 лет. Ваш офис — готов к работе. Это и есть настоящий ремонт офиса под ключ.</p>
            </div>
        </div>
    </div>
</article>

<!-- ВЫБЕРЕТЕ ТИП РЕМОНТА -->
<article class="additional-services">
    <div class="additional-services__container">
        <h2 class="h1">Выберите тип ремонта</h2>
        <div class="additional-services__grid">
            <div class="additional-service__item">
                <img src="/assets/img/other/косметический ремонт офиса.webp" alt="Косметический ремонт офисов" loading="lazy">
                <p class="h2">Косметический ремонт офисов</p>
                <p class="h3">Обновление без перепланировки: покраска, замена покрытий, освещения.</p>
            </div>
            <div class="additional-service__item">
                <img src="/assets/img/other/капитальный ремонт офиса.webp" alt="Капитальный ремонт офисов" loading="lazy">
                <p class="h2">Капитальный ремонт офисов</p>
                <p class="h3">Полная замена коммуникаций, черновая и чистовая отделка, монтаж перегородок.</p>
            </div>
            <div class="additional-service__item">
                <img src="/assets/img/other/элитный ремонт офиса.webp" alt="Элитный ремонт офисов" loading="lazy">
                <p class="h2">Элитный ремонт офисов</p>
                <p class="h3">Премиальные материалы, авторский дизайн, индивидуальные решения под статус компании.</p>
            </div>
        </div>
        <div class="additional-services__grid">
            <div class="additional-service__item">
                <img src="/assets/img/other/черновой ремонт офиса.webp" alt="Черновой ремонт офисов" loading="lazy">
                <p class="h2">Черновой ремонт офисов</p>
                <p class="h3">Подготовка под чистовую отделку: стяжка, штукатурка, разводка коммуникаций.</p>
            </div>
            <div class="additional-service__item">
                <img src="/assets/img/other/евроремонт офиса.webp" alt="Евроремонт офисов" loading="lazy">
                <p class="h2">Евроремонт офисов</p>
                <p class="h3">Европейские стандарты: скрытая проводка, многоуровневые потолки, теплые полы.</p>
            </div>
            <div class="additional-service__item">
                <img src="/assets/img/other/срочный ремонт офиса.webp" alt="Срочный ремонт офисов" loading="lazy">
                <p class="h2">Срочный ремонт офисов</p>
                <p class="h3">Выполним за 7–14 дней без потери качества, даже с работающим офисом.</p>
            </div>
        </div>
    </div>
</article>

<!-- ЭТАПЫ РАБОТ -->
<article class="stages">
    <div class="stages__container">
        <h2 class="h1">Этапы ремонта офисных помещений</h2>
        <div class="stages__timeline">
            <div class="stage__item">
                <p class="h2">Бесплатный выезд + замер</p>
                <p class="h3">Приезжаем в любое удобное время — даже в выходные. Фиксируем площадь, состояние стен, пола, потолка, коммуникаций. Слушаем ваши пожелания — это основа будущего проекта.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Разработка дизайн-проекта + сметы</p>
                <p class="h3">Готовим расчет стоимости с учетом типа отделки, материалов, сложности. Предлагаем 3D-визуализацию — чтобы вы видели результат до начала работ. Смету согласовываем по каждой строке — без “потом доплатите”. Именно так мы рассчитываем стоимость отделки офисных помещений — честно и прозрачно.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Подписание договора</p>
                <p class="h3">Фиксируем сроки, цену, этапы оплаты, гарантию. Никаких устных обещаний — только юридически значимый договор. Особенно важно при ремонте офисных помещений — где каждый день простоя = упущенная прибыль.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Демонтаж + подготовка</p>
                <p class="h3">Аккуратно убираем все старое — демонтируем покрытия, перегородки, неисправную электрику. Сразу вывозим мусор — не складируем на объекте. Готовим “чистый лист” для нового проекта.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Черновые работы</p>
                <p class="h3">Самый важный этап — от него зависит долговечность. Выравниваем стены по маякам, делаем стяжку пола, монтируем каркасы, прокладываем инженерные коммуникации — электромонтажные работы, вентиляции, водоснабжение. Всё тестируем до чистовой отделки.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Чистовая отделка</p>
                <p class="h3">Раскрываем стиль: красим стены, клеим обои, укладываем ламинат или плитку, монтируем потолок, устанавливаем освещение и сантехнику. Работаем строго по дизайн-проекту — цвета, фактуры, текстуры — все, как вы утвердили.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Сдача объекта</p>
                <p class="h3">Моем полы, стекла, протираем все поверхности. Приглашаем вас на приемку — подписываем акт, передаем ключи, даем гарантию до 3 лет. Ваш офис — готов к работе. Без грязи, без пыли, без сюрпризов.</p>
            </div>
        </div>
    </div>
</article>

<!-- Виды ремонта офиса -->
<article class="additional-services">
    <div class="additional-services__container">
        <h2 class="h1">Виды ремонта офиса</h2>
        <div class="additional-services__grid">
            <div class="additional-service__item">
                <img src="/assets/img/other/косметический ремонт офиса.webp" alt="Косметический ремонт офисов" loading="lazy">
                <p class="h2">Косметический ремонт</p>
                <p class="h3">Идеален для обновления интерьера без остановки работы. Включает покраску стен, замену напольных покрытий, обновление освещения и сантехники. Минимум пыли, срок — 7–14 дней. Стоимость ремонта офиса — от 4 200 ₽/м². Быстро, бюджетно, эффективно.</p>
            </div>
            <div class="additional-service__item">
                <img src="/assets/img/other/капитальный ремонт офиса.webp" alt="Капитальный ремонт офисов" loading="lazy">
                <p class="h2">Капитальный ремонт</p>
                <p class="h3">Полная перезагрузка: замена всех инженерных систем, монтаж новых перегородок, черновая и чистовая отделка. Подходит при смене концепции, после долгой эксплуатации или при перепланировке. Ремонт офиса такого типа — инвестиция в комфорт и имидж. Цена — от 8 500 ₽/м².</p>
            </div>
            <div class="additional-service__item">
                <img src="/assets/img/other/элитный ремонт офиса.webp" alt="Элитный ремонт офисов" loading="lazy">
                <p class="h2">Элитный ремонт</p>
                <p class="h3">Для компаний, где интерьер — часть бренда. Используем премиальные материалы, авторский дизайн интерьера, скрытые технологии, эксклюзивную мебели. Подчеркивает статус, впечатляет клиентов. Отделка офисов такого уровня — это искусство. Цена — от 15 000 ₽/м².</p>
            </div>
        </div>
        <div class="additional-services__grid">
            <div class="additional-service__item">
                <img src="/assets/img/other/черновой ремонт офиса.webp" alt="Черновой ремонт офисов" loading="lazy">
                <p class="h2">Черновой ремонт</p>
                <p class="h3">База под чистовую отделку. Включает выравнивание стен, устройство стяжки, монтаж электрики и вентиляции. Часто заказывают застройщики или арендодатели перед сдачей помещения. Ремонт под офис начинается именно с этого этапа. Цена — от 3 000 ₽/м².</p>
            </div>
            <div class="additional-service__item">
                <img src="/assets/img/other/евроремонт офиса.webp" alt="Евроремонт офисов" loading="lazy">
                <p class="h2">Евроремонт офисов</p>
                <p class="h3">Современные европейские стандарты: скрытая разводка, многоуровневые потолок, теплые полы, звукоизоляция, автоматизация освещения. Удобно, стильно, технологично. Подходит для IT-компаний, коворкингов, юридических фирм. Цена — от 11 000 ₽/м².</p>
            </div>
            <div class="additional-service__item">
                <img src="/assets/img/other/срочный ремонт офиса.webp" alt="Срочный ремонт офисов" loading="lazy">
                <p class="h2">Срочный ремонт</p>
                <p class="h3">Нужно все вчера? Сделаем. Работаем посменно, ночью, в выходные. Минимум шума, пыли и простоев. Офисный ремонт выполним за 7–14 дней без потери качества. Идеально для арендаторов с жесткими сроками. Цена — от 6 500 ₽/м².</p>
            </div>
        </div>
    </div>
</article>

<!-- ЦЕНЫ НА РЕМОНТ -->
<article class="prices">
    <div class="prices__container">
        <h2 class="h1">Цены на ремонт офисов в Москве</h2>
        <div class="prices__table">
            <div class="price__header">
                <div class="h2">ВИД РЕМОНТА</div>
                <div class="h2">ЦЕНА ОТ (ЗА м²)</div>
                <div class="h2">ЧТО ВХОДИТ</div>
            </div>
            <div class="price__row">
                <div class="h3">Косметический ремонт офисов</div>
                <div class="h3">от 4 200 ₽</div>
                <div class="h3">Покраска стен, замена покрытий, освещения, сантехники — без перепланировки</div>
            </div>
            <div class="price__row">
                <div class="h3">Капитальный ремонт офисов</div>
                <div class="h3">от 8 500 ₽</div>
                <div class="h3">Полный демонтаж, замена коммуникаций, черновая и чистовая отделка, монтаж перегородок</div>
            </div>
            <div class="price__row">
                <div class="h3">Элитный ремонт</div>
                <div class="h3">от 15 000 ₽</div>
                <div class="h3">Премиальные материалы, дизайнерские решения, авторский проект, эксклюзивная мебель</div>
            </div>
            <div class="price__row">
                <div class="h3">Черновой ремонт</div>
                <div class="h3">от 3 000 ₽</div>
                <div class="h3">Стяжка, штукатурка, разводка электрики, вентиляции — под чистовую отделку</div>
            </div>
            <div class="price__row">
                <div class="h3">Евро ремонт офисов</div>
                <div class="h3">от 11 000 ₽</div>
                <div class="h3">Скрытая проводка, многоуровневые потолки, теплые полы, звукоизоляция, автоматизация</div>
            </div>
            <div class="price__row">
                <div class="h3">Срочный ремонт</div>
                <div class="h3">от 6 500 ₽</div>
                <div class="h3">Ускоренные сроки, работа в нерабочее время, минимум пыли — без остановки бизнеса</div>
            </div>
        </div>
    </div>
</article>

<!-- Расценки на ремонт офисов по видам работ -->
<article class="prices">
    <div class="prices__container">
        <h2 class="h1">Расценки на ремонт офисов по видам работ</h2>
        <p class="h2">Демонтажные работы</p>
        <div class="prices__table">
            <div class="price__header">
                <div class="h2">ВИД РАБОТ</div>
                <div class="h2">ЦЕНА ОТ</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж старых перегородок</div>
                <div class="h3">от 350 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж напольных покрытий</div>
                <div class="h3">от 200 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж подвесных потолков</div>
                <div class="h3">от 180 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж сантехники</div>
                <div class="h3">от 800 ₽/точка</div>
            </div>
            <div class="price__row">
                <div class="h3">Вывоз строительного мусора</div>
                <div class="h3">от 2 500 ₽/м³</div>
            </div>
        </div>
        <p class="h2">Потолок</p>
        <div class="prices__table">
            <div class="price__header">
                <div class="h2">ВИД РАБОТ</div>
                <div class="h2">ЦЕНА ОТ</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж подвесного потолка ГКЛ</div>
                <div class="h3">от 500 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Натяжной потолок</div>
                <div class="h3">от 650 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Покраска потолка</div>
                <div class="h3">от 250 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж точечных светильников</div>
                <div class="h3">от 450 ₽/шт</div>
            </div>
            <div class="price__row">
                <div class="h3">Звукоизоляция потолка</div>
                <div class="h3">от 800 ₽/м²</div>
            </div>
        </div>
        <p class="h2">Стены</p>
        <div class="prices__table">
            <div class="price__header">
                <div class="h2">ВИД РАБОТ</div>
                <div class="h2">ЦЕНА ОТ</div>
            </div>
            <div class="price__row">
                <div class="h3">Выравнивание стен по маякам</div>
                <div class="h3">от 450 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Покраска стен</div>
                <div class="h3">от 300 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Поклейка обоев</div>
                <div class="h3">от 350 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж перегородок ГКЛ</div>
                <div class="h3">от 1 100 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Облицовка декоративными панелями</div>
                <div class="h3">от 900 ₽/м²</div>
            </div>
        </div>
        <p class="h2">Пол</p>
        <div class="prices__table">
            <div class="price__header">
                <div class="h2">ВИД РАБОТ</div>
                <div class="h2">ЦЕНА ОТ</div>
            </div>
            <div class="price__row">
                <div class="h3">Устройство стяжки</div>
                <div class="h3">от 550 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Укладка ламината</div>
                <div class="h3">от 400 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Укладка ковролина</div>
                <div class="h3">от 350 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Укладка плитки</div>
                <div class="h3">от 750 ₽/м²</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж теплого пола</div>
                <div class="h3">от 1 200 ₽/м²</div>
            </div>
        </div>
        <p class="h2">Сантехнические работы</p>
        <div class="prices__table">
            <div class="price__header">
                <div class="h2">ВИД РАБОТ</div>
                <div class="h2">ЦЕНА ОТ</div>
            </div>
            <div class="price__row">
                <div class="h3">Установка раковины</div>
                <div class="h3">от 1 500 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж смесителя</div>
                <div class="h3">от 1 200 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Замена труб водоснабжения</div>
                <div class="h3">от 800 ₽/п.м.</div>
            </div>
            <div class="price__row">
                <div class="h3">Установка унитаза</div>
                <div class="h3">от 2 500 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Подключение бойлера</div>
                <div class="h3">от 3 000 ₽</div>
            </div>
        </div>
        <p class="h2">Электромонтажные работы</p>
        <div class="prices__table">
            <div class="price__header">
                <div class="h2">ВИД РАБОТ</div>
                <div class="h2">ЦЕНА ОТ</div>
            </div>
            <div class="price__row">
                <div class="h3">Прокладка кабеля</div>
                <div class="h3">от 120 ₽/п.м.</div>
            </div>
            <div class="price__row">
                <div class="h3">Установка розеток</div>
                <div class="h3">от 450 ₽/шт</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж щитка</div>
                <div class="h3">от 4 500 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Установка светильников</div>
                <div class="h3">от 600 ₽/шт</div>
            </div>
            <div class="price__row">
                <div class="h3">Автоматизация освещения</div>
                <div class="h3">от 8 000 ₽/зона</div>
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

<!-- Выполненные проекты -->
<?php
include('../components/carts.php')
?>

<?php
include('../components/licensii.php')
?>

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

<!-- Отзывы -->
<?php
include('../components/reviews.php')
?>

<!-- Faq -->

<div class="faq">
        <div class="faq__header">
            <h2 class="h2 faq__title">FAQ</h2>
        </div>
        
        <div class="faq__container" itemscope itemtype="https://schema.org/FAQPage">
            <div class="faq__item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <details>
                    <summary>
                        <h3 class="h3" itemprop="name">Сколько стоит ремонт офиса?</h3>
                    </summary>
                    <div class="faq__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Стоимость ремонта офиса зависит от площади, состояния помещения, типа ремонта (косметический ремонт офисов или капитальный ремонт офисов) и выбранных материалов. Точный расчет — после выезда замерщика и составления сметы. Работаем с вашим бюджетом — предложим оптимальные решения без потери качества. Заказать ремонт офиса — значит получить фиксированную цену с первого дня.</p>
                        </div>
                    </div>
                </details>
            </div>
            <div class="faq__item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <details>
                    <summary>
                        <h3 class="h3" itemprop="name">Сколько времени занимает ремонт офиса?</h3>
                    </summary>
                    <div class="faq__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Косметический ремонт офисов — 7–14 дней. Капитальный ремонт офисов — 3–6 недель. Срочный ремонт — выполним за 7 дней. Сроки фиксируем в договоре. Работаем посменно, в выходные, ночью — чтобы не останавливать ваш бизнес. На каждом этапе — фотоотчет и контроль качества. Ремонт офисных помещений — наш профиль, мы знаем, как уложиться в срок.</p>
                        </div>
                    </div>
                </details>
            </div>
            <div class="faq__item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <details>
                    <summary>
                        <h3 class="h3" itemprop="name">Какие материалы лучше использовать?</h3>
                    </summary>
                    <div class="faq__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Для офиса — практичные, износостойкие, легко моющиеся. Для стен — виниловые обои или краска на водной основе. Для пола — ламинат 33 класса, ковролин или плитка. Для потолка — гипсокартон или натяжные конструкции. Подберем по вашему дизайн-проекту и бюджету — с сертификатами и гарантией. Все строительные материалы — от проверенных поставщиков. Отделка офисных помещений должна служить годами — поэтому экономим с умом.</p>
                        </div>
                    </div>
                </details>
            </div>
            <div class="faq__item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <details>
                    <summary>
                        <h3 class="h3" itemprop="name">Какие гарантии вы предоставляете?</h3>
                    </summary>
                    <div class="faq__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Даем гарантию до 3 лет на все виды работ — от демонтажа до установки освещения и сантехники. Если что-то пойдет не так — выедем и устраним бесплатно. Гарантия прописана в договоре. Также предоставляем проектную документацию и акты скрытых работ — все по закону. Отделка офисов под ключ — это не просто слова, а наша репутация.</p>
                        </div>
                    </div>
                </details>
            </div>
            <div class="faq__item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <details>
                    <summary>
                        <h3 class="h3" itemprop="name">Можно ли отремонтировать офис без остановки работы компании?</h3>
                    </summary>
                    <div class="faq__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Да. Комплексный ремонт офиса мы выполняем зонально — закрываем по одному блоку, остальные работают. Используем малопыльные технологии, вывозим мусор сразу, работаем ночью. Срочный ремонт — наша специализация. Сотрудники даже не заметят стройку — только обновленный интерьер утром. Согласуем график — чтобы не мешать работе. Ремонт офиса без простоев — это реально.</p>
                        </div>
                    </div>
                </details>
            </div>
            
        </div>
    </div>

<!-- --------------------------------------- -->

<!-- FOTTER -->
<?php
include('../components/footer.php')
?>


</body>
</html>