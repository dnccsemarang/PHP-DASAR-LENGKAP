<?php

require_once __DIR__ ."/../Entity/Todolist.php";
require_once __DIR__ ."/../Service/TodolistService.php";
require_once __DIR__ ."/../Repository/TodolistRepository.php";

use Entity\Todolist;
use Repository\TodoListRepositoryImpl;
use Services\TodoListServiceImpl;

function testShowTodo(): void {
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Belajar");
    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

function TestAddTodo(): void {
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar Todo");
    $todolistService->addTodolist("Belajar php database");

    $todolistService->showTodolist();
}

function testRemoveTodo(): void {
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar Todo");
    $todolistService->addTodolist("Belajar php database");

    $todolistService->showTodolist();
    
    $todolistService->removeTodolist(4);
    $todolistService->showTodolist();
}

// TestAddTodo();
testRemoveTodo();