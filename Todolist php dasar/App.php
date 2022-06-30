<?php

// require_once __DIR__ . "/Model/Todolist.php";
// require_once __DIR__ . "/BusinessLogic/AddTodoList.php";
// require_once __DIR__ . "/BusinessLogic/RemoveTodoLits.php";
// require_once __DIR__ . "/BusinessLogic/ShowTodoList.php";

// require_once __DIR__ . "/View/ViewAddTodoList.php";
// require_once __DIR__ . "/View/ViewRemoveTodoList.php";
// require_once __DIR__ . "/View/ViewShowTodoList.php";
// require_once __DIR__ . "/Helper/Input.php";


// echo "Aplikasi TodoList". PHP_EOL ;

// viewShowTodoList();


//  oop

// use Entity\Todolist;
use Repository\TodoListRepositoryImpl;
use Services\TodoListServiceImpl;
use View\TodolistView;

require_once __DIR__ . "/Entity/Todolist.php";
require_once __DIR__ . "/Helper/InputHelper.php";
require_once __DIR__ . "/Repository/TodolistRepository.php";
require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/View/TodolistView.php";

echo "Aplikasi TodoList". PHP_EOL ;

$todolistRepository = new TodoListRepositoryImpl();
$todolistService = new TodoListServiceImpl($todolistRepository);
$todolistView  = new TodolistView($todolistService);

$todolistView->showTodolist();