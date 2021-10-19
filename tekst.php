<?php
    session_start();

    if (empty($_SESSION['zalogowany'])) {
        header("Location: logowanie.php");
        exit();
    }
    
    
    $kolor = $_SESSION['kolor'];
    $czcionka =  $_SESSION['czcionka'];
    $wielkosc = $_SESSION['wielkosc'];

    
    //exit();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Tekst</title>
</head>
<body>
    <a href="ustawienia.php">Ustawienia strony</a>
    <br>
    <a href="tekst.php">Tekst</a>
    
    
    <div id="tresc" 
		style=	"color: <?php if(!empty($kolor)){echo $kolor;}else{echo 		"black";}?>; 
				font-family: <?php if(!empty($czcionka)){echo $czcionka;}else{echo "Arial";}?>; 
				font-size: <?php if(!empty($wielkosc)){echo $wielkosc;}else{echo "12";}?>px">

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra dui ac ipsum aliquet iaculis. Quisque ac
			neque nisi. Curabitur vulputate, dui ut congue molestie, leo enim dapibus lacus, a scelerisque quam tellus
			sit amet magna. Mauris a orci tellus, non facilisis nibh. In porta elit quis dolor elementum congue. Cum
			sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Duis
			faucibus tincidunt tellus, rhoncus facilisis nibh tincidunt ac. Integer lacinia magna in lacus scelerisque
			pellentesque. Nam congue auctor urna. Vivamus vulputate lacus ut sapien laoreet hendrerit. Maecenas at ante
			velit. Etiam ligula nisl, pretium vel viverra at, fermentum sed sapien. Cras ligula ipsum, ultrices non
			congue eu, aliquam sit amet nisl. Sed tempus pharetra elit id fermentum. Nullam semper libero vitae elit
			fermentum euismod scelerisque ligula tempus. Vestibulum non ullamcorper est. Donec sit amet varius odio.
			Nulla dapibus sollicitudin velit nec varius. Nunc bibendum volutpat diam id accumsan.</p>

		<p>Aliquam elementum lobortis diam eu malesuada. Vivamus facilisis metus non tellus accumsan ultrices. Morbi in
			orci ante. Nulla auctor dictum ipsum, a varius sapien suscipit in. Integer lacinia, dui a ultrices posuere,
			sem nunc condimentum nunc, eget ullamcorper felis libero id elit. Etiam tempor feugiat sem, in semper tellus
			tempor eu. Aliquam ullamcorper pulvinar nisi et scelerisque. Nullam aliquam arcu et sem mattis nec gravida
			turpis viverra. Suspendisse a lobortis quam. Maecenas dictum, tellus eget vehicula consequat, est ipsum
			fringilla lorem, non blandit justo justo vitae felis. Curabitur pellentesque sodales risus, et aliquet erat
			porta et. Donec accumsan enim in turpis ultricies iaculis.</p>

		<p>Donec tempus sollicitudin nulla, vulputate pulvinar augue venenatis ut. Nullam scelerisque diam eget felis
			rhoncus non tempus sem consequat. Ut eleifend, lacus nec porta ultrices, odio sapien rhoncus nibh, eget
			commodo ligula erat a quam. Nulla dui nunc, vehicula eget condimentum et, blandit non arcu. Integer rhoncus
			eros ut leo tincidunt et tincidunt purus accumsan. Sed auctor ultricies quam ut fringilla. Quisque eget
			sapien massa, vitae aliquet ligula. Cras cursus convallis tellus quis rhoncus. In lectus turpis, interdum
			vel pellentesque molestie, suscipit eu nulla. Sed posuere massa at lacus scelerisque vel tempor risus
			semper. Nulla semper, leo sed dapibus aliquet, purus nisi pulvinar nisi, sed lacinia felis diam fringilla
			lacus. Donec at ipsum eros, nec pulvinar orci. Curabitur congue vulputate libero quis fringilla. Sed
			faucibus pharetra sapien porttitor fringilla. Proin ut sapien ac urna accumsan cursus. Nulla enim nisl,
			condimentum sit amet tempus at, vulputate non urna. Proin nec posuere arcu. Morbi elementum elit ligula.
		</p>
	</div>

	<?php
	echo "i Love php";
	
	?>
</body>
</html>