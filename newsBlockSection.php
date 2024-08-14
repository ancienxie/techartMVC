<section class="news-block__section">
	<ul class="news-block__section-left">
		<li class="news-block__date">
			<p>
				<?=$row['news_date']?>
			</p>
		</li>
		<li class="news-block-announce">
			<h2>
				<?=strip_tags($row['announce'])?>
			</h2>
		</li>
		<li class="news-block--content">
			<p class="news-block--content--p">
				<?=strip_tags($row['content'])?>
			</p>
		</li>
		<li class="news-block__button">
			<a href="./index.php" class="news-block__button--text">
				<div id="arrow-3"></div>
				НАЗАД К НОВОСТЯМ
			</a>
		</li>
	</ul>
	<ul>
		<li>
			<img class="news-block__section-right--img" src="../images/<?=$row['image']?>" alt="Картинка">
		</li>
	</ul>
</section>