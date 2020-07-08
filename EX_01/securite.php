<?php
$login=$_POST['login'];
$password=$_POST['password'];

if ($password == "2020"){ 
    session_start();
    $_SESSION['id']=$login;
    header('Location:http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php?page=1');
    exit();
   
}
else
{
    echo '<h3>Mauvais couple identifiant / Mot de passe. </h3>';
    echo '<p><a href="http://localhost/ISCC/ISCC-2020-J09/EX_01/connexion.php?page=connexion">Réessayer</a></p>';

}

?>