<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
    <title> Цены на услуги | Ситистрой</title>
    <meta name="description" content="
        Актуальные цены на ремонт, дизайн и проектирование офисов,
        магазинов, ресторанов и других коммерческих помещений.
        Работаем по чётким сметам — без скрытых платежей.
        Рассчитайте стоимость вашего проекта онлайн или по запросу.
    ">
    <?php
    include('../components/head.php')
    ?>
    <style>
        .policy {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #ffffff;
            margin: 0 auto;
            padding: 22vw 20px 20px;
        }
        .policy h1 {
            color: #ffffff;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }
        .policy h2 {
            color: #ffffff;
            margin-top: 25px;
        }
        .policy p, .policy ul {
            margin-bottom: 15px;
        }
        .policy ul {
            padding-left: 20px;
        }
        .policy h1, .policy h2 {
            font-size: 36px;
        }
        .policy p, .policy li, .policy a {
            font-size: 24px;
        }
        .policy .contact-info {
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .policy .footer {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid #eee;
            text-align: center;
            font-style: italic;
            color: #7f8c8d;
        }

        .contact-card h3 {
            color: #3498db;
            margin-top: 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 10px;
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
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
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

        @media (max-width: 768px) {
            .policy {
                padding: 25vw 15px 15px;
            }
            .policy h1, .policy h2 {
                font-size: 28px;
            }
            .policy p, .policy li, .policy a {
                font-size: 18px;
            }
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

<div class="container policy">
    <!-- <h1>Цены</h1> -->
    <!-- Расценки на ремонт офисов по видам работ -->
<article class="prices">
    <div class="prices__container">
        <h1 class="h1">ПРАЙС-ЛИСТ</h1>
        <p class="h2">Демонтажные работы</p>
        <div class="prices__table">
            <div class="price__header">
                <div class="h2">НАИМЕНОВАНИЕ РАБОТ</div>
                <div class="h2">ЦЕНА ОТ</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж гипсокартонных перегородок</div>
                <div class="h3">от 250 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж штукатурки (до 2 см)</div>
                <div class="h3">от 300 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж старой плитки (стена/пол)</div>
                <div class="h3">от 350 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж подвесного потолка</div>
                <div class="h3">от 200 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж деревянного пола</div>
                <div class="h3">от 280 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж бетонной стяжки (до 5 см)</div>
                <div class="h3">от 450 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж сантехнических коммуникаций</div>
                <div class="h3">от 400 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж электропроводки (в штробе)</div>
                <div class="h3">от 150 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж дверных блоков</div>
                <div class="h3">от 600 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Вывоз строительного мусора (1 м³)</div>
                <div class="h3">от 800 ₽</div>
            </div>
        </div>
        <p class="h2">Электромонтажные работы</p>
        <div class="prices__table">
            <div class="price__row">
                <div class="h3">Прокладка кабеля в штробе (1 м)</div>
                <div class="h3">от 180 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж розетки/выключателя (с подрозетником)</div>
                <div class="h3">от 350 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Установка распределительной коробки</div>
                <div class="h3">от 400 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж светильника (точечного/подвесного)</div>
                <div class="h3">от 450 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Штробление под проводку (1 п.м.)</div>
                <div class="h3">от 200 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Сборка и монтаж электрощита (до 12 модулей)</div>
                <div class="h3">от 2 500 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Прокладка кабеля в кабель-канале (1 м)</div>
                <div class="h3">от 150 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Подключение вентилятора/вытяжки</div>
                <div class="h3">от 600 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Установка датчика движения</div>
                <div class="h3">от 700 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Прозвонка и проверка электролиний</div>
                <div class="h3">от 500 ₽</div>
            </div>
        </div>
        <p class="h2">Сантехнические работы</p>
        <div class="prices__table">
            <div class="price__row">
                <div class="h3">Установка смесителя</div>
                <div class="h3">от 800 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж унитаза (напольного/подвесного)</div>
                <div class="h3">от 1 200 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Установка раковины с тумбой</div>
                <div class="h3">от 1 500 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Замена полотенцесушителя</div>
                <div class="h3">от 1 800 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Прокладка водопроводных труб (1 м)</div>
                <div class="h3">от 400 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Прокладка канализационных труб (1 м)</div>
                <div class="h3">от 350 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Установка водонагревателя</div>
                <div class="h3">от 1 500 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Подключение посудомоечной/стиральной машины</div>
                <div class="h3">от 900 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Гидроизоляция пола в санузле (1 м²)</div>
                <div class="h3">от 300 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Опрессовка системы водоснабжения</div>
                <div class="h3">от 1 000 ₽</div>
            </div>
        </div>
        <p class="h2">Отделка стен</p>
        <div class="prices__table">
            <div class="price__row">
                <div class="h3">Штукатурка стен по маякам (1 м²)</div>
                <div class="h3">от 600 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Шпатлёвка стен под покраску (1 м²)</div>
                <div class="h3">от 350 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Поклейка обоев (винил/флизелин, 1 м²)</div>
                <div class="h3">от 300 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Покраска стен (1 слой, 1 м²)</div>
                <div class="h3">от 250 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж гипсокартона на каркас (1 м²)</div>
                <div class="h3">от 550 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Облицовка плиткой (керамика, 1 м²)</div>
                <div class="h3">от 800 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Устройство декоративной штукатурки (1 м²)</div>
                <div class="h3">от 700 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж ПВХ-панелей (1 м²)</div>
                <div class="h3">от 400 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Укладка керамогранита на стены (1 м²)</div>
                <div class="h3">от 900 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Грунтовка стен (1 м²)</div>
                <div class="h3">от 80 ₽</div>
            </div>
        </div>
        <p class="h2">Отделка потолков</p>
        <div class="prices__table">
            <div class="price__row">
                <div class="h3">Монтаж подвесного гипсокартонного потолка (1 м²)</div>
                <div class="h3">от 650 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Покраска потолка (1 слой, 1 м²)</div>
                <div class="h3">от 250 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж натяжного потолка (матовый, 1 м²)</div>
                <div class="h3">от 600 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Устройство армстронг-потолка (1 м²)</div>
                <div class="h3">от 500 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Шпатлёвка потолка под покраску (1 м²)</div>
                <div class="h3">от 400 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж точечных светильников в потолок</div>
                <div class="h3">от 450 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Грунтовка потолка (1 м²)</div>
                <div class="h3">от 80 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Демонтаж старого потолочного покрытия</div>
                <div class="h3">от 200 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Установка потолочного плинтуса (1 п.м.)</div>
                <div class="h3">от 150 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Устройство многоуровневого ГКЛ-потолка (1 м²)</div>
                <div class="h3">от 1 200 ₽</div>
            </div>
        </div>
        <p class="h2">Отделка полов</p>
        <div class="prices__table">
            <div class="price__row">
                <div class="h3">Устройство цементно-песчаной стяжки (1 м²)</div>
                <div class="h3">от 600 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Укладка ламината (1 м²)</div>
                <div class="h3">от 350 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Укладка плитки (керамика, 1 м²)</div>
                <div class="h3">от 800 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Укладка керамогранита (1 м²)</div>
                <div class="h3">от 900 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Укладка линолеума (1 м²)</div>
                <div class="h3">от 300 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Циклёвка и покрытие лаком паркета (1 м²)</div>
                <div class="h3">от 700 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Устройство наливного пола (1 м²)</div>
                <div class="h3">от 500 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Укладка ковролина (1 м²)</div>
                <div class="h3">от 400 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Монтаж теплого пола (электрический, 1 м²)</div>
                <div class="h3">от 800 ₽</div>
            </div>
            <div class="price__row">
                <div class="h3">Гидроизоляция пола (1 м²)</div>
                <div class="h3">от 250 ₽</div>
            </div>
        </div>
    </div>
</article>
</div>

<!-- FOTTER -->
<?php
include('../components/footer.php')
?>

</body>
</html>
