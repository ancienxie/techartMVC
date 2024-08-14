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