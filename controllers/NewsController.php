<?php
	// Подключение модели
	require_once './NewsModel.php';

	class NewsController
	{
		// Количество новостей на странице
		private $limit = 4;

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
			$offset = ($newsPage - 1) * $this->limit;

			// Вызываем статическую функцию getRows из NewsModel
			$news = NewsModel::getRows($offset, $this->limit);

			return $news;
		}

		public function countNewsPages()
		{
			// Подсчет кол-ва новостей
			$count = NewsModel::getCount();

			return $count;
		}

		public function getNews()
		{
			// Получение списка новостей
			$req = NewsModel::getLast();

			return $req;
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