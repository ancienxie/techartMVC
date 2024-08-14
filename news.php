<?php 
	// Подключение модели
	require_once "./NewsModel.php";

	// Подключение контроллера
	require_once "./controllers/NewsController.php";

	// Создание экземпляра контроллера
	$controller = new NewsController();

	// Получение номера статьи
	$row = $controller->newsId();

	// Подключение верстки
	include "./newsPage.php";
?>