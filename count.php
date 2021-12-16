<html> 
  <head> 
    <title>Bezoek teller</title> 
 </head> 
<body> 

<?php 


if (!isset($_COOKIE['count'])) { 
    echo "Hallo dit is de eerste keer dat je een pagina bezoekt"; 
    $cookie = 1;
    setcookie("count", $cookie);
} else {
    $cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie); 
    echo "Je hebt deze pagina al " . $_COOKIE['count'] . " keer bezocht"; 
}
?> 

  </body> 
</html>

