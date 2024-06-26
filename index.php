<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AMFITEATR: Главная страница</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="file/img/logo.ico" type="image/png">
        <style>
            body { 
                margin: 0; 
            }
        </style>
        <script src="file/js/lib/jQuery.js"></script>
        <script src="file/js/lib/inputMask.js"></script>
    </head>
    <body>
        <div>
            <img src="file/img/backgraund.png" style="width: 100%; height: 1045px;">
            <img src="file/img/panel.png" style="position: absolute; left: 0px; height: 1045px;">
            <img src="file/img/logo.png" style="position: absolute; left: 215px; top: 15px">
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
            <input type="search" name="search" style="position: absolute; right: 100px; top: 15px" class="input-searh" placeholder="Поиск">
        </div>
        <div style="position: absolute; background: red; width: 800px; left: 25%; bottom: 35%">
            <a style="font-size: 30px; font-family: PapaRegular; position: absolute; color: white;">ПОКУПКА БИЛЕТОВ</a>
            <a style="font-size: 15px; font-family: Papa; position: absolute; color: white; width: 60%; top: 55px">Amfiteatr — это компания, которая занимается организацией бронирования и продажей билетов на спектакли в театрах России. Мы помогаем нашим клиентам выбрать лучшие места и наслаждаться яркими представлениями. Наша команда профессионалов заботится о вашем комфорте и делает процесс покупки билетов максимально удобным и быстрым.</a>
            <img src="file/img/first-screen__slider.png" style="position: absolute; left: 550px; top: -150px">
        </div>
        <div style="height: 1850px;">
            <div style="width: auto; height: 70px; position: relative; bottom: -50px; text-align: center;">
                <a style="font-size: 48px; font-family: Papa; color: white"><b>Ближайшие</b> постановки</a>
            </div>
            <img src="file/img/stars.png" style="position: absolute; top: 1100px; right: 55px;">
            <div style="width: 100%; height: 100%; position: relative; top: 75px">
                <div class="flex-container-t">
                    <div class="flex-container-t">
                        <div>
                            <img src="file/img/Rectangle 15.png" style="width: 442px; height: 550px;">
                            <a href="booking.php" class="input-button" style="position: relative; left: 150px; bottom: 230px">Купить</a>
                            <div style="position: relative;">
                                <a style="font-size: 30px; font-family: Papa; position: absolute; color: white; left: 480px; top: -515px;">ОСКАР 2020</a>
                                <a style="font-size: 30px; font-family: Papa; position: absolute; color: white; left: 480px; top: -475px;"><b>Театр ”Большой театр”</b></a>
                                <a style="font-size: 15px; font-family: Papa; position: absolute; color: white; left: 480px; top: -430px; text-align: justify; width: 55%;">«Щелкунчик» Петра Ильича Чайковского увидел свет рампы в Мариинском театре 6 декабря 1892 года в один вечер с оперой «Иоланта». Либретто  по мотивам сказки Эрнста Теодора Амадея Гофмана в вольном переводе  Александра Дюма сочинил Мариус Петипа. Участие в разработке сценария  принимал директор Императорских театров Иван Александрович Всеволожский,  в литературную форму их идеи и замыслы облёк брат композитора, Модест  Ильич Чайковский. Хореография принадлежала Льву Иванову.</a>
                                <a style="font-size: 20px; font-family: Papa; position: absolute; color: white; left: 480px; top: -325px;"><b>Дата</b> 22.07.2023</a>
                                <a style="font-size: 20px; font-family: Papa; position: absolute; color: white; left: 680px; top: -325px;"><b>Время</b>  10:00</a>
                                <a style="font-size: 30px; font-family: Papa; position: absolute; color: white; left: 480px; top: -265px;">От 500 руб</a>
                                <a style="font-size: 30px; font-family: Papa; position: absolute; color: white; left: 740px; top: -265px;">ОЦЕНКА: 4.7</a>
                                <img src="file/img/Vector.png" style="width: 41px; height: 41px; position: absolute; left: 880px; top: -265px">
                            </div>
                        </div>
                        <div>
                            <img src="file/img/projects__item.png" style="width: 442px; height: 550px;">
                            <a href="booking.php" class="input-button" style="position: relative; left: 150px; bottom: 230px">Купить</a>
                            <div style="position: relative;">
                                <a style="font-size: 30px; font-family: Papa; position: absolute; color: white; left: 480px; top: -515px;">ОСКАР 2020</a>
                                <a style="font-size: 30px; font-family: Papa; position: absolute; color: white; left: 480px; top: -475px;"><b>Театр ”Большой театр”</b></a>
                                <a style="font-size: 15px; font-family: Papa; position: absolute; color: white; left: 480px; top: -430px; text-align: justify; width: 55%;">«Щелкунчик» Петра Ильича Чайковского увидел свет рампы в Мариинском театре 6 декабря 1892 года в один вечер с оперой «Иоланта». Либретто  по мотивам сказки Эрнста Теодора Амадея Гофмана в вольном переводе  Александра Дюма сочинил Мариус Петипа. Участие в разработке сценария  принимал директор Императорских театров Иван Александрович Всеволожский,  в литературную форму их идеи и замыслы облёк брат композитора, Модест  Ильич Чайковский. Хореография принадлежала Льву Иванову.</a>
                                <a style="font-size: 20px; font-family: Papa; position: absolute; color: white; left: 480px; top: -325px;"><b>Дата</b> 22.07.2023</a>
                                <a style="font-size: 20px; font-family: Papa; position: absolute; color: white; left: 680px; top: -325px;"><b>Время</b>  10:00</a>
                                <a style="font-size: 30px; font-family: Papa; position: absolute; color: white; left: 480px; top: -265px;">От 500 руб</a>
                                <a style="font-size: 30px; font-family: Papa; position: absolute; color: white; left: 740px; top: -265px;">ОЦЕНКА: 4.7</a>
                                <img src="file/img/Vector.png" style="width: 41px; height: 41px; position: absolute; left: 880px; top: -265px">
                            </div>
                        </div>
                        <div>
                            <img src="file/img/projects__item-1.png" style="width: 442px; height: 550px;">
                            <a href="booking.php" class="input-button" style="position: relative; left: 150px; bottom: 230px">Купить</a>
                            <div style="position: relative;">
                                <a style="font-size: 30px; font-family: Papa; position: absolute; color: white; left: 480px; top: -515px;">ОСКАР 2020</a>
                                <a style="font-size: 30px; font-family: Papa; position: absolute; color: white; left: 480px; top: -475px;"><b>Театр ”Большой театр”</b></a>
                                <a style="font-size: 15px; font-family: Papa; position: absolute; color: white; left: 480px; top: -430px; text-align: justify; width: 55%;">«Щелкунчик» Петра Ильича Чайковского увидел свет рампы в Мариинском театре 6 декабря 1892 года в один вечер с оперой «Иоланта». Либретто  по мотивам сказки Эрнста Теодора Амадея Гофмана в вольном переводе  Александра Дюма сочинил Мариус Петипа. Участие в разработке сценария  принимал директор Императорских театров Иван Александрович Всеволожский,  в литературную форму их идеи и замыслы облёк брат композитора, Модест  Ильич Чайковский. Хореография принадлежала Льву Иванову.</a>
                                <a style="font-size: 20px; font-family: Papa; position: absolute; color: white; left: 480px; top: -325px;"><b>Дата</b> 22.07.2023</a>
                                <a style="font-size: 20px; font-family: Papa; position: absolute; color: white; left: 680px; top: -325px;"><b>Время</b>  10:00</a>
                                <a style="font-size: 30px; font-family: Papa; position: absolute; color: white; left: 480px; top: -265px;">От 500 руб</a>
                                <a style="font-size: 30px; font-family: Papa; position: absolute; color: white; left: 740px; top: -265px;">ОЦЕНКА: 4.7</a>
                                <img src="file/img/Vector.png" style="width: 41px; height: 41px; position: absolute; left: 880px; top: -265px">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 1110px; height: 48px; margin-left: auto; margin-right: auto; margin-top: 55px;">
            <hr style="color: #565656">
            <a style="color: #989898; font-family: PapaRegular; font-size: 12; text-align: left;">(с) Все права защищены. AMFITEATR. 2024</a>
            <a style="color: #989898; font-family: PapaRegular; font-size: 12; text-align: right; position: relative; left: 53%;">Разработано Sility</a>
        </div>
        <script src="file/js/script.js"></script>
    </body>
</html>