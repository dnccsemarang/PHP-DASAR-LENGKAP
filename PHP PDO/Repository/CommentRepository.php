<?php

namespace Repository {

    use Model\Comment;

    interface CommantRepository 
    {
        function insert(Comment $commant): Comment;

        function findById(int $id): ?Comment;

        function findAll(): array;
    }


    class CommantRepositoryImpl implements CommantRepository {
        
        private $connection;
        
        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }
        
        public function insert(Comment $commant): Comment
        {
            $sql = "INSERT INTO comments (email, comment) VALUES (:email, :comment)";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue("email", $commant->getEmail());
            $stmt->bindValue("comment", $commant->getComment());
            $stmt->execute();
            $commant->setId($this->connection->lastInsertId());
            return $commant;
        }
        
        public function findById(int $id): ?Comment
        {
            $sql = "SELECT * FROM comments WHERE id = :id";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue("id", $id);
            $stmt->execute();
            $row = $stmt->fetch();
            if($row){
                return new Comment($row["id"], $row["email"], $row["comment"]);
            }
            return null;
        }
        
        public function findAll(): array
        {
            $sql = "SELECT * FROM comments";
            $stmt = $this->connection->query($sql);
            // $stmt->execute();
            // $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            $array = [];
            while ($row = $stmt->fetch()) {
                $array[] = new Comment($row["id"], $row["email"], $row["comment"]);
            }
            return $array;
        }
    }
}