<?php
//function filelist(string $path){
//    $dir = opendir('.');
//
//    while($name = readdir($dir)){
//    if (in_array($name, ['.', '..'])){
//        continue;
//    }
//    if(is_dir($name)){
//        echo sprintf('<li><b>[%s]</b></li>', $name);
//    } else {
//        echo sprintf('<li>%s</li>', $name);
//    }
//}
//echo '</ul>';
//
//closedir($dir);
//}

ob_start();

session_start();

$welcome = 'Ви новий кроистувач';
if (!empty($_COOKIE['userName'])) {
    $welcome = $_COOKIE['userName'];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    define('UPLOAD_FOLDER', 'upload');

    if (isset($_FILES['avatar']) && is_array($_FILES['avatar'])){
        if (UPLOAD_ERR_OK === $_FILES['avatar']['error']){
            if (!file_exists('UPLOAD_FOLDER')){
                mkdir(UPLOAD_FOLDER, 0777);
            }
            $fileName = $_FILES['avatar']['name'];
            $tmp = $_FILES['avatar']['tmp_name'];

            move_uploaded_file($tmp, sprintf('%s/%s', UPLOAD_FOLDER, $fileName));

        } else {
            echo 'Something went wrong!';
        }
    }
}


if (isset($_POST['name']) && $_POST['name']) {
    $name = trim(strip_tags($_POST['name']));
    setcookie('userName', $name, time() + 10);



    $welcome = $name;

    header('Location: ' . $_SERVER['PHP_SELF']);
    $age = $_POST['age'] ?? '';
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;



    $data = sprintf('Name: %s | Age: %s %s', $name, $age, PHP_EOL);
    file_put_contents('usersM.php', $data, FILE_APPEND);
    chmod('usersM.php', 0646);

    header('Location: ' . $_SERVER['PHP_SELF']);
    header('HTTP/1.1 301 Moved permanently');// =======================
    exit;
   }



ob_end_clean();
//    header('Content-Disposition: attachment; filename="myFile.txt"');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
    Hello!!!
    <?php
    echo $welcome;
    ?>

    Session values:
    <?php
    session_destroy();

    echo $_SESSION['name'] ?? '', ' | ', $_SESSION['age'] ?? '';
    ?>
</h1>

<form action="" method="post" enctype="multipart/form-data">
    <label for="name-id">Name</label>
    <input id="name-id" type="text" name="name">
    <br>
    <label for="age-id">Age</label>
    <input id="age-id" type="text" name="age">
    <br>
    <label for="age-id">Avatar</label>
    <input type="file" name="avatar">
    <br>
    <input type="submit" value="SEND">
</form>
<a id="Download" href="usersM.php">Download</a>

<?php



if (file_exists('usersM.php')) {
    $myFale = fopen('usersM.php', 'r');

    while ($row = fgets($myFale)) {
//        echo '<br>' . $row;
    }
    fclose($myFale);
}

//$fileUsers = file_get_contents('usersM.txt');
//if (isset($fileUsers)){
//    echo $fileUsers . '<br>';
//}

?>

</body>
</html>

