<?
require_once('db.php');

$login = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE mail = '$login' AND password = '$password'";
$statusChange = "UPDATE `users` SET userStatus = '1' WHERE mail = '$login'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    setcookie('access', 'yes', time() + 3600, 'localhost/amfiteatr');
    $conn->query($statusChange);
} else {
    setcookie('access', 'error', time() + 3600, 'localhost/amfiteatr');
}

header("Location: ../../login.php");
exit();