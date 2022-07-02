<?php

require_once __DIR__ . "/getConnection.php";
require_once __DIR__ . "/Model/Comment.php";
require_once __DIR__ . "/Repository/CommentRepository.php";

use Model\Comment;
use Repository\CommantRepositoryImpl;

$conn = getConnection();
$repository = new CommantRepositoryImpl($conn);

// $commant = new Comment(null,"RepositoryLagi@test.com", "Repository Test");
// $newCommant = $repository->insert($commant);

$commant = $repository->findAll();
var_dump($commant);

$conn = null;