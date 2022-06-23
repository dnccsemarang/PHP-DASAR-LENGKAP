<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoLits.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo";
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "hapus sukses";
        } else {
            echo "gagal hapus";
        }
    }
}
