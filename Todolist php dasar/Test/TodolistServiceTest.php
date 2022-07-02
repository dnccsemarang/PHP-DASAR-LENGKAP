<?php

require_once __DIR__ ."/../Entity/Todolist.php";
require_once __DIR__ ."/../Config/Database.php";
require_once __DIR__ ."/../Service/TodolistService.php";
require_once __DIR__ ."/../Repository/TodolistRepository.php";

use Config\Database;
use Entity\Todolist;
use Repository\TodoListRepositoryImpl;
use Services\TodoListServiceImpl;

function testShowTodo(): void {
    $connection = Database::getConnection();
    $todolistRepository = new TodoListRepositoryImpl($connection);
    // $todolistRepository->todolist[1] = new Todolist("Belajar");
    $todolistService = new TodoListServiceImpl($todolistRepository);
    
    $todolistService->showTodolist();
}

function TestAddTodo(): void {
    $connection = Database::getConnection();
    $todolistRepository = new TodoListRepositoryImpl($connection);
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar Todo");
    $todolistService->addTodolist("Belajar php database");
    
    // $todolistService->showTodolist();
}

function testRemoveTodo(): void {
    $connection = Database::getConnection();
    $todolistRepository = new TodoListRepositoryImpl($connection);
    $todolistService = new TodoListServiceImpl($todolistRepository);
    // $todolistService->addTodolist("Belajar PHP");
    // $todolistService->addTodolist("Belajar Todo");
    // $todolistService->addTodolist("Belajar php database");

    // $todolistService->showTodolist();
    
    // $todolistService->removeTodolist(4);
    // $todolistService->showTodolist();

    echo $todolistService->removeTodolist(5);
    echo $todolistService->removeTodolist(4);
    echo $todolistService->removeTodolist(3);
    echo $todolistService->removeTodolist(2);
    echo $todolistService->removeTodolist(1);
    
}

// TestAddTodo();
// testRemoveTodo();
testShowTodo();