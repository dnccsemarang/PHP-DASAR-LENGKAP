<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("eko");
addTodoList("dar");
addTodoList("mawan");

viewAddTodoList();

showTodoList();