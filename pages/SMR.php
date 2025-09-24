	<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
    <meta name="description" content="Cитистрой. Дизайн, проектирование и ремонт коммерческих помещений">
    <title>СМР</title>
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
	.menu__main > li:nth-child(5) > a {
		color: #28bbff;
		font-weight: 300;
	}
	.menu-mob_main > li:nth-child(5) > a {
		color: #28bbff;
		font-weight: 300;
	}
</style>


		<!-- SCREEN_1-TITLE -->
		<article id="anchor_title" class="title__con">
			<div class="title">
				<div class="title__text title__srm">
					<div>
						<p class="h1"> СТРОИТЕЛЬНО-МОНТАЖНЫЕ РАБОТЫ</p>
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
						<p class="h2">Строительство ресторанов и кафе в Москве «под ключ» <br>
							<!-- <p>Архитектурные решения / Отопление, вентиляция и кондиционирование Водоснабжение и канализация / <br> Структурированные кабельные системы /Электроснабжение и электроосвещение / Конструкции металлические</p> -->
						</p>
					</div>
<!-- 					
					<div>
						<p class="h1 title_smr"> СТРОИТЕЛЬНО-МОНТАЖНЫЕ <br> И ОТДЕЛОЧНЫЕ РАБОТЫ РЕСТОРАНОВ</p>
					</div>

					<p class="h2">
						Строим коммерческие помещения с нуля до пуска в 
						эксплуатацию и постгарантийного обслуживания
					</p>
				</div> -->
				
				<div class="title__button">
					<button class="button modal__btn">
						СВЯЗАТЬСЯ С НАМИ
					</button>
					<a href="#smr_about">
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
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/2.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/8.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/3.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/6.jpg.webp" alt="" loading="lazy"></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/9.jpg.webp" alt="" loading="lazy"></div>
        </div>
    	</div>

			<div class="video__con">
					<video class="video" loop="true" muted="true" autoplay="true" poster="">
						<source src="/assets/video/SMR.mp4" type="video/mp4">
					</video>
			</div>

		</article>


	<!-- SCREEN_2 ABOUT-->
	<article id="smr_about" class="about">
		<p class="h1 about__title">Укладываемся в срок арендных каникул и не выходим за бюджет сметы за счет того, что:</p>
		<div class="about__item about__smr">
			<p class="h3">
				<img src="/assets/icon/2.svg" alt="" loading="lazy">
				Cчитаем в смете все и сразу, не занижая количество и стоимость работ
			</p>
			<p class="h3">
				<img src="/assets/icon/9.svg" alt="" loading="lazy">
				Специализируемся на строительстве в ТЦ и БЦ
			</p>
			<p class="h3" >
				<img src="/assets/icon/1.svg" alt="" loading="lazy">	
				Жестко контролируем движение по графику производства работ
			</p>
			<p class="h3" >
				<img src="/assets/icon/10.svg" alt="" loading="lazy">
				Обеспечиваем выполнение работ в 2-3 смены
			</p>
			<p class="h3" >
				<img src="/assets/icon/3.svg" alt="" loading="lazy">
				Координируем работу смежных организаций
			</p>
		</div>
		<div class="about__column">
			<div>
				<div>
					<p class="h1 about__column_2">Создаем проект, смету и сроки СМР</p>
				</div>
				<p class="h3">Мы разрабатываем проекты в множество циклов, в каждом из которых происходят значительные изменения от первоначальной версии. Такой подход позволяет создать максимально-точный и грамотный проект, по которому не будет изменений в смете и сроках при строительстве.</p>
			</div>
			<div>
				<div>
					<p class="h1">Глубокое погружение в каждый проект</p>
				</div>
				<p class="h3">В целях экономии средств Заказчика уделяем внимание аспектам, выходящих за рамки нашей ответственности и даем рекомендации по исправлению/избеганию ошибок смежников</p>
			</div>
			<div>
				<div>
					<p class="h1">Рекомендации по исправлению/избеганию ошибок смежников</p>
				</div>
				<p class="h3">Выполняем весь спектр задач в рамках нашей основной компетенции, координируем субподрядные и смежные компании, работаем на один общий результат</p>
			</div>
			<div>
				<div>
					<p class="h1">Ежедневные фото и видео отчёты</p>
				</div>
				<p class="h3">На всех объектах установлено круглосуточное видеонаблюдение с доступом для Заказчика на удобное устройство. Каждый день от руководителя стройки приходит видео отчет о проделанной работе за предыдущий день</p>
			</div>
		</div>
		<button class="button-about button modal__KP">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>
	</article>

	

	<!-- SCREEN_3 ABOUT-->
	<article  class="about__3">
			
			<div class="cart-teh smr">
				<img class="element-animation " src="/assets/img/smr/1.png.webp" alt="" loading="lazy">
				<div class="title-teh_con element-animation">
					<p class="h1 title-teh">Специализация в ресторанной тематике</p>
					<p class="h2 text-teh">Работая с 2016 года в ремонте коммерческой недвижимости, основную часть опыта мы приобрели на объектах ресторанного назначения: от самых маленьких до двух- трехуровневых ресторанов большой площади. Наш опыт и знания позволяют решить любую задачу в сфере ресторанного бизнеса.</p>
				</div>
			</div> 
			
			<div class="smeta_con" id="smeta_con">
				<p class="h1"><span class="element-animation">Честные сметы.</span> Как известно, есть два метода работы с Клиентом.</p>
				
				<div class="cart-teh element-animation smeta">	
					<img  src="/assets/img/smr/$.svg" alt="" loading="lazy">
					<div class="title-teh_con smeta-title">
						<p class="h1 title-teh">Первый метод</p>
						<p class="h2 text-teh">Первый метод расчёта сметы рассчитан на тех, кто подбирает подрядчика преимущественно по цене. <br> <br>Зная это, подрядчики готовят сметы такие, чтобы выиграть конкурентную борьбу и подписать договор, а дальше разными методами «разгоняют» заказчика на дополнительные сметы, аргументируя это ошибками, допущенными самим же заказчиком по незнанию.<br> <br> Таких мест очень много и поле для «маневров» здесь большое, особенно в том случае, когда проектируют и строят разные компании.
						</p>
					</div>
				</div>

				<div class="cart-teh element-animation smeta">	
					<img  src="/assets/img/smr/2.svg" alt="" loading="lazy">
					<div class="title-teh_con smeta-title">
						<p class="h1 title-teh">Второй метод</p>
						<p class="h2 text-teh">Второй метод расчёта сметы заключается в том, что подрядная компания считает все и сразу, учитывая все возможные затраты, проектирует правильно, без «закладок» и возможных будущих изменений.<br> <br> Смета получается дороже, чем у тех, кто идёт по первому пути, но это даёт заказчику максимально приближенный вариант к действительным затратам, наиболее правдивую картину предстоящих инвестиций.<br> <br> Второй метод в итоге реализации проекта даёт существенную экономию заказчику, в сравнении с первым. В первом варианте Заказчик втянут в процесс и дороги назад нет, как нет потолка затрат.
						</p>
					</div>
				</div>

				<div class="cart-teh element-animation smeta">	
					<img src="/assets/img/smr/3.svg" alt="" loading="lazy">
					<div class="title-teh_con smeta-title">
						<p class="h1 title-teh">Во втором случае заказчик видит реальную сметную стоимость всех разделов проекта</p>
						<p class="h2 text-teh">Он убережён не только от неизвестного количества дополнительных затрат в ходе реализации инвестиций, но и от роста издержек (простой уже нанятого персонала, аренда, штрафы, налоги), но и, что наиболее важно, - от недополученной прибыли от срыва сроков начала работы ресторана. У второго метода есть один большой минус - при недостатке доверия у Заказчика часто складывается впечатление, что его «разводят» и хотят на нем излишне «навариться».<br><br> Ценность честности очевидна только при негативном опыте Заказчика, который столкнулся прежде с заниженной сметой, а в итоге переплатил в процессе, и, например, за год от начала инвестирования вернул себе гораздо меньше денег, чем если бы работал с такой компанией как наша
						</p>
					</div>
				</div>

				<div class="cart-teh element-animation smeta">	
					<img src="/assets/img/smr/4.svg" alt="" loading="lazy">
					<div class="title-teh_con smeta-title">
						<p class="h1 title-teh">Как мы считаем сметы?</p>
						<p class="h2 text-teh">Мы считаем сметы только на основании проектов и только после личной встречи с Заказчиком и осмотра объекта. Именно тогда мы можем получить наиболее полную картину расходов.<br><br> Расчет на основании одной лишь площади и без встречи с Заказчиком мы не делаем и считаем подобный расчет крайне непрофессиональным.<br><br> Надеемся, что именно из этого и сложилась наша репутация на рынке.
						</p>
						<button class="button smeta-btn modal__btn">НАЗНАЧИТЬ ВСТРЕЧУ</button>
					</div>
				</div>

				<div class="cart-teh element-animation smeta ">	
					<img src="/assets/img/smr/5.svg" alt="" loading="lazy">
					<div class="title-teh_con smeta-title">
						<p class="h1 title-teh">Уже есть смета?<br>Проведем её аудит</p>
						<p class="h2 text-teh">Мы считаем сметы только на основании проектов и только после личной встречи с Заказчиком и осмотра объекта. Именно тогда мы можем получить наиболее полную картину расходов.<br><br> Расчет на основании одной лишь площади и без встречи с Заказчиком мы не делаем и считаем подобный расчет крайне непрофессиональным.<br><br> Надеемся, что именно из этого и сложилась наша репутация на рынке.
						</p>
						<div>
							<button class="button smeta-btn modal__btn">КОНСУЛЬТАЦИЯ</button>
							<button class="button smeta-btn modal__btn">ПОЛУЧИТЬ АУДИТ</button>
						</div>
					</div>
				</div>
			</div>
			<div class="info-block_3">
			<p class="h1 info_title  info_title-smr" >Неизменная смета с честными ценами на ремонт ресторана</p>
			<p class="h3 info_title-sub_3 chasto" >Еще до расчета сметы глубоко погружаемся в ваши проекты, прорабатываем их на предмет неточностей и наложений, тем самым исключая любые возможные изменения в количестве, стоимости и сроках во время строительно-монтажных работ.
				</p>
			
			<div class="info_check-con_3 info_check-con_3-smr">
				<div class="info_check  info_check-title-smr move-con">
					<dotlottie-player 
						class="info_ok_player move"
						id="info_ok_player_5"
						src="/assets/animation/ok.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title ">
						<p class="h2">Глубоко погружаемся в проект </p>
						<p class="h3">внимательно изучаем все его нюансы.</p>
						</div>
				</div>

				<div class="info_check  info_check-title-smr move-con">
					<dotlottie-player 
						class="info_ok_player move"
						id="info_ok_player_6"
						src="/assets/animation/ok.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title ">
						<p class="h2">Находим неточности</p>
						<p class="h3">нестыковки и разночтения в разных его разделах из-за которых может не сложиться проект.</p>
						</div>
				</div>

				<div class="info_check  info_check-title-smr move-con">
					<dotlottie-player 
						class="info_ok_player move"
						id="info_ok_player_7"
						src="/assets/animation/ok.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title">
						<p class="h2">Ищем варианты сокращения бюджета</p>
						<p class="h3"> за счет оптимальных технических решений.</p>
						</div>
				</div>

				<div class="info_check  info_check-title-smr move-con">
					<dotlottie-player 
						class="info_ok_player move"
						id="info_ok_player_8"
						src="/assets/animation/ok.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title ">
						<p class="h2">Даем список рекомендаций </p>
						<p class="h3">по улучшению и дополнению проектов. При необходимости помогаем Вам доработать проекты.</p>
						</div>
				</div>

				<div class="info_check  info_check-title-smr move-con">
					<dotlottie-player 
						class="info_ok_player move"
						id="info_ok_player_8"
						src="/assets/animation/ok.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title " >
						<p class="h2">Считаем смету </p>
						<p class="h3">по скорректированным проектам, не занижая количества и стоимости работ, чтобы «зайти» на объект.</p>
						</div>
				</div>

				<div class="info_check  info_check-title-smr move-con">
					<dotlottie-player 
						class="info_ok_player move"
						id="info_ok_player_8"
						src="/assets/animation/ok.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title">
						<p class="h2">Итоговую смету </p>
						<p class="h3">закрепляем в договоре на СМР.</p>
						</div>
				</div>	


			</div>
			
	</div>

			<div class="cart-teh smeta-team ">	
				<div class=" title-teh_con">
					<img class=" element-animation" src="/assets/img/smr/6.svg" alt="" loading="lazy">
					<p class="h1  element-animation title-teh">Команда инженеров и строителей</p>
					<p class="h2  element-animationtext-teh">Наша команда сформировалась исходя из точки приложения усилий.
					Объекты мы сдаем в срок и добиваемся результата системной планомерной работой.</p>
				</div>
				<img class="element-animation" src="/assets/img/smr/3.jpeg" alt="" loading="lazy">
			</div> 

			<<div class="smeta_con ">
				<p class="h1"> Мы собрали коллектив,<span class="element-animation">«заточенный»</span> на рестораны:</p>
				<div class="smeta-cart_con element-animation">
					<div class="smeta-cart ">
						<img src="/assets/img/smr/7.svg" alt="" loading="lazy">
						<p class="h1">Инженеры</p>
						<p class="h2">Весь состав ИТР нашей компании с высшим строительным и инженерным образованием.</p>
					</div>

					<div class="smeta-cart element-animation">
						<img src="/assets/img/smr/8.svg" alt="" loading="lazy">
						<p class="h1">Дизайнеры</p>
						<p class="h2">Наши дизайнеры имеют множественный успешный опыт ресторанных проектов.</p>
					</div>

					<div class="smeta-cart element-animation">
						<img src="/assets/img/smr/9.svg" alt="" loading="lazy">
						<p class="h1">Технологи</p>
						<p class="h2">Многие технологи помимо технического образования, до нас долго работали поварами в ресторане и знают изнутри как сделать правильно и удобно, а значит у команды ресторана есть где вкладывать душу в работу, что напрямую отражается на качестве кухни и репутации ресторана.</p>
					</div>
					
					<div class="smeta-cart element-animation">
						<img src="/assets/img/smr/10.svg" alt="" loading="lazy">
						<p class="h1">Строители</p>
						<p class="h2">Команда строителей обладает разносторонней квалификацией и имеет опыт в ремонте ресторанов, умеет воплотить все задумки дизайнера и пожелания Заказчика.</p>
					</div>
				</div>
			</div>


			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/smr/1.webp" alt="" loading="lazy">
				<div class="title-teh_con">
					<p class="h1 title-teh">Взаимодействие и согласования со службами ТЦ или БЦ</p>
					<p class="h2 text-teh">Основной пул наших объектов был реализован в торговых и бизнес-центрах. Мы часто сдаем свои объекты службам ТЦ до открытия и запуска в эксплуатацию самого ТЦ.<br><br>Это снижает риски владельцев ТЦ, а их команде легче управлять своими критическими линиями.</p>
					<ul>
						<li>Хорошо представляем себе работу со службами эксплуатации ТЦ</li>
						<li>Знаем, как спроектировать и согласовать все разделы проектов</li>
						<li>Умеем договориться с инженерами ТЦ о нестандартных решениях</li>
						<li>Заранее готовим исполнительную документацию</li>
					</ul>
				</div>
			</div>

			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/smr/2.webp" alt="" loading="lazy">
				<div class="title-teh_con">
					<p class="h1 title-teh">Координация смежных организаций</p>
					<p class="h2 text-teh">Проектирование и ремонт/ реконструкция ресторанов - довольно длительный и технологически сложный процесс. Координация деятельности смежных организаций с нашей стороны даёт Заказчику не только выигрыш во времени, но и снижает его управленческие расходы.</p>
					<ul>
						<li>Координируем работу всех смежных организаций, контролируем их.</li>
						<li>Следим за графиком производства работ.</li>
						<li>Контролируем технические задания на производство изделий.</li>
						<li>Склеиваем весь процесс для достижения одного общего результата.</li>
					</ul>
				</div>
			</div>

			<div class="smeta-banner element-animation_up">
				<p class="h1">Следует отметить, что мы можем не выполнять эту работу</p>
				<p class="h2">По опыту, успех проекта и сдача его в срок возможны только при общей координации подрядчиков.<br>
						Это экономит средства и силы Заказчика на разбирательствах с каждым исполнителем и исключает риск отсрочки открытия ресторана.<br>
						Заказчик экономит так, как если бы он нанимал дорогостоящую EPCM компанию для управления проектом.
					</p>
			</div> 

			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/smr/4.jpg.webp" alt="" loading="lazy">
				<div class="title-teh_con">
					<p class="h1 title-teh">Сервисное обслуживание</p>
					<p class="h2 text-teh">Мы дарим своим клиентам после запуска объекта в эксплуатацию один год сервисного обслуживания.<br><br>Даже если мы не строили Ваш ресторан, мы готовы взять его на сервисное обслуживание и выполнить отдельные виды работ</p>
					<ul>
						<li>Целый год ресторан находится под присмотром</li>
						<li>После 1 года обслуживания возможен сервис на договорных условиях</li>
					</ul>
				</div>
			</div>

			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/smr/2.jpg.webp" alt="" loading="lazy">
				<div class="title-teh_con">
					<p class="h1 title-teh">Сдача объектов в срок</p>
					<p class="h2 text-teh">При должном финансировании укладываемся в сжатые сроки, обеспечивая выполнение работ в 2-3 смены. Нелишне повторить, что это экономит Заказчику гораздо больше денег, чем на «дешевых» сметах, где срыв сроков неизбежен.</p>
					<ul>
						<li>Ресторан начинает работать в срок, прибыль не упускается, издержки сокращаются.</li>
					</ul>
				</div>
			</div>

	</article>




		<!-- --------------------------------------- -->
	
	<!-- FOTTER -->
	<?php
		include('../components/footer.php')
	?>


</body>
</html>
