<?php
session_start();

$login = $_POST['login'] ?? '';
$haslo = $_POST['haslo'] ?? '';


if ($login == 'admin' && $haslo == 'test') {
    // poprawne logowanie
    $_SESSION['zalogowany'] = true;

    header("Location: tekst.php");
    exit();
} else if($login != '' && $haslo != ''){
   echo '<h1> Podaj prawidlowy login lub haslo </h1>';
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logowanie</title>
</head>

<body>
   
    <form action="" method="post">
        <input type="text" name="login" placeholder="Login">
        <br>
        <input type="password" name="haslo" placeholder="Hasło">
        <br>
        <button type="submit">Zaloguj</button>
    </form>
</body>

</html>