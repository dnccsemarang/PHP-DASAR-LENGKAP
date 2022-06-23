<?php

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";


require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";


function viewShowTodoList(){
   while (true){
    showTodoList();

    echo "MENU".PHP_EOL;
    echo "1. Tambah Todo". PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar".PHP_EOL;

    $pilihan = input("Pilih");
    if($pilihan == "1"){
        viewAddTodoList();
    }elseif($pilihan == "2"){
        viewRemoveTodoList();
    }elseif($pilihan == "x"){
        break;
    }else {
        echo "Pilihan tidak di mengerti".PHP_EOL;
    }
   }

   echo "Sampai Jumpa lagi";
}