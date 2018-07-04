<html>
<head>
<title>Ludothèque</title>
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>



<body>


<div class="title">
<br/>
<h1 class="inlinenom">Ludothèque de l'université</h1>
<h1 class="inlinetile">Information</h1>

</div>
<div class="lien">
<hr/>
		<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="ludotheque.html">acceuil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="info.php">infomation</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="horaires.php">horaires</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="chercher.html">chercher</a></h2>
<hr/>
</div>


<div class="textimg">
<img class="tex" src="info.png" />
</div>
<br/>
<div class="textinfo">
<div class="textposition">

<table class="info"><caption>Jeux actuelle</caption><tr class="info"><th>Nom du jeux</th><th>Joueur</th><th>Age</th><th>Type</th><th>Nombre disponible</th></tr><tr>
    
<?php
$requete="SELECT * FROM VR_grp10_Jeux";

$Serveur="info.univ-lemans.fr";
$Utilisateur="info201a_user";
$MotDePasse="com72";

$LienBase=mysql_connect($Serveur,$Utilisateur,$MotDePasse);

$retour=mysql_select_db("info201a",$LienBase);

if(!$retour){
echo "impossible de connecter";}

$Reponse = mysql_query($requete,$LienBase);


while($r=mysql_fetch_array($Reponse)){
    echo '<tr>';
    echo '<th>'.$r[0].'</th>';
    echo '<th>'.$r[1].'</th>';
    echo '<th>'.$r[2].'</th>';
    echo '<th>'.$r[3].'</th>';
    
    
    $requete2="SELECT * FROM VR_grp10_JeuxLudotheque";

    $Reponse2 = mysql_query($requete2,$LienBase);

    $today=date("Y-m-d");
    
    while($r2=mysql_fetch_array($Reponse2)){
        if($r2[0]==$r[0]){
        $nom=$r2[0];
        $reste=$r2[2];
  
        echo "<th>Il reste ".$reste." </th>";
    }
    
    }
    
    echo '</tr>';
}







?>
    
    </table>
    

</div>

</div>
<br/>
<br/>
</body>

</html>
