<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";


function viewAddTodoList(){
    echo "MENAMBAH TODO".PHP_EOL;

    $todo = input("Todo(x untuk batal) ");

    
    if($todo == "x"){
        //
    }else{
        addTodoList($todo);
    }
}