<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
    <title> Гарантии | Ситистрой</title>
    <meta name="description" content="
        Ситистрой предоставляет официальные гарантии на все виды работ: от проектирования до финальной отделки.
        Фиксируем сроки, качество и ответственность в договоре — вы защищены даже после сдачи объекта.
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
        <h1>Гарантии</h1>
        <p>
            В компании Ситистрой мы не просто обещаем — мы гарантируем.
            Юридически закрепленная гарантия соблюдения сроков и сметы дает вам уверенность: проект
            будет завершен вовремя и в рамках согласованного бюджета — без скрытых расходов и неожиданных задержек.
        </p>
        <p>
            Кроме того, на все строительно-монтажные работы мы предоставляем гарантию 1 год — это наша забота о качестве каждого шва, каждой детали и каждого этапа.
            Если в течение этого времени возникнут вопросы — мы оперативно устраним недочеты за свой счёт.
        </p>
        <p>
            Доверяя нам, вы получаете не просто ремонт — вы получаете надежность, прозрачность и спокойствие.
            Ситистрой — строим с гарантией, работаем с ответственностью.
        </p>
    </div>

<!-- FOTTER -->
<?php
include('../components/footer.php')
?>

</body>
</html>
