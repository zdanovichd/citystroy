<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
    <title>О компании | Ситистрой</title>
    <meta name="description" content="
        Ситистрой — профессиональная компания по ремонту, проектированию и дизайну офисов, магазинов, ресторанов и других коммерческих помещений. Реализуем проекты под ключ. Гарантия качества и соблюдение сроков.
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
            max-width: 1000px;
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


        /* Дополнительные стили для улучшения внешнего вида */

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #2980b9;
        }

        .highlight {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 8px;
            margin: 25px 0;
            border-left: 4px solid #3498db;
        }

        .services-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
            gap: 20px;
            margin: 30px 0;
        }

        .service-card {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .team-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
            gap: 25px;
            margin-top: 25px;
        }

        .team-card {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        .team-card h3 {
            color: #3498db;
            margin-top: 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 10px;
        }

        .advantages-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
            gap: 20px;
            margin: 40px 0;
        }

        .advantage-card {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .advantage-card h3 {
            color: #3498db;
        }

        .years-badge {
            background-color: #3498db;
            color: white;
            font-size: 24px;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 20px;
        }

        a {
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #2980b9;
            text-decoration: underline;
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

            .services-grid, .team-grid, .advantages-section {
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                gap: 20px;
                margin: 40px 0;
            }
            h3 {
                font-size: 20px;
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

    <h1>О компании</h1>

    <div class="highlight">
        <div class="years-badge">7 лет успешной работы</div>
        <p>На протяжении 7 лет разрабатываем комплексные решения для ресторанного бизнеса</p>
    </div>

    <h2>Наши услуги</h2>

    <div class="services-grid">
        <div class="service-card">
            <h3>Дизайн-проекты</h3>
            <p>Создаем уникальные интерьеры, отражающие концепцию заведения</p>
        </div>

        <div class="service-card">
            <h3>Технологические проекты</h3>
            <p>Разрабатываем эффективные планировочные решения</p>
        </div>

        <div class="service-card">
            <h3>Кухонное оборудование</h3>
            <p>Подбираем и проектируем размещение профессионального оборудования</p>
        </div>

        <div class="service-card">
            <h3>Рабочая документация</h3>
            <p>Подготавливаем полный пакет документации по всем инженерным разделам</p>
        </div>
    </div>

    <div class="highlight">
        <p>Мы готовим и сдаем исполнительную документацию, запускаем объекты в эксплуатацию</p>
    </div>

    <h2>Наша команда</h2>
    <p>Мы собрали коллектив, «заточенный» на рестораны:</p>

    <div class="team-grid">
        <div class="team-card">
            <h3>Инженеры и проектировщики</h3>
            <p>Весь состав ИТР нашей компании с высшим строительным и инженерным образованием.</p>
        </div>

        <div class="team-card">
            <h3>Дизайнеры</h3>
            <p>Наши дизайнеры имеют множественный успешный опыт ресторанных проектов.</p>
        </div>

        <div class="team-card">
            <h3>Технологи</h3>
            <p>Многие технологи помимо технического образования, до нас долго работали поварами в ресторане и знают
                изнутри как сделать правильно и удобно, а значит у команды ресторана есть где вкладывать душу в работу,
                что напрямую отражается на качестве кухни и репутации ресторана.</p>
        </div>

        <div class="team-card">
            <h3>Строители</h3>
            <p>Команда строителей обладает разносторонней квалификацией и имеет опыт в ремонте ресторанов, умеет
                воплотить все задумки дизайнера и пожелания Заказчика.</p>
        </div>
    </div>

    <h2>Наши преимущества</h2>

    <div class="advantages-section">
        <div class="advantage-card">
            <h3>Опыт работы с ТЦ</h3>
            <p>Хорошо представляем себе работу со службами эксплуатации ТЦ</p>
        </div>

        <div class="advantage-card">
            <h3>Проектирование и согласование</h3>
            <p>Знаем, как спроектировать и согласовать все разделы проектов</p>
        </div>

        <div class="advantage-card">
            <h3>Нестандартные решения</h3>
            <p>Умеем договориться с инженерами ТЦ о нестандартных решениях</p>
        </div>

        <div class="advantage-card">
            <h3>Документация</h3>
            <p>Заранее готовим исполнительную документацию</p>
        </div>
    </div>

    <div class="highlight">
        <p>А ЕЩЕ</p>
        <p>Часто мы сдаем свои объекты службам ТЦ до открытия и запуска в эксплуатацию самого ТЦ.
            Это снижает риски владельцев ТЦ, а их команде легче управлять своими критическими линиями.</p>
    </div>

    <h2>Наш подход к работе</h2>
    <p>Для своевременного исполнения своих обязательств всеми участниками, мы:</p>

    <div class="services-grid">
        <div class="service-card">
            <h3>Координируем работу</h3>
            <p>всех смежных организаций, контролируем их.</p>
        </div>

        <div class="service-card">
            <h3>Следим за графиком</h3>
            <p>производства работ.</p>
        </div>

        <div class="service-card">
            <h3>Контролируем</h3>
            <p>технические задания на производство изделий.</p>
        </div>

        <div class="service-card">
            <h3>Склеиваем процесс</h3>
            <p>весь процесс для достижения одного общего результата.</p>
        </div>
    </div>
    <div class="contact-info">
        <p><strong>Электронная почта:</strong> <a href="mailto:csfitout@gmail.com">csfitout@gmail.com</a></p>
        <p><strong>Телефон:</strong> +7(926)363-42-78, +7(495)109-29-96</p>
        <p><strong>Юридический адрес:</strong> 121087, г. Москва, Береговой проезд, д.7, офис 3</p>
        <p><strong>ИНН:</strong> 7730212956</p>
        <p><strong>ОГРН:</strong> 1167746840117</p>
        <p><strong>КПП:</strong> 773001001</p>
        <p><strong>Код организации по ОКПО:</strong> 04440612</p>
    </div>

    <div class="footer">
        <p>ООО «СитиСтрой» — создание коммерческих пространств</p>
        <p>Ваше доверие — наша репутация.</p>
    </div>

    <a href="/" class="back-button">Вернуться на главную</a>
</div>

<!-- FOTTER -->
<?php
include('../components/footer.php')
?>

</body>
</html>
