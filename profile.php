<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AMFITEATR: Профиль</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="file/img/logo.ico" type="image/png">
        <script src="file/js/lib/jQuery.js"></script>
        <script src="file/js/lib/inputMask.js"></script>
    </head>
    <body>
        <a href="index.php">
            <div style="width: 140px; height: 35px;">
                <img style="position: relative; left: 5px;" src="file/img/arrow.png">
                <img style="position: relative; left: 15px; top: 5px" src="file/img/logo.png">
            </div>
        </a>
        <div style="width: 1406px; height: 750px; background: #2b2b2b; border-radius: 18px; margin-left: auto; margin-right: auto; margin-top: 75px; align-content: center;">
            <div style="width: auto; height: 70px; position: relative; bottom: 0px; text-align: center;">
                <a style="font-size: 48px; font-family: Papa; color: white"><b>Личный</b> кабинет</a>
            </div>
            <div style="width: 40%; height: 80%; position: relative; top: 150px">
                <form action="file/php/change.php" method="post" id="changeForm">
                    <a class="input-text" style="left: 85px; top: -75px;"><b>Почта</b></a>
                    <a class="input-text" style="left: 85px; top: 10px;"><b>Имя</b></a>
                    <a class="input-text" style="left: 85px; top: 100px;"><b>Телефон</b></a>
                    <?
                        require_once('file/php/db.php');
                        
                        $access = $_COOKIE['access'];
                        echo '<input style="margin-bottom: 50px;" type="login" class="input-login" placeholder="'.$access.'" name="changeLogin">';

                        $sql = "SELECT `name` FROM `users` WHERE `mail` = '$access'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $name = $row['name'];
                            if ($name == '') {
                                echo '<input style="margin-bottom: 50px;"type="text" class="input-login" placeholder="Введите ваше имя" name="changeName">';
                            }
                            else {
                                echo '<input style="margin-bottom: 50px;"type="text" class="input-login" placeholder="'.$name.'" name="changeName">';
                            }
                        }

                        $sql = "SELECT `number` FROM `users` WHERE `mail` = '$access'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $number = $row['number'];
                            if ($number == '') {
                                echo '<input type="text" class="input-login" placeholder="Введите ваш номер" name="changeTelephone">';
                            }
                            else {
                                echo '<input type="text" class="input-login" placeholder="'.$number.'"  name="changeTelephone">';
                            }
                        }
                    ?>
                </form>
                <a href="file/php/exit.php" class="input-button">Выход</a>

                <a class="input-button change" style="left: 290px; bottom: 230px;">Изменить</a>
                <a class="input-button change" style="left: 188px; bottom: 143px;">Изменить</a>
                <a class="input-button change" style="left: 86px; bottom: 57px;">Изменить</a>
            </div>
            <div style="position: absolute; left: 40%; top: 41%">
                <a class="input-text"><b>Билеты</b></a>
                <img style="position: relative; left: 95px; top: 30px" src="file/img/сontainer.png">
                <img style="position: relative; left: 0px; top: 20px" src="file/img/qr.png">
                <img style="position: relative; left: 95px; top: 60px" src="file/img/сontainer.png">
                <img style="position: relative; left: 0px; top: 50px" src="file/img/qr.png">
            </div>
            <div>
                <a style="font-family: Papa; font-size: 25px; position: absolute; left: 750px; bottom: 330px;">ОСКАР 2020</a>
                <a style="font-family: Papa; font-size: 25px; position: absolute; left: 900px; bottom: 330px;">Забронирован</a>
                <a style="font-family: Papa; font-size: 25px; position: absolute; left: 750px; bottom: 280px;">Театр “Большой театр”</a>
                <a style="font-family: Papa; font-size: 25px; position: absolute; left: 750px; bottom: 230px;">06/06 2024</a>
                <a style="font-family: Papa; font-size: 25px; position: absolute; left: 900px; bottom: 230px;">место: а11</a>
            </div>
            <div style="position: relative; top: 150px; left: -50px;">
                <a style="font-family: Papa; font-size: 25px; position: absolute; left: 750px; bottom: 330px;">ОСКАР 2020</a>
                <a style="font-family: Papa; font-size: 25px; position: absolute; left: 900px; bottom: 330px;">Забронирован</a>
                <a style="font-family: Papa; font-size: 25px; position: absolute; left: 750px; bottom: 280px;">Театр “Большой театр”</a>
                <a style="font-family: Papa; font-size: 25px; position: absolute; left: 750px; bottom: 230px;">02/08 2024</a>
                <a style="font-family: Papa; font-size: 25px; position: absolute; left: 900px; bottom: 230px;">место: б8</a>
            </div>
            <a href="login.html" class="input-button" style="left: 1100px;">Оплатить</a>
        </div>
        <div style="width: 1110px; height: 48px; margin-left: auto; margin-right: auto; margin-top: 55px;">
            <hr style="color: #565656">
            <a style="color: #989898; font-family: PapaRegular; font-size: 12; text-align: left;">(с) Все права защищены. AMFITEATR. 2024</a>
            <a style="color: #989898; font-family: PapaRegular; font-size: 12; text-align: right; position: relative; left: 53%;">Разработано Sility</a>
        </div>
        <script src="file/js/script.js"></script>
    </body>
</html>