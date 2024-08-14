<div class="nav">
		<ul class="nav__elem">
		<?php
			// Формирование ссылок на страницы
			for ($i = 1; $i <= $pagesAmount; $i++): 
		?>
			<li>
				<a href="?page=<?=$i?>" class="nav__elem--button <?=($i == $currNewsPage) ? 'nav__elem--button-flag' : ''?>">
					<?=$i?>
				</a>
			</li>
		<?php 
			endfor; 
		?>
			<li class="nav__elem--button-li"><a href="?page=<?=min($currNewsPage + 1, $pagesAmount)?>"><div class="nav_elem--button--arrow" id="arrow-2"></div></a></li>
		</ul>
</div>