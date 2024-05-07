<?
require_once('db.php');
$mail = $_POST['regLogin'];
$password = $_POST['regPassword'];

$newUserSql = "INSERT INTO `users` (mail, password, userStatus) VALUES ('$mail', '$password', '1')";

if ($conn->query($newUserSql) === true) {
    setcookie('access', $mail, time() + 3600, '/amfiteatr');
    header("Location: ../../index.php");
} else {
    header("Location: ../../register.php");
}