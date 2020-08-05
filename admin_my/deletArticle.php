<?php
require_once('../src/functions.php');
$connection = connection();

$id = null;

if ('POST' === $_SERVER['REQUEST_METHOD']) {
$id = (int)($_POST['id'] ?? 0);
deleteArticle($id);
redirect();
}