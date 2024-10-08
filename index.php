<?php
	// Подключение модели
	require_once "./NewsModel.php";

	// Подключение контроллера
	require_once "./controllers/NewsController.php";

	// Создание экземпляра контроллера
	$controller = new NewsController();

	// Получение списка новостей начиная с последней 
	$row = $controller->getNews();

	// Получение текущего блока новостей
	$currNewsPage = $controller->getNewsPage();

	// Вывод новостей с учетом пагинации
	$news = $controller->displayNews();

	// Получение кол-ва страниц
	$pagesAmount = $controller->countNewsPages();

	// Подключение верстки главной страницы
	include "./homePage.php";
?>