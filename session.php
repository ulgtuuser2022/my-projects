<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Сессия</title>
</head>
<body>
<?php
/////////////////////////////////////////
$logS = "admin";
$passS = "homeworks";
$logC = $_COOKIE['login'];
$passC = $_COOKIE['password'];
/////////////////////////////////////////
$login = $_POST['login'];
$password = $_POST['password'];


if(($logC == null and $passC == null) and ($login == $logS and $password == $passS)){
setcookie("login", $login, time()+3600);
setcookie("password", $password, time()+3600);
}

if(($login == $logS and $password == $passS) or ($logC == $logS and $passC == $passS)){
echo "Успешно!";
}
?>
</body>
</html>