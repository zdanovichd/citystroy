<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
    <meta name="description" content="Cитистрой. Дизайн, проектирование и ремонт коммерческих помещений">
    <title>Главная</title>
    <?php
        include('components/head.php')
    ?>
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
	.menu__main > li:nth-child(1) > a {
		color: #28bbff;
		font-weight: 300;
	}
	.menu-mob_main > li:nth-child(1) > a {
		color: #28bbff;
		font-weight: 300;
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

								<div class="swiper-slide"><p class="h1">РЕСТОРАНОВ</p></div>
								<div class="swiper-slide"><p class="h1">МАГАЗИНОВ</p></div>
								<div class="swiper-slide"><p class="h1">КАФЕ</p></div>
								<div class="swiper-slide"><p class="h1">КОММЕРЧЕСКИХ ...</p></div>
								<div class="swiper-slide"><p class="h1">ПОМЕЩЕНИЙ</p></div>
							</div>	
						</div>
					</div>

					<p class="h2">
					Строительство ресторанов и кафе
					в Москве «под ключ» <br>
					<p>от дизайна и проектирования до пуска в эксплуатацию</p>
					</p>
				</div>

				<div class="title__button">
					<button class="button modal__btn">
						СВЯЗАТЬСЯ С НАМИ
					</button>
					<a href="#anchor-about">
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
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/1.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/2.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/3.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/4.jpg.webp" alt="" loading="lazy"></div>
        </div>
    	</div>

			<div class="video__con">
					<video  class="video" loop="true" muted="true" autoplay="true" playsinline>
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
			<p class="h1 info_title" >Специализируемся на ресторанной тематике <span class="seven-e"> 7 лет</span></p>

			<div class="info_check-con">

				<!-- <div class="info_check move-con">
					<dotlottie-player 
						class="info_ok_player move"
						id="info_ok_player_1"
						src="/assets/animation/ok.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title">
						<p class="h2">Ген. подрядчик. </p>
						<p class="h3"> Координируем субподрядные и смежные компании, собрали коллектив, «заточенный» на ресторанах.</p>
						</div>
				</div> -->
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
						<p class="h2">Ген. подрядчик</p>
						<p class="h3">Координируем субподрядные и смежные компании, cобрали коллектив, «заточенный» на ресторанах</p>
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
						<p class="h2">Работаем в ТЦ/БЦ</p>
						<p class="h3">Знаем весь процесс согласования рабочей и сдачи исполнительной документации</p>
						</div>
				</div>
				<div class="info_check move-con" >
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
						<p class="h2">Работаем с НДС, имеем допуски СРО</p>
						<p class="h3"> на строительство и проектирование</p>
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
						<p class="h2">Даем рекомендации</p>
						<p class="h3"> по исправлению/избеганию ошибок смежников, уделяя внимание аспектам, выходящим за рамки нашей ответственности</p>
						</div>
				</div>
			</div>

		</div>
		<!-- ----------------------------------------------------------------------------- -->
		<div class="info-block_2">
			<p class="h1 info_title" >Что мы делаем</p>
			<div class="info-cart_con">

				<div class="info-back">
					<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/prob.svg" alt="" loading="lazy">
						<!-- <img class="info_2-img" src="/assets/img/icon/mac.svg" alt="" loading="lazy"> -->
						<p class="h2 iTitle">Дизайн интерьера</p>
						<div class="info_sleep">
							<p class="h3 info-2_sub-title" > Создаем атмосферный интерьер, который работает на увеличение прибыли.</p>
							<a href="/pages/design.php"><div class="button info-button">Подробнее</div></a>
						</div>
					</div>
				</div>

				<div class="info-back">
					<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/plan_kv.svg" alt="" loading="lazy">
						<p class="h2 iTitle">Инженерное проектирование</p>
						<div class="info_sleep">
							<p class="h3 info-2_sub-title" >Разрабатываем инженерные проекты, оптимизируя бюджет и уменьшая сроки проведения строительных работ.
							</p>
							<a href="/pages/project.php"><div class="button info-button">Подробнее</div></a>
						</div>
					</div>
				</div>

				
				<div class="info-back">
					<div class="info-cart">
							<img class="info_2-img" src="/assets/img/icon/valik.svg" alt="" loading="lazy">
							<p class="h2 iTitle">Ремонт и СМР</p>
							<div class="info_sleep">
								<p class="h3 info-2_sub-title">Выполняем все этапы работ согласно проекту, управляем строительными процессами, координируем работу субподрядчиков.</p>
								<a href="/pages/SMR.php"><div class="button info-button">Подробнее</div></a>
						</div>
					</div>
				</div>

				<div class="info-back">
					<div class="info-cart">
							<img class="info_2-img" src="/assets/img/icon/plita.svg" alt="" loading="lazy">
							<p class="h2 iTitle">Технологическое проектирование</p>
							<div class="info_sleep icart_down">
								<p class="h3 info-2_sub-title">Разрабатываем планировки помещений и расстановку технологического оборудования для максимальной эффективности ресторана.</p>
								<a href="/pages/tehno.php"><div class="button info-button">Подробнее</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ----------------------------------------------------------------------------- -->
		

		<!-- ----------------------------------------------------------------------------- -->
		<div class="info-block_2">
			<p class="h1 info_title_3" >Мы собрали коллектив, «заточенный» на рестораны:</p>
			<div class="info-cart_con">

				<div class="info-back">
					<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/mac.svg" alt="" loading="lazy">
						<p class="h2 iTitle">Дизайнеры</p>
						<div class="info_sleep icart_down">
							<p class="h3 info-2_sub-title">Наши дизайнеры имеют множественный успешный опыт ресторанных проектов.</p>
							<a href="/pages/design.php"><div class="button info-button">Подробнее</div></a>
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
								<a href="/pages/project.php"><div class="button info-button">Подробнее</div></a>
						</div>
					</div>
				</div>

				
				<div class="info-back">
					<div class="info-cart">
							<img class="info_2-img" src="/assets/img/icon/casc.svg" alt="" loading="lazy">
							<p class="h2 iTitle">Строители</p>
							<div class="info_sleep icart_down">
								<p class="h3 info-2_sub-title">Команда строителей обладает разносторонней квалификацией и имеет опыт в ремонте ресторанов, умеет воплотить все задумки дизайнера и пожелания Заказчика.</p>
								<a href="/pages/SMR.php"><div class="button info-button">Подробнее</div></a>
							</div>
					</div>
				</div>

				<div class="info-back">
					<div class="info-cart">
							<img  class="info_2-img" src="/assets/img/icon/colp.svg" alt="" loading="lazy">
							<p class="h2 iTitle">Технологи</p>
							<div class="info_sleep icart_down">
							<p class="h3 info-2_sub-title" id="info-sub_4" >Многие технологи помимо технического образования, до нас долго работали поварами в ресторане и знают изнутри как сделать правильно и удобно, а значит у команды ресторана есть где вкладывать душу в работу, что напрямую отражается на качестве кухни и репутации ресторана.</p>
							<a href="/pages/tehno.php"><div class="button info-button">Подробнее</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


	<!-- info-banner -->
	<?php
		include('components/info-banner.php')
	?>


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


	<!-- CART -->
	<?php
		include('components/carts.php')
	?>


	<!-- VIDEO -->
	<div class="video_con">
		<p class="h1 video-title">Видео-блог о ходе строительства</p>
		<p class="h2 video-title_2">Кальянная Мята на ВДНХ</p>
		<p class="h3 video-title_3">МФК Солнце Москвы</p>
		<div class="video-block">
			<div class="video_b">
				<video class="video_you"  controls="true" loop="true" muted="true" autoplay="true" poster="">
						<source class="main-video" src="/assets/video/1.mp4" type="video/mp4" />
				</video>
				<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
				<p class="h1 video-title_4">Первый этап строительства кальянной Мята на ВДНХ
				</p>
				<svg class="svgYou" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
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
				<video class="video_you_2"  controls="true" loop="true" muted="true" autoplay="true" poster="">
						<source class="main-video" src="/assets/video/v-1_vdnh.mp4" type="video/mp4" />
				</video>
				<a href="https://www.youtube.com/watch?v=chF9nZqKmco&list=PL6aYZ63FPoLpORt1a0EyzoiqxiDX_ZFc5&index=1&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
				<p class="h1 video-title_4">Первый этап строительства ресторана IL Patio и Планета Суши на ВДНХ
				</p>
				<svg class="svgYou" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
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
						<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
						</svg>
				</p>
			</a>
			<button class="button button-video-more">Смотреть еще</button>
		</div>
	</div>




	<div class="map">
		<div class="map_adres">
			<p class="h3">Адрес:</p>
			<a href="https://yandex.ru/maps/-/CDSkA28l" target="_blank"><p class="h3">г. Москва, Береговой проезд, д. 7</p></a>
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
