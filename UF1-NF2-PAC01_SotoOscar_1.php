<?php
session_start();


?>
<html>
    <head>
        <title>Juegos de Mesa <?php echo $_GET['favboardgame'];?></title>
    </head>
    <body>
<?php
echo "Bienvenido: ";
echo $_SESSION["username1"];
echo " ";
echo $_SESSION["pwd"];
echo " ";
echo $_SESSION["year"];
echo " ";
echo "<br/>";
echo "<br/>";
//echo $_GET['favboardgame'];
$boardgamerate = 8;
echo "Mi juego favorito es: ";
echo $_GET['favboardgame'];
echo "<br/>";
echo "<br/>";
echo "Mi puntuacion para mi juego favorito es: ";
echo $boardgamerate;
echo "<br/>";
echo "<br/>";
echo "Datos del formulario: ";
echo "<br/>";
echo $_POST['user'];
echo "<br/>";
echo $_POST['pass'];
echo "<br/>";
echo $_POST['year'];
echo "<br/>";
echo "<br/>";
echo "Datos cookie: ";
echo $_COOKIE['usercookie'];
echo "<br/>";
echo "<br/>";
echo "El campo usuario del formulario esta vacio: ";
$nombre = $_POST['user'];
if (!empty($nombre)) { //Funcion empty() comprueba si la variable está o no vacia...
    echo 'No y su dato es ';
    echo $nombre;
    //No está vacía (true)
} else {
    echo 'Si';
    //está vacía (false)
}
date_default_timezone_set('Europe/Madrid');
$day = date('d');
$month = date('m');
$year = date('Y');
$space = "/";
echo "<br/>";
echo "<br/>";
echo "La fecha de hoy es: ";
echo $day, $space, $month, $space, $year;
?>
    </body>
</html>