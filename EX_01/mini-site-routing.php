<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>mini-site-routing</title>
</head>

<body>
    <h2>NAVIGATION </h2>
    <nav class="menu">
        <li><a href="mini-site-routing.php?page=1">Accueil</a></li><br/>
        <li><a href="mini-site-routing.php?page=2">Page 1</a></li><br/>
        <li><a href="mini-site-routing.php?page=3">Page 2</a></li><br/>
        <li><a href="mini-site-routing.php?page=connexion">Page Connexion</a></li><br/>
    </nav>

    <?php
    if($_GET["page"]== "1")
    {
        echo "<h1>Accueil !</h1>";
        //afficher page d'accueil
    }
    elseif($_GET["page"]== "2")
    {
        echo "<h1>Page 2 !</h1>";
        //afficher page 2
    }
    elseif($_GET["page"]== "3")
        echo "<h1>Page 3 !</h1>";
        //afficher page 3
    
    elseif($_GET['page']=='connexion')
        {
            echo'<h1>Connexion</h1>';
            //afficher page connexion
            include ("connexion.php");
        }
    
    ?>
</h1>
<p>
<?php
if(array_key_exists('id',$_SESSION){
    echo'Login; '.$_SESSION ['id'];
}

if(array_key_exists('id',$_SESSION)){
    if($cooki)
    if(empty($_COOKIE["$cleid[0]"])==false){
}
}
?>
</html>