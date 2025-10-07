<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
    <meta name="description" content="Профессиональный ремонт боулинг-клубов в Москве по доступным ценам. Комплексное обновление дорожек, оборудования и интерьера под ключ. Гарантия качества, сжатые сроки, индивидуальный подход — доверьтесь экспертам «СитиСтрой»!">
    <title>Ремонт боулинга в Москве - заказать ремонт боулинг-клуба по доступной цене | СитиСтрой</title>
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
                <h1 class="h1">Ремонт боулингов в Москве</h1>
            </div>
            <div class="h2" style="max-width: 1200px;">
                <p>Не просто ремонт — продление жизни вашего боулинг-клуба. Мы знаем, где ломаются пинспоттеры, как модернизировать скоринг и сделать интерьер, от которого не уходят гости.</p>
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
            <img src="/assets/img/other/другие услуги боулинг.webp" alt="" loading="lazy" class="_img">
        </div>
</article>

<!-- SCREEN_2 Наши преимущества-->
<article id="smr_about" class="about">
    <p class="h1 about__title" style="text-align: left;max-width: 1300px;">Ремонт боулинга в Москве — это не покраска стен. Это комплекс: от восстановления дорожек и настройки пинспоттеров до обновления системы скоринга и дизайна интерьера. СитиСтрой — для владельцев клубов, кто хочет снизить расходы на обслуживание, увеличить поток гостей и избежать простоев. Заказать ремонт — значит получить клуб, который работает без сбоев.</p>
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
                <p class="h2">Ремонт и модернизация дорожек</p>
                <p class="h3">Шлифуем, полируем, выравниваем поверхность по заводским стандартам — даже 1 мм перекоса влияет на траекторию шара и настроение игроков. Заменяем изношенные покрытия, наносим профессиональное масло — чтобы дорожки служили дольше и вели себя предсказуемо при любой интенсивности.</p>
            </div>
            <div class="service__item">
                <p class="h2">Ремонт и настройка пинспоттеров</p>
                <p class="h3">Разбираем механизмы, меняем изношенные узлы — рычаги, датчики, конвейеры, крепления. Работаем с оборудованием Brunswick, QubicaAMF, Murrey — знаем слабые места каждой модели. После ремонта проводим нагрузочное тестирование — минимум 100 бросков на дорожку, чтобы убедиться: все работает без сбоев.</p>
            </div>
            <div class="service__item">
                <p class="h2">Обновление системы скоринга</p>
                <p class="h3">Меняем устаревшие мониторы на сенсорные, обновляем ПО, синхронизируем систему с кассой, CRM и мобильными приложениями. Добавляем функции: статистика игр, турнирные таблицы, интеграция с соцсетями — чтобы гости делились результатами и возвращались снова.</p>
            </div>
            <div class="service__item">
                <p class="h2">Ремонт инженерных систем</p>
                <p class="h3">Усиливаем электрику — пинспоттеры и скоринг требуют стабильного питания. Модернизируем вентиляцию — особенно в зоне оборудования, где скапливается тепло и пыль. Прокладываем резервные линии — чтобы одна поломка не вывела из строя весь клуб.</p>
            </div>
            <div class="service__item">
                <p class="h2">Дизайн и отделка интерьера</p>
                <p class="h3">Обновляем не только зал, но и фойе, бар, санузлы, зону ожидания — именно там решается, останется ли гость на второй час. Используем износостойкие, легко моющиеся материалы, добавляем LED-подсветку, фотозоны, тематические элементы — чтобы клуб выглядел современно и «инстаграмно».</p>
            </div>
            <div class="service__item">
                <p class="h2">Замена расходных материалов</p>
                <p class="h3">Подбираем профессиональные масла для дорожек, запчасти для пинспоттеров, фильтры для вентиляции, элементы декора — все в одном заказе. Работаем с проверенными поставщиками — не экономим на качестве, потому что дешевые материалы убивают оборудование быстрее, чем поломки.</p>
            </div>
            <div class="service__item">
                <p class="h2">Обучение персонала</p>
                <p class="h3">Проводим инструктаж для администраторов и техников: как правильно обслуживать дорожки, когда менять масло, какие узлы пинспоттеров чаще всего ломаются. Даем чек-листы и контакты службы поддержки — чтобы ваш персонал мог решать 80% проблем без вызова специалистов.</p>
            </div>
        </div>
    </div>
</article>

