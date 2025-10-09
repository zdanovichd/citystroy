<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
    <title> Лицензии и сертификаты компании | Ситистрой</title>
    <meta name="description" content="
        Официальные лицензии, сертификаты соответствия и разрешения Ситистрой — гарантия качества, безопасности и законности всех работ по ремонту, проектированию и дизайну коммерческих помещений.
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
}
}

<div class="container policy">
    <article class="additional-services">
        <div class="additional-services__container">
            <h1 class="h1">Наши лицензии и сертификаты</h1>
            <div class="additional-services__grid">
                <div class="additional-service__item">
                    <img src="/assets/img/licensii/1.jpg" alt="" loading="lazy">
                </div>
                <div class="additional-service__item">
                    <img src="/assets/img/licensii/2.jpg" alt="" loading="lazy">
                </div>
                <div class="additional-service__item">
                    <img src="/assets/img/licensii/3.jpg" alt="" loading="lazy">
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
