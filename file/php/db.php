<?
$server = "localhost";
$login = "root";
$password = "";
$db_name = "teatre";

$conn = mysqli_connect($server, $login, $password, $db_name);

if (!$conn)
    die('Connection failed...' . mysqli_connect_error());
else
    "Success!";