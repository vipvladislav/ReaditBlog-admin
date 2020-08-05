<?php
require_once ('../src/functions.php');


// ================================ Все работает в файле createArticle.php !!!==================


//$connection = connection();
//
//debug($_SERVER);
//
//if ('POST' === $_SERVER['REQUEST_METHOD']){
//
//    $id = (int)($_POST['id'] ?? 0);
//    $title = mysqli_real_escape_string($connection, $_POST['title'] ?? '');
//    $category = (int)($_POST['category'] ?? null);
//    $content = mysqli_real_escape_string($connection, $_POST['content'] ?? '');
//    mysqli_query($connection, "INSERT INTO `articles`(`id`, `title`, `content`, `created`, `image`, `category`) VALUES (NULL, '$title', '$content', NULL, '', NULL )");
// }


//
//if (isset($_POST['title']) && ($title = $_POST['title'])){
////    debug($_SERVER);
////    debug($_POST);
////if ('POST' === $_SERVER['REQUEST_METHOD']) {
//    $id = (int)($_POST['id'] ?? 0);
//    $title = mysqli_real_escape_string($connection, $_POST['title'] ?? '');
//    $category = (int)($_POST['category'] ?? null);
//    $content = mysqli_real_escape_string($connection, $_POST['content'] ?? '');
//    $queryI = createArticle($title, $content, $connection = null);
//    $textI = $connection-> prepare($queryI);
//    $textI -> execute(['name' => $_POST['name']]);
//    $queryI = createArticle($title, $content, $connection = null);
//    debug($_POST);
//    header('location: index.php');
////        return createArticle($title, $content, $category, $connection = null);
//    redirect();
//}