<!-- ОСОБЕННОСТИ РЕМОНТА -->
<article class="features">
    <div class="features__container">
        <h2 class="h1">Особенности ремонта помещений для боулинга</h2>
        <div class="features__content">
            <div class="feature__item">
                <p class="h2">Высокая нагрузка на оборудование</p>
                <p class="h3">Пинспоттеры работают по 12 часов в день. Мы не просто чиним — модернизируем узлы, чтобы снизить износ.</p>
            </div>
            <div class="feature__item">
                <p class="h2">Точность дорожек</p>
                <p class="h3">Залог лояльности — даже 1 мм перекоса — и игроки уходят. Мы восстанавливаем геометрию по заводским стандартам.</p>
            </div>
            <div class="feature__item">
                <p class="h2">Система скоринга = лицо клуба</p>
                <p class="h3">Устаревший интерфейс отпугивает молодежь. Обновляем софт, ставим сенсорные экраны, интегрируем с мобильными приложениями.</p>
            </div>
            <div class="feature__item">
                <p class="h2">Освещение и вентиляция</p>
                <p class="h3">Влияют на комфорт — делаем зональное освещение над дорожками, усиливаем вентиляцию в зоне оборудования.</p>
            </div>
            <div class="feature__item">
                <p class="h2">Дизайн</p>
                <p class="h3">Не для красоты, а для удержания — обновляем интерьер так, чтобы гости оставались после игры: бар, диваны, фотозоны, музыкальная подсветка.</p>
            </div>
            <div class="feature__item">
                <p class="h2">Сроки</p>
                <p class="h3">Критичны — каждый день простоя = упущенная выручка. Работаем ночью, посменно, без остановки всего клуба — ремонтируем по дорожкам.</p>
            </div>
        </div>
    </div>
</article>

<!-- ЭТАПЫ РАБОТ -->
<article class="stages">
    <div class="stages__container">
        <h2 class="h1">Этапы ремонта боулинг-клуба</h2>
        <div class="stages__timeline">
            <div class="stage__item">
                <p class="h2">Бесплатная диагностика + консультация</p>
                <p class="h3">Приезжаем в любое время. Проверяем состояние дорожек, пинспоттеров, системы скоринга. Фиксируем износ, делаем фото, даем рекомендации. </p>
            </div>
            <div class="stage__item">
                <p class="h2">Расчет стоимости + составление проекта</p>
                <p class="h3">Готовим смету с разбивкой по работам и материалам. Предлагаем 2–3 варианта: эконом, стандарт, премиум. Согласовываем каждый пункт — без скрытых платежей.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Подписание договора</p>
                <p class="h3">Фиксируем сроки, цену, гарантию, этапы оплаты. Прописываем ответственность за оборудование — особенно важно при работе с импортными моделями.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Ремонт дорожек и оборудования</p>
                <p class="h3">Шлифуем, полируем, выравниваем дорожки. Меняем изношенные узлы пинспоттеров, настраиваем механику. Тестируем под нагрузкой — до 100 бросков на дорожку.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Обновление системы скоринга и инженерки</p>
                <p class="h3">Устанавливаем новое ПО, мониторы, серверы. Прокладываем кабели, усиливаем электрику, настраиваем вентиляцию. Интегрируем с кассовой системой и CRM.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Отделка интерьера + зонирование</p>
                <p class="h3">Обновляем стены, потолки, полы в фойе, баре, санузлах. Добавляем LED-подсветку, фотозоны, звукоизоляцию. Создаем атмосферу — не просто «зал», а место, куда хочется вернуться.</p>
            </div>
            <div class="stage__item">
                <p class="h2">Финальная настройка + обучение персонала</p>
                <p class="h3">Проверяем все дорожки, пинспоттеры, скоринг — под реальными условиями. Обучаем администраторов и техников — как обслуживать, когда звонить, какие запчасти держать в наличии. Передаем клуб — готовый к открытию.</p>
            </div>
        </div>
    </div>
</article>

<!-- ЦЕНЫ НА РЕМОНТ -->
<article class="prices">
    <div class="prices__container">
        <h2 class="h1">Цены на ремонт боулингов в Москве</h2>
        <div class="prices__table">
            <div class="price__header">
                <div class="h2">ВИД РАБОТ</div>
                <div class="h2">ЦЕНА ОТ</div>
            </div>
            <div class="price__row">
                <div class="h3">Ремонт одной боулинг-дорожки</div>
                <div class="h3">от 85 000 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Настройка/ремонт пинспоттера</div>
                <div class="h3">от 45 000 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Модернизация системы скоринга</div>
                <div class="h3">от 120 000 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Замена расходных материалов (комплекс)</div>
                <div class="h3">от 25 000 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Дизайн-проект интерьера</div>
                <div class="h3">от 60 000 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Капитальный ремонт зоны фойе</div>
                <div class="h3">от 180 000 ₽</div>
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

<!-- --------------------------------------- -->

<!-- FOOTER -->
<?php
include('../components/footer.php')
?>


</body>
</html>