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
<h1 class="inlinetile">Résultats</h1>

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

<table class="info"><caption>RESULTAT DE RECHERCHE</caption><tr class="info"><th>Nom du jeux</th><th>Joueur(Maximale)</th><th>Age(Minimale)</th><th>Type</th></tr><tr>
    
<?php
    $joueur=$_POST["joueur"];
    $age=$_POST["age"];
    $type=$_POST["type"];
    if($type=="in"){$type="Intérieur";}
    else{$type="Extérieur";}
    
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
    if($age>=$r[2]&&$joueur<=$r[1]&&$type==$r[3]){
    echo '<tr>';
    echo '<th>'.$r[0].'</th>';
    echo '<th>'.$r[1].'</th>';
    echo '<th>'.$r[2].'</th>';
    echo '<th>'.$r[3].'</th>';
    echo '</tr>';
    }
}







?>
    
    </table>
    

</div>

</div>
<br/>
<br/>
</body>

</html>




