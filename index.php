<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->

<head>
	<meta name="description" content="Ремонт коммерческих помещений в Москве и МО под ключ — от проектирования до сдачи объекта. Дизайн, строительство, отделка: офисы, магазины, рестораны, боулинги, гостиницы, входные группы. Фиксированная цена, смета за 1 день, гарантия до 3 лет. СитиСтрой — на рынке с 2016 года. Звоните +7 (926) 363-42-78  рассчитаем все под ваш бюджет!">
	<title>Ремонт коммерческих помещений в Москве: дизайн, проектирование, строительство под ключ | Строительная компания “Ситистрой”</title>
	<?php
	include('components/head.php')
	?>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "WebPage",
		"@id": "https://citystroy-fit-out.ru/",
		"url": "https://citystroy-fit-out.ru/",
		"name": "Ремонт коммерческих помещений в Москве: дизайн, проектирование, строительство под ключ | Строительная компания \"Ситистрой\"",
		"datePublished": "2024-01-15",
		"dateModified": "2025-10-07",
		"description": "Ремонт коммерческих помещений в Москве и МО под ключ — от проектирования до сдачи объекта. Дизайн, строительство, отделка: офисы, магазины, рестораны, боулинги, гостиницы, входные группы. Фиксированная цена, смета за 1 день, гарантия до 3 лет. СитиСтрой — на рынке с 2016 года. Звоните +7 (926) 363-42-78 рассчитаем все под ваш бюджет!",
		"inLanguage": "ru-RU",
		"isPartOf": {
			"@type": "WebSite",
			"@id": "https://citystroy-fit-out.ru/#website",
			"url": "https://citystroy-fit-out.ru/",
			"name": "Строительная компания Ситистрой",
			"inLanguage": "ru-RU"
		},
		"breadcrumb": {
			"@type": "BreadcrumbList",
			"@id": "https://citystroy-fit-out.ru/#breadcrumb",
			"itemListElement": [
			{
				"@type": "ListItem",
				"position": 1,
				"name": "Главная страница",
				"item": "https://citystroy-fit-out.ru/"
			}
			]
		}
	}
	</script>
</head>

