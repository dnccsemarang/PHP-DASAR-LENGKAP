<?php

require_once "../Model/Todolist.php";

require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Rizki");
addTodoList("Darmawan");

var_dump($todolist);
