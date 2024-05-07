<?
require_once('db.php');

$myArray = $_POST['chosen'];
$arr = explode(',', $myArray);
$seats = [];

for ($i = 0; $i < count($arr); $i++) {
    preg_match('/([A-Za-z]+)(\d+)/', $arr[$i], $matches);

    $row = $matches[1];
    $rowId = $matches[2];
    
    $newSeatSql = "UPDATE `place` SET `status` = 1 WHERE `row` = '$row' AND `rowId` = '$rowId'";
    if ($conn->query($newSeatSql) === true) {

        $sqlPlaceId = "SELECT id FROM `place` WHERE `row` = '$row' AND `rowId` = '$rowId'";
        $resultPlace = $conn->query($sqlPlaceId);

        $row = $resultPlace->fetch_assoc();
        $id = $row['id'];

        $seats[$i] = $id;
    } else {
        echo 'Ошибка!';
    }
}
setcookie("seatId", implode(',', $seats), time() + 3600, '/amfiteatr');
header("Location: deal.php");