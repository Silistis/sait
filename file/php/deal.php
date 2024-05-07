<?
require_once('db.php');

function generateRandomDigits($length = 20) {
    $digits = '';
    for ($i = 0; $i < $length; $i++) {
        $digits .= mt_rand(0, 9);
    }
    return $digits;
}
function Cost($arr) {
    $cost = 0;
    for ($i = 0; $i < count($arr); $i++)  {
        $cost += 500;
    }
    return $cost;
}
$seatId = explode(',', $_COOKIE['seatId']);
$userMail = $_COOKIE['access'];

$userIdSql = "SELECT `id` FROM `users` WHERE `mail` = '$userMail'";

$userIdResult = $conn->query($userIdSql);
$arrResult = $userIdResult->fetch_assoc();

$user_id = $arrResult['id'];

$cost = Cost($seatId);

for ($i = 0; $i < count($seatId); $i++) {
    $seat = $seatId[$i];

    $randomDigits = generateRandomDigits();

    $recieptSql = "SELECT * FROM `users` WHERE `reciept` = $randomDigits";
    $result = $conn->query($recieptSql);
    
    
    while ($result->num_rows < 0) {
        $randomDigits = generateRandomDigits();
    }

    $dealSql = "INSERT INTO `userDeal` (user_id, place_id, receipt, cost) VALUES ('$user_id', '$seat', '$randomDigits', '500')";
    $conn->query($dealSql);
}
header("Location: ../../booking.php");