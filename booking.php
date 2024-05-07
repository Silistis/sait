<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AMFITEATR: Авторизация</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="file/img/logo.ico" type="image/png">
        <script src="file/js/lib/jQuery.js"></script>
        <script src="file/js/lib/inputMask.js"></script>
    </head>
    <?
        require_once('file/php/db.php');
    ?>
    <body>
        <a href="index.php">
            <div style="width: 140px; height: 35px;">
                <img style="position: relative; left: 5px;" src="file/img/arrow.png">
                <img style="position: relative; left: 15px; top: 5px" src="file/img/logo.png">
            </div>
        </a>
        <?
                require_once('file/php/db.php');
                $access = $_COOKIE['access'];
                $sql = "SELECT `userStatus` FROM `users` WHERE `mail` = '$access'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $status = $row['userStatus'];
                    if ($status = '1') {
                        echo '<a style="font-size: 20px; font-family: Papa; color: white; position: absolute; right: 300px; top: 15px" href="profile.php">'.$access.'</a>';
                    }
                } else {
                    echo '<a style="font-size: 20px; font-family: Papa; color: white; position: absolute; right: 300px; top: 15px" href="register.php">Войти</a>';
                }
            ?>
        <div style="width: auto; height: 70px; position: relative; bottom: 0px; text-align: center;">
            <a style="font-size: 48px; font-family: Papa; color: white"><b>Опера</b> "Щелкунчик"</a>
        </div>
        <div style="width: 1500.99px; height: 1100px; margin-left: auto; margin-right: auto;">
            <img style="position: relative; left: 15px; top: 5px" src="file/img/preview_1.png">
            <a style="font-size: 25px; font-family: Papa; position: absolute; left: 45%; top: 120px; color: white;">ОСКАР 2020</a>
            <a style="font-size: 25px; font-family: Papa; position: absolute; left: 45%; top: 150px;"><b>Театр ”Большой театр”</b></a>
            <a style="font-size: 20px; font-family: Papa; position: absolute; left: 45%; top: 190px; color: white; text-align: justify; width: 52%;">«Щелкунчик» Петра Ильича Чайковского увидел свет рампы в Мариинском театре 6 декабря 1892 года в один вечер с оперой «Иоланта». Либретто по мотивам сказки Эрнста Теодора Амадея Гофмана в вольном переводе Александра Дюма сочинил Мариус Петипа. Участие в разработке сценария принимал директор Императорских театров Иван Александрович Всеволожский, в литературную форму их идеи и замыслы облёк брат композитора, Модест Ильич Чайковский. Хореография принадлежала Льву Иванову.</a>
            <a style="font-size: 18px; font-family: Papa; position: absolute; left: 45%; top: 330px; color: white;"><b>Дата:</b> 22.07.2023</a>
            <a style="font-size: 18px; font-family: Papa; position: absolute; left: 55%; top: 330px; color: white;"><b>Время:</b>10:00</a>
            <a style="font-size: 45px; font-family: Papa; position: absolute; left: 45%; top: 540px; color: white;">от 500₽</a>
            <div style="width: auto; height: 70px; position: relative; bottom: 0px; text-align: center;">
                <a style="font-size: 48px; font-family: Papa; color: white; top: 55px; position: relative;"><b>Выберете</b> место</a>
            </div>
            <a style="font-size: 30px; font-family: Papa; position: absolute; left: 11%; top: 800px; color: white;">15:00</a>

            <a style="font-size: 30px; font-family: Papa; position: absolute; left: 2%; top: 800px; color: white; position: absolute; left: 1020px;">Занято</a>
            <a style="font-size: 30px; font-family: Papa; position: absolute; left: 2%; top: 800px; color: white; position: absolute; left: 1150px;">Не занято</a>
            <a style="font-size: 30px; font-family: Papa; position: absolute; left: 2%; top: 800px; color: white; position: absolute; left: 1300px;">Выбрано</a>
            <div style="position: absolute; background: #D1A954; width: 25px; height: 25px; top: 810px; right: 510px;"></div>
            <div style="position: absolute; background: transparent; width: 25px; height: 25px; top: 810px; right: 375px; border: 1px solid #616161;"></div>
            <div style="position: absolute; background: #D89B19; width: 25px; height: 25px; top: 810px; right: 225px;"></div>
            <div style="width: 1500px; height: 250px; position: relative; top: 180px; left: 10%;">
                <div class="flex-container">
                    <?
                        $placeSql = "SELECT `row`, `rowId`, `status` FROM `place`";
                        $result = $conn->query($placeSql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $seats = strval($row["row"]) . strval($row["rowId"]);
                                if ($row["rowId"] <= 10 && $row["row"] == 'a' && $row['status'] == 1) {
                                    echo '<div class="place placeOccupied">'.strtoupper($seats).'</div>';
                                } else if ($row["rowId"] <= 10 && $row["row"] == 'a' && $row['status'] == 0){
                                    echo '<div class="place">'.strtoupper($seats).'</div>';
                                }
                            }
                        }
                    ?>
                </div>
                <div class="flex-container">
                <?
                        $placeSql = "SELECT `row`, `rowId`, `status` FROM `place`";
                        $result = $conn->query($placeSql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $seats = strval($row["row"]) . strval($row["rowId"]);
                                if ($row["rowId"] <= 10 && $row["row"] == 'b' && $row['status'] == 1) {
                                    echo '<div class="place placeOccupied">'.strtoupper($seats).'</div>';
                                } else if ($row["rowId"] <= 10 && $row["row"] == 'b' && $row['status'] == 0){
                                    echo '<div class="place">'.strtoupper($seats).'</div>';
                                }
                            }
                        }
                    ?>
                </div>
                <div class="flex-container">
                <?
                        $placeSql = "SELECT `row`, `rowId`, `status` FROM `place`";
                        $result = $conn->query($placeSql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $seats = strval($row["row"]) . strval($row["rowId"]);
                                if ($row["rowId"] <= 10 && $row["row"] == 'c' && $row['status'] == 1) {
                                    echo '<div class="place placeOccupied">'.strtoupper($seats).'</div>';
                                } else if ($row["rowId"] <= 10 && $row["row"] == 'c' && $row['status'] == 0){
                                    echo '<div class="place">'.strtoupper($seats).'</div>';
                                }
                            }
                        }
                    ?>
                </div>
                <div class="flex-container">
                <?
                        $placeSql = "SELECT `row`, `rowId`, `status` FROM `place`";
                        $result = $conn->query($placeSql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $seats = strval($row["row"]) . strval($row["rowId"]);
                                if ($row["rowId"] <= 10 && $row["row"] == 'd' && $row['status'] == 1) {
                                    echo '<div class="place placeOccupied">'.strtoupper($seats).'</div>';
                                } else if ($row["rowId"] <= 10 && $row["row"] == 'd' && $row['status'] == 0){
                                    echo '<div class="place">'.strtoupper($seats).'</div>';
                                }
                            }
                        }
                    ?>
                </div>
            </div>
            <div style="width: 1500px; height: 250px; position: relative; top: -70px; left: 52%;">
                <div class="flex-container">
                    <?
                        $placeSql = "SELECT `row`, `rowId`, `status` FROM `place`";
                        $result = $conn->query($placeSql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $seats = strval($row["row"]) . strval($row["rowId"]);
                                if ($row["rowId"] > 10 && $row["row"] == 'a' && $row['status'] == 1) {
                                    echo '<div class="place placeOccupied">'.strtoupper($seats).'</div>';
                                } else if ($row["rowId"] > 10 && $row["row"] == 'a' && $row['status'] == 0){
                                    echo '<div class="place">'.strtoupper($seats).'</div>';
                                }
                            }
                        }
                    ?>
                </div>
                <div class="flex-container">
                <?
                        $placeSql = "SELECT `row`, `rowId`, `status` FROM `place`";
                        $result = $conn->query($placeSql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $seats = strval($row["row"]) . strval($row["rowId"]);
                                if ($row["rowId"] > 10 && $row["row"] == 'b' && $row['status'] == 1) {
                                    echo '<div class="place placeOccupied">'.strtoupper($seats).'</div>';
                                } else if ($row["rowId"] > 10 && $row["row"] == 'b' && $row['status'] == 0){
                                    echo '<div class="place">'.strtoupper($seats).'</div>';
                                }
                            }
                        }
                    ?>
                </div>
                <div class="flex-container">
                <?
                        $placeSql = "SELECT `row`, `rowId`, `status` FROM `place`";
                        $result = $conn->query($placeSql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $seats = strval($row["row"]) . strval($row["rowId"]);
                                if ($row["rowId"] > 10 && $row["row"] == 'c' && $row['status'] == 1) {
                                    echo '<div class="place placeOccupied">'.strtoupper($seats).'</div>';
                                } else if ($row["rowId"] > 10 && $row["row"] == 'c' && $row['status'] == 0){
                                    echo '<div class="place">'.strtoupper($seats).'</div>';
                                }
                            }
                        }
                    ?>
                </div>
                <div class="flex-container">
                    <?
                        $placeSql = "SELECT `row`, `rowId`, `status` FROM `place`";
                        $result = $conn->query($placeSql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $seats = strval($row["row"]) . strval($row["rowId"]);
                                if ($row["rowId"] > 10 && $row["row"] == 'd' && $row['status'] == 1) {
                                    echo '<div class="place placeOccupied">'.strtoupper($seats).'</div>';
                                } else if ($row["rowId"] > 10 && $row["row"] == 'd' && $row['status'] == 0){
                                    echo '<div class="place">'.strtoupper($seats).'</div>';
                                }
                            }
                        }
                    ?>
                </div>
            </div>
            <a style="font-size: 45px; font-family: Papa; position: absolute; left: 45%; top: 1150px; color: white;"><b>Цена:</b> 500₽</a>
            <?
                $access = $_COOKIE['access'];
                $userSql = "SELECT * FROM `users` WHERE `userStatus` = 1 AND `mail` = '$access'";
                $result = $conn->query($userSql);
                if ($result->num_rows > 0) {
                   echo '<a class="input-button oplata" style="left: 48%; top: 285px">Оплатить</a>' ;
                } else {
                    echo '<a href="login.php" class="input-button" style="left: 48%; top: 285px">Оплатить</a>';
                }
            ?>
        </div>
        <div style="width: 1110px; height: 48px; margin-left: auto; margin-right: auto; margin-top: 55px;">
            <hr style="color: #565656">
            <a style="color: #989898; font-family: PapaRegular; font-size: 12; text-align: left;">(с) Все права защищены. AMFITEATR. 2024</a>
            <a style="color: #989898; font-family: PapaRegular; font-size: 12; text-align: right; position: relative; left: 53%;">Разработано Sility</a>
        </div>
        <form action="file/php/buy.php" id="hiddenForm" method="post">
            <input type="hidden" id="hiddenField" name="chosen">
        </form>
        <script src="file/js/script.js"></script>
    </body>
</html>