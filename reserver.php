<p><?php
    $nom=$_POST["nom"];
    $date=$_POST["date"];
    $mail=$_POST["mail"];
    $jeux=$_POST["jeux"];



    
$requete="SELECT * FROM Paniers";
$requetedis="SELECT * FROM JeuxLudothèque";
$Serveur="localhost:8889";
$Utilisateur="webspi";
$MotDePasse="123";

$LienBase=mysql_connect($Serveur,$Utilisateur,$MotDePasse);

$retour=mysql_select_db("ludo",$LienBase);

if(!$retour){
echo "impossible de connecter";}

$Reponse = mysql_query($requete,$LienBase);
$Reponsedis = mysql_query($requetedis,$LienBase);

    while($rdis=mysql_fetch_array($Reponsedis)){
        if($rdis[0]==$jeux){
            $ndisp=$rdis[2];
        }
    }
 $today=date("Y-m-d");
    $possible=1;
while($r=mysql_fetch_array($Reponse)){
    if($jeux==$r[0]){
        if(strtotime($date)<strtotime($today)){
                    $possible=0;
                   
        }  
        if($ndisp<=0){
            $possible=0;
            
        }   
    }
}
     if(strtotime($date)<strtotime($today)){
         echo 'Choisir une date dans la future. ';
     }
     if($ndisp<=0){
        echo 'Les jeux sont touts en réservé. ';
     }
    
    
    
    if($possible==0){
        echo " Veuillez chiosir un autre date ou jeux.";
        echo "<a href ='horaires.php'>Retourner a la page précédent.</a>";
    }
    else{
       $requete="INSERT INTO `Paniers` (`Nom`, `Client`, `Admail`, `Creneau`) VALUES ('".$jeux."', '".$nom."', '".$mail."', '".$date."');";
        $requetedis="UPDATE JeuxLudothèque SET NbJeuxDispos=NbJeuxDispos-1 WHERE Nom='".$jeux."';";
         $Reponses = mysql_query($requete,$LienBase);
        $Reponsesdis = mysql_query($requetedis,$LienBase);
           echo "Réservation succés.";
        
        echo "<a href ='horaires.php'>Retourner a la page précédent.</a>";
    }
    
    
    
    
    
    
    ?></p>