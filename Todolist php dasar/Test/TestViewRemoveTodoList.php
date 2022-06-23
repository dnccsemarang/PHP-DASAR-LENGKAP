<?php

require_once "../Model/Todolist.php";

require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Rizki");
addTodoList("Darmawan");

viewRemoveTodoList();

showTodoList();

