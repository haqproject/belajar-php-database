<?php


require_once __DIR__ . "/GetConnection.php";
require_once __DIR__ . "/Model/Comment.php";
require_once __DIR__ . "/Repository/CommentRepository.php";

use Model\Comment;
use Repository\CommentRepositoryImpl;


$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

$comment = new Comment(email: "test@repo.com", comment: "komen repo");
$newComment = $repository->insert($comment);

var_dump($newComment->getId());

$comment = $repository->findById(21);
var_dump($comment);

$comment = $repository->findAll();
var_dump($comment);

$connection = null;