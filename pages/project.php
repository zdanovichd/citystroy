<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
    <meta name="description" content="Cитистрой. Дизайн, проектирование и ремонт коммерческих помещений">
    <title>Проектирование</title>
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

<script defer src="../js/shema.js"></script>
<style>
	.menu__main > li:nth-child(4) > a {
		color: #28bbff;
		font-weight: 300;
	}
	.menu-mob_main > li:nth-child(4) > a {
		color: #28bbff;
		font-weight: 300;
	}
</style>


	<div class="container">
		<!-- SCREEN_1-TITLE -->
		<article id="anchor_title" class="title__con">
			<div class="title">
				<div class="title__text">
					<div>
						<h1 class="h1"> ИНЖЕНЕРНОЕ ПРОЕКТИРОВАНИЕ </h1>
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
					<p>Архитектурные решения / Отопление, вентиляция и кондиционирование Водоснабжение и канализация / <br> Структурированные кабельные системы / Электроснабжение и электроосвещение / Конструкции металлические</p>
					</p>
				</div>

				<div class="title__button">
					<button class="button modal__btn">
						СВЯЗАТЬСЯ С НАМИ
					</button>
					<a href="#proj_about">
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
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/9.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/8.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/11.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/3.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/10.jpg.webp" alt="" loading="lazy"></div>
        </div>
    	</div>

			<div class="video__con">
					<video class="video" loop="true" muted="true" autoplay="true" poster="">
						<source src="/assets/video/proj.mp4" type="video/mp4">
					</video>
			</div>

		</article>


	<!-- SCREEN_2 ABOUT-->
	<article id="proj_about" class="about">
		<p class="h1 about__title">Быстро согласовываем рабочую документацию с администрацией здания</p>
		<div class="about__item proj_about__item">
			<p class="h3">
				<img src="/assets/icon/10.svg" alt="" loading="lazy">
				Cокращаем сроки сдачи объекта
			</p>
			<p class="h3">
				<img src="/assets/icon/7.svg" alt="" loading="lazy">
				Оптимизируем бюджет без потери качества
			</p>
			<p class="h3" >
				<img src="/assets/icon/14.svg" alt="" loading="lazy">
				Уберегаем заказчика от переплат и ошибок
			</p>
		</div>

		<div class="about__column ab_proj">
			<div>
				<div >
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt="" loading="lazy"> -->
					<p class="h1 about__column_2">Оптимальные инженерные решения</p>
				</div>
				<p class="h3">Находим технические решения для оптимизации расходов. Проектируем только то, что действительно надо</p>
			</div>
			<div>
				<div>
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt="" loading="lazy"> -->
					<p class="h1">Опыт взаимодействия со службами ТЦ/БЦ</p>
				</div>
				<p class="h3">Накоплен большой опыт взаимодействия со службами эксплуатации ТЦ и БЦ. Знаем весь процесс согласования рабочей и сдачи исполнительной документации ТЦ/БЦ</p>
			</div>
			<div>
				<div>
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt="" loading="lazy"> -->
					<p class="h1">Глубоко и детально прорабатываем проект в множество циклов</p>
				</div>
				<p class="h3">Делаем сквозной контроль всех разделов проектирования на предмет ошибок и наложений</p>
			</div>
			<div>
				<div>
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt="" loading="lazy"> -->
					<p class="h1">Глубоко и детально прорабатываем проект в множество циклов</p>
				</div>
				<p class="h3">Анализируем все технические условия на предмет предполагаемого объекта в конкретной локации. Не все локации подходят и не все ТУ удовлетворяют требованиям проектируемых объектов</p>
			</div>
		</div>
		<button class="button-about button modal__KP">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>
	</article>
	<div class="info-block_1">

			<p class="h1 info_title" >Сокращаем срок сдачи объекта
			и ваши финансовые расходы</span></p>

			<div class="info_check-con info_check-con-proj">

				<div class="info_check info_check-proj move-con">
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
						<p class="h2">Оптимизируем общий бюджет проектировочных решений</p>
						<p class="h3 info_check-proj-h3">Находим технические решения для оптимизации расходов за счет богатого 7-летнего опыта проектирования и строительства ресторанов: от самых маленьких до двух- трехуровневых объектов большой площади.</p>
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
						<p class="h2">Уберегаем от финансовых потерь из-за неточностей в проектировании</p>
						<p class="h3 info_check-proj-h3">Делаем сквозной контроль всех разделов проектирования на предмет ошибок и наложений, исключая ошибки от перекрестного проектирования разными подрядчиками, которые приводят к увеличению общего бюджета строительства.</p>
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
						<p class="h2">Быстро согласовываем рабочую документацию с администрацией здания</p>
						<p class="h3 info_check-proj-h3">Накоплен большой опыт взаимодействия со службами эксплуатации ТЦ и БЦ. Знаем весь процесс согласования рабочей и сдачи исполнительной документации ТЦ/БЦ. Это позволяет быстро вносить в проект корректировки от администрации здания и оперативно согласовывать с ней все решения.</p>
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
						<p class="h2">Создаем проект по которому не будет изменений в смете и сроках при СМР</p>
						<p class="h3 info_check-proj-h3">Мы разрабатываем проекты в множество циклов, в каждом из которых происходят значительные изменения от первоначальной версии. 
							Такой подход позволяет создать максимально-точный и грамотный проект, по которому не будет изменений в смете и сроках при строительстве.</p>
						</div>
				</div>
			</div>

		</div>


	<!-- СХЕМА -->
	<?php
		include('../components/shema.php')
	?>
	<div class="step_con step_con-mob">
	<div class="step-container">
		<div class="step">
			<p class="h1">Сначала запускаются <span>Технология</span> и <span>Дизайн,</span> далее разрабатываются архитектурный и инженерные разделы, только после этого считается смета, а потом - стройка.</p>
		</div>
	
	<img class="_R" src="/assets/icon/R.svg" alt="" loading="lazy"></img>

	<div class="step">
		<p class="h1">Далее обязательно разрабатывается раздел <span>АР</span>. Он объединяет <span>Дизайн</span> и <span>Технологию.</span> Раздел <span>АР</span> является техническим заданием на проектирование инженерных разделов</p>
	</div>

	</div>

	<img class="long_R" src="/assets/icon/long_R.svg" alt="" loading="lazy"></img>
	<img class="R" src="/assets/icon/R.svg" alt="" loading="lazy"></img>

	<div class="step-container">

		<div class="step">
			<p class="h1">После разработки раздела <span>АР</span>, разрабатываются инженерные разделы: <span>ОВиК</span>, <span>ВК</span>, <span>СКС</span>, <span>ЭОМ</span> и если есть конструкции из металла, то раздел <span>КМ</span>.</p>
		</div>
	
		<img class="_R" src="/assets/icon/R.svg" alt="" loading="lazy"></img>

	<div class="step">
		<p class="h1"><span>ЭОМ</span> разрабатывается последним, так как в нем сведена вся информация от всех потребителей энергии со всех проектов.</p>
	</div>

	</div>
	<img class="long_R" src="/assets/icon/long_R.svg" alt="" loading="lazy"></img>
	<img class="R" src="/assets/icon/R.svg" alt="" loading="lazy"></img>

	<div class="step-container">

	<div class="step">
		<p class="h1">От соблюдения такой последовательности этапов зависит количество ошибок и перерасход ресурсов Заказчика</p>
	</div>

	<img class="_R" src="/assets/icon/R.svg" alt="" loading="lazy"></img>

	<div class="step">
		<p class="h1">Эта зависимость прямо пропорциональна масштабу проекта – чем больше объект, тем строже нужно соблюдать эту этапность.</p>
	</div>

	</div>

</div>

<div class="warn_con  warn-mob">
	<div class="warn">
		<img src="/assets/img/icon/!.svg" alt="" loading="lazy">
		<p class="h1">От соблюдения такой последовательности этапов зависит количество ошибок и перерасход ресурсов Заказчика.<br>
		Эта зависимость прямо пропорциональна масштабу проекта – чем больше объект, тем строже нужно соблюдать эту этапность.</p>
	</div>
</div>

	



	<!-- FOTTER -->
	<?php
		include('../components/footer.php')
	?>


</body>
</html>