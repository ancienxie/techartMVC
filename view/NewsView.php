<?php
	require_once "./NewsModel.php";
	require_once "./controllers/NewsController.php";
    
    // Подключение БД и 
	// получение списка новостей начиная с последней 
	$row = NewsModel::getLast();

	// Создание экземпляра контроллера
	$controller = new NewsController();

	// Получение текущей страницы
	$page = $controller->getPage();

	// Вывод новостей с учетом пагинации
	$news = $controller->displayNews();