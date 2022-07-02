<?php

namespace Repository {

    use Entity\Todolist;

    interface TodolistRepository
    {
        function save(Todolist $todolist): void;
        function remove(int $number): bool;
        function findAll(): array;
    }

    class TodoListRepositoryImpl implements TodolistRepository
    {
        public array $todolist = array();

        // boleh \PDO atau PDO saja
        private \PDO $connection ;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        function save(Todolist $todolist): void
        {
            // $number = sizeof($this->todolist) + 1;
            // $this->todolist[$number] = $todolist;

            $sql = "INSERT INTO todolist (todo) VALUES (?)";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$todolist->getTodo()]);
        }
        function remove(int $number): bool
        {
            // if ($number > sizeof($this->todolist)) {
            //     return false;
            // }

            // for ($i = $number; $i < sizeof($this->todolist); $i++) {
            //     $this->todolist[$i] = $this->todolist[$i + 1];
            // }

            // unset($this->todolist[sizeof($this->todolist)]);

            // return true;
            
            $sql = "SELECT id FROM todolist WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$number]);

            if($stmt->fetch()) {
                $sql = "DELETE FROM todolist WHERE id = ?";
                $stmt = $this->connection->prepare($sql);
                $stmt->execute([$number]);
                return true;
            } else {
                return false;
            }  
        }

        function findAll(): array
        {
            // return $this->todolist;

            $sql = "SELECT * FROM todolist";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            $result = array();
            foreach ($stmt as $row) {
                $todolist = new Todolist();
                $todolist->setId($row['id']);
                $todolist->setTodo($row['todo']);
                $result[] = $todolist;
            }
            return $result;
        }
    }
}