<body>
	<!-- PRELOADER -->
	<?php
	include('components/preloader.php')
	?>

	<!-- HEADER -->
	<?php
	include('components/header.php')
	?>

	<style>
		.menu__main>li:nth-child(1)>a {
			color: #28bbff;
			font-weight: 300;
		}

		.menu-mob_main>li:nth-child(1)>a {
			color: #28bbff;
			font-weight: 300;
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

		/* Адаптивность */
		@media (max-width: 768px) {

			.services__grid,
			.features__content,
			.zones__grid,
			.additional-services__grid {
				grid-template-columns: 1fr;
			}

			.price__header,
			.price__row,
			.work-price__header,
			.work-price__row {
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
			<div class="title__text">

				<div>
					<p class="h1"> ДИЗАЙН ПРОЕКТИРОВАНИЕ РЕМОНТ</p>
					<div class="swiper title__slide">
						<div class="swiper-wrapper title__item">

							<div class="swiper-slide">
								<p class="h1">РЕСТОРАНОВ</p>
							</div>
							<div class="swiper-slide">
								<p class="h1">МАГАЗИНОВ</p>
							</div>
							<div class="swiper-slide">
								<p class="h1">КАФЕ</p>
							</div>
							<div class="swiper-slide">
								<p class="h1">КОММЕРЧЕСКИХ ...</p>
							</div>
							<div class="swiper-slide">
								<p class="h1">ПОМЕЩЕНИЙ</p>
							</div>
						</div>
					</div>
				</div>

				<h1 class="h2">
					Строительство коммерческих помещений
					в Москве «под ключ»: <br>
					от дизайна и проектирования до пуска в эксплуатацию
				</h1>
			</div>

			<div class="title__button">
				<button class="button modal__btn">
					СВЯЗАТЬСЯ С НАМИ
				</button>
				<a href="#anchor-about">
					<div class="down"
						onmouseenter="down__button.play()"
						onmouseleave="down__button.stop()">
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
				<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/1.jpg.webp" alt="" loading="lazy"></div>
				<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/2.jpg.webp" alt="" loading="lazy"></div>
				<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/3.jpg.webp" alt="" loading="lazy"></div>
				<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/4.jpg.webp" alt="" loading="lazy"></div>
			</div>
		</div>

		<div class="video__con">
			<video class="video" loop="true" muted="true" autoplay="true" playsinline>
				<source src="/assets/video/City.mp4" type="video/mp4">
			</video>
		</div>

	</article>


	<!-- SCREEN_2 ABOUT-->
	<article id="anchor-about" class="about">

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


	<!-- SWIPER-TICKER -->
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


	<!-- INFO -->
	<div class="info-con">

		<div class="info-block_1">
			<h2 class="h1 info_title">О Нас</h2>
			<div class="title__text">
				<p class="h2" style="max-width: 1200px;">СитиСтрой — ваш надежный партнер по ремонту коммерческих помещений с 2016 года.</p>
				<p class="h2" style="max-width: 1200px;">Мы — не просто строительная бригада. Мы — команда профессионалов, которая с 2016 года занимается ремонтом коммерческой недвижимости в Москве и Московской области. За 9 лет мы отремонтировали сотни объектов: от ресторанов и офисов — до боулингов, картингов, детских парков и кинотеатров.</p>
				<p class="h2" style="max-width: 1200px;">Мы знаем специфику каждого формата: как спроектировать кухню, чтобы она не «горела» в час пик, как сделать входную группу, чтобы клиенты заходили с улицы — и не уходили, как рассчитать вентиляцию для кальянной или звукоизоляцию для фитнес-центра.</p>
				<p class="h2" style="max-width: 1200px;">Занимаемся всем под ключ:</p>
			</div>
			<div class="info_check-con">
				<div class="info_check move-con">
					<dotlottie-player
						class="info_ok_player move"
						id="info_ok_player_2"
						src="/assets/animation/ok.json"
						background="transparent"
						speed="1"
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title">
						<p class="h2">Дизайн и технологическое проектирование</p>
					</div>
				</div>

				<div class="info_check move-con">
					<dotlottie-player
						class="info_ok_player move"
						id="info_ok_player_2"
						src="/assets/animation/ok.json"
						background="transparent"
						speed="1"
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title">
						<p class="h2">Инженерные решения — электрика, вентиляция, водоснабжение</p>
					</div>
				</div>
				<div class="info_check move-con">
					<dotlottie-player
						class="info_ok_player move"
						id="info_ok_player_3"
						src="/assets/animation/ok.json"
						background="transparent"
						speed="1"
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title">
						<p class="h2">Ремонт любой сложности — от косметики до полной перепланировки</p>
					</div>
				</div>

				<div class="info_check move-con">
					<dotlottie-player
						class="info_ok_player move"
						id="info_ok_player_4"
						src="/assets/animation/ok.json"
						background="transparent"
						speed="1"
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title">
						<p class="h2">Запуск объекта — готово к открытию в срок, без сюрпризов</p>
					</div>
				</div>
			</div>
			<div class="title__text">
				<p class="h2" style="max-width: 1200px;">Работаем с торговыми и бизнес-центрами, магазинами, гостиницами, салонами, развлекательными комплексами — всем, где важна функциональность, стиль и соответствие нормам.</p>
				<p class="h2" style="max-width: 1200px;">Не просто делаем ремонт — создаем среду, в которой ваш бизнес начинает работать лучше.</p>
				<p class="h2" style="max-width: 1200px;">СитиСтрой — с нами проще, быстрее, надежнее.</p>
			</div>

		</div>
		<!-- ----------------------------------------------------------------------------- -->
		<div class="info-block_2">
			<p class="h1 info_title">Что мы делаем</p>
			<div class="info-cart_con">

				<div class="info-back">
					<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/prob.svg" alt="" loading="lazy">
						<!-- <img class="info_2-img" src="/assets/img/icon/mac.svg" alt="" loading="lazy"> -->
						<p class="h2 iTitle">Дизайн интерьера</p>
						<div class="info_sleep">
							<p class="h3 info-2_sub-title"> Создаем атмосферный интерьер, который работает на увеличение прибыли.</p>
							<a href="/dizajn-kommercheskih-pomeshchenij">
								<div class="button info-button">Подробнее</div>
							</a>
						</div>
					</div>
				</div>

				<div class="info-back">
					<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/plan_kv.svg" alt="" loading="lazy">
						<p class="h2 iTitle">Инженерное проектирование</p>
						<div class="info_sleep">
							<p class="h3 info-2_sub-title">Разрабатываем инженерные проекты, оптимизируя бюджет и уменьшая сроки проведения строительных работ.
							</p>
							<a href="/inzhenernoe-proektirovanie">
								<div class="button info-button">Подробнее</div>
							</a>
						</div>
					</div>
				</div>


				<div class="info-back">
					<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/valik.svg" alt="" loading="lazy">
						<p class="h2 iTitle">Ремонт и СМР</p>
						<div class="info_sleep">
							<p class="h3 info-2_sub-title">Выполняем все этапы работ согласно проекту, управляем строительными процессами, координируем работу субподрядчиков.</p>
							<a href="/remont-kommercheskih-pomeshchenij">
								<div class="button info-button">Подробнее</div>
							</a>
						</div>
					</div>
				</div>

				<div class="info-back">
					<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/plita.svg" alt="" loading="lazy">
						<p class="h2 iTitle">Технологическое проектирование</p>
						<div class="info_sleep icart_down">
							<p class="h3 info-2_sub-title">Разрабатываем планировки помещений и расстановку технологического оборудования для максимальной эффективности ресторана.</p>
							<a href="/tekhnologicheskoe-proektirovanie">
								<div class="button info-button">Подробнее</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ----------------------------------------------------------------------------- -->


		<!-- ----------------------------------------------------------------------------- -->
		<div class="info-block_2">
			<p class="h1 info_title_3">Мы собрали коллектив, «заточенный» на успех:</p>
			<div class="info-cart_con">

				<div class="info-back">
					<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/mac.svg" alt="" loading="lazy">
						<p class="h2 iTitle">Дизайнеры</p>
						<div class="info_sleep icart_down">
							<p class="h3 info-2_sub-title">Наши дизайнеры имеют множественный успешный опыт ресторанных проектов.</p>
						</div>
					</div>
				</div>

				<div class="info-back">
					<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/lin.svg" alt="" loading="lazy">
						<p class="h2 iTitle">Инженеры и проектировщики</p>
						<div class="info_sleep icart_down">
							<p class="h3 info-2_sub-title">Весь состав ИТР нашей компании с высшим строительным и инженерным образованием.
							</p>
						</div>
					</div>
				</div>


				<div class="info-back">
					<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/casc.svg" alt="" loading="lazy">
						<p class="h2 iTitle">Строители</p>
						<div class="info_sleep icart_down">
							<p class="h3 info-2_sub-title">Команда строителей обладает разносторонней квалификацией и имеет опыт в ремонте ресторанов, умеет воплотить все задумки дизайнера и пожелания Заказчика.</p>
						</div>
					</div>
				</div>

				<div class="info-back">
					<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/colp.svg" alt="" loading="lazy">
						<p class="h2 iTitle">Технологи</p>
						<div class="info_sleep icart_down">
							<p class="h3 info-2_sub-title" id="info-sub_4">Многие технологи помимо технического образования, до нас долго работали поварами в ресторане и знают изнутри как сделать правильно и удобно, а значит у команды ресторана есть где вкладывать душу в работу, что напрямую отражается на качестве кухни и репутации ресторана.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Услуги ремонта -->
	<article class="additional-services">
		<div class="additional-services__container">
			<h2 class="h1">Услуги ремонта</h2>
			<div class="additional-services__grid">
				<a href="/remont-restoranov-i-kafe" class="additional-service__item">
					<img src="/assets/img/remont/3.jpg" alt="Ремонт ресторанов и кафе" loading="lazy">
					<p class="h2">Ремонт ресторанов и кафе</p>
				</a>
				<a href="/remont-ofisov-pod-klyuch" class="additional-service__item">
					<img src="/assets/img/remont/7.jpg" alt="Ремонт офисов" loading="lazy">
					<p class="h2">Ремонт офисов</p>
				</a>
				<a href="#" class="additional-service__item">
					<img src="/assets/img/other/ремонт магазинов главная.webp" alt="Ремонт магазинов" loading="lazy">
					<p class="h2">Ремонт магазинов</p>
				</a>
			</div>
			<div class="additional-services__grid">
				<a href="/remont-boulingov" class="additional-service__item">
					<img src="/assets/img/other/другие услуги боулинг.webp" alt="Ремонт боулингов" loading="lazy">
					<p class="h2">Ремонт боулингов</p>
				</a>
				<a href="#" class="additional-service__item">
					<img src="/assets/img/other/ремонт входных групп главная.webp" alt="Ремонт входных групп" loading="lazy">
					<p class="h2">Ремонт входных групп</p>
				</a>
				<a href="#" class="additional-service__item">
					<img src="/assets/img/other/ремонт тц главная.webp" alt="Ремонт торговых центров" loading="lazy">
					<p class="h2">Ремонт торговых центров</p>
				</a>
			</div>
			<div class="additional-services__grid">
				<a href="#" class="additional-service__item">
					<img src="/assets/img/other/ремонт гостиницы главная.webp" alt="Ремонт гостиниц" loading="lazy">
					<p class="h2">Ремонт гостиниц</p>
				</a>
				<a href="#" class="additional-service__item">
					<img src="/assets/img/other/ремонт фитнес залов главная.webp" alt="Ремонт фитнес-центров" loading="lazy">
					<p class="h2">Ремонт фитнес-центров</p>
				</a>
				<a href="#" class="additional-service__item">
					<img src="/assets/img/other/ремонт кальянных главная.webp" alt="Ремонт кальянных" loading="lazy">
					<p class="h2">Ремонт кальянных</p>
				</a>
			</div>
			<div class="additional-services__grid">
				<a href="#" class="additional-service__item">
					<img src="/assets/img/other/ремонт кинотеатров главная.webp" alt="Ремонт кинотеатров" loading="lazy">
					<p class="h2">Ремонт кинотеатров</p>
				</a>
				<a href="#" class="additional-service__item">
					<img src="/assets/img/other/ремонт картингов главная.webp" alt="Ремонт картингов" loading="lazy">
					<p class="h2">Ремонт картингов</p>
				</a>
				<a href="#" class="additional-service__item">
					<img src="/assets/img/other/ремонт комп клубов главная.webp" alt="Ремонт компьютерных клубов" loading="lazy">
					<p class="h2">Ремонт компьютерных клубов</p>
				</a>
			</div>
		</div>
	</article>

	<!-- info-banner -->
	<?php
	include('components/info-banner.php')
	?>

	<!-- Поможет построить заведение  с нуля! -->
	<article class="additional-services">
		<div class="additional-services__container">
			<h2 class="h1">Поможет построить заведение  с нуля!</h2>
			<div class="additional-services__grid">
				<div class="additional-service__item">
					<img src="/assets/img/other/запуск под ключ ресторан.webp" alt="Запуск ресторана под ключ" loading="lazy">
					<p class="h2">Запуск ресторана под ключ</p>
				</div>
				<div class="additional-service__item">
					<img src="/assets/img/other/запуск под ключ бар.webp" alt="Запуск бара под ключ" loading="lazy">
					<p class="h2">Запуск бара под ключ</p>
				</div>
				<div class="additional-service__item">
					<img src="/assets/img/other/запуск под ключ фастфуд.webp" alt="Запуск фаст фуда под ключ" loading="lazy">
					<p class="h2">Запуск фаст фуда под ключ</p>
				</div>
			</div>
		</div>
	</article>


	<!-- СХЕМА -->
	<?php
	include('components/shema.php')
	?>
	<div class="step_con step_con-mob">

		<div class="step-container">
			<div class="step">
				<p class="h1">Грамотный анализ Технических Условий (ТУ) и ясное понимание достаточности и недостаточности исходных данных - основа успеха проекта.</p>
			</div>

			<img class="_R" src="/assets/icon/R.svg" alt="" loading="lazy"></img>

			<div class="step">
				<p class="h1">Сначала запускаются <span>Технология</span> и <span>Дизайн,</span> далее разрабатываются архитектурный и инженерные разделы, только после этого считается смета, а потом - стройка.</p>
			</div>

		</div>

		<img class="long_R" src="/assets/icon/long_R.svg" alt="" loading="lazy"></img>
		<img class="R" src="/assets/icon/R.svg" alt="" loading="lazy"></img>

		<div class="step-container">

			<div class="step">
				<p class="h1">Далее обязательно разрабатывается раздел <span>АР</span>. Он объединяет <span>Дизайн</span> и <span>Технологию.</span> Раздел <span>АР</span> является техническим заданием на проектирование инженерных разделов</p>
			</div>

			<img class="_R" src="/assets/icon/R.svg" alt="" loading="lazy"></img>

			<div class="step">
				<p class="h1">После разработки раздела <span>АР</span>, разрабатываются инженерные разделы: <span>ОВиК</span>, <span>ВК</span>, <span>СКС</span>, <span>ЭОМ</span> и если есть конструкции из металла, то раздел <span>КМ</span>.</p>
			</div>

		</div>
		<img class="long_R" src="/assets/icon/long_R.svg" alt="" loading="lazy"></img>
		<img class="R" src="/assets/icon/R.svg" alt="" loading="lazy"></img>

		<div class="step-container">

			<div class="step">
				<p class="h1"><span>ЭОМ</span> разрабатывается последним, так как в нем сведена вся информация от всех потребителей энергии со всех проектов.</p>
			</div>

			<img class="_R" src="/assets/icon/R.svg" alt="" loading="lazy"></img>

			<div class="step">
				<p class="h1">От соблюдения такой последовательности этапов зависит количество ошибок и перерасход ресурсов Заказчика</p>
			</div>

		</div>

		<img class="long_R" src="/assets/icon/long_R.svg" alt="" loading="lazy"></img>
		<img class="R" src="/assets/icon/R.svg" alt="" loading="lazy"></img>

		<div class="step-container">

			<div class="step">
				<p class="h1">Эта зависимость прямо пропорциональна масштабу проекта – чем больше объект, тем строже нужно соблюдать эту этапность.</p>
			</div>




		</div>

	</div>

	<!-- <div class="warn_con  warn-mob">
	<div class="warn">
		<img src="/assets/img/icon/!.svg" alt="" loading="lazy">
		<p class="h1">От соблюдения такой последовательности этапов зависит количество ошибок и перерасход ресурсов Заказчика.<br>
		Эта зависимость прямо пропорциональна масштабу проекта – чем больше объект, тем строже нужно соблюдать эту этапность.</p>
	</div>
</div> -->






	<!-- kit-info-banner -->
	<?php
	include('components/kit-info-banner.php')
	?>

	<?php
	include('components/licensii.php')
	?>


	<!-- CART -->
	<?php
	include('components/carts.php')
	?>

	<!-- Отзывы -->
<?php
include('components/reviews.php')
?>

	<!-- VIDEO -->
	<div class="video_con">
		<p class="h1 video-title">Видео-блог о ходе строительства</p>
		<p class="h2 video-title_2">Кальянная Мята на ВДНХ</p>
		<p class="h3 video-title_3">МФК Солнце Москвы</p>
		<div class="video-block">
			<div class="video_b">
				<video class="video_you" controls="true" loop="true" muted="true" autoplay="true" poster="">
					<source class="main-video" src="/assets/video/1.mp4" type="video/mp4" />
				</video>
				<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
					<p class="h1 video-title_4">Первый этап строительства кальянной Мята на ВДНХ
					</p>
					<svg class="svgYou" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white" />
					</svg>
				</a>
			</div>

			<div class="video_rule element-animation">
				<div class="video_r">
					<button id="v1" class="video-button v-btn_activ"></button>
				</div>
				<div class="video_r">
					<button id="v2" class="video-button"></button>
				</div>
				<div class="video_r">
					<button id="v3" class="video-button"></button>
				</div>
				<div class="video_r">
					<button id="v4" class="video-button"></button>
				</div>
			</div>

		</div>
	</div>

	<div class="video_con video_case__2">
		<p class="h2 video-title_2">Строим лучший ресторан на ВДНХ</p>
		<p class="h3 video-title_3">IL Patio и Планета Суши</p>
		<div class="video-block">
			<div class="video_b">
				<video class="video_you_2" controls="true" loop="true" muted="true" autoplay="true" poster="">
					<source class="main-video" src="/assets/video/v-1_vdnh.mp4" type="video/mp4" />
				</video>
				<a href="https://www.youtube.com/watch?v=chF9nZqKmco&list=PL6aYZ63FPoLpORt1a0EyzoiqxiDX_ZFc5&index=1&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
					<p class="h1 video-title_4">Первый этап строительства ресторана IL Patio и Планета Суши на ВДНХ
					</p>
					<svg class="svgYou" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white" />
					</svg>
				</a>
			</div>

			<div class="video_rule element-animation">
				<div class="video_r">
					<button id="v9" class="video-button v-btn_activ"></button>
				</div>
				<div class="video_r">
					<button id="v10" class="video-button"></button>
				</div>
			</div>

		</div>
	</div>

	<div class="video-more-con">
		<div class="video-more">
			<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
				<p class="h1 video-title_5">Мы в YouTube
					<svg width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white" />
					</svg>
				</p>
			</a>
			<button class="button button-video-more">Смотреть еще</button>
		</div>
	</div>




	<div class="map">
		<div class="map_adres">
			<p class="h3">Адрес:</p>
			<a href="https://yandex.ru/maps/-/CDSkA28l" target="_blank">
				<p class="h3">г. Москва, Береговой проезд, д. 7</p>
			</a>
			<p class="h3">Пн-Сб: с 9-00 до 21-00</p>
			<p class="h3">Вс - выходной</p>
			<p class="h3"><b>+7 (926) 363-42-78</b></p>
			<p class="h3"><b>+7 (495) 109-29-96</b></p>

		</div>
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8d8693730a0869f08ed03da284ecfd94eae03b6b2f37acf1da6a5f8bb7b8ca7b&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=false"></script>
	</div>


	<!-- --------------------------------------- -->
	<div class="commer-banner-con">
		<div class="commer-banner">
			<div>
				<img class="commer-close" src="../assets/img/icon/banner-close.svg" alt="" loading="lazy">
				<img class="commer-img" src="/assets/img/icon/comm-img.svg" alt="" loading="lazy">
				<p class="h1 commer-h1">Коммерческое предложение</p>
			</div>
			<p class="h2 commer-h2">Ответьте на 6 вопросов, чтобы узнать стоимость и срок реализации вашего проекта</p>
			<button class="button commer-btn modal__KP">Заполнить коммерческое предложение</button>
		</div>

		<div class="commer-text">
			<p class="h1"> + Бесплатно cделаем предварительные планы зонирования, расстановки кухонного оборудования с размерами, планировки посадочных мест*</p>
		</div>
	</div>
	<div class="commer-banner-mini">
		<img class="commer-img" src="/assets/img/icon/comm-img.svg" alt="" loading="lazy">
	</div>

	<!-- INFO-BANNER -->
	<?php
	include('components/info-banner.php')
	?>
	<!-- --------------------------------------- -->
	<!-- FOTTER -->
	<?php
	include('components/footer.php')
	?>
</body>

</html>