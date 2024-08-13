<?php 
	include "./header.php";
	require_once "./NewsModel/NewsModel.php";

	// Подключение БД и 
	// получение списка новостей начиная с последней 
	$row = NewsModel::getLast();

	// Получение текущей страницы
	$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

	// Вывод новостей с учетом пагинации
	$news = NewsModel::getRows($page,4);
?>
	<div style="background-image: url(./images/<?=$row['image']?>);" class="ban-image">
		<section   class="ban-image__text">
			<h1 class="ban-image__text--title"><?=$row['title']?></h1>
			<p class="ban-image__text--info"><?=strip_tags($row['announce'])?></p>
		</section>
	</div>

	<div class="main-info">
		<section class="main-info__title">
				<h1 class="main-info__title--text">Новости</h1>
		</section>

		<section class="main-info__block">
		<?php
			foreach($news as $row)
			{
		?>
			<ul class="main-info__block--news">
				<li class="main-info__block--date"><p><?=$row['news_date']?></p></li>
				<li class="main-info__block--title"><h2><?=$row['title']?></h2></li>
				<li class="main-info__block--text"><p><?=strip_tags($row['announce'])?></p></li>
				<li class="main-info__block--button">
					<a href="./news.php?id=<?=$row['id']?>" class="main-info__block--button--text">
						ПОДРОБНЕЕ<div id="arrow-1"></div>
					</a>
				</li>
			</ul>
		<?php
			}
		?>   
		</section>
	</div>

	<div class="nav">
		<ul class="nav__elem">
			<?php
				// Подсчет кол-ва новостей
				$count = NewsModel::getCount();

				// Расчет кол-ва страниц
				$pages = ceil($count / 4);

				// Формирование ссылок на страницы
				for ($i = 1; $i <= $pages; $i++): ?>
					<li>
						<a href="?page=<?=$i?>" class="nav__elem--button <?=($i == $page) ? 'nav__elem--button-flag' : ''?>">
							<?=$i?>
						</a>
					</li>
				<?php endfor; ?>
			
			<li class="nav__elem--li"><a href="?page=<?=min($page + 1, $pages)?>" class="nav__elem--button"><div class="nav_elem--button--arrow" id="arrow-2"></div></a></li>
		</ul>
	</div>
		
<?php include "./footer.php"?>
