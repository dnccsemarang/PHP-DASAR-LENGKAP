<?php

namespace Services {

    use Entity\Todolist;
    use Repository\TodolistRepository;

    interface TodolistService
    {
        function showTodolist();
        function addTodolist(string $todo): void;
        function removeTodolist(int $number): void;
    }

    class TodoListServiceImpl implements TodolistService
    {

        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        function showTodolist()
        {
            echo "TODOLIST" . PHP_EOL;

            foreach ($this->todolistRepository->findAll() as $number => $value) {
                echo "$number.".$value->getTodo() . PHP_EOL;
            }
        }
        function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
            echo "Sukses menambah data".PHP_EOL ;
        }

        function removeTodolist(int $number): void
        {
            if($this->todolistRepository->remove($number)) {
                echo "Sukses hapus".PHP_EOL;
            }else {
                echo "gagal hapus".PHP_EOL;
            }
        }
    }
}
