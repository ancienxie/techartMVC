<div class="nav">
		<ul class="nav__elem">
		<?php
			// Формирование ссылок на страницы
			for ($i = 1; $i <= $newsBlocksAmount; $i++): 
		?>
			<li>
				<a href="?page=<?=$i?>" class="nav__elem--button <?=($i == $currNewsBlock) ? 'nav__elem--button-flag' : ''?>">
					<?=$i?>
				</a>
			</li>
		<?php 
			endfor; 
		?>
			<li class="nav__elem--button-li"><a href="?page=<?=min($currNewsBlock + 1, $newsBlocksAmount)?>"><div class="nav_elem--button--arrow" id="arrow-2"></div></a></li>
		</ul>
</div>