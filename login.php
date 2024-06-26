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
    <body>
        <a href="index.php">
            <div style="width: 140px; height: 35px;">
                <img style="position: relative; left: 5px;" src="file/img/arrow.png">
                <img style="position: relative; left: 15px; top: 5px" src="file/img/logo.png">
            </div>
        </a>
        <div style="width: 539px; height: 489px; background: #2b2b2b; border-radius: 18px; margin-left: auto; margin-right: auto; margin-top: 75px; align-content: center;">
            <div style="width: auto; height: 70px; position: relative; bottom: 75px; text-align: center;">
                <a style="font-size: 48px; font-family: Papa; color: white"><b>Вход</b> в личный кабинет</a>
            </div>
            <form action="file/php/login.php" method="post">
                <input type="login" class="input-login" placeholder="Email" name="email">
                <input type="password" class="input-login" placeholder="Password" name="password">
                <button class="input-button">Войти</button>
            </form>
            <a href="register.php" class="reglink">Создать учетную запись?</a>
        </div>
        <div style="width: 1110px; height: 48px; margin-left: auto; margin-right: auto; margin-top: 55px;">
            <hr style="color: #565656">
            <a style="color: #989898; font-family: PapaRegular; font-size: 12; text-align: left;">(с) Все права защищены. AMFITEATR. 2024</a>
            <a style="color: #989898; font-family: PapaRegular; font-size: 12; text-align: right; position: relative; left: 53%;">Разработано "SILITY"</a>
        </div>
        <script src="file/js/script.js"></script>
    </body>
</html>