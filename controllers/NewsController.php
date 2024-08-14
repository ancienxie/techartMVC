<?php
	// Подключение модели
	require_once './NewsModel.php';

	class NewsController
	{
		// Количество новостей на странице
		private $newsPerBlock = 4;

		public function getNewsBlock()
		{
			// Получаем номер текущего блока новостей из GET-запроса или устанавливаем 1, если номер блока не указан
			$newsBlock = isset($_GET['page']) ? (int)$_GET['page'] : 1;
			return $newsBlock;
		}

		public function displayNews()
		{
			// Получаем номер текущего блока новостей
			$newsBlock = self::getNewsBlock();

			// Вычисляем offset для SQL запроса
			$offset = ($newsBlock - 1) * $this->newsPerBlock;

			// Вызываем статическую функцию getRows из NewsModel
			$news = NewsModel::getRows($offset, $this->newsPerBlock);

			return $news;
		}

		public function countNewsBlocks()
		{
			// Подсчет кол-ва новостей
			$count = NewsModel::getCount();
			
			// Расчет количества блоков новостей
			$newsBlocks = ceil($count / 4);

			return $newsBlocks;
		}

		public function getNews()
		{
			return NewsModel::getLast();
		}

		public function newsId()
		{
			// Получение номера статьи
			$id = $_GET['id'] ?? 0; 
			return NewsModel::getItem($id);
		}
	}
?>