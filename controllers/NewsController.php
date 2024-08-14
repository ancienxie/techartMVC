<?php
// Подключение класса NewsModel
require_once './NewsModel.php';

class NewsController
{
	// Количество новостей на странице
	private $newsPerPage = 4;

	public function getPage()
	{
		// Получаем номер текущей страницы из GET-запроса или устанавливаем 1, если страница не указана
		$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
		return $page;
	}

	public function displayNews()
	{
		// Получаем номер текущей страницы
		$page = self::getPage();

		// Вычисляем offset для SQL запроса
		$offset = ($page - 1) * $this->newsPerPage;

		// Вызываем статическую функцию getRows из модели NewsModel
		$news = NewsModel::getRows($offset, $this->newsPerPage);

		return $news;
	}
}
?>