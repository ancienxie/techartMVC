<?php
	if($row)
		{
	?>

	<body>
		<div class="news-block">
			<?php
				// Подключение вехнего блока с навигацией и названием
				include "./newsBlockTop.php";

				// Подключение блока с основной информацией (дата, текст, картинка)
				include "./newsBlockSection.php";
			?>
		</div>

	</body>
	
<?php
	}
	else
	{
		echo "Новость отсутствует";
	} 
?>