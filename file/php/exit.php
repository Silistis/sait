<?
setcookie('access', 'error', time() + 3600, '/amfiteatr');

header("Location: ../../index.php");