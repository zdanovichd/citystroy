<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
    <meta name="description" content="Cитистрой. Дизайн, проектирование и ремонт коммерческих помещений">
    <title>Дизайн</title>
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
	.menu__main > li:nth-child(3) > a {
		color: #28bbff;
		font-weight: 300;
	}
	.menu-mob_main > li:nth-child(3) > a {
		color: #28bbff;
		font-weight: 300;
	}
</style>



		<!-- SCREEN_1-TITLE -->
		<article id="anchor_title" class="title__con">
			<div class="title">
			<div class="title__text">
					<div>
						<h1 class="h1"> ДИЗАЙН ПРОЕКТИРОВАНИЕ </h1>
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
					<p>от дизайн-концепции до 3D визуализации и строительных чертежей</p>
					</p>
				</div>
<!-- 				
				<div class="title__text">
					
					<div>
						<p class="h1"> ДИЗАЙН РЕСТОРАНОВ </p>
					</div>

					<p class="h2">
						Под ключ: от дизайн-концепции до 3D визуализации и строительных чертежей
					</p>
				</div> -->

				<div class="title__button">
					<button class="button modal__btn">
						СВЯЗАТЬСЯ С НАМИ
					</button>
					<a href="#des_about">
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
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/3.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/8.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/1.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/4.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/7.jpg.webp" alt="" loading="lazy"></div>
        </div>
    	</div>

			<div class="video__con">
					<video class="video" loop="true" muted="true" autoplay="true" poster="">
						<source src="../assets/img/desi/desi.mp4" type="video/mp4">
					</video>
			</div>

		</article>


	<!-- SCREEN_2 ABOUT-->
	<article id="des_about" class="about">
		<p class="h1 about__title">Создаем атмосферный интерьер, который работает на увеличение прибыли:</p>
		<div class="about__item desi-about__item">
			<p class="h3">
				<img class="des-icon" src="/assets/icon/12.svg" alt="" loading="lazy">
				Привлекает больше новых посетителей
			</p>
			<p class="h3">
				<img class="des-icon" src="/assets/icon/4.svg" alt="" loading="lazy">
				Процесс создания дизайна ресторана
			</p>
			<p class="h3" >
				<img class="des-icon" src="/assets/icon/5.svg" alt="" loading="lazy">
				Повышает средний чек, привлекая более платежеспособную аудиторию
			</p>
			<p class="h3" >
				<img class="des-icon" src="/assets/icon/11.svg" alt="" loading="lazy">
				Увеличивает эффективность сотрудников
			</p>
		</div>
		<div class="about__column">
			<div>
				<div>
					<p class="h1 about__column_2">Эргономика</p>
				</div>
				<p class="h3">Создаем интерьер как удобную среду для персонала и гостей</p>
			</div>
			<div>
				<div>
					<p class="h1">Психология цветовосприятия</p>
				</div>
				<p class="h3">Учитываем способность зрения человека воспринимать и преобразовывать цвета в ощущение оттенков</p>
			</div>
			<div>
				<div>
					<p class="h1">Освещение</p>
				</div>
				<p class="h3">Многоуровневое освещение всех помещений ресторана, применение декоративных светильников и конструкций</p>
			</div>
			<div>
				<div>
					<p class="h1">Визуализация</p>
				</div>
				<p class="h3">Предлагаем варианты планировок и визуализаций всех частей ресторана</p>
			</div>
		</div>
		<button class="button-about button modal__KP">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>
	</article>

	



	<!-- DESI_INFO-MINI -->
	<div class="desi-inf_con">
			<p class="h1">Закладываем технические характеристики: свет, звук, вентиляция</p>
			<div class="desi-inf">

				<div class="desi-inf_item move-con">
					<dotlottie-player 
						class="desi-inf__player-small des-vent move"
						src="/assets/animation/vent.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="false">
					</dotlottie-player>
					<div>
						<p class="h2">Система вентиляции</p>
						<p class="h3">При разработке проекта мы в прямом смысле ставим себя на место гостей: где они сидят и как себя при этом чувствуют, достаточно ли воздуха, тепло им или холодно, какие запахи должны доходить до посетителей, а какие нет, и в зависимости от характеристик помещения предлагаем места под кондиционирование и вентиляцию, а также указываем необходимые мощности и объемы.</p>
					</div>
					
				</div>

				<div class="desi-inf_item desi-inf__bez move-con">
					<dotlottie-player 
						class="desi-inf__player-small des-sound move"
						src="/assets/animation/sound.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div>
						<p class="h2">Звук</p>
						<p class="h3">Учитываем размер и зонирование помещения для размещения точек звука, чтобы гостям было максимально комфортно в атмосфере ресторана, дополненного фоновой музыкой, при этом прописываем громкость.</p>
					</div>
					
				</div>

				<div class="desi-inf_item move-con">
					<dotlottie-player 
						class="desi-inf__player-small des-docs move"
						src="/assets/animation/docs.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div>
						<p class="h2">Нормы и требования</p>
						<p class="h3">Соблюдаем СанПиН, требования законодательства по безопасности, пожаростойкости материалов, горючести и т.д</p>
					</div>
				</div>

				<div class="desi-inf_item move-con">
					<dotlottie-player 
						class="desi-inf__player-small move des-lamp"
						src="/assets/animation/lamp.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div>
						<p class="h2">Свет</p>
						<p class="h3">Мы учитываем все особенности помещения и применяем передовые научные исследования в области световосприятия. Правильная освещенность придает уют помещению, благодаря чему гости хотят провести больше времени в ресторане, больше заказывают блюд и увеличивают выручку заведения.</p>
					</div>
					
				</div>

			</div>
	</div>






	<!-- DESI_SHEMA -->
	<!-- <div class="desi-sh_con">
		<p class="h1">Дизайн = мощный маркетинговый инструмент</p>
		<div class="desi-sh ">

			<div class="desi-sh_item element-animation">
				<p class="h2">Успешный бизнес</p>
			</div>
			<img class="shema__right" src="/assets/img/icon/right.svg" alt="" loading="lazy"></img>

			<div class="desi-sh_item element-animation">
				<p class="h2">Профессиональные проектировщики и строители</p>
			</div>
			<img class="shema__right" src="/assets/img/icon/right.svg" alt="" loading="lazy"></img>
			
			<div class="desi-sh_item element-animation">
				<p class="h2">Успешный бизнес</p>
			</div>

		</div>
	</div> -->

	

		<!-- DESI_LIST -->
		<article class="des-list__main">
			<!-- 1 -->
			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/desi/1.jpg.webp" alt="" loading="lazy">
				<div class="title-teh_con">
					<p class="h1 title-teh">Раскрываем концепцию</p>
					<p class="h2 text-teh">Через дизайн транслируем общую идею ресторана и раскрываем ее. Опираемся на меню и кухню, личность шеф-повара, исторический контекст локации.<br><br>
					Учитываем ключевые эмоциональные задачи, которые должен выполнять интерьер в заданной концепции: создавать расслабляющую или наоборот экспрессивную оживленную обстановку, транслировать ощущение уюта или в первую очередь подчеркивать статус гостя.</p>
				</div>
			</div>
			<!-- 2 -->
			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/desi/2.jpg.webp" alt="" loading="lazy">
				<div class="title-teh_con">
					<p class="h1 title-teh">Делаем упор на маркетинг</p>
					<p class="h2 text-teh">Учитываем психологию вашей целевой аудитории и создаем пространство, привлекающее внимание, в которое хочется возвращаться снова и снова.<br><br>
					Учитываем актуальные тренды в дизайне, создавая интерьер, который будет актуален долгие годы.</p>
				</div>
			</div>
			
			
			
			<!-- 3 -->
			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/desi/3.jpg.webp" alt="" loading="lazy">
				<div class="title-teh_con">
					<p class="h1 title-teh">Прорабатываем эргономику</p>
					<p class="h2 text-teh">Учитываем исходную геометрию помещения и его конструктивные особенности, чтобы подстроить интерьер под нужды гостей и персонала. <br><br>
					Моделируем разные сценарии использования пространства и делаем заведение максимально комфортным: персоналу будет удобно передвигаться, а гости за соседними столиками не будут мешать друг другу.</p>
				</div>
			</div>
			<!-- 4 -->
			<!-- <div class="cart-teh">
				<img class="element-animation" src="/assets/img/desi/4.jpg.webp" alt="" loading="lazy">
				<div class="title-teh_con">
					<p class="h1 title-teh">Условия успешной реализации дизайн-проекта</p>
					<p class="h2 text-teh">Дизайн ресторана - это всегда продукт квалифицированной команды, которая на разных этапах решает множество параллельных задач: от составления опросника для технического задания, светорасчетов, вариантов планировок и визуализаций, до согласования образцов отделочных материалов.</p>
					<ul>
						<li>Для Заказчика очень важна успешная реализация его идеи, отраженной в дизайн проекте.
						Поэтому эффективная реализация дизайн проекта ресторана напрямую связана с профессиональными проектировщиками и строителями, которые создают своими руками задумку дизайнера.</li><br>
						<li>Дизайн, как инструмент создает путь к успеху, возможность, которую можно реализовать только в сплоченной команде инженеров и строителей</li>
					</ul>
				</div>
			</div> -->
		</article>

	<!-- DESI_INFO -->
	<!-- <div class="desi-inf_con">
					<p class="h1">Наш дизайн это:</p>
					<div class="desi-inf-b">

						<div class="desi-inf_item-b">
							<dotlottie-player 
								class="desi-inf__player-small"
								src="/assets/animation/bez.json" 
								background="transparent" 
								speed="1" 
								loop="false"
								autoplay="false">
							</dotlottie-player>
							<p class="h2">Комфорт</p>
						</div>

						<div class="desi-inf_item-b desi-inf__bez">
							<dotlottie-player 
								class="desi-inf__player-small"
								src="/assets/animation/komf.json" 
								background="transparent" 
								speed="1" 
								loop="false"
								autoplay="false">
							</dotlottie-player>
							<p class="h2">Безопасность</p>
						</div>

						<div class="desi-inf_item-b">
							<dotlottie-player 
								class="desi-inf__player-small"
								src="/assets/animation/eff.json" 
								background="transparent" 
								speed="1" 
								loop="false"
								autoplay="false">
							</dotlottie-player>
							<p class="h2">Эффективность</p>
						</div>

					</div>
	</div> -->
			
		
	<!-- VIDEO -->
	<div class="video_con">
		<p class="h1 video-title">Видеоблог с лицами компании</p>
		<p class="h2 video-title_2"><span>Дизайнер</span>Дина Дмитриева</p>
		<div class="video-block">
			<div class="video_b">
				<video class="video_you"  controls="true" loop="true" muted="true" autoplay="true" poster="">
						<source class="main-video" src="/assets/video/d1.mp4" type="video/mp4" />
				</video>
				<a href="https://www.youtube.com/watch?v=HyhMKgziaQs&t=34s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
				<p class="h1 video-title_4">О дизайне ресторанов, кафе, баров и кальянных Часть 2</p>
				<svg class="svgYou" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
					</svg>
				</a>
			</div>

		<div class="video_rule element-animation">
					<div class="video_r">
						<button id="v5" class="video-button v-btn_activ"></button>
					</div>
					<div class="video_r">
						<button id="v6" class="video-button"></button>
					</div>
					<div class="video_r">
						<button id="v7" class="video-button"></button>
					</div>
					<div class="video_r">
						<button id="v8" class="video-button"></button>
					</div>
					
				</div> 

		</div>
	</div>

	<!-- --------------------------------------- -->
	<!-- FOTTER -->
	<?php
		include('../components/footer.php')
	?>




</body>
</html>
