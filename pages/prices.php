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

        @media (max-width: 768px) {
            .policy {
                padding: 25vw 15px 15px;
            }
            .policy h1, .policy h2 {
                font-size: 28px;
            }
            .policy p, .policy li, .policy a {
                font-size: 18px;
    </style>
</head>
<!-- PRELOADER -->
<?php
include('../components/preloader.php')
?>
<!-- HEADER -->
<?php
include('../components/header.php')
?>
<body>
<div class="container policy">
    <h1>Цены</h1>
    <p>“Тут добавим цены на услуги”</p>
</div>

<!-- FOTTER -->
<?php
include('../components/footer.php')
?>

</body>
</html>
