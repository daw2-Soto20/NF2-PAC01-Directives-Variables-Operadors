<?php
session_start();
$_SESSION['username1'] = "Oscar";
$_SESSION['pwd'] = 1234;
$_SESSION['year'] = 2019;
$_POST['user'];
$_POST['pass'];
$_POST['year'];
setcookie("usercookie",$_SESSION['username1'],time()+20);
?>
<html>
 <head>
  <title>Buscar mi juego de mesa favorito!</title>
 </head>
 <body>
<?php
$myfavboardgame = urlencode("Five Tribes");
echo "<a href='UF1-NF2-PAC01_SotoOscar_1.php?favboardgame=$myfavboardgame'>";
//echo "Click here to see information about my favorite movie!";
echo "Clica aquí para ver informacion sobre mi juego de mesa favorito!"; 
echo "</a>";
?>
<form method="post" action="UF1-NF2-PAC01_SotoOscar_1.php">
   <p>Entrar usuario: 
    <input type="text" name="user"/>
   </p>
   <p>Entrar la password: 
    <input type="password" name="pass"/>
   </p>
   <p>Entrar el año: 
    <input type="text" name="year"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Enviar formulario"/>
   </p>
  </form>
 </body>
</html>