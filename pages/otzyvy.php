<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->

<head>
    <title> Отзывы о компании | Ситистрой</title>
    <meta name="description" content="
        Читайте честные отзывы владельцев бизнеса, арендаторов и управляющих:
        как мы проектируем, ремонтируем и сдаём коммерческие помещения «под ключ».
        Реальные кейсы, фото «до/после» и рекомендации от тех, кто уже доверился Ситистрой.
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

        .policy p,
        .policy ul {
            margin-bottom: 15px;
        }

        .policy ul {
            padding-left: 20px;
        }

        .policy h1,
        .policy h2 {
            font-size: 36px;
        }

        .policy p,
        .policy li,
        .policy a {
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

            .policy h1,
            .policy h2 {
                font-size: 28px;
            }

            .policy p,
            .policy li,
            .policy a {
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
        <section class="reviews" itemscope itemtype="https://schema.org/ItemList">
            <meta itemprop="name" content="Отзывы о компании Ситистрой" />
            <meta itemprop="itemListOrder" content="https://schema.org/ItemListOrderAscending" />
            <meta itemprop="numberOfItems" content="6" />

            <div class="reviews__header">
                <h1 class="h2 reviews__title">Отзывы</h1>
                <p class="h3 reviews__subtitle">
                    Узнайте, что говорят о нас люди, которые уже воспользовались нашими услугами
                </p>
            </div>

            <div class="reviews__slider">
                <div class="swiper reviews__swiper">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <article class="review" itemscope itemtype="https://schema.org/Review">
                                <div class="review__header">
                                    <div class="review__info">
                                        <p class="review__author-name" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                            <span itemprop="name">Василий</span>
                                        </p>
                                        <p class="review__author-position">
                                            <span>Владелец кофейни в центре Москвы</span>
                                        </p>
                                    </div>
                                    <div class="review__rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="review__content">
                                    <blockquote class="review__text" itemprop="reviewBody">
                                        Ребята из «Ситистрой» делали ремонт нашей новой кофейни на Пятницкой — и я до сих пор в восторге! Нам нужно было уложиться в 6 недель, потому что арендная ставка «горела», и они не просто уложились — сдали на два дня раньше. При этом ни одного косяка: ровные стены, идеальная подсветка барной стойки, даже розетки под кофемашину продумали заранее. Особенно порадовало, что прораб всегда был на связи и спокойно реагировал на наши «а можно вот так?». Спасибо, однозначно рекомендую!
                                    </blockquote>
                                </div>
                                <div class="review__footer">
                                    <time class="review__date" datetime="2024-09-28" itemprop="datePublished">28 сентября 2024</time>
                                </div>
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
                                    <meta itemprop="name" content="Ситистрой">
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="review" itemscope itemtype="https://schema.org/Review">
                                <div class="review__header">
                                    <div class="review__info">
                                        <p class="review__author-name" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                            <span itemprop="name">Александр</span>
                                        </p>
                                        <p class="review__author-position">
                                            <span>Управляющий фитнес-клубом в Бутово</span>
                                        </p>
                                    </div>
                                    <div class="review__rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="review__content">
                                    <blockquote class="review__text" itemprop="reviewBody">
                                        Делали капитальный ремонт фитнес-центра после прежних «мастеров», которые оставили нам протечки и кривой пол в зале. «Ситистрой» пришли, всё разобрали, составили честную смету без скрытых пунктов и за 2,5 месяца превратили помещение в современный клуб. Особенно сложно было с вентиляцией и звукоизоляцией между залом и студией — но инженер компании лично подбирал решения. Теперь у нас ни один сосед не жалуется на музыку, а клиенты хвалят чистоту и свет. Спасибо за профессионализм!
                                    </blockquote>
                                </div>
                                <div class="review__footer">
                                    <time class="review__date" datetime="2023-08-12" itemprop="datePublished">12 августа 2023</time>
                                </div>
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
                                    <meta itemprop="name" content="Ситистрой">
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="review" itemscope itemtype="https://schema.org/Review">
                                <div class="review__header">
                                    <div class="review__info">
                                        <p class="review__author-name" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                            <span itemprop="name">Георгий</span>
                                        </p>
                                        <p class="review__author-position">
                                            <span>Директор боулинг-центра в Марьино</span>
                                        </p>
                                    </div>
                                    <div class="review__rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="review__content">
                                    <blockquote class="review__text" itemprop="reviewBody">
                                        Нам нужно было полностью обновить боулинг: от входной группы до зоны отдыха и бара. Это не офис — тут и вибрации от дорожек, и повышенная нагрузка на полы, и сложная электрика. «Ситистрой» подошли системно: сначала — проект с учетом всех технических нюансов, потом — четкое соблюдение этапов. Особенно выручил их опыт: знали, какой ламинат выдержит тяжелые кресла, как сделать так, чтобы свет не слепил игроков. Результат — не просто красиво, а функционально. Рады, что выбрали именно этих подрядчиков!
                                    </blockquote>
                                </div>
                                <div class="review__footer">
                                    <time class="review__date" datetime="2024-10-23" itemprop="datePublished">23 октября 2024</time>
                                </div>
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
                                    <meta itemprop="name" content="Ситистрой">
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="review" itemscope itemtype="https://schema.org/Review">
                                <div class="review__header">
                                    <div class="review__info">
                                        <p class="review__author-name" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                            <span itemprop="name">Сергей</span>
                                        </p>
                                        <p class="review__author-position">
                                            <span>Запускал грузинское кафе в районе ВДНХ</span>
                                        </p>
                                    </div>
                                    <div class="review__rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="review__content">
                                    <blockquote class="review__text" itemprop="reviewBody">
                                        Мы — семья, решили открыть своё дело. Помещение маленькое, но душевное. Главное было — чтобы всё было по-домашнему, но при этом выдерживало поток гостей. «Ситистрой» сделали всё с душой: ручная роспись на стенах (по нашим эскизам!), деревянные лавки, как у бабушки во дворе, и даже печь для хачапури встроили в интерьер так, что она стала центром зала. На кухне — всё продумано до мелочей: от слива для бульонов до полок под глиняную посуду. А когда у нас сломался холодильник за день до открытия, один из ребят из бригады сам помог найти замену и подключил. Не подрядчики — семья.
                                    </blockquote>
                                </div>
                                <div class="review__footer">
                                    <time class="review__date" datetime="2024-03-09" itemprop="datePublished">09 марта 2024</time>
                                </div>
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
                                    <meta itemprop="name" content="Ситистрой">
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="review" itemscope itemtype="https://schema.org/Review">
                                <div class="review__header">
                                    <div class="review__info">
                                        <p class="review__author-name" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                            <span itemprop="name">Рустам</span>
                                        </p>
                                        <p class="review__author-position">
                                            <span>Открыл бургерную на Варшавке</span>
                                        </p>
                                    </div>
                                    <div class="review__rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="review__content">
                                    <blockquote class="review__text" itemprop="reviewBody">
                                        Мы стартовали с нуля — в подвале бывшего салона красоты. Там даже вентиляции толком не было! «Ситистрой» за 5 недель собрали все с нуля: и кухню под два гриля, и вытяжку, которая тянет дым от 200 бургеров в день, и даже отдельную зону для упаковки — чтобы не мешать сборке. А когда я сказал, что хочу «чтобы не выглядело как фастфуд, а как уютная забегаловка» — подобрали свет и дерево, от которых даже картонная упаковка смотрится стильно. Открылись в срок, остались только положительные эмоции!
                                    </blockquote>
                                </div>
                                <div class="review__footer">
                                    <time class="review__date" datetime="2025-08-14" itemprop="datePublished">14 августа 2025</time>
                                </div>
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
                                    <meta itemprop="name" content="Ситистрой">
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="review" itemscope itemtype="https://schema.org/Review">
                                <div class="review__header">
                                    <div class="review__info">
                                        <p class="review__author-name" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                            <span itemprop="name">Маргарита</span>
                                        </p>
                                        <p class="review__author-position">
                                            <span>Открыла минимаркет у метро «Бабушкинская»</span>
                                        </p>
                                    </div>
                                    <div class="review__rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="review__content">
                                    <blockquote class="review__text" itemprop="reviewBody">
                                        Помещение досталось «с наследством»: старые полы, розетки из 90-х, и запах, который не выветривался неделями. Нам нужно было все — и быстро, потому что аренда уже шла. Ситистрой пришли, за три дня разобрали все до бетона, и за 18 дней собрали магазин под ключ. Предложили несколько вариантов отделки под разный бюджет, поэтому было из чего выбрать. Цены адекватные, качество ремонта порадовало. Спасибо!
                                    </blockquote>
                                </div>
                                <div class="review__footer">
                                    <time class="review__date" datetime="2024-04-10" itemprop="datePublished">10 апреля 2024</time>
                                </div>
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
                                    <meta itemprop="name" content="Ситистрой">
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>

                <!-- External navigation buttons -->
                <div class="reviews__navigation">
                    <button class="reviews__button reviews__button--prev">
                        ←
                    </button>
                    <button class="reviews__button reviews__button--next">
                        →
                    </button>
                </div>
            </div>
        </section>
    </div>

    <!-- FOTTER -->
    <?php
    include('../components/footer.php')
    ?>

</body>

</html>