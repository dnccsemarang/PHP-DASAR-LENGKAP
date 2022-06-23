<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/RemoveTodoLits.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Eko");
addTodoList("Budi");
addTodoList("Joko");

showTodoList();

removeTodoList(3);
showTodoList();

removeTodoList(1);
showTodoList();

$success = removeTodoList(5);
var_dump($success);


