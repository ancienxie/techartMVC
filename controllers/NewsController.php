<?php
	// Подключение модели
	require_once './NewsModel.php';

	class NewsController
	{
		// Количество новостей на странице
		private $newsPerPage = 4;

		public function getNewsPage()
		{
			// Получаем номер текущего блока новостей из GET-запроса или устанавливаем 1, если номер блока не указан
			$newsPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
			return $newsPage;
		}

		public function displayNews()
		{
			// Получаем номер текущего блока новостей
			$newsPage = self::getNewsPage();

			// Вычисляем offset для SQL запроса
			$offset = ($newsPage - 1) * $this->newsPerPage;

			// Вызываем статическую функцию getRows из NewsModel
			$news = NewsModel::getRows($offset, $this->newsPerPage);

			return $news;
		}

		public function countNewsPages()
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

		public function actionList($pageNum)
		{
			
		}

		public function actionDetail($id)
		{
			
		}
	}
?>