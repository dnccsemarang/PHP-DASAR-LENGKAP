<?php
require_once __DIR__ ."/../Entity/Todolist.php";
require_once __DIR__ ."/../Service/TodolistService.php";
require_once __DIR__ ."/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Repository\TodoListRepositoryImpl;
use Services\TodoListServiceImpl;
use View\TodolistView;


function testViewShowTodolist() :void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodolistView($todoListService);

    $todoListService->addTodolist("asas");
    $todoListService->addTodolist("assdds");
    $todoListService->addTodolist("assddewewewe");

    $todoListView->showTodolist();
}

function testViewAddTodolist() :void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodolistView($todoListService);

    $todoListService->addTodolist("asas");
    $todoListService->addTodolist("assdds");
    $todoListService->addTodolist("assddewewewe");
    
    $todoListService->showTodolist();

    $todoListView->addTodolist();

    $todoListView->showTodolist();
}
function testViewRemoveTodolist() :void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodolistView($todoListService);

    $todoListService->addTodolist("asas");
    $todoListService->addTodolist("assdds");
    $todoListService->addTodolist("assddewewewe");
    
    $todoListService->showTodolist();
    
    $todoListView->removeTodolist();
    
    $todoListService->showTodolist();
    
    $todoListView->removeTodolist();
    
    $todoListView->showTodolist();
}

// testViewShowTodolist();
// testViewAddTodolist();
testViewRemoveTodolist();