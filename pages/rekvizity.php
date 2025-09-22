<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
    <title>Наши реквизиты Ӏ Ситистрой</title>
    <meta name="description" content="
        Официальные банковские реквизиты, ИНН, КПП, ОГРН и юридический адрес Ситистрой для оплат, выставления счетов и делового сотрудничества. Актуальная информация для контрагентов.
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

        .requisites-block {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 8px;
            margin: 25px 0;
            border-left: 4px solid #3498db;
        }

        .requisites-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .requisites-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .requisites-item:last-child {
            border-bottom: none;
        }

        .requisites-title {
            font-weight: bold;
            color: #3498db;
            margin-bottom: 5px;
        }

        .contact-section {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 30px;
        }

        .contact-card {
            flex: 1;
            min-width: 250px;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        .contact-card h3 {
            color: #3498db;
            margin-top: 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 10px;
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
        }
    </style>
</head>
<!-- PRELOADER -->
<?php
include('../components/preloader.php')
?>
<body>
<!-- HEADER -->
<?php
include('../components/header.php')
?>


<div class="container policy">
    <h1>Наши реквизиты</h1>

    <div class="requisites-block">
        <div class="requisites-grid">
            <div class="requisites-item">
                <div class="requisites-title">Полное наименование фирмы:</div>
                <div>ООО «СитиСтрой»</div>
            </div>

            <div class="requisites-item">
                <div class="requisites-title">Директор:</div>
                <div>Богдан Сергей Зосимович</div>
            </div>

            <div class="requisites-item">
                <div class="requisites-title">Юридический адрес:</div>
                <div>121087, г. Москва, Береговой проезд, д.7, офис 3</div>
            </div>

            <div class="requisites-item">
                <div class="requisites-title">ИНН:</div>
                <div>7730212956</div>
            </div>

            <div class="requisites-item">
                <div class="requisites-title">ОГРН:</div>
                <div>1167746840117</div>
            </div>

            <div class="requisites-item">
                <div class="requisites-title">КПП:</div>
                <div>773001001</div>
            </div>

            <div class="requisites-item">
                <div class="requisites-title">Код организации по ОКПО:</div>
                <div>04440612</div>
            </div>

            <div class="requisites-item">
                <div class="requisites-title">Код ОКАТО:</div>
                <div>45268595000</div>
            </div>

            <div class="requisites-item">
                <div class="requisites-title">Наименование банка:</div>
                <div>ПАО «Сбербанк» г. Москва</div>
            </div>

            <div class="requisites-item">
                <div class="requisites-title">БИК:</div>
                <div>044525225</div>
            </div>

            <div class="requisites-item">
                <div class="requisites-title">Расч. счет:</div>
                <div>40702810038000029979</div>
            </div>

            <div class="requisites-item">
                <div class="requisites-title">Кор. счет:</div>
                <div>30101810038000000225</div>
            </div>
        </div>
    </div>

    <h2>Контакты</h2>

    <div class="contact-section">
        <div class="contact-card">
            <h3>Телефон</h3>
            <p>+7(926)363-42-78</p>
            <p>+7(495)109-29-96</p>
            <p>+7(499)390-29-22</p>
        </div>

        <div class="contact-card">
            <h3>E-mail</h3>
            <p><a href="mailto:csfitout@gmail.com">csfitout@gmail.com</a></p>
            <p><a href="mailto:office@citystroy-restaurants.ru">office@citystroy-restaurants.ru</a></p>
        </div>

        <div class="contact-card">
            <h3>Адрес и график работы</h3>
            <p>г. Москва, Береговой проезд, д. 7</p>
            <p>Пн-Сб: с 9-00 до 21-00</p>
            <p>Вс - выходной</p>
        </div>
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
