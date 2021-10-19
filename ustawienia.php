<?php
session_start();

    if(empty($_SESSION['zalogowany'])){
        header("Location: logowanie.php");
        exit();
    }
    if(!empty($_SESSION['zalogowany'] && $_POST)){
    $kolor = isset($_POST['kolor']) ? $_POST['kolor'] : '';
    $czcionka = isset($_POST['czcionka']) ? $_POST['czcionka'] : '';
    $wielkosc = isset($_POST['wielkosc']) ? $_POST['wielkosc'] : '';

    $_SESSION['kolor'] = $kolor;
    $_SESSION['czcionka'] = $czcionka;
    $_SESSION['wielkosc'] =$wielkosc;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ustawienia</title>
</head>

<body>
    <ul id="menu">
        <li><a href="tekst.php">Tekst</a></li>
        <li><a href="ustawienia.php">Ustawienia</a></li>
    </ul>
    <form action="ustawienia.php" method="post">
        <div id="tresc">
            <table cellpadding="4">
                <tr>
                    <td>Kolor tla strony:</td>
                    <td>
                        <input type="radio" name="kolor" value="#BAFF49"/> <span style="background-color: #BAFF49">#BAFF49</span><br />
                        <input type="radio" name="kolor" value="#8E9BFF"/> <span style="background-color: #8E9BFF">#8E9BFF</span><br />
                        <input type="radio" name="kolor" value="#FFEFBF"/> <span style="background-color: #FFEFBF">#FFEFBF</span><br />
                    </td>
                </tr>
                <tr>
                    <td>Krój czcionki:</td>
                    <td>
                        <select name="czcionka">
                            <option value="Verdana">Verdana</option>
                            <option value="Arial">Arial</option>
                            <option value="CourierNew">Courier New</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Wielkość czcionki:</td>
                    <td><input type="text" style="width: 30px" name="wielkosc" />px</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Zapisz" name="submit"/></td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>