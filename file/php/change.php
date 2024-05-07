<?
require_once('db.php');

$login = $_COOKIE['access'];
$name = $_POST['changeName'];
$telephone = $_POST['changeTelephone'];
$mail = $_POST['changeLogin'];

$sql = "UPDATE `users` SET `name` = '$name', `number` = '$telephone', `mail` = '$mail' WHERE `mail` = '$login'";

if ($conn->query($sql) === true) {
    setcookie("access", $mail, time() + 3600, '/amfiteatr');
    header("Location: ../../profile.php");
} else {
    echo 'Ошибка!';
}